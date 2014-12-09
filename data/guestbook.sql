-- phpMyAdmin SQL Dump
-- version 3.4.11.1deb2+deb7u1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 09, 2014 at 06:23 AM
-- Server version: 5.5.40
-- PHP Version: 5.4.35-0+deb7u2

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `e0901022_guestbook`
--

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE IF NOT EXISTS `post` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `guest_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `date` datetime NOT NULL,
  `subject` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `review` longtext COLLATE utf8_unicode_ci NOT NULL,
  `rating` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=42 ;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `guest_name`, `date`, `subject`, `review`, `rating`, `image`) VALUES
(1, 'Judy Forster', '2013-09-11 04:18:25', 'Just post for testing!', 'The default Bootstrap', '1', 'download (1).jpeg'),
(2, 'LIN', '2013-09-17 07:24:29', 'This guestbook looks well, but still needs improvement', 'Donec id elit non mi porta', '3', 'download (2).jpeg'),
(3, 'Michael Jackson', '1999-09-04 22:42:06', 'subject1', 'This is a test post!', '1', 'download (3).jpeg'),
(4, 'Michael Jackson', '1999-09-05 00:18:11', 'subject1', 'This is a test post!', '5', 'download (4).jpeg'),
(5, 'Michael Jackson', '1999-09-05 00:19:05', 'subject1', 'This is a test post!', '1', 'download (5).jpeg'),
(6, 'Michael Jackson', '1999-09-05 00:19:20', 'subject1', 'This is a test post!', '1', 'download (6).jpeg'),
(7, 'Michael Jackson', '1999-09-05 00:20:07', 'subject1', 'This is a test post!', '2', 'download (7).jpeg'),
(8, '123', '2013-09-07 00:14:40', '123', '123', '1', 'download (8).jpeg'),
(9, 'Woody', '2013-09-21 07:06:17', 'Woody ''s here! welcome', 'con-glass icon-music icon-search icon-', '5', 'download (4).jpeg'),
(10, 'Mengdi Pe', '2013-09-21 10:52:43', 'Now Mengdi testing!', 'Hi, lets go test it again!', '2', 'IMGP1600.jpg'),
(12, 'Permission tester', '2013-09-22 03:22:03', 'test the modified permission', 'test if the permission of the uploaded file has beed modified!', '5', '7861063_171056948000_2.jpg'),
(13, 'same image tester', '2013-09-22 03:32:31', 'upload the same image', 'test what happen if the same image uploaded', '2', 'download (1).jpeg');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
