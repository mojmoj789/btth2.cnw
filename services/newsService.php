<?php
require_once APP_ROOT . '/models/news.php';
class newsService{
    public function getAllNews(){
        try {
            $conn = new PDO('mysql:host=localhost;dbname=news', 'root', '');
            $sql = "SELECT * FROM news";
            $stmt = $conn->query($sql);

            $news = [];
            while($row = $stmt->fetch()){
                $news[] = new News($row['id'], $row['title'], $row['content'], $row['image'], $row['created_at'], $row['category_id']);
                $News = $news;
            }
            return $News;
        }catch (PDOException $e){
            return $News = [];
        }
    }
}
