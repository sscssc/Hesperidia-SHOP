<?php
$filename = '/sql/hesperidia.sql';

$connect = mysql_connect("localhost", "root", "") or die('Error connecting to MySQL server: ' . mysql_error());

$db = mysql_select_db("", $connect) or die('Error selecting MySQL database: ' . mysql_error());

$member = "CREATE TABLE IF NOT EXISTS `member` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `login` text NOT NULL,
  `password` text NOT NULL,
  `email` text NOT NULL,
  `lvl` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ";

$member_cont = "INSERT INTO `member` (`id`, `login`, `password`, `email`, `lvl`) VALUES
(1, 'sscssc', 'ab4f63f9ac65152575886860dde480a1', 'scs@dsd.com', 1)";

$new = "CREATE TABLE IF NOT EXISTS `news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `text` text NOT NULL,
  `hide` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ";

$new_cont = "INSERT INTO `news` (`id`, `title`, `time`, `text`, `hide`) VALUES
(1, 'Bienvenue sur Hesperidia shop !', '0000-00-00 00:00:00', 'Test add new session admin', 0)";

mysql_query($member) or print('Error performing query \'<b>' . $member . '</b>\': ' . mysql_error() . '<br /><br />');

mysql_query($member_cont) or print('Error performing query \'<b>' . $member_cont . '</b>\': ' . mysql_error() . '<br /><br />');

mysql_query($new) or print('Error performing query \'<b>' . $new . '</b>\': ' . mysql_error() . '<br /><br />');

mysql_query($new_cont) or print('Error performing query \'<b>' . $new_cont . '</b>\': ' . mysql_error() . '<br /><br />');