-- phpMyAdmin SQL Dump
-- version 4.5.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 07, 2017 at 10:24 PM
-- Server version: 5.7.11
-- PHP Version: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `t3week4_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `book_tb`
--

CREATE TABLE `book_tb` (
  `id` int(11) NOT NULL,
  `date` varchar(30) NOT NULL,
  `title` varchar(100) NOT NULL,
  `discription` varchar(500) NOT NULL,
  `detail` text NOT NULL,
  `img_path` varchar(500) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `book_tb`
--

INSERT INTO `book_tb` (`id`, `date`, `title`, `discription`, `detail`, `img_path`) VALUES
(22, 'lorem ipsum', 'lorem ipsum', 'lorem ipsum', 'lorem ipsum', 'img/book/book-list.jpg'),
(23, 'lorem ipsum', 'lorem ipsum', 'lorem ipsum', 'lorem ipsum', 'img/book/book-list.jpg'),
(19, 'lorem ipsum', 'lorem ipsum', 'lorem ipsum', 'lorem ipsum', 'img/book/book-list.jpg'),
(20, 'lorem ipsum', 'lorem ipsum', 'lorem ipsum', 'lorem ipsum', 'img/book/book-list.jpg'),
(21, 'lorem ipsum', 'lorem ipsum', 'lorem ipsum', 'lorem ipsum', 'img/book/book-list.jpg'),
(24, 'lorem ipsum', 'lorem ipsum', 'lorem ipsum', 'lorem ipsum', 'img/book/book-list.jpg'),
(17, 'lorem ipsum', 'lorem ipsum', 'lorem ipsum', 'lorem ipsum', 'img/book/book-list.jpg'),
(18, 'lorem ipsum', 'lorem ipsum', 'lorem ipsum', 'lorem ipsum', 'img/book/book-list.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `t3week4_tb`
--

CREATE TABLE `t3week4_tb` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t3week4_tb`
--

INSERT INTO `t3week4_tb` (`id`, `name`, `password`) VALUES
(1, 'admin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `book_tb`
--
ALTER TABLE `book_tb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t3week4_tb`
--
ALTER TABLE `t3week4_tb`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `book_tb`
--
ALTER TABLE `book_tb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `t3week4_tb`
--
ALTER TABLE `t3week4_tb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
