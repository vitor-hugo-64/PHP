<?php 

	$meses = array('Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho', 'Julho', 'Agosto', 'Setembro', 'Outubro', 'Novembro', 'Dezembro');


	// O FOR EACH SERVE PARA COLOCAR CADA VALOR DE UM DETERMINADO ARRAY($meses) DENTRO DE UMA DETERMINADA VARIAVEL($mes) PARA QUE SEJA TOMADA
	// DETERMINADA DECISÃO, COMO POR EXEMPLO EXIBIR OS VALORES DE CADA INDICE DO ARRAY NA TELA.
	foreach ($meses as $mes) {
			echo "$mes<br>";
		}	
	
?>