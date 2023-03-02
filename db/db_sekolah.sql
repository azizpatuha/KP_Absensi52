-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 02, 2023 at 04:15 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_sekolah`
--

-- --------------------------------------------------------

--
-- Table structure for table `absen`
--

CREATE TABLE `absen` (
  `ID_Absen` int(100) NOT NULL,
  `NISN` varchar(25) NOT NULL,
  `Nama_Siswa` varchar(255) NOT NULL,
  `Kode_Mapel` varchar(100) NOT NULL,
  `Mapel` varchar(100) NOT NULL,
  `Pertemuan` varchar(100) NOT NULL,
  `Kelas` varchar(10) NOT NULL,
  `Periode` varchar(5) NOT NULL,
  `Kehadiran` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `absen`
--

INSERT INTO `absen` (`ID_Absen`, `NISN`, `Nama_Siswa`, `Kode_Mapel`, `Mapel`, `Pertemuan`, `Kelas`, `Periode`, `Kehadiran`) VALUES
(269, '0092585305', 'AFFAN HADIST', 'IPA-7', 'IPA', 'Pertemuan 1', '7-1', '2022', 'Sakit'),
(270, '0094026975', 'ADIRATNA KIRANA RACHEL', 'IPA-7', 'IPA', 'Pertemuan 1', '7-1', '2022', 'Hadir'),
(271, '0102878184', 'ADITYA RAMADHAN', 'IPA-7', 'IPA', 'Pertemuan 1', '7-1', '2022', 'Hadir'),
(272, '0109224565', 'ADITYA RAHMAN ', 'IPA-7', 'IPA', 'Pertemuan 1', '7-1', '2022', 'Hadir'),
(273, '0109699456', 'AHDAN AMALULZIHNI', 'IPA-7', 'IPA', 'Pertemuan 1', '7-1', '2022', 'Hadir'),
(274, '0092585305', 'AFFAN HADIST', 'IPA-7', 'IPA', 'Pertemuan 2', '7-1', '2022', 'Hadir'),
(275, '0094026975', 'ADIRATNA KIRANA RACHEL', 'IPA-7', 'IPA', 'Pertemuan 2', '7-1', '2022', 'Hadir'),
(276, '0102878184', 'ADITYA RAMADHAN', 'IPA-7', 'IPA', 'Pertemuan 2', '7-1', '2022', 'Hadir'),
(277, '0109224565', 'ADITYA RAHMAN ', 'IPA-7', 'IPA', 'Pertemuan 2', '7-1', '2022', 'Hadir'),
(278, '0109699456', 'AHDAN AMALULZIHNI', 'IPA-7', 'IPA', 'Pertemuan 2', '7-1', '2022', 'Hadir'),
(279, '0094026975', 'ADIRATNA KIRANA RACHEL', 'IPA-8', 'IPA', 'Pertemuan 1', '8-1', '2023', 'Hadir'),
(280, '0092585305', 'AFFAN HADIST', 'IPA-7', 'IPA', 'Pertemuan 3', '7-1', '2022', 'Hadir'),
(281, '0102878184', 'ADITYA RAMADHAN', 'IPA-7', 'IPA', 'Pertemuan 3', '7-1', '2022', 'Hadir'),
(282, '0109224565', 'ADITYA RAHMAN ', 'IPA-7', 'IPA', 'Pertemuan 3', '7-1', '2022', 'Hadir'),
(283, '0109699456', 'AHDAN AMALULZIHNI', 'IPA-7', 'IPA', 'Pertemuan 3', '7-1', '2022', 'Hadir'),
(284, '0092585305', 'AFFAN HADIST', 'IPA-7', 'IPA', 'Pertemuan 4', '7-1', '2022', 'Hadir'),
(285, '0102878184', 'ADITYA RAMADHAN', 'IPA-7', 'IPA', 'Pertemuan 4', '7-1', '2022', 'Sakit'),
(286, '0109224565', 'ADITYA RAHMAN ', 'IPA-7', 'IPA', 'Pertemuan 4', '7-1', '2022', 'Izin'),
(287, '0109699456', 'AHDAN AMALULZIHNI', 'IPA-7', 'IPA', 'Pertemuan 4', '7-1', '2022', 'Alfa');

-- --------------------------------------------------------

--
-- Table structure for table `guru`
--

CREATE TABLE `guru` (
  `ID_Guru` int(100) NOT NULL,
  `NIP` varchar(25) NOT NULL,
  `Nama_Guru` varchar(255) NOT NULL,
  `Nomor_Telp` varchar(25) NOT NULL,
  `Alamat` text NOT NULL,
  `Agama` varchar(25) NOT NULL,
  `TTL` varchar(255) NOT NULL,
  `Jenis_Kelamin` varchar(25) NOT NULL,
  `Status` varchar(25) NOT NULL,
  `Tugas` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `guru`
--

INSERT INTO `guru` (`ID_Guru`, `NIP`, `Nama_Guru`, `Nomor_Telp`, `Alamat`, `Agama`, `TTL`, `Jenis_Kelamin`, `Status`, `Tugas`) VALUES
(6, '196709111997022002', 'Supriyanti', '', 'Jl. Melati 2 No.13 RT.13/08 Jakasampurna Kec. Bekasi Barat', 'Islam', 'Magelang, 11 September 1967', 'Perempuan', 'PNS', 'Kepala Sekolah'),
(8, '197507122010012001', 'Tety Yuliahafni', '', 'Jl. Tenggiri 12 No.217 RT.07/04 Kayuringin Kec. Bekasi Selatan', 'Islam', 'Jakarta, 12 Juli 1975', 'Perempuan', 'PNS', 'Bimbingan Konseling'),
(7, '197909242008011004', 'Tarno', '', 'Jl. Patuha Selatan IV No.87 RT.02/15 Kayuringin Bekasi Selatan', 'Islam', 'Karanganyar, 24 September 1979', 'Laki-Laki', 'PNS', 'Guru IPA / Wakil Kepala Sekolah'),
(12, '3216063107960002', 'Khairul Hilmy', '', 'Papan Mas Blok B 11 No.17 Desa Mekarsari Kec. Tambun Selatan', 'Islam', 'Bekasi, 131 Juli 1996', 'Laki-Laki', 'TKK', 'Guru Penjaskes'),
(9, '3275021407830011', 'Tri Nurhakim', '', 'Kp. Rawa Bebek RT.06/08 Kel. Kota Baru Bekasi Barat', 'Islam', 'Bekasi, 14 Juli 1983', 'Laki-Laki', 'TKK', 'Guru PAI'),
(11, '3275025509910004', 'Fifitria Windarsih', '', 'Jl. Bintara 1b Mini Cluster Blok A7 RT.10/02 Bintara Bekasi Selatan', 'Islam', 'Jakarta, 15 September 1991', 'Perempuan', 'TKK', 'Guru PPKN'),
(15, '3275025706840014', 'Hafizoh', '', 'J;. Banteng No.23 RT.01/014 Kranji Bekasi Barat', 'Islam', 'Jakarta, 17 Juni 1984', 'Perempuan', 'TKK', 'Administrasi Kesiswaan'),
(10, '3275026412870006', 'Diska Merlinza Destantia', '', 'Jl. Bintara 12 No.54 RT.03/09 Bintara Kec. Bekasi Barat', 'Islam', 'Jakarta, 24 Desember 1987', 'Perempuan', 'TKK', 'Guru Bahasa Inggris'),
(14, '3275040103800040', 'Irfan Suherman', '', 'Jl. Belanak SMP 7 RT.08/10 Kayuringin Kec. Bekasi Selatan', 'Islam', 'Bandung, 01 Maret 1980', 'Laki-Laki', 'TKK', 'Guru IPS'),
(17, '3275051706820023', 'Romlih', '', 'Jl. H. Romli No.104 RT.02/03 Pengasinan Kec. Rawalumbu Bekasi', 'Islam', 'Bekasi, 17 Juni 1982', 'Laki-Laki', 'TKK', 'Guru Bahasa Inggris / Wak. Humas');

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE `kelas` (
  `ID_Kelas` int(100) NOT NULL,
  `Kelas` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`ID_Kelas`, `Kelas`) VALUES
(5, '7-1'),
(6, '7-2'),
(7, '7-3'),
(8, '7-4'),
(9, '7-5'),
(10, '7-6'),
(11, '7-7'),
(12, '7-8'),
(13, '7-9'),
(14, '7-10'),
(15, '8-1'),
(16, '8-2'),
(17, '8-3'),
(18, '8-4'),
(19, '8-5'),
(20, '8-6'),
(21, '8-7'),
(22, '8-8'),
(23, '8-9'),
(24, '8-10'),
(25, '9-1'),
(26, '9-2'),
(27, '9-3'),
(28, '9-4'),
(29, '9-5'),
(30, '9-6'),
(31, '9-7'),
(32, '9-8'),
(33, '9-9'),
(34, '9-10');

-- --------------------------------------------------------

--
-- Table structure for table `mapel`
--

CREATE TABLE `mapel` (
  `ID_Mapel` int(100) NOT NULL,
  `Kode_Mapel` varchar(100) NOT NULL,
  `Mapel` varchar(100) NOT NULL,
  `Pengajar` varchar(255) NOT NULL,
  `NIP` varchar(25) NOT NULL,
  `Kelas` varchar(10) NOT NULL,
  `Periode` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mapel`
--

INSERT INTO `mapel` (`ID_Mapel`, `Kode_Mapel`, `Mapel`, `Pengajar`, `NIP`, `Kelas`, `Periode`) VALUES
(38, 'IPA-7', 'IPA', 'Tarno', '197909242008011004', '7-1', '2022'),
(39, 'IPA-8', 'IPA', 'Tarno', '197909242008011004', '8-1', '2023');

-- --------------------------------------------------------

--
-- Table structure for table `pertemuan`
--

CREATE TABLE `pertemuan` (
  `ID_Pertemuan` int(100) NOT NULL,
  `Pertemuan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pertemuan`
--

INSERT INTO `pertemuan` (`ID_Pertemuan`, `Pertemuan`) VALUES
(1, 'Pertemuan 1'),
(3, 'Pertemuan 2'),
(4, 'Pertemuan 3'),
(6, 'Pertemuan 4');

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `ID_Siswa` int(100) NOT NULL,
  `NISN` varchar(25) NOT NULL,
  `Nama_Siswa` varchar(255) NOT NULL,
  `Nomor_Telp` varchar(25) NOT NULL,
  `Alamat` text NOT NULL,
  `Agama` varchar(25) NOT NULL,
  `TTL` varchar(255) NOT NULL,
  `Jenis_Kelamin` varchar(25) NOT NULL,
  `Kelas` varchar(10) NOT NULL,
  `Periode` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`ID_Siswa`, `NISN`, `Nama_Siswa`, `Nomor_Telp`, `Alamat`, `Agama`, `TTL`, `Jenis_Kelamin`, `Kelas`, `Periode`) VALUES
(20, '', '', '', '', 'Pilih Agama', '', 'Pilih Kelamin', 'Pilih Kela', ''),
(17, '0092585305', 'AFFAN HADIST', '', 'Jl.Salam Indah 2 Kav.Agraria Rt 008 Rw 026 Kel.Kayuringinjaya Kec.Bekasi Selatan 1744 ', 'Islam', 'Bekasi, 30-05-2009', 'Laki-Laki', '7-1', '2022'),
(14, '0094026975', 'ADIRATNA KIRANA RACHEL', '', 'Kp. Rawa Bambu Rt 003 Rw 001 Kel. Kali Baru Kec. Medan Satria', 'Islam', 'Bogor, 24-12-2009', 'Perempuan', '8-1', '2023'),
(16, '0102878184', 'ADITYA RAMADHAN', '', 'Kp.Buaran Rt 001 Rw 004 Kel.Harapan Mulya Kec.Medan Satria 17143', 'Islam', 'Bekasi, 22-08-2010', 'Laki-Laki', '7-1', '2022'),
(15, '0109224565', 'ADITYA RAHMAN ', '', 'Jl.Pemuda Rt 03 Rw 03 Kel.Kranji Kec.Bekasi Barat 17135', 'Islam', 'Kota Bekasi, 03-01-2010', 'Laki-Laki', '7-1', '2022'),
(18, '0109699456', 'AHDAN AMALULZIHNI', '', 'Jl.Jambu 1 No 168 Rt 06 Rw 07 Kel.Kranji Kec.Bekasi Barat 17135', 'Islam', 'Kota Bekasi, 25-10-2010', 'Laki-Laki', '7-1', '2022');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `ID_User` int(100) NOT NULL,
  `NIP` varchar(25) DEFAULT NULL,
  `NISN` varchar(25) DEFAULT NULL,
  `Nama_User` varchar(255) NOT NULL,
  `Username` varchar(50) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Level` enum('Admin','Guru','Siswa') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`ID_User`, `NIP`, `NISN`, `Nama_User`, `Username`, `Password`, `Level`) VALUES
(1, '', '', 'Malik', 'admin', '$2y$10$bZNhoicjIt5AmZiwZhCqKOg1wrpK70DSmnhlIHizjvjsuNJkOkK42', 'Admin'),
(9, '196709111997022002', '', 'Supriyanti', 'Supriyanti', '$2y$10$OStafVFz8dM6cMSe4IxhK.McGuwuN3r3.Ld6U68sp.sOcH7J6XjBa', 'Admin'),
(10, '197909242008011004', '', 'Tarno', 'Tarno', '$2y$10$7eIN2LTp/2KILzu.hVVSiODxRbWe6Q/eAn3txVJLRuKk3ix3kTgp6', 'Guru'),
(11, '197507122010012001', '', 'Tety Yuliahafni', 'Tety', '$2y$10$unqLHDrjiqo5AG5APqgu3O8yfq/SdDlGuZ6s8GVD3v.Gt75xlziIm', 'Guru'),
(12, '3216063107960002', '', 'Khairul Hilmy', 'Khairul', '$2y$10$DIsYx.COrK3Kc0kNb9Kjg.U5ahCuw.RohDY7uQ5QcYRkEXTvOetO.', 'Guru'),
(13, '3275021407830011', '', 'Tri Nurhakim', 'Nurhakim', '$2y$10$isS23me3Vy0ig2mBIp2mDeMHxliQtk6HyU2o/TIJpWbdbyCJm1OZi', 'Guru'),
(14, '3275025509910004', '', 'Fifitria Windarsih', 'Fifitria', '$2y$10$Z2hn9xepv2B91kQ0.19aUeYZZIupzjK3/2uCsMSK8HIvJm0CjEEnK', 'Guru'),
(15, '3275025706840014', '', 'Hafizoh', 'Hafizoh', '$2y$10$Xe2hwJh3Yza6DIkkCT2xyu9T3U7cx.PlIGKHJSymF1U7WVyY48Pm6', 'Guru'),
(16, '3275026412870006', '', 'Diska Merlinza Destantia', 'Diska', '$2y$10$kZTmsC41ElhYSSO0t5r7O.9iru0SCwL2vnfJ.6RxLDtAe6CkUY/Z2', 'Guru'),
(17, '3275040103800040', '', 'Irfan Suherman', 'Irfan', '$2y$10$mjdQf.6d7zQNjqLO7F/0RO0VkOhdYo9EB8tuwI.UVdI45Z3FQWpgO', 'Guru'),
(19, '', '2019230026', 'Malik Abdul Aziz', 'Malik', '$2y$10$bH.F6Ynaxup0gfJIReCxH.qouwcibklO/KNHCgSdcEq0u6ZrkzAki', 'Siswa'),
(20, '', '', 'Tarno', 'TarnoAdmin', '$2y$10$IkRmvuHNefkb8zZgS58X2unRYkwnfMVsg331yeftTiTNkcv/9OmPS', 'Admin'),
(21, '', '0092585305', 'AFFAN HADIST', '0092585305', '$2y$10$pr70XMzx87MejlU2q7xzheh5SC4l5qpWQSLcYRPkl420tSwJjQpX.', 'Siswa'),
(22, '', '0094026975', 'ADIRATNA KIRANA RACHEL', '0094026975', '$2y$10$2W2U.bdERy5ifjijMBek5OqxED01Txxlexr.ER6fGhRp2ErQHVq36', 'Siswa'),
(23, '', '0102878184', 'ADITYA RAMADHAN', '0102878184', '$2y$10$XHUAJUSlFt2I2vbmVvygzeqM/l.ZEhwCD4Lh8/0Q7UEDQq4Bjzb1G', 'Siswa'),
(24, '', '0109224565', 'ADITYA RAHMAN', '0109224565', '$2y$10$77rkMdGXdrpoqXLzf45pxOIOsU8UMVzXEsHj1S.tFWaI2gjol/rjK', 'Siswa'),
(25, '', '0109699456', 'AHDAN AMALULZIHNI', '0109699456', '$2y$10$YaGATEDxGmvHfWfhiRCv7umfdVPihNkp6XYZ/LpWhozfJ0C7vDHlm', 'Siswa'),
(26, '3275051706820023', '', 'Romlih', 'Romlih', '$2y$10$jJUEnNZb/2xHSmku6bwSXuMTA.znKeIzOa8yBVQ9lbzOBIgUSvUA2', 'Guru'),
(27, '', '', 'Aziz', 'Aziz', '$2y$10$jCbJDInRP/AjXDyJgAq07eZhUidODECk6fau2WdABS9cThWf79/mm', 'Admin'),
(29, '', '', 'Dhino', 'Dhino', '$2y$10$Of39hLVNn.p2tCWmrcXK5O570bAT7kbgFuPoTOjriDkd9JmYsRwL.', 'Admin'),
(30, '', '', 'Sadam', 'Sadam', '$2y$10$5AzdBYaN78Ge6uT2Ee7P6OY2nn7KoJgnvV5j4qwQfs/njhyCIjFWi', 'Admin'),
(31, '', '', 'Agung', 'AgungAdmin', '$2y$10$MV0YZfBlwxxMP6KzyVjwgeAutrlNN5LSMTmnwJ.J89ALOeK652AaS', 'Admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `absen`
--
ALTER TABLE `absen`
  ADD PRIMARY KEY (`ID_Absen`);

--
-- Indexes for table `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`NIP`),
  ADD UNIQUE KEY `ID_Guru` (`ID_Guru`);

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`ID_Kelas`);

--
-- Indexes for table `mapel`
--
ALTER TABLE `mapel`
  ADD PRIMARY KEY (`ID_Mapel`);

--
-- Indexes for table `pertemuan`
--
ALTER TABLE `pertemuan`
  ADD PRIMARY KEY (`ID_Pertemuan`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`NISN`),
  ADD UNIQUE KEY `ID_Siswa` (`ID_Siswa`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`ID_User`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `absen`
--
ALTER TABLE `absen`
  MODIFY `ID_Absen` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=288;

--
-- AUTO_INCREMENT for table `guru`
--
ALTER TABLE `guru`
  MODIFY `ID_Guru` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `kelas`
--
ALTER TABLE `kelas`
  MODIFY `ID_Kelas` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `mapel`
--
ALTER TABLE `mapel`
  MODIFY `ID_Mapel` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `pertemuan`
--
ALTER TABLE `pertemuan`
  MODIFY `ID_Pertemuan` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `siswa`
--
ALTER TABLE `siswa`
  MODIFY `ID_Siswa` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `ID_User` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
