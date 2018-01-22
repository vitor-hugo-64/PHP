<?php 

	$conn = new PDO("mysql: host=localhost; dbname=curso_php", "root", "nunca mais10");

	$stmt = $conn->prepare("UPDATE USUARIO SET NOME = :NOME WHERE ID = :ID");

	$nome = 'Other';
	$id = 4;

	$stmt->bindParam(":NOME", $nome);
	$stmt->bindParam(":ID", $id);

	$stmt->execute();