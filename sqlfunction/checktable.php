<?php
//Variables
include(dirname(__DIR__).'/config.php');
	//DB connection
    $dbc = mysqli_connect($dbhostname, $dbusername, $dbpassword, $dbname) or die('Error connecting to mySQL');

    $createUser = "CREATE TABLE IF NOT EXISTS `todo_user` (
        `id` int(11) NOT NULL AUTO_INCREMENT,
        `username` varchar(20) NOT NULL,
        `password` varchar(20) NOT NULL,
        PRIMARY KEY (`id`)
          ) ENGINE=MyISAM DEFAULT CHARSET=latin1;";

    $createUser = mysqli_query($dbc, $createUser) or die ('Did not work');

    $createTable = "CREATE TABLE IF NOT EXISTS `todo_table` (
        `id` int(11) NOT NULL AUTO_INCREMENT,
        `task` text NOT NULL,
        PRIMARY KEY (`id`)
          ) ENGINE=MyISAM DEFAULT CHARSET=latin1;";
    
    $createDataTable = mysqli_query($dbc, $createTable) or die ('Did not work');

    $createPair = "CREATE TABLE IF NOT EXISTS `todo_pair` (
        `id` int(11) NOT NULL AUTO_INCREMENT,
        `userid` int(11) NOT NULL,
        `taskid` int(11) NOT NULL,
        PRIMARY KEY (`id`),
        FOREIGN KEY (`userid`) REFERENCES todo_user(`id`),
        FOREIGN KEY (`taskid`) REFERENCES todo_table(`id`)
          ) ENGINE=MyISAM DEFAULT CHARSET=latin1;";
    
    $createPair = mysqli_query($dbc, $createPair) or die ('Did not work');

    mysqli_close($dbc);


?>