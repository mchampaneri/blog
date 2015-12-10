-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 25, 2015 at 02:30 PM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `simple_blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `catagory`
--

CREATE TABLE IF NOT EXISTS `catagory` (
  `id` int(8) NOT NULL,
  `name` varchar(20) NOT NULL,
  `slug` varchar(20) NOT NULL,
  `crate_at` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `catagory`
--

INSERT INTO `catagory` (`id`, `name`, `slug`, `crate_at`) VALUES
(14, 'GAMES', 'games', '2015-07-24 16:56:22'),
(15, 'MOVIES', 'movies', '2015-07-24 18:26:22'),
(16, 'TECHNOLOGY', 'tech_things', '2015-07-24 18:26:40');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE IF NOT EXISTS `posts` (
  `id` int(11) NOT NULL,
  `name` varchar(260) NOT NULL,
  `slug` varchar(260) NOT NULL,
  `discription` text NOT NULL,
  `create_at` varchar(20) NOT NULL,
  `catagory_id` int(11) NOT NULL,
  `image` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `name`, `slug`, `discription`, `create_at`, `catagory_id`, `image`) VALUES
(30, 'GTA', 'VICECITY', '<p>ROCK STAR NORTH PRODUCT</p><p>AN EXTEREM GAME</p><p>&nbsp;</p><p>&nbsp;</p>', '2015-07-22 19:28:33', 14, ''),
(31, 'JURASICC', 'JurassicParkWorld', '<p>A steven <strong>spillburg movie</strong>........:</p><ul><li>jp1</li><li>jp2</li><li>jp3</li></ul><p>jp world</p><p>&nbsp;</p><p>&nbsp;</p>', '2015-07-22 19:46:58', 15, ''),
(32, 'ironman', 'IRONMAN3', '<p>A marvel super hero movie</p>', '2015-07-23 18:10:55', 15, ''),
(33, 'DHAMAL', 'DHAMAL', '<p>A BLOCK-BUSTER MOVIE</p>', '2015-07-23 18:21:36', 15, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `catagory`
--
ALTER TABLE `catagory`
  ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `slug` (`slug`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`) COMMENT 'post_id';

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `catagory`
--
ALTER TABLE `catagory`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=35;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
