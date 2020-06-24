-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 12, 2020 at 02:16 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `designer`
--

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

CREATE TABLE `country` (
  `CountryId` int(10) NOT NULL,
  `Name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `country`
--

INSERT INTO `country` (`CountryId`, `Name`) VALUES
(1, 'India'),
(2, 'Canada'),
(3, 'USA'),
(4, 'Australia');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `CustomerId` int(10) NOT NULL,
  `FirstName` varchar(100) NOT NULL,
  `LastName` varchar(100) NOT NULL,
  `Company` varchar(100) NOT NULL,
  `ProfilePic` varchar(255) DEFAULT NULL,
  `EmailId` varchar(255) NOT NULL,
  `Phone` varchar(20) NOT NULL,
  `TimeZone` varchar(200) NOT NULL,
  `UserName` varchar(255) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `BOD` date DEFAULT NULL,
  `Position` varchar(100) DEFAULT NULL,
  `Address` varchar(500) DEFAULT NULL,
  `City` varchar(100) DEFAULT NULL,
  `CountryId` int(10) DEFAULT NULL,
  `Status` tinyint(1) NOT NULL DEFAULT 1,
  `CreatedAt` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`CustomerId`, `FirstName`, `LastName`, `Company`, `ProfilePic`, `EmailId`, `Phone`, `TimeZone`, `UserName`, `Password`, `BOD`, `Position`, `Address`, `City`, `CountryId`, `Status`, `CreatedAt`) VALUES
(1, 'atman', 'kakadiya', 'ssss', '1591799009_bc3fb3930428d65f7cdf.jpg', 'kakadiyaatman@gmail.com', '8469942899', 'Pacific/Midway', 'kakadiyaatman@gmail.com', 'cXFxcXE=', '1995-11-06', 'owner', 'surat', 'surat', 1, 1, '2020-05-24 05:26:27'),
(2, 'atman', 'kakadiya', 'ssss', '2.jpg', 'user1@gmail.com', '8469942899', 'indian time zone', 'user1', 'MTIzNDU=', '1995-11-06', 'owner', 'surat', 'surat', 1, 1, '2020-05-24 05:26:27'),
(3, 'User', 'two', 'ssss', '3.jpg', 'user2@gmail.com', '8469942899', 'indian time zone', 'user2', 'MTIzNDU=', '1995-11-06', 'owner', 'surat', 'surat', 1, 1, '2020-05-24 05:26:27'),
(4, 'User', 'three', 'ssss', '4.jpg', 'user3@gmail.com', '8469942899', 'indian time zone', 'user3', 'MTIzNDU=', '1995-11-06', 'owner', 'surat', 'surat', 1, 1, '2020-05-24 05:26:27'),
(5, 'User', 'four', 'ssss', '5.jpg', 'user4@gmail.com', '8469942899', 'indian time zone', 'user4', 'MTIzNDU=', '1995-11-06', 'owner', 'surat', 'surat', 1, 1, '2020-05-24 05:26:27'),
(7, 'demo', 'demo', 'company1', NULL, 'demo@gmail.com', '8469942899', 'Pacific/Midway', 'demo', 'ZGVtbzE=', NULL, NULL, NULL, NULL, 1, 1, '2020-06-04 23:19:01');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `FeedbackId` int(10) NOT NULL,
  `CustomerId` int(10) NOT NULL,
  `Title` varchar(255) NOT NULL,
  `Note` text DEFAULT NULL,
  `File` varchar(255) DEFAULT NULL,
  `Tags` varchar(255) DEFAULT NULL,
  `Status` tinyint(1) NOT NULL DEFAULT 1,
  `CreatedAt` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`FeedbackId`, `CustomerId`, `Title`, `Note`, `File`, `Tags`, `Status`, `CreatedAt`) VALUES
(1, 1, 'demo1', 'demo note dfkjdf fdvjds njfsvjsd jfdjn', '1.png', 'sd,fdsgdfg,sds', 1, '2020-05-24 05:27:16'),
(2, 2, 'demo2', 'demo2 note dfkjdf fdvjds njfsvjsd jfdjn', '2.png', 'sd,fdsgdfg,sds', 1, '2020-05-24 05:27:16'),
(4, 1, 'demo4', 'demo2 note dfkjdf fdvjds njfsvjsd jfdjn', '2.png', 'sd,fdsgdfg,sds', 1, '2020-05-24 05:27:16'),
(5, 2, 'demo1', 'dfsdf ddsfsd<div>zsdasdsa</div><div>Note</div>', '1591306451_b883d47f538c5e980205.jpg', 'sdfsd,sdfsdfsd,fdgfd', 1, '2020-06-05 03:04:11'),
(7, 2, 'sdfdsf', 'dfgdfgdfg<div>sdsdf</div><div>Note</div>', NULL, 'sdfsdfsd asdsad', 1, '2020-06-05 03:36:38');

-- --------------------------------------------------------

--
-- Table structure for table `flight_blog`
--

CREATE TABLE `flight_blog` (
  `FlightBlogId` int(10) NOT NULL,
  `Title` varchar(200) NOT NULL,
  `Version` varchar(100) NOT NULL,
  `Description` text DEFAULT NULL,
  `CreatedAt` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `flight_blog`
--

INSERT INTO `flight_blog` (`FlightBlogId`, `Title`, `Version`, `Description`, `CreatedAt`) VALUES
(1, 'GENERAL UPDATE 1', 'v1.0.1', '<ul style=\"color: rgb(100, 108, 154); font-family: Poppins, Helvetica, sans-serif; font-size: 13px; letter-spacing: normal;\"><li>Added a Quick Search functionality for search job ids, job name, etc..</li><li>Updated the placement of action buttons on job brief details</li><li>Displayed the whole assigned team in your Project</li><li>Removed the High, Normal and Low Priority</li><li>Urgent job feature where you can request 1 urgent job per month. Usually takes 1 to 2 days depending on the Job.</li><li>Custom Jobs might take more than 3 days to deliver on its first draft depending on the project. Will get and get you updated for accurate ETA once we accept the Job.</li><li>Projects can now be assigned to 2 or more designers</li></ul>', '2020-06-05 02:21:22'),
(2, 'SELF-SERVE PORTAL UPDATE', 'v2.0.1', '<ul style=\"color: rgb(100, 108, 154); font-family: Poppins, Helvetica, sans-serif; font-size: 13px; letter-spacing: normal;\"><li>Self-serve portal added&nbsp;<span style=\"font-weight: 700;\">here</span>. Or you can click to your Upper Right User Icon and in the drop down list, you will see&nbsp;<span style=\"font-weight: 700;\">Upgrades</span></li><li>Ability to update Card Information</li><li>Ability to Add new Card</li><li>Manage Account and Billing information</li><li>Ability to Cancel and Reactivate account anytime</li><li>Ability to Upgrade and Downgrade Plans</li><li>Cancellation of your subscription status will be set to non-renewing if it is in active state, until the end of term, and then cancelled.</li></ul>', '2020-06-05 02:22:22'),
(3, 'GENERAL & SUBSCRIPTION PORTAL UPDATE', 'v3.0.1', '<ul style=\"color: rgb(100, 108, 154); font-family: Poppins, Helvetica, sans-serif; font-size: 13px; letter-spacing: normal;\"><li>Improve Upgrades and Subscription Settings</li><li>Cancelled Subscriptions will be mark as \'Non-renewing\' and will be cancelled officially onto their next billing</li><li>Improve Search Result Display</li><li>Changed the naming of version from Version 1,2,3 to First Draft, Revision 1,2,3 etc..</li><li>Added a new column \'Currently at\' for displaying the current revision number of a project.</li></ul>', '2020-06-05 02:23:02'),
(4, 'GENERAL UPDATE', 'v4.0.1', '<ul style=\"color: rgb(100, 108, 154); font-family: Poppins, Helvetica, sans-serif; font-size: 13px; letter-spacing: normal;\"><li>Queued and Pending Feedback job status are no longer considered as Live active job</li><li>Move the sort and auto deploy in dashboard</li><li>Logo and Web job requests made easier by answering a short web form, rather than downloading a PDF.</li><li>Fixed minor bugs</li><li>Ebook, web, photo clean up job requests are more accurate with the addition of \"How many pages / photos?\" field</li><li>Trial accounts will be more focused on knowing your brand and seeing how you fit in what we do. When signing up to a plan coming from a trial account, \"urgent\" job function will be unlocked</li></ul>', '2020-06-05 02:23:37');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `JobId` int(10) NOT NULL,
  `CustomerId` int(10) NOT NULL,
  `SubCateId` int(10) NOT NULL,
  `Title` varchar(200) NOT NULL,
  `Description` text NOT NULL,
  `SpecialRequest` text NOT NULL,
  `Hanger` tinyint(1) DEFAULT NULL,
  `JobStatus` int(1) NOT NULL,
  `JobCompletedDate` date DEFAULT NULL,
  `DownloadLink` varchar(255) DEFAULT NULL,
  `ProjectOutput` varchar(255) NOT NULL,
  `CreatedAt` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`JobId`, `CustomerId`, `SubCateId`, `Title`, `Description`, `SpecialRequest`, `Hanger`, `JobStatus`, `JobCompletedDate`, `DownloadLink`, `ProjectOutput`, `CreatedAt`) VALUES
(1, 2, 29, 'demo1', 'demo1 sdfnjc jksdvk skjn sdmk lsdkl d; s mk kfvk mf mklf', 'demo1 sdfnjc jksdvk skjn sdmk lsdkl d; s mk kfvk mf mklf', 0, 3, '2020-05-26', '1590528831_2eef71d094386bda1a0e.jpg', '.png, .jpg', '2020-05-26 15:54:37'),
(2, 1, 30, 'demo1', 'demo1 sdfnjc jksdvk skjn sdmk lsdkl d; s mk kfvk mf mklf', 'demo1 sdfnjc jksdvk skjn sdmk lsdkl d; s mk kfvk mf mklf', 0, 2, NULL, NULL, '.png, .jpg', '2020-05-26 15:54:39'),
(3, 1, 31, 'demo1', 'demo1 sdfnjc jksdvk skjn sdmk lsdkl d; s mk kfvk mf mklf', 'demo1 sdfnjc jksdvk skjn sdmk lsdkl d; s mk kfvk mf mklf', 1, 2, NULL, NULL, '.png, .jpg', '2020-05-26 15:54:37'),
(4, 1, 32, 'demo1', 'demo1 sdfnjc jksdvk skjn sdmk lsdkl d; s mk kfvk mf mklf', 'demo1 sdfnjc jksdvk skjn sdmk lsdkl d; s mk kfvk mf mklf', 0, 3, '2020-05-26', '2.png', '.png, .jpg', '2020-05-26 15:54:39'),
(5, 1, 29, 'demo1', 'demo1 sdfnjc jksdvk skjn sdmk lsdkl d; s mk kfvk mf mklf', 'demo1 sdfnjc jksdvk skjn sdmk lsdkl d; s mk kfvk mf mklf', 1, 3, '2020-05-12', '3.png', '.png, .jpg', '2020-05-26 15:54:37'),
(6, 5, 31, 'demo1', 'demo1 sdfnjc jksdvk skjn sdmk lsdkl d; s mk kfvk mf mklf', 'demo1 sdfnjc jksdvk skjn sdmk lsdkl d; s mk kfvk mf mklf', 0, 3, '2020-05-12', '4.png', '.png, .jpg', '2020-05-26 15:54:39'),
(7, 1, 30, 'demo1', 'demo1 sdfnjc jksdvk skjn sdmk lsdkl d; s mk kfvk mf mklf', 'demo1 sdfnjc jksdvk skjn sdmk lsdkl d; s mk kfvk mf mklf', 0, 2, NULL, NULL, '.png, .jpg', '2020-05-26 15:54:37'),
(8, 4, 32, 'demo1', 'demo1 sdfnjc jksdvk skjn sdmk lsdkl d; s mk kfvk mf mklf', 'demo1 sdfnjc jksdvk skjn sdmk lsdkl d; s mk kfvk mf mklf', 1, 3, '2020-05-12', '5.png', '.png, .jpg', '2020-05-26 15:54:39'),
(9, 1, 29, 'project demo1', 'Project Description demo', 'SPECIAL REQUESTS demo', 1, 1, NULL, NULL, '.png,.psd', '2020-06-06 19:08:07'),
(10, 1, 30, 'demo2', 'Project Description sddemo2', 'SPECIAL REQUESTS demo2', 0, 1, NULL, NULL, '.jpg', '2020-06-06 19:09:27'),
(16, 1, 32, 'first', 'i need one t-shirt design', 'SPECIAL REQUESTS', 0, 2, NULL, NULL, '.png', '2020-06-06 19:43:10'),
(20, 1, 29, 'sfdsfsd aa', 'Project Description', 'SPECIAL REQUESTS\"', 1, 1, NULL, NULL, '.jpg', '2020-06-06 19:55:00'),
(21, 1, 29, 'ddd', 'Project Description dd', 'SPECIAL REQUESTS\" dd', 1, 1, NULL, NULL, '.png,.jpg', '2020-06-06 19:59:37'),
(22, 1, 29, 'sfdsfsd', 'Project Description', 'SPECIAL REQUESTS', 1, 1, NULL, NULL, '', '2020-06-06 20:00:24'),
(23, 1, 29, 'sfdsfsd', 'Project Description', 'SPECIAL REQUESTS', 1, 1, NULL, NULL, '', '2020-06-06 20:00:29'),
(24, 1, 29, 'sfdsfsd', 'Project Description', 'SPECIAL REQUESTS', 1, 1, NULL, NULL, '', '2020-06-06 20:00:37'),
(25, 1, 29, 'sfdsfsd', 'Project Description', 'SPECIAL REQUESTS', 1, 1, NULL, NULL, '', '2020-06-06 20:00:52'),
(26, 1, 29, 'sdfsdf', 'Project Description', 'SPECIAL REQUESTS', 1, 1, NULL, NULL, '', '2020-06-06 20:03:31'),
(27, 1, 31, 'sfsd', 'Project Description', 'SPECIAL REQUESTS', 1, 1, NULL, NULL, '', '2020-06-06 20:07:04'),
(28, 1, 31, 'qqq', 'Project Description', 'SPECIAL REQUESTS', 1, 1, NULL, NULL, '', '2020-06-06 20:14:26'),
(29, 1, 31, 'qqq', 'Project Description', 'SPECIAL REQUESTS', 1, 1, NULL, NULL, '', '2020-06-06 20:15:06'),
(30, 1, 31, 'qqq', 'Project Description', 'SPECIAL REQUESTS', 1, 1, NULL, NULL, '', '2020-06-06 20:15:41'),
(31, 1, 31, 'w1', 'Project Description', 'SPECIAL REQUESTS', 1, 1, NULL, NULL, '', '2020-06-06 20:16:13'),
(32, 1, 32, 'w2', 'Project Description', 'SPECIAL REQUESTS', 1, 1, NULL, NULL, '', '2020-06-06 20:16:46'),
(33, 1, 31, 'final 1', 'Project Description final', 'SPECIAL REQUESTS final', 1, 1, NULL, NULL, '.jpg', '2020-06-06 23:09:02'),
(34, 1, 29, 'final 2', 'Project Description final2', 'SPECIAL REQUESTS', 1, 1, NULL, NULL, '.jpg', '2020-06-06 23:20:01'),
(36, 1, 30, 'final3 33 44', 'Project Description 44', 'SPECIAL REQUESTS\"\" 44', 0, 3, '2020-06-06', '1591480057_1d96ab4a6e74f5c2706d.png', '.png', '2020-06-06 23:25:11'),
(37, 1, 30, 'uuuu1', 'Project Description uuu', 'SPECIAL REQUESTS uuuu1', 0, 3, '2020-06-06', '1591467027_80836699dfa6a80b5d99.png', '.png,.jpg', '2020-06-06 23:36:02'),
(38, 1, 30, 'uuuu1', 'Project Description uuu', 'SPECIAL REQUESTS uuuu1', 0, 2, NULL, NULL, '.png', '2020-06-07 02:10:02');

-- --------------------------------------------------------

--
-- Table structure for table `job_assets`
--

CREATE TABLE `job_assets` (
  `AssetsId` int(10) NOT NULL,
  `JobId` int(10) NOT NULL,
  `File` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `job_assets`
--

INSERT INTO `job_assets` (`AssetsId`, `JobId`, `File`) VALUES
(1, 1, '1.jpg'),
(2, 1, '2.jpg'),
(3, 1, '3.jpg'),
(4, 1, '4.jpg'),
(5, 2, '5.jpg'),
(6, 2, '4.jpg'),
(7, 3, '3.jpg'),
(8, 4, '1.jpg'),
(9, 26, '1591454011_70572221b3bf676fb186.jpg'),
(10, 26, '1591454011_565c1aaec347271b98fc.jpg'),
(11, 27, '1591454224_448007923e4546322e03.jpg'),
(12, 27, '1591454224_21c43ca353cd15677f08.jpg'),
(13, 32, '1591454806_afef776224c13f617950.jpg'),
(14, 32, '1591454806_a87316c0ef3a2af34bec.jpg'),
(15, 32, '1591454806_1f9ce7e5324bb52e2480.jpg'),
(16, 33, ''),
(17, 33, ''),
(18, 33, '1591465142_b6acce601d4218ee2ab8.png'),
(19, 33, '1591465142_cfa6b11cd1f611c77d33.png'),
(20, 33, '1591465142_59aba2c39a14b06143a4.png'),
(34, 37, '1591466762_633f752a00b3f7966f84.png'),
(35, 37, '1591466762_ccff6a6ccaa90018a117.png'),
(36, 37, '1591466762_49e83e43691bf97f4b69.png'),
(37, 38, '1591466762_633f752a00b3f7966f84.png'),
(38, 38, '1591466762_ccff6a6ccaa90018a117.png'),
(39, 38, '1591466762_49e83e43691bf97f4b69.png'),
(40, 36, '1591479887_0fc860b4a1a21daf5e44.png');

-- --------------------------------------------------------

--
-- Table structure for table `job_assign_staff`
--

CREATE TABLE `job_assign_staff` (
  `AssignStaffId` int(10) NOT NULL,
  `JobId` int(10) NOT NULL,
  `OwnerId` int(10) NOT NULL,
  `CreatedAt` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `job_assign_staff`
--

INSERT INTO `job_assign_staff` (`AssignStaffId`, `JobId`, `OwnerId`, `CreatedAt`) VALUES
(2, 1, 2, '2020-05-27 01:41:45'),
(3, 1, 7, '2020-05-27 01:43:45'),
(4, 2, 9, '2020-05-27 01:45:29'),
(5, 3, 4, '2020-05-27 01:49:01'),
(7, 2, 8, '2020-05-27 02:34:11'),
(9, 2, 4, '2020-05-27 02:35:09'),
(11, 37, 4, '2020-06-06 23:37:14'),
(13, 37, 2, '2020-06-06 23:37:49'),
(14, 36, 2, '2020-06-07 03:15:48'),
(17, 36, 4, '2020-06-07 03:17:15');

-- --------------------------------------------------------

--
-- Table structure for table `job_question_answer`
--

CREATE TABLE `job_question_answer` (
  `AnswerId` int(10) NOT NULL,
  `JobId` int(10) NOT NULL,
  `QuestionId` int(10) NOT NULL,
  `Answer` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `job_question_answer`
--

INSERT INTO `job_question_answer` (`AnswerId`, `JobId`, `QuestionId`, `Answer`) VALUES
(1, 36, 10, ' what is your product ? atman'),
(2, 36, 11, 'Explain Your Product full detail :msdfosdisdkj njs kd jk'),
(3, 37, 10, 'uuuuuu1'),
(4, 37, 11, 'uu1 sdfkjdsv kdskml kmdf klmdfm klfdkl d');

-- --------------------------------------------------------

--
-- Table structure for table `maincate`
--

CREATE TABLE `maincate` (
  `MainCateId` int(10) NOT NULL,
  `Name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `maincate`
--

INSERT INTO `maincate` (`MainCateId`, `Name`) VALUES
(24, 'Web'),
(25, 'Digital'),
(26, 'Print');

-- --------------------------------------------------------

--
-- Table structure for table `owner`
--

CREATE TABLE `owner` (
  `OwnerId` int(10) NOT NULL,
  `FirstName` varchar(100) NOT NULL,
  `LastName` varchar(100) NOT NULL,
  `ProfilePic` varchar(255) NOT NULL,
  `Phone` varchar(20) NOT NULL,
  `EmailId` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Type` tinyint(1) NOT NULL DEFAULT 0,
  `Designation` varchar(200) DEFAULT NULL,
  `Status` tinyint(1) NOT NULL DEFAULT 1,
  `CreatedAt` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `owner`
--

INSERT INTO `owner` (`OwnerId`, `FirstName`, `LastName`, `ProfilePic`, `Phone`, `EmailId`, `Password`, `Type`, `Designation`, `Status`, `CreatedAt`) VALUES
(1, 'atman', 'kakadiya', '1590421618_3c05fbdb0883518ee436.jpg', '8469942899', 'kakadiyaatman@gmail.com', 'YXRtYW4=', 1, 'Owner', 1, '2020-05-23 18:49:45'),
(2, 'atman2 aaaaaaa', 'kakadiya', '2.jpg', '8469942899', 'atman@gmail.com', 'YXRtYW4=', 0, 'Manager', 1, '2020-05-23 18:49:45'),
(4, 'ssssss', 'wwww', '1590286776_50e4e3314925b96b4403.jpg', '8469942899', 'sss@gmail.com', 'c3Nzc3Nzcw==', 0, 'Quality Checker', 1, '2020-05-23 18:49:45'),
(5, 'atman2 aaaaaaa', 'kakadiya', '1590285765_14ecd2e6e19bab594541.jpg', '8469942899', 'atman3@gmail.com', 'YXRtYW4=', 0, 'Manager', 1, '2020-05-24 07:32:45'),
(7, 'atman2 aaaaaaa', 'kakadiya', '1590285839_510e825b925b4e13d3f0.jpg', '8469942899', 'atman4@gmail.com', 'YXRtYW4=', 0, 'Quality Checker', 1, '2020-05-24 07:33:59'),
(8, 'atman2 aaaaaaa', 'kakadiya', '1590285977_1706526a1a24e4fc5420.jpg', '8469942899', 'atman5@gmail.com', 'YXRtYW4=', 0, 'Manager', 1, '2020-05-24 07:36:17'),
(9, 'Admin', 'Admin', '2.jpg', '8469942899', 'admin@gmail.com', 'YWRtaW4=', 1, 'Owner', 1, '2020-05-24 07:51:11');

-- --------------------------------------------------------

--
-- Table structure for table `subcate`
--

CREATE TABLE `subcate` (
  `SubCateId` int(10) NOT NULL,
  `MainCateId` int(10) NOT NULL,
  `Name` varchar(200) NOT NULL,
  `Logo` varchar(255) NOT NULL,
  `ProjectOutput` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subcate`
--

INSERT INTO `subcate` (`SubCateId`, `MainCateId`, `Name`, `Logo`, `ProjectOutput`) VALUES
(29, 24, 'Mobile UI', '1591316804_65a1c4d7218aaf87285c.png', '.png,.jpg,.psd'),
(30, 25, 'Product Mockup', '1591316814_624f9705fe6d1a1da42d.png', '.png,.jpg'),
(31, 24, 'Web Banner', '1591316835_bb604e1fb00339c331f2.png', '.jpg'),
(32, 26, 'T-Shirt Design', '1591316825_f6987adf2135f81f7a2f.png', '.png');

-- --------------------------------------------------------

--
-- Table structure for table `subcate_question`
--

CREATE TABLE `subcate_question` (
  `QuestionId` int(10) NOT NULL,
  `SubCateId` int(10) NOT NULL,
  `Title` text NOT NULL,
  `CreatedAt` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subcate_question`
--

INSERT INTO `subcate_question` (`QuestionId`, `SubCateId`, `Title`, `CreatedAt`) VALUES
(8, 29, 'give me your primary color code', '2020-05-27 03:34:30'),
(9, 29, 'what is your secondary color code', '2020-05-27 03:35:32'),
(10, 30, 'what is your product ?', '2020-05-27 03:35:52'),
(11, 30, '<b>Explain Your Product full detail</b>', '2020-05-27 03:36:20'),
(12, 31, 'what is width and height of banner size', '2020-05-27 03:36:47'),
(13, 31, 'which color use for banner', '2020-05-27 03:37:02'),
(14, 32, 'what is your <b>gender</b>?', '2020-05-27 03:38:13'),
(15, 29, 'Question1', '2020-05-27 15:05:02'),
(16, 29, 'Question1', '2020-05-27 15:05:37'),
(17, 29, 'Question2', '2020-05-27 15:05:54');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `country`
--
ALTER TABLE `country`
  ADD PRIMARY KEY (`CountryId`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`CustomerId`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`FeedbackId`);

--
-- Indexes for table `flight_blog`
--
ALTER TABLE `flight_blog`
  ADD PRIMARY KEY (`FlightBlogId`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`JobId`);

--
-- Indexes for table `job_assets`
--
ALTER TABLE `job_assets`
  ADD PRIMARY KEY (`AssetsId`),
  ADD KEY `job_Assets_jobid` (`JobId`);

--
-- Indexes for table `job_assign_staff`
--
ALTER TABLE `job_assign_staff`
  ADD PRIMARY KEY (`AssignStaffId`);

--
-- Indexes for table `job_question_answer`
--
ALTER TABLE `job_question_answer`
  ADD PRIMARY KEY (`AnswerId`);

--
-- Indexes for table `maincate`
--
ALTER TABLE `maincate`
  ADD PRIMARY KEY (`MainCateId`);

--
-- Indexes for table `owner`
--
ALTER TABLE `owner`
  ADD PRIMARY KEY (`OwnerId`);

--
-- Indexes for table `subcate`
--
ALTER TABLE `subcate`
  ADD PRIMARY KEY (`SubCateId`);

--
-- Indexes for table `subcate_question`
--
ALTER TABLE `subcate_question`
  ADD PRIMARY KEY (`QuestionId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `country`
--
ALTER TABLE `country`
  MODIFY `CountryId` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `CustomerId` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `FeedbackId` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `flight_blog`
--
ALTER TABLE `flight_blog`
  MODIFY `FlightBlogId` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `JobId` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `job_assets`
--
ALTER TABLE `job_assets`
  MODIFY `AssetsId` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `job_assign_staff`
--
ALTER TABLE `job_assign_staff`
  MODIFY `AssignStaffId` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `job_question_answer`
--
ALTER TABLE `job_question_answer`
  MODIFY `AnswerId` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `maincate`
--
ALTER TABLE `maincate`
  MODIFY `MainCateId` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `owner`
--
ALTER TABLE `owner`
  MODIFY `OwnerId` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `subcate`
--
ALTER TABLE `subcate`
  MODIFY `SubCateId` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `subcate_question`
--
ALTER TABLE `subcate_question`
  MODIFY `QuestionId` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `job_assets`
--
ALTER TABLE `job_assets`
  ADD CONSTRAINT `job_Assets_jobid` FOREIGN KEY (`JobId`) REFERENCES `jobs` (`JobId`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
