<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chi tiết tin tức</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            line-height: 1.6;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .container {
            width: 80%;
            margin: 20px auto;
            background: #fff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            font-size: 28px;
            color: #333;
            text-align: center;
            margin-bottom: 20px;
            font-weight: bold;
        }

        .news-image {
            max-width: 100%;
            height: auto;
            border-radius: 8px;
            margin-bottom: 20px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .back-btn {
            display: inline-block;
            margin-bottom: 20px;
            padding: 10px 15px;
            background-color: #007BFF;
            color: #fff;
            text-decoration: none;
            border-radius: 4px;
            transition: background-color 0.3s;
            font-size: 16px;
        }

        .back-btn:hover {
            background-color: #0056b3;
        }

        .news-category {
            font-size: 18px;
            font-style: italic;
            color: #555;
            margin-bottom: 10px;
        }

        .news-content {
            font-size: 16px;
            color: #333;
            line-height: 1.8;
            margin-top: 20px;
        }

        .news-content p {
            margin-bottom: 15px;
        }

        .news-footer {
            margin-top: 30px;
            text-align: center;
            color: #888;
        }

        .news-footer small {
            font-size: 14px;
        }

        /* Thêm hiệu ứng cho liên kết */
        a {
            color: #007BFF;
            text-decoration: none;
            transition: color 0.3s;
        }

        a:hover {
            color: #0056b3;
            text-decoration: underline;
        }
    </style>
</head>

<body>
    <div class="container">
        <!-- Nút quay lại -->
        <a href="index.php?page=home" class="back-btn">Quay lại</a>

        <!-- Tiêu đề tin tức -->
        <h1><?php echo htmlspecialchars($newsDetail['title']); ?></h1>

        <!-- Chuyên mục -->
        <p class="news-category">Chuyên mục: <?php echo htmlspecialchars($newsDetail['category']); ?></p>

        <!-- Ảnh tin tức (nếu có) -->
        <?php if (!empty($newsDetail['image'])): ?>
            <img src="uploads/<?php echo htmlspecialchars($newsDetail['image']); ?>" alt="Ảnh tin tức" class="news-image">
        <?php endif; ?>

        <!-- Nội dung tin tức -->
        <div class="news-content">
            <?php echo nl2br(htmlspecialchars($newsDetail['content'])); ?>
        </div>

        <!-- Ngày đăng -->
        <div class="news-footer">
            <p><small>Ngày đăng: <?php echo htmlspecialchars($newsDetail['created_at']); ?></small></p>
        </div>
    </div>
</body>

</html>
