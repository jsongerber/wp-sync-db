# WP Sync DB CLI

An addon for [WP Sync DB](https://github.com/hrsetyono/wp-sync-db) that allows you to execute migrations using a function call or via WP-CLI

**Useful Links**

- [How to Install WP-CLI on Windows10 »](https://github.com/hrsetyono/wordpress/wiki/Installing-WP-CLI-on-Windows-10))

## How to Use

- Download this repo and add it to your `wp-content/plugins` directory. Activate it.

- Create a migration profile in WP-Admin.

    ![](https://cdn.pixelstudio.id/wp/syncdb-profiles.png)

- Choose the migration profile you want to do and take note of the number. You will use it in the command:

    ```
    wp wpsdb migrate [profile-number]
    ```

    For example `wp wpsdb migrate 2` will do the migration "Pull from example production".