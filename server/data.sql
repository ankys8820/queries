CREATE DATABASE queries;
USE queries;
CREATE TABLE users(
    id INT AUTO_INCREMENT,
    username VARCHAR(255) NOT NULL,
    email VARCHAR(255) UNIQUE NOT NULL,
    address VARCHAR(700) NOT NULL,
    password VARCHAR(255) NOT NULL,
    PRIMARY KEY(id)
);
DESC users;
DROP TABLE users;
SELECT *
FROM users;
-- checking login
SELECT *
FROM users
WHERE email = 'testing@gmail.com'
    AND password = '7c4a8d09ca3762af61e59520943dc26494f8941b';
-- Category List Table
CREATE TABLE category(
    id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(50) NOT NULL
);
SHOW TABLES;
INSERT INTO category(name)
VALUES ('Mobile'),
    ('Tech'),
    ('Coding'),
    ('Linux');
        
SELECT * FROM category;

-- ASK QUESTION
CREATE TABLE questions(
    id INT PRIMARY KEY AUTO_INCREMENT,
    title VARCHAR(255) NOT NULL,
    description TEXT NOT NULL,
    category_id INT NOT NULL,
    user_id INT NOT NULL,
   FOREIGN KEY (category_id) REFERENCES category(category_id) ON DELETE CASCADE,
    FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE CASCADE,
); 
