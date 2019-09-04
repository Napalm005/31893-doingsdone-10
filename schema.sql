CREATE DATABASE doingsdone
	DEFAULT CHARACTER SET utf8
	DEFAULT COLLATE utf8_general_ci;
  
USE doingsdone;

CREATE TABLE project (
	id INT AUTO_INCREMENT PRIMARY KEY,
	name CHAR(128),
	user_id INT
);

CREATE TABLE task (
	id INT AUTO_INCREMENT PRIMARY KEY,
	created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    executed TINYINT DEFAULT 0,
    title CHAR(255),
    file_path CHAR(255),
    date_completed TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    project_id INT
);

CREATE TABLE users (
	id INT AUTO_INCREMENT PRIMARY KEY,
    dt_add TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
	email CHAR(128) UNIQUE,
    name CHAR(128),
    password CHAR(64)
);

CREATE UNIQUE INDEX email ON users(email);
CREATE INDEX t_title ON task(title);
