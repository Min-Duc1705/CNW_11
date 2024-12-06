<?php
require_once './Config/Database.php'; // Kết nối CSDL

// Tạo kết nối CSDL
$db = new Database();
$dbConnection = $db->connect();

// Lấy controller, action, và id từ query string
$controllerName = ucfirst(strtolower($_REQUEST['controller'] ?? 'home')) . 'Controller';
$actionName = $_REQUEST['action'] ?? 'index';
$id = $_REQUEST['id'] ?? null;
$search = $_REQUEST['search'] ?? null;

// Đường dẫn đến tệp controller
$controllerPath = "./Controllers/${controllerName}.php";

// Kiểm tra xem controller có tồn tại không
if (!file_exists($controllerPath)) {
    die("Không tìm thấy controller $controllerName.");
}
require_once $controllerPath;

// Tạo đối tượng controller
$controllerObject = new $controllerName($dbConnection);

if($search ){
    $controllerObject->search($search);
    exit();
}

// Gọi action tương ứng
    if ($actionName == 'detail' && $id !== null) {
        $controllerObject->$actionName($id);
    } else {
        $controllerObject->$actionName($id);
    }

?>
