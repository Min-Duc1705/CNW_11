<?php
require_once './Config/CategoriesDB.php';
class CategoryModel {
    private $conn; // Kết nối cơ sở dữ liệu

    // Hàm khởi tạo để kết nối với cơ sở dữ liệu
    public function __construct() {
        $db = new CategoriesDB(); // Tạo đối tượng UserDB
        $this->conn = $db->getConnection(); // Lấy kết nối PDO
    }
    // Lấy tất cả các danh mục
    public function getAllCategories() {
        $query = "SELECT * FROM categories";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // Lấy một danh mục theo ID
    public function getCategoryById($id) {
       
    }
}
?>