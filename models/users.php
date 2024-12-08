<?php
require_once APP_ROOT . '/libs/DBConnection.php';
require_once APP_ROOT . '/models/users.php';

    class userService{
        private $db;

        public function __construct(){
            $this->db = new DBConnection(DB_HOST, DB_USER, DB_PASS, DB_NAME);
        }

        public function getAllUsers(){
            $conn = $this->db->connect();
            if(!$conn){
                return [];
            }
            $stmt = $conn->prepare("SELECT * FROM users");
            $stmt->execute();

            $users = [];

            while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
                $user = new users($row['id'], $row['username'], $row['password'], $row['role']);
                $users[] = $user;
            }
            return $users;

        }
    }
    class user {
        private $id;
        private $username;
        private $password;
        private $role;

        public function __construct($id, $username, $password, $role)
        {
            $this->id = $id;
            $this->username = $username;
            $this->password = $password;
            $this->role = $role;
        }

        public function getId()
        {
            return $this->id;
        }

        public function setId($id): void
        {
            $this->id = $id;
        }

        public function getUsername()
        {
            return $this->username;
        }

        public function setUsername($username): void
        {
            $this->username = $username;
        }

        public function getPassword()
        {
            return $this->password;
        }

        public function setPassword($password): void
        {
            $this->password = $password;
        }

        public function getRole()
        {
            return $this->role;
        }

        public function setRole($role): void
        {
            $this->role = $role;
        }



    }