CREATE DATABASE employees;
USE employees;

CREATE TABLE employee_info (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL UNIQUE,
    phone VARCHAR(20) NOT NULL UNIQUE
);

INSERT INTO employee_info (name, email, phone)
VALUES ('John Doe', 'johndoe@example.com', '555-1234');

INSERT INTO employee_info (name, email, phone)
VALUES ('Jane Smith', 'janesmith@example.com', '555-5678');

INSERT INTO employee_info (name, email, phone)
VALUES ('Bob Johnson', 'bobjohnson@example.com', '555-9012');

INSERT INTO employee_info (name, email, phone)
VALUES ('Sara Lee', 'saralee@example.com', '555-3456');

INSERT INTO employee_info (name, email, phone)
VALUES ('Mike Anderson', 'mikeanderson@example.com', '555-7890');
