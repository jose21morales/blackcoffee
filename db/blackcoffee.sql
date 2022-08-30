-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 21-06-2022 a las 05:02:02
-- Versión del servidor: 10.4.22-MariaDB
-- Versión de PHP: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `blackcoffee`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `about`
--

CREATE TABLE `about` (
  `id` int(11) NOT NULL,
  `name` varchar(300) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `img` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `about`
--

INSERT INTO `about` (`id`, `name`, `description`, `img`) VALUES
(1, 'juan ramirez', 'El señor Juan Ramirez fundó junto con sus colegas esta empresa en el año de 2018 contando con más de 5 años de experiencia en el sector.\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco.', 'cofundador1.jpg'),
(2, 'sofia hernandez', 'Cofundadora de esta cafeteria la señora Sofia Hernandez la fundó junto con sus colegas cuenta con más de 6 años de experiencia en el sector.\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco.', 'cofundador2.jpg'),
(3, 'jaime alvarez', 'El chef Jaime Alvarez es cofundador de esta empresa y actualmente creador de los nuevos sabores de nuestros postres, cuenta con 5 años de experiencia.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco.', 'cofundador3.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `banner`
--

CREATE TABLE `banner` (
  `id` int(11) NOT NULL,
  `title` varchar(300) DEFAULT NULL,
  `txt` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `banner`
--

INSERT INTO `banner` (`id`, `title`, `txt`) VALUES
(1, 'Te damos una cordial bienvenida a nuestro sitio web', 'Nuestra cafetería es una de las mejores de la región así que si decides visitarnos no te arrepentirás, contaras con un lugar elegante perfecto para pasar una tarde con tus amigos o familiares.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `banner_two`
--

CREATE TABLE `banner_two` (
  `id` int(11) NOT NULL,
  `title` varchar(300) COLLATE utf8_spanish_ci NOT NULL,
  `txt` text COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `banner_two`
--

INSERT INTO `banner_two` (`id`, `title`, `txt`) VALUES
(4, 'Tendrás un servicio de calidad', 'Disfruta de la comodidad de tomar un buen café mientras convives con tus amigos');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cakes`
--

CREATE TABLE `cakes` (
  `id` int(11) NOT NULL,
  `title` varchar(300) DEFAULT NULL,
  `price` varchar(300) DEFAULT NULL,
  `img` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `cakes`
--

INSERT INTO `cakes` (`id`, `title`, `price`, `img`) VALUES
(1, 'alfajores', '40', 'cake1.png'),
(2, 'mousses', '60', 'cake2.png'),
(3, 'crepes', '85', 'cake3.png'),
(4, 'panna cotta', '45', 'cake4.png'),
(6, 'postres de nata de crema', '55', 'cake5.png'),
(7, 'tiramisú', '48', 'cake6.png'),
(8, 'pastel selva negra', '33', 'cake7.png'),
(9, 'brownies', '30', 'cake8.png'),
(10, 'galletas de chips', '20', 'cake9.png'),
(11, 'creme brulee', '80', 'cake10.png'),
(12, 'flan', '35', 'cake11.png'),
(13, 'tarta de limon', '250', 'cake12.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `coffee`
--

CREATE TABLE `coffee` (
  `id` int(11) NOT NULL,
  `title` varchar(300) DEFAULT NULL,
  `price` varchar(300) DEFAULT NULL,
  `img` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `coffee`
--

INSERT INTO `coffee` (`id`, `title`, `price`, `img`) VALUES
(1, 'expresso', '40', 'coffee1.png'),
(2, 'macchiato', '30', 'coffee2.png'),
(3, 'americano', '35', 'coffee3.png'),
(11, 'ristretto', '35', 'coffee4.png'),
(12, 'lungo/largo', '40', 'coffee5.png'),
(13, 'carajillo', '45', 'coffee6.png'),
(15, 'café con leche', '45', 'coffee7.png'),
(16, 'café bombón', '30', 'coffee8.png'),
(17, 'capuchino', '28', 'coffee9.png'),
(18, 'mocca', '60', 'coffee10.png'),
(19, 'café irlandés', '36', 'coffee11.png'),
(20, 'café vienés', '32', 'coffee12.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contact_us`
--

CREATE TABLE `contact_us` (
  `id` int(11) NOT NULL,
  `title` varchar(300) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `phone` varchar(300) DEFAULT NULL,
  `whatsapp` varchar(300) DEFAULT NULL,
  `mail` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `contact_us`
--

INSERT INTO `contact_us` (`id`, `title`, `description`, `phone`, `whatsapp`, `mail`) VALUES
(1, 'Información de contacto', 'Aqui encontraras toda la información necesaria para ponerte en contacto con nosotros y resolver todas tus dudas.  ', '52 962 999-99-99', '52 962 459-09-90', 'contact@blackcoffee.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `experience`
--

CREATE TABLE `experience` (
  `id` int(11) NOT NULL,
  `title` varchar(300) DEFAULT NULL,
  `txt` text NOT NULL,
  `img` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `experience`
--

INSERT INTO `experience` (`id`, `title`, `txt`, `img`) VALUES
(1, 'experiencia', 'Abrimos hace 30 años y desde entonces hemos mejorado en la calidad de nuestros servicios, tenemos personal altamente capacitados en el area dez preparado de café y postres.     ', 'experience.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `footer`
--

CREATE TABLE `footer` (
  `id` int(11) NOT NULL,
  `description` text DEFAULT NULL,
  `place` varchar(300) DEFAULT NULL,
  `phone` varchar(300) DEFAULT NULL,
  `mail` varchar(300) DEFAULT NULL,
  `facebook` varchar(300) DEFAULT NULL,
  `instagram` varchar(300) DEFAULT NULL,
  `twitter` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `footer`
--

INSERT INTO `footer` (`id`, `description`, `place`, `phone`, `mail`, `facebook`, `instagram`, `twitter`) VALUES
(1, 'Nuestra cafetería es una de las más conocidas y aclamadas de la región, nos distinguimos por preparar nuestros cafés con los más altos estándares de calidad teniendo como objetivo la satisfacción de nuestros clientes. Contamos con un excelente ambiente climatizado que dará la sensación de estar en casa.', 'Cacahoatan, Chiapas      ', 'Teléfono: 962-999-999', 'info@blackcoffee.com', 'https://www.facebook.com ', 'https://www.instagram.com    ', 'https://www.twitter.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `gallery`
--

CREATE TABLE `gallery` (
  `id` bigint(20) NOT NULL,
  `name` varchar(300) NOT NULL,
  `img` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `gallery`
--

INSERT INTO `gallery` (`id`, `name`, `img`) VALUES
(1, 'Imagen 1', 'gallery01.jpg'),
(2, 'Imagen 2', 'gallery02.jpg'),
(3, 'Imagen 3', 'gallery03.jpg'),
(4, 'Imagen 4', 'gallery04.jpg'),
(5, 'Imagen 5', 'gallery05.jpg'),
(6, 'Imagen 6', 'gallery06.jpg'),
(7, 'Imagen 7', 'gallery07.jpg'),
(8, 'Imagen 8', 'gallery08.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `home_delivery`
--

CREATE TABLE `home_delivery` (
  `id` int(11) NOT NULL,
  `first_name` varchar(300) COLLATE utf8_spanish_ci NOT NULL,
  `last_name` varchar(300) COLLATE utf8_spanish_ci NOT NULL,
  `address` varchar(300) COLLATE utf8_spanish_ci NOT NULL,
  `city` varchar(300) COLLATE utf8_spanish_ci NOT NULL,
  `phone` varchar(300) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `home_delivery`
--

INSERT INTO `home_delivery` (`id`, `first_name`, `last_name`, `address`, `city`, `phone`) VALUES
(1, '', '', 'j', 'j', 'll'),
(2, 'dd', 'dd', 'j', 'j', 'll'),
(3, 'dd', 'dd', 'j', 'j', 'll'),
(4, 'dd', 'j', 'j', 'j', 'll'),
(5, 'jose', 'morales', 'my house', 'cacahotan', '322423323'),
(6, 'jose', 'jose', 'jose', 'sdfs', 'dsf'),
(7, 'jose', 'morales', 'may two', 'cacahotan', '22038423'),
(8, 'jose', 'morales', 'my house', 'cacahotan', 'll'),
(9, 'jose', 'morales', 'my house', 'cacahotan', 'll');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personal`
--

CREATE TABLE `personal` (
  `id` int(11) NOT NULL,
  `name` varchar(300) DEFAULT NULL,
  `age` varchar(300) DEFAULT NULL,
  `img` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `personal`
--

INSERT INTO `personal` (`id`, `name`, `age`, `img`) VALUES
(2, 'homero simpson', '38', 'chef1.jpg'),
(4, 'kyle smith', '28', 'chef2.jpeg'),
(5, 'osvaldo ramos', '31', 'chef3.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reservation`
--

CREATE TABLE `reservation` (
  `id` int(11) NOT NULL,
  `first_name` varchar(300) COLLATE utf8_spanish_ci NOT NULL,
  `last_name` varchar(300) COLLATE utf8_spanish_ci NOT NULL,
  `tables` varchar(300) COLLATE utf8_spanish_ci NOT NULL,
  `r_date` varchar(300) COLLATE utf8_spanish_ci NOT NULL,
  `r_time` varchar(300) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `reservation`
--

INSERT INTO `reservation` (`id`, `first_name`, `last_name`, `tables`, `r_date`, `r_time`) VALUES
(5, 'jose', 'morales', '2', '4-Marzo-2022', '02:02:PM'),
(6, 'juan', 'fuentes', '4', '10-Febrero-2023', '03:30:PM'),
(7, 'pedro', 'augusto', '3', '11-Mayo-2022', '04:36:PM'),
(8, 'jose', 'morales', '2', '2-Febrero-2020', '01:01:PM'),
(9, 'jose', 'morales', '2', '2-Febrero-2020', '01:01:PM');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `title` varchar(300) DEFAULT NULL,
  `txt` text DEFAULT NULL,
  `img` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `services`
--

INSERT INTO `services` (`id`, `title`, `txt`, `img`) VALUES
(1, 'cafeteria', 'Tenemos diferentes tipos de café incluidos capuchino, café negro entre otros, seguro hay uno para ti.', 'internet.jpg'),
(2, 'postres', 'Siempre podras acompañar tu taza de café con algunos de nuestros deliciosos postres.', 'cakes.jpg'),
(7, 'internet gratis', 'Contamos con internet gratuito ideal para hacer tus trabajos disfrutando de una deliciosa tasa de café al gusto.', 'cafeteria.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `name` varchar(300) NOT NULL,
  `usuario` varchar(300) DEFAULT NULL,
  `password` varchar(300) DEFAULT NULL,
  `mail` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `name`, `usuario`, `password`, `mail`) VALUES
(1, 'josé', 'admin', '$2y$12$71oou.61Q84gKL/wKSkGleTZS/ENneu5YjIbJi6CLkTX/Idt5joSK', 'jose33.cecilio@gmail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `welcome`
--

CREATE TABLE `welcome` (
  `id` int(11) NOT NULL,
  `title` varchar(300) DEFAULT NULL,
  `txt` text NOT NULL,
  `img` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `welcome`
--

INSERT INTO `welcome` (`id`, `title`, `txt`, `img`) VALUES
(1, 'servicios', 'Contamos con un grandioso establecimiento climatizado y con internet gratis ideal para venir a hacer tus trabajos mientras disfrutas de una deliciosa taza de café al gusto.       ', 'services.jpg');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `banner_two`
--
ALTER TABLE `banner_two`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `cakes`
--
ALTER TABLE `cakes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `coffee`
--
ALTER TABLE `coffee`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `experience`
--
ALTER TABLE `experience`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `footer`
--
ALTER TABLE `footer`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `home_delivery`
--
ALTER TABLE `home_delivery`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `personal`
--
ALTER TABLE `personal`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `welcome`
--
ALTER TABLE `welcome`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `about`
--
ALTER TABLE `about`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `banner`
--
ALTER TABLE `banner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `banner_two`
--
ALTER TABLE `banner_two`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `cakes`
--
ALTER TABLE `cakes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `coffee`
--
ALTER TABLE `coffee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de la tabla `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `experience`
--
ALTER TABLE `experience`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `footer`
--
ALTER TABLE `footer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de la tabla `home_delivery`
--
ALTER TABLE `home_delivery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `personal`
--
ALTER TABLE `personal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `reservation`
--
ALTER TABLE `reservation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `welcome`
--
ALTER TABLE `welcome`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
