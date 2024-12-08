<?php
require_once APP_ROOT . '/services/userService.php';

if(!defined('APP_ROOT')) {
    die('APP_ROOT is not defined');
}
class HomeController{
    public function index(){
        $userService = new UserService();
        $users = $userService->getAllUsers();

        if(empty($users)){
            $users = [];
        }

        require_once APP_ROOT . '/views/home/index.php';
    }
}