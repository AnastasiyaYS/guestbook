
CREATE TABLE `users` (
  `id_user` int(11) AUTO_INCREMENT,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `login` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `gender` enum ('man', 'woman') NOT NULL DEFAULT 'man',
  `user_status` enum ('admin', 'user', 'guest') NOT NULL DEFAULT 'guest',
   PRIMARY KEY (`id_user`)
  ) ENGINE=InnoDB DEFAULT CHARSET=utf8;
  
CREATE TABLE `messages` (
  `id_msg` int(11) AUTO_INCREMENT,
  `id_author` int(11) NOT NULL,
  `datetimewriting` TIMESTAMP NOT NULL,
  `message` text NOT NULL,
   PRIMARY KEY (`id_msg`),
   FOREIGN KEY (`id_author`) REFERENCES users (`id_user`)
  ) ENGINE=InnoDB DEFAULT CHARSET=utf8;
  
INSERT INTO `users` (`firstname`, `lastname`, `login`, `email`, `password`, `gender`, `user_status`) VALUES
('Первый', 'Тестович', 'test1', 'test1@mail.ru', '123', 'man', ''),
('Второй', 'Тестович', 'test2', 'test2@mail.ru', '234', 'woman', ''),
('Третий', 'Тестович', 'test3', 'test3@mail.ru', '345', '', '');  
  
INSERT INTO `messages` (`id_author`, `datetimewriting`, `message`) VALUES
('1', now(), 'Я первое сообщение'),
('2', now(), 'Я второе сообщение'),
('3', now(), 'Я третье сообщение');