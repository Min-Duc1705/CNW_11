<?php

class Database {
    private $host = "localhost";
    private $username = "admin";
    private $password = "123456";
    private $database = "tintuc";
    private $conn = null;

    // Hàm thiết lập kết nối
    public function getConnection() {
        if ($this->conn === null) { // Kiểm tra nếu chưa kết nối
            try {
                // Tạo kết nối PDO với charset UTF-8
                $dsn = "mysql:host=" . $this->host . ";dbname=" . $this->database;
                $this->conn = new PDO($dsn, $this->username, $this->password);
                
                // Cấu hình chế độ lỗi cho PDO
                $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $e) {
                // Hiển thị lỗi kết nối
                die("Lỗi kết nối cơ sở dữ liệu: " . $e->getMessage());
            }
        }
        return $this->conn; // Trả về kết nối hiện tại
    }

    // Hàm đóng kết nối (tùy chọn)
    public function closeConnection() {
        $this->conn = null;
    }
    
}

?>
