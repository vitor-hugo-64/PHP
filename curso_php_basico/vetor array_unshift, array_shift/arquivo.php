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
	array_unshift($vet, 45); //acrescenta o valor 45 no inicio do vetor;
	print_r($vet);
	echo "<br/>";
	array_shift($vet); //apaga o primeiro indice do vetor;
	print_r($vet);
?>

</body>
</html>