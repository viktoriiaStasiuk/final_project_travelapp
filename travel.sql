-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 12, 2019 at 06:09 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `travel`
--

-- --------------------------------------------------------

--
-- Table structure for table `acceso`
--

CREATE TABLE `acceso` (
  `idAcc` int(10) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `acceso`
--

INSERT INTO `acceso` (`idAcc`, `nombre`, `password`) VALUES
(1, 'usuario', ''),
(2, 'registrado', ''),
(3, 'admin', '');

-- --------------------------------------------------------

--
-- Table structure for table `tours`
--

CREATE TABLE `tours` (
  `idTour` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `fecha_inicio` date NOT NULL,
  `fecha_fin` date NOT NULL,
  `foto` varchar(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tours`
--

INSERT INTO `tours` (`idTour`, `nombre`, `fecha_inicio`, `fecha_fin`, `foto`) VALUES
(12, 'Weekend in Rome', '2019-12-19', '2019-12-27', 'roma.jpg'),
(13, 'Magic Poland', '2019-12-22', '2019-12-25', 'poland.jpg'),
(14, 'Greek Island Hopper', '2018-04-08', '2018-04-08', 'greek.jpg'),
(15, 'Classic Europe', '2020-03-11', '2020-03-14', 'wro.jpg'),
(16, 'Balkan Highlights', '2020-01-20', '2020-01-27', 'balcan.jpg'),
(17, 'Europe at Leisure', '2020-04-12', '2020-04-18', 'cop.jpg'),
(18, 'Essential Europe', '2020-02-12', '2019-12-14', 'uk.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `usuario`
--

CREATE TABLE `usuario` (
  `idUsuario` int(11) NOT NULL,
  `usuario` varchar(50) CHARACTER SET utf8 NOT NULL,
  `email` varchar(50) CHARACTER SET utf8 NOT NULL,
  `password` varchar(50) CHARACTER SET utf8 NOT NULL,
  `nombre` varchar(50) CHARACTER SET utf8 NOT NULL,
  `apellidos` varchar(50) CHARACTER SET utf8 NOT NULL,
  `idAcc` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usuario`
--

INSERT INTO `usuario` (`idUsuario`, `usuario`, `email`, `password`, `nombre`, `apellidos`, `idAcc`) VALUES
(6, 'admin', 'admin@gmail.com', 'admin', 'admin', 'admin', 3),
(10, 'usuario', 'usuario@gmail.com', 'password', 'usuario', 'usuario', 2),
(12, 'usr', 'dassd@sdc.com', 'con', 'nom', 'ape', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `acceso`
--
ALTER TABLE `acceso`
  ADD PRIMARY KEY (`idAcc`);

--
-- Indexes for table `tours`
--
ALTER TABLE `tours`
  ADD PRIMARY KEY (`idTour`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`idUsuario`),
  ADD KEY `idAcc` (`idAcc`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tours`
--
ALTER TABLE `tours`
  MODIFY `idTour` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5269454;

--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `idUsuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `usuario_ibfk_1` FOREIGN KEY (`idAcc`) REFERENCES `acceso` (`idAcc`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
