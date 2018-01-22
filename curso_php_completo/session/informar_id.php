<?php  
	
	// Essa funcao também pode ser usada para que determinada sessao tenha o mesmo id de outra. Ex: Caso algum usuario que ja tenha acessado anteriormente um site tenha o mesmo acesso de novo
	session_id('e7lt8ckdemfa9gk7nrj3ck6ca4');

	require_once('config_session.php');

	echo session_id();

?>