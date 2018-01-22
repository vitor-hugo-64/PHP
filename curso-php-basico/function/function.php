<!DOCTYPE html>
<html>
<head>
	<title> Function </title>
	<meta charset="utf-8">
</head>
<body>
		<div>
			<?php
				function soma($a,$b){
					$resultado = $a+$b;
					return $resultado;
				}

				$retorno = soma(1,2);
				echo "$retorno";
			?>
		</div>
</body>
</html>