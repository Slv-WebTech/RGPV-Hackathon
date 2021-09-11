-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 09, 2021 at 07:30 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hackathon`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `fname` varchar(250) NOT NULL,
  `lname` varchar(250) NOT NULL,
  `mobile` varchar(250) NOT NULL,
  `age` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `cpassword` varchar(250) NOT NULL,
  `dob` varchar(250) NOT NULL,
  `blood_group` varchar(250) NOT NULL,
  `gender` varchar(250) NOT NULL,
  `hospital` varchar(250) NOT NULL,
  `city` varchar(250) NOT NULL,
  `state` varchar(250) NOT NULL,
  `zip` varchar(250) NOT NULL,
  `firstname` varchar(250) NOT NULL,
  `lastname` varchar(250) NOT NULL,
  `mobileno` varchar(250) NOT NULL,
  `relation` varchar(250) NOT NULL,
  `emaill` varchar(250) NOT NULL,
  `alcohol` varchar(250) NOT NULL,
  `smoke` varchar(250) NOT NULL,
  `need` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `fname`, `lname`, `mobile`, `age`, `email`, `password`, `cpassword`, `dob`, `blood_group`, `gender`, `hospital`, `city`, `state`, `zip`, `firstname`, `lastname`, `mobileno`, `relation`, `emaill`, `alcohol`, `smoke`, `need`) VALUES
(1, 'Manvi', 'chauhan', '6232769986', '20', 'manvichauhan151@gmail.com', '123', '123', '2021-04-30', 'AB+', 'Female', 'vhvhvh', 'NARWAR', 'Madhya Pradesh', '473660', 'Manvi', 'chauhan', '6232769986', 'sjdjh', 'manvichauhan151@gmail.com', '1-2glasses/day', '0-1pack/day', 'blood food'),
(2, 'Manvi', 'chauhan', '6232769986', '20', 'manvichauhan151@gmail.com', '123', '123', '2021-04-30', 'AB+', 'Female', 'vhvhvh', 'NARWAR', 'Madhya Pradesh', '473660', 'Manvi', 'chauhan', '6232769986', 'sjdjh', 'manvichauhan151@gmail.com', '1-2glasses/day', '0-1pack/day', 'blood food'),
(3, 'nandini', 'chauhan', '6264009473', '21', 'manvi@chauhan.com', '2222', '2222', '2020-04-09', 'A-', 'Female', 'vhvhvh', 'NARWAR', 'Madhya Pradesh', '473660', 'Manvi', 'chauhan', '6232769986', 'sjdjh', 'manvichauhan151@gmail.com', '1-2glasses/day', '1-2pack/day', 'blood');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
