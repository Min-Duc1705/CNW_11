<?php
require_once __DIR__ . '/../models/UserModel.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $userModel = new UserModel();
    $isLoggedIn = $userModel->login($username, $password);

    if ($username == "Admin" && $password == "Admin123") {
        $_SESSION['username'] = $username;
        header("Location: views/admin/dashboard.php");
        exit();
    } else {
        echo "Đăng nhập không thành công!";
    }
    if ($isLoggedIn) {
        header("Location: ../views/admin/dashboard.php");
        exit();
    } else {
        header("Location: TH2/index.php");
        exit();
    }
}

?>
