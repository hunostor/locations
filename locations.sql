-- phpMyAdmin SQL Dump
-- version 4.5.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 12, 2016 at 08:42 AM
-- Server version: 5.7.11
-- PHP Version: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `locations`
--

-- --------------------------------------------------------

--
-- Table structure for table `locations`
--

CREATE TABLE `locations` (
  `id` int(11) UNSIGNED NOT NULL,
  `address` varchar(128) NOT NULL DEFAULT '',
  `lat` double NOT NULL,
  `lng` double NOT NULL,
  `telephone` varchar(20) NOT NULL DEFAULT '',
  `email` varchar(96) NOT NULL DEFAULT '',
  `website` varchar(64) NOT NULL DEFAULT '',
  `name` varchar(96) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `locations`
--

INSERT INTO `locations` (`id`, `address`, `lat`, `lng`, `telephone`, `email`, `website`, `name`) VALUES
(1, 'Budapest, Kossuth Lajos tér 1-3, 1055', 47.507222, 19.046252, '+36 1 441 40 00', 'ktk@parlament.hu', 'http://www.parlament.hu/', 'Országgyűlés'),
(2, 'Budapest, Múzeum krt. 14-16, 1088', 47.49112, 19.063048, '+36 1 327 77 00', 'info@hnm.hu', 'http://mnm.hu/', 'Nemzeti Múzeum'),
(3, 'Budapest, Andrássy út 22, 1061', 47.502684, 19.058254, '+36 1 814 7100', 'info@opera.hu', 'http://opera.hu', 'Magyar Állami Operaház'),
(4, 'Budapest, Kelenhegyi út 4, 1118', 47.483693, 19.052289, '+36 1 466 6166', 'gellert@spabudapest.hu', 'http://gellertfurdo.hu', 'Gellért Gyógyfürdő'),
(5, 'Budapest, Szent György tér 2, 1014 Hungary', 47.496207, 19.0391998, '+36 1 458 3000', 'ugyfelszolgalat@budavar.hu', 'http://budavar.hu', 'Budai Királyi Vár');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) UNSIGNED NOT NULL,
  `email` varchar(128) CHARACTER SET utf8 NOT NULL,
  `password` varchar(40) CHARACTER SET utf8 NOT NULL,
  `create` datetime NOT NULL,
  `user_status` enum('active','disabled') CHARACTER SET utf8 NOT NULL DEFAULT 'active'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `locations`
--
ALTER TABLE `locations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `locations`
--
ALTER TABLE `locations`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
