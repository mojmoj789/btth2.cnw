<?php
require_once APP_ROOT . '/services/userService.php';

if(!defined('APP_ROOT')) {
    die('APP_ROOT is not defined');
}
class HomeController{
    public function indexAction(){
        $userService = new UserService();
        $users = $userService->getAllUsers();

        if(empty($users)){
            $users = [];
        }

        include APP_ROOT . '/views/home/index.php';

        echo '<pre>';
        print_r($users);
        echo '</pre>';
    }
}