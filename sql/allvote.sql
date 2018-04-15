-- --------------------------------------------------------

--
-- Table structure for table `allvote`
--

DROP TABLE IF EXISTS `allvote`;
CREATE TABLE IF NOT EXISTS `allvote` (
  `id` int(8) NOT NULL,
  `name` char(16) NOT NULL,
  `voteid` int(5) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `allvote` (`id`, `name`, `voteid`) VALUES
(1, '海盗船', '2'),
(2, '宝珠姐', '2'),
(3, '黑夜的眼睛', '2'),
(4, '康康', '2'),
(5, '小朱', '2');

DROP TABLE IF EXISTS `votetype`;
CREATE TABLE IF NOT EXISTS `votetype` (
  `voteid` int(8) NOT NULL,
  `name` char(16) NOT NULL,
  PRIMARY KEY (`voteid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `votetype` (`voteid`, `name`) VALUES
(1, '中午聚'),
(2, '晚上聚'),
(3, '都可以'),
(4, '无所谓');
