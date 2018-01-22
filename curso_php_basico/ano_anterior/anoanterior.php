<!DOCTYPE html>
<html>
<head>
	<title> Exemplo Incremento </title>
</head>
<body>
	<?php
		$a = $_GET["a"];

		$ano_anterior = --$a;
		echo "O Ano Anterior A Esse Informado É: $ano_anterior";
	?>
</body>
</html>