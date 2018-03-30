create database letsjoinDB;
use letsjoinDB;

create table users (
	id int unsigned AUTO_INCREMENT not null primary key,
	firstname varchar(255)  NOT NULL,
  lastname varchar(255)  NOT NULL,
  email varchar(255)  NOT NULL,
  role varchar(255)  NOT NULL
) ENGINE INNODB CHARSET UTF8 COLLATE UTF8_BIN;

create table articles (
	  id int unsigned AUTO_INCREMENT not null primary key,
    title varchar(255),
    content varchar(255) NOT NULL,
    picture VARCHAR(255)  NOT NULL,
    id_user int unsigned  NOT NULL,
    foreign key (school_id)  references schools(id)
) ENGINE INNODB CHARSET UTF8 COLLATE UTF8_BIN;

create table users_article (
  users_id INT,
  articles_id INT,
  FOREIGN KEY (users_id) REFERENCES users(id),
  FOREIGN KEY (articles_id) REFERENCES articles(id)
) ENGINE INNODB CHARSET UTF8 COLLATE UTF8_BIN;

SELECT * FROM users LEFT JOIN users_article ON users.id = users_article.users_id
    LEFT JOIN articles ON  users_article.user_id = users.id
    WHERE article.id = 1;
