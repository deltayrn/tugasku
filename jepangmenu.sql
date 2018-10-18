-- phpMyAdmin SQL Dump
-- version 3.4.10.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 01, 2017 at 01:41 AM
-- Server version: 5.5.20
-- PHP Version: 5.3.10

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `jepangmenu`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `category_id` int(4) NOT NULL AUTO_INCREMENT,
  `category_type_id` int(4) NOT NULL COMMENT 'rel to type.type_id',
  `category_name` text NOT NULL,
  PRIMARY KEY (`category_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category_type_id`, `category_name`) VALUES
(1, 1, 'Appetizer'),
(2, 1, 'Main Course'),
(3, 1, 'Dessert'),
(4, 2, 'Non Alcoholic'),
(5, 2, 'Alcoholic');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE IF NOT EXISTS `customer` (
  `id_cus` int(4) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `nama_cus` text NOT NULL,
  `alamat` text NOT NULL,
  `email` text NOT NULL,
  `no_hp` varchar(12) NOT NULL,
  PRIMARY KEY (`id_cus`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id_cus`, `nama_cus`, `alamat`, `email`, `no_hp`) VALUES
(0001, 'Andi', 'Depok', 'andi@gmail.com', '081234920109'),
(0002, 'Beni', 'Ngaglik', 'beni@gmail.com', '087928182734'),
(0003, 'Cindy', 'G. Alam Sari', 'cindy@gmail.com', '089728392819'),
(0004, 'Danu', 'Prambanan', 'danu@gmail.com', '08229382732');

-- --------------------------------------------------------

--
-- Table structure for table `karyawan`
--

CREATE TABLE IF NOT EXISTS `karyawan` (
  `no_id` int(4) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `nama_id` text NOT NULL,
  `tgl_lahir` date NOT NULL,
  `sex` text NOT NULL,
  `jabatan` text NOT NULL,
  `mulai_kerja` date NOT NULL,
  PRIMARY KEY (`no_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Dumping data for table `karyawan`
--

INSERT INTO `karyawan` (`no_id`, `nama_id`, `tgl_lahir`, `sex`, `jabatan`, `mulai_kerja`) VALUES
(0001, 'Abdurrazzak Hanif', '1980-03-06', 'L', 'Chief Executive Officer', '2000-03-14'),
(0002, 'Brigita Angel Virantika', '1987-02-24', 'P', 'Owner', '2010-03-30'),
(0003, 'Cecilia Diandra Vrania', '1987-01-16', 'P', 'Assistant Restaurant Manager', '2010-03-14'),
(0004, 'Delon Vero Martin', '1970-03-06', 'L', 'Chef', '1990-03-14'),
(0005, 'Erdiansyah Putra', '1977-03-13', 'L', 'Supervisor', '2000-03-21'),
(0006, 'Fransiskus Emanuel', '1980-03-21', 'L', 'Cook Helper', '2010-03-12'),
(0007, 'Putrika', '1980-03-08', 'P', 'Waiter', '2010-03-08'),
(0008, 'Reno', '1980-03-08', 'L', 'Waiter', '2014-03-09'),
(0009, 'Vinka', '1987-03-14', 'P', 'Waiter', '2009-03-08'),
(0010, 'Wawan', '1993-03-14', 'L', 'Cook Helper', '2010-03-22'),
(0011, 'Zendy', '1990-03-12', 'L', 'Cook Helper', '2013-03-15'),
(0012, 'Shinta', '1992-03-14', 'P', 'Waiter', '2014-03-14'),
(0013, 'Vincentiana', '1994-03-07', 'P', 'Administrasi', '2017-03-12'),
(0014, 'Johan Galih', '1994-03-20', 'L', 'Waiter', '2012-03-14'),
(0015, 'Kevin July', '1990-03-12', 'L', 'Waiter', '2012-03-13'),
(0016, 'Xaverious Hendri', '1992-03-07', 'L', 'Waiter', '2014-03-21'),
(0017, 'Xelove Ginna', '1993-03-03', 'P', 'Waiter', '2014-03-15'),
(0022, 'Abram', '1998-01-12', 'L', 'Waiter', '2017-01-20');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `id` int(4) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `login` text NOT NULL,
  `password` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `name`, `login`, `password`) VALUES
(0001, 'Vincentiana', 'admin', 'admin1'),
(0002, 'Abdurrazak Hanif', 'owner', 'owner1'),
(0003, 'Brigita Angel Virantika', 'manager', 'manager1'),
(0004, 'Erdiansyah Putra', 'superv', 'superv1');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE IF NOT EXISTS `menu` (
  `menu_id` int(4) NOT NULL AUTO_INCREMENT,
  `menu_category_id` int(4) NOT NULL COMMENT 'rel to category.category_id',
  `menu_name` text NOT NULL,
  `menu_price` int(11) NOT NULL,
  PRIMARY KEY (`menu_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=69 ;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`menu_id`, `menu_category_id`, `menu_name`, `menu_price`) VALUES
(7, 1, 'Karaage', 24500),
(8, 1, 'Niku Yasai Itame', 27800),
(9, 2, 'Beef Teriyaki Dry Ramen', 43000),
(10, 2, 'Tempura Dry Ramen', 43500),
(11, 2, 'Gyoza Dry Ramen', 43500),
(12, 2, 'Chicken Teriyaki Dry Ramen', 43500),
(13, 2, 'Hambaga Hot Plate', 48000),
(14, 2, 'Seafood Hot Plate', 48000),
(15, 2, 'Oyakodon', 34500),
(16, 2, 'Beef Sukidonburi', 37600),
(17, 2, 'Chicken Tojidonburi', 39700),
(18, 2, 'Unagi Donburi', 118000),
(19, 1, 'Gyoza', 21100),
(20, 1, 'Mirae Rice Paper', 18800),
(21, 1, 'Calamari Mayonese', 25800),
(22, 5, 'Bintang', 30000),
(23, 5, 'Bali Hai', 29500),
(24, 5, 'Heineken', 34500),
(25, 5, 'Guiness', 23500),
(26, 5, 'Smirnoffice', 25000),
(27, 5, 'Corona', 63000),
(28, 5, 'Coronarita', 85600),
(29, 4, 'Choco Delight', 19700),
(30, 4, 'Cookies and Cream', 18800),
(31, 4, 'Creany Chocolite', 19200),
(32, 4, 'Banana Mocha', 19200),
(33, 4, 'Kiwi Stripe', 20300),
(34, 4, 'Strawberry Mango', 19800),
(35, 4, 'Long Island', 22500),
(36, 4, 'Rainbow Delight ', 16800),
(37, 4, 'Green Packoy', 17800),
(38, 4, 'Mango Passion', 19000),
(39, 4, 'Kiwi Graze', 23500),
(40, 4, 'Pink Snow', 23500),
(41, 4, 'Orange Juice', 23500),
(42, 4, 'Red Sunset', 23500),
(43, 1, 'Yaki Tori', 25000),
(44, 1, 'Age Tori', 25000),
(45, 1, 'Chasu', 34000),
(46, 1, 'Swancai', 42000),
(47, 2, 'Mie Udon Goreng Seafood', 47000),
(48, 3, 'Fondant au Chocolats at Glace Vanille', 27000),
(49, 3, 'Creme Brulee a la Vanilla de Java', 27000),
(50, 3, 'Kappucinno Mousse', 27000),
(51, 3, 'Strawberry Mousse', 27000),
(52, 3, 'Cafe Gourmand', 29000),
(53, 3, 'Salade de Fruit Frais et Cremee Glace', 29000),
(54, 3, 'Glace Vanille Frais Chocolat', 29000),
(55, 1, 'Fried Calamari', 55000),
(56, 1, 'Grilled Calamari', 55000),
(57, 1, 'Statrter Platter', 56000),
(58, 2, 'Spicy Tori Tsukune Nabe', 50000),
(59, 2, 'Tori Meshi', 45000),
(60, 2, 'Tori Komiage Set', 55000),
(61, 2, 'Tori Isobaege', 25000),
(62, 2, 'Salmon Hana Ikura', 55000),
(63, 1, 'Agedashi Tofu Unagi', 32000),
(64, 1, 'Tamage Meotaiko', 29800),
(65, 3, 'Jar of Joy', 30000),
(66, 3, 'Millo Mellow Shake', 33000),
(67, 3, 'Bubblebay Black Magic', 28000),
(68, 3, 'Strawberry Boo', 30000);

-- --------------------------------------------------------

--
-- Table structure for table `nota`
--

CREATE TABLE IF NOT EXISTS `nota` (
  `id_nota` int(4) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `nama_cus` text NOT NULL,
  `menu_name` text NOT NULL,
  `menu_price` int(12) NOT NULL,
  PRIMARY KEY (`id_nota`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `type`
--

CREATE TABLE IF NOT EXISTS `type` (
  `type_id` int(4) NOT NULL AUTO_INCREMENT,
  `type_name` text NOT NULL,
  PRIMARY KEY (`type_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `type`
--

INSERT INTO `type` (`type_id`, `type_name`) VALUES
(1, 'Makanan'),
(2, 'Minuman');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
