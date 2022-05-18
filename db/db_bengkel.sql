-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 18, 2022 at 06:20 PM
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
-- Database: `dbrepository`
--
CREATE DATABASE IF NOT EXISTS `dbrepository` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `dbrepository`;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(2) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` text NOT NULL,
  `level_user` int(1) NOT NULL,
  `foto` text NOT NULL,
  `type` char(15) NOT NULL,
  `size` int(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`, `level_user`, `foto`, `type`, `size`) VALUES
(1, 'admin', 'admin', 1, 'IMG_20170717_220924(180903092435).jpg', 'image/jpeg', 525733),
(4, 'Umi', '12345', 2, 'bangripiu(180715142902).png', 'image/png', 205344);

-- --------------------------------------------------------

--
-- Table structure for table `anggota`
--

CREATE TABLE `anggota` (
  `id_anggota` int(15) NOT NULL,
  `no_identitas` varchar(16) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `fakultas` char(2) NOT NULL,
  `prodi` char(5) NOT NULL,
  `jenjang` char(5) NOT NULL,
  `tempat_lahir` varchar(30) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `alamat` text NOT NULL,
  `no_telepon` int(12) NOT NULL,
  `jenis_kelamin` char(1) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` text NOT NULL,
  `status` int(1) NOT NULL,
  `foto` text NOT NULL,
  `type` char(15) NOT NULL,
  `size` int(25) NOT NULL,
  `tgl_daftar` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `anggota`
--

INSERT INTO `anggota` (`id_anggota`, `no_identitas`, `nama`, `fakultas`, `prodi`, `jenjang`, `tempat_lahir`, `tanggal_lahir`, `alamat`, `no_telepon`, `jenis_kelamin`, `username`, `password`, `status`, `foto`, `type`, `size`, `tgl_daftar`) VALUES
(4, '320212036', 'Laras Mayang Sari', '03', '88203', 'C', 'Serang', '1994-07-01', 'Jl. Ciwaru Raya no.88 warung pojok Serang-Banten', 2147483647, 'P', '320212036', '12345', 4, 'IMG_20160923_183550(180725141933).jpg', 'image/jpeg', 1082005, '2018-08-01'),
(5, '1102141320', 'Hani Faturrohmah', '01', '55201', 'C', 'Serang', '1996-01-31', 'Sempu Serang-Banten', 812675887, 'P', '1102141320', '12345', 4, 'IMG_20170630_193947_112(180801142923).jpg', 'image/jpeg', 67779, '2018-08-01'),
(6, '1102141357', 'Faidatul Ilma', '01', '55201', 'C', 'Serang', '1996-08-01', 'Petir', 2147483647, 'P', '1102141357', '12345', 4, 'IMG_20170630_193947_112(180801145751).jpg', 'image/jpeg', 67779, '2018-08-01'),
(7, '1202141354', 'Lilis Suryani', '01', '57201', 'C', 'Serang', '1996-11-21', 'Serang-Banten', 2147483647, 'P', '1202141354', '12345', 4, 'IMG_20170630_193947_112(180801150204).jpg', 'image/jpeg', 67779, '2018-08-01'),
(8, '3302141455', 'Irma Handayani', '03', '88203', 'C', 'Pandeglang', '1995-03-01', 'Pandeglang', 2147483647, 'P', '3302141455', '12345', 4, 'IMG_20170630_193947_112(180801173130).jpg', 'image/jpeg', 67779, '2018-08-01'),
(9, '110111012', 'Ahmad Dzulfikar', '01', '55201', 'C', 'Serang', '1994-01-17', 'Kp. Ci Congkok RT/RW 04/01 Ds. petir kec. Petir\r\nKabupaten Serang Banten', 2147483647, 'L', '110111012', '12345', 4, '', '', 0, '2018-08-01'),
(10, '9904019560', 'Ely Nuryani', '01', '57201', 'C', 'wonosobo', '1984-07-16', 'Kp. Pasir Rt. 03/01 Sentul Balaraja Tangerang 15610 ', 2147483647, 'P', '9904019560', '12345', 3, 'IMG_20170630_193947_112(180902155343).jpg', 'image/jpeg', 67779, '2018-09-02'),
(11, '3302141390', 'Dini Yuliansih', '03', '88203', 'C', 'Serang', '1996-07-01', 'Jl. Raya Petir Km. 4 Link. Cilaku RT/RW 01/01 Kel. Banjarsari Kota Serang', 2147483647, 'P', '3302141390', '12345', 2, 'IMG_20170630_193947_112(180902155810).jpg', 'image/jpeg', 67779, '2018-09-02'),
(12, '3202141534', 'Siti Rohmah', '03', '87209', 'C', 'Lebak', '1995-07-17', 'Kp. Kadu Hauk RT/RW 001/002 Kel/Desa. Kadu Hauk Lebak', 2147483647, 'P', '3202141534', '12345', 2, 'IMG_20170630_193947_112(180902160014).jpg', 'image/jpeg', 67779, '2018-09-02'),
(13, '0427067705', 'Chotibul Umam', '03', '-Pogr', 'C', 'Serang', '1977-06-27', 'Komp. Safira Regency Blok F2 No 6 RT/RW 006/006 Sepang Serang\r\n', 2147483647, 'L', '0427067705', '12345', 3, '', '', 0, '2018-09-02'),
(14, '2348764309', 'Ina Rohiatussakina', '03', '88203', 'C', 'Serang', '1987-07-18', 'Jl. Ki Ajurum No. 42 Sempu RT/RW 02/18 Cipare Serang\r\n', 0, 'P', '2348764309', '12345', 3, '', '', 0, '2018-09-02'),
(15, '230112003', 'Sunadi', '02', '25201', 'C', 'Pandeglang', '1989-05-25', 'Kp. Cibodas RT.002/004 Pandeglang 42252  Pandeglang', 2147483647, 'L', '230112003', '12345', 4, 'IMG-20170527-WA0001(180907061144).jpg', 'image/jpeg', 47134, '2018-09-07'),
(16, '1102141535', 'Neshya Faniya', '01', '55201', 'C', 'Cianjur', '1995-02-23', 'Serang-Banten', 2147483647, 'P', '1102141535', '227703', 4, 'IMG-20170709-WA0005(180907144912).jpg', 'image/jpeg', 121724, '2018-09-07'),
(17, '1102141536', 'Bila Maulidina', '01', '55201', 'C', 'Serang', '1995-02-23', 'Serang', 89576345, 'P', '1102141536', '12345', 4, 'IMG-20170709-WA0005(180907192701).jpg', 'image/jpeg', 121724, '2018-09-07');

-- --------------------------------------------------------

--
-- Table structure for table `download`
--

CREATE TABLE `download` (
  `id_anggota` varchar(16) NOT NULL,
  `tanggal_download` date NOT NULL,
  `no_induk` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `jenjang`
--

CREATE TABLE `jenjang` (
  `kode_jenjang` char(2) NOT NULL DEFAULT '0',
  `nama` varchar(3) DEFAULT '0',
  `nama_pjg` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `jenjang`
--

INSERT INTO `jenjang` (`kode_jenjang`, `nama`, `nama_pjg`) VALUES
('C', 'S-1', 'Strata I'),
('E', 'D-3', 'Diploma III');

-- --------------------------------------------------------

--
-- Table structure for table `karya_ilmiah`
--

CREATE TABLE `karya_ilmiah` (
  `no_urut` int(5) NOT NULL,
  `no_induk` varchar(5) NOT NULL,
  `no_identitas` varchar(10) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `judul` text NOT NULL,
  `abstrak` text NOT NULL,
  `fakultas` char(2) NOT NULL,
  `prodi` char(5) NOT NULL,
  `jenjang` char(5) NOT NULL,
  `tanggal_input` date NOT NULL,
  `nama_file` text NOT NULL,
  `type` char(15) NOT NULL,
  `size` int(25) NOT NULL,
  `kategori` int(2) NOT NULL,
  `validasi` int(1) NOT NULL,
  `tahun` int(4) NOT NULL,
  `status_anggota` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `karya_ilmiah`
--

INSERT INTO `karya_ilmiah` (`no_urut`, `no_induk`, `no_identitas`, `nama`, `judul`, `abstrak`, `fakultas`, `prodi`, `jenjang`, `tanggal_input`, `nama_file`, `type`, `size`, `kategori`, `validasi`, `tahun`, `status_anggota`) VALUES
(17, '00001', '1102141320', 'Hani Faturrohmah', 'ANALISA SISTEM INFORMASI ABSENSI PADA PT. LAUTAN OTSUKA CHEMICAL Tbk', '<p>Perkembangan Teknologi Informasi dari tahun ketahun yang semakin cepat menjadi tantangan berat<br />\r\nbagi pengguna teknologi informasi itu sendiri dan mendorong setiap sector organisasi baik formal<br />\r\nmaupun informal atau lembaga &ndash; lembaga lainnya untuk dapat memanfaatkannya sebagai<br />\r\npenunjang kegiatan kerja sehingga menghasilkan informasi yang cepat, tepat dan akurat. PT. Lautan<br />\r\nOtsuka Chemical sebagai Perusahaan Penanaman Modal Asing yang bergerak dalam bidang<br />\r\nindustry kimia,yang tentu saja membutuhkan manajemen yang baik dalam mengelola karyawannya<br />\r\nyang nantinya akan berdampak positif bagi perkembangan perusahaan itu sendiri. Maka dibutuhkan<br />\r\ninformasi yang efisien dalam mempertahankan keberadaannya agar tetap eksis dan dikenal oleh<br />\r\nmasyarakat luas. Salah satu upaya perusahaan untuk mendukung hal itu adalah dengan pemakaian<br />\r\nsystem komputer yang baik. Untuk mendapat system yang baik maka dilakukan penelitian terhadap<br />\r\nsystem yang sudah ada.<br />\r\nKunci : Sistem; informasi; absensi.<br />\r\nHani</p>\r\n', '01', '55201', 'C', '2018-08-13', 'PKN-HANI ok(180813210506).pdf', 'application/pdf', 321037, 2, 0, 2017, 1),
(18, '00002', '1102141357', 'Faidatul Ilma', 'ANALISA SISTEM INFORMASI SURAT MASUK DAN SURAT KELUAR PADA DINAS PEKERJAAN UMUM DAN PENATAAN RUANG (DPUPR) KOTA SERANG', '<p>Perkembangan teknologi dan informasi memberikan kemudahan dalam proses<br />\r\nmengolah sebuah informasi. Baik itu mencari, mengirim dan menerima suatu<br />\r\ninformasi dalam waktu yang seefektif mungin tanpa harus ke sumber informasi.<br />\r\nDinas Pekerjaan Umum dan Penataan Ruang (DPUPR) Kota Serang yaitu sebuah<br />\r\nkantor yang dalam mengolah surat masuk dan surat keluar memerlukan komputer<br />\r\nsebagai alat bantu yang dapat menghasilkan informasi yang lebih tepat dan akurat.<br />\r\nMetode ini diolah menggunakan metode observasi. Pengolahan data adalah<br />\r\nbentuk pengolahan terhadap data untuk membuat data itu berguna sesuai dengan<br />\r\nhasil yang diinginkan agar dapat digunakan. Berdasarkan Hasil penelitian bahwa<br />\r\ndengan adanya Sistem terkomputerisasi Pengolahan Data Surat Masuk dan Surat<br />\r\nKeluar pada kantor Dinas Pekerjaan Umum dan Penataan Ruang (DPUPR) Kota<br />\r\nSerang, maka proses penginputan maupun pencarian data surat masuk dan surat<br />\r\nkeluar dapat dilakukan dengan lebih cepat, akurat dan sesuai dengan tuntutan<br />\r\nsemua pihak. Maka penulis mengambil judul PKN &ldquo;Analisa Sistem Informasi<br />\r\nSurat Masuk dan Surat Keluar di Dinas Pekerjaan Umum dan Penataan<br />\r\nRuang (DPUPR) Kota Serang&rdquo;.<br />\r\nKata Kunci : Pengolahan Data, Surat Masuk dan Surat Keluar.</p>\r\n', '01', '55201', 'C', '2018-08-13', 'PKN-ILMA(180813210633).pdf', 'application/pdf', 321589, 2, 0, 2017, 1),
(19, '00003', '1202141354', 'Lilis Suryani', 'ANALISA SISTEM INFORMASI PENGOLAHAN DATA HASIL PEMERIKSAAN AIR TANAH PADA DINAS ENERGI DAN SUMBER DAYA MINERAL (ESDM) PROVINSI BANTEN', '<p>Perkembangan dunia informasi yang semakin meningkat seiring dengan<br />\r\nsemakin berkembangnya ilmu pengetahuan dan teknologi komputer yang<br />\r\nmampu menunjang berbagai kebutuhan dan permintaan informasi dari<br />\r\npengguna membuat informasi telah menjadi suatu kebutuhan utama dalam<br />\r\nperusahaan dan instansi. Oleh karena itu, sarana yang cepat dan tepat untuk<br />\r\nmengakses, mengolah dan menyimpan sumber informasi yang telah menjadi<br />\r\nbagian yang tak terpisahkan dalam kegiatan usaha.</p>\r\n\r\n<p>Dalam kegiatan perusahaan dan instansi, perangkat lunak merupakan<br />\r\nbagian yang sangat penting. Perangkat lunak memberikan suatu peran yang<br />\r\nsangat penting dalam kelancaran kegiatan perusahaan dan instansi, seperti<br />\r\nkemampuan untuk melakukan pengolahan, peyimpanan dan pengaksesan<br />\r\ninformasi yang diperlukan dengan cepat dan tepat.</p>\r\n', '01', '57201', 'C', '2018-08-13', 'PKN-LILIS(180813210803).pdf', 'application/pdf', 406394, 2, 0, 2017, 1),
(21, '00001', '3101131011', 'Kusnadi', 'PENGARUH PEMBERIAN DANA BANTUAN SISWA MISKIN (BSM) TERHADAP MOTIVASI BELAJAR SISWA DI SMA NEGERI 1 BAROS TAHUN 2016', '<p>Kusnadi. &ldquo;Pengaruh pemberian BSM terhadap motivasi belajar siswa di SMA<br />\r\nN 1 Baros Tahun 2016&rsquo;&rsquo;.<br />\r\nMerujuk pada pembiayaan sekolah yang menjadi perhatian utama dalam aspek<br />\r\nbelajar siswa terutama motivasi belajar yang dimiliki oleh para siswa dengan<br />\r\nkemampuan ekonomi rendah di SMA N 1 Baros. Sehingga peneliti menelaah<br />\r\nlebih dalam keterkaitan atara kedua aspek tersebut dengan rujukan teori Mulyono<br />\r\n(2010:23) Biaya pendidikan merupakan komponen masukan instrumental<br />\r\n(Instrument Input) yang sangat penting dalam menyiapkan SDM melalui<br />\r\npenyelenggaraan pendidikan di sekolah.<br />\r\nPenelitian ini dimaksudkan untuk mencari tau bagaimana kondisi motivasi belajar<br />\r\nsiswa, bagaimana penyelenggaraan pihak sekolah dalam mendukung proses<br />\r\nbelajar siswa melalui bantuan pembiayaan, dan bagaimana hubungan antara<br />\r\npembiayaan dengan motivasi belajar siswa di SMA N 1 Baros. Dengan demikian,<br />\r\nsampel yang digunakan yaitu sebagian dari populasi dengan kriteria siswa yang<br />\r\nmenerima bantuan pembiayaan, dan ditentukan mennggunakan rumus Slovin.<br />\r\nSehingga jumlah sampel yang didapat yaitu sebanyak 121 siswa.<br />\r\nMetode pengumpulan data menggunakan angket kuesioner dan dokumentasi,<br />\r\nsedangkan metode analisis data menggunakan analisis regresi sederhana dan<br />\r\nanalisis persentase. Hasil penelitian menunjukan bahwa motivasi belajar siswa<br />\r\ndalam keadaan baik dengan perolehan persentase sebesar 67,76%%. Proses<br />\r\npemberian bantuan dalam keadaan baik dengan hasil rata-rata sebesar 72,56%,<br />\r\ndan pembiayaan memiliki pengaruh yang positif terhadap tingkat motivasi siswa<br />\r\ndi SMA N 1 Baros yaitu sebesar 50,5% .<br />\r\nKata Kunci : Pemberian BSM, Motivasi belajar</p>\r\n', '03', '87209', 'C', '2018-09-02', 'SKRIPSI-KUSNADI(180902220123).pdf', 'application/pdf', 426213, 3, 0, 2017, 2),
(22, '00001', '230112003', 'Sunadi', 'ANALISIS KEBUTUHAN RUANG TERBUKA HIJAU DALAM MENYERAP EMISI GAS KARBON DIOKSIDA (CO2) DI KOTA SERANG', '<p>Peningkatan jumlah penduduk Kota Serang berdampak pada pengalihfungsian lahan bervegetasi menjadi area terbangun sehingga mengurangi luas Ruang Terbuka Hijau (RTH) kota. Dampak yang paling nyata adalah berkurangnya kemampuan vegetasi menyerap CO2 sehingga CO2 yang dihasilkan dari aktivitas kota, baik dari konsumsi energi, perternakan, dan timbunan sampah yang terus meningkat. Tujuan dari penelitian ini adalah: 1) menganalisis jumlah emisi gas CO2 dari penggunaan energi listrik, kegiatan ternak dan sampah tahun 2016 &ndash; 2026; 2) Menganalisis daya serap CO2 berdasarkan luasan RTH saat ini; 3) Menganalisis Kebutuhan RTH tahun 2016 &ndash; 2026. Penelitian ini dilakukan pada bulan Mei 2016 sampai dengan bulan September 2016. Metode yang digunakan dalam penelitian ini adalah analisa kuantitatif dan data sekunder. Berdasarkan analisis penelitian menunjukan RTH yang ada di kota Serang saat ini (4.320,14 hektar) hanya mampu menyerap emisi gas CO2 sebesar 251.680,99 ton CO2. Berdasarkan hasil penellitian pada tahun 2016 menunjukan bahwa kota Serang membutuhkan RTH seluas 9.844,79 hektar untuk menyerap gas CO2 sebanyak 573.534,05 ton CO2 dan pada tahun 2026 kebutuhan luasan RTH akan meningkat menjadi 21.185,22 hektar untuk menyerap gas CO2 sebesar 1.234.200,30 ton CO2.<br />\r\nKata kunci: Ruang Terbuka Hijau, daya serap gas CO2.</p>\r\n', '02', '25201', 'C', '2018-09-07', 'SKRIPSI-SUNADI(180907061328).pdf', 'application/pdf', 3685213, 1, 0, 2016, 1),
(23, '00001', '2348764309', 'Ina Rohiatussakina', 'AN ANALYSIS OF LEARNING SPEAKING ABILITY IN ENGINEERING PROGRAM (Descriptive Analysis Study at Universitas Banten Jaya Serang)', '<p>The objective of this study is to analyzing the process of teaching and learning<br />\r\nspeaking skills. This study was categorized into qualitative research design embracing<br />\r\nparticularly the descriptive analysis study. The subjects of the study were engineering<br />\r\nstudents of Banten Jaya.<br />\r\nThe methods of collecting data are class observation and field notes which supported<br />\r\nby other data such as picture documentation and the result of speaking assessment. The data<br />\r\ncollection techniques were, observations and documentation. The instruments were<br />\r\nobservations sheets and documentation. The data analyses were descriptive and scoring mark<br />\r\nof the students learning results the result conducted the analyzed of studentsâ€Ÿ speaking ability,<br />\r\nknowledge and comprehension in English speaking learning through conversational activities<br />\r\nin the class.<br />\r\nOverall, it is found that the conversational activities helped students solved their<br />\r\nproblems such as remembering new words easier, more confidence, not scare and speaking<br />\r\nEnglish well. In order that studentsâ€Ÿ much in memorizing new words because students gained<br />\r\nmore and more vocabularies which are important for their communication in English.<br />\r\nKeywords: learning analysis, speaking ability, engineering program</p>\r\n', '03', '88203', 'C', '2018-09-07', 'INA-AN ANALYSIS OF LEARNING SPEAKING ABILITY IN ENGINEERING PROGRAM(180907061704).pdf', 'application/pdf', 190539, 4, 0, 2018, 1),
(24, '00002', '0427067705', 'Chotibul Umam', 'ANALISIS ALIH KODE DAN CAMPUR KODE PADA PROGRAM MUSIK BREAKOUT', '<p>Penelitian ini dilatarbelakangi oleh acara musik Breakout di di NET TV dengan<br />\r\nkemasan yang sangat menarik dan berbeda dibanding acara musik di program TV lainnya,<br />\r\nSehingga menimbulkan banyak respon dari pemirsa televisi dan berita online.<br />\r\nTujuan penelitian untuk mengindentifikasi alih kode dan campur kode yang dituturkan<br />\r\noleh pembawa acara dan bintang tamu dalam program tersebut.<br />\r\nMetode yang digunakan adalah metode kualitalif. Teori yang melandasi adalah teori<br />\r\nsosiolinguistik. Data penelitian berupa video dari youtube yang didownload lalu ditranskip.<br />\r\nHasil penelitian ini adalah ditemukan pembawa acara menggunakan alih kode dan<br />\r\ncampur kode antara bahasa Indonesia dan bahasa Inggris ketika berbicara sendiri maupun<br />\r\ndengan bintang tamu.<br />\r\nKata Kunci: sosiolinguistik, alih kode, campur kode.</p>\r\n', '03', '', 'C', '2018-09-07', 'CHOTIBUL UMAM-ANALISIS ALIH KODE DAN CAMPUR KODE PADA PROGRAM MUSIK BREAKOUT(180907061820).pdf', 'application/pdf', 274065, 4, 0, 2018, 1),
(25, '00003', '', 'Nely Hartika', 'PENERAPAN MEDIA PEMBELAJARAN MONOPOLI UNTUK MENINGKATKAN HASIL BELAJAR SISWA PADA MATA PELAJARAN PENGANTAR AKUNTANSI DI SMKN 7 KOTA SERANG', '<p>This study aimed to determine the application of learning media monopoly in class<br />\r\nX Accounting SMKN 7 Serang and to find out how the results of students class X<br />\r\nAccounting SMKN 7 Serang.<br />\r\nThis study used classroom action research method consisting of two cycles, each<br />\r\ncycle consisted of four stages of planning, implementation, observation and reflection. The<br />\r\nsubjects of the study were the students of class X Akuntansi SMK 7 Serang consisting of 40<br />\r\nstudents and the accounting teacher as collaborator.<br />\r\nThese results indicate that the learning monopoly media could improve the student<br />\r\nlearning outcomes based on one cycle, 40 students could reach the KKM 90%, while the two<br />\r\ncycles increased to 100%.<br />\r\nKeywords: Learning Media Monopoly, Learning Outcomes.</p>\r\n', '03', '-Pogr', 'C', '2018-09-07', 'NELY HARTIKA-PENERAPAN MEDIA PEMBELAJARAN MONOPOLI UNTUK MENINGKATKAN HASIL BELAJAR SISWA PADA MATA PELAJARAN PENGANTAR AKUNTANSI DI SMKN 7 KOTA SERANG(180907061940).pdf', 'application/pdf', 323505, 4, 0, 2018, 2),
(26, '00004', '1102141320', 'Hani Faturrohmah', 'sdfsdgfdhdhg', '<p>sdgfdgfdhfdjdfh</p>\r\n', '01', '55201', 'C', '2018-09-07', 'PKN-SINGGIH(180907190537).pdf', 'application/pdf', 311016, 2, 0, 2012, 1);

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(2) NOT NULL,
  `kategori` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `kategori`) VALUES
(1, 'Skripsi'),
(2, 'Laporan PKN'),
(3, 'Proposal'),
(4, 'Jurnal');

-- --------------------------------------------------------

--
-- Table structure for table `msfak`
--

CREATE TABLE `msfak` (
  `kode_fak` varchar(6) NOT NULL DEFAULT '',
  `nama_fak` varchar(50) NOT NULL DEFAULT '',
  `nama_pdk` char(20) DEFAULT ''
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `msfak`
--

INSERT INTO `msfak` (`kode_fak`, `nama_fak`, `nama_pdk`) VALUES
('03', 'Fakultas Keguruan dan Ilmu Pendidikan', 'FKIP'),
('01', 'Fakultas Ilmu Komputer', 'FIK'),
('02', 'Fakultas Teknik', 'FT');

-- --------------------------------------------------------

--
-- Table structure for table `mspst`
--

CREATE TABLE `mspst` (
  `kode_fak` varchar(2) DEFAULT NULL,
  `kode_jen` varchar(1) DEFAULT NULL,
  `kode_prodi` varchar(5) DEFAULT NULL,
  `nama_prodi` varchar(40) DEFAULT NULL,
  `nama_pdk` char(3) DEFAULT ''
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `mspst`
--

INSERT INTO `mspst` (`kode_fak`, `kode_jen`, `kode_prodi`, `nama_prodi`, `nama_pdk`) VALUES
('01', 'C', '55201', 'Teknik Informatika', 'TI'),
('01', 'C', '57201', 'Sistem Informasi', 'SI'),
('01', 'E', '55401', 'Teknik Informatika', 'TI'),
('01', 'E', '57401', 'Manajemen Informatika', 'MI'),
('01', 'E', '57402', 'Komputerisasi Akuntansi', 'KA'),
('02', 'C', '22201', 'Teknik Sipil', 'TS'),
('02', 'C', '25201', 'Teknik Lingkungan', 'TL'),
('02', 'C', '26201', 'Teknik Industri', 'TIN'),
('03', 'C', '87205', 'Pendidikan Pancasila & Kewarganegaraan', 'PKN'),
('03', 'C', '87209', 'Pendidikan Akuntansi', 'PAK'),
('03', 'C', '88203', 'Pendidikan Bahasa Inggris', 'PBI');

-- --------------------------------------------------------

--
-- Table structure for table `validasi`
--

CREATE TABLE `validasi` (
  `no_urut` int(5) NOT NULL,
  `denda` int(1) DEFAULT NULL,
  `pengembalian` int(1) DEFAULT NULL,
  `sumbangan` int(1) DEFAULT NULL,
  `pknprop` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `validasi`
--

INSERT INTO `validasi` (`no_urut`, `denda`, `pengembalian`, `sumbangan`, `pknprop`) VALUES
(14, 1, 1, 1, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `anggota`
--
ALTER TABLE `anggota`
  ADD PRIMARY KEY (`id_anggota`,`no_identitas`);

--
-- Indexes for table `download`
--
ALTER TABLE `download`
  ADD PRIMARY KEY (`id_anggota`);

--
-- Indexes for table `jenjang`
--
ALTER TABLE `jenjang`
  ADD UNIQUE KEY `jenjangx` (`kode_jenjang`);

--
-- Indexes for table `karya_ilmiah`
--
ALTER TABLE `karya_ilmiah`
  ADD PRIMARY KEY (`no_urut`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `msfak`
--
ALTER TABLE `msfak`
  ADD PRIMARY KEY (`kode_fak`);

--
-- Indexes for table `validasi`
--
ALTER TABLE `validasi`
  ADD PRIMARY KEY (`no_urut`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `anggota`
--
ALTER TABLE `anggota`
  MODIFY `id_anggota` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `karya_ilmiah`
--
ALTER TABLE `karya_ilmiah`
  MODIFY `no_urut` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- Database: `db_bengkel`
--
CREATE DATABASE IF NOT EXISTS `db_bengkel` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `db_bengkel`;

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
(3, 'Mobil Mobilan');

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
  `status` varchar(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dm_pengguna`
--

INSERT INTO `dm_pengguna` (`id`, `no_telp`, `nama`, `alamat`, `jenis_kelamin`, `email`, `sandi`, `foto`, `status`) VALUES
(2, '085893324274', 'Siska', 'kalapa lima, Rt:rw:01/02,  desa: sukamanah, kecamatan: Baros, Kabupaten: serang, Provinsi: serang', 'P', 'admin@gmail.com', NULL, NULL, '1'),
(3, '085893324274', 'Siapa aja ', 'kalapa lima, Rt:rw:01/02,  desa: sukamanah, kecamatan: Baros, Kabupaten: serang, Provinsi: serang', 'L', 'islahatunnufusi07@gmail.com', NULL, NULL, '1'),
(6, '085893324274', 'Humanika', 'kalapa lima, Rt:rw:01/02,  desa: sukamanah, kecamatan: Baros, Kabupaten: serang, Provinsi: serang', 'P', 'iis@gmail.com', NULL, 'C:\\fakepath\\f52afef93d06b5503b60a507e3377b80.jpg', '2');

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
(1, '1', 'Apa aja', 'liter', 3, '200000.00', '300000.00', 'Apa aja', '0000-00-00', ''),
(2, '1', 'Suku Cadang', 'Buah', 1, '4000000.00', '500000.00', 'Ini adalah Suku cadang Mobil', '2022-05-03', NULL);

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
(2, 'Sedang diproses owner');

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
(11, 10, NULL, 'Laporan Costomer', 'MasterBarang/reportList', 0, 'Y'),
(12, 10, NULL, 'Laporan Barang', 'LaporanBarang', 0, 'Y'),
(13, 10, NULL, 'Laporan Pemesanan', 'LaporanPemesanan', 0, 'Y'),
(14, 0, '<i class=\"fas fa-box-open\"></i>', 'Supplier', 'Supplier', 5, 'Y');

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
-- Table structure for table `sys_users`
--

CREATE TABLE `sys_users` (
  `username` varchar(50) NOT NULL DEFAULT '',
  `password` varchar(250) NOT NULL DEFAULT '',
  `session_id` varchar(250) DEFAULT NULL,
  `active` enum('Y','N') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sys_users`
--

INSERT INTO `sys_users` (`username`, `password`, `session_id`, `active`) VALUES
('admin', '21232f297a57a5a743894a0e4a801fc3', NULL, 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `trans_pemesanan`
--

CREATE TABLE `trans_pemesanan` (
  `id_pemesanan` int(11) NOT NULL,
  `id_pelanggan` int(11) DEFAULT NULL,
  `id_po` int(11) DEFAULT NULL,
  `nama_barang` varchar(50) DEFAULT NULL,
  `harga_barang` decimal(12,2) DEFAULT NULL,
  `jumlah_beli` int(11) DEFAULT NULL,
  `status_pemesanan` varchar(50) DEFAULT NULL,
  `tanggal_pemesanan` date DEFAULT NULL,
  `total_pembelian` decimal(12,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `trans_pemesanan`
--

INSERT INTO `trans_pemesanan` (`id_pemesanan`, `id_pelanggan`, `id_po`, `nama_barang`, `harga_barang`, `jumlah_beli`, `status_pemesanan`, `tanggal_pemesanan`, `total_pembelian`) VALUES
(1, 2, 1, NULL, NULL, NULL, NULL, NULL, NULL);

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
-- Indexes for table `sys_users`
--
ALTER TABLE `sys_users`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `trans_pemesanan`
--
ALTER TABLE `trans_pemesanan`
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
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `dm_kurir`
--
ALTER TABLE `dm_kurir`
  MODIFY `id_kurir` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `dm_pengguna`
--
ALTER TABLE `dm_pengguna`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `dm_po`
--
ALTER TABLE `dm_po`
  MODIFY `id_po` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `dm_status_pemesanan`
--
ALTER TABLE `dm_status_pemesanan`
  MODIFY `id_status` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

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
  MODIFY `id_pemesanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
--
-- Database: `klinik`
--
CREATE DATABASE IF NOT EXISTS `klinik` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `klinik`;

-- --------------------------------------------------------

--
-- Table structure for table `berobat`
--

CREATE TABLE `berobat` (
  `id_berobat` int(11) NOT NULL,
  `kode_sakit` varchar(5) NOT NULL,
  `id_pasien` int(5) DEFAULT NULL,
  `id_dokter` int(5) DEFAULT NULL,
  `tgl_berobat` date DEFAULT NULL,
  `keluhan_pasien` varchar(200) DEFAULT NULL,
  `hasil_diagnosa` varchar(200) DEFAULT NULL,
  `penatalaksanaan` enum('Rawat Jalan','Rawat Inap','Rujuk','Lainnya...') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
-- Table structure for table `dm_aturan_obat`
--

CREATE TABLE `dm_aturan_obat` (
  `aturan_obat` int(11) NOT NULL,
  `aturan_obat_name` varchar(100) NOT NULL,
  `status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dm_aturan_obat`
--

INSERT INTO `dm_aturan_obat` (`aturan_obat`, `aturan_obat_name`, `status`) VALUES
(1, 'hj', 0),
(2, '3x4 buyer', 0),
(3, '3x4 Buyer', 1),
(4, 'rvxf', 0),
(5, 'fgf', 0),
(6, '1X 2 Sebelum  makan', 0);

-- --------------------------------------------------------

--
-- Table structure for table `dm_diagnosa`
--

CREATE TABLE `dm_diagnosa` (
  `diagnosa_id` int(11) NOT NULL,
  `diagnosa_code` varchar(50) NOT NULL,
  `diagnosa_version` varchar(20) NOT NULL,
  `diagnosa_name` varchar(150) NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dm_diagnosa`
--

INSERT INTO `dm_diagnosa` (`diagnosa_id`, `diagnosa_code`, `diagnosa_version`, `diagnosa_name`, `status`) VALUES
(1, 'R10', 'ICG10', 'Abdominal pain', 1),
(2, '123', '123', 'Flu', 0),
(3, 'hay', 'Hoy', 'Gatal', 0),
(4, 'haj2', 'hai1', 'Flu', 0),
(5, 'gah1', 'gajha1', 'Batuk', 0),
(6, 'ghjbbg', 'yygjb', 'flu', 0),
(7, 'hjkhk', 'vfcg', 'batuk', 0),
(8, 'R12', 'DAFA', 'BATUK', 0);

-- --------------------------------------------------------

--
-- Table structure for table `dm_dokter`
--

CREATE TABLE `dm_dokter` (
  `doctor_id` int(11) NOT NULL,
  `poliklinik_id` int(11) NOT NULL,
  `nama_dokter` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `dm_jenis_obat`
--

CREATE TABLE `dm_jenis_obat` (
  `jenis_obat_id` int(11) NOT NULL,
  `jenis_obat_name` varchar(100) NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dm_jenis_obat`
--

INSERT INTO `dm_jenis_obat` (`jenis_obat_id`, `jenis_obat_name`, `status`) VALUES
(1, 'Generik', 1),
(2, 'Non Generik', 1),
(3, 'Kapsul Racik', 1),
(4, 'tablet', 1);

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
-- Table structure for table `dm_limbah`
--

CREATE TABLE `dm_limbah` (
  `limbah_id` int(11) NOT NULL,
  `limbah_name` varchar(100) NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dm_limbah`
--

INSERT INTO `dm_limbah` (`limbah_id`, `limbah_name`, `status`) VALUES
(1, 'Expired', 1),
(2, 'Rusak', 1);

-- --------------------------------------------------------

--
-- Table structure for table `dm_obat`
--

CREATE TABLE `dm_obat` (
  `id_obat` int(5) NOT NULL,
  `nama_obat` varchar(100) DEFAULT NULL,
  `satuan` varchar(20) NOT NULL,
  `kategori` varchar(30) NOT NULL,
  `stock` int(5) NOT NULL,
  `harga` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `dm_pasien`
--

CREATE TABLE `dm_pasien` (
  `id` varchar(16) NOT NULL COMMENT 'No Rekam Medis',
  `identitas_id` varchar(50) DEFAULT NULL,
  `nama` varchar(40) NOT NULL,
  `tempat_lahir` varchar(30) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jenis_kelamin` enum('L','P') NOT NULL,
  `gol_darah` varchar(100) DEFAULT NULL,
  `telp` varchar(13) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `telp_lain` varchar(13) NOT NULL,
  `nama_lain` varchar(100) NOT NULL,
  `pekerjaan_id` varchar(20) NOT NULL,
  `prov_id` varchar(20) NOT NULL,
  `kab_id` varchar(20) NOT NULL,
  `kec_id` varchar(20) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `agama_id` int(11) NOT NULL,
  `pendidikan_id` int(11) NOT NULL,
  `perkawinan_id` int(11) NOT NULL,
  `date_add` datetime NOT NULL,
  `date_modify` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dm_pasien`
--

INSERT INTO `dm_pasien` (`id`, `identitas_id`, `nama`, `tempat_lahir`, `tgl_lahir`, `jenis_kelamin`, `gol_darah`, `telp`, `email`, `telp_lain`, `nama_lain`, `pekerjaan_id`, `prov_id`, `kab_id`, `kec_id`, `alamat`, `agama_id`, `pendidikan_id`, `perkawinan_id`, `date_add`, `date_modify`) VALUES
('000001', NULL, 'Windu Januar Pratama', 'Lebak', '1989-01-04', 'L', '-', '081283696741', 'windu.jobs@gmail.com', '008', 'saras', '1', '1', '1', '1', 'Rangkasbitung', 1, 1, 1, '2021-11-30 22:07:50', '2021-11-30 22:07:50');

-- --------------------------------------------------------

--
-- Table structure for table `dm_pekerjaan`
--

CREATE TABLE `dm_pekerjaan` (
  `pekerjaan_id` int(11) NOT NULL,
  `pekerjaan_name` varchar(100) NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `dm_pelayanan`
--

CREATE TABLE `dm_pelayanan` (
  `id_pelayanan` int(11) NOT NULL,
  `nama_pelayanan` varchar(30) NOT NULL,
  `harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `dm_pendidikan`
--

CREATE TABLE `dm_pendidikan` (
  `pendidikan_id` int(11) NOT NULL,
  `pendidikan_name` varchar(100) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dm_pendidikan`
--

INSERT INTO `dm_pendidikan` (`pendidikan_id`, `pendidikan_name`, `status`) VALUES
(1, 'Belum', 1),
(2, 'SD', 1),
(3, 'SMP', 1),
(4, 'SMA', 1),
(5, 'Akademi', 1),
(6, 'Universitas', 1);

-- --------------------------------------------------------

--
-- Table structure for table `dm_perkawinan`
--

CREATE TABLE `dm_perkawinan` (
  `perkawinan_id` int(11) NOT NULL,
  `perkawinan_name` varchar(100) NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dm_perkawinan`
--

INSERT INTO `dm_perkawinan` (`perkawinan_id`, `perkawinan_name`, `status`) VALUES
(1, 'Belum Menikah', 1),
(2, 'Kawin', 1),
(3, 'Duda', 1),
(4, 'Janda', 1);

-- --------------------------------------------------------

--
-- Table structure for table `dm_poliklinik`
--

CREATE TABLE `dm_poliklinik` (
  `poliklinik_id` int(11) NOT NULL,
  `poliklinik_name` varchar(100) NOT NULL,
  `poliklinik_ket` varchar(250) NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dm_poliklinik`
--

INSERT INTO `dm_poliklinik` (`poliklinik_id`, `poliklinik_name`, `poliklinik_ket`, `status`) VALUES
(12, 'Poli Umum', '-', 1),
(30, 'Poli Gigi', '-', 1);

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
-- Table structure for table `dm_satuan`
--

CREATE TABLE `dm_satuan` (
  `satuan_id` int(11) NOT NULL,
  `satuan_name` varchar(100) NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dm_satuan`
--

INSERT INTO `dm_satuan` (`satuan_id`, `satuan_name`, `status`) VALUES
(1, 'Tetes Mata', 1),
(2, 'Tetes Telima', 1),
(3, 'Tetes untuk di minum', 1);

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

--
-- Dumping data for table `dm_supplier`
--

INSERT INTO `dm_supplier` (`supplier_id`, `supplier_name`, `alamat`, `telp`, `email`, `bank_id`, `no_rekening`, `rek_name`) VALUES
(1, 'TOKO MITRA DOCTER', 'SERANG', '008', '008@gmail.com', 1, '0000', 'Mitra Docter');

-- --------------------------------------------------------

--
-- Table structure for table `resep_obat`
--

CREATE TABLE `resep_obat` (
  `id_resep` int(11) NOT NULL,
  `id_berobat` int(11) DEFAULT NULL,
  `id_obat` int(5) DEFAULT NULL,
  `id_dokter` int(5) NOT NULL,
  `id_pasien` varchar(16) NOT NULL,
  `quantity` int(5) NOT NULL,
  `aturan` varchar(10) NOT NULL,
  `tanggal_resep` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
(3, 0, '<i class=\"fas fa-user\"></i>', 'Pendaftaran', NULL, 2, 'Y'),
(4, 3, NULL, 'Pasien', 'pasien', 0, 'Y'),
(5, 3, NULL, 'Pembatalan Transaksi', NULL, 0, 'Y'),
(6, 3, NULL, 'IGD', NULL, 0, 'N'),
(7, 0, '<i class=\"fas fa-server\"></i>', 'Master Data', NULL, 3, 'Y'),
(8, 7, NULL, 'Tenaga Kesehatan', 'TenagaKesehatan', 0, 'Y'),
(9, 7, NULL, 'Poliklinik', 'poliklinik', 0, 'Y'),
(10, 7, NULL, 'Parameter', 'Parameter', 0, 'Y'),
(11, 7, NULL, 'Asuransi', NULL, 0, 'Y'),
(15, 7, NULL, 'Obat / Item', 'JenisObat', 0, 'Y'),
(16, 7, NULL, 'Supplier', NULL, 0, 'Y'),
(17, 7, NULL, 'Asal Rujukan', NULL, 0, 'Y'),
(18, 0, '<i class=\"fas fa-calendar-alt\"></i>', 'Jadwal Dokter', NULL, 4, 'Y'),
(19, 0, '<i class=\"fas fa-capsules\"></i>', 'Farmasi', NULL, 5, 'Y'),
(20, 0, '<i class=\"fas fa-stethoscope\"></i>', 'Input Tindakan', NULL, 6, 'Y'),
(21, 0, '<i class=\"fas fa-shopping-cart\"></i>', 'Kasir', NULL, 7, 'Y'),
(22, 0, '<i class=\"fas fa-money-bill\"></i>', 'Keuangan', NULL, 8, 'Y'),
(23, 0, '<i class=\"fas fa-users\"></i>', 'Users', NULL, 13, 'Y'),
(24, 0, '<i class=\"fas fa-book-medical\"></i>', 'Laporan', NULL, 9, 'Y'),
(27, 0, '<i class=\"fas fa-warehouse\"></i>', 'Inventory', NULL, 15, 'Y'),
(28, 0, '<i class=\"fas fa-envelope-open-text\"></i>', 'Cetak Surat', NULL, 12, 'Y'),
(29, 0, '<i class=\"fas fa-medkit\"></i>', 'Laboratorium', NULL, 10, 'Y'),
(30, 0, '<i class=\"fas fa-heartbeat\"></i>', 'Radiologi', NULL, 11, 'Y'),
(31, 0, '<i class=\"fas fa-book\"></i>', 'Cetak Slip Gaji', NULL, 14, 'Y'),
(32, 0, '<i class=\"fas fa-cogs\"></i>', 'Setting', NULL, 16, 'Y'),
(33, 3, NULL, 'Rawat Jalan', NULL, 0, 'Y'),
(34, 3, NULL, 'Rawat Inap', NULL, 0, 'N'),
(35, 7, NULL, 'Ruang Inap', NULL, 0, 'N'),
(36, 7, NULL, 'Diagnosa', 'Diagnosa', 0, 'Y'),
(37, 7, NULL, 'Aturan Obat', 'AturanObat', 0, 'Y'),
(38, 7, NULL, 'Jenis Tarif', NULL, 0, 'Y'),
(39, 7, NULL, 'Jenis Obat', 'jenisObat', 0, 'Y'),
(40, 19, NULL, 'Antrian Farmasi', NULL, 1, 'Y'),
(41, 19, NULL, 'Penjualan Langsung', NULL, 1, 'Y'),
(42, 20, NULL, 'IGD', NULL, 1, 'Y'),
(43, 20, NULL, 'Rawat Jalan', NULL, 2, 'Y'),
(44, 20, NULL, 'Rawat Inap', NULL, 3, 'Y'),
(45, 22, NULL, 'Master Tarif', NULL, 1, 'Y'),
(46, 22, NULL, 'Pembayaran Hutang', NULL, 2, 'Y'),
(47, 22, NULL, 'Kas dan Bank', NULL, 3, 'Y'),
(48, 22, NULL, 'Neraca Saldo', NULL, 4, 'Y'),
(49, 22, NULL, 'Buku Besar', NULL, 5, 'Y'),
(50, 22, NULL, 'Laba Rugi', NULL, 6, 'Y'),
(51, 22, NULL, 'Tutup Kasir', NULL, 7, 'Y'),
(52, 22, NULL, 'Jurnal', NULL, 8, 'Y'),
(53, 22, NULL, 'COA', NULL, 9, 'Y'),
(54, 22, NULL, 'Tutup Buku', NULL, 10, 'Y'),
(55, 22, NULL, 'Pembayaran Biaya', NULL, 11, 'Y'),
(56, 22, NULL, 'Jurnal Umum', NULL, 12, 'Y'),
(57, 22, NULL, 'Bank', NULL, 13, 'Y'),
(58, 22, NULL, 'Neraca', NULL, 14, 'Y'),
(59, 22, NULL, 'Perubahan Modal', NULL, 15, 'Y'),
(60, 22, NULL, 'Harta Tetap', NULL, 16, 'Y'),
(61, 22, NULL, 'Penerimaan Piutang', NULL, 16, 'Y'),
(62, 28, NULL, 'Surat Sehat', NULL, 1, 'Y'),
(63, 28, NULL, 'Surat Sakit', NULL, 2, 'Y'),
(64, 28, NULL, 'Surat Rujukan', NULL, 3, 'Y'),
(65, 27, NULL, 'Purchase Order', NULL, 1, 'Y'),
(66, 27, NULL, 'Barang Masuk', NULL, 2, 'Y'),
(67, 27, NULL, 'Limbah', NULL, 3, 'Y'),
(68, 27, NULL, 'Return', NULL, 4, 'Y'),
(69, 27, NULL, 'Stock Opname Gudang', NULL, 5, 'Y'),
(70, 27, NULL, 'Data Stok', NULL, 6, 'Y'),
(71, 27, NULL, 'Kartu Stok', NULL, 7, 'Y'),
(72, 27, NULL, 'Cetak Barcode', NULL, 8, 'Y'),
(73, 32, NULL, 'Info Klinik', NULL, 1, 'Y'),
(74, 32, NULL, 'Email', NULL, 2, 'Y');

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
-- Table structure for table `sys_users`
--

CREATE TABLE `sys_users` (
  `username` varchar(50) NOT NULL DEFAULT '',
  `password` varchar(250) NOT NULL DEFAULT '',
  `session_id` varchar(250) DEFAULT NULL,
  `active` enum('Y','N') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sys_users`
--

INSERT INTO `sys_users` (`username`, `password`, `session_id`, `active`) VALUES
('admin', '21232f297a57a5a743894a0e4a801fc3', NULL, 'Y');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `berobat`
--
ALTER TABLE `berobat`
  ADD PRIMARY KEY (`id_berobat`),
  ADD KEY `FK2` (`id_dokter`);

--
-- Indexes for table `dm_agama`
--
ALTER TABLE `dm_agama`
  ADD PRIMARY KEY (`agama_id`);

--
-- Indexes for table `dm_aturan_obat`
--
ALTER TABLE `dm_aturan_obat`
  ADD PRIMARY KEY (`aturan_obat`);

--
-- Indexes for table `dm_diagnosa`
--
ALTER TABLE `dm_diagnosa`
  ADD PRIMARY KEY (`diagnosa_id`),
  ADD UNIQUE KEY `dm_diagnosa_un` (`diagnosa_code`);

--
-- Indexes for table `dm_dokter`
--
ALTER TABLE `dm_dokter`
  ADD PRIMARY KEY (`doctor_id`),
  ADD KEY `dm_dokter_FK` (`poliklinik_id`);

--
-- Indexes for table `dm_jenis_obat`
--
ALTER TABLE `dm_jenis_obat`
  ADD PRIMARY KEY (`jenis_obat_id`);

--
-- Indexes for table `dm_kab`
--
ALTER TABLE `dm_kab`
  ADD PRIMARY KEY (`kab_id`),
  ADD KEY `dm_kab_FK` (`prov_id`);

--
-- Indexes for table `dm_kec`
--
ALTER TABLE `dm_kec`
  ADD PRIMARY KEY (`kec_id`),
  ADD KEY `dm_kec_FK` (`kab_id`);

--
-- Indexes for table `dm_limbah`
--
ALTER TABLE `dm_limbah`
  ADD PRIMARY KEY (`limbah_id`);

--
-- Indexes for table `dm_obat`
--
ALTER TABLE `dm_obat`
  ADD PRIMARY KEY (`id_obat`);

--
-- Indexes for table `dm_pasien`
--
ALTER TABLE `dm_pasien`
  ADD PRIMARY KEY (`id`),
  ADD KEY `dm_pasien_FK` (`perkawinan_id`),
  ADD KEY `dm_pasien_FK_1` (`pendidikan_id`),
  ADD KEY `dm_pasien_FK_2` (`agama_id`);

--
-- Indexes for table `dm_pekerjaan`
--
ALTER TABLE `dm_pekerjaan`
  ADD PRIMARY KEY (`pekerjaan_id`);

--
-- Indexes for table `dm_pelayanan`
--
ALTER TABLE `dm_pelayanan`
  ADD PRIMARY KEY (`id_pelayanan`);

--
-- Indexes for table `dm_pendidikan`
--
ALTER TABLE `dm_pendidikan`
  ADD PRIMARY KEY (`pendidikan_id`);

--
-- Indexes for table `dm_perkawinan`
--
ALTER TABLE `dm_perkawinan`
  ADD PRIMARY KEY (`perkawinan_id`);

--
-- Indexes for table `dm_poliklinik`
--
ALTER TABLE `dm_poliklinik`
  ADD PRIMARY KEY (`poliklinik_id`),
  ADD UNIQUE KEY `dm_poliklinik_un` (`poliklinik_name`);

--
-- Indexes for table `dm_prov`
--
ALTER TABLE `dm_prov`
  ADD PRIMARY KEY (`prov_id`);

--
-- Indexes for table `dm_satuan`
--
ALTER TABLE `dm_satuan`
  ADD PRIMARY KEY (`satuan_id`);

--
-- Indexes for table `dm_supplier`
--
ALTER TABLE `dm_supplier`
  ADD PRIMARY KEY (`supplier_id`);

--
-- Indexes for table `resep_obat`
--
ALTER TABLE `resep_obat`
  ADD PRIMARY KEY (`id_resep`),
  ADD KEY `FK_berobat` (`id_berobat`),
  ADD KEY `FK_obat` (`id_obat`);

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
-- Indexes for table `sys_users`
--
ALTER TABLE `sys_users`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dm_agama`
--
ALTER TABLE `dm_agama`
  MODIFY `agama_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `dm_aturan_obat`
--
ALTER TABLE `dm_aturan_obat`
  MODIFY `aturan_obat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `dm_diagnosa`
--
ALTER TABLE `dm_diagnosa`
  MODIFY `diagnosa_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `dm_jenis_obat`
--
ALTER TABLE `dm_jenis_obat`
  MODIFY `jenis_obat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `dm_limbah`
--
ALTER TABLE `dm_limbah`
  MODIFY `limbah_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `dm_pekerjaan`
--
ALTER TABLE `dm_pekerjaan`
  MODIFY `pekerjaan_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `dm_pelayanan`
--
ALTER TABLE `dm_pelayanan`
  MODIFY `id_pelayanan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `dm_pendidikan`
--
ALTER TABLE `dm_pendidikan`
  MODIFY `pendidikan_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `dm_perkawinan`
--
ALTER TABLE `dm_perkawinan`
  MODIFY `perkawinan_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `dm_poliklinik`
--
ALTER TABLE `dm_poliklinik`
  MODIFY `poliklinik_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `dm_satuan`
--
ALTER TABLE `dm_satuan`
  MODIFY `satuan_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `dm_supplier`
--
ALTER TABLE `dm_supplier`
  MODIFY `supplier_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
-- Constraints for dumped tables
--

--
-- Constraints for table `berobat`
--
ALTER TABLE `berobat`
  ADD CONSTRAINT `FK2` FOREIGN KEY (`id_dokter`) REFERENCES `dm_dokter` (`doctor_id`) ON UPDATE CASCADE;

--
-- Constraints for table `dm_dokter`
--
ALTER TABLE `dm_dokter`
  ADD CONSTRAINT `dm_dokter_FK` FOREIGN KEY (`poliklinik_id`) REFERENCES `dm_poliklinik` (`poliklinik_id`);

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
-- Constraints for table `dm_pasien`
--
ALTER TABLE `dm_pasien`
  ADD CONSTRAINT `dm_pasien_FK` FOREIGN KEY (`perkawinan_id`) REFERENCES `dm_perkawinan` (`perkawinan_id`),
  ADD CONSTRAINT `dm_pasien_FK_1` FOREIGN KEY (`pendidikan_id`) REFERENCES `dm_pendidikan` (`pendidikan_id`),
  ADD CONSTRAINT `dm_pasien_FK_2` FOREIGN KEY (`agama_id`) REFERENCES `dm_agama` (`agama_id`);

--
-- Constraints for table `resep_obat`
--
ALTER TABLE `resep_obat`
  ADD CONSTRAINT `FK_berobat` FOREIGN KEY (`id_berobat`) REFERENCES `berobat` (`id_berobat`) ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_obat` FOREIGN KEY (`id_obat`) REFERENCES `dm_obat` (`id_obat`);

--
-- Constraints for table `sys_rulesmodules`
--
ALTER TABLE `sys_rulesmodules`
  ADD CONSTRAINT `FK_sys_rulesmodules_sys_modules` FOREIGN KEY (`module_id`) REFERENCES `sys_modules` (`module_id`),
  ADD CONSTRAINT `FK_sys_rulesmodules_sys_rules` FOREIGN KEY (`rule_id`) REFERENCES `sys_rules` (`rule_id`);
--
-- Database: `phpmyadmin`
--
CREATE DATABASE IF NOT EXISTS `phpmyadmin` DEFAULT CHARACTER SET utf8 COLLATE utf8_bin;
USE `phpmyadmin`;

-- --------------------------------------------------------

--
-- Table structure for table `pma__bookmark`
--

CREATE TABLE `pma__bookmark` (
  `id` int(10) UNSIGNED NOT NULL,
  `dbase` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `user` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `label` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `query` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Bookmarks';

-- --------------------------------------------------------

--
-- Table structure for table `pma__central_columns`
--

CREATE TABLE `pma__central_columns` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_type` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_length` text COLLATE utf8_bin DEFAULT NULL,
  `col_collation` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_isNull` tinyint(1) NOT NULL,
  `col_extra` varchar(255) COLLATE utf8_bin DEFAULT '',
  `col_default` text COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Central list of columns';

-- --------------------------------------------------------

--
-- Table structure for table `pma__column_info`
--

CREATE TABLE `pma__column_info` (
  `id` int(5) UNSIGNED NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `column_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `comment` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `mimetype` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `transformation` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `transformation_options` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `input_transformation` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `input_transformation_options` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Column information for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__designer_settings`
--

CREATE TABLE `pma__designer_settings` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `settings_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Settings related to Designer';

-- --------------------------------------------------------

--
-- Table structure for table `pma__export_templates`
--

CREATE TABLE `pma__export_templates` (
  `id` int(5) UNSIGNED NOT NULL,
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `export_type` varchar(10) COLLATE utf8_bin NOT NULL,
  `template_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `template_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Saved export templates';

-- --------------------------------------------------------

--
-- Table structure for table `pma__favorite`
--

CREATE TABLE `pma__favorite` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `tables` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Favorite tables';

-- --------------------------------------------------------

--
-- Table structure for table `pma__history`
--

CREATE TABLE `pma__history` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `timevalue` timestamp NOT NULL DEFAULT current_timestamp(),
  `sqlquery` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='SQL history for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__navigationhiding`
--

CREATE TABLE `pma__navigationhiding` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `item_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `item_type` varchar(64) COLLATE utf8_bin NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Hidden items of navigation tree';

-- --------------------------------------------------------

--
-- Table structure for table `pma__pdf_pages`
--

CREATE TABLE `pma__pdf_pages` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `page_nr` int(10) UNSIGNED NOT NULL,
  `page_descr` varchar(50) CHARACTER SET utf8 NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='PDF relation pages for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__recent`
--

CREATE TABLE `pma__recent` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `tables` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Recently accessed tables';

--
-- Dumping data for table `pma__recent`
--

INSERT INTO `pma__recent` (`username`, `tables`) VALUES
('root', '[{\"db\":\"slims9\",\"table\":\"item\"},{\"db\":\"slims9\",\"table\":\"biblio\"},{\"db\":\"slims9\",\"table\":\"files\"},{\"db\":\"slims9\",\"table\":\"content\"},{\"db\":\"slims9\",\"table\":\"comment\"},{\"db\":\"slims9\",\"table\":\"biblio_topic\"},{\"db\":\"slims9\",\"table\":\"biblio_relation\"},{\"db\":\"slims9\",\"table\":\"biblio_log\"},{\"db\":\"slims9\",\"table\":\"biblio_author\"},{\"db\":\"slims9\",\"table\":\"biblio_attachment\"}]');

-- --------------------------------------------------------

--
-- Table structure for table `pma__relation`
--

CREATE TABLE `pma__relation` (
  `master_db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `master_table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `master_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Relation table';

-- --------------------------------------------------------

--
-- Table structure for table `pma__savedsearches`
--

CREATE TABLE `pma__savedsearches` (
  `id` int(5) UNSIGNED NOT NULL,
  `username` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `search_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `search_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Saved searches';

-- --------------------------------------------------------

--
-- Table structure for table `pma__table_coords`
--

CREATE TABLE `pma__table_coords` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `pdf_page_number` int(11) NOT NULL DEFAULT 0,
  `x` float UNSIGNED NOT NULL DEFAULT 0,
  `y` float UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table coordinates for phpMyAdmin PDF output';

-- --------------------------------------------------------

--
-- Table structure for table `pma__table_info`
--

CREATE TABLE `pma__table_info` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `display_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table information for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__table_uiprefs`
--

CREATE TABLE `pma__table_uiprefs` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `prefs` text COLLATE utf8_bin NOT NULL,
  `last_update` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Tables'' UI preferences';

-- --------------------------------------------------------

--
-- Table structure for table `pma__tracking`
--

CREATE TABLE `pma__tracking` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `version` int(10) UNSIGNED NOT NULL,
  `date_created` datetime NOT NULL,
  `date_updated` datetime NOT NULL,
  `schema_snapshot` text COLLATE utf8_bin NOT NULL,
  `schema_sql` text COLLATE utf8_bin DEFAULT NULL,
  `data_sql` longtext COLLATE utf8_bin DEFAULT NULL,
  `tracking` set('UPDATE','REPLACE','INSERT','DELETE','TRUNCATE','CREATE DATABASE','ALTER DATABASE','DROP DATABASE','CREATE TABLE','ALTER TABLE','RENAME TABLE','DROP TABLE','CREATE INDEX','DROP INDEX','CREATE VIEW','ALTER VIEW','DROP VIEW') COLLATE utf8_bin DEFAULT NULL,
  `tracking_active` int(1) UNSIGNED NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Database changes tracking for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__userconfig`
--

CREATE TABLE `pma__userconfig` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `timevalue` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `config_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='User preferences storage for phpMyAdmin';

--
-- Dumping data for table `pma__userconfig`
--

INSERT INTO `pma__userconfig` (`username`, `timevalue`, `config_data`) VALUES
('root', '2022-05-18 16:20:43', '{\"Console\\/Mode\":\"collapse\"}');

-- --------------------------------------------------------

--
-- Table structure for table `pma__usergroups`
--

CREATE TABLE `pma__usergroups` (
  `usergroup` varchar(64) COLLATE utf8_bin NOT NULL,
  `tab` varchar(64) COLLATE utf8_bin NOT NULL,
  `allowed` enum('Y','N') COLLATE utf8_bin NOT NULL DEFAULT 'N'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='User groups with configured menu items';

-- --------------------------------------------------------

--
-- Table structure for table `pma__users`
--

CREATE TABLE `pma__users` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `usergroup` varchar(64) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Users and their assignments to user groups';

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pma__bookmark`
--
ALTER TABLE `pma__bookmark`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pma__central_columns`
--
ALTER TABLE `pma__central_columns`
  ADD PRIMARY KEY (`db_name`,`col_name`);

--
-- Indexes for table `pma__column_info`
--
ALTER TABLE `pma__column_info`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `db_name` (`db_name`,`table_name`,`column_name`);

--
-- Indexes for table `pma__designer_settings`
--
ALTER TABLE `pma__designer_settings`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__export_templates`
--
ALTER TABLE `pma__export_templates`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `u_user_type_template` (`username`,`export_type`,`template_name`);

--
-- Indexes for table `pma__favorite`
--
ALTER TABLE `pma__favorite`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__history`
--
ALTER TABLE `pma__history`
  ADD PRIMARY KEY (`id`),
  ADD KEY `username` (`username`,`db`,`table`,`timevalue`);

--
-- Indexes for table `pma__navigationhiding`
--
ALTER TABLE `pma__navigationhiding`
  ADD PRIMARY KEY (`username`,`item_name`,`item_type`,`db_name`,`table_name`);

--
-- Indexes for table `pma__pdf_pages`
--
ALTER TABLE `pma__pdf_pages`
  ADD PRIMARY KEY (`page_nr`),
  ADD KEY `db_name` (`db_name`);

--
-- Indexes for table `pma__recent`
--
ALTER TABLE `pma__recent`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__relation`
--
ALTER TABLE `pma__relation`
  ADD PRIMARY KEY (`master_db`,`master_table`,`master_field`),
  ADD KEY `foreign_field` (`foreign_db`,`foreign_table`);

--
-- Indexes for table `pma__savedsearches`
--
ALTER TABLE `pma__savedsearches`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `u_savedsearches_username_dbname` (`username`,`db_name`,`search_name`);

--
-- Indexes for table `pma__table_coords`
--
ALTER TABLE `pma__table_coords`
  ADD PRIMARY KEY (`db_name`,`table_name`,`pdf_page_number`);

--
-- Indexes for table `pma__table_info`
--
ALTER TABLE `pma__table_info`
  ADD PRIMARY KEY (`db_name`,`table_name`);

--
-- Indexes for table `pma__table_uiprefs`
--
ALTER TABLE `pma__table_uiprefs`
  ADD PRIMARY KEY (`username`,`db_name`,`table_name`);

--
-- Indexes for table `pma__tracking`
--
ALTER TABLE `pma__tracking`
  ADD PRIMARY KEY (`db_name`,`table_name`,`version`);

--
-- Indexes for table `pma__userconfig`
--
ALTER TABLE `pma__userconfig`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__usergroups`
--
ALTER TABLE `pma__usergroups`
  ADD PRIMARY KEY (`usergroup`,`tab`,`allowed`);

--
-- Indexes for table `pma__users`
--
ALTER TABLE `pma__users`
  ADD PRIMARY KEY (`username`,`usergroup`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pma__bookmark`
--
ALTER TABLE `pma__bookmark`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__column_info`
--
ALTER TABLE `pma__column_info`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__export_templates`
--
ALTER TABLE `pma__export_templates`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__history`
--
ALTER TABLE `pma__history`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__pdf_pages`
--
ALTER TABLE `pma__pdf_pages`
  MODIFY `page_nr` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__savedsearches`
--
ALTER TABLE `pma__savedsearches`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- Database: `slims9`
--
CREATE DATABASE IF NOT EXISTS `slims9` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `slims9`;

-- --------------------------------------------------------

--
-- Table structure for table `backup_log`
--

CREATE TABLE `backup_log` (
  `backup_log_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL DEFAULT 0,
  `backup_time` datetime NOT NULL,
  `backup_file` text COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `backup_log`
--

INSERT INTO `backup_log` (`backup_log_id`, `user_id`, `backup_time`, `backup_file`) VALUES
(1, 1, '2022-02-14 14:31:36', 'C:\\xampp1\\htdocs\\elibrary_unbaja\\files\\backup\\backup_20220214_143136.sql');

-- --------------------------------------------------------

--
-- Table structure for table `biblio`
--

CREATE TABLE `biblio` (
  `biblio_id` int(11) NOT NULL,
  `gmd_id` int(3) DEFAULT NULL,
  `title` text COLLATE utf8_unicode_ci NOT NULL,
  `sor` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `edition` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `isbn_issn` varchar(32) COLLATE utf8_unicode_ci DEFAULT NULL,
  `publisher_id` int(11) DEFAULT NULL,
  `publish_year` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `collation` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `series_title` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `call_number` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `language_id` char(5) COLLATE utf8_unicode_ci DEFAULT 'en',
  `source` varchar(3) COLLATE utf8_unicode_ci DEFAULT NULL,
  `publish_place_id` int(11) DEFAULT NULL,
  `classification` varchar(40) COLLATE utf8_unicode_ci DEFAULT NULL,
  `notes` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `image` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `file_att` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `opac_hide` smallint(1) DEFAULT 0,
  `promoted` smallint(1) DEFAULT 0,
  `labels` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `frequency_id` int(11) NOT NULL DEFAULT 0,
  `spec_detail_info` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `content_type_id` int(11) DEFAULT NULL,
  `media_type_id` int(11) DEFAULT NULL,
  `carrier_type_id` int(11) DEFAULT NULL,
  `input_date` datetime DEFAULT NULL,
  `last_update` datetime DEFAULT NULL,
  `uid` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `biblio`
--

INSERT INTO `biblio` (`biblio_id`, `gmd_id`, `title`, `sor`, `edition`, `isbn_issn`, `publisher_id`, `publish_year`, `collation`, `series_title`, `call_number`, `language_id`, `source`, `publish_place_id`, `classification`, `notes`, `image`, `file_att`, `opac_hide`, `promoted`, `labels`, `frequency_id`, `spec_detail_info`, `content_type_id`, `media_type_id`, `carrier_type_id`, `input_date`, `last_update`, `uid`) VALUES
(2, 1, 'JUDUL', 'PERNYATAAN TANGGUNGJAWAB', 'EDISI', 'ISBN/ISSN', 2, 'TAHUN TERBIT', 'DESKRIPSI FISIK', 'JUDUL SERI', 'KLASIFIKASI', 'id', NULL, 2, 'KLASIFIKASI', 'Abstrak', 'f52afef93d06b5503b60a507e3377b80.jpg.jpg', NULL, 0, 0, NULL, 1, 'Info Detail Spesifik', 1, 9, 1, '2022-05-07 18:38:06', '2022-05-07 18:38:35', 1),
(3, 1, 'JUDUL', 'PERNYATAAN TANGGUNGJAWAB', 'EDISI', 'ISBN/ISSN', 2, 'TAHUN TERBIT', 'DESKRIPSI FISIK', 'JUDUL SERI', 'KLASIFIKASI', 'id', NULL, 2, 'KLASIFIKASI', 'Abstrak', 'f52afef93d06b5503b60a507e3377b80.jpg.jpg', NULL, 0, 0, NULL, 0, NULL, NULL, NULL, NULL, '2022-05-07 18:42:20', '2022-05-07 18:42:20', NULL),
(4, 1, 'Ini Adalah Judul Buku', 'PERNYATAAN TANGGUNGJAWAB', 'Edisi 2', '20000111111', 3, '2019', 'DESKRIPSI FISIK', 'JUDUL SERI', 'KLASIFIKASI', 'id', NULL, 2, 'KLASIFIKASI', 'Abstrak', 'f52afef93d06b5503b60a507e3377b80.jpg.jpg', NULL, 0, 0, NULL, 0, NULL, NULL, NULL, NULL, '2022-05-07 18:42:20', '2022-05-07 18:42:20', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `biblio_attachment`
--

CREATE TABLE `biblio_attachment` (
  `biblio_id` int(11) NOT NULL,
  `file_id` int(11) NOT NULL,
  `placement` enum('link','popup','embed') COLLATE utf8_unicode_ci DEFAULT NULL,
  `access_type` enum('public','private') COLLATE utf8_unicode_ci NOT NULL,
  `access_limit` text COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `biblio_author`
--

CREATE TABLE `biblio_author` (
  `biblio_id` int(11) NOT NULL DEFAULT 0,
  `author_id` int(11) NOT NULL DEFAULT 0,
  `level` int(1) NOT NULL DEFAULT 1
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `biblio_author`
--

INSERT INTO `biblio_author` (`biblio_id`, `author_id`, `level`) VALUES
(2, 2, 1),
(3, 2, 2),
(4, 2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `biblio_custom`
--

CREATE TABLE `biblio_custom` (
  `biblio_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COMMENT='one to one relation with real biblio table';

-- --------------------------------------------------------

--
-- Table structure for table `biblio_log`
--

CREATE TABLE `biblio_log` (
  `biblio_log_id` int(11) NOT NULL,
  `biblio_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `realname` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `ip` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `action` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `affectedrow` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `rawdata` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `additional_information` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `biblio_log`
--

INSERT INTO `biblio_log` (`biblio_log_id`, `biblio_id`, `user_id`, `realname`, `title`, `ip`, `action`, `affectedrow`, `rawdata`, `additional_information`, `date`) VALUES
(1, 1, 1, 'Admin', 'Perguruan Tinggi dan Dampak Pandemi Coronavirus Disease (Covid-10)', '::1', 'create', 'description', 'a%3A34%3A%7Bs%3A2%3A%22id%22%3Bs%3A1%3A%221%22%3Bs%3A3%3A%22_id%22%3Bs%3A1%3A%221%22%3Bs%3A9%3A%22biblio_id%22%3Bs%3A1%3A%221%22%3Bs%3A5%3A%22title%22%3Bs%3A66%3A%22Perguruan+Tinggi+dan+Dampak+Pandemi+Coronavirus+Disease+%28Covid-10%29%22%3Bs%3A8%3A%22gmd_name%22%3Bs%3A4%3A%22Text%22%3Bs%3A3%3A%22sor%22%3Bs%3A1%3A%22-%22%3Bs%3A7%3A%22edition%22%3Bs%3A1%3A%221%22%3Bs%3A9%3A%22isbn_issn%22%3Bs%3A0%3A%22%22%3Bs%3A14%3A%22publisher_name%22%3BN%3Bs%3A12%3A%22publish_year%22%3Bs%3A0%3A%22%22%3Bs%3A9%3A%22collation%22%3Bs%3A0%3A%22%22%3Bs%3A12%3A%22series_title%22%3Bs%3A0%3A%22%22%3Bs%3A11%3A%22call_number%22%3Bs%3A0%3A%22%22%3Bs%3A13%3A%22language_name%22%3Bs%3A9%3A%22Indonesia%22%3Bs%3A6%3A%22source%22%3BN%3Bs%3A5%3A%22place%22%3BN%3Bs%3A14%3A%22classification%22%3Bs%3A4%3A%22NONE%22%3Bs%3A5%3A%22notes%22%3Bs%3A0%3A%22%22%3Bs%3A5%3A%22image%22%3BN%3Bs%3A9%3A%22opac_hide%22%3Bs%3A1%3A%220%22%3Bs%3A8%3A%22promoted%22%3Bs%3A1%3A%220%22%3Bs%3A6%3A%22labels%22%3BN%3Bs%3A9%3A%22frequency%22%3BN%3Bs%3A16%3A%22spec_detail_info%22%3Bs%3A1%3A%22-%22%3Bs%3A12%3A%22content_type%22%3BN%3Bs%3A10%3A%22media_type%22%3BN%3Bs%3A12%3A%22carrier_type%22%3BN%3Bs%3A3%3A%22uid%22%3Bs%3A1%3A%221%22%3Bs%3A7%3A%22authors%22%3Ba%3A1%3A%7Bi%3A0%3Ba%3A3%3A%7Bs%3A11%3A%22author_name%22%3Bs%3A11%3A%22Raden+Kania%22%3Bs%3A14%3A%22authority_type%22%3Bs%3A13%3A%22Personal+Name%22%3Bs%3A15%3A%22authority_level%22%3Bs%3A14%3A%22Primary+Author%22%3B%7D%7Ds%3A8%3A%22subjects%22%3BN%3Bs%3A5%3A%22items%22%3BN%3Bs%3A4%3A%22hash%22%3Ba%3A5%3A%7Bs%3A6%3A%22biblio%22%3Bs%3A40%3A%229ed1ef3cd58678c802c7ca8f866f6961868df797%22%3Bs%3A14%3A%22classification%22%3Bs%3A40%3A%22616812fb9175ff89175922ac26c496786c92b5e0%22%3Bs%3A7%3A%22authors%22%3Bs%3A40%3A%2264635c9eda96f167b944c035475f167981843f2d%22%3Bs%3A8%3A%22subjects%22%3Bs%3A40%3A%22ec0a0fa7e8b0092ad8f0bf8c93ff597b874fabe3%22%3Bs%3A5%3A%22image%22%3Bs%3A40%3A%22ec0a0fa7e8b0092ad8f0bf8c93ff597b874fabe3%22%3B%7Ds%3A10%3A%22input_date%22%3Bs%3A19%3A%222022-02-10+07%3A00%3A51%22%3Bs%3A11%3A%22last_update%22%3Bs%3A19%3A%222022-02-10+07%3A00%3A51%22%3B%7D', 'New data. Bibliography.', '2022-02-10 07:00:51'),
(2, 1, 1, 'Admin', 'Perguruan Tinggi dan Dampak Pandemi Coronavirus Disease (Covid-10)', '::1', 'update', 'author', 'a%3A34%3A%7Bs%3A2%3A%22id%22%3Bs%3A1%3A%221%22%3Bs%3A3%3A%22_id%22%3Bs%3A1%3A%221%22%3Bs%3A9%3A%22biblio_id%22%3Bs%3A1%3A%221%22%3Bs%3A5%3A%22title%22%3Bs%3A66%3A%22Perguruan+Tinggi+dan+Dampak+Pandemi+Coronavirus+Disease+%28Covid-10%29%22%3Bs%3A8%3A%22gmd_name%22%3Bs%3A4%3A%22Text%22%3Bs%3A3%3A%22sor%22%3Bs%3A1%3A%22-%22%3Bs%3A7%3A%22edition%22%3Bs%3A1%3A%221%22%3Bs%3A9%3A%22isbn_issn%22%3Bs%3A0%3A%22%22%3Bs%3A14%3A%22publisher_name%22%3BN%3Bs%3A12%3A%22publish_year%22%3Bs%3A0%3A%22%22%3Bs%3A9%3A%22collation%22%3Bs%3A0%3A%22%22%3Bs%3A12%3A%22series_title%22%3Bs%3A0%3A%22%22%3Bs%3A11%3A%22call_number%22%3Bs%3A0%3A%22%22%3Bs%3A13%3A%22language_name%22%3Bs%3A9%3A%22Indonesia%22%3Bs%3A6%3A%22source%22%3BN%3Bs%3A5%3A%22place%22%3BN%3Bs%3A14%3A%22classification%22%3Bs%3A4%3A%22NONE%22%3Bs%3A5%3A%22notes%22%3Bs%3A0%3A%22%22%3Bs%3A5%3A%22image%22%3BN%3Bs%3A9%3A%22opac_hide%22%3Bs%3A1%3A%220%22%3Bs%3A8%3A%22promoted%22%3Bs%3A1%3A%220%22%3Bs%3A6%3A%22labels%22%3BN%3Bs%3A9%3A%22frequency%22%3BN%3Bs%3A16%3A%22spec_detail_info%22%3Bs%3A1%3A%22-%22%3Bs%3A12%3A%22content_type%22%3BN%3Bs%3A10%3A%22media_type%22%3BN%3Bs%3A12%3A%22carrier_type%22%3BN%3Bs%3A3%3A%22uid%22%3Bs%3A1%3A%221%22%3Bs%3A7%3A%22authors%22%3Ba%3A1%3A%7Bi%3A0%3Ba%3A3%3A%7Bs%3A11%3A%22author_name%22%3Bs%3A11%3A%22Raden+Kania%22%3Bs%3A14%3A%22authority_type%22%3Bs%3A13%3A%22Personal+Name%22%3Bs%3A15%3A%22authority_level%22%3Bs%3A14%3A%22Primary+Author%22%3B%7D%7Ds%3A8%3A%22subjects%22%3BN%3Bs%3A5%3A%22items%22%3BN%3Bs%3A4%3A%22hash%22%3Ba%3A5%3A%7Bs%3A6%3A%22biblio%22%3Bs%3A40%3A%229ed1ef3cd58678c802c7ca8f866f6961868df797%22%3Bs%3A14%3A%22classification%22%3Bs%3A40%3A%22616812fb9175ff89175922ac26c496786c92b5e0%22%3Bs%3A7%3A%22authors%22%3Bs%3A40%3A%2264635c9eda96f167b944c035475f167981843f2d%22%3Bs%3A8%3A%22subjects%22%3Bs%3A40%3A%22ec0a0fa7e8b0092ad8f0bf8c93ff597b874fabe3%22%3Bs%3A5%3A%22image%22%3Bs%3A40%3A%22ec0a0fa7e8b0092ad8f0bf8c93ff597b874fabe3%22%3B%7Ds%3A10%3A%22input_date%22%3Bs%3A19%3A%222022-02-10+07%3A00%3A51%22%3Bs%3A11%3A%22last_update%22%3Bs%3A19%3A%222022-02-10+07%3A00%3A51%22%3B%7D', 'New data. Author. Names: Raden Kania;', '2022-02-10 07:00:51'),
(3, 1, 1, 'Admin', 'Perguruan Tinggi dan Dampak Pandemi Coronavirus Disease (Covid-10)', '::1', 'update', 'description', 'a%3A34%3A%7Bs%3A2%3A%22id%22%3Bs%3A1%3A%221%22%3Bs%3A3%3A%22_id%22%3Bs%3A1%3A%221%22%3Bs%3A9%3A%22biblio_id%22%3Bs%3A1%3A%221%22%3Bs%3A5%3A%22title%22%3Bs%3A66%3A%22Perguruan+Tinggi+dan+Dampak+Pandemi+Coronavirus+Disease+%28Covid-10%29%22%3Bs%3A8%3A%22gmd_name%22%3Bs%3A4%3A%22Text%22%3Bs%3A3%3A%22sor%22%3Bs%3A1%3A%22-%22%3Bs%3A7%3A%22edition%22%3Bs%3A1%3A%221%22%3Bs%3A9%3A%22isbn_issn%22%3Bs%3A13%3A%229786236599174%22%3Bs%3A14%3A%22publisher_name%22%3Bs%3A12%3A%22Media+Madani%22%3Bs%3A12%3A%22publish_year%22%3Bs%3A4%3A%222020%22%3Bs%3A9%3A%22collation%22%3Bs%3A22%3A%2218%2C+25.7%2C+278+hal%2C+xii%22%3Bs%3A12%3A%22series_title%22%3Bs%3A1%3A%22-%22%3Bs%3A11%3A%22call_number%22%3Bs%3A26%3A%220270+Terbitan+Book+Chapter%22%3Bs%3A13%3A%22language_name%22%3Bs%3A9%3A%22Indonesia%22%3Bs%3A6%3A%22source%22%3BN%3Bs%3A5%3A%22place%22%3Bs%3A6%3A%22Serang%22%3Bs%3A14%3A%22classification%22%3Bs%3A26%3A%220270+Terbitan+Book+Chapter%22%3Bs%3A5%3A%22notes%22%3Bs%3A118%3A%22Book+chapter+yang+diterbitkan+oleh+Universitas+Banten+Jaya+berkaitan+dengan+karya+ilmiah+dosen+semasa+pandemi+covid-19%22%3Bs%3A5%3A%22image%22%3Bs%3A26%3A%22cover_BC_Covid19.jpeg.jpeg%22%3Bs%3A9%3A%22opac_hide%22%3Bs%3A1%3A%220%22%3Bs%3A8%3A%22promoted%22%3Bs%3A1%3A%221%22%3Bs%3A6%3A%22labels%22%3Bs%3A47%3A%22a%3A1%3A%7Bi%3A0%3Ba%3A2%3A%7Bi%3A0%3Bs%3A9%3A%22label-new%22%3Bi%3A1%3Bs%3A0%3A%22%22%3B%7D%7D%22%3Bs%3A9%3A%22frequency%22%3BN%3Bs%3A16%3A%22spec_detail_info%22%3Bs%3A1%3A%22-%22%3Bs%3A12%3A%22content_type%22%3Bs%3A4%3A%22text%22%3Bs%3A10%3A%22media_type%22%3BN%3Bs%3A12%3A%22carrier_type%22%3BN%3Bs%3A3%3A%22uid%22%3Bs%3A1%3A%221%22%3Bs%3A7%3A%22authors%22%3Ba%3A1%3A%7Bi%3A0%3Ba%3A3%3A%7Bs%3A11%3A%22author_name%22%3Bs%3A11%3A%22Raden+Kania%22%3Bs%3A14%3A%22authority_type%22%3Bs%3A13%3A%22Personal+Name%22%3Bs%3A15%3A%22authority_level%22%3Bs%3A14%3A%22Primary+Author%22%3B%7D%7Ds%3A8%3A%22subjects%22%3Ba%3A1%3A%7Bi%3A0%3Ba%3A3%3A%7Bs%3A5%3A%22topic%22%3Bs%3A8%3A%22covid-19%22%3Bs%3A10%3A%22topic_type%22%3Bs%3A5%3A%22Topic%22%3Bs%3A11%3A%22topic_level%22%3Bs%3A7%3A%22Primary%22%3B%7D%7Ds%3A5%3A%22items%22%3BN%3Bs%3A4%3A%22hash%22%3Ba%3A5%3A%7Bs%3A6%3A%22biblio%22%3Bs%3A40%3A%221c7fa21027e0f575a6fda8d0a92cda0cc24acfc0%22%3Bs%3A14%3A%22classification%22%3Bs%3A40%3A%224925bb668b118c38bf45ac793f344ebb7ef4fccf%22%3Bs%3A7%3A%22authors%22%3Bs%3A40%3A%2264635c9eda96f167b944c035475f167981843f2d%22%3Bs%3A8%3A%22subjects%22%3Bs%3A40%3A%22d65d23ac2cc729c062b6ba8210e855377f50296e%22%3Bs%3A5%3A%22image%22%3Bs%3A40%3A%22254b263a17005c7200681b2a51895e5bbc6a93c9%22%3B%7Ds%3A10%3A%22input_date%22%3Bs%3A19%3A%222022-02-10+07%3A00%3A51%22%3Bs%3A11%3A%22last_update%22%3Bs%3A19%3A%222022-02-10+07%3A09%3A46%22%3B%7D', 'Updated data. Bibliography.', '2022-02-10 07:09:46'),
(4, 1, 1, 'Admin', 'Perguruan Tinggi dan Dampak Pandemi Coronavirus Disease (Covid-10)', '::1', 'update', 'classification', 'a%3A34%3A%7Bs%3A2%3A%22id%22%3Bs%3A1%3A%221%22%3Bs%3A3%3A%22_id%22%3Bs%3A1%3A%221%22%3Bs%3A9%3A%22biblio_id%22%3Bs%3A1%3A%221%22%3Bs%3A5%3A%22title%22%3Bs%3A66%3A%22Perguruan+Tinggi+dan+Dampak+Pandemi+Coronavirus+Disease+%28Covid-10%29%22%3Bs%3A8%3A%22gmd_name%22%3Bs%3A4%3A%22Text%22%3Bs%3A3%3A%22sor%22%3Bs%3A1%3A%22-%22%3Bs%3A7%3A%22edition%22%3Bs%3A1%3A%221%22%3Bs%3A9%3A%22isbn_issn%22%3Bs%3A13%3A%229786236599174%22%3Bs%3A14%3A%22publisher_name%22%3Bs%3A12%3A%22Media+Madani%22%3Bs%3A12%3A%22publish_year%22%3Bs%3A4%3A%222020%22%3Bs%3A9%3A%22collation%22%3Bs%3A22%3A%2218%2C+25.7%2C+278+hal%2C+xii%22%3Bs%3A12%3A%22series_title%22%3Bs%3A1%3A%22-%22%3Bs%3A11%3A%22call_number%22%3Bs%3A26%3A%220270+Terbitan+Book+Chapter%22%3Bs%3A13%3A%22language_name%22%3Bs%3A9%3A%22Indonesia%22%3Bs%3A6%3A%22source%22%3BN%3Bs%3A5%3A%22place%22%3Bs%3A6%3A%22Serang%22%3Bs%3A14%3A%22classification%22%3Bs%3A26%3A%220270+Terbitan+Book+Chapter%22%3Bs%3A5%3A%22notes%22%3Bs%3A118%3A%22Book+chapter+yang+diterbitkan+oleh+Universitas+Banten+Jaya+berkaitan+dengan+karya+ilmiah+dosen+semasa+pandemi+covid-19%22%3Bs%3A5%3A%22image%22%3Bs%3A26%3A%22cover_BC_Covid19.jpeg.jpeg%22%3Bs%3A9%3A%22opac_hide%22%3Bs%3A1%3A%220%22%3Bs%3A8%3A%22promoted%22%3Bs%3A1%3A%221%22%3Bs%3A6%3A%22labels%22%3Bs%3A47%3A%22a%3A1%3A%7Bi%3A0%3Ba%3A2%3A%7Bi%3A0%3Bs%3A9%3A%22label-new%22%3Bi%3A1%3Bs%3A0%3A%22%22%3B%7D%7D%22%3Bs%3A9%3A%22frequency%22%3BN%3Bs%3A16%3A%22spec_detail_info%22%3Bs%3A1%3A%22-%22%3Bs%3A12%3A%22content_type%22%3Bs%3A4%3A%22text%22%3Bs%3A10%3A%22media_type%22%3BN%3Bs%3A12%3A%22carrier_type%22%3BN%3Bs%3A3%3A%22uid%22%3Bs%3A1%3A%221%22%3Bs%3A7%3A%22authors%22%3Ba%3A1%3A%7Bi%3A0%3Ba%3A3%3A%7Bs%3A11%3A%22author_name%22%3Bs%3A11%3A%22Raden+Kania%22%3Bs%3A14%3A%22authority_type%22%3Bs%3A13%3A%22Personal+Name%22%3Bs%3A15%3A%22authority_level%22%3Bs%3A14%3A%22Primary+Author%22%3B%7D%7Ds%3A8%3A%22subjects%22%3Ba%3A1%3A%7Bi%3A0%3Ba%3A3%3A%7Bs%3A5%3A%22topic%22%3Bs%3A8%3A%22covid-19%22%3Bs%3A10%3A%22topic_type%22%3Bs%3A5%3A%22Topic%22%3Bs%3A11%3A%22topic_level%22%3Bs%3A7%3A%22Primary%22%3B%7D%7Ds%3A5%3A%22items%22%3BN%3Bs%3A4%3A%22hash%22%3Ba%3A5%3A%7Bs%3A6%3A%22biblio%22%3Bs%3A40%3A%221c7fa21027e0f575a6fda8d0a92cda0cc24acfc0%22%3Bs%3A14%3A%22classification%22%3Bs%3A40%3A%224925bb668b118c38bf45ac793f344ebb7ef4fccf%22%3Bs%3A7%3A%22authors%22%3Bs%3A40%3A%2264635c9eda96f167b944c035475f167981843f2d%22%3Bs%3A8%3A%22subjects%22%3Bs%3A40%3A%22d65d23ac2cc729c062b6ba8210e855377f50296e%22%3Bs%3A5%3A%22image%22%3Bs%3A40%3A%22254b263a17005c7200681b2a51895e5bbc6a93c9%22%3B%7Ds%3A10%3A%22input_date%22%3Bs%3A19%3A%222022-02-10+07%3A00%3A51%22%3Bs%3A11%3A%22last_update%22%3Bs%3A19%3A%222022-02-10+07%3A09%3A46%22%3B%7D', 'Updated data. Classification. Number: 0270 Terbitan Book Chapter', '2022-02-10 07:09:46'),
(5, 1, 1, 'Admin', 'Perguruan Tinggi dan Dampak Pandemi Coronavirus Disease (Covid-10)', '::1', 'update', 'cover', 'a%3A34%3A%7Bs%3A2%3A%22id%22%3Bs%3A1%3A%221%22%3Bs%3A3%3A%22_id%22%3Bs%3A1%3A%221%22%3Bs%3A9%3A%22biblio_id%22%3Bs%3A1%3A%221%22%3Bs%3A5%3A%22title%22%3Bs%3A66%3A%22Perguruan+Tinggi+dan+Dampak+Pandemi+Coronavirus+Disease+%28Covid-10%29%22%3Bs%3A8%3A%22gmd_name%22%3Bs%3A4%3A%22Text%22%3Bs%3A3%3A%22sor%22%3Bs%3A1%3A%22-%22%3Bs%3A7%3A%22edition%22%3Bs%3A1%3A%221%22%3Bs%3A9%3A%22isbn_issn%22%3Bs%3A13%3A%229786236599174%22%3Bs%3A14%3A%22publisher_name%22%3Bs%3A12%3A%22Media+Madani%22%3Bs%3A12%3A%22publish_year%22%3Bs%3A4%3A%222020%22%3Bs%3A9%3A%22collation%22%3Bs%3A22%3A%2218%2C+25.7%2C+278+hal%2C+xii%22%3Bs%3A12%3A%22series_title%22%3Bs%3A1%3A%22-%22%3Bs%3A11%3A%22call_number%22%3Bs%3A26%3A%220270+Terbitan+Book+Chapter%22%3Bs%3A13%3A%22language_name%22%3Bs%3A9%3A%22Indonesia%22%3Bs%3A6%3A%22source%22%3BN%3Bs%3A5%3A%22place%22%3Bs%3A6%3A%22Serang%22%3Bs%3A14%3A%22classification%22%3Bs%3A26%3A%220270+Terbitan+Book+Chapter%22%3Bs%3A5%3A%22notes%22%3Bs%3A118%3A%22Book+chapter+yang+diterbitkan+oleh+Universitas+Banten+Jaya+berkaitan+dengan+karya+ilmiah+dosen+semasa+pandemi+covid-19%22%3Bs%3A5%3A%22image%22%3Bs%3A26%3A%22cover_BC_Covid19.jpeg.jpeg%22%3Bs%3A9%3A%22opac_hide%22%3Bs%3A1%3A%220%22%3Bs%3A8%3A%22promoted%22%3Bs%3A1%3A%221%22%3Bs%3A6%3A%22labels%22%3Bs%3A47%3A%22a%3A1%3A%7Bi%3A0%3Ba%3A2%3A%7Bi%3A0%3Bs%3A9%3A%22label-new%22%3Bi%3A1%3Bs%3A0%3A%22%22%3B%7D%7D%22%3Bs%3A9%3A%22frequency%22%3BN%3Bs%3A16%3A%22spec_detail_info%22%3Bs%3A1%3A%22-%22%3Bs%3A12%3A%22content_type%22%3Bs%3A4%3A%22text%22%3Bs%3A10%3A%22media_type%22%3BN%3Bs%3A12%3A%22carrier_type%22%3BN%3Bs%3A3%3A%22uid%22%3Bs%3A1%3A%221%22%3Bs%3A7%3A%22authors%22%3Ba%3A1%3A%7Bi%3A0%3Ba%3A3%3A%7Bs%3A11%3A%22author_name%22%3Bs%3A11%3A%22Raden+Kania%22%3Bs%3A14%3A%22authority_type%22%3Bs%3A13%3A%22Personal+Name%22%3Bs%3A15%3A%22authority_level%22%3Bs%3A14%3A%22Primary+Author%22%3B%7D%7Ds%3A8%3A%22subjects%22%3Ba%3A1%3A%7Bi%3A0%3Ba%3A3%3A%7Bs%3A5%3A%22topic%22%3Bs%3A8%3A%22covid-19%22%3Bs%3A10%3A%22topic_type%22%3Bs%3A5%3A%22Topic%22%3Bs%3A11%3A%22topic_level%22%3Bs%3A7%3A%22Primary%22%3B%7D%7Ds%3A5%3A%22items%22%3BN%3Bs%3A4%3A%22hash%22%3Ba%3A5%3A%7Bs%3A6%3A%22biblio%22%3Bs%3A40%3A%221c7fa21027e0f575a6fda8d0a92cda0cc24acfc0%22%3Bs%3A14%3A%22classification%22%3Bs%3A40%3A%224925bb668b118c38bf45ac793f344ebb7ef4fccf%22%3Bs%3A7%3A%22authors%22%3Bs%3A40%3A%2264635c9eda96f167b944c035475f167981843f2d%22%3Bs%3A8%3A%22subjects%22%3Bs%3A40%3A%22d65d23ac2cc729c062b6ba8210e855377f50296e%22%3Bs%3A5%3A%22image%22%3Bs%3A40%3A%22254b263a17005c7200681b2a51895e5bbc6a93c9%22%3B%7Ds%3A10%3A%22input_date%22%3Bs%3A19%3A%222022-02-10+07%3A00%3A51%22%3Bs%3A11%3A%22last_update%22%3Bs%3A19%3A%222022-02-10+07%3A09%3A46%22%3B%7D', 'Updated data. Image. File: cover_BC_Covid19.jpeg.jpeg', '2022-02-10 07:09:46'),
(6, 1, 1, 'Admin', 'Perguruan Tinggi dan Dampak Pandemi Coronavirus Disease (Covid-10)', '::1', 'update', 'subject', 'a%3A34%3A%7Bs%3A2%3A%22id%22%3Bs%3A1%3A%221%22%3Bs%3A3%3A%22_id%22%3Bs%3A1%3A%221%22%3Bs%3A9%3A%22biblio_id%22%3Bs%3A1%3A%221%22%3Bs%3A5%3A%22title%22%3Bs%3A66%3A%22Perguruan+Tinggi+dan+Dampak+Pandemi+Coronavirus+Disease+%28Covid-10%29%22%3Bs%3A8%3A%22gmd_name%22%3Bs%3A4%3A%22Text%22%3Bs%3A3%3A%22sor%22%3Bs%3A1%3A%22-%22%3Bs%3A7%3A%22edition%22%3Bs%3A1%3A%221%22%3Bs%3A9%3A%22isbn_issn%22%3Bs%3A13%3A%229786236599174%22%3Bs%3A14%3A%22publisher_name%22%3Bs%3A12%3A%22Media+Madani%22%3Bs%3A12%3A%22publish_year%22%3Bs%3A4%3A%222020%22%3Bs%3A9%3A%22collation%22%3Bs%3A22%3A%2218%2C+25.7%2C+278+hal%2C+xii%22%3Bs%3A12%3A%22series_title%22%3Bs%3A1%3A%22-%22%3Bs%3A11%3A%22call_number%22%3Bs%3A26%3A%220270+Terbitan+Book+Chapter%22%3Bs%3A13%3A%22language_name%22%3Bs%3A9%3A%22Indonesia%22%3Bs%3A6%3A%22source%22%3BN%3Bs%3A5%3A%22place%22%3Bs%3A6%3A%22Serang%22%3Bs%3A14%3A%22classification%22%3Bs%3A26%3A%220270+Terbitan+Book+Chapter%22%3Bs%3A5%3A%22notes%22%3Bs%3A118%3A%22Book+chapter+yang+diterbitkan+oleh+Universitas+Banten+Jaya+berkaitan+dengan+karya+ilmiah+dosen+semasa+pandemi+covid-19%22%3Bs%3A5%3A%22image%22%3Bs%3A26%3A%22cover_BC_Covid19.jpeg.jpeg%22%3Bs%3A9%3A%22opac_hide%22%3Bs%3A1%3A%220%22%3Bs%3A8%3A%22promoted%22%3Bs%3A1%3A%221%22%3Bs%3A6%3A%22labels%22%3Bs%3A47%3A%22a%3A1%3A%7Bi%3A0%3Ba%3A2%3A%7Bi%3A0%3Bs%3A9%3A%22label-new%22%3Bi%3A1%3Bs%3A0%3A%22%22%3B%7D%7D%22%3Bs%3A9%3A%22frequency%22%3BN%3Bs%3A16%3A%22spec_detail_info%22%3Bs%3A1%3A%22-%22%3Bs%3A12%3A%22content_type%22%3Bs%3A4%3A%22text%22%3Bs%3A10%3A%22media_type%22%3BN%3Bs%3A12%3A%22carrier_type%22%3BN%3Bs%3A3%3A%22uid%22%3Bs%3A1%3A%221%22%3Bs%3A7%3A%22authors%22%3Ba%3A1%3A%7Bi%3A0%3Ba%3A3%3A%7Bs%3A11%3A%22author_name%22%3Bs%3A11%3A%22Raden+Kania%22%3Bs%3A14%3A%22authority_type%22%3Bs%3A13%3A%22Personal+Name%22%3Bs%3A15%3A%22authority_level%22%3Bs%3A14%3A%22Primary+Author%22%3B%7D%7Ds%3A8%3A%22subjects%22%3Ba%3A1%3A%7Bi%3A0%3Ba%3A3%3A%7Bs%3A5%3A%22topic%22%3Bs%3A8%3A%22covid-19%22%3Bs%3A10%3A%22topic_type%22%3Bs%3A5%3A%22Topic%22%3Bs%3A11%3A%22topic_level%22%3Bs%3A7%3A%22Primary%22%3B%7D%7Ds%3A5%3A%22items%22%3BN%3Bs%3A4%3A%22hash%22%3Ba%3A5%3A%7Bs%3A6%3A%22biblio%22%3Bs%3A40%3A%221c7fa21027e0f575a6fda8d0a92cda0cc24acfc0%22%3Bs%3A14%3A%22classification%22%3Bs%3A40%3A%224925bb668b118c38bf45ac793f344ebb7ef4fccf%22%3Bs%3A7%3A%22authors%22%3Bs%3A40%3A%2264635c9eda96f167b944c035475f167981843f2d%22%3Bs%3A8%3A%22subjects%22%3Bs%3A40%3A%22d65d23ac2cc729c062b6ba8210e855377f50296e%22%3Bs%3A5%3A%22image%22%3Bs%3A40%3A%22254b263a17005c7200681b2a51895e5bbc6a93c9%22%3B%7Ds%3A10%3A%22input_date%22%3Bs%3A19%3A%222022-02-10+07%3A00%3A51%22%3Bs%3A11%3A%22last_update%22%3Bs%3A19%3A%222022-02-10+07%3A09%3A46%22%3B%7D', 'Updated data. Subject. Names: covid-19;', '2022-02-10 07:09:46'),
(7, 1, 1, 'Admin', 'Perguruan Tinggi dan Dampak Pandemi Coronavirus Disease (Covid-10)', '::1', 'delete', 'description', 'a%3A34%3A%7Bs%3A2%3A%22id%22%3Bs%3A1%3A%221%22%3Bs%3A3%3A%22_id%22%3Bs%3A1%3A%221%22%3Bs%3A9%3A%22biblio_id%22%3Bs%3A1%3A%221%22%3Bs%3A5%3A%22title%22%3Bs%3A66%3A%22Perguruan+Tinggi+dan+Dampak+Pandemi+Coronavirus+Disease+%28Covid-10%29%22%3Bs%3A8%3A%22gmd_name%22%3Bs%3A4%3A%22Text%22%3Bs%3A3%3A%22sor%22%3Bs%3A1%3A%22-%22%3Bs%3A7%3A%22edition%22%3Bs%3A1%3A%221%22%3Bs%3A9%3A%22isbn_issn%22%3Bs%3A13%3A%229786236599174%22%3Bs%3A14%3A%22publisher_name%22%3Bs%3A12%3A%22Media+Madani%22%3Bs%3A12%3A%22publish_year%22%3Bs%3A4%3A%222020%22%3Bs%3A9%3A%22collation%22%3Bs%3A22%3A%2218%2C+25.7%2C+278+hal%2C+xii%22%3Bs%3A12%3A%22series_title%22%3Bs%3A1%3A%22-%22%3Bs%3A11%3A%22call_number%22%3Bs%3A26%3A%220270+Terbitan+Book+Chapter%22%3Bs%3A13%3A%22language_name%22%3Bs%3A9%3A%22Indonesia%22%3Bs%3A6%3A%22source%22%3BN%3Bs%3A5%3A%22place%22%3Bs%3A6%3A%22Serang%22%3Bs%3A14%3A%22classification%22%3Bs%3A26%3A%220270+Terbitan+Book+Chapter%22%3Bs%3A5%3A%22notes%22%3Bs%3A118%3A%22Book+chapter+yang+diterbitkan+oleh+Universitas+Banten+Jaya+berkaitan+dengan+karya+ilmiah+dosen+semasa+pandemi+covid-19%22%3Bs%3A5%3A%22image%22%3Bs%3A26%3A%22cover_BC_Covid19.jpeg.jpeg%22%3Bs%3A9%3A%22opac_hide%22%3Bs%3A1%3A%220%22%3Bs%3A8%3A%22promoted%22%3Bs%3A1%3A%221%22%3Bs%3A6%3A%22labels%22%3Bs%3A47%3A%22a%3A1%3A%7Bi%3A0%3Ba%3A2%3A%7Bi%3A0%3Bs%3A9%3A%22label-new%22%3Bi%3A1%3Bs%3A0%3A%22%22%3B%7D%7D%22%3Bs%3A9%3A%22frequency%22%3BN%3Bs%3A16%3A%22spec_detail_info%22%3Bs%3A1%3A%22-%22%3Bs%3A12%3A%22content_type%22%3Bs%3A4%3A%22text%22%3Bs%3A10%3A%22media_type%22%3BN%3Bs%3A12%3A%22carrier_type%22%3BN%3Bs%3A3%3A%22uid%22%3Bs%3A1%3A%221%22%3Bs%3A7%3A%22authors%22%3Ba%3A1%3A%7Bi%3A0%3Ba%3A3%3A%7Bs%3A11%3A%22author_name%22%3Bs%3A11%3A%22Raden+Kania%22%3Bs%3A14%3A%22authority_type%22%3Bs%3A10%3A%22Nama+Orang%22%3Bs%3A15%3A%22authority_level%22%3Bs%3A15%3A%22Pengarang+Utama%22%3B%7D%7Ds%3A8%3A%22subjects%22%3Ba%3A1%3A%7Bi%3A0%3Ba%3A3%3A%7Bs%3A5%3A%22topic%22%3Bs%3A8%3A%22covid-19%22%3Bs%3A10%3A%22topic_type%22%3Bs%3A5%3A%22Topik%22%3Bs%3A11%3A%22topic_level%22%3Bs%3A7%3A%22Primary%22%3B%7D%7Ds%3A5%3A%22items%22%3BN%3Bs%3A4%3A%22hash%22%3Ba%3A5%3A%7Bs%3A6%3A%22biblio%22%3Bs%3A40%3A%221193aca3790559f5054e0a119a0e1b5d25c814ec%22%3Bs%3A14%3A%22classification%22%3Bs%3A40%3A%224925bb668b118c38bf45ac793f344ebb7ef4fccf%22%3Bs%3A7%3A%22authors%22%3Bs%3A40%3A%220f35117d7769373dc92fd3782cc3c980d9fa7cb1%22%3Bs%3A8%3A%22subjects%22%3Bs%3A40%3A%2262cf2839aa731cb5d07b30e33c787943095e7a92%22%3Bs%3A5%3A%22image%22%3Bs%3A40%3A%22254b263a17005c7200681b2a51895e5bbc6a93c9%22%3B%7Ds%3A10%3A%22input_date%22%3Bs%3A19%3A%222022-02-10+07%3A00%3A51%22%3Bs%3A11%3A%22last_update%22%3Bs%3A19%3A%222022-02-10+07%3A09%3A46%22%3B%7D', 'Data bibliografi dihapus.', '2022-05-07 18:29:36'),
(8, 2, 1, 'Admin', 'Islam Itu Indah', '::1', 'create', 'description', 'a%3A34%3A%7Bs%3A2%3A%22id%22%3Bs%3A1%3A%222%22%3Bs%3A3%3A%22_id%22%3Bs%3A1%3A%222%22%3Bs%3A9%3A%22biblio_id%22%3Bs%3A1%3A%222%22%3Bs%3A5%3A%22title%22%3Bs%3A15%3A%22Islam+Itu+Indah%22%3Bs%3A8%3A%22gmd_name%22%3Bs%3A4%3A%22Text%22%3Bs%3A3%3A%22sor%22%3Bs%3A24%3A%22PERNYATAAN+TANGGUNGJAWAB%22%3Bs%3A7%3A%22edition%22%3Bs%3A5%3A%22EDISI%22%3Bs%3A9%3A%22isbn_issn%22%3Bs%3A9%3A%22ISBN%2FISSN%22%3Bs%3A14%3A%22publisher_name%22%3Bs%3A8%3A%22PENERBIT%22%3Bs%3A12%3A%22publish_year%22%3Bs%3A12%3A%22TAHUN+TERBIT%22%3Bs%3A9%3A%22collation%22%3Bs%3A15%3A%22DESKRIPSI+FISIK%22%3Bs%3A12%3A%22series_title%22%3Bs%3A10%3A%22JUDUL+SERI%22%3Bs%3A11%3A%22call_number%22%3Bs%3A11%3A%22KLASIFIKASI%22%3Bs%3A13%3A%22language_name%22%3Bs%3A9%3A%22Indonesia%22%3Bs%3A6%3A%22source%22%3BN%3Bs%3A5%3A%22place%22%3Bs%3A12%3A%22TEMPA+TERBIT%22%3Bs%3A14%3A%22classification%22%3Bs%3A11%3A%22KLASIFIKASI%22%3Bs%3A5%3A%22notes%22%3Bs%3A7%3A%22Abstrak%22%3Bs%3A5%3A%22image%22%3Bs%3A40%3A%22f52afef93d06b5503b60a507e3377b80.jpg.jpg%22%3Bs%3A9%3A%22opac_hide%22%3Bs%3A1%3A%220%22%3Bs%3A8%3A%22promoted%22%3Bs%3A1%3A%220%22%3Bs%3A6%3A%22labels%22%3BN%3Bs%3A9%3A%22frequency%22%3Bs%3A6%3A%22Weekly%22%3Bs%3A16%3A%22spec_detail_info%22%3Bs%3A20%3A%22Info+Detail+Spesifik%22%3Bs%3A12%3A%22content_type%22%3Bs%3A20%3A%22cartographic+dataset%22%3Bs%3A10%3A%22media_type%22%3Bs%3A5%3A%22other%22%3Bs%3A12%3A%22carrier_type%22%3Bs%3A15%3A%22audio+cartridge%22%3Bs%3A3%3A%22uid%22%3Bs%3A1%3A%221%22%3Bs%3A7%3A%22authors%22%3Ba%3A1%3A%7Bi%3A0%3Ba%3A3%3A%7Bs%3A11%3A%22author_name%22%3Bs%3A16%3A%22Islahatun+Nufusi%22%3Bs%3A14%3A%22authority_type%22%3Bs%3A10%3A%22Nama+Orang%22%3Bs%3A15%3A%22authority_level%22%3Bs%3A15%3A%22Pengarang+Utama%22%3B%7D%7Ds%3A8%3A%22subjects%22%3Ba%3A1%3A%7Bi%3A0%3Ba%3A3%3A%7Bs%3A5%3A%22topic%22%3Bs%3A16%3A%22Islahatun+Nufusi%22%3Bs%3A10%3A%22topic_type%22%3Bs%3A4%3A%22Nama%22%3Bs%3A11%3A%22topic_level%22%3Bs%3A7%3A%22Primary%22%3B%7D%7Ds%3A5%3A%22items%22%3BN%3Bs%3A4%3A%22hash%22%3Ba%3A5%3A%7Bs%3A6%3A%22biblio%22%3Bs%3A40%3A%2264ce52adcc11d181514802830efca1945cd10c80%22%3Bs%3A14%3A%22classification%22%3Bs%3A40%3A%222e56c4c117901b080a0ce63805d1270d2c47c2aa%22%3Bs%3A7%3A%22authors%22%3Bs%3A40%3A%22c7ca71980803d11bf9762d1e78c8d3555ce1b277%22%3Bs%3A8%3A%22subjects%22%3Bs%3A40%3A%228b590ad5b8f4500e4bbce1f1bf539f19222129f3%22%3Bs%3A5%3A%22image%22%3Bs%3A40%3A%2207e7fdb13ebbccfe1e72bde374a6021837e25f3a%22%3B%7Ds%3A10%3A%22input_date%22%3Bs%3A19%3A%222022-05-07+18%3A38%3A06%22%3Bs%3A11%3A%22last_update%22%3Bs%3A19%3A%222022-05-07+18%3A38%3A06%22%3B%7D', 'New data. Bibliography.', '2022-05-07 18:38:06'),
(9, 2, 1, 'Admin', 'Islam Itu Indah', '::1', 'update', 'classification', 'a%3A34%3A%7Bs%3A2%3A%22id%22%3Bs%3A1%3A%222%22%3Bs%3A3%3A%22_id%22%3Bs%3A1%3A%222%22%3Bs%3A9%3A%22biblio_id%22%3Bs%3A1%3A%222%22%3Bs%3A5%3A%22title%22%3Bs%3A15%3A%22Islam+Itu+Indah%22%3Bs%3A8%3A%22gmd_name%22%3Bs%3A4%3A%22Text%22%3Bs%3A3%3A%22sor%22%3Bs%3A24%3A%22PERNYATAAN+TANGGUNGJAWAB%22%3Bs%3A7%3A%22edition%22%3Bs%3A5%3A%22EDISI%22%3Bs%3A9%3A%22isbn_issn%22%3Bs%3A9%3A%22ISBN%2FISSN%22%3Bs%3A14%3A%22publisher_name%22%3Bs%3A8%3A%22PENERBIT%22%3Bs%3A12%3A%22publish_year%22%3Bs%3A12%3A%22TAHUN+TERBIT%22%3Bs%3A9%3A%22collation%22%3Bs%3A15%3A%22DESKRIPSI+FISIK%22%3Bs%3A12%3A%22series_title%22%3Bs%3A10%3A%22JUDUL+SERI%22%3Bs%3A11%3A%22call_number%22%3Bs%3A11%3A%22KLASIFIKASI%22%3Bs%3A13%3A%22language_name%22%3Bs%3A9%3A%22Indonesia%22%3Bs%3A6%3A%22source%22%3BN%3Bs%3A5%3A%22place%22%3Bs%3A12%3A%22TEMPA+TERBIT%22%3Bs%3A14%3A%22classification%22%3Bs%3A11%3A%22KLASIFIKASI%22%3Bs%3A5%3A%22notes%22%3Bs%3A7%3A%22Abstrak%22%3Bs%3A5%3A%22image%22%3Bs%3A40%3A%22f52afef93d06b5503b60a507e3377b80.jpg.jpg%22%3Bs%3A9%3A%22opac_hide%22%3Bs%3A1%3A%220%22%3Bs%3A8%3A%22promoted%22%3Bs%3A1%3A%220%22%3Bs%3A6%3A%22labels%22%3BN%3Bs%3A9%3A%22frequency%22%3Bs%3A6%3A%22Weekly%22%3Bs%3A16%3A%22spec_detail_info%22%3Bs%3A20%3A%22Info+Detail+Spesifik%22%3Bs%3A12%3A%22content_type%22%3Bs%3A20%3A%22cartographic+dataset%22%3Bs%3A10%3A%22media_type%22%3Bs%3A5%3A%22other%22%3Bs%3A12%3A%22carrier_type%22%3Bs%3A15%3A%22audio+cartridge%22%3Bs%3A3%3A%22uid%22%3Bs%3A1%3A%221%22%3Bs%3A7%3A%22authors%22%3Ba%3A1%3A%7Bi%3A0%3Ba%3A3%3A%7Bs%3A11%3A%22author_name%22%3Bs%3A16%3A%22Islahatun+Nufusi%22%3Bs%3A14%3A%22authority_type%22%3Bs%3A10%3A%22Nama+Orang%22%3Bs%3A15%3A%22authority_level%22%3Bs%3A15%3A%22Pengarang+Utama%22%3B%7D%7Ds%3A8%3A%22subjects%22%3Ba%3A1%3A%7Bi%3A0%3Ba%3A3%3A%7Bs%3A5%3A%22topic%22%3Bs%3A16%3A%22Islahatun+Nufusi%22%3Bs%3A10%3A%22topic_type%22%3Bs%3A4%3A%22Nama%22%3Bs%3A11%3A%22topic_level%22%3Bs%3A7%3A%22Primary%22%3B%7D%7Ds%3A5%3A%22items%22%3BN%3Bs%3A4%3A%22hash%22%3Ba%3A5%3A%7Bs%3A6%3A%22biblio%22%3Bs%3A40%3A%2264ce52adcc11d181514802830efca1945cd10c80%22%3Bs%3A14%3A%22classification%22%3Bs%3A40%3A%222e56c4c117901b080a0ce63805d1270d2c47c2aa%22%3Bs%3A7%3A%22authors%22%3Bs%3A40%3A%22c7ca71980803d11bf9762d1e78c8d3555ce1b277%22%3Bs%3A8%3A%22subjects%22%3Bs%3A40%3A%228b590ad5b8f4500e4bbce1f1bf539f19222129f3%22%3Bs%3A5%3A%22image%22%3Bs%3A40%3A%2207e7fdb13ebbccfe1e72bde374a6021837e25f3a%22%3B%7Ds%3A10%3A%22input_date%22%3Bs%3A19%3A%222022-05-07+18%3A38%3A06%22%3Bs%3A11%3A%22last_update%22%3Bs%3A19%3A%222022-05-07+18%3A38%3A06%22%3B%7D', 'New data. Classification. Number: KLASIFIKASI', '2022-05-07 18:38:06'),
(10, 2, 1, 'Admin', 'Islam Itu Indah', '::1', 'update', 'cover', 'a%3A34%3A%7Bs%3A2%3A%22id%22%3Bs%3A1%3A%222%22%3Bs%3A3%3A%22_id%22%3Bs%3A1%3A%222%22%3Bs%3A9%3A%22biblio_id%22%3Bs%3A1%3A%222%22%3Bs%3A5%3A%22title%22%3Bs%3A15%3A%22Islam+Itu+Indah%22%3Bs%3A8%3A%22gmd_name%22%3Bs%3A4%3A%22Text%22%3Bs%3A3%3A%22sor%22%3Bs%3A24%3A%22PERNYATAAN+TANGGUNGJAWAB%22%3Bs%3A7%3A%22edition%22%3Bs%3A5%3A%22EDISI%22%3Bs%3A9%3A%22isbn_issn%22%3Bs%3A9%3A%22ISBN%2FISSN%22%3Bs%3A14%3A%22publisher_name%22%3Bs%3A8%3A%22PENERBIT%22%3Bs%3A12%3A%22publish_year%22%3Bs%3A12%3A%22TAHUN+TERBIT%22%3Bs%3A9%3A%22collation%22%3Bs%3A15%3A%22DESKRIPSI+FISIK%22%3Bs%3A12%3A%22series_title%22%3Bs%3A10%3A%22JUDUL+SERI%22%3Bs%3A11%3A%22call_number%22%3Bs%3A11%3A%22KLASIFIKASI%22%3Bs%3A13%3A%22language_name%22%3Bs%3A9%3A%22Indonesia%22%3Bs%3A6%3A%22source%22%3BN%3Bs%3A5%3A%22place%22%3Bs%3A12%3A%22TEMPA+TERBIT%22%3Bs%3A14%3A%22classification%22%3Bs%3A11%3A%22KLASIFIKASI%22%3Bs%3A5%3A%22notes%22%3Bs%3A7%3A%22Abstrak%22%3Bs%3A5%3A%22image%22%3Bs%3A40%3A%22f52afef93d06b5503b60a507e3377b80.jpg.jpg%22%3Bs%3A9%3A%22opac_hide%22%3Bs%3A1%3A%220%22%3Bs%3A8%3A%22promoted%22%3Bs%3A1%3A%220%22%3Bs%3A6%3A%22labels%22%3BN%3Bs%3A9%3A%22frequency%22%3Bs%3A6%3A%22Weekly%22%3Bs%3A16%3A%22spec_detail_info%22%3Bs%3A20%3A%22Info+Detail+Spesifik%22%3Bs%3A12%3A%22content_type%22%3Bs%3A20%3A%22cartographic+dataset%22%3Bs%3A10%3A%22media_type%22%3Bs%3A5%3A%22other%22%3Bs%3A12%3A%22carrier_type%22%3Bs%3A15%3A%22audio+cartridge%22%3Bs%3A3%3A%22uid%22%3Bs%3A1%3A%221%22%3Bs%3A7%3A%22authors%22%3Ba%3A1%3A%7Bi%3A0%3Ba%3A3%3A%7Bs%3A11%3A%22author_name%22%3Bs%3A16%3A%22Islahatun+Nufusi%22%3Bs%3A14%3A%22authority_type%22%3Bs%3A10%3A%22Nama+Orang%22%3Bs%3A15%3A%22authority_level%22%3Bs%3A15%3A%22Pengarang+Utama%22%3B%7D%7Ds%3A8%3A%22subjects%22%3Ba%3A1%3A%7Bi%3A0%3Ba%3A3%3A%7Bs%3A5%3A%22topic%22%3Bs%3A16%3A%22Islahatun+Nufusi%22%3Bs%3A10%3A%22topic_type%22%3Bs%3A4%3A%22Nama%22%3Bs%3A11%3A%22topic_level%22%3Bs%3A7%3A%22Primary%22%3B%7D%7Ds%3A5%3A%22items%22%3BN%3Bs%3A4%3A%22hash%22%3Ba%3A5%3A%7Bs%3A6%3A%22biblio%22%3Bs%3A40%3A%2264ce52adcc11d181514802830efca1945cd10c80%22%3Bs%3A14%3A%22classification%22%3Bs%3A40%3A%222e56c4c117901b080a0ce63805d1270d2c47c2aa%22%3Bs%3A7%3A%22authors%22%3Bs%3A40%3A%22c7ca71980803d11bf9762d1e78c8d3555ce1b277%22%3Bs%3A8%3A%22subjects%22%3Bs%3A40%3A%228b590ad5b8f4500e4bbce1f1bf539f19222129f3%22%3Bs%3A5%3A%22image%22%3Bs%3A40%3A%2207e7fdb13ebbccfe1e72bde374a6021837e25f3a%22%3B%7Ds%3A10%3A%22input_date%22%3Bs%3A19%3A%222022-05-07+18%3A38%3A06%22%3Bs%3A11%3A%22last_update%22%3Bs%3A19%3A%222022-05-07+18%3A38%3A06%22%3B%7D', 'New data. Image. File: f52afef93d06b5503b60a507e3377b80.jpg.jpg', '2022-05-07 18:38:06'),
(11, 2, 1, 'Admin', 'Islam Itu Indah', '::1', 'update', 'author', 'a%3A34%3A%7Bs%3A2%3A%22id%22%3Bs%3A1%3A%222%22%3Bs%3A3%3A%22_id%22%3Bs%3A1%3A%222%22%3Bs%3A9%3A%22biblio_id%22%3Bs%3A1%3A%222%22%3Bs%3A5%3A%22title%22%3Bs%3A15%3A%22Islam+Itu+Indah%22%3Bs%3A8%3A%22gmd_name%22%3Bs%3A4%3A%22Text%22%3Bs%3A3%3A%22sor%22%3Bs%3A24%3A%22PERNYATAAN+TANGGUNGJAWAB%22%3Bs%3A7%3A%22edition%22%3Bs%3A5%3A%22EDISI%22%3Bs%3A9%3A%22isbn_issn%22%3Bs%3A9%3A%22ISBN%2FISSN%22%3Bs%3A14%3A%22publisher_name%22%3Bs%3A8%3A%22PENERBIT%22%3Bs%3A12%3A%22publish_year%22%3Bs%3A12%3A%22TAHUN+TERBIT%22%3Bs%3A9%3A%22collation%22%3Bs%3A15%3A%22DESKRIPSI+FISIK%22%3Bs%3A12%3A%22series_title%22%3Bs%3A10%3A%22JUDUL+SERI%22%3Bs%3A11%3A%22call_number%22%3Bs%3A11%3A%22KLASIFIKASI%22%3Bs%3A13%3A%22language_name%22%3Bs%3A9%3A%22Indonesia%22%3Bs%3A6%3A%22source%22%3BN%3Bs%3A5%3A%22place%22%3Bs%3A12%3A%22TEMPA+TERBIT%22%3Bs%3A14%3A%22classification%22%3Bs%3A11%3A%22KLASIFIKASI%22%3Bs%3A5%3A%22notes%22%3Bs%3A7%3A%22Abstrak%22%3Bs%3A5%3A%22image%22%3Bs%3A40%3A%22f52afef93d06b5503b60a507e3377b80.jpg.jpg%22%3Bs%3A9%3A%22opac_hide%22%3Bs%3A1%3A%220%22%3Bs%3A8%3A%22promoted%22%3Bs%3A1%3A%220%22%3Bs%3A6%3A%22labels%22%3BN%3Bs%3A9%3A%22frequency%22%3Bs%3A6%3A%22Weekly%22%3Bs%3A16%3A%22spec_detail_info%22%3Bs%3A20%3A%22Info+Detail+Spesifik%22%3Bs%3A12%3A%22content_type%22%3Bs%3A20%3A%22cartographic+dataset%22%3Bs%3A10%3A%22media_type%22%3Bs%3A5%3A%22other%22%3Bs%3A12%3A%22carrier_type%22%3Bs%3A15%3A%22audio+cartridge%22%3Bs%3A3%3A%22uid%22%3Bs%3A1%3A%221%22%3Bs%3A7%3A%22authors%22%3Ba%3A1%3A%7Bi%3A0%3Ba%3A3%3A%7Bs%3A11%3A%22author_name%22%3Bs%3A16%3A%22Islahatun+Nufusi%22%3Bs%3A14%3A%22authority_type%22%3Bs%3A10%3A%22Nama+Orang%22%3Bs%3A15%3A%22authority_level%22%3Bs%3A15%3A%22Pengarang+Utama%22%3B%7D%7Ds%3A8%3A%22subjects%22%3Ba%3A1%3A%7Bi%3A0%3Ba%3A3%3A%7Bs%3A5%3A%22topic%22%3Bs%3A16%3A%22Islahatun+Nufusi%22%3Bs%3A10%3A%22topic_type%22%3Bs%3A4%3A%22Nama%22%3Bs%3A11%3A%22topic_level%22%3Bs%3A7%3A%22Primary%22%3B%7D%7Ds%3A5%3A%22items%22%3BN%3Bs%3A4%3A%22hash%22%3Ba%3A5%3A%7Bs%3A6%3A%22biblio%22%3Bs%3A40%3A%2264ce52adcc11d181514802830efca1945cd10c80%22%3Bs%3A14%3A%22classification%22%3Bs%3A40%3A%222e56c4c117901b080a0ce63805d1270d2c47c2aa%22%3Bs%3A7%3A%22authors%22%3Bs%3A40%3A%22c7ca71980803d11bf9762d1e78c8d3555ce1b277%22%3Bs%3A8%3A%22subjects%22%3Bs%3A40%3A%228b590ad5b8f4500e4bbce1f1bf539f19222129f3%22%3Bs%3A5%3A%22image%22%3Bs%3A40%3A%2207e7fdb13ebbccfe1e72bde374a6021837e25f3a%22%3B%7Ds%3A10%3A%22input_date%22%3Bs%3A19%3A%222022-05-07+18%3A38%3A06%22%3Bs%3A11%3A%22last_update%22%3Bs%3A19%3A%222022-05-07+18%3A38%3A06%22%3B%7D', 'New data. Author. Names: Islahatun Nufusi;', '2022-05-07 18:38:06'),
(12, 2, 1, 'Admin', 'Islam Itu Indah', '::1', 'update', 'subject', 'a%3A34%3A%7Bs%3A2%3A%22id%22%3Bs%3A1%3A%222%22%3Bs%3A3%3A%22_id%22%3Bs%3A1%3A%222%22%3Bs%3A9%3A%22biblio_id%22%3Bs%3A1%3A%222%22%3Bs%3A5%3A%22title%22%3Bs%3A15%3A%22Islam+Itu+Indah%22%3Bs%3A8%3A%22gmd_name%22%3Bs%3A4%3A%22Text%22%3Bs%3A3%3A%22sor%22%3Bs%3A24%3A%22PERNYATAAN+TANGGUNGJAWAB%22%3Bs%3A7%3A%22edition%22%3Bs%3A5%3A%22EDISI%22%3Bs%3A9%3A%22isbn_issn%22%3Bs%3A9%3A%22ISBN%2FISSN%22%3Bs%3A14%3A%22publisher_name%22%3Bs%3A8%3A%22PENERBIT%22%3Bs%3A12%3A%22publish_year%22%3Bs%3A12%3A%22TAHUN+TERBIT%22%3Bs%3A9%3A%22collation%22%3Bs%3A15%3A%22DESKRIPSI+FISIK%22%3Bs%3A12%3A%22series_title%22%3Bs%3A10%3A%22JUDUL+SERI%22%3Bs%3A11%3A%22call_number%22%3Bs%3A11%3A%22KLASIFIKASI%22%3Bs%3A13%3A%22language_name%22%3Bs%3A9%3A%22Indonesia%22%3Bs%3A6%3A%22source%22%3BN%3Bs%3A5%3A%22place%22%3Bs%3A12%3A%22TEMPA+TERBIT%22%3Bs%3A14%3A%22classification%22%3Bs%3A11%3A%22KLASIFIKASI%22%3Bs%3A5%3A%22notes%22%3Bs%3A7%3A%22Abstrak%22%3Bs%3A5%3A%22image%22%3Bs%3A40%3A%22f52afef93d06b5503b60a507e3377b80.jpg.jpg%22%3Bs%3A9%3A%22opac_hide%22%3Bs%3A1%3A%220%22%3Bs%3A8%3A%22promoted%22%3Bs%3A1%3A%220%22%3Bs%3A6%3A%22labels%22%3BN%3Bs%3A9%3A%22frequency%22%3Bs%3A6%3A%22Weekly%22%3Bs%3A16%3A%22spec_detail_info%22%3Bs%3A20%3A%22Info+Detail+Spesifik%22%3Bs%3A12%3A%22content_type%22%3Bs%3A20%3A%22cartographic+dataset%22%3Bs%3A10%3A%22media_type%22%3Bs%3A5%3A%22other%22%3Bs%3A12%3A%22carrier_type%22%3Bs%3A15%3A%22audio+cartridge%22%3Bs%3A3%3A%22uid%22%3Bs%3A1%3A%221%22%3Bs%3A7%3A%22authors%22%3Ba%3A1%3A%7Bi%3A0%3Ba%3A3%3A%7Bs%3A11%3A%22author_name%22%3Bs%3A16%3A%22Islahatun+Nufusi%22%3Bs%3A14%3A%22authority_type%22%3Bs%3A10%3A%22Nama+Orang%22%3Bs%3A15%3A%22authority_level%22%3Bs%3A15%3A%22Pengarang+Utama%22%3B%7D%7Ds%3A8%3A%22subjects%22%3Ba%3A1%3A%7Bi%3A0%3Ba%3A3%3A%7Bs%3A5%3A%22topic%22%3Bs%3A16%3A%22Islahatun+Nufusi%22%3Bs%3A10%3A%22topic_type%22%3Bs%3A4%3A%22Nama%22%3Bs%3A11%3A%22topic_level%22%3Bs%3A7%3A%22Primary%22%3B%7D%7Ds%3A5%3A%22items%22%3BN%3Bs%3A4%3A%22hash%22%3Ba%3A5%3A%7Bs%3A6%3A%22biblio%22%3Bs%3A40%3A%2264ce52adcc11d181514802830efca1945cd10c80%22%3Bs%3A14%3A%22classification%22%3Bs%3A40%3A%222e56c4c117901b080a0ce63805d1270d2c47c2aa%22%3Bs%3A7%3A%22authors%22%3Bs%3A40%3A%22c7ca71980803d11bf9762d1e78c8d3555ce1b277%22%3Bs%3A8%3A%22subjects%22%3Bs%3A40%3A%228b590ad5b8f4500e4bbce1f1bf539f19222129f3%22%3Bs%3A5%3A%22image%22%3Bs%3A40%3A%2207e7fdb13ebbccfe1e72bde374a6021837e25f3a%22%3B%7Ds%3A10%3A%22input_date%22%3Bs%3A19%3A%222022-05-07+18%3A38%3A06%22%3Bs%3A11%3A%22last_update%22%3Bs%3A19%3A%222022-05-07+18%3A38%3A06%22%3B%7D', 'New data. Subject. Names: Islahatun Nufusi;', '2022-05-07 18:38:06'),
(13, 2, 1, 'Admin', 'JUDUL', '::1', 'update', 'description', 'a%3A34%3A%7Bs%3A2%3A%22id%22%3Bs%3A1%3A%222%22%3Bs%3A3%3A%22_id%22%3Bs%3A1%3A%222%22%3Bs%3A9%3A%22biblio_id%22%3Bs%3A1%3A%222%22%3Bs%3A5%3A%22title%22%3Bs%3A5%3A%22JUDUL%22%3Bs%3A8%3A%22gmd_name%22%3Bs%3A4%3A%22Text%22%3Bs%3A3%3A%22sor%22%3Bs%3A24%3A%22PERNYATAAN+TANGGUNGJAWAB%22%3Bs%3A7%3A%22edition%22%3Bs%3A5%3A%22EDISI%22%3Bs%3A9%3A%22isbn_issn%22%3Bs%3A9%3A%22ISBN%2FISSN%22%3Bs%3A14%3A%22publisher_name%22%3Bs%3A8%3A%22PENERBIT%22%3Bs%3A12%3A%22publish_year%22%3Bs%3A12%3A%22TAHUN+TERBIT%22%3Bs%3A9%3A%22collation%22%3Bs%3A15%3A%22DESKRIPSI+FISIK%22%3Bs%3A12%3A%22series_title%22%3Bs%3A10%3A%22JUDUL+SERI%22%3Bs%3A11%3A%22call_number%22%3Bs%3A11%3A%22KLASIFIKASI%22%3Bs%3A13%3A%22language_name%22%3Bs%3A9%3A%22Indonesia%22%3Bs%3A6%3A%22source%22%3BN%3Bs%3A5%3A%22place%22%3Bs%3A12%3A%22TEMPA+TERBIT%22%3Bs%3A14%3A%22classification%22%3Bs%3A11%3A%22KLASIFIKASI%22%3Bs%3A5%3A%22notes%22%3Bs%3A7%3A%22Abstrak%22%3Bs%3A5%3A%22image%22%3Bs%3A40%3A%22f52afef93d06b5503b60a507e3377b80.jpg.jpg%22%3Bs%3A9%3A%22opac_hide%22%3Bs%3A1%3A%220%22%3Bs%3A8%3A%22promoted%22%3Bs%3A1%3A%220%22%3Bs%3A6%3A%22labels%22%3BN%3Bs%3A9%3A%22frequency%22%3Bs%3A6%3A%22Weekly%22%3Bs%3A16%3A%22spec_detail_info%22%3Bs%3A20%3A%22Info+Detail+Spesifik%22%3Bs%3A12%3A%22content_type%22%3Bs%3A20%3A%22cartographic+dataset%22%3Bs%3A10%3A%22media_type%22%3Bs%3A5%3A%22other%22%3Bs%3A12%3A%22carrier_type%22%3Bs%3A15%3A%22audio+cartridge%22%3Bs%3A3%3A%22uid%22%3Bs%3A1%3A%221%22%3Bs%3A7%3A%22authors%22%3Ba%3A1%3A%7Bi%3A0%3Ba%3A3%3A%7Bs%3A11%3A%22author_name%22%3Bs%3A16%3A%22Islahatun+Nufusi%22%3Bs%3A14%3A%22authority_type%22%3Bs%3A10%3A%22Nama+Orang%22%3Bs%3A15%3A%22authority_level%22%3Bs%3A15%3A%22Pengarang+Utama%22%3B%7D%7Ds%3A8%3A%22subjects%22%3Ba%3A1%3A%7Bi%3A0%3Ba%3A3%3A%7Bs%3A5%3A%22topic%22%3Bs%3A16%3A%22Islahatun+Nufusi%22%3Bs%3A10%3A%22topic_type%22%3Bs%3A4%3A%22Nama%22%3Bs%3A11%3A%22topic_level%22%3Bs%3A7%3A%22Primary%22%3B%7D%7Ds%3A5%3A%22items%22%3BN%3Bs%3A4%3A%22hash%22%3Ba%3A5%3A%7Bs%3A6%3A%22biblio%22%3Bs%3A40%3A%22376cae4026f519c2ff8c4dc106b123faa57cbdcf%22%3Bs%3A14%3A%22classification%22%3Bs%3A40%3A%222e56c4c117901b080a0ce63805d1270d2c47c2aa%22%3Bs%3A7%3A%22authors%22%3Bs%3A40%3A%22c7ca71980803d11bf9762d1e78c8d3555ce1b277%22%3Bs%3A8%3A%22subjects%22%3Bs%3A40%3A%228b590ad5b8f4500e4bbce1f1bf539f19222129f3%22%3Bs%3A5%3A%22image%22%3Bs%3A40%3A%2207e7fdb13ebbccfe1e72bde374a6021837e25f3a%22%3B%7Ds%3A10%3A%22input_date%22%3Bs%3A19%3A%222022-05-07+18%3A38%3A06%22%3Bs%3A11%3A%22last_update%22%3Bs%3A19%3A%222022-05-07+18%3A38%3A35%22%3B%7D', 'Updated data. Bibliography.', '2022-05-07 18:38:35');

-- --------------------------------------------------------

--
-- Table structure for table `biblio_relation`
--

CREATE TABLE `biblio_relation` (
  `biblio_id` int(11) NOT NULL DEFAULT 0,
  `rel_biblio_id` int(11) NOT NULL DEFAULT 0,
  `rel_type` int(1) DEFAULT 1
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `biblio_topic`
--

CREATE TABLE `biblio_topic` (
  `biblio_id` int(11) NOT NULL DEFAULT 0,
  `topic_id` int(11) NOT NULL DEFAULT 0,
  `level` int(1) NOT NULL DEFAULT 1
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `biblio_topic`
--

INSERT INTO `biblio_topic` (`biblio_id`, `topic_id`, `level`) VALUES
(2, 19, 1),
(3, 19, 2),
(4, 19, 2);

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `comment_id` int(11) NOT NULL,
  `biblio_id` int(11) NOT NULL,
  `member_id` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `comment` text COLLATE utf8_unicode_ci NOT NULL,
  `input_date` datetime DEFAULT NULL,
  `last_update` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `content`
--

CREATE TABLE `content` (
  `content_id` int(11) NOT NULL,
  `content_title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `content_desc` text COLLATE utf8_unicode_ci NOT NULL,
  `content_path` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `is_news` smallint(1) DEFAULT NULL,
  `input_date` datetime NOT NULL,
  `last_update` datetime NOT NULL,
  `content_ownpage` enum('1','2') COLLATE utf8_unicode_ci NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `content`
--

INSERT INTO `content` (`content_id`, `content_title`, `content_desc`, `content_path`, `is_news`, `input_date`, `last_update`, `content_ownpage`) VALUES
(1, 'Library Information', '<h3>Contact Information</h3>\r\n<p><strong>Address :</strong> <br /> Jenderal Sudirman Road, Senayan, Jakarta, Indonesia - Postal Code : 10270 <br /> <strong>Phone Number :</strong> <br /> (021) 5711144 <br /> <strong>Fax Number :</strong> <br /> (021) 5711144</p>\r\n<h3>Opening Hours</h3>\r\n<p><strong>Monday - Friday :</strong> <br /> Open : 08.00 AM<br /> Break : 12.00 - 13.00 PM<br /> Close : 20.00 PM <br /> <strong>Saturday  :</strong> <br /> Open : 08.00 AM<br /> Break : 12.00 - 13.00 PM<br /> Close : 17.00 PM</p>\r\n<h3>Collections</h3>\r\n<p>We have many types of collections in our library, range from Fictions to Sciences Material, from printed material to digital collections such CD-ROM, CD, VCD and DVD. We also collect daily serials publications such as newspaper and also monthly serials such as magazines.</p>\r\n<h3>Library Membership</h3>\r\n<p>To be able to loan our library collections, you must first become library member. There is terms and conditions that you must obey.</p>', 'libinfo', NULL, '2009-09-13 19:48:16', '2009-09-13 19:48:16', '1'),
(2, 'Help On Usage', '<h3>Searching</h3>\r\n<p>There are 2 methods available on searching library catalog. The first one is <strong>SIMPLE SEARCH</strong>, which is the simplest method on searching catalog. You just enter any keyword, either it containes in titles, author(s) names or subjects. You can supply more than one keywords in Simple Search method and it will expanding your search results.</p>\r\n<p>&nbsp;</p>\r\n<p><strong>ADVANCED SEARCH</strong>, lets you define keywords in more specific fields. If you want your keywords only contained in title field, then type your keyword in Title field and the system will limit its search within <strong>Title</strong> fields only, not in other fields. Location field lets you narrowing search results by specific location, so only collection that exists in selected location get fetched by system.</p>', 'help', NULL, '2009-09-13 19:48:16', '2009-09-13 19:48:16', '1'),
(3, 'Welcome To Admin Page', '<div class=\"container admin_home\">\r\n<div class=\"row\">\r\n<div class=\"col-xs-6 col-md-4\">\r\n<h3>Bibliography</h3>\r\n<div class=\"row\">\r\n<div class=\"col-sm-2\"><a class=\"icon biblioIcon notAJAX\" href=\"index.php?mod=bibliography\"></a></div>\r\n<div class=\"col-sm-8\">The Bibliography module lets you manage your library bibliographical data. It also include collection items management to manage a copies of your library collection so it can be used in library circulation.</div>\r\n</div>\r\n</div>\r\n<div class=\"col-xs-6 col-md-4\">\r\n<h3>Circulation</h3>\r\n<div class=\"row\">\r\n<div class=\"col-sm-2\"><a class=\"icon circulationIcon notAJAX\" href=\"index.php?mod=circulation\"></a></div>\r\n<div class=\"col-sm-8\">The Circulation module is used for doing library circulation transaction such as collection loans and return. In this module you can also create loan rules that will be used in loan transaction proccess.</div>\r\n</div>\r\n</div>\r\n<div class=\"col-xs-6 col-md-4\">\r\n<h3>Membership</h3>\r\n<div class=\"row\">\r\n<div class=\"col-sm-2\"><a class=\"icon memberIcon notAJAX\" href=\"index.php?mod=membership\"></a></div>\r\n<div class=\"col-sm-8\">The Membership module lets you manage library members such adding, updating and also removing. You can also manage membership type in this module.</div>\r\n</div>\r\n</div>\r\n</div>\r\n<div class=\"row\">\r\n<div class=\"col-xs-6 col-md-4\">\r\n<h3>Stock Take</h3>\r\n<div class=\"row\">\r\n<div class=\"col-sm-2\"><a class=\"icon stockTakeIcon notAJAX\" href=\"index.php?mod=stock_take\"></a></div>\r\n<div class=\"col-sm-8\">The Stock Take module is the easy way to do Stock Opname for your library collections. Follow several steps that ease your pain in Stock Opname proccess.</div>\r\n</div>\r\n</div>\r\n<div class=\"col-xs-6 col-md-4\">\r\n<h3>Serial Control</h3>\r\n<div class=\"row\">\r\n<div class=\"col-sm-2\"><a class=\"icon serialIcon notAJAX\" href=\"index.php?mod=serial_control\"></a></div>\r\n<div class=\"col-sm-8\">Serial Control module help you manage library\'s serial publication subscription. You can track issues for each subscription.</div>\r\n</div>\r\n</div>\r\n<div class=\"col-xs-6 col-md-4\">\r\n<h3>Reporting</h3>\r\n<div class=\"row\">\r\n<div class=\"col-sm-2\"><a class=\"icon reportIcon notAJAX\" href=\"index.php?mod=reporting\"></a></div>\r\n<div class=\"col-sm-8\">Reporting lets you view various type of reports regardings membership data, circulation data and bibliographic data. All compiled on-the-fly from current library database.</div>\r\n</div>\r\n</div>\r\n</div>\r\n<div class=\"row\">\r\n<div class=\"col-xs-6 col-md-4\">\r\n<h3>Master File</h3>\r\n<div class=\"row\">\r\n<div class=\"col-sm-2\"><a class=\"icon masterFileIcon notAJAX\" href=\"index.php?mod=master_file\"></a></div>\r\n<div class=\"col-sm-8\">The Master File modules lets you manage referential data that will be used by another modules. It include Authority File management such as Authority, Subject/Topic List, GMD and other data.</div>\r\n</div>\r\n</div>\r\n<div class=\"col-xs-6 col-md-4\">\r\n<h3>System</h3>\r\n<div class=\"row\">\r\n<div class=\"col-sm-2\"><a class=\"icon systemIcon notAJAX\" href=\"index.php?mod=system\"></a></div>\r\n<div class=\"col-sm-8\">The System module is used to configure application globally, manage index, manage librarian, and also backup database.</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>', 'adminhome', NULL, '2009-09-13 19:48:16', '2009-09-13 22:02:11', '1'),
(4, 'Homepage Info', '<p>Welcome To <strong>SLiMS Library</strong> Online Public Access Catalog (OPAC). Use OPAC to search collection in our library.</p>', 'headerinfo', NULL, '2009-09-13 19:48:16', '2009-09-13 19:48:16', '1'),
(5, 'Tentang SLiMS', '<p><!--intro_awal--><strong>SLiMS</strong> adalah akronim dari Senayan Library Management System. Awalnya dikembangkan oleh Perpustakaan Kementerian Pendidikan Nasional untuk menggantikan Alice (http://www2.softlinkint.com). Tujuan utamanya agar Perpustakaan Kemdiknas mempunyai kebebasan untuk menggunakan, mempelajari, memodifikasi dan mendistribusikan perangkat lunak yang digunakan. SLiMS, maka dirilis dengan lisensi GPL dan sekarang pengembangan SLiMS dilakukan oleh komunitas penggunanya.<!--intro_akhir--></p>\r\n<p><strong>Asal Mula</strong></p>\r\n<p>Setelah beroperasi 50 tahun lebih, karena beberapa alasan Perpustakaan BC Indonesia yang telah selama bertahun-tahun menjadi andalan layanan BC di Indonesia harus ditutup. Pengelola BC Indonesia kemudian berinisiatif untuk menghibahkan pengelolaan aset perpustakaanya ke tangan institusi pemerintah. Dalam hal ini, institusi pemerintah yang dianggap sesuai bidangnya dan strategis tempatnya, adalah Departemen Pendidikan Nasional (Depdiknas). Yang dihibahkan tidak hanya koleksi, tetapi juga rak koleksi, hardware (server dan workstation) serta sistem termasuk untuk aplikasi manajemen administrasi perpustakaan (Alice).</p>\r\n<p>Seiring dengan berjalannya waktu, manajemen Perpustakaan Depdiknas mulai menghadapi beberapa kendala dalam penggunaan sistem Alice. Pertama, keterbatasan dalam menambahkan fitur-fitur baru. Antara lain: kebutuhan manajemen serial, meng-online-kan katalog di web dan kustomisasi report yang sering berubah-ubah kebutuhannya. Penambahan fitur jika harus meminta modul resmi dari developer Alice, berarti membutuhkan dana tambahan yang tidak kecil. Apalagi tidak ada distributor resminya di Indonesia sehingga harus mengharapkan support dari Inggris. Ditambah lagi beberapa persyaratan yang membutuhkan infrastruktur biaya mahal seperti dedicated public IP agar bisa meng-online-kan Alice di web.<br /><br />Saat itu untuk mengatasi sebagian kebutuhan (utamanya kustomisasi report), dilakukan dengan ujicoba mengakses langsung database yang disimpan dalam format DBase. Terkadang berhasil terkadang tidak karena struktur datanya proprietary dan kompleks serta jumlah rekodnya banyak. Untuk mempelajari struktur database, dicoba melakukan kontak via email ke developer Alice. Tetapi tidak ada respon sama sekali. Disini muncul masalah kedua. Sulitnya mempelajari lebih mendalam cara kerja perangkat lunak Alice. Karena Alice merupakan sistem proprietary yang serba tertutup, segala sesuatunya sangat tergantung vendor. Dibutuhkan sejumlah uang untuk mendapatkan layanan resmi untuk kustomisasi.<br /><br />Perpustakaan Depdiknas salah satu tupoksinya adalah melakukan koordinasi pengelolaan perpustakaan unit kerja dibawah lingkungan Depdiknas. Dalam implementasinya, seringkali muncul kebutuhan untuk bisa mendistribusikan perangkat lunak sistem perpustakaan ke berbagai unit kerja tersebut. Disini masalah ketiga: sulit (atau tidak mungkin) untuk melakukan redistribusi sistem Alice. Alice merupakan perangkat lunak yang secara lisensi tidak memungkinkan diredistribusi oleh pengelola Perpustakaan Depdiknas secara bebas. Semuanya harus ijin dan membutuhkan biaya.<br /><br />November 2006, perpustakaan dihadapkan oleh sebuah masalah mendasar. Sistem Alice tiba-tiba tidak bisa digunakan. Ternyata Alice yang digunakan selama ini diimplementasikan dengan sistem sewa. Pantas saja biayanya relatif murah. Tiap tahun pengguna harus membayar kembali untuk memperpanjang masa sewa pakainya. Tetapi yang mengkhawatirkan adalah fakta bahwa perpustakaan harus menyimpan semua informasi penting dan kritikal di sebuah sistem yang tidak pernah dimiliki. Yang kalau lupa atau tidak mau membayar sewa lagi, hilanglah akses terhadap data kita sendiri. Konyol sekali. Itu sama saja dengan bunuh diri kalau masih tergantung dengan sistem berlisensi seperti itu.<br /><br />Akhirnya pengelola Perpustakaan Depdiknas me-review kembali penggunaan sistem Alice di perpustakaan Depdiknas. Beberapa poin pentingnya antara lain:<br />&bull;&nbsp;&nbsp;&nbsp; Alice memang handal (reliable), tapi punya banyak keterbatasan. Biaya sewanya memang relatif murah, tetapi kalau membutuhkan support tambahan, baik sederhana ataupun kompleks, sangat tergantung dengan developer Alice yang berpusat di Inggris. Butuh biaya yang kalau di total juga tidak murah.<br />&bull;&nbsp;&nbsp;&nbsp; Model lisensi proprietary yang digunakan developer Alice tidak cocok dengan kondisi kebanyakan perpustakaan di Indonesia. Padahal pengelola Perpustakaan Depdiknas sebagai koordinator banyak perpustakaan di lingkungan Depdiknas, punya kepentingan untuk bisa dengan bebas melakukan banyak hal terhadap software yang digunakan.<br />&bull;&nbsp;&nbsp;&nbsp; Menyimpan data penting dan kritikal untuk operasional perpustakaan di suatu software yang proprietary dan menggunakan sistem sewa, dianggap sesuatu yang konyol dan mengancam independensi dan keberlangsungan perpustakaan itu sendiri.<br />&bull;&nbsp;&nbsp;&nbsp; Alice berjalan diatas sistem operasi Windows yang juga proprietary padahal pengelola Perpustakaan Depdiknas ingin beralih menggunakan Sistem Operasi open source (seperti GNU/Linux dan FreeBSD).<br />&bull;&nbsp;&nbsp;&nbsp; Masalah devisa negara yang terbuang untuk membayar software yang tidak pernah dimiliki.<br />&bull;&nbsp;&nbsp;&nbsp; Intinya: pengelola Perpustakaan Depdiknas ingin menggunakan software yang memberikan dan menjamin kebebasan untuk: menggunakan, mempelajari, memodifikasi dan melakukan redistribusi. Lisensi Alice tidak memungkinkan untuk itu.<br /><br />Setelah memutuskan untuk hijrah menggunakan sistem yang lain, maka langkah berikutnya adalah mencari sistem yang ada untuk digunakan atau mengembangkan sendiri sistem yang dibutuhkan. Beberapa pertimbangan yang harus dipenuhi:<br />&bull;&nbsp;&nbsp;&nbsp; Dirilis dibawah lisensi yang menjamin kebebasan untuk: menggunakan, mempelajari, memodifikasi dan melakukan redistribusi. Model lisensi open source (www.openosurce.org) dianggap sebagai model yang paling ideal dan sesuai.<br />&bull;&nbsp;&nbsp;&nbsp; Teknologi yang digunakan untuk membangun sistem juga harus berlisensi open source.<br />&bull;&nbsp;&nbsp;&nbsp; Teknologi yang digunakan haruslah teknologi yang relatif mudah dipelajari oleh pengelola perpustakaan Depdiknas yang berlatarbelakang pendidiknas pustakawan, seperti PHP (scripting language) dan MySQL (database). Jika tidak menguasai sisi teknis teknologi, maka akan terjebak kembali terhadap ketergantungan pada developer.<br /><br />Langkah berikutnya adalah melakukan banding software sistem perpustakaan open source yang bisa diperoleh di internet. Beberapa software yang dicoba antara lain: phpMyLibrary, OpenBiblio, KOHA, EverGreen. Pengelola perpustakaan Depdiknas merasa tidak cocok dengan software yang ada, dengan beberapa alasan:<br />&bull;&nbsp;&nbsp;&nbsp; Desain aplikasi dan database yang tidak baik atau kurang menerapkan secara serius prinsip-prinsip pengembangan aplikasi dan database yang baik sesuai dengan teori yang ada (PHPMyLibrary, OpenBiblio).<br />&bull;&nbsp;&nbsp;&nbsp; Menggunakan teknologi yang sulit dikuasai oleh pengelola perpustakaan Depdiknas (KOHA dan EverGreen dikembangkan menggunakan Perl dan C++ Language yang relatif lebih sulit dipelajari).<br />&bull;&nbsp;&nbsp;&nbsp; Beberapa sudah tidak aktif atau lama sekali tidak di rilis versi terbarunya (PHPMyLibrary dan OpenBiblio).<br /><br />Karena tidak menemukan sistem yang dibutuhkan, maka diputuskan untuk mengembangkan sendiri aplikasi sistem perpustakaan yang dibutuhkan. Dalam dunia pengembangan software, salah satu best practice-nya adalah memberikan nama kode (codename) pengembangan. Nama kode berbeda dengan nama aplikasinya itu sendiri. Nama kode biasanya berbeda-beda tiap versi. Misalnya kode nama &ldquo;Hardy Heron&rdquo; untuk Ubuntu Linux 8.04 dan &ldquo;Jaunty Jackalope&rdquo; untuk Ubuntu Linux 9.04. Pengelola perpustakaan Depdiknas Untuk versi awal (1.0) aplikasi yang akan dikembangkan, memberikan nama kode &ldquo;Senayan&rdquo;. Alasannya sederhana, karena awal dikembangkan di perpustakaan Depdiknas yang berlokasi di Senayan. Apalagi Perpustakaan Depdiknas mempunyai brand sebagai library@senayan. Belakangan karena dirasa nama &ldquo;Senayan&rdquo; dirasa cocok dan punya nilai marketing yang bagus, maka nama &ldquo;Senayan&rdquo; dijadikan nama resmi aplikasi sistem perpustakaan yang dikembangkan.<br /><br />Mengembangkan Senayan<br /><br />Sebelum mulai mengembangkan Senayan, ada beberapa keputusan desain aplikasi yang harus dibuat. Aspek desain ini penting diantaranya untuk pengambilankeputusan dari berbagai masukan yang datang dari komunitas. Antara lain:<br /><br />Pertama,&nbsp; Senayan adalah aplikasi untuk kebutuhan administrasi dan konten perpustakaan (Library Automation System). Senayan didesain untuk kebutuhan skala menengah maupun besar. Cocok untuk perpustakaan yang memiliki koleksi, anggota dan staf banyak di lingkungan jaringan, baik itu lokal (intranet) dan internet.<br /><br />Kedua, Senayan dibangun dengan memperhatikan best practice dalam pengembangan software seperti dalam hal penulisan source code, dokumentasi, dan desain database.<br /><br />Ketiga, Senayan dirancang untuk compliant dengan standar pengelolaan koleksi di perpustakaan. Untuk standar pengatalogan minimal memenuhi syarat AACR 2 level 2 (Anglo-American Cataloging Rules). Kebutuhan untuk kesesuaian dengan standar di perpustakaan terus berkembang dan pengelola perpustakaan Depdiknas dan developer Senayan berkomitmen untuk terus mengembangkan Senayan agar mengikuti standar-standar tersebut.<br /><br />Keempat, Senayan didesain agar bisa juga menjadi middleware bagi aplikasi lain untuk menggunakan data yang ada didalam Senayan. Untuk itu Senayan akan menyediakan API (application programming Interface) yang berbasis web service.<br /><br />Kelima, Senayan merupakan aplikasi yang cross-platform, baik dari sisi aplikasinya itu sendiri dan akses terhadap aplikasi. Untuk itu basis yang paling tepat ada basis web.<br /><br />Keenam, teknologi yang digunakan untuk membangun Senayan, haruslah terbukti bisa diinstall di banyak platform sistem operasi, berlisensi open source dan mudah dipelajari oleh pengelola perpustakaan Depdiknas. Diputuskan untuk menggunakan PHP (www.php.net) untuk web scripting languange dan MySQL (www.mysql.com) untuk server database.<br /><br />Ketujuh, diputuskan untuk mengembangkan library PHP sendiri yang didesain spesifik untuk kebutuhan membangun library automation system. Tidak menggunakan library PHP yang sudah terkenal seperti PEAR (pear.php.net) karena alasan penguasaan terhadap teknologi dan kesederhanaan. Library tersebut diberinama &ldquo;simbio&rdquo;.<br /><br />Kedelapan, untuk mempercepat proses pengembangan, beberapa modul atau fungsi yang dibutuhkan yang dirasa terlalu lama dan rumit untuk dikembangkan sendiri, akan menggunakan software open source yang berlisensi open source juga. Misalnya: flowplayer untuk dukungan multimedia, jQuery untuk dukungan AJAX (Asynchronous Javascript and XML), genbarcode untuk dukungan pembuatan barcode, PHPThumb untuk dukungan generate image on-the-fly, tinyMCE untuk web-based text editor, dan lain-lain.<br /><br />Kesembilan, untuk menjaga spirit open source, proses pengembangan Senayan dilakukan dengan infrastruktur yang berbasis open source. Misalnya: server web menggunakan Apache, server produksi menggunakan OS Linux Centos dan OpenSuse, para developer melakukan pengembangan dengan OS Ubuntu Linux, manajemen source code menggunakan software git, dan lain-lain.<br /><br />Kesepuluh, Senayan dirilis ke masyarakat umum dengan lisensi GNU/GPL versi 3 yang menjamin kebebasan penggunanya untuk mempelajari, menggunakan, memodifikasi dan redistribusi Senayan.<br /><br />Kesebelas, para developer dan pengelola perpustakaan Depdiknas berkomitmen untuk terus mengembangkan Senayan dan menjadikannya salah satu contoh software perpustakaan yang open source, berbasis di indonesia dan menjadi salah satu contoh bagi model pengembangan open source yang terbukti berjalan dengan baik.<br /><br />Keduabelas, model pengembangan Senayan adalah open source yang artinya setiap orang dipersilahkan memberikan kontribusinya. Baik dari sisi pemrogaman, template, dokumentasi, dan lain-lain. Tentu saja ada mekanisme mana kontribusi yang bagus untuk dimasukkan dalam rilis resmi, mana yang tidak. Mengacu ke dokumen &hellip; (TAMBAHKAN DENGAN TULISAN ERIC S RAYMOND)<br /><br />Model pengembangan senayan<br /><br />Pengembangan Senayan awalnya diinisiasi oleh pengelola Perpustakaan Depdiknas. Tetapi sekarang komunitas pengembang Senayan (Senayan Developer Community) yang lebih banyak mengambil peran dalam mengembangkan Senayan. Beberapa hal dibawah ini merupakan kultur yang dibangun dalam mengembangkan Senayan:<br />1.&nbsp;&nbsp;&nbsp; Meritokrasi. Siapa saja bisa berkontribusi. Mereka yang banyak memberikan kontribusi, akan mendapatkan privilege lebih dibandingkan yang lain.<br />2.&nbsp;&nbsp;&nbsp; Minimal punya concern terhadap pengembangan perpustakaan. Contoh lain: berlatar belakang pendidikan ilmu perpustakaan dan informasi, bekerja di perpustakaan, mengelola perpustakaan, dan lain-lain. Diharapkan dengan kondisi ini, sense of librarianship melekat di tiap developer/pengguna Senayan. Sejauh ini, semua developer senayan merupakan pustakawan atau berlatarbelakang pendidikan kepustakawanan (Information and Librarianship).<br />3.&nbsp;&nbsp;&nbsp; Release early, release often, and listen to your customer. Release early artinya setiap perbaikan dan penambahan fitur, secepat mungkin dirilis ke publik. Diharapkan bugs yang ada, bisa cepat ditemukan oleh komunitas, dilaporkan ke developer, untuk kemudian dirilis perbaikannya. Release often, artinya sesering mungkin memberikan update perbaikan bugs dan penambahan fitur. Ini &ldquo;memaksa&rdquo; developer Senayan untuk terus kreatif menambahkan fitur Senayan. Release often juga membuat pengguna berkeyakinan bahwa Senayan punya sustainability yang baik dan terus aktif dikembangkan. Selain itu, release often juga mempunyai dampak pemasaran. Pengguna dan calon pengguna, selalu diingatkan tentang keberadaan Senayan. Tentunya dengan cara yang elegan, yaitu rilis-rilis Senayan. Sejak dirilis ke publi pertama kali November 2007 sampai Juli 2009 (kurang lebih 20 bulan) telah dirilis 18 rilis resmi Senayan. Listen to your customer. Developer Senayan selalu berusaha mengakomodasi kebutuhan pengguna baik yang masuk melalui report di mailing list, ataupun melalui bugs tracking system. Tentu tidak semua masukan diakomodasi, harus disesuaikan dengan desain dan roadmap pengembangan Senayan.<br />4.&nbsp;&nbsp;&nbsp; Dokumentasi. Developer Senayan meyakini pentingnya dokumentasi yang baik dalam mensukseskan implementasi Senayan dibanyak tempat. Karena itu pengembang Senayan mempunyai tim khusus yang bertanggungjawab yang mengembangkan dokumentasi Senayan agar terus uo-to-date mengikuti rilis terbaru.<br />5.&nbsp;&nbsp;&nbsp; Agar ada percepatan dalam pengembangan dan untuk mengakrabkan antar pengembang Senayan, minimal setahun sekali diadakan Senayan Developers Day yang mengumpulkan para developer Senayan dari berbagai kota, dan melakukan coding bersama-sama.<br />Fitur Senayan<br />Sebagai sebuah Sistem Automasi Perpustakaan yang terintergrasi, modul-modul yang telah terdapat di SENAYAN adalah sebagai berikut:<br />Modul Pengatalogan (Cataloging Module)<br />1)&nbsp;&nbsp;&nbsp; Compliance dengan standar AACR2 (Anglo-American Cataloging Rules).<br />2)&nbsp;&nbsp;&nbsp; Fitur untuk membuat, mengedit, dan menghapus data bibliografi sesuai dengan standar deskripsi bibliografi AACR2 level ke dua.<br />3)&nbsp;&nbsp;&nbsp; Mendukung pengelolaan koleksi dalam berbagai macam format seperti monograph, terbitan berseri, audio visual, dsb.<br />4)&nbsp;&nbsp;&nbsp; Mendukung penyimpanan data bibliografi dari situs di Internet.<br />5)&nbsp;&nbsp;&nbsp; Mendukung penggunaan Barcode.<br />6)&nbsp;&nbsp;&nbsp; Manajemen item koleksi untuk dokumen dengan banyak kopi dan format yang berbeda.<br />7)&nbsp;&nbsp;&nbsp; Mendukung format XML untuk pertukaran data dengan menggunakan standar metadata MODS (Metadata Object Description Schema).<br />8)&nbsp;&nbsp;&nbsp; Pencetakan Barcode item/kopi koleksi Built-in.<br />9)&nbsp;&nbsp;&nbsp; Pencetakan Label Punggung koleksi Built-in.<br />10)&nbsp;&nbsp;&nbsp; Pengambilan data katalog melalui protokol Z3950 ke database koleksi Library of Congress.<br />11)&nbsp;&nbsp;&nbsp; Pengelolaan koleksi yang hilang, dalam perbaikan, dan rusak serta pencatatan statusnya untuk dilakukan pergantian/perbaikan terhadap koleksi.<br />12)&nbsp;&nbsp;&nbsp; Daftar kendali untuk pengarang (baik pengarang orang, badan/lembaga, dan pertemuan) sebagai standar konsistensi penuliasn<br />13)&nbsp;&nbsp;&nbsp; Pengaturan hak akses pengelolaan data bibliografi hanya untuk staf yang berhak.<br /><br />Modul Penelusuran (OPAC/Online Public Access catalog Module)<br />1)&nbsp;&nbsp;&nbsp; Pencarian sederhana.<br />2)&nbsp;&nbsp;&nbsp; Pencarian tingkat lanjut (Advanced).<br />3)&nbsp;&nbsp;&nbsp; Dukungan penggunaan Boolean\'s Logic dan implementasi CQL (Common Query Language).<br />4)&nbsp;&nbsp;&nbsp; OPAC Web Services berbasis XML.<br />5)&nbsp;&nbsp;&nbsp; Mendukung akses OPAC melalui peralatan portabel (mobile device)<br />6)&nbsp;&nbsp;&nbsp; Menampilkan informasi lengkap tetang status koleksi di perpustakaan, tanggal pengembalian, dan pemesanan item/koleksi<br />7)&nbsp;&nbsp;&nbsp; Detil informasi juga menampilkan gambar sampul buku, lampiran dalam format elektronik yang tersedia (jika ada) serta fasilitas menampilkan koleksi audio dan visual.<br />8)&nbsp;&nbsp;&nbsp; Menyediakan hyperlink tambahan untuk pencarian lanjutan berdasarkan penulis, dan subjek.<br /><br />Modul Sirkulasi (Circulation Module)<br />1)&nbsp;&nbsp;&nbsp; Mampu memproses peminjaman dan pengembalian koleksi secara efisien, efektif dan aman.<br />2)&nbsp;&nbsp;&nbsp; Mendukung fitur reservasi koleksi yang sedang dipinjam, termasuk reminder/pemberitahuan-nya.<br />3)&nbsp;&nbsp;&nbsp; Mendukung fitur manajemen denda. Dilengkapi fleksibilitas untuk pemakai membayar denda secara cicilan.<br />4)&nbsp;&nbsp;&nbsp; Mendukung fitur reminder untuk berbagai keperluan seperti melakukan black list terhadap pemakai yang bermasalah atau habis keanggotaannya.<br />5)&nbsp;&nbsp;&nbsp; Mendukung fitur pengkalenderan (calendaring) untuk diintegrasikan dengan penghitungan masa peminjaman, denda, dan lain-lain.<br />6)&nbsp;&nbsp;&nbsp; Memungkinkan penentuan hari-hari libur non-standar yang spesifik.<br />7)&nbsp;&nbsp;&nbsp; Dukungan terhadap ragam jenis tipe pemakai dengan masa pinjam beragam untuk berbagai jenis keanggotaan.<br />8)&nbsp;&nbsp;&nbsp; Menyimpan histori peminjaman anggota.<br />9)&nbsp;&nbsp;&nbsp; Mendukung pembuatan peraturan peminjaman yang sangat rinci dengan mengkombinasikan parameter keanggotaan, jenis koleksi, dan gmd selain aturan peminjaman standar berdasarkan jenis keanggotaan<br /><br />Modul Manajemen Keanggotaan (Membership Management Module)<br />1)&nbsp;&nbsp;&nbsp; Memungkinkan beragam tipe pemakai dengan ragam jenis kategori peminjaman, ragam jenis keanggotaan dan pembedaan setiap layanan sirkulasi dalam jumlah koleksi serta lama peminjaman untuk jenis koleksi untuk setiap jenis/kategori.<br />2)&nbsp;&nbsp;&nbsp; Dukungan terhadap input menggunakan barcode reader<br />3)&nbsp;&nbsp;&nbsp; Memungkinkan untuk menyimpan informasi preferensi pemakai atau subject interest.<br />4)&nbsp;&nbsp;&nbsp; Memungkinkan untuk menyimpan informasi tambahan untuk keperluan reminder pada saat transaksi.<br />5)&nbsp;&nbsp;&nbsp; Memungkinkan menyimpan informasi detail pemakai yang lebih lengkap.<br />6)&nbsp;&nbsp;&nbsp; Pencarian informasi anggota minimal berdasarkan nomor dan nama anggota.<br />7)&nbsp;&nbsp;&nbsp; Pembuatan kartu anggota yang dilengkapi dengan barcode untuk transaksi peminjaman.<br /><br />Modul Inventarisasi Koleksi (Stocktaking Module)<br />1)&nbsp;&nbsp;&nbsp; Proses inventarisasi koleksi bisa dilakukan secara bertahap dan parsial tanpa harus menutup layanan perpustakaan secara keseluruhan.<br />2)&nbsp;&nbsp;&nbsp; Proses inventarisasi bisa dilakukan secara efisien dan efektif.<br />3)&nbsp;&nbsp;&nbsp; Terdapat pilihan untuk menghapus data secara otomatis pada saat akhir proses inventarisasi terhadap koleksi yang dianggap hilang.<br /><br />Modul Statistik/Pelaporan (Report Module)<br />1)&nbsp;&nbsp;&nbsp; Meliputi pelaporan untuk semua modul-modul yang tersedia di Senayan.<br />2)&nbsp;&nbsp;&nbsp; Laporan Judul.<br />3)&nbsp;&nbsp;&nbsp; Laporan Items/Kopi koleksi.<br />4)&nbsp;&nbsp;&nbsp; Laporan Keanggotaan.<br />5)&nbsp;&nbsp;&nbsp; Laporan jumlah koleksi berdasarkan klasifikasi.<br />6)&nbsp;&nbsp;&nbsp; Laporan Keterlambatan.<br />7)&nbsp;&nbsp;&nbsp; Berbagai macam statistik seperti statistik koleksi, peminjaman, keanggotaan, keterpakaian koleksi.<br />8)&nbsp;&nbsp;&nbsp; Tampilan laporan yang sudah didesain printer-friendly, sehingga memudahkan untuk dicetak.<br />9)&nbsp;&nbsp;&nbsp; Filter data yang lengkap untuk setiap laporan.<br />10)&nbsp;&nbsp;&nbsp; API untuk pelaporan yang relatif mudah dipelajari untuk membuat custom report baru.<br /><br />Modul Manajemen Terbitan Berseri (Serial Control)<br />1)&nbsp;&nbsp;&nbsp; Manajemen data langganan.<br />2)&nbsp;&nbsp;&nbsp; Manajemen data Kardex.<br />3)&nbsp;&nbsp;&nbsp; Manajemen tracking data terbitan yang akan terbit dan yang sudah ada.<br />4)&nbsp;&nbsp;&nbsp; Memungkinkan tracking data terbitan berseri yang jadwal terbitnya tidak teratur (pengaturan yang fleksibel).<br /><br />Modul Lain-lain<br />1)&nbsp;&nbsp;&nbsp; Dukungan antar muka yang multi bahasa (internasionalisasi) dengan Gettext.<br />2)&nbsp;&nbsp;&nbsp; Dukungan terhadap penggunaan huruf bukan latin untuk pengisian data dan pencarian.<br /><br />Roadmap Pengembangan Senayan<br />SENAYAN akan terus dikembangkan oleh para pengembangnya beserta komunitas pengguna SENAYAN lainnya. Berikut adalah Roadmap pengembangan SENAYAN ke depannya:<br /><br />Pengembangan aplikasi:<br />1.&nbsp;&nbsp;&nbsp; Kompatibilitas dengan MARC dan standar pertukaran data yang komplit. Contoh implementasinya:<br />&bull;&nbsp;&nbsp;&nbsp; Memastikan bahwa format data bibliografi kompatibel dengan MARC secara lebih baik (minimal MARC light).<br />&bull;&nbsp;&nbsp;&nbsp; Dukungan terhadap RFID.<br />&bull;&nbsp;&nbsp;&nbsp; Fitur untuk impor / ekspor rekod dari The Online Computer Library Centre (OCLC), Research Libraries Information Network (RLIN), vendor sistem lain yang compliant dengan MARC.<br />&bull;&nbsp;&nbsp;&nbsp; Validasi data ISBN menggunakan modulus seven.<br />&bull;&nbsp;&nbsp;&nbsp; Dukungan terhadap standar di perpustakaan, seperti: Library of Congress Subject Headings, Library of Congress Classification, ALA filing rules, International Standard Bibliographic Description, ANSI Standard for Bibliographic Information Exchange on magnetic tape, Common communication format (ISO 2709).<br />2.&nbsp;&nbsp;&nbsp; Katalog induk/bersama (union catalog)<br />3.&nbsp;&nbsp;&nbsp; Implementasi Thesaurus. Contoh implementasinya:<br />&bull;&nbsp;&nbsp;&nbsp; Pemanfaatan tesaurus untuk proses pengatalogan.<br />&bull;&nbsp;&nbsp;&nbsp; Pemanfaatan tesaurus untuk proses pencarian, misalnya memberikan advis pencarian menggunakan knowledge base yang dibangun dengan sistem tesaurus.<br />4.&nbsp;&nbsp;&nbsp; Implementasi Library 2.0. Contoh implementasinya:<br />&bull;&nbsp;&nbsp;&nbsp; User bisa login dan mempunyai halaman personalisasi.<br />&bull;&nbsp;&nbsp;&nbsp; User bisa melakukan reservasi koleksi dan memperpanjang peminjaman.<br />&bull;&nbsp;&nbsp;&nbsp; User bisa melakukan komunikasi dengan pustakawan via messaging system.<br />&bull;&nbsp;&nbsp;&nbsp; User bisa melakukan tagging, rekomendasi koleksi dan menyimpannya didalam daftar koleksi favoritnya.<br />&bull;&nbsp;&nbsp;&nbsp; User bisa memberikan komentar terhadap koleksi.<br />&bull;&nbsp;&nbsp;&nbsp; Pustakawan bisa memasukkan preferensi pemakai didalam data keanggotaan. Preferensi tersebut bisa dimanfaatkan salah satunya untuk men-generate semacam daftar koleksi terpilih untuk dicetak atau ditampilkan ketika user login.<br />5.&nbsp;&nbsp;&nbsp; Peningkatan dukungan manajemen konten digital dan entri analitikal<br /><br />Pengembangan basis komunitas pengguna:<br />&bull;&nbsp;&nbsp;&nbsp; Membangun komunitas pengguna di berbagai kota <br />&bull;&nbsp;&nbsp;&nbsp; Mengadakan Senayan Developers Day untuk silaturahmi antar developer Senayan, update dokumentasi, penambahan fitur baru dan bug fixing dan mencari bibit pengembang yang baru.<br />&bull;&nbsp;&nbsp;&nbsp; Workshop/Seminar Nasional Tahunan<br />&bull;&nbsp;&nbsp;&nbsp; Jam Sessions rutin setiap 3 bulan</p>', 'about_slims', NULL, '2010-08-28 23:29:55', '2010-11-12 18:21:01', '1'),
(6, 'Modul yang Tersedia', '<p><!--intro_awal-->Sebagai sebuah Sistem Automasi Perpustakaan yang terintergrasi, modul-modul yang telah terdapat di SENAYAN antara lain: pengatalogan/bibliografi, keanggotaan, sirkulasi, masterfile, stock opname (inventarisasi koleksi), pelaporan/reporting, manajemen kontrol serial, digital library, dan lain-lain.<!--intro_akhir--></p>\r\n<p>Modul Pengatalogan (Cataloging Module)<br />1)&nbsp;&nbsp;&nbsp; Compliance dengan standar AACR2 (Anglo-American Cataloging Rules).<br />2)&nbsp;&nbsp;&nbsp; Fitur untuk membuat, mengedit, dan menghapus data bibliografi sesuai dengan standar deskripsi bibliografi AACR2 level ke dua.<br />3)&nbsp;&nbsp;&nbsp; Mendukung pengelolaan koleksi dalam berbagai macam format seperti monograph, terbitan berseri, audio visual, dsb.<br />4)&nbsp;&nbsp;&nbsp; Mendukung penyimpanan data bibliografi dari situs di Internet.<br />5)&nbsp;&nbsp;&nbsp; Mendukung penggunaan Barcode.<br />6)&nbsp;&nbsp;&nbsp; Manajemen item koleksi untuk dokumen dengan banyak kopi dan format yang berbeda.<br />7)&nbsp;&nbsp;&nbsp; Mendukung format XML untuk pertukaran data dengan menggunakan standar metadata MODS (Metadata Object Description Schema).<br />8)&nbsp;&nbsp;&nbsp; Pencetakan Barcode item/kopi koleksi Built-in.<br />9)&nbsp;&nbsp;&nbsp; Pencetakan Label Punggung koleksi Built-in.<br />10)&nbsp;&nbsp;&nbsp; Pengambilan data katalog melalui protokol Z3950 ke database koleksi Library of Congress.<br />11)&nbsp;&nbsp;&nbsp; Pengelolaan koleksi yang hilang, dalam perbaikan, dan rusak serta pencatatan statusnya untuk dilakukan pergantian/perbaikan terhadap koleksi.<br />12)&nbsp;&nbsp;&nbsp; Daftar kendali untuk pengarang (baik pengarang orang, badan/lembaga, dan pertemuan) sebagai standar konsistensi penuliasn<br />13)&nbsp;&nbsp;&nbsp; Pengaturan hak akses pengelolaan data bibliografi hanya untuk staf yang berhak.<br /><br />Modul Penelusuran (OPAC/Online Public Access catalog Module)<br />1)&nbsp;&nbsp;&nbsp; Pencarian sederhana.<br />2)&nbsp;&nbsp;&nbsp; Pencarian tingkat lanjut (Advanced).<br />3)&nbsp;&nbsp;&nbsp; Dukungan penggunaan Boolean\'s Logic dan implementasi CQL (Common Query Language).<br />4)&nbsp;&nbsp;&nbsp; OPAC Web Services berbasis XML.<br />5)&nbsp;&nbsp;&nbsp; Mendukung akses OPAC melalui peralatan portabel (mobile device)<br />6)&nbsp;&nbsp;&nbsp; Menampilkan informasi lengkap tetang status koleksi di perpustakaan, tanggal pengembalian, dan pemesanan item/koleksi<br />7)&nbsp;&nbsp;&nbsp; Detil informasi juga menampilkan gambar sampul buku, lampiran dalam format elektronik yang tersedia (jika ada) serta fasilitas menampilkan koleksi audio dan visual.<br />8)&nbsp;&nbsp;&nbsp; Menyediakan hyperlink tambahan untuk pencarian lanjutan berdasarkan penulis, dan subjek.<br /><br />Modul Sirkulasi (Circulation Module)<br />1)&nbsp;&nbsp;&nbsp; Mampu memproses peminjaman dan pengembalian koleksi secara efisien, efektif dan aman.<br />2)&nbsp;&nbsp;&nbsp; Mendukung fitur reservasi koleksi yang sedang dipinjam, termasuk reminder/pemberitahuan-nya.<br />3)&nbsp;&nbsp;&nbsp; Mendukung fitur manajemen denda. Dilengkapi fleksibilitas untuk pemakai membayar denda secara cicilan.<br />4)&nbsp;&nbsp;&nbsp; Mendukung fitur reminder untuk berbagai keperluan seperti melakukan black list terhadap pemakai yang bermasalah atau habis keanggotaannya.<br />5)&nbsp;&nbsp;&nbsp; Mendukung fitur pengkalenderan (calendaring) untuk diintegrasikan dengan penghitungan masa peminjaman, denda, dan lain-lain.<br />6)&nbsp;&nbsp;&nbsp; Memungkinkan penentuan hari-hari libur non-standar yang spesifik.<br />7)&nbsp;&nbsp;&nbsp; Dukungan terhadap ragam jenis tipe pemakai dengan masa pinjam beragam untuk berbagai jenis keanggotaan.<br />8)&nbsp;&nbsp;&nbsp; Menyimpan histori peminjaman anggota.<br />9)&nbsp;&nbsp;&nbsp; Mendukung pembuatan peraturan peminjaman yang sangat rinci dengan mengkombinasikan parameter keanggotaan, jenis koleksi, dan gmd selain aturan peminjaman standar berdasarkan jenis keanggotaan<br /><br />Modul Manajemen Keanggotaan (Membership Management Module)<br />1)&nbsp;&nbsp;&nbsp; Memungkinkan beragam tipe pemakai dengan ragam jenis kategori peminjaman, ragam jenis keanggotaan dan pembedaan setiap layanan sirkulasi dalam jumlah koleksi serta lama peminjaman untuk jenis koleksi untuk setiap jenis/kategori.<br />2)&nbsp;&nbsp;&nbsp; Dukungan terhadap input menggunakan barcode reader<br />3)&nbsp;&nbsp;&nbsp; Memungkinkan untuk menyimpan informasi preferensi pemakai atau subject interest.<br />4)&nbsp;&nbsp;&nbsp; Memungkinkan untuk menyimpan informasi tambahan untuk keperluan reminder pada saat transaksi.<br />5)&nbsp;&nbsp;&nbsp; Memungkinkan menyimpan informasi detail pemakai yang lebih lengkap.<br />6)&nbsp;&nbsp;&nbsp; Pencarian informasi anggota minimal berdasarkan nomor dan nama anggota.<br />7)&nbsp;&nbsp;&nbsp; Pembuatan kartu anggota yang dilengkapi dengan barcode untuk transaksi peminjaman.<br /><br />Modul Inventarisasi Koleksi (Stocktaking Module)<br />1)&nbsp;&nbsp;&nbsp; Proses inventarisasi koleksi bisa dilakukan secara bertahap dan parsial tanpa harus menutup layanan perpustakaan secara keseluruhan.<br />2)&nbsp;&nbsp;&nbsp; Proses inventarisasi bisa dilakukan secara efisien dan efektif.<br />3)&nbsp;&nbsp;&nbsp; Terdapat pilihan untuk menghapus data secara otomatis pada saat akhir proses inventarisasi terhadap koleksi yang dianggap hilang.<br /><br />Modul Statistik/Pelaporan (Report Module)<br />1)&nbsp;&nbsp;&nbsp; Meliputi pelaporan untuk semua modul-modul yang tersedia di Senayan.<br />2)&nbsp;&nbsp;&nbsp; Laporan Judul.<br />3)&nbsp;&nbsp;&nbsp; Laporan Items/Kopi koleksi.<br />4)&nbsp;&nbsp;&nbsp; Laporan Keanggotaan.<br />5)&nbsp;&nbsp;&nbsp; Laporan jumlah koleksi berdasarkan klasifikasi.<br />6)&nbsp;&nbsp;&nbsp; Laporan Keterlambatan.<br />7)&nbsp;&nbsp;&nbsp; Berbagai macam statistik seperti statistik koleksi, peminjaman, keanggotaan, keterpakaian koleksi.<br />8)&nbsp;&nbsp;&nbsp; Tampilan laporan yang sudah didesain printer-friendly, sehingga memudahkan untuk dicetak.<br />9)&nbsp;&nbsp;&nbsp; Filter data yang lengkap untuk setiap laporan.<br />10)&nbsp;&nbsp;&nbsp; API untuk pelaporan yang relatif mudah dipelajari untuk membuat custom report baru.<br /><br />Modul Manajemen Terbitan Berseri (Serial Control)<br />1)&nbsp;&nbsp;&nbsp; Manajemen data langganan.<br />2)&nbsp;&nbsp;&nbsp; Manajemen data Kardex.<br />3)&nbsp;&nbsp;&nbsp; Manajemen tracking data terbitan yang akan terbit dan yang sudah ada.<br />4)&nbsp;&nbsp;&nbsp; Memungkinkan tracking data terbitan berseri yang jadwal terbitnya tidak teratur (pengaturan yang fleksibel).<br /><br />Modul Lain-lain<br />1)&nbsp;&nbsp;&nbsp; Dukungan antar muka yang multi bahasa (internasionalisasi) dengan Gettext.<br />2)&nbsp;&nbsp;&nbsp; Dukungan terhadap penggunaan huruf bukan latin untuk pengisian data dan pencarian.</p>', 'modul_tersedia', NULL, '2010-08-29 04:03:09', '2010-08-29 04:05:49', '1'),
(7, 'Lisensi SLiMS', '<p><!--intro_awal--><strong>SLiMS</strong> dilisensikan dibawah GNU/GPL (http://www.gnu.org/licenses/gpl.html) untuk menjamin kebebasan pengguna dalam menggunakannya. GNU General Public License (disingkat GNU GPL atau cukup GPL) merupakan suatu lisensi perangkat lunak bebas yang aslinya ditulis oleh Richard Stallman untuk proyek GNU. Lisensi GPL memberikan penerima salinan perangkat lunak hak dari perangkat lunak bebas dan menggunakan copyleft&nbsp; untuk memastikan kebebasan yang sama diterapkan pada versi berikutnya dari karya tersebut.<!--intro_akhir--></p>\r\n<p>&nbsp;GNU LESSER GENERAL PUBLIC LICENSE<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Version 3, 29 June 2007<br /><br />&nbsp;Copyright (C) 2007 Free Software Foundation, Inc. &lt;http://fsf.org/&gt;<br />&nbsp;Everyone is permitted to copy and distribute verbatim copies<br />&nbsp;of this license document, but changing it is not allowed.<br /><br /><br />&nbsp; This version of the GNU Lesser General Public License incorporates<br />the terms and conditions of version 3 of the GNU General Public<br />License, supplemented by the additional permissions listed below.<br /><br />&nbsp; 0. Additional Definitions.<br /><br />&nbsp; As used herein, \"this License\" refers to version 3 of the GNU Lesser<br />General Public License, and the \"GNU GPL\" refers to version 3 of the GNU<br />General Public License.<br /><br />&nbsp; \"The Library\" refers to a covered work governed by this License,<br />other than an Application or a Combined Work as defined below.<br /><br />&nbsp; An \"Application\" is any work that makes use of an interface provided<br />by the Library, but which is not otherwise based on the Library.<br />Defining a subclass of a class defined by the Library is deemed a mode<br />of using an interface provided by the Library.<br /><br />&nbsp; A \"Combined Work\" is a work produced by combining or linking an<br />Application with the Library.&nbsp; The particular version of the Library<br />with which the Combined Work was made is also called the \"Linked<br />Version\".<br /><br />&nbsp; The \"Minimal Corresponding Source\" for a Combined Work means the<br />Corresponding Source for the Combined Work, excluding any source code<br />for portions of the Combined Work that, considered in isolation, are<br />based on the Application, and not on the Linked Version.<br /><br />&nbsp; The \"Corresponding Application Code\" for a Combined Work means the<br />object code and/or source code for the Application, including any data<br />and utility programs needed for reproducing the Combined Work from the<br />Application, but excluding the System Libraries of the Combined Work.<br /><br />&nbsp; 1. Exception to Section 3 of the GNU GPL.<br /><br />&nbsp; You may convey a covered work under sections 3 and 4 of this License<br />without being bound by section 3 of the GNU GPL.<br /><br />&nbsp; 2. Conveying Modified Versions.<br /><br />&nbsp; If you modify a copy of the Library, and, in your modifications, a<br />facility refers to a function or data to be supplied by an Application<br />that uses the facility (other than as an argument passed when the<br />facility is invoked), then you may convey a copy of the modified<br />version:<br /><br />&nbsp;&nbsp; a) under this License, provided that you make a good faith effort to<br />&nbsp;&nbsp; ensure that, in the event an Application does not supply the<br />&nbsp;&nbsp; function or data, the facility still operates, and performs<br />&nbsp;&nbsp; whatever part of its purpose remains meaningful, or<br /><br />&nbsp;&nbsp; b) under the GNU GPL, with none of the additional permissions of<br />&nbsp;&nbsp; this License applicable to that copy.<br /><br />&nbsp; 3. Object Code Incorporating Material from Library Header Files.<br /><br />&nbsp; The object code form of an Application may incorporate material from<br />a header file that is part of the Library.&nbsp; You may convey such object<br />code under terms of your choice, provided that, if the incorporated<br />material is not limited to numerical parameters, data structure<br />layouts and accessors, or small macros, inline functions and templates<br />(ten or fewer lines in length), you do both of the following:<br /><br />&nbsp;&nbsp; a) Give prominent notice with each copy of the object code that the<br />&nbsp;&nbsp; Library is used in it and that the Library and its use are<br />&nbsp;&nbsp; covered by this License.<br /><br />&nbsp;&nbsp; b) Accompany the object code with a copy of the GNU GPL and this license<br />&nbsp;&nbsp; document.<br /><br />&nbsp; 4. Combined Works.<br /><br />&nbsp; You may convey a Combined Work under terms of your choice that,<br />taken together, effectively do not restrict modification of the<br />portions of the Library contained in the Combined Work and reverse<br />engineering for debugging such modifications, if you also do each of<br />the following:<br /><br />&nbsp;&nbsp; a) Give prominent notice with each copy of the Combined Work that<br />&nbsp;&nbsp; the Library is used in it and that the Library and its use are<br />&nbsp;&nbsp; covered by this License.<br /><br />&nbsp;&nbsp; b) Accompany the Combined Work with a copy of the GNU GPL and this license<br />&nbsp;&nbsp; document.<br /><br />&nbsp;&nbsp; c) For a Combined Work that displays copyright notices during<br />&nbsp;&nbsp; execution, include the copyright notice for the Library among<br />&nbsp;&nbsp; these notices, as well as a reference directing the user to the<br />&nbsp;&nbsp; copies of the GNU GPL and this license document.<br /><br />&nbsp;&nbsp; d) Do one of the following:<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 0) Convey the Minimal Corresponding Source under the terms of this<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; License, and the Corresponding Application Code in a form<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; suitable for, and under terms that permit, the user to<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; recombine or relink the Application with a modified version of<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; the Linked Version to produce a modified Combined Work, in the<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; manner specified by section 6 of the GNU GPL for conveying<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Corresponding Source.<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 1) Use a suitable shared library mechanism for linking with the<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Library.&nbsp; A suitable mechanism is one that (a) uses at run time<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; a copy of the Library already present on the user\'s computer<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; system, and (b) will operate properly with a modified version<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; of the Library that is interface-compatible with the Linked<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Version.<br /><br />&nbsp;&nbsp; e) Provide Installation Information, but only if you would otherwise<br />&nbsp;&nbsp; be required to provide such information under section 6 of the<br />&nbsp;&nbsp; GNU GPL, and only to the extent that such information is<br />&nbsp;&nbsp; necessary to install and execute a modified version of the<br />&nbsp;&nbsp; Combined Work produced by recombining or relinking the<br />&nbsp;&nbsp; Application with a modified version of the Linked Version. (If<br />&nbsp;&nbsp; you use option 4d0, the Installation Information must accompany<br />&nbsp;&nbsp; the Minimal Corresponding Source and Corresponding Application<br />&nbsp;&nbsp; Code. If you use option 4d1, you must provide the Installation<br />&nbsp;&nbsp; Information in the manner specified by section 6 of the GNU GPL<br />&nbsp;&nbsp; for conveying Corresponding Source.)<br /><br />&nbsp; 5. Combined Libraries.<br /><br />&nbsp; You may place library facilities that are a work based on the<br />Library side by side in a single library together with other library<br />facilities that are not Applications and are not covered by this<br />License, and convey such a combined library under terms of your<br />choice, if you do both of the following:<br /><br />&nbsp;&nbsp; a) Accompany the combined library with a copy of the same work based<br />&nbsp;&nbsp; on the Library, uncombined with any other library facilities,<br />&nbsp;&nbsp; conveyed under the terms of this License.<br /><br />&nbsp;&nbsp; b) Give prominent notice with the combined library that part of it<br />&nbsp;&nbsp; is a work based on the Library, and explaining where to find the<br />&nbsp;&nbsp; accompanying uncombined form of the same work.<br /><br />&nbsp; 6. Revised Versions of the GNU Lesser General Public License.<br /><br />&nbsp; The Free Software Foundation may publish revised and/or new versions<br />of the GNU Lesser General Public License from time to time. Such new<br />versions will be similar in spirit to the present version, but may<br />differ in detail to address new problems or concerns.<br /><br />&nbsp; Each version is given a distinguishing version number. If the<br />Library as you received it specifies that a certain numbered version<br />of the GNU Lesser General Public License \"or any later version\"<br />applies to it, you have the option of following the terms and<br />conditions either of that published version or of any later version<br />published by the Free Software Foundation. If the Library as you<br />received it does not specify a version number of the GNU Lesser<br />General Public License, you may choose any version of the GNU Lesser<br />General Public License ever published by the Free Software Foundation.<br /><br />&nbsp; If the Library as you received it specifies that a proxy can decide<br />whether future versions of the GNU Lesser General Public License shall<br />apply, that proxy\'s public statement of acceptance of any version is<br />permanent authorization for you to choose that version for the<br />Library.</p>', 'lisensi_slims', NULL, '2010-08-29 04:04:33', '2010-11-12 22:15:43', '1');
INSERT INTO `content` (`content_id`, `content_title`, `content_desc`, `content_path`, `is_news`, `input_date`, `last_update`, `content_ownpage`) VALUES
(8, 'Model Pengembangan Open Source', '<p><!--intro_awal-->Sumber terbuka (Inggris: open source) adalah sistem pengembangan yang tidak dikoordinasi oleh suatu individu / lembaga pusat, tetapi oleh para pelaku yang bekerja sama dengan memanfaatkan kode sumber (source-code) yang tersebar dan tersedia bebas (biasanya menggunakan fasilitas komunikasi internet). Pola pengembangan ini mengambil model ala bazaar, sehingga pola Open Source ini memiliki ciri bagi komunitasnya yaitu adanya dorongan yang bersumber dari budaya memberi.<!--intro_akhir--><br /><br />Pola Open Source lahir karena kebebasan berkarya, tanpa intervensi berpikir dan mengungkapkan apa yang diinginkan dengan menggunakan pengetahuan dan produk yang cocok. Kebebasan menjadi pertimbangan utama ketika dilepas ke publik. Komunitas yang lain mendapat kebebasan untuk belajar, mengutak-ngatik, merevisi ulang, membenarkan ataupun bahkan menyalahkan, tetapi kebebasan ini juga datang bersama dengan tanggung jawab, bukan bebas tanpa tanggung jawab.<br /><br />Pada intinya konsep sumber terbuka adalah membuka \"kode sumber\" dari sebuah perangkat lunak. Konsep ini terasa aneh pada awalnya dikarenakan kode sumber merupakan kunci dari sebuah perangkat lunak. Dengan diketahui logika yang ada di kode sumber, maka orang lain semestinya dapat membuat perangkat lunak yang sama fungsinya. Sumber terbuka hanya sebatas itu. Artinya, dia tidak harus gratis. Definisi sumber terbuka yang asli adalah seperti tertuang dalam OSD (Open Source Definition)/Definisi sumber terbuka.</p>\r\n<p>Pengembangan Senayan awalnya diinisiasi oleh pengelola Perpustakaan Depdiknas. Tetapi sekarang komunitas pengembang Senayan (Senayan Developer Community) yang lebih banyak mengambil peran dalam mengembangkan Senayan. Beberapa hal dibawah ini merupakan kultur yang dibangun dalam mengembangkan Senayan:<br />1.&nbsp;&nbsp;&nbsp; Meritokrasi. Siapa saja bisa berkontribusi. Mereka yang banyak memberikan kontribusi, akan mendapatkan privilege lebih dibandingkan yang lain.<br />2.&nbsp;&nbsp;&nbsp; Minimal punya concern terhadap pengembangan perpustakaan. Contoh lain: berlatar belakang pendidikan ilmu perpustakaan dan informasi, bekerja di perpustakaan, mengelola perpustakaan, dan lain-lain. Diharapkan dengan kondisi ini, sense of librarianship melekat di tiap developer/pengguna Senayan. Sejauh ini, semua developer senayan merupakan pustakawan atau berlatarbelakang pendidikan kepustakawanan (Information and Librarianship).<br />3.&nbsp;&nbsp;&nbsp; Release early, release often, and listen to your customer. Release early artinya setiap perbaikan dan penambahan fitur, secepat mungkin dirilis ke publik. Diharapkan bugs yang ada, bisa cepat ditemukan oleh komunitas, dilaporkan ke developer, untuk kemudian dirilis perbaikannya. Release often, artinya sesering mungkin memberikan update perbaikan bugs dan penambahan fitur. Ini &ldquo;memaksa&rdquo; developer Senayan untuk terus kreatif menambahkan fitur Senayan. Release often juga membuat pengguna berkeyakinan bahwa Senayan punya sustainability yang baik dan terus aktif dikembangkan. Selain itu, release often juga mempunyai dampak pemasaran. Pengguna dan calon pengguna, selalu diingatkan tentang keberadaan Senayan. Tentunya dengan cara yang elegan, yaitu rilis-rilis Senayan. Sejak dirilis ke publi pertama kali November 2007 sampai Juli 2009 (kurang lebih 20 bulan) telah dirilis 18 rilis resmi Senayan. Listen to your customer. Developer Senayan selalu berusaha mengakomodasi kebutuhan pengguna baik yang masuk melalui report di mailing list, ataupun melalui bugs tracking system. Tentu tidak semua masukan diakomodasi, harus disesuaikan dengan desain dan roadmap pengembangan Senayan.<br />4.&nbsp;&nbsp;&nbsp; Dokumentasi. Developer Senayan meyakini pentingnya dokumentasi yang baik dalam mensukseskan implementasi Senayan dibanyak tempat. Karena itu pengembang Senayan mempunyai tim khusus yang bertanggungjawab yang mengembangkan dokumentasi Senayan agar terus uo-to-date mengikuti rilis terbaru.<br />5.&nbsp;&nbsp;&nbsp; Agar ada percepatan dalam pengembangan dan untuk mengakrabkan antar pengembang Senayan, minimal setahun sekali diadakan Senayan Developers Day yang mengumpulkan para developer Senayan dari berbagai kota, dan melakukan coding bersama-sama.</p>', 'opensource', NULL, '2010-08-29 04:05:16', '2010-08-29 04:34:04', '1');

-- --------------------------------------------------------

--
-- Table structure for table `files`
--

CREATE TABLE `files` (
  `file_id` int(11) NOT NULL,
  `file_title` text COLLATE utf8_unicode_ci NOT NULL,
  `file_name` text COLLATE utf8_unicode_ci NOT NULL,
  `file_url` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `file_dir` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `mime_type` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `file_desc` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `uploader_id` int(11) NOT NULL,
  `input_date` datetime NOT NULL,
  `last_update` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `files_read`
--

CREATE TABLE `files_read` (
  `filelog_id` int(11) NOT NULL,
  `file_id` int(11) NOT NULL,
  `date_read` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `member_id` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `client_ip` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `fines`
--

CREATE TABLE `fines` (
  `fines_id` int(11) NOT NULL,
  `fines_date` date NOT NULL,
  `member_id` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `debet` int(11) DEFAULT 0,
  `credit` int(11) DEFAULT 0,
  `description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `group_access`
--

CREATE TABLE `group_access` (
  `group_id` int(11) NOT NULL,
  `module_id` int(11) NOT NULL,
  `menus` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`menus`)),
  `r` int(1) NOT NULL DEFAULT 0,
  `w` int(1) NOT NULL DEFAULT 0
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `group_access`
--

INSERT INTO `group_access` (`group_id`, `module_id`, `menus`, `r`, `w`) VALUES
(1, 1, NULL, 1, 1),
(1, 2, NULL, 1, 1),
(1, 3, NULL, 1, 1),
(1, 4, NULL, 1, 1),
(1, 5, NULL, 1, 1),
(1, 6, NULL, 1, 1),
(1, 7, NULL, 1, 1),
(1, 8, NULL, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `holiday`
--

CREATE TABLE `holiday` (
  `holiday_id` int(11) NOT NULL,
  `holiday_dayname` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `holiday_date` date DEFAULT NULL,
  `description` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `holiday`
--

INSERT INTO `holiday` (`holiday_id`, `holiday_dayname`, `holiday_date`, `description`) VALUES
(1, 'Mon', '2009-06-01', 'Tes Libur'),
(2, 'Tue', '2009-06-02', 'Tes Libur'),
(3, 'Wed', '2009-06-03', 'Tes Libur'),
(4, 'Thu', '2009-06-04', 'Tes Libur'),
(5, 'Fri', '2009-06-05', 'Tes Libur'),
(6, 'Sat', '2009-06-06', 'Tes Libur'),
(7, 'sat', NULL, NULL),
(8, 'sun', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `item`
--

CREATE TABLE `item` (
  `item_id` int(11) NOT NULL,
  `biblio_id` int(11) DEFAULT NULL,
  `call_number` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `coll_type_id` int(3) DEFAULT NULL,
  `item_code` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `inventory_code` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `received_date` date DEFAULT NULL,
  `supplier_id` varchar(6) COLLATE utf8_unicode_ci DEFAULT NULL,
  `order_no` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `location_id` varchar(3) COLLATE utf8_unicode_ci DEFAULT NULL,
  `order_date` date DEFAULT NULL,
  `item_status_id` char(3) COLLATE utf8_unicode_ci DEFAULT NULL,
  `site` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `source` int(1) NOT NULL DEFAULT 0,
  `invoice` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `price_currency` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `invoice_date` date DEFAULT NULL,
  `input_date` datetime NOT NULL,
  `last_update` datetime DEFAULT NULL,
  `uid` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `item`
--

INSERT INTO `item` (`item_id`, `biblio_id`, `call_number`, `coll_type_id`, `item_code`, `inventory_code`, `received_date`, `supplier_id`, `order_no`, `location_id`, `order_date`, `item_status_id`, `site`, `source`, `invoice`, `price`, `price_currency`, `invoice_date`, `input_date`, `last_update`, `uid`) VALUES
(1, 3, 'KLASIFIKASI', 2, '01', '01', '2022-05-07', '0', '01', 'SL', '2022-05-07', '0', '7098', 1, '', 20000, NULL, '2022-05-07', '2022-05-07 18:46:26', '2022-05-07 18:46:26', 1);

-- --------------------------------------------------------

--
-- Table structure for table `kardex`
--

CREATE TABLE `kardex` (
  `kardex_id` int(11) NOT NULL,
  `date_expected` date NOT NULL,
  `date_received` date DEFAULT NULL,
  `seq_number` varchar(25) COLLATE utf8_unicode_ci DEFAULT NULL,
  `notes` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `serial_id` int(11) DEFAULT NULL,
  `input_date` date NOT NULL,
  `last_update` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `loan`
--

CREATE TABLE `loan` (
  `loan_id` int(11) NOT NULL,
  `item_code` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `member_id` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `loan_date` date NOT NULL,
  `due_date` date NOT NULL,
  `renewed` int(11) NOT NULL DEFAULT 0,
  `loan_rules_id` int(11) NOT NULL DEFAULT 0,
  `actual` date DEFAULT NULL,
  `is_lent` int(11) NOT NULL DEFAULT 0,
  `is_return` int(11) NOT NULL DEFAULT 0,
  `return_date` date DEFAULT NULL,
  `input_date` datetime DEFAULT NULL,
  `last_update` datetime DEFAULT NULL,
  `uid` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Triggers `loan`
--
DELIMITER $$
CREATE TRIGGER `delete_loan_history` AFTER DELETE ON `loan` FOR EACH ROW DELETE FROM `loan_history` WHERE loan_id=OLD.loan_id
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `insert_loan_history` AFTER INSERT ON `loan` FOR EACH ROW INSERT INTO loan_history
     SET loan_id=NEW.loan_id,
     item_code=NEW.item_code,
     member_id=NEW.member_id,
     loan_date=NEW.loan_date,
     due_date=NEW.due_date,
     renewed=NEW.renewed,
     is_lent=NEW.is_lent,
     is_return=NEW.is_return,
     return_date=NEW.return_date,
     input_date=NEW.input_date,
     last_update=NEW.last_update,
     title=(SELECT b.title FROM biblio b LEFT JOIN item i ON i.biblio_id=b.biblio_id WHERE i.item_code=NEW.item_code),
     biblio_id=(SELECT b.biblio_id FROM biblio b LEFT JOIN item i ON i.biblio_id=b.biblio_id WHERE i.item_code=NEW.item_code),
     call_number=(SELECT IF(i.call_number IS NULL, b.call_number,i.call_number) FROM biblio b LEFT JOIN item i ON i.biblio_id=b.biblio_id WHERE i.item_code=NEW.item_code),
     classification=(SELECT b.classification FROM biblio b LEFT JOIN item i ON i.biblio_id=b.biblio_id WHERE i.item_code=NEW.item_code),
     gmd_name=(SELECT g.gmd_name FROM biblio b LEFT JOIN item i ON i.biblio_id=b.biblio_id LEFT JOIN mst_gmd g ON g.gmd_id=b.gmd_id WHERE i.item_code=NEW.item_code),
     language_name=(SELECT l.language_name FROM biblio b LEFT JOIN item i ON i.biblio_id=b.biblio_id LEFT JOIN mst_language l ON b.language_id=l.language_id WHERE i.item_code=NEW.item_code),
     location_name=(SELECT ml.location_name FROM item i LEFT JOIN mst_location ml ON i.location_id=ml.location_id WHERE i.item_code=NEW.item_code),
     collection_type_name=(SELECT mct.coll_type_name FROM mst_coll_type mct LEFT JOIN item i ON i.coll_type_id=mct.coll_type_id WHERE i.item_code=NEW.item_code),
     member_name=(SELECT m.member_name FROM member m WHERE m.member_id=NEW.member_id),
     member_type_name=(SELECT mmt.member_type_name FROM mst_member_type mmt LEFT JOIN member m ON m.member_type_id=mmt.member_type_id WHERE m.member_id=NEW.member_id)
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `update_loan_history` AFTER UPDATE ON `loan` FOR EACH ROW UPDATE loan_history 
    SET is_lent=NEW.is_lent,
    is_return=NEW.is_return,
    renewed=NEW.renewed,
    return_date=NEW.return_date
    WHERE loan_id=NEW.loan_id
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `loan_history`
--

CREATE TABLE `loan_history` (
  `loan_id` int(11) NOT NULL,
  `item_code` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `biblio_id` int(11) NOT NULL,
  `title` varchar(300) COLLATE utf8_unicode_ci DEFAULT NULL,
  `call_number` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `classification` varchar(40) COLLATE utf8_unicode_ci DEFAULT NULL,
  `gmd_name` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `language_name` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `location_name` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `collection_type_name` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `member_id` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `member_name` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `member_type_name` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `loan_date` date DEFAULT NULL,
  `due_date` date DEFAULT NULL,
  `renewed` int(11) NOT NULL DEFAULT 0,
  `is_lent` int(11) NOT NULL DEFAULT 0,
  `is_return` int(11) NOT NULL DEFAULT 0,
  `return_date` date DEFAULT NULL,
  `input_date` datetime DEFAULT NULL,
  `last_update` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `member_id` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `member_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `gender` int(1) NOT NULL,
  `birth_date` date DEFAULT NULL,
  `member_type_id` int(6) DEFAULT NULL,
  `member_address` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `member_mail_address` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `member_email` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `postal_code` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `inst_name` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `is_new` int(1) DEFAULT NULL,
  `member_image` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pin` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `member_phone` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `member_fax` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `member_since_date` date DEFAULT NULL,
  `register_date` date DEFAULT NULL,
  `expire_date` date NOT NULL,
  `member_notes` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `is_pending` smallint(1) NOT NULL DEFAULT 0,
  `mpasswd` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `last_login` datetime DEFAULT NULL,
  `last_login_ip` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `input_date` date DEFAULT NULL,
  `last_update` date DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`member_id`, `member_name`, `gender`, `birth_date`, `member_type_id`, `member_address`, `member_mail_address`, `member_email`, `postal_code`, `inst_name`, `is_new`, `member_image`, `pin`, `member_phone`, `member_fax`, `member_since_date`, `register_date`, `expire_date`, `member_notes`, `is_pending`, `mpasswd`, `last_login`, `last_login_ip`, `input_date`, `last_update`) VALUES
('1102171151', 'Isalahatun Nufusi', 0, '0000-00-00', 1, 'Kp. Kalapa Lima, Desa: Sukamanah, kecamatan: Baros', NULL, 'islahatunnufusi07@gmail.com', '4321', 'Universitas Banten Jaya', 0, 'member_1102171151.png', '1102171151', '85893324274', '9865', '0000-00-00', '0000-00-00', '0000-00-00', 'hakjahs.a', 0, NULL, NULL, NULL, '2022-05-07', '2022-05-07'),
('1,10273E+12', 'Bala Bala', 0, '0000-00-00', 1, 'Bala Bala', NULL, 'islahatunnufusi07@gmail.com', '627681', 'Universitas Banten Jaya', 0, 'member_1102728635232.jpg', '1102171151', '85893324274', '9865', '0000-00-00', '0000-00-00', '0000-00-00', 'apa aja', 0, NULL, NULL, NULL, '2022-05-07', '2022-05-07'),
('11111', 'Sipa Aja', 1, '0000-00-00', 1, 'Baa', NULL, 'ima', '561567571', 'Universitas Banten Jaya', 0, 'member_1102728635232.jpg', '1102171151', '85893324274', '9865', '0000-00-00', '0000-00-00', '0000-00-00', 'apa aja', 0, NULL, NULL, NULL, '2022-05-07', '2022-05-07'),
('1111111', 'Siapa', 0, '2022-05-11', 1, 'kampung', 'kampung', 'islahatunnufusi07@gmail.com', '12111', 'Universitas Banten Jaya', NULL, NULL, '-', '085893324274', '-', '2022-05-09', '2022-05-09', '2023-05-09', 'apa aja', 0, '$2y$10$xu/o59Jvr1VPjEztM2y3JuvJKcAbAvTGhWx5YQ1AHo/7ZO3goyPI6', '2022-05-09 11:02:21', '::1', '2022-05-09', '2022-05-09');

-- --------------------------------------------------------

--
-- Table structure for table `member_custom`
--

CREATE TABLE `member_custom` (
  `member_id` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COMMENT='one to one relation with real member table';

-- --------------------------------------------------------

--
-- Table structure for table `mst_author`
--

CREATE TABLE `mst_author` (
  `author_id` int(11) NOT NULL,
  `author_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `author_year` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `authority_type` enum('p','o','c') COLLATE utf8_unicode_ci DEFAULT 'p',
  `auth_list` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `input_date` date NOT NULL,
  `last_update` date DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `mst_author`
--

INSERT INTO `mst_author` (`author_id`, `author_name`, `author_year`, `authority_type`, `auth_list`, `input_date`, `last_update`) VALUES
(1, 'Raden Kania', NULL, 'p', NULL, '2022-02-10', '2022-02-10'),
(2, 'Islahatun Nufusi', NULL, 'p', NULL, '2022-05-07', '2022-05-07');

-- --------------------------------------------------------

--
-- Table structure for table `mst_carrier_type`
--

CREATE TABLE `mst_carrier_type` (
  `id` int(11) NOT NULL,
  `carrier_type` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `code` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `code2` char(1) COLLATE utf8_unicode_ci NOT NULL,
  `input_date` datetime NOT NULL,
  `last_update` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `mst_carrier_type`
--

INSERT INTO `mst_carrier_type` (`id`, `carrier_type`, `code`, `code2`, `input_date`, `last_update`) VALUES
(1, 'audio cartridge', 'sg', 'g', '2021-06-16 19:58:09', '2021-06-16 19:58:09'),
(2, 'audio cylinder', 'se', 'e', '2021-06-16 19:58:09', '2021-06-16 19:58:09'),
(3, 'audio disc', 'sd', 'd', '2021-06-16 19:58:09', '2021-06-16 19:58:09'),
(4, 'sound track reel', 'si', 'i', '2021-06-16 19:58:09', '2021-06-16 19:58:09'),
(5, 'audio roll', 'sq', 'q', '2021-06-16 19:58:09', '2021-06-16 19:58:09'),
(6, 'audiocassette', 'ss', 's', '2021-06-16 19:58:09', '2021-06-16 19:58:09'),
(7, 'audiotape reel', 'st', 't', '2021-06-16 19:58:09', '2021-06-16 19:58:09'),
(8, 'other (audio)', 'sz', 'z', '2021-06-16 19:58:09', '2021-06-16 19:58:09'),
(9, 'computer card', 'ck', 'k', '2021-06-16 19:58:09', '2021-06-16 19:58:09'),
(10, 'computer chip cartridge', 'cb', 'b', '2021-06-16 19:58:09', '2021-06-16 19:58:09'),
(11, 'computer disc', 'cd', 'd', '2021-06-16 19:58:09', '2021-06-16 19:58:09'),
(12, 'computer disc cartridge', 'ce', 'e', '2021-06-16 19:58:09', '2021-06-16 19:58:09'),
(13, 'computer tape cartridge', 'ca', 'a', '2021-06-16 19:58:09', '2021-06-16 19:58:09'),
(14, 'computer tape cassette', 'cf', 'f', '2021-06-16 19:58:09', '2021-06-16 19:58:09'),
(15, 'computer tape reel', 'ch', 'h', '2021-06-16 19:58:09', '2021-06-16 19:58:09'),
(16, 'online resource', 'cr', 'r', '2021-06-16 19:58:09', '2021-06-16 19:58:09'),
(17, 'other (computer)', 'cz', 'z', '2021-06-16 19:58:09', '2021-06-16 19:58:09'),
(18, 'aperture card', 'ha', 'a', '2021-06-16 19:58:09', '2021-06-16 19:58:09'),
(19, 'microfiche', 'he', 'e', '2021-06-16 19:58:09', '2021-06-16 19:58:09'),
(20, 'microfiche cassette', 'hf', 'f', '2021-06-16 19:58:09', '2021-06-16 19:58:09'),
(21, 'microfilm cartridge', 'hb', 'b', '2021-06-16 19:58:09', '2021-06-16 19:58:09'),
(22, 'microfilm cassette', 'hc', 'c', '2021-06-16 19:58:09', '2021-06-16 19:58:09'),
(23, 'microfilm reel', 'hd', 'd', '2021-06-16 19:58:09', '2021-06-16 19:58:09'),
(24, 'microfilm roll', 'hj', 'j', '2021-06-16 19:58:09', '2021-06-16 19:58:09'),
(25, 'microfilm slip', 'hh', 'h', '2021-06-16 19:58:09', '2021-06-16 19:58:09'),
(26, 'microopaque', 'hg', 'g', '2021-06-16 19:58:09', '2021-06-16 19:58:09'),
(27, 'other (microform)', 'hz', 'z', '2021-06-16 19:58:09', '2021-06-16 19:58:09'),
(28, 'microscope slide', 'pp', 'p', '2021-06-16 19:58:09', '2021-06-16 19:58:09'),
(29, 'other (microscope)', 'pz', 'z', '2021-06-16 19:58:09', '2021-06-16 19:58:09'),
(30, 'film cartridge', 'mc', 'c', '2021-06-16 19:58:09', '2021-06-16 19:58:09'),
(31, 'film cassette', 'mf', 'f', '2021-06-16 19:58:09', '2021-06-16 19:58:09'),
(32, 'film reel', 'mr', 'r', '2021-06-16 19:58:09', '2021-06-16 19:58:09'),
(33, 'film roll', 'mo', 'o', '2021-06-16 19:58:09', '2021-06-16 19:58:09'),
(34, 'filmslip', 'gd', 'd', '2021-06-16 19:58:09', '2021-06-16 19:58:09'),
(35, 'filmstrip', 'gf', 'f', '2021-06-16 19:58:09', '2021-06-16 19:58:09'),
(36, 'filmstrip cartridge', 'gc', 'c', '2021-06-16 19:58:09', '2021-06-16 19:58:09'),
(37, 'overhead transparency', 'gt', 't', '2021-06-16 19:58:09', '2021-06-16 19:58:09'),
(38, 'slide', 'gs', 's', '2021-06-16 19:58:09', '2021-06-16 19:58:09'),
(39, 'other (projected image)', 'mz', 'z', '2021-06-16 19:58:09', '2021-06-16 19:58:09'),
(40, 'stereograph card', 'eh', 'h', '2021-06-16 19:58:09', '2021-06-16 19:58:09'),
(41, 'stereograph disc', 'es', 's', '2021-06-16 19:58:09', '2021-06-16 19:58:09'),
(42, 'other (stereographic)', 'ez', 'z', '2021-06-16 19:58:09', '2021-06-16 19:58:09'),
(43, 'card', 'no', 'o', '2021-06-16 19:58:09', '2021-06-16 19:58:09'),
(44, 'flipchart', 'nn', 'n', '2021-06-16 19:58:09', '2021-06-16 19:58:09'),
(45, 'roll', 'na', 'a', '2021-06-16 19:58:09', '2021-06-16 19:58:09'),
(46, 'sheet', 'nb', 'b', '2021-06-16 19:58:09', '2021-06-16 19:58:09'),
(47, 'volume', 'nc', 'c', '2021-06-16 19:58:09', '2021-06-16 19:58:09'),
(48, 'object', 'nr', 'r', '2021-06-16 19:58:09', '2021-06-16 19:58:09'),
(49, 'other (unmediated)', 'nz', '', '2021-06-16 19:58:09', '2021-06-16 19:58:09'),
(50, 'video cartridge', 'vc', '', '2021-06-16 19:58:09', '2021-06-16 19:58:09'),
(51, 'videocassette', 'vf', '', '2021-06-16 19:58:09', '2021-06-16 19:58:09'),
(52, 'videodisc', 'vd', '', '2021-06-16 19:58:09', '2021-06-16 19:58:09'),
(53, 'videotape reel', 'vr', '', '2021-06-16 19:58:09', '2021-06-16 19:58:09'),
(54, 'other (video)', 'vz', '', '2021-06-16 19:58:09', '2021-06-16 19:58:09'),
(55, 'unspecified', 'zu', 'u', '2021-06-16 19:58:09', '2021-06-16 19:58:09');

-- --------------------------------------------------------

--
-- Table structure for table `mst_coll_type`
--

CREATE TABLE `mst_coll_type` (
  `coll_type_id` int(3) NOT NULL,
  `coll_type_name` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `input_date` date DEFAULT NULL,
  `last_update` date DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `mst_coll_type`
--

INSERT INTO `mst_coll_type` (`coll_type_id`, `coll_type_name`, `input_date`, `last_update`) VALUES
(1, 'Reference', '2007-11-29', '2007-11-29'),
(2, 'Textbook', '2007-11-29', '2007-11-29'),
(3, 'Fiction', '2007-11-29', '2007-11-29');

-- --------------------------------------------------------

--
-- Table structure for table `mst_content_type`
--

CREATE TABLE `mst_content_type` (
  `id` int(11) NOT NULL,
  `content_type` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `code` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `code2` char(1) COLLATE utf8_unicode_ci NOT NULL,
  `input_date` datetime NOT NULL,
  `last_update` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `mst_content_type`
--

INSERT INTO `mst_content_type` (`id`, `content_type`, `code`, `code2`, `input_date`, `last_update`) VALUES
(1, 'cartographic dataset', 'crd', 'e', '2021-06-16 19:58:09', '2021-06-16 19:58:09'),
(2, 'cartographic image', 'cri', 'e', '2021-06-16 19:58:09', '2021-06-16 19:58:09'),
(3, 'cartographic moving image', 'crm', 'e', '2021-06-16 19:58:09', '2021-06-16 19:58:09'),
(4, 'cartographic tactile image', 'crt', 'e', '2021-06-16 19:58:09', '2021-06-16 19:58:09'),
(5, 'cartographic tactile three-dimensional form', 'crn', 'e', '2021-06-16 19:58:09', '2021-06-16 19:58:09'),
(6, 'cartographic three-dimensional form', 'crf', 'e', '2021-06-16 19:58:09', '2021-06-16 19:58:09'),
(7, 'computer dataset', 'cod', 'm', '2021-06-16 19:58:09', '2021-06-16 19:58:09'),
(8, 'computer program', 'cop', 'm', '2021-06-16 19:58:09', '2021-06-16 19:58:09'),
(9, 'notated movement', 'ntv', 'a', '2021-06-16 19:58:09', '2021-06-16 19:58:09'),
(10, 'notated music', 'ntm', 'c', '2021-06-16 19:58:09', '2021-06-16 19:58:09'),
(11, 'performed music', 'prm', 'j', '2021-06-16 19:58:09', '2021-06-16 19:58:09'),
(12, 'sounds', 'snd', 'i', '2021-06-16 19:58:09', '2021-06-16 19:58:09'),
(13, 'spoken word', 'spw', 'i', '2021-06-16 19:58:09', '2021-06-16 19:58:09'),
(14, 'still image', 'sti', 'k', '2021-06-16 19:58:09', '2021-06-16 19:58:09'),
(15, 'tactile image', 'tci', 'k', '2021-06-16 19:58:09', '2021-06-16 19:58:09'),
(16, 'tactile notated music', 'tcm', 'c', '2021-06-16 19:58:09', '2021-06-16 19:58:09'),
(17, 'tactile notated movement', 'tcn', 'a', '2021-06-16 19:58:09', '2021-06-16 19:58:09'),
(18, 'tactile text', 'tct', 'a', '2021-06-16 19:58:09', '2021-06-16 19:58:09'),
(19, 'tactile three-dimensional form', 'tcf', 'r', '2021-06-16 19:58:09', '2021-06-16 19:58:09'),
(20, 'text', 'txt', 'a', '2021-06-16 19:58:09', '2021-06-16 19:58:09'),
(21, 'three-dimensional form', 'tdf', 'r', '2021-06-16 19:58:09', '2021-06-16 19:58:09'),
(22, 'three-dimensional moving image', 'tdm', 'g', '2021-06-16 19:58:09', '2021-06-16 19:58:09'),
(23, 'two-dimensional moving image', 'tdi', 'g', '2021-06-16 19:58:09', '2021-06-16 19:58:09'),
(24, 'other', 'xxx', 'o', '2021-06-16 19:58:09', '2021-06-16 19:58:09'),
(25, 'unspecified', 'zzz', '', '2021-06-16 19:58:09', '2021-06-16 19:58:09');

-- --------------------------------------------------------

--
-- Table structure for table `mst_custom_field`
--

CREATE TABLE `mst_custom_field` (
  `field_id` int(11) NOT NULL,
  `primary_table` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `dbfield` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `label` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `type` enum('text','checklist','numeric','dropdown','longtext','choice','date') COLLATE utf8_unicode_ci NOT NULL,
  `default` varchar(80) COLLATE utf8_unicode_ci DEFAULT NULL,
  `max` int(11) DEFAULT NULL,
  `data` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `indexed` tinyint(1) DEFAULT NULL,
  `class` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `is_public` tinyint(1) DEFAULT NULL,
  `width` int(5) DEFAULT 100,
  `note` text COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `mst_frequency`
--

CREATE TABLE `mst_frequency` (
  `frequency_id` int(11) NOT NULL,
  `frequency` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `language_prefix` varchar(5) COLLATE utf8_unicode_ci DEFAULT NULL,
  `time_increment` smallint(6) DEFAULT NULL,
  `time_unit` enum('day','week','month','year') COLLATE utf8_unicode_ci DEFAULT 'day',
  `input_date` date NOT NULL,
  `last_update` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `mst_frequency`
--

INSERT INTO `mst_frequency` (`frequency_id`, `frequency`, `language_prefix`, `time_increment`, `time_unit`, `input_date`, `last_update`) VALUES
(1, 'Weekly', 'en', 1, 'week', '2009-05-23', '2009-05-23'),
(2, 'Bi-weekly', 'en', 2, 'week', '2009-05-23', '2009-05-23'),
(3, 'Fourth-Nightly', 'en', 14, 'day', '2009-05-23', '2009-05-23'),
(4, 'Monthly', 'en', 1, 'month', '2009-05-23', '2009-05-23'),
(5, 'Bi-Monthly', 'en', 2, 'month', '2009-05-23', '2009-05-23'),
(6, 'Quarterly', 'en', 3, 'month', '2009-05-23', '2009-05-23'),
(7, '3 Times a Year', 'en', 4, 'month', '2009-05-23', '2009-05-23'),
(8, 'Annualy', 'en', 1, 'year', '2009-05-23', '2009-05-23');

-- --------------------------------------------------------

--
-- Table structure for table `mst_gmd`
--

CREATE TABLE `mst_gmd` (
  `gmd_id` int(11) NOT NULL,
  `gmd_code` varchar(3) COLLATE utf8_unicode_ci DEFAULT NULL,
  `gmd_name` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `icon_image` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `input_date` date NOT NULL,
  `last_update` date DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `mst_gmd`
--

INSERT INTO `mst_gmd` (`gmd_id`, `gmd_code`, `gmd_name`, `icon_image`, `input_date`, `last_update`) VALUES
(1, 'TE', 'Text', NULL, '2021-06-16', '2021-06-16'),
(2, 'AR', 'Art Original', NULL, '2021-06-16', '2021-06-16'),
(3, 'CH', 'Chart', NULL, '2021-06-16', '2021-06-16'),
(4, 'CO', 'Computer Software', NULL, '2021-06-16', '2021-06-16'),
(5, 'DI', 'Diorama', NULL, '2021-06-16', '2021-06-16'),
(6, 'FI', 'Filmstrip', NULL, '2021-06-16', '2021-06-16'),
(7, 'FL', 'Flash Card', NULL, '2021-06-16', '2021-06-16'),
(8, 'GA', 'Game', NULL, '2021-06-16', '2021-06-16'),
(9, 'GL', 'Globe', NULL, '2021-06-16', '2021-06-16'),
(10, 'KI', 'Kit', NULL, '2021-06-16', '2021-06-16'),
(11, 'MA', 'Map', NULL, '2021-06-16', '2021-06-16'),
(12, 'MI', 'Microform', NULL, '2021-06-16', '2021-06-16'),
(13, 'MN', 'Manuscript', NULL, '2021-06-16', '2021-06-16'),
(14, 'MO', 'Model', NULL, '2021-06-16', '2021-06-16'),
(15, 'MP', 'Motion Picture', NULL, '2021-06-16', '2021-06-16'),
(16, 'MS', 'Microscope Slide', NULL, '2021-06-16', '2021-06-16'),
(17, 'MU', 'Music', NULL, '2021-06-16', '2021-06-16'),
(18, 'PI', 'Picture', NULL, '2021-06-16', '2021-06-16'),
(19, 'RE', 'Realia', NULL, '2021-06-16', '2021-06-16'),
(20, 'SL', 'Slide', NULL, '2021-06-16', '2021-06-16'),
(21, 'SO', 'Sound Recording', NULL, '2021-06-16', '2021-06-16'),
(22, 'TD', 'Technical Drawing', NULL, '2021-06-16', '2021-06-16'),
(23, 'TR', 'Transparency', NULL, '2021-06-16', '2021-06-16'),
(24, 'VI', 'Video Recording', NULL, '2021-06-16', '2021-06-16'),
(25, 'EQ', 'Equipment', NULL, '2021-06-16', '2021-06-16'),
(26, 'CF', 'Computer File', NULL, '2021-06-16', '2021-06-16'),
(27, 'CA', 'Cartographic Material', NULL, '2021-06-16', '2021-06-16'),
(28, 'CD', 'CD-ROM', NULL, '2021-06-16', '2021-06-16'),
(29, 'MV', 'Multimedia', NULL, '2021-06-16', '2021-06-16'),
(30, 'ER', 'Electronic Resource', NULL, '2021-06-16', '2021-06-16'),
(31, 'DVD', 'Digital Versatile Disc', NULL, '2021-06-16', '2021-06-16');

-- --------------------------------------------------------

--
-- Table structure for table `mst_item_status`
--

CREATE TABLE `mst_item_status` (
  `item_status_id` char(3) COLLATE utf8_unicode_ci NOT NULL,
  `item_status_name` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `rules` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `no_loan` smallint(1) NOT NULL DEFAULT 0,
  `skip_stock_take` smallint(1) NOT NULL DEFAULT 0,
  `input_date` date DEFAULT NULL,
  `last_update` date DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `mst_item_status`
--

INSERT INTO `mst_item_status` (`item_status_id`, `item_status_name`, `rules`, `no_loan`, `skip_stock_take`, `input_date`, `last_update`) VALUES
('R', 'Repair', 'a:1:{i:0;s:1:\"1\";}', 1, 0, '2021-06-16', '2021-06-16'),
('NL', 'No Loan', 'a:1:{i:0;s:1:\"1\";}', 1, 0, '2021-06-16', '2021-06-16'),
('MIS', 'Missing', NULL, 1, 1, '2021-06-16', '2021-06-16');

-- --------------------------------------------------------

--
-- Table structure for table `mst_label`
--

CREATE TABLE `mst_label` (
  `label_id` int(11) NOT NULL,
  `label_name` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `label_desc` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `label_image` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `input_date` date NOT NULL,
  `last_update` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `mst_label`
--

INSERT INTO `mst_label` (`label_id`, `label_name`, `label_desc`, `label_image`, `input_date`, `last_update`) VALUES
(1, 'label-new', 'New Title', 'label-new.png', '2021-06-16', '2021-06-16'),
(2, 'label-favorite', 'Favorite Title', 'label-favorite.png', '2021-06-16', '2021-06-16'),
(3, 'label-multimedia', 'Multimedia', 'label-multimedia.png', '2021-06-16', '2021-06-16');

-- --------------------------------------------------------

--
-- Table structure for table `mst_language`
--

CREATE TABLE `mst_language` (
  `language_id` char(5) COLLATE utf8_unicode_ci NOT NULL,
  `language_name` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `input_date` date DEFAULT NULL,
  `last_update` date DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `mst_language`
--

INSERT INTO `mst_language` (`language_id`, `language_name`, `input_date`, `last_update`) VALUES
('id', 'Indonesia', '2021-06-16', '2021-06-16'),
('en', 'English', '2021-06-16', '2021-06-16');

-- --------------------------------------------------------

--
-- Table structure for table `mst_loan_rules`
--

CREATE TABLE `mst_loan_rules` (
  `loan_rules_id` int(11) NOT NULL,
  `member_type_id` int(11) NOT NULL DEFAULT 0,
  `coll_type_id` int(11) DEFAULT 0,
  `gmd_id` int(11) DEFAULT 0,
  `loan_limit` int(3) DEFAULT 0,
  `loan_periode` int(3) DEFAULT 0,
  `reborrow_limit` int(3) DEFAULT 0,
  `fine_each_day` int(3) DEFAULT 0,
  `grace_periode` int(2) DEFAULT 0,
  `input_date` date DEFAULT NULL,
  `last_update` date DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `mst_loan_rules`
--

INSERT INTO `mst_loan_rules` (`loan_rules_id`, `member_type_id`, `coll_type_id`, `gmd_id`, `loan_limit`, `loan_periode`, `reborrow_limit`, `fine_each_day`, `grace_periode`, `input_date`, `last_update`) VALUES
(1, 1, 1, 0, 2, 1, 0, 0, 0, '2022-05-07', '2022-05-07');

-- --------------------------------------------------------

--
-- Table structure for table `mst_location`
--

CREATE TABLE `mst_location` (
  `location_id` varchar(3) COLLATE utf8_unicode_ci NOT NULL,
  `location_name` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `input_date` date NOT NULL,
  `last_update` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `mst_location`
--

INSERT INTO `mst_location` (`location_id`, `location_name`, `input_date`, `last_update`) VALUES
('SL', 'My Library', '2021-06-16', '2021-06-16');

-- --------------------------------------------------------

--
-- Table structure for table `mst_media_type`
--

CREATE TABLE `mst_media_type` (
  `id` int(11) NOT NULL,
  `media_type` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `code` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `code2` char(1) COLLATE utf8_unicode_ci NOT NULL,
  `input_date` datetime NOT NULL,
  `last_update` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `mst_media_type`
--

INSERT INTO `mst_media_type` (`id`, `media_type`, `code`, `code2`, `input_date`, `last_update`) VALUES
(1, 'audio', 's', 's', '2021-06-16 19:58:09', '2021-06-16 19:58:09'),
(2, 'computer', 'c', 'c', '2021-06-16 19:58:09', '2021-06-16 19:58:09'),
(3, 'microform', 'h', 'h', '2021-06-16 19:58:09', '2021-06-16 19:58:09'),
(4, 'microscopic', 'p', '', '2021-06-16 19:58:09', '2021-06-16 19:58:09'),
(5, 'projected', 'g', 'g', '2021-06-16 19:58:09', '2021-06-16 19:58:09'),
(6, 'stereographic', 'e', '', '2021-06-16 19:58:09', '2021-06-16 19:58:09'),
(7, 'unmediated', 'n', 't', '2021-06-16 19:58:09', '2021-06-16 19:58:09'),
(8, 'video', 'v', 'v', '2021-06-16 19:58:09', '2021-06-16 19:58:09'),
(9, 'other', 'x', 'z', '2021-06-16 19:58:09', '2021-06-16 19:58:09'),
(10, 'unspecified', 'z', 'z', '2021-06-16 19:58:09', '2021-06-16 19:58:09');

-- --------------------------------------------------------

--
-- Table structure for table `mst_member_type`
--

CREATE TABLE `mst_member_type` (
  `member_type_id` int(11) NOT NULL,
  `member_type_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `loan_limit` int(11) NOT NULL,
  `loan_periode` int(11) NOT NULL,
  `enable_reserve` int(1) NOT NULL DEFAULT 0,
  `reserve_limit` int(11) NOT NULL DEFAULT 0,
  `member_periode` int(11) NOT NULL,
  `reborrow_limit` int(11) NOT NULL,
  `fine_each_day` int(11) NOT NULL,
  `grace_periode` int(2) DEFAULT 0,
  `input_date` date NOT NULL,
  `last_update` date DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `mst_member_type`
--

INSERT INTO `mst_member_type` (`member_type_id`, `member_type_name`, `loan_limit`, `loan_periode`, `enable_reserve`, `reserve_limit`, `member_periode`, `reborrow_limit`, `fine_each_day`, `grace_periode`, `input_date`, `last_update`) VALUES
(1, 'Standard', 2, 7, 1, 2, 365, 1, 0, 0, '2021-06-16', '2021-06-16');

-- --------------------------------------------------------

--
-- Table structure for table `mst_module`
--

CREATE TABLE `mst_module` (
  `module_id` int(3) NOT NULL,
  `module_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `module_path` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `module_desc` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `mst_module`
--

INSERT INTO `mst_module` (`module_id`, `module_name`, `module_path`, `module_desc`) VALUES
(1, 'bibliography', 'bibliography', 'Manage your bibliographic/catalog and items/copies database'),
(2, 'circulation', 'circulation', 'Module for doing library items circulation such as loan and return'),
(3, 'membership', 'membership', 'Manage your library membership and membership type'),
(4, 'master_file', 'master_file', 'Manage your referential data that will be used by other modules'),
(5, 'stock_take', 'stock_take', 'Ease your pain in doing library stock opname process'),
(6, 'system', 'system', 'Configure system behaviour, user and backups'),
(7, 'reporting', 'reporting', 'Real time and dynamic report about library collections and circulation'),
(8, 'serial_control', 'serial_control', 'Serial publication management');

-- --------------------------------------------------------

--
-- Table structure for table `mst_place`
--

CREATE TABLE `mst_place` (
  `place_id` int(11) NOT NULL,
  `place_name` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `input_date` date DEFAULT NULL,
  `last_update` date DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `mst_place`
--

INSERT INTO `mst_place` (`place_id`, `place_name`, `input_date`, `last_update`) VALUES
(1, 'Serang', '2022-02-10', '2022-02-10'),
(2, 'TEMPA TERBIT', '2022-05-07', '2022-05-07');

-- --------------------------------------------------------

--
-- Table structure for table `mst_publisher`
--

CREATE TABLE `mst_publisher` (
  `publisher_id` int(11) NOT NULL,
  `publisher_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `input_date` date DEFAULT NULL,
  `last_update` date DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `mst_publisher`
--

INSERT INTO `mst_publisher` (`publisher_id`, `publisher_name`, `input_date`, `last_update`) VALUES
(1, 'Media Madani', '2022-02-10', '2022-02-10'),
(2, 'PENERBIT', '2022-05-07', '2022-05-07'),
(3, 'Isalahatun Nufusi', '2022-05-07', '2022-05-07');

-- --------------------------------------------------------

--
-- Table structure for table `mst_relation_term`
--

CREATE TABLE `mst_relation_term` (
  `ID` int(11) NOT NULL,
  `rt_id` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `rt_desc` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `mst_relation_term`
--

INSERT INTO `mst_relation_term` (`ID`, `rt_id`, `rt_desc`) VALUES
(1, 'U', 'Use'),
(2, 'UF', 'Use For'),
(3, 'BT', 'Broader Term'),
(4, 'NT', 'Narrower Term'),
(5, 'RT', 'Related Term'),
(6, 'SA', 'See Also');

-- --------------------------------------------------------

--
-- Table structure for table `mst_servers`
--

CREATE TABLE `mst_servers` (
  `server_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `uri` text COLLATE utf8_unicode_ci NOT NULL,
  `server_type` tinyint(1) NOT NULL DEFAULT 1 COMMENT '1 - p2p server; 2 - z3950; 3 - z3950  SRU',
  `input_date` datetime NOT NULL,
  `last_update` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `mst_supplier`
--

CREATE TABLE `mst_supplier` (
  `supplier_id` int(11) NOT NULL,
  `supplier_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `postal_code` char(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone` char(14) COLLATE utf8_unicode_ci DEFAULT NULL,
  `contact` char(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `fax` char(14) COLLATE utf8_unicode_ci DEFAULT NULL,
  `account` char(12) COLLATE utf8_unicode_ci DEFAULT NULL,
  `e_mail` char(80) COLLATE utf8_unicode_ci DEFAULT NULL,
  `input_date` date DEFAULT NULL,
  `last_update` date DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `mst_topic`
--

CREATE TABLE `mst_topic` (
  `topic_id` int(11) NOT NULL,
  `topic` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `topic_type` enum('t','g','n','tm','gr','oc') COLLATE utf8_unicode_ci NOT NULL,
  `auth_list` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `classification` varchar(50) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Classification Code',
  `input_date` date DEFAULT NULL,
  `last_update` date DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `mst_topic`
--

INSERT INTO `mst_topic` (`topic_id`, `topic`, `topic_type`, `auth_list`, `classification`, `input_date`, `last_update`) VALUES
(1, 'Programming', 't', NULL, '', '2007-11-29', '2007-11-29'),
(2, 'Website', 't', NULL, '', '2007-11-29', '2007-11-29'),
(3, 'Operating System', 't', NULL, '', '2007-11-29', '2007-11-29'),
(4, 'Linux', 't', NULL, '', '2007-11-29', '2007-11-29'),
(5, 'Computer', 't', NULL, '', '2007-11-29', '2007-11-29'),
(6, 'Database', 't', NULL, '', '2007-11-29', '2007-11-29'),
(7, 'RDBMS', 't', NULL, '', '2007-11-29', '2007-11-29'),
(8, 'Open Source', 't', NULL, '', '2007-11-29', '2007-11-29'),
(9, 'Project', 't', NULL, '', '2007-11-29', '2007-11-29'),
(10, 'Design', 't', NULL, '', '2007-11-29', '2007-11-29'),
(11, 'Information', 't', NULL, '', '2007-11-29', '2007-11-29'),
(12, 'Organization', 't', NULL, '', '2007-11-29', '2007-11-29'),
(13, 'Metadata', 't', NULL, '', '2007-11-29', '2007-11-29'),
(14, 'Library', 't', NULL, '', '2007-11-29', '2007-11-29'),
(15, 'Corruption', 't', NULL, '', '2007-11-29', '2007-11-29'),
(16, 'Development', 't', NULL, '', '2007-11-29', '2007-11-29'),
(17, 'Poverty', 't', NULL, '', '2007-11-29', '2007-11-29'),
(18, 'covid-19', 't', NULL, '', '2022-02-10', '2022-02-10'),
(19, 'Islahatun Nufusi', 'n', NULL, '', '2022-05-07', '2022-05-07');

-- --------------------------------------------------------

--
-- Table structure for table `mst_voc_ctrl`
--

CREATE TABLE `mst_voc_ctrl` (
  `vocabolary_id` int(11) NOT NULL,
  `topic_id` int(11) NOT NULL,
  `rt_id` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `related_topic_id` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `scope` text COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `plugins`
--

CREATE TABLE `plugins` (
  `id` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `options` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`options`)),
  `path` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `uid` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `reserve`
--

CREATE TABLE `reserve` (
  `reserve_id` int(11) NOT NULL,
  `member_id` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `biblio_id` int(11) NOT NULL,
  `item_code` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `reserve_date` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `search_biblio`
--

CREATE TABLE `search_biblio` (
  `biblio_id` int(11) NOT NULL,
  `title` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `edition` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `isbn_issn` varchar(32) COLLATE utf8_unicode_ci DEFAULT NULL,
  `author` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `topic` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `gmd` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `publisher` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `publish_place` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `language` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `classification` varchar(40) COLLATE utf8_unicode_ci DEFAULT NULL,
  `spec_detail_info` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `carrier_type` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `content_type` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `media_type` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `location` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `publish_year` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `notes` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `series_title` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `items` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `collection_types` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `call_number` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `opac_hide` smallint(1) NOT NULL DEFAULT 0,
  `promoted` smallint(1) NOT NULL DEFAULT 0,
  `labels` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `collation` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `image` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `input_date` datetime DEFAULT NULL,
  `last_update` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='index table for advance searching technique for SLiMS';

--
-- Dumping data for table `search_biblio`
--

INSERT INTO `search_biblio` (`biblio_id`, `title`, `edition`, `isbn_issn`, `author`, `topic`, `gmd`, `publisher`, `publish_place`, `language`, `classification`, `spec_detail_info`, `carrier_type`, `content_type`, `media_type`, `location`, `publish_year`, `notes`, `series_title`, `items`, `collection_types`, `call_number`, `opac_hide`, `promoted`, `labels`, `collation`, `image`, `input_date`, `last_update`) VALUES
(2, 'JUDUL', 'EDISI', 'ISBN/ISSN', 'Islahatun Nufusi', 'Islahatun Nufusi', 'Text', 'PENERBIT', 'TEMPA TERBIT', 'Indonesia', 'KLASIFIKASI', 'Info Detail Spesifik', 'audio cartridge', 'cartographic dataset', 'other', NULL, 'TAHUN TERBIT', 'Abstrak', 'JUDUL SERI', NULL, NULL, 'KLASIFIKASI', 0, 0, NULL, 'DESKRIPSI FISIK', 'f52afef93d06b5503b60a507e3377b80.jpg.jpg', '2022-05-07 18:38:06', '2022-05-07 18:38:35'),
(3, 'JUDUL', 'EDISI', 'ISBN/ISSN', 'Islahatun Nufusi', 'Islahatun Nufusi', 'Text', 'PENERBIT', 'TEMPA TERBIT', 'Indonesia', 'KLASIFIKASI', '', '', '', '', NULL, 'TAHUN TERBIT', 'Abstrak', 'JUDUL SERI', NULL, NULL, 'KLASIFIKASI', 0, 0, NULL, 'DESKRIPSI FISIK', 'f52afef93d06b5503b60a507e3377b80.jpg.jpg', '2022-05-07 18:42:20', '2022-05-07 18:42:20'),
(4, 'Ini Adalah Judul Buku', 'Edisi 2', '20000111111', 'Islahatun Nufusi', 'Islahatun Nufusi', 'Text', 'Isalahatun Nufusi', 'TEMPA TERBIT', 'Indonesia', 'KLASIFIKASI', '', '', '', '', NULL, '2019', 'Abstrak', 'JUDUL SERI', NULL, NULL, 'KLASIFIKASI', 0, 0, NULL, 'DESKRIPSI FISIK', 'f52afef93d06b5503b60a507e3377b80.jpg.jpg', '2022-05-07 18:42:20', '2022-05-07 18:42:20');

-- --------------------------------------------------------

--
-- Table structure for table `serial`
--

CREATE TABLE `serial` (
  `serial_id` int(11) NOT NULL,
  `date_start` date NOT NULL,
  `date_end` date DEFAULT NULL,
  `period` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `notes` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `biblio_id` int(11) DEFAULT NULL,
  `gmd_id` int(11) DEFAULT NULL,
  `input_date` date NOT NULL,
  `last_update` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `setting`
--

CREATE TABLE `setting` (
  `setting_id` int(3) NOT NULL,
  `setting_name` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `setting_value` text COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `setting`
--

INSERT INTO `setting` (`setting_id`, `setting_name`, `setting_value`) VALUES
(1, 'library_name', 's:23:\"Universitas Bnaten Jaya\";'),
(2, 'library_subname', 's:36:\"Perpustakaan Universitas Banten Jaya\";'),
(3, 'template', 'a:2:{s:5:\"theme\";s:6:\"akasia\";s:3:\"css\";s:25:\"template/akasia/style.css\";}'),
(4, 'admin_template', 'a:2:{s:5:\"theme\";s:7:\"default\";s:3:\"css\";s:32:\"admin_template/default/style.css\";}'),
(5, 'default_lang', 's:5:\"id_ID\";'),
(6, 'opac_result_num', 's:2:\"10\";'),
(7, 'enable_promote_titles', 'N;'),
(8, 'quick_return', 'b:1;'),
(9, 'allow_loan_date_change', 'b:0;'),
(10, 'loan_limit_override', 'b:0;'),
(11, 'enable_xml_detail', 'b:1;'),
(12, 'enable_xml_result', 'b:1;'),
(13, 'allow_file_download', 'b:1;'),
(14, 'session_timeout', 's:4:\"7200\";'),
(15, 'circulation_receipt', 'b:0;'),
(16, 'barcode_encoding', 's:7:\"code128\";'),
(17, 'ignore_holidays_fine_calc', 'b:0;'),
(18, 'barcode_print_settings', 'a:12:{s:19:\"barcode_page_margin\";d:0.200000000000000011102230246251565404236316680908203125;s:21:\"barcode_items_per_row\";i:3;s:20:\"barcode_items_margin\";d:0.1000000000000000055511151231257827021181583404541015625;s:17:\"barcode_box_width\";i:7;s:18:\"barcode_box_height\";i:5;s:27:\"barcode_include_header_text\";i:1;s:17:\"barcode_cut_title\";i:50;s:19:\"barcode_header_text\";s:0:\"\";s:13:\"barcode_fonts\";s:41:\"Arial, Verdana, Helvetica, \'Trebuchet MS\'\";s:17:\"barcode_font_size\";i:11;s:13:\"barcode_scale\";i:70;s:19:\"barcode_border_size\";i:1;}'),
(19, 'label_print_settings', 'a:10:{s:11:\"page_margin\";d:0.200000000000000011102230246251565404236316680908203125;s:13:\"items_per_row\";i:3;s:12:\"items_margin\";d:0.05000000000000000277555756156289135105907917022705078125;s:9:\"box_width\";i:8;s:10:\"box_height\";d:3.29999999999999982236431605997495353221893310546875;s:19:\"include_header_text\";i:1;s:11:\"header_text\";s:0:\"\";s:5:\"fonts\";s:41:\"Arial, Verdana, Helvetica, \'Trebuchet MS\'\";s:9:\"font_size\";i:11;s:11:\"border_size\";i:1;}'),
(20, 'membercard_print_settings', 'a:35:{s:18:\"front_header1_text\";s:41:\"Kartu Perpustakaan Unversitas Banten Jaya\";s:23:\"front_header1_font_size\";s:2:\"12\";s:18:\"front_header2_text\";s:36:\"Perpustakaan Universitas Banten Jaya\";s:23:\"front_header2_font_size\";s:2:\"12\";s:17:\"back_header1_text\";s:36:\"Perpustakaan Universitas Banten Jaya\";s:22:\"back_header1_font_size\";s:2:\"12\";s:17:\"back_header2_text\";s:86:\"Warung pojok di, Jl. Ciwaru Raya No.73, Cipare, Kec. Serang, Kota Serang, Banten 42117\";s:22:\"back_header2_font_size\";s:1:\"5\";s:12:\"header_color\";s:7:\"#0066ff\";s:5:\"rules\";s:604:\"&lt;ul&gt;\r\n	&lt;li&gt;Kartu ini&amp;nbsp; harus dibawa pada saat meminjam buku dan berlaku untuk dua buah buku selama satu minggu, setelahnya dapat diperpanjang dua kali&lt;/li&gt;\r\n	&lt;li&gt;Anggota harus menaati batas waktu peminjaman, jika melewati waktu pengembalian akan dikenakan denda sebesar/buku/hari&lt;/li&gt;\r\n	&lt;li&gt;Apabila buku yang dipinjam hilang, rusak, sobek dan kontor, peminjam harus mengganti sesuai peraturan.&lt;/li&gt;\r\n	&lt;li&gt;Jika kartu ini hilang, anggota segera melapor ke petugas dan membuat kartu baru,&amp;nbsp;dikenakan biaya Rp. 10.000;&lt;/li&gt;\r\n&lt;/ul&gt;\r\n\";s:15:\"rules_font_size\";s:1:\"8\";s:7:\"address\";s:105:\"&lt;p&gt;My Library&lt;br /&gt;\r\nwebsite: http://slims.web.id, email : librarian@slims.web.id&lt;/p&gt;\r\n\";s:17:\"address_font_size\";s:1:\"7\";s:9:\"box_width\";s:3:\"8.6\";s:10:\"box_height\";s:3:\"5.4\";s:6:\"factor\";s:12:\"37.795275591\";s:13:\"barcode_scale\";s:3:\"100\";s:4:\"city\";s:9:\"City Name\";s:5:\"title\";s:15:\"Library Manager\";s:9:\"officials\";s:14:\"Librarian Name\";s:12:\"officials_id\";s:12:\"Librarian ID\";s:16:\"include_id_label\";s:1:\"1\";s:18:\"include_name_label\";s:1:\"1\";s:17:\"include_pin_label\";s:1:\"1\";s:18:\"include_inst_label\";s:1:\"1\";s:19:\"include_email_label\";s:1:\"1\";s:21:\"include_address_label\";s:1:\"1\";s:21:\"include_barcode_label\";s:1:\"1\";s:21:\"include_expired_label\";s:1:\"1\";s:16:\"front_side_image\";s:8:\"logo.png\";s:15:\"back_side_image\";s:8:\"logo.png\";s:10:\"stamp_file\";s:9:\"stamp.png\";s:14:\"signature_file\";s:13:\"signature.png\";s:4:\"logo\";s:8:\"logo.png\";s:8:\"template\";s:3:\"old\";}'),
(21, 'enable_visitor_limitation', 's:1:\"0\";'),
(22, 'time_visitor_limitation', 's:2:\"60\";'),
(23, 'logo_image', 's:8:\"logo.png\";'),
(24, 'enable_counter_by_ip', 's:1:\"1\";'),
(25, 'allowed_counter_ip', 'a:1:{i:0;s:9:\"127.0.0.1\";}'),
(26, 'reserve_direct_database', 's:1:\"1\";'),
(27, 'reserve_on_loan_only', 's:1:\"0\";'),
(29, 'spellchecker_enabled', 'b:1;'),
(30, 'batch_item_code_pattern', 'a:1:{i:0;s:7:\"P00000S\";}');

-- --------------------------------------------------------

--
-- Table structure for table `stock_take`
--

CREATE TABLE `stock_take` (
  `stock_take_id` int(11) NOT NULL,
  `stock_take_name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `start_date` datetime NOT NULL,
  `end_date` datetime DEFAULT NULL,
  `init_user` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `total_item_stock_taked` int(11) DEFAULT NULL,
  `total_item_lost` int(11) DEFAULT NULL,
  `total_item_exists` int(11) DEFAULT 0,
  `total_item_loan` int(11) DEFAULT NULL,
  `stock_take_users` mediumtext COLLATE utf8_unicode_ci DEFAULT NULL,
  `is_active` int(1) NOT NULL DEFAULT 0,
  `report_file` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `stock_take_item`
--

CREATE TABLE `stock_take_item` (
  `stock_take_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `item_code` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `gmd_name` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `classification` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `coll_type_name` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `call_number` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `location` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` enum('e','m','u','l') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'm',
  `checked_by` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `last_update` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `system_log`
--

CREATE TABLE `system_log` (
  `log_id` int(11) NOT NULL,
  `log_type` enum('staff','member','system') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'staff',
  `id` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `log_location` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `sub_module` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `action` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `log_msg` text COLLATE utf8_unicode_ci NOT NULL,
  `log_date` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `system_log`
--

INSERT INTO `system_log` (`log_id`, `log_type`, `id`, `log_location`, `sub_module`, `action`, `log_msg`, `log_date`) VALUES
(1, 'staff', 'rikania92', 'Login', '', '', 'Login FAILED for user rikania92 from address ::1', '2022-02-10 06:54:29'),
(2, 'staff', 'admin123', 'Login', '', '', 'Login FAILED for user admin123 from address ::1', '2022-02-10 06:54:44'),
(3, 'staff', 'admin', 'Login', '', '', 'Login success for user admin from address ::1', '2022-02-10 06:54:57'),
(4, 'staff', '1', 'bibliography', '', '', 'Admin insert bibliographic data (Perguruan Tinggi dan Dampak Pandemi Coronavirus Disease (Covid-10)) with biblio_id (1)', '2022-02-10 07:00:51'),
(5, 'staff', '1', 'bibliography', '', '', 'Admin upload image file cover_BC_Covid19.jpeg.jpeg', '2022-02-10 07:09:46'),
(6, 'staff', '1', 'bibliography', '', '', 'Admin update bibliographic data (Perguruan Tinggi dan Dampak Pandemi Coronavirus Disease (Covid-10)) with biblio_id (1)', '2022-02-10 07:09:46'),
(7, 'staff', 'admin', 'Login', '', '', 'Login success for user admin from address ::1', '2022-02-10 08:49:53'),
(8, 'staff', 'admin', 'Login', '', '', 'Login success for user admin from address ::1', '2022-02-10 14:30:03'),
(9, 'member', '13425', 'Login', '', '', 'Login FAILED for member 13425 from address ::1', '2022-02-13 19:00:35'),
(10, 'staff', 'admin', 'Login', '', '', 'Login success for user admin from address ::1', '2022-02-13 19:06:06'),
(11, 'staff', '1', 'system', 'Global Config', 'Update', 'Admin change application global configuration', '2022-02-13 19:43:03'),
(12, 'staff', '1', 'system', '', '', 'Admin Log Out from application from address ::1', '2022-02-13 19:43:19'),
(13, 'staff', 'admin', 'Login', '', '', 'Login success for user admin from address ::1', '2022-02-13 19:43:27'),
(14, 'staff', 'admin', 'Login', '', '', 'Login success for user admin from address ::1', '2022-02-14 13:37:57'),
(15, 'staff', '1', 'system', 'Global Config', 'Update', 'Admin change application global configuration', '2022-02-14 14:18:48'),
(16, 'staff', '1', 'membership', 'Photo', 'Add', 'Admin upload image file member_1102171151.png', '2022-02-14 14:22:28'),
(17, 'staff', '1', 'membership', 'Add', 'OK', 'Admin add new member (Isalahatun Nufusi) with ID (1102171151)', '2022-02-14 14:22:28'),
(18, 'staff', '1', 'system', '', '', 'Admin Log Out from application from address ::1', '2022-02-14 15:11:12'),
(19, 'member', 'Isalahatun Nufusi', 'Login', '', '', 'Anggota Isalahatun Nufusi GAGAL masuk dari alamat ::1', '2022-02-14 15:11:46'),
(20, 'staff', 'Isalahatun Nufusi', 'Login', '', '', 'Login FAILED for user Isalahatun Nufusi from address ::1', '2022-02-14 15:12:18'),
(21, 'staff', 'admin', 'Login', '', '', 'Login success for user admin from address ::1', '2022-02-14 15:12:32'),
(22, 'staff', 'admin', 'Login', '', '', 'Login success for user admin from address ::1', '2022-02-16 10:04:45'),
(23, 'staff', 'admin', 'Login', '', '', 'Login success for user admin from address ::1', '2022-02-21 19:44:22'),
(24, 'staff', 'admin', 'Login', '', '', 'Login success for user admin from address ::1', '2022-03-02 08:45:35'),
(25, 'staff', '1', 'system', 'User', 'Add', 'Admin add new user (Siska) with username (Siska)', '2022-03-02 08:50:54'),
(26, 'staff', '1', 'system/user', 'User image', 'Upload', 'Admin upload image file user_siska.jpg', '2022-03-02 08:50:54'),
(27, 'staff', '1', 'System', 'Holiday', 'Set', 'Admin update holiday settings for sat, sun', '2022-03-02 08:51:28'),
(28, 'staff', '1', 'membership', 'Update', 'OK', 'Admin update member data (Isalahatun Nufusi) with ID (1102171151)', '2022-03-02 08:53:57'),
(29, 'staff', '1', 'system', '', '', 'Admin Log Out from application from address ::1', '2022-03-02 08:54:01'),
(30, 'staff', '123', 'Login', '', '', 'Login FAILED for user 123 from address ::1', '2022-03-02 08:54:11'),
(31, 'staff', 'admin', 'Login', '', '', 'Login success for user admin from address ::1', '2022-03-02 08:55:05'),
(32, 'staff', '1', 'bibliography', '', '', 'Admin DELETE bibliographic data (Perguruan Tinggi dan Dampak Pandemi Coronavirus Disease (Covid-10)) with biblio_id (1)', '2022-05-07 18:29:36'),
(33, 'staff', '1', 'membership', 'Delete', 'OK', 'Admin DELETE member data (Isalahatun Nufusi) with ID (1102171151)', '2022-05-07 18:29:55'),
(34, 'staff', '1', 'membership', 'Import', 'Add', 'Importing 3 members data from file : senayan_member_export (1).csv', '2022-05-07 18:30:33'),
(35, 'staff', '1', 'system', '', '', 'Admin Log Out from application from address ::1', '2022-05-07 18:31:41'),
(36, 'staff', 'admin', 'Login', '', '', 'Login success for user admin from address ::1', '2022-05-07 18:31:44'),
(37, 'staff', '1', 'bibliography', '', '', 'Admin upload image file f52afef93d06b5503b60a507e3377b80.jpg.jpg', '2022-05-07 18:38:06'),
(38, 'staff', '1', 'bibliography', '', '', 'Admin insert bibliographic data (Islam Itu Indah) with biblio_id (2)', '2022-05-07 18:38:06'),
(39, 'staff', '1', 'bibliography', '', '', 'Admin update bibliographic data (JUDUL) with biblio_id (2)', '2022-05-07 18:38:35'),
(40, 'staff', '1', 'bibliography', 'Import', '', 'Importing 2 bibliographic records from file : senayan_biblio_export (1).csv', '2022-05-07 18:42:20'),
(41, 'staff', '1', 'bibliography', 'Item', 'Add', 'Admin insert item data (01) with title (JUDUL)', '2022-05-07 18:46:26'),
(42, 'staff', 'admin', 'Login', '', '', 'Login success for user admin from address ::1', '2022-05-07 22:44:33'),
(43, 'staff', '1', 'system', '', '', 'Admin Log Out from application from address ::1', '2022-05-07 22:50:08'),
(44, 'staff', 'admin', 'Login', '', '', 'Login success for user admin from address ::1', '2022-05-09 10:59:21'),
(45, 'staff', '1', 'system', '', '', 'Admin Log Out from application from address ::1', '2022-05-09 10:59:36'),
(46, 'staff', 'admin', 'Login', '', '', 'Login success for user admin from address ::1', '2022-05-09 10:59:38'),
(47, 'staff', '1', 'system', '', '', 'Admin Log Out from application from address ::1', '2022-05-09 10:59:42'),
(48, 'staff', 'admin', 'Login', '', '', 'Login success for user admin from address ::1', '2022-05-09 10:59:44'),
(49, 'staff', '1', 'membership', 'Add', 'OK', 'Admin add new member (Siapa) with ID (1111111)', '2022-05-09 11:01:06'),
(50, 'staff', '1', 'system', '', '', 'Admin Log Out from application from address ::1', '2022-05-09 11:01:13'),
(51, 'staff', 'admin', 'Login', '', '', 'Login success for user admin from address ::1', '2022-05-09 11:01:36'),
(52, 'staff', '1', 'system', '', '', 'Admin Log Out from application from address ::1', '2022-05-09 11:01:58'),
(53, 'member', '1111111', 'Login', '', '', 'Anggota 1111111 berhasil masuk dari alamat ::1', '2022-05-09 11:02:21'),
(54, 'member', '', 'Login', '', '', 'Log Out from address ::1', '2022-05-09 11:02:57');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `username` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `realname` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `passwd` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `user_type` smallint(2) DEFAULT NULL,
  `user_image` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `social_media` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `last_login` datetime DEFAULT NULL,
  `last_login_ip` char(15) COLLATE utf8_unicode_ci DEFAULT NULL,
  `groups` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `admin_template` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `forgot` varchar(80) COLLATE utf8_unicode_ci DEFAULT NULL,
  `input_date` date DEFAULT NULL,
  `last_update` date DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `username`, `realname`, `passwd`, `email`, `user_type`, `user_image`, `social_media`, `last_login`, `last_login_ip`, `groups`, `admin_template`, `forgot`, `input_date`, `last_update`) VALUES
(1, 'admin', 'Admin', '$2y$10$93yunwlrQPyWz50KFi55K.D/1ArONhX8l2huzLw.XgJTy6XCPdDmO', NULL, NULL, NULL, NULL, '2022-05-09 11:01:36', '::1', 'a:1:{i:0;s:1:\"1\";}', NULL, NULL, '2021-06-16', '2021-06-16'),
(2, 'Siska', 'Siska', '$2y$10$l70rJuex1GxQ6NJwhE62UecymSLmIG9geGbrwL9A5CrmLq1H6R4Wy', 'siska@gmail.com', 3, 'user_siska.jpg', NULL, NULL, NULL, NULL, NULL, NULL, '2022-03-02', '2022-03-02');

-- --------------------------------------------------------

--
-- Table structure for table `user_group`
--

CREATE TABLE `user_group` (
  `group_id` int(11) NOT NULL,
  `group_name` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `input_date` date DEFAULT NULL,
  `last_update` date DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user_group`
--

INSERT INTO `user_group` (`group_id`, `group_name`, `input_date`, `last_update`) VALUES
(1, 'Administrator', '2021-06-16', '2021-06-16');

-- --------------------------------------------------------

--
-- Table structure for table `visitor_count`
--

CREATE TABLE `visitor_count` (
  `visitor_id` int(11) NOT NULL,
  `member_id` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `member_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `institution` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `checkin_date` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `backup_log`
--
ALTER TABLE `backup_log`
  ADD PRIMARY KEY (`backup_log_id`);

--
-- Indexes for table `biblio`
--
ALTER TABLE `biblio`
  ADD PRIMARY KEY (`biblio_id`),
  ADD KEY `references_idx` (`gmd_id`,`publisher_id`,`language_id`,`publish_place_id`),
  ADD KEY `classification` (`classification`),
  ADD KEY `biblio_flag_idx` (`opac_hide`,`promoted`),
  ADD KEY `rda_idx` (`content_type_id`,`media_type_id`,`carrier_type_id`),
  ADD KEY `uid` (`uid`);
ALTER TABLE `biblio` ADD FULLTEXT KEY `title_ft_idx` (`title`,`series_title`);
ALTER TABLE `biblio` ADD FULLTEXT KEY `notes_ft_idx` (`notes`);
ALTER TABLE `biblio` ADD FULLTEXT KEY `labels` (`labels`);

--
-- Indexes for table `biblio_attachment`
--
ALTER TABLE `biblio_attachment`
  ADD KEY `biblio_id` (`biblio_id`),
  ADD KEY `file_id` (`file_id`),
  ADD KEY `biblio_id_2` (`biblio_id`,`file_id`);

--
-- Indexes for table `biblio_author`
--
ALTER TABLE `biblio_author`
  ADD PRIMARY KEY (`biblio_id`,`author_id`),
  ADD KEY `biblio_id` (`biblio_id`),
  ADD KEY `author_id` (`author_id`);

--
-- Indexes for table `biblio_custom`
--
ALTER TABLE `biblio_custom`
  ADD PRIMARY KEY (`biblio_id`);

--
-- Indexes for table `biblio_log`
--
ALTER TABLE `biblio_log`
  ADD PRIMARY KEY (`biblio_log_id`),
  ADD KEY `realname` (`realname`),
  ADD KEY `biblio_id` (`biblio_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `ip` (`ip`),
  ADD KEY `action` (`action`),
  ADD KEY `affectedrow` (`affectedrow`),
  ADD KEY `date` (`date`);
ALTER TABLE `biblio_log` ADD FULLTEXT KEY `title` (`title`);
ALTER TABLE `biblio_log` ADD FULLTEXT KEY `rawdata` (`rawdata`);
ALTER TABLE `biblio_log` ADD FULLTEXT KEY `additional_information` (`additional_information`);

--
-- Indexes for table `biblio_relation`
--
ALTER TABLE `biblio_relation`
  ADD PRIMARY KEY (`biblio_id`,`rel_biblio_id`);

--
-- Indexes for table `biblio_topic`
--
ALTER TABLE `biblio_topic`
  ADD PRIMARY KEY (`biblio_id`,`topic_id`),
  ADD KEY `biblio_id` (`biblio_id`),
  ADD KEY `topic_id` (`topic_id`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`comment_id`);

--
-- Indexes for table `content`
--
ALTER TABLE `content`
  ADD PRIMARY KEY (`content_id`),
  ADD UNIQUE KEY `content_path` (`content_path`);
ALTER TABLE `content` ADD FULLTEXT KEY `content_title` (`content_title`);
ALTER TABLE `content` ADD FULLTEXT KEY `content_desc` (`content_desc`);

--
-- Indexes for table `files`
--
ALTER TABLE `files`
  ADD PRIMARY KEY (`file_id`);
ALTER TABLE `files` ADD FULLTEXT KEY `file_name` (`file_name`);
ALTER TABLE `files` ADD FULLTEXT KEY `file_dir` (`file_dir`);

--
-- Indexes for table `files_read`
--
ALTER TABLE `files_read`
  ADD PRIMARY KEY (`filelog_id`);

--
-- Indexes for table `fines`
--
ALTER TABLE `fines`
  ADD PRIMARY KEY (`fines_id`),
  ADD KEY `member_id` (`member_id`);

--
-- Indexes for table `group_access`
--
ALTER TABLE `group_access`
  ADD PRIMARY KEY (`group_id`,`module_id`);

--
-- Indexes for table `holiday`
--
ALTER TABLE `holiday`
  ADD PRIMARY KEY (`holiday_id`),
  ADD UNIQUE KEY `holiday_dayname` (`holiday_dayname`,`holiday_date`);

--
-- Indexes for table `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`item_id`),
  ADD UNIQUE KEY `item_code` (`item_code`),
  ADD KEY `uid` (`uid`),
  ADD KEY `item_references_idx` (`coll_type_id`,`location_id`,`item_status_id`),
  ADD KEY `biblio_id_idx` (`biblio_id`);

--
-- Indexes for table `kardex`
--
ALTER TABLE `kardex`
  ADD PRIMARY KEY (`kardex_id`),
  ADD KEY `fk_serial` (`serial_id`);

--
-- Indexes for table `loan`
--
ALTER TABLE `loan`
  ADD PRIMARY KEY (`loan_id`),
  ADD KEY `item_code` (`item_code`),
  ADD KEY `member_id` (`member_id`),
  ADD KEY `input_date` (`input_date`,`last_update`,`uid`);

--
-- Indexes for table `loan_history`
--
ALTER TABLE `loan_history`
  ADD PRIMARY KEY (`loan_id`),
  ADD KEY `member_name` (`member_name`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`member_id`),
  ADD KEY `member_name` (`member_name`),
  ADD KEY `member_type_id` (`member_type_id`);

--
-- Indexes for table `member_custom`
--
ALTER TABLE `member_custom`
  ADD PRIMARY KEY (`member_id`);

--
-- Indexes for table `mst_author`
--
ALTER TABLE `mst_author`
  ADD PRIMARY KEY (`author_id`),
  ADD UNIQUE KEY `author_name` (`author_name`,`authority_type`);

--
-- Indexes for table `mst_carrier_type`
--
ALTER TABLE `mst_carrier_type`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `media_type` (`carrier_type`),
  ADD KEY `code` (`code`);

--
-- Indexes for table `mst_coll_type`
--
ALTER TABLE `mst_coll_type`
  ADD PRIMARY KEY (`coll_type_id`),
  ADD UNIQUE KEY `coll_type_name` (`coll_type_name`);

--
-- Indexes for table `mst_content_type`
--
ALTER TABLE `mst_content_type`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `content_type` (`content_type`),
  ADD KEY `code` (`code`);

--
-- Indexes for table `mst_custom_field`
--
ALTER TABLE `mst_custom_field`
  ADD PRIMARY KEY (`dbfield`),
  ADD UNIQUE KEY `field_id` (`field_id`);

--
-- Indexes for table `mst_frequency`
--
ALTER TABLE `mst_frequency`
  ADD PRIMARY KEY (`frequency_id`);

--
-- Indexes for table `mst_gmd`
--
ALTER TABLE `mst_gmd`
  ADD PRIMARY KEY (`gmd_id`),
  ADD UNIQUE KEY `gmd_name` (`gmd_name`),
  ADD UNIQUE KEY `gmd_code` (`gmd_code`);

--
-- Indexes for table `mst_item_status`
--
ALTER TABLE `mst_item_status`
  ADD PRIMARY KEY (`item_status_id`),
  ADD UNIQUE KEY `item_status_name` (`item_status_name`);

--
-- Indexes for table `mst_label`
--
ALTER TABLE `mst_label`
  ADD PRIMARY KEY (`label_id`),
  ADD UNIQUE KEY `label_name` (`label_name`);

--
-- Indexes for table `mst_language`
--
ALTER TABLE `mst_language`
  ADD PRIMARY KEY (`language_id`),
  ADD UNIQUE KEY `language_name` (`language_name`);

--
-- Indexes for table `mst_loan_rules`
--
ALTER TABLE `mst_loan_rules`
  ADD PRIMARY KEY (`loan_rules_id`);

--
-- Indexes for table `mst_location`
--
ALTER TABLE `mst_location`
  ADD PRIMARY KEY (`location_id`),
  ADD UNIQUE KEY `location_name` (`location_name`);

--
-- Indexes for table `mst_media_type`
--
ALTER TABLE `mst_media_type`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `media_type` (`media_type`),
  ADD KEY `code` (`code`);

--
-- Indexes for table `mst_member_type`
--
ALTER TABLE `mst_member_type`
  ADD PRIMARY KEY (`member_type_id`),
  ADD UNIQUE KEY `member_type_name` (`member_type_name`);

--
-- Indexes for table `mst_module`
--
ALTER TABLE `mst_module`
  ADD PRIMARY KEY (`module_id`),
  ADD UNIQUE KEY `module_name` (`module_name`,`module_path`);

--
-- Indexes for table `mst_place`
--
ALTER TABLE `mst_place`
  ADD PRIMARY KEY (`place_id`),
  ADD UNIQUE KEY `place_name` (`place_name`);

--
-- Indexes for table `mst_publisher`
--
ALTER TABLE `mst_publisher`
  ADD PRIMARY KEY (`publisher_id`),
  ADD UNIQUE KEY `publisher_name` (`publisher_name`);

--
-- Indexes for table `mst_relation_term`
--
ALTER TABLE `mst_relation_term`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `mst_servers`
--
ALTER TABLE `mst_servers`
  ADD PRIMARY KEY (`server_id`);

--
-- Indexes for table `mst_supplier`
--
ALTER TABLE `mst_supplier`
  ADD PRIMARY KEY (`supplier_id`),
  ADD UNIQUE KEY `supplier_name` (`supplier_name`);

--
-- Indexes for table `mst_topic`
--
ALTER TABLE `mst_topic`
  ADD PRIMARY KEY (`topic_id`),
  ADD UNIQUE KEY `topic` (`topic`,`topic_type`);

--
-- Indexes for table `mst_voc_ctrl`
--
ALTER TABLE `mst_voc_ctrl`
  ADD PRIMARY KEY (`vocabolary_id`);

--
-- Indexes for table `plugins`
--
ALTER TABLE `plugins`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `reserve`
--
ALTER TABLE `reserve`
  ADD PRIMARY KEY (`reserve_id`),
  ADD KEY `references_idx` (`member_id`,`biblio_id`),
  ADD KEY `item_code_idx` (`item_code`);

--
-- Indexes for table `search_biblio`
--
ALTER TABLE `search_biblio`
  ADD UNIQUE KEY `biblio_id` (`biblio_id`),
  ADD KEY `add_indexes` (`gmd`,`publisher`,`publish_place`,`language`,`classification`,`publish_year`,`call_number`),
  ADD KEY `add_indexes2` (`opac_hide`,`promoted`),
  ADD KEY `rda_indexes` (`carrier_type`,`media_type`,`content_type`);
ALTER TABLE `search_biblio` ADD FULLTEXT KEY `title` (`title`);
ALTER TABLE `search_biblio` ADD FULLTEXT KEY `author` (`author`);
ALTER TABLE `search_biblio` ADD FULLTEXT KEY `topic` (`topic`);
ALTER TABLE `search_biblio` ADD FULLTEXT KEY `location` (`location`);
ALTER TABLE `search_biblio` ADD FULLTEXT KEY `items` (`items`);
ALTER TABLE `search_biblio` ADD FULLTEXT KEY `collection_types` (`collection_types`);
ALTER TABLE `search_biblio` ADD FULLTEXT KEY `labels` (`labels`);

--
-- Indexes for table `serial`
--
ALTER TABLE `serial`
  ADD PRIMARY KEY (`serial_id`),
  ADD KEY `fk_serial_biblio` (`biblio_id`),
  ADD KEY `fk_serial_gmd` (`gmd_id`);

--
-- Indexes for table `setting`
--
ALTER TABLE `setting`
  ADD PRIMARY KEY (`setting_id`),
  ADD UNIQUE KEY `setting_name` (`setting_name`);

--
-- Indexes for table `stock_take`
--
ALTER TABLE `stock_take`
  ADD PRIMARY KEY (`stock_take_id`);

--
-- Indexes for table `stock_take_item`
--
ALTER TABLE `stock_take_item`
  ADD PRIMARY KEY (`stock_take_id`,`item_id`),
  ADD UNIQUE KEY `item_code` (`item_code`),
  ADD KEY `status` (`status`),
  ADD KEY `item_properties_idx` (`gmd_name`,`classification`,`coll_type_name`,`location`);

--
-- Indexes for table `system_log`
--
ALTER TABLE `system_log`
  ADD PRIMARY KEY (`log_id`),
  ADD KEY `log_type` (`log_type`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD KEY `realname` (`realname`);

--
-- Indexes for table `user_group`
--
ALTER TABLE `user_group`
  ADD PRIMARY KEY (`group_id`),
  ADD UNIQUE KEY `group_name` (`group_name`);

--
-- Indexes for table `visitor_count`
--
ALTER TABLE `visitor_count`
  ADD PRIMARY KEY (`visitor_id`),
  ADD KEY `member_id` (`member_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `backup_log`
--
ALTER TABLE `backup_log`
  MODIFY `backup_log_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `biblio`
--
ALTER TABLE `biblio`
  MODIFY `biblio_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `biblio_log`
--
ALTER TABLE `biblio_log`
  MODIFY `biblio_log_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `content`
--
ALTER TABLE `content`
  MODIFY `content_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `files`
--
ALTER TABLE `files`
  MODIFY `file_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `files_read`
--
ALTER TABLE `files_read`
  MODIFY `filelog_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `fines`
--
ALTER TABLE `fines`
  MODIFY `fines_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `holiday`
--
ALTER TABLE `holiday`
  MODIFY `holiday_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `item`
--
ALTER TABLE `item`
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `kardex`
--
ALTER TABLE `kardex`
  MODIFY `kardex_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `loan`
--
ALTER TABLE `loan`
  MODIFY `loan_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `mst_author`
--
ALTER TABLE `mst_author`
  MODIFY `author_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `mst_carrier_type`
--
ALTER TABLE `mst_carrier_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `mst_coll_type`
--
ALTER TABLE `mst_coll_type`
  MODIFY `coll_type_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `mst_content_type`
--
ALTER TABLE `mst_content_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `mst_custom_field`
--
ALTER TABLE `mst_custom_field`
  MODIFY `field_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `mst_frequency`
--
ALTER TABLE `mst_frequency`
  MODIFY `frequency_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `mst_gmd`
--
ALTER TABLE `mst_gmd`
  MODIFY `gmd_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `mst_label`
--
ALTER TABLE `mst_label`
  MODIFY `label_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `mst_loan_rules`
--
ALTER TABLE `mst_loan_rules`
  MODIFY `loan_rules_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `mst_media_type`
--
ALTER TABLE `mst_media_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `mst_member_type`
--
ALTER TABLE `mst_member_type`
  MODIFY `member_type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `mst_module`
--
ALTER TABLE `mst_module`
  MODIFY `module_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `mst_place`
--
ALTER TABLE `mst_place`
  MODIFY `place_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `mst_publisher`
--
ALTER TABLE `mst_publisher`
  MODIFY `publisher_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `mst_relation_term`
--
ALTER TABLE `mst_relation_term`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `mst_servers`
--
ALTER TABLE `mst_servers`
  MODIFY `server_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `mst_supplier`
--
ALTER TABLE `mst_supplier`
  MODIFY `supplier_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `mst_topic`
--
ALTER TABLE `mst_topic`
  MODIFY `topic_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `mst_voc_ctrl`
--
ALTER TABLE `mst_voc_ctrl`
  MODIFY `vocabolary_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reserve`
--
ALTER TABLE `reserve`
  MODIFY `reserve_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `serial`
--
ALTER TABLE `serial`
  MODIFY `serial_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `setting`
--
ALTER TABLE `setting`
  MODIFY `setting_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `stock_take`
--
ALTER TABLE `stock_take`
  MODIFY `stock_take_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `system_log`
--
ALTER TABLE `system_log`
  MODIFY `log_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_group`
--
ALTER TABLE `user_group`
  MODIFY `group_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `visitor_count`
--
ALTER TABLE `visitor_count`
  MODIFY `visitor_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Database: `test`
--
CREATE DATABASE IF NOT EXISTS `test` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `test`;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
