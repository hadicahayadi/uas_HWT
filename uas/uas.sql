-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 11 Des 2014 pada 14.31
-- Versi Server: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `uas`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `gallery`
--

CREATE TABLE IF NOT EXISTS `gallery` (
`id` int(11) NOT NULL,
  `title` varchar(20) NOT NULL,
  `body` text NOT NULL,
  `file` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `loginsystem`
--

CREATE TABLE IF NOT EXISTS `loginsystem` (
`user_id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(100) NOT NULL,
  `tugas` varchar(100) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data untuk tabel `loginsystem`
--

INSERT INTO `loginsystem` (`user_id`, `username`, `password`, `tugas`) VALUES
(1, 'admin', '$2y$10$dhaskjdsahiyerqr12312uKG7tYbEI0Pb14iIN24.jHUjOkuyO7bq', ''),
(2, 'hadi', '$2y$10$dhaskjdsahiyerqr12312uAVT329YLyLvfrFqPeG01rn.W5e/kGMm', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswa`
--

CREATE TABLE IF NOT EXISTS `mahasiswa` (
`ID` int(11) NOT NULL,
  `Nama` varchar(50) NOT NULL,
  `Jurusan` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `no_telepon` varchar(50) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=35 ;

--
-- Dumping data untuk tabel `mahasiswa`
--

INSERT INTO `mahasiswa` (`ID`, `Nama`, `Jurusan`, `alamat`, `no_telepon`) VALUES
(17, 'lee', 'akuntansi', 'karang anyar', '0845452124'),
(23, 'santa', 'pariwisata', 'kosambi', '6485245'),
(25, 'sad', 'asda', 'asdasdas', 'asdas'),
(29, 'Orang Pintar', 'marketing', '', ''),
(30, 'Orang Pintar', 'marketing', '', ''),
(33, '', '', '', ''),
(34, 'Orang Keren', 'marketing', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `loginsystem`
--
ALTER TABLE `loginsystem`
 ADD PRIMARY KEY (`user_id`), ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
 ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `loginsystem`
--
ALTER TABLE `loginsystem`
MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=35;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
