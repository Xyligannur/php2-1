-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Время создания: Июл 02 2015 г., 00:25
-- Версия сервера: 5.6.24
-- Версия PHP: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `php2`
--

-- --------------------------------------------------------

--
-- Структура таблицы `lesson1`
--

CREATE TABLE IF NOT EXISTS `lesson1` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `content` varchar(1000) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `lesson1`
--

INSERT INTO `lesson1` (`id`, `title`, `content`, `time`) VALUES
(29, 'Lorem ipsum', 'Lorem ipsum – псевдо-латинский текст, который используется для веб дизайна, типографии, оборудования, и распечатки вместо английского текста для того, чтобы сделать ударение не на содержание, а на элементы дизайна. Такой текст также называется как заполнитель. Это очень удобный инструмент для моделей (макетов). Он помогает выделить визуальные элементы в документе или презентации, например текст, шрифт или разметка. Lorem ipsum по большей части является элементом латинского текста классического автора и философа Цицерона. Слова и буквы были заменены добавлением или сокращением элементов, поэтому будет совсем неразумно пытаться передать содержание; это не гениально, не правильно, используется даже не понятный латинский. Хотя Lorem ipsum напоминает классический латинский, вы не найдете никакого смысла в сказанном. Поскольку текст Цицерона не содержит буквы K, W, или Z, что чуждо для латинского, эти буквы, а также многие другие часто вставлены в случайном порядке, чтобы скопировать тексты ', '2015-07-01 22:18:01'),
(30, 'Lorem ipsum', 'Lorem ipsum – псевдо-латинский текст, который используется для веб дизайна, типографии, оборудования, и распечатки вместо английского текста для того, чтобы сделать ударение не на содержание, а на элементы дизайна. Такой текст также называется как заполнитель. Это очень удобный инструмент для моделей (макетов). Он помогает выделить визуальные элементы в документе или презентации, например текст, шрифт или разметка. Lorem ipsum по большей части является элементом латинского текста классического автора и философа Цицерона. Слова и буквы были заменены добавлением или сокращением элементов, поэтому будет совсем неразумно пытаться передать содержание; это не гениально, не правильно, используется даже не понятный латинский. Хотя Lorem ipsum напоминает классический латинский, вы не найдете никакого смысла в сказанном. Поскольку текст Цицерона не содержит буквы K, W, или Z, что чуждо для латинского, эти буквы, а также многие другие часто вставлены в случайном порядке, чтобы скопировать тексты ', '2015-07-01 22:18:46'),
(31, 'Lorem', 'Lorem ipsum dolor sit amet, est cu iisque accusamus. Te choro dissentiunt contentiones sit. Ea brute viderer habemus sit, laudem indoctum iudicabit eum ut. Est in utinam mucius quaestio, porro simul nusquam pri in. Cu quando philosophia interpretaris per, eu phaedrum forensibus referrentur est. Noster similique gloriatur te nam. Eirmod tibique constituto nec in, unum posse definiebas eu nec. Erant honestatis ei cum. Falli elitr consequat id nam, his id movet delicata cotidieque. Ius ea dolores disputationi, mundi elaboraret has cu, timeam officiis eu usu. Hinc tota movet eam ne, sit ridens nostrum cu. Cu mei elitr intellegat persequeris. His in assum dolor efficiendi, no eos vide euismod recusabo, primis definitionem et eum. Eam detraxit scriptorem ut, in autem cotidieque referrentur sea, quo ex nonumy eirmod. Sit te atqui pericula liberavisse. Homero propriae adipiscing duo eu, vel ei debitis omittantur. Vis ut velit erant, dicta harum cum at. Omnis fastidii elaboraret sed', '2015-07-01 21:55:57'),
(32, 'Lorem', 'Lorem ipsum dolor sit amet, est cu iisque accusamus. Te choro dissentiunt contentiones sit. Ea brute viderer habemus sit, laudem indoctum iudicabit eum ut. Est in utinam mucius quaestio, porro simul nusquam pri in. Cu quando philosophia interpretaris per, eu phaedrum forensibus referrentur est. Noster similique gloriatur te nam. Eirmod tibique constituto nec in, unum posse definiebas eu nec. Erant honestatis ei cum. Falli elitr consequat id nam, his id movet delicata cotidieque. Ius ea dolores disputationi, mundi elaboraret has cu, timeam officiis eu usu. Hinc tota movet eam ne, sit ridens nostrum cu. Cu mei elitr intellegat persequeris. His in assum dolor efficiendi, no eos vide euismod recusabo, primis definitionem et eum. Eam detraxit scriptorem ut, in autem cotidieque referrentur sea, quo ex nonumy eirmod. Sit te atqui pericula liberavisse. Homero propriae adipiscing duo eu, vel ei debitis omittantur. Vis ut velit erant, dicta harum cum at. Omnis fastidii elaboraret sed', '2015-07-01 22:20:15'),
(33, 'Lorem', 'Lorem ipsum dolor sit amet, est cu iisque accusamus. Te choro dissentiunt contentiones sit. Ea brute viderer habemus sit, laudem indoctum iudicabit eum ut. Est in utinam mucius quaestio, porro simul nusquam pri in. Cu quando philosophia interpretaris per, eu phaedrum forensibus referrentur est. Noster similique gloriatur te nam. Eirmod tibique constituto nec in, unum posse definiebas eu nec. Erant honestatis ei cum. Falli elitr consequat id nam, his id movet delicata cotidieque. Ius ea dolores disputationi, mundi elaboraret has cu, timeam officiis eu usu. Hinc tota movet eam ne, sit ridens nostrum cu. Cu mei elitr intellegat persequeris. His in assum dolor efficiendi, no eos vide euismod recusabo, primis definitionem et eum. Eam detraxit scriptorem ut, in autem cotidieque referrentur sea, quo ex nonumy eirmod. Sit te atqui pericula liberavisse. Homero propriae adipiscing duo eu, vel ei debitis omittantur. Vis ut velit erant, dicta harum cum at. Omnis fastidii elaboraret sed', '2015-07-01 22:20:32'),
(34, 'Lorem', 'Lorem ipsum dolor sit amet, est cu iisque accusamus. Te choro dissentiunt contentiones sit. Ea brute viderer habemus sit, laudem indoctum iudicabit eum ut. Est in utinam mucius quaestio, porro simul nusquam pri in. Cu quando philosophia interpretaris per, eu phaedrum forensibus referrentur est. Noster similique gloriatur te nam. Eirmod tibique constituto nec in, unum posse definiebas eu nec. Erant honestatis ei cum. Falli elitr consequat id nam, his id movet delicata cotidieque. Ius ea dolores disputationi, mundi elaboraret has cu, timeam officiis eu usu. Hinc tota movet eam ne, sit ridens nostrum cu. Cu mei elitr intellegat persequeris. His in assum dolor efficiendi, no eos vide euismod recusabo, primis definitionem et eum. Eam detraxit scriptorem ut, in autem cotidieque referrentur sea, quo ex nonumy eirmod. Sit te atqui pericula liberavisse. Homero propriae adipiscing duo eu, vel ei debitis omittantur. Vis ut velit erant, dicta harum cum at. Omnis fastidii elaboraret sed', '2015-07-01 22:20:42'),
(35, 'Lorem ipsum', 'Lorem ipsum – псевдо-латинский текст, который используется для веб дизайна, типографии, оборудования, и распечатки вместо английского текста для того, чтобы сделать ударение не на содержание, а на элементы дизайна. Такой текст также называется как заполнитель. Это очень удобный инструмент для моделей (макетов). Он помогает выделить визуальные элементы в документе или презентации, например текст, шрифт или разметка. Lorem ipsum по большей части является элементом латинского текста классического автора и философа Цицерона. Слова и буквы были заменены добавлением или сокращением элементов, поэтому будет совсем неразумно пытаться передать содержание; это не гениально, не правильно, используется даже не понятный латинский. Хотя Lorem ipsum напоминает классический латинский, вы не найдете никакого смысла в сказанном. Поскольку текст Цицерона не содержит буквы K, W, или Z, что чуждо для латинского, эти буквы, а также многие другие часто вставлены в случайном порядке, чтобы скопировать тексты ', '2015-07-01 22:25:06'),
(36, 'Lorem ipsum', 'Lorem ipsum – псевдо-латинский текст, который используется для веб дизайна, типографии, оборудования, и распечатки вместо английского текста для того, чтобы сделать ударение не на содержание, а на элементы дизайна. Такой текст также называется как заполнитель. Это очень удобный инструмент для моделей (макетов). Он помогает выделить визуальные элементы в документе или презентации, например текст, шрифт или разметка. Lorem ipsum по большей части является элементом латинского текста классического автора и философа Цицерона. Слова и буквы были заменены добавлением или сокращением элементов, поэтому будет совсем неразумно пытаться передать содержание; это не гениально, не правильно, используется даже не понятный латинский. Хотя Lorem ipsum напоминает классический латинский, вы не найдете никакого смысла в сказанном. Поскольку текст Цицерона не содержит буквы K, W, или Z, что чуждо для латинского, эти буквы, а также многие другие часто вставлены в случайном порядке, чтобы скопировать тексты ', '2015-07-01 22:25:09');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `lesson1`
--
ALTER TABLE `lesson1`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `lesson1`
--
ALTER TABLE `lesson1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=37;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
