<?php
	
	// FOI FEITO COM UMA IMAGEM LOCAL POR CAUSA DE UM BLOQUEIO DO APACHE QUE EU NÃO CONSEGUI RESOLVER
	
	// LINK DA IMAGEM
	$link = "imagem/google.png";

	// ARMAZENA O CONTEUDO DE STRING EM UMA VARIAVEL
	$content = file_get_contents($link);

	// ARMAZENA OS COMPONENTES DA URL EM UMA VARIAVEL ARRAY
	$parse = parse_url($link);

	// PEGA O NOME DO ARQUIVO QUE É PUXADO NA URL
	$basename = basename($parse["path"]);

	// CRIA UM NOVO ARQUIVO COM  O NOME BASE DO OUTRO
	$file = fopen($basename, "w+");

	// COLOCA NESSE ARQUIVO O CONTEUDO DO ANTIGO
	fwrite($file, $content);

	fclose($file);

	/*

		file_get_contents — Lê todo o conteúdo de um arquivo para uma string
		parse_url — Interpreta uma URL e retorna os seus componentes
		basename — Retorna apenas a parte que corresponde ao nome do arquivo de um caminho/path



	*/

?>

<!-- A PARTIR DE UMA TAG HTML O ARQUIVO DE IMAGEM PODE SER MOSTRADO NA TELA -->
<img src="<?=$basename ?>">