<?php  

	// DEFINE UMA CONSTANTE
	// 1° parametro = nome da constante
	// 2° parametro = valor da constante
	// 3° parametro = define de a constante da vai ser insensitive
	// geralmente o terceiro parametro não é usado por que por convensão as constanstes são tudo em maiuscula
	define('PI', 3.14, true);

	echo PI;

	// ARRAY CONSTANTE
	define('BANCO_DE_DADOS', [
		'127.0.0.1',
		'roor',
		'password',
		'teste'
	]);
	echo "<br>";
	var_dump(BANCO_DE_DADOS);
	echo "<br>";
	// CONSTANTES PADRÃO
	echo PHP_VERSION;
	echo "<br>";
	echo DIRECTORY_SEPARATOR; // COLOCA UMA BARRA DE SEPARADOR QUE SE ADAPTA AOS DIFERENTES TIPOS DE SO
	

	
?>