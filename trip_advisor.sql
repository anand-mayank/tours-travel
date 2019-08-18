-- phpMyAdmin SQL Dump
-- version 4.5.0.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 12, 2017 at 07:36 PM
-- Server version: 10.0.17-MariaDB
-- PHP Version: 5.5.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `trip_advisor`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_reg`
--

CREATE TABLE `admin_reg` (
  `admin_id` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `mail` varchar(20) NOT NULL,
  `contact` varchar(10) NOT NULL,
  `address` varchar(40) NOT NULL,
  `gender` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=ascii;

--
-- Dumping data for table `admin_reg`
--

INSERT INTO `admin_reg` (`admin_id`, `password`, `name`, `mail`, `contact`, `address`, `gender`) VALUES
('admin1', '123', 'Mayank Anand', 'mayank@outlook.com', '8912345677', 'BD 37 Salt Lake', 'Male'),
('admin2', '123', 'Singh', 'singh@yahoo.com', '9874563210', 'EE 75 Salt Lake', 'Male');

-- --------------------------------------------------------

--
-- Table structure for table `book_tour`
--

CREATE TABLE `book_tour` (
  `user_id` varchar(20) NOT NULL,
  `tour_id` varchar(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `num` int(10) NOT NULL,
  `day` int(10) NOT NULL,
  `month` int(10) NOT NULL,
  `year` int(10) NOT NULL,
  `total` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=ascii;

--
-- Dumping data for table `book_tour`
--

INSERT INTO `book_tour` (`user_id`, `tour_id`, `name`, `num`, `day`, `month`, `year`, `total`) VALUES
('user1', 'tour02', 'Amritsar', 5, 2, 5, 2017, 25000),
('user1', 'tour03', 'Agra', 2, 15, 11, 2005, 30000);

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `name` varchar(20) NOT NULL,
  `mail` varchar(20) NOT NULL,
  `contact` varchar(10) NOT NULL,
  `message` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=ascii;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`name`, `mail`, `contact`, `message`) VALUES
('Mayank Anand', 'mayank@gmail.com', '8912345677', 'Tours & Travels.'),
('singh', 'singh@gmail.com', '1234567890', 'Tours & Travels.'),
('Nano', 'abc@gmail.com', '9876543210', 'Trip To Go!');

-- --------------------------------------------------------

--
-- Table structure for table `reg`
--

CREATE TABLE `reg` (
  `user_id` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `mail` varchar(20) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `address` varchar(50) NOT NULL,
  `gender` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=ascii;

--
-- Dumping data for table `reg`
--

INSERT INTO `reg` (`user_id`, `password`, `name`, `mail`, `contact`, `address`, `gender`) VALUES
('', '', '', '', '', '', ''),
('user1', '123', 'Atul', 'user1@gmail.com', '9876543210', 'BE 277 Salt Lake', 'Male'),
('user2', '123', 'Riya', 'user2@gmail.com', '6549873210', 'CK 45 Kolkata.', 'Female'),
('user3', '123', 'Rohan Biswas', 'rohan@hotmail.com', '9143453020', '221/B Mallik Colony.', 'Male'),
('user4', '123', 'Sakura Chan', 'sakura@gmail.com', '9831117201', '459/A Ripon Street.', 'Female');

-- --------------------------------------------------------

--
-- Table structure for table `tours`
--

CREATE TABLE `tours` (
  `tour_id` varchar(20) NOT NULL,
  `name` varchar(40) NOT NULL,
  `price` int(10) NOT NULL,
  `image` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=ascii;

--
-- Dumping data for table `tours`
--

INSERT INTO `tours` (`tour_id`, `name`, `price`, `image`) VALUES
('tour01', 'Jammu&Kashmir', 10000, 'upload/jk.jpg'),
('tour02', 'Amritsar', 5000, 'upload/amritsar.jpg'),
('tour03', 'Agra', 15000, 'upload/agra.jpg'),
('tour04', 'Rajasthan', 15000, 'upload/rajasthan.jpg'),
('tour05', 'Kanyakumari', 20000, 'upload/kanya.jpg'),
('tour06', 'London', 125000, 'upload/4.jpg'),
('tour07', 'Bangkok', 50000, 'upload/5.jpg'),
('tour08', 'Switzerland', 125000, 'upload/04.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_reg`
--
ALTER TABLE `admin_reg`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `reg`
--
ALTER TABLE `reg`
  ADD PRIMARY KEY (`user_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
