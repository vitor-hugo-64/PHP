<?php 

	$conn = new PDO("mysql: host=localhost; dbname=curso_php", "root", "nunca mais10");

	$stmt = $conn->prepare("delete from usuario where id = :ID");

	$id = 6;

	$stmt->bindParam(":ID", $id);

	$stmt->execute();