-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 04, 2020 at 07:28 PM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `web service`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
`id` int(11) NOT NULL,
  `Name` text NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Message` varchar(400) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `Name`, `Email`, `Message`) VALUES
(1, 'Abdul', 'waz.akram001@gmail.com', 'hello'),
(2, 'arpita', 'sarker@gmail', 'HELLO');

-- --------------------------------------------------------

--
-- Table structure for table `discussion`
--

CREATE TABLE IF NOT EXISTS `discussion` (
`id` int(11) NOT NULL,
  `Email` varchar(40) NOT NULL,
  `Topic Title` varchar(70) NOT NULL,
  `Text` varchar(400) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `discussion`
--

INSERT INTO `discussion` (`id`, `Email`, `Topic Title`, `Text`) VALUES
(1, 'waz.akram001@gmail.com', 'Web Services', 'Hi, How Are you??'),
(2, 'Nadim980@mail.com', 'Web Services', 'kkkkkkkkkkkkkkkkkkkkk'),
(3, 'arpitasarker@gmail.com', 'course', 'check this'),
(4, 'yangliu8321@gmail.com', 'Liu topic1', 'This is Liu topic');

-- --------------------------------------------------------

--
-- Table structure for table `parent's children names`
--

CREATE TABLE IF NOT EXISTS `parent's children names` (
`id` int(11) NOT NULL,
  `Name` text NOT NULL,
  `Age` int(3) NOT NULL,
  `Parents Name` text NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `parent's children names`
--

INSERT INTO `parent's children names` (`id`, `Name`, `Age`, `Parents Name`) VALUES
(5, 'wazii , fe , jb , kd , hd ', 23, 'Abdul Qudoos'),
(6, 'Ahmad , fe , jb , kd , hd ', 2, 'Nadim'),
(7, 'Ahmad , fe , wq , kd , hd ', 87, 'Nadim');

-- --------------------------------------------------------

--
-- Table structure for table `parents`
--

CREATE TABLE IF NOT EXISTS `parents` (
`id` int(11) NOT NULL,
  `Name` text NOT NULL,
  `DOB` date NOT NULL,
  `Description` varchar(150) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Password` varchar(25) NOT NULL,
  `Photo` varchar(100) NOT NULL,
  `Video` varchar(150) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `parents`
--

INSERT INTO `parents` (`id`, `Name`, `DOB`, `Description`, `Email`, `Password`, `Photo`, `Video`) VALUES
(1, 'Abdul Qudoos', '1222-02-12', 'hi Everybody', '', '', 'thumb-1920-678365.jpg', ''),
(2, 'Ahsan', '2017-02-11', 'qwerty', '', '', 'Alienware_Reloaded_2_green_by_rg_promise.jpg', ''),
(3, 'Ahsan', '2017-02-11', 'qwerty', '', '', 'Alienware_Reloaded_2_green_by_rg_promise.jpg', ''),
(4, 'Ali', '2019-11-12', 'ffffffffffffff', '', '', 'alienware-1-768x480.jpg', ''),
(5, 'Ali', '2019-11-12', 'ffffffffffffff', '', '', 'alienware-1-768x480.jpg', ''),
(6, 'Abdul Qudoos', '2017-03-12', 'Hello THERE', '', '', '110-alienware-hd-wallpapers-backgrounds-wallpaper-abyss.jpg', ''),
(7, 'Abdul Qudoos', '1997-04-16', 'hi EveryBody', '', '', '2086b264b231b902a7f8e1bbdc688cf5.png', ''),
(8, 'Abdul Qudoos', '2000-12-19', 'i know everthing', '', '', 'thumb-1920-90127.jpg', ''),
(9, 'Abdul Qudoos', '2000-12-19', 'i know everthing', '', '', 'thumb-1920-90127.jpg', ''),
(10, 'Nadim', '1990-03-23', 'hi', 'hndmj@mail.com', '12345', '91b3f839043d3577849f43a21bfb498a.jpg', ''),
(11, 'Nadim', '2019-03-12', 'hiiiiiii', 'nad212@mail.com', '09876', 'thumb-1920-384710.jpg', 'WWW.DOWNVIDS.NET-How to install Ubuntu 16.04 in VMware Player (Virtual Machine).mp4'),
(12, 'arpita', '2019-11-12', 'fdsdf', 'flyer@gmail.com', '12345', 'cb1b75ddbfde4e8cdde980d06b5db037.png', '');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE IF NOT EXISTS `students` (
`id` int(11) NOT NULL,
  `Name` text NOT NULL,
  `DOB` date NOT NULL,
  `Email` varchar(25) NOT NULL,
  `Password` varchar(25) NOT NULL,
  `Picture` varchar(100) NOT NULL,
  `Video` varchar(100) NOT NULL,
  `Achievement` text NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `Name`, `DOB`, `Email`, `Password`, `Picture`, `Video`, `Achievement`) VALUES
(1, 'Abdul Qudoos', '0000-00-00', '', '', '110-alienware-hd-wallpapers-backgrounds-wallpaper-abyss.jpg', '', 'hi there'),
(2, 'Abdul Qudoos', '0000-00-00', '', '', 'Alienware_Reloaded_2_green_by_rg_promise.jpg', '', 'cdsdad'),
(3, 'Abdul Qudoos', '0000-00-00', '', '', 'Alienware_Reloaded_2_green_by_rg_promise.jpg', '', 'cdsdad'),
(4, 'Ahmad', '0000-00-00', '', '', 'alienware-14-660x330.jpg', '', 'hi Ahmad'),
(5, 'asnnmn', '0000-00-00', '', '', 'SCB-Wallpaper-Goggles-1024x768-FINAL.jpg', '', 'kiju'),
(6, 'asnnmn', '0000-00-00', '', '', 'SCB-Wallpaper-Goggles-1024x768-FINAL.jpg', '', 'kiju'),
(7, 'Wazii', '0000-00-00', '', '', 'thumb-1920-90132.jpg', '', 'xzxz'),
(8, 'Wazii', '0000-00-00', '', '', 'thumb-1920-90132.jpg', '', 'xzxz'),
(9, 'Ali', '0000-00-00', '', '', 'thumb-1920-519183.jpg', '', 'zadx'),
(10, 'xs', '0000-00-00', '', '', '61SnOfEXpuL._UX522_.jpg', '', 'sssssssssssss'),
(11, 'xs', '0000-00-00', '', '', '61SnOfEXpuL._UX522_.jpg', '', 'sssssssssssss'),
(12, 'Abdul Qudoos', '0000-00-00', '', '', 'Alienware_Reloaded_2_green_by_rg_promise.jpg', '', 'hdhhdhd'),
(13, 'helina', '2111-02-12', '', '', 'alienware-1-768x480.jpg', '', 'ddddd'),
(14, 'Nadim', '1992-03-24', 'nad@mail.com', '12345', '61SnOfEXpuL._UX522_.jpg', '', 'hi there'),
(15, 'Ahsan', '3123-02-12', 'sarfraz097@mail.com', '09876', '110-alienware-hd-wallpapers-backgrounds-wallpaper-abyss.jpg', 'WWW.DOWNVIDS.NET-How to install backtrack 5 r3 on Windows 7-8 using VMware workstation [HD   Narrati', 'ggggggggggggggggg');

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE IF NOT EXISTS `teacher` (
`id` int(10) NOT NULL,
  `Name` text NOT NULL,
  `DOB` date NOT NULL,
  `Description` text NOT NULL,
  `Degree` text NOT NULL,
  `Experience` int(11) NOT NULL,
  `Subject` text NOT NULL,
  `Photo` text NOT NULL,
  `Video` text NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Password` varchar(25) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`id`, `Name`, `DOB`, `Description`, `Degree`, `Experience`, `Subject`, `Photo`, `Video`, `Email`, `Password`) VALUES
(17, 'Sarfraz', '2000-02-12', 'xzzxxzxz', 'MBA', 3, '', 'thumb-1920-90127.jpg', 'WWW.DOWNVIDS.NET-How to install Ubuntu 16.04 in VMware Player (Virtual Machine).mp4', 'sarfraz097@mail.com', 'qwert'),
(18, 'Ahsan', '1999-01-01', 'hi Ali', 'BSEE', 4, '', 'alienware-23-768x480.jpg', 'WWW.DOWNVIDS.NET-How to install backtrack 5 r3 on Windows 7-8 using VMware workstation [HD   Narration].mp4', 'aq098@mail.com', '12345'),
(19, 'Afridi', '1999-01-21', 'hi AFRIDI', 'MBA', 7, '', 'thumb-1920-90132.jpg', 'WWW.DOWNVIDS.NET-BackTrack 5 Bootup startx problem fix (This Problem is fixed by the developers in the latest update).mp4', 'Afridi7@mail.com', '12345'),
(20, 'Shahid', '1980-02-11', 'HI Shahid', 'BS-Chem', 5, 'Submit', 'thumb-1920-384710.jpg', 'WWW.DOWNVIDS.NET-How to install backtrack 5 r3 on Windows 7-8 using VMware workstation [HD   Narration].mp4', 'shahid01@mail.com', 'qwert'),
(21, 'Abdul Qudoos', '2111-02-11', 'assasa', 'BSCS', 3, 'Submit	  ', 'thumb-1920-90125.jpg', 'WWW.DOWNVIDS.NET-Install Ubuntu Linux in a custom VMware Virtual Machine.mp4', 'aq12@mail.com', '12345'),
(22, 'Liu', '1993-04-01', 'Teacher', 'C', 3, 'Data strcuture	  ', '1566361496823.JPEG', '', 'yangliu8321@gmail.com', '12312');

-- --------------------------------------------------------

--
-- Table structure for table `video`
--

CREATE TABLE IF NOT EXISTS `video` (
`id` int(11) NOT NULL,
  `video` varchar(100) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `video`
--

INSERT INTO `video` (`id`, `video`) VALUES
(1, 'WWW.DOWNVIDS.NET-BackTrack 5 Bootup startx problem fix (This Problem is fixed by the developers in t'),
(2, 'WWW.DOWNVIDS.NET-How to install backtrack 5 r3 on Windows 7-8 using VMware workstation [HD   Narrati');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `discussion`
--
ALTER TABLE `discussion`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `parent's children names`
--
ALTER TABLE `parent's children names`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `parents`
--
ALTER TABLE `parents`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `video`
--
ALTER TABLE `video`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `discussion`
--
ALTER TABLE `discussion`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `parent's children names`
--
ALTER TABLE `parent's children names`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `parents`
--
ALTER TABLE `parents`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `teacher`
--
ALTER TABLE `teacher`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `video`
--
ALTER TABLE `video`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
