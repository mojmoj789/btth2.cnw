<?php
require_once 'app/models/NewsModel.php';
require_once 'app/models/CategoryModel.php';

class NewsController {
    private $newsModel;
    private $categoryModel;

    public function __construct($db) {
        $this->newsModel = new NewsModel($db);
        $this->categoryModel = new CategoryModel($db);
    }

    public function index() {
        $news = $this->newsModel->getAllNews();
        require 'app/views/news/index.php';
    }

    public function add() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Lấy dữ liệu từ form
            $title = $_POST['title'];
            $content = $_POST['content'];
            $category_id = $_POST['category_id'];

            $image = $this->handleImageUpload();

            if (empty($title) || empty($content) || empty($category_id)) {
                $error = "Vui lòng điền đầy đủ thông tin!";
                require 'app/views/news/add.php';
                return;
            }

            $this->newsModel->addNews($title, $content, $image, $category_id);
            header('Location: index.php');
            exit;
        }

        $categories = $this->categoryModel->getAllCategories();
        require 'app/views/news/add.php';
    }

    public function edit($id) {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Lấy dữ liệu từ form
            $title = $_POST['title'];
            $content = $_POST['content'];
            $category_id = $_POST['category_id'];

            $image = $this->handleImageUpload();

            if (empty($title) || empty($content) || empty($category_id)) {
                $error = "Vui lòng điền đầy đủ thông tin!";
                $news = $this->newsModel->getNewsById($id);
                $categories = $this->categoryModel->getAllCategories();
                require 'app/views/news/edit.php';
                return;
            }

            $this->newsModel->updateNews($id, $title, $content, $image, $category_id);
            header('Location: index.php');
            exit;
        }

        $news = $this->newsModel->getNewsById($id);
        $categories = $this->categoryModel->getAllCategories();
        require 'app/views/news/edit.php';
    }

    public function delete($id) {
        $this->newsModel->deleteNews($id);
        header('Location: index.php');
        exit;
    }

    private function handleImageUpload() {
        if (isset($_FILES['image']) && $_FILES['image']['error'] == UPLOAD_ERR_OK) {
            $imageName = 'uploads/' . basename($_FILES['image']['name']);
            move_uploaded_file($_FILES['image']['tmp_name'], $imageName);
            return $imageName;
        }
        return null;
    }
}
?>
