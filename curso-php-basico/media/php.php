<!DOCTYPE html>
<html>
<head>
	<title> Resultado </title>
	<meta charset="utf-8">
</head>
<body>
	<?php
		$nome = $_POST['nome'];
		$nota1 = $_POST['nota1'];
		$nota2 = $_POST['nota2'];

		$media = ($nota1+$nota2)/2;

		if ($media>6){
			echo "$nome sua média foi $media e você está aprovado!";
		}else{
			echo "$nome sua média foi $media e você está reprovado!";
		}
	?>
</body>
</html>