<?php
// ./wp-admin/includes/class-ftp.php

define( 'CRLF', "\r\n" );
define( 'FTP_AUTOASCII', -1 );
define( 'FTP_BINARY', 1 );
define( 'FTP_ASCII', 0 );
define( 'FTP_FORCE', true );
define( 'FTP_OS_Unix', 'u' );
define( 'FTP_OS_Windows', 'w' );
define( 'FTP_OS_Mac', 'm' );

// ./wp-admin/includes/plugin.php

define( 'WP_SANDBOX_SCRAPING', true );
define( 'WP_UNINSTALL_PLUGIN', 'file' );

// ./wp-admin/includes/class-pclzip.php

define( 'PCLZIP_READ_BLOCK_SIZE', 2048 );
define( 'PCLZIP_SEPARATOR', ',' );
define( 'PCLZIP_ERROR_EXTERNAL', 0 );
define( 'PCLZIP_TEMPORARY_DIR', '' );
define( 'PCLZIP_TEMPORARY_FILE_RATIO', 0.47 );
define( 'PCLZIP_ERR_USER_ABORTED', 2 );
define( 'PCLZIP_ERR_NO_ERROR', 0 );
define( 'PCLZIP_ERR_WRITE_OPEN_FAIL', -1 );
define( 'PCLZIP_ERR_READ_OPEN_FAIL', -2 );
define( 'PCLZIP_ERR_INVALID_PARAMETER', -3 );
define( 'PCLZIP_ERR_MISSING_FILE', -4 );
define( 'PCLZIP_ERR_FILENAME_TOO_LONG', -5 );
define( 'PCLZIP_ERR_INVALID_ZIP', -6 );
define( 'PCLZIP_ERR_BAD_EXTRACTED_FILE', -7 );
define( 'PCLZIP_ERR_DIR_CREATE_FAIL', -8 );
define( 'PCLZIP_ERR_BAD_EXTENSION', -9 );
define( 'PCLZIP_ERR_BAD_FORMAT', -10 );
define( 'PCLZIP_ERR_DELETE_FILE_FAIL', -11 );
define( 'PCLZIP_ERR_RENAME_FILE_FAIL', -12 );
define( 'PCLZIP_ERR_BAD_CHECKSUM', -13 );
define( 'PCLZIP_ERR_INVALID_ARCHIVE_ZIP', -14 );
define( 'PCLZIP_ERR_MISSING_OPTION_VALUE', -15 );
define( 'PCLZIP_ERR_INVALID_OPTION_VALUE', -16 );
define( 'PCLZIP_ERR_ALREADY_A_DIRECTORY', -17 );
define( 'PCLZIP_ERR_UNSUPPORTED_COMPRESSION', -18 );
define( 'PCLZIP_ERR_UNSUPPORTED_ENCRYPTION', -19 );
define( 'PCLZIP_ERR_INVALID_ATTRIBUTE_VALUE', -20 );
define( 'PCLZIP_ERR_DIRECTORY_RESTRICTION', -21 );
define( 'PCLZIP_OPT_PATH', 77001 );
define( 'PCLZIP_OPT_ADD_PATH', 77002 );
define( 'PCLZIP_OPT_REMOVE_PATH', 77003 );
define( 'PCLZIP_OPT_REMOVE_ALL_PATH', 77004 );
define( 'PCLZIP_OPT_SET_CHMOD', 77005 );
define( 'PCLZIP_OPT_EXTRACT_AS_STRING', 77006 );
define( 'PCLZIP_OPT_NO_COMPRESSION', 77007 );
define( 'PCLZIP_OPT_BY_NAME', 77008 );
define( 'PCLZIP_OPT_BY_INDEX', 77009 );
define( 'PCLZIP_OPT_BY_EREG', 77010 );
define( 'PCLZIP_OPT_BY_PREG', 77011 );
define( 'PCLZIP_OPT_COMMENT', 77012 );
define( 'PCLZIP_OPT_ADD_COMMENT', 77013 );
define( 'PCLZIP_OPT_PREPEND_COMMENT', 77014 );
define( 'PCLZIP_OPT_EXTRACT_IN_OUTPUT', 77015 );
define( 'PCLZIP_OPT_REPLACE_NEWER', 77016 );
define( 'PCLZIP_OPT_STOP_ON_ERROR', 77017 );
define( 'PCLZIP_OPT_CRYPT', 77018 );
define( 'PCLZIP_OPT_EXTRACT_DIR_RESTRICTION', 77019 );
define( 'PCLZIP_OPT_TEMP_FILE_THRESHOLD', 77020 );
define( 'PCLZIP_OPT_ADD_TEMP_FILE_THRESHOLD', 77020 );
define( 'PCLZIP_OPT_TEMP_FILE_ON', 77021 );
define( 'PCLZIP_OPT_ADD_TEMP_FILE_ON', 77021 );
define( 'PCLZIP_OPT_TEMP_FILE_OFF', 77022 );
define( 'PCLZIP_OPT_ADD_TEMP_FILE_OFF', 77022 );
define( 'PCLZIP_ATT_FILE_NAME', 79001 );
define( 'PCLZIP_ATT_FILE_NEW_SHORT_NAME', 79002 );
define( 'PCLZIP_ATT_FILE_NEW_FULL_NAME', 79003 );
define( 'PCLZIP_ATT_FILE_MTIME', 79004 );
define( 'PCLZIP_ATT_FILE_CONTENT', 79005 );
define( 'PCLZIP_ATT_FILE_COMMENT', 79006 );
define( 'PCLZIP_CB_PRE_EXTRACT', 78001 );
define( 'PCLZIP_CB_POST_EXTRACT', 78002 );
define( 'PCLZIP_CB_PRE_ADD', 78003 );
define( 'PCLZIP_CB_POST_ADD', 78004 );
define( 'PCLZIP_CB_PRE_LIST', 78005 );
define( 'PCLZIP_CB_POST_LIST', 78006 );
define( 'PCLZIP_CB_PRE_DELETE', 78007 );
define( 'PCLZIP_CB_POST_DELETE', 78008 );

// ./wp-admin/includes/file.php

define( 'FS_CONNECT_TIMEOUT', 30 );
define( 'FS_TIMEOUT', 30 );
define( 'FS_CHMOD_DIR', ( 0777 | 0755 ) );
define( 'FS_CHMOD_FILE', ( 0777 | 0644 ) );

// ./wp-admin/includes/network.php

define( 'MULTISITE', true );
define( 'SUBDOMAIN_INSTALL', '' );
define( 'DOMAIN_CURRENT_SITE', '' );
define( 'PATH_CURRENT_SITE', '' );
define( 'SITE_ID_CURRENT_SITE', 1 );
define( 'BLOG_ID_CURRENT_SITE', 1 );

// ./wp-admin/includes/export.php

define( 'WXR_VERSION', '1.2' );

// ./wp-admin/customize.php

define( 'IFRAME_REQUEST', true );

// ./wp-admin/admin.php

define( 'WP_ADMIN', true );
define( 'WP_NETWORK_ADMIN', false );
define( 'WP_USER_ADMIN', false );
define( 'WP_BLOG_ADMIN', true );
define( 'WP_LOAD_IMPORTERS', true );
define( 'WP_IMPORTING', true );

// ./wp-admin/async-upload.php

define( 'DOING_AJAX', true );

// ./wp-admin/maint/repair.php

define( 'WP_REPAIRING', true );

// ./wp-admin/network.php
define( 'WP_INSTALLING_NETWORK', true );

// ./wp-admin/user-edit.php

define( 'IS_PROFILE_PAGE', true );

// ./wp-config.php

define( 'DB_NAME', '' );
define( 'DB_USER', '' );
define( 'DB_PASSWORD', '' );
define( 'DB_HOST', 'localhost' );
define( 'DB_CHARSET', 'utf8' );
define( 'DB_COLLATE', '' );
define( 'AUTH_KEY', '' );
define( 'SECURE_AUTH_KEY', '' );
define( 'LOGGED_IN_KEY', '' );
define( 'NONCE_KEY', '' );
define( 'AUTH_SALT', '' );
define( 'SECURE_AUTH_SALT', '' );
define( 'LOGGED_IN_SALT', '' );
define( 'NONCE_SALT', '' );

// ./wp-mail.php

define( 'WP_MAIL_INTERVAL', 300 );

// ./wp-cron.php

define( 'DOING_CRON', true );

// ./xmlrpc.php

define( 'XMLRPC_REQUEST', true );

// ./wp-activate.php

define( 'WP_INSTALLING', true );

// ./wp-settings.php

define( 'WPINC', 'wp-includes' );

// ./wp-load.php

define( 'ABSPATH', '/' );

// ./wp-includes/load.php

define( 'WP_LANG_DIR', 'wp-content/languages' );
define( 'LANGDIR', 'wp-content/languages' );

// ./wp-includes/pomo/po.php

define( 'PO_MAX_LINE_LEN', 79 );

// ./wp-includes/class-wp-http-proxy.php

define( 'WP_PROXY_HOST', '127.0.0.1' );
define( 'WP_PROXY_PORT', '8080' );
define( 'WP_PROXY_BYPASS_HOSTS', 'localhost, www.example.com, *.wordpress.org' );

// ./wp-includes/ms-default-constants.php

define( 'UPLOADBLOGSDIR', 'wp-content/blogs.dir' );
define( 'UPLOADS', 'wp-content/blogs.dir/0/files/' );
define( 'BLOGUPLOADDIR', 'wp-content/blogs.dir/0/files/' );
define( 'WPMU_SENDFILE', false );
define( 'WPMU_ACCEL_REDIRECT', false );
define( 'VHOST', 'no' );

// ./wp-includes/theme.php

define( 'NO_HEADER_TEXT', false );
define( 'HEADER_IMAGE_WIDTH', 1280 );
define( 'HEADER_IMAGE_HEIGHT', 768 );
define( 'HEADER_TEXTCOLOR', 'black' );
define( 'HEADER_IMAGE', 'image,.jpg' );
define( 'BACKGROUND_COLOR', 'white' );
define( 'BACKGROUND_IMAGE', 'background.jpg' );

// ./wp-includes/default-constants.php

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

// ./wp-includes/kses.php

define( 'CUSTOM_TAGS', false );

// ./wp-includes/wp-db.php

define( 'EZSQL_VERSION', 'WP1.25' );
define( 'OBJECT', 'OBJECT' );
define( 'OBJECT_K', 'OBJECT_K' );
define( 'ARRAY_A', 'ARRAY_A' );
define( 'ARRAY_N', 'ARRAY_N' );

// ./wp-includes/class-simplepie.php

define( 'SIMPLEPIE_NAME', 'SimplePie' );
define( 'SIMPLEPIE_VERSION', '1.3.1' );
define( 'SIMPLEPIE_BUILD', '20200101000000' );
define( 'SIMPLEPIE_URL', 'http://simplepie.org' );
define( 'SIMPLEPIE_USERAGENT', 'SimplePie/1.3.1 (Feed Parser; http://simplepie.org; Allow like Gecko) Build/20200101000000' );
define( 'SIMPLEPIE_LINKBACK', '' );
define( 'SIMPLEPIE_LOCATOR_NONE', 0 );
define( 'SIMPLEPIE_LOCATOR_AUTODISCOVERY', 1 );
define( 'SIMPLEPIE_LOCATOR_LOCAL_EXTENSION', 2 );
define( 'SIMPLEPIE_LOCATOR_LOCAL_BODY', 4 );
define( 'SIMPLEPIE_LOCATOR_REMOTE_EXTENSION', 8 );
define( 'SIMPLEPIE_LOCATOR_REMOTE_BODY', 16 );
define( 'SIMPLEPIE_LOCATOR_ALL', 31 );
define( 'SIMPLEPIE_TYPE_NONE', 0 );
define( 'SIMPLEPIE_TYPE_RSS_090', 1 );
define( 'SIMPLEPIE_TYPE_RSS_091_NETSCAPE', 2 );
define( 'SIMPLEPIE_TYPE_RSS_091_USERLAND', 4 );
define( 'SIMPLEPIE_TYPE_RSS_091', 6 );
define( 'SIMPLEPIE_TYPE_RSS_092', 8 );
define( 'SIMPLEPIE_TYPE_RSS_093', 16 );
define( 'SIMPLEPIE_TYPE_RSS_094', 32 );
define( 'SIMPLEPIE_TYPE_RSS_10', 64 );
define( 'SIMPLEPIE_TYPE_RSS_20', 128 );
define( 'SIMPLEPIE_TYPE_RSS_RDF', 65 );
define( 'SIMPLEPIE_TYPE_RSS_SYNDICATION', 190 );
define( 'SIMPLEPIE_TYPE_RSS_ALL', 255 );
define( 'SIMPLEPIE_TYPE_ATOM_03', 256 );
define( 'SIMPLEPIE_TYPE_ATOM_10', 512 );
define( 'SIMPLEPIE_TYPE_ATOM_ALL', 768 );
define( 'SIMPLEPIE_TYPE_ALL', 1023 );
define( 'SIMPLEPIE_CONSTRUCT_NONE', 0 );
define( 'SIMPLEPIE_CONSTRUCT_TEXT', 1 );
define( 'SIMPLEPIE_CONSTRUCT_HTML', 2 );
define( 'SIMPLEPIE_CONSTRUCT_XHTML', 4 );
define( 'SIMPLEPIE_CONSTRUCT_BASE64', 8 );
define( 'SIMPLEPIE_CONSTRUCT_IRI', 16 );
define( 'SIMPLEPIE_CONSTRUCT_MAYBE_HTML', 32 );
define( 'SIMPLEPIE_CONSTRUCT_ALL', 63 );
define( 'SIMPLEPIE_SAME_CASE', 1 );
define( 'SIMPLEPIE_LOWERCASE', 2 );
define( 'SIMPLEPIE_UPPERCASE', 4 );
define( 'SIMPLEPIE_PCRE_HTML_ATTRIBUTE', '((?:[\x09\x0A\x0B\x0C\x0D\x20]+[^\x09\x0A\x0B\x0C\x0D\x20\x2F\x3E][^\x09\x0A\x0B\x0C\x0D\x20\x2F\x3D\x3E]*(?:[\x09\x0A\x0B\x0C\x0D\x20]*=[\x09\x0A\x0B\x0C\x0D\x20]*(?:"(?:[^"]* )"|\'(?:[^\']* )\'|(?:[^\x09\x0A\x0B\x0C\x0D\x20\x22\x27\x3E][^\x09\x0A\x0B\x0C\x0D\x20\x3E]* )? ) )? )* )[\x09\x0A\x0B\x0C\x0D\x20]*' );
define( 'SIMPLEPIE_PCRE_XML_ATTRIBUTE', '((?:\s+(?:(?:[^\s:]+: )?[^\s:]+ )\s*=\s*(?:"(?:[^"]* )"|\'(?:[^\']* )\' ) )* )\s*' );
define( 'SIMPLEPIE_NAMESPACE_XML', 'http://www.w3.org/XML/1998/namespace' );
define( 'SIMPLEPIE_NAMESPACE_ATOM_10', 'http://www.w3.org/2005/Atom' );
define( 'SIMPLEPIE_NAMESPACE_ATOM_03', 'http://purl.org/atom/ns#' );
define( 'SIMPLEPIE_NAMESPACE_RDF', 'http://www.w3.org/1999/02/22-rdf-syntax-ns#' );
define( 'SIMPLEPIE_NAMESPACE_RSS_090', 'http://my.netscape.com/rdf/simple/0.9/' );
define( 'SIMPLEPIE_NAMESPACE_RSS_10', 'http://purl.org/rss/1.0/' );
define( 'SIMPLEPIE_NAMESPACE_RSS_10_MODULES_CONTENT', 'http://purl.org/rss/1.0/modules/content/' );
define( 'SIMPLEPIE_NAMESPACE_RSS_20', '' );
define( 'SIMPLEPIE_NAMESPACE_DC_10', 'http://purl.org/dc/elements/1.0/' );
define( 'SIMPLEPIE_NAMESPACE_DC_11', 'http://purl.org/dc/elements/1.1/' );
define( 'SIMPLEPIE_NAMESPACE_W3C_BASIC_GEO', 'http://www.w3.org/2003/01/geo/wgs84_pos#' );
define( 'SIMPLEPIE_NAMESPACE_GEORSS', 'http://www.georss.org/georss' );
define( 'SIMPLEPIE_NAMESPACE_MEDIARSS', 'http://search.yahoo.com/mrss/' );
define( 'SIMPLEPIE_NAMESPACE_MEDIARSS_WRONG', 'http://search.yahoo.com/mrss' );
define( 'SIMPLEPIE_NAMESPACE_MEDIARSS_WRONG2', 'http://video.search.yahoo.com/mrss' );
define( 'SIMPLEPIE_NAMESPACE_MEDIARSS_WRONG3', 'http://video.search.yahoo.com/mrss/' );
define( 'SIMPLEPIE_NAMESPACE_MEDIARSS_WRONG4', 'http://www.rssboard.org/media-rss' );
define( 'SIMPLEPIE_NAMESPACE_MEDIARSS_WRONG5', 'http://www.rssboard.org/media-rss/' );
define( 'SIMPLEPIE_NAMESPACE_ITUNES', 'http://www.itunes.com/dtds/podcast-1.0.dtd' );
define( 'SIMPLEPIE_NAMESPACE_XHTML', 'http://www.w3.org/1999/xhtml' );
define( 'SIMPLEPIE_IANA_LINK_RELATIONS_REGISTRY', 'http://www.iana.org/assignments/relation/' );
define( 'SIMPLEPIE_FILE_SOURCE_NONE', 0 );
define( 'SIMPLEPIE_FILE_SOURCE_REMOTE', 1 );
define( 'SIMPLEPIE_FILE_SOURCE_LOCAL', 2 );
define( 'SIMPLEPIE_FILE_SOURCE_FSOCKOPEN', 4 );
define( 'SIMPLEPIE_FILE_SOURCE_CURL', 8 );
define( 'SIMPLEPIE_FILE_SOURCE_FILE_GET_CONTENTS', 16 );

// ./wp-includes/comment-template.php

define( 'COMMENTS_TEMPLATE', true );

// ./wp-includes/class-wp-customize-manager.php

define( 'DOING_AUTOSAVE', true );

// ./wp-includes/script-loader.php

define( 'CONCATENATE_SCRIPTS', false );
define( 'COMPRESS_SCRIPTS', false );
define( 'COMPRESS_CSS', false );
define( 'ENFORCE_GZIP', true );

// ./wp-includes/rest-api.php

define( 'REST_API_VERSION', '2.0' );
define( 'REST_REQUEST', true );

// ./wp-includes/rss.php

define( 'RSS', 'RSS' );
define( 'ATOM', 'Atom' );
define( 'MAGPIE_USER_AGENT', 'WordPress/1.0.0' );
define( 'MAGPIE_INITALIZED', 1 );
define( 'MAGPIE_CACHE_ON', 1 );
define( 'MAGPIE_CACHE_DIR', './cache' );
define( 'MAGPIE_CACHE_AGE', 3600 );
define( 'MAGPIE_CACHE_FRESH_ONLY', 0 );
define( 'MAGPIE_DEBUG', 0 );
define( 'MAGPIE_FETCH_TIME_OUT', 2 );
define( 'MAGPIE_USE_GZIP', true );

// ./wp-includes/ID3/module.audio.mp3.php

define( 'GETID3_MP3_VALID_CHECK_FRAMES', 35 );

// ./wp-includes/ID3/getid3.php

define( 'GETID3_OS_ISWINDOWS', false );
define( 'GETID3_INCLUDEPATH', '/' );
define( 'IMG_JPG', IMAGETYPE_JPEG );
define( 'ENT_SUBSTITUTE', 8 );
define( 'GETID3_TEMP_DIR', '/tmp' );
define( 'GETID3_HELPERAPPSDIR', '/' );

// ./wp-includes/ID3/module.audio-video.flv.php

define( 'GETID3_FLV_TAG_AUDIO', 8 );
define( 'GETID3_FLV_TAG_VIDEO', 9 );
define( 'GETID3_FLV_TAG_META', 18 );
define( 'GETID3_FLV_VIDEO_H263', 2 );
define( 'GETID3_FLV_VIDEO_SCREEN', 3 );
define( 'GETID3_FLV_VIDEO_VP6FLV', 4 );
define( 'GETID3_FLV_VIDEO_VP6FLV_ALPHA', 5 );
define( 'GETID3_FLV_VIDEO_SCREENV2', 6 );
define( 'GETID3_FLV_VIDEO_H264', 7 );
define( 'H264_AVC_SEQUENCE_HEADER', 0 );
define( 'H264_PROFILE_BASELINE', 66 );
define( 'H264_PROFILE_MAIN', 77 );
define( 'H264_PROFILE_EXTENDED', 88 );
define( 'H264_PROFILE_HIGH', 100 );
define( 'H264_PROFILE_HIGH10', 110 );
define( 'H264_PROFILE_HIGH422', 122 );
define( 'H264_PROFILE_HIGH444', 144 );
define( 'H264_PROFILE_HIGH444_PREDICTIVE', 244 );

// ./wp-includes/ID3/module.audio-video.matroska.php

define( 'EBML_ID_CHAPTERS', 0x0043A770 );
define( 'EBML_ID_SEEKHEAD', 0x014D9B74 );
define( 'EBML_ID_TAGS', 0x0254C367 );
define( 'EBML_ID_INFO', 0x0549A966 );
define( 'EBML_ID_TRACKS', 0x0654AE6B );
define( 'EBML_ID_SEGMENT', 0x08538067 );
define( 'EBML_ID_ATTACHMENTS', 0x0941A469 );
define( 'EBML_ID_EBML', 0x0A45DFA3 );
define( 'EBML_ID_CUES', 0x0C53BB6B );
define( 'EBML_ID_CLUSTER', 0x0F43B675 );
define( 'EBML_ID_LANGUAGE', 0x02B59C );
define( 'EBML_ID_TRACKTIMECODESCALE', 0x03314F );
define( 'EBML_ID_DEFAULTDURATION', 0x03E383 );
define( 'EBML_ID_CODECNAME', 0x058688 );
define( 'EBML_ID_CODECDOWNLOADURL', 0x06B240 );
define( 'EBML_ID_TIMECODESCALE', 0x0AD7B1 );
define( 'EBML_ID_COLOURSPACE', 0x0EB524 );
define( 'EBML_ID_GAMMAVALUE', 0x0FB523 );
define( 'EBML_ID_CODECSETTINGS', 0x1A9697 );
define( 'EBML_ID_CODECINFOURL', 0x1B4040 );
define( 'EBML_ID_PREVFILENAME', 0x1C83AB );
define( 'EBML_ID_PREVUID', 0x1CB923 );
define( 'EBML_ID_NEXTFILENAME', 0x1E83BB );
define( 'EBML_ID_NEXTUID', 0x1EB923 );
define( 'EBML_ID_CONTENTCOMPALGO', 0x0254 );
define( 'EBML_ID_CONTENTCOMPSETTINGS', 0x0255 );
define( 'EBML_ID_DOCTYPE', 0x0282 );
define( 'EBML_ID_DOCTYPEREADVERSION', 0x0285 );
define( 'EBML_ID_EBMLVERSION', 0x0286 );
define( 'EBML_ID_DOCTYPEVERSION', 0x0287 );
define( 'EBML_ID_EBMLMAXIDLENGTH', 0x02F2 );
define( 'EBML_ID_EBMLMAXSIZELENGTH', 0x02F3 );
define( 'EBML_ID_EBMLREADVERSION', 0x02F7 );
define( 'EBML_ID_CHAPLANGUAGE', 0x037C );
define( 'EBML_ID_CHAPCOUNTRY', 0x037E );
define( 'EBML_ID_SEGMENTFAMILY', 0x0444 );
define( 'EBML_ID_DATEUTC', 0x0461 );
define( 'EBML_ID_TAGLANGUAGE', 0x047A );
define( 'EBML_ID_TAGDEFAULT', 0x0484 );
define( 'EBML_ID_TAGBINARY', 0x0485 );
define( 'EBML_ID_TAGSTRING', 0x0487 );
define( 'EBML_ID_DURATION', 0x0489 );
define( 'EBML_ID_CHAPPROCESSPRIVATE', 0x050D );
define( 'EBML_ID_CHAPTERFLAGENABLED', 0x0598 );
define( 'EBML_ID_TAGNAME', 0x05A3 );
define( 'EBML_ID_EDITIONENTRY', 0x05B9 );
define( 'EBML_ID_EDITIONUID', 0x05BC );
define( 'EBML_ID_EDITIONFLAGHIDDEN', 0x05BD );
define( 'EBML_ID_EDITIONFLAGDEFAULT', 0x05DB );
define( 'EBML_ID_EDITIONFLAGORDERED', 0x05DD );
define( 'EBML_ID_FILEDATA', 0x065C );
define( 'EBML_ID_FILEMIMETYPE', 0x0660 );
define( 'EBML_ID_FILENAME', 0x066E );
define( 'EBML_ID_FILEREFERRAL', 0x0675 );
define( 'EBML_ID_FILEDESCRIPTION', 0x067E );
define( 'EBML_ID_FILEUID', 0x06AE );
define( 'EBML_ID_CONTENTENCALGO', 0x07E1 );
define( 'EBML_ID_CONTENTENCKEYID', 0x07E2 );
define( 'EBML_ID_CONTENTSIGNATURE', 0x07E3 );
define( 'EBML_ID_CONTENTSIGKEYID', 0x07E4 );
define( 'EBML_ID_CONTENTSIGALGO', 0x07E5 );
define( 'EBML_ID_CONTENTSIGHASHALGO', 0x07E6 );
define( 'EBML_ID_MUXINGAPP', 0x0D80 );
define( 'EBML_ID_SEEK', 0x0DBB );
define( 'EBML_ID_CONTENTENCODINGORDER', 0x1031 );
define( 'EBML_ID_CONTENTENCODINGSCOPE', 0x1032 );
define( 'EBML_ID_CONTENTENCODINGTYPE', 0x1033 );
define( 'EBML_ID_CONTENTCOMPRESSION', 0x1034 );
define( 'EBML_ID_CONTENTENCRYPTION', 0x1035 );
define( 'EBML_ID_CUEREFNUMBER', 0x135F );
define( 'EBML_ID_NAME', 0x136E );
define( 'EBML_ID_CUEBLOCKNUMBER', 0x1378 );
define( 'EBML_ID_TRACKOFFSET', 0x137F );
define( 'EBML_ID_SEEKID', 0x13AB );
define( 'EBML_ID_SEEKPOSITION', 0x13AC );
define( 'EBML_ID_STEREOMODE', 0x13B8 );
define( 'EBML_ID_OLDSTEREOMODE', 0x13B9 );
define( 'EBML_ID_PIXELCROPBOTTOM', 0x14AA );
define( 'EBML_ID_DISPLAYWIDTH', 0x14B0 );
define( 'EBML_ID_DISPLAYUNIT', 0x14B2 );
define( 'EBML_ID_ASPECTRATIOTYPE', 0x14B3 );
define( 'EBML_ID_DISPLAYHEIGHT', 0x14BA );
define( 'EBML_ID_PIXELCROPTOP', 0x14BB );
define( 'EBML_ID_PIXELCROPLEFT', 0x14CC );
define( 'EBML_ID_PIXELCROPRIGHT', 0x14DD );
define( 'EBML_ID_FLAGFORCED', 0x15AA );
define( 'EBML_ID_MAXBLOCKADDITIONID', 0x15EE );
define( 'EBML_ID_WRITINGAPP', 0x1741 );
define( 'EBML_ID_CLUSTERSILENTTRACKS', 0x1854 );
define( 'EBML_ID_CLUSTERSILENTTRACKNUMBER', 0x18D7 );
define( 'EBML_ID_ATTACHEDFILE', 0x21A7 );
define( 'EBML_ID_CONTENTENCODING', 0x2240 );
define( 'EBML_ID_BITDEPTH', 0x2264 );
define( 'EBML_ID_CODECPRIVATE', 0x23A2 );
define( 'EBML_ID_TARGETS', 0x23C0 );
define( 'EBML_ID_CHAPTERPHYSICALEQUIV', 0x23C3 );
define( 'EBML_ID_TAGCHAPTERUID', 0x23C4 );
define( 'EBML_ID_TAGTRACKUID', 0x23C5 );
define( 'EBML_ID_TAGATTACHMENTUID', 0x23C6 );
define( 'EBML_ID_TAGEDITIONUID', 0x23C9 );
define( 'EBML_ID_TARGETTYPE', 0x23CA );
define( 'EBML_ID_TRACKTRANSLATE', 0x2624 );
define( 'EBML_ID_TRACKTRANSLATETRACKID', 0x26A5 );
define( 'EBML_ID_TRACKTRANSLATECODEC', 0x26BF );
define( 'EBML_ID_TRACKTRANSLATEEDITIONUID', 0x26FC );
define( 'EBML_ID_SIMPLETAG', 0x27C8 );
define( 'EBML_ID_TARGETTYPEVALUE', 0x28CA );
define( 'EBML_ID_CHAPPROCESSCOMMAND', 0x2911 );
define( 'EBML_ID_CHAPPROCESSTIME', 0x2922 );
define( 'EBML_ID_CHAPTERTRANSLATE', 0x2924 );
define( 'EBML_ID_CHAPPROCESSDATA', 0x2933 );
define( 'EBML_ID_CHAPPROCESS', 0x2944 );
define( 'EBML_ID_CHAPPROCESSCODECID', 0x2955 );
define( 'EBML_ID_CHAPTERTRANSLATEID', 0x29A5 );
define( 'EBML_ID_CHAPTERTRANSLATECODEC', 0x29BF );
define( 'EBML_ID_CHAPTERTRANSLATEEDITIONUID', 0x29FC );
define( 'EBML_ID_CONTENTENCODINGS', 0x2D80 );
define( 'EBML_ID_MINCACHE', 0x2DE7 );
define( 'EBML_ID_MAXCACHE', 0x2DF8 );
define( 'EBML_ID_CHAPTERSEGMENTUID', 0x2E67 );
define( 'EBML_ID_CHAPTERSEGMENTEDITIONUID', 0x2EBC );
define( 'EBML_ID_TRACKOVERLAY', 0x2FAB );
define( 'EBML_ID_TAG', 0x3373 );
define( 'EBML_ID_SEGMENTFILENAME', 0x3384 );
define( 'EBML_ID_SEGMENTUID', 0x33A4 );
define( 'EBML_ID_CHAPTERUID', 0x33C4 );
define( 'EBML_ID_TRACKUID', 0x33C5 );
define( 'EBML_ID_ATTACHMENTLINK', 0x3446 );
define( 'EBML_ID_CLUSTERBLOCKADDITIONS', 0x35A1 );
define( 'EBML_ID_CHANNELPOSITIONS', 0x347B );
define( 'EBML_ID_OUTPUTSAMPLINGFREQUENCY', 0x38B5 );
define( 'EBML_ID_TITLE', 0x3BA9 );
define( 'EBML_ID_CHAPTERDISPLAY', 0x00 );
define( 'EBML_ID_TRACKTYPE', 0x03 );
define( 'EBML_ID_CHAPSTRING', 0x05 );
define( 'EBML_ID_CODECID', 0x06 );
define( 'EBML_ID_FLAGDEFAULT', 0x08 );
define( 'EBML_ID_CHAPTERTRACKNUMBER', 0x09 );
define( 'EBML_ID_CLUSTERSLICES', 0x0E );
define( 'EBML_ID_CHAPTERTRACK', 0x0F );
define( 'EBML_ID_CHAPTERTIMESTART', 0x11 );
define( 'EBML_ID_CHAPTERTIMEEND', 0x12 );
define( 'EBML_ID_CUEREFTIME', 0x16 );
define( 'EBML_ID_CUEREFCLUSTER', 0x17 );
define( 'EBML_ID_CHAPTERFLAGHIDDEN', 0x18 );
define( 'EBML_ID_FLAGINTERLACED', 0x1A );
define( 'EBML_ID_CLUSTERBLOCKDURATION', 0x1B );
define( 'EBML_ID_FLAGLACING', 0x1C );
define( 'EBML_ID_CHANNELS', 0x1F );
define( 'EBML_ID_CLUSTERBLOCKGROUP', 0x20 );
define( 'EBML_ID_CLUSTERBLOCK', 0x21 );
define( 'EBML_ID_CLUSTERBLOCKVIRTUAL', 0x22 );
define( 'EBML_ID_CLUSTERSIMPLEBLOCK', 0x23 );
define( 'EBML_ID_CLUSTERCODECSTATE', 0x24 );
define( 'EBML_ID_CLUSTERBLOCKADDITIONAL', 0x25 );
define( 'EBML_ID_CLUSTERBLOCKMORE', 0x26 );
define( 'EBML_ID_CLUSTERPOSITION', 0x27 );
define( 'EBML_ID_CODECDECODEALL', 0x2A );
define( 'EBML_ID_CLUSTERPREVSIZE', 0x2B );
define( 'EBML_ID_TRACKENTRY', 0x2E );
define( 'EBML_ID_CLUSTERENCRYPTEDBLOCK', 0x2F );
define( 'EBML_ID_PIXELWIDTH', 0x30 );
define( 'EBML_ID_CUETIME', 0x33 );
define( 'EBML_ID_SAMPLINGFREQUENCY', 0x35 );
define( 'EBML_ID_CHAPTERATOM', 0x36 );
define( 'EBML_ID_CUETRACKPOSITIONS', 0x37 );
define( 'EBML_ID_FLAGENABLED', 0x39 );
define( 'EBML_ID_PIXELHEIGHT', 0x3A );
define( 'EBML_ID_CUEPOINT', 0x3B );
define( 'EBML_ID_CRC32', 0x3F );
define( 'EBML_ID_CLUSTERBLOCKADDITIONID', 0x4B );
define( 'EBML_ID_CLUSTERLACENUMBER', 0x4C );
define( 'EBML_ID_CLUSTERFRAMENUMBER', 0x4D );
define( 'EBML_ID_CLUSTERDELAY', 0x4E );
define( 'EBML_ID_CLUSTERDURATION', 0x4F );
define( 'EBML_ID_TRACKNUMBER', 0x57 );
define( 'EBML_ID_CUEREFERENCE', 0x5B );
define( 'EBML_ID_VIDEO', 0x60 );
define( 'EBML_ID_AUDIO', 0x61 );
define( 'EBML_ID_CLUSTERTIMESLICE', 0x68 );
define( 'EBML_ID_CUECODECSTATE', 0x6A );
define( 'EBML_ID_CUEREFCODECSTATE', 0x6B );
define( 'EBML_ID_VOID', 0x6C );
define( 'EBML_ID_CLUSTERTIMECODE', 0x67 );
define( 'EBML_ID_CLUSTERBLOCKADDID', 0x6E );
define( 'EBML_ID_CUECLUSTERPOSITION', 0x71 );
define( 'EBML_ID_CUETRACK', 0x77 );
define( 'EBML_ID_CLUSTERREFERENCEPRIORITY', 0x7A );
define( 'EBML_ID_CLUSTERREFERENCEBLOCK', 0x7B );
define( 'EBML_ID_CLUSTERREFERENCEVIRTUAL', 0x7D );

// ./wp-includes/rewrite.php

define( 'EP_NONE', 0 );
define( 'EP_PERMALINK', 1 );
define( 'EP_ATTACHMENT', 2 );
define( 'EP_DATE', 4 );
define( 'EP_YEAR', 8 );
define( 'EP_MONTH', 16 );
define( 'EP_DAY', 32 );
define( 'EP_ROOT', 64 );
define( 'EP_COMMENTS', 128 );
define( 'EP_SEARCH', 256 );
define( 'EP_CATEGORIES', 512 );
define( 'EP_TAGS', 1024 );
define( 'EP_AUTHORS', 2048 );
define( 'EP_PAGES', 4096 );
define( 'EP_ALL_ARCHIVES', 3644 );
define( 'EP_ALL', 8191 );

// ./index.php

define( 'WP_USE_THEMES', true );

