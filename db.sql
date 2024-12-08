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

insert into news (title, content, image, created_at, category_id) values ('Bottle Shock', 'Maecenas leo odio, condimentum id, luctus nec, molestie sed, justo. Pellentesque viverra pede ac diam. Cras pellentesque volutpat dui.', 'http://dummyimage.com/243x100.png/5fa2dd/ffffff', '2024-08-12', 1);
insert into news (title, content, image, created_at, category_id) values ('School of Flesh, The (École de la chair, L'')', 'Quisque porta volutpat erat. Quisque erat eros, viverra eget, congue eget, semper rutrum, nulla. Nunc purus.

Phasellus in felis. Donec semper sapien a libero. Nam dui.

Proin leo odio, porttitor id, consequat in, consequat ut, nulla. Sed accumsan felis. Ut at dolor quis odio consequat varius.', 'http://dummyimage.com/177x100.png/cc0000/ffffff', '2024-10-29', 1);
insert into news (title, content, image, created_at, category_id) values ('Damn the Defiant! (H.M.S. Defiant)', 'Cras non velit nec nisi vulputate nonummy. Maecenas tincidunt lacus at velit. Vivamus vel nulla eget eros elementum pellentesque.

Quisque porta volutpat erat. Quisque erat eros, viverra eget, congue eget, semper rutrum, nulla. Nunc purus.', 'http://dummyimage.com/198x100.png/ff4444/ffffff', '2023-12-28', 2);
insert into news (title, content, image, created_at, category_id) values ('Moment of Truth, The (Il momento della verità)', 'Maecenas tristique, est et tempus semper, est quam pharetra magna, ac consequat metus sapien ut nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Mauris viverra diam vitae quam. Suspendisse potenti.

Nullam porttitor lacus at turpis. Donec posuere metus vitae ipsum. Aliquam non mauris.', 'http://dummyimage.com/180x100.png/ff4444/ffffff', '2024-06-09', 3);
insert into news (title, content, image, created_at, category_id) values ('Deadly Voyage', 'Mauris enim leo, rhoncus sed, vestibulum sit amet, cursus id, turpis. Integer aliquet, massa id lobortis convallis, tortor risus dapibus augue, vel accumsan tellus nisi eu orci. Mauris lacinia sapien quis libero.

Nullam sit amet turpis elementum ligula vehicula consequat. Morbi a ipsum. Integer a nibh.

In quis justo. Maecenas rhoncus aliquam lacus. Morbi quis tortor id nulla ultrices aliquet.', 'http://dummyimage.com/218x100.png/dddddd/000000', '2024-10-28', 4);
insert into news (title, content, image, created_at, category_id) values ('Scavenger Hunt', 'Quisque porta volutpat erat. Quisque erat eros, viverra eget, congue eget, semper rutrum, nulla. Nunc purus.

Phasellus in felis. Donec semper sapien a libero. Nam dui.

Proin leo odio, porttitor id, consequat in, consequat ut, nulla. Sed accumsan felis. Ut at dolor quis odio consequat varius.', 'http://dummyimage.com/221x100.png/cc0000/ffffff', '2024-11-21', 5);
insert into news (title, content, image, created_at, category_id) values ('My Brother Tom', 'In hac habitasse platea dictumst. Etiam faucibus cursus urna. Ut tellus.

Nulla ut erat id mauris vulputate elementum. Nullam varius. Nulla facilisi.', 'http://dummyimage.com/138x100.png/cc0000/ffffff', '2023-12-30', 4);
insert into news (title, content, image, created_at, category_id) values ('Gay Deceivers, The', 'In congue. Etiam justo. Etiam pretium iaculis justo.

In hac habitasse platea dictumst. Etiam faucibus cursus urna. Ut tellus.

Nulla ut erat id mauris vulputate elementum. Nullam varius. Nulla facilisi.', 'http://dummyimage.com/119x100.png/ff4444/ffffff', '2024-11-13', 2);
insert into news (title, content, image, created_at, category_id) values ('Man, Woman and Beast (L''uomo la donna e la bestia)', 'Proin interdum mauris non ligula pellentesque ultrices. Phasellus id sapien in sapien iaculis congue. Vivamus metus arcu, adipiscing molestie, hendrerit at, vulputate vitae, nisl.', 'http://dummyimage.com/185x100.png/dddddd/000000', '2024-01-14', 3);
insert into news (title, content, image, created_at, category_id) values ('Avenging Conscience, The', 'Vestibulum ac est lacinia nisi venenatis tristique. Fusce congue, diam id ornare imperdiet, sapien urna pretium nisl, ut volutpat sapien arcu sed augue. Aliquam erat volutpat.

In congue. Etiam justo. Etiam pretium iaculis justo.', 'http://dummyimage.com/189x100.png/cc0000/ffffff', '2024-08-25', 1);
insert into news (title, content, image, created_at, category_id) values ('Superstar: The Karen Carpenter Story', 'Fusce posuere felis sed lacus. Morbi sem mauris, laoreet ut, rhoncus aliquet, pulvinar sed, nisl. Nunc rhoncus dui vel sem.', 'http://dummyimage.com/138x100.png/5fa2dd/ffffff', '2024-06-18', 2);
insert into news (title, content, image, created_at, category_id) values ('One Crazy Summer', 'Proin leo odio, porttitor id, consequat in, consequat ut, nulla. Sed accumsan felis. Ut at dolor quis odio consequat varius.

Integer ac leo. Pellentesque ultrices mattis odio. Donec vitae nisi.', 'http://dummyimage.com/206x100.png/cc0000/ffffff', '2024-03-04', 5);
insert into news (title, content, image, created_at, category_id) values ('Dr. Terror''s House of Horrors', 'Maecenas tristique, est et tempus semper, est quam pharetra magna, ac consequat metus sapien ut nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Mauris viverra diam vitae quam. Suspendisse potenti.', 'http://dummyimage.com/183x100.png/cc0000/ffffff', '2024-02-24', 3);
insert into news (title, content, image, created_at, category_id) values ('Maurice', 'Quisque id justo sit amet sapien dignissim vestibulum. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nulla dapibus dolor vel est. Donec odio justo, sollicitudin ut, suscipit a, feugiat et, eros.

Vestibulum ac est lacinia nisi venenatis tristique. Fusce congue, diam id ornare imperdiet, sapien urna pretium nisl, ut volutpat sapien arcu sed augue. Aliquam erat volutpat.

In congue. Etiam justo. Etiam pretium iaculis justo.', 'http://dummyimage.com/133x100.png/5fa2dd/ffffff', '2024-11-24', 2);
insert into news (title, content, image, created_at, category_id) values ('Club Dread', 'Aliquam quis turpis eget elit sodales scelerisque. Mauris sit amet eros. Suspendisse accumsan tortor quis turpis.', 'http://dummyimage.com/172x100.png/ff4444/ffffff', '2023-12-21', 5);
insert into news (title, content, image, created_at, category_id) values ('Tamara Drewe', 'Duis aliquam convallis nunc. Proin at turpis a pede posuere nonummy. Integer non velit.

Donec diam neque, vestibulum eget, vulputate ut, ultrices vel, augue. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec pharetra, magna vestibulum aliquet ultrices, erat tortor sollicitudin mi, sit amet lobortis sapien sapien non mi. Integer ac neque.', 'http://dummyimage.com/187x100.png/ff4444/ffffff', '2024-10-09', 4);
insert into news (title, content, image, created_at, category_id) values ('B.F.''s Daughter', 'Phasellus in felis. Donec semper sapien a libero. Nam dui.', 'http://dummyimage.com/250x100.png/ff4444/ffffff', '2024-01-29', 1);
insert into news (title, content, image, created_at, category_id) values ('King of Masks, The (Bian Lian)', 'Nullam sit amet turpis elementum ligula vehicula consequat. Morbi a ipsum. Integer a nibh.

In quis justo. Maecenas rhoncus aliquam lacus. Morbi quis tortor id nulla ultrices aliquet.', 'http://dummyimage.com/248x100.png/ff4444/ffffff', '2024-02-11', 4);
insert into news (title, content, image, created_at, category_id) values ('I''ll Sleep When I''m Dead', 'Aliquam quis turpis eget elit sodales scelerisque. Mauris sit amet eros. Suspendisse accumsan tortor quis turpis.

Sed ante. Vivamus tortor. Duis mattis egestas metus.', 'http://dummyimage.com/116x100.png/ff4444/ffffff', '2024-04-25', 1);
insert into news (title, content, image, created_at, category_id) values ('Madeline', 'Vestibulum quam sapien, varius ut, blandit non, interdum in, ante. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Duis faucibus accumsan odio. Curabitur convallis.', 'http://dummyimage.com/160x100.png/dddddd/000000', '2024-09-03', 3);
insert into news (title, content, image, created_at, category_id) values ('Boxing Gym', 'Etiam vel augue. Vestibulum rutrum rutrum neque. Aenean auctor gravida sem.

Praesent id massa id nisl venenatis lacinia. Aenean sit amet justo. Morbi ut odio.

Cras mi pede, malesuada in, imperdiet et, commodo vulputate, justo. In blandit ultrices enim. Lorem ipsum dolor sit amet, consectetuer adipiscing elit.', 'http://dummyimage.com/197x100.png/ff4444/ffffff', '2024-11-01', 2);