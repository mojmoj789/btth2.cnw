<?php
require_once('./config/config.php');
require_once APP_ROOT . '/controllers/HomeController.php';

$homeController = new HomeController();
$homeController->index();





