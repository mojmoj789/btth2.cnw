CREATE DATABASE news;
USE news

CREATE TABLE users(
	id INT AUTO_INCREMENT PRIMARY KEY,
	username VARCHAR(50),
	password VARCHAR(50),
	role INT
);

CREATE TABLE categories(
  id INT AUTO_INCREMENT PRIMARY KEY,
  name NVARCHAR(255)
);


CREATE TABLE news(
	id INT PRIMARY KEY AUTO_INCREMENT,
	title NVARCHAR(255),
	content TEXT,
	image NVARCHAR(255),
	created_at DATETIME,
	category_id INT,
	FOREIGN KEY (category_id) REFERENCES categories(id)
);

insert into users (username, password, role) values ('rsebert0', '123', 0);
insert into users (username, password, role) values ('admin', 'admin', 1);

INSERT INTO categories (name) VALUES
    (N'Thể thao'),
    (N'Giáo dục'),
    (N'Kinh tế');
INSERT INTO news (title, content, image, created_at, category_id) VALUES
    (N'Tin tức Thể thao 1', N'Nội dung chi tiết tin tức thể thao 1.', 'image1.jpg', NOW(), 1),
    (N'Tin tức Giáo dục 1', N'Nội dung chi tiết tin tức giáo dục 1.', 'image2.jpg', NOW(), 2),
    (N'Tin tức Kinh tế 1', N'Nội dung chi tiết tin tức kinh tế 1.', 'image3.jpg', NOW(), 3);

