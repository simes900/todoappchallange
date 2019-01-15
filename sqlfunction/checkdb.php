<?php
    include(dirname(__DIR__).'/config.php');
	//DB connection
    $dbc = mysqli_connect($dbhostname, $dbusername, $dbpassword) or die('Error connecting to mySQL');
    
    $checkDB = mysqli_select_db($dbc, 'todo');
    if(!$checkDB){
        $sqlcreate = 'CREATE DATABASE todo';
        $createTable = mysqli_query($dbc, $sqlcreate) or die('Error in creating database');

    }

    mysqli_close($dbc);
?>