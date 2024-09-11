-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 10, 2024 at 05:28 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_iak`
--

-- --------------------------------------------------------

--
-- Table structure for table `final_hutan_1`
--

CREATE TABLE `final_hutan_1` (
  `kode_pulau` tinytext DEFAULT NULL,
  `id_tahun` tinytext DEFAULT NULL,
  `Hutan_Lindung` tinytext DEFAULT NULL,
  `Suaka_Alam_dan_Pelestarian_Alam` tinytext DEFAULT NULL,
  `Hutan_Produksi_Terbatas` tinytext DEFAULT NULL,
  `Hutan_Produksi_Tetap` tinytext DEFAULT NULL,
  `Hutan_Produksi_yang_dapat_Dikonversi` tinytext DEFAULT NULL,
  `Jumlah_Luas_Hutan_dan_Perairan` tinytext DEFAULT NULL,
  `jumlah_hph` bigint(20) DEFAULT NULL,
  `jumlah_pembudidaya` bigint(20) DEFAULT NULL,
  `Produksi Kayu Bulat (M3)` varchar(9) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `final_hutan_1`
--

INSERT INTO `final_hutan_1` (`kode_pulau`, `id_tahun`, `Hutan_Lindung`, `Suaka_Alam_dan_Pelestarian_Alam`, `Hutan_Produksi_Terbatas`, `Hutan_Produksi_Tetap`, `Hutan_Produksi_yang_dapat_Dikonversi`, `Jumlah_Luas_Hutan_dan_Perairan`, `jumlah_hph`, `jumlah_pembudidaya`, `Produksi Kayu Bulat (M3)`) VALUES
('Bali, Nusa Tenggara, dan Sulawesi', '2019', '5549', '5066', '3593', '1611', '525', '16344', 169, 16, '41.507'),
('Bali, Nusa Tenggara, dan Sulawesi', '2020', '5549319', '5066958', '3591193', '1610397', '525523', '16343390', 176, 17, '8.724'),
('Bali, Nusa Tenggara, dan Sulawesi', '2021', '5531313', '5064732', '3621597', '1627072', '478706', '16313420', 177, 17, '3.142'),
('Bali, Nusa Tenggara, dan Sulawesi', '2022', '5531313', '7248917', '12410671', '12141408', '6375161', '46396432', 20, 18, '7.489'),
('Kalimantan', '2019', '7031', '5170', '10621', '10793', '3105', '36722', 13, 107, '3.930.767'),
('Kalimantan', '2020', '7031608', '5169825', '10621683', '10793663', '3104453', '36721232', 19, 108, '3.157.824'),
('Kalimantan', '2021', '7031608', '5169825', '10621683', '10791917', '3104453', '36719486', 19, 111, '3.581.054'),
('Kalimantan', '2022', '7031608', '5169825', '10621683', '10789796', '3104453', '36717365', 17, 11, '3.369.393'),
('Maluku dan Papua', '2019', '10658', '11043', '9300', '8053', '7480', '46535', 65, 8, '1.515.284'),
('Maluku dan Papua', '2020', '10658186', '11043579', '9300829', '8052916', '7479963', '46535473', 65, 9, '1.402.675'),
('Maluku dan Papua', '2021', '10658186', '11043579', '9300829', '8052916', '7479963', '46535473', 65, 8, '1.729.429'),
('Maluku dan Papua', '2022', '10658186', '11043579', '9300829', '8052916', '7479963', '46535473', 65, 9, '1.387.050'),
('sumatra', '2019', '5605', '5363', '2834', '7371', '1731', '22905', 21, 112, '687.252'),
('sumatra', '2020', '5604106', '5363550', '2835150', '7369531', '1731043', '22903379', 22, 113, '691.527'),
('sumatra', '2021', '5604106', '5363550', '2835150', '7369531', '1731043', '22903379', 22, 111, '741.899'),
('sumatra', '2022', '5604106', '5363550', '2835150', '7369531', '1731043', '22903379', 22, 112, '1.000.486');

-- --------------------------------------------------------

--
-- Table structure for table `final_hutan_2`
--

CREATE TABLE `final_hutan_2` (
  `jenis_kayu` varchar(23) DEFAULT NULL,
  `id_tahun` bigint(20) DEFAULT NULL,
  `Produksi Kayu Bulat` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `final_hutan_2`
--

INSERT INTO `final_hutan_2` (`jenis_kayu`, `id_tahun`, `Produksi Kayu Bulat`) VALUES
('Akasia', 2019, 512354),
('Akasia', 2020, 500225.95),
('Akasia', 2021, 532044.99),
('Akasia', 2022, 813374),
('Kelompok Kayu Indah', 2019, 2763),
('Kelompok Kayu Indah', 2020, 5786),
('Kelompok Kayu Indah', 2021, 23348),
('Kelompok Kayu Indah', 2022, 29044),
('Kelompok Meranti', 2019, 3961000),
('Kelompok Meranti', 2020, 3390140),
('Kelompok Meranti', 2021, 4833969),
('Kelompok Meranti', 2022, 4351834),
('Kelompok Rimba Campuran', 2019, 1698694),
('Kelompok Rimba Campuran', 2020, 1364598.05),
('Kelompok Rimba Campuran', 2021, 666162.01),
('Kelompok Rimba Campuran', 2022, 570167);

-- --------------------------------------------------------

--
-- Table structure for table `hutan_1`
--

CREATE TABLE `hutan_1` (
  `kode_pulau` varchar(33) DEFAULT NULL,
  `id_tahun` bigint(20) DEFAULT NULL,
  `jumlah_hph` bigint(20) DEFAULT NULL,
  `jumlah_pembudidaya` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `hutan_1`
--

INSERT INTO `hutan_1` (`kode_pulau`, `id_tahun`, `jumlah_hph`, `jumlah_pembudidaya`) VALUES
('Bali, Nusa Tenggara, dan Sulawesi', 2019, 169, 16),
('Bali, Nusa Tenggara, dan Sulawesi', 2020, 176, 17),
('Bali, Nusa Tenggara, dan Sulawesi', 2021, 177, 17),
('Bali, Nusa Tenggara, dan Sulawesi', 2022, 20, 18),
('Kalimantan', 2019, 13, 107),
('Kalimantan', 2020, 19, 108),
('Kalimantan', 2021, 19, 111),
('Kalimantan', 2022, 17, 11),
('Maluku dan Papua', 2019, 65, 8),
('Maluku dan Papua', 2020, 65, 9),
('Maluku dan Papua', 2021, 65, 8),
('Maluku dan Papua', 2022, 65, 9),
('sumatra', 2019, 21, 112),
('sumatra', 2020, 22, 113),
('sumatra', 2021, 22, 111),
('sumatra', 2022, 22, 112);

-- --------------------------------------------------------

--
-- Table structure for table `hutan_2`
--

CREATE TABLE `hutan_2` (
  `kode_pulau` varchar(33) DEFAULT NULL,
  `id_tahun` bigint(20) DEFAULT NULL,
  `jumlah_hph` bigint(20) DEFAULT NULL,
  `jumlah_pembudidaya` bigint(20) DEFAULT NULL,
  `Produksi Kayu Bulat (M3)` varchar(9) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `hutan_2`
--

INSERT INTO `hutan_2` (`kode_pulau`, `id_tahun`, `jumlah_hph`, `jumlah_pembudidaya`, `Produksi Kayu Bulat (M3)`) VALUES
('Bali, Nusa Tenggara, dan Sulawesi', 2019, 169, 16, '41.507'),
('Bali, Nusa Tenggara, dan Sulawesi', 2020, 176, 17, '8.724'),
('Bali, Nusa Tenggara, dan Sulawesi', 2021, 177, 17, '3.142'),
('Bali, Nusa Tenggara, dan Sulawesi', 2022, 20, 18, '7.489'),
('Kalimantan', 2019, 13, 107, '3.930.767'),
('Kalimantan', 2020, 19, 108, '3.157.824'),
('Kalimantan', 2021, 19, 111, '3.581.054'),
('Kalimantan', 2022, 17, 11, '3.369.393'),
('Maluku dan Papua', 2019, 65, 8, '1.515.284'),
('Maluku dan Papua', 2020, 65, 9, '1.402.675'),
('Maluku dan Papua', 2021, 65, 8, '1.729.429'),
('Maluku dan Papua', 2022, 65, 9, '1.387.050'),
('sumatra', 2019, 21, 112, '687.252'),
('sumatra', 2020, 22, 113, '691.527'),
('sumatra', 2021, 22, 111, '741.899'),
('sumatra', 2022, 22, 112, '1.000.486');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
