-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Aug 18, 2019 at 09:26 PM
-- Server version: 5.7.24
-- PHP Version: 7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `agcm`
--

-- --------------------------------------------------------

--
-- Table structure for table `membership`
--

DROP TABLE IF EXISTS `membership`;
CREATE TABLE IF NOT EXISTS `membership` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstName` text NOT NULL,
  `lastName` text NOT NULL,
  `otherNames` text,
  `age` int(3) NOT NULL,
  `sex` text NOT NULL,
  `programme` varchar(30) NOT NULL,
  `residence` text NOT NULL,
  `department` text,
  `phone` int(15) DEFAULT NULL,
  `email` text,
  `accessId` varchar(10) DEFAULT NULL,
  `accessPassword` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=44 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `membership`
--

INSERT INTO `membership` (`id`, `firstName`, `lastName`, `otherNames`, `age`, `sex`, `programme`, `residence`, `department`, `phone`, `email`, `accessId`, `accessPassword`) VALUES
(1, 'dfgfdgfg', 'fdgadfgfg', NULL, 15, 'male', 'pfdfg', 'fiapre', 'music', 54564545, '6455646565456', NULL, NULL),
(8, 'george', 'turkson', 'sorho', 22, 'male', 'comp eng', 'berlin top', 'nusic', 544069203, 'vhdsjhbbhdbj', 'agcm123', 'numlock'),
(9, 'fvdfv', 'dfbbd', 'fbfdb', 12, '', '', 'fbfsf', 'fbsfgs', 115551, 'georgesorho@gmail.com', NULL, NULL),
(10, 'fdbfdb', 'adbdf', 'dfbdf', 52, '', '', 'dfb', 'fdbf', 654545, 'georgesorho@gmail.com', NULL, NULL),
(11, 'dfggfgb', 'fdbgfb', 'fgbsgfs', 11, '', '', 'sdfbfg', 'fbtgbtgf', 51654534, 'georgesorho@gmail.com', NULL, NULL),
(7, 'afhjfkjj', 'fjkllfaodkj', 'nvnnb', 12, 'male', 'fjdksflj', 'kfjnk', 'kkmjh', 44515, 'gjfnn@gmaul.vom', NULL, NULL),
(12, 'gshsrg', 'sgbgfb', 'sgbgfbs', 21, '', 'gbsb', 'sfgbfsbv', 'fgbgfgf', 54541, 'georgesorho@gmail.com', NULL, NULL),
(13, 'gshsrg', 'sgbgfb', 'sgbgfbs', 21, '', 'gbsb', 'sfgbfsbv', 'fgbgfgf', 54541, 'georgesorho@gmail.com', NULL, NULL),
(14, 'jksdk', 'jbdkj', 'dnbn ', 21, '', 'dlvmls ', 'sdbcsdb', 'msdlcm', 415454, 'georgesorho@gmail.com', NULL, NULL),
(15, 'effd', 'erjbkj``', 'bdkbc', 10, '', 'djvjhvb', 'bewdhb', 'bjcbkwbjn', 265653, 'georgesorho@gmail.com', NULL, NULL),
(16, 'snfjk', 'jfkjjnf', 'jfdnvn', 22, '', 'kjvbkn', 'jdkfnvkn', 'kjsnkn', 54556545, 'georgesorho@gmail.com', NULL, NULL),
(17, 'fjjjvjkdfn', 'bkjbjkkj', 'jbkjjn', 22, 'male', 'jbjkbkjdb', 'bjekjbj', 'jbkjbjk', 454354, 'georgesorho@gmail.com', NULL, NULL),
(18, 'vjhbj', 'bhjhjbjb', 'vjhvbhb', 11, 'male', '', 'kjhjkhk', NULL, 4, 'georgesorho@gmail.com', NULL, NULL),
(19, 'vjhbj', 'bhjhjbjb', 'vjhvbhb', 11, 'male', '', 'kjhjkhk', NULL, 454, 'georgesorho@gmail.com', NULL, NULL),
(20, 'vjhbj', 'bhjhjbjb', 'vjhvbhb', 11, 'male', 'hjghg', 'kjhjkhk', 'jhjhbh', 4544464, 'georgesorho@gmail.com', NULL, NULL),
(21, 'gfghv', 'bbkkjb', 'bbkjbjb', 22, 'male', 'gjhghh', 'vjhjvhv', 'bbhbb', 4154, 'georgesorho@gmail.com', NULL, NULL),
(22, 'gfghv', 'bbkkjb', 'bbkjbjb', 22, 'male', 'gjhghh', 'vjhjvhv', 'bbhbb', 4154, 'georgesorho@gmail.com', NULL, NULL),
(23, 'gjhgjh', 'jhiuhuh', 'jkljjlkj', 54, 'male', 'kjkhhbjkjkjn', 'guhjkj', 'jnjkjknk', 254524654, 'georgesorho@gmail.com', NULL, NULL),
(24, 'gjhgjh', 'jhiuhuh', 'jkljjlkj', 54, 'male', 'kjkhhbjkjkjn', 'guhjkj', 'jnjkjknk', 254524654, 'georgesorho@gmail.com', NULL, NULL),
(25, 'afhjfkjj', 'fjkllfaodkj', 'nvnnb', 12, 'male', 'fjdksflj', 'kfjnk', 'kkmjh', 44515, 'gjfnn@gmaul.vom', NULL, NULL),
(26, 'afdsfv', 'sdvd', 'sdfvf', 54, 'male', 'sfdvf', 'fsdvf', 'dfvsdf', 546151, 'sdfvf', NULL, NULL),
(27, 'ajfkg', 'khfj', 'hksjdfhjk', 12, 'male', 'knfdm', 'rehfjdll', 'lmlfldkmv', 5442, 'georgesorho@gmail.com', NULL, NULL),
(28, 'ajfkg', 'khfj', 'hksjdfhjk', 12, 'male', 'knfdm', 'rehfjdll', 'lmlfldkmv', 5442, 'georgesorho@gmail.com', NULL, NULL),
(29, 'ajfkg', 'khfj', 'hksjdfhjk', 12, 'male', 'knfdm', 'rehfjdll', 'lmlfldkmv', 5442, 'georgesorho@gmail.com', NULL, NULL),
(30, 'ajfkg', 'khfj', 'hksjdfhjk', 12, 'male', 'knfdm', 'rehfjdll', 'lmlfldkmv', 5442, 'georgesorho@gmail.com', NULL, NULL),
(31, 'ajfkg', 'khfj', 'hksjdfhjk', 12, 'male', 'knfdm', 'rehfjdll', 'lmlfldkmv', 5442, 'georgesorho@gmail.com', NULL, NULL),
(32, 'sdbjnk', 'khdjsjk', 'jakkdkf', 55, 'male', 'kjbfvkjn', 'ajdkfkjn', 'jkjdnak', 16565626, 'georgesorho@gmail.com', NULL, NULL),
(33, 'jkdfhj', 'jkdafj', 'bjkdfkj', 12, 'male', 'nnjdkkan', 'bakjd', 'jnjdk', 5156156, 'georgesorho@gmail.com', NULL, NULL),
(34, 'fdbk', 'fdkk', 'kjjknadj', 12, 'male', 'jkdfjks', 'fhjk', 'fsndkjdfs', 65146454, 'georgesorho@gmail.com', NULL, NULL),
(35, 'ahfkjh', 'hkdfkjn', 'hhjkfshjh', 12, 'male', 'adfkjanbfkj', 'bfdskjjn', 'lfndlkndans', 2651655, 'georgesorho@gmail.com', NULL, NULL),
(36, 'ajkfkh', 'kjsfdnk', 'jknksj', 15, 'male', 'sfnknjn', 'nkjfnk', 'jsngkgs', 871684, 'georgesorho@gmail.com', NULL, NULL),
(37, 'gfghj', 'ghvvhjv', 'hjgjhb', 12, 'male', 'vcjhvjhvbjhb', 'gfjghb', 'FVGHJHGJHGJH', 262559, 'georgesorho@gmail.com', NULL, NULL),
(38, 'jkf', 'sjdfn', 'fkjn', 11, 'male', '465454', 'knsdf', 'ksfdnn', 54651, 'georgesorho@gmail.com', NULL, NULL),
(39, 'sdnfdn', 'knsmk', 'smfd,m', 11, 'male', 'fnkn', 'kjng', 'nflgnkl', 2555534, 'georgesorho@gmail.com', NULL, NULL),
(40, 'flkjjll', 'jknfkl', 'knfkl', 55, 'male', 'jfnkm', 'dsfnk', 'nnn', 5554554, 'georgesorho@gmail.com', NULL, NULL),
(41, 'knnm', ' mnnkmn', 'snk', 75, 'female', 'sfkjj', 'snknl', 'sjkfnkjk', 51145465, 'sorho@yahoo.com', NULL, NULL),
(42, 'fdjlk', 'mjnlnkn', NULL, 22, 'male', 'jfdkjfj', 'dnskjfn', 'jdsfnkjs', 5558656, 'georgesorho@gmail.com', NULL, NULL),
(43, 'hgfgghgv', 'ghfghv', NULL, 15, 'male', 'cgchgfg', 'vgjvh', 'ghgjhb', 2614654, 'emmanuelbuabin@gmail.com', NULL, NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
