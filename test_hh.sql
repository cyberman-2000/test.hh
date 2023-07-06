-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июл 06 2023 г., 21:18
-- Версия сервера: 8.0.30
-- Версия PHP: 8.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `test_hh`
--

-- --------------------------------------------------------

--
-- Структура таблицы `acsessuares`
--

CREATE TABLE `acsessuares` (
  `id` int NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `price` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `acsessuares`
--

INSERT INTO `acsessuares` (`id`, `name`, `price`) VALUES
(1, 'A1', 350),
(2, 'A2', 400),
(3, 'A3', 450),
(4, 'A4', 600),
(5, 'A5', 800);

-- --------------------------------------------------------

--
-- Структура таблицы `border`
--

CREATE TABLE `border` (
  `id` int NOT NULL,
  `color` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `rgb` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `price` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `border`
--

INSERT INTO `border` (`id`, `color`, `rgb`, `price`) VALUES
(1, 'красный', '#ff0000', 100),
(2, 'зелёный', '#00ff00', 150),
(3, 'синий', '#0000ff', 200),
(4, 'жёлтый', '#ffff00', 50);

-- --------------------------------------------------------

--
-- Структура таблицы `door`
--

CREATE TABLE `door` (
  `id` int NOT NULL,
  `color` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `rgb` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `price` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `door`
--

INSERT INTO `door` (`id`, `color`, `rgb`, `price`) VALUES
(1, 'красный', '#ff0000', 800),
(2, 'зелёный', '#00ff00', 950),
(3, 'синий', '#0000ff', 1000),
(4, 'жёлтый', '#ffff00', 1500);

-- --------------------------------------------------------

--
-- Структура таблицы `handle`
--

CREATE TABLE `handle` (
  `id` int NOT NULL,
  `color` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `rgb` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `price` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `handle`
--

INSERT INTO `handle` (`id`, `color`, `rgb`, `price`) VALUES
(1, 'красный', '#ff0000', 200),
(2, 'зелёный', '#00ff00', 250),
(3, 'синий', '#0000ff', 300),
(4, 'жёлтый', '#ffff00', 125);

-- --------------------------------------------------------

--
-- Структура таблицы `height`
--

CREATE TABLE `height` (
  `id` int NOT NULL,
  `size` int NOT NULL,
  `price` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `height`
--

INSERT INTO `height` (`id`, `size`, `price`) VALUES
(1, 1800, 1500),
(2, 1825, 1550),
(3, 1850, 1600),
(4, 1875, 1650),
(5, 1900, 1700),
(6, 1925, 1750),
(7, 1950, 1800),
(8, 1975, 1850),
(9, 2000, 1900);

-- --------------------------------------------------------

--
-- Структура таблицы `orders`
--

CREATE TABLE `orders` (
  `id` int NOT NULL,
  `border_color` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `door_color` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `handle_color` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `width` int NOT NULL,
  `height` int NOT NULL,
  `side` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `acsessuares` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `total_price` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `visualization` text COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `orders`
--

INSERT INTO `orders` (`id`, `border_color`, `door_color`, `handle_color`, `width`, `height`, `side`, `acsessuares`, `total_price`, `created_at`, `updated_at`, `visualization`) VALUES
(2, 'красный', 'зелёный', 'красный', 1000, 2000, 'right', 'A2,A5,', 5250, '2023-07-06 07:09:19', '2023-07-06 07:09:19', '<div class=\"col-6 d-flex for_viz\">                <div class=\"door1 colour_bor mx-2\">                    <div class=\"handle\"></div>                </div>                <div class=\"door2 colour_bor\">                    <div class=\"handle\"></div>                </div>            </div>'),
(3, 'синий', 'красный', 'зелёный', 800, 1900, 'left', 'A1,A2,', 4200, '2023-07-06 07:11:55', '2023-07-06 07:11:55', '<div class=\"col-6 d-flex for_viz\">                <div class=\"door1 colour_bor mx-2\">                    <div class=\"handle\"></div>                </div>                <div class=\"door2 colour_bor\">                    <div class=\"handle\"></div>                </div>            </div>'),
(5, 'зелёный', 'красный', 'жёлтый', 950, 1975, 'left', 'A1,A4,', 4675, '2023-07-06 15:04:55', '2023-07-06 15:04:55', '<div class=\"col-6 d-flex for_viz\">\r\n               <div class=\"door1 colour_bor mx-2\" style=\"border-color: rgb(0, 255, 0); background: rgb(255, 0, 0);\">\r\n                   <div class=\"handle\" style=\"background: rgb(255, 255, 0);\"></div>\r\n               </div>\r\n               <div class=\"door2 colour_bor\" style=\"border-color: rgb(0, 255, 0); background: rgb(255, 0, 0);\">\r\n                   <div class=\"handle\" style=\"background: rgb(255, 255, 0);\"></div>\r\n               </div>\r\n           </div>');

-- --------------------------------------------------------

--
-- Структура таблицы `width`
--

CREATE TABLE `width` (
  `id` int NOT NULL,
  `size` int NOT NULL,
  `price` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `width`
--

INSERT INTO `width` (`id`, `size`, `price`) VALUES
(1, 800, 500),
(2, 825, 550),
(3, 850, 600),
(4, 875, 650),
(5, 900, 700),
(6, 925, 750),
(7, 950, 800),
(8, 975, 850),
(9, 1000, 900);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `acsessuares`
--
ALTER TABLE `acsessuares`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `border`
--
ALTER TABLE `border`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `door`
--
ALTER TABLE `door`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `handle`
--
ALTER TABLE `handle`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `height`
--
ALTER TABLE `height`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `width`
--
ALTER TABLE `width`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `acsessuares`
--
ALTER TABLE `acsessuares`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `border`
--
ALTER TABLE `border`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `door`
--
ALTER TABLE `door`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `handle`
--
ALTER TABLE `handle`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `height`
--
ALTER TABLE `height`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT для таблицы `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `width`
--
ALTER TABLE `width`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
