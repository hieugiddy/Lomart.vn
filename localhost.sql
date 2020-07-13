-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 13, 2020 at 01:20 PM
-- Server version: 5.1.36
-- PHP Version: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `sieuthi`
--
CREATE DATABASE `sieuthi` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `sieuthi`;

-- --------------------------------------------------------

--
-- Table structure for table `chitietdonhang`
--

CREATE TABLE IF NOT EXISTS `chitietdonhang` (
  `maDH` char(5) COLLATE utf8_unicode_ci NOT NULL,
  `maSP` char(5) COLLATE utf8_unicode_ci NOT NULL,
  `soLuong` int(11) DEFAULT NULL,
  `tongTien` decimal(10,0) DEFAULT NULL,
  `ngayDat` date DEFAULT NULL,
  PRIMARY KEY (`maDH`),
  KEY `maSP` (`maSP`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `chitietdonhang`
--


-- --------------------------------------------------------

--
-- Table structure for table `chitietsanpham`
--

CREATE TABLE IF NOT EXISTS `chitietsanpham` (
  `maSP` char(8) COLLATE utf8_unicode_ci NOT NULL,
  `dongia` decimal(23,0) DEFAULT NULL,
  `ngaysx` date DEFAULT NULL,
  `ngayHetHan` date DEFAULT NULL,
  `moTa` text COLLATE utf8_unicode_ci,
  `soluong` int(11) DEFAULT NULL,
  `hinhanh` text COLLATE utf8_unicode_ci NOT NULL,
  `hot` int(1) NOT NULL,
  PRIMARY KEY (`maSP`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `chitietsanpham`
--

INSERT INTO `chitietsanpham` (`maSP`, `dongia`, `ngaysx`, `ngayHetHan`, `moTa`, `soluong`, `hinhanh`, `hot`) VALUES
('SP001', '50500', '2020-06-23', '2021-06-23', 'Cá ngừ siêu ngon', 120, 'https://d3kg1kmrau77q0.cloudfront.net/food/1106/f12e__ca-ngu-bo.jpg', 1),
('SP002', '120000', '2020-06-23', '2021-06-23', 'Thịt heo siêu nạt', 230, 'https://media2.giaoducthoidai.vn/Uploaded/ngocnd/2016_03_26/thitloncochattaonac_DXYT.jpg', 1),
('SP003', '30000', '0000-00-00', '2021-06-23', 'Mảng cầu siêu ngon', 300, 'https://3.bp.blogspot.com/-ElSHCURzZHY/Ws_soVtRTvI/AAAAAAAAFLw/Ish0V9sV7dMeYEj1gpENBO1perpjcQQRQCLcBGAs/s1600/kvo1368777975.jpg', 1),
('SP004', '33000', '2020-07-11', '2021-07-11', 'Cam xanh hà nội ngon, nhiều nước. Giá tiền trên tính 1kg', 53, 'https://tea-3.lozi.vn/v1/ship/original/trai-cay-sach-ngon-da-nang-tok-fruit-quan-hai-chau-da-nang-1581227827754027108-cam-xanh-ha-noi-1581228142?w=640&type=o', 0),
('SP005', '37000', '2020-07-11', '2020-09-11', 'Chôm chôm việt nam vị ngọt ngon, quả to, có nguyên cành. Giá trên tính theo 1Kg', 121, 'https://tea-3.lozi.vn/v1/ship/original/trai-cay-sach-ngon-da-nang-tok-fruit-quan-hai-chau-da-nang-1581227827754027108-chom-chom-viet-nam-1581229341?w=640&type=o', 0),
('SP006', '35000', '2020-07-11', '2021-07-13', 'Xoài cát chu xanh, vị ngon không chua lắm. Giá trên tính theo 1kg', 35, 'https://tea-3.lozi.vn/v1/ship/original/trai-cay-sach-ngon-da-nang-tok-fruit-quan-hai-chau-da-nang-1581227827754027108-xoai-cat-chu-xanh-1581229131?w=640&type=o', 0),
('SP007', '37000', '2020-07-17', '2020-11-27', 'Xoài cát chu chín, vị ngọt ngon. Giá trên tính theo 1kg', 200, 'https://tea-3.lozi.vn/v1/ship/original/trai-cay-sach-ngon-da-nang-tok-fruit-quan-hai-chau-da-nang-1581227827754027108-xoai-cat-chu-chin-1581229244?w=640&type=o', 0),
('SP008', '220000', '2020-07-24', '2020-07-31', 'Nhãn hiệu Excel, nguồn gốc USA', 122, 'https://tea-3.lozi.vn/v1/ship/original/worldfood-bo-nhap-khau-and-hai-san-tuoi-song-quan-hai-chau-da-nang-1552394051477277884-ba-chi-bo-my-short-plate-1589600020?w=640&type=o', 1),
('SP009', '158000', '2020-07-18', '2020-10-15', 'Nguồn gốc Canada Trọng lượng: 1 kg', 45, 'https://tea-3.lozi.vn/v1/ship/original/worldfood-bo-nhap-khau-and-hai-san-tuoi-song-quan-hai-chau-da-nang-1552394051477277884-suon-heo-canada-1589638092?w=640&type=o', 0),
('SP010', '263000', '2020-07-19', '2020-11-26', 'Cua Thịt Rang Muối (1 Con)', 76, 'https://tea-3.lozi.vn/v1/ship/original/cua-gach-ca-mau-tai-da-nang-shop-online-quan-thanh-khe-da-nang-1552394536577487916-cua-thit-rang-muoi-1-con-1552394537?w=640&type=o', 1),
('SP011', '160000', '2020-07-03', '2022-07-29', 'Alligator Platinum Vodka 500ml/31%', 111, 'https://tea-3.lozi.vn/v1/ship/original/minimart-kim-lien-quan-ngu-hanh-son-da-nang-1575690203587323636-alligator-platinum-vodka-500ml-31-1575694178?w=640&type=o', 1),
('SP012', '125000', '2020-07-08', '2024-07-27', 'Bia Huda', 100, 'https://tea-3.lozi.vn/v1/images/resized/category-web-1141-1590139297?w=240&type=s', 1);

-- --------------------------------------------------------

--
-- Table structure for table `chitiettheloai`
--

CREATE TABLE IF NOT EXISTS `chitiettheloai` (
  `maTLC` char(5) COLLATE utf8_unicode_ci NOT NULL,
  `maTL` char(5) COLLATE utf8_unicode_ci NOT NULL,
  `tenTLC` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`maTLC`),
  KEY `maTL` (`maTL`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `chitiettheloai`
--

INSERT INTO `chitiettheloai` (`maTLC`, `maTL`, `tenTLC`) VALUES
('TLC01', 'MTL01', 'Thịt lợn'),
('TLC02', 'MTL01', 'Thịt bò'),
('TLC03', 'MTL01', 'Thịt dê'),
('TLC04', 'MTL01', 'Trứng gà'),
('TLC05', 'MTL01', 'Trứng vịt'),
('TLC06', 'MTL02', 'Cua'),
('TLC07', 'MTL02', 'Cá Ngừ'),
('TLC08', 'MTL02', 'Cá Nục'),
('TLC09', 'MTL02', 'Mực'),
('TLC10', 'MTL02', 'Tôm'),
('TLC11', 'MTL02', 'Sứa'),
('TLC12', 'MTL05', 'Rượu'),
('TLC13', 'MTL05', 'Bia');

-- --------------------------------------------------------

--
-- Table structure for table `donhang`
--

CREATE TABLE IF NOT EXISTS `donhang` (
  `maDH` char(5) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`maDH`),
  KEY `username` (`username`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `donhang`
--


-- --------------------------------------------------------

--
-- Table structure for table `khuyenmai`
--

CREATE TABLE IF NOT EXISTS `khuyenmai` (
  `stt` int(11) NOT NULL AUTO_INCREMENT,
  `tenkm` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `hinhanh` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `noidung` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`stt`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Dumping data for table `khuyenmai`
--

INSERT INTO `khuyenmai` (`stt`, `tenkm`, `hinhanh`, `noidung`) VALUES
(1, 'GiveAway 0đ', 'https://tea-3.lozi.vn/v1/images/resized/banner-mobile-1301-1594272197?w=643&type=o', 'GiveAway 0đ'),
(2, 'Đi chợ dùm bạn', 'https://tea-3.lozi.vn/v1/images/resized/banner-mobile-1191-1588581775?w=643&type=o', 'Đi chợ dùm bạn'),
(3, 'Khai trương Vinamilk', 'https://tea-3.lozi.vn/v1/images/resized/banner-mobile-1305-1594437020?w=643&type=o', 'Khai trương Vinamilk');

-- --------------------------------------------------------

--
-- Table structure for table `sanpham`
--

CREATE TABLE IF NOT EXISTS `sanpham` (
  `maSP` char(8) COLLATE utf8_unicode_ci NOT NULL,
  `tenSP` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `maTL` char(8) COLLATE utf8_unicode_ci NOT NULL,
  `maTLC` char(8) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`maSP`),
  KEY `maTL` (`maTL`),
  KEY `maTLC` (`maTLC`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sanpham`
--

INSERT INTO `sanpham` (`maSP`, `tenSP`, `maTL`, `maTLC`) VALUES
('SP001', 'Cá Ngừ Đại Dương', 'MTL02', 'TLC07'),
('SP002', 'Thịt heo siêu nạt', 'MTL01', 'TLC01'),
('SP003', 'Mảng cầu có gai', 'MTL04', ''),
('SP004', 'Cam Xanh Hà Nội', 'MTL04', ''),
('SP005', 'Chôm Chôm Việt Nam', 'MTL04', ''),
('SP006', 'Xoài Cát Chu ( Xanh )', 'MTL04', ''),
('SP007', 'Xoài Cát Chu Chín', 'MTL04', ''),
('SP008', 'Ba Chỉ Bò Mỹ/Short Plate', 'MTL01', 'TLC02'),
('SP009', 'Sườn Heo Canada', 'MTL01', 'TLC01'),
('SP010', 'Cua Thịt Rang Muối (1 Con)', 'MTL02', 'TLC06'),
('SP011', 'Alligator Platinum Vodka 500ml/31%', 'MTL05', 'TLC12'),
('SP012', 'Bia Huda (1 thùng)', 'MTL05', 'TLC13');

-- --------------------------------------------------------

--
-- Table structure for table `taikhoan`
--

CREATE TABLE IF NOT EXISTS `taikhoan` (
  `username` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `quyen` int(1) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `taikhoan`
--

INSERT INTO `taikhoan` (`username`, `password`, `quyen`) VALUES
('admin', 'admin', 1);

-- --------------------------------------------------------

--
-- Table structure for table `theloai`
--

CREATE TABLE IF NOT EXISTS `theloai` (
  `maTL` char(5) COLLATE utf8_unicode_ci NOT NULL,
  `tenTL` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`maTL`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `theloai`
--

INSERT INTO `theloai` (`maTL`, `tenTL`) VALUES
('MTL01', 'Thịt & Trứng'),
('MTL02', 'Cá & Hải Sản'),
('MTL03', 'Rau Củ'),
('MTL04', 'Trái Cây'),
('MTL05', 'Rượu Bia'),
('MTL06', 'Sữa Các Loại');
