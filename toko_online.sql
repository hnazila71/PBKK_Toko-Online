-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 01, 2023 at 08:26 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: toko_online
--

-- --------------------------------------------------------

--
-- Table structure for table tb_barang
--

CREATE TABLE tb_barang (
  id_brg int(11) NOT NULL,
  nama_brg varchar(120) NOT NULL,
  keterangan varchar(255) NOT NULL,
  kategori varchar(60) NOT NULL,
  harga int(11) NOT NULL,
  stok int(4) NOT NULL,
  gambar text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table tb_barang
--

INSERT INTO tb_barang (id_brg, nama_brg, keterangan, kategori, harga, stok, gambar) VALUES
(1, 'Sepatu', 'Adidas', 'Pakaian Pria', 10000, 10, 'sepatu.jpeg'),
(2, 'ROG', 'LAPTOP PALING KUAT', 'Elektronik', 10000, 7, 'laptop.jpg');

-- --------------------------------------------------------

--
-- Table structure for table tb_invoice
--

CREATE TABLE tb_invoice (
  id int(11) NOT NULL,
  nama varchar(56) NOT NULL,
  alamat varchar(225) NOT NULL,
  tgl_pesan datetime NOT NULL,
  batas_bayar datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table tb_invoice
--

INSERT INTO tb_invoice (id, nama, alamat, tgl_pesan, batas_bayar) VALUES
(0, 'Yusuf Hasan Nazila', 'Keputih sby', '2023-12-01 14:22:32', '2023-12-02 14:22:32');

-- --------------------------------------------------------

--
-- Table structure for table tb_pesanan
--

CREATE TABLE tb_pesanan (
  id int(11) NOT NULL,
  id_invoice int(11) NOT NULL,
  id_brg int(11) NOT NULL,
  nama_brg varchar(50) NOT NULL,
  jumlah int(3) NOT NULL,
  harga int(10) NOT NULL,
  pilihan text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table tb_pesanan
--

INSERT INTO tb_pesanan (id, id_invoice, id_brg, nama_brg, jumlah, harga, pilihan) VALUES
(0, 0, 2, 'ROG', 1, 10000, ''),
(0, 0, 2, 'ROG', 2, 10000, '');

--
-- Triggers tb_pesanan
--
DELIMITER $$
CREATE TRIGGER pesanan_penjualan AFTER INSERT ON tb_pesanan FOR EACH ROW BEGIN
	UPDATE tb_barang SET stok = stok-NEW.jumlah
    WHERE id_brg = NEW.id_brg;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table tb_user
--

CREATE TABLE tb_user (
  id int(11) NOT NULL,
  nama varchar(50) NOT NULL,
  username varchar(50) NOT NULL,
  password varchar(50) NOT NULL,
  role_id tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table tb_user
--

INSERT INTO tb_user (id, nama, username, password, role_id) VALUES
(1, 'admin', 'admin', '123', 1),
(2, 'user', 'user', '123', 2),
(0, 'Yusuf Hasan Nazila', 'hasan12', '123', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table tb_barang
--
ALTER TABLE tb_barang
  ADD PRIMARY KEY (id_brg);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table tb_barang
--
ALTER TABLE tb_barang
  MODIFY id_brg int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;