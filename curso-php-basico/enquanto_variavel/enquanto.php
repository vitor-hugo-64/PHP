<!DOCTYPE html>
<html>
<head>
	<title> Enquanto </title>
</head>
<body>
	<?php
		#$numero = $_POST['number'];

		$numero = 1;

		while ($numero <  10) {
			
			$numero += 1;

			$a = "num".$numero;

			echo $a."</br>";
		}
	?>
</body>
</html>