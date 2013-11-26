-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 26, 2013 at 03:53 AM
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
  PRIMARY KEY (`id`)
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
(5, 'GUEST_VISIT', '1156');

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5910 ;

--
-- Dumping data for table `ktth_guest`
--

INSERT INTO `ktth_guest` (`id`, `ip`, `entry_time`, `exit_time`, `agent`) VALUES
(5909, '127.0.0.1', '1385373129', '1385376729', '127.0.0.1');

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
(7, 12, 'Nhiên Như - Quảng Tánh', '2012-10-28 17:09:57', '<p>\r\n	&nbsp;</p>\r\n<h1 align="left" class="Title" style="font-family: ''Times New Roman''; font-size: 14pt; margin-top: 0px; color: rgb(0, 0, 0); background-color: rgb(244, 245, 246);">\r\n	Đại lễ cầu si&ecirc;u nạn nh&acirc;n chết v&igrave; tai nạn giao th&ocirc;ng</h1>\r\n<h2 class="Lead" style="font-family: ''Times New Roman''; font-size: 11pt; color: rgb(95, 95, 95); background-color: rgb(244, 245, 246);">\r\n	S&aacute;ng nay, h&agrave;ng ngh&igrave;n tăng ni phật tử c&ugrave;ng tụ hội về Học viện Phật gi&aacute;o Việt Nam để tụng kinh, l&agrave;m lễ cầu si&ecirc;u cho những nạn nh&acirc;n tử vong v&igrave; tai nạn giao th&ocirc;ng.</h2>\r\n<table border="0" cellpadding="3" cellspacing="0" style="color: rgb(0, 0, 0); font-family: ''Times New Roman''; font-size: 15.454545021057129px; background-color: rgb(244, 245, 246);" width="100%">\r\n	<tbody>\r\n		<tr>\r\n			<td class="Image" style="font-family: Arial; font-size: 8.5pt; vertical-align: top;">\r\n				<img height="336" src="http://vnexpress.net/Files/Subject/3b/bd/e4/f3/le_cau_sieu_tngt_(7).jpg" width="495" /></td>\r\n		</tr>\r\n		<tr>\r\n			<td class="Image" style="font-family: Arial; font-size: 8.5pt; vertical-align: top;">\r\n				Đại lễ cầu si&ecirc;u cho nạn nh&acirc;n tử vong v&igrave; tai nạn giao th&ocirc;ng do Ủy ban An to&agrave;n giao th&ocirc;ng Quốc gia phối hợp với Gi&aacute;o hội Phật gi&aacute;o Việt Nam tổ chức v&agrave;o s&aacute;ng 10/11, tại Học Viện Phật gi&aacute;o Việt Nam. Đ&acirc;y l&agrave; lần đầu ti&ecirc;n cũng l&agrave; lễ cầu si&ecirc;u lớn nhất từ trước tới nay.</td>\r\n		</tr>\r\n		<tr>\r\n			<td class="BreakLine" style="font-family: Arial; font-size: 1pt; vertical-align: top;">\r\n				&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td class="Image" style="font-family: Arial; font-size: 8.5pt; vertical-align: top;">\r\n				<img height="315" src="http://vnexpress.net/Files/Subject/3b/bd/e4/f3/le_cau_sieu_tngt_(10).jpg" width="495" /></td>\r\n		</tr>\r\n		<tr>\r\n			<td class="Image" style="font-family: Arial; font-size: 8.5pt; vertical-align: top;">\r\n				H&ograve;a thượng Th&iacute;ch Thanh Nhiễu - Ph&oacute; chủ tịch thường trực Hội đồng Trị sự Gi&aacute;o hội Phật gi&aacute;o cho rằng, đại lễ cầu si&ecirc;u kh&ocirc;ng chỉ mang &yacute; nghĩa cầu nguyện cho những linh hồn được si&ecirc;u tho&aacute;t, chia sẻ nỗi đau, mất m&aacute;t với gia đ&igrave;nh nạn nh&acirc;n m&agrave; c&ograve;n nhắc nhở c&aacute;c phật tử, to&agrave;n x&atilde; hội tr&acirc;n trọng cuộc sống v&agrave; c&ugrave;ng chung tay với cộng đồng hướng đến mục ti&ecirc;u giảm thiểu tai nạn giao th&ocirc;ng.</td>\r\n		</tr>\r\n		<tr>\r\n			<td class="Image" style="font-family: Arial; font-size: 8.5pt; vertical-align: top;">\r\n				<img height="330" src="http://vnexpress.net/Files/Subject/3b/bd/e4/f3/le_cau_sieu_tngt_(3).jpg" width="495" /></td>\r\n		</tr>\r\n		<tr>\r\n			<td class="Image" style="font-family: Arial; font-size: 8.5pt; vertical-align: top;">\r\n				H&agrave;ng ngh&igrave;n phật tử tụ hội từ sớm để thực hiện những nghi thức cầu si&ecirc;u.</td>\r\n		</tr>\r\n		<tr>\r\n			<td class="Image" style="font-family: Arial; font-size: 8.5pt; vertical-align: top;">\r\n				<img height="323" src="http://vnexpress.net/Files/Subject/3b/bd/e4/f3/le_cau_sieu_tngt_(4).jpg" width="495" /></td>\r\n		</tr>\r\n		<tr>\r\n			<td class="Image" style="font-family: Arial; font-size: 8.5pt; vertical-align: top;">\r\n				Ban kinh sư Học viện Phật gi&aacute;o Việt Nam thực hiện c&aacute;c nghi lễ phật đại khoa, tiếp ch&acirc;n linh, triệu ch&acirc;n linh, cơm ch&acirc;n linh&hellip; cho c&aacute;c nạn nh&acirc;n xấu số.</td>\r\n		</tr>\r\n		<tr>\r\n			<td class="Image" style="font-family: Arial; font-size: 8.5pt; vertical-align: top;">\r\n				<img height="342" src="http://vnexpress.net/Files/Subject/3b/bd/e4/f3/le_cau_sieu_tngt_(2).jpg" width="495" /></td>\r\n		</tr>\r\n		<tr>\r\n			<td class="Image" style="font-family: Arial; font-size: 8.5pt; vertical-align: top;">\r\n				Nhiều phật tử th&agrave;nh t&acirc;m niệm phật, chia sẻ nỗi đau với những gia đ&igrave;nh c&oacute; nạn nh&acirc;n tử vong v&igrave; tai nạn giao th&ocirc;ng.</td>\r\n		</tr>\r\n		<tr>\r\n			<td class="Image" style="font-family: Arial; font-size: 8.5pt; vertical-align: top;">\r\n				<img height="323" src="http://vnexpress.net/Files/Subject/3b/bd/e4/f3/le_cau_sieu_tngt_(6).jpg" width="495" /></td>\r\n		</tr>\r\n		<tr>\r\n			<td class="Image" style="font-family: Arial; font-size: 8.5pt; vertical-align: top;">\r\n				Kh&ocirc;ng &iacute;t người c&oacute; người th&acirc;n, bạn b&egrave; chết v&igrave; tai nạn giao th&ocirc;ng c&ugrave;ng l&agrave;m lễ cầu nguyện mong cho người th&acirc;n của m&igrave;nh sớm được si&ecirc;u tho&aacute;t.</td>\r\n		</tr>\r\n		<tr>\r\n			<td class="Image" style="font-family: Arial; font-size: 8.5pt; vertical-align: top;">\r\n				<img height="311" src="http://vnexpress.net/Files/Subject/3b/bd/e4/f3/le_cau_sieu_tngt_(1).jpg" width="495" /></td>\r\n		</tr>\r\n		<tr>\r\n			<td class="Image" style="font-family: Arial; font-size: 8.5pt; vertical-align: top;">\r\n				C&aacute;c chư vị tăng ni cũng c&ugrave;ng cầu nguyện.</td>\r\n		</tr>\r\n		<tr>\r\n			<td class="Image" style="font-family: Arial; font-size: 8.5pt; vertical-align: top;">\r\n				<img height="321" src="http://vnexpress.net/Files/Subject/3b/bd/e4/f3/le_cau_sieu_tngt.jpg" width="495" /></td>\r\n		</tr>\r\n		<tr>\r\n			<td class="Image" style="font-family: Arial; font-size: 8.5pt; vertical-align: top;">\r\n				Tham dự đại lễ cầu si&ecirc;u, Bộ trưởng GTVT Đinh La Thăng cho biết, mỗi ng&agrave;y c&oacute; hơn 30 người bị tử vong v&igrave; tai nạn giao th&ocirc;ng v&agrave; h&agrave;ng trăm người kh&aacute;c bị thương, đ&oacute; l&agrave; những tổn thất v&ocirc; c&ugrave;ng to lớn đối với gia đ&igrave;nh c&aacute;c nạn nh&acirc;n v&agrave; to&agrave;n x&atilde; hội.</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n<p align="right" class="Normal" style="font-family: ''Times New Roman''; font-size: 15.454545021057129px; color: rgb(0, 0, 0); background-color: rgb(244, 245, 246);">\r\n	<strong>B&aacute; Đ&ocirc;</strong></p>\r\n', 'Cầu siêu nạn nhân tử vong do tai nạn giao thông', 0, 'cau-sieu-nan-nhan-tu-vong-do-tai-nan-giao-thong-7'),
(10, 11, 'Nhiên Như - Quảng Tánh', '2012-10-29 02:00:00', '<p>\r\n	&nbsp;</p>\r\n<div class="fon13 mt1" style="margin: 7px 0px 0px; padding: 0px; outline: none; border: 0px; font-weight: 700; font-size: 12pt; line-height: 20px; font-family: ''Times New Roman''; color: rgb(51, 51, 51);">\r\n	Tại TP.HCM, b&ecirc;n cạnh c&aacute;c hoạt động văn nghệ ch&agrave;o mừng Vu lan diễn ra từ đầu th&aacute;ng 8 đến nay, h&ocirc;m qua (13-8) tức ng&agrave;y 14 th&aacute;ng Bảy &acirc;m lịch, rất nhiều ch&ugrave;a, tự viện đ&atilde; tổ chức mừng đại lễ Vu lan.</div>\r\n<div class="fon16" style="margin: 0px; padding: 0px; outline: none; border: 0px; font-family: ''Times New Roman''; font-size: 12pt; color: rgb(51, 51, 51); line-height: 20px;">\r\n	<div id="contentdetail" style="margin: 0px; padding: 0px; outline: none; border: 0px;">\r\n		<p>\r\n			&nbsp;</p>\r\n		<p align="justify">\r\n			Đ&acirc;y kh&ocirc;ng chỉ l&agrave; dịp c&uacute;ng dường thể hiện hiếu hạnh của những người Phật tử, Vu lan tại TP.HCM c&ograve;n đ&aacute;nh dấu những hoạt động từ thiện, cầu nguyện&hellip;</p>\r\n		<p align="justify">\r\n			Trong ng&agrave;y h&ocirc;m qua, ch&ugrave;a Vĩnh Nghi&ecirc;m (TP.HCM) đ&atilde; ph&aacute;t 1.300 phần qu&agrave; (mỗi phần gồm 10 kg gạo v&agrave; một th&ugrave;ng m&igrave; g&oacute;i) cho c&aacute;c hộ ngh&egrave;o tr&ecirc;n địa b&agrave;n TP.HCM. Kh&ocirc;ng chỉ vậy, Phật tử, người ngh&egrave;o&hellip; đến lễ Phật đều được thưởng thức b&uacute;n ri&ecirc;u chay miễn ph&iacute;. Trong ba ng&agrave;y từ 12 đến 14-7 &acirc;m lịch, ch&ugrave;a Vĩnh Nghi&ecirc;m cũng tổ chức đại lễ trai đ&agrave;n chẩn tế cầu si&ecirc;u cho c&aacute;c thai nhi. Đại lễ l&agrave; dịp để c&aacute;c bậc đ&atilde; l&agrave;m cha l&agrave;m mẹ hoặc sẽ l&agrave;m cha l&agrave;m mẹ c&oacute; cơ duy&ecirc;n t&igrave;m hiểu s&acirc;u xa hơn &yacute; nghĩa của t&igrave;nh y&ecirc;u thương v&agrave; mầm sống để x&acirc;y dựng một cuộc sống đạo đức, l&agrave;nh mạnh, tr&agrave;n đầy y&ecirc;u thương v&agrave; hạnh ph&uacute;c.</p>\r\n		<p align="center">\r\n			<i><img _fl="" src="http://phapluattp.vcmedia.vn/Images/Uploaded/Share/2011/08/13/8-Ancom.jpg" style="margin: 5px;" width="360" /></i></p>\r\n		<p align="center">\r\n			<i>C&aacute;c Phật tử đang d&ugrave;ng bữa&nbsp; tại ch&ugrave;a Vĩnh Nghi&ecirc;m s&aacute;ng 13-8. Ảnh: HTD</i></p>\r\n		<p align="center">\r\n			<i><img _fl="" src="http://phapluattp.vcmedia.vn/Images/Uploaded/Share/2011/08/13/8-box1.jpg" style="margin: 5px;" width="360" /></i></p>\r\n		<p align="center">\r\n			<i>C&aacute;c tăng tụng kinh Địa tạng trong đại lễ trai đ&agrave;n chẩn tế cầu si&ecirc;u tại ch&ugrave;a Vĩnh Nghi&ecirc;m chiều 13-8. Ảnh: HỒNG &Uacute;T</i></p>\r\n		<p align="center">\r\n			<i><img _fl="" src="http://phapluattp.vcmedia.vn/Images/Uploaded/Share/2011/08/13/8-chot.jpg" style="margin: 5px;" width="360" /></i></p>\r\n		<p align="center">\r\n			<i>H&agrave;ng ng&agrave;n Phật tử đ&atilde; đến Khu du lịch văn h&oacute;a Suối Ti&ecirc;n để tham gia đại lễ Vu lan. Ảnh: HỒNG &Uacute;T</i></p>\r\n		<p align="justify">\r\n			Trước đ&oacute;, s&aacute;ng 12-8 (tức 13 th&aacute;ng Bảy &acirc;m lịch), Gi&aacute;o hội Phật gi&aacute;o tỉnh Thừa Thi&ecirc;n-Huế đ&atilde; tổ chức lễ c&uacute;ng dường y, Tự tứ, Vu lan v&agrave; Trai tăng c&uacute;ng dường tại ch&ugrave;a Từ Đ&agrave;m. Buổi lễ đặt dưới sự chứng minh của H&ograve;a thượng Th&iacute;ch Đức Phương, Ph&oacute; Chủ tịch Hội đồng Trị sự, Trưởng ban Trị sự Tỉnh hội Phật gi&aacute;o Thừa Thi&ecirc;n-Huế c&ugrave;ng chư t&ocirc;n đức tăng, ni. Sau lễ c&uacute;ng dường y, khoảng 800 tăng, ni v&agrave; hơn 1.000 Phật tử tham dự nghi lễ Vu lan tại ch&aacute;nh điện ch&ugrave;a Từ Đ&agrave;m. H&ograve;a thượng Th&iacute;ch Khế Chơn đ&atilde; n&oacute;i l&ecirc;n &yacute; nghĩa của ng&agrave;y lễ Vu lan v&agrave; ảnh hưởng của ng&agrave;y lễ với truyền thống hiếu đạo của người Việt Nam n&oacute;i chung v&agrave; người Huế n&oacute;i ri&ecirc;ng. Tối c&ugrave;ng ng&agrave;y, tại Trung t&acirc;m Văn h&oacute;a Phật gi&aacute;o Liễu Qu&aacute;n Huế, lễ c&agrave;i hoa hồng v&agrave; văn nghệ K&iacute;nh mừng Vu lan đ&atilde; được tổ chức trong t&acirc;m niệm b&aacute;o đ&aacute;p ơn nghĩa sinh th&agrave;nh.</p>\r\n		<p align="justify">\r\n			H&ocirc;m nay (14-8), tức rằm th&aacute;ng Bảy &acirc;m lịch, ng&agrave;y lễ ch&iacute;nh của đại lễ Vu lan. Tất cả c&aacute;c ch&ugrave;a, tự viện đều c&oacute; tổ chức lễ. Ri&ecirc;ng tại ch&ugrave;a Hoằng Ph&aacute;p, hằng năm đều tập trung h&agrave;ng ng&agrave;n Phật tử về c&ugrave;ng d&acirc;ng c&uacute;ng, thực hiện nghi thức c&agrave;i hoa hồng, tụng kinh Vu lan&hellip;</p>\r\n		<p align="right">\r\n			<b>QUỲNH TRANG</b></p>\r\n	</div>\r\n</div>\r\n<p>\r\n	&nbsp;</p>\r\n', 'Vu lan: Mùa hiếu hạnh, từ thiện', 0, 'vu-lan-mua-hieu-hanh-tu-thien-10'),
(11, 11, 'Nhiên Như - Quảng Tánh', '2012-10-29 02:00:00', '<p>\r\n	&nbsp;</p>\r\n<p style="margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; color: rgb(0, 0, 0); font-family: Verdana, Tahoma; font-size: 14px; text-align: justify;">\r\n	<b style="margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline;">Hội nghị đại biểu thống nhất Phật gi&aacute;o Việt Nam</b></p>\r\n<p align="justify" style="margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; color: rgb(0, 0, 0); font-family: Verdana, Tahoma; font-size: 14px; text-align: justify;">\r\n	Diễn ra từ ng&agrave;y 4 đến 7-11-1981, tại hội trường ch&ugrave;a Qu&aacute;n Sứ, 73 Qu&aacute;n Sứ, H&agrave; Nội, hội tụ 165 đại biểu của 9 tổ chức, hệ ph&aacute;i (Hội Phật gi&aacute;o Thống nhất Việt Nam, Gi&aacute;o hội Phật gi&aacute;o Việt Nam Thống nhất, Gi&aacute;o hội Phật gi&aacute;o Cổ truyền Việt Nam, Ban Li&ecirc;n lạc Phật gi&aacute;o Y&ecirc;u nước TP.Hồ Ch&iacute; Minh, Gi&aacute;o hội Tăng-gi&agrave; Nguy&ecirc;n thủy Việt Nam, Hội Sư s&atilde;i Y&ecirc;u nước miền T&acirc;y Nam Bộ, Gi&aacute;o hội Tăng-gi&agrave; Khất sĩ Việt Nam, Gi&aacute;o hội Phật gi&aacute;o Thi&ecirc;n Thai gi&aacute;o Qu&aacute;n t&ocirc;ng, Hội Phật học Nam Việt).</p>\r\n<p align="center" style="margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; color: rgb(0, 0, 0); font-family: Verdana, Tahoma; font-size: 14px;">\r\n	<img alt="1a.jpg" border="0" height="361" src="http://vinhnghiemvn.com/UserImages/2012/11/20/1/1a.jpg" style="border: 0px; margin: 0px; padding: 0px; outline: 0px; vertical-align: baseline;" width="550" /><br />\r\n	Chủ tọa đo&agrave;n</p>\r\n<p align="justify" style="margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; color: rgb(0, 0, 0); font-family: Verdana, Tahoma; font-size: 14px; text-align: justify;">\r\n	Hội nghị đ&atilde; cung thỉnh Trưởng l&atilde;o H&ograve;a thượng Th&iacute;ch Đức Nhuận v&agrave;o ng&ocirc;i vị Ph&aacute;p chủ; Trưởng l&atilde;o H&ograve;a thượng Th&iacute;ch Đ&ocirc;n Hậu, Đệ nhất Ph&oacute; Ph&aacute;p chủ ki&ecirc;m Gi&aacute;m luật Hội đồng Chứng minh; suy cử Trưởng l&atilde;o H&ograve;a thượng Th&iacute;ch Tr&iacute; Thủ l&agrave;m Chủ tịch Hội đồng Trị sự GHPGVN.</p>\r\n<p align="justify" style="margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; color: rgb(0, 0, 0); font-family: Verdana, Tahoma; font-size: 14px; text-align: justify;">\r\n	Hội nghị đ&atilde; th&ocirc;ng qua đường hướng h&agrave;nh đạo l&agrave; &ldquo;Đạo ph&aacute;p - D&acirc;n tộc - Chủ nghĩa x&atilde; hội&rdquo;, th&ocirc;ng qua Hiến chương GHPGVN gồm Lời n&oacute;i đầu, 11 chương v&agrave; 46 điều.&nbsp;</p>\r\n<p align="center" style="margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; color: rgb(0, 0, 0); font-family: Verdana, Tahoma; font-size: 14px;">\r\n	<img alt="1d.jpg" border="0" height="333" src="http://vinhnghiemvn.com/UserImages/2012/11/20/1/1d.jpg" style="border: 0px; margin: 0px; padding: 0px; outline: 0px; vertical-align: baseline;" width="550" /><br />\r\n	Đại biểu chụp h&igrave;nh lưu niệm trước ch&aacute;nh điện ch&ugrave;a Qu&aacute;n Sứ</p>\r\n<p align="justify" style="margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; color: rgb(0, 0, 0); font-family: Verdana, Tahoma; font-size: 14px; text-align: justify;">\r\n	Nhiệm kỳ 1, Gi&aacute;o hội c&oacute; 6 ban, ng&agrave;nh thuộc Hội đồng Trị sự (Ban Tăng sự, Ban Gi&aacute;o dục Tăng Ni, Ban Hướng dẫn nam nữ Phật tử, Ban Hoằng ph&aacute;p, Ban Nghi lễ, Ban Văn h&oacute;a). Cũng tại Hội nghị n&agrave;y, Trường Cao cấp Phật học VN, cơ sở 1 (sau n&agrave;y l&agrave; Học viện Phật gi&aacute;o VN tại H&agrave; Nội) được th&agrave;nh lập, tiếp theo Trường Cao cấp Phật học VN cơ sở 2 (sau n&agrave;y l&agrave; Học viện Phật gi&aacute;o VN tại TP.Hồ Ch&iacute; Minh) được th&agrave;nh lập năm 1984.</p>\r\n<p align="justify" style="margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; color: rgb(0, 0, 0); font-family: Verdana, Tahoma; font-size: 14px; text-align: justify;">\r\n	Hội nghị lịch sử n&agrave;y được xem l&agrave; Đại hội đại biểu Phật gi&aacute;o to&agrave;n quốc lần thứ 1, nhiệm kỳ 1981-1987 của GHPGVN.</p>\r\n<p style="margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; color: rgb(0, 0, 0); font-family: Verdana, Tahoma; font-size: 14px; text-align: justify;">\r\n	<b style="margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline;">Đại hội đại biểu Phật gi&aacute;o to&agrave;n quốc lần thứ II, nhiệm kỳ 1987-1992</b></p>\r\n<p align="justify" style="margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; color: rgb(0, 0, 0); font-family: Verdana, Tahoma; font-size: 14px; text-align: justify;">\r\n	Diễn ra c&aacute;c ng&agrave;y 28, 29-10-1987 tại Cung Văn h&oacute;a Hữu nghị Việt X&ocirc;, H&agrave; Nội; th&agrave;nh phần: 200 đại biểu.</p>\r\n<p align="center" style="margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; color: rgb(0, 0, 0); font-family: Verdana, Tahoma; font-size: 14px;">\r\n	<img alt="2a.jpg" border="0" height="315" src="http://vinhnghiemvn.com/UserImages/2012/11/20/1/2a.jpg" style="border: 0px; margin: 0px; padding: 0px; outline: 0px; vertical-align: baseline;" width="550" /><br />\r\n	Đại biểu chụp h&igrave;nh lưu niệm với Tổng B&iacute; thư Nguyễn Văn Linh</p>\r\n<p align="justify" style="margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; color: rgb(0, 0, 0); font-family: Verdana, Tahoma; font-size: 14px; text-align: justify;">\r\n	L&atilde;nh đạo Gi&aacute;o hội: Ph&aacute;p chủ Hội đồng Chứng minh: Trưởng l&atilde;o H&ograve;a thượng Th&iacute;ch Đức Nhuận; Chủ tịch Hội đồng Trị sự: H&ograve;a thượng Th&iacute;ch Tr&iacute; Tịnh.</p>\r\n<p align="justify" style="margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; color: rgb(0, 0, 0); font-family: Verdana, Tahoma; font-size: 14px; text-align: justify;">\r\n	Nhiệm kỳ 2, Gi&aacute;o hội c&oacute; 8 ban, ng&agrave;nh, viện thuộc Hội đồng Trị sự; ngo&agrave;i 6 ban, ng&agrave;nh cũ th&ecirc;m 2 đơn vị mới l&agrave; Ban Kinh tế tự t&uacute;c nh&agrave; ch&ugrave;a - Từ thiện x&atilde; hội v&agrave; Viện Nghi&ecirc;n cứu Phật học VN (trụ sở tại TP.Hồ Ch&iacute; Minh). Số lượng th&agrave;nh vi&ecirc;n mỗi ban, ng&agrave;nh từ 9 vị tăng l&ecirc;n 15 vị. Về tổ chức Phật gi&aacute;o địa phương, GHPGVN c&oacute; 29 tỉnh, th&agrave;nh hội Phật gi&aacute;o trong cả nước.</p>\r\n<p align="justify" style="margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; color: rgb(0, 0, 0); font-family: Verdana, Tahoma; font-size: 14px; text-align: justify;">\r\n	<b style="margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline;">Đại hội đại biểu Phật gi&aacute;o to&agrave;n quốc lần thứ III, nhiệm kỳ 1992-1997</b></p>\r\n<p align="justify" style="margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; color: rgb(0, 0, 0); font-family: Verdana, Tahoma; font-size: 14px; text-align: justify;">\r\n	Diễn ra trong c&aacute;c ng&agrave;y 3, 4-11-1992 tại Cung Văn h&oacute;a Hữu nghị Việt X&ocirc;, H&agrave; Nội. Th&agrave;nh phần: 250 đại biểu. Tại Đại hội đ&atilde; suy t&ocirc;n Trưởng l&atilde;o H&ograve;a thượng Th&iacute;ch T&acirc;m Tịch v&agrave;o ng&ocirc;i vị Ph&aacute;p chủ Hội đồng Chứng minh; Chủ tịch Hội đồng Trị sự l&agrave; H&ograve;a thượng Th&iacute;ch Tr&iacute; Tịnh.</p>\r\n<p align="center" style="margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; color: rgb(0, 0, 0); font-family: Verdana, Tahoma; font-size: 14px;">\r\n	<img alt="3d.jpg" border="0" height="364" src="http://vinhnghiemvn.com/UserImages/2012/11/20/1/3d.jpg" style="border: 0px; margin: 0px; padding: 0px; outline: 0px; vertical-align: baseline;" width="550" /><br />\r\n	Chứng minh v&agrave; Chủ tọa đo&agrave;n Đại hội lần thứ III</p>\r\n<p align="justify" style="margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; color: rgb(0, 0, 0); font-family: Verdana, Tahoma; font-size: 14px; text-align: justify;">\r\n	Nhiệm kỳ 3, Gi&aacute;o hội c&oacute; 10 ban, ng&agrave;nh; ngo&agrave;i 8 ban, ng&agrave;nh cũ, t&aacute;ch Ban Kinh tế tự t&uacute;c nh&agrave; ch&ugrave;a - Từ thiện x&atilde; hội th&agrave;nh Ban Kinh tế T&agrave;i ch&iacute;nh v&agrave; Ban Từ thiện x&atilde; hội, th&agrave;nh lập 1 ban mới l&agrave; Ban Phật gi&aacute;o Quốc tế. Ngo&agrave;i ra, Gi&aacute;o hội cũng th&agrave;nh lập Ph&acirc;n viện Viện Nghi&ecirc;n cứu Phật học VN tại H&agrave; Nội. Số lượng th&agrave;nh vi&ecirc;n mỗi ban, ng&agrave;nh l&agrave; 25 vị. Về hệ thống h&agrave;nh ch&aacute;nh, c&oacute; 40 tỉnh, th&agrave;nh hội Phật gi&aacute;o trong cả nước.</p>\r\n<p align="justify" style="margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; color: rgb(0, 0, 0); font-family: Verdana, Tahoma; font-size: 14px; text-align: justify;">\r\n	Trường Cao cấp Phật học cơ sở 3 (sau được đổi t&ecirc;n l&agrave; Học viện Phật gi&aacute;o VN tại Huế) được th&agrave;nh lập, Gi&aacute;o hội tiến h&agrave;nh đổi t&ecirc;n hệ thống Trường Cao cấp Phật học th&agrave;nh Học viện Phật gi&aacute;o VN (3 trường tại H&agrave; Nội, Huế, TP.Hồ Ch&iacute; Minh); hệ thống Trường Cơ bản Phật học th&agrave;nh Trường Trung cấp Phật học. Th&agrave;nh lập Hội đồng Phi&ecirc;n dịch v&agrave; Ấn h&agrave;nh Đại tạng kinh VN thuộc Viện Nghi&ecirc;n cứu Phật học VN.</p>\r\n<p style="margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; color: rgb(0, 0, 0); font-family: Verdana, Tahoma; font-size: 14px; text-align: justify;">\r\n	<b style="margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline;">Đại hội đại biểu Phật gi&aacute;o to&agrave;n quốc lần thứ IV, nhiệm kỳ 1997-2002</b></p>\r\n<p align="justify" style="margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; color: rgb(0, 0, 0); font-family: Verdana, Tahoma; font-size: 14px; text-align: justify;">\r\n	Ch&iacute;nh thức diễn ra v&agrave;o c&aacute;c ng&agrave;y 22, 23-11-1997, tại Cung Văn h&oacute;a Hữu nghị Việt X&ocirc;, H&agrave; Nội với 300 đại biểu.</p>\r\n<p align="center" style="margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; color: rgb(0, 0, 0); font-family: Verdana, Tahoma; font-size: 14px;">\r\n	<img alt="4a.jpg" border="0" height="364" src="http://vinhnghiemvn.com/UserImages/2012/11/20/1/4a.jpg" style="border: 0px; margin: 0px; padding: 0px; outline: 0px; vertical-align: baseline;" width="550" /></p>\r\n<p style="margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; color: rgb(0, 0, 0); font-family: Verdana, Tahoma; font-size: 14px; text-align: justify;">\r\n	Ph&aacute;p chủ Hội đồng Chứng minh l&agrave; Trưởng l&atilde;o H&ograve;a thượng Th&iacute;ch T&acirc;m Tịch; Chủ tịch Hội đồng Trị sự l&agrave; H&ograve;a thượng Th&iacute;ch Tr&iacute; Tịnh.</p>\r\n<p align="center" style="margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; color: rgb(0, 0, 0); font-family: Verdana, Tahoma; font-size: 14px;">\r\n	<img alt="4f.jpg" border="0" height="365" src="http://vinhnghiemvn.com/UserImages/2012/11/20/1/4f.jpg" style="border: 0px; margin: 0px; padding: 0px; outline: 0px; vertical-align: baseline;" width="550" /><br />\r\n	To&agrave;n cảnh Đại hội kỳ IV</p>\r\n<p align="justify" style="margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; color: rgb(0, 0, 0); font-family: Verdana, Tahoma; font-size: 14px; text-align: justify;">\r\n	Nh&acirc;n sự Hội đồng Chứng minh, Hội đồng Trị sự được tăng l&ecirc;n, số lượng th&agrave;nh vi&ecirc;n mỗi ban, ng&agrave;nh cũng tăng l&ecirc;n l&agrave; 30 vị. Về hệ thống tổ chức địa phương c&oacute; 49 tỉnh, th&agrave;nh hội Phật gi&aacute;o trong cả nước. Hệ thống Trường Trung cấp Phật học tại c&aacute;c tỉnh, th&agrave;nh phố tăng l&ecirc;n 25 trường, đề nghị mở th&ecirc;m c&aacute;c lớp Cao đẳng Phật học tại 3 địa phương: TP.Hồ Ch&iacute; Minh, Cần Thơ v&agrave; B&agrave; Rịa-Vũng T&agrave;u.</p>\r\n<p align="justify" style="margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; color: rgb(0, 0, 0); font-family: Verdana, Tahoma; font-size: 14px; text-align: justify;">\r\n	<b style="margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline;">Đại hội đại biểu Phật gi&aacute;o to&agrave;n quốc lần thứ V, nhiệm kỳ 2002-2007</b></p>\r\n<p align="justify" style="margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; color: rgb(0, 0, 0); font-family: Verdana, Tahoma; font-size: 14px; text-align: justify;">\r\n	Ch&iacute;nh thức diễn ra v&agrave;o c&aacute;c ng&agrave;y 4 v&agrave; 5-12-2002, tại Cung Văn h&oacute;a Hữu nghị Việt X&ocirc;, H&agrave; Nội với th&agrave;nh phần hơn 500 đại biểu.</p>\r\n<p align="center" style="margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; color: rgb(0, 0, 0); font-family: Verdana, Tahoma; font-size: 14px;">\r\n	<img alt="5c.jpg" border="0" height="378" src="http://vinhnghiemvn.com/UserImages/2012/11/20/1/5c.jpg" style="border: 0px; margin: 0px; padding: 0px; outline: 0px; vertical-align: baseline;" width="550" /><br />\r\n	Chư t&ocirc;n đức gi&aacute;o phẩm tham dự Đại hội kỳ V</p>\r\n<p align="justify" style="margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; color: rgb(0, 0, 0); font-family: Verdana, Tahoma; font-size: 14px; text-align: justify;">\r\n	Ph&aacute;p chủ Hội đồng Chứng minh l&agrave; Trưởng l&atilde;o H&ograve;a thượng Th&iacute;ch T&acirc;m Tịch; Chủ tịch Hội đồng Trị sự l&agrave; H&ograve;a thượng Th&iacute;ch Tr&iacute; Tịnh.</p>\r\n<p align="justify" style="margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; color: rgb(0, 0, 0); font-family: Verdana, Tahoma; font-size: 14px; text-align: justify;">\r\n	Nhiệm kỳ 5 của Gi&aacute;o hội, Học viện Phật gi&aacute;o Nam t&ocirc;ng Khmer được th&agrave;nh lập. Đ&acirc;y l&agrave; cơ sở chuy&ecirc;n đ&agrave;o tạo Tăng t&agrave;i cho Phật gi&aacute;o Nam t&ocirc;ng tại TP.Cần Thơ. Hệ thống trường trung cấp tăng l&ecirc;n con số 30, 8 lớp Cao đẳng tại TP.Hồ Ch&iacute; Minh, B&agrave; Rịa-Vũng T&agrave;u, Cần Thơ, L&acirc;m Đồng, H&agrave; Nội, Thừa Thi&ecirc;n-Huế, Quảng Nam v&agrave; Bạc Li&ecirc;u. Về hệ thống tổ chức Phật gi&aacute;o địa phương, GHPGVN c&oacute; 52 tỉnh, th&agrave;nh hội Phật gi&aacute;o trong cả nước.</p>\r\n<p style="margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; color: rgb(0, 0, 0); font-family: Verdana, Tahoma; font-size: 14px; text-align: justify;">\r\n	<b style="margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline;">Đại hội đại biểu Phật gi&aacute;o to&agrave;n quốc lần thứ VI, nhiệm kỳ 2007-2012</b></p>\r\n<p style="margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; color: rgb(0, 0, 0); font-family: Verdana, Tahoma; font-size: 14px; text-align: justify;">\r\n	Diễn ra từ ng&agrave;y 11 đến 14-12-2007, tại Cung Văn h&oacute;a Hữu nghị Việt X&ocirc;, H&agrave; Nội; với th&agrave;nh phần tham dự hơn 800 đại biểu.&nbsp;&nbsp;</p>\r\n<p align="center" style="margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; color: rgb(0, 0, 0); font-family: Verdana, Tahoma; font-size: 14px;">\r\n	<img alt="6b.jpg" border="0" height="293" src="http://vinhnghiemvn.com/UserImages/2012/11/20/1/6b.jpg" style="border: 0px; margin: 0px; padding: 0px; outline: 0px; vertical-align: baseline;" width="550" /><br />\r\n	To&agrave;n cảnh Đại hội kỳ VI</p>\r\n<p align="justify" style="margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; color: rgb(0, 0, 0); font-family: Verdana, Tahoma; font-size: 14px; text-align: justify;">\r\n	Đại hội đ&atilde; suy t&ocirc;n Trưởng l&atilde;o H&ograve;a thượng Th&iacute;ch Phổ Tuệ v&agrave;o ng&ocirc;i vị Ph&aacute;p chủ Hội đồng Chứng minh; Chủ tịch Hội đồng Trị sự l&agrave; H&ograve;a thượng Th&iacute;ch Tr&iacute; Tịnh.</p>\r\n<p align="justify" style="margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; color: rgb(0, 0, 0); font-family: Verdana, Tahoma; font-size: 14px; text-align: justify;">\r\n	Lần đầu ti&ecirc;n, Đạo kỳ v&agrave; Đạo ca được đưa v&agrave;o Hiến chương GHPGVN; th&ecirc;m quy định về Ban Đại diện Phật gi&aacute;o cấp quận, huyện; tăng số lượng th&agrave;nh vi&ecirc;n Hội đồng Chứng minh (98 th&agrave;nh vi&ecirc;n) v&agrave; ủy vi&ecirc;n Hội đồng Trị sự (147 ủy vi&ecirc;n ch&iacute;nh thức, 48 ủy vi&ecirc;n dự khuyết)&hellip; Nhiệm kỳ 6 GHPGVN cũng l&agrave; nhiệm kỳ Gi&aacute;o hội c&oacute; nhiều th&agrave;nh tựu quan trọng tr&ecirc;n c&aacute;c lĩnh vực hoạt động.</p>\r\n<p align="center" style="margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; color: rgb(0, 0, 0); font-family: Verdana, Tahoma; font-size: 14px;">\r\n	<img alt="6a.jpg" border="0" height="357" src="http://vinhnghiemvn.com/UserImages/2012/11/20/1/6a.jpg" style="border: 0px; margin: 0px; padding: 0px; outline: 0px; vertical-align: baseline;" width="550" /><br />\r\n	Chư t&ocirc;n đức gi&aacute;o phẩm thăm Tổng B&iacute; thư N&ocirc;ng Đức Mạnh</p>\r\n<p style="margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; color: rgb(0, 0, 0); font-family: Verdana, Tahoma; font-size: 14px; text-align: justify;">\r\n	Hệ thống h&agrave;nh ch&aacute;nh Gi&aacute;o hội c&oacute; 58 tỉnh, th&agrave;nh hội Phật gi&aacute;o tr&ecirc;n to&agrave;n quốc được th&agrave;nh lập v&agrave; hoạt động ổn định, hiệu quả.</p>\r\n<p align="center" style="margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; color: rgb(0, 0, 0); font-family: Verdana, Tahoma; font-size: 14px;">\r\n	<img alt="6i.jpg" border="0" height="368" src="http://vinhnghiemvn.com/UserImages/2012/11/20/1/6i.jpg" style="border: 0px; margin: 0px; padding: 0px; outline: 0px; vertical-align: baseline;" width="550" /></p>\r\n<p align="justify" style="margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; color: rgb(0, 0, 0); font-family: Verdana, Tahoma; font-size: 14px; text-align: justify;">\r\n	Gi&aacute;o hội đ&atilde; th&agrave;nh lập Ph&acirc;n ban Đặc tr&aacute;ch Ni giới thuộc Ban Tăng sự T.Ư; Ban Truyền th&ocirc;ng T.Ư&hellip; C&aacute;c hoạt động quốc tế nổi bật như Đại lễ Phật đản Li&ecirc;n Hiệp Quốc (Vesak) năm 2008; Hội nghị Ni giới Thế giới lần thứ XI năm 2010&hellip; được GHPGVN đăng cai v&agrave; tổ chức th&agrave;nh c&ocirc;ng, khẳng định vị thế của GHPGVN trong cộng đồng quốc tế, đồng thời giới thiệu h&igrave;nh ảnh đất nước Việt Nam th&acirc;n thiện v&agrave; cởi mở đến với bạn b&egrave; quốc tế.</p>\r\n<p align="justify" style="margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; color: rgb(0, 0, 0); font-family: Verdana, Tahoma; font-size: 14px; text-align: justify;">\r\n	Gi&aacute;o hội đ&atilde; tổ chức nhiều hội thảo, hội nghị chuy&ecirc;n ng&agrave;nh, chuy&ecirc;n đề trong đ&oacute; nổi bật l&agrave; hội thảo khoa học v&agrave; Đại lễ kỷ niệm 30 năm th&agrave;nh lập GHPGVN; hội thảo v&agrave; Đại lễ kỷ niệm 700 năm Phật ho&agrave;ng Trần Nh&acirc;n T&ocirc;ng nhập Niết-b&agrave;n; Đại lễ Phật gi&aacute;o kỷ niệm 1.000 năm Thăng Long-H&agrave; Nội&hellip;</p>\r\n<p style="margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; color: rgb(0, 0, 0); font-family: Verdana, Tahoma; font-size: 14px; text-align: justify;">\r\n	<b style="margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline;">Nh&oacute;m PV thời sự Gi&aacute;c Ngộ&nbsp;</b><i style="margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline;">tổng hợp</i><br />\r\n	Ảnh tư liệu c&aacute;c kỳ đại hội của&nbsp;<b style="margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline;">V&otilde; Văn Tường</b></p>\r\n', 'Dấu ấn các kỳ Đại hội của Giáo hội Phật giáo Việt Nam', 0, 'dau-an-cac-ky-dai-hoi-cua-giao-hoi-phat-giao-viet-nam-11');
INSERT INTO `ktth_news` (`id`, `id_category`, `author`, `date`, `content`, `title`, `type`, `key`) VALUES
(19, 11, 'Theo soha', '2012-11-19 15:21:56', '<p>\r\n	&nbsp;</p>\r\n<div id="newsContent" style="color: rgb(0, 0, 0); font-family: Arial; font-size: 13px;">\r\n	<table align="left" border="0" cellpadding="0" cellspacing="3" style="font-family: tahoma, verdana, arial; font-size: 11px;" width="120">\r\n		<tbody>\r\n			<tr>\r\n				<td>\r\n					<a class="highslide" href="http://phatgiaovnn.com/upload1/uploads/News/pic/1353302584.phatgiaovnn.com.jpg" id="thumb1" style="color: rgb(239, 109, 0);"><img alt="Xem hình" border="0" class="img-detail" src="http://phatgiaovnn.com/upload1/uploads/News/pic/small_1353302584.phatgiaovnn.com.jpg" width="120" /></a></td>\r\n			</tr>\r\n			<tr>\r\n				<td align="center">\r\n					&nbsp;</td>\r\n			</tr>\r\n		</tbody>\r\n	</table>\r\n	Sau hơn 3 năm h&agrave;nh tr&igrave; &ldquo;nhất bộ nhất b&aacute;i&rdquo; từ ch&ugrave;a Hoằng Ph&aacute;p (TPHCM), đến nay Đại đức Th&iacute;ch T&acirc;m Mẫn đ&atilde; đến ch&acirc;n n&uacute;i thi&ecirc;ng Y&ecirc;n Tử (Quảng Ninh).\r\n	<p>\r\n		<span style="font-size: 13pt; font-family: ''Times New Roman''; line-height: 23px;">S&aacute;ng nay (19/11), sư thầy Th&iacute;ch T&acirc;m Mẫn sẽ bắt đầu h&agrave;nh tr&igrave; leo n&uacute;i l&ecirc;n Ch&ugrave;a Đồng &ndash; Tr&uacute;c L&acirc;m Y&ecirc;n Tử. Ngay từ s&aacute;ng sớm, rất đ&ocirc;ng c&aacute;c phật tử, người d&acirc;n đ&atilde; tới chuẩn bị v&agrave; c&ugrave;ng sư thầy h&agrave;nh tr&igrave; l&ecirc;n n&uacute;i.</span></p>\r\n	<div align="justify" style="font-size: 13pt; font-family: ''Times New Roman''; margin: 10.850000381469727px auto; line-height: 23px;">\r\n		<p style="font-size: 13pt; margin: 10.850000381469727px auto;">\r\n			Trước đ&oacute;, ng&agrave;y 14/11, khi nh&agrave; sư đi tới địa phận Suối Tắm (Y&ecirc;n Tử), giao th&ocirc;ng nơi n&agrave;y đ&atilde; bị tắc nghẽn. Đo&agrave;n th&aacute;p t&ugrave;ng nh&agrave; sư được y&ecirc;u cầu đeo thẻ do Ban quản l&yacute; ch&ugrave;a Y&ecirc;n Tử cấp, với đầy đủ th&ocirc;ng tin về t&ecirc;n tuổi, qu&ecirc; qu&aacute;n...</p>\r\n		<p style="font-size: 13pt; margin: 10.850000381469727px auto;">\r\n			Dưới đ&acirc;y l&agrave; những h&igrave;nh ảnh tăng ni, phật tử v&agrave; người d&acirc;n qu&eacute;t đường, chuẩn bị hoa tươi với tất cả l&ograve;ng th&agrave;nh k&iacute;nh v&agrave; nhất t&acirc;m niệm Phật:</p>\r\n		<div style="text-align: center; font-size: 13pt; margin: 10.850000381469727px auto;">\r\n			<img _fl="" alt="Nhà sư " height="324" i="" n="" src="http://sohanews.vcmedia.vn/7t1Cerxg4Pokvs9EVlSlV61hB3Dbc/Image/2012/11/ThichTamMan/SohaIMG5385_7a147.jpg" style="margin: 10.850000381469727px auto; font-size: 13pt; cursor: none; width: 500px; height: 324px;" t="" title="Nhà sư " width="500" /></div>\r\n		<p align="center" style="font-size: 13pt; margin: 10.850000381469727px auto;">\r\n			<span style="font-style: italic; font-size: 13pt; margin: 2% auto;">Ngay từ s&aacute;ng sớm, c&aacute;c Phật tử v&agrave; người d&acirc;n đ&atilde; chuẩn bị để đ&oacute;n nh&agrave; sư.&nbsp;</span></p>\r\n		<p align="center" style="font-size: 13pt; margin: 10.850000381469727px auto;">\r\n			<span style="font-style: italic; font-size: 13pt; margin: 2% auto;"><img alt="Nhà sư " height="371" i="" n="" src="http://sohanews.vcmedia.vn/7t1Cerxg4Pokvs9EVlSlV61hB3Dbc/Image/2012/11/ThichTamMan/SohaIMG5388_f9aad.jpg" style="border: medium solid; margin: 10.850000381469727px auto; width: 500px; font-size: 13pt; cursor: none; height: 371px;" t="" title="Nhà sư " width="500" /></span></p>\r\n		<p align="center" style="font-size: 13pt; margin: 10.850000381469727px auto;">\r\n			<span style="font-style: italic; font-size: 13pt; margin: 2% auto;">C&ugrave;ng những lẵng hoa tươi&nbsp;</span></p>\r\n		<p align="center" style="font-size: 13pt; margin: 10.850000381469727px auto;">\r\n			<span style="font-style: italic; font-size: 13pt; margin: 2% auto;"><img alt="Nhà sư " height="750" i="" n="" src="http://sohanews.vcmedia.vn/7t1Cerxg4Pokvs9EVlSlV61hB3Dbc/Image/2012/11/ThichTamMan/SohaIMG5390_0d7c0.jpg" style="border: medium solid; margin: 10.850000381469727px auto; width: 500px; font-size: 13pt; cursor: none; height: 750px;" t="" title="Nhà sư " width="500" /></span></p>\r\n		<p align="center" style="font-size: 13pt; margin: 10.850000381469727px auto;">\r\n			<span style="font-style: italic; font-size: 13pt; margin: 2% auto;">Nghi&ecirc;m trang v&agrave; nhất t&acirc;m niệm Phật.&nbsp;</span></p>\r\n		<p align="center" style="font-size: 13pt; margin: 10.850000381469727px auto;">\r\n			&nbsp;</p>\r\n		<div align="center" style="text-align: center; font-size: 13pt; margin: 10.850000381469727px auto;">\r\n			<span style="font-style: italic; font-size: 13pt; margin: 2% auto;"><img _fl="" alt="Nhà sư " height="333" i="" n="" src="http://sohanews.vcmedia.vn/7t1Cerxg4Pokvs9EVlSlV61hB3Dbc/Image/2012/11/ThichTamMan/SohaIMG5395_5d574.jpg" style="margin: 10.850000381469727px auto; font-size: 13pt; cursor: none; width: 500px; height: 333px;" t="" title="Nhà sư " width="500" /></span></div>\r\n		<div align="center" style="font-size: 13pt; margin: 10.850000381469727px auto;">\r\n			<span style="font-style: italic; font-size: 13pt; margin: 2% auto;">C&aacute;c con đường nơi Đại đức Th&iacute;ch T&acirc;m Mẫn đi qua đều được qu&eacute;t dọn sạch sẽ.&nbsp;</span></div>\r\n		<p align="center" style="font-size: 13pt; margin: 10.850000381469727px auto;">\r\n			<span style="font-style: italic; font-size: 13pt; margin: 2% auto;"><img alt="Nhà sư " height="335" i="" n="" src="http://sohanews.vcmedia.vn/7t1Cerxg4Pokvs9EVlSlV61hB3Dbc/Image/2012/11/ThichTamMan/SohaIMG5401_fe16d.jpg" style="border: medium solid; margin: 10.850000381469727px auto; width: 500px; font-size: 13pt; cursor: none; height: 335px;" t="" title="Nhà sư " width="500" /></span></p>\r\n		<p align="center" style="font-size: 13pt; margin: 10.850000381469727px auto;">\r\n			C&aacute;c Phật tử một l&ograve;ng hướng đạo.</p>\r\n		<h2 class="description fl mgt20" style="font-size: 14px; color: rgb(41, 74, 123); font-family: tahoma, verdana, arial;">\r\n			&nbsp;</h2>\r\n		<h2 class="description fl mgt20" style="font-size: 14px; color: rgb(41, 74, 123); font-family: tahoma, verdana, arial;">\r\n			<span style="font-size: 11pt; line-height: 17px;">Từ 9h10 s&aacute;ng nay (19/11), sư thầy Th&iacute;ch T&acirc;m Mẫn đ&atilde; bắt đầu h&agrave;nh tr&igrave; &ldquo;nhất bộ, nhất b&aacute;i&rdquo; của m&igrave;nh l&ecirc;n n&uacute;i Y&ecirc;n Tử</span></h2>\r\n		<div style="text-align: center; font-size: 13pt; margin: 10.850000381469727px auto;">\r\n			<div style="font-size: 13pt; margin: 10.850000381469727px auto;">\r\n				<span style="font-style: italic; font-size: 13pt; margin: 2% auto;"><img _fl="" alt="Cập nhật hành trì " height="333" i="" n="" src="http://sohanews.vcmedia.vn/7t1Cerxg4Pokvs9EVlSlV61hB3Dbc/Image/2012/11/ThichTamMan/SohaThichTamManYenTu2-6_4123e.jpg" style="margin: 10.850000381469727px auto; font-size: 13pt; cursor: none; width: 500px; height: 333px;" t="" title="Cập nhật hành trì " width="500" />&nbsp;<br style="font-size: 13pt; margin: 2% auto;" />\r\n				<span style="font-size: 13pt; margin: 2% auto;">9h00&#39;: Thầy T&acirc;m Mẫn bắt đầu h&agrave;nh tr&igrave; &quot;nhất bộ, nhất b&aacute;i&quot; l&ecirc;n n&uacute;i Y&ecirc;n Tử</span></span></div>\r\n			<br style="font-size: 13pt; margin: 2% auto;" />\r\n			<img _fl="" alt="Cập nhật hành trì " height="333" i="" n="" src="http://sohanews.vcmedia.vn/7t1Cerxg4Pokvs9EVlSlV61hB3Dbc/Image/2012/11/ThichTamMan/SohaThichTamManYenTu2-1_001dc.jpg" style="margin: 10.850000381469727px auto; font-size: 13pt; cursor: none; width: 500px; height: 333px;" t="" title="Cập nhật hành trì " width="500" /></div>\r\n		<div align="center" style="font-size: 13pt; margin: 10.850000381469727px auto;">\r\n			<span style="font-style: italic; font-size: 13pt; margin: 2% auto;">Đo&agrave;n phật tử đi sau thầy T&acirc;m Mẫn</span>&nbsp;<br style="font-size: 13pt; margin: 2% auto;" />\r\n			<div style="font-size: 13pt; margin: 10.850000381469727px auto;">\r\n				<img _fl="" alt="Cập nhật hành trì " height="333" i="" n="" src="http://sohanews.vcmedia.vn/7t1Cerxg4Pokvs9EVlSlV61hB3Dbc/Image/2012/11/ThichTamMan/SohaThichTamManYenTu2-9_0501f.jpg" style="margin: 10.850000381469727px auto; font-size: 13pt; cursor: none; width: 500px; height: 333px;" t="" title="Cập nhật hành trì " width="500" /></div>\r\n		</div>\r\n		<div align="center" style="font-size: 13pt; margin: 10.850000381469727px auto;">\r\n			<div style="font-size: 13pt; margin: 10.850000381469727px auto;">\r\n				<img _fl="" alt="Cập nhật hành trì " height="333" i="" n="" src="http://sohanews.vcmedia.vn/7t1Cerxg4Pokvs9EVlSlV61hB3Dbc/Image/2012/11/ThichTamMan/SohaThichTamManYenTu2-2_b3bc1.jpg" style="margin: 10.850000381469727px auto; font-size: 13pt; width: 500px; height: 333px;" t="" title="Cập nhật hành trì " width="500" /></div>\r\n			<div align="center" style="font-size: 13pt; margin: 10.850000381469727px auto;">\r\n				<img _fl="" alt="Cập nhật hành trì " height="375" i="" n="" src="http://sohanews.vcmedia.vn/7t1Cerxg4Pokvs9EVlSlV61hB3Dbc/Image/2012/11/SohaThichTamManYenTu1_c038f.jpg" style="margin: 10.850000381469727px auto; font-size: 13pt; cursor: none; width: 500px; height: 375px;" t="" title="Cập nhật hành trì " width="500" /></div>\r\n			<span style="font-style: italic; font-size: 13pt; margin: 2% auto;">9h00&#39;: Thầy T&acirc;m Mẫn bắt đầu h&agrave;nh tr&igrave; &quot;nhất bộ, nhất b&aacute;i&quot; l&ecirc;n n&uacute;i Y&ecirc;n Tử</span></div>\r\n		<div align="center" style="font-size: 13pt; margin: 10.850000381469727px auto;">\r\n			<img _fl="" alt="Cập nhật hành trì " height="375" i="" n="" src="http://sohanews.vcmedia.vn/7t1Cerxg4Pokvs9EVlSlV61hB3Dbc/Image/2012/11/SohaThichTamManYenTu1_c038f.jpg" style="margin: 10.850000381469727px auto; font-size: 13pt; cursor: none; width: 500px; height: 375px;" t="" title="Cập nhật hành trì " width="500" /></div>\r\n		<div align="center" style="font-size: 13pt; margin: 10.850000381469727px auto;">\r\n			<span style="font-style: italic; font-size: 13pt; margin: 2% auto;">9h10&#39;: Thầy T&acirc;m Mẫn đ&atilde; qua trạm so&aacute;t v&eacute;</span></div>\r\n	</div>\r\n	<div style="text-align: center; font-size: 13pt; margin: 10.850000381469727px auto;">\r\n		<span style="font-style: italic; font-size: 13pt; font-family: ''Times New Roman''; margin: 2% auto; line-height: 23px;"><img _fl="" alt="Cập nhật hành trì " height="375" i="" n="" src="http://sohanews.vcmedia.vn/7t1Cerxg4Pokvs9EVlSlV61hB3Dbc/Image/2012/11/SohaThichTamManYenTu2_8c954.jpg" style="margin: 10.850000381469727px auto; font-size: 13pt; cursor: none; width: 500px; height: 375px;" t="" title="Cập nhật hành trì " width="500" /></span></div>\r\n	<div style="text-align: center; font-size: 13pt; margin: 10.850000381469727px auto;">\r\n		<div style="font-size: 13pt; margin: 10.850000381469727px auto;">\r\n			<span style="font-style: italic; font-size: 13pt; font-family: ''Times New Roman''; margin: 2% auto; line-height: 23px;"><img _fl="" alt="Cập nhật hành trì " height="345" i="" n="" src="http://sohanews.vcmedia.vn/7t1Cerxg4Pokvs9EVlSlV61hB3Dbc/Image/2012/11/ThichTamMan/SohaThichTamManYenTu2-12_696e6.jpg" style="margin: 10.850000381469727px auto; font-size: 13pt; cursor: none; width: 500px; height: 345px;" t="" title="Cập nhật hành trì " width="500" /></span></div>\r\n		<div style="font-size: 13pt; margin: 10.850000381469727px auto;">\r\n			<span style="font-style: italic; font-size: 13pt; font-family: ''Times New Roman''; margin: 2% auto; line-height: 23px;"><img _fl="" alt="Cập nhật hành trì " height="333" i="" n="" src="http://sohanews.vcmedia.vn/7t1Cerxg4Pokvs9EVlSlV61hB3Dbc/Image/2012/11/ThichTamMan/SohaThichTamManYenTu2-13_202b2.jpg" style="margin: 10.850000381469727px auto; font-size: 13pt; cursor: none; width: 500px; height: 333px;" t="" title="Cập nhật hành trì " width="500" /></span></div>\r\n		<div style="font-size: 13pt; margin: 10.850000381469727px auto;">\r\n			<span style="font-style: italic; font-size: 13pt; font-family: ''Times New Roman''; margin: 2% auto; line-height: 23px;"><img _fl="" alt="Cập nhật hành trì " height="350" i="" n="" src="http://sohanews.vcmedia.vn/7t1Cerxg4Pokvs9EVlSlV61hB3Dbc/Image/2012/11/ThichTamMan/SohaThichTamManYenTu2-14_9e6d0.jpg" style="margin: 10.850000381469727px auto; font-size: 13pt; cursor: none; width: 500px; height: 350px;" t="" title="Cập nhật hành trì " width="500" /></span></div>\r\n		<div style="font-size: 13pt; margin: 10.850000381469727px auto;">\r\n			<span style="font-style: italic; font-size: 13pt; font-family: ''Times New Roman''; margin: 2% auto; line-height: 23px;"><img _fl="" alt="Cập nhật hành trì " height="333" i="" n="" src="http://sohanews.vcmedia.vn/7t1Cerxg4Pokvs9EVlSlV61hB3Dbc/Image/2012/11/ThichTamMan/SohaThichTamManYenTu2-15_07c19.jpg" style="margin: 10.850000381469727px auto; font-size: 13pt; width: 500px; height: 333px;" t="" title="Cập nhật hành trì " width="500" /></span></div>\r\n		<div style="font-size: 13pt; margin: 10.850000381469727px auto;">\r\n			<span style="font-style: italic; font-size: 13pt; font-family: ''Times New Roman''; margin: 2% auto; line-height: 23px;"><img _fl="" alt="Cập nhật hành trì " height="340" i="" n="" src="http://sohanews.vcmedia.vn/7t1Cerxg4Pokvs9EVlSlV61hB3Dbc/Image/2012/11/ThichTamMan/SohaThichTamManYenTu2-16_0efa7.jpg" style="margin: 10.850000381469727px auto; font-size: 13pt; width: 500px; height: 340px;" t="" title="Cập nhật hành trì " width="500" /></span></div>\r\n		<div style="font-size: 13pt; margin: 10.850000381469727px auto;">\r\n			<span style="font-style: italic; font-size: 13pt; font-family: ''Times New Roman''; margin: 2% auto; line-height: 23px;"><img _fl="" alt="Cập nhật hành trì " height="323" i="" n="" src="http://sohanews.vcmedia.vn/7t1Cerxg4Pokvs9EVlSlV61hB3Dbc/Image/2012/11/ThichTamMan/SohaThichTamManYenTu2-17_c1d3d.jpg" style="margin: 10.850000381469727px auto; font-size: 13pt; width: 500px; height: 323px;" t="" title="Cập nhật hành trì " width="500" /></span></div>\r\n	</div>\r\n	<span style="font-style: italic; font-size: 13pt; font-family: ''Times New Roman''; margin: 2% auto; line-height: 23px;">Theo th&ocirc;ng tin của PV tại Y&ecirc;n Tử cập nhật về, v&agrave;o l&uacute;c 10h00&#39;, thầy T&acirc;m Mẫn đ&atilde; đi qua ch&ugrave;a Giải Oan khoảng 20m.&nbsp;</span><br style="font-size: 13pt; font-family: ''Times New Roman''; margin: 2% auto; line-height: 23px;" />\r\n	Đến 10h30&#39;, thầy T&acirc;m Mẫn đ&atilde; tạm nghỉ.&nbsp;<br style="font-size: 13pt; font-family: ''Times New Roman''; margin: 2% auto; line-height: 23px;" />\r\n	12h00&#39;: Theo th&ocirc;ng tin PV mới cập nhật, v&igrave; l&yacute; do sức khỏe, chiều nay thầy T&acirc;m Mẫn sẽ tạm dừng, ng&agrave;y mai tiếp tục.</div>\r\n<p align="right" style="color: rgb(0, 0, 0); font-family: Arial; font-size: 13px;">\r\n	(Theo&nbsp;<i>soha</i>)</p>\r\n', 'Đại Đức Thích Tâm Mẫn "nhất bộ nhất bái" đã đến núi Yên Tử', 0, 'dai-duc-thich-tam-man-nhat-bo-nhat-bai-da-den-nui-yen-tu-19'),
(20, 11, 'Theo The Daily Star', '2012-11-19 15:23:58', '<p>\r\n	&nbsp;</p>\r\n<div align="justify" style="margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; color: rgb(65, 64, 66); font-family: Verdana, Tahoma; text-align: justify;">\r\n	C&aacute;c nh&agrave; l&atilde;nh đạo Phật gi&aacute;o Bangladesh vừa khuy&ecirc;n người sử dụng Facebook n&ecirc;n đề ph&ograve;ng an ninh tối đa t&agrave;i khoản của m&igrave;nh, v&igrave; việc lạm dụng một t&agrave;i khoản c&oacute; thể mang lại sự t&agrave;n ph&aacute; x&atilde; hội kh&ocirc;ng thể khắc phục được.</div>\r\n<p style="margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; color: rgb(65, 64, 66); font-family: Verdana, Tahoma; text-align: justify;">\r\n	&nbsp;</p>\r\n<p style="margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; color: rgb(65, 64, 66); font-family: Verdana, Tahoma; text-align: justify;">\r\n	&nbsp;</p>\r\n<div class="ctcBody" id="ZoomContentBody" style="margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; color: black; text-align: justify; overflow: hidden; float: left; font-family: Verdana, Tahoma; font-size: 14px;">\r\n	<div id="dinhdaica" style="margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline;">\r\n		<p align="center" style="margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline;">\r\n			<img height="282" src="http://vinhnghiemvn.com/UserImages/2012/11/16/1/facebook_security.jpg" style="border: 0px; margin: 0px; padding: 0px; outline: 0px; vertical-align: baseline;" width="410" /></p>\r\n		<p align="justify" style="margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline;">\r\n			Chủ t&agrave;i khoản phải thiết kế c&aacute;c thiết lập ri&ecirc;ng tư cho t&agrave;i khoản bằng c&aacute;ch kh&ocirc;ng được gắn thẻ v&agrave;o c&aacute;c nội dung kh&ocirc;ng được đồng &yacute;, x&uacute;c phạm v&agrave; khi&ecirc;u kh&iacute;ch, Sukarna Barua, một trợ l&yacute; gi&aacute;o sư tại trường Đại học Kỹ thuật C&ocirc;ng nghệ Bangladesh, n&oacute;i.</p>\r\n		<p align="justify" style="margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline;">\r\n			Người sử dụng cũng n&ecirc;n tr&aacute;nh đăng những h&igrave;nh ảnh rất c&aacute; nh&acirc;n tr&ecirc;n Facebook.</p>\r\n		<p align="justify" style="margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline;">\r\n			Sukarna cho biết cuộc tấn c&ocirc;ng ng&agrave;y 29-9 v&agrave;o cộng đồng Phật tử cho thấy việc lạm dụng một trong những trang mạng như vậy c&oacute; thể dẫn đến thảm họa kh&ocirc;ng thể tưởng tượng được.</p>\r\n		<p align="justify" style="margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline;">\r\n			Ở Bangladesh, c&oacute; 3.320.000 t&agrave;i khoản Facebook, trong đ&oacute; c&oacute; 320.000 t&agrave;i khoản l&agrave; giả mạo, &ocirc;ng Subarna Barua, một giảng vi&ecirc;n tại trường Đại học Dhaka, cho biết.</p>\r\n		<p align="justify" style="margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline;">\r\n			Ng&agrave;y 29 v&agrave; 30-9, một bức ảnh Facebook x&uacute;c phạm kinh Koran đ&atilde; dẫn đến một cuộc tấn c&ocirc;ng chưa từng c&oacute; v&agrave;o Phật tử ở Bazar v&agrave; Chittagong.</p>\r\n		<p align="justify" style="margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline;">\r\n			Trong khi đ&oacute;, một tổ chức Phật gi&aacute;o đ&atilde; y&ecirc;u cầu một cuộc điều tra th&iacute;ch hợp về cuộc tấn c&ocirc;ng v&agrave; bảo đảm an ninh tối đa cho cộng đồng Phật gi&aacute;o ở nước n&agrave;y.</p>\r\n		<p style="margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline;">\r\n			<b style="margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline;">Văn C&ocirc;ng Hưng</b>&nbsp;(Theo&nbsp;<i style="margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline;">The Daily Star</i>) -GNO</p>\r\n	</div>\r\n</div>\r\n<p>\r\n	&nbsp;</p>\r\n<p>\r\n	&nbsp;</p>\r\n', 'Phật giáo khuyến cáo cẩn thận khi dùng Facebook', 0, 'phat-giao-khuyen-cao-can-than-khi-dung-facebook-20');

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
  `name` varchar(120) NOT NULL,
  `date_start` datetime NOT NULL,
  `date_end` datetime NOT NULL,
  `description` longtext NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `ktth_report`
--

INSERT INTO `ktth_report` (`id`, `name`, `date_start`, `date_end`, `description`) VALUES
(1, 'Tháng 11', '2013-11-01 10:51:16', '2013-11-30 10:51:21', '');

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9083 ;

--
-- Dumping data for table `ktth_salarydaily`
--

INSERT INTO `ktth_salarydaily` (`id`, `id_category`, `id_employee`, `content`, `count`, `date_work`, `date_note`, `note`) VALUES
(9081, 30, 30, '', 1, '2013-11-22', '2013-11-22 11:13:13', ''),
(9082, 1, 25, '', 1, '2013-11-22', '2013-11-22 13:07:21', '');

-- --------------------------------------------------------

--
-- Table structure for table `ktth_user`
--

CREATE TABLE IF NOT EXISTS `ktth_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user` varchar(50) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `gender` tinyint(1) DEFAULT NULL,
  `note` varchar(50) DEFAULT NULL,
  `type` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=35 ;

--
-- Dumping data for table `ktth_user`
--

INSERT INTO `ktth_user` (`id`, `user`, `pass`, `gender`, `note`, `type`) VALUES
(1, 'quangphuong', 'VUGPCGuEjarmkXKQ1UJIKzXr2kFT/m49du3IxqUrAfQ=', 1, 'Nguyễn Quang Phương', 3),
(2, 'thanhhung', 'VUGPCGuEjarmkXKQ1UJIKzXr2kFT/m49du3IxqUrAfQ=', 1, 'Nguyễn Thành Hưng', 0),
(3, 'minhphuong', 'VUGPCGuEjarmkXKQ1UJIKzXr2kFT/m49du3IxqUrAfQ=', 0, 'Trương Thị Minh Phương', 0),
(4, 'vanteo', 'VUGPCGuEjarmkXKQ1UJIKzXr2kFT/m49du3IxqUrAfQ=', 1, 'Lê Văn Tèo', 0),
(5, 'haiho', 'VUGPCGuEjarmkXKQ1UJIKzXr2kFT/m49du3IxqUrAfQ=', 1, 'Lưu Hải Hồ', 0),
(6, 'thanhnhan', 'VUGPCGuEjarmkXKQ1UJIKzXr2kFT/m49du3IxqUrAfQ=', 1, 'Nguyễn Thanh Nhàn', 0),
(7, 'thenhan', 'VUGPCGuEjarmkXKQ1UJIKzXr2kFT/m49du3IxqUrAfQ=', 1, 'Nguyễn Thế Nhân', 0),
(8, 'hoangphong', 'VUGPCGuEjarmkXKQ1UJIKzXr2kFT/m49du3IxqUrAfQ=', 1, 'Bùi Hoàng Phong', 0),
(9, 'tuhieu', 'VUGPCGuEjarmkXKQ1UJIKzXr2kFT/m49du3IxqUrAfQ=', 1, 'Trần Tứ Hiếu', 0),
(10, 'phiyen', 'VUGPCGuEjarmkXKQ1UJIKzXr2kFT/m49du3IxqUrAfQ=', 0, 'Ngô Phi Yến', 0),
(11, 'quangnhut', 'VUGPCGuEjarmkXKQ1UJIKzXr2kFT/m49du3IxqUrAfQ=', 1, 'Nguyễn Quang Nhựt', 0),
(12, 'giaqui', 'VUGPCGuEjarmkXKQ1UJIKzXr2kFT/m49du3IxqUrAfQ=', 1, 'Ngô Gia Quí', 0),
(13, 'minhduc', 'VUGPCGuEjarmkXKQ1UJIKzXr2kFT/m49du3IxqUrAfQ=', 1, 'Nguyễn Minh Đức', 0),
(14, 'thanhphong', 'VUGPCGuEjarmkXKQ1UJIKzXr2kFT/m49du3IxqUrAfQ=', 1, 'Trần Thanh Phong', 0),
(15, 'minhkhoa', 'VUGPCGuEjarmkXKQ1UJIKzXr2kFT/m49du3IxqUrAfQ=', 1, 'Nguyễn Minh Khoa', 0),
(16, 'dangkhoa', 'VUGPCGuEjarmkXKQ1UJIKzXr2kFT/m49du3IxqUrAfQ=', 1, 'Nguyễn Đăng Khoa', 0),
(17, 'haidang', 'VUGPCGuEjarmkXKQ1UJIKzXr2kFT/m49du3IxqUrAfQ=', 1, 'Mai Hoàng Hải Đăng', 0),
(18, 'kinhluan', 'VUGPCGuEjarmkXKQ1UJIKzXr2kFT/m49du3IxqUrAfQ=', 1, 'Bùi Điều Kinh Luân', 0),
(19, 'hoanglam', 'VUGPCGuEjarmkXKQ1UJIKzXr2kFT/m49du3IxqUrAfQ=', 1, 'Nguyễn Hoàng Lâm', 0),
(20, 'bichkieu', 'VUGPCGuEjarmkXKQ1UJIKzXr2kFT/m49du3IxqUrAfQ=', 0, 'Châu Ngọc Bích Kiều', 0),
(21, 'quochuy', 'VUGPCGuEjarmkXKQ1UJIKzXr2kFT/m49du3IxqUrAfQ=', 1, 'Lê Thanh Quốc Huy', 0),
(22, 'quocviet', 'VUGPCGuEjarmkXKQ1UJIKzXr2kFT/m49du3IxqUrAfQ=', 1, 'Võ Quốc Việt', 0),
(23, 'ngochai', 'VUGPCGuEjarmkXKQ1UJIKzXr2kFT/m49du3IxqUrAfQ=', 1, 'Hà Ngọc Hải', 0),
(24, 'thanhdo', 'VUGPCGuEjarmkXKQ1UJIKzXr2kFT/m49du3IxqUrAfQ=', 1, 'Nguyễn Thành Đô', 0),
(25, 'conheocon25', 'VUGPCGuEjarmkXKQ1UJIKzXr2kFT/m49du3IxqUrAfQ=', 1, 'Nguyễn Thanh Bảo', 4),
(26, 'nguyenduc', 'VUGPCGuEjarmkXKQ1UJIKzXr2kFT/m49du3IxqUrAfQ=', 1, 'Nguyễn Thái Đức', 0),
(27, 'nguyenphuong', 'VUGPCGuEjarmkXKQ1UJIKzXr2kFT/m49du3IxqUrAfQ=', 0, 'Lê Nguyên Phương', 0),
(28, 'tiendung', 'VUGPCGuEjarmkXKQ1UJIKzXr2kFT/m49du3IxqUrAfQ=', 1, 'Lê Tiến Dũng', 0),
(29, 'ngoctho', 'VUGPCGuEjarmkXKQ1UJIKzXr2kFT/m49du3IxqUrAfQ=', 1, 'Bùi Văn Ngọc Thơ', 0),
(30, 'nhattan', 'VUGPCGuEjarmkXKQ1UJIKzXr2kFT/m49du3IxqUrAfQ=', 1, 'Nguyễn Nhật Tân', 0),
(31, 'tolan', 'VUGPCGuEjarmkXKQ1UJIKzXr2kFT/m49du3IxqUrAfQ=', 0, 'Trần Thị Tố Lan', 0),
(32, 'huugiao', 'VUGPCGuEjarmkXKQ1UJIKzXr2kFT/m49du3IxqUrAfQ=', 1, 'Võ Hữu Giao', 0),
(33, 'tronghuynh', 'VUGPCGuEjarmkXKQ1UJIKzXr2kFT/m49du3IxqUrAfQ=', 1, 'Lê Nguyễn Trọng Huỳnh', 0),
(34, 'thanhquang', 'VUGPCGuEjarmkXKQ1UJIKzXr2kFT/m49du3IxqUrAfQ=', 1, 'Phạm Thanh Quang', 0);

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
-- Constraints for table `ktth_news`
--
ALTER TABLE `ktth_news`
  ADD CONSTRAINT `ktth_news_1` FOREIGN KEY (`id_category`) REFERENCES `ktth_category_news` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `ktth_salarydaily`
--
ALTER TABLE `ktth_salarydaily`
  ADD CONSTRAINT `ktth_salarydaily_1` FOREIGN KEY (`id_category`) REFERENCES `ktth_category` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `ktth_salarydaily_2` FOREIGN KEY (`id_employee`) REFERENCES `ktth_user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `ktth_video_library`
--
ALTER TABLE `ktth_video_library`
  ADD CONSTRAINT `ktth_video_library_1` FOREIGN KEY (`id_category`) REFERENCES `ktth_category_video` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `ktth_video_library_2` FOREIGN KEY (`id_video`) REFERENCES `ktth_video` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
