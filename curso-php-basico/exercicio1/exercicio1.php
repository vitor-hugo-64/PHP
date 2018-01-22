<!DOCTYPE html>
<html>
<head>
	<title> Exercício 1 </title>
</head>
<body>
	<?php
	$valor = $_GET["a"];
	$porcentagem = $_GET["b"];
	$calculo = $valor-(($valor/100)*$porcentagem);

	echo "O Resultado da Operação É: ".number_format($calculo,2);
	?>
</body>
</html>