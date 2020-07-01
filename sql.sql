-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 01, 2020 at 08:09 AM
-- Server version: 5.1.36
-- PHP Version: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `sieuthi`
--
CREATE DATABASE `sieuthi` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `sieuthi`;

-- --------------------------------------------------------

--
-- Table structure for table `taikhoan`
--

CREATE TABLE IF NOT EXISTS `taikhoan` (
  `username` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(25) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `quyen` int(1) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `taikhoan`
--

INSERT INTO `taikhoan` (`username`, `password`, `quyen`) VALUES
('admin', 'admin', 1),
('a', 'a', 0),
('123', '123', 0),
('anh', 'anh', 0),
('2', 'A12345678a', 0);
