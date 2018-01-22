<!DOCTYPE html>
<html>
<head>
	<title> Caso </title>
</head>
<body>
	<?php
		$numero = isset($_GET['a'])?$_GET['a']:$_GET[0];
		$operacao = isset($_GET['operacao'])?$_GET['operacao']:$_GET[0];

		switch ($operacao) {
			case '1':
				echo 'O Dobro Do Número É '.$numero*2;
				break;
			case '2':
				echo 'O Cubo Do Número É '.pow($numero, 3);
				break;
			
			default:
				echo 'A Raiz Do Número É '.sqrt($numero);
				break;
		}
	?>
</body>
</html>

