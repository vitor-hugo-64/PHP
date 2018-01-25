<?php
	
	// DADOS DA CONEXÃO
	$con = new PDO("mysql:dbname=curso_php; host=localhost", "root", "nunca mais10");

	// COMANDO DE CONSULTA DA BASE DE DADOS
	$stmt = $con->prepare("SELECT * FROM usuario ORDER BY id");

	// EXECUTA O COMANDO DE CONSULTA
	$stmt->execute();

	// RETORNA TODOS OS RESULTADOS EM FORMA DE ARRAY
	// QUANDO NÃO TIVER MAIS DADOS ELE RETORNA FALSE
	$result = $stmt->fetchAll(PDO::FETCH_ASSOC);

	// PEGA OS DADOS DO ARRAY E OS INSERE NA TELA
	foreach ($result as $row) {
		foreach ($row as $key => $value) {
	 		echo "<strong>".$key.":</strong>".$value."<br>";
	 	}

	 	echo "=================================================";
	 }

	 