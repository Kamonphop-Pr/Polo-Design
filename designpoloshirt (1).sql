-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 16, 2023 at 06:32 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10
CREATE DATABASE  IF NOT EXISTS `designpoloshirt` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `designpoloshirt`;
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `designpoloshirt`
--

-- --------------------------------------------------------

--
-- Table structure for table `billing`
--
CREATE TABLE `billing` (
  `billing_id` bigint(32) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `email` varchar(145) NOT NULL,
  `address` varchar(500) NOT NULL,
  `phone_number` varchar(14) NOT NULL,
  `net_price` double NOT NULL,
  `deposit` double NOT NULL,
  `slip_img_1` varchar(255) DEFAULT NULL,
  `slip_img_2` varchar(255) DEFAULT NULL,
  `create_billing` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `update_billing` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `billing_status` tinyint(3) NOT NULL,
  `design_id` varchar(32) NOT NULL,
  `frabic_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `billing`
--

INSERT INTO `billing` (`billing_id`, `fname`, `lname`, `email`, `address`, `phone_number`, `net_price`, `deposit`, `slip_img_1`, `slip_img_2`, `create_billing`, `update_billing`, `billing_status`, `design_id`, `frabic_id`) VALUES
(20230127164523, 'เทส', 'เทส', 'test@test.com', '123   บางคอแหลม   บางคอแหลม   กรุงเทพมหานคร   10120', '099-323-0348', 37512, 18756, NULL, NULL, '2023-03-16 05:09:06', '2023-03-16 05:09:06', 8, 'NC20233349624982984', 6),
(20230128221028, 'เทส', 'เทส', 'test@test.com', '123   บางคอแหลม   บางคอแหลม   กรุงเทพมหานคร   10120', '099-323-0348', 18896, 9448, '', '', '2023-03-16 05:03:02', '2023-03-16 05:03:02', 0, 'NC20233349624982984', 5),
(20230128221454, 'เทส', 'เทส', 'test@test.com', '123   บางคอแหลม   บางคอแหลม   กรุงเทพมหานคร   10120', '099-323-0348', 33930, 16965, NULL, NULL, '2023-03-16 05:09:05', '2023-03-16 05:09:05', 0, 'NC20233349837539642', 8);

-- --------------------------------------------------------

--
-- Table structure for table `billing_detail`
--

CREATE TABLE `billing_detail` (
  `billing_id` bigint(32) NOT NULL,
  `size_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `billing_detail`
--

INSERT INTO `billing_detail` (`billing_id`, `size_id`, `quantity`, `price`) VALUES
(20230127164523, 3, 7, 297),
(20230128221028, 3, 5, 289),
(20230128221454, 3, 4, 315),
(20230127164523, 4, 6, 297),
(20230127164523, 6, 6, 297),
(20230128221454, 6, 3, 315),
(20230127164523, 7, 5, 317),
(20230128221028, 7, 5, 309),
(20230128221454, 7, 4, 335),
(20230127164523, 8, 67, 337),
(20230128221454, 8, 5, 355),
(20230128221028, 10, 35, 289),
(20230128221454, 10, 6, 315),
(20230127164523, 11, 6, 297),
(20230128221028, 11, 5, 289),
(20230128221454, 11, 7, 315),
(20230127164523, 12, 5, 297),
(20230128221028, 12, 4, 289),
(20230128221454, 12, 62, 315),
(20230127164523, 14, 7, 297),
(20230128221454, 14, 6, 315),
(20230128221028, 15, 5, 309),
(20230128221454, 15, 5, 335),
(20230127164523, 16, 7, 337),
(20230128221028, 16, 5, 329),
(20230128221454, 16, 4, 355);

-- --------------------------------------------------------

--
-- Table structure for table `color`
--

CREATE TABLE `color` (
  `color_id` int(11) NOT NULL,
  `color_body` varchar(45) NOT NULL,
  `color_pocket` varchar(45) NOT NULL,
  `color_bag` varchar(45) NOT NULL,
  `color_sleeve` varchar(45) NOT NULL,
  `color_collar` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `color`
--

INSERT INTO `color` (`color_id`, `color_body`, `color_pocket`, `color_bag`, `color_sleeve`, `color_collar`) VALUES
(4, '030537', 'FFFFFF', 'FFFFFF', 'FFFFFF', '52a2e3'),
(5, 'f2470f', 'FFFFFF', 'FFFFFF', 'FFFFFF', 'FFFFFF'),
(6, '1f2684', 'FFFFFF', 'FFFFFF', 'FFFFFF', 'FFFFFF'),
(7, 'FFFFFF', 'FFFFFF', 'FFFFFF', 'FFFFFF', 'FFFFFF'),
(8, 'FFFFFF', 'FFFFFF', 'FFFFFF', 'FFFFFF', 'FFFFFF'),
(9, 'ccff00', 'FFFFFF', 'FFFFFF', 'FFFFFF', 'FFFFFF'),
(10, 'f2470f', 'd20900', 'FFFFFF', '70d8eb', '000000');

-- --------------------------------------------------------

--
-- Table structure for table `design`
--

CREATE TABLE `design` (
  `design_id` varchar(32) NOT NULL,
  `design_img` varchar(255) NOT NULL,
  `color_id` int(11) NOT NULL,
  `user_id` bigint(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `design`
--

INSERT INTO `design` (`design_id`, `design_img`, `color_id`, `user_id`) VALUES
('NC20233349624982984', 'images/design/NC20233349624982984.png', 4, 2),
('NC20233349827810252', 'images/design/NC20233349827810252.png', 5, 1),
('NC20233349827847250', 'images/design/NC20233349827847250.png', 6, 1),
('NC20233349827992624', 'images/design/NC20233349827992624.png', 7, 1),
('NC20233349828104520', 'images/design/NC20233349828104520.png', 8, 1),
('NC20233349828145572', 'images/design/NC20233349828145572.png', 9, 1),
('NC20233349837539642', 'images/design/NC20233349837539642.png', 10, 2);

-- --------------------------------------------------------

--
-- Table structure for table `frabic`
--

CREATE TABLE `frabic` (
  `frabic_id` int(11) NOT NULL,
  `frabic_name` varchar(45) NOT NULL,
  `frabic_info` varchar(255) NOT NULL,
  `frabic_price` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `frabic`
--

INSERT INTO `frabic` (`frabic_id`, `frabic_name`, `frabic_info`, `frabic_price`) VALUES
(1, 'Syntex™', 'เสื้อโปโล Syntex™ ราคาประหยัด คุ้มค่า สามารถนำไปใส่ได้ดูดี ลักษณะผ้าจะเงาลื่น ไม่หด ไม่ย้วย', 229),
(2, 'Syntex+™', 'ยกระดับขึ้นมาจากเสื้อโปโล Syntex™ ด้วยคุณสมบัติการระบายอากาศ และ ความคงทนที่สูงขึ้น ผลิตจากเส้นใย Micro Fiber ขนาดเล็ก เนื้อผ้ามีความยืดหยุ่นดี ให้ความรู้สึกนุ่มแต่ยังคงคุณสมบัติที่ดีของผ้า Syntex™ ไว้', 243),
(3, 'Cool Blend™', 'มีส่วนผสมของ Cotton 35% และ Polyester 65% มีความนุ่มสวย และระบายอากาศได้ดี และใส่สบายเนื่องจากมีส่วนผสมของ Cotton สีสันสดใส ไม่หด ไม่ย้วย', 267),
(4, 'Cool Blend+™', 'มีส่วนผสมของ Cotton 35% และ Micro Polyester 65% มีความนุ่มสวย ยืดหยุ่น ระบายอากาศได้ดี เหมาะกับใข้งานภายในออฟฟิศ สำนักงาน', 288),
(5, 'Sport Nano™', 'ผลิตจากเนื้อผ้า 100% polyester แต่ด้วย Nano Technology ทำให้มีคุณสมบัติพิเศษ ในการระบายอากาศที่ดีกว่าเส้นใยธรรมชาติ เหมาะกับการใช้งานภายนอก สีสันสดใส ไม่ย้วย ระบายอากาศได้ดี และไม่เกิดกลิ่น', 289),
(6, 'Prestige Lacoste™', 'ทอด้วยเส้นใย Cotton 35% และ Polyester 65% ด้วยลายผ้าแบบ Lacoste เนื้อผ้ามีความหนา และหนักกว่าทำให้ใส่แล้วทิ้งตัวสวย', 297),
(7, 'Silver Tech™', 'ผลิตจากเนื้อผ้า polyeser 100% ทอพิเศษด้วย Nano Technology ช่วยทำให้เนื้อผ้ามีคุณสมบัติแห้งไว และเคลือบสารยับยั้ยการเกิดกลิ่น และการเจริญเติบโตของแบคทีเรีย ไม่หดไม่ย้วย สีสันสดใส ไม่เกิดกลิ่น', 305),
(8, 'UV Tech™', 'ทอด้วยผ้า 2 ชั้น ด้านนอกเป็นผ้าตาข่าย polyester ด้านในเป็น Cotton หน้าเรียบ พิเศษช่วยระบายเหงื่อและอากาศออกด้านนอก มาพร้อมการเคลือบสารป้องกันรังสี UV เหมาะกับการใส่ทั้งภายใน และภายนอก', 320);

-- --------------------------------------------------------

--
-- Table structure for table `size`
--

CREATE TABLE `size` (
  `size_id` int(11) NOT NULL,
  `size_name` varchar(45) NOT NULL,
  `size_price` int(11) NOT NULL,
  `size_gender` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `size`
--

INSERT INTO `size` (`size_id`, `size_name`, `size_price`, `size_gender`) VALUES
(1, 'XS', 0, 0),
(2, 'S', 0, 0),
(3, 'M', 0, 0),
(4, 'L', 0, 0),
(5, 'XL', 0, 0),
(6, '2XL', 0, 0),
(7, '3XL', 20, 0),
(8, '4XL', 40, 0),
(9, 'XS', 0, 1),
(10, 'S', 0, 1),
(11, 'M', 0, 1),
(12, 'L', 0, 1),
(13, 'XL', 0, 1),
(14, '2XL', 4, 1),
(15, '3XL', 20, 1),
(16, '4XL', 40, 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` bigint(32) NOT NULL,
  `username` varchar(45) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(300) NOT NULL,
  `user_status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `username`, `email`, `password`, `user_status`) VALUES
(1, 'admin', 'admin@gmail.com', '$2y$10$gizuulzUXeEoQi52EP3OPeCUss34eElYi1lP.byWkjiKD50J5uaaC', 1),
(2, 'Thanadet', 'Test@test.com', '$2y$10$OV/YtbOgS36oXcvT5CsbbeCUrWMC/KaXNCX6bQzDO/iUt8NxHcogu', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `billing`
--
ALTER TABLE `billing`
  ADD PRIMARY KEY (`billing_id`),
  ADD KEY `fk_frabic_id_idx` (`frabic_id`),
  ADD KEY `fk_design_id_idx` (`design_id`);

--
-- Indexes for table `billing_detail`
--
ALTER TABLE `billing_detail`
  ADD PRIMARY KEY (`size_id`,`billing_id`),
  ADD KEY `fk_size_idx` (`size_id`),
  ADD KEY `fk_billing_id_idx` (`billing_id`);

--
-- Indexes for table `color`
--
ALTER TABLE `color`
  ADD PRIMARY KEY (`color_id`);

--
-- Indexes for table `design`
--
ALTER TABLE `design`
  ADD PRIMARY KEY (`design_id`),
  ADD KEY `fk_color_id_idx` (`color_id`),
  ADD KEY `user_id_idx` (`user_id`);

--
-- Indexes for table `frabic`
--
ALTER TABLE `frabic`
  ADD PRIMARY KEY (`frabic_id`);

--
-- Indexes for table `size`
--
ALTER TABLE `size`
  ADD PRIMARY KEY (`size_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `billing`
--
ALTER TABLE `billing`
  MODIFY `billing_id` bigint(32) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20230128221455;

--
-- AUTO_INCREMENT for table `color`
--
ALTER TABLE `color`
  MODIFY `color_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` bigint(32) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `billing`
--
ALTER TABLE `billing`
  ADD CONSTRAINT `fk_design_id` FOREIGN KEY (`design_id`) REFERENCES `design` (`design_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_frabic_id` FOREIGN KEY (`frabic_id`) REFERENCES `frabic` (`frabic_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `billing_detail`
--
ALTER TABLE `billing_detail`
  ADD CONSTRAINT `fk_billing_id` FOREIGN KEY (`billing_id`) REFERENCES `billing` (`billing_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_size` FOREIGN KEY (`size_id`) REFERENCES `size` (`size_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `design`
--
ALTER TABLE `design`
  ADD CONSTRAINT `fk_color_id` FOREIGN KEY (`color_id`) REFERENCES `color` (`color_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `user_id` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
