<?php  
	
	//exemplo de data e hora
	echo date("d/m/Y H:i:s");

	echo "<br>";

	// o comando time gera o timestamp da hota atual
	echo time();
	echo "<br>";

	// o comando 'strtotime()' pega uma data especifica e gera o seu timestamp para que possa ser usado em alguma configuração de hora
	$timestamp = strtotime("30-05-1998");

	// o comando 'date()' pode receber um segundo valor que é justamente o timestamp de determinada data, para que essa data especifica possa ser mostrada no formata especificado na funcao 'time()'
	echo date("l, d/m/Y ", $timestamp);

?>