<?php
require_once APP_ROOT . '/models/User.php';
class AdminController {
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

            $userModel = new Users();
            $user = $userModel->login($username, $password);

            if ($user && password_verify($password, $user['password']) && $user['role'] === 1) { // Kiểm tra mật khẩu đã mã hóa
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['username'] = $user['username'];
            $_SESSION['role'] = $user['role'];

            header('Location: index.php?controller=admin&action=dashboard'); // Chuyển hướng đến trang quản trị
            exit;
            } else {
                $error = "Tên đăng nhập hoặc mật khẩu không đúng.";
                require_once APP_ROOT . '/views/admin/login.php';
            }
        } else {
            require_once APP_ROOT . '/views/admin/login.php'; // Hiển thị trang đăng nhập
        }
    }

    public function logout() {
        session_start();
        session_destroy();
        header('Location: index.php?controller=admin&action=login');
        exit;
    }

    public function dashboard() {
        if (!isset($_SESSION['user_id']) || $_SESSION['role'] !== 1) {
            header('Location: index.php?controller=admin&action=login'); // Chuyển hướng về trang đăng nhập nếu không phải quản trị viên
            exit;
        }

        require_once APP_ROOT . '/views/admin/dashboard.php'; // Hiển thị trang quản trị viên
    }
    // Thêm tin tức mới
    public function addNews() {
        // Kiểm tra xem form đã được gửi chưa
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $title = $_POST['title'];
            $content = $_POST['content'];
            $category_id = $_POST['category_id'];

            // Xử lý file ảnh
            $image = null;
            if (isset($_FILES['image']) && $_FILES['image']['error'] == UPLOAD_ERR_OK) {
                // Lấy thông tin file
                $imageTmp = $_FILES['image']['tmp_name'];
                $imageName = $_FILES['image']['name'];
                $imageExt = pathinfo($imageName, PATHINFO_EXTENSION);

                // Kiểm tra loại ảnh (bạn có thể kiểm tra thêm các định dạng khác)
                if (in_array(strtolower($imageExt), ['jpg', 'jpeg', 'png', 'gif'])) {
                    // Tạo tên file mới để tránh trùng lặp
                    $newImageName = uniqid('news_', true) . '.' . $imageExt;

                    // Đường dẫn lưu file
                    $uploadDir = 'uploads/';
                    $uploadPath = $uploadDir . $newImageName;

                    // Di chuyển file từ thư mục tạm vào thư mục uploads
                    if (move_uploaded_file($imageTmp, $uploadPath)) {
                        $image = $newImageName; // Lưu tên file vào CSDL
                    }
                }
            }

            // Lưu tin tức vào CSDL
            $newsModel = new News();
            $newsModel->addNews($title, $content, $image, $category_id);

            // Chuyển hướng về trang danh sách tin tức sau khi thêm
            header("Location: ?controller=admin&action=index");
        }
    }
}
?>
