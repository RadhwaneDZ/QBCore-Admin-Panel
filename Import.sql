CREATE TABLE IF NOT EXISTS `adminpanel_bans` (
  `banid` int(11) NOT NULL AUTO_INCREMENT,
  `bannedby` varchar(50) NOT NULL,
  `banned_license` varchar(50) NOT NULL DEFAULT 'Unknown Identifier',
  `banned_discord` varchar(50) NOT NULL DEFAULT 'Unknown Identifier',
  `banned_steam` varchar(50) NOT NULL DEFAULT 'Unknown Identifier',
  `ban_reason` longtext,
  `ban_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`banid`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

CREATE TABLE IF NOT EXISTS `adminpanel_notes` (
  `noteid` int(11) NOT NULL AUTO_INCREMENT,
  `punished_player` int(11) DEFAULT NULL,
  `punished_by` int(11) DEFAULT NULL,
  `punish_reason` longtext,
  `punished_time` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`noteid`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

CREATE TABLE IF NOT EXISTS `adminpanel_players` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `license` varchar(55) DEFAULT NULL,
  `steam` varchar(55) DEFAULT NULL,
  `discord` varchar(55) DEFAULT NULL,
  `playername` varchar(55) DEFAULT NULL,
  `playtime` int(255) DEFAULT '0',
  `firstjoin` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE KEY `license` (`license`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

CREATE TABLE IF NOT EXISTS `adminpanel_staff` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `discord` varchar(50) DEFAULT NULL,
  `rockstar` varchar(50) DEFAULT NULL,
  `role` enum('Member','Admin') NOT NULL DEFAULT 'Member',
  `rememberme` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;