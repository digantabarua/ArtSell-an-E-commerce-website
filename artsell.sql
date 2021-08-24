-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 18, 2021 at 11:26 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `artsell`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `a_id` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `mobile` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `age` varchar(50) NOT NULL,
  `dob` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`a_id`, `name`, `mobile`, `email`, `address`, `age`, `dob`, `gender`, `status`) VALUES
('A-1', 'sakif', '12345612359', 'sk@ymail.com', 'dhaka, bd', '20', '2000-05-06', 'Male', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `art`
--

CREATE TABLE `art` (
  `A_id` int(100) NOT NULL,
  `A_Name` varchar(255) NOT NULL,
  `A_Desc` varchar(10000) NOT NULL,
  `A_Category` varchar(100) NOT NULL,
  `A_Price` int(100) NOT NULL,
  `A_Picture` text NOT NULL,
  `Artist_Name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `art`
--

INSERT INTO `art` (`A_id`, `A_Name`, `A_Desc`, `A_Category`, `A_Price`, `A_Picture`, `Artist_Name`) VALUES
(1, 'fruit', 'bucket of fruit', 'digital', 200, '../files/bishu.png', 'diganta'),
(3, 'Angle', 'life goes on', 'digital', 5000, '../files/b23dc96877d11875246f36c5a63d9fa3.jpg', 'diganta'),
(10, 'deck', 'card deck\r\n  ', 'Acrylic painting', 1000, '../files/images.jpeg', 'diganta'),
(11, 'Self', 'Being self', 'Oil painting', 1500, '../files/Login.jpeg', 'Diganta'),
(12, 'heaven', '  Dnone\r\n  ', 'Acrylic painting', 2500, '../files/download (1).jpeg', 'Diganta'),
(13, 'alone', 'none', 'Acrylic painting', 1555, '../files/download (1).jpeg', 'Diganta');

-- --------------------------------------------------------

--
-- Table structure for table `artist`
--

CREATE TABLE `artist` (
  `fullname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `gender` varchar(15) NOT NULL,
  `dob` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `artist`
--

INSERT INTO `artist` (`fullname`, `email`, `username`, `password`, `address`, `phone`, `gender`, `dob`) VALUES
('Diganta barua', 'digantabarua@gmail.com', 'Diganta', '1234567890', 'Jamal Khan', '01861295313', 'male', '1997-10-25');

-- --------------------------------------------------------

--
-- Table structure for table `buyer`
--

CREATE TABLE `buyer` (
  `b_id` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `mobile` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `age` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `buyer`
--

INSERT INTO `buyer` (`b_id`, `name`, `mobile`, `email`, `address`, `age`, `dob`, `gender`, `status`) VALUES
('B-1', 'sakin', '12345625490', 'sk@gmail.com', 'dhaka, bangladesh', '21', '2000-08-03', 'Male', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `buyer_reg`
--

CREATE TABLE `buyer_reg` (
  `FullName` text NOT NULL,
  `UserName` text NOT NULL,
  `Email` text NOT NULL,
  `Password` text NOT NULL,
  `Address` text NOT NULL,
  `Phone` text NOT NULL,
  `DOB` text NOT NULL,
  `Gender` text NOT NULL,
  `File_Path` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `buyer_reg`
--

INSERT INTO `buyer_reg` (`FullName`, `UserName`, `Email`, `Password`, `Address`, `Phone`, `DOB`, `Gender`, `File_Path`) VALUES
('Mahjabin Rahman', 'mahjabin16', 'mahzabin1699@gmail.com', '1234567@', 'Mirpur 12', '01234567890', '1999-12-07', 'female', '../File/জনক_Mahjabin Rahman.jpg'),
('Jhon Wick', 'jhon1', 'jhon@gmail.com', '1234567#', 'Dhanmondi', '01234567899', '1980-01-05', 'male', '../File/মাঝি_Mahjabin Rahman.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `delivery_guy`
--

CREATE TABLE `delivery_guy` (
  `d_id` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `mobile` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `age` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `delivery_guy`
--

INSERT INTO `delivery_guy` (`d_id`, `name`, `mobile`, `email`, `address`, `age`, `dob`, `gender`, `status`) VALUES
('D-1', 'akash', '12345612359', 'jh23@gmail.com', 'badda,dhaka, bangladesh', '21', '2000-05-06', 'Male', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `delivery_info`
--

CREATE TABLE `delivery_info` (
  `di_id` varchar(50) NOT NULL,
  `d_id` varchar(50) NOT NULL,
  `d_name` varchar(50) NOT NULL,
  `p_id` varchar(50) NOT NULL,
  `p_name` varchar(50) NOT NULL,
  `quantity` varchar(50) NOT NULL,
  `price` varchar(50) NOT NULL,
  `paid_status` varchar(50) NOT NULL,
  `b_id` varchar(50) NOT NULL,
  `b_name` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `delivery_status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `delivery_info`
--

INSERT INTO `delivery_info` (`di_id`, `d_id`, `d_name`, `p_id`, `p_name`, `quantity`, `price`, `paid_status`, `b_id`, `b_name`, `address`, `delivery_status`) VALUES
('Di-1', 'D-1', 'akash', 'P-1', 'pubg', '1', '145666', 'paid', 'B-1', 'sakin', 'dhaka, bangladesh', 'undone');

-- --------------------------------------------------------

--
-- Table structure for table `issue`
--

CREATE TABLE `issue` (
  `r_id` varchar(50) NOT NULL,
  `comment` varchar(50) NOT NULL,
  `d_id` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `issue`
--

INSERT INTO `issue` (`r_id`, `comment`, `d_id`) VALUES
('I-305040', 'good', 'D-1');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `type` varchar(50) NOT NULL,
  `ans` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `password`, `type`, `ans`, `status`) VALUES
('A-1', '123', 'admin', 'dhk', 'active'),
('D-1', '123', 'deliveryGuy', 'dog', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `purchase_history`
--

CREATE TABLE `purchase_history` (
  `ph_id` varchar(50) NOT NULL,
  `c_id` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `product` varchar(50) NOT NULL,
  `quantity` varchar(50) NOT NULL,
  `price` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `purchase_history`
--

INSERT INTO `purchase_history` (`ph_id`, `c_id`, `name`, `product`, `quantity`, `price`) VALUES
('P-1', 'B-1', 'sakin', 'pubg', '1', '12312');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `art`
--
ALTER TABLE `art`
  ADD PRIMARY KEY (`A_id`);

--
-- Indexes for table `buyer`
--
ALTER TABLE `buyer`
  ADD PRIMARY KEY (`b_id`);

--
-- Indexes for table `buyer_reg`
--
ALTER TABLE `buyer_reg`
  ADD UNIQUE KEY `Email` (`Email`) USING HASH;

--
-- Indexes for table `delivery_guy`
--
ALTER TABLE `delivery_guy`
  ADD PRIMARY KEY (`d_id`);

--
-- Indexes for table `delivery_info`
--
ALTER TABLE `delivery_info`
  ADD PRIMARY KEY (`di_id`);

--
-- Indexes for table `issue`
--
ALTER TABLE `issue`
  ADD PRIMARY KEY (`r_id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `purchase_history`
--
ALTER TABLE `purchase_history`
  ADD PRIMARY KEY (`ph_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `art`
--
ALTER TABLE `art`
  MODIFY `A_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
