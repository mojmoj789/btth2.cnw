<?php
require_once APP_ROOT . '/models/users.php';

class UserService {
    private $db;

    public function __construct() {
        $this->db = new DBConnection(DB_HOST, DB_USER, DB_PASS, DB_NAME, DB_PORT);
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

    public function getUserByUsername($username) {
        $conn = $this->db->getConnection();
        if($conn) {
            $stmt = $conn->prepare("SELECT * FROM users WHERE username = :username");
            $stmt->bindParam(':username', $username, PDO::PARAM_STR);
            $stmt->execute();

            $user = $stmt->fetch(PDO::FETCH_ASSOC);

            $this->db->close();

            return $user ? $user : null;
        } else {
            return null;
        }
    }
}
