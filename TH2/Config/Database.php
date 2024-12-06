<?php
class Database {
    private $host = "localhost";
    private $dbname = "tintuc";
    private $username = "admin";
    private $password = "123456";
    public $conn;

    // Kết nối đến cơ sở dữ liệu
    public function connect() {
        try {
            // Tạo kết nối PDO và lưu vào biến $conn
            $this->conn = new PDO("mysql:host=$this->host;dbname=$this->dbname", $this->username, $this->password);
            // Thiết lập chế độ báo lỗi cho PDO
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $this->conn; // Trả về đối tượng kết nối PDO
        } catch (PDOException $e) {
            // Nếu có lỗi, xuất ra lỗi kết nối
            echo "Connection failed: " . $e->getMessage();
            return null; // Nếu có lỗi, trả về null
        }
    }
}
?>
