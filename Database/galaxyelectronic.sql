-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 09, 2021 at 10:08 AM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `galaxyelectronic`
--

-- --------------------------------------------------------

--
-- Table structure for table `cartcount`
--

CREATE TABLE `cartcount` (
  `tenantid` varchar(200) NOT NULL,
  `productname` varchar(200) NOT NULL,
  `productprice` varchar(20) NOT NULL,
  `productquantity` varchar(50) NOT NULL,
  `producttotalamount` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cartcount`
--

INSERT INTO `cartcount` (`tenantid`, `productname`, `productprice`, `productquantity`, `producttotalamount`) VALUES
('fsdff', 'fdfd', '100', '2', '2321'),
('fsdff', 'fdfd', '100', '2', '2321');

-- --------------------------------------------------------

--
-- Table structure for table `forgot`
--

CREATE TABLE `forgot` (
  `email` varchar(50) NOT NULL,
  `otp` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `forgot`
--

INSERT INTO `forgot` (`email`, `otp`) VALUES
('fs19if043@gmail.com', 392784);

-- --------------------------------------------------------

--
-- Table structure for table `maintenance`
--

CREATE TABLE `maintenance` (
  `WAAT` varchar(20) NOT NULL,
  `LED_Bulb` int(100) NOT NULL,
  `LED_Tube_Light` int(100) NOT NULL,
  `LED_Street_Light` int(100) NOT NULL,
  `LED_Capsule_Street_Light` int(100) NOT NULL,
  `LED_FloodLight_Slim_Body` int(100) NOT NULL,
  `LED_FloodLight_Back_Choke` int(100) NOT NULL,
  `LED_High_Bay` int(100) NOT NULL,
  `LED_Panel_Light` int(100) NOT NULL,
  `Water_Heater` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `maintenance`
--

INSERT INTO `maintenance` (`WAAT`, `LED_Bulb`, `LED_Tube_Light`, `LED_Street_Light`, `LED_Capsule_Street_Light`, `LED_FloodLight_Slim_Body`, `LED_FloodLight_Back_Choke`, `LED_High_Bay`, `LED_Panel_Light`, `Water_Heater`) VALUES
('5 WAAT', 114, 8, 0, 0, 0, 0, 0, 0, 3),
('7 WAAT', 95, 0, 0, 0, 0, 0, 0, 0, 0),
('9 WAAT', 5, 0, 0, 0, 0, 0, 0, 0, 0),
('12 WAAT', 20, 0, 0, 0, 0, 0, 0, 0, 0),
('15 WAAT', 0, 0, 2, 0, 0, 0, 0, 0, 0),
('10 WAAT', 10, 0, 0, 0, 0, 15, 0, 0, 0),
('20 WAAT', -15, 0, 0, 0, 0, 0, 0, 0, 0),
('24 WAAT', 0, 0, 0, 0, 0, 0, 0, 0, 0),
('30 WAAT', 0, 0, 0, 0, 0, 0, 0, 0, 0),
('40 WAAT', 0, 0, 0, 0, 0, 0, 0, 0, 0),
('50 WAAT', 0, 0, 0, 0, 0, 0, 0, 0, 0),
('60 WAAT', 0, 0, 0, 0, 0, 0, 0, 0, 0),
('100 WAAT', 0, 0, 0, 0, 0, 0, 0, 0, 0),
('150 WAAT', 0, 0, 0, 0, 0, 0, 20, 0, 0),
('200 WAAT', 0, 0, 0, 0, 0, 0, 0, 0, 0),
('6W-8W SQ', 0, 0, 0, 0, 0, 0, 0, 0, 0),
('6W-8W RD', 0, 0, 0, 0, 0, 0, 0, 0, 0),
('6W-8W SQ Surface Pan', 0, 0, 0, 0, 0, 0, 0, 0, 0),
('bulb', 0, 0, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `newproduct`
--

CREATE TABLE `newproduct` (
  `srno` int(6) NOT NULL,
  `productid` varchar(200) NOT NULL,
  `productwatt` varchar(20) NOT NULL,
  `productname` varchar(200) NOT NULL,
  `productprice` int(200) NOT NULL,
  `productimg` varchar(1000) NOT NULL,
  `productwaranty` int(200) NOT NULL,
  `productfeatureone` varchar(50) NOT NULL,
  `productfeaturetwo` varchar(50) NOT NULL,
  `productfeaturethree` varchar(50) NOT NULL,
  `productfeaturefour` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `tenantid` varchar(100) NOT NULL,
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `address` varchar(200) NOT NULL,
  `pincode` int(6) NOT NULL,
  `payment` varchar(15) NOT NULL,
  `amount` varchar(200) NOT NULL,
  `gst` int(11) NOT NULL,
  `finalamount` varchar(20) NOT NULL,
  `orderid` varchar(20) NOT NULL,
  `status` varchar(10) NOT NULL,
  `time` datetime(6) NOT NULL DEFAULT current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`tenantid`, `firstname`, `lastname`, `email`, `mobile`, `address`, `pincode`, `payment`, `amount`, `gst`, `finalamount`, `orderid`, `status`, `time`) VALUES
('omka-part-9372-omk-8313', 'Ricky', 'Parte', 'fs19if043@gmail.com', '8928007199', 'dombivali east', 421201, '1', '1750', 315, '2065', 'GLXODR89502', '1', '2021-11-26 19:58:32.491059'),
('omka-part-9372-omk-8313', 'Ricky', 'Parte', 'fs19if043@gmail.com', '8928007199', 'pune', 654223, 'Choose...', '2550', 459, '3009', 'GLXODR19725', '1', '2021-11-26 20:01:40.055214'),
('omka-part-9372-omk-8313', 'Ricky', 'Parte', 'fs19if043@gmail.com', '8928007199', 'mankhurd', 421201, '1', '800', 144, '944', 'GLXODR70441', '1', '2021-11-28 17:39:22.254940'),
('Anik-Metk-9372-dfg-1476', 'omkar', 'Parte', 'omkar@gmail.com', '8928007199', 'pune', 421201, '1', '3900', 702, '4602', 'GLXODR86020', '1', '2021-11-28 17:45:04.426826'),
('Anik-Metk-9372-dfg-1476', 'Ricky', 'Parte', 'fs19if043@gmail.com', '8928007199', 'pune', 542232, '1', '250', 45, '295', 'GLXODR98331', '1', '2021-11-28 17:47:25.459878'),
('Anik-Metk-9372-dfg-1476', 'omkar', 'Parte', 'fs19if043@gmail.com', '8928007199', 'dombivali east', 421201, '1', '1050', 189, '1239', 'GLXODR82834', '1', '2021-11-28 17:49:54.760263'),
('Anik-Metk-9372-dfg-1476', 'Aniket', 'Metkari', 'fs19if043@gmail.com', '8928007199', 'pune', 542232, '1', '1050', 189, '1239', 'GLXODR15808', '1', '2021-11-28 18:37:37.323925'),
('Anik-Metk-9372-dfg-1476', 'omkar', 'Parte', 'fs19if043@gmail.com', '8928007199', 'pune', 421201, '1', '1500', 270, '1770', 'GLXODR44504', '1', '2021-11-28 18:38:32.355371'),
('Anik-Metk-9372-dfg-1476', 'omkar', 'Parte', 'fs19if043@gmail.com', '8928007199', 'dombivali east', 421201, '1', '800', 144, '944', 'GLXODR87853', '1', '2021-11-28 18:39:50.269899'),
('omka-part-9372-omk-8313', 'Ricky', 'Parte', 'fs19if043@gmail.com', '8928007199', 'pune', 421201, '1', '1800', 324, '2124', 'GLXODR12350', '1', '2021-11-28 19:28:09.954709'),
('omka-part-9372-omk-8313', 'Ricky', 'Parte', 'fs19if043@gmail.com', '8928007199', 'pune', 421201, '1', '250', 45, '295', 'GLXODR50204', '1', '2021-11-28 19:29:10.913635'),
('omka-part-9372-omk-8313', 'omkar', 'Parte', 'fs19if043@gmail.com', '8928007199', 'pune', 654223, '1', '250', 45, '295', 'GLXODR54335', '1', '2021-11-28 19:34:53.753958'),
('omka-part-9372-omk-8313', 'Ricky', 'Parte', 'fs19if043@gmail.com', '9326584848', 'dombivali east', 421201, '1', '1000', 180, '1180', 'GLXODR27976', '1', '2021-11-28 19:38:40.966419'),
('omka-part-9372-omk-8313', 'Ricky', 'Parte', 'fs19if043@gmail.com', '9326584848', 'mankhurd', 542232, '1', '250', 45, '295', 'GLXODR57749', '1', '2021-11-28 19:39:38.945087'),
('omka-part-9372-omk-8313', 'Ricky', 'Parte', 'fs19if043@gmail.com', '8928007199', 'mankhurd', 56643, '1', '1000', 180, '1180', 'GLXODR33470', '1', '2021-11-28 19:47:14.544316'),
('omka-part-9372-omk-8313', 'Ricky', 'Parte', 'fs19if043@gmail.com', '8928007199', 'pune', 654223, '1', '1000', 180, '1180', 'GLXODR93054', '1', '2021-11-28 19:49:30.462907'),
('omka-part-9372-omk-8313', 'omkar', 'Parte', 'ricky.parte.21@gmail.com', '8928007199', 'pune', 421201, '1', '250', 45, '295', 'GLXODR56537', '1', '2021-11-28 19:59:42.314988'),
('Anik-Metk-9372-dfg-1476', 'Aniket', 'Metkari', 'aniketmetkari14@gmail.com', '8928007199', 'dombivali east', 421201, '1', '2750', 495, '3245', 'GLXODR46720', '1', '2021-11-28 20:27:11.378354'),
('omka-part-9372-omk-8313', 'savita', 'parte', 'savita.parte@gmail.com', '9372623459', 'london', 454689, '1', '2500', 450, '2950', 'GLXODR20894', '1', '2021-11-29 22:01:30.401574'),
('omka-part-9372-omk-8313', 'savita', 'parte', '', '', 'london', 454689, '1', '500', 90, '590', 'GLXODR83073', '1', '2021-11-30 13:08:21.005100'),
('savi-part-8928-sav-4130', '', '', '', '', 'pune', 421201, '1', '250', 45, '295', 'GLXODR85836', '1', '2021-11-30 13:20:50.861190'),
('savi-part-8928-sav-4130', 'savita ', 'parte', 'rickydipakparte@gmail.com', '8928007199', 'pune', 421201, '1', '1250', 225, '1475', 'GLXODR28919', '1', '2021-11-30 13:45:05.288332'),
('omka-part-9372-omk-8313', 'omkar', 'parte', 'parte', '9372648454', 'london', 454689, '1', '6000', 1080, '7080', 'GLXODR95626', '1', '2021-11-30 18:30:19.395293'),
('omka-part-9372-omk-8313', 'omkar', 'parte', 'parte', '9372648454', 'london', 454689, 'Choose...', '750', 135, '885', 'GLXODR81428', '1', '2021-11-30 18:33:14.193798'),
('Anik-Metk-9372-dfg-1476', 'Aniket', 'Metk', 'aniket@gmail.com', '9372648454', 'dombivali east', 421201, 'Choose...', '1750', 315, '2065', 'GLXODR16577', '1', '2021-11-30 18:43:20.200430'),
('Anik-Metk-9372-dfg-1476', 'Aniket', 'Metk', 'aniket@gmail.com', '9372648454', 'dombivali east', 421201, 'Choose...', '750', 135, '885', 'GLXODR48159', '1', '2021-11-30 19:28:46.172515'),
('Anik-Metk-9372-dfg-1476', 'Aniket', 'Metk', 'aniket@gmail.com', '9372648454', 'dombivali east', 421201, '1', '750', 135, '885', 'GLXODR55666', '1', '2021-11-30 23:10:31.956817'),
('Anik-Metk-9372-dfg-1476', 'Aniket', 'Metk', 'aniket@gmail.com', '9372648454', 'dombivali east', 421201, '1', '1000', 180, '1180', 'GLXODR59350', '1', '2021-12-01 20:33:22.828477'),
('Rick-Part-8928-ric-8749', 'Ricky', 'Parte', 'fs19if043@gmail.com', '8928407196', 'dombivali east', 421201, '1', '1250', 225, '1475', 'GLXODR70050', '1', '2021-12-02 13:22:54.711423'),
('Rick-Part-8928-ric-8749', 'Ricky', 'Parte', 'fs19if043@gmail.com', '8928407196', 'dombivali east', 421201, '1', '500', 90, '590', 'GLXODR91819', '1', '2021-12-02 13:23:57.708888'),
('Rick-Part-8928-ric-8749', 'Ricky', 'Parte', 'fs19if043@gmail.com', '8928407196', 'dombivali east', 421201, 'Choose...', '1000', 180, '1180', 'GLXODR20380', '1', '2021-12-02 13:24:35.956794'),
('Rick-Part-8928-ric-8749', 'Ricky', 'Parte', 'fs19if043@gmail.com', '8928407196', 'dombivali east', 421201, 'Choose...', '1000', 180, '1180', 'GLXODR46577', '1', '2021-12-02 13:25:47.300094'),
('Rick-Part-8928-ric-8749', 'Ricky', 'Parte', 'fs19if043@gmail.com', '8928407196', 'dombivali east', 421201, '1', '250', 45, '295', 'GLXODR53276', '1', '2021-12-02 13:26:47.378523'),
('Rick-Part-8928-ric-8749', 'Ricky', 'Parte', 'fs19if043@gmail.com', '8928407196', 'dombivali east', 421201, '1', '1500', 270, '1770', 'GLXODR14896', '1', '2021-12-02 13:28:47.332782'),
('Rick-Part-8928-ric-8749', 'Ricky', 'Parte', 'fs19if043@gmail.com', '8928407196', 'dombivali east', 421201, '1', '1000', 180, '1180', 'GLXODR94027', '1', '2021-12-03 14:44:59.443383'),
('Rick-Part-8928-ric-8749', 'Ricky', 'Parte', 'fs19if043@gmail.com', '8928407196', 'dombivali east', 421201, '1', '250', 45, '295', 'GLXODR43123', '1', '2021-12-03 14:47:35.438660'),
('Rick-Part-8928-ric-8749', 'Ricky', 'Parte', 'fs19if043@gmail.com', '8928407196', 'dombivali east', 421201, '1', '1250', 225, '1475', 'GLXODR13921', '1', '2021-12-05 20:05:17.565569'),
('Rick-Part-8928-ric-8749', 'Ricky', 'Parte', 'fs19if043@gmail.com', '8928407196', 'dombivali east', 421201, '1', '3750', 675, '4425', 'GLXODR21526', '1', '2021-12-05 20:15:16.161019'),
('Rick-Part-8928-ric-8749', 'Ricky', 'Parte', 'fs19if043@gmail.com', '8928407196', 'dombivali east', 421201, '1', '7500', 1350, '8850', 'GLXODR70156', '1', '2021-12-06 18:28:56.574617'),
('Rick-Part-8928-ric-8749', 'Ricky', 'Parte', 'fs19if043@gmail.com', '8928407196', 'dombivali east', 421201, '1', '16000', 2880, '18880', 'GLXODR53172', '1', '2021-12-06 21:47:20.182334'),
('Rick-Part-8928-ric-8749', 'Ricky', 'Parte', 'fs19if043@gmail.com', '8928407196', 'dombivali east', 421201, '1', '2000', 360, '2360', 'GLXODR89501', '1', '2021-12-09 11:25:08.714513'),
('Rick-Part-8928-ric-8749', 'Ricky', 'Parte', 'fs19if043@gmail.com', '8928407196', 'dombivali east', 421201, '1', '2000', 360, '2360', 'GLXODR79281', '1', '2021-12-09 11:28:32.237884'),
('Rick-Part-8928-ric-8749', 'Ricky', 'Parte', 'fs19if043@gmail.com', '8928407196', 'dombivali east', 421201, '1', '2000', 360, '2360', 'GLXODR17046', '1', '2021-12-09 11:30:15.937294'),
('Rick-Part-8928-ric-8749', 'Ricky', 'Parte', 'fs19if043@gmail.com', '8928407196', 'dombivali east', 421201, '1', '2000', 360, '2360', 'GLXODR38540', '1', '2021-12-09 11:50:49.179714');

-- --------------------------------------------------------

--
-- Table structure for table `otp`
--

CREATE TABLE `otp` (
  `Email` varchar(20) NOT NULL,
  `password` varchar(15) NOT NULL,
  `OTP` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `otp`
--

INSERT INTO `otp` (`Email`, `password`, `OTP`) VALUES
('fs19if043@gmail.com', 'ricky', 705296);

-- --------------------------------------------------------

--
-- Table structure for table `productdetails`
--

CREATE TABLE `productdetails` (
  `productname` varchar(100) NOT NULL,
  `watt` varchar(100) NOT NULL,
  `driver` varchar(100) NOT NULL,
  `pcb` varchar(100) NOT NULL,
  `housing` varchar(100) NOT NULL,
  `driverquantity` int(100) NOT NULL,
  `pcbquantity` int(100) NOT NULL,
  `housingquantity` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `productdetails`
--

INSERT INTO `productdetails` (`productname`, `watt`, `driver`, `pcb`, `housing`, `driverquantity`, `pcbquantity`, `housingquantity`) VALUES
('REGULAR GLASS MODEL', '12W', '12W DRIVER', '12 LED PCB', '12W SL GLASS HOUSING', 0, 0, 0),
('REGULAR GLASS MODEL', '20W', '20W DRIVER', '20 LED PCB', '20W SL GLASS HOUSING', 0, 0, 0),
('REGULAR GLASS MODEL', '24W', '20W DRIVER', '24LED PCB', '24W SL GLASS HOUSING', 0, 0, 0),
('REGULAR GLASS MODEL', '40W', '40W DRIVER', '40LED PCB', '40W SL GLASS HOUSING', 0, 0, 0),
('REGULAR GLASS MODEL', '50W', '50W DRIVER', '50LED PCB', '50W SL GLASS HOUSING', 0, 0, 0),
('REGULAR GLASS MODEL', '60W', '40W*2 DRIVER', '60LED PCB', '60W SL GLASS HOUSING', 3, 3, 3),
('REGULAR GLASS MODEL', '80W', '40W*2 DRIVER', '80LED PCB', '80W SL GLASS HOUSING', 0, 0, 0),
('REGULAR GLASS MODEL', '100W', '50W*2 DRIVER', '100LED PCB', '100W SL GLASS HOUSING', 0, 0, 0),
('CAPSUL', '20W', '20W DRIVER', '40LED PCB', '20W CAPSUL HOUSING', 19, 19, 19),
('CAPSUL', '30W', '20W DRIVER', '54LED PCB', '30W CAPSUL HOUSING', 12, 12, 12),
('CAPSUL', '50W', '50W DRIVER', '100 LED PCB', '50W CAPSUL HOUSING', 12, 12, 12),
('BACKCHOCK FLOOD LIGHT', '30W', '20W DRIVER', '30W BACKCHOCK PCB', '30W BC HOUSING', 0, 0, 0),
('BACKCHOCK FLOOD LIGHT', '50W', '50W DRIVER', '50W BACKCHOCK PCB', '50W BC HOUSING', 0, 0, 0),
('BACKCHOCK FLOOD LIGHT', '100W', '50W*2 DRIVER', '100W BACKCHOCK PCB', '100W BC HOUSING', 0, 0, 0),
('BACKCHOCK FLOOD LIGHT', '150W', '50W*3 DRIVER', '150W BACKCHOCK PCB', '150W BC HOUSING', 0, 0, 0),
('BACKCHOCK FLOOD LIGHT', '200W', '50W*4 DRIVER', '200W BACKCHOCK PCB', '200W BC HOUSING', 0, 0, 0),
('BACKCHOCK FLOOD LIGHT', '400W', '50W*8 DRIVER', '400W BACKCHOCK PCB', '400W BC HOUSING', 0, 0, 0),
('DOWNCHOCK FLOOD LIGHT', '50W', '40W DRIVER', '50W DOWNCHOCK PCB', '50W DC HOUSING', 0, 0, 0),
('DOWNCHOCK FLOOD LIGHT', '100W', '40W*2 DRIVER', '100W DOWNCHOCK PCB', '100W DC HOUSING', 0, 0, 0),
('DOWNCHOCK FLOOD LIGHT', '150W', '40W*3 DRIVER', '150W DOWNCHOCK PCB', '150W DC HOUSING', 0, 0, 0),
('DOWNCHOCK FLOOD LIGHT', '200W', '40W*4 DRIVER', '200W DOWNCHOCK PCB', '200W DC HOUSING', 0, 0, 0),
('SQ DC FLOOD LIGHT', '10W', '20W DRIVER', '10W SQ DC PCB', '10W SQ DC HOUSING', 0, 0, 0),
('SQ DC FLOOD LIGHT', '20W', '20W DRIVER', '20W SQ DC PCB', '20W SQ DC HOUSING', 0, 0, 0),
('SQ DC FLOOD LIGHT', '30W', '20W DRIVER', '24W SQ DC PCB', '30W SQ DC HOUSING', 0, 0, 0),
('SQ DC FLOOD LIGHT', '50W', '50W DRIVER', '50W SQ DC PCB', '50W SQ DC HOUSING', 0, 0, 0),
('LENSE FLOOD LIGHT', '30W', '30W DRIVER', '30W LENSE PCB', '30W LENSE HOSUING', 0, 0, 0),
('LENSE FLOOD LIGHT', '50W', '50W DRIVER', '50 W LENSE PCB', '50W LENSE HOUSING', 0, 0, 0),
('LENSE FLOOD LIGHT', '100W', '50W*2 DRIVER', '100 W LENSE PCB', '100W LENSE HOUSING', 0, 0, 0),
('LENSE FLOOD LIGHT', '150W', '50W*3 DRIVER', '150W LENSE PCB', '150 W LENSE HOUSING', 0, 0, 0),
('LENSE FLOOD LIGHT', '200W', '50W*4 DRIVER', '200W LENSE PCB', '200W LENSE HOUSING', 0, 0, 0),
('LENSE BACKCHOCK FLOOD LIGHT', '60W', '50W DRIVER', '60 LED PCB', '60W BC LENSE HOUSING', 0, 0, 0),
('LENSE BACKCHOCK FLOOD LIGHT', '120W', '50W*2 DRIVER', '120 LED PCB', '120W BC LENSE HOUSING', 0, 0, 0),
('LENSE BACKCHOCK FLOOD LIGHT', '180W', '50W*2 DRIVER', '180LED PCB', '180W BC LENSE HOUSING', 0, 0, 0),
('LENSE BACKCHOCK FLOOD LIGHT', '240W', '50W*2 DRIVER', '240 LED PCB', '240W BC LENSE HOUSING', 0, 0, 0),
('ROUND PANNEL LIGHT', '8W', '8WTO 22W DRIVER', '8W PCB', '8W PANEL HOUSING', 0, 0, 0),
('ROUND PANNEL LIGHT', '12W', '8W TO 22W DRIVER', '12W PCB', '12W PANEL HOUSING', 0, 0, 0),
('ROUND PANNEL LIGHT', '15W', '8W TO 22W DRIVER', '15W PCB', '15W PANEL HOUSING', 0, 0, 0),
('ROUND PANNEL LIGHT', '18W', '8W TO 22W DRIVER', '18W PCB', '18W PANEL HOUSING', 0, 0, 0),
('ROUND PANNEL LIGHT', '22W', '8W TO 22W DRIVER', '22W STRIP', '22W PANEL HOUSING', 0, 0, 0),
('SQUARE PNNEL LIGHT', '8W', '8W TO 22W DRIVER', '8W PCB', '8W PANEL HOUSING', 0, 0, 0),
('SQUARE PNNEL LIGHT', '12W', '8W TO 22W DRIVER', '12W PCB', '12W PANEL HOUSING', 0, 0, 0),
('SQUARE PNNEL LIGHT', '15W', '8W TO 22W DRIVER', '15W PCB', '15W PANEL HOUSING', 0, 0, 0),
('SQUARE PNNEL LIGHT', '18W', '8W TO 22W DRIVER', '18W PCB', '18W PANEL HOUSING', 0, 0, 0),
('SQUARE PNNEL LIGHT', '22W', '8W TO 22W DRIVER', '22W STRIP', '22W PANEL HOUSING', 0, 0, 0),
('SURFACE PANEL LIGHT', '8W', '8W DRIVER', '8W PCB', '8W HOUSING', 0, 0, 0),
('SURFACE PANEL LIGHT', '12W', '12W DRIVER', '12W PCB', '12W HOUSING', 0, 0, 0),
('SURFACE PANEL LIGHT', '15W', '15W DRIVER', '15W PCB', '15W HOUSING', 0, 0, 0),
('SURFACE PANEL LIGHT', '18W', '18W DRIVER', '18W PCB', '18W HOUSING', 0, 0, 0),
('SURFACE PANEL LIGHT', '22W', '22W DRIVER', '22W PCB', '22W HOUSING', 0, 0, 0),
('WATT', '5W (1FEET )', '20W DRIVER TUBELIGHT', '4FEET TUBELIGHT PCB', '4FEET HOUSING', 0, 0, 0),
('TUBE LIGHT', '5W (1FEET )', '20W DRIVER TUBELIGHT', '4FEET TUBELIGHT PCB', '4FEET HOUSING', 0, 0, 0),
('TUBE LIGHT', '10W ( 2FEET )', '20W DRIVER TUBELIGHT', '4FEET TUBELIGHT PCB', '4FEET HOUSING', 0, 0, 0),
('TUBE LIGHT', '20W ( 4FEET )', '20W DRIVER TUBELIGHT', '4FEET TUBELIGHT PCB', '4FEET HOUSING', 0, 0, 0),
('BULB', '5W', '5 DOB', '5W PCB', '5W HOUSING', 0, 0, 0),
('BULB', '7W', '9W DRIVER', '9W PCB', '9W HOUSING', 0, 0, 0),
('BULB', '9W', '9W DRIVER', '9W PCB', '9W HOUSING', 0, 0, 0),
('BULB', '12W', '12W DRIVER', '18W PCB (20LED)', '12W HOUSING', 0, 0, 0),
('BULB', '15W', '15W DRIVER', '15W PCB (20LED)', '15W HOUSING', 0, 0, 0),
('BULB', '18W', '18W DRIVER', '18W PCB (20LED)', '18W HOUSING', 0, 0, 0),
('BULB', '50W', '50W DRIVER', '50W PCB', '50W HOUSING', 0, 0, 0),
('HI-BAY', '50W', '50W DRIVER', '50W HB PCB', '50 HOUSING', 0, 0, 0),
('HI-BAY', '100W', '50W*2 DRIVER', '100W HB PCB', '100 HOUSING', 0, 0, 0),
('HI-BAY', '150W', '50W*3 DRIVER', '150W HB PCB', '150 HOUSING', 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `purchaseorder`
--

CREATE TABLE `purchaseorder` (
  `tenanid` varchar(50) NOT NULL,
  `orderid` varchar(50) NOT NULL,
  `productname` varchar(50) NOT NULL,
  `productprice` varchar(50) NOT NULL,
  `productquantity` varchar(20) NOT NULL,
  `producttotalamount` varchar(20) NOT NULL,
  `productgst` varchar(20) NOT NULL,
  `productfinalamount` varchar(20) NOT NULL,
  `time` datetime(6) NOT NULL DEFAULT current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `purchaseorder`
--

INSERT INTO `purchaseorder` (`tenanid`, `orderid`, `productname`, `productprice`, `productquantity`, `producttotalamount`, `productgst`, `productfinalamount`, `time`) VALUES
('omka-part-9372-omk-8313', 'GLXODR89502', ' Street Light RG 20 WATT ', ' 1000 ', '1', '1000', '180', '1180', '2021-11-26 19:58:32.265125'),
('omka-part-9372-omk-8313', 'GLXODR89502', ' Street Light RG 12 WATT\r\n ', ' 500 ', '1', '500', '90', '590', '2021-11-26 19:58:32.349811'),
('omka-part-9372-omk-8313', 'GLXODR89502', ' LED Bulb ', ' 250 ', '1', '250', '45', '295', '2021-11-26 19:58:32.405825'),
('omka-part-9372-omk-8313', 'GLXODR19725', ' LED Bulb ', ' 250 ', '1', '250', '45', '295', '2021-11-26 20:01:39.639544'),
('omka-part-9372-omk-8313', 'GLXODR19725', ' Flood Light BF 30 WATT ', ' 800 ', '1', '800', '144', '944', '2021-11-26 20:01:39.719081'),
('omka-part-9372-omk-8313', 'GLXODR19725', ' Street Light RG 20 WATT ', ' 1000 ', '1', '1000', '180', '1180', '2021-11-26 20:01:39.817046'),
('omka-part-9372-omk-8313', 'GLXODR19725', ' Street Light RG 12 WATT\r\n ', ' 500 ', '1', '500', '90', '590', '2021-11-26 20:01:40.007096'),
('omka-part-9372-omk-8313', 'GLXODR70441', ' Flood Light BF 30 WATT ', ' 800 ', '1', '800', '144', '944', '2021-11-28 17:39:22.085558'),
('Anik-Metk-9372-dfg-1476', 'GLXODR86020', ' Flood Light BF 30 WATT ', ' 800 ', '3', '2400', '432', '2832', '2021-11-28 17:45:04.027778'),
('Anik-Metk-9372-dfg-1476', 'GLXODR86020', ' Street Light RG 12 WATT\r\n ', ' 500 ', '1', '500', '90', '590', '2021-11-28 17:45:04.175198'),
('Anik-Metk-9372-dfg-1476', 'GLXODR86020', ' Street Light RG 20 WATT ', ' 1000 ', '1', '1000', '180', '1180', '2021-11-28 17:45:04.388558'),
('Anik-Metk-9372-dfg-1476', 'GLXODR98331', ' LED Bulb ', ' 250 ', '1', '250', '45', '295', '2021-11-28 17:47:25.366129'),
('Anik-Metk-9372-dfg-1476', 'GLXODR82834', ' Flood Light BF 30 WATT ', ' 800 ', '1', '800', '144', '944', '2021-11-28 17:49:54.571915'),
('Anik-Metk-9372-dfg-1476', 'GLXODR82834', ' LED Bulb ', ' 250 ', '1', '250', '45', '295', '2021-11-28 17:49:54.696910'),
('Anik-Metk-9372-dfg-1476', 'GLXODR15808', ' Flood Light BF 30 WATT ', ' 800 ', '1', '800', '144', '944', '2021-11-28 18:37:37.002721'),
('Anik-Metk-9372-dfg-1476', 'GLXODR15808', ' LED Bulb ', ' 250 ', '1', '250', '45', '295', '2021-11-28 18:37:37.119056'),
('Anik-Metk-9372-dfg-1476', 'GLXODR44504', ' Street Light RG 20 WATT ', ' 1000 ', '1', '1000', '180', '1180', '2021-11-28 18:38:32.058692'),
('Anik-Metk-9372-dfg-1476', 'GLXODR44504', ' Street Light RG 12 WATT\r\n ', ' 500 ', '1', '500', '90', '590', '2021-11-28 18:38:32.255396'),
('Anik-Metk-9372-dfg-1476', 'GLXODR87853', ' Flood Light BF 30 WATT ', ' 800 ', '1', '800', '144', '944', '2021-11-28 18:39:50.180192'),
('omka-part-9372-omk-8313', 'GLXODR12350', ' Flood Light BF 30 WATT ', ' 800 ', '1', '800', '144', '944', '2021-11-28 19:28:09.714402'),
('omka-part-9372-omk-8313', 'GLXODR12350', ' Street Light RG 20 WATT ', ' 1000 ', '1', '1000', '180', '1180', '2021-11-28 19:28:09.818313'),
('omka-part-9372-omk-8313', 'GLXODR50204', ' LED Bulb ', ' 250 ', '1', '250', '45', '295', '2021-11-28 19:29:10.814996'),
('omka-part-9372-omk-8313', 'GLXODR54335', ' LED Bulb ', ' 250 ', '1', '250', '45', '295', '2021-11-28 19:34:53.690523'),
('omka-part-9372-omk-8313', 'GLXODR27976', ' Street Light RG 20 WATT ', ' 1000 ', '1', '1000', '180', '1180', '2021-11-28 19:38:40.896614'),
('omka-part-9372-omk-8313', 'GLXODR57749', ' LED Bulb ', ' 250 ', '1', '250', '45', '295', '2021-11-28 19:39:38.890386'),
('omka-part-9372-omk-8313', 'GLXODR33470', ' Street Light RG 20 WATT ', ' 1000 ', '1', '1000', '180', '1180', '2021-11-28 19:47:14.476790'),
('omka-part-9372-omk-8313', 'GLXODR93054', ' Street Light RG 20 WATT ', ' 1000 ', '1', '1000', '180', '1180', '2021-11-28 19:49:30.377242'),
('omka-part-9372-omk-8313', 'GLXODR56537', ' LED Bulb ', ' 250 ', '1', '250', '45', '295', '2021-11-28 19:59:42.224987'),
('Anik-Metk-9372-dfg-1476', 'GLXODR46720', ' LED Bulb ', ' 250 ', '11', '2750', '495', '3245', '2021-11-28 20:27:11.261442'),
('omka-part-9372-omk-8313', 'GLXODR20894', ' LED Bulb ', ' 250 ', '10', '2500', '450', '2950', '2021-11-29 22:01:30.245214'),
('omka-part-9372-omk-8313', 'GLXODR83073', ' Flood Light BF 30 WATT ', ' 500 ', '1', '500', '90', '590', '2021-11-30 13:08:20.892650'),
('savi-part-8928-sav-4130', 'GLXODR85836', ' LED Bulb ', ' 250 ', '1', '250', '45', '295', '2021-11-30 13:20:50.700872'),
('savi-part-8928-sav-4130', 'GLXODR28919', ' Street Light RG 20 WATT ', ' 1000 ', '1', '1000', '180', '1180', '2021-11-30 13:45:04.065410'),
('savi-part-8928-sav-4130', 'GLXODR28919', ' LED Bulb ', ' 250 ', '1', '250', '45', '295', '2021-11-30 13:45:04.729967'),
('omka-part-9372-omk-8313', 'GLXODR95626', ' Street Light RG 20 WATT ', ' 1000 ', '2', '2000', '360', '2360', '2021-11-30 18:30:19.003239'),
('omka-part-9372-omk-8313', 'GLXODR95626', ' Flood Light BF 30 WATT ', ' 500 ', '1', '500', '90', '590', '2021-11-30 18:30:19.159281'),
('omka-part-9372-omk-8313', 'GLXODR95626', ' Street Light RG 12 WATT\r\n ', ' 500 ', '1', '500', '90', '590', '2021-11-30 18:30:19.343856'),
('omka-part-9372-omk-8313', 'GLXODR81428', ' Street Light RG 12 WATT\r\n ', ' 500 ', '1', '500', '90', '590', '2021-11-30 18:33:14.110300'),
('omka-part-9372-omk-8313', 'GLXODR81428', ' LED Bulb ', ' 250 ', '1', '250', '45', '295', '2021-11-30 18:33:14.153029'),
('Anik-Metk-9372-dfg-1476', 'GLXODR16577', ' Street Light RG 20 WATT ', ' 1000 ', '1', '1000', '180', '1180', '2021-11-30 18:43:19.780400'),
('Anik-Metk-9372-dfg-1476', 'GLXODR16577', ' LED Bulb ', ' 250 ', '1', '250', '45', '295', '2021-11-30 18:43:19.897363'),
('Anik-Metk-9372-dfg-1476', 'GLXODR16577', ' Flood Light BF 30 WATT ', ' 500 ', '1', '500', '90', '590', '2021-11-30 18:43:19.993060'),
('Anik-Metk-9372-dfg-1476', 'GLXODR48159', ' LED Bulb ', ' 250 ', '1', '250', '45', '295', '2021-11-30 19:28:45.952483'),
('Anik-Metk-9372-dfg-1476', 'GLXODR48159', ' Flood Light BF 30 WATT ', ' 500 ', '1', '500', '90', '590', '2021-11-30 19:28:46.014168'),
('Anik-Metk-9372-dfg-1476', 'GLXODR55666', ' Street Light RG 12 WATT\r\n ', ' 500 ', '1', '500', '90', '590', '2021-11-30 23:10:31.711377'),
('Anik-Metk-9372-dfg-1476', 'GLXODR55666', ' LED Bulb ', ' 250 ', '1', '250', '45', '295', '2021-11-30 23:10:31.813509'),
('Anik-Metk-9372-dfg-1476', 'GLXODR59350', ' LED Bulb ', ' 250 ', '2', '500', '90', '590', '2021-12-01 20:33:21.826330'),
('Anik-Metk-9372-dfg-1476', 'GLXODR59350', ' Street Light RG 12 WATT\r\n ', ' 500 ', '1', '500', '90', '590', '2021-12-01 20:33:22.700077'),
('Rick-Part-8928-ric-8749', 'GLXODR70050', ' LED Bulb ', ' 250 ', '1', '250', '45', '295', '2021-12-02 13:22:54.446158'),
('Rick-Part-8928-ric-8749', 'GLXODR70050', ' Street Light RG 20 WATT ', ' 1000 ', '1', '1000', '180', '1180', '2021-12-02 13:22:54.592014'),
('Rick-Part-8928-ric-8749', 'GLXODR91819', ' Flood Light BF 30 WATT ', ' 500 ', '1', '500', '90', '590', '2021-12-02 13:23:57.544233'),
('Rick-Part-8928-ric-8749', 'GLXODR20380', ' Street Light RG 20 WATT ', ' 1000 ', '1', '1000', '180', '1180', '2021-12-02 13:24:35.878875'),
('Rick-Part-8928-ric-8749', 'GLXODR46577', ' Street Light RG 20 WATT ', ' 1000 ', '1', '1000', '180', '1180', '2021-12-02 13:25:47.216981'),
('Rick-Part-8928-ric-8749', 'GLXODR53276', ' LED Bulb ', ' 250 ', '1', '250', '45', '295', '2021-12-02 13:26:47.263504'),
('Rick-Part-8928-ric-8749', 'GLXODR14896', ' Street Light RG 20 WATT ', ' 1000 ', '1', '1000', '180', '1180', '2021-12-02 13:28:47.106715'),
('Rick-Part-8928-ric-8749', 'GLXODR14896', ' Street Light RG 12 WATT\r\n ', ' 500 ', '1', '500', '90', '590', '2021-12-02 13:28:47.262586'),
('Rick-Part-8928-ric-8749', 'GLXODR94027', ' Flood Light BF 30 WATT ', ' 500 ', '1', '500', '90', '590', '2021-12-03 14:44:59.101174'),
('Rick-Part-8928-ric-8749', 'GLXODR94027', ' Street Light RG 12 WATT\r\n ', ' 500 ', '1', '500', '90', '590', '2021-12-03 14:44:59.204723'),
('Rick-Part-8928-ric-8749', 'GLXODR43123', ' LED Bulb ', ' 250 ', '1', '250', '45', '295', '2021-12-03 14:47:35.359200'),
('Rick-Part-8928-ric-8749', 'GLXODR13921', ' LED Bulb ', ' 250 ', '1', '250', '45', '295', '2021-12-05 20:05:17.371998'),
('Rick-Part-8928-ric-8749', 'GLXODR13921', ' Street Light RG 20 WATT ', ' 1000 ', '1', '1000', '180', '1180', '2021-12-05 20:05:17.513957'),
('Rick-Part-8928-ric-8749', 'GLXODR21526', ' Street Light RG 20 WATT ', ' 1000 ', '2', '2000', '360', '2360', '2021-12-05 20:15:15.856101'),
('Rick-Part-8928-ric-8749', 'GLXODR21526', ' LED Bulb ', ' 250 ', '3', '750', '135', '885', '2021-12-05 20:15:15.985291'),
('Rick-Part-8928-ric-8749', 'GLXODR21526', ' Flood Light BF 30 WATT ', ' 500 ', '1', '500', '90', '590', '2021-12-05 20:15:16.033734'),
('Rick-Part-8928-ric-8749', 'GLXODR21526', ' Street Light RG 12 WATT\r\n ', ' 500 ', '1', '500', '90', '590', '2021-12-05 20:15:16.063151'),
('Rick-Part-8928-ric-8749', 'GLXODR70156', ' LED Bulb ', ' 250 ', '10', '2500', '450', '2950', '2021-12-06 18:28:56.326700'),
('Rick-Part-8928-ric-8749', 'GLXODR70156', ' Flood Light BF 30 WATT ', ' 500 ', '10', '5000', '900', '5900', '2021-12-06 18:28:56.508982'),
('Rick-Part-8928-ric-8749', 'GLXODR53172', ' Flood Light BF 30 WATT ', ' 500 ', '20', '10000', '1800', '11800', '2021-12-06 21:47:20.000387'),
('Rick-Part-8928-ric-8749', 'GLXODR53172', ' Street Light RG 12 WATT\r\n ', ' 500 ', '10', '5000', '900', '5900', '2021-12-06 21:47:20.112099'),
('Rick-Part-8928-ric-8749', 'GLXODR53172', ' Street Light RG 20 WATT ', ' 1000 ', '1', '1000', '180', '1180', '2021-12-06 21:47:20.149294'),
('Rick-Part-8928-ric-8749', 'GLXODR89501', ' Flood Light BF 30 WATT ', ' 2000 ', '1', '2000', '360', '2360', '2021-12-09 11:25:08.555050'),
('Rick-Part-8928-ric-8749', 'GLXODR79281', ' Flood Light BF 30 WATT ', ' 2000 ', '1', '2000', '360', '2360', '2021-12-09 11:28:32.117840'),
('Rick-Part-8928-ric-8749', 'GLXODR17046', ' Flood Light BF 30 WATT ', ' 2000 ', '1', '2000', '360', '2360', '2021-12-09 11:30:15.832721'),
('Rick-Part-8928-ric-8749', 'GLXODR38540', ' Flood Light BF 30 WATT ', ' 2000 ', '1', '2000', '360', '2360', '2021-12-09 11:50:48.987923');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `tenant_id` varchar(200) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobile` varchar(100) NOT NULL,
  `password` varchar(1000) NOT NULL,
  `otp` int(6) NOT NULL,
  `verifystatus` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`tenant_id`, `firstname`, `lastname`, `username`, `email`, `mobile`, `password`, `otp`, `verifystatus`) VALUES
('Rick-Part-8928-ric-8749', 'Ricky', 'Parte', 'ricky21', 'fs19if043@gmail.com', '8928407196', '$2y$10$PRQfP2fX7ivWhidBrFHyv.kiQb6rB9/wicZPTVObB7ePzfiVTinMa', 0, 1),
('Rick-Part-8928-dfg-5394', 'Ricky', 'Parte', 'dfg', 'partericky43@gmail.com', '8928007199', '$2y$10$keU4Q7uVdd6Vwutg4/dJfO0wgKFCqW3wJsxnz4PfrEp8e4BMX4q1m', 0, 0),
('Rick-Part-9594-123-6916', 'Ricky', 'Parte', 'ricky43', 'ricky.parte.21@gmail.com', '9594694427', '$2y$10$inQLmy1yefE5RYF2zgTMo.Ylf6HU5h5U0RUoXLLDkT2eYzFwaHh9S', 0, 1),
('Rick-Part-9594-ric-6764', 'Ricky', 'Parte', 'ricky123', 'rickydipakparte@gmail.com', '9594694427', '$2y$10$aAr2LOWiTV.N03OXjcah0Ogld6jp9gV1vNLepspVWOw/.aIxFlIZO', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `stock_comp`
--

CREATE TABLE `stock_comp` (
  `driver` varchar(100) NOT NULL,
  `driverquantity` int(100) NOT NULL,
  `pcb` varchar(100) NOT NULL,
  `pcbquantity` int(100) NOT NULL,
  `housing` varchar(100) NOT NULL,
  `housingquantity` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stock_comp`
--

INSERT INTO `stock_comp` (`driver`, `driverquantity`, `pcb`, `pcbquantity`, `housing`, `housingquantity`) VALUES
('12W DRIVER', 19, '12 LED PCB', 2, '12W SL GLASS HOUSING', 19),
('20W DRIVER', 27, '20 LED PCB', 20, '20W SL GLASS HOUSING', 30),
('40W DRIVER', 0, '24 LED PCB', -3, '24 SL GLASS HOUSING', 0),
('50W DRIVER', 0, '40LED PCB', 0, '40W SL GLASS HOUSING', 0),
('40W*2 DRIVER ', 0, '50LED PCB\r\n', 0, '50W SL GLASS HOUSING', 0),
('50W*2 DRIVER ', 0, '60LED PCB', 0, '60W SL GLASS HOUSING', 0),
('50W*3 DRIVER', 0, '80LED PCB', 0, '100W SL GLASS HOUSING', 0),
('50W*4 DRIVER', 0, '100 LED PCB', 0, '20W CAPSUL HOSING', 0),
('50W*8 DRIVER', 0, '30W BACKCHOCK PCB', 0, '30W CAPSUL HOUSING', 0),
('40W*3 DRIVER', 0, '50W BACKCHOCK PCB', 0, '50W CAPSUL HOUSING', 0),
('40W*4 DRIVER', 3, '100W BACKCHOCK PCB', 0, '30W BC HOUSING', 0),
('8W TO 22W DRIVER', 0, '150W BACKCHOCK PCB', 0, '50W BC HOUSING', 0),
('8W DRIVER', 0, '200W DOWNCHOCK PCB', 0, '100W BC HOUSING', 0),
('15W DRIVER', 0, '10W SQ DC PCB', 0, '150W BC HOUSING', 0),
('18W DRIVER', 0, '20W SQ DC PCB', 0, '200W BC HOUSING', 0),
('22W DRIVER', 0, '24W SQ DC PCB', 0, '400W BC HOUSING', 0),
('20W DRIVER TUBELIGHT', 0, '50W SQ DC PCB', 0, '50W DC HOUSING', 0),
('9W DRIVER', 0, '30W LENSE PCB', 0, '100W DC HOUSING', 0),
('', 0, '50W LENSE PCB', 0, '200W DC HOUSING', 0),
('', 0, '100W LENSE PCB', 0, '10W SQ DC HOUSING', 0),
('', 0, '150W LENSE PCB', 0, '30W SQ DC HOUSING', 0),
('', 0, '200W LENSE PCB', 0, '50W SQ DC HOUSING', 0),
('', 0, '120 LED PCB', 0, '30W LENSE HOSUING', 0),
('', 0, '180 LED PCB', 0, '50W LENSE HOUSING', 0),
('', 0, '240 LED PCB', 0, '100W LENSE HOUSING', 0),
('', 0, '8W PCB', 0, '200W LENSE HOUSING', 0),
('', 0, '12W PCB', 0, '60W BC LENSE HOUSING', 0),
('', 0, '15W PCB', 0, '120W BC LENSE HOUSING', 0),
('', 0, '18W PCB', 0, '180W BC LENSE HOUSING', 0),
('', 0, '22W PCB', 0, '240W BC LENSE HOUSING', 0),
('', 0, '22W STRIP', 0, '8W PANEL HOUSING', 0),
('', 0, '4FEET TUBELIGHT PCB', 0, '12W PANEL HOUSING', 0),
('', 0, '50W PCB', 0, '15W PANEL HOUSING', 0),
('', 0, '50W HB PCB', 0, '18W PANEL HOUSING', 0),
('', 0, '100W HB PCB', 0, '22W PANEL HOUSING', 0),
('', 0, '150W HB PCB', 0, '8W HOUSING', 0),
('', 0, '', 0, '12W HOUSING', 0),
('', 0, '', 0, '15W HOUSING', 0),
('', 0, '', 0, '18W HOUSING', 0),
('', 0, '', 0, '22W HOUSING', 0),
('', 0, '', 0, '4FEET HOUSING', 0),
('', 0, '', 0, '5W HOUSING', 0),
('', 0, '', 0, '9W HOUSING', 0),
('', 0, '', 0, '50W HOUSING', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `newproduct`
--
ALTER TABLE `newproduct`
  ADD PRIMARY KEY (`srno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `newproduct`
--
ALTER TABLE `newproduct`
  MODIFY `srno` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
