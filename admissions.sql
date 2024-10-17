-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 30, 2023 at 02:12 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `admissions`
--

-- --------------------------------------------------------

--
-- Table structure for table `bankdetails`
--

CREATE TABLE `bankdetails` (
  `appType` varchar(4) NOT NULL,
  `stdId` varchar(10) NOT NULL,
  `BankName` varchar(3) NOT NULL DEFAULT 'SBI',
  `BankDuno` varchar(12) NOT NULL DEFAULT '0',
  `PaymentDate` varchar(14) NOT NULL,
  `Amount` int(4) NOT NULL DEFAULT 1500,
  `BankPaymentFile` varchar(30) NOT NULL,
  `course` varchar(10) NOT NULL,
  `sno` bigint(20) UNSIGNED NOT NULL,
  `uploadTime` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `bankdetails`
--

INSERT INTO `bankdetails` (`appType`, `stdId`, `BankName`, `BankDuno`, `PaymentDate`, `Amount`, `BankPaymentFile`, `course`, `sno`, `uploadTime`) VALUES
('ICP', 'std2', 'SBI', '3433242423', '2020-07-15', 1500, 'Images_ICP/std2/BANKFILE.pdf', 'B.Tech', 1, '2020-07-15 19:58:58'),
('NRI', 'std2', 'SBI', '3433242423', '2020-07-15', 1500, 'Images_NRI/std2/BANKFILE.pdf', 'B.Tech', 2, '2020-07-16 09:16:22'),
('ICP', 'std4', 'SBI', '0', '', 1500, '', '', 3, '2020-12-02 09:52:28'),
('ICP', 'std5', 'SBI', '1234567890', '2022-08-10', 1500, 'Images_ICP/std5/BANKFILE.pdf', 'B.Tech', 4, '2022-08-09 06:12:24'),
('NRI', 'std3', 'SBI', '1234567547', '2022-08-10', 1500, 'Images_NRI/std3/BANKFILE.pdf', 'MCA', 5, '2022-08-09 07:24:58'),
('NRI', 'std4', 'SBI', '5675765876', '2022-08-24', 1500, 'Images_NRI/std4/BANKFILE.pdf', 'MCA', 6, '2022-08-09 09:56:23'),
('NRI', 'std5', 'SBI', '4565475765', '2022-09-06', 1500, 'Images_NRI/std5/BANKFILE.pdf', 'B.Tech', 7, '2022-09-03 06:08:16'),
('NRI', 'std6', 'SBI', '0', '', 1500, '', '', 8, '2022-09-03 07:21:45'),
('ICP', 'std6', 'SBI', 'ABC1234567', '2023-06-07', 1500, 'Images_ICP/std6/BANKFILE.pdf', 'B.Tech', 9, '2023-06-19 12:04:10'),
('NRI', 'std7', 'SBI', '7894561235', '2023-06-20', 1500, 'Images_NRI/std7/BANKFILE.pdf', 'M.Tech', 10, '2023-06-20 05:21:15');

-- --------------------------------------------------------

--
-- Table structure for table `branchpreferences`
--

CREATE TABLE `branchpreferences` (
  `appType` varchar(4) NOT NULL,
  `stdId` varchar(10) NOT NULL,
  `course` varchar(10) NOT NULL,
  `branchName` varchar(10) NOT NULL,
  `preference` int(1) NOT NULL DEFAULT 0,
  `sno` bigint(20) UNSIGNED NOT NULL,
  `uploadTime` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `branchpreferences`
--

INSERT INTO `branchpreferences` (`appType`, `stdId`, `course`, `branchName`, `preference`, `sno`, `uploadTime`) VALUES
('ICP', 'std2', 'B.Tech', 'ME', 1, 1, '2020-07-15 20:25:39'),
('ICP', 'std2', 'B.Tech', 'ECE', 2, 2, '2020-07-15 20:25:39'),
('ICP', 'std2', 'B.Tech', 'CSE', 3, 3, '2020-07-15 20:25:39'),
('ICP', 'std4', 'B.Tech', 'ME', 0, 4, '2020-12-02 09:52:28'),
('ICP', 'std4', 'B.Tech', 'ECE', 0, 5, '2020-12-02 09:52:28'),
('ICP', 'std4', 'B.Tech', 'CSE', 0, 6, '2020-12-02 09:52:28'),
('ICP', 'std5', 'B.Tech', 'ME', 1, 7, '2022-08-09 06:58:38'),
('ICP', 'std5', 'B.Tech', 'ECE', 2, 8, '2022-08-09 06:58:38'),
('ICP', 'std5', 'B.Tech', 'CSE', 3, 9, '2022-08-09 06:58:38'),
('ICP', 'std6', 'B.Tech', 'ME', 1, 10, '2023-06-19 12:09:09'),
('ICP', 'std6', 'B.Tech', 'ECE', 2, 11, '2023-06-19 12:09:09'),
('ICP', 'std6', 'B.Tech', 'CSE', 3, 12, '2023-06-19 12:09:09');

-- --------------------------------------------------------

--
-- Table structure for table `confirmation`
--

CREATE TABLE `confirmation` (
  `appType` varchar(6) NOT NULL,
  `id` bigint(20) UNSIGNED NOT NULL,
  `stdId` varchar(10) NOT NULL,
  `confstatus` int(1) NOT NULL DEFAULT 0,
  `signature` varchar(40) NOT NULL,
  `uploadTime` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `confirmation`
--

INSERT INTO `confirmation` (`appType`, `id`, `stdId`, `confstatus`, `signature`, `uploadTime`) VALUES
('ICP', 1, 'std2', 1, 'Images_ICP/std2/SIGN.pdf', '16-07-2020'),
('NRI', 2, 'std2', 0, '', ''),
('ICP', 3, 'std4', 0, '', ''),
('ICP', 4, 'std5', 1, '', '09-08-2022'),
('NRI', 5, 'std3', 1, 'Images_NRI/std3/SIGN.pdf', '09-08-2022'),
('NRI', 6, 'std4', 0, '', ''),
('NRI', 7, 'std5', 1, 'Images_NRI/std5/SIGN.pdf', '03-09-2022'),
('NRI', 8, 'std6', 0, '', ''),
('ICP', 9, 'std6', 1, 'Images_ICP/std6/SIGN.pdf', '19-06-2023'),
('NRI', 10, 'std7', 1, 'Images_NRI/std7/SIGN.pdf', '20-06-2023');

-- --------------------------------------------------------

--
-- Table structure for table `coursepreferences`
--

CREATE TABLE `coursepreferences` (
  `stdId` varchar(10) NOT NULL,
  `course` varchar(10) NOT NULL,
  `Branch1` varchar(3) NOT NULL,
  `Branch2` varchar(3) NOT NULL,
  `Branch3` varchar(3) NOT NULL,
  `Branch4` varchar(3) NOT NULL,
  `Branch5` varchar(3) NOT NULL,
  `AdmitCatgeory` varchar(4) NOT NULL,
  `SAARC_status` varchar(4) NOT NULL,
  `ParentPassport` varchar(50) NOT NULL,
  `NRI_FILE` varchar(50) NOT NULL,
  `camp1` varchar(6) NOT NULL,
  `camp2` varchar(6) NOT NULL,
  `camp3` varchar(6) NOT NULL,
  `uploadTime` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `sno` bigint(20) UNSIGNED NOT NULL,
  `appType` varchar(4) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `education`
--

CREATE TABLE `education` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `qualification` varchar(50) NOT NULL,
  `examination` varchar(100) NOT NULL,
  `university` varchar(200) NOT NULL,
  `monthYear` varchar(20) NOT NULL,
  `medium` varchar(20) NOT NULL,
  `division` varchar(100) NOT NULL,
  `marksSecured` varchar(20) NOT NULL,
  `percMarks` varchar(10) NOT NULL,
  `p_randomId` varchar(15) NOT NULL,
  `randomld` varchar(15) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `education`
--

INSERT INTO `education` (`id`, `qualification`, `examination`, `university`, `monthYear`, `medium`, `division`, `marksSecured`, `percMarks`, `p_randomId`, `randomld`, `created_at`) VALUES
(1, '', 'Regular', 'AP', '2013-07', 'English', 'Eng', '800', '80', '649D79', '649D791', '2023-06-29 12:32:03'),
(2, '', 'Regular', 'AP', '2019-03', 'English', 'Eng', '900', '90', '649D79', '649D792', '2023-06-29 12:32:03'),
(3, 'SSC (10th// Equivalent)', 'SSC Examination ', 'BOARD OF SECONDARY EDUCATION ', '2021-06', 'English', 'English', '547', '92', '649D7E', '649D7E1', '2023-06-29 12:50:36'),
(4, 'Intermediate/Equivalent (10+2)', 'Senior school certificate examination ', 'Central board of secondary education ', '2023-03', 'English', 'English', '310', '62', '649D7E', '649D7E2', '2023-06-29 12:50:36'),
(7, '', 'SSC', 'BSE AP', '08/2021', 'English', 'First', '600', '99', '649D93', '649D931', '2023-06-29 14:19:47'),
(8, '', 'Intermediate', 'BIE AP', '04/2022', 'English', 'First', '916', '91', '649D93', '649D932', '2023-06-29 14:19:47'),
(9, '', 'SSC', 'CENTRAL BOARD OF SECONDARY EDUCATION', '2021-08', 'ENGLISH', 'FIRST', '458', '92', '649DB4', '649DB41', '2023-06-29 16:40:49'),
(10, '', 'Intermediate', 'BOARD OF INTERMEDIATE EDUCATION, ANDHRAPRADESH', '2023-04', 'ENGLISH', 'M.P.C', '978', '98', '649DB4', '649DB42', '2023-06-29 16:40:49'),
(13, '', 'ANDHRA PRADESH BOARD SECONDARY EDUCATION', 'SRI CHAITANYA SCHOOLS', '2021-06', 'ENGLISH', '10TH', '600', '99', '649DCA', '649DCA1', '2023-06-29 18:16:16'),
(14, '', 'ANDHRA PRADESH BOARD OF INTERMEDIATE EDUCATION', 'NARAYANA JUNIOR COLLEGE', '2023-03', 'ENGLISH', 'INTER 2ND YEAR', '811', '81', '649DCA', '649DCA2', '2023-06-29 18:16:16'),
(15, '', 'SSC', 'AP', '2019-03', 'English', 'Eng', '900', '90', '649E6A', '649E6A1', '2023-06-30 05:38:16'),
(16, '', 'Intermediate', 'AP', '2021-11', 'English', 'Eng', '800', '80', '649E6A', '649E6A2', '2023-06-30 05:38:16'),
(17, '', 'SSC', 'AP', '2019-03', 'English', 'Eng', '900', '90', '649E6A', '649E6A1', '2023-06-30 05:38:17'),
(18, '', 'Intermediate', 'AP', '2021-11', 'English', 'Eng', '800', '80', '649E6A', '649E6A2', '2023-06-30 05:38:17'),
(19, '', 'ssc', 'ap', '2023-07', 'ENG', 'eng', '987', '98', '649E83', '649E831', '2023-06-30 07:27:01'),
(20, '', 'inter', 'ap', '2023-07', 'eng', 'eng', '765', '56', '649E83', '649E832', '2023-06-30 07:27:01'),
(21, '', 'ssc', 'ap', '2023-07', 'ENG', 'eng', '987', '98', '649E83', '649E831', '2023-06-30 07:27:03'),
(22, '', 'inter', 'ap', '2023-07', 'eng', 'eng', '765', '56', '649E83', '649E832', '2023-06-30 07:27:03'),
(23, '', 'ssc', 'ap', '2023-11', 'eng', 'eng', '700', '70', '649E85', '649E851', '2023-06-30 07:33:48'),
(24, '', 'inter', 'ap', '2023-04', 'eng', 'eng', '800', '80', '649E85', '649E852', '2023-06-30 07:33:48'),
(25, '', 'ssc', 'ap', '2023-11', 'eng', 'eng', '700', '70', '649E85', '649E851', '2023-06-30 07:33:50'),
(26, '', 'inter', 'ap', '2023-04', 'eng', 'eng', '800', '80', '649E85', '649E852', '2023-06-30 07:33:50'),
(27, '', 'ssc', 'ap', '2023-11', 'eng', 'eng', '700', '70', '649E85', '649E851', '2023-06-30 07:34:04'),
(28, '', 'inter', 'ap', '2023-04', 'eng', 'eng', '800', '80', '649E85', '649E852', '2023-06-30 07:34:04'),
(29, '', 'ssc', 'ap', '2023-11', 'eng', 'eng', '700', '70', '649E85', '649E851', '2023-06-30 07:34:11'),
(30, '', 'inter', 'ap', '2023-04', 'eng', 'eng', '800', '80', '649E85', '649E852', '2023-06-30 07:34:11'),
(31, '', 'ssc', 'ap', '2023-11', 'eng', 'eng', '700', '70', '649E95', '649E951', '2023-06-30 08:42:23'),
(32, '', 'inter', 'ap', '2023-04', 'eng', 'eng', '800', '80', '649E95', '649E952', '2023-06-30 08:42:23');

-- --------------------------------------------------------

--
-- Table structure for table `education_details`
--

CREATE TABLE `education_details` (
  `appType` varchar(6) NOT NULL,
  `stdId` varchar(10) NOT NULL,
  `QualType` varchar(5) NOT NULL,
  `QualName` varchar(60) NOT NULL,
  `place` varchar(100) NOT NULL,
  `Univname` varchar(150) NOT NULL,
  `YearPass` varchar(14) NOT NULL,
  `Medium` varchar(20) NOT NULL,
  `division` varchar(4) NOT NULL,
  `marks` varchar(5) NOT NULL,
  `percentage` varchar(5) NOT NULL,
  `uploadTime` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `file` varchar(30) NOT NULL,
  `sno` bigint(20) UNSIGNED NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `education_details`
--

INSERT INTO `education_details` (`appType`, `stdId`, `QualType`, `QualName`, `place`, `Univname`, `YearPass`, `Medium`, `division`, `marks`, `percentage`, `uploadTime`, `file`, `sno`) VALUES
('ICP', 'std2', 'SSC', 'SSC', 'Kkd222', 'SC', '2020-07-15', 'English', '1', '12', '122', '2020-07-15 22:00:56', 'Images_NRI/std2/SSC.pdf', 1),
('ICP', 'std2', 'X2', 'inter', 'Kkd222', 'inter', '2020-07-15', '111', '111', '111', '12', '2020-07-16 17:16:01', 'Images_NRI/std2/Inter.pdf', 2),
('ICP', 'std2', 'TC', 'TC', '', '', '', '', '', '', '', '2020-07-15 22:00:56', 'Images_NRI/std2/TC.pdf', 3),
('NRI', 'std2', 'SSC', 'SSC', 'Kkd222', 'SC', '2020-07-15', 'English', '1', '12', '122', '2020-07-15 22:00:56', 'Images_NRI/std2/SSC.pdf', 4),
('NRI', 'std2', 'X2', 'inter', 'Kkd222', 'inter', '2020-07-15', '111', '111', '111', '12', '2020-07-16 17:16:01', 'Images_NRI/std2/Inter.pdf', 5),
('NRI', 'std2', 'TC', 'TC', '', '', '', '', '', '', '', '2020-07-15 22:00:56', 'Images_NRI/std2/TC.pdf', 6),
('NRI', 'std2', 'UG', '342423', 'dsfdsfdsfs', 'dfsfds', '2020-07-15', '2342342', 'dsfd', '3423', '23423', '2020-07-16 08:34:53', 'Images_NRI/std2/UG.zip', 7),
('ICP', 'std4', 'SSC', '', '', '', '', '', '', '', '', '2020-12-02 09:52:28', '', 8),
('ICP', 'std4', 'X2', '', '', '', '', '', '', '', '', '2020-12-02 09:52:28', '', 9),
('ICP', 'std4', 'TC', '', '', '', '', '', '', '', '', '2020-12-02 09:52:28', '', 10),
('ICP', 'std5', 'SSC', 'ssc', 'kakinada', 'aknu', '2022-08-17', 'good', 'Engl', '700', '70%', '2022-08-09 06:56:30', 'Images_ICP/std5/SSC.pdf', 11),
('ICP', 'std5', 'X2', 'Inter', 'kakinada', 'Aknu', '2022-08-10', 'good', 'Engl', '800', '80%', '2022-08-09 06:56:30', 'Images_ICP/std5/Inter.pdf', 12),
('ICP', 'std5', 'TC', 'TC', '', '', '', '', '', '', '', '2022-08-09 06:56:30', 'Images_ICP/std5/TC.pdf', 13),
('NRI', 'std3', 'SSC', 'ssc', 'Kakinada', 'Aknu', '2022-08-17', 'good', 'Engl', '700', '70%', '2022-08-09 07:39:02', 'Images_NRI/std3/SSC.pdf', 14),
('NRI', 'std3', 'X2', 'Inter', 'Kakinada', 'Aknu', '2022-08-24', 'good', 'Engl', '790', '79%', '2022-08-09 07:39:02', 'Images_NRI/std3/Inter.pdf', 15),
('NRI', 'std3', 'TC', 'TC', '', '', '', '', '', '', '', '2022-08-09 07:39:02', 'Images_NRI/std3/TC.pdf', 16),
('NRI', 'std3', 'UG', 'Degree', 'Kakinada', 'Aknu', '2022-08-10', 'good', 'Engl', '700', '70%', '2022-08-09 07:39:02', 'Images_NRI/std3/UG.zip', 17),
('NRI', 'std4', 'SSC', 'SSC', 'KAKINADA', 'AKNU', '2020-06-09', 'Good', 'ENGL', '99', '99%', '2022-08-09 10:09:14', 'Images_NRI/std4/SSC.pdf', 18),
('NRI', 'std4', 'X2', 'INTER', 'KAKINADA', 'AKNU', '2021-07-09', 'Good', 'ENGL', '99', '99%', '2022-08-09 10:09:14', 'Images_NRI/std4/Inter.pdf', 19),
('NRI', 'std4', 'TC', 'TC', '', '', '', '', '', '', '', '2022-08-09 10:09:14', 'Images_NRI/std4/TC.pdf', 20),
('NRI', 'std4', 'UG', 'SSC', 'KAKINADA', 'AKNU', '2022-08-17', 'GOOD', 'ENGl', '99', '99%', '2022-08-09 10:09:14', 'Images_NRI/std4/UG.zip', 21),
('NRI', 'std5', 'SSC', 'SSC', 'Kakinada', 'Aknu', '2022-09-07', 'Em', 'pola', '89', '99', '2022-09-03 06:11:28', 'Images_NRI/std5/SSC.pdf', 22),
('NRI', 'std5', 'X2', 'Inter', 'Kakinada', 'Aknu', '2022-09-18', 'Em', 'pola', '87', '99', '2022-09-03 06:11:28', 'Images_NRI/std5/Inter.pdf', 23),
('NRI', 'std5', 'TC', 'TC', '', '', '', '', '', '', '', '2022-09-03 06:11:28', 'Images_NRI/std5/TC.pdf', 24),
('NRI', 'std5', 'UG', '', '', '', '', '', '', '', '', '2022-09-03 06:07:14', '', 25),
('NRI', 'std6', 'SSC', 'SSC', 'SSC32', 'SSC', '2023-06-08', 'English', '1st', '456', '3.9', '2023-06-19 12:08:40', 'Images_ICP/std6/SSC.pdf', 26),
('NRI', 'std6', 'X2', 'Inter', 'SSC32', 'Inter', '2023-06-10', 'English', '2nd', '443', '8.9', '2023-06-19 12:08:40', 'Images_ICP/std6/Inter.pdf', 27),
('NRI', 'std6', 'TC', 'TC', '', '', '', '', '', '', '', '2023-06-19 12:08:40', 'Images_ICP/std6/TC.pdf', 28),
('NRI', 'std6', 'UG', '', '', '', '', '', '', '', '', '2022-09-03 07:21:45', '', 29),
('ICP', 'std6', 'SSC', 'SSC', 'SSC32', 'SSC', '2023-06-08', 'English', '1st', '456', '3.9', '2023-06-19 12:08:40', 'Images_ICP/std6/SSC.pdf', 30),
('ICP', 'std6', 'X2', 'Inter', 'SSC32', 'Inter', '2023-06-10', 'English', '2nd', '443', '8.9', '2023-06-19 12:08:40', 'Images_ICP/std6/Inter.pdf', 31),
('ICP', 'std6', 'TC', 'TC', '', '', '', '', '', '', '', '2023-06-19 12:08:40', 'Images_ICP/std6/TC.pdf', 32),
('NRI', 'std7', 'SSC', 'SSC', 'India', 'Secondary Board of Education', '2023-06-20', 'English', '1', '439', '72', '2023-06-20 05:35:20', 'Images_NRI/std7/SSC.pdf', 33),
('NRI', 'std7', 'X2', 'Intermediate', 'India', 'Board of Secondary Education', '2023-06-20', 'English', '1', '829', '80', '2023-06-20 05:35:20', 'Images_NRI/std7/Inter.pdf', 34),
('NRI', 'std7', 'TC', 'TC', '', '', '', '', '', '', '', '2023-06-20 05:35:20', 'Images_NRI/std7/TC.pdf', 35),
('NRI', 'std7', 'UG', 'B.Sc', 'India', 'Andhra University', '2023-06-20', 'English', '1', '690', '69', '2023-06-20 05:35:20', 'Images_NRI/std7/UG.zip', 36);

-- --------------------------------------------------------

--
-- Table structure for table `entranceexamdetails`
--

CREATE TABLE `entranceexamdetails` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `examination` varchar(50) NOT NULL,
  `marks_obtained` varchar(20) NOT NULL,
  `rank` varchar(10) NOT NULL,
  `remarks` varchar(11) NOT NULL,
  `p_randomId` varchar(15) NOT NULL,
  `randomId` varchar(15) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `entranceexamdetails`
--

INSERT INTO `entranceexamdetails` (`id`, `examination`, `marks_obtained`, `rank`, `remarks`, `p_randomId`, `randomId`, `created_at`) VALUES
(1, 'JEE_MAINS', '800', '1000', 'good', '649D79', '649D790', '2023-06-29 12:32:03'),
(2, 'AP_EAPCET', '900', '10000', 'good', '649D79', '649D791', '2023-06-29 12:32:03'),
(3, 'JEE_MAINS', '45.3138847', '645780', '', '649D7E', '649D7E0', '2023-06-29 12:50:36'),
(4, 'JEE_MAINS', '45.3138847', '645780', '', '649D7E', '649D7E0', '2023-06-29 12:50:38'),
(5, 'AP_EAPCET', '47', '50387', 'Qualified ', '649D93', '649D930', '2023-06-29 14:19:47'),
(9, 'AP_EAPCET', '63.2645', '11701', 'AP EAPCET 2', '649DB4', '649DB40', '2023-06-29 16:40:50'),
(10, 'TS_EAMCET', '61.098224', '22124', 'TS EAMCET 2', '649DB4', '649DB41', '2023-06-29 16:40:50'),
(11, 'JEE_MAINS', '68.3240469', '', 'JEE MAINS 2', '649DB4', '649DB42', '2023-06-29 16:40:50'),
(12, 'AP_EAPCET', '48.1754', '72893', '.', '649DCA', '649DCA0', '2023-06-29 18:16:16'),
(13, 'JEE_MAINS', '57', '10000', 'Qualified', '649E6A', '649E6A0', '2023-06-30 05:38:16'),
(14, 'AP_EAPCET', '62', '1200', 'Qualified', '649E6A', '649E6A1', '2023-06-30 05:38:16'),
(15, 'JEE_MAINS', '57', '10000', 'Qualified', '649E6A', '649E6A0', '2023-06-30 05:38:17'),
(16, 'AP_EAPCET', '62', '1200', 'Qualified', '649E6A', '649E6A1', '2023-06-30 05:38:17'),
(17, 'AP_EAPCET', '34', '100', 'good', '649E83', '649E830', '2023-06-30 07:27:01'),
(18, 'AP_EAPCET', '23', '122', 'good', '649E83', '649E831', '2023-06-30 07:27:01'),
(19, 'AP_EAPCET', '34', '100', 'good', '649E83', '649E830', '2023-06-30 07:27:03'),
(20, 'AP_EAPCET', '23', '122', 'good', '649E83', '649E831', '2023-06-30 07:27:03'),
(21, 'JEE_MAINS', '48', '2000', 'good', '649E85', '649E850', '2023-06-30 07:33:48'),
(22, 'AP_EAPCET', '42', '1000', 'good', '649E85', '649E851', '2023-06-30 07:33:48'),
(23, 'JEE_MAINS', '48', '2000', 'good', '649E85', '649E850', '2023-06-30 07:33:50'),
(24, 'AP_EAPCET', '42', '1000', 'good', '649E85', '649E851', '2023-06-30 07:33:50'),
(25, 'JEE_MAINS', '48', '2000', 'good', '649E85', '649E850', '2023-06-30 07:34:04'),
(26, 'AP_EAPCET', '42', '1000', 'good', '649E85', '649E851', '2023-06-30 07:34:04'),
(27, 'JEE_MAINS', '48', '2000', 'good', '649E85', '649E850', '2023-06-30 07:34:11'),
(28, 'AP_EAPCET', '42', '1000', 'good', '649E85', '649E851', '2023-06-30 07:34:11'),
(29, 'JEE_MAINS', '48', '2000', 'good', '649E95', '649E950', '2023-06-30 08:42:23'),
(30, 'AP_EAPCET', '42', '1000', 'good', '649E95', '649E951', '2023-06-30 08:42:23');

-- --------------------------------------------------------

--
-- Table structure for table `entranceexams`
--

CREATE TABLE `entranceexams` (
  `appType` varchar(6) NOT NULL,
  `stdId` varchar(10) NOT NULL,
  `Examname` varchar(12) NOT NULL,
  `Hallticketno` varchar(20) NOT NULL,
  `Marks` varchar(4) NOT NULL,
  `SecuredRank` varchar(8) NOT NULL,
  `file` varchar(50) NOT NULL,
  `status` int(1) NOT NULL DEFAULT 0,
  `sno` bigint(20) UNSIGNED NOT NULL,
  `uploadTime` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `entranceexams`
--

INSERT INTO `entranceexams` (`appType`, `stdId`, `Examname`, `Hallticketno`, `Marks`, `SecuredRank`, `file`, `status`, `sno`, `uploadTime`) VALUES
('ICP', 'std2', 'JEE', '11111111', '12', '12', 'Images_ICP/std2/Exam_JEE.pdf', 0, 1, '2020-07-15 20:50:50'),
('ICP', 'std2', 'APEAMCET', '11111111', '12', '12', 'Images_ICP/std2/Exam_APEAMCET.pdf', 1, 2, '2020-07-15 20:56:24'),
('ICP', 'std2', 'TSEAMCET', '', '', '', '', 0, 3, '2020-07-15 19:43:45'),
('ICP', 'std4', 'JEE', '', '', '', '', 0, 4, '2020-12-02 09:52:28'),
('ICP', 'std4', 'APEAMCET', '', '', '', '', 0, 5, '2020-12-02 09:52:28'),
('ICP', 'std4', 'TSEAMCET', '', '', '', '', 0, 6, '2020-12-02 09:52:28'),
('ICP', 'std5', 'JEE', '', '', '', '', 0, 7, '2022-08-09 06:03:42'),
('ICP', 'std5', 'APEAMCET', '123456789012', '1000', '78', 'Images_ICP/std5/Exam_APEAMCET.pdf', 1, 8, '2022-08-09 07:00:58'),
('ICP', 'std5', 'TSEAMCET', '', '', '', '', 0, 9, '2022-08-09 06:03:42'),
('ICP', 'std6', 'JEE', '10AB1R0090', '456', '34', 'Images_ICP/std6/Exam_JEE.pdf', 1, 10, '2023-06-19 12:09:50'),
('ICP', 'std6', 'APEAMCET', '', '', '', '', 0, 11, '2023-06-19 12:02:44'),
('ICP', 'std6', 'TSEAMCET', '', '', '', '', 0, 12, '2023-06-19 12:02:44');

-- --------------------------------------------------------

--
-- Table structure for table `preferences`
--

CREATE TABLE `preferences` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `pgmtype` varchar(6) DEFAULT NULL,
  `pgmstatus` varchar(6) DEFAULT NULL,
  `course` varchar(50) NOT NULL,
  `branch` varchar(50) NOT NULL,
  `preference` varchar(50) NOT NULL,
  `p_randomId` varchar(20) NOT NULL,
  `randomId` varchar(15) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `preferences`
--

INSERT INTO `preferences` (`id`, `pgmtype`, `pgmstatus`, `course`, `branch`, `preference`, `p_randomId`, `randomId`, `created_at`) VALUES
(1, 'BTH', 'yes', 'B.Tech', 'ECE', '1', '649D79', '649D791', '2023-06-29 12:32:03'),
(2, 'BTH', 'yes', 'B.Tech', 'CSE', '2', '649D79', '649D792', '2023-06-29 12:32:03'),
(3, 'BTH', 'yes', 'B.Tech', 'CSE(AI)', '3', '649D79', '649D793', '2023-06-29 12:32:03'),
(4, 'UNI', 'yes', 'B.Tech', 'EEE', '1', '649D79', '649D794', '2023-06-29 12:32:03'),
(5, 'BTH', 'yes', 'B.Tech', 'ECE', '3', '649D7E', '649D7E1', '2023-06-29 12:50:36'),
(6, 'BTH', 'yes', 'B.Tech', 'CSE', '1', '649D7E', '649D7E2', '2023-06-29 12:50:36'),
(7, 'BTH', 'yes', 'B.Tech', 'CSE(AI)', '2', '649D7E', '649D7E3', '2023-06-29 12:50:36'),
(8, 'UNI', 'no', 'B.Tech', 'EEE', '1', '649D7E', '649D7E4', '2023-06-29 12:50:36'),
(13, 'BTH', 'yes', 'B.Tech', 'ECE', '3', '649D93', '649D931', '2023-06-29 14:19:47'),
(14, 'BTH', 'yes', 'B.Tech', 'CSE', '1', '649D93', '649D932', '2023-06-29 14:19:47'),
(15, 'BTH', 'yes', 'B.Tech', 'CSE(AI)', '2', '649D93', '649D933', '2023-06-29 14:19:47'),
(16, 'UNI', 'no', 'B.Tech', 'EEE', '1', '649D93', '649D934', '2023-06-29 14:19:47'),
(17, 'BTH', 'yes', 'B.Tech', 'ECE', '3', '649DB4', '649DB41', '2023-06-29 16:40:49'),
(18, 'BTH', 'yes', 'B.Tech', 'CSE', '1', '649DB4', '649DB42', '2023-06-29 16:40:49'),
(19, 'BTH', 'yes', 'B.Tech', 'CSE(AI)', '2', '649DB4', '649DB43', '2023-06-29 16:40:49'),
(20, 'UNI', 'yes', 'B.Tech', 'EEE', '1', '649DB4', '649DB44', '2023-06-29 16:40:49'),
(25, 'BTH', 'yes', 'B.Tech', 'ECE', '3', '649DCA', '649DCA1', '2023-06-29 18:16:16'),
(26, 'BTH', 'yes', 'B.Tech', 'CSE', '2', '649DCA', '649DCA2', '2023-06-29 18:16:16'),
(27, 'BTH', 'yes', 'B.Tech', 'CSE(AI)', '1', '649DCA', '649DCA3', '2023-06-29 18:16:16'),
(28, 'UNI', 'yes', 'B.Tech', 'EEE', '1', '649DCA', '649DCA4', '2023-06-29 18:16:16'),
(29, 'BTH', 'yes', 'B.Tech', 'ECE', '1', '649E6A', '649E6A1', '2023-06-30 05:38:16'),
(30, 'BTH', 'yes', 'B.Tech', 'CSE', '2', '649E6A', '649E6A2', '2023-06-30 05:38:16'),
(31, 'BTH', 'yes', 'B.Tech', 'CSE(AI)', '3', '649E6A', '649E6A3', '2023-06-30 05:38:16'),
(32, 'UNI', 'yes', 'B.Tech', 'EEE', '1', '649E6A', '649E6A4', '2023-06-30 05:38:16'),
(33, 'BTH', 'yes', 'B.Tech', 'ECE', '1', '649E6A', '649E6A1', '2023-06-30 05:38:17'),
(34, 'BTH', 'yes', 'B.Tech', 'CSE', '2', '649E6A', '649E6A2', '2023-06-30 05:38:17'),
(35, 'BTH', 'yes', 'B.Tech', 'CSE(AI)', '3', '649E6A', '649E6A3', '2023-06-30 05:38:17'),
(36, 'UNI', 'yes', 'B.Tech', 'EEE', '1', '649E6A', '649E6A4', '2023-06-30 05:38:17'),
(37, 'BTH', 'yes', 'B.Tech', 'ECE', '1', '649E83', '649E831', '2023-06-30 07:27:01'),
(38, 'BTH', 'yes', 'B.Tech', 'CSE', '2', '649E83', '649E832', '2023-06-30 07:27:01'),
(39, 'BTH', 'yes', 'B.Tech', 'CSE(AI)', '3', '649E83', '649E833', '2023-06-30 07:27:01'),
(40, 'UNI', 'yes', 'B.Tech', 'EEE', '1', '649E83', '649E834', '2023-06-30 07:27:01'),
(41, 'BTH', 'yes', 'B.Tech', 'ECE', '1', '649E83', '649E831', '2023-06-30 07:27:03'),
(42, 'BTH', 'yes', 'B.Tech', 'CSE', '2', '649E83', '649E832', '2023-06-30 07:27:03'),
(43, 'BTH', 'yes', 'B.Tech', 'CSE(AI)', '3', '649E83', '649E833', '2023-06-30 07:27:03'),
(44, 'UNI', 'yes', 'B.Tech', 'EEE', '1', '649E83', '649E834', '2023-06-30 07:27:03'),
(45, 'BTH', 'yes', 'B.Tech', 'ECE', '1', '649E85', '649E851', '2023-06-30 07:33:48'),
(46, 'BTH', 'yes', 'B.Tech', 'CSE', '2', '649E85', '649E852', '2023-06-30 07:33:48'),
(47, 'BTH', 'yes', 'B.Tech', 'CSE(AI)', '3', '649E85', '649E853', '2023-06-30 07:33:48'),
(48, 'UNI', 'yes', 'B.Tech', 'EEE', '1', '649E85', '649E854', '2023-06-30 07:33:48'),
(49, 'BTH', 'yes', 'B.Tech', 'ECE', '1', '649E85', '649E851', '2023-06-30 07:33:50'),
(50, 'BTH', 'yes', 'B.Tech', 'CSE', '2', '649E85', '649E852', '2023-06-30 07:33:50'),
(51, 'BTH', 'yes', 'B.Tech', 'CSE(AI)', '3', '649E85', '649E853', '2023-06-30 07:33:50'),
(52, 'UNI', 'yes', 'B.Tech', 'EEE', '1', '649E85', '649E854', '2023-06-30 07:33:50'),
(53, 'BTH', 'yes', 'B.Tech', 'ECE', '1', '649E85', '649E851', '2023-06-30 07:34:04'),
(54, 'BTH', 'yes', 'B.Tech', 'CSE', '2', '649E85', '649E852', '2023-06-30 07:34:04'),
(55, 'BTH', 'yes', 'B.Tech', 'CSE(AI)', '3', '649E85', '649E853', '2023-06-30 07:34:04'),
(56, 'UNI', 'yes', 'B.Tech', 'EEE', '1', '649E85', '649E854', '2023-06-30 07:34:04'),
(57, 'BTH', 'yes', 'B.Tech', 'ECE', '1', '649E85', '649E851', '2023-06-30 07:34:11'),
(58, 'BTH', 'yes', 'B.Tech', 'CSE', '2', '649E85', '649E852', '2023-06-30 07:34:11'),
(59, 'BTH', 'yes', 'B.Tech', 'CSE(AI)', '3', '649E85', '649E853', '2023-06-30 07:34:11'),
(60, 'UNI', 'yes', 'B.Tech', 'EEE', '1', '649E85', '649E854', '2023-06-30 07:34:11'),
(61, 'BTH', 'yes', 'B.Tech', 'ECE', '1', '649E95', '649E951', '2023-06-30 08:42:23'),
(62, 'BTH', 'yes', 'B.Tech', 'CSE', '2', '649E95', '649E952', '2023-06-30 08:42:23'),
(63, 'BTH', 'yes', 'B.Tech', 'CSE(AI)', '3', '649E95', '649E953', '2023-06-30 08:42:23'),
(64, 'UNI', 'yes', 'B.Tech', 'EEE', '1', '649E95', '649E954', '2023-06-30 08:42:23');

-- --------------------------------------------------------

--
-- Table structure for table `specializations`
--

CREATE TABLE `specializations` (
  `course` varchar(10) NOT NULL,
  `branchname` varchar(100) NOT NULL,
  `branchcode` varchar(3) NOT NULL,
  `specialization` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `specializations`
--

INSERT INTO `specializations` (`course`, `branchname`, `branchcode`, `specialization`) VALUES
('B.Tech', 'Civil Engineering', 'B1', 'B.Tech'),
('B.Tech', 'Electrical & Electronics Engg', 'B2', 'B.Tech'),
('B.Tech', 'Mechanical Engg', 'B3', 'B.Tech'),
('B.Tech', 'Electronics & Communication Engg', 'B4', 'B.Tech'),
('B.Tech', 'Computer Science & Engg', 'B5', 'B.Tech'),
('B.Tech', 'Petroleum Engg', 'B6', 'B.Tech'),
('B.Tech', 'PetroChemical Engg', 'B7', 'B.Tech'),
('B.Tech', 'Information Technology', 'B8', 'B.Tech'),
('B.Tech', 'Metallurgical Engg', 'B9', 'B.Tech'),
('MCA', 'Maste of Computer Applications', 'MC', 'CSE'),
('MBA', 'Maste of Business Applications', 'MB', 'MBA'),
('M.Tech', 'Soil Mechanics & Foundation Engg', 'M1', 'CIVIL'),
('M.Tech', 'Structural Engg', 'M2', 'CIVIL'),
('M.Tech', 'Hydraulics and Water Resource Engg', 'M3', 'CIVIL'),
('M.Tech', 'Advanced Electrical Power Sys', 'M4', 'EEE'),
('M.Tech', 'High Voltage Engg', 'M5', 'EEE'),
('M.Tech', 'Power Electronics & Drivies', 'M6', 'EEE'),
('M.Tech', 'Advanced Power Systems', 'M7', 'EEE'),
('M.Tech', 'Machine Design', 'M8', 'ME'),
('M.Tech', 'CAD/CAM', 'M9', 'ME'),
('M.Tech', 'Thermal Engg', 'M10', 'ME'),
('M.Tech', 'Instrumentation and Control Systems', 'M11', 'ECE'),
('M.Tech', 'Computers & Communication Engg', 'M12', 'ECE'),
('M.Tech', 'VLSI & Embedded Systems', 'M13', 'ECE'),
('M.Tech', 'Communication Engg & Signal Processing', 'M14', 'ECE'),
('M.Tech', 'Systems and Signal Processing', 'M15', 'ECE'),
('M.Tech', 'Computer Science & Engg', 'M16', 'CSE'),
('M.Tech', 'Information Technology', 'M17', 'CSE'),
('M.Tech', 'Cyber Security', 'M18', 'CSE'),
('M.Tech', 'Pipe Line Engineering', 'M19', 'PIPK'),
('M.Tech', 'Material Science & Technology', 'M20', 'MS&T'),
('M.Tech', 'Spatial Information Technology', 'M21', 'MSIT'),
('M.Tech', 'Food Technology', 'M22', 'MSIT'),
('M.Tech', 'BioTechnology', 'M23', 'MSIT'),
('M.Tech', 'Avionics', 'M24', 'MSIT'),
('M.Tech', 'Nano Technology', 'M25', 'MSIT'),
('M.Tech', 'Renwebale Energy', 'M26', 'MSIT'),
('M.Tech', 'Environmental Engg & Management', 'M27', 'MSIT'),
('M.Tech', 'Remote Sensing', 'M28', 'MSIT'),
('B.Tech', 'Civil Engineering', 'B1', 'B.Tech'),
('B.Tech', 'Electrical & Electronics Engg', 'B2', 'B.Tech'),
('B.Tech', 'Mechanical Engg', 'B3', 'B.Tech'),
('B.Tech', 'Electronics & Communication Engg', 'B4', 'B.Tech'),
('B.Tech', 'Computer Science & Engg', 'B5', 'B.Tech'),
('B.Tech', 'Petroleum Engg', 'B6', 'B.Tech'),
('B.Tech', 'PetroChemical Engg', 'B7', 'B.Tech'),
('B.Tech', 'Information Technology', 'B8', 'B.Tech'),
('B.Tech', 'Metallurgical Engg', 'B9', 'B.Tech'),
('MCA', 'Maste of Computer Applications', 'MC', 'CSE'),
('MBA', 'Maste of Business Applications', 'MB', 'MBA'),
('M.Tech', 'Soil Mechanics & Foundation Engg', 'M1', 'CIVIL'),
('M.Tech', 'Structural Engg', 'M2', 'CIVIL'),
('M.Tech', 'Hydraulics and Water Resource Engg', 'M3', 'CIVIL'),
('M.Tech', 'Advanced Electrical Power Sys', 'M4', 'EEE'),
('M.Tech', 'High Voltage Engg', 'M5', 'EEE'),
('M.Tech', 'Power Electronics & Drivies', 'M6', 'EEE'),
('M.Tech', 'Advanced Power Systems', 'M7', 'EEE'),
('M.Tech', 'Machine Design', 'M8', 'ME'),
('M.Tech', 'CAD/CAM', 'M9', 'ME'),
('M.Tech', 'Thermal Engg', 'M10', 'ME'),
('M.Tech', 'Instrumentation and Control Systems', 'M11', 'ECE'),
('M.Tech', 'Computers & Communication Engg', 'M12', 'ECE'),
('M.Tech', 'VLSI & Embedded Systems', 'M13', 'ECE'),
('M.Tech', 'Communication Engg & Signal Processing', 'M14', 'ECE'),
('M.Tech', 'Systems and Signal Processing', 'M15', 'ECE'),
('M.Tech', 'Computer Science & Engg', 'M16', 'CSE'),
('M.Tech', 'Information Technology', 'M17', 'CSE'),
('M.Tech', 'Cyber Security', 'M18', 'CSE'),
('M.Tech', 'Pipe Line Engineering', 'M19', 'PIPK'),
('M.Tech', 'Material Science & Technology', 'M20', 'MS&T'),
('M.Tech', 'Spatial Information Technology', 'M21', 'MSIT'),
('M.Tech', 'Food Technology', 'M22', 'MSIT'),
('M.Tech', 'BioTechnology', 'M23', 'MSIT'),
('M.Tech', 'Avionics', 'M24', 'MSIT'),
('M.Tech', 'Nano Technology', 'M25', 'MSIT'),
('M.Tech', 'Renwebale Energy', 'M26', 'MSIT'),
('M.Tech', 'Environmental Engg & Management', 'M27', 'MSIT'),
('M.Tech', 'Remote Sensing', 'M28', 'MSIT');

-- --------------------------------------------------------

--
-- Table structure for table `stepsstatus`
--

CREATE TABLE `stepsstatus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `appType` varchar(6) NOT NULL,
  `step` int(1) NOT NULL,
  `status` int(1) NOT NULL DEFAULT 0,
  `stdId` varchar(10) NOT NULL,
  `Desc1` varchar(80) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `stepsstatus`
--

INSERT INTO `stepsstatus` (`id`, `appType`, `step`, `status`, `stdId`, `Desc1`) VALUES
(1, 'ICP', 1, 1, 'std2', 'Bank Details'),
(2, 'ICP', 2, 1, 'std2', 'Student Details'),
(3, 'ICP', 3, 1, 'std2', 'Educational Details'),
(4, 'ICP', 4, 1, 'std2', 'Course Priority Details'),
(5, 'ICP', 5, 1, 'std2', 'Entrance Details'),
(6, 'ICP', 6, 1, 'std2', 'FinalSubmission'),
(7, 'NRI', 1, 1, 'std2', 'Bank Details'),
(8, 'NRI', 2, 1, 'std2', 'Student Details'),
(9, 'NRI', 3, 1, 'std2', 'Educational Details'),
(10, 'NRI', 4, 1, 'std2', 'Branch Priority Details'),
(11, 'NRI', 5, 1, 'std2', 'Entrance Details'),
(12, 'NRI', 6, 0, 'std2', 'FinalSubmission'),
(13, 'ICP', 1, 0, 'std4', 'Bank Details'),
(14, 'ICP', 2, 0, 'std4', 'Student Details'),
(15, 'ICP', 3, 0, 'std4', 'Educational Details'),
(16, 'ICP', 4, 0, 'std4', 'Course Priority Details'),
(17, 'ICP', 5, 0, 'std4', 'Entrance Details'),
(18, 'ICP', 6, 0, 'std4', 'FinalSubmission'),
(19, 'ICP', 1, 1, 'std5', 'Bank Details'),
(20, 'ICP', 2, 1, 'std5', 'Student Details'),
(21, 'ICP', 3, 1, 'std5', 'Educational Details'),
(22, 'ICP', 4, 1, 'std5', 'Course Priority Details'),
(23, 'ICP', 5, 1, 'std5', 'Entrance Details'),
(24, 'ICP', 6, 1, 'std5', 'FinalSubmission'),
(25, 'NRI', 1, 1, 'std3', 'Bank Details'),
(26, 'NRI', 2, 1, 'std3', 'Student Details'),
(27, 'NRI', 3, 1, 'std3', 'Educational Details'),
(28, 'NRI', 4, 1, 'std3', 'Branch Priority Details'),
(29, 'NRI', 5, 0, 'std3', 'Entrance Details'),
(30, 'NRI', 6, 1, 'std3', 'FinalSubmission'),
(31, 'NRI', 1, 1, 'std4', 'Bank Details'),
(32, 'NRI', 2, 1, 'std4', 'Student Details'),
(33, 'NRI', 3, 1, 'std4', 'Educational Details'),
(34, 'NRI', 4, 1, 'std4', 'Branch Priority Details'),
(35, 'NRI', 5, 0, 'std4', 'Entrance Details'),
(36, 'NRI', 6, 0, 'std4', 'FinalSubmission'),
(37, 'NRI', 1, 1, 'std5', 'Bank Details'),
(38, 'NRI', 2, 1, 'std5', 'Student Details'),
(39, 'NRI', 3, 1, 'std5', 'Educational Details'),
(40, 'NRI', 4, 1, 'std5', 'Branch Priority Details'),
(41, 'NRI', 5, 1, 'std5', 'Entrance Details'),
(42, 'NRI', 6, 1, 'std5', 'FinalSubmission'),
(43, 'NRI', 1, 0, 'std6', 'Bank Details'),
(44, 'NRI', 2, 0, 'std6', 'Student Details'),
(45, 'NRI', 3, 1, 'std6', 'Educational Details'),
(46, 'NRI', 4, 0, 'std6', 'Branch Priority Details'),
(47, 'NRI', 5, 1, 'std6', 'Entrance Details'),
(48, 'NRI', 6, 0, 'std6', 'FinalSubmission'),
(49, 'ICP', 1, 1, 'std6', 'Bank Details'),
(50, 'ICP', 2, 1, 'std6', 'Student Details'),
(51, 'ICP', 3, 1, 'std6', 'Educational Details'),
(52, 'ICP', 4, 1, 'std6', 'Course Priority Details'),
(53, 'ICP', 5, 1, 'std6', 'Entrance Details'),
(54, 'ICP', 6, 1, 'std6', 'FinalSubmission'),
(55, 'NRI', 1, 1, 'std7', 'Bank Details'),
(56, 'NRI', 2, 1, 'std7', 'Student Details'),
(57, 'NRI', 3, 1, 'std7', 'Educational Details'),
(58, 'NRI', 4, 1, 'std7', 'Branch Priority Details'),
(59, 'NRI', 5, 1, 'std7', 'Entrance Details'),
(60, 'NRI', 6, 1, 'std7', 'FinalSubmission');

-- --------------------------------------------------------

--
-- Table structure for table `student_details`
--

CREATE TABLE `student_details` (
  `appType` varchar(6) NOT NULL,
  `stdId` varchar(10) NOT NULL,
  `StdName` varchar(150) NOT NULL,
  `FName` varchar(150) NOT NULL,
  `dob` varchar(14) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `Nationality` varchar(40) NOT NULL,
  `AdressCommunication` text NOT NULL,
  `LandLine` varchar(30) NOT NULL,
  `MobileNo` varchar(16) NOT NULL,
  `Email` varchar(120) NOT NULL,
  `PassNumber` varchar(14) NOT NULL,
  `PassIssuedDate` varchar(14) NOT NULL,
  `PassIssuedLoc` varchar(100) NOT NULL,
  `LocalDetails` text NOT NULL,
  `Reservation` varchar(10) NOT NULL,
  `No_years_studied` int(2) NOT NULL,
  `English_studied` int(2) NOT NULL,
  `Photo` varchar(30) NOT NULL,
  `BirthCertf` varchar(40) NOT NULL,
  `uploadTime` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `id` bigint(20) UNSIGNED NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `student_details`
--

INSERT INTO `student_details` (`appType`, `stdId`, `StdName`, `FName`, `dob`, `Gender`, `Nationality`, `AdressCommunication`, `LandLine`, `MobileNo`, `Email`, `PassNumber`, `PassIssuedDate`, `PassIssuedLoc`, `LocalDetails`, `Reservation`, `No_years_studied`, `English_studied`, `Photo`, `BirthCertf`, `uploadTime`, `id`) VALUES
('ICP', 'std2', 'N V V SATYA PRASAD', 'N B G MOHAN RAO', '2020-07-15', 'M', 'Indian', 'kakinada', '0883432423', '23423423242', 'kasi24u@gmail.com', '32423423', '2020-07-16', 'kakinada', 'dsfdsfsddsfdsfdsfdsfs', 'BC-A', 2, 2, 'Images_ICP/std2/StdPhoto.jpg', '', '2020-07-15 20:48:31', 1),
('NRI', 'std2', 'N V V SATYA PRASAD', 'N B G MOHAN RAO', '2020-07-15', 'M', 'Indian', 'dgfgdfgdfgddfgd', '0883432423', '23423423242', 'kasi24u@gmail.com', '32423423', '', '', '', '', 2, 2, 'Images_NRI/std2/StdPhoto.jpg', 'Images_NRI/std2/StdPhoto.jpg', '2020-07-15 21:40:12', 2),
('ICP', 'std4', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, '', '', '2020-12-02 09:52:28', 3),
('ICP', 'std5', 'PENUGONDA RAJESH', 'VEERRAJU', '1998-03-28', 'M', 'India', 'Jangateddygudem<br />\npin : 534447', '100', '7013745854', 'penugondarajesh46@gmail.com', '123456', '2022-08-24', 'kakinada', 'kakinada', 'BC-B', 2, 2, 'Images_ICP/std5/StdPhoto.jpg', '', '2022-08-09 09:22:12', 4),
('NRI', 'std3', 'MAHESH', 'MANI', '2022-08-17', 'M', 'India', 'Polavaram<br /><br /><br /><br /><br /><br /><br /><br /><br />\r\npin:534315', '100', '674765785687', 'raju@gmail.com', '12345', '', '', '', '', 5, 5, 'Images_NRI/std3/StdPhoto.jpg', 'Images_NRI/std3/StdPhoto.jpg', '2022-08-09 15:08:17', 5),
('NRI', 'std4', 'SURYA', 'KRISHNA', '2022-08-17', 'M', 'India', 'Kakinada<br /><br />\r\npincode:533002', '1800-1800-1800', '7013745854', 'surya@gmail.com', '5446', '', '', '', '', 2, 2, 'Images_NRI/std4/StdPhoto.jpg', 'Images_NRI/std4/StdBirthCertf.jpg', '2022-08-09 10:00:37', 6),
('NRI', 'std5', 'RAVI', 'RAMU', '2022-09-30', 'M', 'India', '34536', 'jhgfjkgjg', '3564657657', 'ravi@gmail.com', 'Solomonraju@7', '', '', '', '', 2, 2, 'Images_NRI/std5/StdPhoto.jpg', 'Images_NRI/std5/StdBirthCertf.jpg', '2022-09-03 06:09:33', 7),
('NRI', 'std6', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, '', '', '2022-09-03 07:21:45', 8),
('ICP', 'std6', 'N SATYA PRASAD', '3242', '2023-06-19', 'M', 'Indian', 'kakinada', '23423423423', '8712906926', 'kasi34u@gmail.com', '23424243242342', '2023-06-21', 'kakinada', 'sdfsfsdfsdfsdfs', 'BC-A', 2, 2, 'Images_ICP/std6/StdPhoto.jpg', '', '2023-06-19 12:06:10', 9),
('NRI', 'std7', 'BHARATHI MOTAMARRI', 'BHARATHI', '2023-06-20', 'M', 'Indian', '533001', '2358494', '8743241215', 'bharathi@gmail.com', '4512SU', '', '', '', '', 10, 10, 'Images_NRI/std7/StdPhoto.jpg', 'Images_NRI/std7/StdPhoto.jpg', '2023-06-20 05:58:24', 10);

-- --------------------------------------------------------

--
-- Table structure for table `student_info`
--

CREATE TABLE `student_info` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `std_name` varchar(150) NOT NULL,
  `f_name` varchar(150) NOT NULL,
  `dob` varchar(20) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `nationality` varchar(50) NOT NULL,
  `mob_number` varchar(10) NOT NULL,
  `alt_number` varchar(10) NOT NULL,
  `email` varchar(70) NOT NULL,
  `address` varchar(225) NOT NULL,
  `pass_details` varchar(225) NOT NULL,
  `pass_number` varchar(50) NOT NULL,
  `date_issue` varchar(100) NOT NULL,
  `local_details` text NOT NULL,
  `EM_Studied` varchar(50) NOT NULL,
  `eng_subject` varchar(50) NOT NULL,
  `image` varchar(250) NOT NULL,
  `bank_document` varchar(255) NOT NULL,
  `ssc_document` varchar(255) NOT NULL,
  `inter_document` varchar(255) NOT NULL,
  `TC_document` varchar(255) NOT NULL,
  `other_document` varchar(255) NOT NULL,
  `bank_name` varchar(100) NOT NULL,
  `reference_collect` varchar(50) NOT NULL,
  `date_payment` varchar(20) NOT NULL,
  `amount` varchar(10) NOT NULL,
  `randomId` varchar(15) NOT NULL,
  `declaration` varchar(10) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student_info`
--

INSERT INTO `student_info` (`id`, `std_name`, `f_name`, `dob`, `gender`, `nationality`, `mob_number`, `alt_number`, `email`, `address`, `pass_details`, `pass_number`, `date_issue`, `local_details`, `EM_Studied`, `eng_subject`, `image`, `bank_document`, `ssc_document`, `inter_document`, `TC_document`, `other_document`, `bank_name`, `reference_collect`, `date_payment`, `amount`, `randomId`, `declaration`, `updated_at`, `created_at`) VALUES
(5, 'MANDA AKAASH', 'MANDA RAMA SOMESWARARAO', '2006-07-22', 'male', 'INDIAN', '9493016878', '7386559641', 'akaashmanda@gmail.com', '4-41-1, Opposite Aditya Junior College, Subbaraopet, Tadepalligudem, West Godavari District, AndhraPradesh - 534101', '', '', '', 'Local', '10+', '10+', 'Student_Folder/649DB4/649DB4.jpg', 'Student_Folder/649DB4/Bank.pdf', 'Student_Folder/649DB4/SSC.pdf', 'Student_Folder/649DB4/Inter.pdf', 'Student_Folder/649DB4/TC.zip', 'Student_Folder/649DB4/ENTRANCE.zip', 'SBI', 'DUL1408213', '2023-06-29', '1500/-', '649DB4', '1', '2023-06-29 16:40:49', '2023-06-29 16:40:49'),
(8, 'RAJI', 'SRINIVAS', '1999-10-08', 'female', 'Indian', '9988778978', '6767868967', 'bhanu41k@gmail.com', 'Kakinada', '', '', '', 'Local', '2', '2', 'Student_Folder/649E6A/649E6A.png', 'Student_Folder/649E6A/Bank.pdf', 'Student_Folder/649E6A/SSC.pdf', 'Student_Folder/649E6A/Inter.pdf', 'Student_Folder/649E6A/TC.zip', 'Student_Folder/649E6A/ENTRANCE.zip', 'SBI', 'SBIN01234', '2023-02-28', '1500/-', '649E6A', '1', '2023-06-30 05:38:16', '2023-06-30 05:38:16'),
(12, 'ammu', 'suresh', '2013-12-06', 'female', 'indian', '6273468924', '3574873478', 'bhavani16@gmail.com', 'kakinda', '', '', '', 'local', '2', '5', 'Student_Folder/649E85/649E85.png', 'Student_Folder/649E85/Bank.pdf', 'Student_Folder/649E85/SSC.pdf', 'Student_Folder/649E85/Inter.pdf', 'Student_Folder/649E85/TC.zip', 'Student_Folder/649E85/ENTRANCE.zip', 'SBI', 'SBIn0034567', '2023-06-09', '1500/-', '649E85', '1', '2023-06-30 07:33:48', '2023-06-30 07:33:48'),
(7, 'M DEEPAK SAINATH REDDY', 'M VISHNU VARDHAN REDDY', '2006-10-16', 'male', 'INDIAN', '6305609838', '9490188591', 'deepakreddy1610atp@gmail.com', '11/970, ARAVINDA NAGAR, ANANTAPUR,\r\n ANDHRA PRADESH,\r\nPIN CODE:515001', '', '', '', 'LOCAL', '10+', '10+', 'Student_Folder/649DCA/649DCA.jpg', '', 'Student_Folder/649DCA/SSC.pdf', 'Student_Folder/649DCA/Inter.pdf', '', '', 'SBI', 'DUL1412313', '2023-06-29', '1500/-', '649DCA', '1', '2023-06-29 18:16:16', '2023-06-29 18:16:16'),
(1, 'BHAVANI', 'NARASIMHA MURTHY', '1999-01-04', 'female', 'Indian', '9978675645', '8978677878', 'durgakamadi999@gmail.com', 'Kakinada', '', '', '', 'Local', '2', '2', 'Student_Folder/649D79/649D79.jpeg', 'Student_Folder/649D79/Bank.pdf', 'Student_Folder/649D79/SSC.pdf', 'Student_Folder/649D79/Inter.pdf', 'Student_Folder/649D79/TC.zip', 'Student_Folder/649D79/ENTRANCE.zip', 'SBI', 'SBIN00123', '2023-03-31', '1500/-', '649D79', '1', '2023-06-29 12:32:03', '2023-06-29 12:32:03'),
(4, 'KORIBILLI HARSHA VARDHINI', 'DHANANJAYA DURGA MALLESWARARAO', '2005-08-30', 'female', 'Indian', '9392371926', '9912250322', 'harshavardhinikoribilli80@gmail.com', 'D No 7/1/2018, Kustiladoddi, Eastern Street, Eluru, Eluru District, Andhra Pradesh', 'NA', '', '', 'Local - D No 7/1/2018, Kustiladoddi, Eastern Street, Eluru, Eluru District, Andhra Pradesh', '10+', '10+', 'Student_Folder/649D93/649D93.jpg', 'Student_Folder/649D93/Bank.pdf', 'Student_Folder/649D93/SSC.pdf', 'Student_Folder/649D93/Inter.pdf', 'Student_Folder/649D93/TC.zip', 'Student_Folder/649D93/ENTRANCE.zip', 'SBI', 'DUL1382499', '2023-06-29', '1500/-', '649D93', '1', '2023-06-29 14:19:47', '2023-06-29 14:19:47'),
(2, 'Devisetty Rahul Paul', 'Karunakara rao', '2006-04-03', 'male', 'Indian', '9492508180', '9848887847', 'rahulpauldevisetty@gmail.com', '3-264/3 devisetty Vari street, sarpavaram', '', '', '', '3-264/3 devisetty Vari street, sarpavaram', '10+', '10+', 'Student_Folder/649D7E/649D7E.jpeg', 'Student_Folder/649D7E/Bank.pdf', 'Student_Folder/649D7E/SSC.pdf', 'Student_Folder/649D7E/Inter.pdf', 'Student_Folder/649D7E/TC.zip', 'Student_Folder/649D7E/ENTRANCE.zip', 'SBI', 'DUL1391541', '2023-06-29', '1500/-', '649D7E', '1', '2023-06-29 12:50:36', '2023-06-29 12:50:36'),
(10, 'hasini', 'nageswasarao', '2012-03-30', 'female', 'Indian', '9876567898', '6789975678', 'suhasinimarotha@gmail.comm', 'Kakinada', '', '', '', 'Local', '2', '2', 'Student_Folder/649E83/649E83.png', 'Student_Folder/649E83/Bank.pdf', 'Student_Folder/649E83/SSC.pdf', 'Student_Folder/649E83/Inter.pdf', 'Student_Folder/649E83/TC.zip', 'Student_Folder/649E83/ENTRANCE.zip', 'SBI', 'SBIN01453', '2023-04-30', '1500/-', '649E83', '1', '2023-06-30 07:27:01', '2023-06-30 07:27:01');

-- --------------------------------------------------------

--
-- Table structure for table `student_info_old`
--

CREATE TABLE `student_info_old` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `std_name` varchar(70) NOT NULL,
  `f_name` varchar(70) NOT NULL,
  `dob` varchar(20) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `nationality` varchar(50) NOT NULL,
  `mob_number` varchar(10) NOT NULL,
  `alt_number` varchar(10) NOT NULL,
  `email` varchar(70) NOT NULL,
  `address` varchar(225) NOT NULL,
  `pass_details` varchar(225) NOT NULL,
  `pass_number` varchar(50) NOT NULL,
  `date_issue` varchar(100) NOT NULL,
  `local_details` varchar(200) NOT NULL,
  `EM_Studied` varchar(5) NOT NULL,
  `eng_subject` varchar(5) NOT NULL,
  `image` varchar(250) NOT NULL,
  `randomId` varchar(10) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `subjectdetails`
--

CREATE TABLE `subjectdetails` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `appType` varchar(4) NOT NULL,
  `stdId` varchar(8) NOT NULL,
  `subname` varchar(12) NOT NULL,
  `sub_obt` int(4) NOT NULL,
  `sub_max` int(4) NOT NULL,
  `sub_marks` int(4) NOT NULL,
  `sub_grade` varchar(3) NOT NULL,
  `sub_perc` varchar(6) NOT NULL,
  `transfile` varchar(50) NOT NULL,
  `uploadTime` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `subjectdetails`
--

INSERT INTO `subjectdetails` (`id`, `appType`, `stdId`, `subname`, `sub_obt`, `sub_max`, `sub_marks`, `sub_grade`, `sub_perc`, `transfile`, `uploadTime`) VALUES
(1, 'NRI', 'std2', 'Maths', 34, 444, 44, '78', '44', 'Images_NRI/std2/Transcripts.zip', '2020-07-16 08:55:03'),
(2, 'NRI', 'std2', 'Physcis', 34, 444, 44, '44', '44', 'Images_NRI/std2/Transcripts.zip', '2020-07-16 08:46:40'),
(3, 'NRI', 'std2', 'Chemistry', 34, 444, 44, '44', '44', 'Images_NRI/std2/Transcripts.zip', '2020-07-16 08:46:40'),
(4, 'NRI', 'std2', 'English', 34, 444, 44, '44', '44', 'Images_NRI/std2/Transcripts.zip', '2020-07-16 08:46:40'),
(5, 'NRI', 'std3', 'Maths', 996, 100, 996, 'A+', '90%', 'Images_NRI/std3/Transcripts.zip', '2022-08-09 09:13:18'),
(6, 'NRI', 'std3', 'Physcis', 12, 12, 996, 'A+', '90%', 'Images_NRI/std3/Transcripts.zip', '2022-08-09 13:42:34'),
(7, 'NRI', 'std3', 'Chemistry', 906, 100, 906, 'A+', '90%', 'Images_NRI/std3/Transcripts.zip', '2022-08-09 13:43:18'),
(8, 'NRI', 'std3', 'English', 976, 100, 976, 'A+', '97%', 'Images_NRI/std3/Transcripts.zip', '2022-08-09 09:13:18'),
(9, 'NRI', 'std4', 'Maths', 99, 100, 99, 'A', '99%', 'Images_NRI/std4/Transcripts.zip', '2022-08-09 10:12:45'),
(10, 'NRI', 'std4', 'Physcis', 12, 12, 99, 'A', '99%', 'Images_NRI/std4/Transcripts.zip', '2022-08-09 14:58:56'),
(11, 'NRI', 'std4', 'Chemistry', 99, 100, 99, 'A', '99%', 'Images_NRI/std4/Transcripts.zip', '2022-08-09 10:12:45'),
(12, 'NRI', 'std4', 'English', 99, 100, 99, 'A', '99%', 'Images_NRI/std4/Transcripts.zip', '2022-08-09 10:12:45'),
(13, 'NRI', 'std5', 'Maths', 23, 23, 23, '23', '23', 'Images_NRI/std5/Transcripts.zip', '2022-09-03 06:13:15'),
(14, 'NRI', 'std5', 'Physcis', 0, 0, 0, '', '', '', '2022-09-03 06:07:14'),
(15, 'NRI', 'std5', 'Chemistry', 23, 23, 23, '23', '23', 'Images_NRI/std5/Transcripts.zip', '2022-09-03 06:13:15'),
(16, 'NRI', 'std5', 'English', 23, 20, 23, '87', '78', 'Images_NRI/std5/Transcripts.zip', '2022-09-03 06:13:15'),
(17, 'NRI', 'std6', 'Maths', 0, 0, 0, '', '', '', '2022-09-03 07:21:45'),
(18, 'NRI', 'std6', 'Physcis', 0, 0, 0, '', '', '', '2022-09-03 07:21:45'),
(19, 'NRI', 'std6', 'Chemistry', 0, 0, 0, '', '', '', '2022-09-03 07:21:45'),
(20, 'NRI', 'std6', 'English', 0, 0, 0, '', '', '', '2022-09-03 07:21:45'),
(21, 'NRI', 'std7', 'Maths', 75, 75, 75, '10', '10', 'Images_NRI/std7/Transcripts.zip', '2023-06-20 05:40:50'),
(22, 'NRI', 'std7', 'Physcis', 0, 0, 0, '', '', '', '2023-06-20 05:02:11'),
(23, 'NRI', 'std7', 'Chemistry', 80, 80, 80, '10', '10', 'Images_NRI/std7/Transcripts.zip', '2023-06-20 05:40:50'),
(24, 'NRI', 'std7', 'English', 80, 80, 80, '10', '10', 'Images_NRI/std7/Transcripts.zip', '2023-06-20 05:40:50');

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE `test` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `referenceno` varchar(50) NOT NULL,
  `email` varchar(55) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `update_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `randomId` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `test`
--

INSERT INTO `test` (`id`, `referenceno`, `email`, `created_at`, `update_at`, `randomId`) VALUES
(5, 'ABC', 'bhavani16@gmail.com', '2023-06-21 05:57:40', '2023-06-21 05:57:40', '64929154cc5ee');

-- --------------------------------------------------------

--
-- Table structure for table `uploaddoc`
--

CREATE TABLE `uploaddoc` (
  `stdId` varchar(20) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `filetype` varchar(20) NOT NULL,
  `ext_type` varchar(10) NOT NULL,
  `filename` varchar(20) NOT NULL,
  `target` varchar(40) NOT NULL,
  `id` bigint(20) UNSIGNED NOT NULL,
  `uploadTime` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `usercredentials`
--

CREATE TABLE `usercredentials` (
  `idVal` bigint(20) UNSIGNED NOT NULL,
  `emailId` varchar(100) NOT NULL,
  `password` varchar(30) NOT NULL,
  `pwdVal` varchar(50) NOT NULL,
  `token` varchar(20) NOT NULL,
  `appType` varchar(6) NOT NULL,
  `stdno` int(4) NOT NULL,
  `accStatus` int(1) NOT NULL DEFAULT 0,
  `datetime` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `usercredentials`
--

INSERT INTO `usercredentials` (`idVal`, `emailId`, `password`, `pwdVal`, `token`, `appType`, `stdno`, `accStatus`, `datetime`) VALUES
(1, 'admin@gmail.com', '', '7b27537507649309b03cd0cda80346c3', 'std1', 'ICP', 1, 0, '2020-07-14 08:03:10'),
(2, 'admin@gmail.com', '', '7b27537507649309b03cd0cda80346c3', 'std1', 'NRI', 1, 0, '2020-07-14 08:03:43'),
(8, 'kleela106@gmail.com', '123', '202cb962ac59075b964b07152d234b70', 'std2', 'NRI', 2, 0, '2023-06-20 13:52:59'),
(7, 'laxminarayana.chodipalli@gmail.com', '12345', '827ccb0eea8a706c4c34a16891f84e7b', 'std2', 'ICP', 2, 0, '2023-06-20 13:54:40'),
(9, 'kasi24u@gmail.com', '', '55c819cc466f2a5399a594b8ec4fd027', 'std3', 'ICP', 3, 0, '2020-12-02 09:02:59'),
(10, 'kasi@gmail.com', '', 'd123468020c45653c0951aa28bc6c211', 'std4', 'ICP', 4, 0, '2020-12-02 09:52:28'),
(11, 'penugondarajesh@gmail.com', '', '506b3446c70b4744b2c3a43d6c5aedbd', 'std5', 'ICP', 5, 0, '2022-08-09 06:03:42'),
(12, 'raju@gmail.com', '', '1ad9f189359e0797ccc7b3987efb2925', 'std3', 'NRI', 3, 0, '2022-08-09 07:23:33'),
(13, 'raj@gmail.com', '', '4431dca29c0c413cbddbe189c039ea61', 'std4', 'NRI', 4, 0, '2022-08-09 09:53:48'),
(14, 'ravi@gmail.com', '', '927e5af19fa010e4f7ce0580125a71eb', 'std5', 'NRI', 5, 0, '2022-09-03 06:07:14'),
(15, 'krishna@gmail.com', '', 'f5e0e644b5d36a4ed435159c4917a0fd', 'std6', 'NRI', 6, 0, '2022-09-03 07:21:45'),
(16, 'kasi34u@gmail.com', '', '7b27537507649309b03cd0cda80346c3', 'std6', 'ICP', 6, 0, '2023-06-19 12:02:44'),
(19, 'bharathi@gmail.com', 'Bh@12345', 'db9a447ed46dfcb5ffe387333a0e2dc9', 'std7', 'ICP', 7, 0, '2023-06-20 09:33:51');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bankdetails`
--
ALTER TABLE `bankdetails`
  ADD UNIQUE KEY `sno` (`sno`);

--
-- Indexes for table `branchpreferences`
--
ALTER TABLE `branchpreferences`
  ADD UNIQUE KEY `sno` (`sno`);

--
-- Indexes for table `confirmation`
--
ALTER TABLE `confirmation`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `coursepreferences`
--
ALTER TABLE `coursepreferences`
  ADD UNIQUE KEY `sno` (`sno`);

--
-- Indexes for table `education`
--
ALTER TABLE `education`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `education_details`
--
ALTER TABLE `education_details`
  ADD UNIQUE KEY `sno` (`sno`);

--
-- Indexes for table `entranceexamdetails`
--
ALTER TABLE `entranceexamdetails`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `entranceexams`
--
ALTER TABLE `entranceexams`
  ADD UNIQUE KEY `sno` (`sno`);

--
-- Indexes for table `preferences`
--
ALTER TABLE `preferences`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `stepsstatus`
--
ALTER TABLE `stepsstatus`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `student_details`
--
ALTER TABLE `student_details`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `student_info`
--
ALTER TABLE `student_info`
  ADD PRIMARY KEY (`email`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `student_info_old`
--
ALTER TABLE `student_info_old`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `subjectdetails`
--
ALTER TABLE `subjectdetails`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `test`
--
ALTER TABLE `test`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `uploaddoc`
--
ALTER TABLE `uploaddoc`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `usercredentials`
--
ALTER TABLE `usercredentials`
  ADD PRIMARY KEY (`emailId`,`appType`,`stdno`),
  ADD UNIQUE KEY `idVal` (`idVal`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bankdetails`
--
ALTER TABLE `bankdetails`
  MODIFY `sno` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `branchpreferences`
--
ALTER TABLE `branchpreferences`
  MODIFY `sno` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `confirmation`
--
ALTER TABLE `confirmation`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `coursepreferences`
--
ALTER TABLE `coursepreferences`
  MODIFY `sno` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `education`
--
ALTER TABLE `education`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `education_details`
--
ALTER TABLE `education_details`
  MODIFY `sno` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `entranceexamdetails`
--
ALTER TABLE `entranceexamdetails`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `entranceexams`
--
ALTER TABLE `entranceexams`
  MODIFY `sno` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `preferences`
--
ALTER TABLE `preferences`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT for table `stepsstatus`
--
ALTER TABLE `stepsstatus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `student_details`
--
ALTER TABLE `student_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `student_info`
--
ALTER TABLE `student_info`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `student_info_old`
--
ALTER TABLE `student_info_old`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `subjectdetails`
--
ALTER TABLE `subjectdetails`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `test`
--
ALTER TABLE `test`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `uploaddoc`
--
ALTER TABLE `uploaddoc`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `usercredentials`
--
ALTER TABLE `usercredentials`
  MODIFY `idVal` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
