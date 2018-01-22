<?php
	
	// verifica se existe um cookie com o nome informado
	// para isso é usado a superglobal $_COOKIE
	if (isset($_COOKIE["NOME_DO_COOKIE"])) {

		// se existir pode ser posto o cookie em um objeto
		$obj = JSON_decode($_COOKIE["NOME_DO_COOKIE"]);

		// e dessa forma podemos acessalo
		echo $obj->empresa;
	}