<?php 

	$conn = new PDO("mysql: host=localhost; dbname=curso_php", "root", "nunca mais10");

	$conn->beginTransaction();

	$stmt = $conn->prepare("delete from usuario where id = ?");

	$id = 2;

	$stmt->bindParam(":ID", $id);

	$stmt->execute(array($id));

	// rollBack() - CANCELA UMA TRANSAÇÃO
	// commit() - CONFIRMA UMA TRANSAÇÃO
	$conn->rollback();