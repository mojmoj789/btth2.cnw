<?php
define('APP_ROOT', dirname(__FILE__, 2));
const DOMAIN = 'http://localhost/www.btth2.cnw';

define('DB_HOST', 'localhost');
define('DB_NAME', 'news');
define('DB_USER', 'root');
define('DB_PASS', '');

require_once APP_ROOT . '/libs/DBConnection.php';

$db = new DBConnection(DB_HOST, DB_USER, DB_PASS, DB_NAME);
$conn = $db->getConnection();
//test
if ($conn) {
    echo "Connected";
} else {
    echo "Not Connected";
    die("Error: Unable to connect to the database.");
}
