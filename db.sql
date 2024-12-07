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

insert into categories (name) values ('Thoi su');
insert into categories (name) values ('The thao');
insert into categories (name) values ('The gioi');
insert into categories (name) values ('Giai tri');
insert into categories (name) values ('Khoa hoc');
insert into categories (name) values ('Kinh doanh');
insert into categories (name) values ('Du lich');
insert into categories (name) values ('Cong nghe');
