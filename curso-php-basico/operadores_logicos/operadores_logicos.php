<!DOCTYPE html>
<html>
<head>
	<title>Operadores Lógicos</title>
</head>
<body>
	<?php
		$idade = $_GET["idade"];

		$voto = ($idade>18 and $idade<65)?"Obrigatório":"Não Obrigatório";
		echo $voto;
	?>
</body>
</html>