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
-- Database: `jpspro`
--

-- --------------------------------------------------------

--
-- Table structure for table `dp_gps`
--

CREATE TABLE `dp_gps` (
  `gps_id` int(11) NOT NULL,
  `dp_lata` int(11) DEFAULT NULL,
  `dp_latb` int(11) DEFAULT NULL,
  `dp_latc` int(11) DEFAULT NULL,
  `dp_longa` int(11) DEFAULT NULL,
  `dp_longb` int(11) DEFAULT NULL,
  `dp_longc` int(11) DEFAULT NULL,
  `dp_sungai` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `dp_sistem` varchar(150) COLLATE utf8_bin DEFAULT NULL,
  `dp_subsistem` varchar(150) COLLATE utf8_bin DEFAULT NULL,
  `dp_komponen` varchar(150) COLLATE utf8_bin DEFAULT NULL,
  `dp_dimensi` varchar(150) COLLATE utf8_bin DEFAULT NULL,
  `dp_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `dp_gps`
--

INSERT INTO `dp_gps` (`gps_id`, `dp_lata`, `dp_latb`, `dp_latc`, `dp_longa`, `dp_longb`, `dp_longc`, `dp_sungai`, `dp_sistem`, `dp_subsistem`, `dp_komponen`, `dp_dimensi`, `dp_id`) VALUES
(11, 3, 3, 3, 3, 3, 3, 'SUNGAI', 'SISTEM', 'SUB', 'KOM', 'DIM', 23),
(12, 4, 4, 4, 4, 4, 4, 'SUNGAI', 'SISTEM', 'SUB SISTEM', 'KOMPONEN', 'DIMENSI', 24);

-- --------------------------------------------------------

--
-- Table structure for table `dp_projek`
--

CREATE TABLE `dp_projek` (
  `projek_id` int(11) NOT NULL,
  `df_nosebutharga` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `df_tarikmohon` date DEFAULT NULL,
  `df_jsebutharga` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `df_tajuk` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `df_daerah` varchar(25) COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `dp_projek`
--

INSERT INTO `dp_projek` (`projek_id`, `df_nosebutharga`, `df_tarikmohon`, `df_jsebutharga`, `df_tajuk`, `df_daerah`) VALUES
(23, 'JKL/ST/201888/OP/200', '2018-12-14', 'Lantikan Terus', 'TAJUK PROJEK JABATAN PEGAIRAN DAN SALIRAN NEGERI KEDAH DARUL AMAN', 'Kuala Muda'),
(24, 'JKL/ST/201888/OP/2002', '2018-12-20', 'Sebutharga', 'JABATAN PENGAIRAN DAN SALIRAN NEGERI KEDAH', 'Kuala Muda'),
(25, 'JKL/ST/201888/OP/2001', '2018-12-03', 'Sebutharga', 'TAJUK PROJEK', 'Baling');

-- --------------------------------------------------------

--
-- Table structure for table `dp_projekinfo`
--

CREATE TABLE `dp_projekinfo` (
  `info_id` int(11) NOT NULL,
  `df_gred` varchar(10) COLLATE utf8_bin DEFAULT NULL,
  `df_kategori` varchar(10) COLLATE utf8_bin DEFAULT NULL,
  `df_khusus1` varchar(10) COLLATE utf8_bin DEFAULT NULL,
  `df_khusus2` varchar(20) COLLATE utf8_bin NOT NULL,
  `df_khusus3` varchar(20) COLLATE utf8_bin NOT NULL,
  `df_taraf` varchar(10) COLLATE utf8_bin DEFAULT NULL,
  `df_tempohsiap` varchar(11) COLLATE utf8_bin DEFAULT NULL,
  `dp_bulanmig` varchar(10) COLLATE utf8_bin DEFAULT NULL,
  `df_hargadoc` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `df_tarikhnotis` date DEFAULT NULL,
  `df_tarikhlawat` int(2) DEFAULT NULL,
  `df_tarikhdocmula` int(2) DEFAULT NULL,
  `df_tarikhdocakhir` int(2) DEFAULT NULL,
  `df_tarikhtutup` int(2) DEFAULT NULL,
  `df_juruterad` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `df_jurutera` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `df_penolongkanan` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `df_penolong` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `df_kodvot` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `df_peruntukan` varchar(20) COLLATE utf8_bin DEFAULT NULL,
  `df_bakiperuntukan` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `dp_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `dp_projekinfo`
--

INSERT INTO `dp_projekinfo` (`info_id`, `df_gred`, `df_kategori`, `df_khusus1`, `df_khusus2`, `df_khusus3`, `df_taraf`, `df_tempohsiap`, `dp_bulanmig`, `df_hargadoc`, `df_tarikhnotis`, `df_tarikhlawat`, `df_tarikhdocmula`, `df_tarikhdocakhir`, `df_tarikhtutup`, `df_juruterad`, `df_jurutera`, `df_penolongkanan`, `df_penolong`, `df_kodvot`, `df_peruntukan`, `df_bakiperuntukan`, `dp_id`) VALUES
(12, 'G3', 'B | Pembin', 'C1', 'C2', 'C3', 'Bukan Bumi', '5', 'Bulan', '10', '2018-11-21', 4, 5, 6, 7, 'Zainuddin bin Yusoff, AMP., BCK', 'Nurul', 'A.A', 'A.A', 'JPS0001922', 'Persekutuan', '20.00', 23),
(13, 'G1', 'B', '', '', '', 'Bumiputera', '8', 'Minggu', '70', '2018-12-12', 2, 3, 4, 5, 'Zainuddin bin Yusoff, AMP., BCK', 'HAZWANI', 'HISYAM', 'JUJU', 'KOV20312321', 'Negeri', '90021', 24);

-- --------------------------------------------------------

--
-- Table structure for table `kontraktor`
--

CREATE TABLE `kontraktor` (
  `kontraktorId` int(11) NOT NULL,
  `konName` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `KonAlamat` text COLLATE utf8_bin,
  `konAlamatExtS` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `konAlamatExtD` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `konPoskod` int(5) UNSIGNED ZEROFILL DEFAULT NULL,
  `konBandar` varchar(20) COLLATE utf8_bin DEFAULT NULL,
  `konDaerah` varchar(30) COLLATE utf8_bin DEFAULT NULL,
  `konNegeri` varchar(30) COLLATE utf8_bin DEFAULT NULL,
  `konTel` varchar(20) COLLATE utf8_bin DEFAULT NULL,
  `sijilPPKGredOne` varchar(5) COLLATE utf8_bin DEFAULT NULL,
  `sijilPPKCatOne` varchar(5) COLLATE utf8_bin DEFAULT NULL,
  `sijilPPKKhuOne` varchar(200) COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `kontraktor`
--

INSERT INTO `kontraktor` (`kontraktorId`, `konName`, `KonAlamat`, `konAlamatExtS`, `konAlamatExtD`, `konPoskod`, `konBandar`, `konDaerah`, `konNegeri`, `konTel`, `sijilPPKGredOne`, `sijilPPKCatOne`, `sijilPPKKhuOne`) VALUES
(2, 'ADK SEJATI ENTERPRISE', 'NO. 1400, LORONG ANGSANA 41', 'TAMAN KELADI', NULL, 08000, 'Sungai Petani', 'Kedah', 'Kedah', NULL, 'G1', 'B', '                                          B04  B14  B24'),
(3, 'BELLFON SISTEM ENTERPRISE', '802, LEBUH DELIMA', 'TAMAN DELIMA', NULL, 08000, 'SUNGAI PETANI', 'KUALA MUDA', 'Kedah', NULL, 'G1', 'B', '                                        B24  B04'),
(4, 'RONIMAS ENTERPRISE', 'NO. F-617, KAMPUNG HUTAN GELAM', 'JALAN BATU LINTANG', 'TIKAM BATU', 08600, 'Sungai Petani', 'Kuala Muda', 'Kedah', NULL, 'G1', 'B', '                  B04  B24  '),
(5, 'MDH MAJU ENTERPRISE', 'NO. 118-D, LORONG 15', 'TAMAN SEJATI INDAH', NULL, 08000, 'Sungai Petani', 'Kuala Muda', 'Kedah', '-', 'G1', 'B', '             B24  B14  B04  B28'),
(6, 'ZIZAN TRADING(M) SDN BHD', 'NO. 3, PLOT 1 TAMAN KRISTAL', 'PADANG TEMUSU', NULL, 08000, 'Sungai Petani', 'Kuala Muda', 'Kedah', NULL, 'G1', 'B', '          B24  B04  '),
(7, 'MUZIL TRADING', 'NO. 4579, LORONG INANG 11', 'TAMAN RIA JAYA', NULL, 08000, 'Sungai Petani', 'Kuala Muda', 'Kedah', NULL, 'G1', 'B', '              B04  B14'),
(8, 'ZULKEPLE ENTERPRISE', '644 F, KAMPUNG BATU 2', 'JALAN SUNGAI BONGKOK', 'GURUN', 08300, 'Sungai Petani', 'Kuala Muda', 'Kedah', NULL, 'G1', 'B', '      B24  B04  B28'),
(9, 'BATA TRADING', '16, TAMAN MELOR FASA 3', 'JALAN SUNGAI LAYAR HUJUNG', NULL, 08000, 'SUNGAI PETANI', 'Kuala Muda', 'Kedah', NULL, 'G1', 'B', '          B04  B24  B09'),
(10, 'SYARIKAT KOBIN JAYA', 'F-604, KAMPONG BUJANG,BEDONG', 'BEDONG', NULL, 08100, 'Sungai Petani', 'Kuala Muda', 'Kedah', NULL, 'G1', 'B', '            B04  B24  09'),
(11, 'BUKIT BANJIR ENTERPRISE', 'NO.2771, LORONG 52', 'TAMAN RIA', NULL, 08000, 'SUNGAI PETANI', 'Kuala Muda', 'Kedah', NULL, 'G1', 'B', '                  B04    B24  '),
(12, 'MOKHTAR PLUMBING COMPANY', '253, KAMPONG SUNGAI GELAM', 'MUKIM BUJANG', 'BEDONG', 08100, 'Sungai Petani', 'Kedah', 'Kedah', NULL, 'G1', 'B', '    B10  B04  B14  B24'),
(13, 'WAHAB ENTERPRISE', '575, LORONG 93', 'TAMAN RIA', NULL, 08000, 'SUNGAI PETANI', 'Kuala Muda', 'Kedah', NULL, 'G1', 'B', '        B04  B24'),
(14, 'TEMUSU JATI ENTERPRISE', 'NO.36 A, KAMPUNG TENGAH', 'PADANG TEMUSU', NULL, 08000, 'SUNGAI PETANI', 'Kuala Muda', 'Kedah', NULL, 'G1', 'B', '      B24  B14  B04  B28'),
(15, 'FEBAH ENTERPRISE', '61-B, TAMAN DESA AMAN FASA 3', 'SUNGAI LALANG', 'BEDONG', 08100, 'SUNGAI PETANI', 'Kuala Muda', 'Kedah', '-', 'G1', 'B', '            B04  B14'),
(16, 'MIDMAN EN', 'NO. 76, LORONG 1', 'TAMAN KUALA MUDA', NULL, 08000, 'SUNGAI PETANI', 'KUALA MUDA', 'Kedah', NULL, 'G1', 'B', '      B04  B24'),
(17, 'MAHAMAD FADZILI CONSTRUCTION', 'NO. 90 TAMAN PKNK', 'BAKAR ARANG', NULL, 08000, 'Sungai Petani', 'Kuala Muda', 'Kedah', NULL, 'G2', 'B', '  B04  B14'),
(18, 'TAAWAN ENTERPRISE', 'NO. 195, LORONG SEMARAK SATU', 'TAMAN SEMARAK', 'SUNGAI PASIR', 08000, 'SUNGAI PETANI', 'Kuala Muda', 'Kedah', NULL, 'G1', 'B', '              B04  B14  '),
(19, 'USINA ENTERPRISE', 'NO. 1401, LORONG ANGSANA 41', 'TAMAN KELADI', NULL, 08000, 'SUNGAI PETANI', 'Kuala Muda', 'Kedah', '04-4210289', 'G1', 'B', '    B04  B24  B28 '),
(20, 'SYARIKAT SZIMA', 'LOT 628, KAMPUNG BARU FASA 2', 'PENGKALAN SEMELING', NULL, 08100, 'Sungai Petani', 'Kuala Muda', 'Kedah', '-', 'G1', 'B', '    B04  B14  B24 B09'),
(21, 'ZULKIFLEE BIN YUSOFF', 'NO. 190, LENGKOK SP HEIGHTS 11', 'SP HEIGHTS', NULL, 08000, 'SUNGAI PETANI', 'KUALA MUDA', 'Kedah', NULL, 'G1', 'B', '             B04  B24  B28'),
(22, 'SYAWAL BERKAT ENTERPRISE', 'NO. A53 TINGKAT 1, JALAN 1A', 'KAWASAN PERUSAHAAN SUNGAI LALANG', NULL, 08000, 'Sungai Petani', 'Kuala Muda', 'Kedah', '-', 'G1', 'B', '    B04  B14  B28'),
(23, 'MASISHAK ENTERPRISE', 'F291, JALAN POKOK KABU', 'TIKAM BATU', NULL, 08600, 'Sungai Petani', 'Kuala Muda', 'Kedah', '-', 'G1', 'B', '    B04  B24'),
(24, 'RAMDAN FITRI ENTERPRISE', '291A, TIKAM BATU UJUNG', 'TIKAM BATU', NULL, 08600, 'Sungai Petani', 'Kuala Muda', 'Kedah', NULL, 'G1', 'B', '    B04   B24  B10   B28'),
(25, 'BTA MAWAR ENTERPRISE', 'N0.5,LORONG 3', 'TAMAN SRI BEDONG', NULL, 08100, 'SUNGAI PETANI', 'KUALA MUDA', 'Kedah', NULL, 'G2', 'B', '        B24  B04  B28'),
(26, 'NDR SETIA ENTERPRISE', 'F462, KAMPUNG TELOK WANG', NULL, NULL, 08000, 'SUNGAI PETANI', 'KUALA MUDA', 'Kedah', NULL, 'G1', 'B', '        B04  B14'),
(27, 'NUSANTARA ENGINEERING & CONSTRUCTION', 'F523 B, KAMPUNG TELUK WANG KECIL', NULL, NULL, 08000, 'SUNGAI PETANI', 'KUALA MUDA', 'Kedah', NULL, 'G1', 'B', '        B12  B04  B24  B14  B02    '),
(28, 'GANDAMAJU RESOURCES', 'NO. 33 JALAN DAHLIA 2', 'TAMAN DAHLIA', NULL, 08000, 'Sungai Petani', 'Kuala Muda', 'Kedah', NULL, 'G1', 'B', '          B04  B14  B24  B09'),
(29, 'IMS JAYA TRADING', '19K TAMAN LAMBAIAN JERAI', 'GUAR CEMPEDAK', NULL, 08800, 'GURUN', 'KUALA MUDA', 'Kedah', NULL, 'G1', 'B', '        B04  B24'),
(30, 'ZANOMA SARI ENTERPRISE', 'NO.10, KAMPUNG BARU RISDA', 'GURUN', NULL, 08300, 'Sungai Petani', 'Kuala Muda', 'Kedah', '-', 'G1', 'B', '    B04  B14'),
(31, 'INDAH SUASA ENTERPRISE', '1355, LORONG ANGSANA 41', 'TAMAN KELADI', NULL, 08000, 'Sungai Petani', 'Kuala Muda', 'Kedah', NULL, 'G1', 'B', '        B04   B24  B14   B28'),
(32, 'MUASALA ENTERPRISE', 'NO.99, BATU 42, JALAN ASAM JAWA', 'MUKIM PULAI', NULL, 09100, 'BALING', 'BALING', 'Kedah', NULL, 'G1', 'B', '    B04 B24  '),
(33, 'MOSAK ENTERPRISE', 'NO.83A, JALAN SUNGAI LIMAU', 'KAMPUNG BARU', 'DALAM WANG', 09100, 'BALING', 'BALING', 'Kedah', NULL, 'G1', 'B', '          B04  B24'),
(34, 'FZ BAKTI ENTERPRISE', 'NO.56, KAMPONG KEDA SADIK', 'KUPANG', NULL, 09200, 'BALING', 'BALING', 'Kedah', NULL, 'G1', 'B', '      B04  B28'),
(35, 'ANIN COMMUNICATIONS & TRADING', 'NO. 138, KAMPONG BUKIT IBOI', 'KUPANG', NULL, 09200, 'BALING', 'BALING', 'Kedah', NULL, 'G1', 'B', '    B04  B24'),
(36, 'OBI USAHAJAYA ENTERPRISE', 'KAMPUNG LAHAR BONGOR', 'BALING', NULL, 09100, 'Baling', 'Baling', 'Kedah', NULL, 'G1', 'B', '        B04  B07    B24  '),
(37, 'AKHYAR BAKTI ENTERPRISE                           ', 'NO. 42, KOMPLEKS KOPERASI ', 'JALAN BADLISHAH', NULL, 09100, 'BALING', 'BALING', 'Kedah', NULL, 'G1', 'B', '      B14  B04'),
(38, 'ARMADA BELANTARA ENTERPRISE', 'LOT 102A', 'BANGUNAN PROJEK MALAYA', 'TAMAN DESA CEMPA', 09200, 'BALING', 'BALING', 'Kedah', NULL, 'G1', 'B', '      B04  B24  '),
(39, 'WAHYU ENTERPRISE', 'BT. 48, KAMPUNG TELUK SUNGAI DURIAN', 'BONGOR', NULL, 09100, 'Baling', 'Baling', 'Kedah', NULL, 'G1', 'B', '      B04  B24'),
(40, 'PERNIAGAAN KELUARGA', '9, KAMPONG PADANG EMPANG', 'IBOI', 'KUPANG', 09200, 'BALING', 'BALING', 'Kedah', NULL, 'G1', 'B', '         B04  B24  B28'),
(41, 'KOOP PEMB KAMPUNG KEDA BANDAR BHD', 'NO. 17, KAMPUNG KEDA', NULL, 'KUPANG', 09100, 'Baling', 'Baling', 'Kedah', NULL, 'G1', 'B', '          B14  B04'),
(42, 'PERNIAGAAN SINAR CHEMARA', '74, KAMPUNG CHEMARA', 'JENIANG', NULL, 08200, 'Sik', 'Sik', 'Kedah', '-', 'G1', 'B', '      B28 B24  B04'),
(43, 'GERBANG JUARA ENTERPRISE', 'NO.4 KAMPONG BATU 50', 'JALAN TELAGA BATU', NULL, 08200, 'SIK', 'SIK', 'Kedah', NULL, 'G1', 'B', '          B04  B14  B09  B28 B24'),
(44, 'ENZEK MURNI ENTERPRISE', '405, JALAN ANGGERIK', NULL, NULL, 08200, 'SIK', 'SIK', 'Kedah', NULL, 'G1', 'B', '    B24  B09  B14  B28  B04  B01'),
(45, 'TERNAS ENTERPRISE', 'NO.153, SIK DALAM', 'SIK', NULL, 08200, 'SIK', 'SIK', 'Kedah', NULL, 'G1', 'B', '          B04  B24  B09  B14  B28'),
(46, 'SERASI TEGUH ENTERPRISE', 'NO. 4, BANGUNAN MAWAR', 'TINGKAT 2', NULL, 08200, 'SIK', 'SIK', 'Kedah', NULL, 'G1', 'B', '      B24  B28  B01  B14  B04'),
(47, 'MERCU CEMARA ENTERPRISE', 'NO. 226, KAMPUNG CEMARA', 'JENIANG', NULL, 08700, 'SIK', 'SIK', 'Kedah', NULL, 'G1', 'B', '    B09  B24  B04  B28  B14  B01'),
(48, 'TANJAK PERKASA ENTRPRISE', 'NO.173, BUKIT MINYAK', 'KUALA BEGIA', 'JENIANG', 08700, 'Sik', 'Sik', 'Kedah', NULL, 'G1', 'B', '    B24  B04  B28 B01'),
(49, 'AZIMAS DUA SEJATI TRADING', 'KAMPUNG SELAMAT \'A\'', 'TELOI TUA', NULL, 08200, 'SIK', 'SIK', 'Kedah', NULL, 'G1', 'B', '        B04  B24  '),
(50, 'ABD SEJAHTERA ENTERPRISE', 'NO. 104 LORONG 6,', 'TAMAN JERAI EMAS', 'GURUN', 08300, 'SUNGAI PETANI', 'Kuala Muda', 'Kedah', NULL, 'G1', 'B', '    B24  B04  '),
(51, 'PERNIAGAAN KALAM MURNI', 'N0. 11, KG. TELOI TUA', NULL, NULL, 08200, 'SIK', 'SIK', 'Kedah', NULL, 'G2', 'B', '    04  B24  B14'),
(52, 'AZM TRADING', 'NO.6, JALAN PERIKANAN', 'KAMPUNG SUNGAI GELAM', 'BEDONG', 08100, 'Sungai Petani', 'Kuala Muda', 'Kedah', '-', 'G1', 'B', '    B24  B04  B09 B13'),
(53, 'BAINAH ENTERPRISE', 'NO 11, TAMAN TERATAI', 'SUNGAI LAYAR', NULL, 08000, 'Sungai Petani', 'Kuala Muda', 'Kedah', NULL, 'G1', 'B', '    B04  B14  '),
(55, 'BAYU PERMATA ENTERPRISE', '433 LOT 1 KAMPUNG HAJI DIN', 'SUNGAI LAYAR', '', 08000, 'Sungai Petani', 'Kuala Muda', 'Kedah', '', 'G1', 'B', 'B04  B14'),
(57, 'BERKAT ALAM ENTERPRISE', 'NO.9, BANGUNAN MPSPK', 'JALAN KUALA KETIL', NULL, 08000, 'SUNGAI PETANI', 'Kuala Muda', 'Kedah', NULL, 'G2', 'B', '    B04  B10  B14  B12'),
(58, 'BERSAMA  BAKTI ENTERPRISE', 'NO. 3, BANGUNAN IXORA (MDS)', 'PEKAN BATU LIMA', NULL, 08200, 'Sik', 'Sik', 'Kedah', '-', 'G1', 'B', '    B10  B04  B14  B28'),
(59, 'BJ TEGUH ENTERPRISE', 'NO. 6,KOMPLEKS NIAGA 2', 'YAN KECHIL', '', 06900, 'Alor Setar', 'Kedah', 'Kedah', '04-4658600', 'G2', 'B', 'B24  B09  B04  B04  B21'),
(60, 'BS SEPADU ENTERPRISE', 'NO. 6,KAMPONG BANGGOL SETOL', 'BONGOR', NULL, 09100, 'Baling', 'Baling', 'Kedah', NULL, 'G1', 'B', '  B04  B14'),
(62, 'BUDI ANGGUN ENTERPRISE', 'NO. 181 LORONG 8', 'TAMAN DESA ANGGERIK', NULL, 09100, 'Baling', 'Baling', 'Kedah', '014-7403060', 'G1', 'B', '  B04  B24'),
(64, 'BUMI CEMARA ENTERPRISE', 'NO. 66A, KAMPUNG CHEMARA', NULL, NULL, 08200, 'Sik', 'Sik', 'Kedah', NULL, 'G1', 'B', '  B04  B14  B24  B28'),
(65, 'ARAS BUMI ENTERPRISE', 'ND.3 BANGUNAN ANGSANA', 'JALAN TUNKU IBRAHIM', NULL, 08200, 'Sungai Petani', 'Sik', 'Kedah', NULL, 'G1', 'B', '    B04  B14'),
(66, 'CAD ENTERPRISE', 'LOT 386, BELAKANG TAMAN IMPIAN', 'PULAI', '', 09100, 'Baling', 'Baling', 'Kedah', '', 'G1', 'B', 'B04  B24'),
(67, 'CELAK ENTERPRISE', 'KAMPUNG IBOI', 'KUPANG', NULL, 09200, 'Baling', 'Baling', 'Kedah', NULL, 'G1', 'B', '    B04  B24  B02  B28'),
(68, 'CEMPA ENTERPRISE', 'NO.95 PUSAT PERNIAGAAN PEKAN RABU', 'KUAH', '', 07000, 'Langkawi', 'Kedah', 'Kedah', '04-9663437', 'G2', 'B', 'B04  B24  B14  B28'),
(69, 'CHE DAN ENTERPRISE', 'KAMPUNG CHAROK KIT', NULL, NULL, 08200, 'Sik', 'Sik', 'Kedah', NULL, 'G1', 'B', '    B04  B14'),
(70, 'COBERA ENTERPRISE', '2402, LORONG SERAMPANG 5', 'TAMAN RIA JAYA', '', 08000, 'Sungai Petani', 'Kuala Muda', 'Kedah', '', 'G1', 'B', 'B04  B14'),
(71, 'CONSURV MILINIA ENTERPRISE', 'NO.16,LORONG BLM 4/14', 'BANDAR LAGUNA MERBOK', NULL, 08000, 'Sungai Petani', 'Kuala Muda', 'Kedah', NULL, 'G1', 'B', '  B04  B14  B09  B28'),
(72, 'CROSS LINE CONSTRUCTION', 'LOT 102A, BANGUNAN PROJEK MALAYA', 'TAMAN DESA CEMPA', 'KUPANG', 09100, 'Baling', 'Baling', 'Kedah', NULL, 'G1', 'B', '    B04  B24'),
(73, 'CT SURIA ENTERPRISE', 'NO.E-2-F-3, KOMPLEKS PEKAB BARU', NULL, NULL, 09100, 'Baling', 'Baling', 'Kedah', NULL, 'G1', 'B', '    B04  B14  B24'),
(74, 'DABIHA ENTERPRISE', 'NO. 128, TINGKAT 2', 'KOMPLEKS PEKAN RABU', '', 07000, 'LANGKAWI', 'KEDAH', 'Kedah', '04-9669811', 'G2', 'B', 'B04  B20  B14  B24  B02  B10'),
(75, 'DAMAI UTARA ENTERPRISE', 'KAMPUNG BUKIT KECHIL', NULL, NULL, 08000, 'Sungai Petani', 'Kuala Muda', 'Kedah', NULL, 'G1', 'B', '        B04  B24'),
(76, 'DAYAMIDAS ENTERPRISE', 'NO. 3056, LORONG 19', 'TAMAN RIA', NULL, 08000, 'Sungai Petani', 'Kuala Muda', 'Kedah', NULL, 'G1', 'B', '    B14  B04  B15'),
(77, 'DELIMA KOTA ENTERPRISE', 'NO.3, JALAN BUKIT MERIAM', 'KOTA KUALA MUDA', NULL, 08500, 'Sungai Petani', 'Kuala Muda', 'Kedah', '04-4304318', 'G1', 'B', '    B04  B24'),
(78, 'DELTAMAS ENTERPRISE', 'NO. 161, LORONG 6', 'TAMAN PERMAI', NULL, 08000, 'Sungai Petani', 'Kuala Muda', 'Kedah', NULL, 'G1', 'B', '  B04  B02  B24'),
(79, 'DESA MAJU ENTERPRISE', 'NO.48 KAMPUNG SETOL', 'MUKIM PULAI', '', 09100, 'Baling', 'Baling', 'Kedah', '', 'G1', 'B', 'B04  B24  B28'),
(80, 'DIAN IMPIAN CONSTRUCTION', 'NO.102,KAMPUNG TELOK SUNGAI DURIAN', 'MUKIM BONGOR', NULL, 09100, 'Baling', 'Baling', 'Kedah', NULL, 'G1', 'B', '  B04  B14  B24  B28'),
(81, 'DOL TWO ENTERPRISE', 'NO.F20, TINGKAT SATU', 'KOMPLEK SP PLAZA', NULL, 08000, 'Sungai Petani', 'Kedah', 'Kedah', '-', 'G2', 'B', '    B04  B24  B10  B09  B28'),
(82, 'DURA DAMAI ENTERPRISE', 'KAMPONG BATU 5', 'JALAN PARIT PANJANG', NULL, 08200, 'Sik', 'Sik', 'Kedah', '-', 'G1', 'B', '  B04  B24  B28'),
(83, 'DY TEGUH ENTERPRISE', 'NO. C6, JALAN BUKIT BAYU A1', 'BUKIT BAYU', NULL, 08000, 'Sungai Petani', 'Kuala Muda', 'Kedah', '-', 'G1', 'B', '    B04  B14  B24'),
(84, 'ENGCOM ENTERPRISE', 'NO.89, JALAN  4/1', 'TAMAN CEMPAKA', 'BUKIT SELAMBAU', 08010, 'Sungai Petani', 'Kuala Muda', 'Kedah', '-', 'G1', 'B', 'B04  B24  B08'),
(85, 'DAYACIPTA ENTERPRISE', '7B, BANGUNAN MPSP', 'JALAN PASAR', NULL, 08000, 'Sungai Petani', 'Kuala Muda', 'Kedah', NULL, 'G1', 'B', '  B24  B02  B04'),
(87, 'ERA CERGAS ENTERPRISE', 'NO.12 TINGKAT ATAS BANGUNAN RUMAH KEDAI', 'TAMAN JITRA JAYA', '', 06000, 'Alor Setar', 'Kedah', 'Kedah', '', 'G2', 'B', 'B04  B14  B24  B09'),
(88, 'ERA WAWASAN MAJU ENTERPRISE', 'KAMPONG BANGGOL', 'SIDAM KIRI', NULL, 08000, 'Sungai Petani', 'Kuala Muda', 'Kedah', NULL, 'G1', 'B', '          B24  B04  B14'),
(89, 'ERIZA JAYA ENTERPRISE', 'KAMPUNG SUNGAI SETAR', 'MUKIM JENERI', NULL, 08320, 'SIK', 'Sik', 'Kedah', NULL, 'G1', 'B', '    B04  B14  B24  B28  B10'),
(90, 'FAHARI ENTERPRISE', 'NO. 2 BANGUNAN MAWAR', 'PEKAN BARU', '', 08200, 'Sik', 'Sik', 'Kedah', '04-4694378', 'G1', 'B', 'B04  B24  B28  B14'),
(91, 'FARLIS WAJA ENTERPRISE', '94B, JALAN PENGHULU HIM', NULL, NULL, 08000, 'Sungai Petani', 'Kuala Muda', 'Kedah', NULL, 'G1', 'B', '  B04  B24'),
(92, 'FASATERA ENTERPRISE', '25-F, PETI SURAT 10-A', 'JALAN SIK DALAM', NULL, 08200, 'Sik', 'Sik', 'Kedah', NULL, 'G1', 'B', '  B04  B24'),
(93, 'FAUZI AGENSI', 'NO 1, SUASANA PERMAI', 'DARULAMAN GOLF', 'JITRA', 06000, 'Alor Setar', 'Kedah', 'Kedah', '', 'G2', 'B', 'B04'),
(95, 'FIS ENTERPRISE', 'SIMPANG MERBAU KUDUNG', 'MUKIM TELOI', NULL, 08200, 'Sik', 'Sik', 'Kedah', '-', 'G1', 'B', '    B24  B04'),
(96, 'FNZ TEGUH ENTERPRISE', 'D3 NO.12, LORONG SRI TANJUNG 14', 'TAMAN SRI TANJUNG', NULL, 08000, 'Sungai Petani', 'Kuala Muda', 'Kedah', NULL, 'G1', 'B', '  B04  B24'),
(97, 'FUJIMA ENTERPRISE', 'KAMPONG TEMESU', 'MUKIM PULAI', NULL, 09100, 'Baling', 'Baling', 'Kedah', NULL, 'G1', 'B', '  B04  B24'),
(98, 'FUZISA ENTERPRISE', 'NO.308, JALAN WENG', NULL, NULL, 09100, 'Baling', 'Baling', 'Kedah', NULL, 'G1', 'B', '      B04  B14  B28'),
(99, 'FZ IDAMAN TRADING', 'KAMPUNG CHARUK KELUBI', 'SUNGAI PASIR', NULL, 08000, 'SUNGAI PETANI', 'Kuala Muda', 'Kedah', NULL, 'G1', 'B', '  B04 B13  B14  B02  B24'),
(100, 'GABUS JAYA ENTERPRISE', 'KAMPUNG GABUS,', 'MUKIM PULAI', NULL, 09100, 'Baling', 'Baling', 'Kedah', NULL, 'G1', 'B', '      B04  B14'),
(101, 'GAMELAN RIA ENTERPRISE', 'NO.32, KAMPUNG BANGGOL LALANG', 'GURUN', NULL, 08800, 'Sungai Petani', 'Kuala Muda', 'Kedah', NULL, 'G1', 'B', '      B11  B04  B13  B02  B08  B09  B14  B24 B28'),
(102, 'GARISAN BAKTI ENTERPRISE', 'NO.77, PERUMAHAN KEDA', 'KAMPUNG GULAU', 'SIK', 08200, 'Sik', 'Sik', 'Kedah', NULL, 'G1', 'B', '    B04  B24'),
(103, 'GELUNG JAYA ENTERPRISE', 'NO. 2837, LORONG 51', 'TAMAN RIA', '', 08000, 'Sungai Petani', 'Kuala Muda', 'Kedah', '-', 'G1', 'B', 'B04  B24  B14  B28'),
(104, 'GERBANG JUARA ENTERPRISE', 'NO.4,KAMPONG BATU 50', 'JALAN TELAGA BATU', NULL, 08200, 'Sik', 'Sik', 'Kedah', NULL, 'G1', 'B', '  B04  B14  B24'),
(105, 'GUDAI ENTERPRISE', 'KAMPUNG GUDAI', 'MUKIM TELOI', NULL, 09300, 'Baling', 'Baling', 'Kedah', '-', 'G1', 'B', '  B04  B14'),
(106, 'GUZA WIRA ENTERPRISE', 'NO.146A,JALAN KELAB CINTA SAYANG', 'TAMAN RIA JAYA', NULL, 08000, 'Sungai Petani', 'Kuala Muda', 'Kedah', NULL, 'G1', 'B', '    B04  B09  B14  B28'),
(107, 'HADZIR ENTERPRISE', 'NO. 710, LORONG 1/6 A', 'TAMAN SEMARAK', '', 08000, 'Sungai Petani', 'Kuala Muda', 'Kedah', '', 'G1', 'B', 'B04  B12  B02  B13  B24  B14'),
(108, 'HAFRA ENTERPRISE', 'KAMPUNG TOK LIPAN', 'PULAI', NULL, 09100, 'Baling', 'Baling', 'Kedah', NULL, 'G1', 'B', '      B04  B24  B28'),
(109, 'HAJI AND SONS', 'NO.41, PERSIARAAN BLM 4', 'BANDAR LAGUNA MERBOK', NULL, 08000, 'SUNGAI PETANI', 'Kuala Muda', 'Kedah', NULL, 'G1', 'B', '  B04  B14'),
(110, 'HAMDAN BIN AHMAD', '42-D KAMPUNG BENDANG MAN', NULL, NULL, 08200, 'Sik', 'Sik', 'Kedah', NULL, 'G1', 'B', '  B04  B14  B01  B24'),
(111, 'HAMPARAN MEGA ENTERPRISE', 'NO.1027-A, BATU 10', 'BATU HAMPAR', NULL, 08100, 'Sungai Petani', 'Kuala Muda', 'Kedah', '-', 'G1', 'B', '  B04  B24  B28'),
(112, 'HANI ILHAM ENTERPRISE', 'NO. 106 (TINGKAT ATAS), JALAN BUKIT PUTERI 9/10,', 'BANDAR PUTERI JAYA', NULL, 08000, 'Sungai Petani', 'Kuala Muda', 'Kedah', '-', 'G1', 'B', 'B04 B24'),
(113, 'HASH PADU ENTERPRISE', 'NO. 79, PEKAN SIK', NULL, NULL, 08200, 'Sik', 'Sik', 'Kedah', NULL, 'G1', 'B', '    B04  B24'),
(114, 'HASLAH ENTERPRISE', 'NO 8, ORONG 8', 'TAMAN PETANI JAYA', NULL, 08000, 'Sungai Petani', 'Kuala Muda', 'Kedah', NULL, 'G1', 'B', '  B04  B24  B02  B28'),
(115, 'HASNULDZAN ENTERPRISE', 'NO. 9 TAMAN PKNK', 'TIKAM BATU', NULL, 08600, 'Sungai Petani', 'Kuala Muda', 'Kedah', NULL, 'G1', 'B', '    B04  B14  B24'),
(116, 'HAZ JERAI ENTERPRISE', 'NO. 155, LORONG 6', 'TAMAN PERMAI', NULL, 08000, 'Sungai Petani', 'Kuala Muda', 'Kedah', NULL, 'G1', 'B', '  B04  B24  B28'),
(117, 'HIKMAH PERMAI ENTERPRISE', 'NO. 192, KAMPUNG SERUKAM', NULL, NULL, 08000, 'Sungai Petani', 'Kuala Muda', 'Kedah', NULL, 'G1', 'B', '  B14 B04  B28'),
(118, 'HJ.HARON ABU BAKAR & KELUARGA SDN.BHD.', 'NO.10, GERAI MINANGKABAU', 'JALAN MAHMUD', NULL, 09100, 'Baling', 'Baling', 'Kedah', NULL, 'G1', 'B', '        B04  B24  B14  B28'),
(119, 'HME KAIZEN', 'NO. 132, KAMPUNG SEBERANG PEKAN', NULL, NULL, 09100, 'Baling', 'Baling', 'Kedah', NULL, 'G1', 'B', '    B04  B24  B28'),
(120, 'HSF LAYAR ENTERPRISE', 'SETOR NO.86, SUNGAI JAGONG', 'SUNGAI LAYAR', NULL, 08000, 'Sungai Petani', 'Kuala Muda', 'Kedah', NULL, 'G1', 'B', '  B04  B13  B08  B24'),
(121, 'HUZIE WAWASAN TRADING', 'F- 708, PANTAI MERDEKA', 'KOTA KUALA MUDA', NULL, 08500, 'Sungai Petani', 'Kuala Muda', 'Kedah', NULL, 'G1', 'B', '    B04 B14'),
(122, 'IAMY ENTREPRISE', 'NO 77, LRG 2, TAMAN PERUDA', 'SUNGAI PETANI', NULL, 08000, 'Sungai Petani', 'Kuala Muda', 'Kedah', '-', 'G1', 'B', '  B24  B08  B04  B14  B13  B12'),
(123, 'IBRA JAYA ENTERPRISE', 'B-1, PEKAN BARU KEDA', 'KUPANG', '', 09200, 'Baling', 'Baling', 'Kedah', '', 'G1', 'B', 'B04  B14'),
(124, 'IFAH UTARA ENTERPRISE', 'NO.9, KAMPUNG BANGGOL LALANG', 'GURUN', NULL, 08800, 'Sungai Petani', 'Kuala Muda', 'Kedah', NULL, 'G1', 'B', '  B04  B24'),
(125, 'IKATAN RIBALI ENTERPRISE', 'BATU 47 1/2', 'JALAN WENG', '', 09100, 'Baling', 'Baling', 'Kedah', '', 'G1', 'B', 'B24  B04'),
(126, 'ILHAM ENTERPRISE', 'NO.94, HADAPAN KILANG PADI', 'KAMPUNG BELAT', 'KUBUR PANJANG', 06760, 'Alor Setar', 'Kedah', 'Kedah', '', 'G2', 'B', 'B04  B08  B24'),
(127, 'IMA IYANTI ENTERPRISE', 'NO. 204, KELAB CINTA SAYANG', 'SUNGAI PETANI', '', 08000, 'Sungai Petani', 'Kuala Muda', 'Kedah', '04-4256571', 'G1', 'B', 'B04    B24'),
(128, 'IMPIAN SASAR  ENTERPRISE', 'LOT 526-B, KAMPUNG TANDOP', 'JALAN WENG', NULL, 09100, 'Baling', 'Baling', 'Kedah', NULL, 'G1', 'B', '    B04  B24'),
(131, 'ISAL JAYA CONSTRUCTION', 'F 602 KAMPUNG BUKIT KECHIK', 'MK SIMPOR', '', 08000, 'Sungai Petani', 'Kuala Muda', 'Kedah', '', 'G1', 'B', 'B04  B13  B14'),
(132, 'ISHAK SU ENTERPRISE', 'NO. 17 KAMPUNG BANGGOL', 'MUKIM SIK', NULL, 08200, 'Sik', 'Sik', 'Kedah', NULL, 'G1', 'B', '  B04'),
(133, 'IZUAF ENTERPRISE', '88 B, PEKAN BATU LIMA', '', '', 08200, 'Sik', 'Sik', 'Kedah', '', 'G1', 'B', 'B04  B14'),
(134, 'JALINAN MAJU ENTERPRISE', 'NO.9A FELCRA LUBUK BATU', 'KUALA PEGANG', NULL, 09110, 'Baling', 'Baling', 'Kedah', NULL, 'G1', 'B', '  B04  B24'),
(135, 'JALINAN RAKAN ENTERPRISE', 'NO.184 PEKAN KUPANG', '', '', 09100, 'Baling', 'Baling', 'Kedah', '', 'G1', 'B', 'B04  B14  B24'),
(136, 'JAYA KOTA ENTERPRISE', 'NO.1658, JALAN KEMPAS 7', 'TAMAN KEMPAS', NULL, 08000, 'Sungai Petani', 'Kuala Muda', 'Kedah', NULL, 'G1', 'B', '  B04  B14'),
(137, 'JAY\'S ENTERPRISE', 'NO.21,TAMAN SEROJA', 'SIK DALAM', NULL, 08200, 'Sik', 'Sik', 'Kedah', '04-4693086', 'G1', 'B', '  B09  B28  B04 B24  B14'),
(138, 'JENERIH ENTERPRISE', 'NO. A 113, TINGKAT 2', 'TAMAN RIA 12', NULL, 08000, 'Sungai Petani', 'Kedah', 'Kedah', NULL, 'G2', 'B', '  B04 B08 B24'),
(139, 'JERAI JAYA ENTERPRISE', 'A220, JALAN SINAR MENTARI A11', 'TAMAN SINAR MENTARI', NULL, 08100, 'Sungai Petani', 'Kuala Muda', 'Kedah', '-', 'G1', 'B', '    B24  B04  B28'),
(140, 'KAG CONSTRUCTION', 'LOT 135 KUALA JENERI', 'SIK', NULL, 08200, 'Sik', 'Sik', 'Kedah', NULL, 'G1', 'B', '  B04  B14  B28  B24'),
(141, 'KALSHA TRADING', 'NO.92, LORONG GAMELAN 3/1', 'TAMAN RIA JAYA', NULL, 08000, 'Sungai Petani', 'Kuala Muda', 'Kedah', NULL, 'G1', 'B', '  B04  B13  B14'),
(142, 'KAMILSAFI ENTERPRISE', 'KEDAI KAMPUNG NAMEK TANDOP', 'SIK', NULL, 08200, 'Sik', 'Sik', 'Kedah', NULL, 'G1', 'B', '    B04  B14  B28'),
(143, 'KAMPONG BESAH ENTERPRISE', 'KAMPONG BESAH', 'TAWAR', NULL, 09310, 'Baling', 'Baling', 'Kedah', NULL, 'G1', 'B', '    B04  B24'),
(144, 'KARIB SEJATI ENTERPRISE', 'NO. 31F, KG. ALOR BEMBAN', 'TIKAM BATU', NULL, 08600, 'Sungai Petani', 'Kuala Muda', 'Kedah', '-', 'G1', 'B', '  B04 B14'),
(145, 'KARJU BINA ENTERPRISE', 'NO.1, LOT 3579 DEPAN SEKOLAH SIK DALAM', 'JALAN SIK DALAM', NULL, 08200, 'Sik', 'Sik', 'Kedah', NULL, 'G1', 'B', '    B04  B24  B14  B09  B28'),
(146, 'KAWATA UTARA ENTERPRISE', 'NO.153, TINGKAT BAWAH', 'JALAN KELAB CINTA SAYANG', 'TAMAN RIA JAYA', 08000, 'SUNGAI PETANI', 'Kuala Muda', 'Kedah', '04-4424500', 'G2', 'B', '    B04  B14  B13'),
(147, 'KAWI IMPIAN ENTERPRISE', 'KG. TELUK TEDURI', 'MUKIM PULAI', '', 09100, 'Baling', 'Baling', 'Kedah', '-', '', '', ''),
(149, 'KAYDA JATI ENTERPRISE', 'NO.311, TAMAN SRI PUTRA', NULL, NULL, 08000, 'Sungai Petani', 'Kuala Muda', 'Kedah', NULL, 'G1', 'B', '  B04  B14'),
(150, 'KEJURUTERAAN M.A.M.', 'NO.17, LOORONG 14,', 'TAMAN GURUN JAYA', NULL, 08300, 'Sungai Petani', 'Kuala Muda', 'Kedah', '04-4685776', 'G1', 'B', '    B04  B10  B02  B24  B01  B28'),
(151, 'KELADI CEKAP ENTERPRISE', 'NO.1210, LORONG ANGSANA 37', 'TAMAN KELADI', NULL, 08000, 'Sungai Petani', 'Kuala Muda', 'Kedah', NULL, 'G1', 'B', '  B04  B24'),
(152, 'KEMBAR TUAH ENTERPRISE', 'NO.2, TAMAN BAYU INDAH', 'JALAN HOSPITAL', NULL, 09100, 'Baling', 'Baling', 'Kedah', NULL, 'G1', 'B', '  B04  B24  B28'),
(153, 'KEMPAS UTARA ENTERPRISE', 'NO.2, LORONG MELOR 1/1A', 'TAMAN MELOR', NULL, 08000, 'Sungai Petani', 'Kuala Muda', 'Kedah', NULL, 'G1', 'B', '  B04  B14'),
(154, 'KENARI BERKAT ENTERPRISE', '170, LORONG KENARI JAYA 2/3', 'TAMAN KENARI JAYA', NULL, 08000, 'Sungai Petani', 'Kuala Muda', 'Kedah', NULL, 'G1', 'B', '    B24 B13 B14 B28 B08 B04 B07 B15 B12'),
(155, 'KERIS WAJA ENTERPRISE', '1346, JALAN BPJ 2/25', 'BANDAR PUTERI JAYA', NULL, 08000, 'Sungai Petani', 'Kuala Muda', 'Kedah', NULL, 'G1', 'B', '  B04  B14'),
(156, 'KETEMBA GEMILANG ENTERPRISE', 'NO.92D/3, KAMPUNG CAROK TILAN', 'KUALA PEGANG', NULL, 09110, 'Baling', 'Baling', 'Kedah', NULL, 'G1', 'B', '    B04  B14  B24  B28'),
(157, 'KHAIRUL AMILIN ENTERPRISE', 'LOT 53, KAMPUNG CHARUK KIT', NULL, NULL, 08210, 'Sik', 'Sik', 'Kedah', NULL, 'G1', 'B', '  B04  B24  B28'),
(158, 'KIMIESZZ ENTERPRISE', 'NO. 69, KAMPUNG BATU SATU', 'KUALA KETIL', '', 09300, 'Alor Setar', 'KEDAH', 'Kedah', '', 'G2', 'B', 'B04'),
(159, 'KITA JAYA', 'KAMPUNG TUALANG', 'MUKIM PULAI', NULL, 09100, 'Baling', 'Baling', 'Kedah', NULL, 'G1', 'B', '  B04  B24 B28'),
(160, 'KNS DAYA ENTERPRISE', 'B.62, TAMAN SRI AMAN', 'CAROK NAU', NULL, 09100, 'Baling', 'Baling', 'Kedah', NULL, 'G1', 'B', '    B04  B14  024'),
(161, 'KOP PEKEBUN KECIL DAERAH KUALA MUDA/YAN', 'NO. B 18, TINGKAT I', 'JALAN SEKERAT', NULL, 08000, 'Sungai Petani', 'Kuala Muda', 'Kedah', '04-4211352', 'G1', 'B', '    B04  B14  B24'),
(163, 'KOP. PERKEBUN KECIL DAERAH BALING BHD.', 'NO.C2,BANGUNAN MDB', 'JALAN SYED SHEIKH', '', 09100, 'Baling', 'Baling', 'Kedah', '04-4701517', 'G1', 'B', 'B04'),
(164, 'KOPERASI PEMB. KG. BENDANG MAN SIK BHD.', 'PERUMAHAN KEDA KG.BENDANG MAN', NULL, NULL, 08200, 'Sik', 'Sik', 'Kedah', '04-4620558', 'G1', 'B', '  B04'),
(165, 'KOPERASI PEMB. KG. TELUK TEDURI BALING BHD', 'D/A PEJABAT KEDA ZON V', '', '', 09100, 'Baling', 'Baling', 'Kedah', '', 'G1', 'B', 'B24  B04'),
(166, 'KOPERASI PEMB. KG. ULU LEGGONG BALING BHD.', 'D/A PEJABAT PENTADBIRAN', 'RANCANGAN KEDA ULU LEGGONG', '', 09100, 'Baling', 'Baling', 'Kedah', '', 'G1', 'B', 'B04  B24  B09'),
(167, 'KOPERASI PEMBANGUNAN DAERAH BALING BHD', 'NO. 15, TINGKAT ATAS BANGUNAN ARKED MARA', 'JALAN SHARIFF', NULL, 09100, 'Baling', 'Baling', 'Kedah', '019-4295657', 'G1', 'B', '    B04  B24  B28'),
(168, 'KOPERASI PESERTA RANC.FELCRA GUGUSAN WENG BALING B', 'KM 90, JALAN WENG', '', '', 09100, 'Baling', 'Baling', 'Kedah', '', 'G1', 'B', 'B04  B24'),
(169, 'KST UTARA ENTERPRISE', 'KAMPUNG SUNGAI TEMBAK', 'PARIT PANJANG', '', 09110, 'Baling', 'Baling', 'Kedah', '', 'G1', 'B', 'B24  B04'),
(170, 'KSZ JAYA ENTERPRISE', 'NO. 50 JALAN SEROJA', 'TAMAN SEROJA', NULL, 08000, 'Sungai Petani', 'Kuala Muda', 'Kedah', NULL, 'G1', 'B', '  B04  B14'),
(171, 'KUKUH LAGANG ENTERPRISE', 'KAMPUNG CHARUK KUDUNG', '', '', 08200, 'Sik', 'Sik', 'Kedah', '', 'G1', 'B', 'B04  B24  B14'),
(172, 'LANDAI UTARA ENTERPRISE', 'KAMPUNG LANDAI', 'MUKIM SOK', '', 08210, 'Sik', 'Sik', 'Kedah', '', 'G1', 'B', 'B04  B14'),
(173, 'LASAU ENTERPRISE', 'KAMPUNG LANDAI', 'MUKIM SOK', NULL, 08210, 'Sik', 'Sik', 'Kedah', NULL, 'G1', 'B', '  B04 B14'),
(174, 'LCT MURNI ENTERPRISE', 'KAMPUNG LANDAI', 'MUKIM SOK', NULL, 08210, 'Sik', 'Sik', 'Kedah', NULL, 'G1', 'B', '  B04  B24  B28'),
(175, 'LENCONGAN PERDANA ENTERPRISE', 'NO. 246 LENGKOK PERDANA 8/3', 'SEKSYEN 8, BANDAR PERDANA', NULL, 08000, 'Sungai Petani', 'Kuala Muda', 'Kedah', NULL, 'G1', 'B', '  B04  B14  B15  B28  B24'),
(176, 'LUBUK CEMARA ENTERPRISE', 'NO. 74A KAMPONG CHEMARA', NULL, NULL, 08200, 'Sik', 'Sik', 'Kedah', NULL, 'G1', 'B', '      B04  B24  B28'),
(177, 'M.M.A. MULIA ENTERPRISE', 'F 517 KAMPUNG BUKIT KECIL', 'MUKIM SIMPOR', '', 08500, 'Sungai Petani', 'Kuala Muda', 'Kedah', '', 'G1', 'B', 'B04  B14'),
(178, 'MADHU ENTERPRISE', 'MDS 225, SIMPANG TIGA BEGIA', NULL, NULL, 08200, 'Sik', 'Sik', 'Kedah', NULL, 'G1', 'B', '    B14  B28  B04'),
(179, 'MAJUTERA ENTERPRISE', 'KAMPONG BANGGOL WAN MAT \'B\'', NULL, NULL, 09100, 'Baling', 'Baling', 'Kedah', NULL, 'G1', 'B', '  B04  B24'),
(180, 'MANSOR BIN GHAZALI', '77 KAMPUNG MASJID', 'PEKAN SIK', '', 08200, 'Sik', 'Sik', 'Kedah', '', 'G1', 'B', 'B04 B14'),
(181, 'MARISA ENTERPRISE', 'NO. 1 LOT 1074', 'KAMPUNG TELUK TEDURI', NULL, 09100, 'Baling', 'Baling', 'Kedah', NULL, 'G1', 'B', '      B04  B14'),
(182, 'MARNUDI ENTERPRISE', 'NO.131 TAMAN SRI MAS', 'JALAN JENUN', 'PENDANG', 06700, 'Alor Setar', 'Kedah', 'Kedah', '', 'G2', 'B', 'B04  B13  B14'),
(183, 'MAROSH TERAJU ENTERPRISE', '438 PESIARAN CINTA SAYANG', 'KELAB CINTA SAYANG', '', 08000, 'Sungai Petani', 'Kedah', 'Kedah', '', 'G2', 'B', 'B04  B13  B02  B24'),
(184, 'MAS USAHA SAMA ENTERPRISE', 'BATU 56 1/4,KAMPUNG  BECAH SAWA', 'JALAN TENGKU AMINAH', 'MUKIM SIONG', 09100, 'Baling', 'Baling', 'Kedah', NULL, 'G1', 'B', '      B04  B24  B14  B28'),
(185, 'MASAKITA ENTERPRISE', '121-A, PADANG LEMBU', 'GURUN', '', 08300, 'Sungai Petani', 'Kuala Muda', 'Kedah', '', 'G1', 'B', 'B04  B12  B14'),
(186, 'AMPANGAN HIKMAT ENTERPRISE', 'KAMPONG RAMBONG', 'RAMBONG', 'MULIM PULAI, KUPANG', 09200, 'BALING', 'Baling', 'Kedah', NULL, 'G1', 'B', '    B04  B24'),
(187, 'MAWAR BIRU CONSTRUCTION', 'NO.67A, LORONG 3', 'TAMAN BUNGA RAYA', '', 08000, 'Sungai Petani', 'Kedah', 'Kedah', '', 'G2', 'B', 'B04  B24'),
(188, 'MAWARA  TRADING', '102-C KAMPUNG TELUK TEDURI', 'MUKIM PULAI', NULL, 09100, 'Baling', 'Baling', 'Kedah', '-', 'G1', 'B', '      B04  B13  B24'),
(190, 'MBO DELIMA ENTERPRISE', 'NO. 190, TAMAN BERSATU', 'MUKIM PULAI', NULL, 09100, 'Baling', 'Baling', 'Kedah', '019-5548698', 'G1', 'B', '  B04  B13  B08  B24  B28'),
(191, 'MBS MENARA CONSTRUCTION', 'NO.34, KAMPUNG PADANG LENGKUAS', 'KUPANG', NULL, 09200, 'Baling', 'Baling', 'Kedah', NULL, 'G1', 'B', '  B04  B14  B24  B28'),
(192, 'MBW JAYA ENTERPRISE', 'KAMPUNG CHAROK TOK UBAN', 'MK TELOI', 'SIK', 08200, 'Sik', 'Sik', 'Kedah', '', 'G1', 'B', 'B04  B14'),
(194, 'MERBAU TANJUNG ENTERPRISE', 'BATU 66,KAMPONG TANJUNG MERBAU', '', '', 09200, 'Baling', 'Baling', 'Kedah', '', 'G1', 'B', 'B04  B24  B08'),
(196, 'MERSIK GEMILANG ENTERPRISE', 'C-10, BANGUNAN PEKAN BARU', NULL, NULL, 09100, 'Baling', 'Baling', 'Kedah', NULL, 'G1', 'B', '    B14  B24  B12 B04'),
(197, 'MESRA CEMARA ENTERPRISE', 'KAMPUNG CEMARA', 'JENIANG', NULL, 08700, 'Sik', 'Sik', 'Kedah', NULL, 'G1', 'B', '  B24  B04  B14  B28'),
(198, 'MFBA ENTERPRISE', 'KAMPUNG TOK SONAN', 'MUKIM PULAI', NULL, 09100, 'Baling', 'Baling', 'Kedah', NULL, 'G1', 'B', '  B04  B24'),
(199, 'MFI PERMATA ENTERPRISE', 'NO.62-65, LORONG 6', 'TAMAN RIA', 'SUNGAI LALANG', 08000, 'Sungai Petani', 'Kuala Muda', 'Kedah', '04-4217969', 'G1', 'B', '              B04  B24  B02  B01  B14  B08  B28'),
(200, 'MHPA ENTERPRISE', 'NO. 152 TAMAN BERSATU', NULL, NULL, 09100, 'Baling', 'Baling', 'Kedah', NULL, 'G1', 'B', '  B04  B14'),
(201, 'SHAMANI IMPIAN ENTERPRISE', 'NO. 575 B, KAMPUNG BERAPIT', 'TIKAM BATU', NULL, 08600, 'Sungai Petani', 'Kuala Muda', 'Kedah', NULL, 'G1', 'B', '      B14  B24  B04  B28'),
(202, 'MINDA MILLINIUM ENTERPRISE', 'NO. 18,KAMPUNG BARU', 'MUKIM BONGOR', '', 09100, 'Baling', 'Baling', 'Kedah', '', 'G1', 'B', 'B14  B04  B24'),
(203, 'MISA ABADI (M) SDN.BHD', 'NO. 4.11,TINGKAT 3, PLAZA ALOR SETAR', 'JALAN STESYEN', 'OFF JALAN LANGGAR', 05000, 'Alor Setar', 'Kedah', 'Kedah', '04-7333996', 'G2', 'B', 'B24  B04'),
(204, 'MITHARESA ENTERPRISE', '684, KAMPUNG RAJA', NULL, NULL, 08000, 'Sungai Petani', 'Kuala Muda', 'Kedah', NULL, 'G1', 'B', '   B04  B05  B15  B24  B28  B14  B10'),
(205, 'MIZ BAKTI ENTERPRISE', 'NO.F- 440 KAMPONG LANGGAR', 'BUJANG', NULL, 08100, 'Sungai Petani', 'Kuala Muda', 'Kedah', NULL, 'G1', 'B', '  B24  B04  B28'),
(206, 'MIZAR ENTERPRISE', 'NO.30, LORONG 8', 'TAMAN NURI JAYA', NULL, 08000, 'Sungai Petani', 'Kuala Muda', 'Kedah', '04-4226278', 'G1', 'B', '          B04  B13  B07  B14  B24  B28'),
(207, 'MNM BAYU ENTERPRISE', '1021, LORONG ANGSANA 28', 'TAMAN KELADI', '', 08000, 'Sungai Petani', 'Kedah', 'Kedah', '', 'G2', 'B', 'B04  B02  B13  B09  B24'),
(208, 'MNR CERIA ENTERPRISE', 'BERSEBELAHAN MASJID', 'KAMPUNG IBOI', 'KUPANG', 09200, 'Baling', 'Baling', 'Kedah', NULL, 'G1', 'B', '        B04  B14  B28'),
(209, 'MOHD AUZANI BIN OSMAN', 'NO. 8, MEDAH SERBANIKA', NULL, NULL, 09100, 'Baling', 'Baling', 'Kedah', NULL, 'G1', 'B', '  B04  B14'),
(210, 'MOHD GHAZALI BIN SHAARI', 'LOT 1652 SUNGAI JAGONG', '', '', 08000, 'Sungai Petani', 'Kuala Muda', 'Kedah', '', 'G1', 'B', 'B04  B14'),
(211, 'MOHD HISHAM BIN MOHD MAKRI', 'NO.214, TAMAN KOTA', 'PULAI', '', 09100, 'Baling', 'Baling', 'Kedah', '', 'G1', 'B', 'B04  B14'),
(212, 'MOHD MORSIDI BIN SALLEH', 'KAMPUNG BUKIT IBOI', 'KUPANG', '', 09200, 'Baling', 'Baling', 'Kedah', '', 'G1', 'B', 'B14  B04  B34'),
(213, 'MOHD SHAHIDAN ENTERPRISE', 'NO.22B, JALAN IADP', 'KAMPUNG HANGUS', 'KUPANG', 09200, 'Baling', 'Baling', 'Kedah', NULL, 'G1', 'B', '    B04  B24'),
(214, 'MOHD SHUKRI CONSTRUCTION', 'NO. 27 KAMPUNG BARU', 'JALAN CHEMARA', '', 08700, 'Sungai Petani', 'Kuala Muda', 'Kedah', '', 'G1', 'B', 'B04  B14'),
(215, 'MOHD YUSOFF BIN HASHIM', 'KAMPUNG BONGKOK', NULL, NULL, 08300, 'Gurun', 'Kuala Muda', 'Kedah', '-', 'G1', 'B', '  B04  B14  B28'),
(216, 'MOHISMA ENTERPRISE', 'NO.5, TAMAN TERATAI', 'SUNGAI LAYAR', 'SUNGAI PETANI', 08000, 'Sungai Petani', 'Kedah', 'Kedah', '04-4256571', 'G2', 'B', 'B04  B10  B24'),
(217, 'MERCU CEKAP ENTERPRIDE', 'NO.F-569-C', 'KAMPONG PEGAWAI', 'TIKAM BATU', 08600, 'Sungai Petani', 'Kuala Muda', 'Kedah', NULL, 'G1', 'B', '      B14 B04  B28 '),
(218, 'ZI CEMERLANG ENTERPRISE', 'LOT NO. 578, JALAN SEKOLAH MENENGAH PINANG TUNGGAL', NULL, NULL, 08000, 'SUNGAI PETANI', 'Kuala Muda', 'Kedah', '04-4315262', 'G1', 'B', '      B04  B14  B02  B24  B12'),
(219, 'MOZAI BUMI ENTERPRISE', 'NO.10 KEDAI MPSPK', 'TAMAN SRI TANJUNG', 'SUNGAI LAYAR', 08000, 'Sungai Petani', 'Kuala Muda', 'Kedah', '04-4210496', 'G1', 'B', '  B04  B14  B09  B24'),
(220, 'MP UNITY ENTERPRISE', 'KAMPUNG PAYA MENGKUANG', 'GURUN', NULL, 08300, 'Sungai Petani', 'Kuala Muda', 'Kedah', NULL, 'G1', 'B', '      B12  B02  B13  B24  B04  B14'),
(221, 'MRI PANTAS ENTERPRISE', 'KAMPUNG SUNGAI GELAM', 'MUKIM BUJANG', NULL, 08100, 'Sungai Petani', 'Kuala Muda', 'Kedah', NULL, 'G1', 'B', '        B04  B14'),
(223, 'MUKMININ ENTERPRISE', 'NO. 1466, JALAN INAI', 'TAMAN RIA JAYA', NULL, 08000, 'Sungai Petani', 'Kuala Muda', 'Kedah', NULL, 'G1', 'B', '  B04  B13  B14  B24  B28'),
(224, 'MUSTAFA BIN HJ ZAKARIA', '76 JALAN SUNGAI LAYAR', '', '', 08000, 'Sungai Petani', 'Kuala Muda', 'Kedah', '', 'G1', 'B', 'B04  B24  B14'),
(225, 'NADI ENTERPRISE', 'NO.24 TINGKAT 1', 'PUSAT DAGANGAN KELANA MAS', 'KUAH', 07000, 'Langkawi', 'Kedah', 'Kedah', '04-9666755', 'G2', 'B', 'B04  B08   B04'),
(226, 'NAHZ M  & E ENGINEERING SDN BHD', 'NO.72 GROUND FLOOR,JALAN SUSUR KIRI 1/1', 'KAW PERUSAHAAN RINGAN SUNGAI PASIR', '', 08000, 'Sungai Petani', 'Kuala Muda', 'Kedah', '', 'G1', 'B', 'B04  B24'),
(227, 'NAJAF PERMAI ENTERPRISE', 'NO.47, JALAN KEPALA BATAS', 'TAMAN JALAI JAYA', 'JITRA', 06000, 'Alor Setar', 'Kedah', 'Kedah', '', 'G2', 'B', 'B04  B02  B13  B24  B14'),
(228, 'NARA DELIMA ENTERPRISE', 'NO. 6-A, KAMPONG TOK SONAN', 'MUKIM PULAI', NULL, 09100, 'Baling', 'Baling', 'Kedah', NULL, 'G1', 'B', '  B04  B24'),
(229, 'NASBINA ENTERPRISE', 'NO.25,BELAKANG SEKOLAH KEBANGSAAN PULAI', NULL, NULL, 09100, 'Baling', 'Baling', 'Kedah', NULL, 'G1', 'B', '    B04  B24  B14'),
(230, 'NASDIWAD ENTERPRISE', 'NO. 15 LORONG 6A', 'TAMAN BERLIAN', NULL, 08000, 'Sungai Petani', 'Kuala Muda', 'Kedah', '04-4224500', 'G1', 'B', '    B02  B14  B04'),
(231, 'ANZ CERIA ENTERPRISE', 'NO. 239-A, KAMPUNG KEPALA BUKIT,', 'JALAN PINANG TUNGGAL', NULL, 08000, 'SUNGAI PETANI', 'Kuala Muda', 'Kedah', NULL, 'G1', 'B', '        B04  B24  B13  B10  B28  '),
(232, 'NAZURA CONSTRUCTION & ENGINEERING SDN BHD', 'NO.3, TAMAN LINDUNGAN JERAI', 'GURUN', '', 08300, 'Sungai Petani', 'Kuala Muda', 'Kedah', '04-4685248', 'G1', 'B', 'B04  B24  B02  B10'),
(234, 'NEN SU CONSTRUCTION', 'NO. 18 PEKAN MERBOK', NULL, NULL, 08400, 'Sungai Petani', 'Kuala Muda', 'Kedah', NULL, 'G1', 'B', '  B04  B14'),
(235, 'NERONG JAYA ENTERPRISE', 'KAMPONG KUBANG MERERONG', 'PADANG SERA', '', 06100, 'Alor Setar', 'Kedah', 'Kedah', '', 'G2', 'B', 'B04  B02  B24'),
(236, 'NIKMAT IMPIAN ENTERPRISE', 'F 161, KAMPUNG MASJID', 'TIKAM BATU', NULL, 08600, 'Sungai Petani', 'Kuala Muda', 'Kedah', NULL, 'G1', 'B', '            B04  B24  B08  B28'),
(237, 'NILAM WARISAN ENTERPRISE', 'NO.446, KAMPONG MASJID', 'PEKAN SIK', NULL, 08200, 'Sik', 'Sik', 'Kedah', NULL, 'G1', 'B', '    B04  B14  B24  B28'),
(238, 'NORTHERN ENIGMA ENTERPRISE', 'NO. F 55, KAMPUNG BUKIT KECIL', 'TIKAM BATU', '', 08600, 'Sungai Petani', 'Kuala Muda', 'MOHD RODZI BIN SENAWI', '', 'G1', 'B', 'B24  B04  B14  B28  B13'),
(239, 'NOVOTT ENTERPRISE', 'D/A KILANG BATA', 'KAMPUNG KUALA CENERAI', 'KUALA PEGANG', 09110, 'Baling', 'Baling', 'Kedah', NULL, 'G1', 'B', '    B10  B04  B28'),
(240, 'NURI UTAMA ENTERPRISE', 'F 309 KAMPUNG BARU', 'TIKAM BATU', NULL, 08600, 'Sungai Petani', 'Kuala Muda', 'Kedah', NULL, 'G1', 'B', '  B24  B04'),
(242, 'NY UTARA ENTERPRISE', 'NO. 21,  KAMPUNG BANGGOL LADA', '', '', 09100, 'Baling', 'Baling', 'Kedah', '', '', '', ''),
(243, 'ARUS ALIRAN ENTERPRISE', 'NO.24, TAMAN SENTOSA', 'KUPANG', NULL, 09200, 'Baling', 'Baling', 'Kedah', NULL, 'G1', 'B', '      B04  B14  B24'),
(244, 'ONAN CONSTRUCTION', 'NO. 55,KAMPUNG CHAROK KIT', NULL, NULL, 82000, 'Sik', 'Sik', 'Kedah', '013-4727359', 'G1', 'B', '      B04  B24  B28  B09'),
(245, 'PAHISA CERIA ENTERPRISE', 'NO.133, JALAN KELISA RIA 1/2', 'TAMAN KELISA RIA', NULL, 08000, 'Sungai Petani', 'Kuala Muda', 'Kedah', NULL, 'G1', 'B', '    B04  B24'),
(246, 'PANJI MEGA ENTERPRISE', 'NO.F KAMPONG CEMARA', 'JENIANG', NULL, 08700, 'Sik', 'Sik', 'Kedah', NULL, 'G1', 'B', '  B04  B24  B14  B28  B08  B09'),
(247, 'PANTAS SINAR ENTERPRISE', 'NO.1001,JALAN BPJ 3/25', 'BANDAR PUTERI JAYA', NULL, 08000, 'Sungai Petani', 'Kuala Muda', 'Kedah', NULL, 'G1', 'B', '  B04  B24  B08  B28  B14'),
(248, 'PELAPIS WAWASAN ENTERPRISE', 'NO. I, LOT 1074 ', 'KAMPUNG TELUK TEDURI', 'MUKIM PULAI', 09100, 'Baling', 'Baling', 'Kedah', NULL, 'G1', 'B', '  B04  B14  B24  B09  B28'),
(249, 'PEMBINAAN DAN PERNIAGAAN AZEKA', 'NO.6, BANGUNAN MINANGKABAU', 'JALAN MAHMUD', '', 09100, 'Baling', 'Kedah', 'Kedah', '', 'G2', 'B', 'B04  B02  B28  B24'),
(250, 'PEMBINAAN DAN PERNIAGAAN MAF', 'NO.38, KOPERASI MELAYU', 'JALAN SULTAN BADLISHSH', 'BALING', 09100, 'Baling', 'Kedah', 'Kedah', '0195136365', 'G2', 'B', 'B24  B02  B13  B04'),
(251, 'PEMBINAAN JASTRI', '15, KAMPUNG LUBUK PEDATI', 'BALING, KEDAH', NULL, 09100, 'Baling', 'Baling', 'Kedah', NULL, 'G1', 'B', '    B04  B24  B07'),
(252, 'PERKONGSIAN MUDA JAYA', 'NO. 9, BANGUNAN MAWAR', 'PEKAN BARU', NULL, 08200, 'Sik', 'Sik', 'Kedah', NULL, 'G1', 'B', '  B04  B14  B28  B24'),
(253, 'PERMAI DINAMIK ENTERPRISE', 'NO.12-A LORONG PERMAI 2/1B', 'TAMAN DESA PERMAI', 'SUNGAI LALANG', 08100, 'Sungai Petani', 'Kuala Muda', 'Kedah', NULL, 'G1', 'B', '    B04  B24  B14  B13  B28'),
(254, 'PERNIAGAAN ABM MAKMUR', 'NO. 36 BANGUNAN PKNK', 'JALAN PETRI', NULL, 08000, 'Sungai Petani', 'Kuala Muda', 'Kedah', NULL, 'G2', 'B', '  B04  B28'),
(255, 'PERNIAGAAN AFSHA', 'KAMPUNG KUALA JENERI', 'JENERI', NULL, 08320, 'Sik', 'Sik', 'Kedah', NULL, 'G1', 'B', '  B04  B14'),
(256, 'PERNIAGAAN GADINAS', 'NO.13, LORONG TIGA', 'TAMAN PERUDA', NULL, 08000, 'Sungai Petani', 'Kuala Muda', 'Kedah', NULL, 'G1', 'B', '            B24  B04  B14  B28'),
(257, 'PERNIAGAAN HILMI', 'BATU 47 1/2 JALAN WENG', NULL, NULL, 09100, 'Baling', 'Baling', 'Kedah', NULL, 'G1', 'B', '    B24  B02  B04'),
(258, 'PERNIAGAAN IKATAN MURNI', 'KAMPONG JENALIK', 'MUKIM BONGOR', NULL, 09100, 'Baling', 'Baling', 'Kedah', NULL, 'G1', 'B', '  B04  B14  B28'),
(259, 'PERNIAGAAN JAMINAN PADU', 'NO. 699 PEKAN MERBOK', NULL, NULL, 08400, 'BEDONG', 'Kuala Muda', 'Kedah', NULL, 'G1', 'B', '  B04  B24  B14'),
(260, 'ANGKATAN CEMERLANG ENTERPRISE', 'B 11, PEKAN BARU KEDA,', 'IBOI, KUPANG', NULL, 09200, 'Baling', 'Baling', 'Kedah', NULL, 'G1', 'B', '      B04  B14'),
(261, 'PERNIAGAAN KELUARGA DAMAI', 'NO. 74-A, KAMPUNG CEMARA', 'JENIANG', NULL, 08700, 'Sik', 'Sik', 'Kedah', NULL, 'G1', 'B', '    B28  B04  B09  B14  B24'),
(262, 'PERNIAGAAN MOHD FOZI & KELUARGA', 'N0. 38, KOPERASI PASAR MELAYU BALING', 'JALAN BADLISHAH', NULL, 09100, 'Baling', 'Baling', 'Kedah', NULL, 'G1', 'B', '    B04  B24'),
(263, 'PERNIAGAAN OG IMPIAN', 'NO.  106 TAMAN DESA ANGGERI', 'PULAI', '', 09100, 'Baling', 'Baling', 'Kedah', '', 'G1', 'B', 'B04  B24'),
(264, 'PERNIAGAAN PEDATI', '157, KAMPUNG LUBUK PEDATI', NULL, NULL, 09100, 'Baling', 'Baling', 'Kedah', '04-4701880', 'G1', 'B', '  B24  B04  B28'),
(265, 'PERNIAGAAN ROSLI INDRA JAYA', 'BATU 49,', 'HADAPAN SEKOLAH KEBANGSAAN BONGOR', 'BONGOR', 09100, 'Baling', 'Baling', 'Kedah', '-', 'G1', 'B', '    B04  B14  B24'),
(266, 'PERNIAGAAN SECIPTA', '902 A, KAMPUNG POKOK ASAM', 'JALAN PINANG TUNGGAL', NULL, 08000, 'Sungai Petani', 'Kuala Muda', 'Kedah', NULL, 'G1', 'B', '    B04  B10  B24  B28'),
(267, 'PERNIAGAAN SEPAKAT RAS', '74 KAMPUNG PADANG BULUH', 'SIDAM KIRI', '', 08000, 'Sungai Petani', 'Kuala Muda', 'Kedah', '', 'G1', 'B', 'B04  B14  B24'),
(268, 'PERNIAGAAN SHAEDI DAN KELUARGA', 'NO.26 KAMPUNG BARU', 'JALAN CEMARA', '', 08700, 'Sungai Petani', 'Kuala Muda', 'Kedah', '', 'G1', 'B', 'B04  B14'),
(269, 'TUNAS FLORA ENTERPRISE', 'TAMAN CEMPEDAK', 'JENIANG', NULL, 08700, 'Sik', 'Sik', 'Kedah', NULL, 'G1', 'B', '  B24  B04 '),
(270, 'PERNIAGAAN SRI LADA', 'NO. 2000, KAMPUNG POKOK SENA', 'MUKIM PULAI', '', 09100, 'Baling', 'Baling', 'Kedah', '', 'G1', 'B', 'B04  B14  B24'),
(271, 'PERNIAGAAN SUNGAI GADING', 'NO.36 KAMPUNG BARU', 'MUKIM SIONG', NULL, 09100, 'Baling', 'Baling', 'Kedah', NULL, 'G1', 'B', '    B04  B24  B13'),
(272, 'PERNIAGAAN TANJUNG LUAS', 'KAMPUNG BOK BAK', 'KUPANG', NULL, 09200, 'Baling', 'Baling', 'Kedah', NULL, 'G1', 'B', '  B04  B24'),
(273, 'PERNIAGAAN TANJUNG NERING', 'KAMPUNG TANJUNG NERING', 'KUPANG', NULL, 09200, 'Baling', 'Baling', 'Kedah', NULL, 'G1', 'B', '    B04  B24  B28'),
(274, 'PERNIAGAAN TITIAN MADU', 'LOT 9369, KAMPUNG BARUDALAM WANG', 'KUALA PEGANG', NULL, 09100, 'Baling', 'Baling', 'Kedah', NULL, 'G1', 'B', '  B04  B14  B24  B28'),
(275, 'PERNIAGAAN YASAR', 'KAMPUNG HANGUS', 'KUPANG', NULL, 09200, 'Baling', 'Baling', 'Kedah', NULL, 'G1', 'B', '    B04  B14  B28'),
(276, 'PERNIAGAAN YUSHA JAYA', 'KEDAI IDRIS , KAMPUNG HANGUS,', 'KUPANG,', '', 09200, 'Baling', 'Baling', 'Kedah', '', 'G1', 'B', 'B04  B14'),
(277, 'PERNIAGAAN ZARIF', 'KAMPONG TANJONG', 'KUPANG', NULL, 09200, 'Baling', 'Baling', 'Kedah', NULL, 'G1', 'B', '  B04  B14'),
(278, 'PERTAMA PROJEK', 'NO.35 LORONG BLM 4/9', 'BANDAR LAGUNA MERBOK', NULL, 08000, 'Sungai Petani', 'Kuala Muda', 'Kedah', NULL, 'G1', 'B', '          B04  B14  B28  B24'),
(279, 'PERTUBUHAN PELADANG KAW KUALA MUDA SELATAN', 'JALAN BATU LINTANG', 'TIKAM BATU', NULL, 08600, 'Sungai Petani', 'Kuala Muda', 'Kedah', NULL, 'G1', 'B', '  B04  B24'),
(280, 'PERTUBUHAN PELADANG KAW. GURUN/TELOI KIRI', 'D/A  GURUN/TELOI KIRI', 'JENIANG', NULL, 08700, 'Sungai Petani', 'Kuala Muda', 'Kedah', NULL, 'G1', 'CE', '  CE21  CE36  '),
(281, 'PERTUBUHAN PELADANG KAW. KUALA KETIL', 'JALAN BALING', 'KUALA KETIL', NULL, 09300, 'Baling', 'Baling', 'Kedah', '04-4163329', 'G1', 'B', '  B04'),
(282, 'PERTUBUHAN PELADANG KAWASAN BALING', 'NO.26, KOMPLEKS IADP', 'DAERAH BALING', NULL, 09100, 'Baling', 'Baling', 'Kedah', '04-4701244', 'G1', 'B', '    B04  B24'),
(283, 'PERTUBUHAN PELADANG KAWASAN MERBOK', 'JALAN BATU HAMPAR', 'MERBOK', NULL, 08400, 'Sungai Petani', 'Kuala Muda', 'Kedah', '04-4572117', 'G1', 'B', '  B04  B14'),
(284, 'PERTUBUHAN PELADANG KAWASAN SIK', 'BATU 5', NULL, NULL, 08200, 'Sik', 'Sik', 'Kedah', '04-4695213', 'G1', 'B', '  B04'),
(285, 'PERUSAHAAN AZAM JAYA', 'LOT 2268 KILANG PAKU TELOK SERA', 'PULAI', '', 09110, 'Baling', 'Baling', 'Kedah', '', 'G1', 'B', 'B04  B10  B24'),
(286, 'PETAI BELALANG ENTERPRISE', 'NO. 333, TAMAN RIA MESRA', 'JALAN JENIANG', 'GURUN', 08300, 'Sungai Petani', 'Kuala Muda', 'Kedah', NULL, 'G1', 'B', '    B04  B24  B08  B28'),
(287, 'PP SERI ENTERPRISE', 'B-683,KAMPUNG BARU', 'SUNGAI PASIR', '', 08000, 'Sungai Petani', 'Kuala Muda', 'Kedah', '', 'G1', 'B', 'B04  B14'),
(288, 'PERTUBUHAN PELADANG KAW. SUNGAI PETANII', 'Lot 1401, Bakar Arang', 'Sungai Petani', NULL, 08000, 'Sungai Petani', 'Kuala Muda', 'Kedah', '04-4217245', 'G1', 'CE', '      CE21 CE36 CE01'),
(289, 'PROSAC ENTERPRISE', 'NO. 2 JALAN ANGGERIK 5/1', 'BANDAR AMANJAYA', '', 08000, 'Sungai Petani', 'Kuala Muda', 'Kedah', '', 'G1', 'B', 'B04  B14'),
(290, 'PUNCAK FITRAH ENTERPRISE', 'NO. 3195  LORONG 10', 'TAMAN RIA', NULL, 08000, 'Sungai Petani', 'Kuala Muda', 'Kedah', NULL, 'G1', 'B', '  B04  B24  B26  B28'),
(291, 'RAFAH ENTERPRISE', '65, TAMAN TANJUNG PUTERI', 'KUALA KETIL', NULL, 09300, 'Baling', 'Baling', 'Kedah', NULL, 'G1', 'B', '  B04  B24'),
(292, 'RAHIM ENTERPRISE', 'NO.8A BATU 44', 'KAMPUNG TOK SONAN', 'PULAI', 09100, 'Baling', 'Baling', 'Kedah', NULL, 'G1', 'B', '  B04  B24  B28  B27'),
(293, 'RAKAN NIKMAT ENTERPRISE', 'No.16A, KAMPUNG MENGKUANG MASJID', 'KUALA PEGANG', NULL, 09110, 'Baling', 'Baling', 'Kedah', NULL, 'G1', 'B', '  B04  B14  B28'),
(295, 'RAMLI ENTERPRISE', 'NO.22, JALAN IADP', 'KAMPUNG HANGUS', 'KUPANG', 09100, 'Baling', 'Baling', 'Kedah', NULL, 'G1', 'B', '    B04  B24'),
(296, 'RAS ONE ENGINEERING', 'NO. 198, JALAN KAMPUNG BARU', 'PINANG TUNGGAL', NULL, 08000, 'Sungai Petani', 'KEDAH', 'Kedah', '04-4366743', 'G2', 'B', '        B04  B14  B24'),
(297, 'RASLI ENTERPRISE', 'BATU 45, JALAN MAHMUD', NULL, NULL, 09100, 'Baling', 'Baling', 'Kedah', NULL, 'G1', 'B', '  B04  B14  B28'),
(298, 'RB MAWAR ENTERPRISE', 'NO.2554, LORONG 59', 'TAMAN RIA', NULL, 08000, 'Alor Setar', 'Kuala Muda', 'Kedah', NULL, 'G1', 'B', '  B04  B24'),
(299, 'RBM UTAMA ENTERPRISE', 'LOT 164A, KG TANJUNG', 'PULAI', NULL, 09100, 'Baling', 'Baling', 'Kedah', NULL, 'G1', 'B', '      B04  B24'),
(300, 'RENJER ENTERPRISE', 'N0.12B, TINGKAT 1,JALAN TUANKU HAMINAH 1', 'TAMAN TUANKU HAMINAH', NULL, 08000, 'Sungai Petani', 'Kuala Muda', 'Kedah', NULL, 'G1', 'B', '  B13  B24  B02  B04'),
(301, 'RILJAYA ENTERPRISE', 'LOT 3332, PEKAN GAJAH PUTEH', 'MUKIM JENERI', NULL, 08200, 'Sik', 'Sik', 'Kedah', NULL, 'G1', 'B', '  B04  B24'),
(302, 'RIMA JAYA ENTERPRISE', '219 D PENGKALAN LEBAI MAN', 'KUALA  MUDA', NULL, 08000, 'SUNGAI PETANI', 'Kuala Muda', 'Kedah', NULL, 'G1', 'B', '  B24  B04  B10  B12  B14'),
(303, 'RIMBUN SEPAKAT ENTERPRISE', 'NO. 18C, JALAN BAIDURI 2/5', 'TAMAN TELUK BAIDURI', NULL, 08000, 'Sungai Petani', 'Kuala Muda', 'Kedah', NULL, 'G1', 'B', '        B04  B24  B02  B09  B14  B13'),
(304, 'ROLI CIPTA', 'NO. 98, KAMPUNG MASJID PULAI', NULL, NULL, 09100, 'Baling', 'Baling', 'Kedah', NULL, 'G1', 'B', '    B04  B24'),
(306, 'ROWA ENTERPRISE', 'LOT A2 SIMPANG TIGA JERAI', 'KUPANG', '', 09200, 'Baling', 'Baling', 'Kedah', '013-4283836', 'G1', 'B', 'B04  B14'),
(307, 'S.A.B UTARA ENTERPRISE', 'NO. 126, LORONG 6', 'TAMAN BANDAR BARU', NULL, 08000, 'Sungai Petani', 'Kuala Muda', 'Kedah', NULL, 'G1', 'B', '  B04  B14  B24'),
(308, 'SA HIJAU ENTERPRISE', 'F 187 KAMPUNG CEMARA', 'MUKIM TELOI', '', 08200, 'Sik', 'Sik', 'Kedah', '', 'G1', 'B', 'B04  B14  B24'),
(309, 'SADAR ENTERPRISE', 'BATU 49 1/4, JALAN WENG', 'BONGOR', NULL, 09100, 'Baling', 'Baling', 'Kedah', '04-4701378', 'G1', 'B', '        B04  B14'),
(310, 'SAKAD JAYA ENTERPRISE', 'NO. 91, JALAN SELESA 2', 'TAMAN SELESA', 'BEDONG', 08100, 'Sungai Petani', 'Kuala Muda', 'Kedah', NULL, 'G1', 'B', '  B04  B24  B13  B14'),
(311, 'SAKINAH CONSTRUCTION', 'KAMPUNG MASJID KUALA KUANG', 'KUPANG', NULL, 09200, 'Baling', 'Baling', 'Kedah', NULL, 'G1', 'B', '  B04  B24  b28'),
(312, 'SAKURA KLASIK ENTERPRISE', 'KAMPUNG BARU CHANGHAI', 'JENERI', NULL, 08210, 'Sik', 'Sik', 'Kedah', NULL, 'G1', 'B', '      B04  B24 B28'),
(313, 'SALAM SETIA ENTERPRISE', 'NO.212, JALAN FELCRA', 'KAMPUNG MENGKUANG TENGAH', 'KUALA PEGANG', 09100, 'Baling', 'Baling', 'Kedah', NULL, 'G1', 'B', '  B04  B14'),
(314, 'SAUJANA MATANG ENTERPRISE', 'NO. 159 JALAN MELATI', 'KAMPUNG NAMEK', '', 08200, 'Sik', 'Sik', 'Kedah', '', 'G1', 'B', 'B04  B24  B14'),
(315, 'JULANG UTAMA ENTERPRISE', 'NO.3, KAMPUNG SETOL', NULL, NULL, 09100, 'BALING', 'Baling', 'Kedah', NULL, 'G1', 'B', '  B14  B04 '),
(316, 'SCBM ENTERPRISE', '35/295, HADAPAN SEK. KEB. KG. CHEGAR', 'PENDANG', '', 06700, 'Alor Setar', 'Kedah', 'Kedah', '', 'G2', 'B', 'B04  B24'),
(317, 'SCC ZON ENTERPRISE', 'KAMPUNG TANAH PERIUK', 'KUPANG', '', 09200, 'Baling', 'Baling', 'Kedah', '', 'G1', 'B', 'B04  B24'),
(318, 'SDZ JATI ENTERPRISE', 'NO.3, BANGUNAN KEKWA', 'SEBERANG PEKAN SIK', NULL, 08200, 'Sik', 'Sik', 'Kedah', NULL, 'G1', 'B', '  B04'),
(319, 'SENA AMAN ENTERPRISE', 'NO.62, PEKAN POKOK SENA', 'POKOK SENA', '', 06400, 'Alor Setar', 'Kedah', 'Kedah', '-', 'G2', 'B', 'B02  B14  B04  B24'),
(321, 'SERI CEMARA(M) SDN BHD', 'A-41, LORONG MUTIARA', 'TAMAN MUTIARA INDAH', '', 08000, 'Sungai Petani', 'Kuala Muda', 'Kedah', '', 'G2', 'B', 'B04  B07  B24  B13  B09   B08  B28  B02  B14'),
(322, 'SERI MERBAU ENTERPRISE', 'LOT 23.KAMPUNG PADANG', 'TIKAM BATU', '', 08600, 'Sungai Petani', 'Kuala Muda', 'Kedah', '', 'G1', 'B', ''),
(323, 'SHAH HIRAN ENTERPRISE', 'NO. 133, TAMAN BEMBAN', 'KUPANG', NULL, 09200, 'Baling', 'Baling', 'Kedah', NULL, 'G1', 'B', '  B04  B14  B24'),
(324, 'SHAJAR UTARA ENTERPRISE', 'KAMPUNG LANDAI', 'MUKIM SOK', NULL, 08210, 'Sik', 'Sik', 'Kedah', NULL, 'G1', 'B', '  B12  B04  B14  B13'),
(325, 'SHAMAZ MULIA ENTERPRISE', 'NO. 39, TINGKAT 1', 'JALAN PEKAN MERBOK', '', 08400, 'Sungai Petani', 'Kuala Muda', 'Kedah', '019-5585909', 'G1', 'B', 'B04  B14  B24'),
(326, 'SHAZA TEGUH UTARA', '582 PANTAI PRAI', '', '', 08000, 'Sungai Petani', 'Kedah', 'Kedah', '', 'G2', 'B', 'B04  B14  B24'),
(327, 'SHAZIR ENTERPRISE', '71, TAMAN MESRA', 'KUALA NERANG', '', 06300, 'Alor Setar', 'Kedah', 'Kedah', '', 'G2', 'B', 'B04  B14'),
(328, 'SHUAIB BIN HJ. AHMAD', '59, TAMAN BEDONG', 'BEDONG', NULL, 08100, 'Sungai Petani', 'Kuala Muda', 'Kedah', NULL, 'G1', 'B', '          B04  B24  B28'),
(329, 'SILAU ENTERPRISE', 'BATU 54, KAMPUNG POKOK SETOI', 'JALAN WENG', NULL, 09100, 'Baling', 'Baling', 'Kedah', NULL, 'G1', 'B', '  B04  B14'),
(330, 'SINAR GAMMA ENTERPRISE', 'LOT H.M 2020', 'KAMPUNG BATU 8', NULL, 08200, 'Sik', 'Sik', 'Kedah', NULL, 'G1', 'B', '  B04  B24  B14  B28'),
(331, 'SINAR KIRAWA ENTERPRISE', 'LORONG MASJID', 'KAMPONG MASJID', 'MUKIM JENERI', 08200, 'Sik', 'Sik', 'Kedah', NULL, 'G1', 'B', '  B04  B24  B14  B09'),
(332, 'SINAR YUZA ENTERPRISE', 'KAMPUNG LANDAI', 'MUKIM SOK', NULL, 08210, 'Sik', 'Sik', 'Kedah', NULL, 'G1', 'B', '  B24  B04  B14  B28'),
(333, 'SINDORA CERIA ENTERPRISE', 'NO. 73, PEKAN GULAU', NULL, NULL, 08200, 'Sik', 'Sik', 'Kedah', NULL, 'G1', 'B', '  B13  B04'),
(334, 'SIONG GEMILANG ENTERPRISE', 'NO. 2, PERUMAHAN KEDA', 'KAMPUNG BANDAR', 'MUKIM SIONG', 09100, 'Baling', 'Baling', 'Kedah', NULL, 'G1', 'B', '  B04  B24'),
(335, 'SIREH ENTERPRISE', 'NO. 9, KAMPUNG CHEMARA', 'SIK', NULL, 08200, 'Sik', 'Sik', 'Kedah', NULL, 'G1', 'B', '  B04  B24  B14'),
(336, 'SIREH MAJU ENTERPRISE', 'KAMPUNG CHAROK SIREH', '', '', 08200, 'Sik', 'Sik', 'Kedah', '013-5844130', 'G2', 'B', 'B04  B24'),
(337, 'SL ANOT ENTERPRISE', 'NO.79, LORONG MESRA 4', 'TAMAN RIA MESRA', '', 08300, 'Sungai Petani', 'Kuala Muda', 'Kedah', '', 'G1', 'B', 'B14  B04'),
(338, 'SP ARIWANA ENTERPRISE', 'F-105A, KAMPONG PERMATANG MERBAU', 'TIKAM BATU', NULL, 08600, 'Sungai Petani', 'Kuala Muda', 'Kedah', NULL, 'G1', 'B', '      B04 B14 B24  B28'),
(339, 'SP KEMPAS ENTERPRISE', 'NO.1238, TAMAN KEMPAS FASA 2', 'TAMAN KEMPAS', NULL, 08000, 'Sungai Petani', 'Kuala Muda', 'Kedah', NULL, 'G1', 'B', '  B04  B18  B12  B28  B14');
INSERT INTO `kontraktor` (`kontraktorId`, `konName`, `KonAlamat`, `konAlamatExtS`, `konAlamatExtD`, `konPoskod`, `konBandar`, `konDaerah`, `konNegeri`, `konTel`, `sijilPPKGredOne`, `sijilPPKCatOne`, `sijilPPKKhuOne`) VALUES
(340, 'SPN SEPAKAT ENTERPRISE', 'KAMPUNG CHAROK TOK UBAN', 'MUKIM TELOI', NULL, 08200, 'Sik', 'Sik', 'Kedah', NULL, 'G1', 'B', '    B14  B24  B04'),
(341, 'SPN WARISAN ENTERPRISE', 'KAMPUNG CHARUK  TOK UBAN', 'MUKIM TELOI', NULL, 08200, 'Sik', 'Sik', 'Kedah', NULL, 'G1', 'B', '    B04  B24  B14'),
(342, 'SRI KETEMBA ENTERPRISE', 'NO. 18, KAMPUNG BANGGOL', 'MUKIM SIK', NULL, 08200, 'Sik', 'Sik', 'Kedah', NULL, 'G1', 'B', '  B02  B04  B24'),
(343, 'SRI NADIYA ENTERPRISE', 'F 359 KAMPUNG TENGAH', 'JENERI', NULL, 08300, 'Sik', 'Sik', 'Kedah', NULL, 'G1', 'B', '  B04  B24'),
(344, 'SRI NAU ENTERPRISE', 'NO.B-97, LORONG TENTERAM 5', 'TAMAN SRI AMAN', 'CHAROK NAU', 09100, 'Baling', 'Baling', 'Kedah', NULL, 'G1', 'B', '    B04  B24  B28'),
(345, 'SRI NERING ENTERPRISE', 'BATU 473/4, KAMPUNG NERING', 'BONGOR', '', 09100, 'Baling', 'Baling', 'Kedah', '', 'G1', 'B', 'B04  B14'),
(346, 'SUFAZA ENTERPRISE', 'BATU 14 1/4 JALAN NAKA', 'POKOK SENA', NULL, 06400, 'ALOR SETAR', 'Kedah', 'Kedah', NULL, 'G2', 'B', '      B04  B24  B02'),
(347, 'SYARANA INDAH ENTERPRISE', 'BATU 54, KAMPUNG POKOK SETUL', 'SIONG', NULL, 09100, 'Baling', 'Baling', 'Kedah', '019-5463548', 'G1', 'B', '  B04  B02  B28  B24  B13'),
(348, 'SYARIKAT ADAMZAIYA', 'KAMPUNG KOTA', 'MUKIM SIONG', NULL, 09100, 'Baling', 'Baling', 'Kedah', NULL, 'G1', 'B', '  B04  B14'),
(349, 'SYARIKAT AMANAH', 'B33 TAMAN ABADI', 'FASA 2 CARUK NAU', NULL, 09100, 'Baling', 'Baling', 'Kedah', NULL, 'G1', 'B', '  B04  B02  B24  B13  B28  B01'),
(350, 'SYARIKAT IKATAN IBU', 'BATU 48', 'BONGOR', '', 01900, 'Baling', 'Baling', 'Kedah', '', 'G1', 'B', 'B04  B24'),
(351, 'SYARIKAT KELUARGA SERI SENA', 'NO.40-A, KAMPUNG POKOK SENA', 'PULAI', NULL, 09100, 'Baling', 'Baling', 'Kedah', '-', 'G1', 'B', '      B04  B24  B02 B28'),
(352, 'ANESYA ENTERPRISE', 'KAMPONG BUKIT HANGUS', 'MUKIM JENERI', NULL, 08200, 'SIK', 'Sik', 'Kedah', NULL, 'G1', 'B', '    B04  B14  B24'),
(353, 'SYARIKAT KUPANG', 'NO. 66-A, KAMPUNG PAK BONG', 'MUKIM KUPANG', '', 09200, 'Baling', 'Baling', 'Kedah', '', 'G1', 'B', 'B04  B14  B28'),
(354, 'SYARIKAT OSRAH', 'NO.16, PEKAN TIKAM BATU', '', '', 08600, 'Sungai Petani', 'Kuala Muda', 'Kedah', '04-4315279', 'G1', 'B', 'B04  B14'),
(355, 'SYARIKAT SRI KEPALA BUKIT', 'NO. 335, KAMPUNG HAJI ABAS', 'MUKIM BONGOR', NULL, 09100, 'Baling', 'Baling', 'Kedah', NULL, 'G1', 'B', '      B04  B14'),
(356, 'AMAN ENTERPRISE', '187, JALAN TUANKU HAMINAH 3', 'TAMAN TUANKU HAMINAH', NULL, 08000, 'Sungai Petani', 'Kuala Muda', 'Kedah', NULL, 'G1', 'B', ' B02  B24  B04  B28'),
(357, 'SYARIKAT USAHA BERSATU', 'KAMPUNG TELUK TEDURI', 'MUKIM PULAI', NULL, 09100, 'Baling', 'Baling', 'Kedah', NULL, 'G1', 'B', '  B04  B14  B24  B28'),
(358, 'SYARIKAT ZAHANIZA', 'A1, JALAN KAMPUNG HAJI ABAS', 'BONGOR', NULL, 09100, 'Baling', 'Baling', 'Kedah', '019-5166579', 'G1', 'B', '  B04  B24'),
(359, 'SYARIKAT ZAMITA', 'NO. 4-A, BANGUNAN MDKM', 'JALAN MARKET', NULL, 08000, 'Sungai Petani', 'Kuala Muda', 'Kedah', NULL, 'G1', 'B', '  B04  B02  B13  B24  B14 B28'),
(360, 'AZKA TEGUH CONSTRUCTION', 'NO. 242, LORONG 8', 'TAMAN MALINJA 2,', 'SEMELING', 08100, 'Sungai Petani', 'Kuala Muda', 'Kedah', NULL, 'G1', 'B', '      B12  B14  B04'),
(361, 'SYIQA ENTERPRISE', 'KAMPUNG TENGAH KURUNG HITAM', 'KUALA NERANG', '', 06300, 'Alor Setar', 'KEDAH', 'Kedah', '', 'G2', 'B', 'B24  B04  B14'),
(362, 'SYO ENTERPRISE', 'NO. 85-A, KAMPONG IBOI', 'KUPANG', '', 09200, 'Baling', 'Baling', 'Kedah', '', 'G1', 'B', 'B04  B14'),
(363, 'AHRAB ENTERPRISE', 'KG. TITI TEDORI', 'MUKIM PULAI', NULL, 09100, 'BALING', 'Baling', 'Kedah', NULL, 'G1', 'B', '  B07  B14  B24  B04'),
(364, 'TANJUNG CERGAS ENTERPRISE', 'NO. 150 KAMPUNG BARU', 'MUKIM SIONG', NULL, 09100, 'Baling', 'Baling', 'Kedah', NULL, 'G1', 'B', '  B24  B04  B28'),
(365, 'TANJUNG KUKUH ENTERPRISE', 'BT 8, KG TANJONG PARI', 'MUKIM SIONG', NULL, 09100, 'Baling', 'Baling', 'Kedah', NULL, 'G1', 'B', '            B04  B14  B28'),
(366, 'TANJUNG MUHAJAR ENTERPRISE', 'NO.1, PERUMAHAN KEDA', 'BATU 8, MUKIM SIONG', NULL, 09100, 'Baling', 'Baling', 'Kedah', NULL, 'G1', 'B', '  B04  B24  B14'),
(367, 'TARAKI ENTERPRISE', '76, JALAN SUNGAI LAYAR', 'SUNGAI PETANI', NULL, 08000, 'Sungai Petani', 'Kuala Muda', 'Kedah', NULL, 'G1', 'B', '  B04  B14  B24'),
(368, 'TEGAS ENTERPRISE', 'NO.3, PLOT 1', 'TAMAN KRISTAL', 'PADANG TEMUSU', 08000, 'Sungai Petani', 'Kuala Muda', 'Kedah', NULL, 'G1', 'B', '    B04  B14'),
(369, 'TEGUH MILENIUM ENTERPRISE', 'F 261, KAMPUNG SUNGAI PERAHU', 'JENIANG', NULL, 08200, 'Sik', 'Sik', 'Kedah', NULL, 'G1', 'B', '    B04  B14  B13  B09  B24  B15'),
(370, 'TEGUH PAKSI ENTERPRISE', 'NO. 133B, JLN. 7/3', 'FASA 3, TAMAN LAMBAH BUJANG', 'BEDONG', 08100, 'Sungai Petani', 'Kuala Muda', 'Kedah', NULL, 'G1', 'B', '  B04  B14'),
(371, 'TEGUH RAMBAI ENTERPRISE', '789,  JALAN 1/2C', 'TAMAN PERUDA UTAMA', NULL, 08000, 'Sungai Petani', 'Kuala Muda', 'Kedah', '-', 'G1', 'B', '  B04  B24  B09  B14'),
(372, 'TELOI KANAN ENTERPRISE', 'NO.122, FELDA TELOI KANAN', 'KUALA KETIL', '', 09300, 'Baling', 'Baling', 'Kedah', '', 'G1', 'B', 'B04  B14  B24'),
(373, 'TEMUSU ENTERPRISE', 'KLOT 940, KAMPONG TEMUSU', 'PULAI', NULL, 09100, 'Baling', 'Baling', 'Kedah', NULL, 'G1', 'B', '  B04  B24'),
(375, 'TERAS PALONG ENTERPRISE', 'NO.73,KAMPUNG GABUS', 'PULAI', NULL, 09100, 'Baling', 'Baling', 'Kedah', NULL, 'G1', 'B', '    B04  B24'),
(376, 'TERAS WAJA CONSTRUCTION', 'NO.62, TAMAN TUNKU TABOR', 'JALAN GANGSA', '', 05150, 'Alor Setar', 'Kedah', 'Kedah', '017-4252949', 'G2', 'B', 'B04  B02  B24  B09  B08  B28  B14'),
(377, 'ZAY TEGUH ENTERPRISE', 'NO. 91 LORONG 3', 'TAMAN PAHLAWAN', NULL, 08000, 'SUNGAI PETANI', 'Kuala Muda', 'Kedah', '-', 'G1', 'B', '  B04   B14  B02'),
(378, 'TEROI JATI ENTERPRISE', 'BATU 21, KAMPUNG RAJA', 'PEKAN TEROI', 'GUAR CHEMPEDAK', 08800, 'Sungai Petani', 'Kedah', 'Kedah', '', 'G2', 'B', 'B04  B24  B14  B28  B01'),
(379, 'TERRA ESTETIKA ENTERPRISE', 'NO.113, TAMAN YAN, JALAN DULANG', 'YAN KECHIL', '', 06900, 'Alor Setar', 'KEDAH', 'Kedah', '', 'G2', 'B', 'B08  B04  B02  B24  B10  B13'),
(380, 'SYARIKAT SAZA HJ. SAADIN & ANAK-ANAK', '185, JALAN SUNGAI LAYAR', NULL, NULL, 08000, 'Sungai Petani', 'Kuala Muda', 'Kedah', NULL, 'G1', 'B', '      B04  '),
(381, 'TOHAR  BIN WAN NEK', 'KAMPUNG IBOI', 'KUPANG', '', 09200, 'Baling', 'Baling', 'Kedah', '', 'G1', 'B', 'B04  B14  B24'),
(382, 'TR SAZA ENTERPRISE', 'NO. 208, LORONG 8B', 'TAMAN NILAM', NULL, 08000, 'Sungai Petani', 'Kuala Muda', 'Kedah', NULL, 'G1', 'B', '      B24  B28  B04'),
(383, 'TRIPLE VISION ENTERPRISE', 'NO. 25 LORONG 2', 'TAMAN KIARA,', 'SUNGAI LAYAR', 08000, 'Sungai Petani', 'Kuala Muda', 'Kedah', NULL, 'G1', 'B', '  B04  B24'),
(384, 'TULIP JATI ENTERPRISE', '2239, LORONG INAI 3', 'TAMAN RIA JAYA', NULL, 08000, 'Sungai Petani', 'Kuala Muda', 'Kedah', NULL, 'G1', 'B', '  B04  B08 B14  B28  B24'),
(385, 'U.B GREEN ENTERPRISE', 'NO.69, KAMPUNG ULU BAKAI', 'KUALA KETIL', '', 09300, 'Baling', 'Baling', 'Kedah', '', 'G2', 'B', 'B13  B02  B10  B24  B04'),
(386, 'UB MAJU ENTERPRISE', 'NO.91A, KAMPUNG ULU BAKAI', 'MALAU', '', 09100, 'Baling', 'Baling', 'Kedah', '', 'G1', 'B', 'B04  B14'),
(387, 'UE  GEMILANG ENTERPRISE', 'NO.19A, TITI NO. 2', 'JALAN KUALA SUNGAI YAN', NULL, 06900, 'Alor Setar', 'Kedah', 'Kedah', NULL, 'G2', 'B', '      B04  B14  B24  B28 B08 B10'),
(388, 'ULOL AZMI ENTERPRISE', 'KAMPUNG BANGGOL', 'SIK DALAM', '', 08200, 'Sik', 'Sik', 'Kedah', '04-4623289', 'G1', 'B', 'B24  B04'),
(389, 'USAHA MULIA ENTERPRISE', 'KAMPONG BATU 8', 'SIK', NULL, 08200, 'Sik', 'Sik', 'Kedah', NULL, 'G1', 'B', '      B14  B04  B10'),
(390, 'AWANG KESAH BIN SHAARI', 'BATU 47 1/2, KAMPONG JENALIK', 'MUKIM BONGOR', NULL, 09100, 'BALING', 'Baling', 'Kedah', '04-4210289', 'G1', 'B', '      B04  B14  B28'),
(391, 'WAFIE ENTERPRISE', 'NO.10, TINGKAT ATAS RUMAH KEDAI', 'TAMAN SURIA FASA 2', 'KUBANG PASU', 06000, 'Jitra', 'KEDAH', 'Kedah', '', '', '', ''),
(393, 'WAHYU ENTERPRISE', 'BT. 48, KAMPUNG TELUK SUNGAI DURIAN', 'BONGOR', '', 09100, 'Baling', 'Baling', 'Kedah', '', 'G1', 'B', 'B04  B24'),
(394, 'WAN ABDUL RANI ENTERPRISE', '44 KAMPUNG IBOI', 'KUPANG', '', 09200, 'Baling', 'Baling', 'Kedah', '', 'G1', 'B', 'B04  B14'),
(395, 'WAWASAN MAJU ENTERPRISE', '17, TINGKAT 1, PERSIARAN SERI BAYU', 'TAMAN SERI BAYU', 'SUNGAI LALANG', 08000, 'Sungai Petani', 'Kuala Muda', 'Kedah', NULL, 'G1', 'B', '      B24  B04  B28'),
(396, 'WIRMA MEGA ENTERPRISE', 'NO.56 TAMAN PKNK', 'TIKAM BATU', NULL, 08600, 'Sungai Petani', 'Kuala Muda', 'Kedah', NULL, 'G1', 'B', '    B04  B14  B24'),
(397, 'YISMA ENTERPRISE', 'F- 1082, KAMPUNG PULAU CENGAI', 'GURUN', NULL, 08300, 'Gurun', 'Kuala Muda', 'Kedah', '-', 'G1', 'B', '  B04  B07  B14'),
(398, 'YUABINA SDN.BHD', 'KM 16, JALAN WENG', 'KAMPUNG BECHAH SAWA', 'BALING', 09100, 'Baling', 'Baling', 'Kedah', NULL, 'G1', 'B', '          B04  B24'),
(399, 'YUIZ ENTERPRISE', 'NO. 1552, LORONG INAI 4', 'TAMAN RIA JAYA', '', 08000, 'Sungai Petani', 'Kuala Muda', 'Kedah', '', 'G1', 'B', 'B04  B14'),
(400, 'YUSBALIZA BINTI YAACOB', 'KAMPUNG BUKIT IBOI', 'KUPANG', NULL, 09200, 'Baling', 'Baling', 'Kedah', NULL, 'G1', 'B', '      B04  B24  B28'),
(401, 'Z ZAINI ENTERPRISE', 'NO.36A KAMPUNG TANJUNG', 'SIK', NULL, 08200, 'Sik', 'Sik', 'Kedah', '011-20927423', 'G1', 'B', '    B04  B09  B13  B24  B14'),
(402, 'ZAIZA ENTERPRISE', 'NO.5, BANGUNAN IXORA', 'MDS BATU 5', NULL, 08200, 'Sik', 'Sik', 'Kedah', NULL, 'G1', 'B', '  B04  B24  B14  B28  B01'),
(403, 'ZAMNAH ENTERPRISE', 'LOT 431, KAMPUNG LALANG', 'MUKIM SIONG', NULL, 09100, 'Baling', 'Baling', 'Kedah', NULL, 'G1', 'B', '      B04  B28'),
(405, 'RIZAL ENGINEERING', 'NO. 76, JALAN BATU 17', 'KAMPUNG SETIA JAYA', 'GURUN', 08300, 'SUNGAI PETANI', 'Kuala Muda', 'Kedah', NULL, 'G1', 'B', '      B04'),
(406, 'ZARIYAL UTARA ENTERPRISE', 'KAMPUNG LANDAI', 'MUKIM SOK', 'GULAU', 08210, 'Sik', 'Sik', 'Kedah', NULL, 'G1', 'B', '      B04  B14'),
(407, 'ZATIMAN ENTERPRISE', '830 LORONG KUDA KEPANG 4', 'TAMAN RIA JAYA', NULL, 08000, 'Sungai Petani', 'Kuala Muda', 'Kedah', NULL, 'G1', 'B', '  B04  B28  B14'),
(408, 'ZBR ALIF ENTERPRISE', '24 A,KAMPUNG GUAR CEMPEDAK', 'KUALA KETIL', NULL, 09300, 'Baling', 'Baling', 'Kedah', NULL, 'G1', 'B', '    B04  B24'),
(409, 'ZE GROUP CONSTRUCTION', '189, KAMPUNG MASJID BATU BELACAN', 'BUKIT BELACAN', '', 08010, 'Alor Setar', 'KEDAH', 'Kedah', '', 'G2', 'B', 'B04'),
(410, 'ZEE ENTERPRISE', '909, LORONG 101', 'TAMAN RIA', NULL, 08000, 'Sungai Petani', 'Kuala Muda', 'Kedah', NULL, 'G1', 'B', '  B14  B24  B04'),
(411, 'ZIMAN ENTERPRISE', 'NO.50, KAMPUNG TELOK TEMELAH', 'BONGOR', NULL, 09100, 'Baling', 'Baling', 'Kedah', NULL, 'G1', 'B', '    B09  B24  B14  B04'),
(413, 'ZM ONAL ENTERPRISE', 'NO.3943 BELAKANG MARKET', 'PEKAN YAN KECHIL', 'YAN', 06900, 'Alor Setar', 'Kedah', 'Kedah', '011-29562987', 'G2', 'B', '          B04  B24  B14'),
(414, 'ZNS UNGGUL ENTERPRISE', 'NO.32, LORONG 27', 'TAMAN GURUN JAYA', NULL, 08300, 'Sungai Petani', 'Kuala Muda', 'Kedah', NULL, 'G2', 'B', '      B04  B14  B09  B24'),
(415, 'ZNY TEGUH ENTERPRISE', 'NO.201, TINGKAT BAWAH ', 'JALAN BPJ 1/20, SEKSYEN 1', 'BANDAR PUTERI JAYA', 08000, 'Sungai Petani', 'Kuala Muda', 'Kedah', '-', 'G1', 'B', '    B18  B04  B02  B24  B13  '),
(416, 'ZNZ UNIQUE ENTERPRISE', 'NO. 27, KAMPUNG TASIK APONG', NULL, NULL, 08000, 'Sungai Petani', 'Kuala Muda', 'Kedah', '04-4220572', 'G1', 'B', '      B24  B14  B04  B28'),
(417, 'ZNZ WARISAN ENTERPRISE', 'HADAPAN PEJABAT LPP', 'BATU 5', 'SIK', 08200, 'Sik', 'Sik', 'Kedah', NULL, 'G1', 'B', '    B04  B14  B24'),
(418, 'ZUBI JAYA ENTERPRISE', '23, JALAN MERBAU', 'TAMAN MERBAU', NULL, 08000, 'Sungai Petani', 'Kuala Muda', 'Kedah', NULL, 'G1', 'B', '    B04  B14'),
(419, 'ZULKEPLE ENTERPRISE', '644F, KAMPUNG BATU 2', 'JALAN SUNGAI BONGKOK', 'GURUN', 08300, 'Sungai Petani', 'Kuala Muda', 'Kedah', '04-4687292', 'G1', 'B', 'B04  B24  B28'),
(420, 'ZULKIFLEE BIN YUSOFF', 'NO.190, LENGKOK SP HEIGHTS 11', 'SP HEIGHTS', '', 08000, 'Sungai Petani', 'Kuala Muda', 'Kedah', '', 'G1', 'B', 'B04  B24'),
(421, 'ZULKIFLI BIN BAKRI', 'NO. 99BS, KG. BONGOR TIGA', 'JALAN WENG', 'BONGOR', 09100, 'Baling', 'Baling', 'Kedah', '', 'G1', 'B', 'B04  B24'),
(422, 'ZURIMA JAYA ENTERPRISE', 'NO.59 TAMAN CEMPEDAK', 'JENIANG', '', 08700, 'Sungai Petani', 'Kuala Muda', 'Kedah', '', 'G1', 'B', 'B04  B13  B24  B08  B18'),
(423, 'ZUWAN ENTERPRISE', 'NO.2511, LORONG 60', 'TAMAN RIA', NULL, 08000, 'Sungai Petani', 'Kuala Muda', 'Kedah', NULL, 'G1', 'B', '    B04  B24 B28'),
(444, 'SYARIKAT PERWIRA TUNGGAL', 'NO. 28, KAMPONG NAMEK', 'SIK', NULL, 08200, 'SIK', 'Sik', 'Kedah', '04-4692710', 'G1', 'B', '  B04  B14  B24  B28  '),
(445, 'ZAR PERMAI ENTERPRISE', 'NO.3336, LORONG SERAMPANG 8/3', 'TAMAN RIA JAYA', NULL, 08000, 'SUNGAI PETANI', 'Kuala Muda', 'Kedah', NULL, 'G1', 'B', '            B04   B24  B14   B10'),
(446, 'KAMALUDIN BIN SALLEH', '25, KAMPONG LUBUK BEDIL', 'SIK', NULL, 08200, 'SIK', 'Sik', 'Kedah', NULL, 'G1', 'B', '    B14  B24  B04  B28'),
(447, 'SYARIKAT SEPAKAT SIK', 'LOT 3732, TINGKAT ATAS BANGUNN KOPERASI', 'JALAN TUNKU IBRAHIM', NULL, 08200, 'SIK', 'SIK', 'Kedah', NULL, 'G1', 'B', '    B24  B04  B28'),
(448, 'AQ TEGUH GEMILANG', 'NO.1, JALAN SEMARAK', 'KAMPUNG CHAROK KIT', NULL, 08200, 'SIK', 'SIK', 'Kedah', NULL, 'G1', 'B', '    B14  B24  B04  '),
(449, 'AZAM POSITIF ENTERPRISE', 'KAMPUNG BECAH SAWA', 'MUKIM SIONG', NULL, 09100, 'BALING', 'BALING', 'Kedah', NULL, 'G1', 'B', '    B04  B14'),
(450, 'KHADA ENTERPRISE', 'KAMPONG CARUK GOROK', 'PULAI', NULL, 09100, 'BALING', 'BALING', 'Kedah', NULL, 'G1', 'B', '    B02  B04  B24'),
(451, 'AL ANDALUS ENTERPRISE', 'NO. 1692  LORONG TEJA 34', 'TAMAN KELADI', NULL, 08000, 'SUNGAI PETANI', 'Kuala Muda', 'Kedah', NULL, 'G1', 'B', '  '),
(452, 'ANOR FITRI BIN ISMAIL', 'NO.1046, LORONG ANGSANA 28', 'TAMAN KELADI', NULL, 08000, 'SUNGAI PETANI', 'KUALA MUDA', 'Kedah', NULL, 'G1', 'B', '      B24  B09  B13  B02  B04  B14'),
(453, 'AHMAD SOBRI BIN TALIB', 'KAMPUNG SEDU', 'JENERI', NULL, 08300, 'SIK', 'Sik', 'Kedah', NULL, 'G1', 'B', '  B04  B14  B24'),
(454, 'LINTANG BAHAGIA ENTERPRISE', 'KAMPUNG JERUNG, BATU 8', 'JALAN SUNGAI PETANI', 'KUALA KETIL', 08000, 'SUNGAI PETANI', 'Kuala Muda', 'Kedah', NULL, 'G1', 'B', '  B01'),
(455, 'ABD UTARA ENTERPRISE', 'F871, KAMPUNG POKOK ASAM', 'JALAN PINANG TUNGGAL', 'KUALA KETIL', 08000, 'SUNGAI PETANI', 'KUALA MUDA', 'Kedah', NULL, 'G1', 'B', '    B04  B24  B10'),
(456, 'ANAIMAN ENTERPRISE', 'NO.1-A, TINGKAT ATAS', 'MEDAN SELERA BAKAR ARANG', NULL, 08000, 'SUNGAI PETANI', 'Kuala Muda', 'Kedah', '04-4318101', 'G1', 'B', '  B04  B14'),
(457, 'AY TRADING', 'KAMPUNG JERUNG, BATU 8', 'JALAN SUNGAI PETANI', 'KUALA KETIL', 08000, 'SUNGAI PETANI', 'KUALA MUDA', 'Kedah', NULL, 'G1', 'B', '  B24  B04'),
(458, 'ASAS PERMAI ENTERPRISE', 'LOT F-29, BELAKANG KLINIK DESA', 'SEMELING', NULL, 08100, 'SUNGAI PETANI', 'KUALA MUDA', 'Kedah', NULL, 'G1', 'B', '    B14  B24  B08  B28  B04'),
(459, 'HASTECH RESOURCES', 'NO.5, TINGKAT I, JALAN NILAM SARI', 'TAMAN NILAM SARI', NULL, 08000, 'SUNGAI PETANI', 'KUALA MUDA', 'Kedah', '04-4201868', 'G2', 'B', '        B04  B28  B14'),
(460, 'AB SARAT ENTERPRISE', '520, JALAN NILAM', 'TAMAN NILAM', NULL, 08000, 'SUNGAI PETANI', 'KUALA MUDA', 'Kedah', NULL, 'G1', 'B', '    B04  B14  B28'),
(461, 'AMI SEMARAK ENTERPRISE', 'F-871, KAMPONG BENDANG DALAM', 'MERBOK', NULL, 08100, 'SUNGAI PETANI', 'KUALA MUDA', 'Kedah', '013-4886196', 'G1', 'B', '  B04 B09 B24 B13 B08 B28 B14  B01'),
(462, 'AKSI JAYA ENTERPRISE', 'KAMPONG BATU BESAR', 'SIK', NULL, 08200, 'SIK', 'SIK', 'Kedah', NULL, 'G1', 'B', '    B14  B04  B24'),
(463, 'AMBANGAN SERASI ENTERPRISE', 'NO. 165, LOT 6868', 'KAMPUNG CEMARA', 'MUKIM TELOI', 08200, 'SIK', 'Sik', 'Kedah', NULL, 'G1', 'B', '  B24  B14  B04  B28'),
(464, 'HH TUNAZ ENTERPRISE', '305 KAMPUNG BELAU', 'MERBOK', NULL, 08400, 'SUNGAI PETANI', 'Kuala Muda', 'Kedah', NULL, 'G1', 'B', '  B14  B04  B08  B24'),
(465, 'MGS BUMI ENTERPRISE', 'LOT 1652 SUNGAI JAGUNG', NULL, NULL, 08000, 'SUNGAI PETANI', 'Kuala Muda', 'Kedah', '017-4067739', 'G1', 'B', '  B04  B24'),
(466, 'TANJONG   PIRING  ENTERPRISE', 'KAMPONG TANJUNG PIRING', 'NAMI', NULL, 08200, 'SIK', 'Sik', 'Kedah', NULL, 'G1', 'B', '  B04  B24  B14'),
(467, 'MZM SAUJANA ENTERPRISE', 'NO. 14A JALAN KAMPUNG SENA', 'SIK', NULL, 08200, 'SIK', 'Sik', 'Kedah', NULL, 'G1', 'B', 'B04    '),
(468, 'PERNIAGAAN MAJU', 'NO. 135D, KAMPUNG SUNGAI PAU', NULL, NULL, 08200, 'SIK', 'Sik', 'Kedah', NULL, 'G1', 'B', ' B04  B09  B14  B24 '),
(469, 'ARBIRA ENTERPRISE', 'NO.21, LORONG 4', 'TAMAN PERUDA', NULL, 08000, 'SUNGAI PETANI', 'Kuala Muda', 'Kedah', NULL, 'G1', 'B', '  B24  B04'),
(470, 'MBG SAMA ENTERPRISE', '77 KAMPUNG MASJID', 'PEKAN SIK', NULL, 08200, 'SIK', 'Sik', 'Kedah', NULL, 'G1', 'B', '    B04  B14'),
(471, 'ARAS VENTURES', 'NO. 218, BAKAR KAPUR', NULL, NULL, 08000, 'SUNGAI PETANI', 'Kuala Muda', 'Kedah', NULL, 'G1', 'B', '  B24  B04  B28'),
(472, 'ANS AIKON ENTERPRISE ', '138 TINGKAT 2', 'JALAN MAWAR 2', 'TAMAN PEKAN BARU', 08000, 'SUNGAI PETANI', 'Kuala Muda', 'Kedah', '019-4773885', 'G1', 'B', '  B13  B14  B24  B04  B07  B28'),
(473, 'MERCU KENARI ENTERPRISE', 'NO.3 BANGUNAN KEKWA', 'SEBERANG PEKAN SIK', NULL, 08200, 'SUNGAI PETANI', 'Kuala Muda', 'Kedah', NULL, 'G1', 'B', 'B24  B04    '),
(474, 'DINA QUYYUM ENTERPRISE', 'NO.926 RUMAH KEDAI', 'KAMPUNG BETONG', 'MUKIM JENERI', 08300, 'SIK', 'Sik', 'Kedah', '019-4259926', 'G1', 'B', '  B04  B24   B28  '),
(475, 'ARIM ENTERPRISE', 'LOT 17, LORONG SEMARAK 5', 'TAMAN SEMARAK', 'SUNGAI PASIR', 08000, 'SUNGAI PETANI', 'Kuala Muda', 'Kedah', NULL, 'G1', 'B', '          B04  B13  B24  B04  B14  B08  B11  B28'),
(476, 'ARUS BAYU ENTERPRISE', 'KAMPUNG TELAGA BATU', NULL, NULL, 08200, 'SIK', 'Sik', 'Kedah', NULL, 'G1', 'B', '    B10  B13  B24  B28  B04'),
(477, 'TEGUH JULANG ENTERPRISE', 'NO.300 KUALA BAHAGIA', 'JENIANG', NULL, 08700, 'SIK', 'Sik', 'Kedah', NULL, 'G1', 'B', '  B04  B09  B13  B24  '),
(478, 'MUHAMMAD UZIR ENTERPRISE', 'NO.21 BANGUNAN MDB', 'PEKAN BARU', 'KG. LALANG, MK SIONG', 09100, 'BALING', NULL, 'Kedah', NULL, 'G1', 'B', '  B04  B08  B10  B24  B28'),
(479, 'TAT ANDALUSIA ENTERPRISE', 'KAMPONG MASJID IBOI', NULL, NULL, 92000, 'BALING', 'BALING', 'Kedah', '-', 'G1', 'B', '  B04  B14 B12  B09  B28'),
(480, 'ATB UTARA ENTERPRISE', 'NO. 13, KAMPUNG TOK WENG', NULL, NULL, 09100, 'BALING', 'BALING', 'Kedah', NULL, 'G1', 'B', '  B28  B14  B04  B24'),
(481, 'ARCA BELUTI ENTERPRISE', 'NO. 36, KOMPLEKS KOPERASI', 'JALAN BADLISHAH', NULL, 09100, 'BALING', 'BALING', 'Kedah', NULL, 'G1', 'B', 'B04  B08  B13  B24  B28'),
(482, 'NURAINMAN ENTERPRISE', 'KAMPUNG KAKI BUKIT', 'BATU 7', 'JALAN KROH', 09100, 'BALING', 'BALING', 'Kedah', NULL, 'G1', 'B', '      B24  B09  B04  B28  '),
(483, 'JEBAT JAYA ENTERPRISE', 'NO. 5, TINGKAT 1', 'KOMPLEKS KOPERASI PASAR MELAYU', NULL, 09100, 'BALING', 'Baling', 'Kedah', NULL, 'G1', 'B', '  B04  B14  '),
(484, 'BEST SIGN TRADING', 'NO. 3A & 4, BANGUNAN MPSP', 'JALAN BAKAR ARANG', NULL, 08000, 'SUNGAI PETANI', 'KUALA MUDA', 'Kedah', NULL, 'G1', 'B', '    B04  B24  B02'),
(485, 'AMBANGAN TEGUH ENTERPRISE', 'NO. 180 LORONG WIRA 2/2', 'TAMAN WIRA', NULL, 08000, 'SUNGAI PETANI', 'KUALA MUDA', 'Kedah', NULL, 'G1', 'B', 'B04  B24  B28'),
(486, 'SHOPIAN BIN JUSOH', 'NO.9 LORONG BLM2/1', 'BANDAR LAGUNA MERBOK', NULL, 08000, 'SUNGAI PETANI', 'KUALA MUDA', 'Kedah', NULL, 'G1', 'B', '  B04  B14'),
(487, 'PEMBINAAN MERBOK UTARA', 'KAMPUNG BENDANG DALAM', 'MERBOK', NULL, 08400, 'SUNGAI PETANI', 'KUALA MUDA', 'Kedah', NULL, 'G1', 'B', '      B14  B24  B04'),
(488, 'AL BARAKAH BAKTI ENTERPRISE', 'GERAI NO. 12', 'STESYEN BAS EKSPRES LAMA', NULL, 08000, 'SUNGAI PETANI', 'KUALA MUDA', 'Kedah', NULL, 'G1', 'B', '      B04  B14  B07'),
(489, 'AFA INDAH ENTERPRISE', '1579, JALAN KELISA RIA 2/10', 'TAMAN KELISA RIA', NULL, 08000, 'SUNGAI PETANI', 'KUALA MUDA', 'Kedah', NULL, 'G1', 'B', '    B24  B13  B04  B28'),
(490, 'SYARIKAT SRIBINA', 'NO.20, LORONG 7A', 'TAMAN PERUDA', NULL, 08000, 'SUNGAI PETANI', 'KUALA MUDA', 'Kedah', NULL, 'G1', 'B', 'B24  B04  B10  B28'),
(491, 'SABRINA NUR CONSTRUCTION', 'NO. 10A, TINGKAT ATAS', 'JALAN KENARI BIRU 1', 'TAMAN KENARI INDAH', 08000, 'SUNGAI PETANI', 'KUALA MUDA', 'Kedah', NULL, 'G1', 'B', '    B04  B14  B28'),
(492, 'AQHWA ENTERPRISE', 'NO.43,LORONG 3', 'TAMAN BERLIAN INDAH', NULL, 08000, 'SUNGAI PETANI', 'Kuala Muda', 'Kedah', NULL, 'G1', 'B', '  B04  B24  B14'),
(493, 'KJ MEERA VENTURE', 'NO. 107. TAMAN SERI UTAMA', 'GURUN', NULL, 08300, 'SUNGAI PETANI', 'KUALA MUDA', 'Kedah', NULL, 'G1', 'B', 'B04  B14'),
(494, 'ANTARA TEGUH ENTERPRISE', 'NO.2387, JALAN BPJ 1/20', 'BANDAR PUTERI JAYA', NULL, 08000, 'SUNGAI PETANI', 'KUALA MUDA', 'Kedah', NULL, 'G1', 'B', 'B14  B04'),
(495, 'ILTIZAM INFRA ENTERPRISE', 'LOT B-10 ARKED MARA GURUN', NULL, NULL, 08300, 'SUNGAI PETANI', 'KUALA MUDA', 'Kedah', NULL, 'G1', 'B', 'B14  B04'),
(496, 'ZNS GEMILANG ENTERPRISE', 'NO. 41-B ', 'PERUMAHAN ASAM JAWA', NULL, 06700, 'ALOR SETAR', 'PENDANG', 'Kedah', '013-4246050', 'G2', 'B', '  B04 B14'),
(497, 'AMN SABU LIGHT ENTERPRISE', 'LOT 1052 NO. 2', 'KM15 MUKIM JABI', 'JALAN POKOK SENA', 06400, 'ALOR SETAR', 'POKOK SENA', 'Kedah', '014-2491716', 'G2', 'B', '        B04 B10 B28 B24'),
(498, 'NAZZA BINA & ENGINEERING', 'NO 31A ', '1ST FLOOR LORONG BLM 1/16 ', 'BANDAR LAGUNA MERBOK', 08000, NULL, 'KUALA MUDA', 'Kedah', '019-4589942', 'G2', 'B', '    B04 B09 B14 B24'),
(499, 'AZIE BUMI EMAS RESOURCES', 'LOT 1 ', 'JALAN DESA JAYA', NULL, 08000, 'SUNGAI PETANI', 'KUALA MUDA', 'Kedah', '013-3500861', 'G2', 'B', '    B04'),
(500, 'SYS MUTIARA JAYA ENTERPRISE', 'NO. 130 ', 'KAMPUNG TANJUNG NERING', NULL, 09200, 'BALING', 'BALING', 'Kedah', '017-6255689', 'G2', 'B', '      B04'),
(501, 'AJEEYA ENTERPRISE', 'NO. 462', 'LORONG TERATAI 1', 'TAMAN BERJAYA', 05050, 'ALOR SETAR', 'ALOR SETAR', 'Kedah', '04-7719979', 'G2', 'B', '  B04 B14 B24'),
(502, 'PERNIAGAAN ASYMUNIL', 'NO. 7 ', 'KAMPUNG PONDOK CHEGAR', NULL, 06700, 'ALOR SETAR', 'PENDANG', 'Kedah', '012-5895671', 'G2', 'B', '  B04 B14'),
(503, 'ELEKTRA ENGINEERING SDN. BHD.', 'NO. 1010-1012', 'KOMPLEKS SRI PUTRA ', 'SEBERANG JALAN PUTRA', 05150, 'ALOR SETAR', 'KOTA SETAR', 'Kedah', '04-7320037', 'G2', 'B', '  B04'),
(504, 'NR IRDINA ENTERPRISE', 'NO. 31', 'BELAKANG SEKOLAH', 'KEBANGSAAN PULAI', 09100, 'BALING', 'BALING', 'Kedah', NULL, 'G2', 'B', '  B04 B09 B28'),
(505, 'RATA BINA ENTERPRISE', 'LOT 385', 'KM 6.5', 'LEBUHRAYA SULTAN ABDUL HALIM', 05400, 'ALOR SETAR', 'KOTA SETAR', 'Kedah', NULL, 'G2', 'B', '  B04 B24'),
(506, 'RAHSIA HATI ENTERPRISE', '321 KAMPUNG SUNGAI', 'GELAM BUJANG', NULL, 08100, 'SUNGAI PETANI', 'KUALA MUDA', 'Kedah', NULL, 'G2', 'B', '  B04 B28'),
(507, 'HANY HARMONY', 'NO. 2D JALAN PEGAWAI', NULL, NULL, 08000, 'SUNGAI PETANI', 'KUALA MUDA', 'Kedah', NULL, 'G2', 'CE', '  CE01 CE21 CE34 CE36'),
(508, 'RDH INDAH ENTERPRISE', '30-33 GERAI MEDAN', 'KOMPLEKS TEKSI ', NULL, 09100, NULL, 'BALING', 'Kedah', '019-4739902', 'G2', 'B', '  B04 B14 B28'),
(509, 'ISMA SEPAKAT ENTERPRISE', '30 GERAI MEDAN KOMPLEKS TEKSI', NULL, NULL, 09100, NULL, 'BALING', 'Kedah', NULL, 'G2', 'B', '      B04'),
(510, 'ENGGANG RIA ENTERPRISE', 'NO. 304', 'JALAN ZAMRUD 10', NULL, 08000, 'SUNGAI PETANI', 'KUALA MUDA', 'Kedah', NULL, 'G2', 'B', '          B04 B27'),
(511, 'AY VISION ENTERPRISE', 'NO. 2 ', 'LORONG MELATI 2', 'TAMAN MELATI', 08000, 'SUNGAI PETANI', 'KUALA MUDA', 'Kedah', NULL, 'G2', 'CE', '  CE21'),
(512, 'FB ONE RESOURCES', 'NO 9 GERAI MDY', 'PEKAN TEROI ', NULL, 06900, NULL, 'YAN', 'Kedah', NULL, 'G2', 'B', '  B04 B28'),
(513, 'AHMAD BIN ISHAK', 'NO 22', 'KAMPUNG TELOK MAT ACHEH', NULL, 06900, NULL, 'YAN', 'Kedah', NULL, 'G2', 'B', '    B14 B04 B10 B28'),
(514, 'MFBI GEMILANG ENTERPRISE', 'NO 31, KAMPUNG PERUPUK ', NULL, NULL, 06900, NULL, 'YAN', 'Kedah', NULL, 'G2', 'B', '    B04 B01'),
(515, 'MULTIPLY VENTURE ENTERPRISE', 'LOT NO. 1521', 'KM 18 JALAN JITRA KODIANG', NULL, 06100, NULL, 'KUBANG PASU', 'Kedah', NULL, 'G2', 'B', '  B12 B14 B04 B28'),
(516, 'ABC POWER SERVICES', 'NO 200 JALAN BPJ 1/2', 'BANDAR PUTERI JAYA', NULL, 08000, NULL, 'KUALA MUDA', 'Kedah', NULL, 'G2', 'B', '  B04 B24 B07 B18'),
(517, 'ALAM PESONA ENTERPRISE', 'LOT 11545', 'KAMPUNG SUNGAI JAGUNG ', 'SUNGAI LAYAR', 08000, NULL, 'KUALA MUDA', 'Kedah', NULL, 'G2', 'B', 'B04 B12 B14 B24 B28'),
(518, 'SAMUDERA COMMUNICATIONS', 'NO 52 TAMAN SATRIA', 'JALAN LANGGAR', NULL, 05460, NULL, 'KOTA SETAR', 'Kedah', NULL, 'G2', 'B', '  B04 B14 B24 B13'),
(519, 'ABZA TEGUH ENTERPRISE', '831 JALAN PERUDA 2', 'TAMAN PERUDA UTAMA', NULL, 08000, NULL, 'KUALA MUDA', 'Kedah', '04-4233159', 'G2', 'CE', '  CE21 CE08 CE01 CE14 CE34 CE36'),
(520, 'BESTENDER ENTERPRISE', 'LOT TEN 4500, HIJAU KUNING', 'KAMPONG POKOK SENA', 'JALAN BALING-KULIM', 09100, 'BALING', 'Baling', 'Kedah', NULL, 'G1', 'B', 'B04  B14  B24  '),
(521, 'KUDRAT BAKTI NIAGA', 'NO 32C TAMAN AMAN 2', NULL, NULL, 08000, NULL, 'KUALA MUDA', 'Kedah', '04-4242025', 'G2', 'B', '  B04 B28'),
(522, 'MAWAR BIRU CONSTRUCTION', 'NO 67A', 'LORONG 3 TAMAN BUNGA RAYA', NULL, 08000, NULL, 'KUALA MUDA', 'Kedah', '04-4242025', 'G2', 'B', '    B04 B24'),
(523, 'NAS FOCUS ENTERPRISE', 'NO.588 KAMPUNG TELUK', NULL, NULL, 08000, NULL, 'KUALA MUDA', 'Kedah', '04-4242025', 'G2', 'B', '  B04'),
(524, 'NIZ UNGGUL ENTERPRISE', 'NO. 289 JALAN PERDANA 9/15', 'JALAN PERDANA', NULL, 08000, NULL, 'KUALA MUDA', 'Kedah', NULL, 'G2', 'B', '  B04'),
(525, 'KTSP GLOBAL ENTERPRISE', 'TKT 1 NO. 401', 'JALAN KANGKONG 5', 'TAMAN KANGKONG 2', 09600, NULL, 'KULIM', 'Kedah', NULL, 'G2', 'B', '    B14 B04'),
(526, 'LANG KUNING (M) SDN BHD', 'NO. 34B-6 TINGKAT 2', 'KOMPLEKS KOPERASI PASAR MELAYU', 'BALING BERHAD', 09100, NULL, 'BALING', 'Kedah', NULL, 'G2', 'B', '  B04 B09 B28'),
(527, 'NYY ENTERPRISE', 'NO. 3205 JALAN MAHSURI ', '7/J TAMAN MAHSURI', NULL, 09400, NULL, 'KULIM', 'Kedah', NULL, 'G2', 'B', '  B04 B09 B10 B21 B25 B28'),
(528, 'RZ MEGA SERASI ENTERPRISE', 'NO. 105 LORONG 4', 'TAMAN DESA ANGGERIK', 'BATU 42 PULAI', 09100, NULL, 'BALING ', 'Kedah', NULL, 'G2', 'B', '  B04'),
(529, 'NBS TEGUH ENGINEERING SDN BHD', 'NO 1A LOT 3329', 'JALAN BATU LINTANG', 'KG TELOK WANG KECIL', 08000, NULL, 'KUALA MUDA', 'Kedah', '044318561', 'G2', 'B', '  B28 B04'),
(530, 'SENA SEPADU ENTERPRISE', '3616 LORONG INANG', '12/1 TAMAN RIA JAYA', NULL, 08000, NULL, 'KUALA MUDA', 'Kedah', NULL, 'G2', 'B', '  B04'),
(531, 'SBH SINAR ENTERPRISE', 'NO. 11 JALAN BERINGIN', 'TAMAN BERINGIN', NULL, 08000, 'SUNGAI PETANI', 'KUALA MUDA', 'Kedah', NULL, 'G2', 'B', '      B04 B08 B09 B14 B24 B28'),
(532, 'LAIBA FALAH CONSTRUCTION', 'NO. 10A TINGKAT ATAS ', 'JALAN KENARI BIRU 1', 'TAMAN KENARI INDAH ', 08000, 'SUNGAI PETANI', 'KUALA MUDA ', 'Kedah', NULL, 'G2', 'B', '  B04'),
(533, 'MNG SADEE ENTERPRISE', '218 JALAN SEROJA', 'TAMAN SEROJA 3', NULL, 09000, 'KULIM', 'KULIM', 'Kedah', NULL, 'G2', 'B', '    B04 B28'),
(534, 'MAROSH TERAJU ENTERPRISE', '438 PERSIARAN CINTA SAYANG', 'KELAB CINTA SAYANG', NULL, 08000, 'SUNGAI PETANI', 'KUALA MUDA', 'Kedah', NULL, 'G2', 'B', '        B04 B13 B02 B24'),
(535, 'PELANGI JITU ENTERPRISE', 'NO. 23A RUMAH KEDAI', 'KAMPUNG TANAH MERAH DALAM', 'JALAN TOKAI', 06700, 'ALOR SETAR', 'PENDANG', 'Kedah', NULL, 'G2', 'B', '  B04 B14'),
(536, 'WAIZA MAJU ENTERPRISE', 'NO. 12B ', 'KAMPUNG BUKIT IBOI', NULL, 09200, 'SUNGAI PETANI', 'BALING ', 'Kedah', '019-4137060', 'G2', 'B', '      B04'),
(537, 'SYARIKAT JURU REKABINA', 'NO. 12 KAMPUNG PADANG PETANI', 'LANGGAR ', NULL, 06500, 'ALOR SETAR', 'KOTA SETAR', 'Kedah', NULL, 'G2', 'B', '  B14 B04'),
(538, 'ZARAFIYA ENTERPRISE', 'NO 473 JALAN SENTOSA 1/6', 'TAMAN SERI SENTOSA', NULL, 09600, NULL, 'KULIM', 'Kedah', NULL, 'G2', 'B', '  B04 B09 B28'),
(539, 'ASAKHER ENTERPRISE', 'D1 ARKED MARA 2', 'JALAN SUNGAI KOROK', NULL, 06000, 'JITRA', 'JITRA', 'Kedah', NULL, 'G2', 'B', '  B04 B24 B02 B13 B28 B09 B14 B08 B06'),
(540, 'SHOPIAN BIN JUSOH', 'NO.91 LORONG BLM 2/1', 'BANDAR LAGUNA MERBOK', NULL, 08000, NULL, 'KUALA MUDA', 'Kedah', NULL, 'G1', 'B', '    B04 B14'),
(541, 'AO MEGAH ENTERPRISE', 'NO. 23 JALAN ANGGERIK 2/2', 'BANDAR AMANJAYA', NULL, 08000, NULL, 'KUALA MUDA', 'Kedah', NULL, 'G2', 'B', '  B28'),
(542, 'SRI SEDAKA ENTERPRISE', 'NO. 15 LORONG 11', 'TAMAN RASA SAYANG', NULL, 08100, 'SUNGAI PETANI', 'KUALA MUDA', 'Kedah', NULL, 'G2', 'B', '      B04 B14'),
(543, 'ZURI MAJU TRADING', 'NO. 15 LORONG 11', 'TAMAN RASA SAYANG', NULL, 08100, 'SUNGAI PETANI', 'KUALA MUDA', 'Kedah', NULL, 'G2', 'B', '    B04 B14'),
(544, 'AEZAMD SMART ENTERPRISE', 'NO. 231 LORONG 12', 'TAMAN RIA MESRA 2', NULL, 08300, 'SUNGAI PETANI', 'KUALA MUDA', 'Kedah', NULL, 'G2', 'B', '  B04 B28 B09'),
(545, 'HHIK TRADING', 'NO K-6 BANGUNAN MDB', 'JALAN SYED SHEIKH', NULL, 09100, 'BALING', 'BALING', 'Kedah', '013-4891919', 'G2', 'B', '        B04 B28'),
(546, 'ADLIM ENTERPRISE', 'KAMPUNG SERA BAWAH', 'PULAI', NULL, 09100, 'BALING', 'BALING', 'Kedah', NULL, 'G1', 'B', 'B24  B04  B28'),
(547, 'AL-ZUHARI BIN HARUN', 'NO.5, ATAS RUMAH KEDAI', 'TAMAN TANJUNG PETERI', NULL, 09300, 'BALING', 'BALING', 'Kedah', '04-4161255', 'G1', 'B', 'B04  B10  B24'),
(548, 'BETONG SEPADU ENTERPRISE', 'F-702, KAMPONG BETONG', 'JENERI', NULL, 08200, 'SIK', 'SIK', 'Kedah', NULL, 'G1', 'B', 'B04  B14'),
(549, 'GURUN GEMILANG ENTERPRISE', 'KAMPUNG MELAKA', 'MUKIM SOK', NULL, 08210, 'SIK', 'SIK', 'Kedah', NULL, 'G1', 'B', 'B04  B14  B24'),
(550, 'AS KLIP CAHAYA ENTERPRISE', 'NO. 4, PERSIARAN BANDAR BARU', 'BERIS JAYA ', 'BATU 5', 08200, 'SIK', 'SIK', 'Kedah', NULL, 'G1', 'B', 'B04  B24'),
(551, 'AZIZAN BIN ISMAIL', 'F-775, KG. KUBANG BEMBAN', 'BUJANG', NULL, 08100, 'SUNGAI PETANI', 'KUALA MUDA', 'Kedah', NULL, 'G1', 'B', 'B24  B28  B04'),
(552, 'KRIEZZA ENTERPRISE', 'NO 427 KAMPONG BANGGOL', 'MERBOK', NULL, 08400, NULL, 'KUALA MUDA', 'Kedah', '019-4769935', 'G1', 'B', 'B04 B14'),
(553, 'MMA MULIA ENTERPRISE', 'F517 KAMPUNG BUKIT KECIL', 'MUKIM SIMPOR', NULL, 08000, NULL, 'KUALA MUDA', 'Kedah', '012-5600287', 'G1', 'B', '      B14 B04 B28'),
(554, 'SYARIKAT HASNOR', 'NO. 11, KAMPUNG KENANGAN', 'MUKIM JENERI', NULL, 08200, 'SIK', 'SIK', 'Kedah', NULL, 'G1', 'B', '  B14  B04'),
(555, 'PERTUBUHAN PELADANG KAW. KUALA NERANG', 'LOT 40, 41 & 42', 'PEKAN BARU', 'JALAN SEMELIANG', 06300, 'ALOR SETAR', 'PADANG TERAP', 'Kedah', NULL, 'G2', 'B', '    B04  B24  B14'),
(556, 'IMAN CAHAYA ENTERPRISE', 'NO.19 TINGKAT SATU', 'ARKED PEKAN RABU', 'JALAN KUALA KETIL', 08000, 'SUNGAI PETANI', 'KUALA MUDA', 'Kedah', NULL, 'G2', 'B', '  B04  B09  B28'),
(557, 'ZDL UTARA CONSTRUCTION', 'NO.198A JALAN BUJANG UTAMA 2', 'TAMAN LEMBAH BUJANG UTAMA', 'BEDONG', 08100, 'SUNGAI PETANI', 'KUALA MUDA', 'Kedah', NULL, 'G2', 'B', '  B04  B14  B24'),
(558, 'ZANI DCC ENTERPRISE', 'NO. 35, KAMPUNG NAMEK TUA', NULL, NULL, 08200, 'SIK', 'Sik', 'Kedah', NULL, 'G2', 'B', '    B04'),
(559, 'SBN SINAR GLOBAL RESOURCES', 'NO. 310 B. LORONG DESA AMAN 1/4', 'TAMAN DESA AMAN 3', 'SUNGAI LALANG', 08000, 'SUNGAI PETANI', 'KUALA MUDA', 'Kedah', NULL, 'G2', 'B', '    B04'),
(560, 'MENGKUANG SERI CONSTRUCTION', 'BATU 11 1/2', 'KAMPUNG RAMBAI', 'TOKAI', 06660, 'ALOR SETAR', 'KOTA SETAR', 'Kedah', NULL, 'G2', 'B', '        B04  B09  B13  B14  B24  B28'),
(561, 'RR UTARA ENTERPRISE', 'C75 TINGKAT 1,', 'LORONG 9', 'TAMAN SEJATI INDAH', 08000, 'SUNGAI PETANI', 'KUALA MUDA', 'Kedah', NULL, 'G1', 'B', '      B04  B14'),
(562, 'KESUMA BAKTI ENTERPRISE', 'NO. F-842 KAMPUNG TITI TERAS', 'KEPALA BUKIT', 'GUAR CEMPEDAK', 08800, 'YAN', 'YAN', 'Kedah', NULL, 'G1', 'B', 'B14  B04  B28  B24'),
(563, 'PAKSI MUTIARA ENTERPRISE', 'NO. 12A, TINGKAT 1, BILIK 1', 'JALAN TUANKU HAMINAH 1', 'TAMAN TUANKU HAMINAH', 08000, 'SUNGAI PETANI', 'KUALA MUDA', 'Kedah', NULL, 'G1', 'B', '  B04  B14'),
(564, 'SETIA HASMADI ENTERPRISE', '779, JALAN KUDA KEPANG 4', 'TAMAN RIA JAYA', NULL, 08000, 'SUNGAI PETANI', 'KUALA MUDA', 'Kedah', NULL, 'G1', 'B', '  B04  B24'),
(565, 'PADANG MEHA ENTERPRISE', 'NO.686 JALAN BPJ 2/16', 'SECTION 2', NULL, 08000, 'SUNGAI PETANI', 'KUALA MUDA', 'Kedah', NULL, 'G1', 'B', '  B04  B14  B24  B28'),
(566, 'BUMI SETAR ENTERPRISE', 'NO.3, LORONG 1/1A', 'TAMAN MELOR', 'SUNGAI LAYAR', 08000, 'SUNGAI PETANI', 'KUALA MUDA', 'Kedah', NULL, 'G1', 'B', '  B04  B14  B24'),
(567, 'STS UNGGUL ENTERPRISE', 'NO.50F, SIMPANG TIGA PASIR', 'MERBOK', NULL, 08400, 'BEDONG', 'KUALA MUDA', 'Kedah', NULL, 'G1', 'B', '  B04  B24'),
(568, 'PERUSAHAAN SINAR', 'NO.13 LORONG PELANGI', 'JALAN SULTANAH', NULL, 05360, 'ALOR SETAR', 'KOTA SETAR', 'Kedah', '04-7307127', 'G2', 'B', 'B02 B04  B08  B09  B12  B14  B24  B28'),
(569, 'AFAK BAYU ENTERPRISE', '87, JALAN TIMUR 6', 'KAWASAN PERINDUSTRIAN MERGONG', 'BARRAGE FASA 2B', 05150, 'ALOR SETAR', 'KOTA SETAR', 'Kedah', NULL, 'G2', 'B', 'B04  B20  B14  B24  B02'),
(570, 'PTR EMAS ENTERPRISE', 'NO.4, RUMAH KEDAI', 'JALAN DULANG', 'KAMPUNG DULANG BESAR', 06900, 'YAN', 'YAN', 'Kedah', NULL, 'G2', 'B', 'B04'),
(571, 'PRO PRIMA VENTURES CONSULTANT', '156 TAMAN PURNAMA FASA 2', 'JALAN PEGAWAI', NULL, 05050, 'ALOR SETAR', 'KOTA SETAR', 'Kedah', NULL, 'G2', 'B', '  B04'),
(572, 'UMMU RIZQI NH ENTERPRISE', 'LOT 909, KAMPUNG JENIANG', 'GURUN', NULL, 08700, 'SUNGAI PETANI', 'KUALA MUDA', 'Kedah', NULL, 'G2', 'B', '    B04'),
(573, 'SISIRAN PERMATANG ENTERPRISE', 'KAMPONG LUBUK BEDIL', 'SIK', NULL, 08200, 'SIK', 'SIK', 'Kedah', NULL, 'G1', 'B', '  B04  B09  B24  B28'),
(574, 'RIA MAJU ENTERPRISE', 'NO.1 BANGUNAN KEDAI KAMPUNG BATU BESAR', NULL, NULL, 08200, 'SIK', 'SIK', 'Kedah', NULL, 'G1', 'B', 'B04  B14'),
(575, 'MZR HIJRAH ENTERPRISE', 'LOT 909 KG. JENIANG', 'JENIANG', NULL, 08700, 'SUNGAI PETANI', 'KUALA MUDA', 'Kedah', '019-4955060', 'G2', 'B', '    B04'),
(576, 'MZZ UNGGUL ENTERPRISE', NULL, NULL, NULL, NULL, NULL, NULL, 'Perlis', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `mrk_dua`
--

CREATE TABLE `mrk_dua` (
  `mrkduaid` int(11) NOT NULL,
  `mrk_majukerja` int(11) DEFAULT NULL,
  `mrk_majukerjasebenar` date DEFAULT NULL,
  `mrk_bayarmajusemasa` int(11) DEFAULT NULL,
  `mrk_jumlahbayarmaju` decimal(10,0) DEFAULT NULL,
  `mrk_masalah` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `mrk_sebaboleh` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `mrk_lainlain` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `mrk_lanjutmasa` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `mrk_dari` date DEFAULT NULL,
  `mrk_sehingga` date DEFAULT NULL,
  `mrk_disebab` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `mrk_ladsehari` decimal(10,0) DEFAULT NULL,
  `mrk_laddari` date DEFAULT NULL,
  `mrk_ladsehingga` date DEFAULT NULL,
  `mrk_perakukerjataksiap` date DEFAULT NULL,
  `mrk_projekmansuh` date DEFAULT NULL,
  `mrk_tarikhlaporan` date DEFAULT NULL,
  `mrk_modal` int(2) DEFAULT NULL,
  `mrk_bahan` int(2) DEFAULT NULL,
  `mrk_pekerja` int(2) DEFAULT NULL,
  `mrk_tapak` int(2) DEFAULT NULL,
  `mrk_cuaca` int(2) DEFAULT NULL,
  `mrksatu_id` int(11) DEFAULT NULL,
  `mrk2_noinden` varchar(150) COLLATE utf8_bin DEFAULT NULL,
  `mrk2_kodvots` varchar(150) COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `mrk_dua`
--

INSERT INTO `mrk_dua` (`mrkduaid`, `mrk_majukerja`, `mrk_majukerjasebenar`, `mrk_bayarmajusemasa`, `mrk_jumlahbayarmaju`, `mrk_masalah`, `mrk_sebaboleh`, `mrk_lainlain`, `mrk_lanjutmasa`, `mrk_dari`, `mrk_sehingga`, `mrk_disebab`, `mrk_ladsehari`, `mrk_laddari`, `mrk_ladsehingga`, `mrk_perakukerjataksiap`, `mrk_projekmansuh`, `mrk_tarikhlaporan`, `mrk_modal`, `mrk_bahan`, `mrk_pekerja`, `mrk_tapak`, `mrk_cuaca`, `mrksatu_id`, `mrk2_noinden`, `mrk2_kodvots`) VALUES
(1, 50, '2018-11-21', 50, '20', NULL, 'EMPANGAN BOCOR', 'DLL', '9', '2018-11-09', '2018-11-07', 'DO', '20', '2018-11-15', '2018-11-14', '2018-11-08', '2018-11-14', '2018-11-07', 1, 1, 1, 1, 1, 18, '0002991882', 'JPS0001922');

-- --------------------------------------------------------

--
-- Table structure for table `mrk_jaminanbank`
--

CREATE TABLE `mrk_jaminanbank` (
  `id` int(11) NOT NULL,
  `mrk_rujukanbank` varchar(255) COLLATE utf8_bin NOT NULL,
  `mrk_namabank` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `mrk_alamatbank` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `js_mrkid` int(11) DEFAULT NULL,
  `js_kodvot` varchar(150) COLLATE utf8_bin DEFAULT NULL,
  `js_inden` varchar(150) COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `mrk_jaminanbank`
--

INSERT INTO `mrk_jaminanbank` (`id`, `mrk_rujukanbank`, `mrk_namabank`, `mrk_alamatbank`, `js_mrkid`, `js_kodvot`, `js_inden`) VALUES
(2, 'RHB0021/2123', 'RHB BANK', 'TAMAN EMAS LUBUK', 18, 'JPS0001922', '0002991882');

-- --------------------------------------------------------

--
-- Table structure for table `mrk_keypeople`
--

CREATE TABLE `mrk_keypeople` (
  `p_id` int(11) NOT NULL,
  `p_names` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `mrk_laporansiap`
--

CREATE TABLE `mrk_laporansiap` (
  `lskid` int(11) NOT NULL,
  `lsk_noinden` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `lsk_lanjutmasa` date DEFAULT NULL,
  `lks_hargasebenar` decimal(10,0) DEFAULT NULL,
  `lsk_tarikhkerjasiap` date DEFAULT NULL,
  `lsk_peruntukan` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `lsk_laporanpegawai` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `lsk_pegawaipenyelia` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `lsk_jawatanpen` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `lsk_tarikhperakui` date NOT NULL,
  `lsk_ketuabahagian` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `lsk_jawatanketuab` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `lsk_juruteraj` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `lsk_jawatanjuruteraj` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `lsk_juruterad` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `lsk_jawatanjuruterad` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `lsk_perkeso` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `lsk_liability` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `lskmrksatuid` int(11) DEFAULT NULL,
  `lks_kodvots` varchar(150) COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `mrk_laporansiap`
--

INSERT INTO `mrk_laporansiap` (`lskid`, `lsk_noinden`, `lsk_lanjutmasa`, `lks_hargasebenar`, `lsk_tarikhkerjasiap`, `lsk_peruntukan`, `lsk_laporanpegawai`, `lsk_pegawaipenyelia`, `lsk_jawatanpen`, `lsk_tarikhperakui`, `lsk_ketuabahagian`, `lsk_jawatanketuab`, `lsk_juruteraj`, `lsk_jawatanjuruteraj`, `lsk_juruterad`, `lsk_jawatanjuruterad`, `lsk_perkeso`, `lsk_liability`, `lskmrksatuid`, `lks_kodvots`) VALUES
(1, '0002991882', '2018-11-01', '326523', '2018-11-21', '002992/12393-211/0024', 'Laporan-Laporan Sekolah', 'Haji Shukri B. Man', 'Penolong Jurutera JA29', '2018-11-21', 'Yahaya B. Shariff', 'Penolong Jurutera JA29', 'Mohd. Daud Hamid', 'Penolong Jurutera JA29', 'Zainuddin bin Yusoff, AMP., BCK', 'Jurutera ( Baling )', 'PK2932PP', 'PL33922', 18, 'JPS0001922');

-- --------------------------------------------------------

--
-- Table structure for table `mrk_perakuansiap`
--

CREATE TABLE `mrk_perakuansiap` (
  `id` int(11) NOT NULL,
  `mrk_pskinden` varchar(150) COLLATE utf8_bin DEFAULT NULL,
  `mrk_tarikhsiapsebenar` date DEFAULT NULL,
  `mrk_tarikhambikmilik` date DEFAULT NULL,
  `mrk_tarikhmulatanggungcacat` date DEFAULT NULL,
  `mrk_tarikhtamattanggungcacat` date DEFAULT NULL,
  `pskmrksatuid` int(11) DEFAULT NULL,
  `psk_kodvots` varchar(150) COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `mrk_perakuansiap`
--

INSERT INTO `mrk_perakuansiap` (`id`, `mrk_pskinden`, `mrk_tarikhsiapsebenar`, `mrk_tarikhambikmilik`, `mrk_tarikhmulatanggungcacat`, `mrk_tarikhtamattanggungcacat`, `pskmrksatuid`, `psk_kodvots`) VALUES
(3, '0002991882', '2018-11-10', '2018-11-07', '2018-11-29', '2018-11-30', 18, 'JPS0001922');

-- --------------------------------------------------------

--
-- Table structure for table `mrk_perakuansiapbaikicacat`
--

CREATE TABLE `mrk_perakuansiapbaikicacat` (
  `id` int(11) NOT NULL,
  `mrk_nowangjaminansatu` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `mrk_hargasatu` decimal(10,0) DEFAULT NULL,
  `mrk_bakiwangjamin` decimal(10,0) DEFAULT NULL,
  `mrk_nowangjaminandua` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `mrk_hargadua` decimal(10,0) DEFAULT NULL,
  `mrk_wangjaminlaksana` decimal(10,0) DEFAULT NULL,
  `mrk_tambahbonlaksana` decimal(10,0) DEFAULT NULL,
  `mrk_bakibonlaksana` decimal(10,0) DEFAULT NULL,
  `mrk_pegawaipenguasa` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `mrk_jawatanpp` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `mrkid_id` int(11) DEFAULT NULL,
  `psmk_kodvots` varchar(150) COLLATE utf8_bin DEFAULT NULL,
  `psmk_inden` varchar(150) COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `mrk_perakuansiapbaikicacat`
--

INSERT INTO `mrk_perakuansiapbaikicacat` (`id`, `mrk_nowangjaminansatu`, `mrk_hargasatu`, `mrk_bakiwangjamin`, `mrk_nowangjaminandua`, `mrk_hargadua`, `mrk_wangjaminlaksana`, `mrk_tambahbonlaksana`, `mrk_bakibonlaksana`, `mrk_pegawaipenguasa`, `mrk_jawatanpp`, `mrkid_id`, `psmk_kodvots`, `psmk_inden`) VALUES
(4, 'JK/2093/SSS', '20', '20', 'JK/2093/SSS', '20', '50', '50', '50', 'Nama Pegawai', 'IR', 18, 'JPS0001922', '0002991882');

-- --------------------------------------------------------

--
-- Table structure for table `mrk_ppwjp`
--

CREATE TABLE `mrk_ppwjp` (
  `ppwjp_id` int(11) NOT NULL,
  `ppwjp_rt` varchar(150) DEFAULT NULL,
  `ppwjp_rk` varchar(150) DEFAULT NULL,
  `ppwjp_kepada` varchar(150) DEFAULT NULL,
  `ppwjp_alamat` text,
  `ppwjp_kos` decimal(10,0) DEFAULT NULL,
  `ppwjp_pegawai` varchar(150) DEFAULT NULL,
  `ppwjp_jawatan` varchar(150) DEFAULT NULL,
  `ppwjp_mrkid` int(11) DEFAULT NULL,
  `ppwjp_inden` varchar(150) DEFAULT NULL,
  `ppwjp_kodvot` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mrk_ppwjp`
--

INSERT INTO `mrk_ppwjp` (`ppwjp_id`, `ppwjp_rt`, `ppwjp_rk`, `ppwjp_kepada`, `ppwjp_alamat`, `ppwjp_kos`, `ppwjp_pegawai`, `ppwjp_jawatan`, `ppwjp_mrkid`, `ppwjp_inden`, `ppwjp_kodvot`) VALUES
(1, 'JPS/22/22/23312', 'JPS/22/22/23312', 'BANK NEGARA', 'DAMANSARA, KUALA LUMPUR', '37999', 'Idris Bin Yussof', 'Penolong Jurutera JA29', 18, '0002991882', 'JPS0001922');

-- --------------------------------------------------------

--
-- Table structure for table `mrk_satu`
--

CREATE TABLE `mrk_satu` (
  `mrksatuid` int(11) NOT NULL,
  `mrk_nopkk` varchar(255) COLLATE utf8_bin NOT NULL,
  `mrk_gred` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `mrk_namakon` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `mrk_alamatkon` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `mrk_nokontrak` varchar(255) COLLATE utf8_bin NOT NULL,
  `mrk_noinden` varchar(255) COLLATE utf8_bin NOT NULL,
  `mrk_tajukkerja` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `mrk_kategori` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `mrk_daerah` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `mrk_negeri` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `mrk_khusus` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `mrk_tarikhmulakon` date DEFAULT NULL,
  `mrk_tarikhjangkasiap` date DEFAULT NULL,
  `mrk_pegawai` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `mrk_jawatan` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `mrk_kosprojek` decimal(10,0) DEFAULT NULL,
  `mrk_tarikh` date DEFAULT NULL,
  `mrksatu_id` int(11) NOT NULL,
  `mrks_kodvot` varchar(150) COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `mrk_satu`
--

INSERT INTO `mrk_satu` (`mrksatuid`, `mrk_nopkk`, `mrk_gred`, `mrk_namakon`, `mrk_alamatkon`, `mrk_nokontrak`, `mrk_noinden`, `mrk_tajukkerja`, `mrk_kategori`, `mrk_daerah`, `mrk_negeri`, `mrk_khusus`, `mrk_tarikhmulakon`, `mrk_tarikhjangkasiap`, `mrk_pegawai`, `mrk_jawatan`, `mrk_kosprojek`, `mrk_tarikh`, `mrksatu_id`, `mrks_kodvot`) VALUES
(18, 'PKK299393', 'G1', 'RCS  SYSTEM COMPUTERS', 'TAMAN DELIMA', 'JKL/ST/201888/OP/200', '0002991882', 'PROTECTIVE FUNCTION ANALOG MULTIMETER', 'CE', 'kuala muda', 'kedah', 'CE 02', '2018-11-07', '2018-11-14', 'Haji Shukri B. Man', 'Penolong Jurutera JA29', '576', '2018-11-15', 0, 'JPS0001922'),
(19, 'PKK00298812-22', 'G2 | RM200,001.00 Hingga RM500,000.00', 'ADK SEJATI', 'NO. 1400, LORONG ANGSANA 41', 'JKL/ST/201888/OP/2002', 'K1930221', 'JABATAN PENGAIRAN DAN SALIRAN NEGERI KEDAH', 'CE | Pembinaan Kejuruteraan Awam', 'sik', 'kedah', 'CE 02', '2018-12-20', '2018-12-20', 'Nazar Shah B. Awang', 'Penolong Jurutera JA36', '209', '2018-12-20', 0, 'KOV20312321');

-- --------------------------------------------------------

--
-- Table structure for table `mrk_slogan`
--

CREATE TABLE `mrk_slogan` (
  `set_id` int(11) NOT NULL,
  `set_slogan` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mrk_slogan`
--

INSERT INTO `mrk_slogan` (`set_id`, `set_slogan`) VALUES
(1, 'Cintailah Sungai Kita');

-- --------------------------------------------------------

--
-- Table structure for table `mrk_ss`
--

CREATE TABLE `mrk_ss` (
  `ss_id` int(11) NOT NULL,
  `cb1` tinyint(1) DEFAULT NULL,
  `cb2` int(1) DEFAULT NULL,
  `cb3` tinyint(1) DEFAULT NULL,
  `cb4` tinyint(1) DEFAULT NULL,
  `cb5` tinyint(1) DEFAULT NULL,
  `cb6` tinyint(1) DEFAULT NULL,
  `cb7` tinyint(1) DEFAULT NULL,
  `cb8` tinyint(1) DEFAULT NULL,
  `cb9` tinyint(1) DEFAULT NULL,
  `cb10` tinyint(1) DEFAULT NULL,
  `cb11` tinyint(1) DEFAULT NULL,
  `cb12` tinyint(1) DEFAULT NULL,
  `cb13` tinyint(1) DEFAULT NULL,
  `cb14` tinyint(1) DEFAULT NULL,
  `cb15` tinyint(1) DEFAULT NULL,
  `cb16` tinyint(1) DEFAULT NULL,
  `cb17` tinyint(1) DEFAULT NULL,
  `cb18` tinyint(1) DEFAULT NULL,
  `ss_inden` varchar(150) DEFAULT NULL,
  `ss_mrkid` int(11) DEFAULT NULL,
  `ss_kodvot` varchar(150) DEFAULT NULL,
  `ss_disediakan` varchar(200) DEFAULT NULL,
  `ss_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mrk_ss`
--

INSERT INTO `mrk_ss` (`ss_id`, `cb1`, `cb2`, `cb3`, `cb4`, `cb5`, `cb6`, `cb7`, `cb8`, `cb9`, `cb10`, `cb11`, `cb12`, `cb13`, `cb14`, `cb15`, `cb16`, `cb17`, `cb18`, `ss_inden`, `ss_mrkid`, `ss_kodvot`, `ss_disediakan`, `ss_date`) VALUES
(48, 1, 1, 1, 1, 1, NULL, NULL, 1, NULL, NULL, NULL, 1, NULL, NULL, 1, 1, 1, 1, '0002991882', 18, 'JPS0001922', 'b', '2018-11-15');

-- --------------------------------------------------------

--
-- Table structure for table `mrk_suratkhas`
--

CREATE TABLE `mrk_suratkhas` (
  `skhas_id` int(11) NOT NULL,
  `skhas_rujuktuan` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `skhas_pegawaikuasa` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `skhas_jawatanpp` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `skhas_inden` varchar(150) DEFAULT NULL,
  `skhas_kodvot` varchar(150) DEFAULT NULL,
  `skhas_mrkid` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mrk_suratkhas`
--

INSERT INTO `mrk_suratkhas` (`skhas_id`, `skhas_rujuktuan`, `skhas_pegawaikuasa`, `skhas_jawatanpp`, `skhas_inden`, `skhas_kodvot`, `skhas_mrkid`) VALUES
(1, 'JPS/22/22/23312', 'Mohd. Amin B. Ahmad', 'Penolong Jurutera JA38', '0002991882', 'JPS0001922', 18);

-- --------------------------------------------------------

--
-- Table structure for table `mrk_suratmrk`
--

CREATE TABLE `mrk_suratmrk` (
  `id` int(11) NOT NULL,
  `s_rujuktuan` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `s_tarikhtuan` date DEFAULT NULL,
  `s_jenisborang` varchar(11) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `s_noinden` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `s_pegawaikuasa` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `s_jawatanpp` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `s_mrkid` int(11) DEFAULT NULL,
  `s_kodvot` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mrk_suratmrk`
--

INSERT INTO `mrk_suratmrk` (`id`, `s_rujuktuan`, `s_tarikhtuan`, `s_jenisborang`, `s_noinden`, `s_pegawaikuasa`, `s_jawatanpp`, `s_mrkid`, `s_kodvot`) VALUES
(3, 'JPS/22/22/23312', '2018-11-21', 'MRK 03', '0002991882', 'Nama jurutera', 'IR', 18, 'JPS0001922');

-- --------------------------------------------------------

--
-- Table structure for table `mrk_suratwjp`
--

CREATE TABLE `mrk_suratwjp` (
  `id` int(11) NOT NULL,
  `swjp_kepada` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `swjp_rujuktuan` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `swjp_alamat` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `swjp_melalui` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `swjp_wangjamin` decimal(10,0) DEFAULT NULL,
  `swjp_alamatlalu` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `swjp_pegawaikuasa` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `swjp_jawatanpp` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `swjp_inden` varchar(150) DEFAULT NULL,
  `swjp_kodvot` varchar(150) DEFAULT NULL,
  `swjp_mrkid` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mrk_suratwjp`
--

INSERT INTO `mrk_suratwjp` (`id`, `swjp_kepada`, `swjp_rujuktuan`, `swjp_alamat`, `swjp_melalui`, `swjp_wangjamin`, `swjp_alamatlalu`, `swjp_pegawaikuasa`, `swjp_jawatanpp`, `swjp_inden`, `swjp_kodvot`, `swjp_mrkid`) VALUES
(1, 'KETUA AKAUNTAN', 'JPS/22/22/23312', 'JABATAN AKAUNTAN NEGERI KEDAH,\r\nALOR STAR.', 'PENGARAH', NULL, 'JABATAN AKAUNTAN NEGERI KEDAH DARUL AMAN,\r\nALOR STAR.', 'NAMA JURUTERA', 'IR', '0002991882', 'JPS0001922', 18);

-- --------------------------------------------------------

--
-- Table structure for table `mrk_tiga`
--

CREATE TABLE `mrk_tiga` (
  `mrktigaid` int(11) NOT NULL,
  `mrksatutiga_id` int(11) DEFAULT NULL,
  `mrk_tigainden` varchar(150) COLLATE utf8_bin DEFAULT NULL,
  `mrktiga_kodvots` varchar(150) COLLATE utf8_bin DEFAULT NULL,
  `tiga_bina` varchar(150) COLLATE utf8_bin DEFAULT NULL,
  `tiga_tadbir` varchar(250) COLLATE utf8_bin DEFAULT NULL,
  `tiga_kemajuan` varchar(150) COLLATE utf8_bin DEFAULT NULL,
  `tiga_kerangka` varchar(150) COLLATE utf8_bin DEFAULT NULL,
  `tiga_kerja` varchar(150) COLLATE utf8_bin DEFAULT NULL,
  `tiga_kemasan` varchar(150) COLLATE utf8_bin DEFAULT NULL,
  `tiga_luar` varchar(150) COLLATE utf8_bin DEFAULT NULL,
  `tiga_kontraktor` varchar(150) COLLATE utf8_bin DEFAULT NULL,
  `tiga_pegawai` varchar(150) COLLATE utf8_bin DEFAULT NULL,
  `tiga_jawatan` varchar(150) COLLATE utf8_bin DEFAULT NULL,
  `tiga_tarikah` date DEFAULT NULL,
  `tiga_catat1` varchar(150) COLLATE utf8_bin DEFAULT NULL,
  `tiga_catat2` varchar(150) COLLATE utf8_bin DEFAULT NULL,
  `tiga_catat3` varchar(150) COLLATE utf8_bin DEFAULT NULL,
  `tiga_catat4` varchar(150) COLLATE utf8_bin DEFAULT NULL,
  `tiga_catat5` varchar(150) COLLATE utf8_bin DEFAULT NULL,
  `tiga_catat6` varchar(150) COLLATE utf8_bin DEFAULT NULL,
  `tiga_catat7` varchar(150) COLLATE utf8_bin DEFAULT NULL,
  `tiga_catat8` varchar(150) COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `mrk_tiga`
--

INSERT INTO `mrk_tiga` (`mrktigaid`, `mrksatutiga_id`, `mrk_tigainden`, `mrktiga_kodvots`, `tiga_bina`, `tiga_tadbir`, `tiga_kemajuan`, `tiga_kerangka`, `tiga_kerja`, `tiga_kemasan`, `tiga_luar`, `tiga_kontraktor`, `tiga_pegawai`, `tiga_jawatan`, `tiga_tarikah`, `tiga_catat1`, `tiga_catat2`, `tiga_catat3`, `tiga_catat4`, `tiga_catat5`, `tiga_catat6`, `tiga_catat7`, `tiga_catat8`) VALUES
(1, 18, '0002991882', 'JPS0001922', '90% - Keatas', '75% - 89%', '50% - 74%', '50% kebawah', '50% kebawah', '50% - 74%', '50% - 74%', '50% - 74%', 'TEST', 'IR', '2018-11-22', 'catat1', 'catat1gr', 'catat1', 'catat1', 'catat1', 'catat1', 'catat1', 'catat1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dp_gps`
--
ALTER TABLE `dp_gps`
  ADD PRIMARY KEY (`gps_id`);

--
-- Indexes for table `dp_projek`
--
ALTER TABLE `dp_projek`
  ADD PRIMARY KEY (`projek_id`);

--
-- Indexes for table `dp_projekinfo`
--
ALTER TABLE `dp_projekinfo`
  ADD PRIMARY KEY (`info_id`);

--
-- Indexes for table `kontraktor`
--
ALTER TABLE `kontraktor`
  ADD PRIMARY KEY (`kontraktorId`);

--
-- Indexes for table `mrk_dua`
--
ALTER TABLE `mrk_dua`
  ADD PRIMARY KEY (`mrkduaid`);

--
-- Indexes for table `mrk_jaminanbank`
--
ALTER TABLE `mrk_jaminanbank`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mrk_keypeople`
--
ALTER TABLE `mrk_keypeople`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `mrk_laporansiap`
--
ALTER TABLE `mrk_laporansiap`
  ADD PRIMARY KEY (`lskid`);

--
-- Indexes for table `mrk_perakuansiap`
--
ALTER TABLE `mrk_perakuansiap`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mrk_perakuansiapbaikicacat`
--
ALTER TABLE `mrk_perakuansiapbaikicacat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mrk_ppwjp`
--
ALTER TABLE `mrk_ppwjp`
  ADD PRIMARY KEY (`ppwjp_id`);

--
-- Indexes for table `mrk_satu`
--
ALTER TABLE `mrk_satu`
  ADD PRIMARY KEY (`mrksatuid`);

--
-- Indexes for table `mrk_slogan`
--
ALTER TABLE `mrk_slogan`
  ADD PRIMARY KEY (`set_id`);

--
-- Indexes for table `mrk_ss`
--
ALTER TABLE `mrk_ss`
  ADD PRIMARY KEY (`ss_id`);

--
-- Indexes for table `mrk_suratkhas`
--
ALTER TABLE `mrk_suratkhas`
  ADD PRIMARY KEY (`skhas_id`);

--
-- Indexes for table `mrk_suratmrk`
--
ALTER TABLE `mrk_suratmrk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mrk_suratwjp`
--
ALTER TABLE `mrk_suratwjp`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mrk_tiga`
--
ALTER TABLE `mrk_tiga`
  ADD PRIMARY KEY (`mrktigaid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dp_gps`
--
ALTER TABLE `dp_gps`
  MODIFY `gps_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `dp_projek`
--
ALTER TABLE `dp_projek`
  MODIFY `projek_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `dp_projekinfo`
--
ALTER TABLE `dp_projekinfo`
  MODIFY `info_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `kontraktor`
--
ALTER TABLE `kontraktor`
  MODIFY `kontraktorId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=577;

--
-- AUTO_INCREMENT for table `mrk_dua`
--
ALTER TABLE `mrk_dua`
  MODIFY `mrkduaid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `mrk_jaminanbank`
--
ALTER TABLE `mrk_jaminanbank`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `mrk_keypeople`
--
ALTER TABLE `mrk_keypeople`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `mrk_laporansiap`
--
ALTER TABLE `mrk_laporansiap`
  MODIFY `lskid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `mrk_perakuansiap`
--
ALTER TABLE `mrk_perakuansiap`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `mrk_perakuansiapbaikicacat`
--
ALTER TABLE `mrk_perakuansiapbaikicacat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `mrk_ppwjp`
--
ALTER TABLE `mrk_ppwjp`
  MODIFY `ppwjp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `mrk_satu`
--
ALTER TABLE `mrk_satu`
  MODIFY `mrksatuid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `mrk_slogan`
--
ALTER TABLE `mrk_slogan`
  MODIFY `set_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `mrk_ss`
--
ALTER TABLE `mrk_ss`
  MODIFY `ss_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `mrk_suratkhas`
--
ALTER TABLE `mrk_suratkhas`
  MODIFY `skhas_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `mrk_suratmrk`
--
ALTER TABLE `mrk_suratmrk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `mrk_suratwjp`
--
ALTER TABLE `mrk_suratwjp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `mrk_tiga`
--
ALTER TABLE `mrk_tiga`
  MODIFY `mrktigaid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
