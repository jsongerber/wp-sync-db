<?php

define( 'KB_IN_BYTES', 1024 );
define( 'MB_IN_BYTES', 1024 * KB_IN_BYTES );
define( 'GB_IN_BYTES', 1024 * MB_IN_BYTES );
define( 'TB_IN_BYTES', 1024 * GB_IN_BYTES );

define( 'WP_START_TIMESTAMP', microtime( true ) );

define( 'WP_MEMORY_LIMIT', '40M' );

define( 'WP_MAX_MEMORY_LIMIT', '256M' );

define( 'WP_CONTENT_DIR', './wp-content' );

define( 'WP_DEBUG', false );

define( 'WP_DEBUG_DISPLAY', true );

define( 'WP_DEBUG_LOG', false );

define( 'WP_CACHE', false );

define( 'SCRIPT_DEBUG', false );

define( 'MEDIA_TRASH', false );

define( 'SHORTINIT', false );

define( 'WP_FEATURE_BETTER_PASSWORDS', true );

define( 'MINUTE_IN_SECONDS', 60 );
define( 'HOUR_IN_SECONDS', 60 * MINUTE_IN_SECONDS );
define( 'DAY_IN_SECONDS', 24 * HOUR_IN_SECONDS );
define( 'WEEK_IN_SECONDS', 7 * DAY_IN_SECONDS );
define( 'MONTH_IN_SECONDS', 30 * DAY_IN_SECONDS );
define( 'YEAR_IN_SECONDS', 365 * DAY_IN_SECONDS );

define( 'WP_CONTENT_URL', 'https://localhost/wp-content' );

define( 'WP_PLUGIN_DIR', WP_CONTENT_DIR . '/plugins' );

define( 'WP_PLUGIN_URL', WP_CONTENT_URL . '/plugins' );

define( 'PLUGINDIR', 'wp-content/plugins' );

define( 'WPMU_PLUGIN_DIR', WP_CONTENT_DIR . '/mu-plugins' );

define( 'WPMU_PLUGIN_URL', WP_CONTENT_URL . '/mu-plugins' );

define( 'COOKIEHASH', '' );

define( 'USER_COOKIE', 'wordpressuser_' . COOKIEHASH );

define( 'PASS_COOKIE', 'wordpresspass_' . COOKIEHASH );

define( 'AUTH_COOKIE', 'wordpress_' . COOKIEHASH );

define( 'SECURE_AUTH_COOKIE', 'wordpress_sec_' . COOKIEHASH );

define( 'LOGGED_IN_COOKIE', 'wordpress_logged_in_' . COOKIEHASH );

define( 'TEST_COOKIE', 'wordpress_test_cookie' );

define( 'COOKIEPATH', '/' );

define( 'SITECOOKIEPATH', '/' );

define( 'ADMIN_COOKIE_PATH', SITECOOKIEPATH . 'wp-admin' );

define( 'PLUGINS_COOKIE_PATH', '/wp-content/plugins' );

define( 'COOKIE_DOMAIN', false );

define( 'RECOVERY_MODE_COOKIE', 'wordpress_rec_' . COOKIEHASH );

define( 'FORCE_SSL_ADMIN', true );

define( 'AUTOSAVE_INTERVAL', 60 );

define( 'EMPTY_TRASH_DAYS', 30 );

define( 'WP_POST_REVISIONS', true );

define( 'WP_CRON_LOCK_TIMEOUT', 60 );

define( 'TEMPLATEPATH', '/wp-content/themes/default' );

define( 'STYLESHEETPATH', '/wp-content/themes/default' );

define( 'WP_DEFAULT_THEME', 'twentytwenty' );
