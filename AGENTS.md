# CLAUDE.md

This file provides guidance to agents when working with code in this repository.

## Project

WP Sync DB is a WordPress plugin (a GPL fork of WP Migrate DB Pro) that exports, pushes, and pulls WordPress databases between installs, with find/replace of URLs and paths (including inside serialized data). It also has a media files module and a WP-CLI module, both now built into the main plugin. The fork is in maintenance mode: bug fixes and security patches only, no new features planned.

## Commands

There is no build step or linter. There is a PHPUnit unit suite, and it runs in CI (`.github/workflows/tests.yml`) on PHP 7.3 (the minimum) and 8.5.

```bash
composer test               # installs tests/vendor, then runs PHPUnit
tests/vendor/bin/phpunit -c tests/phpunit.xml --filter <name>   # run a single test
composer install            # vendor dir is lib/ (set in composer.json); dev deps are only WP/WP-CLI stubs for IDEs
```

- Test dependencies (PHPUnit 9.6, Brain Monkey) live in their own Composer project in `tests/composer.json`. Their vendor dir, `tests/vendor/`, is gitignored. Keep it that way: putting them in the root `require-dev` would rewrite the committed `lib/composer/*` files. That lock is pinned to PHP 7.3, so don't use syntax or APIs newer than 7.3, in tests or in `src/`.
- These are unit tests. There's no WordPress and no database. Stub WP functions with Brain Monkey (`Functions\when()`, `Functions\expect()`), and mock `$wpdb` with Mockery when you need it.
- Extend `WPSDB\Tests\TestCase`. Its `make(Class::class)` helper builds a plugin object without running its constructor, since the constructors register hooks and read options. Set any properties the code under test needs directly.
- Test files mirror `src/`: `src/WPSDB_Base.php` → `tests/Unit/WPSDB_BaseTest.php`, `src/Modules/CLI/WPSDB_CLI.php` → `tests/Unit/Modules/CLI/WPSDB_CLITest.php`.

Unit tests don't cover end-to-end flows (a real push/pull between two sites, media sync). Verify those by running the plugin on two WordPress installs, or with WP-CLI:

```bash
wp wpsdb profiles           # list saved migration profiles
wp wpsdb migrate <profile>  # run a saved profile (profiles must be created in the admin UI first)
```

Releases: bump `Version:` in the `wp-sync-db.php` header and `Stable tag:` (plus changelog) in `readme.txt`, then push a `v*` tag. `.github/workflows/release.yml` runs `composer install --no-dev` and attaches `wp-sync-db-<tag>.zip` to the GitHub release. git-updater installs use that release asset (`Release Asset: true` in the plugin header). `lib/autoload.php` must ship with the plugin; if it's missing, `wp-sync-db.php` deactivates itself.

## Architecture

- **Bootstrap** (`wp-sync-db.php`): loads the Composer PSR-4 autoloader (`WPSDB\` → `src/`). On `plugins_loaded` it creates the global `$wpsdb = new WPSDB\WPSDB(...)`, but only in admin or WP-CLI context. It then requires each module's `_load.php`, which creates its own global (`$wpsdb_media_files`, `$wpsdb_cli`) at priority 20. Each `_load.php` also deactivates the old standalone addon plugin if it is still installed.
- **`WPSDB_Base`** (`src/WPSDB_Base.php`): shared plumbing for the core and the modules:
    - `remote_post()` sends multipart POSTs to the other site's `admin-ajax.php`.
    - `create_signature()`/`verify_signature()` do HMAC signing with the shared secret key.
    - `get_tables()`, the temporary table prefix (`_mig_`), and `check_ajax_referer()`.
- **`WPSDB`** (`src/WPSDB.php`, ~2700 lines): almost all of the migration logic. All of it runs through AJAX handlers registered in the constructor:
    - `wp_ajax_wpsdb_*`: called by the local admin UI (`asset/js/script.js`).
    - `wp_ajax_nopriv_wpsdb_*`: called by the _remote_ site. These requests are unauthenticated, so `verify_signature()` against the stored `key` is their only protection. Keep that check in place when you change these handlers.
- **Migration flow**: verify connection → `ajax_initiate_migration` → `ajax_migrate_table` once per table, in chunks (the JS drives the loop) → `ajax_finalize_migration`.
    - `export_table()` builds SQL row by row and applies replacements through `apply_replaces()`/`recursive_unserialize_replace()`, which are serialization-safe.
    - `stow()` buffers the SQL, and `transfer_chunk()` sends it to the remote once the buffer reaches `max_request`.
    - Imported data goes into tables with the temporary prefix. Finalize swaps those tables in and runs the deferred ALTER/constraint queries stored in the `wpsdb_alter_statements` table.
    - Primary-key handling (`get_table_key_columns`, `update_primary_keys`) covers integer, non-integer, and binary keys; recent bug fixes have concentrated here.
- **Modules** (`src/Modules/{MediaFiles,CLI}`): these extend `WPSDB_Base` and hook into the core through WP filters/actions (`wpsdb_*`, `wpsdb_cli_*`). In the browser, they use the small JS hook system in `asset/js/hook.js` (`$.wpsdb.add_action/add_filter/do_action/apply_filters`); `media-files.js` uses it to add steps to the migration. `WPSDB_CLI::cli_migration()` replays the same AJAX handlers by filling in `$_POST` and calling them directly.
- **Compatibility mu-plugin** (`compatibility/wp-sync-db-compatibility.php`): an admin action copies it into `mu-plugins`. It drops blacklisted plugins from `active_plugins` during `wpsdb` AJAX requests.
- **Settings/profiles** are stored in the `wpsdb_settings` option. New keys get backfilled from `$default_settings` in the `WPSDB` constructor, so add any new setting there.
- **Templates** in `template/` (and `src/Modules/MediaFiles/template/`) are rendered via `$this->template()`.

## Conventions

- 2-space indentation, LF line endings (`.editorconfig`). Some older files use tabs; match the file you're editing.
- Text domains: `wp-sync-db` (core), `wp-sync-db-media-files`, and `wp-sync-db-cli`. The CLI is English-only by design. The only translations are `.po`/`.mo` files for en_US and fr_FR in `languages/`, so update them when you add user-facing strings.
- `lib/` (the Composer vendor dir, including the stubs) is committed. `tests/vendor/` is not.

## Working on this codebase

The code is old and messy. Don't refactor it wholesale. Leave each area you touch slightly better and covered by tests.

### Every change is tested

- **Bug fix**: first write a test that reproduces the bug and fails, then make it pass.
- **Behavior change or new behavior**: add tests for the new behavior and update the ones that assert the old one.
- **Pure refactor**: the existing tests must stay green. If the code you're refactoring has no tests, add some first that pin down its current behavior.
- If something truly can't be unit tested (an HTTP round trip to the remote site, the JS-driven loop), say so in the commit or PR and describe the manual verification you did.
- Run `composer test` before you consider a change done.

### How tests should be written

These rules are adapted from Kent Beck's [Test Desiderata](https://testdesiderata.com/):

- **Isolated**: tests don't depend on each other or on run order. Don't leak state through globals or statics. `TestCase` resets `$_POST` and Brain Monkey after each test; reset anything else you set yourself.
- **Deterministic**: no real network, filesystem outside a temp dir, clock, or randomness. Stub them.
- **Fast**: milliseconds per test. No sleeps, no real DB.
- **Behavioral**: assert on observable results, like a return value, generated SQL, a replaced string, or a call to a WP function or `$wpdb`. Don't assert on implementation details.
- **Structure-insensitive**: if you refactor internals without changing behavior, no test should break. Don't assert on private call order, and don't mock the class under test.
- **Specific**: one behavior per test. Name it `test_<behavior>_when_<condition>` (e.g. `test_verify_signature_rejects_data_when_key_differs`) so a failure tells you what broke.
- **Readable**: arrange / act / assert, with literal inputs inline. Write serialized fixtures out in full, e.g. `'a:1:{s:3:"url";s:18:"http://old.example";}'`, rather than generating them. Don't add a shared helper until at least three tests need it.
- **Writable**: if a test is painful to write, the code is too entangled. Extract the logic under test (see below) instead of piling up mocks.
- **Predictive**: prefer realistic inputs (actual URLs, paths, serialized WP options, table rows with binary or non-integer keys) over toy data. Passing tests should mean the migration works.

### Leave the code better than you found it

- Only improve code you're already touching for the task. No drive-by rewrites of unrelated areas.
- When the code you touch duplicates logic found elsewhere, extract it into one function and use it in both places. Look in `WPSDB_Base` first, since that's where shared plumbing for core and modules belongs.
- Pull pure logic (string, SQL, serialization, or key handling) out of AJAX handlers and other large methods into small methods that take arguments and return values, without reading `$_POST` or echoing. Those methods can be unit tested.
- Keep abstraction minimal. Prefer a plain method over a new class, interface, or design pattern. Extract code only when it removes real duplication or makes code testable. A helper with one caller and no test benefit isn't worth it.
- When it's practical, put cleanup in its own commit, separate from the fix, so each is easy to review.
- Don't rename public contracts:
  - `wpsdb_*` / `wpsdb_cli_*` hooks
  - `wp_ajax_*` action names
  - POST field names sent between sites
  - `wpsdb_settings` keys

  Modules, the compatibility mu-plugin, and remote sites running older versions depend on them.

### JavaScript

There are no automated JS tests yet. Write new or changed code in `asset/js/` (and the module JS) so it could be tested later:

- Put logic in small pure functions, separate from DOM/jQuery manipulation and AJAX calls.
- Don't add new globals. Extend behavior through the hook system in `asset/js/hook.js` (`$.wpsdb.add_action/add_filter`).
- Apply the same "leave it better" and deduplication rules as for PHP.
- Verify changes manually in the admin UI, and say how you verified them in the commit or PR.
