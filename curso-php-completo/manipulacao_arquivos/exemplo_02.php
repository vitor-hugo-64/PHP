<?php 

	$images = scandir("imagens");

	$data = array();

	foreach ($images as $img) {
		if (!in_array($img, array(".", ".."))) {
			$fileName = "imagens".DIRECTORY_SEPARATOR. $img;
			$info = pathinfo($fileName);
			$info["size"] = filesize($fileName);
			$info["modified"] = date("d/m/Y H:i:s", filemtime($fileName));
			$info["url"] = "http://localhost/php_completo/manipulacao_arquivos/exemplo_02.php".str_replace("\\","/",$fileName);
			array_push($data, $info);
		}
	}

	echo json_encode($data);


	/*

	scandir - SERVE PARA ESCANEAR O LUGAR E VER SE EXISTE UM PASTA COM DETERMINADO NOME, ELE RETORNA UM ARRAY

	AS NOTAÇÕES DO 'scandir': . - PONTO - DIRETÓRIO ATUAL
	   						  .. - PONTO PONTO - DIRETORIO ACIMA

	in_array - FAZ UMA BUSCA POR UM ARRAY. O PRIMEIRO PARAMETRO É O ARRAY QUE SE DESEJA PERCORRER E O SEGUNDA PARAMETRO É OS VALORES QUE SE DESEJA ENCONTRAR OU NÃO. NO CASO DO IF ACIMA ELE IRÁ IGNORAR OS PONTOS E SÓ IRA LEVAR EM CONSIDERAÇÃO OS ARQUIVOS DE IMAGEM PARA PODER ENTRAR NO IF

	pathinfo — Retorna informações sobre um caminho de arquivo, retorna um array associativo contendo informações sobre o caminho em path.

	filesize — Obtém o tamanho do arquivo

	filemtime — Obtém o tempo de modificação do arquivo e pode ser usado em conjunto com o date

	str_replace — Substitui todas as ocorrências da string de procura com a string de substituição (substituição, procura)

	*/