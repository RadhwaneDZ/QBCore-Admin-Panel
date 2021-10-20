CREATE TABLE IF NOT EXISTS `adminpanel_bans` (
  `banid` int(11) NOT NULL AUTO_INCREMENT,
  `bannedby` varchar(50) NOT NULL,
  `banned_license` varchar(50) NOT NULL DEFAULT 'Unknown Identifier',
  `banned_discord` varchar(50) NOT NULL DEFAULT 'Unknown Identifier',
  `banned_steam` varchar(50) NOT NULL DEFAULT 'Unknown Identifier',
  PRIMARY KEY (`banid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE IF NOT EXISTS `adminpanel_notes` (
  `noteid` int(11) NOT NULL AUTO_INCREMENT,
  `punished_player` int(11) DEFAULT NULL,
  `punished_by` int(11) DEFAULT NULL,
  `punish_reason` longtext,
  `punished_time` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`noteid`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

CREATE TABLE IF NOT EXISTS `adminpanel_players` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `license` varchar(55) DEFAULT NULL,
  `steam` varchar(55) DEFAULT NULL,
  `discord` varchar(55) DEFAULT NULL,
  `playername` varchar(55) DEFAULT NULL,
  `playtime` int(255) DEFAULT '0',
  `firstjoin` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`ID`),
  UNIQUE KEY `license` (`license`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;