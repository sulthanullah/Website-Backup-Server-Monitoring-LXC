CREATE DATABASE lxc_monitoring;

USE lxc_monitoring;

CREATE TABLE backup_logs (
    id INT AUTO_INCREMENT PRIMARY KEY,
    lxc_name VARCHAR(100) NOT NULL,
    lxc_id INT NOT NULL,
    backup_time TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    backup_status VARCHAR(50) NOT NULL
);