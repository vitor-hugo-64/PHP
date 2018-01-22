<?php  

	require_once("config_session.php");

	// TODA VEZ QUE UM USUARIO ACESSA UM SITE, O SERVIDOR DO DETERMINADO SITE GUARDA UM ARQUIVO TEMPORARIO COM INFORMAÇÕES DAQUELE ACESSO, ENTOA A SEGUINTE FUNCAO MOSTRA ONDE O ARQUIVO FICA ARMAZENADO

	echo session_save_path();

	// devolve o status da sessão em forma de um inteiro, consultar documentação
	var_dump(session_status());

	$_SESSION['nome'] = 'Vitor';

	// isso pode ser tratado com switch case

	switch (session_status()) {
			case 1:
			echo "Sessão Desabilitada";
			break;

			case 2:
				echo "Sessão Habilitada, Mas Não Iniciada";
				break;

			case 3:
				echo "Sesão Habilitada E Iniciada";
				break;
		
		default:
			# code...
			break;
	}

?>