<?php
	
	// tudo que estiver aqui dentro ele vai tentar executar
	try {

		throw new Exception("Houve Um Erro.", 1);
		

	} catch (Exception $e) { // caso de erro ele irá armazenar as informações do erro no '$e'

		// a partir do objeto exception que está armazenado no $e pode ser chamado os dados do erro
		echo json_encode(array(
			'message' =>$e->getMessage(),
			'line' => $e->getLine(),
			'file' => $e->getFile(),
			'code' => $e->getCode()
		));


	}