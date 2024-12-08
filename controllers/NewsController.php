<?php
class NewsController {
    public function detail() {
        require_once APP_ROOT . '/models/news.php';
        if (isset($_GET['id']) && is_numeric($_GET['id'])) {
            $id = intval($_GET['id']);

            // Gọi model News để lấy tin tức theo ID
            $newsModel = new News();
            $news = $newsModel->getNewsById($id);


            if ($news) {
                require_once APP_ROOT . '/views/news/detail.php'; // Hiển thị view chi tiết
            } else {
                echo "Không tìm thấy tin tức với ID $id.";
            }
        } else {
            echo "ID không hợp lệ.";
        }
    }
}
?>