<?php
require_once(APP_ROOT . '/config/config.php');

class DBConnection {
    private $host;
    private $user;
    private $pass;
    private $db;
    private $port;
    private $conn;

    public function __construct($host, $user, $pass, $db, $port) {
        $this->host = $host;
        $this->user = $user;
        $this->pass = $pass;
        $this->db = $db;
        $this->port = $port;
    }

    public function getConnection() {
        try {
            $this->conn = new PDO("mysql:host=$this->host;port=$this->port;dbname=$this->db", $this->user, $this->pass);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $this->conn;

        } catch (PDOException $e) {
            throw new Exception("Connection failed: " . $e->getMessage());
        }
    }

    public function close() {
        $this->conn = null;
    }
}
?>
