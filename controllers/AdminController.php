<?php
require_once APP_ROOT.'/models/users.php';
class adminController {
    public function __construct() {
        if(session_status() == PHP_SESSION_NONE) {
            session_start();
        }
    }

    public function login() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $username = $_POST['username'];
            $password = $_POST['password'];

            $userModel = new Users();
            $User = $userModel->login($username);

            if ($User && password_verify($password, $User['password']) && $User['role'] === 1) {

                $_SESSION['user_id'] = $User['id'];
                $_SESSION['username'] = $User['username'];
                $_SESSION['role'] = $User['role'];


                header('Location: index.php?controller=admin&action=index');
                exit;
            } else {

                $error = "Tên đăng nhập hoặc mật khẩu không đúng.";
                require_once APP_ROOT . '/views/admin/login.php';
            }
        } else {
            require_once APP_ROOT . '/views/admin/login.php';
        }
    }

    public function logout() {
        session_start();
        session_destroy();
        header('Location: index.php?controller=admin&action=login');
        exit;
    }


    public function index() {
        if (!isset($_SESSION['user_id']) || $_SESSION['role'] !== 1) {
            header('Location: index.php?controller=admin&action=login');
            exit;
        }

        require_once APP_ROOT . '/views/admin/news/index.php';
    }
}
?>
