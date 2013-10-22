-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 22, 2013 at 09:38 AM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `arunkumar`
--

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE IF NOT EXISTS `feedback` (
  `id` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `user` varchar(50) NOT NULL,
  `feed` text NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `user`, `feed`, `time`) VALUES
(1, '110112008', 'Service is Excellent', '2013-08-23 08:05:23'),
(2, 'user1', 'Service is Good. Feeling relief.', '2013-10-12 16:52:58'),
(3, 'user1', 'Service is Good. I am happy.', '2013-10-16 17:27:12'),
(4, 'arun', 'Service is Poor. love u....', '2013-10-21 17:40:57'),
(5, 'arun', 'Service is Excellent', '2013-10-21 18:39:23');

-- --------------------------------------------------------

--
-- Table structure for table `registrations`
--

CREATE TABLE IF NOT EXISTS `registrations` (
  `rollno` varchar(15) NOT NULL,
  `name` varchar(50) NOT NULL,
  `department` varchar(50) NOT NULL,
  `company` varchar(50) NOT NULL,
  `color` varchar(50) NOT NULL,
  `model` varchar(50) NOT NULL,
  `regno` varchar(25) NOT NULL,
  `cyclekey` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registrations`
--

INSERT INTO `registrations` (`rollno`, `name`, `department`, `company`, `color`, `model`, `regno`, `cyclekey`) VALUES
('arun', 'vikas meghwani', 'Civil Engineering', 'ffgregrg', 'red', 'xds', 'REG14271', 'K07820');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `role` tinyint(1) unsigned NOT NULL DEFAULT '1',
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `password`, `role`) VALUES
('205112011', '11749eb9160710bdaae4a2edc065283d51ddcea6', 1),
('205112013', '7a020c9387e4f489f203c0b0b68bf6a44674c3df', 1),
('arun', '9265c009aab3b8bbc91c4decd2db1a660c64ec70', 1),
('sangeetas', 'ec79fd84a1b297896abc0d90e39ff7d296d1b5d2', 2),
('security', '8eec7bc461808e0b8a28783d0bec1a3a22eb0821', 2),
('user1', 'b3daa77b4c04a9551b8781d03191fe098f325e67', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
