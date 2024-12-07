<?php

class Users {
    // Hàm để kết nối với CSDL (sử dụng PDO hoặc MySQLi)
    private $pdo;

    public function __construct() {
        // Cấu hình kết nối CSDL
        $this->pdo = new PDO("mysql:host=localhost;dbname=news", "root", "");
        $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    public function login($username, $password) {
        // Truy vấn để kiểm tra người dùng với tên đăng nhập
        $stmt = $this->pdo->prepare("SELECT * FROM users WHERE username = :username LIMIT 1");
        $stmt->bindParam(':username', $username);
        $stmt->execute();

        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user && password_verify($password, $user['password'])) {
            return $user;
        } else {
            return null; // Nếu không tìm thấy hoặc mật khẩu sai, trả về null
        }
    }
}
?>
