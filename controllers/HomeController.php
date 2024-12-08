<?php
// Kiểm tra sự tồn tại của APP_ROOT
if (!defined('APP_ROOT')) {
    die('APP_ROOT is not defined');
}

class HomeController {
    public function indexAction() {
        // Bao gồm file view của trang chủ
        include APP_ROOT . '/views/home/index.php';
    }
}
?>
