<?php
	
	//variavel será acessivel em qualquel lugar desse script
	$nome = 'Vitor Hugo';

	function teste() {
		// variavel será acessivel somente dentro dessa função
		$idade = 19;

		// o prefixo 'global' torna a variável acessivel em qualquer lugar do script
		global $sobrenome = 'Balon';
	}


?>