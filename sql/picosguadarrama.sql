-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 24, 2021 at 11:55 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `picosguadarrama`
--

-- --------------------------------------------------------

--
-- Table structure for table `rutas`
--

CREATE TABLE `rutas` (
  `id` int(11) NOT NULL,
  `nombre` varchar(60) COLLATE utf8_bin NOT NULL,
  `descripcion` varchar(60) COLLATE utf8_bin NOT NULL,
  `portada` varchar(255) COLLATE utf8_bin NOT NULL,
  `gpx` varchar(255) COLLATE utf8_bin NOT NULL,
  `zona` varchar(25) COLLATE utf8_bin NOT NULL,
  `contenido` mediumtext COLLATE utf8_bin NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `rutas`
--

INSERT INTO `rutas` (`id`, `nombre`, `descripcion`, `portada`, `gpx`, `zona`, `contenido`, `date`) VALUES
(1, 'Nombre de ruta de prueba', 'Breve descripción de una ruta de ejemplo.', 'portada_xs.jpeg', '[S._de_Malagón]._Cabeza_Lijar_-_C._Salamanca.gpx', 'prueba', '<h1>Ruta por ....</h1>\r\n<p>Esto es un ejemplo de lo que&nbsp;<strong>se puede hacer</strong> con&nbsp;<em>esto</em>.</p>', '2021-05-23'),
(2, 'La Pedriza', 'Esta ruta la realizamos, principalmente, siguiendo la Senda ', 'portada_lg.jpeg', '[S._de_Malagón]._Cabeza_Lijar_-_C._Salamanca.gpx', 'pedriza', '<p>Esta ruta la realizamos, principalmente, siguiendo la Senda Maeso; que empieza en el pueblo y acaba en la Pedriza anterior.</p>', '2021-05-24'),
(3, 'Machotas por la Silla de Felipe II', 'Subida desde la Silla de Felipe II hasta el collado entre ca', 'portada_lg.jpeg', '[Guadalix_de_la_Sierra]._C._de_San_Pedro.gpx', 'malagon', '<p>Subida desde la Silla de Felipe II hasta el collado entre cabezas, de ah&iacute; a la machota baja y luego a la alta.</p>', '2021-05-24');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(255) COLLATE utf8_bin NOT NULL,
  `password` varchar(255) COLLATE utf8_bin NOT NULL,
  `rol` varchar(50) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `rol`) VALUES
(1, 'admin@admin.com', 'admin', 'admin'),
(2, 'guillesanz@gmail.com', 'guillesanz', 'admin'),
(3, 'prueba@gmail.com', '1234', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `zonas`
--

CREATE TABLE `zonas` (
  `id` int(11) NOT NULL,
  `acronimo` varchar(25) COLLATE utf8_bin NOT NULL,
  `nombre` varchar(60) COLLATE utf8_bin NOT NULL,
  `descripcion` text COLLATE utf8_bin NOT NULL,
  `portada` varchar(255) COLLATE utf8_bin NOT NULL,
  `contenido` mediumtext COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `zonas`
--

INSERT INTO `zonas` (`id`, `acronimo`, `nombre`, `descripcion`, `portada`, `contenido`) VALUES
(1, 'prueba', 'Título de prueba.', 'Breve descripción de la zona de prueba.', 'sierra_pedriza_lg.jpeg', '<p>Esto es una prueba para el contenido.</p>\r\n<h2>Contiene un t&iacute;tulo</h2>\r\n<p>Un p&aacute;rrafo con un texto en&nbsp;<strong>negrita.</strong></p>\r\n<p>Y una im&aacute;gen random:</p>\r\n<p><img src=\"https://moodle.upm.es/img/logo-UPM-cuarto.png\" alt=\"\" width=\"137\" height=\"131\" /></p>'),
(2, 'malagon', 'Sierra de Malagón', 'La Sierra de Malagón se posiciona al sur del puerto de Guadarrama y presenta una gran cantidad de vegetación. Toda esta zona contiene una gran cantidad de elementos históricos, como varios bunkers de la Guerra Civil Española o la Silla de Felipe II.', 'sierra_malagon_lg.jpeg', '<p>La Sierra de Malag&oacute;n se posiciona al sur del puerto de Guadarrama y presenta una gran cantidad de vegetaci&oacute;n. Toda esta zona contiene una gran cantidad de elementos hist&oacute;ricos, como varios bunkers de la Guerra Civil Espa&ntilde;ola o la Silla de Felipe II.</p>'),
(3, 'pedriza', 'La Pedriza', 'La Pedriza es una zona casi únicamente rocosa, preciosa por su variedad de formas de piedras y considerada un parque de atracciones para los escaladores.', 'sierra_pedriza_lg.jpeg', '<p>La Pedriza es una zona casi &uacute;nicamente rocosa, preciosa por su variedad de formas de piedras y considerada un parque de atracciones para los escaladores.</p>'),
(4, 'cotos', 'Cotos', ' La zona que contiene el pico más alto de la Sierra de Guadarrama: Peñalara. Una zona muy variada, con mucho bosque, pero también roca. Una zona que hay que visitar sí o sí.', 'sierra_cotos_lg.jpeg', '<p>La zona que contiene el pico m&aacute;s alto de la Sierra de Guadarrama: Pe&ntilde;alara. Una zona muy variada, con mucho bosque, pero tambi&eacute;n roca. Una zona que hay que visitar s&iacute; o s&iacute;.</p>');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `rutas`
--
ALTER TABLE `rutas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `zonas`
--
ALTER TABLE `zonas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `rutas`
--
ALTER TABLE `rutas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `zonas`
--
ALTER TABLE `zonas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
