CREATE TABLE IF NOT EXISTS `prefixo_logs` (
  `id` int(4) NOT NULL,
  `log` varchar(255) NOT NULL,
  `pagina` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `ip` varchar(255) NOT NULL,
  `data` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
