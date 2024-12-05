<?php
require_once 'Database.php'; // Đảm bảo đường dẫn đúng

try {
    $db = new Database(); // Tạo một đối tượng Database
    $conn = $db->getConnection(); // Gọi hàm getConnection để kết nối
    echo "Kết nối cơ sở dữ liệu thành công!";
} catch (PDOException $e) {
    echo "Lỗi kết nối cơ sở dữ liệu: " . $e->getMessage();
}
?>
