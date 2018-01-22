<!DOCTYPE html>
<html>
<head>
	<title>Matriz</title>
</head>
<body>

<?php
	$matriz = array(
		array(2,3,4),
		array(3,2,6),
		array(4,4,8),
		array(5,5,9));

	//$matriz é uma variavel que recebe vários arrays dentro dela, a partir disso vai ser formado uma matriz;
	//cada array criado vai ser uma linha nova;
	//cada numero dentro de cada array é uma coluna nova;

	echo $matriz[0][0],$matriz[0][1],$matriz[0][2]."<br/>";
	echo $matriz[1][0],$matriz[1][1],$matriz[1][2]."<br/>";
	echo $matriz[2][0],$matriz[2][1],$matriz[2][2]."<br/>";
	echo $matriz[3][0],$matriz[3][1],$matriz[3][2]."<br/>";

	$q1 = count($matriz); // o count server pra contar o numero de elementos.

	echo "O Vetor Tem $q1 Elementos!";
?>

</body>
</html>