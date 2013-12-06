-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 06, 2013 at 08:45 AM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ktth`
--

-- --------------------------------------------------------

--
-- Table structure for table `ktth_album`
--

CREATE TABLE IF NOT EXISTS `ktth_album` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(125) COLLATE utf8_unicode_ci NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `url` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `note` varchar(125) COLLATE utf8_unicode_ci NOT NULL,
  `key` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `ktth_album`
--

INSERT INTO `ktth_album` (`id`, `name`, `time`, `url`, `note`, `key`) VALUES
(1, 'Du Lịch Đà Lạt Tết Dương Lịch 2011', '2011-01-10 08:54:10', 'host=picasaweb.google.com&hl=vi&feat=flashalbum&RGB=0x000000&feed=https%3A%2F%2Fpicasaweb.google.com%2Fdata%2Ffeed%2Fapi%2Fuser%2F114034695456040921919%2Falbumid%2F5940395641087679633%3Falt%3Drss%26kind%3Dphoto%26hl%3Dvi', 'Du Lịch Đà Lạt Tết Dương Lịch 2011', 'du-lich-da-lat-tet-duong-lich-2011'),
(2, 'Du lịch Mekong Đồng Phú 2010', '2010-01-10 08:54:37', 'host=picasaweb.google.com&hl=vi&feat=flashalbum&RGB=0x000000&feed=https%3A%2F%2Fpicasaweb.google.com%2Fdata%2Ffeed%2Fapi%2Fuser%2F114034695456040921919%2Falbumid%2F5940400493989820673%3Falt%3Drss%26kind%3Dphoto%26hl%3Dvi', 'Du lịch Mekong Đồng Phú 2010', 'du-lich-mekong-dong-phu-2010');

-- --------------------------------------------------------

--
-- Table structure for table `ktth_app`
--

CREATE TABLE IF NOT EXISTS `ktth_app` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(15) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(125) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `banner` varchar(125) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `prefix` varchar(50) NOT NULL,
  `alias` varchar(256) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `date_modified` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `date_activity` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `type` tinyint(4) NOT NULL,
  `page_view` bigint(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `ktth_app`
--

INSERT INTO `ktth_app` (`id`, `name`, `phone`, `address`, `email`, `banner`, `prefix`, `alias`, `date_created`, `date_modified`, `date_activity`, `type`, `page_view`) VALUES
(1, 'Phòng Kỹ Thuật Thể Hiện', '0913 71 81 56', '50 Phạm Thái Bường F4 TP Vĩnh Long', 'quangphuong@thvl.vn', 'Phòng Kỹ Thuật Thể Hiện', 'ktth_', 'ktthehien.com', '2012-06-01 09:00:00', '2037-10-01 00:00:00', '2036-12-01 11:04:58', 0, 20),
(2, 'Quản Lý Thù Lao', '0903062068', 'phường 5', 'thanhbao2007vl@gmail.com', 'Quản Lý Thù Lao', 'ktth_', 'thu-lao', '2013-11-02 17:37:36', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 2, 20);

-- --------------------------------------------------------

--
-- Table structure for table `ktth_ask`
--

CREATE TABLE IF NOT EXISTS `ktth_ask` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_category` int(11) NOT NULL,
  `question` mediumtext NOT NULL,
  `author1` varchar(50) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `answer` mediumtext NOT NULL,
  `author2` varchar(50) NOT NULL,
  `key` varchar(250) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `foreign_field` (`id_category`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `ktth_ask`
--

INSERT INTO `ktth_ask` (`id`, `id_category`, `question`, `author1`, `time`, `answer`, `author2`, `key`) VALUES
(1, 2, '<p>\r\n	Những kh&oacute; khăn bắt đầu ập tới với con từ khi con vừa học xong trung học.</p>\r\n', 'Phật tử', '2012-11-21 07:15:23', '<p>\r\n	Xin ch&agrave;o người bạn trẻ th&acirc;n mến! C&aacute;m ơn rất nhiều những chia sẻ từ tr&aacute;i tim của bạn. Tất cả những sự chia sẻ đ&oacute; cũng đều xuất ph&aacute;t từ sự mong muốn c&oacute; một hướng đi để c&oacute; thể sống l&agrave;nh, sống đẹp, sống b&igrave;nh an v&agrave; hạnh ph&uacute;c.</p>\r\n', 'BBT:', ''),
(2, 2, '<p>\r\n	Sự mong muốn th&agrave;nh c&ocirc;ng đ&atilde; mang đến qu&aacute; nhiều đau khổ v&agrave; bận rộn. Kh&ocirc;ng điều g&igrave; con l&agrave;m m&agrave; cảm thấy đủ cả. L&agrave;m thế n&agrave;o con c&oacute; thể tạo sự an lạc cho bản th&acirc;n?</p>\r\n', 'Phật tử', '2012-11-21 07:15:35', '<p>\r\n	Phẩm chất của h&agrave;nh động của bạn phụ thuộc v&agrave;o phẩm chất sự c&oacute; mặt của bạn. Đề nghị bạn hăng h&aacute;i để hiến tặng hạnh ph&uacute;c, l&agrave;m cho người kh&aacute;c hạnh ph&uacute;c. Đ&oacute; l&agrave; việc l&agrave;m tốt đẹp. Nếu bạn kh&ocirc;ng hạnh ph&uacute;c, bạn sẽ kh&ocirc;ng thể l&agrave;m điều đ&oacute;.</p>\r\n', 'BBT:', ''),
(3, 2, '<p>\r\n	Bất cứ khi n&agrave;o t&ocirc;i l&agrave;m điều g&igrave;, t&acirc;m tr&iacute; t&ocirc;i cứ hướng về tương lai cho việc suy nghĩ?</p>\r\n', 'Phật tử', '2012-11-21 07:16:03', '<p>\r\n	Khi bạn nhận c&ugrave;ng l&uacute;c nhiều bức thư, bạn phải quyết định xem n&ecirc;n đọc bức n&agrave;o trước. Tuy bạn muốn đọc hai bức thư c&ugrave;ng một l&uacute;c bởi ch&uacute;ng đều quan trọng.</p>\r\n', 'BBT:', ''),
(4, 1, '<p>\r\n	L&agrave;m thế n&agrave;o để c&oacute; sự tự tin nơi ch&iacute;nh m&igrave;nh?</p>\r\n', 'Phật tử', '2012-11-21 07:16:36', '<p>\r\n	C&acirc;u trả lời n&agrave;y do Ban bi&ecirc;n tập ghi lại t&oacute;m tắt lời dạy của Sư &Ocirc;ng. Khi nh&igrave;n s&acirc;u v&agrave;o ch&iacute;nh m&igrave;nh ta thấy bản th&acirc;n m&igrave;nh vốn c&oacute; sẵn một gia t&agrave;i rất lớn.</p>\r\n', 'BBT:', ''),
(5, 1, '<p>\r\n	K&iacute;nh thưa qu&yacute; thầy v&agrave; qu&yacute; sư c&ocirc;! Mỗi khi c&oacute; t&acirc;m h&agrave;nh ti&ecirc;u cực xuất hiện, con rất muốn chuyển h&oacute;a ch&uacute;ng.</p>\r\n', 'Phật tử', '2012-11-21 07:16:46', '<p>\r\n	Th&acirc;n ch&agrave;o bạn! Mỗi khi bạn c&oacute; những t&acirc;m h&agrave;nh ti&ecirc;u cực xuất hiện, th&igrave; việc đầu ti&ecirc;n m&agrave; bạn phải n&ecirc;n l&agrave;m l&agrave; thực tập hơi thở c&oacute; ch&aacute;nh niệm, để đưa t&acirc;m trở về với th&acirc;n ngay trong gi&acirc;y ph&uacute;t hiện tại.</p>\r\n', 'BBT:', ''),
(6, 1, '<p>\r\n	Con l&agrave; một sinh vi&ecirc;n vừa tốt nghiệp đại học. Con phải l&agrave;m g&igrave; b&acirc;y giờ?</p>\r\n', 'Phật tử', '2012-11-21 07:16:57', '<p>\r\n	Ban Bi&ecirc;n Tập L&agrave;ng Mai đ&atilde; nhận được thư bạn v&agrave; nhiều bức thư kh&aacute;c gởi về với nội dung: muốn t&igrave;m một nơi n&agrave;o m&agrave; ở đ&oacute; m&igrave;nh về lại với ch&iacute;nh m&igrave;nh, ở đ&oacute; m&igrave;nh cảm nhận được cảm gi&aacute;c AN LẠC trong cuộc sống n&agrave;y m&agrave; kh&ocirc;ng phải mưu t&iacute;nh cho tương lai m&agrave; đ&acirc;u biết m&igrave;nh đang hiện hữu trong hiện tại.</p>\r\n', 'BBT:', ''),
(7, 1, '<p>\r\n	Con biết rằng thế giới n&agrave;y c&oacute; nhiều ph&aacute;p m&ocirc;n tu v&agrave; đạo Phật lu&ocirc;n hướng con người đến con đường an lạc.</p>\r\n', 'Phật tử', '2012-11-21 07:17:16', '<p>\r\n	Bạn Anh Nhi th&acirc;n mến! Đọc những d&ograve;ng t&acirc;m sự của bạn, trong t&ocirc;i c&oacute; sự cảm th&ocirc;ng. Ng&agrave;y xưa, khi t&ocirc;i bắt đầu c&oacute; ước muốn đi xuất gia để tiếp nối con đường rất đẹp, rất s&aacute;ng của Bụt.</p>\r\n', 'BBT:', ''),
(15, 2, '<p>\r\n	Con Bi cam phai lam sao</p>\r\n', 'Thanh Phong', '2013-04-23 20:35:04', '<p>\r\n	Tra loi ...............uong thuoc</p>\r\n', 'BBT', ''),
(16, 2, 'thử đặt câu hỏi', 'abc', '2013-07-02 07:39:55', '', '', ''),
(17, 2, '', '', '2013-07-20 15:22:59', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `ktth_category`
--

CREATE TABLE IF NOT EXISTS `ktth_category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_position` int(11) NOT NULL,
  `name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `factory` double DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `ktth_category_1` (`id_position`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=89 ;

--
-- Dumping data for table `ktth_category`
--

INSERT INTO `ktth_category` (`id`, `id_position`, `name`, `factory`) VALUES
(1, 1, 'Chuyên mục', 1),
(2, 1, 'Phóng Sự dài, Chuyên đề', 1),
(3, 1, 'Chấp cánh ước mơ', 2),
(4, 1, 'Trái tim Nhân Ái', 2),
(5, 1, 'Chuyến xe Nhân Ái', 2.5),
(6, 1, 'Thần Tài Gõ Cửa', 2),
(7, 1, 'Thấp Sáng Niềm Tin', 2.5),
(8, 1, 'Phim Tài Liệu', 2),
(9, 1, 'Ký sự Truyền Hình', 2),
(10, 1, 'Người Miền Tây', 2),
(11, 1, 'Nhịp Sóng Đồng Bằng', 2),
(12, 1, 'Miền Tây Miến Yêu', 2),
(13, 1, 'Phóng sự ngắn', 0.4),
(14, 1, 'Bản tin TS Địa Phương - (Trưa)', 0.5),
(15, 1, 'Bản tin TS Địa Phương 18h30 K1- (Dựng tin)', 0.3),
(16, 1, 'Bản tin TS Địa phuong - (Tói-K2)', 0.5),
(17, 1, 'Vinh Long Ngày Mới', 0.5),
(18, 1, 'Bản tin TSQT - (Trưa)', 0.4),
(19, 1, 'Bản tin TSQT - (Chiều)', 0.6),
(20, 1, 'Bản tin TSQT - (22h)', 0.5),
(21, 1, 'Thế giới Quanh ta', 0.4),
(22, 1, 'Bài khoa giáo Vệ Tinh', 0.5),
(23, 1, 'Nhân vật sự kiện', 0.4),
(24, 1, 'Thế Giới Tuần qua', 0.4),
(25, 1, 'VLNM : TSQT & Thể Thao', 0.5),
(26, 3, 'Chạy chữ GTCT - K2', 0.1),
(27, 2, 'Trực Studio Thời sự (7h30ph - 11h)', 0.5),
(28, 2, 'Trực Studio Thời sự (13h30ph - 16h)', 0.5),
(29, 2, 'Trực Studio Thời sự (16h - 19h)', 0.4),
(30, 2, 'Trực Studio TSQT (7h30ph - 11h)', 0.5),
(31, 2, 'Trực Studio TSQT (13h30ph -16h)', 0.5),
(32, 2, 'Trực Studio TSQT (16h -18h30ph)', 0.4),
(33, 2, 'Trực Studio TSQT (19h30ph - 22h)', 0.5),
(34, 2, 'Trực Studio DBTT & Phóng Sự', 0.5),
(35, 2, 'Trực Phòng thu Vệ tinh', 0.5),
(36, 2, 'Trực Phòng thu Discovery L4', 0.5),
(37, 2, 'Âm Thanh VLNM', 0.5),
(38, 2, 'Thu Dựng Thời tiết Chủ nhật', 0.5),
(39, 2, 'Camera VLNM', 0.25),
(40, 2, 'Đạo diễn VLNM', 0.5),
(41, 2, 'Thu Thắp sáng niềm tin', 0.5),
(42, 2, 'Thu Chuyến xe nhân ái', 0.5),
(43, 2, 'Thu Thần Tài Gõ Cửa', 0.5),
(44, 2, 'Thu Chấp cánh ước mơ', 0.5),
(45, 2, 'Ca nhạc Sân Khấu (setup Âm thanh - Ánh sáng)', 1.5),
(46, 3, 'Hình hiệu chương trình (Loại 01)', 5),
(47, 3, 'Hình hiệu Tiểu mục, Cổ động', 1.5),
(48, 3, 'Backdrop', 4),
(49, 3, 'Background', 1),
(50, 3, 'Banner, Logo', 1),
(51, 3, 'Trailer Phim, Chuong Trình', 1),
(52, 3, 'Trailer Phim tuần', 0.5),
(53, 3, 'Trailer Chuyên mục', 0.75),
(54, 3, 'Giới thiệu CT Vệ tinh', 0.25),
(55, 3, 'Dựng và xử lý CT GameShow', 1),
(56, 3, 'Ca nhạc chủ óề, giai óiệu QH', 0.25),
(57, 3, 'Ca nhạc Giải trí, Giai óiệu trẻ', 0.5),
(58, 3, 'Dựng Bản tin thị trường', 0.4),
(59, 3, 'Dựng Dự báo Sâu Bệnh', 0.4),
(60, 3, 'Dựng Dự báo nhiệt độ', 0.1),
(61, 3, 'Key Chuong Trình, In DVD', 0.08),
(62, 3, 'Dựng Thế giới 24H', 0.4),
(63, 3, 'Dựng Thể thao 24H', 0.2),
(64, 1, 'Danh sách đại chỉ Nhân Đạo', 0.5),
(65, 1, 'Phóng sự Địa chỉ Nhân Đạo', 0.5),
(66, 1, 'Dựng PLại Bạn Nhà nông, Nhịp cầu Y tế', 0.5),
(67, 2, 'Âm Thanh BTCT', 0.25),
(68, 2, 'Camera BTCT', 0.12),
(69, 2, 'Đạo diễn BTCT', 0.25),
(70, 2, 'Nhạc phim Tài Liệu, Ký sự', 0.4),
(71, 2, 'Nhạc Phim NSĐB, Người Miền Tây', 0.2),
(72, 2, 'Dự báo thời tiết', 0.4),
(73, 2, 'Thu Vợ tôi là só 1', 0.5),
(74, 1, 'Trực Dựng Chủ Nhật Hàng Tuần', 0.5),
(75, 3, 'Hình hiệu chương trình (Loại 02)', 4),
(76, 3, 'Hình hiệu chương trình (Loại 03)', 3),
(77, 3, 'Xử lý cắt QC, CH Trình, GameShow, Phim', 0.2),
(78, 3, 'Dựng cắt Cải Lương Góc', 1),
(79, 2, 'Thu Vượt Qua Thử Thách', 0.5),
(80, 1, 'Vượt Qua Thử Thách', 2.5),
(81, 2, 'Trực tiếp Thời Sự Địa Phương', 0.4),
(82, 2, 'Thu 24h', 0.4),
(83, 2, 'Trực tiếp BNN, Ytế', 0.4),
(84, 1, 'Bản tin TS Địa phương 18h30 K1 - (Chạy Trực Tiếp)', 0.3),
(85, 3, 'Trực tiếp XSKT Vĩnh Long', 0.25),
(86, 1, 'Vợ Tôi là Số 1', 2.5),
(87, 1, 'Ngôi Nhà Thân Ái', 2.5),
(88, 2, 'Ca nhạc sân khấu (Âm thanh - ánh sáng SK /1 đêm)', 1);

-- --------------------------------------------------------

--
-- Table structure for table `ktth_category_ask`
--

CREATE TABLE IF NOT EXISTS `ktth_category_ask` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `order` int(11) NOT NULL,
  `key` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `ktth_category_ask`
--

INSERT INTO `ktth_category_ask` (`id`, `name`, `order`, `key`) VALUES
(1, ' Tự Học', 2, 'tu-hoc'),
(2, 'Chuyên gia', 2, 'chuyen-gia');

-- --------------------------------------------------------

--
-- Table structure for table `ktth_category_news`
--

CREATE TABLE IF NOT EXISTS `ktth_category_news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `order` int(11) NOT NULL,
  `key` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=13 ;

--
-- Dumping data for table `ktth_category_news`
--

INSERT INTO `ktth_category_news` (`id`, `name`, `order`, `key`) VALUES
(11, 'Tin Đài PT-TH Vĩnh Long', 0, 'tin-dai-pt-th-vinh-long'),
(12, 'Tin Nội Bộ', 1, 'tin-noi-bo');

-- --------------------------------------------------------

--
-- Table structure for table `ktth_category_video`
--

CREATE TABLE IF NOT EXISTS `ktth_category_video` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `picture` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `order` int(11) NOT NULL,
  `type` int(11) NOT NULL DEFAULT '0',
  `btype` int(11) NOT NULL,
  `key` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Dumping data for table `ktth_category_video`
--

INSERT INTO `ktth_category_video` (`id`, `name`, `picture`, `order`, `type`, `btype`, `key`) VALUES
(1, 'Nội bộ', '/data/images/logo/tvonline.jpgtvonline.jpg', 18, 1, 0, 'noi-bo'),
(3, 'Hoạt hình', 'https://lh3.googleusercontent.com/-EjY3-D4cZMc/UZ3HyZ9sNKI/AAAAAAAAACs/uvV5CU7Ox50/s800/Duc-Phat-191.jpg', 3, 0, 0, 'hoat-hinh');

-- --------------------------------------------------------

--
-- Table structure for table `ktth_config`
--

CREATE TABLE IF NOT EXISTS `ktth_config` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `param` varchar(125) COLLATE utf8_unicode_ci NOT NULL,
  `value` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=6 ;

--
-- Dumping data for table `ktth_config`
--

INSERT INTO `ktth_config` (`id`, `param`, `value`) VALUES
(1, 'ROW_PER_PAGE', '12'),
(5, 'GUEST_VISIT', '1199');

-- --------------------------------------------------------

--
-- Table structure for table `ktth_guest`
--

CREATE TABLE IF NOT EXISTS `ktth_guest` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ip` varchar(16) CHARACTER SET latin1 NOT NULL,
  `entry_time` varchar(32) CHARACTER SET latin1 NOT NULL,
  `exit_time` varchar(32) CHARACTER SET latin1 NOT NULL,
  `agent` varchar(16) CHARACTER SET latin1 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5916 ;

--
-- Dumping data for table `ktth_guest`
--

INSERT INTO `ktth_guest` (`id`, `ip`, `entry_time`, `exit_time`, `agent`) VALUES
(5915, '127.0.0.1', '1386300163', '1386303763', '127.0.0.1');

-- --------------------------------------------------------

--
-- Table structure for table `ktth_news`
--

CREATE TABLE IF NOT EXISTS `ktth_news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_category` int(11) DEFAULT NULL,
  `author` varchar(50) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `content` longtext NOT NULL,
  `title` text NOT NULL,
  `type` int(11) NOT NULL DEFAULT '0',
  `key` varchar(250) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `foreign_field` (`id_category`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `ktth_news`
--

INSERT INTO `ktth_news` (`id`, `id_category`, `author`, `date`, `content`, `title`, `type`, `key`) VALUES
(7, 12, 'Nhiên Như - Quảng Tánh', '2013-12-06 10:45:00', '<p>\r\n	<iframe height="412" id="mediaspace" scrolling="no" src="http://thvl.vn/jwplayer/?l=http://media1.thvl.vn/Media_upload/Video/VoToiLaSo1/2013/VTLS10112.mp4&amp;i=&amp;w=514&amp;h=412&amp;a=1" style="list-style: none; margin: 0px; padding: 0px; border-width: 0px; color: rgb(0, 0, 0); font-family: arial; font-size: 14px; text-align: -webkit-center; overflow: hidden;" width="514"></iframe></p>\r\n<div>\r\n	&nbsp;</div>\r\n', 'Vợ tôi là số 1 (01/12/2013)', 0, 'vo-toi-la-so-1-01122013-7'),
(10, 11, 'Nhiên Như - Quảng Tánh', '2013-12-06 10:43:00', '<p style="list-style: none; margin: 0px 0px 10px; padding: 0px; color: rgb(0, 0, 0); font-family: arial; font-size: 14px; text-align: justify;">\r\n	<strong style="list-style: none; margin: 0px; padding: 0px;">V&agrave;o m&ugrave;a xu&acirc;n, người ta lu&ocirc;n lu&ocirc;n cắm một c&agrave;nh hoa mận để trang tr&iacute; tại hốc tường Tokonoma &ndash; nơi quan trọng trong tr&agrave; thất. Theo quan niệm của người Nhật, hoa mận tạo cảm gi&aacute;c ấm &aacute;p v&agrave; gợi cho kh&aacute;ch thưởng tr&agrave; về những điều tốt đẹp, về sức sống đang trỗi dậy của m&ugrave;a xu&acirc;n.</strong></p>\r\n<p style="list-style: none; margin: 0px 0px 10px; padding: 0px; color: rgb(0, 0, 0); font-family: arial; font-size: 14px; text-align: justify;">\r\n	Trong tiệc tr&agrave;, kh&aacute;ch cũng được mời d&ugrave;ng b&aacute;nh ngọt, trong đ&oacute; kh&ocirc;ng thể thiếu loại b&aacute;nh m&ocirc; phỏng h&igrave;nh d&aacute;ng của hoa mận.</p>\r\n<p style="list-style: none; margin: 0px 0px 10px; padding: 0px; color: rgb(0, 0, 0); font-family: arial; font-size: 14px; text-align: center;">\r\n	<a href="http://thvl.vn/wp-content/uploads/2013/12/plum8.jpg" style="list-style: none; text-decoration: none; margin: 0px; padding: 0px; color: rgb(0, 51, 153); border: 0px;"><img alt="" class="alignnone size-full wp-image-329460" height="306" src="http://thvl.vn/wp-content/uploads/2013/12/plum8.jpg" style="list-style: none; margin: 0px; padding: 0px; border: none;" width="450" /></a></p>\r\n<p style="list-style: none; margin: 0px 0px 10px; padding: 0px; color: rgb(0, 0, 0); font-family: arial; font-size: 14px; text-align: center;">\r\n	<img alt="" src="http://thvl.vn/wp-content/uploads/2013/12/plum18.jpg" style="list-style: none; margin: 0px; padding: 0px; width: 450px; height: 271px;" /></p>\r\n<p style="list-style: none; margin: 0px 0px 10px; padding: 0px; color: rgb(0, 0, 0); font-family: arial; font-size: 14px; text-align: center;">\r\n	<span style="list-style: none; margin: 0px; padding: 0px; font-size: 12px;"><span style="list-style: none; margin: 0px; padding: 0px; color: rgb(128, 0, 0);">B&aacute;nh ngọt m&ocirc; phỏng h&igrave;nh hoa mận</span></span></p>\r\n<p style="list-style: none; margin: 0px 0px 10px; padding: 0px; color: rgb(0, 0, 0); font-family: arial; font-size: 14px; text-align: justify;">\r\n	Kh&iacute; hậu của Nhật Bản c&oacute; 4 m&ugrave;a r&otilde; rệt, người Nhật d&ugrave;ng h&igrave;nh ảnh của một lo&agrave;i thực vật hay động vật l&agrave;m đại diện cho từng m&ugrave;a. Trang phục c&oacute; h&igrave;nh trang tr&iacute; hoa mận th&iacute;ch hợp để mặc v&agrave;o m&ugrave;a xu&acirc;n. Đối với những chiếc kimono nền đỏ, h&igrave;nh ảnh hoa mận trắng gi&uacute;p chiếc &aacute;o trở n&ecirc;n nổi bật. Ở đ&acirc;y, người ta kh&ocirc;ng vẽ hoa văn tr&ecirc;n &aacute;o m&agrave; sử dụng kỹ thuật th&ecirc;u thủ c&ocirc;ng.</p>\r\n<p style="list-style: none; margin: 0px 0px 10px; padding: 0px; color: rgb(0, 0, 0); font-family: arial; font-size: 14px; text-align: center;">\r\n	<img alt="" src="http://thvl.vn/wp-content/uploads/2013/12/plum10.jpg" style="list-style: none; margin: 0px; padding: 0px; width: 450px; height: 675px;" /></p>\r\n<p style="list-style: none; margin: 0px 0px 10px; padding: 0px; color: rgb(0, 0, 0); font-family: arial; font-size: 14px; text-align: center;">\r\n	<img alt="" src="http://thvl.vn/wp-content/uploads/2013/12/plum9.jpg" style="list-style: none; margin: 0px; padding: 0px; width: 450px; height: 299px;" /></p>\r\n<p style="list-style: none; margin: 0px 0px 10px; padding: 0px; color: rgb(0, 0, 0); font-family: arial; font-size: 14px; text-align: center;">\r\n	<span style="list-style: none; margin: 0px; padding: 0px; font-size: 12px;"><span style="list-style: none; margin: 0px; padding: 0px; color: rgb(128, 0, 0);">Trang phục v&agrave; phụ kiện d&agrave;nh cho nữ giới mang h&igrave;nh ảnh hoa mận</span></span></p>\r\n<p style="list-style: none; margin: 0px 0px 10px; padding: 0px; color: rgb(0, 0, 0); font-family: arial; font-size: 14px; text-align: center;">\r\n	<img alt="" src="http://thvl.vn/wp-content/uploads/2013/12/plum11.jpg" style="list-style: none; margin: 0px; padding: 0px; width: 450px; height: 336px;" /></p>\r\n<p style="list-style: none; margin: 0px 0px 10px; padding: 0px; color: rgb(0, 0, 0); font-family: arial; font-size: 14px; text-align: center;">\r\n	<span style="list-style: none; margin: 0px; padding: 0px; font-size: 12px;"><span style="list-style: none; margin: 0px; padding: 0px; color: rgb(128, 0, 0);">Hoa mận hiện diện tr&ecirc;n b&igrave;nh tr&agrave; bằng gốm</span></span></p>\r\n<p style="list-style: none; margin: 0px 0px 10px; padding: 0px; color: rgb(0, 0, 0); font-family: arial; font-size: 14px; text-align: justify;">\r\n	C&acirc;y mận được trồng tại Nhật Bản c&aacute;ch nay khoảng 2 ng&agrave;n năm, n&oacute; được du nhập từ Trung Quốc c&ugrave;ng với c&acirc;y l&uacute;a nước. Giới khoa học đ&atilde; x&aacute;c nhận điều n&agrave;y khi họ t&igrave;m thấy nhiều mẫu h&oacute;a thạch c&oacute; li&ecirc;n quan đến c&acirc;y mận tại c&aacute;c địa điểm khảo cổ tr&ecirc;n khắp Nhật Bản.</p>\r\n<p style="list-style: none; margin: 0px 0px 10px; padding: 0px; color: rgb(0, 0, 0); font-family: arial; font-size: 14px; text-align: justify;">\r\n	C&acirc;y mận được cho l&agrave; c&oacute; vai tr&ograve; quan trọng trong đời sống của người xưa, họ trồng ch&uacute;ng để l&agrave;m thực phẩm. Tr&aacute;i mận d&ugrave;ng để l&agrave;m gia vị v&agrave; l&agrave;m thuốc chữa bệnh. Người ta phơi kh&ocirc; những tr&aacute;i mận ch&iacute;n, bảo quản ch&uacute;ng cẩn thận để sử dụng dần trong năm. Mận kh&ocirc; c&oacute; t&aacute;c dụng tốt trong c&aacute;c b&agrave;i thuốc điều trị ho, giảm đau hay cảm mạo.</p>\r\n<p style="list-style: none; margin: 0px 0px 10px; padding: 0px; color: rgb(0, 0, 0); font-family: arial; font-size: 14px; text-align: center;">\r\n	<img alt="" src="http://thvl.vn/wp-content/uploads/2013/12/plum7.jpg" style="list-style: none; margin: 0px; padding: 0px; width: 450px; height: 301px;" /></p>\r\n<p style="list-style: none; margin: 0px 0px 10px; padding: 0px; color: rgb(0, 0, 0); font-family: arial; font-size: 14px; text-align: center;">\r\n	<span style="list-style: none; margin: 0px; padding: 0px; font-size: 12px;"><span style="list-style: none; margin: 0px; padding: 0px; color: rgb(128, 0, 0);">Tr&aacute;i mận được d&ugrave;ng l&agrave;m gia vị v&agrave; thuốc chữa bệnh</span></span></p>\r\n<p style="list-style: none; margin: 0px 0px 10px; padding: 0px; color: rgb(0, 0, 0); font-family: arial; font-size: 14px; text-align: justify;">\r\n	L&uacute;c đầu, hoa mận &iacute;t được mọi người để &yacute; đến. M&atilde;i đến thời Nara, thế kỷ thứ 8, lĩnh vực văn học, thơ ca của Nhật Bản ph&aacute;t triển mạnh mẽ trong giới qu&yacute; tộc, người ta bắt đầu cảm nhận vẻ đẹp của lo&agrave;i hoa n&agrave;y.</p>\r\n<p style="list-style: none; margin: 0px 0px 10px; padding: 0px; color: rgb(0, 0, 0); font-family: arial; font-size: 14px; text-align: justify;">\r\n	C&ugrave;ng với hoa đ&agrave;o, hoa c&uacute;c l&agrave; những lo&agrave;i hoa cao qu&yacute;, hoa mận trở th&agrave;nh đề t&agrave;i trong thi ca. C&aacute;c tuyển tập thơ nổi tiếng l&uacute;c bấy giờ tr&agrave;n ngập h&igrave;nh ảnh của lo&agrave;i hoa n&agrave;y.</p>\r\n<p style="list-style: none; margin: 0px 0px 10px; padding: 0px; color: rgb(0, 0, 0); font-family: arial; font-size: 14px; text-align: justify;">\r\n	Đến thời Chiến quốc Sengoku, tr&aacute;i mận một lần nữa l&agrave;m phong ph&uacute; cho nền ẩm thực Nhật Bản với sự ra đời của m&oacute;n mận muối umeboshi. Mận muối v&agrave; lương thực l&agrave; nguồn thức ăn quan trọng của c&aacute;c binh sĩ. Mận umeboshi bảo quản được l&acirc;u v&agrave; c&oacute; thể mang theo ra chiến trường d&agrave;i ng&agrave;y, ngo&agrave;i ra n&oacute; c&ograve;n c&oacute; t&aacute;c dụng chữa bệnh đối với những binh sĩ bị thương hay mắc phải bệnh tật.</p>\r\n<p style="list-style: none; margin: 0px 0px 10px; padding: 0px; color: rgb(0, 0, 0); font-family: arial; font-size: 14px; text-align: center;">\r\n	<img alt="" src="http://thvl.vn/wp-content/uploads/2013/12/plum12.jpg" style="list-style: none; margin: 0px; padding: 0px; width: 450px; height: 266px;" /></p>\r\n<p style="list-style: none; margin: 0px 0px 10px; padding: 0px; color: rgb(0, 0, 0); font-family: arial; font-size: 14px; text-align: center;">\r\n	<img alt="" src="http://thvl.vn/wp-content/uploads/2013/12/plum13.jpg" style="list-style: none; margin: 0px; padding: 0px; width: 450px; height: 338px;" /></p>\r\n<p style="list-style: none; margin: 0px 0px 10px; padding: 0px; color: rgb(0, 0, 0); font-family: arial; font-size: 14px; text-align: center;">\r\n	<img alt="" src="http://thvl.vn/wp-content/uploads/2013/12/plum16.jpg" style="list-style: none; margin: 0px; padding: 0px; width: 450px; height: 338px;" /></p>\r\n<p style="list-style: none; margin: 0px 0px 10px; padding: 0px; color: rgb(0, 0, 0); font-family: arial; font-size: 14px; text-align: center;">\r\n	<span style="list-style: none; margin: 0px; padding: 0px; font-size: 12px;"><span style="list-style: none; margin: 0px; padding: 0px; color: rgb(128, 0, 0);">M&oacute;n mận muối c&oacute; mặt trong tất cả mọi gia đ&igrave;nh Nhật Bản v&agrave; trở th&agrave;nh m&oacute;n ăn quen thuộc nhất</span></span></p>\r\n<p style="list-style: none; margin: 0px 0px 10px; padding: 0px; color: rgb(0, 0, 0); font-family: arial; font-size: 14px; text-align: justify;">\r\n	Kh&ocirc;ng chỉ l&agrave; thực phẩm hữu dụng trong thời chiến, mận muối umeboshi đ&atilde; được người d&acirc;n sử dụng rộng r&atilde;i sau n&agrave;y. Hiện nay, n&oacute; l&agrave; 1 trong những m&oacute;n ăn điển h&igrave;nh của Nhật Bản.</p>\r\n<p style="list-style: none; margin: 0px 0px 10px; padding: 0px; color: rgb(0, 0, 0); font-family: arial; font-size: 14px; text-align: justify;">\r\n	Thời kỳ nội chiến Sengoku kết th&uacute;c, người d&acirc;n Nhật Bản hưởng cuộc sống th&aacute;i b&igrave;nh dưới thời Edo. Ch&iacute;nh quyền Mạc Phủ l&uacute;c bấy giờ ra lệnh mở rộng c&aacute;c khu vườn trồng mận tr&ecirc;n khắp cả nước như một c&aacute;ch để t&ocirc;n vinh lo&agrave;i c&acirc;y n&agrave;y.</p>\r\n<p style="list-style: none; margin: 0px 0px 10px; padding: 0px; color: rgb(0, 0, 0); font-family: arial; font-size: 14px; text-align: justify;">\r\n	Mận muối trở th&agrave;nh m&oacute;n ăn phổ biến trong đời sống h&agrave;ng ng&agrave;y của người Nhật, cả đối với tầng lớp thượng lưu lẫn d&acirc;n thường. Sau chiến tranh thế giới thứ 2, h&igrave;nh ảnh quả mận muối được xem như biểu tượng của tinh thần Nhật Bản. Học sinh được r&egrave;n luyện &yacute; ch&iacute; vượt kh&oacute; bằng những bữa cơm trắng ăn k&egrave;m chỉ với 1 quả mận muối.</p>\r\n<p style="list-style: none; margin: 0px 0px 10px; padding: 0px; color: rgb(0, 0, 0); font-family: arial; font-size: 14px; text-align: center;">\r\n	<img alt="" src="http://thvl.vn/wp-content/uploads/2013/12/plum14.jpg" style="list-style: none; margin: 0px; padding: 0px; width: 450px; height: 338px;" /></p>\r\n<p style="list-style: none; margin: 0px 0px 10px; padding: 0px; color: rgb(0, 0, 0); font-family: arial; font-size: 14px; text-align: center;">\r\n	<img alt="" src="http://thvl.vn/wp-content/uploads/2013/12/plum15.jpg" style="list-style: none; margin: 0px; padding: 0px; width: 450px; height: 320px;" /></p>\r\n<p style="list-style: none; margin: 0px 0px 10px; padding: 0px; color: rgb(0, 0, 0); font-family: arial; font-size: 14px; text-align: center;">\r\n	<span style="list-style: none; margin: 0px; padding: 0px; font-size: 12px;"><span style="list-style: none; margin: 0px; padding: 0px; color: rgb(128, 0, 0);">Những bữa cơm trắng đi k&egrave;m với 1 quả mận muối l&agrave; c&aacute;ch m&agrave; người Nhật</span></span></p>\r\n<p style="list-style: none; margin: 0px 0px 10px; padding: 0px; color: rgb(0, 0, 0); font-family: arial; font-size: 14px; text-align: center;">\r\n	<span style="list-style: none; margin: 0px; padding: 0px; font-size: 12px;"><span style="list-style: none; margin: 0px; padding: 0px; color: rgb(128, 0, 0);">r&egrave;n luyện tinh thần v&agrave; &yacute; ch&iacute; vượt kh&oacute;</span></span></p>\r\n<p style="list-style: none; margin: 0px 0px 10px; padding: 0px; color: rgb(0, 0, 0); font-family: arial; font-size: 14px; text-align: justify;">\r\n	Nhiều người c&ograve;n trang tr&iacute; hộp cơm trưa của m&igrave;nh bằng c&aacute;ch đặt một quả mận muối umeboshi m&agrave;u đỏ l&ecirc;n giữa phần cơm trắng để thể hiện h&igrave;nh ảnh quốc kỳ của nước Nhật.<br style="list-style: none; margin: 0px; padding: 0px;" />\r\n	Ng&agrave;y nay, người Nhật c&oacute; nhiều sự lựa chọn trong việc ăn uống khi c&aacute;c m&oacute;n ăn phương T&acirc;y du nhập mạnh mẽ v&agrave;o nước n&agrave;y. Tuy nhi&ecirc;n, trong bữa ăn của hầu hết c&aacute;c gia đ&igrave;nh, những quả mặn muối c&oacute; vị chua lu&ocirc;n l&agrave; sự ưu ti&ecirc;n để hỗ trợ ti&ecirc;u h&oacute;a.</p>\r\n<p style="list-style: none; margin: 0px 0px 10px; padding: 0px; color: rgb(0, 0, 0); font-family: arial; font-size: 14px; text-align: justify;">\r\n	<span style="list-style: none; margin: 0px; padding: 0px; color: rgb(0, 0, 128);">Thanh T&acirc;m</span></p>\r\n', 'Hoa mận ở xứ Phù Tang – Phần 2', 0, 'hoa-man-o-xu-phu-tang-phan-2-10'),
(11, 11, 'Nhiên Như - Quảng Tánh', '2013-12-06 10:44:00', '<p style="list-style: none; margin: 0px 0px 10px; padding: 0px; color: rgb(0, 0, 0); font-family: arial; font-size: 14px; text-align: justify;">\r\n	<strong style="list-style: none; margin: 0px; padding: 0px;">Nhờ trời ph&uacute; cho vẻ ngo&agrave;i hấp dẫn, lo&agrave;i bọ ngựa hoa lan sinh trưởng tự nhi&ecirc;n trong c&aacute;c khu rừng nhiệt đới ở Đ&ocirc;ng Nam &Aacute; c&oacute; sức hấp dẫn với c&ocirc;n tr&ugrave;ng thụ phấn c&ograve;n hơn cả những b&ocirc;ng hoa thực sự.</strong></p>\r\n<p style="list-style: none; margin: 0px 0px 10px; padding: 0px; color: rgb(0, 0, 0); font-family: arial; font-size: 14px; text-align: center;">\r\n	<a href="http://thvl.vn/wp-content/uploads/2013/12/Hymenopus-coronatus1.jpg" style="list-style: none; text-decoration: none; margin: 0px; padding: 0px; color: rgb(0, 51, 153); border: 0px;"><img alt="" class="alignnone size-full wp-image-329587" height="298" src="http://thvl.vn/wp-content/uploads/2013/12/Hymenopus-coronatus1.jpg" style="list-style: none; margin: 0px; padding: 0px; border: none;" width="450" /></a></p>\r\n<p style="list-style: none; margin: 0px 0px 10px; padding: 0px; color: rgb(0, 0, 0); font-family: arial; font-size: 14px; text-align: center;">\r\n	<img alt="" src="http://thvl.vn/wp-content/uploads/2013/12/Hymenopus-coronatus2.jpg" style="list-style: none; margin: 0px; padding: 0px; width: 450px; height: 675px;" /></p>\r\n<p style="list-style: none; margin: 0px 0px 10px; padding: 0px; color: rgb(0, 0, 0); font-family: arial; font-size: 14px; text-align: justify;">\r\n	Lo&agrave;i bọ ngựa hoa lan Hymenopus coronatus tr&ocirc;ng rất giống một b&ocirc;ng hoa, với những chiếc ch&acirc;n c&oacute; h&igrave;nh dạng của c&aacute;nh hoa. Theo c&aacute;c nh&agrave; nghi&ecirc;n cứu, vẻ ngo&agrave;i đặc biệt n&agrave;y đ&atilde; gi&uacute;p bọ ngựa hoa lan kh&ocirc;ng chỉ ẩn n&aacute;u m&agrave; c&ograve;n c&oacute; thể dẫn dụ c&aacute;c con mồi.&nbsp;</p>\r\n<p style="list-style: none; margin: 0px 0px 10px; padding: 0px; color: rgb(0, 0, 0); font-family: arial; font-size: 14px; text-align: center;">\r\n	<img alt="" src="http://thvl.vn/wp-content/uploads/2013/12/Hymenopus-coronatus3.jpg" style="list-style: none; margin: 0px; padding: 0px; width: 450px; height: 302px;" /></p>\r\n<p style="list-style: none; margin: 0px 0px 10px; padding: 0px; color: rgb(0, 0, 0); font-family: arial; font-size: 14px; text-align: center;">\r\n	<img alt="" src="http://thvl.vn/wp-content/uploads/2013/12/Hymenopus-coronatus4.jpg" style="list-style: none; margin: 0px; padding: 0px; width: 450px; height: 308px;" /></p>\r\n<p style="list-style: none; margin: 0px 0px 10px; padding: 0px; color: rgb(0, 0, 0); font-family: arial; font-size: 14px; text-align: justify;">\r\n	Trong thực tế, bọ ngựa hoa lan Hymenopus coronatus thậm ch&iacute; c&ograve;n c&oacute; sức h&uacute;t m&atilde;nh liệt với c&aacute;c c&ocirc;n tr&ugrave;ng hơn một số b&ocirc;ng hoa thực sự, v&igrave; lớp &aacute;o ngo&agrave;i v&ocirc; c&ugrave;ng y&ecirc;u kiều. Nhờ t&agrave;i h&oacute;a trang bậc thầy, bọ ngựa hoa lan c&oacute; thể dễ d&agrave;ng t&oacute;m bắt v&agrave; ăn thịt những động vật đ&oacute;ng vai tr&ograve; thụ phấn cho hoa, chẳng hạn như bướm&hellip;.</p>\r\n<p style="list-style: none; margin: 0px 0px 10px; padding: 0px; color: rgb(0, 0, 0); font-family: arial; font-size: 14px; text-align: center;">\r\n	<img alt="" src="http://thvl.vn/wp-content/uploads/2013/12/Hymenopus-coronatus5.jpg" style="list-style: none; margin: 0px; padding: 0px; width: 450px; height: 300px;" /></p>\r\n<p style="list-style: none; margin: 0px 0px 10px; padding: 0px; color: rgb(0, 0, 0); font-family: arial; font-size: 14px; text-align: center;">\r\n	<img alt="" src="http://thvl.vn/wp-content/uploads/2013/12/Hymenopus-coronatus8.jpg" style="list-style: none; margin: 0px; padding: 0px; width: 450px; height: 377px;" /></p>\r\n<p style="list-style: none; margin: 0px 0px 10px; padding: 0px; color: rgb(0, 0, 0); font-family: arial; font-size: 14px; text-align: center;">\r\n	<img alt="" src="http://thvl.vn/wp-content/uploads/2013/12/Hymenopus-coronatus10.jpg" style="list-style: none; margin: 0px; padding: 0px; width: 450px; height: 300px;" /></p>\r\n<p style="list-style: none; margin: 0px 0px 10px; padding: 0px; color: rgb(0, 0, 0); font-family: arial; font-size: 14px; text-align: center;">\r\n	<img alt="" src="http://thvl.vn/wp-content/uploads/2013/12/Hymenopus-coronatus6.jpg" style="list-style: none; margin: 0px; padding: 0px; width: 450px; height: 300px;" /></p>\r\n<p style="list-style: none; margin: 0px 0px 10px; padding: 0px; color: rgb(0, 0, 0); font-family: arial; font-size: 14px; text-align: center;">\r\n	<img alt="" src="http://thvl.vn/wp-content/uploads/2013/12/Hymenopus-coronatus7.jpg" style="list-style: none; margin: 0px; padding: 0px; width: 450px; height: 345px;" /></p>\r\n<p style="list-style: none; margin: 0px 0px 10px; padding: 0px; color: rgb(0, 0, 0); font-family: arial; font-size: 14px; text-align: center;">\r\n	<img alt="" src="http://thvl.vn/wp-content/uploads/2013/12/Hymenopus-coronatus9.jpg" style="list-style: none; margin: 0px; padding: 0px; width: 450px; height: 300px;" /></p>\r\n<p style="list-style: none; margin: 0px 0px 10px; padding: 0px; color: rgb(0, 0, 0); font-family: arial; font-size: 14px; text-align: justify;">\r\n	<span style="list-style: none; margin: 0px; padding: 0px; color: rgb(0, 0, 128);">Theo&nbsp;<strong style="list-style: none; margin: 0px; padding: 0px;">VNN</strong></span></p>\r\n', 'Bọ ngựa độc đáo hóa trang thành hoa để săn mồi', 0, 'bo-ngua-doc-dao-hoa-trang-thanh-hoa-de-san-moi-11'),
(19, 11, 'Theo soha', '2013-12-06 10:42:00', '<p style="list-style: none; margin: 0px 0px 10px; padding: 0px; color: rgb(0, 0, 0); font-family: arial; font-size: 14px; text-align: justify;">\r\n	<strong style="list-style: none; margin: 0px; padding: 0px;">S&ocirc;ng Niger l&agrave; một trong những con s&ocirc;ng quan trọng ở ph&iacute;a T&acirc;y Ch&acirc;u Phi với chiều d&agrave;i 4470 km. Khu vực sinh sống của bộ tộc Dogon nằm c&aacute;ch lưu vực s&ocirc;ng Niger kh&ocirc;ng xa lắm. Giống như c&aacute;c tộc người kh&aacute;c, họ từng sở hữu một nền văn h&oacute;a truyền thống đậm đ&agrave; bản sắc với v&ocirc; số c&acirc;u chuyện thần thoại th&uacute; vị. Từ xưa, những c&acirc;u chuyện thần thoại của bộ tộc Dogon kh&ocirc;ng hề chịu sự ảnh hưởng từ c&aacute;c nền văn minh kh&aacute;c, nhờ vậy ch&uacute;ng lu&ocirc;n giữ được n&eacute;t ri&ecirc;ng v&agrave; m&agrave;u sắc b&iacute; ẩn.</strong></p>\r\n<div style="list-style: none; margin: 0px; padding: 0px; color: rgb(0, 0, 0); font-family: arial; font-size: 14px;">\r\n	<span style="list-style: none; margin: 0px; padding: 0px; text-align: justify;">Trong thần thoại của bộ tộc Dogon c&oacute; nhắc đến một thần rắn t&ecirc;n l&agrave; Libi v&agrave; họ tin rằng tổ ti&ecirc;n nguy&ecirc;n thủy từng l&agrave; một con rắn thần tinh khiết về linh hồn v&agrave; thể x&aacute;c.&nbsp;Mỗi ng&ocirc;i l&agrave;ng Dogon đều phụng thờ thần rắn Libi. Cứ mỗi 3 năm, người ta tiến h&agrave;nh cắt da qui đầu cho b&eacute; trai ở độ tuổi 15 &ndash; 16. Nghi thức n&agrave;y được tổ chức kh&aacute; long trọng tại nơi đ&acirc;y.&nbsp;</span></div>\r\n<div style="list-style: none; margin: 0px; padding: 0px; color: rgb(0, 0, 0); font-family: arial; font-size: 14px;">\r\n	&nbsp;</div>\r\n<div style="list-style: none; margin: 0px; padding: 0px; color: rgb(0, 0, 0); font-family: arial; font-size: 14px;">\r\n	<span style="list-style: none; margin: 0px; padding: 0px; text-align: justify;">V&aacute;ch đ&aacute; sa thạch l&agrave; nơi lưu giữ nhiều bức tranh trừu tượng của tổ ti&ecirc;n bộ tộc Dogon, trong đ&oacute; nổi bật nhất l&agrave; h&igrave;nh ảnh những chiếc mặt nạ.</span></div>\r\n<p style="list-style: none; margin: 0px 0px 10px; padding: 0px; color: rgb(0, 0, 0); font-family: arial; font-size: 14px; text-align: justify;">\r\n	Với chiều d&agrave;i 150km, cao hơn 500m, v&aacute;ch đ&aacute; Bandiagara l&agrave; một trong những v&aacute;ch đ&aacute; h&ugrave;ng vĩ nhất ở ch&acirc;u Phi. N&oacute; trải d&agrave;i đến tận khu vực sinh sống của bộ tộc Dogon. Tuy v&aacute;ch đ&aacute; Bandiagara thuộc quốc gia Mali, nhưng nhiều cư d&acirc;n địa phương vẫn xem n&oacute; thuộc v&ugrave;ng đất của bộ tộc Dogon.&nbsp;V&aacute;ch đ&aacute; Bandiagara nằm ở v&ugrave;ng ph&iacute;a Nam sa mạc Sahara, đ&acirc;y l&agrave; một khu vực kh&ocirc; cằn với lượng mưa trung b&igrave;nh mỗi năm chỉ khoảng 580 mm. Theo nhiều người, khi sống tr&ecirc;n những v&aacute;ch đ&aacute; sa thạch kh&ocirc; hạn v&agrave; khắc nghiệt như thế, người Dogon sẽ kh&oacute; c&oacute; thể tồn tại. Nhưng thực tế, nền kinh tế của bộ tộc n&agrave;y lại kh&aacute; ph&aacute;t triển, dựa v&agrave;o c&aacute;c hoạt động n&ocirc;ng nghiệp. Người Dogon rất giỏi trong việc canh t&aacute;c, họ chủ yếu trồng c&acirc;y k&ecirc;, l&uacute;a, đậu, c&acirc;y me chua, thuốc l&aacute; v&agrave; h&agrave;nh. B&ecirc;n cạnh đ&oacute;, họ cũng chăn nu&ocirc;i th&ecirc;m cừu, d&ecirc;, b&ograve; v&agrave; một số loại gia cầm.&nbsp;</p>\r\n<p style="list-style: none; margin: 0px 0px 10px; padding: 0px; color: rgb(0, 0, 0); font-family: arial; font-size: 14px; text-align: justify;">\r\n	Cũng như nhiều bộ tộc kh&aacute;c ở lục địa đen, bộ tộc Dogon c&oacute; v&ocirc; số nghi lễ, hoạt động giải tr&iacute; đặc sắc thu h&uacute;t sự quan t&acirc;m của nhiều nh&agrave; nghi&ecirc;n cứu văn h&oacute;a tr&ecirc;n thế giới. Trong đ&oacute; c&oacute; điệu m&uacute;a truyền thống với những chiếc mặt nạ gỗ v&ocirc; c&ugrave;ng ấn tượng v&agrave; kỳ b&iacute;. Khi một người n&agrave;o đ&oacute; của l&agrave;ng qua đời, người Dogon đeo những chiếc mặt nạ gỗ nhảy m&uacute;a trong nh&agrave; người chết. Bởi họ tin rằng linh hồn sẽ hợp nhất với điệu m&uacute;a v&agrave; rời khỏi cơ thể để t&igrave;m kiếm một th&acirc;n thể kh&aacute;c nhập v&agrave;o.</p>\r\n<p style="list-style: none; margin: 0px 0px 10px; padding: 0px; color: rgb(0, 0, 0); font-family: arial; font-size: 14px; text-align: justify;">\r\n	Bộ tộc Dogon lưu truyền nhiều c&acirc;u chuyện thần thoại th&uacute; vị, trong đ&oacute; c&oacute; chuyện một phụ nữ đ&aacute;nh bại một vị thần trong rừng s&acirc;u v&agrave; được sở hữu một chiếc mặt nạ linh hồn. Một nh&oacute;m thanh ni&ecirc;n nọ đ&atilde; đ&aacute;nh cắp chiếc mặt nạ đ&oacute;, rồi th&agrave;nh lập một tổ chức b&iacute; mật v&agrave; chỉ thu nhận những phụ nữ v&agrave;o nh&oacute;m v&agrave; cho họ đeo mặt nạ. Từ đ&oacute;, nhiều cuộc chiến gi&agrave;nh lại chiếc mặt nạ linh hồn đ&atilde; kh&ocirc;ng ngừng xảy ra.</p>\r\n<p style="list-style: none; margin: 0px 0px 10px; padding: 0px; color: rgb(0, 0, 0); font-family: arial; font-size: 14px; text-align: center;">\r\n	<img alt="" src="http://thvl.vn/wp-content/uploads/2013/10/Dogon4.jpg" style="list-style: none; margin: 0px; padding: 0px; width: 450px; height: 338px;" /></p>\r\n<p style="list-style: none; margin: 0px 0px 10px; padding: 0px; color: rgb(0, 0, 0); font-family: arial; font-size: 14px; text-align: center;">\r\n	<img alt="" src="http://thvl.vn/wp-content/uploads/2013/10/Dogon6.jpg" style="list-style: none; margin: 0px; padding: 0px; width: 450px; height: 300px;" /></p>\r\n<p style="list-style: none; margin: 0px 0px 10px; padding: 0px; color: rgb(0, 0, 0); font-family: arial; font-size: 14px; text-align: center;">\r\n	<img alt="" src="http://thvl.vn/wp-content/uploads/2013/10/Dogon8.jpg" style="list-style: none; margin: 0px; padding: 0px; width: 450px; height: 300px;" /></p>\r\n<p style="list-style: none; margin: 0px 0px 10px; padding: 0px; color: rgb(0, 0, 0); font-family: arial; font-size: 14px; text-align: justify;">\r\n	Những chiếc mặt nạ gỗ kh&ocirc;ng thể thiếu trong c&aacute;c lễ hội đầy m&agrave;u sắc ở v&ugrave;ng đ&aacute; sa thạch n&agrave;y, trong đ&oacute; nổi tiếng nhất phải kể đến nghi lễ Sigui. Sự kiện n&agrave;y cứ 60 năm được diễn ra một lần. Người Dogon tổ chức hoạt động quan trọng n&agrave;y để tưởng nhớ v&agrave; biết ơn nguồn gốc tổ ti&ecirc;n của họ.&nbsp;</p>\r\n<p style="list-style: none; margin: 0px 0px 10px; padding: 0px; color: rgb(0, 0, 0); font-family: arial; font-size: 14px; text-align: justify;">\r\n	Cũng theo thần thoại Dogon, nghi lễ Sigui c&oacute; li&ecirc;n hệ mật thiết với sao Sirius trong ch&ograve;m sao Đại Khuyển. Họ tin rằng c&oacute; hai ng&ocirc;i sao Sirius song sinh c&ugrave;ng tồn tại v&agrave; kh&ocirc;ng thể nh&igrave;n thấy bằng mắt thường. V&agrave;o những năm đầu thế kỷ 20, nhiều nh&agrave; thi&ecirc;n văn học tr&ecirc;n thế giới đ&atilde; ph&aacute;t hiện ra sao Sirius kh&ocirc;ng phải là ng&ocirc;i sao đơn lẻ m&agrave; thực ch&acirc;́t đó là m&ocirc;̣t h&ecirc;̣ thống sao k&eacute;p là Sirius A v&agrave; Sirius B. Người thời nay rất kh&acirc;m phục khả năng hiểu biết kỳ lạ về thi&ecirc;n văn, vũ trụ của người Dogon xưa.</p>\r\n<p style="list-style: none; margin: 0px 0px 10px; padding: 0px; color: rgb(0, 0, 0); font-family: arial; font-size: 14px; text-align: justify;">\r\n	Mặt nạ được đục đẽo từ c&agrave;nh của một th&acirc;n c&acirc;y to được thiết kế theo một đường thẳng, nhằm thể hiện sự kết nối &aacute;nh mặt trời với tr&aacute;i đất. Mặt nạ của người Dogon c&oacute; hơn 70 loại kh&aacute;c nhau, chẳng hạn như mặt nạ h&igrave;nh chữ nhật, mặt nạ thẳng đứng hay mặt nạ c&oacute; mắt h&igrave;nh tam gi&aacute;c với hai chiếc sừng d&agrave;i&hellip;</p>\r\n<p style="list-style: none; margin: 0px 0px 10px; padding: 0px; color: rgb(0, 0, 0); font-family: arial; font-size: 14px; text-align: center;">\r\n	<img alt="" src="http://thvl.vn/wp-content/uploads/2013/10/Dogon7.jpg" style="list-style: none; margin: 0px; padding: 0px; width: 450px; height: 300px;" /></p>\r\n<p style="list-style: none; margin: 0px 0px 10px; padding: 0px; color: rgb(0, 0, 0); font-family: arial; font-size: 14px; text-align: justify;">\r\n	Mỗi loại mặt nạ đ&atilde; t&aacute;i hiện sinh động nguồn gốc v&agrave; lịch sử của bộ tộc Dogon. Động t&aacute;c m&uacute;a mặt nạ của họ nhanh v&agrave; gi&agrave;u cảm x&uacute;c hơn bất cứ điệu m&uacute;a n&agrave;o. Mặt nạ của người Dogon c&ograve;n mang &yacute; nghĩa linh thi&ecirc;ng tương tự như nghi thức m&uacute;a mặt nạ. Đặc biệt, khi kết th&uacute;c m&ugrave;a lễ hội v&agrave; c&aacute;c nghi lễ, những chiếc mặt nạ được bảo quản v&agrave; cất giữ cẩn thận tr&ecirc;n những hang động nằm t&iacute;t cao tr&ecirc;n v&aacute;ch đ&aacute;, tr&aacute;nh để người kh&aacute;c nh&igrave;n thấy hay chạm tay v&agrave;o.</p>\r\n<p style="list-style: none; margin: 0px 0px 10px; padding: 0px; color: rgb(0, 0, 0); font-family: arial; font-size: 14px; text-align: justify;">\r\n	Điệu m&uacute;a với mặt nạ gỗ thường do một nh&oacute;m thanh ni&ecirc;n trai tr&aacute;ng của bộ tộc Dogon đảm nhận. Những người lớn tuổi trong l&agrave;ng phụ tr&aacute;ch việc truyền dạy những điệu m&uacute;a truyền thống cho c&aacute;c thế hệ trẻ.</p>\r\n<p style="list-style: none; margin: 0px 0px 10px; padding: 0px; color: rgb(0, 0, 0); font-family: arial; font-size: 14px; text-align: justify;">\r\n	Trong c&aacute;c lễ hội truyền thống hay nghi lễ li&ecirc;n quan đến n&ocirc;ng nghiệp như cầu mưa, cầu cho m&ugrave;a m&agrave;ng bội thu, những thanh ni&ecirc;n sẽ đeo mặt nạ nhảy m&uacute;a c&ograve;n những cụ gi&agrave; lớn tuổi biểu diễn nhạc cụ v&agrave; ca h&aacute;t, tạo n&ecirc;n một bầu kh&ocirc;ng kh&iacute; v&ocirc; c&ugrave;ng s&ocirc;i động.</p>\r\n<p style="list-style: none; margin: 0px 0px 10px; padding: 0px; color: rgb(0, 0, 0); font-family: arial; font-size: 14px; text-align: justify;">\r\n	Khu vực sinh sống của bộ tộc Dogon được chia l&agrave;m ba v&ugrave;ng địa l&yacute; kh&aacute;c nhau l&agrave; đồng bằng, cao nguy&ecirc;n v&agrave; tr&ecirc;n c&aacute;c v&aacute;ch đ&aacute; cheo leo. Cả bộ tộc c&oacute; khoảng v&agrave;i trăm ng&ocirc;i l&agrave;ng, mỗi l&agrave;ng c&oacute; khoảng 500 cư d&acirc;n. Tuy sống ở ba v&ugrave;ng địa l&yacute; kh&aacute;c nhau nhưng c&aacute;c ng&ocirc;i l&agrave;ng ở đ&acirc;y c&oacute; mối li&ecirc;n kết chặt chẽ với nhau.</p>\r\n<p style="list-style: none; margin: 0px 0px 10px; padding: 0px; color: rgb(0, 0, 0); font-family: arial; font-size: 14px; text-align: justify;">\r\n	Nh&agrave; của người Dogon được x&acirc;y đấp bằng một loại b&ugrave;n đặc qu&aacute;nh. Ch&uacute;ng c&oacute; kiến tr&uacute;c rất độc đ&aacute;o với m&aacute;i l&aacute;, nh&igrave;n như những t&uacute;p lều tranh mọc san s&aacute;t nhau. Ph&iacute;a trước mỗi nh&agrave; c&oacute; đặt một số bức tượng được chạm trỗ kh&aacute; tinh xảo. Ch&uacute;ng đ&atilde; phần n&agrave;o thể hiện được cuộc sống, hoạt động nghệ thuật, sự kh&eacute;o l&eacute;o của nghệ nh&acirc;n Dogon.</p>\r\n<p style="list-style: none; margin: 0px 0px 10px; padding: 0px; color: rgb(0, 0, 0); font-family: arial; font-size: 14px; text-align: center;">\r\n	<a href="http://thvl.vn/wp-content/uploads/2013/10/Dogon1.jpg" style="list-style: none; text-decoration: none; margin: 0px; padding: 0px; color: rgb(0, 51, 153); border: 0px;"><img alt="" class="alignnone size-full wp-image-312366" height="338" src="http://thvl.vn/wp-content/uploads/2013/10/Dogon1.jpg" style="list-style: none; margin: 0px; padding: 0px; border: none;" width="450" /></a></p>\r\n<p style="list-style: none; margin: 0px 0px 10px; padding: 0px; color: rgb(0, 0, 0); font-family: arial; font-size: 14px; text-align: center;">\r\n	<img alt="" src="http://thvl.vn/wp-content/uploads/2013/10/Dogon2.jpg" style="list-style: none; margin: 0px; padding: 0px; width: 450px; height: 338px;" /></p>\r\n<p style="list-style: none; margin: 0px 0px 10px; padding: 0px; color: rgb(0, 0, 0); font-family: arial; font-size: 14px; text-align: center;">\r\n	<img alt="" src="http://thvl.vn/wp-content/uploads/2013/10/Dogon3.jpg" style="list-style: none; margin: 0px; padding: 0px; width: 450px; height: 338px;" /></p>\r\n<p style="list-style: none; margin: 0px 0px 10px; padding: 0px; color: rgb(0, 0, 0); font-family: arial; font-size: 14px; text-align: justify;">\r\n	Ph&aacute;p sư được gọi l&agrave; Hogon, l&agrave; người c&oacute; quyền h&agrave;nh tối cao trong văn h&oacute;a người Dogon. Nh&agrave; của ph&aacute;p sư được x&acirc;y dựng đẹp v&agrave; ki&ecirc;n cố hơn so với c&aacute;c ng&ocirc;i nh&agrave; kh&aacute;c trong l&agrave;ng. Ph&aacute;p sư l&agrave; người được chọn lựa từ c&aacute;c vị trưởng bối c&oacute; uy t&iacute;n của l&agrave;ng. Theo quy định, sau khi trở th&agrave;nh Hogon, người được chọn chỉ mặt trang phục m&agrave;u trắng, kh&ocirc;ng được cạo r&acirc;u, tắm gội v&agrave; kh&ocirc;ng tiếp x&uacute;c với mọi người trong khoảng v&agrave;i th&aacute;ng.</p>\r\n<p style="list-style: none; margin: 0px 0px 10px; padding: 0px; color: rgb(0, 0, 0); font-family: arial; font-size: 14px; text-align: justify;">\r\n	Ph&aacute;p sư c&oacute; quyền h&agrave;nh cao nhất ở mỗi ng&ocirc;i l&agrave;ng v&agrave; c&oacute; vai tr&ograve; như một người cầm c&acirc;n nảy mực mang lại sự c&ocirc;ng bằng giữa c&aacute;c th&agrave;nh vi&ecirc;n trong bộ tộc. &Ocirc;ng ấy được cho l&agrave; người c&oacute; khả năng cầu mưa, gọi gi&oacute; khi m&ugrave;a m&agrave;ng kh&ocirc; hạn.</p>\r\n<p style="list-style: none; margin: 0px 0px 10px; padding: 0px; color: rgb(0, 0, 0); font-family: arial; font-size: 14px; text-align: justify;">\r\n	Ng&agrave;y nay, nhiều du kh&aacute;ch đến đ&acirc;y lu&ocirc;n tự hỏi tại sao người Dogon phải x&acirc;y dựng nh&agrave; ở những vị tr&iacute; ch&ecirc;nh v&ecirc;nh, cao ch&oacute;t v&oacute;t như thế v&agrave; l&agrave;m c&aacute;ch n&agrave;o m&agrave; họ l&agrave;m được điều đ&oacute;. Nh&igrave;n từ xa, những ng&ocirc;i nh&agrave; của người d&acirc;n nơi đ&acirc;y như một bức tranh đi&ecirc;u khắc tuyệt đẹp tr&ecirc;n nền đ&aacute; sa thạch. Từng bị c&ocirc; lập khỏi thế giới văn minh do nằm trọn vẹn tr&ecirc;n một cao nguy&ecirc;n đ&aacute; hẻo l&aacute;nh, nhưng x&atilde; hội, kiến tr&uacute;c nh&agrave; cửa v&agrave; cuộc sống tinh thần của cư d&acirc;n ở đ&acirc;y vẫn ph&aacute;t triển một c&aacute;ch độc đ&aacute;o.</p>\r\n<p style="list-style: none; margin: 0px 0px 10px; padding: 0px; color: rgb(0, 0, 0); font-family: arial; font-size: 14px; text-align: justify;">\r\n	Theo nhiều nh&agrave; nghi&ecirc;n cứu văn h&oacute;a tr&ecirc;n thế giới, c&aacute;c loại mặt nạ của bộ tộc Dogon tuy nay kh&ocirc;ng c&ograve;n mang t&iacute;nh chất linh li&ecirc;ng như xưa, nhưng những điều b&iacute; ẩn sau chiếc mặt nạ truyền thống của người Dogon vẫn lu&ocirc;n l&agrave; một đề t&agrave;i nghi&ecirc;n cứu th&uacute; vị đối với c&aacute;c nh&agrave; khoa học v&agrave; n&oacute; đ&atilde; trở th&agrave;nh một phần quan trọng trong đời sống văn h&oacute;a của nh&acirc;n loại.</p>\r\n<p style="list-style: none; margin: 0px 0px 10px; padding: 0px; color: rgb(0, 0, 0); font-family: arial; font-size: 14px; text-align: justify;">\r\n	<span style="list-style: none; margin: 0px; padding: 0px; color: rgb(0, 0, 128);">Hồng Mẫn</span></p>\r\n', 'Những chiếc mặt nạ truyền thống – Phần 1', 0, 'nhung-chiec-mat-na-truyen-thong-phan-1-19'),
(20, 11, 'Theo The Daily Star', '2013-12-06 10:31:00', '<script type=''text/javascript'' src=''http://thvl.vn/swfobject.js''></script>\r\n<center>\r\n	<p style="list-style: none; margin: 0px 0px 10px; padding: 0px; color: rgb(0, 0, 0); font-family: arial; font-size: 14px;">\r\n		C&aacute;c trường hợp vi phạm chủ yếu l&agrave; vận chuyển, kinh doanh thuốc l&aacute; ngoại, đường c&aacute;t, bia nhập lậu; vi phạm về ghi nh&atilde;n h&agrave;ng h&oacute;a của mỹ phẩm, vải sợi, thực phẩm. Ngo&agrave;i ra, c&ograve;n c&oacute; một số vụ vi phạm về ni&ecirc;m yết gi&aacute; h&agrave;ng h&oacute;a, sử dụng c&acirc;n đồng hồ c&oacute; tem kiểm định hết hạn;&hellip;</p>\r\n	<p style="list-style: none; margin: 0px 0px 10px; padding: 0px; color: rgb(0, 0, 0); font-family: arial; font-size: 14px;">\r\n		&nbsp;</p>\r\n	<p>\r\n		&nbsp;</p>\r\n	<center style="list-style: none; margin: 0px; padding: 0px; color: rgb(0, 0, 0); font-family: arial; font-size: 14px;">\r\n		<p>\r\n			<iframe height="412" scrolling="no" src="http://thvl.vn/jwplayer/?l=http://media1.thvl.vn/Media_upload/Video/ThoiSu/2013/BatTlau.mp4&amp;i=&amp;w=514&amp;h=412&amp;a=0" style="list-style: none; margin: 0px; padding: 0px; border-width: 0px; overflow: hidden;" width="514"></iframe></p>\r\n	</center>\r\n</center>\r\n', 'Chi cục Quản lý thị trường tỉnh lập biên bản xử lý 52 vụ vi phạm', 0, 'chi-cuc-quan-ly-thi-truong-tinh-lap-bien-ban-xu-ly-52-vu-vi-pham-20');

-- --------------------------------------------------------

--
-- Table structure for table `ktth_positions`
--

CREATE TABLE IF NOT EXISTS `ktth_positions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(25) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `count` int(11) DEFAULT NULL,
  `note` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `ktth_positions`
--

INSERT INTO `ktth_positions` (`id`, `name`, `count`, `note`) VALUES
(1, 'Tổ Kỹ Thuật Dựng', 12, ''),
(2, 'Tổ Kỹ Thuật AT& AS', 8, ''),
(3, 'Tổ Đồ họa', 8, ''),
(4, 'Tổ Trưởng', 3, ''),
(5, 'Lãnh Đạo Phòng', 2, '');

-- --------------------------------------------------------

--
-- Table structure for table `ktth_report`
--

CREATE TABLE IF NOT EXISTS `ktth_report` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `iduser` int(11) NOT NULL,
  `name` varchar(120) NOT NULL,
  `date_start` datetime NOT NULL,
  `date_end` datetime NOT NULL,
  `description` longtext,
  PRIMARY KEY (`id`),
  KEY `ktth_report_1` (`iduser`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `ktth_report`
--

INSERT INTO `ktth_report` (`id`, `iduser`, `name`, `date_start`, `date_end`, `description`) VALUES
(1, 25, 'Tháng 11', '2013-11-01 00:00:00', '2013-11-30 00:00:00', ''),
(3, 25, 'Tháng 10', '2013-10-01 08:20:01', '2013-10-31 08:20:05', ''),
(4, 25, 'Tháng 09', '2013-09-01 00:00:00', '2013-09-30 00:00:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `ktth_salarydaily`
--

CREATE TABLE IF NOT EXISTS `ktth_salarydaily` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_category` int(11) NOT NULL,
  `id_employee` int(11) NOT NULL,
  `content` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `count` int(11) DEFAULT NULL,
  `date_work` date NOT NULL,
  `date_note` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `note` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `ktth_salarydaily_1` (`id_category`),
  KEY `ktth_salarydaily_2` (`id_employee`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9084 ;

--
-- Dumping data for table `ktth_salarydaily`
--

INSERT INTO `ktth_salarydaily` (`id`, `id_category`, `id_employee`, `content`, `count`, `date_work`, `date_note`, `note`) VALUES
(9081, 30, 30, '', 1, '2013-11-22', '2013-11-22 11:13:13', ''),
(9082, 1, 25, '', 1, '2013-11-22', '2013-11-22 13:07:21', ''),
(9083, 1, 25, '<p style="text-align: justify;">\r\n	<strong>ch&uacute;ng ta c&ugrave;ng x&acirc;y dựng web n&agrave;o!</strong></p>\r\n', 1, '2013-11-26', '2013-11-26 17:36:00', '');

-- --------------------------------------------------------

--
-- Table structure for table `ktth_user`
--

CREATE TABLE IF NOT EXISTS `ktth_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_position` int(11) NOT NULL,
  `user` varchar(50) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `gender` tinyint(1) DEFAULT NULL,
  `note` varchar(50) DEFAULT NULL,
  `type` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `ktth_user_1` (`id_position`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=35 ;

--
-- Dumping data for table `ktth_user`
--

INSERT INTO `ktth_user` (`id`, `id_position`, `user`, `pass`, `gender`, `note`, `type`) VALUES
(1, 5, 'quangphuong', 'VUGPCGuEjarmkXKQ1UJIKzXr2kFT/m49du3IxqUrAfQ=', 1, 'Nguyễn Quang Phương', 4),
(2, 4, 'thanhhung', 'VUGPCGuEjarmkXKQ1UJIKzXr2kFT/m49du3IxqUrAfQ=', 1, 'Nguyễn Thành Hưng', 4),
(3, 1, 'minhphuong', 'VUGPCGuEjarmkXKQ1UJIKzXr2kFT/m49du3IxqUrAfQ=', 0, 'Trương Thị Minh Phương', 3),
(4, 1, 'vanteo', 'VUGPCGuEjarmkXKQ1UJIKzXr2kFT/m49du3IxqUrAfQ=', 1, 'Lê Văn Tèo', 0),
(5, 1, 'haiho', 'VUGPCGuEjarmkXKQ1UJIKzXr2kFT/m49du3IxqUrAfQ=', 1, 'Lưu Hải Hồ', 0),
(6, 1, 'thanhnhan', 'VUGPCGuEjarmkXKQ1UJIKzXr2kFT/m49du3IxqUrAfQ=', 1, 'Nguyễn Thanh Nhàn', 0),
(7, 1, 'thenhan', 'VUGPCGuEjarmkXKQ1UJIKzXr2kFT/m49du3IxqUrAfQ=', 1, 'Nguyễn Thế Nhân', 0),
(8, 1, 'hoangphong', 'VUGPCGuEjarmkXKQ1UJIKzXr2kFT/m49du3IxqUrAfQ=', 1, 'Bùi Hoàng Phong', 0),
(9, 1, 'tuhieu', 'VUGPCGuEjarmkXKQ1UJIKzXr2kFT/m49du3IxqUrAfQ=', 1, 'Trần Tứ Hiếu', 0),
(10, 1, 'phiyen', 'VUGPCGuEjarmkXKQ1UJIKzXr2kFT/m49du3IxqUrAfQ=', 0, 'Ngô Phi Yến', 0),
(11, 1, 'quangnhut', 'VUGPCGuEjarmkXKQ1UJIKzXr2kFT/m49du3IxqUrAfQ=', 1, 'Nguyễn Quang Nhựt', 0),
(12, 1, 'giaqui', 'VUGPCGuEjarmkXKQ1UJIKzXr2kFT/m49du3IxqUrAfQ=', 1, 'Ngô Gia Quí', 0),
(13, 1, 'minhduc', 'VUGPCGuEjarmkXKQ1UJIKzXr2kFT/m49du3IxqUrAfQ=', 1, 'Nguyễn Minh Đức', 0),
(14, 1, 'thanhphong', 'VUGPCGuEjarmkXKQ1UJIKzXr2kFT/m49du3IxqUrAfQ=', 1, 'Trần Thanh Phong', 0),
(15, 1, 'minhkhoa', 'VUGPCGuEjarmkXKQ1UJIKzXr2kFT/m49du3IxqUrAfQ=', 1, 'Nguyễn Minh Khoa', 0),
(16, 3, 'dangkhoa', 'VUGPCGuEjarmkXKQ1UJIKzXr2kFT/m49du3IxqUrAfQ=', 1, 'Nguyễn Đăng Khoa', 3),
(17, 3, 'haidang', 'VUGPCGuEjarmkXKQ1UJIKzXr2kFT/m49du3IxqUrAfQ=', 1, 'Mai Hoàng Hải Đăng', 0),
(18, 3, 'kinhluan', 'VUGPCGuEjarmkXKQ1UJIKzXr2kFT/m49du3IxqUrAfQ=', 1, 'Bùi Điều Kinh Luân', 0),
(19, 3, 'hoanglam', 'VUGPCGuEjarmkXKQ1UJIKzXr2kFT/m49du3IxqUrAfQ=', 1, 'Nguyễn Hoàng Lâm', 0),
(20, 3, 'bichkieu', 'VUGPCGuEjarmkXKQ1UJIKzXr2kFT/m49du3IxqUrAfQ=', 0, 'Châu Ngọc Bích Kiều', 0),
(21, 3, 'quochuy', 'VUGPCGuEjarmkXKQ1UJIKzXr2kFT/m49du3IxqUrAfQ=', 1, 'Lê Thanh Quốc Huy', 0),
(22, 2, 'quocviet', 'VUGPCGuEjarmkXKQ1UJIKzXr2kFT/m49du3IxqUrAfQ=', 1, 'Võ Quốc Việt', 3),
(23, 1, 'ngochai', 'VUGPCGuEjarmkXKQ1UJIKzXr2kFT/m49du3IxqUrAfQ=', 1, 'Hà Ngọc Hải', 0),
(24, 2, 'thanhdo', 'VUGPCGuEjarmkXKQ1UJIKzXr2kFT/m49du3IxqUrAfQ=', 1, 'Nguyễn Thành Đô', 0),
(25, 2, 'conheocon25', 'W2piBckBVxM8svkretVULjvsEnRQhi3qUtz7QPHpkS0=', 1, 'Nguyễn Thanh Bảo', 4),
(26, 2, 'nguyenduc', 'VUGPCGuEjarmkXKQ1UJIKzXr2kFT/m49du3IxqUrAfQ=', 1, 'Nguyễn Thái Đức', 0),
(27, 2, 'nguyenphuong', 'VUGPCGuEjarmkXKQ1UJIKzXr2kFT/m49du3IxqUrAfQ=', 0, 'Lê Nguyên Phương', 0),
(28, 2, 'tiendung', 'VUGPCGuEjarmkXKQ1UJIKzXr2kFT/m49du3IxqUrAfQ=', 1, 'Lê Tiến Dũng', 0),
(29, 2, 'ngoctho', 'VUGPCGuEjarmkXKQ1UJIKzXr2kFT/m49du3IxqUrAfQ=', 1, 'Bùi Văn Ngọc Thơ', 0),
(30, 1, 'nhattan', 'VUGPCGuEjarmkXKQ1UJIKzXr2kFT/m49du3IxqUrAfQ=', 1, 'Nguyễn Nhật Tân', 0),
(31, 3, 'tolan', 'VUGPCGuEjarmkXKQ1UJIKzXr2kFT/m49du3IxqUrAfQ=', 0, 'Trần Thị Tố Lan', 0),
(32, 2, 'huugiao', 'VUGPCGuEjarmkXKQ1UJIKzXr2kFT/m49du3IxqUrAfQ=', 1, 'Võ Hữu Giao', 0),
(33, 1, 'tronghuynh', 'VUGPCGuEjarmkXKQ1UJIKzXr2kFT/m49du3IxqUrAfQ=', 1, 'Lê Nguyễn Trọng Huỳnh', 0),
(34, 3, 'thanhquang', 'VUGPCGuEjarmkXKQ1UJIKzXr2kFT/m49du3IxqUrAfQ=', 1, 'Phạm Thanh Quang', 0);

-- --------------------------------------------------------

--
-- Table structure for table `ktth_video`
--

CREATE TABLE IF NOT EXISTS `ktth_video` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(125) COLLATE utf8_unicode_ci NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `url` varchar(125) COLLATE utf8_unicode_ci NOT NULL,
  `note` varchar(125) COLLATE utf8_unicode_ci NOT NULL,
  `count` int(11) NOT NULL,
  `key` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=25 ;

--
-- Dumping data for table `ktth_video`
--

INSERT INTO `ktth_video` (`id`, `name`, `time`, `url`, `note`, `count`, `key`) VALUES
(12, '3Ds Max 2009 hướng dẫn cơ bản', '2013-10-28 11:14:59', 'http://www.youtube.com/embed/ljhY_Wca_Bc', '', 68, '3ds-max-2009-huong-dan-co-ban-12'),
(15, 'Hướng dẫn 3ds Max Bài 2 Cơ bản 3ds Max', '2013-10-28 11:17:20', 'http://www.youtube.com/embed/EZRqvTVexW4', '', 39, 'huong-dan-3ds-max-bai-2-co-ban-3ds-max-15'),
(16, '1.Mười Đều Tâm Niệm', '2012-11-16 23:52:50', 'http://www.youtube.com/embed/61Lg9EXMros', '', 25, '1muoi-deu-tam-niem-16'),
(17, '2. 15.Hoan Hỷ Đắt Thiền, Buồn Phiền Sanh Bệnh', '2012-11-16 23:52:50', 'http://www.youtube.com/embed/QRkww94txys', '', 51, '2-15hoan-hy-dat-thien-buon-phien-sanh-benh-17'),
(18, '5.Tám Công Năng Của Thập Chú', '2012-11-19 11:50:54', 'http://www.youtube.com/embed/UGRSrdWyhgo', '', 44, '5tam-cong-nang-cua-thap-chu-18'),
(19, '2.Tạo Phước Trong Mùa An Cư', '2012-11-16 23:52:50', 'http://www.youtube.com/embed/HMCb_Zlp8Os', '', 30, '2tao-phuoc-trong-mua-an-cu-19'),
(20, '3.Bốn Trạng Thái Tâm Với Bốn Quả Táo', '2012-11-16 23:52:50', 'http://www.youtube.com/embed/gWQvq5Xe_oA', '', 21, '3bon-trang-thai-tam-voi-bon-qua-tao-20'),
(21, '4.Sức Mạnh Của Tâm', '2012-11-16 23:52:50', 'http://www.youtube.com/embed/ehtdpxg--5s', '', 22, '4suc-manh-cua-tam-21'),
(22, '5.Rồng - Một Trong Tứ Linh', '2012-11-16 23:52:50', 'http://www.youtube.com/embed/11oDTJoJeNA', '', 20, '5rong-mot-trong-tu-linh-22'),
(23, '6.9 Pháp Chướng Đạo', '2012-11-16 23:52:50', 'http://www.youtube.com/embed/wniG6JS_Lr4', '', 31, '69-phap-chuong-dao-23'),
(24, '7.Những Phương Pháp Chúng Đạo', '2012-11-16 23:52:50', 'http://www.youtube.com/embed/LByoCiHNt5U', '', 21, '7nhung-phuong-phap-chung-dao-24');

-- --------------------------------------------------------

--
-- Table structure for table `ktth_video_library`
--

CREATE TABLE IF NOT EXISTS `ktth_video_library` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_category` int(11) NOT NULL,
  `id_video` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `ktth_video_library_1` (`id_category`),
  KEY `ktth_video_library_2` (`id_video`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `ktth_video_library`
--

INSERT INTO `ktth_video_library` (`id`, `id_category`, `id_video`) VALUES
(1, 1, 12),
(2, 1, 15);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `ktth_ask`
--
ALTER TABLE `ktth_ask`
  ADD CONSTRAINT `ktth_ask_1` FOREIGN KEY (`id_category`) REFERENCES `ktth_category_ask` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `ktth_category`
--
ALTER TABLE `ktth_category`
  ADD CONSTRAINT `ktth_category_1` FOREIGN KEY (`id_position`) REFERENCES `ktth_positions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `ktth_news`
--
ALTER TABLE `ktth_news`
  ADD CONSTRAINT `ktth_news_1` FOREIGN KEY (`id_category`) REFERENCES `ktth_category_news` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `ktth_report`
--
ALTER TABLE `ktth_report`
  ADD CONSTRAINT `ktth_report_1` FOREIGN KEY (`iduser`) REFERENCES `ktth_user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `ktth_salarydaily`
--
ALTER TABLE `ktth_salarydaily`
  ADD CONSTRAINT `ktth_salarydaily_1` FOREIGN KEY (`id_category`) REFERENCES `ktth_category` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `ktth_salarydaily_2` FOREIGN KEY (`id_employee`) REFERENCES `ktth_user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `ktth_user`
--
ALTER TABLE `ktth_user`
  ADD CONSTRAINT `ktth_user_1` FOREIGN KEY (`id_position`) REFERENCES `ktth_positions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `ktth_video_library`
--
ALTER TABLE `ktth_video_library`
  ADD CONSTRAINT `ktth_video_library_1` FOREIGN KEY (`id_category`) REFERENCES `ktth_category_video` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `ktth_video_library_2` FOREIGN KEY (`id_video`) REFERENCES `ktth_video` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
