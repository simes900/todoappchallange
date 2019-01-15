<?php
    //Variables
	include ('config.php');
	//DB connection
    $dbc = mysqli_connect($dbhostname, $dbusername, $dbpassword, $dbname) or die('Error connecting to mySQL');
	echo "hi";
	$deleteTask = $_POST['deleteTask'];
	$query = "DELETE FROM todo_table
				WHERE id = ('$deleteTask')";
             

    $result = mysqli_query($dbc, $query) or die('Cannot query');

    mysqli_close($dbc);
    header("Location: index.php");
?>