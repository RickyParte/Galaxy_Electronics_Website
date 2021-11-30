-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 29, 2021 at 05:43 PM
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
('5 WAAT', 88, 0, 0, 0, 0, 0, 0, 0, 3),
('7 WAAT', 80, 0, 0, 0, 0, 0, 0, 0, 0),
('9 WAAT', 8, 0, 0, 0, 0, 0, 0, 0, 0),
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

--
-- Dumping data for table `newproduct`
--

INSERT INTO `newproduct` (`productid`, `productwatt`, `productname`, `productprice`, `productimg`, `productwaranty`, `productfeatureone`, `productfeaturetwo`, `productfeaturethree`, `productfeaturefour`) VALUES
('SL12A', '12', 'Street Light RG 12 WATT\r\n', 500, 'upload/24wstreet.jpg', 2, 'Useful', 'Brighty', '', ''),
('SL20A', '20', 'Street Light RG 20 WATT', 1000, 'upload/40wstreet.jpg', 3, 'Useful', 'Brighty', '', ''),
('LED10', '10', 'LED Bulb', 250, 'upload/psd.png', 1, 'Useful', 'Brighty', '', ''),
('FL30A', '20', 'Flood Light BF 30 WATT', 500, 'upload/helogen1.jpg', 3, 'Useful', 'Brighty', 'Well', '');

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
('omka-part-9372-omk-8313', 'savita', 'parte', 'savita.parte@gmail.com', '9372623459', 'london', 454689, '1', '2500', 450, '2950', 'GLXODR20894', '1', '2021-11-29 22:01:30.401574');

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
('fs19if043@gmail.com', 'ricky', 488916);

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
('omka-part-9372-omk-8313', 'GLXODR20894', ' LED Bulb ', ' 250 ', '10', '2500', '450', '2950', '2021-11-29 22:01:30.245214');

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
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`tenant_id`, `firstname`, `lastname`, `username`, `email`, `mobile`, `password`) VALUES
('Rick-8928-dfg-3382', 'Ricky', '', 'ricky21', 'fs19if043@gmail.com', '8928007199', 'ricky'),
('Rick-8928-fhf-3011', 'Ricky', '', 'fxrt', 'ricky.parte.21@gmail.com', '8928007199', 'abcd'),
('Anik-Metk-9372-dfg-1476', 'Aniket', 'Metk', 'OGisHere', 'aniket@gmail.com', '9372648454', 'aniket'),
('omka-part-9372-omk-8313', 'omkar', 'parte', 'omkar', 'parte', '9372648454', 'omkar'),
('sank-walh-8957-san-1078', 'sanket', 'walhekar', 'sanket', 'sanketwalhekar83@gmail.com', '8957456485', 'sanket'),
('savi-part-8928-sav-4130', 'savita ', 'parte', 'savita', 'rickydipakparte@gmail.com', '8928007199', 'savita');

-- --------------------------------------------------------

--
-- Table structure for table `t`
--

CREATE TABLE `t` (
  `tenantid` varchar(200) NOT NULL,
  `cg` varchar(20) NOT NULL,
  `amount` varchar(200) NOT NULL,
  `price` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t`
--

INSERT INTO `t` (`tenantid`, `cg`, `amount`, `price`) VALUES
('Anik-Metk-9372-dfg-1476', ' LED Bulb ', '14000', '7'),
('Anik-Metk-9372-dfg-1476', ' dfddd ', ' 2000 ', '1'),
('Rick-8928-dfg-3382', ' LED Bulb ', '16000', '8'),
('Rick-8928-dfg-3382', ' dfddd ', ' 2000 ', '1'),
('Rick-8928-dfg-3382', ' Helogen ', ' 2000 ', '10'),
('Rick-8928-dfg-3382', ' re ', ' 500 ', '1'),
('omka-part-9372-omk-8313', ' dfddd ', '48000', '6');

-- --------------------------------------------------------

--
-- Table structure for table `verification_password`
--

CREATE TABLE `verification_password` (
  `Username` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `verification_password`
--

INSERT INTO `verification_password` (`Username`, `Password`) VALUES
('sanket', 'sanket'),
('Ricky', 'Ricky'),
('hritik', 'hritik'),
('aniket', '$2y$10$GLX4S6tb4TstVVFueqiHwuZOtkMvSOZQiNjsS9inCott36huUeHyK'),
('Sagar', '$2y$10$MwvGX8ljIIwFaKRYFQgY.ONKlvBTGlWVCP/R68gHZ1b.EsPqt45Pi'),
('vaibhav', '$2y$10$m6B0Ny0Q2aiT2oBOC5BWmeu6sGDJzJwAMO/gTTrrdepXXYnMtSO3.'),
('tejas', '$2y$10$V6/7NESwEp0pKr6ckJb9vO0888kuxQrPBSB23hChiBQokBnCaxwsO'),
('ricky', 'omkar789'),
('ricky', 'omkar789');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
