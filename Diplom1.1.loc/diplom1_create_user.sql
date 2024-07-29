-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июл 29 2024 г., 15:59
-- Версия сервера: 8.0.30
-- Версия PHP: 8.0.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `my_project`
--

-- --------------------------------------------------------

--
-- Структура таблицы `diplom1_create_user`
--

CREATE TABLE `diplom1_create_user` (
  `id` int NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `job_title` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'online',
  `image` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `vk` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `telegram` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `instagram` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `role` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `diplom1_create_user`
--

INSERT INTO `diplom1_create_user` (`id`, `username`, `job_title`, `phone`, `address`, `email`, `password`, `status`, `image`, `vk`, `telegram`, `instagram`, `role`) VALUES
(1, 'Oliver Kopyov', 'IT Director, Gotbootstrap Inc.', '+1 317-456-2564', '15 Charist St, Detroit, MI, 48212, USA', 'oliver.kopyov@smartadminwebapp.com', '$2y$10$ncTVOU5wQpQYil9vBTL6DOl2ODnkKxOjxNQrdAJUoQVs4YvR2zzja', 'Онлайн', '66a0dbe1235fc.png', 'vk', 'telegram', 'instagram', 'admin'),
(2, 'Alita Gray', 'Project Manager, Gotbootstrap Inc.', '+1 313-461-1347', '134 Hamtrammac, Detroit, MI, 48314, USA', 'Alita@smartadminwebapp.com', '$2y$10$IGM0fNXSgIBSqPzMYS77FuUN.EVIfyTgwAekk.4zzeaphKcZw3Ia.', 'Отошел', '66996de67e5db.png', 'vk', 'telegram', 'instagram', 'user'),
(3, 'Dr. John Cook PhD', 'Human Resources, Gotbootstrap Inc.', '+1 313-779-1347', '55 Smyth Rd, Detroit, MI, 48341, USA', 'john.cook@smartadminwebapp.com', '$2y$10$ELxVEE0SBpZWjG9EaKJltOG4dENjb8xD.YGO596udf5lEZJwflnvC', 'Не беспокоить', '66a789348f735.png', 'vk', 'telegram', 'instagram', 'user'),
(4, 'Jim Ketty', 'Staff Orgnizer, Gotbootstrap Inc.', '+1 313-779-3314', '134 Tasy Rd, Detroit, MI, 48212, USA', 'jim.ketty@smartadminwebapp.com', '$2y$10$bXiysmAc1L1DwnaY4t.nCexr/sLMQF3qV94OfC0q1/M2kaRHzSolq', 'Онлайн', '66996f61cec72.png', 'vk', 'telegram', 'instagram', 'user'),
(5, 'Dr. John Oliver', 'Oncologist, Gotbootstrap Inc.', '+1 313-779-8134', '134 Gallery St, Detroit, MI, 46214, USA', 'john.oliver@smartadminwebapp.com', '$2y$10$/mGfvdY3dWdYEfY6FPXhDey6WFjBfjLquBZ4R942IrccRa5WlSThO', 'Онлайн', '66996fc9f1cdf.png', 'vk', 'telegram', 'instagram', 'user'),
(6, 'Sarah McBrook', 'Xray Division, Gotbootstrap Inc.', '+1 313-779-7613', '13 Jamie Rd, Detroit, MI, 48313, USA', 'sarah.mcbrook@smartadminwebapp.com', '$2y$10$OBMFpeG5yBZdVBHjZos6LutHQ/v8aS/EJkldmAuMYnHED7E0uV4k.', 'Онлайн', '6699704a59a48.png', 'vk', 'telegram', 'instagram', 'user'),
(7, 'Jimmy Fellan', 'Accounting, Gotbootstrap Inc.', '+1 313-779-4314', '55 Smyth Rd, Detroit, MI, 48341, USA', 'jimmy.fallan@smartadminwebapp.com', '$2y$10$E8jso9sGojKP6HjWVGKi8O6PJhCNh/14VjogzakgJCV1eh5ascYG6', 'Онлайн', '669970b46c5cf.png', 'vk', 'telegram', 'instagram', 'user'),
(8, 'Arica Grace', 'Accounting, Gotbootstrap Inc.', '+1 313-779-3347', '798 Smyth Rd, Detroit, MI, 48341, USA', 'arica.grace@smartadminwebapp.com', '$2y$10$fMQkCYV9LjNp/lEMEEpm/u90m4Ea/h2jH9N6SY85jtC239G30npKS', 'Онлайн', '669970fab2ade.png', 'vk', 'telegram', 'instagram', 'user');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `diplom1_create_user`
--
ALTER TABLE `diplom1_create_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `diplom1_create_user`
--
ALTER TABLE `diplom1_create_user`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
