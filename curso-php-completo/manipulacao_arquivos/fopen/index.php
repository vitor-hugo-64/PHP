<?php
	
	// variavel do tipo resource, pois faz referencia a uma arquivo externo
	$file = fopen("log.txt", "a+");

	// função que será usada para fazer alteração no arquivo
	// essa função recebe dois parametros (arquivo_que_sera_editado, alterações)
	fwrite($file, date("Y-m-d H:i:s"). "\r\n");
	// Para que a cada acréscimo de conteúdo os textos não fiquem grudados pode ser concatenado com "\r\n" para dar retorno e nova linha
	fclose($file);

	echo "Arquivo Criado Com Sucesso!";





	/*
	
		fopen — Abre um arquivo ou URL
		fclose — Fecha um ponteiro de arquivo aberto
		fwrite - escreve o conteudo informado no arquivo
		Consultar Documentação PHP.NET - TABELA COM TODAS AS LETRAS

	*/