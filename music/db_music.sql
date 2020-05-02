-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 02, 2020 at 05:28 PM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_music`
--

-- --------------------------------------------------------

--
-- Table structure for table `genre`
--

CREATE TABLE `genre` (
  `id` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `genre`
--

INSERT INTO `genre` (`id`, `name`) VALUES
('01', 'Pop'),
('02', 'Jazz'),
('03', 'Religi'),
('genre-2005020253268199', 'HIPHOP'),
('genre-2005020339115758', 'Sholawat'),
('genre-2005020343137084', 'Dance'),
('genre-2005020406568967', 'Solo');

-- --------------------------------------------------------

--
-- Table structure for table `music`
--

CREATE TABLE `music` (
  `id` varchar(20) NOT NULL,
  `title` varchar(100) NOT NULL,
  `durasi` varchar(10) NOT NULL,
  `id_genre` varchar(100) NOT NULL,
  `Id_singer` varchar(100) NOT NULL,
  `photo` varchar(50) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `music`
--

INSERT INTO `music` (`id`, `title`, `durasi`, `id_genre`, `Id_singer`, `photo`, `deskripsi`) VALUES
('music-20050203433998', 'Dont_Let_Me_Down_-_The_Chainsmokers_-_Choreography_-_FitDance_Life.mp4', '03:31', 'genre-2005020343137084', 'singer-2005020343229488', 'dance.jpg', 'Dance Chainsmoker Dont Let Me Down'),
('music-20050204043419', '100_ways_zhavia.mp4', '02:46', 'genre-2005020253268199', 'singer-2005020404257311', 'zhavia.jpg', '100 Ways Untuk Sukses Keep Spirit Guy&#039;s'),
('music-20050204070875', 'One Direction - Night Changes (Acoustic).mp4', '03:43', 'genre-2005020406568967', 'singer-2005020406443720', 'onedirection.jpg', 'Acoustic One Direction Night Changes'),
('music-20050204131735', 'The_Chainsmokers_Coldplay_-_Something_Just_Like_This_(Lyric).mp4', '04:07', 'genre-2005020253268199', 'singer-2005020413027430', 'chainmoker.jpg', 'The Chainsmokers &amp; Coldplay - Something Just Like This (Lyric) :D'),
('music-20050204222432', 'Martin_Garrix_Dua_Lipa_-_Scared_To_Be_Lonely_(Official_Video)(720p).MP4', '03:50', 'genre-2005020253268199', 'singer-2005020420245532', 'martin.jpg', 'Martin Garrix   Dua Lipa - Scared To Be Lonely Keep Enjoy Guy&#039;s ... :D');

-- --------------------------------------------------------

--
-- Table structure for table `singers`
--

CREATE TABLE `singers` (
  `id` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `singers`
--

INSERT INTO `singers` (`id`, `name`) VALUES
('01', 'ariel noah'),
('02', 'rhoma irama'),
('03', 'pasha ungu'),
('04', 'nikita willy'),
('05', 'hamid'),
('singer-2005020302413595', 'Agnez Monika'),
('singer-2005020302592806', 'Tulus Abadi'),
('singer-2005020339015796', 'Habib Syech'),
('singer-2005020343229488', 'Soreal Dance'),
('singer-2005020404257311', 'Zhavia Ward'),
('singer-2005020406443720', 'One Direction'),
('singer-2005020413027430', 'Chainsmoker'),
('singer-2005020420245532', 'Martin Garrix');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `genre`
--
ALTER TABLE `genre`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `music`
--
ALTER TABLE `music`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_genre` (`id_genre`,`Id_singer`);

--
-- Indexes for table `singers`
--
ALTER TABLE `singers`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
