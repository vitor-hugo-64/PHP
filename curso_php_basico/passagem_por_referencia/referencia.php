<!DOCTYPE html>
<html>
<head>
	<title> Referencia </title>
</head>
<body>
	<?php

		// O '&' SERVE PARA FAZER UMA PASSAGEM POR REFERENCIA, ENTAO TUDO O QUE ACONTECER COM A VARIAVEL DENTRO DA FUNCAO VAI ALTERAR FORA DO ESCOPO DA FUNCAO TAMBÉM
		function soma(&$Referencia){
			$Referencia += 2;
			echo "$valor";
		}

		$valor = 4;
		$valor2 = soma($valor);
		echo "<p>$valor<p>";
	?>
</body>
</html>