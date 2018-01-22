<!DOCTYPE html>
<html>
<head>
	<title> For </title>
</head>
<body>
	<?php

		for($i = $_POST['number']; $i <= 10; $i++){
			echo $i."<br/>";
		}

		for($x = $_POST['number2']; $x <= 15; $x++){
			echo $x."<br/>";
		}

		for($y = $_POST['number3']; $y >= 0; $y--){
			echo $y."<br/>";
		}
		

	?>
</body>
</html>