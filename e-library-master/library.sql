-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 23, 2019 at 11:36 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `library`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `book-num` int(11) NOT NULL,
  `author-name` varchar(50) NOT NULL,
  `pdf-file` varchar(255) NOT NULL,
  `cat` varchar(100) NOT NULL,
  `cat1` varchar(50) NOT NULL,
  `cat2` varchar(50) NOT NULL,
  `cat3` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `name`, `book-num`, `author-name`, `pdf-file`, `cat`, `cat1`, `cat2`, `cat3`) VALUES
(33, 'unstopable', 6, 'mark', '.lecture2.pdf.', '', '', '', ''),
(35, 'chp3', 100, 'sherif el kholy', '.Chapter 3 A.pdf.', '', '', '', ''),
(36, 'mohamed', 12, 'ail', '.lecture2.pdf.', '', '', '', ''),
(37, 'ss', 5, 'mohamed', '.Chapter 2 A.pdf.', '', '', '', ''),
(38, 'qq', 122, 'hggjhknk', '.Chapter 2 A.pdf.', '', '', '', ''),
(39, 'ahmed', 122, 'yfyugihih', '.lecture2.pdf.', '', '', '', ''),
(40, 'basem', 6, 'amjoooood', '.Chapter 2 A.pdf.', '', '', '', ''),
(41, 'عفاريت السيالة', 123, 'بيسو الجمل', '..', '', '', '', ''),
(48, 'عفاريت السيالة', 612, 'بيسو الجمل', '..', '1', '0', '3', '0');

-- --------------------------------------------------------

--
-- Table structure for table `borrow`
--

CREATE TABLE `borrow` (
  `id` int(11) NOT NULL,
  `book` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `cardnum` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `borrow`
--

INSERT INTO `borrow` (`id`, `book`, `date`, `name`, `cardnum`) VALUES
(1, 'unstopable', '2019-04-16', 'basem', 10),
(3, 'basem', '2019-04-26', '224', 454),
(14, 'عفاريت السيالة', '2019-04-30', 'باسم الجمل', 13);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `cat_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cat_id`, `name`) VALUES
(1, 'علوم حاسب'),
(2, 'محاسبة'),
(3, 'نظم ادارية');

-- --------------------------------------------------------

--
-- Table structure for table `category1`
--

CREATE TABLE `category1` (
  `cat1_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `category1`
--

INSERT INTO `category1` (`cat1_id`, `name`) VALUES
(0, ''),
(2, 'محاسبة تكاليف'),
(3, 'محاسبة مالية'),
(4, 'محاسبة ضريبية'),
(5, 'محاسبة ادارية');

-- --------------------------------------------------------

--
-- Table structure for table `category2`
--

CREATE TABLE `category2` (
  `cat2_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `category2`
--

INSERT INTO `category2` (`cat2_id`, `name`) VALUES
(0, ''),
(2, 'موارد بشرية'),
(3, 'مالية'),
(4, 'سلوك تنظيمى'),
(5, 'ادارة عامة');

-- --------------------------------------------------------

--
-- Table structure for table `category3`
--

CREATE TABLE `category3` (
  `cat3_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `category3`
--

INSERT INTO `category3` (`cat3_id`, `name`) VALUES
(0, ''),
(2, 'ذكاء اصطناعى'),
(3, 'قواعد بيانات'),
(4, 'برمجة'),
(6, 'مقدمة حاسب');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'basem', '123456'),
(2, 'ahmed', '123456');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cat3` (`cat3`);

--
-- Indexes for table `borrow`
--
ALTER TABLE `borrow`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `category1`
--
ALTER TABLE `category1`
  ADD PRIMARY KEY (`cat1_id`);

--
-- Indexes for table `category2`
--
ALTER TABLE `category2`
  ADD PRIMARY KEY (`cat2_id`);

--
-- Indexes for table `category3`
--
ALTER TABLE `category3`
  ADD PRIMARY KEY (`cat3_id`),
  ADD KEY `cat3_id` (`cat3_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `borrow`
--
ALTER TABLE `borrow`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `category1`
--
ALTER TABLE `category1`
  MODIFY `cat1_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `category2`
--
ALTER TABLE `category2`
  MODIFY `cat2_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `category3`
--
ALTER TABLE `category3`
  MODIFY `cat3_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
