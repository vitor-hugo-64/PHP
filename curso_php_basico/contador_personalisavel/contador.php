<!DOCTYPE html>
<html>
<head>
	<title> Contador </title>
</head>
<body>
	<?php
		$inicio = $_POST['inicio'];
		$fim = $_POST['fim'];
		$incremento = $_POST['incremento'];

		while ($inicio<=$fim) {
			$inicio += $incremento;
			if ($inicio<=$fim) {
				echo $inicio."<br/>";
			}
		}
	?>
</body>
</html>