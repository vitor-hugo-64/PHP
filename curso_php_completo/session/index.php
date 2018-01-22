<?php  

	// Chama o arquivo que starta a sessao
	require_once("config_session.php");

	// apaga a secao especificada, se não for especificado a variavel ele apaga todas as variaveis de sessao
	session_unset($_SESSION["nome"]);

	// TAMBÉM EXISTE O COMANDO "session_destroy()" E ESSE APAGA NÃO SÓ A VARIÁVEL DE SESSÃO COMO DESTROI O SEU ACESSO NO SITE, ENTÃO É COMO SE VOCE FOSSE UM NOVO ACESSO A DETERMINADO SERVIDOR

	echo $_SESSION["nome"];



?>