<?php
    
	//Variables
	include ('config.php');
	//DB connection
    $dbc = mysqli_connect($dbhostname, $dbusername, $dbpassword, $dbname) or die('Error connecting to mySQL');
    
    $newTask = $_POST['inputTask'];
    $query = "INSERT INTO todo_table (task) 
             VALUES ('$newTask')";

    $result = mysqli_query($dbc, $query) or die('Cannot query');

    mysqli_close($dbc);
    header("Location: index.php");

?>