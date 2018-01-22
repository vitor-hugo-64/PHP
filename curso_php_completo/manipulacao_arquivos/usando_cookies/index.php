<?php

	$data = array(
		"empresa"=>"Hcode Treinamentos"
	);

	// setcookie - cria um cookie (nome do cookie, dados do cookie, tempo pra expirar o cookie)

	setcookie("NOME_DO_COOKIE", json_encode($data), time() + 3600);

	echo "OK!";


	/*

		time — Retorna o timestamp Unix atual

	*/