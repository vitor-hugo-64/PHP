<?php  
	
	require_once('config_session.php');


	// Função que serve basicamente para poder ver o id de determinada sessão
	echo session_id();


	echo "<br>";

	// Funcao que gera um novo id diferente do anterior
	session_regenerate_id();

	echo session_id();

	
?>