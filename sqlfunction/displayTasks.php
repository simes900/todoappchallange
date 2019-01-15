<?php
    include(dirname(__DIR__).'/config.php');
	//DB connection
    $dbc = mysqli_connect($dbhostname, $dbusername, $dbpassword, $dbname) or die('Error connecting to mySQL');
    
    $result = mysqli_query($dbc, "SELECT * FROM todo_table");
    echo "<table>";

	while($row = mysqli_fetch_array($result))
		{
			echo "<tr>";
			echo "<td>" . $row['task'] . "</td>";
			echo "<td>       </td>";
			echo "<td>";
			echo 
			"<form class='form-inline' action='delete.php' method='post'>
				<input type='hidden' name='deleteTask' value='".$row['id']."'>
				<input type='submit' name='delete' value='Delete' class='btn btn-danger mb-2'>
			</form>";
            echo "</td>";
			echo "</tr>";
		}
	echo "</table>";


	mysqli_close($dbc);

?>