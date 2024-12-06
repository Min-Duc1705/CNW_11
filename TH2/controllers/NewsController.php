<?php
require_once __DIR__ . "/../models/NewsModel.php";

class NewsController {
    private $model;

    public function __construct($db) {
        $this->model = new NewsModel($db); // Truyền kết nối CSDL vào model
    }

    // Phương thức detail để hiển thị bài viết chi tiết
    public function detail($id) {
        $newsDetail = $this->model->getNewsId($id); // Lấy bài viết từ model
        if ($newsDetail) {
            require_once __DIR__ . '/../views/news/detail.php'; // Gọi view để hiển thị
        } else {
            echo "<p>Bài viết không tồn tại.</p>";
        }
    }





    // Lê Minh Đức
    public function listNews() {
        return $this->model->getAllNews();
    }

    public function createNews($title, $content, $image, $category_id) {
        return $this->model->addNews($title, $content, $image, $category_id);
    }

    public function editNews($id, $title, $content, $image, $category_id) {
        return $this->model->updateNews($id, $title, $content, $image, $category_id);
    }

    public function removeNews($id) {
        return $this->model->deleteNews($id);
    }

    // Phương thức gọi getNewsById từ NewsModel
    public function getNewsById($id) {
        return $this->model->getNewsById($id);
    }
}
?>