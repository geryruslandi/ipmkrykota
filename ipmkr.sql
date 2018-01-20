-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 17, 2016 at 11:46 AM
-- Server version: 5.6.25
-- PHP Version: 5.6.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ipmkr`
--

-- --------------------------------------------------------

--
-- Table structure for table `anggota`
--

CREATE TABLE IF NOT EXISTS `anggota` (
  `id_anggota` int(11) NOT NULL,
  `nama_anggota` varchar(50) NOT NULL,
  `universitas` varchar(50) NOT NULL,
  `prodi` varchar(50) NOT NULL,
  `tahun_masuk` int(4) NOT NULL,
  `nomor_kontak` varchar(50) NOT NULL,
  `tanggal_bergabung` datetime NOT NULL,
  `status` enum('Pending','Accept') NOT NULL,
  `alamat_jogja` varchar(50) NOT NULL,
  `alamat_asal` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=40 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `anggota`
--

INSERT INTO `anggota` (`id_anggota`, `nama_anggota`, `universitas`, `prodi`, `tahun_masuk`, `nomor_kontak`, `tanggal_bergabung`, `status`, `alamat_jogja`, `alamat_asal`) VALUES
(11, 'Citra Widya', 'Universitas Ahmad Dahlan', 'Psikologi', 2012, '087838610855', '2015-08-17 20:17:03', 'Accept', 'Jl. Pamukti No.15 Giwangan, Umbulharjo', 'Jl. Pantai Impian Gg. Udang No. 48 Tanjungpinang'),
(12, 'Ghea Ulfa Stefani', 'Universitas Muhammadiyah Yogyakarta', 'Komunikasi', 2012, '082137354434', '2015-08-17 21:24:43', 'Accept', 'Padma Residence, Jl. Ngentak, Bangunjiwo, Bantul', 'Jl. Kuatan Gg. Sejahtera Blok A No. 4'),
(13, 'Adelia Anthony', 'Universitas Ahmad Dahlan', 'Kesehatan Masyarakat', 2012, '085668812126', '2015-08-17 21:35:38', 'Accept', 'Perumahan Polri Gowok, Blok C 2 No.112', 'Perumahan Bintan Permai, Blok B1 Rw/rt 4/3 Kelurah'),
(14, 'Windhi Rizka Vinasar', 'Universitas Negeri Yogyakarta', 'Filsafat Dan Sosiologi Pendidikan', 2012, '087738306313', '2015-08-18 15:03:39', 'Accept', 'Jalan Perumnas I, Komplek Seturan Asri No. 8 Depok', 'Jalan R.h.fisabilillah Gg. Indrapura No. 7 Km 5 At'),
(15, 'Angga Tri Muryanto', 'Universitas Muhammadiyah Yogyakarta', 'Teknik Industri', 2013, '082242019027', '2015-08-18 15:06:38', 'Accept', 'Warungboto Iv', 'Jalan Ganet Blok A, No. 2'),
(16, 'Martha Lina', 'Universitas Muhammadiyah Yogyakarta', 'Biologi', 2013, '08979828806', '2015-08-18 15:11:45', 'Accept', 'Perum Polri Gowok Blok C No. 112', 'Jalan Pramuka Lr. Nias No 41'),
(17, 'Qurratu Ayanin', 'Universitas Muhammadiyah Yogyakarta', 'Teknik Sipil', 2013, '081991342412', '2015-08-18 15:15:35', 'Accept', 'Perum Sbi Blok E No. 158, Bantul Yogyakarta', 'Jalan Pramuka Lr. Bali No 38'),
(18, 'Marina Yolanda', 'Universitas Ahmad Dahlan', 'Psikologi', 2013, '', '2015-08-18 15:18:36', 'Accept', 'Jalan Glagahsari, Gg Mangga, No. 532', 'Jalan Soekarno Hatta, Perum Nila, Blok E No. 42'),
(19, 'Chandra Ariwiyanto', 'Universitas Muhammadiyah Yogyakarta', 'Teknik Informatika', 2012, '082136200269', '2015-08-18 15:21:30', 'Accept', 'Jalan Babaran Gg. Mutiara No. 32b', 'Jalan Kebayoran Baru Blok H No. 420'),
(20, 'M. Afhendo Hermawan', 'Universitas Muhammadiyah Yogyakarta', 'Kedokteran', 2013, '081991663561', '2015-08-18 15:23:33', 'Accept', 'Jalan Pamularsih 37d Wirobrajan', 'Jalan Dompak Perumnas Seijang Blok B No. 32'),
(21, 'Elsa Utami', 'Universitas Ahmad Dahlan', 'Kesehatan Masyarakat', 2012, '081991658272', '2015-08-18 15:25:54', 'Accept', 'Jalan Babaran Gg. Mutiara No. 700d', 'Jalan Ir. Sutami Gg.nyatuh No.5'),
(22, 'Raja Yulianita Sarazwati', 'Universitas Islam Indonesia', 'Akuntasi', 2013, '085868648641', '2015-08-18 15:29:39', 'Accept', 'Jalan Kusumanegara Gg. Kepodang Kel. Tahunan Kec. ', 'Jalan R.h.fisabilillah Gg. Menur 6 No.27'),
(23, 'Raja Aisyah Mutia', 'Universitas Muhammadiyah Yogyakarta', 'Ilmu Komunikasi', 2013, '0811779876', '2015-08-18 15:32:26', 'Accept', 'Jalan Ontoredjo No.4a, Wirobrajan', 'Jalan Pelabuhan I Pulau Penyengat'),
(25, 'Abdul Farhan Jihad', 'Universitas Ahmad Dahlan', 'Ilmu Kesehatan Masyarakat', 2013, '08983880280', '2015-08-18 15:39:36', 'Accept', 'Warungboto No. 709', 'Jalan Adi Sucipto Kp. Sumber Karya, Rt/rw 1/7 Km 1'),
(26, 'Rama Spadya Putra', 'Universitas Islam Indonesia', 'Hukum', 2012, '082221295711', '2015-08-18 15:42:35', 'Accept', 'Jalan Taman Siswa Gg. Joyonegaran Mg 926a', 'Jalan Hajiungar Lr. Tabuan No 12'),
(27, 'Richard Riowani', 'Universitas Ahmad Dahlan', 'Psikologi', 2012, '081270178362', '2015-08-18 15:51:25', 'Accept', 'Jalan Babaran Gg. Mutiara No. 32b', 'Jalan Wakatobi No. 16'),
(29, 'J Calvin P', 'Institut Pertanian Stiper (instiper), Sleman', 'Teknik Pertanian', 2013, '081268150656', '2015-08-18 16:49:52', 'Accept', 'Jalan Babaran Gg. Mutiara No. 32b', 'Jalan Pantai Trikora Kp. Sei Kelubi Rw/rt 4/10'),
(30, 'Ade Prayetno', 'Universitas Ahmad Dahlan', 'Kesehatan Masyarakat', 2013, '081228000815', '2015-08-18 16:52:00', 'Accept', 'Jalan Babaran Gg. Mutiara No. 32b', 'Jalan D.i Pandjaitan Perum. Taman Harapan Indah Bl'),
(31, 'Shafie Yunia Ulfah', 'Universitas Ahmad Dahlan', 'Farmasi', 2013, '081991417017', '2015-08-18 18:08:00', 'Accept', 'Jalan Janturan 54 Rt/rw 16/4 Janturan Umbulharjo Y', 'Perum Mahkota Alam Permai Blok I No. 17 Km 11 Tanj'),
(32, 'Muhammad Buzaar Ar Rifa''i', 'Universitas Ahmad Dahlan', 'Psikologi', 2013, '081991681994', '2015-08-18 18:10:45', 'Accept', 'Jalan Nitikan Baru No. 71 Sorosutan Umbulharjo', 'Jalan Sumatera Blok A No.162 '),
(33, 'Syarifah Rizka', 'Universitas Muhammadiyah Yogyakarta', 'Ilmu Komunikasi', 2012, '082220022331', '2015-08-18 18:14:04', 'Accept', 'Jalan Gatak Tamantirto Kasihan Bantul', 'Jalan R.h.fisabilillah Gg. Garuda 3 No.42'),
(35, 'Ilham Pancanandra', 'Universitas Muhammadiyah Yogyakarta', 'Ilmu Komunikasi', 2013, '081991271444', '2015-08-18 18:26:33', 'Accept', 'Jalan Pamularsih 37d Wirobrajan Kelur Patangpuluh', 'Jalan Bunguran No.52 Kec. Bukit Bestari Tanjungpin'),
(36, 'Rahmat Iqbal', 'Universitas Islam Indonesia', 'Teknik Informatika', 2010, '082179273322', '2015-08-18 18:59:04', 'Accept', 'Candi Iii Rt/rw 3/6 Jalan Kaliurang Km 12, Sardono', 'Jalan Pramuka Lr. Belitung No. 37'),
(37, 'Prayogi Ramadhan', 'Universitas Ahmad Dahlan', 'Ekonomi', 2010, '082389139041', '2015-08-18 19:01:00', 'Accept', 'Jalan Babaran Gg. Mutiara No. 32b', 'Jalan Soekarno Hatta, Perum Nila, Blok E No. 42'),
(38, 'Murnoto', 'Universitas Islam Indonesia', 'Ilmu Komunikasi', 2012, '081229251339', '2015-08-18 19:02:27', 'Accept', 'Jalan Kaliurang Km 10 No. 2', 'Jalan Sumatera Blok C No.127'),
(39, 'Bob Randa', 'Universitas Ahmad Dahlan', 'Pend. Bahasa Inggris', 2012, '083807252336', '2015-08-18 19:04:55', 'Accept', 'Jalan Nitikan Baru No. 71 Sorosutan Umbulharjo', 'Sei Jang Jalan. Sambu No. 7');

-- --------------------------------------------------------

--
-- Table structure for table `artikel`
--

CREATE TABLE IF NOT EXISTS `artikel` (
  `id` int(11) NOT NULL,
  `id_category` int(11) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `tgl_post` date NOT NULL,
  `lokasi` varchar(50) NOT NULL,
  `isi` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=57 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `artikel`
--

INSERT INTO `artikel` (`id`, `id_category`, `judul`, `tgl_post`, `lokasi`, `isi`) VALUES
(3, 2, 'Artikel Berita tes', '2016-05-31', 'asdasda', 'asdasdas'),
(4, 1, 'IPMKRY K.Kota TPI Futsal 11', '2016-05-07', 'Lapangan Futsal', 'testing hohohohohohoho'),
(5, 1, 'IPMKRY K.Kota TPI Futsal2222', '2016-05-07', 'Lapangan Futsal', 'testing hohohohohohoho'),
(6, 1, 'IPMKRY K.Kota TPI Futsal3333333', '2016-05-07', 'Lapangan Futsal', 'testing hohohohohohoho'),
(7, 1, 'IPMKRY K.Kota TPI Futsal44', '2016-05-07', 'Lapangan Futsal', 'testing hohohohohohoho'),
(8, 1, 'IPMKRY K.Kota TPI Futsal555', '2016-05-07', 'Lapangan Futsal', 'testing hohohohohohoho'),
(9, 1, 'IPMKRY K.Kota TPI Futsal777', '2016-05-07', 'Lapangan Futsal', 'testing hohohohohohoho'),
(10, 1, 'IPMKRY K.Kota TPI Futsal88', '2016-05-07', 'Lapangan Futsal', 'testing hohohohohohoho'),
(11, 1, 'IPMKRY K.Kota TPI Futsal99', '2016-05-07', 'Lapangan 10', 'testing hohohohohohoho'),
(12, 1, 'IPMKRY K.Kota TPI 11', '2016-05-07', 'Lapangan 12', 'testing hohohohohohoho'),
(13, 1, 'IPMKRY K.Kota TPI 13', '2016-05-07', 'Lapangan 14', 'testing hohohohohohoho'),
(14, 1, 'IPMKRY K.Kota TPI 15', '2016-05-07', 'Lapangan 16', 'testing hohohohohohoho'),
(15, 1, 'IPMKRY K.Kota TPI 17', '2016-05-07', 'Lapangan 18', 'testing hohohohohohoho'),
(16, 1, 'IPMKRY K.Kota TPI 19', '2016-05-07', 'Lapangan 20', 'testing hohohohohohoho'),
(17, 1, 'IPMKRY K.Kota TPI 21', '2016-05-07', 'Lapangan 22', 'testing hohohohohohoho'),
(18, 1, 'IPMKRY K.Kota TPI 23', '2016-05-07', 'Lapangan 24', 'testing hohohohohohoho'),
(19, 1, 'IPMKRY K.Kota TPI 25', '2016-05-07', 'Lapangan 26', 'testing hohohohohohoho'),
(20, 1, 'IPMKRY K.Kota TPI 27', '2016-05-07', 'Lapangan 28', 'testing hohohohohohoho'),
(21, 1, 'IPMKRY K.Kota TPI 29', '2016-05-07', 'Lapangan 30', 'testing hohohohohohoho'),
(22, 1, 'IPMKRY K.Kota TPI 31', '2016-05-07', 'Lapangan 32', 'testing hohohohohohoho'),
(23, 1, 'IPMKRY K.Kota TPI 33', '2016-05-07', 'Lapangan 34', 'testing hohohohohohoho'),
(24, 1, 'IPMKRY K.Kota TPI 35', '2016-05-07', 'Lapangan 36', 'testing hohohohohohoho'),
(25, 1, 'IPMKRY K.Kota TPI 37', '2016-05-07', 'Lapangan 38', 'testing hohohohohohoho'),
(26, 1, 'IPMKRY K.Kota TPI 39', '2016-05-07', 'Lapangan 40', 'testing hohohohohohoho'),
(27, 1, 'IPMKRY K.Kota TPI 41', '2016-05-07', 'Lapangan 41', 'testing hohohohohohoho'),
(28, 1, 'IPMKRY K.Kota TPI Futsal88', '2016-05-07', 'Lapangan Futsal', 'testing hohohohohohoho'),
(29, 1, 'IPMKRY K.Kota TPI Futsal29', '2016-05-07', 'Lapangan Futsal', 'testing hohohohohohoho'),
(31, 1, 'IPMKRY K.Kota TPI Futsal31', '2016-05-07', 'Lapangan Futsal', 'testing hohohohohohoho'),
(32, 1, 'IPMKRY K.Kota TPI Futsal32', '2016-05-07', 'Lapangan Futsal', 'testing hohohohohohoho'),
(33, 1, 'IPMKRY K.Kota TPI Futsal33', '2016-05-07', 'Lapangan Futsal', 'testing hohohohohohoho'),
(34, 1, 'IPMKRY K.Kota TPI Futsal34', '2016-05-07', 'Lapangan Futsal', 'testing hohohohohohoho'),
(35, 1, 'IPMKRY K.Kota TPI Futsal35', '2016-05-07', 'Lapangan Futsal', 'testing hohohohohohoho'),
(36, 1, 'IPMKRY K.Kota TPI Futsal36', '2016-05-07', 'Lapangan Futsal', 'testing hohohohohohoho'),
(37, 1, 'IPMKRY K.Kota TPI Futsal37', '2016-05-07', 'Lapangan Futsal', 'testing hohohohohohoho'),
(38, 1, 'IPMKRY K.Kota TPI Futsal38', '2016-05-07', 'Lapangan Futsal', 'testing hohohohohohoho'),
(39, 1, 'IPMKRY K.Kota TPI Futsal39', '2016-05-07', 'Lapangan Futsal', 'testing hohohohohohoho'),
(40, 1, 'IPMKRY K.Kota TPI Futsal40', '2016-05-07', 'Lapangan Futsal', 'testing hohohohohohoho'),
(41, 1, 'IPMKRY K.Kota TPI Futsal41', '2016-05-07', 'Lapangan Futsal', 'testing hohohohohohoho'),
(42, 1, 'IPMKRY K.Kota TPI Futsal42', '2016-05-07', 'Lapangan Futsal', 'testing hohohohohohoho'),
(43, 1, 'IPMKRY K.Kota TPI Futsal43', '2016-05-07', 'Lapangan Futsal', 'testing hohohohohohoho'),
(44, 1, 'IPMKRY K.Kota TPI Futsal44', '2016-05-07', 'Lapangan Futsal', 'testing hohohohohohoho'),
(45, 1, 'IPMKRY K.Kota TPI Futsal45', '2016-05-07', 'Lapangan Futsal', 'testing hohohohohohoho'),
(46, 1, 'IPMKRY K.Kota TPI Futsal46', '2016-05-07', 'Lapangan Futsal', 'testing hohohohohohoho'),
(47, 1, 'IPMKRY K.Kota TPI Futsal47', '2016-05-07', 'Lapangan Futsal', 'testing hohohohohohoho'),
(48, 1, 'IPMKRY K.Kota TPI Futsal48', '2016-05-07', 'Lapangan Futsal', 'testing hohohohohohoho'),
(50, 1, 'IPMKRY K.Kota TPI Futsal50', '2016-05-07', 'Lapangan Futsal', 'testing hohohohohohoho'),
(51, 1, 'IPMKRY K.Kota TPI Futsal51', '2016-05-07', 'Lapangan Futsal', 'testing hohohohohohoho'),
(52, 1, 'IPMKRY K.Kota TPI Futsal52', '2016-05-07', 'Lapangan Futsal', 'testing hohohohohohoho'),
(53, 1, 'IPMKRY K.Kota TPI Futsal53', '2016-05-07', 'Lapangan Futsal', 'testing hohohohohohoho'),
(54, 1, 'IPMKRY K.Kota TPI Futsal54', '2016-05-07', 'Lapangan Futsal', 'testing hohohohohohoho'),
(55, 1, 'IPMKRY K.Kota TPI Futsal55', '2016-05-07', 'Lapangan Futsal', 'testing hohohohohohoho'),
(56, 2, 'berita weey', '2016-05-17', 'asdasdsa', 'sdfvawfsds');

-- --------------------------------------------------------

--
-- Table structure for table `category_artikel`
--

CREATE TABLE IF NOT EXISTS `category_artikel` (
  `id` int(11) NOT NULL,
  `nama` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category_artikel`
--

INSERT INTO `category_artikel` (`id`, `nama`) VALUES
(1, 'Agenda'),
(2, 'Berita');

-- --------------------------------------------------------

--
-- Stand-in structure for view `daftar_agenda`
--
CREATE TABLE IF NOT EXISTS `daftar_agenda` (
`id` int(11)
,`id_category` int(11)
,`judul` varchar(50)
,`tgl_post` date
,`lokasi` varchar(50)
,`isi` text
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `daftar_artikel`
--
CREATE TABLE IF NOT EXISTS `daftar_artikel` (
`id` int(11)
,`id_category` int(11)
,`judul` varchar(50)
,`tgl_post` date
,`lokasi` varchar(50)
,`isi` text
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `daftar_berita`
--
CREATE TABLE IF NOT EXISTS `daftar_berita` (
`id` int(11)
,`id_category` int(11)
,`judul` varchar(50)
,`tgl_post` date
,`lokasi` varchar(50)
,`isi` text
);

-- --------------------------------------------------------

--
-- Table structure for table `departemen`
--

CREATE TABLE IF NOT EXISTS `departemen` (
  `id_dep` int(20) NOT NULL,
  `nama_dep` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `departemen`
--

INSERT INTO `departemen` (`id_dep`, `nama_dep`) VALUES
(1, 'Badan Pengurus Harian'),
(2, 'Sumber Daya Manusia'),
(3, 'Informasi Komunikasi'),
(4, 'Kewirausahaan'),
(5, 'Agama'),
(6, 'Olahraga'),
(7, 'Seni Budaya'),
(8, 'Lembaga');

-- --------------------------------------------------------

--
-- Table structure for table `kepengurusan`
--

CREATE TABLE IF NOT EXISTS `kepengurusan` (
  `id` varchar(4) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jk` char(1) NOT NULL,
  `jabatan` varchar(50) NOT NULL,
  `departemen` int(20) NOT NULL,
  `periode` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kepengurusan`
--

INSERT INTO `kepengurusan` (`id`, `nama`, `jk`, `jabatan`, `departemen`, `periode`) VALUES
('agm1', 'Raja Ahmad Anzaki', 'L', 'Koordinator', 5, '2016 / 2017'),
('agm2', 'Hana Permatasari', 'P', 'Anggota', 5, '2016 / 2017'),
('agm3', 'Ahmad Fadli', 'L', 'Anggota', 5, '2016 / 2017'),
('agm4', 'Riri Rizki', 'P', 'Anggota', 5, '2016 / 2017'),
('agm5', 'Nurtia Amanda', 'P', 'Anggota', 5, '2016 / 2017'),
('bph1', 'Ilham Panca Nanda', 'L', 'Ketua', 1, '2016 / 2017'),
('bph2', 'Junior Calvin Pangabean', 'L', 'Wakil Ketua 1', 1, '2016 / 2017'),
('bph3', 'M.Afhendo Hermawan', 'L', 'Wakil Ketua 2', 1, '2016 / 2017'),
('bph4', 'Raja Aisyah Mutia Zafira', 'P', 'Sekretaris', 1, '2016 / 2017'),
('bph5', 'Windhi Rizka Vina Sari', 'P', 'Bendahara', 1, '2016 / 2017'),
('inf1', 'Gery Ruslandi', 'L', 'Koordinator', 3, '2016 / 2017'),
('inf2', 'Yusuf M.Redinal', 'L', 'Anggota', 3, '2016 / 2017'),
('inf3', 'Novi Asti Lalasati', 'P', 'Anggota', 3, '2016 / 2017'),
('inf4', 'Aulia Urrahmah', 'P', 'Anggota', 3, '2016 / 2017'),
('inf5', 'Nuri', 'P', 'Anggota', 3, '2016 / 2017'),
('kwu1', 'Vincentia Nur Septiani ', 'P', 'Koordinator', 4, '2016 / 2017'),
('kwu2', 'Mohamad Chalek', 'L', 'Anggota', 4, '2016 / 2017'),
('kwu3', 'Nindy Asmelia', 'P', 'Anggota', 4, '2016 / 2017'),
('kwu4', 'Dewi Nor Fistiani', 'P', 'Anggota', 4, '2016 / 2017'),
('kwu5', 'Siti Alysha Astari', 'P', 'Anggota', 4, '2016 / 2017'),
('lbg1', 'Shafur Bahtiar', 'L', 'Manager Sanggar', 8, '2016 / 2017'),
('lbg2', 'Oki', 'L', 'Ketua  Asrama Putra', 8, '2016 / 2017'),
('lbg3', 'Dinda Rachmadani', 'P', 'Ketua Asrama Putri', 8, '2016 / 2017'),
('olr1', 'Ian Saputra', 'L', 'Koordinator', 6, '2016 / 2017'),
('olr2', 'Rambun', 'L', 'Anggota', 6, '2016 / 2017'),
('olr3', 'Raja Rizky', 'L', 'Anggota', 6, '2016 / 2017'),
('olr4', 'Anom', 'L', 'Anggota', 6, '2016 / 2017'),
('sbd1', 'Maya Audina Piratiwi', 'P', 'Koordinator', 7, '2016 / 2017'),
('sbd2', 'Clarinza Destya A', 'P', 'Anggota', 7, '2016 / 2017'),
('sbd3', 'Anindiyah Sekarini', 'P', 'Anggota', 7, '2016 / 2017'),
('sbd4', 'Suzie Anggraini', 'P', 'Anggota', 7, '2016 / 2017'),
('sdm1', 'Fadjar Azima', 'L', 'Koordinator', 2, '2016 / 2017'),
('sdm2', 'Septia Rube Yanti', 'P', 'Anggota', 2, '2016 / 2017'),
('sdm3', 'Jalu Dwi Prasetya', 'L', 'Anggota', 2, '2016 / 2017'),
('sdm4', 'Widya', 'P', 'Anggota', 2, '2016 / 2017'),
('sdm5', 'Bayu Aditya W', 'L', 'Anggota', 2, '2016 / 2017');

-- --------------------------------------------------------

--
-- Table structure for table `pesan`
--

CREATE TABLE IF NOT EXISTS `pesan` (
  `id_pesan` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pesan` text NOT NULL,
  `tanggal` datetime NOT NULL,
  `status` enum('unread','read') NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pesan`
--

INSERT INTO `pesan` (`id_pesan`, `nama`, `email`, `pesan`, `tanggal`, `status`) VALUES
(1, 'testing', 'hohoho', 'siip', '2016-05-07 17:29:36', 'read');

-- --------------------------------------------------------

--
-- Stand-in structure for view `sm_agenda`
--
CREATE TABLE IF NOT EXISTS `sm_agenda` (
`id` int(11)
,`judul` varchar(50)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `sm_artikel`
--
CREATE TABLE IF NOT EXISTS `sm_artikel` (
`id` int(11)
,`id_category` int(11)
,`judul` varchar(50)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `sm_berita`
--
CREATE TABLE IF NOT EXISTS `sm_berita` (
`id` int(11)
,`judul` varchar(50)
);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `password`, `nama`) VALUES
('geryruslandi', 'qwerty', 'Gery Ruslandi'),
('ricosster', '617cb7270a3216bd84108ade4e9d7c23', 'Rico Julian');

-- --------------------------------------------------------

--
-- Structure for view `daftar_agenda`
--
DROP TABLE IF EXISTS `daftar_agenda`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `daftar_agenda` AS select `artikel`.`id` AS `id`,`artikel`.`id_category` AS `id_category`,`artikel`.`judul` AS `judul`,`artikel`.`tgl_post` AS `tgl_post`,`artikel`.`lokasi` AS `lokasi`,`artikel`.`isi` AS `isi` from `artikel` where (`artikel`.`id_category` = 1) order by `artikel`.`tgl_post` desc;

-- --------------------------------------------------------

--
-- Structure for view `daftar_artikel`
--
DROP TABLE IF EXISTS `daftar_artikel`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `daftar_artikel` AS select `artikel`.`id` AS `id`,`artikel`.`id_category` AS `id_category`,`artikel`.`judul` AS `judul`,`artikel`.`tgl_post` AS `tgl_post`,`artikel`.`lokasi` AS `lokasi`,`artikel`.`isi` AS `isi` from `artikel` order by `artikel`.`tgl_post` desc;

-- --------------------------------------------------------

--
-- Structure for view `daftar_berita`
--
DROP TABLE IF EXISTS `daftar_berita`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `daftar_berita` AS select `artikel`.`id` AS `id`,`artikel`.`id_category` AS `id_category`,`artikel`.`judul` AS `judul`,`artikel`.`tgl_post` AS `tgl_post`,`artikel`.`lokasi` AS `lokasi`,`artikel`.`isi` AS `isi` from `artikel` where (`artikel`.`id_category` = 2) order by `artikel`.`tgl_post` desc;

-- --------------------------------------------------------

--
-- Structure for view `sm_agenda`
--
DROP TABLE IF EXISTS `sm_agenda`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `sm_agenda` AS select `artikel`.`id` AS `id`,`artikel`.`judul` AS `judul` from `artikel` where (`artikel`.`id_category` = 1) order by `artikel`.`tgl_post` desc limit 5;

-- --------------------------------------------------------

--
-- Structure for view `sm_artikel`
--
DROP TABLE IF EXISTS `sm_artikel`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `sm_artikel` AS select `artikel`.`id` AS `id`,`artikel`.`id_category` AS `id_category`,`artikel`.`judul` AS `judul` from `artikel` order by `artikel`.`tgl_post`;

-- --------------------------------------------------------

--
-- Structure for view `sm_berita`
--
DROP TABLE IF EXISTS `sm_berita`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `sm_berita` AS select `artikel`.`id` AS `id`,`artikel`.`judul` AS `judul` from `artikel` where (`artikel`.`id_category` = 2) order by `artikel`.`tgl_post` desc;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `anggota`
--
ALTER TABLE `anggota`
  ADD PRIMARY KEY (`id_anggota`);

--
-- Indexes for table `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_artikel` (`id_category`);

--
-- Indexes for table `category_artikel`
--
ALTER TABLE `category_artikel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `departemen`
--
ALTER TABLE `departemen`
  ADD PRIMARY KEY (`id_dep`);

--
-- Indexes for table `kepengurusan`
--
ALTER TABLE `kepengurusan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `departemen` (`departemen`);

--
-- Indexes for table `pesan`
--
ALTER TABLE `pesan`
  ADD PRIMARY KEY (`id_pesan`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `anggota`
--
ALTER TABLE `anggota`
  MODIFY `id_anggota` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=40;
--
-- AUTO_INCREMENT for table `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=57;
--
-- AUTO_INCREMENT for table `category_artikel`
--
ALTER TABLE `category_artikel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `departemen`
--
ALTER TABLE `departemen`
  MODIFY `id_dep` int(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `pesan`
--
ALTER TABLE `pesan`
  MODIFY `id_pesan` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `artikel`
--
ALTER TABLE `artikel`
  ADD CONSTRAINT `artikel_ibfk_1` FOREIGN KEY (`id_category`) REFERENCES `category_artikel` (`id`);

--
-- Constraints for table `kepengurusan`
--
ALTER TABLE `kepengurusan`
  ADD CONSTRAINT `kepengurusan_ibfk_1` FOREIGN KEY (`departemen`) REFERENCES `departemen` (`id_dep`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
