-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 28, 2021 at 11:28 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wt_sp21_f`
--

-- --------------------------------------------------------

--
-- Table structure for table `agencydata`
--

CREATE TABLE `agencydata` (
  `sl` int(10) NOT NULL,
  `name` varchar(30) NOT NULL,
  `address` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL,
  `license` varchar(20) NOT NULL,
  `date` varchar(20) NOT NULL,
  `phone` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `agencydata`
--

INSERT INTO `agencydata` (`sl`, `name`, `address`, `email`, `license`, `date`, `phone`) VALUES
(1, 'Sajeeb', 'Mirpur,Dhaka', 'jahid@email.com', '4598754567765', '18-Oct-2004', '987655678765'),
(2, ' vhjbj', 'Dhaka', 'jahid@email.com', '2147483647', '16-Nov-2005', '2147483647'),
(3, ' vhjbj', 'Dhaka', 'jahid@email.com', '2147483647', '16-Nov-2005', '2147483647'),
(4, 'Yt', 'Rangpur', 'yt@email.com', '2147483647', '19-Nov-2003', '2147483647'),
(7, 'faqef', 'erfatg', 'abiwer@gmail.com', '21412354252', '16-Mar-2004', '+8802434265236'),
(8, 'faqef', 'erfatg', 'abir@gmail.com', '546546345345', '16-Mar-2004', '+8802434265236'),
(9, 'faqef', 'erfatg', 'aboiuir@gmail.com', '657343535', '16-Mar-2004', '+8802434265236'),
(10, 'faqef', 'erfatg', 'aygjbir@gmail.com', '63634534536', '16-Mar-2004', '+8802434265236');

-- --------------------------------------------------------

--
-- Table structure for table `air_ticket`
--

CREATE TABLE `air_ticket` (
  `sl` int(5) NOT NULL,
  `departure_airport` varchar(30) NOT NULL,
  `arrival_airport` varchar(30) NOT NULL,
  `departure_date` varchar(30) NOT NULL,
  `preffered_airlines` varchar(30) NOT NULL,
  `preffered_seating` varchar(30) NOT NULL,
  `passengers` int(30) NOT NULL,
  `return_date` varchar(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `phone` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `air_ticket`
--

INSERT INTO `air_ticket` (`sl`, `departure_airport`, `arrival_airport`, `departure_date`, `preffered_airlines`, `preffered_seating`, `passengers`, `return_date`, `name`, `phone`, `email`) VALUES
(1, '$departure_airport', '$arrival_airport', '$departure_date', '$preffered_airlines', '$preffered_seating', 0, '$return_date', '$name', '$phone', '$email'),
(2, 'khulna', 'coxs bazar', '', 'air india', 'business class', 4, '', '', '2434265236', 'abir@gmail.com'),
(3, 'khulna', 'coxs bazar', '', 'air india', 'business class', 4, '', 'faqef', '2434265236', 'abir@gmail.com'),
(4, 'chittagong', 'chittagong', '', 'novo air', 'economy class', 4, '', 'sfd', '52455125245', 'abir@gmail.com'),
(6, 'khulna', 'rajshahi', '', 'novo air', 'economy class', 1, '', 'daawdewaf', '431241341', 'abir@gmail.com'),
(15, 'coxs bazar', 'khulna', '', 'novo air', 'business class', 8, '', 'adwfg', '54353252', 'abir@gmail.com'),
(23, 'dhaka', 'chittagong', '18-Apr-2007', 'US bangla', 'economy class', 3, '18-Apr-2007', 'faqef', '+8802434265236', 'abir@gmail.com'),
(24, 'coxs bazar', 'chittagong', '19-Dec-2008', 'novo air', 'economy class', 4, '19-Dec-2008', 'faqef', '+8802434265236', 'abir@gmail.com'),
(25, 'khulna', 'chittagong', '4-Jun-2021', 'US bangla', 'economy class', 3, '4-Jun-2021', 'daawdf', '4324235', 'zahid@gmail.com'),
(26, 'rajshahi', 'rajshahi', '5-May-2006', 'US bangla', 'economy class', 5, '5-May-2006', 'daawdf', '4324235', 'zahid@gmail.com'),
(27, 'khulna', 'chittagong', '18-May-2021', 'air india', 'business class', 3, '18-May-2021', 'faqef', '+88024265236', 'asadr@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `create_package`
--

CREATE TABLE `create_package` (
  `sl` int(11) NOT NULL,
  `place_name` varchar(30) NOT NULL,
  `category` varchar(30) NOT NULL,
  `price` double NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `create_package`
--

INSERT INTO `create_package` (`sl`, `place_name`, `category`, `price`, `description`) VALUES
(1, 'sandara', 'Hotel', 2500, 'nice hiteel'),
(3, 'readison', 'Hotel', 5222, 'nice hotel');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `sl` int(5) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `messege` text NOT NULL,
  `date` varchar(20) NOT NULL,
  `type` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`sl`, `name`, `email`, `messege`, `date`, `type`) VALUES
(2, 'Radisson', 'radisson@hotel.info', 'kjhgfdertyujbvdertyjhbgfdrtyh', '2/4/2012', 'hotel'),
(3, 'toha', 'toha@email.com', 'asdfghjkmnbvcdsertyujnbvcdrtyujmnbvcftyh', '10/1/2021', 'agency');

-- --------------------------------------------------------

--
-- Table structure for table `hotel_booking`
--

CREATE TABLE `hotel_booking` (
  `sl` int(5) NOT NULL,
  `desire_city` varchar(30) NOT NULL,
  `check_in` varchar(20) NOT NULL,
  `check_out` varchar(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hotel_booking`
--

INSERT INTO `hotel_booking` (`sl`, `desire_city`, `check_in`, `check_out`, `name`, `phone`, `email`) VALUES
(1, 'bangkok', '0000-00-00', '0', 'eafr fa', 'dawdr3weer', 'daqrfas'),
(2, 'bangkok', '0000-00-00', '0', 'eafr fa', 'dawdr3weer', 'daqrfas'),
(3, 'bangkok', '0000-00-00', '0', 'eafr fa', 'dawdr3weer', 'daqrfas'),
(4, 'kualalampur', '0000-00-00', '0', 'fese', 'feas', 'abir@gmail.com'),
(5, 'kualalampur', '0000-00-00', '0', 'fese', 'feas', 'abir@gmail.com'),
(6, 'kualalampur', '0000-00-00', '0', 'fese', 'feas', 'abir@gmail.com'),
(7, '$city', '0000-00-00', '0', '$fname', '$phone', '$email'),
(8, 'kualalampur', '0000-00-00', '0', 'fese', 'feas', 'abir@gmail.com'),
(9, 'bangkok', '0000-00-00', '0', 'daawdf', '4324235', 'zahid@gmail.com'),
(16, '$city', '$checkin', '$checkout', '$fname', '$phone', '$email'),
(22, 'singapore', '7-Jul-2000', '7-Jul-2000', 'faqef', '+8802434265236', 'abir@gmail.com'),
(23, 'singapore', '9-Sept-2004', '9-Sept-2004', 'shanto', '54356456747', 'shanto@gmail.com'),
(24, 'dhaka', '18-Aug-2020', '18-Aug-2020', 'wdad aw', '234324525', 'fahim@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `location_info`
--

CREATE TABLE `location_info` (
  `sl` int(11) NOT NULL,
  `place_name` varchar(30) NOT NULL,
  `category` varchar(30) NOT NULL,
  `price` double NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `location_info`
--

INSERT INTO `location_info` (`sl`, `place_name`, `category`, `price`, `description`) VALUES
(1, 'naman place', 'resort', 2345, 'very nice place'),
(2, 'emerald maldives', 'resort', 3534, 'Private beach villas and overwater bungalows combine contemporary creature '),
(3, 'redison', 'hotel', 3456, 'nice place'),
(4, 'SINGAPUR', 'RESORT', 80400, 'WONDER FUL PLACE '),
(5, 'SINGAPUR', 'RESORT', 80400, 'WONDER FUL PLACE '),
(6, 'AUSTRALIA', 'HOTEL', 34445, 'LOOKING WOW PLACE'),
(7, 'hunnn', 'resort', 2344, 'ioooljjhj'),
(8, 'polan', 'Resort', 45000, 'very charming'),
(9, 'polan beach', 'Resort', 4500, 'nice place'),
(10, 'Bangkonk dour', 'HOTEL', 5566, 'comfortable rooms and weatther'),
(11, 'thailand', 'tour package', 0, 'jfoajofjop aweoriohrio r0oeijroi'),
(12, 'thailand', 'tour package', 3000, 'jfoajofjop aweoriohrio r0oeijroi'),
(13, 'malaysia', 'tour package', 3500, 'hsuigdju ahhih ief hioarl');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(5) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL,
  `type` varchar(10) NOT NULL DEFAULT 'customer',
  `status` varchar(30) NOT NULL DEFAULT 'active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `email`, `password`, `type`, `status`) VALUES
(1, 'abir@gmail.com', '123qweASD', 'admin', 'active'),
(2, 'zahid@gmail.com', '1234qweASD', 'customer', 'active'),
(3, 'shanto@gmail.com', '1234qweASD', 'customer', 'active'),
(4, 'jahid@email.com', 'Ac1rdtf64', 'agency', 'active'),
(5, 'jahid@email.com', 'Ac1rdtf64', 'agency', 'active'),
(6, 'jahid@email.com', 'Ac1rdtf64', 'agency', 'active'),
(7, 'jahid@email.com', 'Hu133Hgh', 'traveller', 'active'),
(8, 'gg@email.com', 'Ks123n32', 'traveller', 'active'),
(9, 'radisson@hotel.info', 'Ks123n32', 'traveller', 'active'),
(10, 'mnn@gmail.com', 'Kg678ghj', 'traveller', 'active'),
(11, 'hjk@email.com', 'Kg678ghj', 'traveller', 'active'),
(23, 'aygjbir@gmail.com', '43535werwraSDDW', 'agency', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `masterbooking`
--

CREATE TABLE `masterbooking` (
  `sl` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `service` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `date` varchar(30) NOT NULL,
  `status` varchar(30) NOT NULL,
  `package_info` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `masterbooking`
--

INSERT INTO `masterbooking` (`sl`, `name`, `service`, `email`, `date`, `status`, `package_info`) VALUES
(2, 'abir', 'hotel', 'abir@gmail.com', '17-Apr-2022', 'pending', 'golden'),
(3, 'SANTO', 'hotel', 'abir@gmail.com', '16-Feb-2022', 'pending', 'golden'),
(4, 'kamal', 'hotel', 'kamal@gmail.com', '18-Mar-2023', 'book', 'silver'),
(5, 'robi', 'resort', 'robi@gmail.com', '17-Dec-2024', 'booked', 'silver');

-- --------------------------------------------------------

--
-- Table structure for table `meal`
--

CREATE TABLE `meal` (
  `sl` int(11) NOT NULL,
  `package_name` varchar(30) NOT NULL,
  `category` varchar(30) NOT NULL,
  `price` double NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `meal`
--

INSERT INTO `meal` (`sl`, `package_name`, `category`, `price`, `description`) VALUES
(1, '', 'dinner', 450, 'fajskd'),
(3, 'package 2', 'Lunch+Brackfast', 2500, 'Bread, salad,vegetables and Rice ,meat ,fish ,daul'),
(4, 'package 3', 'lunch', 5000, 'rice and meat'),
(5, 'pak4', 'dinnner', 2452, 'rice and vegetables'),
(6, 'package 5', 'Breakfast+Lunch', 2255, 'bread,vagetables and rice,meat,egg and salad');

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE `profile` (
  `sl` int(5) NOT NULL,
  `name` varchar(30) DEFAULT 'null',
  `address` varchar(50) DEFAULT 'null',
  `email` varchar(30) NOT NULL,
  `phone_no` varchar(20) DEFAULT 'null',
  `join_date` varchar(6) NOT NULL DEFAULT current_timestamp(),
  `type` varchar(30) NOT NULL,
  `status` varchar(30) NOT NULL DEFAULT 'active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`sl`, `name`, `address`, `email`, `phone_no`, `join_date`, `type`, `status`) VALUES
(1, 'Jahid', 'nikunjo-2', 'jahid@email.com', '0987654345678', '18-Sep', 'agency', 'active'),
(2, 'Zim', 'nikunjo-2', 'zim@email.com', '0987654345678', '16-Oct', 'hotel', 'active'),
(3, 'Tamim', 'Mirpur', 'fvn@email.com', '01787306494', '19-Dec', 'agency', 'active'),
(6, 'Yt', 'Rangpur', 'yt@email.com', '5463728127364', '19-Nov', 'agency', 'active'),
(8, 'GG', 'Shylet', 'gg@email.com', '76567898765434', '1/1/20', 'traveller', 'active'),
(9, 'toha', 'nikunjo-2', 'radisson@hotel.info', '76567898765434', '1/1/20', 'traveller', 'active'),
(10, 'jhbgv', 'jnhg', 'mnn@gmail.com', '9876545678956', '7/1/20', 'traveller', 'inactive'),
(11, 'vgbhnjm', 'Shylet', 'hjk@email.com', '5678345612345', '6/9/20', 'traveller', 'active'),
(20, 'zahid', 'gadsgjdadd', 'zahid@gmail.com', '1244234234', '4/3/20', 'traveller', 'active'),
(21, 'NULL', 'NULL', 'asadr@gmail.com', 'NULL', 'CURREN', 'traveller', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `requestatour`
--

CREATE TABLE `requestatour` (
  `sl` int(5) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `date` timestamp(6) NOT NULL DEFAULT current_timestamp(6),
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `temp_registry`
--

CREATE TABLE `temp_registry` (
  `sl` int(11) NOT NULL,
  `name` varchar(30) DEFAULT 'null',
  `address` varchar(30) DEFAULT 'null',
  `email` varchar(30) NOT NULL,
  `join_date` varchar(6) DEFAULT current_timestamp(),
  `phone_number` varchar(20) DEFAULT 'null',
  `password` varchar(30) NOT NULL,
  `type` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `temp_registry`
--

INSERT INTO `temp_registry` (`sl`, `name`, `address`, `email`, `join_date`, `phone_number`, `password`, `type`) VALUES
(8, NULL, NULL, 'shanto1@gmail.com', '2021-0', NULL, '123qweASD', 'traveller'),
(9, 'dawedq', 'dqq3rr', 'zahidww@gmail.com', '16-May', '4324235434432', '123qweASD', 'agency'),
(10, NULL, NULL, 'zahid@gmail.com', '2021-0', NULL, '1234qweASDd', 'traveller');

-- --------------------------------------------------------

--
-- Table structure for table `transport_by`
--

CREATE TABLE `transport_by` (
  `sl` int(11) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `dname` varchar(30) NOT NULL,
  `depature` varchar(30) NOT NULL,
  `passangers` varchar(30) NOT NULL,
  `ticket` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transport_by`
--

INSERT INTO `transport_by` (`sl`, `fname`, `dname`, `depature`, `passangers`, `ticket`) VALUES
(1, 'dhaka', 'japan', '15-Jan-2021', '2', 'Buiness Class'),
(2, 'japan', 'pannma', '15-Feb-2022', '2', 'ticket'),
(3, 'japan', 'pannma', '15-Feb-2022', '2', 'ticket'),
(4, 'japan', 'pannma', '15-Feb-2022', '2', 'ticket'),
(5, 'dhaka', 'khulna', '16-Apr-2024', '4', 'Non AC Coach'),
(6, 'dhaka', 'rangpur', '1-Feb-2021', '3', 'ticket'),
(7, 'dhaka', 'rangpur', '1-Feb-2021', '3', 'ticket'),
(8, 'dhaka', 'rangpur', '2-Feb-2022', '6', 'ticket'),
(9, 'dhaka', 'rangpur', '2-Feb-2022', '6', 'ticket'),
(10, 'dhaka', 'rangpur', '2-Feb-2021', '2', 'ticket');

-- --------------------------------------------------------

--
-- Table structure for table `t_activity`
--

CREATE TABLE `t_activity` (
  `sl` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `service` varchar(30) NOT NULL DEFAULT '',
  `email` varchar(30) NOT NULL,
  `date` varchar(30) NOT NULL,
  `status` varchar(30) NOT NULL DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t_activity`
--

INSERT INTO `t_activity` (`sl`, `name`, `service`, `email`, `date`, `status`) VALUES
(1, 'jahid', 'air ticket', 'jahid@email.com', '10/1/2021', 'Booked(A)'),
(3, 'Goku', 'hotel', 'mnn@gmail.com', '10/1/2021', 'Booked(A)'),
(8, 'shanto', 'package no. 7', 'shanto@gmail.com', '19-Jun-2021', 'pending'),
(10, 'daawdf', 'air_ticket', 'zahid@gmail.com', '5-May-2006', 'pending'),
(11, 'shanto', 'hotel booking', 'shanto@gmail.com', '9-Sept-2004', 'pending'),
(12, 'rahman', 'tour request', 'rahman@gmail.com', '2021-04-26 00:12:41', 'Booked'),
(14, 'faqef', 'package no. 7', 'abir@gmail.com', '18-Dec-2021', 'pending'),
(15, 'daawdf', 'package no. 5', 'zahid@gmail.com', '17-May-2021', 'pending'),
(16, 'wdad aw', 'hotel booking', 'fahim@gmail.com', '18-Aug-2020', 'pending'),
(17, 'faruk', 'tour request', 'faruiyuk@gmail.com', 'CURRENT_TIMESTARP', 'Booked'),
(18, 'rahman', 'tour request', 'rahman@gmail.com', 'CURRENT_TIMESTARP', 'Booked'),
(19, 'jahud hgasan', 'tour request', 'hijdsahg@kjfs.com', 'CURRENT_TIMESTARP', 'Booked'),
(20, 'sjhg sfh', 'tour request', 'dawhfdh@guf.chi', 'CURRENT_TIMESTARP', 'Booked'),
(21, 'jahid hasan', 'tour request', 'jahidali@gmail.com', 'CURRENT_TIMESTARP', 'Booked');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agencydata`
--
ALTER TABLE `agencydata`
  ADD PRIMARY KEY (`sl`);

--
-- Indexes for table `air_ticket`
--
ALTER TABLE `air_ticket`
  ADD PRIMARY KEY (`sl`);

--
-- Indexes for table `create_package`
--
ALTER TABLE `create_package`
  ADD PRIMARY KEY (`sl`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`sl`);

--
-- Indexes for table `hotel_booking`
--
ALTER TABLE `hotel_booking`
  ADD PRIMARY KEY (`sl`);

--
-- Indexes for table `location_info`
--
ALTER TABLE `location_info`
  ADD PRIMARY KEY (`sl`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `masterbooking`
--
ALTER TABLE `masterbooking`
  ADD PRIMARY KEY (`sl`);

--
-- Indexes for table `meal`
--
ALTER TABLE `meal`
  ADD PRIMARY KEY (`sl`);

--
-- Indexes for table `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`sl`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `requestatour`
--
ALTER TABLE `requestatour`
  ADD PRIMARY KEY (`sl`);

--
-- Indexes for table `temp_registry`
--
ALTER TABLE `temp_registry`
  ADD PRIMARY KEY (`sl`);

--
-- Indexes for table `transport_by`
--
ALTER TABLE `transport_by`
  ADD PRIMARY KEY (`sl`);

--
-- Indexes for table `t_activity`
--
ALTER TABLE `t_activity`
  ADD PRIMARY KEY (`sl`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `agencydata`
--
ALTER TABLE `agencydata`
  MODIFY `sl` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `air_ticket`
--
ALTER TABLE `air_ticket`
  MODIFY `sl` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `create_package`
--
ALTER TABLE `create_package`
  MODIFY `sl` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `sl` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `hotel_booking`
--
ALTER TABLE `hotel_booking`
  MODIFY `sl` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `location_info`
--
ALTER TABLE `location_info`
  MODIFY `sl` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `masterbooking`
--
ALTER TABLE `masterbooking`
  MODIFY `sl` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `meal`
--
ALTER TABLE `meal`
  MODIFY `sl` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `profile`
--
ALTER TABLE `profile`
  MODIFY `sl` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `requestatour`
--
ALTER TABLE `requestatour`
  MODIFY `sl` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `temp_registry`
--
ALTER TABLE `temp_registry`
  MODIFY `sl` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `transport_by`
--
ALTER TABLE `transport_by`
  MODIFY `sl` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `t_activity`
--
ALTER TABLE `t_activity`
  MODIFY `sl` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
