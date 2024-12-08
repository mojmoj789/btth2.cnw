<?php
if (!defined('APP_ROOT')) {
    die('APP_ROOT is not defined');
}

class HomeController {
    public function indexAction() {

        include APP_ROOT . '/views/home/index.php';
    }
}
?>
