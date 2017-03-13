-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 13 март 2017 в 19:39
-- Версия на сървъра: 10.1.19-MariaDB
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `register`
--

-- --------------------------------------------------------

--
-- Структура на таблица `email`
--

CREATE TABLE `email` (
  `id_email` int(11) NOT NULL,
  `email` varchar(250) NOT NULL,
  `date_deleted` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура на таблица `first_name`
--

CREATE TABLE `first_name` (
  `id_first` int(11) NOT NULL,
  `first_name` varchar(250) NOT NULL,
  `date_deleted` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура на таблица `last_name`
--

CREATE TABLE `last_name` (
  `id_last` int(11) NOT NULL,
  `last_name` varchar(250) NOT NULL,
  `date_deleted` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура на таблица `password`
--

CREATE TABLE `password` (
  `id_password` int(11) NOT NULL,
  `password` int(11) NOT NULL,
  `first_name_id` int(11) NOT NULL,
  `last_name_id` int(11) NOT NULL,
  `email_id` int(11) NOT NULL,
  `date_deleted` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `email`
--
ALTER TABLE `email`
  ADD PRIMARY KEY (`id_email`);

--
-- Indexes for table `first_name`
--
ALTER TABLE `first_name`
  ADD PRIMARY KEY (`id_first`);

--
-- Indexes for table `last_name`
--
ALTER TABLE `last_name`
  ADD PRIMARY KEY (`id_last`);

--
-- Indexes for table `password`
--
ALTER TABLE `password`
  ADD PRIMARY KEY (`id_password`),
  ADD KEY `first_name_id` (`first_name_id`),
  ADD KEY `last_name_id` (`last_name_id`),
  ADD KEY `email_id` (`email_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `email`
--
ALTER TABLE `email`
  MODIFY `id_email` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `first_name`
--
ALTER TABLE `first_name`
  MODIFY `id_first` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `last_name`
--
ALTER TABLE `last_name`
  MODIFY `id_last` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `password`
--
ALTER TABLE `password`
  MODIFY `id_password` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- Ограничения за дъмпнати таблици
--

--
-- Ограничения за таблица `password`
--
ALTER TABLE `password`
  ADD CONSTRAINT `email` FOREIGN KEY (`email_id`) REFERENCES `email` (`id_email`),
  ADD CONSTRAINT `fname` FOREIGN KEY (`first_name_id`) REFERENCES `first_name` (`id_first`),
  ADD CONSTRAINT `lname` FOREIGN KEY (`last_name_id`) REFERENCES `last_name` (`id_last`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
