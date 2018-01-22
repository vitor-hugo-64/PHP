<?php 

	$email = $_POST['email'];

	// O RESTANTE DO CÓDIGO IRÁ VALIDAR O SUBMIT
	// PARA ISSO É NECESSÁRIO RETORNAR TRES DADOS QUE O GOOGLE PEDE

	// INICIA E ARMAZENA NA VARIAVEL
	$ch = curl_init();

	// VERIFICA A PRIMEIRA OPÇÃO
	curl_setopt($ch, CURLOPT_URL, "https://www.google.com/recaptcha/api/siteverify");
	// COMO NÃO PRECISA VERIFICAR SE É SSL O SEGUINTE PASSA '0'
	curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
	// O MESMO '0' AQUI TAMBÉM
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);

	// PASSA AS OUTRAS INFORMAÇÕES QUE FALTA EM FORMA DE ARRAY
	// http_build_query - SERVE PARA MANDAR AS INFORMAÇÕES E UM ARRAY COMO SE FOSSE UMA QUERY SÓ
	curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query(array('secret' => "6Ldx2z8UAAAAACwo95109fNBHrkJWZF8xwpl7b-P", 
																'response' => $_POST['g-recaptcha-response'],
																'remoteip' => $_SERVER['REMOTE_ADDR']
															)));


	// SERVE PARA DEVOLVER UMA RESPOSTA DA URL QUE FOI CHAMADA
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

	// RECUPERA A INFORMAÇÃO QUE VEIO
	// COMO VEM EM FORMA DE json PODE SER USADO O JSON_DECODE
	$recaptcha = json_decode(curl_exec($ch), true);

	// FECHA CONEXÃO
	curl_close($ch);

	// ISSO TRATA O ERRO CASO TENHA
	if ($recaptcha["success"] === true) {
		echo "Deu Certo!";
	}else{
		echo "Erro";
	}

 ?>