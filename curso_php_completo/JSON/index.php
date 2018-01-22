<?php  

	$carro[0][0] = 'GM';
	$carro[0][1] = 'Cobalt';
	$carro[0][2] = 'Onix';
	$carro[0][3] = 'Camaro';

	$carro[1][0] = 'Ford';
	$carro[1][1] = 'Fiesta';
	$carro[1][2] = 'Fusion';
	$carro[1][3] = 'Eco Sport';


	$b['pessoa']['nome'] = 'Vitor Hugo';
	$b['pessoa']['sobrenome'] = 'Balon';
	$b['pessoa']['idade'] = 19;
	$b['pessoa']['casado'] = false;

	$b['carro']['nome'] = 'Camaro';
	$b['carro']['preco'] = 250000;
	$b['carro']['novo'] = true;
	$b['carro']['cor'] = 'amarelo';

	echo json_encode($b);


	$json = '{"pessoa":{"nome":"Vitor Hugo","sobrenome":"Balon","idade":19,"casado":false},"carro":{"nome":"Camaro","preco":250000,"novo":true,"cor":"amarelo"}}';

	$data =  json_decode($json);

	echo "<br>";
	echo "<br>";
	echo "<br>";
	var_dump($data);
?>