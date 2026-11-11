CREATE DATABASE IF NOT EXISTS perpustakaan CHARACTER SET utf8mb4;
USE perpustakaan;

CREATE TABLE IF NOT EXISTS books (
  id INT AUTO_INCREMENT PRIMARY KEY,
  book_code VARCHAR(20) NOT NULL,
  title VARCHAR(200) NOT NULL,
  author VARCHAR(150) NOT NULL,
  publication_year INT NULL,
  stock INT NOT NULL DEFAULT 0,
  created_at DATETIME NULL,
  updated_at DATETIME NULL
);

INSERT INTO books (book_code, title, author, publication_year, stock, created_at, updated_at) VALUES
('BK001', 'Pemrograman PHP', 'Andi Saputra', 2025, 10, NOW(), NOW()),
('BK002', 'Belajar CodeIgniter 4', 'Budi Santoso', 2024, 5, NOW(), NOW());
