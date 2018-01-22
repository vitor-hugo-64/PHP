<!DOCTYPE html>
<html>
<head>
	<title>Unário</title>
</head>
<body>
	<?php
		$a = $_GET["a"];
		$b = $_GET["b"];

		$maior = $a>$b?$a:$b;

		echo "O Maior Valor Digitado É: ".$maior;
	?>
</body>
</html>