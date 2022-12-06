-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 06, 2022 at 05:21 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `user_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `user_form`
--

CREATE TABLE `user_form` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `userName` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(100) NOT NULL,
  `user_type` varchar(200) NOT NULL DEFAULT 'Customer',
  `createdTime` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_form`
--

INSERT INTO `user_form` (`id`, `name`, `userName`, `email`, `password`, `user_type`, `createdTime`) VALUES
(1, 'Billal Hossain', '', 'abfahad.cse@gmail.com', '202cb962ac59075b964b07152d234b70', 'Customer', '2022-12-06'),
(2, 'Mithila', '', 'mithilafarjana@gmail.com', '64ad3fb166ddb41a2ca24f1803b8b722', 'Customer', '2022-12-06'),
(3, 'fahad', '', 'fahad@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'Artist', '2022-12-06'),
(4, 'ABU BAKAR', '', 'abfahad.cse@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'Customer', '2022-12-06'),
(5, 'Syed Eftasum Alam', '', 'salam201133@bscse.uiu.ac.bd', 'ff64007a66a0c437705db25d514254fc', 'Gallery', '2022-12-06'),
(6, 'fahad', '', 'fjfahad402@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'Artist', '2022-12-06');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user_form`
--
ALTER TABLE `user_form`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user_form`
--
ALTER TABLE `user_form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
