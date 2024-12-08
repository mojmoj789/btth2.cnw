<?php
require_once '../config/config.php';

class User {
    private $host;
    private $dbname;
    private $user;
    private $pass;
    private $conn;

    public function __construct($host, $dbname, $user, $pass) {
        $this->host = $host;
        $this->dbname = $dbname;
        $this->user = $user;
        $this->pass = $pass;
    }

    public function getConnection() {
        try {
            $this->conn = new PDO("mysql:host={$this->host};dbname={$this->dbname}", $this->user, $this->pass);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $this->conn;
        } catch (PDOException $e) {
            return null;
        }
    }

    public function close() {
        $this->conn = null;
    }
}

class userService {
    private $db;

    public function __construct() {
        $this->db = new DBConnection(DB_HOST, DB_NAME, DB_USER, DB_PASS);
    }

    public function getAllUsers() {
        $conn = $this->db->getConnection();
        if($conn) {
            $stmt = $conn->prepare("SELECT * FROM users");
            $stmt->execute();

            $users = $stmt->fetchAll(PDO::FETCH_ASSOC);

            $this->db->close();
            return $users;
        } else {
            return [];
        }
    }

    public function getUserById($id) {
        $conn = $this->db->getConnection();
        if($conn) {
            $stmt = $conn->prepare("SELECT * FROM users WHERE id = :id");
            $stmt->bindParam(':id', $id, PDO::PARAM_INT);
            $stmt->execute();

            $user = $stmt->fetch(PDO::FETCH_ASSOC);

            $this->db->close();

            return $user ? $user : null;
        } else {
            return null;
        }
    }

    public function getUsersByRole($role) {
        $conn = $this->db->getConnection();
        if($conn) {
            $stmt = $conn->prepare("SELECT * FROM users WHERE role = :role");
            $stmt->bindParam(':role', $role, PDO::PARAM_INT);
            $stmt->execute();

            $users = $stmt->fetchAll(PDO::FETCH_ASSOC);

            $this->db->close();

            return $users;
        } else {
            return [];
        }
    }
}

?>
