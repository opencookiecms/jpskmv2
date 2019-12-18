-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 21, 2019 at 04:54 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 5.6.39

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jpskursus`
--

-- --------------------------------------------------------

--
-- Table structure for table `idjps`
--

CREATE TABLE `idjps` (
  `kId` int(11) NOT NULL,
  `jumlahHadir` int(11) DEFAULT NULL,
  `dayone` int(1) DEFAULT NULL,
  `daytwo` int(1) DEFAULT NULL,
  `daythree` int(1) DEFAULT NULL,
  `dayfour` int(1) DEFAULT NULL,
  `dayfive` int(1) DEFAULT NULL,
  `daysix` int(1) DEFAULT NULL,
  `daysvn` int(1) DEFAULT NULL,
  `usrId` int(11) DEFAULT NULL,
  `kusId` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `idjps`
--

INSERT INTO `idjps` (`kId`, `jumlahHadir`, `dayone`, `daytwo`, `daythree`, `dayfour`, `dayfive`, `daysix`, `daysvn`, `usrId`, `kusId`) VALUES
(174, 3, 1, 1, 1, 0, 0, 0, 0, 199, 37),
(175, 0, 0, 1, 0, 1, 1, 0, 0, 200, 37),
(176, 3, 0, 0, 1, 0, 1, 1, 0, 222, 37),
(177, 0, 0, 0, 0, 0, 0, 0, 0, 174, 36),
(178, 0, 0, 0, 0, 0, 0, 0, 0, 175, 36),
(179, 0, 0, 0, 0, 0, 0, 0, 0, 176, 36),
(180, 0, 0, 0, 0, 0, 0, 0, 0, 199, 36),
(181, 2, 1, 1, 0, 0, 0, 0, 0, 175, 37),
(182, 3, 1, 0, 0, 0, 0, 1, 1, 223, 37),
(183, NULL, 0, 0, 0, 0, 0, 0, 0, 197, 37),
(184, NULL, 0, 0, 0, 0, 0, 0, 0, 198, 37),
(185, NULL, 0, 0, 0, 0, 0, 0, 0, 199, 37),
(186, 3, 1, 1, 1, 0, 0, 0, 0, 174, 38),
(187, 1, 0, 1, 0, 0, 0, 0, 0, 175, 38),
(188, NULL, 0, 0, 0, 0, 0, 0, 0, 176, 38),
(189, 2, 1, 0, 1, 0, 0, 0, 0, 193, 38),
(190, 1, 1, 0, 0, 0, 0, 0, 0, 194, 38),
(191, 7, 1, 1, 1, 1, 1, 1, 1, 174, 37);

-- --------------------------------------------------------

--
-- Table structure for table `idjps3`
--

CREATE TABLE `idjps3` (
  `kId` int(11) NOT NULL,
  `Kehadiran` varchar(10) DEFAULT NULL,
  `jumlahHadir` int(11) DEFAULT NULL,
  `hari` int(11) DEFAULT NULL,
  `usrId` int(11) DEFAULT NULL,
  `kusId` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kursus`
--

CREATE TABLE `kursus` (
  `kusId` int(11) NOT NULL,
  `KusName` varchar(150) COLLATE utf8_bin NOT NULL,
  `KusBegin` date NOT NULL,
  `kusEnd` date NOT NULL,
  `kusTempat` varchar(60) COLLATE utf8_bin NOT NULL,
  `kusTahun` int(11) NOT NULL,
  `kurHari` int(10) NOT NULL,
  `usrId` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `kursus`
--

INSERT INTO `kursus` (`kusId`, `KusName`, `KusBegin`, `kusEnd`, `kusTempat`, `kusTahun`, `kurHari`, `usrId`) VALUES
(36, 'Kursus Kerjaya', '2018-01-03', '2018-01-24', 'Sand Bridget Langkawi ', 2017, 1, NULL),
(37, 'Kursus Pemasangan Pump', '2018-01-05', '2018-01-16', 'Langkawi', 2017, 7, NULL),
(38, 'Kursus', '2018-01-31', '2018-02-02', 'Langkawi', 2017, 3, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `usrId` int(11) NOT NULL,
  `usrName` varchar(150) COLLATE utf8_bin DEFAULT NULL,
  `usrIcNo` varchar(20) COLLATE utf8_bin DEFAULT NULL,
  `Jawatan` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `GredJawatan` varchar(10) COLLATE utf8_bin DEFAULT NULL,
  `userUnit` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `jmKhdir` int(11) DEFAULT NULL,
  `usersgroups` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`usrId`, `usrName`, `usrIcNo`, `Jawatan`, `GredJawatan`, `userUnit`, `jmKhdir`, `usersgroups`) VALUES
(174, 'MOHD JAFRI BIN MOHD SHAARI', '710131-02-5141', 'PEMBANTU AWAM', 'H11', 'Sokongan 2', 10, 4),
(175, 'ABD DHANI BIN BAKAR', '591012-02-5043', 'PEMBANTU AWAM', 'H11', 'Sokongan 2', 0, 4),
(176, 'MOHD ZAKI BIN MOHD ZAIN', '671003-02-5439', 'PEMBANTU AWAM', 'H11', 'Sokongan 2', 0, 4),
(193, 'SAIFUL ADLI BIN RASHID', '740502-02-5755', 'PEMBANTU AWAM', 'H11', 'Sokongan 2', 0, 3),
(194, 'BAHARUDDIN BIN AHMAD', '640521-02-5699', 'PEMBANTU AWAM', 'H11', 'Sokongan 2', 0, 3),
(195, 'MOHD KHAIRI BIN AWANG DAUD @ SALLEH', '660301-02-5775', 'PEMBANTU AWAM', 'H11', 'Sokongan 2', 0, 3),
(196, 'RAZALI BIN AHMAD', '640125-02-5697', 'PEMBANTU AWAM', 'H11', 'Sokongan 2', 0, 2),
(197, 'ZAKARIA BIN AWANG', '650825-02-5873', 'PEMBANTU AWAM', 'H11', 'Sokongan 2', 0, 2),
(198, 'SINASAMY S/O RAMASAMY', '641208-02-5195', 'PEMBANTU AWAM', 'H11', 'Sokongan 2', 0, 2),
(199, 'BASHAH RUDIN BIN ALI', '670923-02-5007', 'PEMBANTU AWAM', 'H11', 'Sokongan 2', 0, 1),
(200, 'AHMAD SHUKRI BIN ABDUL', '641016-02-5027', 'PEMBANTU AWAM', 'H11', 'Sokongan 2', 0, 1),
(222, 'MUHAMAD BAKRI BIN HUSAIN', '811019-07-5205', 'Pembantu Awam', 'H11', 'Sokongan 2', 0, 1),
(223, 'Zarina binti Awang', '788', 'PT', 'G2', 'Sokongan 2', NULL, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `idjps`
--
ALTER TABLE `idjps`
  ADD PRIMARY KEY (`kId`),
  ADD KEY `userId` (`usrId`),
  ADD KEY `KursusId` (`kusId`);

--
-- Indexes for table `idjps3`
--
ALTER TABLE `idjps3`
  ADD PRIMARY KEY (`kId`);

--
-- Indexes for table `kursus`
--
ALTER TABLE `kursus`
  ADD PRIMARY KEY (`kusId`),
  ADD UNIQUE KEY `userId` (`usrId`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`usrId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `idjps`
--
ALTER TABLE `idjps`
  MODIFY `kId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=192;

--
-- AUTO_INCREMENT for table `idjps3`
--
ALTER TABLE `idjps3`
  MODIFY `kId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kursus`
--
ALTER TABLE `kursus`
  MODIFY `kusId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `usrId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=224;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
