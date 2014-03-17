-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 08, 2014 at 09:17 AM
-- Server version: 5.5.32
-- PHP Version: 5.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `asyawebsite`
--
CREATE DATABASE IF NOT EXISTS `asyawebsite` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `asyawebsite`;

-- --------------------------------------------------------

--
-- Table structure for table `factors`
--

CREATE TABLE IF NOT EXISTS `factors` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `date` datetime NOT NULL,
  `bank_result_code` int(5) NOT NULL,
  `discount` int(10) NOT NULL,
  `bank_refid` varchar(30) CHARACTER SET utf8 COLLATE utf8_persian_ci NOT NULL,
  `bank_sale_refrence_id` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `licences`
--

CREATE TABLE IF NOT EXISTS `licences` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `serial` varchar(16) CHARACTER SET utf8 COLLATE utf8_persian_ci NOT NULL,
  `active_code` varchar(16) CHARACTER SET utf8 COLLATE utf8_persian_ci DEFAULT NULL,
  `system_code` varchar(30) CHARACTER SET utf8 COLLATE utf8_persian_ci DEFAULT NULL,
  `price` int(10) NOT NULL,
  `transfer_code` varchar(8) CHARACTER SET utf8 COLLATE utf8_persian_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `serial` (`serial`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `ownership`
--

CREATE TABLE IF NOT EXISTS `ownership` (
  `user_id` int(11) NOT NULL,
  `licence_id` int(11) NOT NULL,
  `id` int(10) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `userfactors`
--

CREATE TABLE IF NOT EXISTS `userfactors` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `user_id` int(10) NOT NULL,
  `factor_id` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `userlicence`
--

CREATE TABLE IF NOT EXISTS `userlicence` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `user_id` int(10) NOT NULL,
  `factor_id` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT '0',
  `last_login` datetime DEFAULT NULL,
  `first_name` varchar(50) CHARACTER SET utf8 COLLATE utf8_persian_ci NOT NULL,
  `last_name` varchar(50) CHARACTER SET utf8 COLLATE utf8_persian_ci NOT NULL,
  `tel` varchar(50) CHARACTER SET utf8 COLLATE utf8_persian_ci NOT NULL,
  `email_code` varchar(30) CHARACTER SET utf8 COLLATE utf8_persian_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
