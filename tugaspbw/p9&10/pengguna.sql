CREATE DATABASE IF NOT EXISTS pemrograman_web_contoh;
USE pemrograman_web_contoh;

CREATE TABLE IF NOT EXISTS pengguna (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nama VARCHAR(50) NOT NULL,
    katasandi VARCHAR(255) NOT NULL
);

INSERT INTO pengguna (nama, katasandi) VALUES
('admin', '123'),
('petugas', '456');