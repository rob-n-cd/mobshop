-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 19, 2023 at 05:00 PM
-- Server version: 8.0.31
-- PHP Version: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `onlinemobileshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `addmobile`
--

DROP TABLE IF EXISTS `addmobile`;
CREATE TABLE IF NOT EXISTS `addmobile` (
  `mname` varchar(20) NOT NULL,
  `msoft` varchar(20) NOT NULL,
  `mprice` int NOT NULL,
  `mcamera` varchar(15) NOT NULL,
  `mbattery` varchar(15) NOT NULL,
  `mtype` varchar(15) NOT NULL,
  `mimg` varchar(300) NOT NULL,
  `brand` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `addmobile`
--

INSERT INTO `addmobile` (`mname`, `msoft`, `mprice`, `mcamera`, `mbattery`, `mtype`, `mimg`, `brand`) VALUES
('nothing', 'andrioid', 50000, '123px', '1/2 hrs c type', 'smart_phone', 'nothing.jpg', 'nothing'),
('huawei', 'andrioid', 30000, '23pix', '1hrs', 'smart_phone', 'huawei.jpg', ''),
('oppo78', 'andrioid', 40000, '23pix', '3hrs ctype', 'smart_phone', 'oppoa78.jpg', ''),
('NOKIYA', 'andrioid', 15000, '123px', '1hrs', 'smart_phone', 'nokiac22.jpg', 'NOKIYA'),
('oneplus nord ce 3lit', 'andrioid', 50000, '23pix', '1/2 hrs c type', 'smart_phone', 'oneplusnordce3lite.jpg', 'oneplus'),
('realme narzo53', 'andrioid', 30000, '23pix', '1/2hrs', 'smart_phone', 'realmenarzon53.jpg', 'realme'),
('samsung', 'andrioid', 10000000, '123px', '2hrs', 'smart_phone', 'samsung.jpg', ''),
('lavablaze', 'andrioid', 25000, '123pix', '2hrs', 'smart_phone', 'lavablaze.jpg', ''),
('vivo16', 'andrioid', 10000, '23pix', '2hrs ctype', 'smart_phone', 'vivot2x.jpg', ''),
('tecnospark', 'andrioid', 20000, '23pix', '1hrs ctype', 'smart_phone', 'tecnospark.jpg', ''),
('IQOOz7', 'andrioid', 45000, '23pix', '2hrs', 'smart_phone', 'iqooz7.jpg', ''),
('iphone14max', 'mac', 1000000, '222px', 'c type 1/2hrs', 'smart_phone', 'iphone.jpg', 'apple'),
('ikall k3', 'oxygen', 1500, '12pix', '3hrs non ctype', 'cell_phone', 'ikall.jpg', 'ikall'),
('ikall 4', 'oxygen', 2000, '35pix', '2hrs', 'cell_phone', 'ikallk2.jpg', 'ikall'),
('lava', 'lavabase', 1500, '9pix', 'non ctype 2hrs', 'cell_phone', 'lava.jpg', ''),
('samsung galaxy z fol', 'andrioid', 80000, '123pix', '1/2 hrs c type', 'folder_phone', 'samsunggalaxyzfold4.jpg', ''),
('samsung galaxy z fol', 'andrioid', 90000, '130pix', 'fast charging  ', 'folder_phone', 'samsungzfold5.jpg', ''),
('samsung galaxy z fil', 'andrioid', 123, '123pix', 'fast charging  ', 'folder_phone', 'samsungzfilp3.jpg', ''),
('samsung galaxy tab', 'andrioid', 40000, '50pix', '1hrs', 'tablet', 'samsunggalaxytab.jpg', ''),
('xiaomi pad 6', 'andrioid', 40000, '60pix', '1/2 hrs c type', 'tablet', 'xiaomipad6.jpg', ''),
('lenovo tab m10', 'andrioid', 50000, '80pix', 'fast charging  ', 'tablet', 'lenovotabm10.jpg', ''),
('pixel 1', 'andrioid', 60000, '1000mpx', '1hrs', 'smart_phone', 'pixel.jpg', 'pixel');

-- --------------------------------------------------------

--
-- Table structure for table `adminlogin`
--

DROP TABLE IF EXISTS `adminlogin`;
CREATE TABLE IF NOT EXISTS `adminlogin` (
  `cpassword` varchar(15) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `adminlogin`
--

INSERT INTO `adminlogin` (`cpassword`) VALUES
('robin');

-- --------------------------------------------------------

--
-- Table structure for table `brand`
--

DROP TABLE IF EXISTS `brand`;
CREATE TABLE IF NOT EXISTS `brand` (
  `bname` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `brand`
--

INSERT INTO `brand` (`bname`) VALUES
('samsung'),
('nothing'),
('apple'),
('redmi'),
('realme'),
('lavablaze'),
('pixel'),
('NOKIYA'),
('oneplus'),
('vivo'),
('vivo'),
('ikall'),
(''),
(''),
(''),
(''),
(''),
(''),
(''),
(''),
(''),
(''),
(''),
(''),
('lenovo');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

DROP TABLE IF EXISTS `category`;
CREATE TABLE IF NOT EXISTS `category` (
  `cid` int NOT NULL AUTO_INCREMENT,
  `cname` varchar(15) NOT NULL,
  PRIMARY KEY (`cid`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cid`, `cname`) VALUES
(6, 'folder_phone'),
(5, 'cell_phone'),
(4, 'smart_phone'),
(7, 'tablet');

-- --------------------------------------------------------

--
-- Table structure for table `mycart`
--

DROP TABLE IF EXISTS `mycart`;
CREATE TABLE IF NOT EXISTS `mycart` (
  `name` varchar(20) NOT NULL,
  `address` varchar(30) NOT NULL,
  `mobilename` varchar(30) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `mobileprice` int NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `mycart`
--

INSERT INTO `mycart` (`name`, `address`, `mobilename`, `mobileprice`) VALUES
('dhony', 'decatolen', 'huawei', 30000),
('robin', 'choondiyani', 'oneplus nord ce 3lit', 50000),
('solaman', 'varkkan', 'nothing', 50000),
('adersh', 'varkkan', 'nothing', 50000),
('harold das', 'bhremapuram', 'xiaomi pad 6', 40000),
('abhi', 'chirayath', 'nothing', 50000),
('harry', 'kothpurakkal,kalady', 'pixel 1', 60000);

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

DROP TABLE IF EXISTS `payment`;
CREATE TABLE IF NOT EXISTS `payment` (
  `ctype` varchar(20) NOT NULL,
  `cnumber` int NOT NULL,
  `cvvnumber` int NOT NULL,
  `holdername` varchar(20) NOT NULL,
  `iprice` int NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`ctype`, `cnumber`, `cvvnumber`, `holdername`, `iprice`) VALUES
('hfh', 14453, 5363, 'jacob', 50000),
('samsung', 321, 123, 'joseph', 50000),
('visa', 2147483647, 991, 'Bibin Davis', 0),
('visa', 124356, 645523, 'robin', 40000),
('sasi', 26332, 3627, 'solaman', 50000),
('roco', 4666, 4656, 'robin', 50000),
('rob', 5687, 4551, 'jose', 0),
('rubys', 2312, 12333331, 'master', 30000),
('visa', 5653, 31354, '356', 50000),
('visa', 1321555, 4121224, 'harold das', 40000),
('visa', 172894, 279427, 'thoppi', 50000),
('visa', 456546, 564646, 'abhi', 50000),
('visa', 1232125, 5435467, 'harry', 60000);

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

DROP TABLE IF EXISTS `register`;
CREATE TABLE IF NOT EXISTS `register` (
  `name` varchar(20) NOT NULL,
  `address` varchar(30) NOT NULL,
  `phone` int NOT NULL,
  `gmail` varchar(25) NOT NULL,
  `password` varchar(10) NOT NULL,
  `img` varchar(300) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`name`, `address`, `phone`, `gmail`, `password`, `img`) VALUES
('thoppi', 'hgyu', 66555754, 'thoppi@gmail.com', '1234', 'th.jpg'),
('tango', 'choondik', 12938, 'rock@gmail', '1234', 'OIP (3).jpg'),
('joyel', 'praparambil', 2147483647, 'joyel@gmail.com', 'joyel', 'OIP (3).jpg'),
('cbcs', 'choondiyani', 2147483647, 'jaffer203@gmaile', '890', 'cust.jpg'),
('THOPPI', 'HOMMPQJD', 8363876, 'thoppi@gmail.com', '123', 'th.jpg'),
('jaffer', '', 0, '', '', 'cust.jpg'),
('robincd', 'choondiyani', 2147483647, 'robincd@gmail.com', '1234', 'cust.jpg'),
('robin', 'sodp', 997089, 'solo@gmail.com', 'solo', 'OIP (4).jpg'),
('harry', 'kothpurakkal,kalady', 2147483647, 'harry@gmail.com', 'harry123', 'OIP.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `shipping`
--

DROP TABLE IF EXISTS `shipping`;
CREATE TABLE IF NOT EXISTS `shipping` (
  `sid` int NOT NULL AUTO_INCREMENT,
  `city` varchar(15) NOT NULL,
  `pincode` int NOT NULL,
  `name` varchar(30) NOT NULL,
  `address` varchar(40) NOT NULL,
  `contry` varchar(15) NOT NULL,
  PRIMARY KEY (`sid`)
) ENGINE=MyISAM AUTO_INCREMENT=41 DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `shipping`
--

INSERT INTO `shipping` (`sid`, `city`, `pincode`, `name`, `address`, `contry`) VALUES
(28, 'blackburn', 1652, 'jacob', 'choondiyanikal', 'london'),
(29, 'blackburn', 12345, 'samsung', 'choondiyanikal', 'london'),
(30, '', 0, '', '', ''),
(31, 'kalady', 28482, 'robin', 'chrupally', 'india'),
(32, 'kothamangalam', 21374, 'solaman', 'varkkan', 'india'),
(33, 'malayatoor', 5747, 'robin', 'choondiyani', 'india'),
(34, 'anamaly', 66764, 'jose', 'varkkan', 'india'),
(35, 'koratty', 2398, 'dhony', 'decatolen', 'india'),
(36, 'malayatoor', 5246, 'adersh', 'varkkan', 'india'),
(37, 'chennai', 22883, 'harold das', 'bhremapuram', 'india'),
(38, 'bombay', 28366, 'thoppi', 'sager', 'india'),
(39, 'ernakulam', 29405, 'abhi', 'chirayath', 'india'),
(40, 'ernakulam', 29032, 'harry', 'kothpurakkal,kalady', 'india');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
