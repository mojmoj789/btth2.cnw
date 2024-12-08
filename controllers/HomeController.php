<?php
require_once APP_ROOT . '/services/userService.php';
require_once APP_ROOT . '/models/news.php';

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

        $newsModel = new News();
        $newsList = $newsModel->getAllNews();
        require_once APP_ROOT . '/views/home/index.php';

    }
}