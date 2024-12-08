<?php
require_once APP_ROOT . '/models/users.php';
class userService{
    public function __construct(){
        $this->db = new DBConnection(DB_HOST, DB_NAME, DB_USER, DB_PASS);
    }
    public function getAllUsers() {
        $conn = $this->db->connect();
        if($conn){
            $stmt = $conn->prepare("SELECT * FROM users");
            $stmt->execute();

            $users = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $users;
        } else {
            return [];
        }
    }

}
