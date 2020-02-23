-- phpMyAdmin SQL Dump
-- version 4.7.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Фев 12 2020 г., 14:18
-- Версия сервера: 5.6.37
-- Версия PHP: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `mirea`
--

-- --------------------------------------------------------

--
-- Структура таблицы `articl`
--

CREATE TABLE `articl` (
  `id` int(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `image` varchar(255) NOT NULL,
  `theme` int(20) NOT NULL,
  `clock` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `articl`
--

INSERT INTO `articl` (`id`, `title`, `image`, `theme`, `clock`) VALUES
(1, 'empty', '', 0, 0),
(2, 'Курс по Java', 'Java.jpeg', 9, 18),
(3, 'Курс по Питону', 'Python.jpeg', 9, 18),
(4, 'Курс по С++', 'c.jpeg', 9, 18),
(5, 'Курс по Физике', 'Fizika.jpeg', 9, 18),
(6, 'Курс по Информатике', 'Inf.jpeg', 9, 18),
(7, 'Курс по Математике', 'Math.jpeg', 9, 18);

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

CREATE TABLE `user` (
  `id` int(255) NOT NULL,
  `login` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `avatar` varchar(150) NOT NULL,
  `name` varchar(50) NOT NULL,
  `surname` varchar(79) NOT NULL,
  `age` int(99) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`id`, `login`, `password`, `avatar`, `name`, `surname`, `age`) VALUES
(0, 'empty', 'empty', '', 'empty', 'empty', 0),
(1, 'vasif', '$2y$10$fuckyouallfuckyouall1u8zrHHpDy3cKRchEFmf6MjxwU0bWs0T.', 'k8ZAgaXA8AQ.jpg', 'Васиф', 'Аббасов', 19),
(2, 'ilchi', '$2y$10$fuckyouallfuckyouall1uVdqi3rVUJVem062WMiwrkpolktRal4a', 'ilchi.png', 'Илья', 'Соловьев', 19),
(3, 'david', '$2y$10$fuckyouallfuckyouall1uxmOzi1aod5I.B9nlww2TWgIEHzwLFHy', '0lnTmyOo2b8.jpg', 'Давид', 'Сигалов', 19);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `articl`
--
ALTER TABLE `articl`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `articl`
--
ALTER TABLE `articl`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT для таблицы `user`
--
ALTER TABLE `user`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
