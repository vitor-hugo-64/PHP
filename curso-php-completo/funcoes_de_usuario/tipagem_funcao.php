<?php  
	
	// dessa forma se define que todo valor que for passado para a função devera ser inteiro;
	function somar(int ...$numero) {
		$soma = array_sum($numero);
		return $soma;
	}

	echo somar(4,2,4,3,5,3,8,9);
	echo "<br>";

	// DESSA FORMA SE DEFINE QUE O RETORNO DA FUNÇÃO SERÁ EM STRING
	function retornarTexto( ...$numero):string {
		$soma = array_sum($numero);
		return $soma;
	}

	var_dump(retornarTexto(4,6,7,9));

?>