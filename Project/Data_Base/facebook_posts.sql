-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 19 март 2017 в 12:12
-- Версия на сървъра: 10.1.19-MariaDB
-- PHP Version: 7.0.13

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
-- Структура на таблица `img`
--

CREATE TABLE `img` (
  `id_img` int(11) NOT NULL,
  `img_path` varchar(250) NOT NULL,
  `date_deleted` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Схема на данните от таблица `img`
--

INSERT INTO `img` (`id_img`, `img_path`, `date_deleted`) VALUES
(1, 'wasd', NULL);

-- --------------------------------------------------------

--
-- Структура на таблица `posts`
--

CREATE TABLE `posts` (
  `post_id` int(11) NOT NULL,
  `img_id` int(11) NOT NULL,
  `text_id` int(11) NOT NULL,
  `uname` varchar(250) NOT NULL,
  `upload_date` date NOT NULL,
  `date_deleted` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Схема на данните от таблица `posts`
--

INSERT INTO `posts` (`post_id`, `img_id`, `text_id`, `uname`, `upload_date`, `date_deleted`) VALUES
(29, 1, 1, 'dadwdwa', '2017-03-01', NULL);

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

-- --------------------------------------------------------

--
-- Структура на таблица `text`
--

CREATE TABLE `text` (
  `id_text` int(11) NOT NULL,
  `post_cont` varchar(250) NOT NULL,
  `date_deleted` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Схема на данните от таблица `text`
--

INSERT INTO `text` (`id_text`, `post_cont`, `date_deleted`) VALUES
(1, 'adasdasdad', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `img`
--
ALTER TABLE `img`
  ADD PRIMARY KEY (`id_img`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`post_id`),
  ADD KEY `img_id` (`img_id`),
  ADD KEY `text_id` (`text_id`);

--
-- Indexes for table `registers`
--
ALTER TABLE `registers`
  ADD PRIMARY KEY (`id_register`);

--
-- Indexes for table `text`
--
ALTER TABLE `text`
  ADD PRIMARY KEY (`id_text`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `img`
--
ALTER TABLE `img`
  MODIFY `id_img` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
--
-- AUTO_INCREMENT for table `registers`
--
ALTER TABLE `registers`
  MODIFY `id_register` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `text`
--
ALTER TABLE `text`
  MODIFY `id_text` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Ограничения за дъмпнати таблици
--

--
-- Ограничения за таблица `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `img_relation` FOREIGN KEY (`img_id`) REFERENCES `img` (`id_img`),
  ADD CONSTRAINT `text_relation` FOREIGN KEY (`text_id`) REFERENCES `text` (`id_text`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
