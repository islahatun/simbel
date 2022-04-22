CREATE TABLE `dm_aturan_obat` (
  `aturan_obat` int(11) NOT NULL AUTO_INCREMENT,
  `aturan_obat_name` varchar(100) NOT NULL,
  `status` tinyint(4) NOT NULL,
  PRIMARY KEY (`aturan_obat`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4