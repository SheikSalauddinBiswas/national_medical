-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 24, 2022 at 08:32 PM
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
-- Table structure for table `adress`
--

CREATE TABLE `adress` (
  `id` int(11) NOT NULL,
  `adress` varchar(500) NOT NULL,
  `fulladress` varchar(500) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `email` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `adress`
--

INSERT INTO `adress` (`id`, `adress`, `fulladress`, `mobile`, `email`) VALUES
(4, ' Nasirabad, Kulshi', '', '0153454366', 'nationalmedical@gmail.com');

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
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `tag` varchar(50) NOT NULL,
  `name` varchar(500) NOT NULL,
  `date` date NOT NULL,
  `title` varchar(500) NOT NULL,
  `description` varchar(500) NOT NULL,
  `image` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `tag`, `name`, `date`, `title`, `description`, `image`) VALUES
(3, 'Food', 'Sheik Salauddin Biswas', '2022-12-25', 'Astronomy Binoculars A Great Alternative', 'MCSE boot camps have its supporters and its detractors. Some people do not understand why you should have to spend money on boot camp when you can get the MCSE study materials yourself at a fraction.', 'm-blog-1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `blog_user`
--

CREATE TABLE `blog_user` (
  `blog_id` int(11) NOT NULL,
  `name` varchar(500) NOT NULL,
  `email` varchar(500) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `password` varchar(500) NOT NULL,
  `image` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `blog_user`
--

INSERT INTO `blog_user` (`blog_id`, `name`, `email`, `mobile`, `password`, `image`) VALUES
(1, 'Sheik Salauddin Biswas', 'sheik@gmail.com', '01892394404', '123456', 'doctor2.jpg');

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
-- Table structure for table `map`
--

CREATE TABLE `map` (
  `id` int(11) NOT NULL,
  `gurl` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `map`
--

INSERT INTO `map` (`id`, `gurl`) VALUES
(2, 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d686.0537262908335!2d91.80761465931957!3d22.36754892383868!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30acd98aa4e3cd97%3A0x26aaa6c0a0fe550d!2z4Kao4KeN4Kav4Ka-4Ka24Kao4Ka-4KayIOCmquCmsuCmv-Cmn-Cnh-CmleCmqOCmv-CmlSDgppXgprLgp4fgppw!5e0!3m2!1sen!2sbd!4v1671702794356!5m2!1sen!2sbd');

-- --------------------------------------------------------

--
-- Table structure for table `navbar`
--

CREATE TABLE `navbar` (
  `id` int(11) NOT NULL,
  `name` varchar(500) NOT NULL,
  `link` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `navbar`
--

INSERT INTO `navbar` (`id`, `name`, `link`) VALUES
(2, 'Departments', 'departments'),
(3, 'Doctors', 'doctors'),
(4, 'about us', 'about'),
(5, 'contact', 'contact'),
(6, 'blog', 'blog');

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
(29, 'Rumana Jannat', 'rumana@gmail.com', '123456', '01258364155', 'CMT', 'WhatsApp Image 2022-12-17 at 11.13.03 PM.jpeg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adress`
--
ALTER TABLE `adress`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog_user`
--
ALTER TABLE `blog_user`
  ADD PRIMARY KEY (`blog_id`);

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
-- Indexes for table `map`
--
ALTER TABLE `map`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `navbar`
--
ALTER TABLE `navbar`
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
-- AUTO_INCREMENT for table `adress`
--
ALTER TABLE `adress`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `blog_user`
--
ALTER TABLE `blog_user`
  MODIFY `blog_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `doctor`
--
ALTER TABLE `doctor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `home_banner_text`
--
ALTER TABLE `home_banner_text`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `home_feature`
--
ALTER TABLE `home_feature`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `home_slider`
--
ALTER TABLE `home_slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `home_welcome`
--
ALTER TABLE `home_welcome`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `hotline`
--
ALTER TABLE `hotline`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `map`
--
ALTER TABLE `map`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `navbar`
--
ALTER TABLE `navbar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
