<?php
class Database {
    private $host = "localhost";
    private $dbname = "tintuc";
    private $username = "admin";
    private $password = "123456";
    public $conn;
    public function __construct() {
        $this -> connect();
    }
    // Kết nối đến cơ sở dữ liệu
    public function connect() {
        try {
            $this->conn = new PDO("mysql:host={$this->host};dbname={$this->dbname}", $this->username, $this->password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $this->conn;
        } catch (PDOException $e) {
            die("Connection failed: " . $e->getMessage());
        }
    }
}
?>
