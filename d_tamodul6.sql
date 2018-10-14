-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 14, 2018 at 06:28 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 5.6.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `d_tamodul6`
--

-- --------------------------------------------------------

--
-- Table structure for table `t_posting`
--

CREATE TABLE `t_posting` (
  `id` varchar(5) NOT NULL,
  `judul` varchar(30) NOT NULL,
  `posting` text NOT NULL,
  `gambar` text NOT NULL,
  `tanggal` datetime NOT NULL,
  `nim` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_posting`
--

INSERT INTO `t_posting` (`id`, `judul`, `posting`, `gambar`, `tanggal`, `nim`) VALUES
('', 'Postingan Pertama', 'odifikasi dari soal Jurnal 6 dengan menambahkan :\r\n1. Setelah user melakukan login, user akan berada pada halaman awal yang menampilkan data diri user.\r\n2. Pada halaman awal pengguna terdapat menu untuk melakukan edit yang merupakan link redirect ke halaman editprofile.php\r\n3. Pada halaman awal juga terdapat menu untuk melakukan posting cerita yang merupakan redirect ke halaman posting.php\r\n4. Pada halaman posting terdapat inputan textarea sebagai tempat user membuat cerita yang akan di posting, form inputan \r\n   posting dengan ketentuan rows=20 cols=80.', 'uploads/makrab Feb 2018_180512_0006.jpg', '2018-10-14 18:19:47', '6701174151');

-- --------------------------------------------------------

--
-- Table structure for table `t_tamodul6`
--

CREATE TABLE `t_tamodul6` (
  `nama` varchar(35) NOT NULL,
  `nim` varchar(10) NOT NULL,
  `kelas` varchar(20) NOT NULL,
  `jenis_kelamin` varchar(15) NOT NULL,
  `hobi` varchar(20) NOT NULL,
  `fakultas` varchar(5) NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_tamodul6`
--

INSERT INTO `t_tamodul6` (`nama`, `nim`, `kelas`, `jenis_kelamin`, `hobi`, `fakultas`, `alamat`) VALUES
('Nining Parwati', '6701174151', 'D3MI-41-02', 'Perempuan', 'Belanja', 'FIT', 'Sukapura');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `t_posting`
--
ALTER TABLE `t_posting`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_tamodul6`
--
ALTER TABLE `t_tamodul6`
  ADD PRIMARY KEY (`nim`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
