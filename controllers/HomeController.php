<?php
require_once APP_ROOT . '/services/userService.php';
require_once APP_ROOT . '/models/News.php';
class HomeController{
    public function index(){
        $userService = new UserService();
        $users = $userService->getAllUsers();
        require_once APP_ROOT . '/models/User.php';
        $newsModel = new News();
        $newsList = $newsModel->getAllNews();
        require_once APP_ROOT . '/views/home/index.php';
    }
}
?>