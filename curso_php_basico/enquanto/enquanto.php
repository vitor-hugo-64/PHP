<!DOCTYPE html>
<html>
<head>
	<title> Enquanto </title>
</head>
<body>
	<?php
		$numero = $_POST['a'];
		$i = 1;
		while ($i <= $numero) {
			$i += 1;
			echo "Caixa De Texto <input type='text' name='text'></br>";
		}
	?>
</body>
</html>