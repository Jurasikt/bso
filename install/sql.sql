CREATE TABLE IF NOT EXISTS `message` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user-id` int(11) NOT NULL,
  `text` varchar(1024) NOT NULL,
  `place` varchar(128) NOT NULL,
  `phone` varchar(16) NOT NULL,
  `address` varchar(128) NOT NULL,
  `callback` varchar(32) NOT NULL,
  `attachment` varchar(128) NOT NULL,
  `fio` varchar(64) NOT NULL,
  `ip` varchar(16) NOT NULL,
  `date` datetime NOT NULL,
  `user-agent` varchar(512) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 ;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fio` varchar(128) NOT NULL,
  `private-num` varchar(16) NOT NULL,
  `public-num` varchar(16) NOT NULL,
  `email` varchar(32) NOT NULL,
  `password` varchar(128) NOT NULL,
  `date` datetime NOT NULL,
  `ip` varchar(16) NOT NULL,
  `check-e` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 ;