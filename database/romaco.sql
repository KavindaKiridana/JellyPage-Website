-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 25, 2023 at 06:28 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";
/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */
;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */
;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */
;
/*!40101 SET NAMES utf8mb4 */
;
--
-- Database: `romaco`
--

-- --------------------------------------------------------
--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `comments` text NOT NULL,
  `time` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `is_read` tinyint(1) NOT NULL
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4;
--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (
    `id`,
    `name`,
    `email`,
    `subject`,
    `comments`,
    `time`,
    `is_read`
  )
VALUES (
    1,
    'kavindaya',
    'kavindakiridna@gmail.com',
    'ssssssssssss',
    '2esdd',
    '2023-03-04 06:56:30',
    0
  ),
  (
    7,
    'kavindaya',
    'hjyu@gmai.com',
    'about the project',
    '2esdd  s sswww www ',
    '2023-03-04 19:16:12',
    0
  ),
  (
    8,
    'iiii',
    'kavindakidena@gmail.com',
    'sssssssss 44 ttty',
    '2es hhhhhhhhh s ss   www ',
    '2023-03-04 19:16:37',
    0
  ),
  (
    9,
    'iiii',
    'kavindakirida@gmail.com',
    'ssssssssssss',
    '2esdd  s sswww ',
    '2023-03-04 19:16:53',
    0
  ),
  (
    13,
    'yahoo',
    'kavindakiridena@gmail.com',
    'yaluuu',
    '2esdd',
    '2023-03-05 14:29:41',
    0
  ),
  (
    16,
    'kavindaya',
    'kavinda@gmail.com',
    'password',
    '1Aa',
    '2023-03-25 10:53:52',
    0
  ),
  (
    17,
    'kavindaya',
    'kavindak@gmail.com',
    '1Aa      this is the password',
    '1Aa',
    '2023-03-25 10:54:55',
    0
  );
-- --------------------------------------------------------
--
-- Table structure for table `deleting`
--

CREATE TABLE `deleting` (`id` int(11) NOT NULL) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4;
--
-- Dumping data for table `deleting`
--

INSERT INTO `deleting` (`id`)
VALUES (17),
  (17);
-- --------------------------------------------------------
--
-- Table structure for table `pin`
--

CREATE TABLE `pin` (
  `id` int(11) NOT NULL,
  `pin_number` varchar(255) NOT NULL
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4;
--
-- Dumping data for table `pin`
--
--i copied all from now on 
--
INSERT INTO `pin` (`id`, `pin_number`)
VALUES (
    2,
    '$2y$10$iqnYeMu9eZ8Yk9.KMpeZBuV6mEYfEDBX/xqZkq7FY/Mp5w156plva'
  );
--
-- Indexes for dumped tables
--

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
ADD PRIMARY KEY (`id`);
--
-- Indexes for table `pin`
--
ALTER TABLE `pin`
ADD PRIMARY KEY (`id`);
--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,
  AUTO_INCREMENT = 18;
--
-- AUTO_INCREMENT for table `pin`
--
ALTER TABLE `pin`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,
  AUTO_INCREMENT = 8;
COMMIT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */
;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */
;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */
;