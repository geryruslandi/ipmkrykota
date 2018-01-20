-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 22, 2015 at 01:34 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ipmkr`
--

-- --------------------------------------------------------

--
-- Table structure for table `agenda`
--

CREATE TABLE IF NOT EXISTS `agenda` (
`id_agenda` int(11) NOT NULL,
  `nama_agenda` varchar(50) NOT NULL,
  `tgl_agenda` varchar(50) NOT NULL,
  `lokasi` varchar(50) NOT NULL,
  `isi_agenda` text NOT NULL,
  `tgl_post` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `agenda`
--

INSERT INTO `agenda` (`id_agenda`, `nama_agenda`, `tgl_agenda`, `lokasi`, `isi_agenda`, `tgl_post`) VALUES
(4, 'Jflkajlfk', 'Afafa', 'Afafa', 'Afafa', '2015-09-23 11:23:41');

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
(32, 'Muhammad Buzaar', 'Universitas Ahmad Dahlan', 'Psikologi', 2013, '081991681994', '2015-08-18 18:10:45', 'Accept', 'Jalan Nitikan Baru No. 71 Sorosutan Umbulharjo', 'Jalan Sumatera Blok A No.162 '),
(33, 'Syarifah Rizka', 'Universitas Muhammadiyah Yogyakarta', 'Ilmu Komunikasi', 2012, '082220022331', '2015-08-18 18:14:04', 'Accept', 'Jalan Gatak Tamantirto Kasihan Bantul', 'Jalan R.h.fisabilillah Gg. Garuda 3 No.42'),
(35, 'Ilham Pancanandra', 'Universitas Muhammadiyah Yogyakarta', 'Ilmu Komunikasi', 2013, '081991271444', '2015-08-18 18:26:33', 'Accept', 'Jalan Pamularsih 37d Wirobrajan Kelur Patangpuluh', 'Jalan Bunguran No.52 Kec. Bukit Bestari Tanjungpin'),
(36, 'Rahmat Iqbal', 'Universitas Islam Indonesia', 'Teknik Informatika', 2010, '082179273322', '2015-08-18 18:59:04', 'Accept', 'Candi Iii Rt/rw 3/6 Jalan Kaliurang Km 12, Sardono', 'Jalan Pramuka Lr. Belitung No. 37'),
(37, 'Prayogi Ramadhan', 'Universitas Ahmad Dahlan', 'Ekonomi', 2010, '082389139041', '2015-08-18 19:01:00', 'Accept', 'Jalan Babaran Gg. Mutiara No. 32b', 'Jalan Soekarno Hatta, Perum Nila, Blok E No. 42'),
(38, 'Murnoto', 'Universitas Islam Indonesia', 'Ilmu Komunikasi', 2012, '081229251339', '2015-08-18 19:02:27', 'Accept', 'Jalan Kaliurang Km 10 No. 2', 'Jalan Sumatera Blok C No.127'),
(39, 'Bob Randa', 'Universitas Ahmad Dahlan', 'Pend. Bahasa Inggris', 2012, '083807252336', '2015-08-18 19:04:55', 'Accept', 'Jalan Nitikan Baru No. 71 Sorosutan Umbulharjo', 'Sei Jang Jalan. Sambu No. 7');

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
(1, 'Inti'),
(2, 'sdm'),
(3, 'infokom'),
(4, 'kewirausahaan'),
(5, 'agama'),
(6, 'olahraga'),
(7, 'seni'),
(8, 'asrama');

-- --------------------------------------------------------

--
-- Table structure for table `kepengurusan`
--

CREATE TABLE IF NOT EXISTS `kepengurusan` (
`id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jabatan` varchar(50) NOT NULL,
  `departemen` int(20) NOT NULL,
  `periode` varchar(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kepengurusan`
--

INSERT INTO `kepengurusan` (`id`, `nama`, `jabatan`, `departemen`, `periode`) VALUES
(1, 'Richard Riowani', 'Ketua Umum', 1, '2014 / 2015'),
(2, 'Rama Spadya Putra', 'Wakil Ketua', 1, '2014 / 2015'),
(3, 'M. Buzar Arrifal', 'Sekretaris', 1, '2014 / 2015'),
(4, 'Citra Widya', 'Bendahara', 1, '2014 / 2015'),
(5, 'Syarifah Rizka Wahyuni', 'Koordinator', 2, '2014 / 2015'),
(6, 'Ghea Ulfa Stefani', 'Staff', 2, '2014 / 2015'),
(7, 'Ilham Pancanandra', 'Staff', 2, '2014 / 2015'),
(8, 'Qurratu Ayunin Wahyu', 'Staff', 2, '2014 / 2015'),
(9, 'Muhammad Faisal', 'Staff', 2, '2014 / 2015'),
(10, 'Ade Prasetyo', 'Koordinator', 3, '2014 / 2015'),
(11, 'Armeta Putri Yunisa', 'Staff', 3, '2014 / 2015'),
(12, 'Chandra Arie Wiyanto', 'Staff', 3, '2014 / 2015'),
(13, 'Abdul Farhan Jihad', 'Staff', 3, '2014 / 2015'),
(14, 'Mazlila Intan Sumardi', 'Koordinator', 4, '2014 / 2015'),
(15, 'Randi Septian', 'Staff', 4, '2014 / 2015'),
(16, 'Panji Anugrah Putra', 'Staff', 4, '2014 / 2015'),
(17, 'Lutfi Kurniawan', 'Staff', 4, '2014 / 2015'),
(18, 'Adelia', 'Koordinator', 5, '2014 / 2015'),
(19, 'Windi Rizka Vinasari', 'Staff', 5, '2014 / 2015'),
(20, 'Raja Yulianita Sarazawati', 'Staff', 5, '2014 / 2015'),
(21, 'Nanda Kristia Santoso', 'Staff', 5, '2014 / 2015'),
(22, 'Angga Tri Muryanto', 'Koordinator', 6, '2014 / 2015'),
(23, 'Elsa Utami', 'Staff', 6, '2014 / 2015'),
(24, 'Eva Norma Sari', 'Staff', 6, '2014 / 2015'),
(25, 'Yunda Dwi Hartono', 'Staff', 6, '2014 / 2015'),
(26, 'M. Iqbal Islami', 'Staff', 6, '2014 / 2015'),
(27, 'R. Aisyah Mutia Z.', 'Koordinator', 7, '2014 / 2015'),
(28, 'Marina Yollanda', 'Staff', 7, '2014 / 2015'),
(29, 'Shafie Yunia Ulfah', 'Staff', 7, '2014 / 2015'),
(30, 'Idayu Herita', 'Staff', 7, '2014 / 2015'),
(31, 'Junior Calvin Pangabean', 'Putra', 8, '2014 / 2015'),
(32, 'Hardina Dwi Retahaditi', 'Putri', 8, '2014 / 2015');

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
('iqbalganda', 'dac1f9b12337e6e10b944217bc2ce3d6', 'Rahmat Iqbal'),
('ricosster', '617cb7270a3216bd84108ade4e9d7c23', 'Rico Julian');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agenda`
--
ALTER TABLE `agenda`
 ADD PRIMARY KEY (`id_agenda`);

--
-- Indexes for table `anggota`
--
ALTER TABLE `anggota`
 ADD PRIMARY KEY (`id_anggota`);

--
-- Indexes for table `departemen`
--
ALTER TABLE `departemen`
 ADD PRIMARY KEY (`id_dep`);

--
-- Indexes for table `kepengurusan`
--
ALTER TABLE `kepengurusan`
 ADD PRIMARY KEY (`id`), ADD KEY `departemen` (`departemen`);

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
-- AUTO_INCREMENT for table `agenda`
--
ALTER TABLE `agenda`
MODIFY `id_agenda` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `anggota`
--
ALTER TABLE `anggota`
MODIFY `id_anggota` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=40;
--
-- AUTO_INCREMENT for table `departemen`
--
ALTER TABLE `departemen`
MODIFY `id_dep` int(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `kepengurusan`
--
ALTER TABLE `kepengurusan`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT for table `pesan`
--
ALTER TABLE `pesan`
MODIFY `id_pesan` int(11) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `kepengurusan`
--
ALTER TABLE `kepengurusan`
ADD CONSTRAINT `kepengurusan_ibfk_1` FOREIGN KEY (`departemen`) REFERENCES `departemen` (`id_dep`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
