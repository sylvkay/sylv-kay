-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 06, 2018 at 08:30 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `airline`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(3) NOT NULL,
  `name` varchar(15) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `username`, `password`) VALUES
(1, 'sylvester', 'sylvkay', 'inioluwa'),
(2, 'heritage', 'herit', 'inioluwa');

-- --------------------------------------------------------

--
-- Table structure for table `airport`
--

CREATE TABLE `airport` (
  `airport_id` int(3) NOT NULL,
  `airport_code` varchar(5) NOT NULL,
  `name` varchar(50) CHARACTER SET latin1 COLLATE latin1_bin NOT NULL,
  `city` varchar(50) NOT NULL,
  `country` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `airport`
--

INSERT INTO `airport` (`airport_id`, `airport_code`, `name`, `city`, `country`) VALUES
(1, 'BLR', 'Bangalore airport', 'bangalore', 'India'),
(2, 'LGO', 'lag airport', 'Lagos', 'Nigeria'),
(3, 'AAR', 'Aarhus', 'Aarhus', 'Denmark'),
(4, 'ABZ', 'Aberdeen', 'Aberdeen', 'united kingdom'),
(5, 'ABV', 'Nnamdi Azikiwe International Airport', 'Abuja', 'Nigeria'),
(6, 'BEN', 'Benghazi', 'Bengasi', 'libya'),
(7, 'BER', 'Berlin', 'Berlin', 'Germany'),
(8, 'GNE', 'ghent', 'gent', 'Belgium'),
(9, 'KEM', 'kemi', 'tornio', 'Finland'),
(10, 'SYD', 'sydney', 'sydney', 'Australia');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `booking_id` int(5) NOT NULL,
  `name` varchar(15) NOT NULL,
  `contact` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL,
  `address` varchar(30) NOT NULL,
  `flight_id` int(3) NOT NULL,
  `class` varchar(15) NOT NULL,
  `source` varchar(10) NOT NULL,
  `destination` varchar(10) NOT NULL,
  `price` bigint(12) NOT NULL,
  `cancel` varchar(7) NOT NULL DEFAULT 'no',
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`booking_id`, `name`, `contact`, `email`, `address`, `flight_id`, `class`, `source`, `destination`, `price`, `cancel`, `date`) VALUES
(1, 'Alpha', '7022938940', 'kanteao@gmail.com', 'sams', 9, 'LGO', 'BLR', 'economy', 50000, 'no', '0000-00-00'),
(2, 'sly', '7022090876', 'boladesylvester@gmail.com', 'sambhram college', 9, 'LGO', 'BLR', 'business', 75000, 'no', '0000-00-00'),
(3, 'deng', '07069424321', 'sylvkay@outlook.com', 'palya', 9, 'LGO', 'BLR', 'business', 75000, 'no', '0000-00-00'),
(4, 'kante', '7022938940', 'kao@gmail.com', 'ssssssssssss', 9, 'LGO', 'BLR', 'economy', 50000, 'no', '0000-00-00'),
(5, 'kante', '7022938940', 'kao@gmail.com', 'ssssssssssss', 9, 'LGO', 'BLR', 'economy', 50000, 'yes', '0000-00-00'),
(6, 'kante', '7022938940', 'kao@gmail.com', 'ssssssssssss', 9, 'LGO', 'BLR', 'economy', 50000, 'no', '0000-00-00'),
(7, 'Alpha', '564646464', 'fedddrfgreg', 'fdc', 9, 'LGO', 'BLR', 'economy', 50000, 'no', '0000-00-00'),
(8, 'Alpha', '564646464', 'fedddrfgreg', 'fdc', 9, 'LGO', 'BLR', 'economy', 50000, 'no', '0000-00-00'),
(9, 'alpha', '254545', '0', '', 9, 'LGO', 'BLR', 'economy', 50000, 'no', '0000-00-00'),
(10, 'paul', '7022090876', 'sylvkay@outlook.com', 'ssssssssssssssssssssssssss', 9, 'LGO', 'BLR', 'economy', 50000, 'no', '0000-00-00'),
(11, 'JOHN SIR', '7022938940', 'sylvkay@outlook.com', 'SAM', 9, 'LGO', 'BLR', 'business', 75000, 'no', '0000-00-00'),
(12, 'tobi', '7760476586', 'sylvkay@outlook.com', 'muneshwhara', 9, 'LGO', 'BLR', 'first', 90000, 'no', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(3) NOT NULL,
  `name` varchar(15) NOT NULL,
  `email` varchar(20) NOT NULL,
  `phone` bigint(15) NOT NULL,
  `msg` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `flight`
--

CREATE TABLE `flight` (
  `flight_id` int(10) NOT NULL,
  `plane_id` int(5) NOT NULL,
  `source` varchar(20) NOT NULL,
  `destination` varchar(20) NOT NULL,
  `departure_time` varchar(6) NOT NULL,
  `arrival_time` varchar(8) NOT NULL,
  `dept_date` varchar(10) NOT NULL,
  `arrival_date` varchar(10) NOT NULL,
  `eco_fare` bigint(15) NOT NULL,
  `business_fare` bigint(15) NOT NULL,
  `first_fare` bigint(15) NOT NULL,
  `way` varchar(10) NOT NULL,
  `stops` varchar(15) NOT NULL,
  `return_date` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `flight`
--

INSERT INTO `flight` (`flight_id`, `plane_id`, `source`, `destination`, `departure_time`, `arrival_time`, `dept_date`, `arrival_date`, `eco_fare`, `business_fare`, `first_fare`, `way`, `stops`, `return_date`) VALUES
(3, 2, 'london', 'lagos', '06:00', '10:00', '25/04/2018', '26/04/2018', 35000, 50000, 100000, '', '0', '0000-00-00'),
(7, 1, 'LGO', 'BLR', '10:11:', '11:11:01', '10-5-2018', '24/03/2018', 100000, 15000011, 100000000, '', '0', '0000-00-00'),
(8, 3, 'BLR', 'LGO', '10:11:', '12:11:01', '10-5-2018', '11-12-15', 100000, 150000, 10000000, 'roundtrip', '1', '0000-00-00'),
(9, 3, 'LGO', 'BLR', '10:00', '22:00', '2018-03-27', '2018-03-28', 50000, 75000, 90000, 'roundtrip', 'Dubai', '2018-04-10'),
(10, 1, 'BLR', 'BLR', '03:10', '13:01', '2018-05-02', '2018-05-04', 20000, 45000, 70000, 'roundtrip', '2', '2018-05-17'),
(11, 8, 'BEN', 'AAR', '05:03', '15:02', '2018-05-24', '2018-05-25', 12000, 46000, 61500, 'oneway', '1', ''),
(12, 9, 'BER', 'SYD', '03:04', '11:58', '2018-06-15', '2018-06-17', 72000, 120000, 157000, 'oneway', '3', ''),
(13, 10, 'ABV', 'ABZ', '15:04', '16:57', '2018-05-15', '2018-04-16', 50000, 65000, 97000, 'roundtrip', '4', '2018-05-01'),
(14, 3, 'KEM', 'GNE', '03:05', '18:01', '2018-10-01', '2018-10-02', 61000, 101000, 165000, 'oneway', '1', ''),
(15, 4, 'GNE', 'LGO', '02:00', '14:00', '2018-12-01', '2018-12-02', 70000, 180000, 250000, 'roundtrip', '2', '2019-01-10');

-- --------------------------------------------------------

--
-- Table structure for table `plane`
--

CREATE TABLE `plane` (
  `plane_id` int(5) NOT NULL,
  `brand` varchar(30) NOT NULL,
  `economy` int(3) NOT NULL,
  `business` int(3) NOT NULL,
  `first` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `plane`
--

INSERT INTO `plane` (`plane_id`, `brand`, `economy`, `business`, `first`) VALUES
(1, 'sly', 125, 300, 13),
(2, 'Boeing A380', 125, 50, 15),
(3, 'AirBus 230', 120, 50, 15),
(4, 'airbus 112', 500, 250, 35),
(5, 'booing 276', 100, 40, 10),
(6, 'bombardier', 50, 20, 9),
(7, 'cessna ', 76, 43, 19),
(8, 'dassault', 250, 70, 15),
(9, 'embraer', 120, 65, 20),
(10, 'gulfstream', 80, 26, 14);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `airport`
--
ALTER TABLE `airport`
  ADD PRIMARY KEY (`airport_id`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`booking_id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `flight`
--
ALTER TABLE `flight`
  ADD PRIMARY KEY (`flight_id`);

--
-- Indexes for table `plane`
--
ALTER TABLE `plane`
  ADD PRIMARY KEY (`plane_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `airport`
--
ALTER TABLE `airport`
  MODIFY `airport_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `booking_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `flight`
--
ALTER TABLE `flight`
  MODIFY `flight_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `plane`
--
ALTER TABLE `plane`
  MODIFY `plane_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
