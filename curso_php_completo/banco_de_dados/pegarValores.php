<?php  
	
	// CRIA CLASSE DE CONEXÃO COM MYSQL
	$con = new mysqli('localhost', 'root', 'nunca mais10', 'curso_php');

	// ESSA LINHA ARMAZENA UMA CONSULTA DE SQL NA VARIAVEL '$resultado'
	$resultado = $con->query("SELECT * FROM usuario ORDER BY id");

	// fetch_array - PEGA OS RESULTADO DA CONSULTA SQL E DEVOLVE EM FORMA DE ARRAY
	// fetch_assoc() - SERVE PARA COLOCAR SOMENTE OS VALOR ASSOCIATIVO E O VALOR DE DETERMINADO INDICE DO ARRAY
	// E QUANDO COLOCADO EM UMA ESTRURA WHILE ELE IRA RETORNAR OS VALORES ATE NÃO EXISTIR MAIS NENHUM
	// OU SEJA ELE IRÁ PASSAR A CONSULTA EM TODOS OS VALORES DE DETERMINADA TABELA DO BANCO
	$dados = array();
	while ($row = $resultado->fetch_assoc()) {
		array_push($dados, $row);
	}

	echo json_encode($dados);
	



?>