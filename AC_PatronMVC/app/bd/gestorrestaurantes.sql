-- phpMyAdmin SQL Dump
-- version 5.2.3
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 07-01-2026 a las 18:25:10
-- Versión del servidor: 8.0.43
-- Versión de PHP: 8.2.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `gestorrestaurantes`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `CodCat` int NOT NULL,
  `Nombre` varchar(45) COLLATE utf8mb4_general_ci NOT NULL,
  `Descripcion` varchar(200) COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`CodCat`, `Nombre`, `Descripcion`) VALUES
(1, 'Bebidas con alcohol', 'Bebidas que contienen alcohol como vino, cerveza o licores'),
(2, 'Bebidas sin alcohol', 'Bebidas no alcohólicas como refrescos, zumos o agua'),
(3, 'Comida', 'Productos sólidos destinados al consumo alimentario');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedidos`
--

CREATE TABLE `pedidos` (
  `CodPed` int NOT NULL,
  `Fecha` date DEFAULT NULL,
  `Enviado` tinyint(1) NOT NULL DEFAULT '0',
  `Restaurante` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `pedidos`
--

INSERT INTO `pedidos` (`CodPed`, `Fecha`, `Enviado`, `Restaurante`) VALUES
(3, '2026-01-07', 0, 1),
(4, '2026-01-07', 0, 1),
(5, '2026-01-07', 0, 1),
(6, '2026-01-07', 0, 1),
(7, '2026-01-07', 0, 1),
(8, '2026-01-07', 0, 1),
(9, '2026-01-07', 0, 1),
(10, '2026-01-07', 0, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedidosproductos`
--

CREATE TABLE `pedidosproductos` (
  `CodPedProd` int NOT NULL,
  `Pedido` int DEFAULT NULL,
  `Producto` int DEFAULT NULL,
  `Unidades` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `pedidosproductos`
--

INSERT INTO `pedidosproductos` (`CodPedProd`, `Pedido`, `Producto`, `Unidades`) VALUES
(1, 3, 4, 11),
(2, 3, 1, 5),
(3, 3, 2, 5),
(4, 4, 4, 11),
(5, 4, 1, 5),
(6, 4, 2, 5),
(7, 5, 4, 11),
(8, 5, 1, 5),
(9, 5, 2, 5),
(10, 6, 3, 6),
(11, 6, 4, 6),
(12, 8, 3, 8),
(13, 8, 4, 11),
(14, 9, 1, 3),
(15, 9, 2, 5),
(16, 10, 3, 7),
(17, 10, 4, 7);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `CodProd` int NOT NULL,
  `Nombre` varchar(45) COLLATE utf8mb4_general_ci NOT NULL,
  `Descripcion` varchar(200) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `Peso` float DEFAULT NULL,
  `Stock` int DEFAULT NULL,
  `Categoria` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`CodProd`, `Nombre`, `Descripcion`, `Peso`, `Stock`, `Categoria`) VALUES
(1, 'Cerveza artesanal', 'Cerveza rubia elaborada de forma artesanal', 0.5, 120, 1),
(2, 'Vino tinto reserva', 'Vino tinto envejecido en barrica de roble', 0.75, 60, 1),
(3, 'Agua mineral', 'Agua mineral natural sin gas', 0.5, 200, 2),
(4, 'Zumo de naranja', 'Zumo de naranja 100% exprimido', 1, 80, 2),
(5, 'Hamburguesa clásica', 'Hamburguesa de ternera con pan y acompañamientos', 0.3, 50, 3),
(6, 'Ensalada mixta', 'Ensalada fresca con lechuga, tomate y cebolla', 0.25, 70, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `restaurantes`
--

CREATE TABLE `restaurantes` (
  `CodRes` int NOT NULL,
  `Correo` varchar(90) COLLATE utf8mb4_general_ci NOT NULL,
  `Clave` varchar(45) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `Pais` varchar(45) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `CP` int DEFAULT NULL,
  `Ciudad` varchar(45) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `Direccion` varchar(200) COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `restaurantes`
--

INSERT INTO `restaurantes` (`CodRes`, `Correo`, `Clave`, `Pais`, `CP`, `Ciudad`, `Direccion`) VALUES
(1, 'contacto@restauranteejemplo.com', 'claveSegura123', 'España', 28001, 'Madrid', 'Calle Gran Vía 25');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`CodCat`),
  ADD UNIQUE KEY `Nombre` (`Nombre`);

--
-- Indices de la tabla `pedidos`
--
ALTER TABLE `pedidos`
  ADD PRIMARY KEY (`CodPed`),
  ADD KEY `Restaurante` (`Restaurante`);

--
-- Indices de la tabla `pedidosproductos`
--
ALTER TABLE `pedidosproductos`
  ADD PRIMARY KEY (`CodPedProd`),
  ADD KEY `Pedido` (`Pedido`),
  ADD KEY `Producto` (`Producto`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`CodProd`),
  ADD UNIQUE KEY `Nombre` (`Nombre`),
  ADD KEY `Categoria` (`Categoria`);

--
-- Indices de la tabla `restaurantes`
--
ALTER TABLE `restaurantes`
  ADD PRIMARY KEY (`CodRes`),
  ADD UNIQUE KEY `Correo` (`Correo`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `CodCat` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `pedidos`
--
ALTER TABLE `pedidos`
  MODIFY `CodPed` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `pedidosproductos`
--
ALTER TABLE `pedidosproductos`
  MODIFY `CodPedProd` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `CodProd` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `restaurantes`
--
ALTER TABLE `restaurantes`
  MODIFY `CodRes` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `pedidos`
--
ALTER TABLE `pedidos`
  ADD CONSTRAINT `pedidos_ibfk_1` FOREIGN KEY (`Restaurante`) REFERENCES `restaurantes` (`CodRes`);

--
-- Filtros para la tabla `pedidosproductos`
--
ALTER TABLE `pedidosproductos`
  ADD CONSTRAINT `pedidosproductos_ibfk_1` FOREIGN KEY (`Pedido`) REFERENCES `pedidos` (`CodPed`),
  ADD CONSTRAINT `pedidosproductos_ibfk_2` FOREIGN KEY (`Producto`) REFERENCES `productos` (`CodProd`);

--
-- Filtros para la tabla `productos`
--
ALTER TABLE `productos`
  ADD CONSTRAINT `productos_ibfk_1` FOREIGN KEY (`Categoria`) REFERENCES `categorias` (`CodCat`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
