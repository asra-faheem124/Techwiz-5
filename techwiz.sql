-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 20, 2024 at 03:45 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `techwiz`
--

-- --------------------------------------------------------

--
-- Table structure for table `pak_package`
--

CREATE TABLE `pak_package` (
  `pak_image` varchar(30) NOT NULL,
  `pak_name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pak_package`
--

INSERT INTO `pak_package` (`pak_image`, `pak_name`) VALUES
('isl.jpg', 'Islamabad'),
('naran.jpg', 'Naran'),
('saif.webp', 'Saiful Mulook'),
('shogran.jpg', 'Shogran'),
('nathia.jpg', 'Nathiagali'),
('murree.jpg', 'Murree');

-- --------------------------------------------------------

--
-- Table structure for table `trips`
--

CREATE TABLE `trips` (
  `id` int(11) NOT NULL,
  `trip_name` varchar(255) DEFAULT NULL,
  `trip_destination` varchar(255) DEFAULT NULL,
  `trip_start_date` date DEFAULT NULL,
  `trip_end_date` date DEFAULT NULL,
  `trip_budget` decimal(10,0) DEFAULT NULL,
  `expense_transport` decimal(10,0) DEFAULT NULL,
  `expense_accomodation` decimal(10,0) DEFAULT NULL,
  `expense_food` decimal(10,0) DEFAULT NULL,
  `trip_notes` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `trips`
--

INSERT INTO `trips` (`id`, `trip_name`, `trip_destination`, `trip_start_date`, `trip_end_date`, `trip_budget`, `expense_transport`, `expense_accomodation`, `expense_food`, `trip_notes`) VALUES
(1, '', '', '0000-00-00', '0000-00-00', 0, 0, 0, 0, ''),
(2, 'Abc', 'xyz@gmail.com', '2024-09-27', '2024-09-20', 50000, 10000, 50000, 20000, '15 days');

-- --------------------------------------------------------

--
-- Table structure for table `trip_review`
--

CREATE TABLE `trip_review` (
  `review_name` varchar(200) NOT NULL,
  `review_email` varchar(255) NOT NULL,
  `review_area` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `trip_review`
--

INSERT INTO `trip_review` (`review_name`, `review_email`, `review_area`) VALUES
('abc ', 'abc@gmail.com', 'very good');

-- --------------------------------------------------------

--
-- Table structure for table `tw_roles`
--

CREATE TABLE `tw_roles` (
  `role_id` int(10) NOT NULL,
  `role_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tw_roles`
--

INSERT INTO `tw_roles` (`role_id`, `role_name`) VALUES
(1, 'Admin'),
(2, 'User');

-- --------------------------------------------------------

--
-- Table structure for table `tw_users`
--

CREATE TABLE `tw_users` (
  `user_id` int(11) NOT NULL,
  `user_name` text NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_phone` int(11) NOT NULL,
  `user_add` varchar(255) NOT NULL,
  `user_password` varchar(50) NOT NULL,
  `user_role_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tw_users`
--

INSERT INTO `tw_users` (`user_id`, `user_name`, `user_email`, `user_phone`, `user_add`, `user_password`, `user_role_id`) VALUES
(2, 'maheen', 'maheen@gmail.com', 1234567878, 'Street 12', 'maheen', 2),
(3, 'asra', 'asra@gmail.com', 1234567898, 'Street 5', 'asra', 2);

-- --------------------------------------------------------

--
-- Table structure for table `upcoming_tours`
--

CREATE TABLE `upcoming_tours` (
  `tour_image` varchar(200) NOT NULL,
  `tour_name` varchar(30) NOT NULL,
  `tour_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `upcoming_tours`
--

INSERT INTO `upcoming_tours` (`tour_image`, `tour_name`, `tour_desc`) VALUES
('images/card-1.jpg', 'Pakistan', 'A nature\'s love paradise'),
('images/india.jpg', 'India', 'Discover the Land of Diversity'),
('images/italy.webp', 'Italy', 'Explore Italy\'s Hidden Coastlines');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `trips`
--
ALTER TABLE `trips`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tw_roles`
--
ALTER TABLE `tw_roles`
  ADD PRIMARY KEY (`role_id`);

--
-- Indexes for table `tw_users`
--
ALTER TABLE `tw_users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `user_add_unique` (`user_add`),
  ADD KEY `user_role_id_fk` (`user_role_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `trips`
--
ALTER TABLE `trips`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tw_roles`
--
ALTER TABLE `tw_roles`
  MODIFY `role_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tw_users`
--
ALTER TABLE `tw_users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tw_users`
--
ALTER TABLE `tw_users`
  ADD CONSTRAINT `tw_users_ibfk_1` FOREIGN KEY (`user_role_id`) REFERENCES `tw_roles` (`role_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
