<?php
define('APP_ROOT', dirname(__FILE__, 2));

define('DB_HOST', 'localhost');
define('DB_NAME', 'news');
define('DB_USER', 'root');
define('DB_PASS', '');

// Bao gồm file DBConnection
require_once APP_ROOT . '/libs/DBConnection.php';

// Khởi tạo đối tượng DBConnection
$db = new DBConnection(DB_HOST, DB_USER, DB_PASS, DB_NAME);

// Kết nối với cơ sở dữ liệu
$conn = $db->connect();

