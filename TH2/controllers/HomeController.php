<?php
require_once 'controllers/BaseController.php';


class HomeController extends BaseController
{   
    private $categoryModel; 
    public function __construct()
    {
        $this->loadModel('CategoryModel');
        $this->loadModel('NewsModel');
        $this->categoryModel = new CategoryModel;
        $this->newsModel = new NewsModel;
    }
    public function index()
    {
        $categories = $this->categoryModel->getAllCategories();
        $news = $this->newsModel->getAllNews();


    // Gọi view và truyền các dữ liệu cần thiết
    return $this->view('home.index', [
        'categories' => $categories,
        'news' => $news
    ]);

    }

    
}