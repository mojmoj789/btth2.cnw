<?php
define('APP_ROOT', dirname(__FILE__, 2));

define('DOMAIN', 'http://localhost/www/btth2.cnw');
//define('DOMAIN', 'http://localhost:8000');

define('DB_HOST', '127.0.0.1');
define('DB_NAME', 'news');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_PORT', '3306');

require_once APP_ROOT . '/libs/DBConnection.php';

$db = new DBConnection(DB_HOST, DB_USER, DB_PASS, DB_NAME, DB_PORT);

$conn = $db->getConnection();

if ($conn) {
    // echo "Connected";
} else {
    echo "Not Connected";
    die("Error: Unable to connect to the database.");
}
