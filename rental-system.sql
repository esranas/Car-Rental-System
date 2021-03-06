-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 26, 2021 at 11:50 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rental-system`
--

-- --------------------------------------------------------

--
-- Table structure for table `cars`
--

CREATE TABLE `cars` (
  `carID` int(11) NOT NULL,
  `car name` varchar(50) NOT NULL,
  `carDetails` varchar(75) NOT NULL,
  `price` int(11) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cars`
--

INSERT INTO `cars` (`carID`, `car name`, `carDetails`, `price`, `image`) VALUES
(1, 'Black Ford', 'Great for your wedding and for prom.', 700, 'images/blackcar.png'),
(2, 'Cadillac', 'It is suitable for photoshoots.', 500, 'images/bluecar.png'),
(3, 'Morgan Roaster', 'Want to royal wedding? It is for you!', 800, 'images/greencar.png'),
(4, 'Chyrsler', 'For romantic occasions.', 500, 'images/whitecar.png'),
(5, 'Jawa Minor', 'red is loaded for action!', 500, 'images/redcar.png'),
(6, 'Rolls Royce', 'Classic color with classic design!', 600, 'images/silvercar.png'),
(7, 'Mercury Convertible', 'Pink lovers', 400, 'images/pinkcar.png'),
(8, 'Aston Martin DB4', 'Have fun with yellow :)', 350, 'images/yellowcar.png');

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

CREATE TABLE `reservation` (
  `reservationID` int(11) NOT NULL,
  `carID` int(11) NOT NULL,
  `decor` varchar(200) NOT NULL,
  `purpose` varchar(50) NOT NULL,
  `pickupdate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reservation`
--

INSERT INTO `reservation` (`reservationID`, `carID`, `decor`, `purpose`, `pickupdate`) VALUES
(31, 4, '', 'photoshoot', '2021-08-01'),
(32, 8, '', 'Wedding', '2021-10-06'),
(33, 8, 'decorate', 'Wedding', '2021-08-12');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(75) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(12) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `phone`, `password`, `email`) VALUES
(1, 'Esra Nas', '05435379142', '1234567', 'esra_nefel@hotmail.com'),
(2, 'laika alper', '05565379142', '123456789', 'laikalper@gmail.com'),
(3, 's??meyra ??am', '05875379142', 'qwertyu??o', 'sumeyracam@gmail.com'),
(4, 'Begum Bolat', '05435879142', '2158736', 'begumtest@gmail.com'),
(5, 'leyla coskun', 'leylacoskun@', '123456789', 'leylacoskun@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cars`
--
ALTER TABLE `cars`
  ADD PRIMARY KEY (`carID`);

--
-- Indexes for table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`reservationID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cars`
--
ALTER TABLE `cars`
  MODIFY `carID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `reservationID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
