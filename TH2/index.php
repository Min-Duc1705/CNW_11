<?php



require './Controllers/BaseController.php';

// Lấy giá trị controller và action từ query string hoặc đặt mặc định
$controllerName = ucfirst((strtolower($_REQUEST['controller'] ?? 'home'))) . 'Controller';
$actionName = $_REQUEST['action'] ?? 'index';

// Tải tệp controller
$controllerPath = "./Controllers/${controllerName}.php";
if (!file_exists($controllerPath)) {
    die("Controller file $controllerPath không tồn tại.");
}
require $controllerPath;

// Khởi tạo controller và gọi action
$controllerObject = new $controllerName;
if (!method_exists($controllerObject, $actionName)) {
    die("Action $actionName không tồn tại trong controller $controllerName.");
}
$controllerObject->$actionName();


?>

