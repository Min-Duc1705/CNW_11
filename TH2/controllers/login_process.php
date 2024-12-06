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
    }else{
        echo "Đăng nhập không thành công! Sai tài khoản hoặc mật khẩu";
    }
        
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
</nav>
            <main class="content px-3 py-4">
            <nav class="auth-buttons">
                <form action="/CNW_11/TH2/views/admin/login.php"method="GET">
                        <button type="submit" class="btn btn-success">Quay lại trang đăng nhập</button>
                </form>
            </nav>
</body>
</html>
