<!DOCTYPE html>
<html>
<head>
	<title>To Do App</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
	<?php
        include 'include/header.php';
        include_once 'sqlfunction/checkdb.php';
        include_once 'sqlfunction/checktable.php';
	?>

    <div class="container">
        <?php
            include 'sqlfunction/displayTasks.php';
        ?>
        <form class="form-inline" action="add.php" method="post">
            <div class="form-group mx-sm-3 mb-2">
                <label for="inputTask" class="sr-only">Input Task</label>
                <input type="text" class="form-control" name="inputTask" placeholder="Input Task" required>
            </div>
            <input type="submit" value="Add" class="btn btn-primary mb-2">
        </form>
    </div>
	

		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>

