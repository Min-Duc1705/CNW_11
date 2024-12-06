<?php
require_once __DIR__ . '/../models/UserModel.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $userModel = new UserModel();
    $isLoggedIn = $userModel->login($username, $password);

    if ($isLoggedIn) {
        header("Location: ../views/admin/dashboard.php");
        exit();
    } else {
        header("Location: ../views/admin/login.php?error=invalid_credentials");
        exit();
    }
}
?>
