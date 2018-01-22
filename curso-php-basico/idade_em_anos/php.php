<!DOCTYPE html>
<html>
<head>
	<title>php</title>
</head>
<body>
	<?php
	$nome = isset($_POST["nome"])?$_POST["nome"]:"Valor Não Definido!";
	$ano = isset($_POST["ano"])?$_POST["ano"]:12;
	$sexo = isset($_POST["sexo"])?$_POST["sexo"]:"Valor Não Definido";

	$idade = date("Y") - $ano;

	echo "$nome Do Sexo $sexo Tem $idade Anos de Idade!";
	?>
	<br>
	<a href="index.html">Voltar</a>
</body>
</html>