-- phpMyAdmin SQL Dump
-- version 4.0.10.6
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1:3306
-- Время создания: Апр 09 2018 г., 19:04
-- Версия сервера: 5.5.41-log
-- Версия PHP: 5.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `phpshop`
--

-- --------------------------------------------------------

--
-- Структура таблицы `blog`
--

CREATE TABLE IF NOT EXISTS `blog` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `short_content` varchar(255) NOT NULL,
  `content` mediumtext NOT NULL,
  `author_name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Дамп данных таблицы `blog`
--

INSERT INTO `blog` (`id`, `title`, `date`, `short_content`, `content`, `author_name`, `image`) VALUES
(1, 'cvbvbcvbc', '2018-03-11', 'gdfgdfg', 'gdfgdsgf', 'dsgdfgsfg', ''),
(2, 'Название новости_2', '2222-02-22', 'Короткое описание', 'ПОЛНОЕ ОПИСАНИЕ', 'Михаил автор', '');

-- --------------------------------------------------------

--
-- Структура таблицы `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `sort_order` int(11) NOT NULL DEFAULT '0',
  `status` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=23 ;

--
-- Дамп данных таблицы `category`
--

INSERT INTO `category` (`id`, `name`, `sort_order`, `status`) VALUES
(13, 'Ноутбуки', 1, 1),
(14, 'Планшеты', 2, 1),
(15, 'Мониторы', 3, 1),
(16, 'Игровые компьютеры', 4, 1),
(17, 'Электроника', 15, 1),
(18, 'Развлечения', 18, 1),
(19, 'Спорт', 0, 1),
(21, 'Оптовая торговля', 0, 1),
(22, 'Шопинг', 0, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `category_id` int(11) NOT NULL,
  `place` text NOT NULL,
  `price` float NOT NULL,
  `availability` int(11) NOT NULL,
  `company` text NOT NULL,
  `description` text NOT NULL,
  `is_new` int(11) NOT NULL DEFAULT '0',
  `is_recommended` int(11) NOT NULL DEFAULT '0',
  `status` int(11) NOT NULL DEFAULT '1',
  `sales` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=50 ;

--
-- Дамп данных таблицы `product`
--

INSERT INTO `product` (`id`, `name`, `category_id`, `place`, `price`, `availability`, `company`, `description`, `is_new`, `is_recommended`, `status`, `sales`) VALUES
(34, 'Ноутбук Asus X200MA (X200MA-KX315D)', 13, 'Бакинские', 395, 1, 'UralSoftMar', 'Экран 11.6" (1366x768) HD LED, глянцевый / Intel Pentium N3530 (2.16 - 2.58 ГГц) / RAM 4 ГБ / HDD 750 ГБ / Intel HD Graphics / без ОД / Bluetooth 4.0 / Wi-Fi / LAN / веб-камера / без ОС / 1.24 кг / синий', 0, 0, 1, 23),
(35, 'Ноутбук HP Stream 11-d050nr', 13, 'Артема', 305, 0, 'МАШИНА', 'Экран 11.6” (1366x768) HD LED, матовый / Intel Celeron N2840 (2.16 ГГц) / RAM 2 ГБ / eMMC 32 ГБ / Intel HD Graphics / без ОД / Wi-Fi / Bluetooth / веб-камера / Windows 8.1 + MS Office 365 / 1.28 кг / синий', 1, 0, 1, NULL),
(36, 'Ноутбук Asus X200MA White ', 13, '2028027', 270, 1, 'qqqq', 'Экран 11.6" (1366x768) HD LED, глянцевый / Intel Celeron N2840 (2.16 ГГц) / RAM 2 ГБ / HDD 500 ГБ / Intel HD Graphics / без ОД / Bluetooth 4.0 / Wi-Fi / LAN / веб-камера / без ОС / 1.24 кг / белый', 0, 1, 1, NULL),
(37, 'Ноутбук Acer Aspire E3-112-C65X', 13, '2019487', 325, 1, 'qqqq', 'Экран 11.6'''' (1366x768) HD LED, матовый / Intel Celeron N2840 (2.16 ГГц) / RAM 2 ГБ / HDD 500 ГБ / Intel HD Graphics / без ОД / LAN / Wi-Fi / Bluetooth / веб-камера / Linpus / 1.29 кг / серебристый', 0, 1, 1, NULL),
(38, 'Ноутбук Acer TravelMate TMB115', 13, '1953212', 275, 1, 'qqqq', 'Экран 11.6'''' (1366x768) HD LED, матовый / Intel Celeron N2840 (2.16 ГГц) / RAM 2 ГБ / HDD 500 ГБ / Intel HD Graphics / без ОД / LAN / Wi-Fi / Bluetooth 4.0 / веб-камера / Linpus / 1.32 кг / черный', 0, 0, 1, NULL),
(39, 'Ноутбук Lenovo Flex 10', 13, '1602042', 370, 0, 'Валера', 'Экран 10.1" (1366x768) HD LED, сенсорный, глянцевый / Intel Celeron N2830 (2.16 ГГц) / RAM 2 ГБ / HDD 500 ГБ / Intel HD Graphics / без ОД / Wi-Fi / Bluetooth / веб-камера / Windows 8.1 / 1.2 кг / черный', 0, 0, 1, 0),
(40, 'Ноутбук Asus X751MA', 13, '2028367', 430, 1, 'qqqq', 'Экран 17.3" (1600х900) HD+ LED, глянцевый / Intel Pentium N3540 (2.16 - 2.66 ГГц) / RAM 4 ГБ / HDD 1 ТБ / Intel HD Graphics / DVD Super Multi / LAN / Wi-Fi / Bluetooth 4.0 / веб-камера / DOS / 2.6 кг / белый', 0, 1, 1, NULL),
(41, 'Samsung Galaxy Tab S 10.5 16GB', 14, '1129365', 780, 1, 'qqqq', 'Samsung Galaxy Tab S создан для того, чтобы сделать вашу жизнь лучше. Наслаждайтесь своим контентом с покрытием 94% цветов Adobe RGB и 100000:1 уровнем контрастности, который обеспечивается sAmoled экраном с функцией оптимизации под отображаемое изображение и окружение. Яркий 10.5” экран в ультратонком корпусе весом 467 г порадует вас высоким уровнем портативности. Работа станет проще вместе с Hancom Office и удаленным доступом к вашему ПК. E-Meeting и WebEx – отличные помощники для проведения встреч, когда вы находитесь вне офиса. Надежно храните ваши данные благодаря сканеру отпечатка пальцев.', 1, 1, 1, 0),
(42, 'Samsung Galaxy Tab S 8.4 16GB', 14, '1128670', 640, 1, 'qqqq', 'Экран 8.4" Super AMOLED (2560x1600) емкостный Multi-Touch / Samsung Exynos 5420 (1.9 ГГц + 1.3 ГГц) / RAM 3 ГБ / 16 ГБ встроенной памяти + поддержка карт памяти microSD / Bluetooth 4.0 / Wi-Fi 802.11 a/b/g/n/ac / основная камера 8 Мп, фронтальная 2.1 Мп / GPS / ГЛОНАСС / Android 4.4.2 (KitKat) / 294 г / белый', 0, 0, 1, 0),
(43, 'Gazer Tegra Note 7', 14, '683364', 210, 1, 'qqqq', 'Экран 7" IPS (1280x800) емкостный Multi-Touch / NVIDIA Tegra 4 (1.8 ГГц) / RAM 1 ГБ / 16 ГБ встроенной памяти + поддержка карт памяти microSD / Wi-Fi / Bluetooth 4.0 / основная камера 5 Мп, фронтальная - 0.3 Мп / GPS / ГЛОНАСС / Android 4.4.2 (KitKat) / вес 320 г', 0, 0, 1, 0),
(44, 'Монитор 23" Dell E2314H Black', 15, '355025', 175, 1, 'qqqq', 'С расширением Full HD Вы сможете рассмотреть мельчайшие детали. Dell E2314H предоставит Вам резкое и четкое изображение, с которым любая работа будет в удовольствие. Full HD 1920 x 1080 при 60 Гц разрешение (макс.)', 0, 0, 1, 0),
(45, 'Компьютер Everest Game ', 16, '1563832', 1320, 1, 'qqqq', 'Everest Game 9085 — это компьютеры премимум класса, собранные на базе эксклюзивных компонентов, тщательно подобранных и протестированных лучшими специалистами нашей компании. Это топовый сегмент систем, который отвечает наилучшим характеристикам показателей качества и производительности.', 0, 0, 1, 0),
(46, 'test p', 1, '1', 1, 1, 'qqqq', '1', 0, 0, 1, 0),
(47, 'test donnu', 22, '2', 2, 1, 'twst', '11', 0, 0, 1, 0),
(48, 'Абонементы на выбор на посещение групповых занятий и тренажерного зала в фитнес-клубе «Малибу»', 22, '0', 1000, 1, 'Миша', 'Детальное описание', 1, 1, 1, 30),
(49, 'До 24 занятий плаванием для взрослых и детей в бассейне «Перша Школа Плавання»', 19, 'Бакины', 2000, 1, 'Плаванье', 'Описание акции\r\n\r\nС сертификатом вы получаете 1, 6, 12 или 24 занятий плаванием в бассейне «Перша Школа Плавання» со скидкой до 56%.\r\n\r\nОписание услуги\r\n\r\nВ бассейне сохраняется постоянная, комфортная для тела человека, температура воды: 29-32 градусов.\r\nДо и после плавания обязательно нужно принять душ.\r\nРасписание.\r\n111 классов в неделю, из них 58 водных занятий.\r\n\r\nРазличные виды занятий - 41 для 12-ти возрастных категорий (детей и взрослых):\r\n\r\nМалый бассейн\r\n\r\nЯ и аквамама.\r\nВеселые утята.\r\nОсьминожки.\r\nДельфинята.\r\nМорские звездочки.\r\nБольшой бассейн\r\n\r\nАква мама.\r\nДружные карасики.\r\nЗолотые рыбки.\r\nПузыри.\r\nСмелые акулы.\r\nАквааэробика.\r\nРазвивающие\r\n\r\nПознайка.\r\nРазвивайка.\r\nПочемучки.\r\nЗнайки.\r\nТворчество.\r\nВокруг света.\r\nФитнес студия\r\n\r\nФитнес мама.\r\nПятнашки.\r\nКрепыши.\r\nНепоседы. \r\nДогонялки. \r\nСказка вокруг нас.\r\nЯ все смогу.\r\nФитнес.', 1, 1, 1, 20);

-- --------------------------------------------------------

--
-- Структура таблицы `product_order`
--

CREATE TABLE IF NOT EXISTS `product_order` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(255) NOT NULL,
  `user_phone` varchar(255) NOT NULL,
  `user_comment` text NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `products` text NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=51 ;

--
-- Дамп данных таблицы `product_order`
--

INSERT INTO `product_order` (`id`, `user_name`, `user_phone`, `user_comment`, `user_id`, `date`, `products`, `status`) VALUES
(45, 'fsdfsd', '1', '123123123', 4, '2015-05-14 09:54:45', '{"1":1,"2":1,"3":2}', 3),
(46, 'САША1', 'g3424242342', '', 4, '2015-05-18 15:34:42', '{"44":3,"43":3}', 1),
(47, 'fdsfsf', '+38099999999', 'sdfsdfsdf', 0, '2018-03-26 07:34:01', '{"45":1,"44":1,"43":1}', 1),
(48, 'Vasya', '+380714320661', '', 6, '2018-03-26 08:13:54', '{"45":1}', 1),
(49, 'Vasya', '+380714320661', '', 6, '2018-03-26 08:28:36', '{"45":1}', 1),
(50, 'Михаил Пиндиченко', '+380713752979', '', 4, '2018-04-09 09:37:42', '{"46":3,"43":1,"44":1,"48":2,"47":1}', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(50) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `messager` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`, `role`, `phone`, `messager`) VALUES
(3, 'Александр', 'alex@mail.com', '111111', '', '', ''),
(4, 'Михаил Пиндиченко', 'admin@admin.com', 'admin123', 'admin', '+380713752979', '@webkitt'),
(5, 'Сергей', 'serg@mail.com', '111111', '', '', ''),
(6, 'Vasya', 'vasya@gmail.com', '123456', '', '+380714320661', '+380714320661');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
