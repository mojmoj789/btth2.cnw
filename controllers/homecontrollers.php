<?php
require_once APP_ROOT . '/services/userService.php';
class UserController{
    public function index(){
        $userService = new UserService();
        $users = $userService->getAllUsers();

        //
        include APP_ROOT . '/views/home/index.php';
    }
}