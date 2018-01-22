<?php  

	require_once 'classe.php';

	$vitor = new Pessoa();

	$vitor->nome = 'Vitor Hugo'; // Acessa Atributo
 
	echo $vitor->falarNome(); // Invoca Método

	echo "<br>";

	$gol = new Carro();

	$gol->setModelo('Gol GT');
	$gol->setMotor('1.6');
	$gol->setAno('2017');

	print_r($gol->exibir());

	echo "<br>";

	$cpf = new Documento();

	$cpf->setNumero('03778745077');

	var_dump($cpf->getNumero());

	echo "<br>";
	echo "<br>";

	$endereco = new Endereco('Rua Orsi', 238, 'Campo Bom');

	var_dump($endereco);

	echo "<br>";

	unset($endereco);
	echo "<br>";

	$endereco = new Endereco('Rua Orsi', 238, 'Campo Bom');

	echo $endereco;

	echo "<br>";
	echo "<br>";

	$user = new Usuario();

	$user->verDados();

	$programador = new Programador();





?>