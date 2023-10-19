<?php
// HTTP
define('HTTP_SERVER', 'https://bitrix.media-top.online/');

// HTTPS
define('HTTPS_SERVER', 'https://bitrix.media-top.online/');

// DIR
define('DIR_APPLICATION', '/var/www/lok/data/www/bitrix.media-top.online/catalog/');
define('DIR_SYSTEM', '/var/www/lok/data/www/bitrix.media-top.online/system/');
define('DIR_IMAGE', '/var/www/lok/data/www/bitrix.media-top.online/image/');
define('DIR_STORAGE', DIR_SYSTEM . 'storage/');
define('DIR_LANGUAGE', DIR_APPLICATION . 'language/');
define('DIR_TEMPLATE', DIR_APPLICATION . 'view/theme/');
define('DIR_CONFIG', DIR_SYSTEM . 'config/');
define('DIR_CACHE', DIR_STORAGE . 'cache/');
define('DIR_DOWNLOAD', DIR_STORAGE . 'download/');
define('DIR_LOGS', DIR_STORAGE . 'logs/');
define('DIR_MODIFICATION', DIR_STORAGE . 'modification/');
define('DIR_SESSION', DIR_STORAGE . 'session/');
define('DIR_UPLOAD', DIR_STORAGE . 'upload/');

// DB
define('DB_DRIVER', 'mysqli');
define('DB_HOSTNAME', 'localhost');
define('DB_USERNAME', 'admin');
define('DB_PASSWORD', 'qaz111Q!!!');
define('DB_DATABASE', 'bitrix-new');
define('DB_PORT', '3306');
define('DB_PREFIX', 'oc2_');