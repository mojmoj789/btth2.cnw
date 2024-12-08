<?php

    // Hàm để kết nối với CSDL (sử dụng PDO hoặc MySQLi)

class Users {
    private $pdo;
    private $id;
    private $username;
    private $password;
    private $role;

    public function __construct($id, $username, $password, $role) {
        $this->id = $id;
        $this->username = $username;
        $this->password = $password;
        $this->role = $role;
    }

    public function getId() {
        return $this->id;
    }

    public function getUsername() {
        return $this->username;
    }

    public function getPassword() {
        return $this->password;
    }

    public function getRole() {
        return $this->role;
    }


//    public function login($username, $password) {
//            // Truy vấn để kiểm tra người dùng với tên đăng nhập
//            $stmt = $this->pdo->prepare("SELECT * FROM users WHERE username = :username LIMIT 1");
//            $stmt->bindParam(':username', $username);
//            $stmt->execute();
//
//            $user = $stmt->fetch(PDO::FETCH_ASSOC);
//
//            if ($user && password_verify($password, $user['password'])) {
//                return $user;
//            } else {
//                return null; // Nếu không tìm thấy hoặc mật khẩu sai, trả về null
//            }
//        }
}

