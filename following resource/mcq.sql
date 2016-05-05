-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 26, 2016 at 01:17 PM
-- Server version: 5.5.47-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `mcq`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_ask_question`
--

CREATE TABLE IF NOT EXISTS `tbl_ask_question` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `question_title` text NOT NULL,
  `question` text NOT NULL,
  `name` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `creator_user_id` int(4) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tbl_ask_question`
--

INSERT INTO `tbl_ask_question` (`id`, `question_title`, `question`, `name`, `email`, `date`, `creator_user_id`, `status`) VALUES
(1, '', 'Inventore, aliquam sequi nisi velit magnam accusamus reprehenderit nemo necessitatibus doloribus molestiae fugit repellat repudiandae dolor. Incidunt, nulla quidem illo suscipit nihil!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magni, dolorem, fugiat, commodi totam accusantium illo incidunt quis eius eum iure et fugit voluptas atque ratione nobis sed omnis quod ipsa.\r\n', 'Tasfir Hossain Suman', 'tasfirsuman@gmail.com', '2016-04-21 13:26:32', 0, 1),
(2, 'This is Question Titile', 'Vivamus mattis nibh vitae dui egestas posuere. Maecenas a est at enim blandit interdum. Cras eget ipsum ac nunc tristique tincidunt sit amet nec quam. Vivamus sed suscipit enim, et dignissim tellus.Vivamus mattis nibh vitae dui egestas posuere. Maecenas a est at enim blandit interdum. Cras eget ipsum ac nunc tristique tincidunt sit amet nec quam. Vivamus sed suscipit enim, et dignissim tellus.								\r\n\r\n							', 'Hasinuzzaman', 'centuryaviation@yahoo.com', '2016-04-21 13:40:12', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category`
--

CREATE TABLE IF NOT EXISTS `tbl_category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(150) NOT NULL,
  `serial` int(3) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `category_image` varchar(255) NOT NULL,
  `creator_name` int(4) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `tbl_category`
--

INSERT INTO `tbl_category` (`id`, `name`, `serial`, `date`, `category_image`, `creator_name`, `status`) VALUES
(1, 'BCS', 1, '2016-04-21 10:55:05', '', 0, 1),
(2, 'IBA', 2, '2016-04-21 10:55:35', '', 0, 1),
(3, 'BBA', 3, '2016-04-21 10:55:45', '', 0, 1),
(4, 'Bank', 4, '2016-04-21 10:55:56', '', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_menu`
--

CREATE TABLE IF NOT EXISTS `tbl_menu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(150) NOT NULL,
  `serial` int(3) NOT NULL,
  `category_id` int(4) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  KEY `category_id` (`category_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tbl_menu`
--

INSERT INTO `tbl_menu` (`id`, `name`, `serial`, `category_id`, `date`, `status`) VALUES
(1, 'Accounting', 1, 1, '2016-04-24 09:03:09', 1),
(2, 'English Model Test', 2, 1, '2016-04-21 13:56:00', 1),
(3, 'Accounting', 1, 3, '2016-04-24 09:07:04', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_option`
--

CREATE TABLE IF NOT EXISTS `tbl_option` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `option_name` varchar(255) NOT NULL,
  `ans` tinyint(1) NOT NULL,
  `question_id` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=26 ;

--
-- Dumping data for table `tbl_option`
--

INSERT INTO `tbl_option` (`id`, `option_name`, `ans`, `question_id`, `status`) VALUES
(2, 'dfsdfs', 0, 2, 1),
(3, 'dfsdfs', 0, 2, 1),
(4, 'dfsdfs', 0, 2, 1),
(5, 'dfsdfs', 0, 2, 1),
(6, 'dfsdfs', 0, 3, 1),
(7, '33333', 0, 3, 1),
(8, 'weee', 0, 3, 1),
(9, 'sdfsdfdf', 0, 3, 1),
(10, 'sdsadsds', 0, 4, 1),
(11, 'dfghjjk', 0, 4, 1),
(12, 'lfsds', 0, 4, 1),
(13, 'erererer', 0, 4, 1),
(14, 'dfsdfs', 0, 5, 1),
(15, 'sdsadsds', 0, 5, 1),
(16, 'dfsdfs', 1, 5, 1),
(17, 'sdsadsds', 0, 5, 1),
(18, '1111111111111111', 0, 6, 1),
(19, '22222222222222222222', 1, 6, 1),
(20, '33333333333333333333', 0, 6, 1),
(21, '444444444444444', 0, 6, 1),
(22, 'dfcgcvc', 0, 7, 1),
(23, 'gffgfgfg', 0, 7, 1),
(24, 'nbmbnmnbm', 0, 7, 1),
(25, 'nmnmnm', 1, 7, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_question`
--

CREATE TABLE IF NOT EXISTS `tbl_question` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `question` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `creator_id` int(4) NOT NULL,
  `category_id` int(4) NOT NULL,
  `menu_id` int(4) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  KEY `creator_id` (`creator_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `tbl_question`
--

INSERT INTO `tbl_question` (`id`, `question`, `date`, `creator_id`, `category_id`, `menu_id`, `status`) VALUES
(2, 'giashuddin', '2016-04-20 16:10:35', 0, 1, 1, 1),
(3, 'dfdfddff', '2016-04-20 16:11:23', 0, 1, 1, 1),
(4, 'Hasinuzzaman', '2016-04-20 16:35:50', 0, 1, 1, 1),
(5, 'giashuddin', '2016-04-20 16:37:48', 0, 1, 1, 1),
(6, 'dfdfsdfsafdsfaddddddddddddddddddd', '2016-04-20 16:38:34', 0, 1, 1, 1),
(7, 'Vivamus mattis nibh vitae dui egestas posuere. Maecenas', '2016-04-21 13:57:24', 0, 1, 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `first_name` varchar(150) NOT NULL,
  `last_name` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `password` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `first_name`, `last_name`, `email`, `password`, `date`, `status`) VALUES
(1, 'admin', 'Tasfir Hossain', 'Suman', 'tasfirsuman@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '2016-04-20 12:59:57', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
