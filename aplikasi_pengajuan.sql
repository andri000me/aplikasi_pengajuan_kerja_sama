-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 22, 2022 at 05:34 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aplikasi_pengajuan`
--

-- --------------------------------------------------------

--
-- Table structure for table `bentuk_perjanjian`
--

CREATE TABLE `bentuk_perjanjian` (
  `id_bentuk_perjanjian` int(11) NOT NULL,
  `bentuk_perjanjian` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bentuk_perjanjian`
--

INSERT INTO `bentuk_perjanjian` (`id_bentuk_perjanjian`, `bentuk_perjanjian`) VALUES
(1, 'MOU'),
(2, 'PKS');

-- --------------------------------------------------------

--
-- Table structure for table `data_pengajuan`
--

CREATE TABLE `data_pengajuan` (
  `id_data_pengajuan` int(11) NOT NULL,
  `no_pengajuan` varchar(250) NOT NULL,
  `keterangan` varchar(250) NOT NULL,
  `id_bentuk_perjanjian` int(11) NOT NULL,
  `id_jenis_pengajuan` int(11) NOT NULL,
  `file_data_pengajuan` varchar(250) NOT NULL,
  `id_negara_asal_pengajuan` int(11) NOT NULL,
  `id_status_pengajuan` int(11) NOT NULL,
  `id_kategori_kerjasama` int(11) NOT NULL,
  `id_user_pengirim` int(11) NOT NULL,
  `id_user_penerima` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `implementasi_kerja_sama`
--

CREATE TABLE `implementasi_kerja_sama` (
  `id_implementasi_kerja_sama` int(11) NOT NULL,
  `masa_berlaku` date NOT NULL,
  `id_lembaga_mitra` int(100) NOT NULL,
  `keterangan` varchar(250) NOT NULL,
  `id_bentuk_perjanjian` int(11) NOT NULL,
  `file_implementasi_kerja_sama` varchar(250) NOT NULL,
  `id_kategori_kerja_sama` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `implementasi_kerja_sama`
--

INSERT INTO `implementasi_kerja_sama` (`id_implementasi_kerja_sama`, `masa_berlaku`, `id_lembaga_mitra`, `keterangan`, `id_bentuk_perjanjian`, `file_implementasi_kerja_sama`, `id_kategori_kerja_sama`) VALUES
(1, '2022-02-16', 4, 'Bagus', 1, 'h.pdf', 1),
(2, '2022-02-16', 3, 'Bagus', 3, 'CV.pdf', 1);

-- --------------------------------------------------------

--
-- Table structure for table `jenis_pengajuan`
--

CREATE TABLE `jenis_pengajuan` (
  `id_jenis_pengajuan` int(11) NOT NULL,
  `jenis_pengajuan` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jenis_pengajuan`
--

INSERT INTO `jenis_pengajuan` (`id_jenis_pengajuan`, `jenis_pengajuan`) VALUES
(1, 'Internal'),
(2, 'Eksternal');

-- --------------------------------------------------------

--
-- Table structure for table `kategori_kerja_sama`
--

CREATE TABLE `kategori_kerja_sama` (
  `id_kategori_kerja_sama` int(11) NOT NULL,
  `nama_kategori_kerja_sama` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kategori_kerja_sama`
--

INSERT INTO `kategori_kerja_sama` (`id_kategori_kerja_sama`, `nama_kategori_kerja_sama`) VALUES
(1, 'Pendidikan'),
(2, 'Penelitian'),
(3, 'Pengabdian');

-- --------------------------------------------------------

--
-- Table structure for table `kerja_sama_eksternal`
--

CREATE TABLE `kerja_sama_eksternal` (
  `id_kerja_sama_eksternal` int(100) NOT NULL,
  `no_usulan` varchar(250) NOT NULL,
  `keterangan` varchar(250) NOT NULL,
  `id_lembaga_mitra` varchar(250) NOT NULL,
  `id_pengusul` int(11) NOT NULL,
  `id_status_kerja_sama` int(11) NOT NULL,
  `file_kerja_sama_eksternal` varchar(250) NOT NULL,
  `id_kategori_kerja_sama` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kerja_sama_eksternal`
--

INSERT INTO `kerja_sama_eksternal` (`id_kerja_sama_eksternal`, `no_usulan`, `keterangan`, `id_lembaga_mitra`, `id_pengusul`, `id_status_kerja_sama`, `file_kerja_sama_eksternal`, `id_kategori_kerja_sama`) VALUES
(17, '192182', 'Bagus', '3', 4, 2, '0b959fb78f0fb7ec3a31d6bf13db00e8.pdf', 1);

-- --------------------------------------------------------

--
-- Table structure for table `kerja_sama_internal`
--

CREATE TABLE `kerja_sama_internal` (
  `id_kerja_sama_internal` int(100) NOT NULL,
  `no_usulan` varchar(250) NOT NULL,
  `keterangan` varchar(250) NOT NULL,
  `id_lembaga_mitra` int(11) NOT NULL,
  `id_pengusul` int(11) NOT NULL,
  `id_status_kerja_sama` int(11) NOT NULL,
  `file_kerja_sama_internal` varchar(250) NOT NULL,
  `id_kategori_kerja_sama` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kerja_sama_internal`
--

INSERT INTO `kerja_sama_internal` (`id_kerja_sama_internal`, `no_usulan`, `keterangan`, `id_lembaga_mitra`, `id_pengusul`, `id_status_kerja_sama`, `file_kerja_sama_internal`, `id_kategori_kerja_sama`) VALUES
(6, '1982881', 'Bagus', 3, 3, 2, '5ab9b5c20555bd80c05e15275514aec8.pdf', 1);

-- --------------------------------------------------------

--
-- Table structure for table `negara_asal_pengajuan`
--

CREATE TABLE `negara_asal_pengajuan` (
  `id_negara_pengajuan` int(11) NOT NULL,
  `negara_pengajuan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `negara_asal_pengajuan`
--

INSERT INTO `negara_asal_pengajuan` (`id_negara_pengajuan`, `negara_pengajuan`) VALUES
(1, 'Indonesia'),
(2, 'Malaysia');

-- --------------------------------------------------------

--
-- Table structure for table `status_kerja_sama`
--

CREATE TABLE `status_kerja_sama` (
  `id_status_kerja_sama` int(11) NOT NULL,
  `status_kerja_sama` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `status_kerja_sama`
--

INSERT INTO `status_kerja_sama` (`id_status_kerja_sama`, `status_kerja_sama`) VALUES
(1, 'Aktif'),
(2, 'Tidak Aktif'),
(3, 'Akan Berakhir');

-- --------------------------------------------------------

--
-- Table structure for table `status_pengajuan`
--

CREATE TABLE `status_pengajuan` (
  `id_status_pengajuan` int(11) NOT NULL,
  `status_pengajuan` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `status_pengajuan`
--

INSERT INTO `status_pengajuan` (`id_status_pengajuan`, `status_pengajuan`) VALUES
(1, 'Diterima'),
(2, 'Tidak Diterima');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(100) NOT NULL,
  `username` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `nama_mitra` varchar(250) NOT NULL,
  `no_hp` varchar(250) NOT NULL,
  `alamat_mitra` varchar(250) NOT NULL,
  `id_user_level` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `email`, `nama_mitra`, `no_hp`, `alamat_mitra`, `id_user_level`) VALUES
(3, 'admin', 'admin', 'taufiiqulhakim23@gmail.com', 'UIGM', '0812781728', '', 1),
(4, 'mitra', 'mitra', 'wahyu@gmail.com', 'Universitas Bina Darma', '0816271627', '', 2);

-- --------------------------------------------------------

--
-- Table structure for table `user_level`
--

CREATE TABLE `user_level` (
  `id` int(100) NOT NULL,
  `user_level` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bentuk_perjanjian`
--
ALTER TABLE `bentuk_perjanjian`
  ADD PRIMARY KEY (`id_bentuk_perjanjian`);

--
-- Indexes for table `data_pengajuan`
--
ALTER TABLE `data_pengajuan`
  ADD PRIMARY KEY (`id_data_pengajuan`);

--
-- Indexes for table `implementasi_kerja_sama`
--
ALTER TABLE `implementasi_kerja_sama`
  ADD PRIMARY KEY (`id_implementasi_kerja_sama`);

--
-- Indexes for table `jenis_pengajuan`
--
ALTER TABLE `jenis_pengajuan`
  ADD PRIMARY KEY (`id_jenis_pengajuan`);

--
-- Indexes for table `kategori_kerja_sama`
--
ALTER TABLE `kategori_kerja_sama`
  ADD PRIMARY KEY (`id_kategori_kerja_sama`);

--
-- Indexes for table `kerja_sama_eksternal`
--
ALTER TABLE `kerja_sama_eksternal`
  ADD PRIMARY KEY (`id_kerja_sama_eksternal`);

--
-- Indexes for table `kerja_sama_internal`
--
ALTER TABLE `kerja_sama_internal`
  ADD PRIMARY KEY (`id_kerja_sama_internal`);

--
-- Indexes for table `negara_asal_pengajuan`
--
ALTER TABLE `negara_asal_pengajuan`
  ADD PRIMARY KEY (`id_negara_pengajuan`);

--
-- Indexes for table `status_kerja_sama`
--
ALTER TABLE `status_kerja_sama`
  ADD PRIMARY KEY (`id_status_kerja_sama`);

--
-- Indexes for table `status_pengajuan`
--
ALTER TABLE `status_pengajuan`
  ADD PRIMARY KEY (`id_status_pengajuan`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_level`
--
ALTER TABLE `user_level`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bentuk_perjanjian`
--
ALTER TABLE `bentuk_perjanjian`
  MODIFY `id_bentuk_perjanjian` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `data_pengajuan`
--
ALTER TABLE `data_pengajuan`
  MODIFY `id_data_pengajuan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `implementasi_kerja_sama`
--
ALTER TABLE `implementasi_kerja_sama`
  MODIFY `id_implementasi_kerja_sama` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `jenis_pengajuan`
--
ALTER TABLE `jenis_pengajuan`
  MODIFY `id_jenis_pengajuan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `kategori_kerja_sama`
--
ALTER TABLE `kategori_kerja_sama`
  MODIFY `id_kategori_kerja_sama` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `kerja_sama_eksternal`
--
ALTER TABLE `kerja_sama_eksternal`
  MODIFY `id_kerja_sama_eksternal` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `kerja_sama_internal`
--
ALTER TABLE `kerja_sama_internal`
  MODIFY `id_kerja_sama_internal` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `negara_asal_pengajuan`
--
ALTER TABLE `negara_asal_pengajuan`
  MODIFY `id_negara_pengajuan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `status_kerja_sama`
--
ALTER TABLE `status_kerja_sama`
  MODIFY `id_status_kerja_sama` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `status_pengajuan`
--
ALTER TABLE `status_pengajuan`
  MODIFY `id_status_pengajuan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user_level`
--
ALTER TABLE `user_level`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
