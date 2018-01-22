<?php
	
	// AQUI É CRIADO UMA FUNÇÃO QUE SERVE PARA TRATAR O ERRO
	// A FUNÇÃO RECEBERA EM REPECTIVA ORDEM O CÓDIGO DO ERRO, A MENSAGEM, O ARQUIVO QUE DEU ERRO E A LINHA DO ERRO

	function error_handler($codeError, $message, $file, $line) {

		echo json_encode(array(
			'codeError' => $codeError,
			'message' => $message,
			'file'  => $file,
			'line' => $line
		));

		// ESSA LINHA DEFINE QUE O QUE SERÁ MOSTRADO
		// NESSE CASO ELE VAI MOSTRAR ERROS MAS AS NOTICIAS NÃO
		error_reporting(E_ALL & ~E_NOTICE);

	}


	// ESSA FUNÇÃO DECIDE QUE FUNÇÃO SERÁ CHAMADA QUANDO DER ERRO
	set_error_handler("error_handler");


	// LINHA IRÁ GERAR ERRO
	$total = 100 / 0;

	$nome = $_GET['nome'];
	echo "$nome";