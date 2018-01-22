<?php  
	
	// CRIA CLASSE DE CONEXÃO COM MYSQL
	$con = new mysqli('localhost', 'root', 'nunca mais10', 'curso_php');

	// PREPARA UM COMANDO PARA EXECUTAR NO MYSQL
	$stmt = $con->prepare("INSERT INTO usuario ( nome, email, senha) VALUES( ?, ?, ?)");

	// VARIAVEIS QUE ARMAZENAM OS DADOS
	$nome = 'Vitor Hugo Balon de Oliveira';
	$email = 'vitorhugooliveira64@gmail.com';
	$senha = '123';

	// INFORMA O TIPO DE DADO A SER INSERIDO NESSE CASO TRES STRINGS E DEPOIS INFORMA OS VALORES
	$stmt->bind_param("sss", $nome, $email, $senha);

	// EXECUTA O COMANDO
	$stmt->execute();

	// SEMPRE QUE PRECISAR PODE SER MUDADO OS VALORES DAS VARIAVEIS E ENTÃO INSERIR NOVAMENTE NOVOS VALORES NO BANCO
	$nome = 'Fulano';
	$email = 'fulano@fulano.com';
	$senha = '123';

	$stmt->execute();


?>