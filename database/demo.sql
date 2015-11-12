-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 01, 2015 at 03:11 PM
-- Server version: 5.6.25
-- PHP Version: 5.6.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `demo`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

DROP TABLE IF EXISTS `tbl_user`;
CREATE TABLE IF NOT EXISTS `tbl_user` (
  `id` int(11) NOT NULL,
  `name` varchar(50) CHARACTER SET utf8 NOT NULL,
  `address` varchar(50) CHARACTER SET utf8 NOT NULL,
  `phone` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `name`, `address`, `phone`, `email`, `created_at`, `updated_at`) VALUES
(3, 'Anne Chau', 'Cau giay,Ha Noi', '+9779842411793', 'ane.chau@gmail.com', '2015-10-26 00:00:00', '2015-10-26 00:00:00'),
(4, 'Nguyen Thi Nhung 1', '193 Tran Hung Dao, HCM', '+9779842411793', 'nhungnt@gmail.com', '2015-10-26 00:00:00', '2015-10-27 04:28:28'),
(5, 'Nguyen Le Cong Chinh', 'Ha Dong, Ha noi', '+9779842411793', 'chinhvt@gmail.com', '2015-10-26 11:17:17', '2015-10-26 13:58:58'),
(6, 'Le Hung Viet Bao', 'Cau Giay, Ha Noi', '+9779842411793', 'vietbao@gmail.com', '2015-10-26 00:00:00', '2015-10-26 16:21:15'),
(7, 'Nguyen Phan Cong Tri', 'Huong Khe,  Ha Tinh', '+9779842411793', 'hunguit@yahoo.com', '2015-10-26 00:00:00', '2015-10-26 00:00:00'),
(8, 'Phan Hung', 'Ha Dong, Ha noi', '+9779842411793', 'hunguit@gmail.com', '2015-10-26 00:00:00', '2015-10-26 00:00:00'),
(9, 'Steven Ning Nguyen', 'Ha Dong, Ha noi', '+9779842411793', 'hung_developer@yahoo.com', '2015-10-26 12:32:38', '2015-10-26 14:17:32'),
(10, 'phan xuan hung 2', '193 tran hung dao, hcm', '0923423432', 'hunguit@yahoo.com', '2015-10-26 00:00:00', '2015-10-26 00:00:00'),
(11, 'phan xuan hung 8', '193 tran hung dao 1', '0982043592', 'hung_developer@yahoo.com', '2015-10-26 00:00:00', '2015-10-26 00:00:00'),
(12, 'Phan Xuan Hung 9', '193 tran hung dao', '0982043592', 'hunguit@yahoo.com', '2015-10-26 04:07:18', '2015-10-26 13:47:37'),
(13, 'Phan Xuan Hung 2', 'Ha Dong, Ha noi', '0982043592', 'vietbao@gmail.com', '2015-10-26 06:06:07', '2015-10-26 14:09:14'),
(16, 'Nguyễn Văn Lộc1', '193 tran hung dao', '0982043592', 'hunguit@yahoo.com', '2015-10-26 14:14:14', '2015-10-26 14:17:11'),
(17, 'Nguyễn Văn Lộc 2', '193 tran hung dao', '0982043592', 'hunguit@yahoo.com', '2015-10-26 14:33:30', '2015-10-27 04:50:31'),
(18, 'Phan Xuan Hung', 'Ha Dong, Ha noi', '0982043592', 'hunguit@yahoo.com', '2015-10-26 14:34:32', '2015-10-26 14:34:50'),
(19, 'Steven Ning Nguyen', 'Ha Dong, Ha noi', '0982043595', 'vietbao@gmail.com', '2015-10-26 14:58:52', '2015-10-27 20:33:48'),
(20, 'Phan Xuan Hung', '193 Tran Hung Dao', '0982.043.592', 'hunguit@yahoo.com', '2015-11-01 19:15:05', '2015-11-01 19:15:05'),
(21, 'Phan Xuan Hung', '193 Tran Hung Dao', '0982.043.592', 'hunguit@yahoo.com', '2015-11-01 19:30:33', '2015-11-01 19:30:33'),
(22, 'Phan Xuan Hung', '193 Tran Hung Dao', '0982.043.592', 'hunguit@yahoo.com', '2015-11-01 19:31:34', '2015-11-01 19:31:34'),
(23, 'Phan Xuan Hung', '193 Tran Hung Dao', '0982.043.592', 'hunguit@yahoo.com', '2015-11-01 19:39:01', '2015-11-01 19:39:01'),
(24, 'Phan Xuan Hung', '193 Tran Hung Dao', '0982.043.592', 'hunguit@yahoo.com', '2015-11-01 19:39:36', '2015-11-01 19:39:36'),
(25, 'Phan Xuan Hung', '193 Tran Hung Dao', '0982.043.592', 'hunguit@yahoo.com', '2015-11-01 19:40:03', '2015-11-01 19:40:03'),
(26, 'Phan Xuan Hung', '193 Tran Hung Dao', '0982.043.592', 'hunguit@yahoo.com', '2015-11-01 19:41:01', '2015-11-01 19:41:01'),
(27, 'Phan Xuan Hung', '193 Tran Hung Dao', '0982.043.592', 'hunguit@yahoo.com', '2015-11-01 19:42:13', '2015-11-01 19:42:13'),
(28, 'Phan Xuan Hung', '193 Tran Hung Dao', '0982.043.592', 'hunguit@yaho.com', '2015-11-01 19:42:47', '2015-11-01 19:42:47'),
(29, 'Phan Xuan Hung', '193 Tran Hung Dao', '0982.043.592', 'hunguit@yaho.com', '2015-11-01 19:42:59', '2015-11-01 19:42:59'),
(30, 'Phan Xuan Hung', '193 Tran Hung Dao', '0982.043.592', 'hunguit@yaho.com', '2015-11-01 19:43:06', '2015-11-01 19:43:06'),
(31, 'Phan Xuan Hung', '193 Tran Hung Dao', '0982.043.592', 'hunguit@yaho.com', '2015-11-01 19:44:24', '2015-11-01 19:44:24'),
(32, 'Phan Xuan Hung', '193 Tran Hung Dao', '0982.043.592', 'hunguit@yaho.com', '2015-11-01 19:44:29', '2015-11-01 19:44:29'),
(33, 'Phan Xuan Hung', '193 Tran Hung Dao', '0982.043.592', 'hunguit@yaho.com', '2015-11-01 19:46:30', '2015-11-01 19:46:30'),
(34, 'Phan Xuan Hung', '193 Tran Hung Dao', '0982.043.592', 'hunguit@yaho.com', '2015-11-01 19:46:35', '2015-11-01 19:46:35'),
(40, 'Phan xuan Hng', '193 tran hung dao ,quan 1', '029343438', 'hungabc@yahoo.com', '2015-11-01 21:09:52', '2015-11-01 21:09:52');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=41;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
