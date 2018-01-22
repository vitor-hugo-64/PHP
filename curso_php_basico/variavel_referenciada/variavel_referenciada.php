<!DOCTYPE html>
<html>
<head>
	<title>Referenciada</title>
</head>
<body>
	<?php
		$a = $_GET["a"];

		$b = &$a;

		$b-=3;

		echo "Variável A É $a";
		echo "Variável B É $b";
		?>
</body>
</html>