<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<title>Trang Chủ</title>
</head>

<body>
    <header class="d-flex align-items-center justify-content-between py-3 px-4 bg-light shadow-sm">
        <!-- Logo -->
        <nav class="logo">
            <img src="../../public/images/logo.png" alt="Logo" class="img-fluid" style="height: 40px;">
        </nav>

        <!-- Thanh tìm kiếm -->
        <nav class="search-bar">
            <form action="../../controllers/HomeController.php" method="GET" class="d-flex align-items-center">
                <input
                    type="text"
                    name="search"
                    placeholder="Tìm kiếm bài viết..."
                    required
                    class="form-control me-2"
                    style="max-width: 400px; border-radius: 25px;">
                <button type="submit" class="btn btn-outline-secondary">
                    <i class="fa fa-search"></i>
                </button>
            </form>
        </nav>

        <!-- Nút đăng nhập / đăng ký -->
        <nav class="auth-buttons">
            <a href="../Admin/login.php" class="btn btn-success">Đăng Nhập</a>
            <a href="../Admin/register.php" class="btn btn-outline-primary">Đăng Ký</a>
        </nav>
    </header>

    <div class="container-fluid bg-primary py-2">
        <ul class="nav justify-content-evenly list-unstyled d-flex">
            <li class="nav-item"><a href="#" class="nav-link text-white"><i class="fa-solid fa-house"></i></a></li>
            <li class="nav-item"><a href="#" class="nav-link text-white">Thời sự</a></li>
            <li class="nav-item"><a href="#" class="nav-link text-white">Khoa Học</a></li>
            <li class="nav-item"><a href="#" class="nav-link text-white">Thế Giới</a></li>
            <li class="nav-item"><a href="#" class="nav-link text-white">Thể Thao</a></li>
            <li class="nav-item"><a href="#" class="nav-link text-white">Giải Trí</a></li>
            <li class="nav-item"><a href="#" class="nav-link text-white">Pháp Luật</a></li>
            <li class="nav-item"><a href="#" class="nav-link text-white">Giáo Dục</a></li>
       
        </ul>
    </div>

    <div class="container my-4">
        <div class="row">
            <div class="col-lg-6 mb-4">
                <img class="img-fluid mb-3" src="../../public/images/9d2126a5c29478ca2185.webp" alt="News Image">
                <h3><a href="detail.html" class="text-decoration-none text-dark">Nepal and PNG to play ODI series in Oman</a></h3>
            </div>
            <div class="col-lg-6">
                <div class="row">
                    <div class="col-md-6 mb-4">
                        <div class="image image-sm mb-1">
                            <img class="img-fluid" src="../../public/images/9d2126a5c29478ca2185.webp" alt="News Image">
                        </div>
                        <h3 class="mb-4">
                            <a href="detail.html" class="text-decoration-none text-dark">Paras Khadka retires from international cricket</a>
                        </h3>

                        <div class="image image-sm mb-1">
                            <img class="img-fluid" src="../../public/images/9d2126a5c29478ca2185.webp" alt="News Image">
                        </div>
                        <h3 class="mb-4">
                            <a href="detail.html" class="text-decoration-none text-dark">New Zealand win inaugural World Test Championship</a>
                        </h3>
                    </div>

                    <div class="col-md-6 mb-4">
                        <div class="image image-sm mb-1">
                            <img class="img-fluid" src="../../public/images/9d2126a5c29478ca2185.webp" alt="News Image">
                        </div>
                        <h3 class="mb-4">
                            <a href="detail.html" class="text-decoration-none text-dark">Afridi to play Everest Premier League from Kathmandu Kings</a>
                        </h3>

                        <div class="image image-sm mb-3">
                            <img class="img-fluid" src="../../public/images/9d2126a5c29478ca2185.webp" alt="News Image">
                        </div>
                        <h3>
                            <a href="detail.html" class="text-decoration-none text-dark">IPL 2021 to resume in UAE in September-October</a>
                        </h3>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="mb-4">
                    <div class="section-title mb-4">
                        <span class="text-primary">Latest Updates</span>
                    </div>
                    <div class="card">
                        <img src="..." class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
