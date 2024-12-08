<?php
require_once './config/config.php';
require_once APP_ROOT.'/libs/DBConnection.php';
session_start();

$controller = $_GET['controller'] ?? 'home';
$action = $_GET['action'] ?? 'index';

if(!isset($_SESSION['id'])) {
    header('Location: ../../views/admin/login.php');
    exit();
}


