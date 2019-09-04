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
    date_completed TIMESTAMP DEFAULT NULL,
    user_id INT,
    project_id INT
);

CREATE TABLE users (
	id INT AUTO_INCREMENT PRIMARY KEY,
    dt_add TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
	email CHAR(128) UNIQUE,
    name CHAR(128),
    password CHAR(64)
);