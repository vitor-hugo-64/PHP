<?php
	
	// inicia a sessão
	session_start(); 

	// depois de verificar login e senha destrua o ID da sessão
	session_destroy();

	// reinicie a sessão novamente
	session_start(); 

	// pegue um novo id de sessão
	session_regenerate_id();

	echo session_id();// mostra id da sessão


	// ISSO DEIXA O ACESSO MAIS SEGURO JUSTAMENTE PORQUE O ID DE AUTENTICAÇÃO NÃO SERÁ O MESMO DO QUE ESTÁ SENDO USADO QUANDO LOGADO, ENTÃO ISSO DIFICULTA A DESCOBERTA DO ID DA SESSÃO ATUAL POR CRACKERS
	

 ?>