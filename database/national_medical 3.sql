-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 22, 2022 at 10:14 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `national_medical`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `id` int(11) NOT NULL,
  `name` varchar(500) NOT NULL,
  `email` varchar(500) NOT NULL,
  `date` varchar(10) NOT NULL,
  `massage` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`id`, `name`, `email`, `date`, `massage`) VALUES
(2, 'Sheik Salauddin Biswas', 'sheik@gmail.com', '0000-00-00', 'I a alargic patient');

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `id` int(11) NOT NULL,
  `name` varchar(500) NOT NULL,
  `degree` varchar(500) NOT NULL,
  `description` varchar(500) NOT NULL,
  `image` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`id`, `name`, `degree`, `description`, `image`) VALUES
(1, 'ETHEL DAVIS', 'SR. FACULTY DATA SCIENCE', 'If you are looking at blank cassettes on the web, you may be very confused at the.', 'doctor1.jpg'),
(2, 'DAND MORIES', 'SR. FACULTY PLASTIC SURGERY', 'If you are looking at blank cassettes on the web, you may be very confused at the.', 'doctor2.jpg'),
(3, 'ALIGN BOARD', 'SR. FACULTY DATA SCIENCE', 'If you are looking at blank cassettes on the web, you may be very confused at the.', 'doctor3.jpg'),
(4, 'JESON LIMIT', 'SR. FACULTY PLASTIC SURGERY', 'If you are looking at blank cassettes on the web, you may be very confused at the.', 'doctor4.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `home_banner_text`
--

CREATE TABLE `home_banner_text` (
  `id` int(11) NOT NULL,
  `h4` varchar(500) NOT NULL,
  `h1` varchar(500) NOT NULL,
  `paragraph` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `home_banner_text`
--

INSERT INTO `home_banner_text` (`id`, `h4`, `h1`, `paragraph`) VALUES
(1, 'Caring for better life', 'Leading the way in medical excellence with us', 'Earth greater grass for good. Place for divide evening yielding them that. Creeping beginning over gathered brought.');

-- --------------------------------------------------------

--
-- Table structure for table `home_feature`
--

CREATE TABLE `home_feature` (
  `id` int(11) NOT NULL,
  `title` varchar(500) NOT NULL,
  `description` varchar(500) NOT NULL,
  `image` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `home_feature`
--

INSERT INTO `home_feature` (`id`, `title`, `description`, `image`) VALUES
(1, 'ADVANCE', 'Creeping for female light years that lesser cant evening heaven isnt bearing tree appear', 'feature1.png'),
(2, 'comfortable place', 'Creeping for female light years that lesser canot evening heaven isnot bearing tree appear', 'feature2.png'),
(3, 'quality equipment', 'Creeping for female light years that lesser canot evening heaven isnot bearing tree appear', 'feature3.png'),
(4, 'friandly staff', 'Creeping for female light years that lesser canot evening heaven isnot bearing tree appear', 'feature4.png');

-- --------------------------------------------------------

--
-- Table structure for table `home_slider`
--

CREATE TABLE `home_slider` (
  `id` int(11) NOT NULL,
  `title` varchar(500) NOT NULL,
  `description` varchar(500) NOT NULL,
  `image` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `home_slider`
--

INSERT INTO `home_slider` (`id`, `title`, `description`, `image`) VALUES
(2, 'cardiac clinic', 'midst lesser yielding over lights whose. Cattle greater brought sixth fly den dry good tree ', 'department1.jpg'),
(3, 'plastic surgery', 'midst lesser yielding over lights whose. Cattle greater brought sixth fly den dry good tree ', 'department2.jpg'),
(4, 'dental clinic', 'midst lesser yielding over lights whose. Cattle greater brought sixth fly den dry good tree ', 'department3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `home_welcome`
--

CREATE TABLE `home_welcome` (
  `id` int(11) NOT NULL,
  `title` varchar(500) NOT NULL,
  `description` varchar(500) NOT NULL,
  `image` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `home_welcome`
--

INSERT INTO `home_welcome` (`id`, `title`, `description`, `image`) VALUES
(1, 'Welcome to our clinic', 'Subdue whales void god which living do not midst lesser yielding over lights whose. Cattle greater brought sixth fly den dry good tree is not seed stars were. Subdue whales void god which living do midst lesser yielding over lights whose. Cattle greater brought sixth fly den dry good tree ', 'welcome.png');

-- --------------------------------------------------------

--
-- Table structure for table `hotline`
--

CREATE TABLE `hotline` (
  `id` int(11) NOT NULL,
  `title` varchar(500) NOT NULL,
  `description` varchar(500) NOT NULL,
  `mobile` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `hotline`
--

INSERT INTO `hotline` (`id`, `title`, `description`, `mobile`) VALUES
(1, 'Emergency Hotline.', 'We provide 24/7 customer support. Please feel free to contact us for emergency case.', '01534543665');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(250) NOT NULL,
  `name` varchar(500) NOT NULL,
  `email` varchar(500) NOT NULL,
  `password` varchar(500) NOT NULL,
  `mobile` varchar(500) NOT NULL,
  `department` varchar(500) NOT NULL,
  `image` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`, `mobile`, `department`, `image`) VALUES
(1, 'Sheik Salauddin Biswas', 'sheik@gmail.com', '123456', '01892394404', 'CMT', 'IMG_20220729_135425.jpg'),
(29, 'Rumana Jannat', 'rumana@gmail.com', '123456', '01258364155', 'CMT', 'WhatsApp Image 2022-12-17 at 11.13.03 PM.jpeg'),
(30, '', '', '', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_banner_text`
--
ALTER TABLE `home_banner_text`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_feature`
--
ALTER TABLE `home_feature`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_slider`
--
ALTER TABLE `home_slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_welcome`
--
ALTER TABLE `home_welcome`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hotline`
--
ALTER TABLE `hotline`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `doctor`
--
ALTER TABLE `doctor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `home_banner_text`
--
ALTER TABLE `home_banner_text`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `home_feature`
--
ALTER TABLE `home_feature`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `home_slider`
--
ALTER TABLE `home_slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `home_welcome`
--
ALTER TABLE `home_welcome`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `hotline`
--
ALTER TABLE `hotline`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
