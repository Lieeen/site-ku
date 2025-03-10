CREATE DATABASE kalender;
USE kalender;

CREATE TABLE events (
    id INT(11) AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    event_date DATE NOT NULL,
    description TEXT
);