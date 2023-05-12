-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Янв 19 2023 г., 20:08
-- Версия сервера: 8.0.30
-- Версия PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `Meditacia`
--

-- --------------------------------------------------------

--
-- Структура таблицы `Clients`
--

CREATE TABLE IF NOT EXISTS `Clients` (
                           `ID_Clients` int NOT NULL,
                           `Name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

CREATE TABLE `ClientsCources` (
                                  `ID_ClientsCources` int NOT NULL,
                                  `ID_Clients` int NOT NULL,
                                  `ID_Cources` int NOT NULL,
                                  `Progress` int NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Дамп данных таблицы `ClientsCources`
--

INSERT INTO `ClientsCources` (`ID_ClientsCources`, `ID_Clients`, `ID_Cources`, `Progress`) VALUES
                                                                                               (1, 1, 1, 1),
                                                                                               (2, 2, 1, 0),
                                                                                               (3, 1, 4, 0);

-- --------------------------------------------------------

--
-- Структура таблицы `Cources`
--

CREATE TABLE `Cources` (
                           `ID_Cources` int NOT NULL,
                           `Name` varchar(100) NOT NULL,
                           `Description` text NOT NULL,
                           `CountLessons` int NOT NULL COMMENT 'Кол во уроков'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Дамп данных таблицы `Cources`
--

INSERT INTO `Cources` (`ID_Cources`, `Name`, `Description`, `CountLessons`) VALUES
                                                                                (1, 'Расслаб', 'йцу', 2),
                                                                                (4, 'Утренн', 'йцу', 2);

-- --------------------------------------------------------

--
-- Структура таблицы `Lessons`
--

CREATE TABLE `Lessons` (
                           `ID_Lessons` int NOT NULL,
                           `Name` varchar(200) NOT NULL,
                           `Description` text NOT NULL,
                           `PathMedia` varchar(200) NOT NULL,
                           `ID_Cources` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Дамп данных таблицы `Lessons`
--

INSERT INTO `Lessons` (`ID_Lessons`, `Name`, `Description`, `PathMedia`, `ID_Cources`) VALUES
                                                                                           (1, 'урок 1 расслаб', 'йцу', 'ячс', 1),
                                                                                           (2, 'урок 2 расслаб', 'йцу', 'ячс', 1),
                                                                                           (3, 'урок 1 утренн', 'йцу', 'ячс', 4),
                                                                                           (4, 'урок 2 утренн', 'йцу', 'ячс', 4);

-- --------------------------------------------------------

--
-- Структура таблицы `Pamyatka`
--

CREATE TABLE `Pamyatka` (
                            `id` int NOT NULL,
                            `nazvanie` text NOT NULL,
                            `opisanie` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Дамп данных таблицы `Pamyatka`
--

INSERT INTO `Pamyatka` (`id`, `nazvanie`, `opisanie`) VALUES
                                                          (1, 'ПЕРВОЕ', 'Для начала примите удобную для вас позу (она может быть какая угодно), закройте глаза и расслабьтесь'),
                                                          (2, 'ВТОРОЕ', 'Попытайтесь определить ваши чувства, что именно Вас тревожит?'),
                                                          (3, 'ТРЕТЬЕ', 'Найдите в каталоге именно ту медитацию, которая подходит Вам'),
                                                          (4, 'ЧЕТВЕРТОЕ', 'Включите медитацию, не спеша, начинайте вслушиваться в слова диктора и полностью расслабить своё тело...');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `Clients`
--
ALTER TABLE `Clients`
    ADD PRIMARY KEY (`ID_Clients`);

--
-- Индексы таблицы `ClientsCources`
--
ALTER TABLE `ClientsCources`
    ADD PRIMARY KEY (`ID_ClientsCources`),
  ADD KEY `ID_Cources` (`ID_Cources`),
  ADD KEY `ID_Clients` (`ID_Clients`);

--
-- Индексы таблицы `Cources`
--
ALTER TABLE `Cources`
    ADD PRIMARY KEY (`ID_Cources`);

--
-- Индексы таблицы `Lessons`
--
ALTER TABLE `Lessons`
    ADD PRIMARY KEY (`ID_Lessons`),
  ADD KEY `ID_Cources` (`ID_Cources`);

--
-- Индексы таблицы `Pamyatka`
--
ALTER TABLE `Pamyatka`
    ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `Clients`
--
ALTER TABLE `Clients`
    MODIFY `ID_Clients` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `ClientsCources`
--
ALTER TABLE `ClientsCources`
    MODIFY `ID_ClientsCources` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `Cources`
--
ALTER TABLE `Cources`
    MODIFY `ID_Cources` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `Lessons`
--
ALTER TABLE `Lessons`
    MODIFY `ID_Lessons` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `Pamyatka`
--
ALTER TABLE `Pamyatka`
    MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `ClientsCources`
--
ALTER TABLE `ClientsCources`
    ADD CONSTRAINT `clientscources_ibfk_1` FOREIGN KEY (`ID_Cources`) REFERENCES `Cources` (`ID_Cources`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `clientscources_ibfk_2` FOREIGN KEY (`ID_Clients`) REFERENCES `Clients` (`ID_Clients`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `Lessons`
--
ALTER TABLE `Lessons`
    ADD CONSTRAINT `lessons_ibfk_1` FOREIGN KEY (`ID_Cources`) REFERENCES `Cources` (`ID_Cources`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;