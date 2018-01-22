<!DOCTYPE html>
<html>
<head>
	<title> Primo </title>
	<meta charset="utf-8">
</head>
<body>
	<?php
		$numero = $_GET['numero'];
		$cont = 0;

		for ($i=1; $i <= $numero ; $i++) { 
			$checar = $numero%$i;

			if ($checar == 0) {
				$cont += 1;
			}
		}

		if ($cont == 2) {
			echo "O Número É Primo";
		}else{
			echo "Não É Primo";
		}
	?>
</body>
</html>