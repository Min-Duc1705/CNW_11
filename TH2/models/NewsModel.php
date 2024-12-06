<?php
require_once '../Config/Database.php';
class NewsModel {
    private $conn;


    // Hoàng Văn Điệp
    // Constructor để kết nối cơ sở dữ liệu
    public function __construct() {
        $db = new Database(); // Tạo đối tượng UserDB
        $this->conn = $db->connect(); // Lấy kết nối PDO
    }

    // Lấy danh sách tin tức
    public function getAllNewsUser() {
        $sql = "SELECT * FROM news ORDER BY created_at DESC";
        $stmt = $this->conn->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    
    // Tìm Kiếm
    public function TimKiem($id) {
      //tim kiem cho nay
    }




    // Lê Minh Đức làm 
    public function getAllNews() {
        $stmt = $this->conn->prepare("SELECT news.*, categories.name AS category_name FROM news 
                                      LEFT JOIN categories ON news.category_id = categories.id");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function addNews($title, $content, $image, $category_id) {
        $stmt = $this->conn->prepare("INSERT INTO news (title, content, image, created_at, category_id) 
                                      VALUES (?, ?, ?, NOW(), ?)");
        return $stmt->execute([$title, $content, $image, $category_id]);
    }

    public function updateNews($id, $title, $content, $image, $category_id) {
        $stmt = $this->conn->prepare("UPDATE news SET title = ?, content = ?, image = ?, category_id = ? WHERE id = ?");
        return $stmt->execute([$title, $content, $image, $category_id, $id]);
    }

    public function deleteNews($id) {
        $stmt = $this->conn->prepare("DELETE FROM news WHERE id = ?");
        return $stmt->execute([$id]);
    }

    // Phương thức getNewsById để lấy tin tức theo ID
    public function getNewsById($id) {
        $stmt = $this->conn->prepare("SELECT news.*, categories.name AS category_name FROM news 
                                      LEFT JOIN categories ON news.category_id = categories.id 
                                      WHERE news.id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
    // Đóng kết nối
    public function closeConnection() {
        $this->conn = null; // Đặt kết nối về null để giải phóng tài nguyên
    }
}
?>
