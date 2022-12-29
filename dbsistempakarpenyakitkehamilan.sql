-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 29, 2022 at 04:47 AM
-- Server version: 8.0.27
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbsistempakarpenyakitkehamilan`
--

-- --------------------------------------------------------

--
-- Table structure for table `disease`
--

DROP TABLE IF EXISTS `disease`;
CREATE TABLE IF NOT EXISTS `disease` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `key` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `url` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `disease`
--

INSERT INTO `disease` (`id`, `name`, `key`, `description`, `url`) VALUES
(1, 'Abortus (keluarnya janin sebelum masa visibilitas)', 'P1', 'Keguguran adalah kematian janin dalam kandungan sebelum usia kehamilan mencapai 20 minggu. Umumnya, abortus terjadi karena terdapat kesalahan pada kehamilan atau kesehatan ibu. Namun, 2 dari 3 abortus terjadi karena adanya kelainan pada kromosom janin yang membuat ia tidak bisa tumbuh dan akhirnya gugur dari kandungan.', 'https://www.alodokter.com/kenali-macam-macam-abortus-yang-bisa-terjadi-selama-kehamilan'),
(2, 'Hamil ekstrauteri ektopik terganggu (hamil yang berkembang diluar rahim)', 'P2', 'Kehamilan ektopik adalah kehamilan yang terjadi di luar rahim. Tergantung lokasi menempelnya sel telur, gejala kehamilan ektopik dapat menyerupai gejala pada penyakit usus buntu. Apabila tidak segera ditangani, kehamilan ektopik dapat berakibat fatal bagi ibu', 'https://www.alodokter.com/kehamilan-ektopik'),
(3, 'Solusio plasenta (lepasnya plasenta dari dinding rahim)', 'P3', 'Solusio plasenta adalah komplikasi kehamilan ketika plasenta terlepas dari dinding rahim sebelum proses persalinan. Kondisi ini dapat menyebabkan pasokan nutrisi dan oksigen pada bayi menurun atau terhambat.', 'https://www.alodokter.com/solusio-plasenta'),
(4, 'Preekslampsia berat (suatu komplikasi ditandai dengan hipertensi)', 'P4', 'Preeklamsia adalah peningkatan tekanan darah dan kelebihan protein dalam urine yang terjadi setelah usia kehamilan lebih dari 20 minggu. Bila tidak segera ditangani, preeklamsia bisa menyebabkan komplikasi yang berbahaya bagi ibu dan janin.', 'https://www.alodokter.com/preeklamsia'),
(5, 'Rupture uteri (robeknya dinding rahim)', 'P5', 'Ruptur uteri adalah rahim robek yang sering kali terjadi akibat komplikasi saat persalinan normal. Kondisi ini terjadi terutama pada wanita yang pernah menjalani operasi di area rahim. Ruptur uteri merupakan kondisi gawat darurat, karena dapat berakibat fatal baik pada ibu hamil maupun janinnya.', 'https://www.alodokter.com/ruptur-uteri'),
(6, 'Penyakit tidak diketahui', 'NULL', 'Kami tidak dapat mengetahui gangguan kehamilan yang anda alami. Cek komunitas alodokter pada tombol berikut untuk bertanya mengenai kondisi anda.', 'https://www.alodokter.com/komunitas/topic/gangguan-kehamilan');

-- --------------------------------------------------------

--
-- Table structure for table `disease_symptoms`
--

DROP TABLE IF EXISTS `disease_symptoms`;
CREATE TABLE IF NOT EXISTS `disease_symptoms` (
  `disease_id` int NOT NULL,
  `symptom_id` int NOT NULL,
  KEY `disease_id` (`disease_id`),
  KEY `symptom_id` (`symptom_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `disease_symptoms`
--

INSERT INTO `disease_symptoms` (`disease_id`, `symptom_id`) VALUES
(1, 9),
(1, 10),
(1, 12),
(1, 14),
(2, 1),
(2, 2),
(2, 3),
(2, 9),
(2, 11),
(2, 15),
(3, 13),
(3, 14),
(3, 15),
(3, 19),
(3, 20),
(3, 21),
(3, 22),
(4, 4),
(4, 5),
(4, 6),
(4, 7),
(4, 8),
(4, 9),
(4, 23),
(5, 2),
(5, 8),
(5, 16),
(5, 17),
(5, 18),
(5, 19),
(5, 20),
(5, 23),
(5, 24),
(5, 25);

-- --------------------------------------------------------

--
-- Table structure for table `symptom`
--

DROP TABLE IF EXISTS `symptom`;
CREATE TABLE IF NOT EXISTS `symptom` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `key` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `symptom`
--

INSERT INTO `symptom` (`id`, `name`, `key`) VALUES
(1, 'Usia hamil 7 bulan / lebih', 'G1'),
(2, 'Mual', 'G2'),
(3, 'Muntah', 'G3'),
(4, 'Kejang', 'G4'),
(5, 'Proteinuria lebih dari 3g/liter', 'G5'),
(6, 'Tekanan darah >=160/110 mmHg', 'G6'),
(7, 'Pusing', 'G7'),
(8, 'Nyeri ulu hati', 'G8'),
(9, 'Nyeri perut bagian bawah', 'G9'),
(10, 'Nyeri perut pada satu sisi kanan/kiri', 'G10'),
(11, 'Nyeri hebat tiba – tiba', 'G11'),
(12, 'Perdarahan dari jalan lahir', 'G12'),
(13, 'Pendarahan dari jalan lahir warna kehitaman', 'G13'),
(14, 'Kematian janin ', 'G14'),
(15, 'Syok', 'G15'),
(16, 'Dinding rahim tidak normal', 'G16'),
(17, 'Tampak pucat', 'G17'),
(18, 'Air kencing berwarna kemerahan', 'G18'),
(19, 'Tekanan darah turun sampai dibawah 90/60 mmHg', 'G19'),
(20, 'Nadi cepat', 'G20'),
(21, 'Kontraksi dari rahim', 'G21'),
(22, 'Jumlah pendarahan sedikit', 'G22'),
(23, 'Produksi urin sedikit', 'G23'),
(24, 'Kontraksi rahim yang hilang', 'G24'),
(25, 'Kesadaran menurun', 'G25');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `disease_symptoms`
--
ALTER TABLE `disease_symptoms`
  ADD CONSTRAINT `disease_symptoms_ibfk_1` FOREIGN KEY (`disease_id`) REFERENCES `disease` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `disease_symptoms_ibfk_2` FOREIGN KEY (`symptom_id`) REFERENCES `symptom` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
