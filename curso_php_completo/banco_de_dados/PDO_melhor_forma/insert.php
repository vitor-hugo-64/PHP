<?php

	$conn = new PDO("mysql:host=localhost; dbname=curso_php", "root", "nunca mais10");

	// VARIAVEL COM OS DADOS
	$nome = 'Lucas';
	$email = 'lucas@lucas.com';
	$senha = '12345';

	// COMANDO
	$stmt = $conn->prepare("INSERT INTO USUARIO(nome, email, senha) VALUES ( :NOME,:EMAIL,:SENHA )");

	// ISSO ASSOCIA A VARIÁVEL QUE ARMAZENA OS DADOS COM A INFORMAÇÃO DO COMANDO SQL DE INSERÇÃO
	$stmt->bindParam(":NOME", $nome);
	$stmt->bindParam(":EMAIL", $email);
	$stmt->bindParam(":SENHA", $senha);

	// EXECUTA O COMANDO
	$stmt->execute();