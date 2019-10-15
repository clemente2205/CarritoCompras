-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 15, 2019 at 06:05 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tienda`
--

-- --------------------------------------------------------

--
-- Table structure for table `tblproductos`
--

CREATE TABLE `tblproductos` (
  `ID` int(11) NOT NULL,
  `Nombre` varchar(255) NOT NULL,
  `Precio` decimal(20,2) NOT NULL,
  `Descripcion` text NOT NULL,
  `Imagen` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblproductos`
--

INSERT INTO `tblproductos` (`ID`, `Nombre`, `Precio`, `Descripcion`, `Imagen`) VALUES
(1, 'Fire Emblem Three Houses', '1500.00', 'Decide el destino de un continente al borde de la guerra en Fire Emblem: Three Houses para Nintendo Switch. Lidera a los estudiantes de una de las tres prestigiosas casas a lo largo de su vida académica y guíalos en combates tácticos por turnos repletos de nuevos desafíos estratégicos.', 'https://cdn02.nintendo-europe.com/media/images/10_share_images/games_15/nintendo_switch_4/H2x1_NSwitch_FireEmblemThreeHouses_image1600w.jpg'),
(2, 'Days Gone', '1200.00', 'LA ESPERANZA NUNCA MUERE\r\nEn esencia, Days Gone es un juego sobre supervivientes y aquello que los hace humanos: la desesperación, la pérdida, la locura, la traición, la amistad, la hermandad, el arrepentimiento, el amor y la esperanza. Trata sobre cómo estas personas encuentran una razón para vivir incluso al enfrentarse con esas enormes tragedias. La esperanza nunca muere.', 'https://media.playstation.com/is/image/SCEA/days-gone-listing-thumb-01-ps4-us-10jan19?$facebook$'),
(3, 'Detroit Become Human', '999.99', 'se sitúa en un mundo futurista donde los androides, con auténtica apariencia humana, comienzan a desarrollar sentimientos y emociones humanas, lo que deriva en un problema para los humanos.', 'https://media.redadn.es/imagenes/detroit-become-human-ps4_310400.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblproductos`
--
ALTER TABLE `tblproductos`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tblproductos`
--
ALTER TABLE `tblproductos`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
