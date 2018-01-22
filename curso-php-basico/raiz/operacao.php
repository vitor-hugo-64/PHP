<!DOCTYPE html>
<html>
<head>
	<title>Resultado</title>
</head>
<body>
	<?php
	$valor = $_POST["v"];

	$resultado = sqrt($valor);

	echo "O Resultado É: ".number_format($resultado,2);
	?>
	</br>
	<a href="index.html">Voltar</a>
</body>
</html>