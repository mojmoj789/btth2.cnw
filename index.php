<?php
require_once './config/config.php';
require_once APP_ROOT.'/libs/DBConnection.php';

$controller = $_GET['controller'] ?? 'home';
$action = $_GET['action'] ?? 'index';

