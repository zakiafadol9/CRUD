CREATE DATABASE IF NOT EXISTS toko_sepatu CHARACTER SET utf8mb4;
USE toko_sepatu;

CREATE TABLE IF NOT EXISTS produk (
  id INT AUTO_INCREMENT PRIMARY KEY,
  nama VARCHAR(100) NOT NULL,
  kategori VARCHAR(50) NOT NULL,
  deskripsi TEXT,
  harga DECIMAL(12,2) NOT NULL,
  stok INT NOT NULL DEFAULT 0,
  gambar VARCHAR(255) NULL,
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE IF NOT EXISTS admin (
  id INT AUTO_INCREMENT PRIMARY KEY,
  username VARCHAR(50) UNIQUE NOT NULL,
  password VARCHAR(255) NOT NULL
);

-- login: admin / admin123 (ganti setelah login pertama!)
INSERT INTO admin (username,password) VALUES ('admin','$2y$10$C5DcN9gb.BI0e2tZoYpqK.HlHZ8QMw7qCB4Sq5KUnJEWMm7oHOFRi');

INSERT INTO produk (nama,kategori,deskripsi,harga,stok) VALUES
('Urban Runner 01','Running','Sepatu lari ringan dengan bantalan empuk untuk harian.',389000,24),
('Classic Canvas Low','Sneakers','Sneakers kanvas low-top, cocok untuk semua gaya.',259000,30),
('Street Kicks High','Sneakers','High-top berbahan sintetis premium, sol tebal anti-slip.',429000,15),
('Oxford Leather Black','Formal','Sepatu formal kulit asli untuk kantor dan acara resmi.',549000,10),
('Slide Comfort','Sandal','Sandal slide empuk, nyaman dipakai santai.',99000,50),
('Trail Grip Pro','Outdoor','Sepatu outdoor dengan outsole grip kuat untuk medan licin.',479000,12);
