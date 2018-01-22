<!DOCTYPE html>
<html>
<head>
	<title> Multiplos Casos </title>
	<meta charset="utf-8">
</head>
<body>
	<?php
		$dia = isset($_POST['dia'])?$_POST['dia']:"Indefinido";

		switch ($dia) {
			case '2':
			case '3':
			case '4':
			case '5':
			case '6':
				echo "Hoje Você Precisa Ir Na Aula";
				break;
			
			default:
				echo "Hoje Você Não Precisa Ir Na Aula";
				break;
		}
	?>
</body>
</html>