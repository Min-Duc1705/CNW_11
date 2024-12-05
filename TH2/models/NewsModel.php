<?php
require_once './Config/NewsDB.php';
class NewsModel {
    private $conn;

    // Constructor để kết nối cơ sở dữ liệu
    public function __construct() {
        $db = new NewsDB(); // Tạo đối tượng UserDB
        $this->conn = $db->getConnection(); // Lấy kết nối PDO
    }

    // Lấy danh sách tin tức
    public function getAllNews() {
        $sql = "SELECT * FROM news ORDER BY created_at DESC";
        $stmt = $this->conn->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // Lấy tin tức theo ID
    public function getNewsById($id) {
      //tim kiem cho nay
    }
    // Đóng kết nối
    public function closeConnection() {
        $this->conn = null; // Đặt kết nối về null để giải phóng tài nguyên
    }
}
?>
