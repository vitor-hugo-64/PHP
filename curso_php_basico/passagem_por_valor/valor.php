<!DOCTYPE html>
<html>
<head>
	<title> Valor </title>
</head>
<body>
	<?php

		// O QUE ACONTECER DENTRO DA FUNÇÃO NÃO VAI ALTERAR EM NADA FORA DO ESCOPO DA FUNÇÃO
		function soma($valor){
			$valor += 2;
			echo "$valor";
		}

		$valor = 4;
		soma($valor);
		echo "<p>$valor<p>";
	?>
</body>
</html>