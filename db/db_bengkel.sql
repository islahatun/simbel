-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 26, 2022 at 03:44 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_bengkel`
--

-- --------------------------------------------------------

--
-- Table structure for table `dm_agama`
--

CREATE TABLE `dm_agama` (
  `agama_id` int(11) NOT NULL,
  `agama_nama` varchar(100) NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dm_agama`
--

INSERT INTO `dm_agama` (`agama_id`, `agama_nama`, `status`) VALUES
(1, 'Islam', 1),
(2, 'Kristen', 1),
(3, 'Hindu', 1),
(4, 'Budha', 1),
(5, 'Konghucu', 1),
(6, 'Lainnya', 1);

-- --------------------------------------------------------

--
-- Table structure for table `dm_kab`
--

CREATE TABLE `dm_kab` (
  `kab_id` varchar(4) NOT NULL,
  `prov_id` varchar(2) NOT NULL,
  `kab_name` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `dm_kategori`
--

CREATE TABLE `dm_kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dm_kategori`
--

INSERT INTO `dm_kategori` (`id_kategori`, `nama_kategori`) VALUES
(3, 'Mobil Mobilan'),
(4, 'Sepeda');

-- --------------------------------------------------------

--
-- Table structure for table `dm_kec`
--

CREATE TABLE `dm_kec` (
  `kec_id` varchar(7) NOT NULL,
  `kab_id` varchar(4) NOT NULL,
  `kec_name` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `dm_kurir`
--

CREATE TABLE `dm_kurir` (
  `id_kurir` int(11) NOT NULL,
  `nama_kurir` varchar(30) DEFAULT NULL,
  `jenis_kelamin` varchar(10) DEFAULT NULL,
  `wilayah_pengiriman` varchar(10) DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `dm_pengguna`
--

CREATE TABLE `dm_pengguna` (
  `id` int(11) NOT NULL,
  `no_telp` varchar(15) DEFAULT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `alamat` varchar(100) DEFAULT NULL,
  `jenis_kelamin` char(1) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `sandi` varchar(100) DEFAULT NULL,
  `foto` varchar(100) DEFAULT NULL,
  `status_login` varchar(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dm_pengguna`
--

INSERT INTO `dm_pengguna` (`id`, `no_telp`, `nama`, `alamat`, `jenis_kelamin`, `email`, `sandi`, `foto`, `status_login`) VALUES
(2, '085893324274', 'Siska', 'kalapa lima, Rt:rw:01/02,  desa: sukamanah, kecamatan: Baros, Kabupaten: serang, Provinsi: serang', 'P', 'admin@gmail.com', NULL, NULL, '1'),
(3, '085893324274', 'Siapa aja ', 'kalapa lima, Rt:rw:01/02,  desa: sukamanah, kecamatan: Baros, Kabupaten: serang, Provinsi: serang', 'L', 'islahatunnufusi07@gmail.com', NULL, NULL, '1'),
(6, '085893324274', 'Humanika', 'kalapa lima, Rt:rw:01/02,  desa: sukamanah, kecamatan: Baros, Kabupaten: serang, Provinsi: serang', 'P', 'iis@gmail.com', 'ac9b4e0b6a21758534db2a6324d34a54', 'C:\\fakepath\\f52afef93d06b5503b60a507e3377b80.jpg', '1'),
(9, 'asas', 'sasa', 'asas', 'a', 'adminasaasa', '939a8398eca47b994c3206d3d9499b3b', NULL, '2'),
(10, '085893324274', 'admin', 'kalapa lima, Rt:rw:01/02,  desa: sukamanah, kecamatan: Baros, Kabupaten: serang, Provinsi: serang', 'P', 'adminadmin', 'c7c9b5abc39fc757817e8a49a1e269ae', NULL, '2'),
(11, '085893324274', 'saaa', 'kalapa lima, Rt:rw:01/02,  desa: sukamanah, kecamatan: Baros, Kabupaten: serang, Provinsi: serang', 'L', 'saaa@gmail.com', '$2y$10$XQ5/k44y0Nf1uLFuEfXJKuCsClq5FVLk.Lvg1N/t9YSiCv2x6woey', NULL, '1'),
(12, '085893324274', 'iis', 'Serang', 'P', NULL, '$2y$10$tQOYnU3KujXZVEru9mp65.cLe7oxcI7bDLwAAdR2AQmUE6izT8vBa', NULL, '2'),
(13, '085893324274', 'iis', 'Serang', 'P', NULL, '$2y$10$7PjMs6XJR/LruoZoBcK9G.VlwvsKk/wT8T4MEk53k49g2f8QNEMbi', NULL, '1'),
(14, '085893324274', 'siska', 'Serang', 'P', NULL, '$2y$10$e9a9tj/e/kJt7NcSTJscqeZ/24D1C27DEYDmo.UH1wI0bXg/qtz5m', NULL, '1');

-- --------------------------------------------------------

--
-- Table structure for table `dm_po`
--

CREATE TABLE `dm_po` (
  `id_po` int(11) NOT NULL,
  `id_kategori` varchar(50) DEFAULT NULL,
  `nama_barang` varchar(50) DEFAULT NULL,
  `satuan` varchar(10) DEFAULT NULL,
  `stok` int(11) DEFAULT NULL,
  `harga_beli` decimal(12,2) DEFAULT NULL,
  `harga_jual` decimal(12,2) DEFAULT NULL,
  `deskripsi` text DEFAULT NULL,
  `tanggal_datang` date DEFAULT NULL,
  `gambar` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dm_po`
--

INSERT INTO `dm_po` (`id_po`, `id_kategori`, `nama_barang`, `satuan`, `stok`, `harga_beli`, `harga_jual`, `deskripsi`, `tanggal_datang`, `gambar`) VALUES
(4, NULL, 'Oli', 'liter', 500, '50000.00', '60000.00', 'oli super', '2022-06-23', 'f52afef93d06b5503b60a507e3377b80.jpg'),
(5, NULL, 'nama barang', 'asaas', 0, '26666.00', '29999.00', 'asasas', '2022-06-22', '8ac7a7f1235ac0876d2ef49a4d21a3c3.jpg'),
(6, NULL, 'nama barang ahaa', 'asaas', 0, '26666.00', '29999.00', 'asasas', '2022-06-22', 'WhatsApp_Image_2022-04-25_at_15_14_22.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `dm_prov`
--

CREATE TABLE `dm_prov` (
  `prov_id` varchar(2) NOT NULL,
  `prov_name` varchar(255) NOT NULL,
  `status` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `dm_status_pemesanan`
--

CREATE TABLE `dm_status_pemesanan` (
  `id_status` int(11) NOT NULL,
  `status_pemesanan` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dm_status_pemesanan`
--

INSERT INTO `dm_status_pemesanan` (`id_status`, `status_pemesanan`) VALUES
(1, 'Pemesanan'),
(2, 'Sedang diproses owner'),
(3, 'Pemesanan Offline'),
(4, 'Sudah dibayar Ditempt'),
(5, 'Pengajuan Pembelian'),
(6, 'Sudah Diabayar'),
(7, 'Barang Masuk Keranjang');

-- --------------------------------------------------------

--
-- Table structure for table `dm_supplier`
--

CREATE TABLE `dm_supplier` (
  `supplier_id` int(11) NOT NULL,
  `supplier_name` varchar(100) NOT NULL,
  `alamat` varchar(250) NOT NULL,
  `telp` varchar(50) NOT NULL,
  `email` varchar(150) NOT NULL,
  `bank_id` int(11) NOT NULL,
  `no_rekening` varchar(100) NOT NULL,
  `rek_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `sys_admin`
--

CREATE TABLE `sys_admin` (
  `username` varchar(50) NOT NULL DEFAULT '',
  `password` varchar(250) NOT NULL DEFAULT '',
  `session_id` varchar(250) DEFAULT NULL,
  `active` enum('Y','N') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sys_admin`
--

INSERT INTO `sys_admin` (`username`, `password`, `session_id`, `active`) VALUES
('admin', '21232f297a57a5a743894a0e4a801fc3', NULL, 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `sys_logs`
--

CREATE TABLE `sys_logs` (
  `log_id` int(11) NOT NULL,
  `log_name` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `sys_modules`
--

CREATE TABLE `sys_modules` (
  `module_id` int(11) NOT NULL,
  `navbar_id` int(11) DEFAULT NULL,
  `module_name` varchar(150) NOT NULL,
  `link` varchar(250) NOT NULL,
  `src` varchar(250) NOT NULL,
  `m_view` enum('Y','N') DEFAULT 'N' COMMENT 'Y Jika module mempunya fungsi view, N Jika module tidak mempunya fungsi view',
  `m_add` enum('Y','N') DEFAULT 'N',
  `m_upd` enum('Y','N') DEFAULT 'N',
  `m_del` enum('Y','N') DEFAULT 'N',
  `active` enum('Y','N') DEFAULT 'N'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sys_modules`
--

INSERT INTO `sys_modules` (`module_id`, `navbar_id`, `module_name`, `link`, `src`, `m_view`, `m_add`, `m_upd`, `m_del`, `active`) VALUES
(1, 1, 'Dashboard', 'dashboard', 'dashboard', 'Y', 'N', 'N', 'N', 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `sys_navbar`
--

CREATE TABLE `sys_navbar` (
  `navbar_id` int(11) NOT NULL,
  `parent_id` int(11) NOT NULL DEFAULT 0,
  `navbar_icon` varchar(100) DEFAULT NULL,
  `navbar_name` varchar(50) NOT NULL,
  `link` varchar(250) DEFAULT NULL,
  `sort` int(11) NOT NULL DEFAULT 0,
  `active` enum('Y','N') NOT NULL DEFAULT 'N'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sys_navbar`
--

INSERT INTO `sys_navbar` (`navbar_id`, `parent_id`, `navbar_icon`, `navbar_name`, `link`, `sort`, `active`) VALUES
(1, 0, '<i class=\"fas fa-tachometer-alt\"></i>', 'Dashboard', NULL, 1, 'Y'),
(2, 0, '<i class=\"fas fa-user\"></i>', 'Pendaftaran', NULL, 2, 'Y'),
(3, 2, NULL, 'Costomer', 'Costomer', 0, 'Y'),
(4, 2, NULL, 'Internal Bengkel', 'InternalBengkel', 0, 'Y'),
(5, 0, '<i class=\"fas fa-server\"></i>', 'Master Data', NULL, 3, 'Y'),
(6, 5, NULL, 'Barang', 'MasterBarang', 0, 'Y'),
(7, 5, NULL, 'Kategori', 'Kategori', 0, 'Y'),
(8, 5, NULL, 'Status Pemesanan', 'StatusPemesanan', 0, 'Y'),
(9, 0, '<i class=\"fas fa-shopping-cart\"></i>', 'Daftar Pemesanan', 'ListPesanan', 4, 'Y'),
(10, 0, '<i class=\"fas fa-clipboard\"></i>', 'Laporan', NULL, 6, 'Y'),
(11, 10, NULL, 'Laporan Costomer', 'LaporanCostomer', 0, 'Y'),
(12, 10, NULL, 'Laporan Barang', 'LaporanBarang', 0, 'Y'),
(13, 10, NULL, 'Laporan Pemesanan', 'LaporanPemesanan', 0, 'Y'),
(14, 0, '<i class=\"fas fa-box-open\"></i>', 'Supplier', 'Supplier', 6, 'Y'),
(15, 0, '<i class=\"fas fa-shopping-cart\"></i>', 'Daftar Pemesanan Ofline', 'ListPesananOffline', 5, 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `sys_rules`
--

CREATE TABLE `sys_rules` (
  `rule_id` int(11) NOT NULL,
  `rule_name` varchar(150) NOT NULL,
  `active` enum('Y','N') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sys_rules`
--

INSERT INTO `sys_rules` (`rule_id`, `rule_name`, `active`) VALUES
(1, 'All Users', 'Y'),
(2, 'Administrator', 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `sys_rulesmodules`
--

CREATE TABLE `sys_rulesmodules` (
  `rule_id` int(11) NOT NULL,
  `module_id` int(11) NOT NULL,
  `m_view` enum('Y','N') DEFAULT NULL,
  `m_add` enum('Y','N') DEFAULT NULL,
  `m_upd` enum('Y','N') DEFAULT NULL,
  `m_del` enum('Y','N') DEFAULT NULL,
  `active` enum('Y','N') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `trans_pemesanan`
--

CREATE TABLE `trans_pemesanan` (
  `id_pemesanan` int(11) NOT NULL,
  `id_pelanggan` int(11) DEFAULT NULL,
  `no_rekening` varchar(30) DEFAULT NULL,
  `nama_pelanggan` varchar(30) DEFAULT NULL,
  `id_po` int(11) DEFAULT NULL,
  `nama_barang` varchar(50) DEFAULT NULL,
  `harga_barang` decimal(12,2) DEFAULT NULL,
  `jumlah_beli` int(11) DEFAULT NULL,
  `status_pemesanan` varchar(50) DEFAULT NULL,
  `tanggal_pemesanan` date DEFAULT NULL,
  `total_pembelian` decimal(12,2) DEFAULT NULL,
  `bukti_pembayaran` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `trans_pemesanan`
--

INSERT INTO `trans_pemesanan` (`id_pemesanan`, `id_pelanggan`, `no_rekening`, `nama_pelanggan`, `id_po`, `nama_barang`, `harga_barang`, `jumlah_beli`, `status_pemesanan`, `tanggal_pemesanan`, `total_pembelian`, `bukti_pembayaran`) VALUES
(1, 2, NULL, NULL, 1, 'apaa jaa', '60000.00', 2, '1', '2022-06-15', '500000.00', NULL),
(2, 11, 'sasaasa', 'saaa', 5, NULL, '29999.00', 1, '6', '2022-06-25', '29999.00', 'f52afef93d06b5503b60a507e3377b801.jpg'),
(15, 11, NULL, 'saaa', 6, NULL, NULL, NULL, '5', '2022-06-26', NULL, NULL),
(16, 11, NULL, 'saaa', 6, NULL, NULL, NULL, '7', '2022-06-26', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `trans_pemesanan_offline`
--

CREATE TABLE `trans_pemesanan_offline` (
  `id_pemesanan` int(11) NOT NULL,
  `id_pelanggan` int(11) DEFAULT NULL,
  `id_po` int(11) DEFAULT NULL,
  `harga_barang` decimal(12,2) DEFAULT NULL,
  `jumlah_beli` int(11) DEFAULT NULL,
  `status_pemesanan` varchar(50) DEFAULT NULL,
  `tanggal_pemesanan` date DEFAULT NULL,
  `total_pembelian` decimal(12,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `trans_pemesanan_offline`
--

INSERT INTO `trans_pemesanan_offline` (`id_pemesanan`, `id_pelanggan`, `id_po`, `harga_barang`, `jumlah_beli`, `status_pemesanan`, `tanggal_pemesanan`, `total_pembelian`) VALUES
(7, 1, NULL, NULL, NULL, '4', '2022-06-19', NULL),
(8, 1, 4, '3000.00', 2, '4', '2022-06-19', '6000.00'),
(9, 1, 4, '3000.00', 3, '4', '2022-06-19', '9000.00'),
(10, 1, 6, '2222.00', 2, '4', '2022-06-19', '4444.00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dm_agama`
--
ALTER TABLE `dm_agama`
  ADD PRIMARY KEY (`agama_id`);

--
-- Indexes for table `dm_kab`
--
ALTER TABLE `dm_kab`
  ADD PRIMARY KEY (`kab_id`),
  ADD KEY `dm_kab_FK` (`prov_id`);

--
-- Indexes for table `dm_kategori`
--
ALTER TABLE `dm_kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `dm_kec`
--
ALTER TABLE `dm_kec`
  ADD PRIMARY KEY (`kec_id`),
  ADD KEY `dm_kec_FK` (`kab_id`);

--
-- Indexes for table `dm_kurir`
--
ALTER TABLE `dm_kurir`
  ADD PRIMARY KEY (`id_kurir`);

--
-- Indexes for table `dm_pengguna`
--
ALTER TABLE `dm_pengguna`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `dm_po`
--
ALTER TABLE `dm_po`
  ADD PRIMARY KEY (`id_po`);

--
-- Indexes for table `dm_prov`
--
ALTER TABLE `dm_prov`
  ADD PRIMARY KEY (`prov_id`);

--
-- Indexes for table `dm_status_pemesanan`
--
ALTER TABLE `dm_status_pemesanan`
  ADD PRIMARY KEY (`id_status`);

--
-- Indexes for table `dm_supplier`
--
ALTER TABLE `dm_supplier`
  ADD PRIMARY KEY (`supplier_id`);

--
-- Indexes for table `sys_admin`
--
ALTER TABLE `sys_admin`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `sys_logs`
--
ALTER TABLE `sys_logs`
  ADD PRIMARY KEY (`log_id`);

--
-- Indexes for table `sys_modules`
--
ALTER TABLE `sys_modules`
  ADD PRIMARY KEY (`module_id`);

--
-- Indexes for table `sys_navbar`
--
ALTER TABLE `sys_navbar`
  ADD PRIMARY KEY (`navbar_id`);

--
-- Indexes for table `sys_rules`
--
ALTER TABLE `sys_rules`
  ADD PRIMARY KEY (`rule_id`);

--
-- Indexes for table `sys_rulesmodules`
--
ALTER TABLE `sys_rulesmodules`
  ADD PRIMARY KEY (`rule_id`,`module_id`),
  ADD KEY `FK_sys_rulesmodules_sys_modules` (`module_id`);

--
-- Indexes for table `trans_pemesanan`
--
ALTER TABLE `trans_pemesanan`
  ADD PRIMARY KEY (`id_pemesanan`);

--
-- Indexes for table `trans_pemesanan_offline`
--
ALTER TABLE `trans_pemesanan_offline`
  ADD PRIMARY KEY (`id_pemesanan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dm_agama`
--
ALTER TABLE `dm_agama`
  MODIFY `agama_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `dm_kategori`
--
ALTER TABLE `dm_kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `dm_kurir`
--
ALTER TABLE `dm_kurir`
  MODIFY `id_kurir` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `dm_pengguna`
--
ALTER TABLE `dm_pengguna`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `dm_po`
--
ALTER TABLE `dm_po`
  MODIFY `id_po` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `dm_status_pemesanan`
--
ALTER TABLE `dm_status_pemesanan`
  MODIFY `id_status` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `dm_supplier`
--
ALTER TABLE `dm_supplier`
  MODIFY `supplier_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `sys_logs`
--
ALTER TABLE `sys_logs`
  MODIFY `log_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sys_modules`
--
ALTER TABLE `sys_modules`
  MODIFY `module_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sys_navbar`
--
ALTER TABLE `sys_navbar`
  MODIFY `navbar_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- AUTO_INCREMENT for table `sys_rules`
--
ALTER TABLE `sys_rules`
  MODIFY `rule_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `trans_pemesanan`
--
ALTER TABLE `trans_pemesanan`
  MODIFY `id_pemesanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `trans_pemesanan_offline`
--
ALTER TABLE `trans_pemesanan_offline`
  MODIFY `id_pemesanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `dm_kab`
--
ALTER TABLE `dm_kab`
  ADD CONSTRAINT `dm_kab_FK` FOREIGN KEY (`prov_id`) REFERENCES `dm_prov` (`prov_id`);

--
-- Constraints for table `dm_kec`
--
ALTER TABLE `dm_kec`
  ADD CONSTRAINT `dm_kec_FK` FOREIGN KEY (`kab_id`) REFERENCES `dm_kab` (`kab_id`);

--
-- Constraints for table `sys_rulesmodules`
--
ALTER TABLE `sys_rulesmodules`
  ADD CONSTRAINT `FK_sys_rulesmodules_sys_modules` FOREIGN KEY (`module_id`) REFERENCES `sys_modules` (`module_id`),
  ADD CONSTRAINT `FK_sys_rulesmodules_sys_rules` FOREIGN KEY (`rule_id`) REFERENCES `sys_rules` (`rule_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
