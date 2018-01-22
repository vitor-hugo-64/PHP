<?php 
	
	$nome = 'vitor hugo';

	// DEIXA TUDO EM MAIÚSCULO
	echo strtoupper($nome);

	// DEIXA TUDO EM MINÚSCULO
	echo strtolower($nome);

	// DEIXA TODAS AS PRIMEIRAS LETRAS DA PALAVRA EM MAIÚSCULO
	echo ucwords($nome);

	// DEIXA SOMENTE A PRIMEIRA LETRA DA STRING
	echo ucfirst($nome);

	// substitui uma parte da string por outra 
	// 1° parametro = Parte da string que se deseja substituir
	// 2° parametro = Parte que se coloca o texto que ira substituir o anterior
	// 3° parametro = Nome da variavel
	$nome = str_replace("v", "20", $nome);
	echo "$nome";

	$frase = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. In nec erat et purus vulputate tempor nec et augue.";

	// Procura uma determinada palavra(2° Parametro) no texto da variavel que é informada no primeiro parametro
	// Retorna o indice da palavra
	$q = strpos($frase, "dolor");
	var_dump($q);

	// Pega determinada parte de uma string onde o primeiro parametro é o nome da variavel, 2° parametro é o inicio do intervalo
	// e o 3° parametro é o fim desse intervalo
	$testo = substr($frase, 0, 12);

	$p = 'Vitor';

	// retorna o numero de casas de uma variavel string
	echo strlen($p);

	

?>