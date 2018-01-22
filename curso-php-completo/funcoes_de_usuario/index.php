<?php  

	require_once 'funcoes.php';

	$palavra = nome();

	echo strlen($palavra);
	echo "<br>";
	echo salario();

	echo "<br>";

	echo somar(5,1);

	echo "<br>";

	echo numero();

	echo "<br>";

	echo numero(2,3);

	echo "<br>";

	var_dump(valores('Vitor', 'Balon', 'Oliveira'));

?>