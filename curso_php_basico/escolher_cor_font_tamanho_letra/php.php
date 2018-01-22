<!DOCTYPE html>
<html>
<head>
	<title>2</title>
	<meta charset="utf-8">

	<?php
		$texto = isset($_POST['texto'])?$_POST['texto']:"Texto Genérico";
		$tamanho = isset($_POST['tamanho'])?$_POST['tamanho']:"12pt";
		$cor = isset($_POST['cor'])?$_POST['cor']:"#000000";
	?>

	<style>
		span.texto{
			font-size: <?php echo $tamanho; ?>;
			color: <?php echo $cor; ?>;
		}
	</style>

</head>
<body>
	
   <?php
	echo "<span class='texto'> $texto <span> ";
	?>

	<a href="index.html"><input type="submit" value="Voltar"></a>	

</body>
</html>