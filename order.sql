CREATE DATABASE cuci_sepatu;

USE cuci_sepatu;

CREATE TABLE orders (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nama VARCHAR(255) NOT NULL,
    jenis_sepatu VARCHAR(255) NOT NULL,
    jenis_layanan VARCHAR(255) NOT NULL,
    alamat TEXT NOT NULL,
    harga INT NOT NULL
);

CREATE TABLE layanan (
    id INT AUTO_INCREMENT PRIMARY KEY,
    jenis_layanan VARCHAR(255) NOT NULL,
    harga INT NOT NULL
);

-- Masukkan data layanan
INSERT INTO layanan (jenis_layanan, harga) VALUES 
('Cuci Sepatu Regular', 50000),
('Cuci Sepatu Ekstra', 75000),
('Cuci Sepatu VIP', 100000);


CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL
);

