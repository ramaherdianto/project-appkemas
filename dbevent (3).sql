-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 12, 2021 at 04:02 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbevent`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbevent`
--

CREATE TABLE `tbevent` (
  `id` int(11) NOT NULL,
  `nama_kegiatan` varchar(150) NOT NULL,
  `hari` varchar(100) NOT NULL,
  `tanggal` varchar(20) NOT NULL,
  `waktu` varchar(10) NOT NULL,
  `tempat` varchar(100) NOT NULL,
  `deskripsi` varchar(1000) NOT NULL,
  `penanggung_jawab` varchar(100) NOT NULL,
  `ketua_pelaksana` varchar(100) NOT NULL,
  `anggaran` varchar(100) NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbevent`
--

INSERT INTO `tbevent` (`id`, `nama_kegiatan`, `hari`, `tanggal`, `waktu`, `tempat`, `deskripsi`, `penanggung_jawab`, `ketua_pelaksana`, `anggaran`, `gambar`) VALUES
(8, 'Kerja Bakti', 'Minggu', '2021-05-30', '07:00', 'Komplek Citra Braga Kusuma Ningrat', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nisi eaque aspernatur ad laudantium impedit omnis blanditiis ducimus assumenda? Id minus aliquam ex aut molestiae dignissimos eaque recusandae est, odit, laboriosam assumenda ullam nulla. Dolor aliquam animi tenetur sed ratione error ipsum, ullam voluptatibus corporis cupiditate alias? Consequatur vel praesentium quasi minus incidunt mollitia sapiente animi, nulla totam dignissimos quidem nobis obcaecati distinctio rem expedita laboriosam voluptates consectetur quibusdam quo! Odit et dolores eligendi laudantium nisi perferendis ratione quae consequuntur, porro voluptas cum quisquam officia fuga exercitationem animi. Eius reprehenderit incidunt minus, quaerat minima laudantium quod placeat dicta, debitis cum laborum?', 'Bpk. Daniel Herdiansyah', 'Bpk. Sukonto Legowo', 'Rp. 5500000', 'kerjabakti.jpg'),
(9, 'Buka Bersama', 'Sabtu', '2021-05-29', '16:30', 'Rumah Bpk. Bahar blok A28', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nisi eaque aspernatur ad laudantium impedit omnis blanditiis ducimus assumenda? Id minus aliquam ex aut molestiae dignissimos eaque recusandae est, odit, laboriosam assumenda ullam nulla. Dolor aliquam animi tenetur sed ratione error ipsum, ullam voluptatibus corporis cupiditate alias? Consequatur vel praesentium quasi minus incidunt mollitia sapiente animi, nulla totam dignissimos quidem nobis obcaecati distinctio rem expedita laboriosam voluptates consectetur quibusdam quo! Odit et dolores eligendi laudantium nisi perferendis ratione quae consequuntur, porro voluptas cum quisquam officia fuga exercitationem animi. Eius reprehenderit incidunt minus, quaerat minima laudantium quod placeat dicta, debitis cum laborum?', 'Bpk. Yayan Ruhyan', 'Bpk. Sukonto Legowo', 'Rp. 7500000', 'bukber.jpg'),
(10, 'Memperingati Hari Kemerdekaan Indonesia', 'Rabu', '2021-08-17', '08:00', 'komplek Citra Braga Kusuma Ningrat', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nisi eaque aspernatur ad laudantium impedit omnis blanditiis ducimus assumenda? Id minus aliquam ex aut molestiae dignissimos eaque recusandae est, odit, laboriosam assumenda ullam nulla. Dolor aliquam animi tenetur sed ratione error ipsum, ullam voluptatibus corporis cupiditate alias? Consequatur vel praesentium quasi minus incidunt mollitia sapiente animi, nulla totam dignissimos quidem nobis obcaecati distinctio rem expedita laboriosam voluptates consectetur quibusdam quo! Odit et dolores eligendi laudantium nisi perferendis ratione quae consequuntur, porro voluptas cum quisquam officia fuga exercitationem animi. Eius reprehenderit incidunt minus, quaerat minima laudantium quod placeat dicta, debitis cum laborum?', 'Bpk. Harris Subianto', 'Bpk. Harry Sudibjo', 'Rp. 25500000', 'agustusan.jpg'),
(13, 'Family Gathering', 'Minggu', '2021-06-13', '08:00', 'Bangunan Serba Guna Komplek Citra Braga', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nisi eaque aspernatur ad laudantium impedit omnis blanditiis ducimus assumenda? Id minus aliquam ex aut molestiae dignissimos eaque recusandae est, odit, laboriosam assumenda ullam nulla. Dolor aliquam animi tenetur sed ratione error ipsum, ullam voluptatibus corporis cupiditate alias? Consequatur vel praesentium quasi minus incidunt mollitia sapiente animi, nulla totam dignissimos quidem nobis obcaecati distinctio rem expedita laboriosam voluptates consectetur quibusdam quo! Odit et dolores eligendi laudantium nisi perferendis ratione quae consequuntur, porro voluptas cum quisquam officia fuga exercitationem animi. Eius reprehenderit incidunt minus, quaerat minima laudantium quod placeat dicta, debitis cum laborum?', 'Bpk. Daniel Herdiansyah', 'Bpk. Ade Swara', 'Rp. 25500000', 'lukas-eggers-_7Yz_eiB3-M-unsplash.jpg'),
(21, 'Pernikahan Rama&Sinta', 'Minggu', '2021-06-13', '12:00', 'Bangunan Serba Guna Komplek Citra Braga', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit eveniet maiores doloremque obcaecati quos veniam, iure vitae nihil, repudiandae sunt ad aperiam quibusdam blanditiis tenetur assumenda commodi tempore nisi reiciendis ipsum quae sapiente eaque nemo adipisci dolore. Corrupti doloribus recusandae facilis quibusdam inventore unde voluptatem adipisci quas perferendis ea architecto voluptas iste omnis debitis modi ipsam aliquam, voluptate repellendus officia sapiente cum nulla esse natus qui! Distinctio maiores, placeat cupiditate fugiat, dolorum impedit commodi sunt reiciendis natus sapiente possimus tenetur nostrum aliquid ut! Eum earum error consequuntur optio facere itaque eos ea, perferendis nemo? Dolores unde incidunt amet sequi consectetur.', 'Bpk. Harris Subianto', 'Bpk. Sukonto Legowo', 'Rp. 25500000', 'wedding.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbpesan`
--

CREATE TABLE `tbpesan` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `subjek` varchar(100) NOT NULL,
  `pesan` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbpesan`
--

INSERT INTO `tbpesan` (`id`, `nama`, `email`, `subjek`, `pesan`) VALUES
(3, 'Sukonto Legowo', 'sukonto@gmail.com', 'Pesan untuk para pengurus', 'Kurangnnya keamanan di komplek'),
(4, 'Ade Sugiono', 'adesugi@gmail.com', 'Keluhan pada pengurus', 'Aliran air blok A24 tersendat dan mengakibatkan banjir'),
(5, 'aselole jos', 'aselolejos@gmail.com', 'Apa aja boleh', 'apa aja boleh');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `image` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `email`, `image`, `password`, `role_id`, `is_active`, `date_created`) VALUES
(3, 'Admin', 'admin@gmail.com', 'default.png', '$2y$10$iXDRKrAtc7y4MVoBQuq/3.M.JQYF2n/5opyJw4wqv54e3cuk5T2.i', 1, 1, 1623427199),
(4, 'Abibah Alviasnyah', 'abibah@gmail.com', 'default.png', '$2y$10$E93UPeANUcUIJ7ZkmCuPxOkecZsTR7RzoF/JuOfQS2y6yXissB6/K', 2, 1, 1623427642),
(5, 'Rizky Darmawan', 'rizkydarmawan@gmail.com', 'default.png', '$2y$10$OJSWBjDWXWXeoX8ZBdWnw.M9Rz6ky83ApZwt9D8B2LBvJOe/MZVqi', 2, 1, 1623440910),
(6, 'Wong fei Hung', 'wfeihung@gmail.com', 'default.png', '$2y$10$mTXchfLSebXTK.mAcF6OKe/uvRkKXcCaU5V4wxPxOywgDbKW1ZSdi', 2, 1, 1623470526),
(7, 'Firli Juli Prayitno', 'firlijuli@gmail.com', 'default.png', '$2y$10$6xQv5LHrfA180nEzKMxhFulVorhh5W9/FesH.Fsrw40z2/Mk5dIkS', 2, 1, 1623505263);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbevent`
--
ALTER TABLE `tbevent`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbpesan`
--
ALTER TABLE `tbpesan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbevent`
--
ALTER TABLE `tbevent`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `tbpesan`
--
ALTER TABLE `tbpesan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
