drop table if exists users;

CREATE TABLE users (
    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
    username VARCHAR(30), 
    password VARCHAR(50),
    email VARCHAR(30),
    admin VARCHAR(10) DEFAULT 'viewer' 
);
