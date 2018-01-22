<!DOCTYPE html>
<html>
<head>
	<title> For 2 </title>
</head>
<body>
	<?php
		$numero = $_POST['numero'];

		for($i = 1; $i <= 10;$i++)
		{
			$resultado = $numero*$i;
			echo "$numero * $i = $resultado"."<br/>";
		}
	?>
</body>
</html>