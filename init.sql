CREATE DATABASE IF NOT EXISTS db_toko;
USE db_toko;

CREATE TABLE IF NOT EXISTS produk (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nama_produk VARCHAR(150) NOT NULL,
    harga INT NOT NULL,
    stok INT NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO produk (nama_produk, harga, stok, created_at) VALUES
('Keyboard Mechanical RGB', 450000, 15, '2026-11-14 06:40:00'),
('Mouse Wireless Silent', 125000, 30, '2026-11-14 06:42:00'),
('Monitor LED 24 Inch', 1750000, 8, '2026-11-14 06:45:00'),
('Headset Gaming Stereo', 350000, 20, '2026-11-14 06:47:00'),
('Flashdisk 64GB', 90000, 50, '2026-11-14 06:50:00');