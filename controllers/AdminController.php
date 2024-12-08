<?php
require_once dirname(__FILE__, 2) . '/models/users.php';
require_once dirname(__FILE__, 2) . '/services/userService.php';

class adminController
{
    public function __construct()
    {
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }
    }

    public function login()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $username = $_POST['username'];
            $password = $_POST['password'];


            $userService = new UserService();
            $user = $userService->getUserByUsername($username);

            if ($user && $password == $user['password'] && $user['role'] === 1) {
                $_SESSION['user_id'] = $user['id'];
                $_SESSION['username'] = $user['username'];
                $_SESSION['role'] = $user['role'];

                header('Location: index.php?controller=news&action=index');
                exit;
            } else {
                $error = "Tên đăng nhập hoặc mật khẩu không đúng.";
                require_once APP_ROOT . '/views/admin/login.php';
            }
        } else {
            require_once APP_ROOT . '/views/admin/login.php';
        }
    }

    public function logout()
    {
        session_start();
        session_destroy();
        header('Location: index.php?controller=admin&action=login');
        exit;
    }
}
