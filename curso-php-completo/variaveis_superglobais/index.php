<?php
	
	// SUPERGLOBAL QUE PEGA INFORMAÇÕES VIA GET
	$nome = (int)$_GET['nome'];
	// SUPERGLOBAL QUE PEGA O IP
	$ip = $_SERVER['REMOTE_ADDR'];
	// PEGA O ENDERECO DO ARQUIVO
	$endereco = $_SERVER['SCRIPT_NAME'];

	//VAR_DUMP SERVE PARA MOSTRAR O VALOR E AS INFORMÇÕES DA VARIÁVEL
	var_dump($ip);
	var_dump($nome);
	var_dump($endereco);