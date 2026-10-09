=== WP Sync DB ===
Tags: database, migration, sync, export, backup
Tested up to: 7.1
Stable tag: 2.0.9
Requires PHP: 7.3
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

Export, push, and pull to migrate your WordPress databases.

== Description ==

WP Sync DB eliminates the manual work of migrating a WP database. Copy your db from one WP install to another with a single-click in your dashboard. Especially handy for syncing a local development database with a live site.

WP Sync DB exports your database as a MySQL data dump (much like phpMyAdmin), does a find and replace on URLs and file paths, then allows you to save it to your computer, or send it directly to another WordPress instance.

* **Selective sync**: choose which DB tables are migrated.
* **Pull**: replace a local DB with a remote DB.
* **Push**: replace a remote DB with a local DB.
* **Export & backup**: export your DB to an SQL file.
* **Encrypted transfers**: requests are signed and verified with HMAC.
* **Automatic find & replace**: URLs and file paths are updated for the new site.
* **Media migration**: media files can be copied between installations.
* **WP-CLI support**: run migrations from the command line.

See the [GitHub repository](https://github.com/jsongerber/wp-sync-db) for full documentation.

== Installation ==

= Using composer =

`composer require jsongerber/wp-sync-db`

= Using Git Updater =

1. Install [Git Updater](https://github.com/afragen/git-updater) from its [latest release](https://github.com/afragen/git-updater/releases).
2. Activate Git Updater, then go to Settings > Git Updater.
3. If asked, enter your license key or click "Activate Free Version".
4. Go to the "Install Plugin" tab.
5. Enter "https://github.com/jsongerber/wp-sync-db" in the "Plugin URI" field, you can leave the other fields blank.
6. Click "Install Plugin", then activate the plugin.

= Manual installation (not recommended) =

You will not receive automatic updates with this method.

1. Download the "wp-sync-db-x.x.x.zip" file (not the "source code" zip) from the [latest release](https://github.com/jsongerber/wp-sync-db/releases/latest).
2. Upload the zip via Plugins > Add New > Upload Plugin.
3. Activate the plugin.

== Changelog ==

= 2.0.9 =
* Fix empty response for tables with binary primary keys.

= 2.0.8 =
* Fix duplicate key errors on tables without an integer primary key.

= 2.0.7 =
* Fix emojis breaking migration.

= 2.0.6 =
* Prevent infinite loop during find & replace on serialized objects with circular references.
* Fix undefined `WP_CLI` constant error when the wp-cli-bundle is installed via composer.

= 2.0.5 =
* Add French translation.
* Make remaining untranslated strings translatable.
* Add action name to profile listing.
* Fix success message alignment for other languages.

= 2.0.4 =
* Fix "Call to undefined function get_plugin_data()" error.

= 2.0.3 =
* Include the composer `lib` directory in the repository.

= 2.0.2 =
* Fix CLI module directory name case.

= 2.0.1 =
* Fix plugin headers for Git Updater.
* Fix class file name case.
* Fix missing `DateInterval`, `DatePeriod` and `Exception` imports.

= 2.0.0 =
* Integrate the media files module into the main plugin.
* Integrate the CLI module, including a profiles command.
* Release zip now includes the composer autoloader.
* Show an error message if the plugin was installed from the wrong zip.
