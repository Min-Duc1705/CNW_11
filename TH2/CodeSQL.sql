CREATE DATABASE tintuc;
  USE tintuc;

  CREATE TABLE users (
      id INT PRIMARY KEY AUTO_INCREMENT,
      username VARCHAR(255),
      password VARCHAR(255),
      role INT
  );

  CREATE TABLE categories (
      id INT PRIMARY KEY AUTO_INCREMENT,
      name VARCHAR(255)
  );

  CREATE TABLE news (
      id INT PRIMARY KEY AUTO_INCREMENT,
      title VARCHAR(255),
      content TEXT,
      image VARCHAR(255),
      created_at DATETIME,
      category_id INT,
      FOREIGN KEY (category_id) REFERENCES categories(id)
  );


INSERT INTO users (username, password, role) VALUES 
('admin', '123456', 1)


INSERT INTO categories (name) VALUES 
('Thời sự'),
('Thể thao'),
('Giải trí'),
('Kinh tế'),
('Công nghệ');

INSERT INTO news (title, content, image, category_id) VALUES
('Tăng trưởng kinh tế năm 2024 đạt dự báo 6.5%', 
 'Theo báo cáo từ Bộ Kế hoạch và Đầu tư, kinh tế Việt Nam sẽ tiếp tục phát triển ổn định với dự báo tăng trưởng đạt 6.5% vào năm 2024.', 
 '../../public/images/gt.jpg', 
 4),
('Đội tuyển bóng đá Việt Nam chuẩn bị cho SEA Games', 
 'Huấn luyện viên Park Hang Seo đặt mục tiêu bảo vệ huy chương vàng tại kỳ SEA Games năm nay.', 
 '../../public/images/hlvparkhangseo.jpg', 
 2),
('Apple công bố iPhone 15 với nhiều cải tiến', 
 'iPhone 15 được Apple ra mắt với nhiều tính năng mới, đặc biệt là cổng sạc USB-C.', 
 '../../public/images/iphone.jpg', 
 5),
('Giải thưởng âm nhạc quốc tế thu hút nghệ sĩ Việt', 
 'Nhiều nghệ sĩ Việt Nam tham dự và biểu diễn tại lễ trao giải âm nhạc quốc tế.', 
 '../../public/images/sontung.jpg', 
 3),
('Hà Nội triển khai nhiều dự án giao thông lớn', 
 'Thành phố Hà Nội đang đẩy mạnh triển khai các dự án giao thông trọng điểm nhằm giảm ùn tắc.', 
 '../../public/images/gt.jpg', 
 1);