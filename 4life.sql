-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 25, 2015 at 12:53 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `4life`
--

-- --------------------------------------------------------

--
-- Table structure for table `pagos`
--

CREATE TABLE IF NOT EXISTS `pagos` (
  `pago_id` int(10) unsigned NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `pedido_id` int(10) unsigned NOT NULL,
  `n_cuenta` varchar(40) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `n_confirm` varchar(40) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `comentario` text COLLATE utf8mb4_spanish2_ci,
  `monto_pago` float(8,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pedidos`
--

CREATE TABLE IF NOT EXISTS `pedidos` (
`pedido_id` int(10) unsigned NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `producto_id` int(10) unsigned NOT NULL,
  `direccion` varchar(300) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `total` float(8,2) NOT NULL,
  `comentario` text COLLATE utf8mb4_spanish2_ci,
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

-- --------------------------------------------------------

--
-- Table structure for table `productos`
--

CREATE TABLE IF NOT EXISTS `productos` (
`producto_id` int(10) unsigned NOT NULL,
  `imagen` varchar(200) COLLATE utf8mb4_spanish2_ci DEFAULT NULL,
  `nombre` varchar(50) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `descripcion` varchar(200) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `precio` decimal(8,2) NOT NULL,
  `categoria` enum('Especiales','Línea Verde','Línea Roja') COLLATE utf8mb4_spanish2_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

--
-- Dumping data for table `productos`
--

INSERT INTO `productos` (`producto_id`, `imagen`, `nombre`, `descripcion`, `precio`, `categoria`) VALUES
(1, 'assets/img/tffactorplus.jpg', 'Transfer Factor Plus', 'Producto para fortalecer el sistema inmune', '60.00', 'Especiales'),
(2, 'assets/img/tffactor.jpg', 'Transfer Factor', 'Respalda tu sistema inmune ', '40.00', 'Especiales'),
(3, 'assets/img/tfactorrenuvo.jpg', 'Transfer Factor Renuvo', 'Respaldo para el manejo del estres y el envejecimiento saludable', '50.00', 'Especiales'),
(4, 'assets/img/choice50.jpg', 'Choice50', 'Antioxidante, respalda la salud y función de las células en el cuerpo', '20.00', 'Línea Verde'),
(5, 'assets/img/fibresystemplus.jpg', 'Fiber System Plus', 'Respaldo al sistema digestivo', '30.00', 'Línea Verde'),
(6, 'assets/img/phytolax.jpg', 'Phytolax', 'Respalda suavemente la función gastrointestinal saludable.', '30.00', 'Línea Verde'),
(7, 'assets/img/shapefast.jpg', 'Shape Fast Ultra', 'Controla el apetito y la ansiedad para mejorar tu peso', '50.00', 'Línea Roja'),
(8, 'assets/img/energy.jpg', 'Energy Go Stix', 'Te ayuda a tener energía todo el día', '40.00', 'Línea Roja'),
(9, 'assets/img/nutrastart.jpg', 'Nutra Start ', 'Bedida suplementaria o complementaria para subir o bajar de peso', '50.00', 'Línea Roja');

-- --------------------------------------------------------

--
-- Table structure for table `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
`user_id` int(10) unsigned NOT NULL,
  `perfil` enum('admin','cliente') COLLATE utf8mb4_spanish2_ci NOT NULL DEFAULT 'cliente',
  `email` varchar(100) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `clave` varchar(50) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `nombre` varchar(80) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `apellido` varchar(80) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `telefono` int(20) unsigned NOT NULL,
  `pais` varchar(20) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `estado` varchar(20) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `ciudad` varchar(20) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `direccion` varchar(200) COLLATE utf8mb4_spanish2_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

--
-- Dumping data for table `usuarios`
--

INSERT INTO `usuarios` (`user_id`, `perfil`, `email`, `clave`, `nombre`, `apellido`, `telefono`, `pais`, `estado`, `ciudad`, `direccion`) VALUES
(1, 'admin', 'josemanuelche93@gmail.com', '21044909', 'José', 'Méndez', 4246685399, 'Venezuela', 'Zulia', 'Maracaibo', 'lagomar Beach'),
(2, 'cliente', 'jose@hotmail.com', '123', 'jose', 'torres', 123, 'Venezuela', 'Zulia', 'Maracaibo', 'Lagomar '),
(3, 'cliente', 'chemi@hotmail.com', '123', 'Andres', 'torres', 123, 'Venezuela', 'Zulia', 'Maracaibo', 'Lagomar ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pagos`
--
ALTER TABLE `pagos`
 ADD PRIMARY KEY (`pago_id`), ADD KEY `user_id` (`user_id`), ADD KEY `pedido_id` (`pedido_id`);

--
-- Indexes for table `pedidos`
--
ALTER TABLE `pedidos`
 ADD PRIMARY KEY (`pedido_id`), ADD KEY `user_id` (`user_id`), ADD KEY `user_id_2` (`user_id`), ADD KEY `producto_id` (`producto_id`);

--
-- Indexes for table `productos`
--
ALTER TABLE `productos`
 ADD PRIMARY KEY (`producto_id`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
 ADD PRIMARY KEY (`user_id`), ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pedidos`
--
ALTER TABLE `pedidos`
MODIFY `pedido_id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `productos`
--
ALTER TABLE `productos`
MODIFY `producto_id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
MODIFY `user_id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `pagos`
--
ALTER TABLE `pagos`
ADD CONSTRAINT `fk_pagos_pedidos_pedido_id` FOREIGN KEY (`pedido_id`) REFERENCES `pedidos` (`pedido_id`) ON UPDATE CASCADE,
ADD CONSTRAINT `fk_pagos_usuarios_user_id` FOREIGN KEY (`user_id`) REFERENCES `usuarios` (`user_id`) ON UPDATE CASCADE;

--
-- Constraints for table `pedidos`
--
ALTER TABLE `pedidos`
ADD CONSTRAINT `fk_pedidos_productos_producto_id` FOREIGN KEY (`producto_id`) REFERENCES `productos` (`producto_id`) ON UPDATE CASCADE,
ADD CONSTRAINT `fk_pedidos_usuarios_user_id` FOREIGN KEY (`user_id`) REFERENCES `usuarios` (`user_id`) ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
