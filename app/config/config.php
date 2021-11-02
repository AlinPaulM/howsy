<?php

// Application 
define('APP_URL', 'http://localhost/projects/howsy/public/');

// environment
define('ENVIRONMENT', 'dev');
if (ENVIRONMENT == 'dev') {
    error_reporting(E_ALL);
    ini_set("display_errors", 1);
}

// database
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'howsy');
define('DB_CHARSET', 'utf8');