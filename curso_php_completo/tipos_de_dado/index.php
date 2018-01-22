<?php

	// ARRAY
	$frutas = array('laranja', 'uva', 'melancia');
	echo $frutas[2];

	echo "<br>";

	// VARIÁVEL DE DATA
	$nascimento = new DateTime(); 
	var_dump($nascimento);

	// ABRIR ARQUIVO EXTERNO
	$arquivo = fopen('sad', 'r');
	var_dump($arquivo);

	echo "<br>";