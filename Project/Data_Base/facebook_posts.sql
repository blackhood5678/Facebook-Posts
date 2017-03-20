-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 
-- Версия на сървъра: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `facebook_posts`
--

-- --------------------------------------------------------

--
-- Структура на таблица `comments`
--

CREATE TABLE `comments` (
  `comments_id` int(11) NOT NULL,
  `name` int(11) NOT NULL,
  `comments` text NOT NULL,
  `date_deleted` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура на таблица `posts`
--

CREATE TABLE `posts` (
  `post_id` int(11) NOT NULL,
  `img` varchar(250) DEFAULT NULL,
  `text` text,
  `uname` varchar(250) NOT NULL,
  `upload_date` date NOT NULL,
  `date_deleted` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Схема на данните от таблица `posts`
--

INSERT INTO `posts` (`post_id`, `img`, `text`, `uname`, `upload_date`, `date_deleted`) VALUES
(54, 'fake.png', '', 'yanyyanev@abv.bg', '2017-03-19', NULL),
(55, 'fake.png', '', 'yanyyanev@abv.bg', '2017-03-19', NULL),
(56, 'fake.png', '', 'yanyyanev@abv.bg', '2017-03-19', NULL),
(57, 'avatar.jpg', '', 'yanyyanev@abv.bg', '2017-03-19', NULL),
(58, 'fake.png', '', 'yanyyanev@abv.bg', '2017-03-19', NULL),
(59, 'fake.png', '', 'yanyyanev@abv.bg', '2017-03-19', NULL),
(60, 'fake.png', '', 'yanyyanev@abv.bg', '2017-03-19', NULL),
(61, 'fake.png', '', 'yanyyanev@abv.bg', '2017-03-19', NULL),
(62, 'fake.png', '', 'yanyyanev@abv.bg', '2017-03-19', NULL);

-- --------------------------------------------------------

--
-- Структура на таблица `registers`
--

CREATE TABLE `registers` (
  `id_register` int(11) NOT NULL,
  `uname` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `password` int(11) NOT NULL,
  `phone` int(11) NOT NULL,
  `date_deleted` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Схема на данните от таблица `registers`
--

INSERT INTO `registers` (`id_register`, `uname`, `email`, `password`, `phone`, `date_deleted`) VALUES
(12, 'yanyyanev@abv.bg', 'yanyyanev@abv.bg', 123456789, 88700128, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`comments_id`),
  ADD KEY `name` (`name`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `registers`
--
ALTER TABLE `registers`
  ADD PRIMARY KEY (`id_register`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `comments_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;
--
-- AUTO_INCREMENT for table `registers`
--
ALTER TABLE `registers`
  MODIFY `id_register` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
