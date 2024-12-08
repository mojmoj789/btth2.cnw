<?php
require_once dirname(__FILE__, 2) . '/models/users.php';
require_once dirname(__FILE__, 2) . '/services/newsService.php';

class newsController
{
    protected $newsService;
    public function __construct()
    {
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }
        if (!isset($_SESSION['user_id']) || $_SESSION['role'] !== 1) {
            header('Location: index.php?controller=admin&action=login');
            exit;
        }

        $this->newsService = new newsService();
    }

    public function index()
    {
        $data = $this->newsService->getAllNews();

        require_once APP_ROOT . '/views/admin/news/index.php';
    }

    public function deleteNews()
    {
        if ($this->newsService->deleteNews($_POST['id'])) {
            $_SESSION['alert_success'] = "Xóa tin tức thành công!";
        } else {
            $_SESSION['alert_error'] = "Xóa tin tức thất bại!";
        }

        header('Location: index.php?controller=news&action=index');
        exit;
    }

    public function createNews()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {


            $uploadDir = 'uploads/images/';
            if (!is_dir($uploadDir)) {
                mkdir($uploadDir, 0755, true);
            }

            $imageName = time() . '_' . $_FILES['image']['name'];
            $imagePath = $uploadDir . $imageName;

            if (move_uploaded_file($_FILES['image']['tmp_name'], $imagePath)) {
                $imageUrl = $imagePath;
            } else {
                $imageUrl = null;
                $_SESSION['alert_error'] = "Lỗi khi tải hình ảnh lên!";
            }

            $newsData = [
                'title' => $_POST['title'],
                'image' => $imageUrl,
                'content' => $_POST['content'],
            ];

            if ($this->newsService->createNews($newsData)) {
                $_SESSION['alert_success'] = "Tạo tin tức thành công!";
            } else {
                $_SESSION['alert_error'] = "Tạo tin tức thất bại!";
            }

            header('Location: ' . DOMAIN . '/index.php?controller=news&action=index');
            exit();
        } else {
            require_once APP_ROOT . '/views/admin/news/create.php';
        }
    }

    public function editNews()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            $imageUrl = null;
            if (isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
                $uploadDir = 'uploads/images/';
                if (!is_dir($uploadDir)) {
                    mkdir($uploadDir, 0755, true);
                }

                $imageName = time() . '_' . $_FILES['image']['name'];
                $imagePath = $uploadDir . $imageName;

                if (move_uploaded_file($_FILES['image']['tmp_name'], $imagePath)) {
                    $imageUrl = $imagePath;
                } else {
                    $_SESSION['alert_error'] = "Lỗi khi tải hình ảnh lên!";
                }
            }

            $newsData = [
                'id' => $_POST['id'],
                'title' => $_POST['title'],
                'image' => $imageUrl,
                'content' => $_POST['content'],
            ];

            if ($this->newsService->updateNews($newsData)) {
                $_SESSION['alert_success'] = "Cập nhật tin tức thành công!";
            } else {
                $_SESSION['alert_error'] = "Cập nhật tin tức thất bại!";
            }

            header('Location: ' . DOMAIN . '/index.php?controller=news&action=index');
            exit();
        } else {
            $data = $this->newsService->getNewsById($_GET['id']);
            require_once APP_ROOT . '/views/admin/news/edit.php';
        }
    }
}
