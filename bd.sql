-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Хост: localhost:8889
-- Время создания: Янв 25 2019 г., 09:58
-- Версия сервера: 5.7.23
-- Версия PHP: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- База данных: `WD04-filmoteka-Kozhan`
--

-- --------------------------------------------------------

--
-- Структура таблицы `films`
--

CREATE TABLE `films` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `type` text NOT NULL,
  `year` int(11) NOT NULL,
  `description` text NOT NULL,
  `photo` char(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `films`
--

INSERT INTO `films` (`id`, `name`, `type`, `year`, `description`, `photo`) VALUES
(62, 'Человек-паук 2', 'Комедия', 2002, '', ''),
(64, 'Железный человек', 'Комедия', 2002, '', ''),
(65, 'Тор', 'Ужасы', 2000, '', ''),
(68, 'Тор 2: Другие миры', 'Комедия', 2002, '', ''),
(69, 'Тор: Рагнарек', 'Комедия', 2017, '', ''),
(71, 'Техасс', 'Ужасы', 2012, 'Резня бензопилой', ''),
(72, 'Мстители: Война бесконечности', 'Боевик', 2018, '', '');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `films`
--
ALTER TABLE `films`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `films`
--
ALTER TABLE `films`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;
