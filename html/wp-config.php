<?php
require __DIR__.'/config/app.php';

if (!defined('ABSPATH')) {
    define('ABSPATH', dirname(__FILE__) . '/wordpress');
}

require_once(ABSPATH . 'wp-settings.php');