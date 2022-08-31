-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 13, 2020 at 11:17 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `manage_information`
--

-- --------------------------------------------------------

--
-- Table structure for table `join_activities`
--

CREATE TABLE `join_activities` (
  `id_j` int(11) NOT NULL,
  `id_p` int(11) NOT NULL,
  `id_stu` int(11) NOT NULL,
  `date_j` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `statu_j` varchar(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `join_activities`
--

INSERT INTO `join_activities` (`id_j`, `id_p`, `id_stu`, `date_j`, `statu_j`) VALUES
(21, 9, 14, '2020-09-24 16:52:27', '2'),
(22, 10, 14, '2020-10-26 19:03:05', '2'),
(23, 11, 14, '2020-11-04 12:27:30', '2'),
(24, 12, 19, '2020-11-10 09:35:06', '2'),
(25, 13, 20, '2020-11-10 09:40:49', '2'),
(26, 13, 19, '2020-11-10 09:40:54', '2');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id_n` int(11) NOT NULL,
  `name_n` varchar(255) NOT NULL,
  `detail_n` text NOT NULL,
  `date_n` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id_n`, `name_n`, `detail_n`, `date_n`) VALUES
(3, 'แจ้งให้ทราบวันนี้เจ้าหน้าที่ไม่อยู่', 'เจ้าหน้าที่ไปทำธุระประมาณตั้งแต่เวลา9.00 น.- 13.00 น.', '2020-09-24 16:32:18'),
(4, 'ห้องสมุดปิดเวลา16.00น.', 'หกดหกด', '2020-11-10 09:49:41');

-- --------------------------------------------------------

--
-- Table structure for table `personnel`
--

CREATE TABLE `personnel` (
  `per_id` int(11) NOT NULL,
  `profile` text NOT NULL,
  `per_perfix` varchar(6) NOT NULL,
  `per_name` varchar(255) NOT NULL,
  `per_lastname` varchar(255) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `status` varchar(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `personnel`
--

INSERT INTO `personnel` (`per_id`, `profile`, `per_perfix`, `per_name`, `per_lastname`, `username`, `password`, `status`) VALUES
(1, 'Admin.jpg', 'นาย', 'ผู้ดูแล', 'ระบบ', 'admin1234', '123456', '1'),
(3, 'hjgfyyu.png', 'นาย', 'ผู้บริหาร', 'ผู้บริหาร', '222222', '222222', '2'),
(9, 'bg2.jpg', 'นาง', 'วารุนี', 'เพียรพจน์', 'bbbbbb', 'bbbbbb', '3'),
(8, 'bg6.jpg', 'นาย', 'เจ้าหน้าที่', 'กยศ', '333333', '333333', '4'),
(10, 'uiho.jpg', 'นาย', 'วีระ', 'กงลีมา', 'vira1234', '123456', '3'),
(11, 'hjgfyyu.png', 'นาง', 'ศศธร', 'มาศสถิตย์', 'aaaaaa', 'aaaaaa', '3');

-- --------------------------------------------------------

--
-- Table structure for table `project_participation`
--

CREATE TABLE `project_participation` (
  `id_p` int(11) NOT NULL,
  `activity_name` varchar(255) NOT NULL COMMENT 'ชื่อกิจกรรม',
  `situation` varchar(255) NOT NULL COMMENT 'สถานที่',
  `join_date` date NOT NULL COMMENT 'วันที่เข้าร่วม',
  `join_time` time NOT NULL COMMENT 'เวลาที่เข้าร่วม',
  `end_time` time NOT NULL,
  `type` varchar(255) NOT NULL COMMENT 'ประเภทกิจกรรม',
  `datail` text NOT NULL COMMENT 'รายละเอียดกิจกรรม',
  `number_pract` int(10) NOT NULL COMMENT 'จำนวนผู้เข้าร่วม'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `project_participation`
--

INSERT INTO `project_participation` (`id_p`, `activity_name`, `situation`, `join_date`, `join_time`, `end_time`, `type`, `datail`, `number_pract`) VALUES
(12, 'กวาดห้องสมุด111', 'กดเ.png', '2020-11-10', '16:33:00', '17:33:00', 'ห้องสมุด', 'asdasdasd', 1),
(13, 'จัดชั้นหนังสือ', 'uiho.jpg', '2020-11-10', '08:00:00', '16:00:00', 'ห้องสมุด', 'ฟหกฟหกฟหก', 5),
(11, 'ยกเก้าอี้ไปวางชั้น 3 ', 'hjgfyyu.png', '2020-11-04', '19:25:00', '20:25:00', 'ห้องสมุด', 'เอาไปให้ครบ 10 ตัว', 1),
(9, 'กวาดห้องสมุด', 'hjgfyyu.png', '2020-09-24', '21:39:00', '23:39:00', 'กวาดห้องสมุดทั่วไป', 'ทำให้สะอาด', 1),
(10, 'จัดเรียงหนังสือ', 'upo.jpg', '2020-10-27', '02:00:00', '03:00:00', 'ทั่วไป', 'จัดทำตามเวลาที่กำหนด จัดโต๊ะและเก้าอี้ให้เป็นระเบียบด้วย', 1);

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

CREATE TABLE `question` (
  `id_ques` int(5) NOT NULL,
  `create_ques` datetime NOT NULL,
  `question` varchar(70) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `question`
--

INSERT INTO `question` (`id_ques`, `create_ques`, `question`) VALUES
(2, '2020-09-06 20:59:13', 'อยากทราบว่าเจ้าหน้าที่อยู่ชั้นไหน');

-- --------------------------------------------------------

--
-- Table structure for table `reply`
--

CREATE TABLE `reply` (
  `id_reply` int(5) NOT NULL,
  `id_ques` int(5) NOT NULL,
  `create_reply` datetime NOT NULL,
  `detail_reply` text NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `reply`
--

INSERT INTO `reply` (`id_reply`, `id_ques`, `create_reply`, `detail_reply`, `name`) VALUES
(3, 2, '2020-11-10 16:50:19', 'ชั้น 2', 'นายวีระ  กงลีมา');

-- --------------------------------------------------------

--
-- Table structure for table `studen`
--

CREATE TABLE `studen` (
  `id_stu` int(11) NOT NULL,
  `perfix` varchar(40) NOT NULL,
  `name_stu` varchar(150) NOT NULL,
  `sur_stu` varchar(150) NOT NULL,
  `tel_stu` char(10) NOT NULL,
  `user` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `studen`
--

INSERT INTO `studen` (`id_stu`, `perfix`, `name_stu`, `sur_stu`, `tel_stu`, `user`, `pass`) VALUES
(20, 'นาย', 'ธวัชชัย', 'วงค์ษาเนาว์', '0855555555', 'tawatchai', '123456'),
(19, 'นาย', 'ณัฐชัย', 'วงค์ษาเนาว์', '0855555555', 'nuttachai', '123456'),
(14, 'นาย', 'สุุวัฒน์', 'หอมไกรลาศ', '0930516393', 'suwath', '123456');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `join_activities`
--
ALTER TABLE `join_activities`
  ADD PRIMARY KEY (`id_j`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id_n`);

--
-- Indexes for table `personnel`
--
ALTER TABLE `personnel`
  ADD PRIMARY KEY (`per_id`);

--
-- Indexes for table `project_participation`
--
ALTER TABLE `project_participation`
  ADD PRIMARY KEY (`id_p`);

--
-- Indexes for table `question`
--
ALTER TABLE `question`
  ADD PRIMARY KEY (`id_ques`);

--
-- Indexes for table `reply`
--
ALTER TABLE `reply`
  ADD PRIMARY KEY (`id_reply`);

--
-- Indexes for table `studen`
--
ALTER TABLE `studen`
  ADD PRIMARY KEY (`id_stu`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `join_activities`
--
ALTER TABLE `join_activities`
  MODIFY `id_j` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id_n` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `personnel`
--
ALTER TABLE `personnel`
  MODIFY `per_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `project_participation`
--
ALTER TABLE `project_participation`
  MODIFY `id_p` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `question`
--
ALTER TABLE `question`
  MODIFY `id_ques` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `reply`
--
ALTER TABLE `reply`
  MODIFY `id_reply` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `studen`
--
ALTER TABLE `studen`
  MODIFY `id_stu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
