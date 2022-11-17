<?php
$host = $_SERVER['HTTP_HOST'];
$protocol = $_SERVER['PROTOCOL'] = isset($_SERVER['HTTPS']) && !empty($_SERVER['HTTPS']) ? 'https' : 'http';

$full_root_path = '/var/www/html/wordpress';

if(getenv('WP_SSL')) {
    $_SERVER['HTTPS'] = 0;
    $protocol = 'https';
}
$url = "$protocol://$host";

define('WP_HOME', $url);
define('WP_SITEURL', $url.'/wordpress');

define('WP_CONTENT_DIR', "$full_root_path/wp-content");
define('WP_CONTENT_URL', "$url/wp-content");

define('DB_NAME', getenv('MYSQL_DATABASE'));
define('DB_USER', getenv('MYSQL_USER'));
define('DB_PASSWORD', getenv('MYSQL_PASSWORD'));
define('DB_HOST', getenv('MYSQL_HOST'));
define('DB_CHARSET', getenv('MYSQL_CHARSET'));
define('DB_COLLATE', '');

define('WP_DEBUG', true);
define('WP_DEBUG_DISPLAY', false);
define('WP_DEBUG_LOG', true);

$table_prefix = 'wp_';