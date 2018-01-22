<!DOCTYPE html>
<html>
<head>
	<title> Arrays </title>
</head>
<body>

<?php
	$vet = array(1,2,3,4,5,6,7);
	print_r($vet); //mostra o array recem criado com seis indices;
	echo "<br/>";
	array_push($vet, 45); //acrescenta o valor 45 na nova e recem criada indice 7;
	print_r($vet);
	echo "<br/>";
	array_pop($vet); //apaga o ultimo indice do vetor;
	print_r($vet);
?>

</body>
</html>