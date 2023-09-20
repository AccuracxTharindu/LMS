-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 27, 2023 at 11:15 AM
-- Server version: 10.1.48-MariaDB
-- PHP Version: 8.1.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `apollolk_lms`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `middlename` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `confirm_password` varchar(100) NOT NULL,
  `admin_image` varchar(100) NOT NULL,
  `admin_type` varchar(100) NOT NULL,
  `admin_added` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `firstname`, `middlename`, `lastname`, `username`, `password`, `confirm_password`, `admin_image`, `admin_type`, `admin_added`) VALUES
(4, 'Tharindu', 'Dilan', 'Rathnayake', 'tharindu404', '1234', '1234', 'IMG_0019.JPG', 'Admin', '2023-06-27 10:05:09'),
(5, 'Admin', 'test', 'admin', 'admin', 'admin1234', 'admin1234', 'logo.png', 'Admin', '2023-06-27 11:03:48');

-- --------------------------------------------------------

--
-- Table structure for table `allowed_book`
--

CREATE TABLE `allowed_book` (
  `allowed_book_id` int(11) NOT NULL,
  `qntty_books` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `allowed_book`
--

INSERT INTO `allowed_book` (`allowed_book_id`, `qntty_books`) VALUES
(1, 3);

-- --------------------------------------------------------

--
-- Table structure for table `allowed_days`
--

CREATE TABLE `allowed_days` (
  `allowed_days_id` int(11) NOT NULL,
  `no_of_days` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `allowed_days`
--

INSERT INTO `allowed_days` (`allowed_days_id`, `no_of_days`) VALUES
(1, 3);

-- --------------------------------------------------------

--
-- Table structure for table `barcode`
--

CREATE TABLE `barcode` (
  `barcode_id` int(11) NOT NULL,
  `pre_barcode` varchar(100) NOT NULL,
  `mid_barcode` int(100) NOT NULL,
  `suf_barcode` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `barcode`
--

INSERT INTO `barcode` (`barcode_id`, `pre_barcode`, `mid_barcode`, `suf_barcode`) VALUES
(1, 'APLG', 9000, 'LMS'),
(2, 'APLG', 9001, 'LMS'),
(3, 'APLG', 9002, 'LMS'),
(4, 'APLG', 9003, 'LMS'),
(5, 'APLG', 9004, 'LMS'),
(6, 'APLG', 9005, 'LMS'),
(7, 'APLG', 9006, 'LMS'),
(8, 'APLG', 9007, 'LMS'),
(9, 'APLG', 9008, 'LMS'),
(10, 'APLG', 9009, 'LMS'),
(11, 'APLG', 9010, 'LMS'),
(12, 'APLG', 9011, 'LMS'),
(13, 'APLG', 9012, 'LMS'),
(14, 'APLG', 9013, 'LMS'),
(15, 'APLG', 9014, 'LMS'),
(16, 'APLG', 9015, 'LMS'),
(17, 'APLG', 9016, 'LMS'),
(18, 'APLG', 9017, 'LMS'),
(19, 'APLG', 9018, 'LMS'),
(20, 'APLG', 9019, 'LMS'),
(21, 'APLG', 9020, 'LMS'),
(22, 'APLG', 9021, 'LMS'),
(23, 'APLG', 9022, 'LMS'),
(24, 'APLG', 9023, 'LMS'),
(25, 'APLG', 9024, 'LMS'),
(26, 'APLG', 9025, 'LMS');

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `book_id` int(11) NOT NULL,
  `book_title` text CHARACTER SET utf8 COLLATE utf8_sinhala_ci,
  `category_id` int(50) DEFAULT NULL,
  `author` text CHARACTER SET utf8 COLLATE utf8_sinhala_ci,
  `author_2` text CHARACTER SET utf8 COLLATE utf8_sinhala_ci,
  `author_3` text CHARACTER SET utf8 COLLATE utf8_sinhala_ci,
  `author_4` text CHARACTER SET utf8 COLLATE utf8_sinhala_ci,
  `author_5` text CHARACTER SET utf8 COLLATE utf8_sinhala_ci,
  `book_copies` int(11) DEFAULT NULL,
  `book_pub` text CHARACTER SET utf8 COLLATE utf8_sinhala_ci,
  `publisher_name` text CHARACTER SET utf8 COLLATE utf8_sinhala_ci,
  `isbn` text,
  `copyright_year` int(11) DEFAULT NULL,
  `status` varchar(30) DEFAULT NULL,
  `book_barcode` text,
  `book_image` text,
  `date_added` datetime DEFAULT NULL,
  `remarks` text CHARACTER SET utf8 COLLATE utf8_sinhala_ci,
  `Accession_No` int(10) DEFAULT '0',
  `Edition` varchar(10) DEFAULT '0',
  `Source` text CHARACTER SET utf8 COLLATE utf8_sinhala_ci,
  `Pages` int(10) DEFAULT '0',
  `Price` int(10) DEFAULT '0',
  `Sub_Category` varchar(100) CHARACTER SET utf8 COLLATE utf8_sinhala_ci DEFAULT NULL,
  `Class_No` int(10) DEFAULT '0',
  `Location` text CHARACTER SET utf8 COLLATE utf8_sinhala_ci,
  `Library` text CHARACTER SET utf8 COLLATE utf8_sinhala_ci
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`book_id`, `book_title`, `category_id`, `author`, `author_2`, `author_3`, `author_4`, `author_5`, `book_copies`, `book_pub`, `publisher_name`, `isbn`, `copyright_year`, `status`, `book_barcode`, `book_image`, `date_added`, `remarks`, `Accession_No`, `Edition`, `Source`, `Pages`, `Price`, `Sub_Category`, `Class_No`, `Location`, `Library`) VALUES
(1, 'I can count', 9, 'Pelangi Book', NULL, NULL, NULL, NULL, 2, 'Malaysia Penerbitan Pelangi', NULL, '983 50 3339 0', 2001, 'New', 'APLG9000LMS', NULL, '2023-07-27 01:44:13', 'Available', 9000, '-', '-', 14, 250, 'Fiction', 823, '', 'Junior'),
(2, 'I can count', 9, 'Pelangi Book', NULL, NULL, NULL, NULL, 2, 'Malaysia Penerbitan Pelangi', NULL, '983 50 3339 0', 2001, 'New', 'APLG9001LMS', NULL, '2023-07-27 01:44:13', 'Available', 9001, '-', '-', 14, 250, 'Fiction', 823, '', 'Junior'),
(3, 'Look they grow', 9, 'Pelangi Book', NULL, NULL, NULL, NULL, 4, 'Malaysia Penerbitan Pelangi', NULL, '983 50 3067 7', 2001, 'New', 'APLG9002LMS', NULL, '2023-07-27 01:44:13', 'Available', 9002, '-', '-', 14, 250, 'Fiction', 823, '', 'Junior'),
(4, 'Look they grow', 9, 'Pelangi Book', NULL, NULL, NULL, NULL, 4, 'Malaysia Penerbitan Pelangi', NULL, '983 50 3067 7', 2001, 'New', 'APLG9003LMS', NULL, '2023-07-27 01:44:13', 'Available', 9003, '-', '-', 14, 250, 'Fiction', 823, '', 'Junior'),
(5, 'Look they grow', 9, 'Pelangi Book', NULL, NULL, NULL, NULL, 4, 'Malaysia Penerbitan Pelangi', NULL, '983 50 3067 7', 2001, 'New', 'APLG9004LMS', NULL, '2023-07-27 01:44:13', 'Available', 9004, '-', '-', 14, 250, 'Fiction', 823, '', 'Junior'),
(6, 'Look they grow', 9, 'Pelangi Book', NULL, NULL, NULL, NULL, 7, 'Malaysia Penerbitan Pelangi', NULL, '983 503067 7', 2001, 'New', 'APLG9005LMS', NULL, '2023-07-27 01:44:13', 'Available', 9005, '-', '-', 14, 250, 'Fiction', 823, '', 'Junior'),
(7, 'Look they grow', 9, 'Pelangi Book', NULL, NULL, NULL, NULL, 7, 'Malaysia Penerbitan Pelangi', NULL, '983 503067 7', 2001, 'New', 'APLG9006LMS', NULL, '2023-07-27 01:44:13', 'Available', 9006, '-', '-', 14, 250, 'Fiction', 823, '', 'Junior'),
(8, 'Look they grow', 9, 'Pelangi Book', NULL, NULL, NULL, NULL, 7, 'Malaysia Penerbitan Pelangi', NULL, '983 503067 7', 2001, 'New', 'APLG9007LMS', NULL, '2023-07-27 01:44:13', 'Available', 9007, '-', '-', 14, 250, 'Fiction', 823, '', 'Junior'),
(9, 'Look they grow', 9, 'Pelangi Book', NULL, NULL, NULL, NULL, 7, 'Malaysia Penerbitan Pelangi', NULL, '983 503067 7', 2001, 'New', 'APLG9008LMS', NULL, '2023-07-27 01:44:13', 'Available', 9008, '-', '-', 14, 250, 'Fiction', 823, '', 'Junior'),
(10, 'Look they grow', 9, 'Pelangi Book', NULL, NULL, NULL, NULL, 7, 'Malaysia Penerbitan Pelangi', NULL, '983 503067 7', 2001, 'New', 'APLG9009LMS', NULL, '2023-07-27 01:44:13', 'Available', 9009, '-', '-', 14, 250, 'Fiction', 823, '', 'Junior'),
(11, 'Look they grow', 9, 'Pelangi Book', NULL, NULL, NULL, NULL, 7, 'Malaysia Penerbitan Pelangi', NULL, '983 503067 7', 2001, 'New', 'APLG9010LMS', NULL, '2023-07-27 01:44:13', 'Available', 9010, '-', '-', 14, 250, 'Fiction', 823, '', 'Junior'),
(12, 'Look they grow', 9, 'Pelangi Book', NULL, NULL, NULL, NULL, 7, 'Malaysia Penerbitan Pelangi', NULL, '983 503067 7', 2001, 'New', 'APLG9011LMS', NULL, '2023-07-27 01:44:13', 'Available', 9011, '-', '-', 14, 250, 'Fiction', 823, '', 'Junior'),
(13, 'Look they grow', 9, 'Pelangi Book', NULL, NULL, NULL, NULL, 4, 'Malaysia Penerbitan Pelangi', NULL, '983 50 3067 7', 2001, 'New', 'APLG9012LMS', NULL, '2023-07-27 01:44:13', 'Available', 9012, '-', '-', 14, 250, 'Fiction', 823, '', 'Junior'),
(14, 'Sounds I hear', 9, 'Pelangi Book', NULL, NULL, NULL, NULL, 7, 'Malaysia Penerbitan Pelangi', NULL, '983 50 3066-9', 2001, 'New', 'APLG9013LMS', NULL, '2023-07-27 01:44:13', 'Available', 9013, '-', '-', 14, 250, 'Fiction', 823, '', 'Junior'),
(15, 'Sounds I hear', 9, 'Pelangi Book', NULL, NULL, NULL, NULL, 7, 'Malaysia Penerbitan Pelangi', NULL, '983 50 3066-9', 2001, 'New', 'APLG9014LMS', NULL, '2023-07-27 01:44:13', 'Available', 9014, '-', '-', 14, 250, 'Fiction', 823, '', 'Junior'),
(16, 'Sounds I hear', 9, 'Pelangi Book', NULL, NULL, NULL, NULL, 7, 'Malaysia Penerbitan Pelangi', NULL, '983 50 3066-9', 2001, 'New', 'APLG9015LMS', NULL, '2023-07-27 01:44:13', 'Available', 9015, '-', '-', 14, 250, 'Fiction', 823, '', 'Junior'),
(17, 'Sounds I hear', 9, 'Pelangi Book', NULL, NULL, NULL, NULL, 7, 'Malaysia Penerbitan Pelangi', NULL, '983 50 3066-9', 2001, 'New', 'APLG9016LMS', NULL, '2023-07-27 01:44:13', 'Available', 9016, '-', '-', 14, 250, 'Fiction', 823, '', 'Junior'),
(18, 'Sounds I hear', 9, 'Pelangi Book', NULL, NULL, NULL, NULL, 7, 'Malaysia Penerbitan Pelangi', NULL, '983 50 3066-9', 2001, 'New', 'APLG9017LMS', NULL, '2023-07-27 01:44:13', 'Available', 9017, '-', '-', 14, 250, 'Fiction', 823, '', 'Junior'),
(19, 'Sounds I hear', 9, 'Pelangi Book', NULL, NULL, NULL, NULL, 7, 'Malaysia Penerbitan Pelangi', NULL, '983 50 3066-9', 2001, 'New', 'APLG9018LMS', NULL, '2023-07-27 01:44:13', 'Available', 9018, '-', '-', 14, 250, 'Fiction', 823, '', 'Junior'),
(20, 'Sounds I hear', 9, 'Pelangi Book', NULL, NULL, NULL, NULL, 7, 'Malaysia Penerbitan Pelangi', NULL, '983 50 3066-9', 2001, 'New', 'APLG9019LMS', NULL, '2023-07-27 01:44:13', 'Available', 9019, '-', '-', 14, 250, 'Fiction', 823, '', 'Junior'),
(21, 'Fun with Letters n-2', 9, 'Pelangi Book', NULL, NULL, NULL, NULL, 6, 'Malaysia Penerbitan Pelangi', NULL, '983 503341 2', 2001, 'New', 'APLG9020LMS', NULL, '2023-07-27 01:44:13', 'Available', 9020, '-', '-', 14, 250, 'Fiction', 823, '', 'Junior'),
(22, 'Fun with Letters n-2', 9, 'Pelangi Book', NULL, NULL, NULL, NULL, 6, 'Malaysia Penerbitan Pelangi', NULL, '983 503341 2', 2001, 'New', 'APLG9021LMS', NULL, '2023-07-27 01:44:13', 'Available', 9021, '-', '-', 14, 250, 'Fiction', 823, '', 'Junior'),
(23, 'Fun with Letters n-2', 9, 'Pelangi Book', NULL, NULL, NULL, NULL, 6, 'Malaysia Penerbitan Pelangi', NULL, '983 503341 2', 2001, 'New', 'APLG9022LMS', NULL, '2023-07-27 01:44:13', 'Available', 9022, '-', '-', 14, 250, 'Fiction', 823, '', 'Junior'),
(24, 'Fun with Letters n-2', 9, 'Pelangi Book', NULL, NULL, NULL, NULL, 6, 'Malaysia Penerbitan Pelangi', NULL, '983 503341 2', 2001, 'New', 'APLG9023LMS', NULL, '2023-07-27 01:44:13', 'Available', 9023, '-', '-', 14, 250, 'Fiction', 823, '', 'Junior'),
(25, 'Fun with Letters n2', 9, 'Pelangi Book', NULL, NULL, NULL, NULL, 6, 'Malaysia Penerbitan Pelangi', NULL, '983 503341 2', 2001, 'New', 'APLG9024LMS', NULL, '2023-07-27 01:44:13', 'Available', 9024, '-', '-', 14, 250, 'Fiction', 823, '', 'Junior'),
(26, 'Fun with Letters n-2', 9, 'Pelangi Book', NULL, NULL, NULL, NULL, 6, 'Malaysia Penerbitan Pelangi', NULL, '983 503341 2', 2001, 'New', 'APLG9025LMS', NULL, '2023-07-27 01:44:13', 'Available', 9025, '-', '-', 14, 250, 'Fiction', 823, '', 'Junior');

-- --------------------------------------------------------

--
-- Table structure for table `borrow_book`
--

CREATE TABLE `borrow_book` (
  `borrow_book_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `book_id` int(11) NOT NULL,
  `date_borrowed` datetime NOT NULL,
  `due_date` datetime NOT NULL,
  `date_returned` datetime DEFAULT NULL,
  `borrowed_status` varchar(100) NOT NULL,
  `book_penalty` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int(11) NOT NULL,
  `classname` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `classname`) VALUES
(1, 'General Works'),
(2, 'Philosophy and Psychology'),
(3, 'Religion'),
(4, 'Social Sciences'),
(5, 'Language'),
(6, 'Natural Sciences'),
(7, 'Technology'),
(8, 'Art and Recreation'),
(9, 'Literature'),
(10, 'History and Geography');

-- --------------------------------------------------------

--
-- Table structure for table `penalty`
--

CREATE TABLE `penalty` (
  `penalty_id` int(11) NOT NULL,
  `penalty_amount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penalty`
--

INSERT INTO `penalty` (`penalty_id`, `penalty_amount`) VALUES
(1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `report`
--

CREATE TABLE `report` (
  `report_id` int(11) NOT NULL,
  `book_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `admin_name` varchar(100) NOT NULL,
  `detail_action` varchar(100) NOT NULL,
  `date_transaction` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `return_book`
--

CREATE TABLE `return_book` (
  `return_book_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `book_id` int(11) NOT NULL,
  `date_borrowed` datetime NOT NULL,
  `due_date` datetime NOT NULL,
  `date_returned` datetime NOT NULL,
  `book_penalty` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `school_number` varchar(100) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `middlename` varchar(100) DEFAULT NULL,
  `lastname` varchar(100) NOT NULL,
  `contact` varchar(100) DEFAULT NULL,
  `gender` varchar(100) NOT NULL,
  `address` varchar(100) DEFAULT NULL,
  `type` varchar(100) NOT NULL,
  `level` varchar(100) NOT NULL,
  `section` varchar(100) NOT NULL,
  `user_image` varchar(100) DEFAULT NULL,
  `status` varchar(100) NOT NULL,
  `user_added` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `school_number`, `firstname`, `middlename`, `lastname`, `contact`, `gender`, `address`, `type`, `level`, `section`, `user_image`, `status`, `user_added`) VALUES
(1, 'G05656', 'Tharindu', '', 'Rathnayake', '', 'Male', '575-B, Hunupola , Attanagalla', 'Student', 'Grade 7', 'A', NULL, 'Active', '2023-06-30 09:55:20');

-- --------------------------------------------------------

--
-- Table structure for table `user_log`
--

CREATE TABLE `user_log` (
  `user_log_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `date_log` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `allowed_book`
--
ALTER TABLE `allowed_book`
  ADD PRIMARY KEY (`allowed_book_id`);

--
-- Indexes for table `allowed_days`
--
ALTER TABLE `allowed_days`
  ADD PRIMARY KEY (`allowed_days_id`);

--
-- Indexes for table `barcode`
--
ALTER TABLE `barcode`
  ADD PRIMARY KEY (`barcode_id`);

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`book_id`);

--
-- Indexes for table `borrow_book`
--
ALTER TABLE `borrow_book`
  ADD PRIMARY KEY (`borrow_book_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`),
  ADD UNIQUE KEY `category_id` (`category_id`),
  ADD KEY `classid` (`category_id`);

--
-- Indexes for table `penalty`
--
ALTER TABLE `penalty`
  ADD PRIMARY KEY (`penalty_id`);

--
-- Indexes for table `report`
--
ALTER TABLE `report`
  ADD PRIMARY KEY (`report_id`);

--
-- Indexes for table `return_book`
--
ALTER TABLE `return_book`
  ADD PRIMARY KEY (`return_book_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `user_log`
--
ALTER TABLE `user_log`
  ADD PRIMARY KEY (`user_log_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `allowed_book`
--
ALTER TABLE `allowed_book`
  MODIFY `allowed_book_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `allowed_days`
--
ALTER TABLE `allowed_days`
  MODIFY `allowed_days_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `barcode`
--
ALTER TABLE `barcode`
  MODIFY `barcode_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
  MODIFY `book_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `borrow_book`
--
ALTER TABLE `borrow_book`
  MODIFY `borrow_book_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `penalty`
--
ALTER TABLE `penalty`
  MODIFY `penalty_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `report`
--
ALTER TABLE `report`
  MODIFY `report_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `return_book`
--
ALTER TABLE `return_book`
  MODIFY `return_book_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user_log`
--
ALTER TABLE `user_log`
  MODIFY `user_log_id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
