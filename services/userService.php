<?php
require_once APP_ROOT . '/models/users.php';
class userService{
    public function getAllUsers(){
        try{
            $conn = new PDO('mysql:host=localhost;dbname=news', 'root', '');

            $sql = "SELECT * FROM users";
            $stmt = $conn->query($sql);

            $users = [];
            while($row = $stmt->fetch()){
                $user = new users($row['id'], $row['username'], $row['password'], $row['role']);
                $users[] = $user;
            }
            return $users;
        }catch(PDOException $e){
            return $users = [];
          //  echo $e->getMessage();
        }
    }
}
