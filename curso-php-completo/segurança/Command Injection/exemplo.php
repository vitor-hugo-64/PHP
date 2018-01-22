<?php

	$id = isset($_GET["id"])?$_GET["id"]:1;

	// esse comando ajuda a evitar injeção sql, justamente porque se não for um numero ele não executara o comando
	if (!is_numeric($id)) {
		exit("Pegamos Você");
	}

	$conn = mysqli_connect("localhost", "root", "", "dbphp7");

	$sql = "SELECT * FROM tb_usuario WHERE idusuario = $id";

	$exec = mysqli_query($conn, $sql);

	while ($resultado = mysqli_fetch_object($exec)) {
		var_dump($resultado);
	}