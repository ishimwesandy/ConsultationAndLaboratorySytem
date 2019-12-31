-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 06, 2015 at 10:36 AM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `laboratory`
--

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE IF NOT EXISTS `comment` (
  `Id_comment` int(11) NOT NULL AUTO_INCREMENT,
  `Email` varchar(50) NOT NULL,
  `Comment` varchar(200) NOT NULL,
  `Usertype` char(20) NOT NULL,
  `datee` date NOT NULL,
  PRIMARY KEY (`Id_comment`),
  UNIQUE KEY `Email` (`Email`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=37 ;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`Id_comment`, `Email`, `Comment`, `Usertype`, `datee`) VALUES
(28, 'sa7nd55ri@yahoo.fr', 'dfgthyg', 'user', '2015-08-27'),
(29, 'sandr3i@yahoo.fr', 'sdfghgfds', 'user', '2015-08-27'),
(30, 'djasteta@gmail.com', 'sando!!!', 'customer', '2015-08-28'),
(31, 'sa7ndr5i@yahoo.fr', 'lord!!!!!!!!!!!!!!', 'user', '2015-08-28'),
(32, 'sandri@yahoo.fr', 'sa', 'user', '2015-09-02'),
(33, 'sand@yahoo.kl', 'ko nta result mbona c? byagenze gut', 'customer', '2015-09-03'),
(35, 'sabdi@yaho.fr', 'bix', 'customer', '2015-09-03'),
(36, 'sandr21i@yahoo.fr', 'dfghjkl', 'user', '2015-09-04');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE IF NOT EXISTS `customer` (
  `Customer_Id` int(11) NOT NULL AUTO_INCREMENT,
  `Firstname` char(50) NOT NULL,
  `Lastname` char(50) NOT NULL,
  `sex` char(8) NOT NULL,
  `date` date NOT NULL,
  `District` char(50) NOT NULL,
  `glucose` varchar(30) NOT NULL,
  `diabet` varchar(30) NOT NULL,
  `Sector` char(50) NOT NULL,
  `Pregnacy` char(20) NOT NULL,
  `National_Id` varchar(16) NOT NULL,
  `child` varchar(20) NOT NULL,
  `Telephone` varchar(13) NOT NULL,
  `photo` varchar(20) NOT NULL,
  `Conversation` longtext NOT NULL,
  `blood_gr` varchar(20) NOT NULL,
  `RH` varchar(20) NOT NULL,
  `datee` date NOT NULL,
  PRIMARY KEY (`Customer_Id`),
  UNIQUE KEY `National_Id` (`National_Id`,`Telephone`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=166 ;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`Customer_Id`, `Firstname`, `Lastname`, `sex`, `date`, `District`, `glucose`, `diabet`, `Sector`, `Pregnacy`, `National_Id`, `child`, `Telephone`, `photo`, `Conversation`, `blood_gr`, `RH`, `datee`) VALUES
(147, 'MUKANKAKA', 'Louis', 'female', '2015-09-02', 'Karongi', '70-120 Mg/dl', 'Normal', 'Muganza', '', '1345678987654356', '', '0785555286', 'nick.JPG', '		jkjklyyy', '', '', '2015-09-02'),
(151, 'SANO', 'Fgf', 'female', '2015-09-02', 'Rusizi', '', '', 'Muganza', 'Negative', '1111333333333333', '', '0726555555', 'kat.JPG', '	blo', '', '', '2015-09-02'),
(152, 'RURANGWA', 'Concorde', 'male', '2015-09-02', 'Rusizi', '', '', 'Ny', 'Positive', '1344444444444444', '', '0725845286', 'keri.JPG', '		bloo', '', '', '2015-09-02'),
(153, 'TWIZERIMANA', 'Carlos', 'male', '2015-09-02', 'Nyarugenge', '>70Mg/dl', '', 'Karuruma', 'Negative', '1233333455555555', '', '0784841710', 'calos.jpg', '	blooo', 'AB', 'Negative', '2015-09-02'),
(154, 'TWIZERIMANA', 'Carlos', 'male', '2015-09-02', 'Nyarugenge', '-', '-', 'Karuruma', '-', '1233333455555558', '', '0784845688', '250726087694.jpg', '				blooo', '-', '-', '2015-09-02'),
(155, 'SANO', 'Louis', 'female', '1996-07-18', 'Sando', '-', '-', 'Sector', '-', '1556565656565656', '', '0789855555', '', '	fghghg	', '-', '-', '2015-09-03'),
(156, 'ALIANO', 'Fenty', 'female', '2015-09-03', 'Nyarugenge', '-', '-', 'Kabeza', '-', '1197658888888888', '', '0735858884', 'ka.jpg', '					blooffoof', '-', '-', '2015-09-03'),
(157, 'UWIMANA', 'Sophie', 'female', '2015-09-03', 'Rusizi', '-', '-', 'Muganza', '-', '1197658888888888', '', '0782111111', 'ariana.JPG', 'ghjfg	', '-', '-', '2015-09-03'),
(158, 'UWIMANA', 'Sophie', 'female', '2015-09-03', 'Rusizi', '-', '-', 'Muganza', '-', '1197658888888888', '', '0785444444', 'by.jpg', '	ghjfg	', '-', '-', '2015-09-03'),
(159, 'SANO', 'Sandrine', 'female', '2015-09-03', 'Rusizi', '-', '-', 'Muganza', '-', '1196876863478463', '', '0782222222', '1.JPG', '			buhfe', '-', '-', '2015-09-03'),
(160, 'UMULISA', 'Alic', 'female', '2015-09-03', 'Tfg', '-', '-', 'Muganza', '-', '1191358699999999', '', '0783213333', 'bt.jpg', '		078', '-', '-', '2015-09-03'),
(161, 'MUTABABAZI', 'Benjamin', 'male', '2015-09-03', 'Rurindo', '-', '-', 'Muganza', '-', '1198555557444444', '', '0786416666', 'bt.jpg', '		0fghdjk', '-', '-', '2015-09-03'),
(162, 'MUGISHA', 'Claude', 'male', '2015-09-04', 'Kg', '-', '-', 'Kimisagara', '-', '1198765666666666', '', '0782652365', 'images (5).jpg', 'sann', '-', '-', '2015-09-04'),
(163, 'LAMBA', 'Mervielle', 'female', '2015-09-04', 'Karongi', '-', '-', 'Ny', '-', '1198748888888888', '', '0784665256', 'images.jpg', '	sfghgfv', '-', '-', '2015-09-04'),
(164, 'UWIMANA', 'Sophie', 'female', '2012-02-07', 'Mmf', '-', '-', 'Muganza', '-', '', '1233', '0786355895', 'ariana.JPG', '	ghjg', '-', '-', '2015-09-04'),
(165, 'SASDS', 'Fghj', 'male', '1996-07-10', 'Ghg', '-', '-', 'Fff', '-', '1198532323535365', '', '0786359526', 'auror.jpg', '	dfghjhg', '-', '-', '2015-09-04');

-- --------------------------------------------------------

--
-- Table structure for table `exam`
--

CREATE TABLE IF NOT EXISTS `exam` (
  `Exam_id` int(30) NOT NULL AUTO_INCREMENT,
  `Exam_name` varchar(70) NOT NULL,
  `Description` varchar(100) NOT NULL,
  PRIMARY KEY (`Exam_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `exam`
--

INSERT INTO `exam` (`Exam_id`, `Exam_name`, `Description`) VALUES
(1, 'sand', 'sdfghgfds'),
(2, 'fghjkl,', 'fgvhhjnj'),
(3, 'fghjkl,', 'fgvhhjnj');

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE IF NOT EXISTS `result` (
  `Result_Id` int(11) NOT NULL AUTO_INCREMENT,
  `Exam_Id` int(100) NOT NULL,
  `User_Id` int(100) NOT NULL,
  `date_taken` date NOT NULL,
  `Result` int(50) NOT NULL,
  PRIMARY KEY (`Result_Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `User_id` int(90) NOT NULL AUTO_INCREMENT,
  `Username` varchar(40) NOT NULL,
  `Password` varchar(40) NOT NULL,
  `Usertype` char(30) NOT NULL,
  `Firstname` char(50) NOT NULL,
  `Lastname` char(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Telephone` varchar(12) NOT NULL,
  `National_ID` varchar(16) NOT NULL,
  `datee` date NOT NULL,
  PRIMARY KEY (`User_id`),
  UNIQUE KEY `Email` (`Email`,`Telephone`,`National_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=41 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`User_id`, `Username`, `Password`, `Usertype`, `Firstname`, `Lastname`, `Email`, `Telephone`, `National_ID`, `datee`) VALUES
(39, 'sando', 'gera', 'Doctor', 'bix', 'hyy', 'ss2@yahoo.fr', '0782321111', '1198452111111266', '2015-09-04'),
(40, 'lamba', 'lamba12', 'Admin', 'ishimwe', 'merveille', 'sa0@yahoo.fr', '0781313133', '1198452111111267', '2015-09-04');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
