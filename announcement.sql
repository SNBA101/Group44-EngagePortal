CREATE DATABASE announcements;


CREATE TABLE employee_info (
    id INT AUTO_INCREMENT PRIMARY KEY,
    announcement_name VARCHAR(255) NOT NULL UNIQUE,
    announcement_body VARCHAR(1000) NOT NULL UNIQUE,
    anouncement_date VARCHAR(20) NOT NULL,
);