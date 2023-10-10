-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 10, 2023 at 05:30 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rrhh_el`
--

-- --------------------------------------------------------

--
-- Table structure for table `pruebas`
--

CREATE TABLE `pruebas` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `data_time` datetime NOT NULL DEFAULT current_timestamp(),
  `prueba` varchar(150) NOT NULL,
  `stat` int(1) NOT NULL,
  `id_prueba` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pruebas`
--

INSERT INTO `pruebas` (`id`, `id_user`, `data_time`, `prueba`, `stat`, `id_prueba`) VALUES
(1, 1, '2023-10-08 20:35:29', 'Cuestionario de actos y condiciones inseguras', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `email` varchar(150) NOT NULL,
  `stat` int(1) NOT NULL COMMENT '1=on;2=off',
  `date_time` datetime NOT NULL DEFAULT current_timestamp(),
  `pass` varchar(250) NOT NULL,
  `tipo_usuario` int(1) NOT NULL COMMENT '1=admin;2=user re'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `nombre`, `apellido`, `email`, `stat`, `date_time`, `pass`, `tipo_usuario`) VALUES
(1, 'tayron', 'Tayron', 'Arrieta', 'tayron.arrieta@gruasshl.com', 1, '2023-10-08 16:51:30', '$2y$10$QNB0LzMYZXeh4uZk1eoBPuQriPJvxxSueodqAOO8rNqeuMJzlwLSi', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pruebas`
--
ALTER TABLE `pruebas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pruebas`
--
ALTER TABLE `pruebas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
