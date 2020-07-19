-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 19, 2020 at 03:03 AM
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
  `maDH` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `maSP` int(5) NOT NULL,
  `soLuong` int(11) DEFAULT NULL,
  `thanhtien` decimal(10,0) NOT NULL,
  PRIMARY KEY (`maDH`,`maSP`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `chitietdonhang`
--

INSERT INTO `chitietdonhang` (`maDH`, `maSP`, `soLuong`, `thanhtien`) VALUES
('DH1', 1, 2, '101000'),
('DH1', 2, 2, '240000'),
('DH1', 3, 2, '60000'),
('DH2', 8, 1, '220000'),
('DH3', 12, 1, '125000'),
('DH4', 7, 2, '74000');

-- --------------------------------------------------------

--
-- Table structure for table `chitietsanpham`
--

CREATE TABLE IF NOT EXISTS `chitietsanpham` (
  `maSP` int(8) NOT NULL AUTO_INCREMENT,
  `dongia` decimal(23,0) DEFAULT NULL,
  `moTa` text COLLATE utf8_unicode_ci,
  `soluong` int(11) DEFAULT NULL,
  `hinhanh` text COLLATE utf8_unicode_ci NOT NULL,
  `hot` int(1) NOT NULL,
  `uutien` int(11) NOT NULL,
  PRIMARY KEY (`maSP`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=24 ;

--
-- Dumping data for table `chitietsanpham`
--

INSERT INTO `chitietsanpham` (`maSP`, `dongia`, `moTa`, `soluong`, `hinhanh`, `hot`, `uutien`) VALUES
(1, '50500', 'Cá ngừ siêu ngon', 50, 'https://d3kg1kmrau77q0.cloudfront.net/food/1106/f12e__ca-ngu-bo.jpg', 1, 0),
(2, '120000', 'Thịt heo siêu nạt', 160, 'https://media2.giaoducthoidai.vn/Uploaded/ngocnd/2016_03_26/thitloncochattaonac_DXYT.jpg', 1, 0),
(3, '30000', 'Mảng cầu siêu ngon', 230, 'https://3.bp.blogspot.com/-ElSHCURzZHY/Ws_soVtRTvI/AAAAAAAAFLw/Ish0V9sV7dMeYEj1gpENBO1perpjcQQRQCLcBGAs/s1600/kvo1368777975.jpg', 1, 0),
(4, '33000', 'Cam xanh hà nội ngon, nhiều nước. Giá tiền trên tính 1kg', 15, 'https://tea-3.lozi.vn/v1/ship/original/trai-cay-sach-ngon-da-nang-tok-fruit-quan-hai-chau-da-nang-1581227827754027108-cam-xanh-ha-noi-1581228142?w=640&type=o', 0, 0),
(5, '37000', 'Chôm chôm việt nam vị ngọt ngon, quả to, có nguyên cành. Giá trên tính theo 1Kg', 53, 'https://tea-3.lozi.vn/v1/ship/original/trai-cay-sach-ngon-da-nang-tok-fruit-quan-hai-chau-da-nang-1581227827754027108-chom-chom-viet-nam-1581229341?w=640&type=o', 0, 0),
(6, '35000', 'Xoài cát chu xanh, vị ngon không chua lắm. Giá trên tính theo 1kg', 33, 'https://tea-3.lozi.vn/v1/ship/original/trai-cay-sach-ngon-da-nang-tok-fruit-quan-hai-chau-da-nang-1581227827754027108-xoai-cat-chu-xanh-1581229131?w=640&type=o', 0, 0),
(7, '37000', '<p><strong>Xo&agrave;i c&aacute;t chu ch&iacute;n, vị ngọt ngon. Gi&aacute; tr&ecirc;n t&iacute;nh theo 1kg</strong></p>\r\n', 130, '/Lomart.vn/img/xoai.jpg', 1, 2),
(8, '220000', 'Nhãn hiệu Excel, nguồn gốc USA', 53, 'https://tea-3.lozi.vn/v1/ship/original/worldfood-bo-nhap-khau-and-hai-san-tuoi-song-quan-hai-chau-da-nang-1552394051477277884-ba-chi-bo-my-short-plate-1589600020?w=640&type=o', 1, 0),
(9, '158000', 'Nguồn gốc Canada Trọng lượng: 1 kg', 77, 'https://tea-3.lozi.vn/v1/ship/original/worldfood-bo-nhap-khau-and-hai-san-tuoi-song-quan-hai-chau-da-nang-1552394051477277884-suon-heo-canada-1589638092?w=640&type=o', 0, 3),
(10, '263000', 'Cua Thịt Rang Muối (1 Con)', 8, 'https://tea-3.lozi.vn/v1/ship/original/cua-gach-ca-mau-tai-da-nang-shop-online-quan-thanh-khe-da-nang-1552394536577487916-cua-thit-rang-muoi-1-con-1552394537?w=640&type=o', 1, 0),
(11, '160000', '<p>Vodka C&aacute; Sấu Đen l&agrave; rượu Vodka Nga đầu ti&ecirc;n ở Việt Nam c&oacute; nồng độ 31% . Vodka C&aacute; Sấu Đen c&oacute; hương thơm ngọt ng&agrave;o , vị đậm đ&agrave; , &ecirc;m dịu v&agrave; dễ uống . Vodka C&aacute; Sấu Đen th&iacute;ch hợp cho c&aacute;c bữa tiệc sinh nhật , đ&aacute;m cưới , sum họp bạn b&egrave;.</p>\r\n\r\n<p><strong>► Th&ocirc;ng tin sản phẩm:</strong></p>\r\n\r\n<table border="1" cellpadding="1" cellspacing="1" style="width:500px">\r\n  <tbody>\r\n   <tr>\r\n      <td>Dung T&iacute;ch</td>\r\n     <td>500 ml , 20 Chai/ Th&ugrave;ng giấy</td>\r\n    </tr>\r\n   <tr>\r\n      <td>Nồng Độ:</td>\r\n     <td>31 % , Rượu nhập khẩu Nga</td>\r\n    </tr>\r\n   <tr>\r\n      <td>&nbsp;</td>\r\n     <td>&nbsp;</td>\r\n   </tr>\r\n </tbody>\r\n</table>\r\n\r\n<p>&nbsp;</p>\r\n', 43, 'https://tea-3.lozi.vn/v1/ship/original/minimart-kim-lien-quan-ngu-hanh-son-da-nang-1575690203587323636-alligator-platinum-vodka-500ml-31-1575694178?w=640&type=o', 1, 0),
(12, '125000', '<p><em>Thành ph&acirc;̀n và c&ocirc;ng dụng:Sản phẩm được sản xuất bằng nguy&ecirc;n liệu malt tốt nhất được giới thiệu bằng nh&atilde;n m&aacute;c c&oacute; m&agrave;u v&agrave;ng ấn tượng v&agrave; qu&yacute; ph&aacute;i v&agrave; sản xuất theo c&ocirc;ng nghệ v&agrave; kinh nghiệm l&acirc;u đời mang đến hương vị đậm đ&agrave;, sảng kho&aacute;i cho người sử dụng.Sản phẩm được sản xuất theo quy tr&igrave;nh hiện đại v&agrave; kh&ocirc;ng chứa h&oacute;a chất độc hại mang đến chất lượng ho&agrave;n hảo cho người sử dụng.Bia Huda Carlsberg​ c&oacute; m&agrave;u v&agrave;ng &oacute;ng, m&ugrave;i thơm đặc trưng, hương vị đậm đ&agrave;, hấp dẫn vị gi&aacute;c. B&ecirc;n cạnh đ&oacute;, bia l&agrave; loại thức uống gi&agrave;u vitamin B3, B5, axit folid... gi&uacute;p t&aacute;i tạo tế b&agrave;o v&agrave; c&oacute; thể ngăn ngừa ung thư ruột kết. Một ly bia mỗi ng&agrave;y, tương ứng với một lượng cồn vừa phải c&oacute; thể gi&uacute;p bạn giảm stress v&agrave; giảm nguy cơ đau tim, đột quỵ. </em></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Hướng dẫn sử dụng: </strong></p>\r\n\r\n<ul>\r\n <li>D&ugrave;ng để uống trực tiếp, ngon hơn khi uống lạnh.Bảo quản:Bảo quản nơi kh&ocirc; r&aacute;o tho&aacute;ng m&aacute;t.Tr&aacute;nh &aacute;nh nắng trực tiếp.</li>\r\n  <li>Sản xuất tại: C&ocirc;ng ty TNHH BIA CARLSBERG Việt Nam</li>\r\n</ul>\r\n\r\n<p>HSD: 31/10/2020</p>\r\n', 31, '/Lomart.vn/img/thung-bia-huda-24-lon.jpg', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `chitiettheloai`
--

CREATE TABLE IF NOT EXISTS `chitiettheloai` (
  `maTLC` int(11) NOT NULL AUTO_INCREMENT,
  `maTL` int(11) NOT NULL,
  `tenTLC` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`maTLC`),
  KEY `maTL` (`maTL`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=28 ;

--
-- Dumping data for table `chitiettheloai`
--

INSERT INTO `chitiettheloai` (`maTLC`, `maTL`, `tenTLC`) VALUES
(1, 1, 'Thịt lợn'),
(2, 1, 'Thịt bò'),
(3, 1, 'Thịt dê'),
(4, 1, 'Trứng gà'),
(5, 1, 'Trứng vịt'),
(6, 2, 'Cua'),
(7, 2, 'Cá Ngừ'),
(8, 2, 'Cá Nục'),
(9, 2, 'Mực'),
(10, 2, 'Tôm'),
(11, 2, 'Sứa'),
(12, 5, 'Rượu'),
(13, 5, 'Bia');

-- --------------------------------------------------------

--
-- Table structure for table `donhang`
--

CREATE TABLE IF NOT EXISTS `donhang` (
  `maDH` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `hoten` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `chinhanh` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `DiaChiNhanHang` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `SoDT` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `ngaydat` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`maDH`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `donhang`
--

INSERT INTO `donhang` (`maDH`, `hoten`, `email`, `chinhanh`, `DiaChiNhanHang`, `SoDT`, `ngaydat`) VALUES
('DH1', 'Hồ Duy Trung', 'thamnguyen1500@gmail.com', 'Đà Nẵng', '540 Cách Mạng Tháng Tám, phường 11, Quận 3, Hồ Chí', '0368376081', '2020-07-17 20:20:58'),
('DH2', 'Hiếu', 'thamnguyen1500@gmail.com', 'Đà Nẵng', 'Tân Bình, Hồ Chí Minh, Việt Nam', '0368376081', '2020-07-17 20:22:27'),
('DH3', 'Quan', 'thamnguyen1500@gmail.com', 'Đà Nẵng', '763 Trường Chinh, Tây Thạnh, Tân Phú, Hồ Chí Minh,', '0368376081', '2020-07-17 20:24:41'),
('DH4', 'Phạm Văn Trí', 'tripham@gmail.com', 'Hồ Chí Min', '75 Nguyễn Sỹ Sách, Phường 15, Tân Bình, Hồ Chí Minh, Việt Nam', '0909441553', '2020-07-18 22:25:15');

-- --------------------------------------------------------

--
-- Table structure for table `info`
--

CREATE TABLE IF NOT EXISTS `info` (
  `tieude` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `mota` text COLLATE utf8_unicode_ci NOT NULL,
  `tukhoa` text COLLATE utf8_unicode_ci NOT NULL,
  `favicon` text COLLATE utf8_unicode_ci NOT NULL,
  `logo` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `info`
--

INSERT INTO `info` (`tieude`, `mota`, `tukhoa`, `favicon`, `logo`) VALUES
('Lomart - Siêu thị Online', 'Lomart - Siêu thị thu nhỏ, Đặt mua rau thịt cá trực tuyến mang đến tận nới cho bạn. Không cần ra ngoài mà vẫn có đồ ăn ngon, Lomart giúp bạn tiết kiệm thời gian dành cho những công việc khác.', 'lomart, sieu thi online, mua sam online', '/Lomart.vn/img/spkt.png', 'https://lomart.vn/dist/images/logo-lomart.png');

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
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=6 ;

--
-- Dumping data for table `khuyenmai`
--

INSERT INTO `khuyenmai` (`stt`, `tenkm`, `hinhanh`, `noidung`) VALUES
(4, 'Sữa tươi độc quyền (Giảm 20%)', '/Lomart.vn/img/banner-mobile-1305-1594787209.jpg', '<p><strong>Sữa tươi độc quyền (Giảm 20%)</strong></p>\r\n'),
(2, 'Đi chợ dùm bạn', 'https://tea-3.lozi.vn/v1/images/resized/banner-mobile-1191-1588581775?w=643&type=o', '<p>Đi chợ d&ugrave;m bạn</p>\r\n'),
(3, 'Khai trương Vinamilk', 'https://tea-3.lozi.vn/v1/images/resized/banner-mobile-1305-1594437020?w=643&type=o', 'Khai trương Vinamilk');

-- --------------------------------------------------------

--
-- Table structure for table `sanpham`
--

CREATE TABLE IF NOT EXISTS `sanpham` (
  `maSP` int(11) NOT NULL AUTO_INCREMENT,
  `tenSP` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `maTL` int(11) NOT NULL,
  `maTLC` int(11) NOT NULL,
  PRIMARY KEY (`maSP`),
  KEY `maTL` (`maTL`),
  KEY `maTLC` (`maTLC`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=24 ;

--
-- Dumping data for table `sanpham`
--

INSERT INTO `sanpham` (`maSP`, `tenSP`, `maTL`, `maTLC`) VALUES
(1, 'Cá Ngừ Đại Dương', 2, 7),
(2, 'Thịt heo siêu nạt', 1, 1),
(3, 'Mảng cầu có gai', 4, 0),
(4, 'Cam Xanh Hà Nội', 4, 0),
(5, 'Chôm Chôm Việt Nam', 4, 0),
(6, 'Xoài Cát Chu ( Xanh )', 4, 0),
(7, 'Xoài Cát Chu Chín', 4, 0),
(8, 'Ba Chỉ Bò Mỹ/Short Plate', 1, 2),
(9, 'Sườn Heo Canada', 1, 1),
(10, 'Cua Thịt Rang Muối (1 Con)', 2, 6),
(11, 'Alligator Platinum Vodka 500ml/31%', 5, 12),
(12, 'Bia Huda (1 thùng)', 5, 13);

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
('admin', 'admin', 1),
('gunthan', 'Anhyeuem123@', 0);

-- --------------------------------------------------------

--
-- Table structure for table `theloai`
--

CREATE TABLE IF NOT EXISTS `theloai` (
  `maTL` int(11) NOT NULL AUTO_INCREMENT,
  `tenTL` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`maTL`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=12 ;

--
-- Dumping data for table `theloai`
--

INSERT INTO `theloai` (`maTL`, `tenTL`) VALUES
(1, 'Thịt & Trứng'),
(2, 'Cá & Hải Sản'),
(3, 'Rau Củ'),
(4, 'Trái Cây'),
(5, 'Rượu Bia'),
(6, 'Sữa Các Loại');
