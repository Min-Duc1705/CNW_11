<?php
// Đảm bảo đường dẫn đúng đến Database.php
require_once __DIR__ . '/../Config/Database.php';  // Đảm bảo rằng đường dẫn đúng

class CategoryModel {
    private $conn; // Kết nối cơ sở dữ liệu

    // Hàm khởi tạo để kết nối với cơ sở dữ liệu
    public function __construct() {
        $db = new Database(); // Tạo đối tượng Database
        $this->conn = $db->connect(); // Lấy kết nối PDO từ phương thức connect
    }

    // Lấy tất cả các danh mục
    public function getAllCategories() {
        $query = "SELECT * FROM categories";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC); // Trả về kết quả dưới dạng mảng
    }

    // Lấy một danh mục theo ID (chưa hoàn thiện)
    public function getCategoryById($id) {
        $query = "SELECT * FROM categories WHERE id = :id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC); // Trả về một kết quả duy nhất
    }
}
?>
