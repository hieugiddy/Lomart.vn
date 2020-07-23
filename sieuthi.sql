-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 23, 2020 at 02:00 PM
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
('DH4', 7, 2, '74000'),
('DH5', 10, 2, '526000'),
('DH5', 11, 1, '160000'),
('DH6', 71, 2, '588000');

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
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=75 ;

--
-- Dumping data for table `chitietsanpham`
--

INSERT INTO `chitietsanpham` (`maSP`, `dongia`, `moTa`, `soluong`, `hinhanh`, `hot`, `uutien`) VALUES
(1, '50500', '<p>C&aacute; ngừ si&ecirc;u ngon</p>\r\n', 50, 'https://d3kg1kmrau77q0.cloudfront.net/food/1106/f12e__ca-ngu-bo.jpg', 1, 0),
(2, '120000', 'Thịt heo siêu nạt', 160, 'https://media2.giaoducthoidai.vn/Uploaded/ngocnd/2016_03_26/thitloncochattaonac_DXYT.jpg', 1, 0),
(3, '30000', '<p>Mảng cầu si&ecirc;u ngon</p>\r\n', 230, 'https://3.bp.blogspot.com/-ElSHCURzZHY/Ws_soVtRTvI/AAAAAAAAFLw/Ish0V9sV7dMeYEj1gpENBO1perpjcQQRQCLcBGAs/s1600/kvo1368777975.jpg', 1, 0),
(4, '33000', '<p>Cam xanh h&agrave; nội ngon, nhiều nước. Gi&aacute; tiền tr&ecirc;n t&iacute;nh 1kg</p>\r\n', 15, 'https://tea-3.lozi.vn/v1/ship/original/trai-cay-sach-ngon-da-nang-tok-fruit-quan-hai-chau-da-nang-1581227827754027108-cam-xanh-ha-noi-1581228142?w=640&type=o', 0, 0),
(5, '37000', '<p>Ch&ocirc;m ch&ocirc;m việt nam vị ngọt ngon, quả to, c&oacute; nguy&ecirc;n c&agrave;nh. Gi&aacute; tr&ecirc;n t&iacute;nh theo 1Kg</p>\r\n', 53, 'https://tea-3.lozi.vn/v1/ship/original/trai-cay-sach-ngon-da-nang-tok-fruit-quan-hai-chau-da-nang-1581227827754027108-chom-chom-viet-nam-1581229341?w=640&type=o', 0, 0),
(6, '35000', '<p>Xo&agrave;i c&aacute;t chu xanh, vị ngon kh&ocirc;ng chua lắm. Gi&aacute; tr&ecirc;n t&iacute;nh theo 1kg</p>\r\n', 33, 'https://tea-3.lozi.vn/v1/ship/original/trai-cay-sach-ngon-da-nang-tok-fruit-quan-hai-chau-da-nang-1581227827754027108-xoai-cat-chu-xanh-1581229131?w=640&type=o', 0, 0),
(7, '37000', '<p><strong>Xo&agrave;i c&aacute;t chu ch&iacute;n, vị ngọt ngon. Gi&aacute; tr&ecirc;n t&iacute;nh theo 1kg</strong></p>\r\n', 130, '/Lomart.vn/img/xoai.jpg', 1, 2),
(8, '220000', '<p>Nh&atilde;n hiệu Excel, nguồn gốc USA</p>\r\n', 53, 'https://tea-3.lozi.vn/v1/ship/original/worldfood-bo-nhap-khau-and-hai-san-tuoi-song-quan-hai-chau-da-nang-1552394051477277884-ba-chi-bo-my-short-plate-1589600020?w=640&type=o', 1, 100),
(9, '158000', 'Nguồn gốc Canada Trọng lượng: 1 kg', 77, 'https://tea-3.lozi.vn/v1/ship/original/worldfood-bo-nhap-khau-and-hai-san-tuoi-song-quan-hai-chau-da-nang-1552394051477277884-suon-heo-canada-1589638092?w=640&type=o', 0, 3),
(10, '263000', 'Cua Thịt Rang Muối (1 Con)', 6, 'https://tea-3.lozi.vn/v1/ship/original/cua-gach-ca-mau-tai-da-nang-shop-online-quan-thanh-khe-da-nang-1552394536577487916-cua-thit-rang-muoi-1-con-1552394537?w=640&type=o', 1, 0),
(11, '160000', '<p>Vodka C&aacute; Sấu Đen l&agrave; rượu Vodka Nga đầu ti&ecirc;n ở Việt Nam c&oacute; nồng độ 31% . Vodka C&aacute; Sấu Đen c&oacute; hương thơm ngọt ng&agrave;o , vị đậm đ&agrave; , &ecirc;m dịu v&agrave; dễ uống . Vodka C&aacute; Sấu Đen th&iacute;ch hợp cho c&aacute;c bữa tiệc sinh nhật , đ&aacute;m cưới , sum họp bạn b&egrave;.</p>\r\n\r\n<p><strong>► Th&ocirc;ng tin sản phẩm:</strong></p>\r\n\r\n<table border="1" cellpadding="1" cellspacing="1" style="width:500px">\r\n	<tbody>\r\n		<tr>\r\n			<td>Dung T&iacute;ch</td>\r\n			<td>500 ml , 20 Chai/ Th&ugrave;ng giấy</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Nồng Độ:</td>\r\n			<td>31 % , Rượu nhập khẩu Nga</td>\r\n		</tr>\r\n		<tr>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>&nbsp;</p>\r\n', 42, 'https://tea-3.lozi.vn/v1/ship/original/minimart-kim-lien-quan-ngu-hanh-son-da-nang-1575690203587323636-alligator-platinum-vodka-500ml-31-1575694178?w=640&type=o', 1, 0),
(12, '125000', '<p><em>Thành ph&acirc;̀n và c&ocirc;ng dụng:Sản phẩm được sản xuất bằng nguy&ecirc;n liệu malt tốt nhất được giới thiệu bằng nh&atilde;n m&aacute;c c&oacute; m&agrave;u v&agrave;ng ấn tượng v&agrave; qu&yacute; ph&aacute;i v&agrave; sản xuất theo c&ocirc;ng nghệ v&agrave; kinh nghiệm l&acirc;u đời mang đến hương vị đậm đ&agrave;, sảng kho&aacute;i cho người sử dụng.Sản phẩm được sản xuất theo quy tr&igrave;nh hiện đại v&agrave; kh&ocirc;ng chứa h&oacute;a chất độc hại mang đến chất lượng ho&agrave;n hảo cho người sử dụng.Bia Huda Carlsberg​ c&oacute; m&agrave;u v&agrave;ng &oacute;ng, m&ugrave;i thơm đặc trưng, hương vị đậm đ&agrave;, hấp dẫn vị gi&aacute;c. B&ecirc;n cạnh đ&oacute;, bia l&agrave; loại thức uống gi&agrave;u vitamin B3, B5, axit folid... gi&uacute;p t&aacute;i tạo tế b&agrave;o v&agrave; c&oacute; thể ngăn ngừa ung thư ruột kết. Một ly bia mỗi ng&agrave;y, tương ứng với một lượng cồn vừa phải c&oacute; thể gi&uacute;p bạn giảm stress v&agrave; giảm nguy cơ đau tim, đột quỵ. </em></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Hướng dẫn sử dụng: </strong></p>\r\n\r\n<ul>\r\n	<li>D&ugrave;ng để uống trực tiếp, ngon hơn khi uống lạnh.Bảo quản:Bảo quản nơi kh&ocirc; r&aacute;o tho&aacute;ng m&aacute;t.Tr&aacute;nh &aacute;nh nắng trực tiếp.</li>\r\n	<li>Sản xuất tại: C&ocirc;ng ty TNHH BIA CARLSBERG Việt Nam</li>\r\n</ul>\r\n\r\n<p>HSD: 31/10/2020</p>\r\n', 31, '/Lomart.vn/img/thung-bia-huda-24-lon.jpg', 0, 0),
(25, '105000', '<p>Ch&acirc;n G&agrave; Hữu Cơ</p>\r\n', 133, '/Lomart.vn/img/changa.jpg', 1, 0),
(26, '147000', '<p>Gi&ograve; M&oacute;ng Heo Hữu Cơ</p>\r\n', 45, '/Lomart.vn/img/an-phu-farm-thuc-pham-sach-nguyen-chi-thanh-quan-hai-chau-da-nang-1552395374788577082-gio-mong-heo-huu-co-1552395377.jpg', 0, 0),
(27, '263000', '<p>G&agrave; Nguy&ecirc;n Con Hữu Cơ</p>\r\n', 131, '/Lomart.vn/img/an-phu-farm-thuc-pham-sach-nguyen-chi-thanh-quan-hai-chau-da-nang-1552395374788577082-ga-nguyen-con-huu-co-1552395377.jpg', 1, 0),
(28, '168000', '<p>Nạc Heo Hữu Cơ</p>\r\n', 23, '/Lomart.vn/img/an-phu-farm-thuc-pham-sach-nguyen-chi-thanh-quan-hai-chau-da-nang-1552395374788577082-nac-heo-huu-co-1552395377.jpg', 0, 0),
(29, '174000', '<p>Sườn Heo Hữu Cơ</p>\r\n', 17, '/Lomart.vn/img/suon.jpg', 0, 0),
(30, '168000', '<p>Thăn Heo Hữu Cơ</p>\r\n', 100, '/Lomart.vn/img/than.jpg', 1, 0),
(31, '615000', '<p>Thăn Ngoại B&ograve; Hữu Cơ &Uacute;c Obe</p>\r\n', 50, '/Lomart.vn/img/than bo.jpg', 0, 0),
(32, '168000', '<p>Thịt Heo M&ocirc;ng Hữu Cơ</p>\r\n', 70, '/Lomart.vn/img/heo mong.jpg', 0, 0),
(33, '168000', '<p>Thịt Heo Vai Hữu Cơ</p>\r\n', 28, '/Lomart.vn/img/heo vai.jpg', 0, 0),
(34, '163000', '<p>Xương Heo Hữu Cơ</p>\r\n', 54, '/Lomart.vn/img/xuongheo.jpg', 0, 0),
(35, '263000', '<p>Cua Hấp (1 Con)</p>\r\n', 65, '/Lomart.vn/img/cuahap.jpg', 1, 0),
(36, '263000', '<p>Cua Thịt X&agrave;o Me (1 Con)</p>\r\n', 77, '/Lomart.vn/img/cuaxaome.jpg', 0, 0),
(37, '263000', '<p>Cua Thịt X&agrave;o Ớt Tỏi (1 Con)</p>\r\n', 89, '/Lomart.vn/img/cuaottoi.jpg', 0, 0),
(38, '504000', '<p>Cua Gạch (1kg)</p>\r\n', 34, '/Lomart.vn/img/cuagach.jpg', 0, 0),
(39, '504000', '<p>Cua Thịt (1kg)</p>\r\n', 59, '/Lomart.vn/img/cuathit.jpg', 0, 0),
(40, '653000', '<p>B&agrave;o Ngư</p>\r\n', 45, '/Lomart.vn/img/baongu.jpg', 1, 0),
(41, '286000', '<p>Bạch Tuộc</p>\r\n', 90, '/Lomart.vn/img/bachtuot.jpg', 0, 0),
(42, '136000', '<p>Chả Cua</p>\r\n', 55, '/Lomart.vn/img/chacua.jpg', 0, 0),
(43, '716000', '<p>Cua Cốm Năm Căn (1kg)</p>\r\n', 65, '/Lomart.vn/img/cuagom.jpg', 0, 0),
(44, '202000', '<p>C&aacute; Bạc M&aacute; (1kg)</p>\r\n', 121, '/Lomart.vn/img/cabacma.jpg', 0, 0),
(45, '275000', '<p>C&aacute; Ch&igrave;a V&ocirc;i Đen (1kg)</p>\r\n', 66, '/Lomart.vn/img/cachiavoi.jpg', 0, 0),
(46, '38000', '<p>Mật M&iacute;a L&agrave;ng Găng</p>\r\n', 56, '/Lomart.vn/img/matmia.jpg', 0, 0),
(47, '100000', '<p>Tinh Dầu Tr&agrave;m Huế Nguy&ecirc;n Chất Tại Đ&agrave; Nẵng</p>\r\n', 76, '/Lomart.vn/img/tinhdau.jpg', 0, 0),
(48, '23000', '<p>Hạt Giống Cải Xoăn Kale</p>\r\n', 54, '/Lomart.vn/img/hatgiong.jpg', 1, 0),
(49, '21000', '<p>Rau Lang Hữu Cơ</p>\r\n', 322, '/Lomart.vn/img/raulang.jpg', 1, 0),
(50, '19000', '<p>Rau Muống Hữu Cơ</p>\r\n', 133, '/Lomart.vn/img/raumuong.jpg', 0, 0),
(51, '18000', '<p>Rau Mồng Tơi Hữu Cơ</p>\r\n', 56, '/Lomart.vn/img/muongtoi.jpg', 0, 0),
(52, '18000', '<p>Rau X&agrave; L&aacute;ch Hữu Cơ</p>\r\n', 78, '/Lomart.vn/img/xalach.jpg', 0, 0),
(53, '42000', '<p>Gạo Ngon Hữu Cơ</p>\r\n', 500, '/Lomart.vn/img/gao.jpg', 1, 0),
(54, '28000', '<p>Măng Vẩu Điện Bi&ecirc;n</p>\r\n', 45, '/Lomart.vn/img/mang.jpg', 0, 0),
(55, '524000', '<p>Nấm Hương Rừng T&acirc;y Bắc</p>\r\n', 166, '/Lomart.vn/img/nam.jpg', 1, 0),
(56, '69000', '<p>Bưởi Ph&uacute;c Trạch - H&agrave; Tĩnh</p>\r\n', 133, '/Lomart.vn/img/buoi.jpg', 0, 0),
(57, '48000', '<p>D&acirc;u T&acirc;y H&agrave; Lan Nhập Khẩu</p>\r\n', 44, '/Lomart.vn/img/dautay.jpg', 0, 0),
(58, '116000', '<p>T&aacute;o T&agrave;u Envy Newzealand 90-110</p>\r\n', 200, '/Lomart.vn/img/tao.jpg', 1, 0),
(59, '53000', '<p>Cam S&agrave;nh Hữu Cơ (1 Kg)</p>\r\n', 50, '/Lomart.vn/img/cam1.jpg', 0, 0),
(60, '95000', '<p>Cam V&agrave;ng</p>\r\n', 65, '/Lomart.vn/img/cam2.jpg', 0, 0),
(61, '95000', '<p>Cam &Uacute;c (1 Kg)</p>\r\n', 30, '/Lomart.vn/img/camuc.jpg', 0, 0),
(62, '252000', '<p>D&acirc;u Mỹ (500gr)</p>\r\n', 433, '/Lomart.vn/img/daumy.jpg', 0, 0),
(63, '263000', '<p><strong>Nguồn gốc xuất xứ:</strong> Tr&aacute;i c&acirc;y được nhập v&agrave; được b&aacute;n trực tiếp tại hệ thống của h&agrave;ng.</p>\r\n\r\n<p><strong>Đặc điểm nổi bật:</strong> Quả lựu c&oacute; hạt m&agrave;u đỏ, nhiều nước đặc biệt ăn rất ngọt.</p>\r\n\r\n<p><strong>Ti&ecirc;u chuẩn chất lượng:</strong> Đảm bảo chất lượng vệ sinh an to&agrave;n thực phẩm.</p>\r\n\r\n<p><strong>Th&agrave;nh phần: </strong></p>\r\n\r\n<p>- Quả lựu chứa h&agrave;m lượng lớn vitamin C, b&ecirc;n cạnh đ&oacute; c&ograve;n c&oacute; th&ecirc;m vitamin A v&agrave; E, chất xơ, kẽm v&agrave; c&aacute;c loại kho&aacute;ng chất c&aacute;c cần thiết cho cơ thể.</p>\r\n\r\n<p><strong>C&ocirc;ng dụng: </strong></p>\r\n\r\n<p>- Ngăn ngừa c&aacute;c bệnh về tim mạch, ngăn xơ vữa động mạch, ph&ograve;ng chống ung thư.</p>\r\n\r\n<p>- Tốt cho phụ nữ mang thai.</p>\r\n\r\n<p>- Hỗ trợ trong qu&aacute; tr&igrave;nh chuyển h&oacute;a c&aacute;c chất trong cơ thể, gi&uacute;p l&agrave;m sạch răng. Chống vi&ecirc;m khớp.</p>\r\n\r\n<p>- Gi&uacute;p l&agrave;n da tươi s&aacute;ng.</p>\r\n\r\n<p><strong>Bảo quản:</strong> N&ecirc;n bảo quản trong ngăn m&aacute;t tủ lạnh, nhiệt độ th&iacute;ch hợp từ 2 - 4 độ C th&igrave; sẽ để được khoảng 10 ng&agrave;y. Lưu &yacute; khi sử dụng:</p>\r\n\r\n<p>- Cần nhẹ tay trong qu&aacute; tr&igrave;nh vận chuyển để tr&aacute;nh lựu bị dập c&aacute;c hạt ngay s&aacute;t vỏ.</p>\r\n\r\n<p>- Ngo&agrave;i việc b&oacute;c vỏ v&agrave; ăn ngay, lựu c&ograve;n c&oacute; thể &eacute;p nước để uống.</p>\r\n\r\n<p>- Salad lựu cũng l&agrave; 1 m&oacute;n m&agrave; bạn n&ecirc;n thử với sự kết hợp từ c&agrave; chua th&aacute;i hạt lựu, ớt chu&ocirc;ng xanh, hẹ th&aacute;i nhỏ.</p>\r\n\r\n<p><em>Sốt l&agrave;m salad gồm c&oacute;: tỏi băm nhỏ, dầu &ocirc; liu, rượu vang trắng, nước &eacute;p rượu, ti&ecirc;u v&agrave; muối. Trộn đều c&aacute;c hồn hợp tr&ecirc;n lại l&agrave; bạn đ&atilde; c&oacute; một m&oacute;n salad lạ, ngon miệng m&agrave; c&ograve;n tốt cho sức khỏe. B&ecirc;n cạnh đ&oacute; c&ograve;n 1 số m&oacute;n được l&agrave;m từ lựu như siro lựu, lựu nấu với s&uacute;p rau củ,...</em></p>\r\n', 100, '/Lomart.vn/img/luu.jpg', 0, 0),
(64, '378000', '<p>700ml, nồng độ: 40%Vol</p>\r\n', 29, '/Lomart.vn/img/378.jpg', 0, 0),
(65, '242000', '<p>Rượu Gin Gordon&#39;s, sử dụng c&aacute;c nguy&ecirc;n liệu tốt nhất bởi c&aacute;c bậc thầy về pha chế. C&aacute;c nguy&ecirc;n liệu chủ yếu l&agrave; c&acirc;y b&aacute;ch x&ugrave;, ng&ograve; v&agrave; bạch chỉ c&ugrave;ng kết hợp trong c&ocirc;ng thức b&iacute; mật của nh&agrave; sản xuất.</p>\r\n', 34, '/Lomart.vn/img/1.jpg', 0, 0),
(66, '473000', '<p>700ml, nồng độ: 40%, Jack Daniels l&agrave; d&ograve;ng rượu mạnh c&oacute; &iacute;t m&ugrave;i Ti&ecirc;u, &iacute;t m&ugrave;i Gia vị, &iacute;t ngọt v&agrave; c&oacute; m&ugrave;i gỗ Sồi trắng của Mỹ đậm đ&agrave; hơn</p>\r\n', 50, '/Lomart.vn/img/Jack Daniel.jpg', 1, 0),
(67, '289000', '<p>Rượu Amaretto mang vị đắng của hạnh nh&acirc;n &amp; nh&acirc;n của quả hạch. Tuy nhi&ecirc;n vị đắng kh&ocirc;ng hề kh&oacute; chịu ch&uacute;t n&agrave;o, hương vị sẽ được thay thế dần bằng vị ngọt, đ&ocirc;i khi l&agrave; vị ngọt của hạnh nh&acirc;n ở sau c&ugrave;ng.</p>\r\n', 90, '/Lomart.vn/img/Amarretto.jpg', 0, 0),
(68, '336000', '<p>Rượu Jagermeister (rượu thảo mộc jagermeister) l&agrave; loại rượu mạnh c&oacute; xuất xứ từ Đức. Được l&agrave;m từ 56 loại thảo mộc, tr&aacute;i c&acirc;y, rể c&acirc;y như: vỏ cam, chanh, cam thảo, hồi, nghệ t&acirc;y, gừng quả c&acirc;y b&aacute;ch x&ugrave;,... v&agrave; nh&acirc;n s&acirc;m.</p>\r\n', 90, '/Lomart.vn/img/Jagermeister.jpg', 0, 0),
(69, '289000', '<p>Rượu Kahl&uacute;a l&agrave; loại rượu m&ugrave;i hương c&agrave; ph&ecirc; rất nổi tiếng của Mexico, kh&aacute; ngọt v&agrave; thật sự kh&aacute;c biệt với hương vị c&agrave; ph&ecirc;.</p>\r\n', 78, '/Lomart.vn/img/Kahlu.jpg', 0, 0),
(70, '373000', '<p>Rượu Midori Melon, đ&acirc;y l&agrave; loại rượu m&ugrave;i dưa (nhiều loại dưa) đặc sắc v&agrave; nổi tiếng khắp thế giới của h&atilde;ng Suntory, Nhật</p>\r\n', 65, '/Lomart.vn/img/2.jpg', 1, 0),
(71, '294000', '<p>Rượu Rhum N&acirc;u Captain Morgan</p>\r\n', 120, '/Lomart.vn/img/ruo2.jpg', 1, 0),
(72, '16553', '<p>04fi23 - Sữa Dinh Dưỡng Vinamilk &Iacute;t Đường - Bịch 220ml - 3 Bịch</p>\r\n', 300, '/Lomart.vn/img/sua1.jpg', 0, 0),
(73, '42356', '<p>04wo10 - Sữa Tươi Tiệt Tr&ugrave;ng Vinamilk 100% Organic Kh&ocirc;ng Đường - Hộp Giấy 1l</p>\r\n', 322, '/Lomart.vn/img/sua2.jpg', 0, 0),
(74, '510000', '<p>04wo10_thg - Th&ugrave;ng 12 Hộp Sữa Tươi Tiệt Tr&ugrave;ng 1l Vinamilk 100% Organic Kh&ocirc;ng Đường</p>\r\n', 222, '/Lomart.vn/img/sua3.jpg', 1, 0);

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
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=54 ;

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
(53, 4, 'Lựu'),
(52, 4, 'Táo'),
(9, 2, 'Mực'),
(10, 2, 'Tôm'),
(11, 2, 'Sứa'),
(12, 5, 'Rượu'),
(13, 5, 'Bia'),
(51, 4, 'Dâu Tây'),
(49, 4, 'Chôm Chôm'),
(48, 4, 'Bưởi'),
(50, 4, 'Mảng Cầu'),
(40, 4, 'Xoài'),
(41, 4, 'Cam'),
(44, 1, 'Thịt gà'),
(45, 2, 'Bào Ngư'),
(46, 2, 'Bạch Tuột'),
(47, 2, 'Cá');

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
('DH4', 'Phạm Văn Trí', 'tripham@gmail.com', 'Hồ Chí Min', '75 Nguyễn Sỹ Sách, Phường 15, Tân Bình, Hồ Chí Minh, Việt Nam', '0909441553', '2020-07-18 22:25:15'),
('DH5', 'Hoàng Phi Hồng', 'phihong@gmail.com', 'Đà Nẵng', '40 Đống Đa, Thạch Thang, Hải Châu, Đà Nẵng, Việt Nam', '0368376081', '2020-07-19 11:13:43'),
('DH6', 'Ngô Gia Tự', 'giatu@gmail.com', 'Đà Nẵng', '12 Ông Ích Khiêm, Thanh Bình, Q. Hải Châu, Đà Nẵng, Việt Nam', '0920211123', '2020-07-19 21:25:40');

-- --------------------------------------------------------

--
-- Table structure for table `info`
--

CREATE TABLE IF NOT EXISTS `info` (
  `tieude` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `mota` text COLLATE utf8_unicode_ci NOT NULL,
  `tukhoa` text COLLATE utf8_unicode_ci NOT NULL,
  `favicon` text COLLATE utf8_unicode_ci NOT NULL,
  `logo` text COLLATE utf8_unicode_ci NOT NULL,
  `luottruycap` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `info`
--

INSERT INTO `info` (`tieude`, `mota`, `tukhoa`, `favicon`, `logo`, `luottruycap`) VALUES
('Lomart - Siêu Thị Online', 'Lomart - Siêu thị thu nhỏ, Đặt mua rau thịt cá trực tuyến mang đến tận nới cho bạn. Không cần ra ngoài mà vẫn có đồ ăn ngon, Lomart giúp bạn tiết kiệm thời gian dành cho những công việc khác.', 'lomart, sieu thi online, mua sam online,lomart, sieu thi online, mua sam online', '/Lomart.vn/img/spkt.png', '/Lomart.vn/img/logo-lomart.png', 281);

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
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=7 ;

--
-- Dumping data for table `khuyenmai`
--

INSERT INTO `khuyenmai` (`stt`, `tenkm`, `hinhanh`, `noidung`) VALUES
(4, 'Sữa tươi độc quyền (Giảm 20%)', '/Lomart.vn/img/banner-mobile-1305-1594787209.jpg', '<p><strong>Sữa tươi độc quyền (Giảm 20%)</strong></p>\r\n'),
(2, 'Đi chợ dùm bạn', 'https://tea-3.lozi.vn/v1/images/resized/banner-mobile-1191-1588581775?w=643&type=o', '<p>Đi chợ d&ugrave;m bạn</p>\r\n'),
(3, 'Khai trương Vinamilk', 'https://tea-3.lozi.vn/v1/images/resized/banner-mobile-1305-1594437020?w=643&type=o', '<p>Nhằm g&oacute;p phần đẩy mạnh ph&aacute;t triển hệ thống ph&acirc;n phối, tạo điều kiện cho người ti&ecirc;u d&ugrave;ng trong tỉnh Nghệ An c&oacute; cơ hội tiếp cận với c&aacute;c sản phẩm, h&agrave;ng h&oacute;a Việt Nam c&oacute; chất lượng, Sở C&ocirc;ng Thương Nghệ An quyết định chọn C&ocirc;ng ty Cổ phần sữa Việt Nam (Vinamilk) l&agrave; đơn vị điển h&igrave;nh về sản xuất v&agrave; cung ứng c&aacute;c sản phẩm xứng đ&aacute;ng với t&ecirc;n gọi &ldquo;Tự h&agrave;o h&agrave;ng Việt Nam&rdquo; v&agrave; đề nghị Vinamilk phối hợp tham gia x&acirc;y dựng chương tr&igrave;nh điểm b&aacute;n h&agrave;ng &ldquo;Tự h&agrave;o h&agrave;ng Việt&rdquo;. Thực hiện chương tr&igrave;nh n&agrave;y, ng&agrave;y 12/10/2015, Vinamilk l&agrave; đơn vị đầu ti&ecirc;n tại tỉnh Nghệ An đ&atilde; khai trương điểm b&aacute;n h&agrave;ng &ldquo;Tự h&agrave;o h&agrave;ng Việt Nam&rdquo; tại cửa h&agrave;ng trưng b&agrave;y v&agrave; giới thiệu c&aacute;c sản phẩm sữa Vinamilk tại trung t&acirc;m TP.Vinh (địa chỉ số 4 Đại lộ L&ecirc; Nin, TP.Vinh, Nghệ An). Cửa h&agrave;ng trưng b&agrave;y v&agrave; b&aacute;n hơn 200 sản phẩm c&aacute;c loại của Vinamilk đạt chất lượng theo ti&ecirc;u chuẩn của Việt Nam v&agrave; quốc tế. Nh&acirc;n dịp n&agrave;y, Vinamilk c&oacute; nhiều chương tr&igrave;nh khuyến mại hấp dẫn cho người ti&ecirc;u d&ugrave;ng tại cửa h&agrave;ng như mua sản phẩm sữa bột, sữa chua, sữa nước&hellip;.sẽ c&oacute; cơ hội nhận được tặng phẩm bảng học th&ocirc;ng minh cho b&eacute;, ghế ngồi h&igrave;nh th&uacute; tiện dụng, chảo chống d&iacute;nh cao cấp&hellip;(t&ugrave;y theo số lượng v&agrave; sản phẩm mua).</p>\r\n\r\n<p><img alt="" src="http://ec2-54-169-28-3.ap-southeast-1.compute.amazonaws.com/Portals/0/VNM-KhaiTruong-Hinh1.jpg" /><em>Bà Võ Thị An - Phó Giám đ&ocirc;́c Sở C&ocirc;ng thương tỉnh Nghệ An phát bi&ecirc;̉u tại lễ khai trương</em></p>\r\n\r\n<p>Điểm b&aacute;n h&agrave;ng &ldquo;Tự h&agrave;o h&agrave;ng Việt&rdquo; của Vinamilk được thực hiện theo mục ti&ecirc;u của đề &aacute;n ph&aacute;t triển thị trường trong nước gắn với cuộc vận động &ldquo;Người Việt Nam ưu ti&ecirc;n d&ugrave;ng h&agrave;ng Việt Nam&rdquo; giai đoạn 2014-2020. Mục ti&ecirc;u của đề &aacute;n đến năm 2015, tăng thị phần h&agrave;ng Việt c&oacute; thế mạnh tại c&aacute;c k&ecirc;nh ph&acirc;n phối truyền thống ở khu vực n&ocirc;ng th&ocirc;n, v&ugrave;ng s&acirc;u, v&ugrave;ng xa l&ecirc;n tr&ecirc;n 70%; phấn đấu đến năm 2020 tăng thị phần h&agrave;ng Việt c&oacute; thế mạnh tại c&aacute;c k&ecirc;nh ph&acirc;n phối l&ecirc;n tr&ecirc;n 80% v&agrave; 100% c&aacute;c tỉnh, th&agrave;nh phố trực thuộc trung ương triển khai tr&ecirc;n địa b&agrave;n chương tr&igrave;nh x&acirc;y dựng Điểm b&aacute;n h&agrave;ng Việt Nam cố định, bền vững với t&ecirc;n gọi &ldquo;Tự h&agrave;o h&agrave;ng Việt Nam&rdquo;.</p>\r\n\r\n<p><img alt="" src="http://ec2-54-169-28-3.ap-southeast-1.compute.amazonaws.com/Portals/0/VNM-KhaiTruong-Hinh2.jpg" /><em>&Ocirc;ng Tạ Minh Phượng - Giám đ&ocirc;́c kỹ thu&acirc;̣t Nhà máy sữa Vinamilk Ngh&ecirc;̣ An ph&aacute;t biểu tại buổi lễ.</em></p>\r\n\r\n<p>Sau gần 40 năm x&acirc;y dựng v&agrave; ph&aacute;t triển, Vinamilk hiện l&agrave; tập đo&agrave;n dinh dưỡng h&agrave;ng đầu tại Việt Nam mang đến những giải ph&aacute;p dinh dưỡng chất lượng quốc tế, gi&aacute; cả hợp l&yacute; cho h&agrave;ng triệu gia đ&igrave;nh Việt. Sản phẩm của Vinamilk l&agrave; sự kết hợp dựa tr&ecirc;n những am hiểu về nhu cầu dinh dưỡng v&agrave; thể chất của trẻ em Việt Nam n&oacute;i ri&ecirc;ng v&agrave; người Việt Nam n&oacute;i chung. C&ugrave;ng với Viện Dinh dưỡng Quốc gia Việt Nam v&agrave; c&aacute;c chuy&ecirc;n gia dinh dưỡng h&agrave;ng đầu thế giới, Vinamilk đ&atilde; v&agrave; đang đem đến cho người ti&ecirc;u d&ugrave;ng Việt Nam c&aacute;c sản phẩm chất lượng quốc tế được c&ocirc;ng nhận theo ti&ecirc;u chuẩn của Ch&acirc;u &Acirc;u v&agrave; Hoa Kỳ.</p>\r\n\r\n<p><img alt="" src="http://ec2-54-169-28-3.ap-southeast-1.compute.amazonaws.com/Portals/0/VNM-KhaiTruong-Hinh3.jpg" /></p>\r\n\r\n<p><img alt="" src="http://ec2-54-169-28-3.ap-southeast-1.compute.amazonaws.com/Portals/0/VNM-KhaiTruong-Hinh4.jpg" /><em>Lễ cắt băng khai trương điểm b&aacute;n h&agrave;ng &ldquo;Tự h&agrave;o h&agrave;ng Việt Nam&rdquo; tại cửa h&agrave;ng Vinamilk, số 4 Đại lộ L&ecirc; Nin, Nghệ An</em></p>\r\n\r\n<p>Để đ&aacute;p ứng nhu cầu sản xuất với sản lượng h&agrave;ng trăm triệu l&iacute;t sữa mỗi năm, Vinamilk đ&atilde; v&agrave; đang đầu tư một c&aacute;ch b&agrave;i bản v&agrave;o hệ thống ph&aacute;t triển nguồn nguy&ecirc;n liệu theo ti&ecirc;u chuẩn quốc tế từ kh&acirc;u trồng cỏ, x&acirc;y dựng chuồng trại, chế biến thức ăn cho b&ograve; đến quản l&yacute; th&uacute; y, m&ocirc;i trường xung quanh, sản xuất&hellip;Để mang đến cho người ti&ecirc;u d&ugrave;ng Nghệ An v&agrave; c&aacute;c tỉnh l&acirc;n cận những sản phẩm tươi ngon nhất, nhiều năm qua Vinamilk l&agrave; đơn vị đầu ti&ecirc;n đ&atilde; đầu tư Trang trại b&ograve; sữa Nghệ An v&agrave; Nh&agrave; m&aacute;y sản xuất sữa tại Nghệ An. Trang trại b&ograve; sữa của Vinamilk tại Nghệ An l&agrave; trang trại đầu ti&ecirc;n tại Đ&ocirc;ng Nam &Aacute; được Global G.A.P về quản l&yacute; trang trại v&agrave; chất lượng sữa tươi thuần khiết. Ngo&agrave;i ra Trang trại b&ograve; sữa Nghệ An cũng được Bộ NN &amp; PTNT chứng nhận l&agrave; trang trại xuất sắc nhất năm 2014.</p>\r\n\r\n<p><img alt="" src="http://ec2-54-169-28-3.ap-southeast-1.compute.amazonaws.com/Portals/0/VNM-KhaiTruong-Hinh5.jpg" /></p>\r\n\r\n<p><img alt="" src="http://ec2-54-169-28-3.ap-southeast-1.compute.amazonaws.com/Portals/0/VNM-KhaiTruong-Hinh6.jpg" /><em>Kh&aacute;ch h&agrave;ng&nbsp;tham quan điểm b&aacute;n h&agrave;ng &ldquo;Tự h&agrave;o h&agrave;ng Việt Nam&rdquo; tại cửa h&agrave;ng Vinamilk Nghệ An, nơi&nbsp;trưng b&agrave;y v&agrave; b&aacute;n hơn 200 sản phẩm c&aacute;c loại của Vinamilk đạt chất lượng theo ti&ecirc;u chuẩn của Việt Nam v&agrave; quốc tế</em>&nbsp;</p>\r\n\r\n<p>Trong 5 năm gần đ&acirc;y, Vinamilk lu&ocirc;n đạt được tốc độ tăng trưởng ấn tượng: doanh số trung b&igrave;nh tăng tr&ecirc;n&nbsp;<strong>20%</strong>/năm; Lợi nhuận tăng&nbsp;<strong>&nbsp;15%</strong>/năm; Nộp ng&acirc;n s&aacute;ch nh&agrave; nước trung b&igrave;nh tr&ecirc;n&nbsp;<strong>3.000</strong>&nbsp;tỉ/năm v&agrave; vươn l&ecirc;n top 100 c&ocirc;ng ty gi&aacute; trị nhất Asian (theo đ&aacute;nh gi&aacute; của Nikkei Asian Review) v&agrave; trong top 50 doanh nghiệp ni&ecirc;m yết tốt nhất Việt Nam do tạp ch&iacute; Fordes b&igrave;nh chọn&hellip;</p>\r\n\r\n<p>Với mục ti&ecirc;u ph&aacute;t triển bền vững v&agrave; đưa vị thế của Vinamilk ra tầm quốc tế, Vinamilk đặt chiến lược ph&aacute;t triển d&agrave;i hạn đạt mức doanh số 3 tỷ USD để trở th&agrave;nh một trong 50 c&ocirc;ng ty sữa lớn nhất thế giới.</p>\r\n\r\n<p>Để đạt được mục ti&ecirc;u đ&oacute;, Vinamilk lu&ocirc;n coi trọng v&agrave; đi đầu trong việc cải tiến v&agrave; ph&aacute;t triển sản phẩm mới, đ&aacute;p ứng nhu cầu đa dạng v&agrave; ng&agrave;y c&agrave;ng cao của người ti&ecirc;u d&ugrave;ng: hiện Vinamilk đi đầu trong ph&acirc;n kh&uacute;c sữa tươi 100% v&agrave; l&agrave; nh&atilde;n h&agrave;ng sữa tươi số 1 Việt Nam; sữa bột Vinamilk đi đầu ở ph&acirc;n kh&uacute;c b&igrave;nh d&acirc;n với d&ograve;ng sản phẩm Dielac v&agrave; c&oacute; những ph&aacute;t triển đột ph&aacute; với d&ograve;ng sản phẩm Optimum cho ph&acirc;n kh&uacute;c cao cấp; sữa chua Vinamilk đi đầu v&agrave; ph&aacute;t triển đầy đủ c&aacute;c d&ograve;ng sản phẩm thơm ngon, bổ dưỡng từ sữa chua ăn đến sữa chua uống cho mọi lứa tuổi. Vinamilk cũng ti&ecirc;n phong trong việc đổi mới v&agrave; cải tiến c&aacute;c d&ograve;ng sản phẩm sữa đặc c&oacute; đường, sữa đậu n&agrave;nh, kem, ph&ocirc; mai v&agrave; c&aacute;c thức uống c&oacute; lợi cho sức khỏe.</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `sanpham`
--

CREATE TABLE IF NOT EXISTS `sanpham` (
  `maSP` int(11) NOT NULL AUTO_INCREMENT,
  `tenSP` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `maTL` int(11) DEFAULT NULL,
  `maTLC` int(11) DEFAULT NULL,
  PRIMARY KEY (`maSP`),
  KEY `maTL` (`maTL`),
  KEY `maTLC` (`maTLC`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=75 ;

--
-- Dumping data for table `sanpham`
--

INSERT INTO `sanpham` (`maSP`, `tenSP`, `maTL`, `maTLC`) VALUES
(1, 'Cá Ngừ Đại Dương', 2, 47),
(2, 'Thịt heo siêu nạt', 1, 1),
(3, 'Mảng cầu có gai', 4, 50),
(4, 'Cam Xanh Hà Nội', 4, 41),
(5, 'Chôm Chôm Việt Nam', 4, 49),
(6, 'Xoài Cát Chu ( Xanh )', 4, 40),
(7, 'Xoài Cát Chu Chín', 4, 40),
(8, 'Ba Chỉ Bò Mỹ/Short Plate', 1, 2),
(9, 'Sườn Heo Canada', 1, 1),
(10, 'Cua Thịt Rang Muối (1 Con)', 2, 6),
(11, 'Alligator Platinum Vodka 500ml/31%', 5, 12),
(12, 'Bia Huda (1 thùng)', 5, 13),
(25, 'Chân Gà Hữu Cơ', 1, 44),
(26, 'Giò Móng Heo Hữu Cơ', 1, 1),
(27, 'Gà Nguyên Con Hữu Cơ', 1, 44),
(28, 'Nạc Heo Hữu Cơ', 1, 1),
(29, 'Sườn Heo Hữu Cơ', 1, 1),
(30, 'Thăn Heo Hữu Cơ', 1, 1),
(31, 'Thăn Ngoại Bò Hữu Cơ Úc Obe', 1, 2),
(32, 'Thịt Heo Mông Hữu Cơ', 1, 1),
(33, 'Thịt Heo Vai Hữu Cơ', 1, 1),
(34, 'Xương Heo Hữu Cơ', 1, 1),
(35, 'Cua Hấp (1 Con)', 2, 6),
(36, 'Cua Thịt Xào Me (1 Con)', 2, 6),
(37, 'Cua Thịt Xào Ớt Tỏi (1 Con)', 2, 6),
(38, 'Cua Gạch (1kg)', 2, 6),
(39, 'Cua Thịt (1kg)', 2, 6),
(40, 'Bào Ngư', 2, 45),
(41, 'Bạch Tuộc', 2, 46),
(42, 'Chả Cua', 2, 6),
(43, 'Cua Cốm Năm Căn (1kg)', 2, 6),
(44, 'Cá Bạc Má (1kg)', 2, 47),
(45, 'Cá Chìa Vôi Đen (1kg)', 2, 47),
(46, 'Mật Mía Làng Găng', 3, NULL),
(47, 'Tinh Dầu Tràm Huế Nguyên Chất Tại Đà Nẵng', 3, NULL),
(48, 'Hạt Giống Cải Xoăn Kale', 3, NULL),
(49, 'Rau Lang Hữu Cơ', 3, NULL),
(50, 'Rau Muống Hữu Cơ', 3, NULL),
(51, 'Rau Mồng Tơi Hữu Cơ', 3, NULL),
(52, 'Rau Xà Lách Hữu Cơ', 3, NULL),
(53, 'Gạo Ngon Hữu Cơ', 3, NULL),
(54, 'Măng Vẩu Điện Biên', 3, NULL),
(55, 'Nấm Hương Rừng Tây Bắc', 3, NULL),
(56, 'Bưởi Phúc Trạch - Hà Tĩnh', 4, 48),
(57, 'Dâu Tây Hà Lan Nhập Khẩu', 4, 51),
(58, 'Táo Tàu Envy Newzealand 90-110', 4, 52),
(59, 'Cam Sành Hữu Cơ (1 Kg)', 4, 41),
(60, 'Cam Vàng', 4, 41),
(61, 'Cam Úc (1 Kg)', 4, 41),
(62, 'Dâu Mỹ (500gr)', 4, 51),
(63, 'Lựu', 4, 53),
(64, 'Cointreau', 5, 12),
(65, 'Gin Gordon''S', 5, 12),
(66, 'Jack Daniel', 5, 12),
(67, 'Rượu Amarretto', 5, 12),
(68, 'Rượu Jagermeister', 5, 12),
(69, 'Rượu Kahluá', 5, 12),
(70, 'Rượu Midori Melon', 5, 12),
(71, 'Rượu Rhum Nâu Captain Morgan', 5, 12),
(72, '04fi23 - Sữa Dinh Dưỡng Vinamilk Ít Đường - Bịch 2', 6, NULL),
(73, '04wo10 - Sữa Tươi Tiệt Trùng Vinamilk 100% Organic Không Đường - Hộp Giấy 1l', 6, NULL),
(74, '04wo10_thg - Thùng 12 Hộp Sữa Tươi Tiệt Trùng 1l Vinamilk 100% Organic Không Đường', 6, NULL);

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
('hieu', '12345', 0),
('gunthan', 'Anhyeuem123@', 0);

-- --------------------------------------------------------

--
-- Table structure for table `theloai`
--

CREATE TABLE IF NOT EXISTS `theloai` (
  `maTL` int(11) NOT NULL AUTO_INCREMENT,
  `tenTL` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`maTL`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=16 ;

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
