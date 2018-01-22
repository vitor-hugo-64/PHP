<?php 

	$carro[0][0] = 'GM';
	$carro[0][1] = 'Cobalt';
	$carro[0][2] = 'Onix';
	$carro[0][3] = 'Camaro';

	$carro[1][0] = 'Ford';
	$carro[1][1] = 'Fiesta';
	$carro[1][2] = 'Fusion';
	$carro[1][3] = 'Eco Sport';

	echo $carro[0][3];
	echo "<br>";

	// O 'end' SERVE BASICAMENTE PARA PEGAR O ULTIMO VALOR DO INDICE INFORMADO DE UM ARRAY BIDIMENSIONAL E ETC.
	echo end($carro[1]);
	echo "<br>";

	$b['pessoa']['nome'] = 'Vitor Hugo';
	$b['pessoa']['sobrenome'] = 'Balon';
	$b['pessoa']['idade'] = 19;
	$b['pessoa']['casado'] = false;

	$b['carro']['nome'] = 'Camaro';
	$b['carro']['preco'] = 250000;
	$b['carro']['novo'] = true;
	$b['carro']['cor'] = 'amarelo';

	echo $b['pessoa']['nome'];
	echo $b['carro']['novo'];

 ?>