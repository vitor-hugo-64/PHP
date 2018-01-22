<?php

	$pasta = "arquivos";
	$permissao = '0775';

	// PARA DEFINIR A PERMISSÃO DE PASTA É NECESSÁRIO UM SEGUNDO PARAMETRO NO COMANDO MKDIR
	// 0 - SEM PERMISSAO
	// 1 - PERMISSAO DE EXECUÇÃO
	// 2 - PERMISSÃO DE GRAVAÇÃO
	// 3 - JUNÇÃO 1 E 2
	// 4 - SOMENTE LEITURA( MAS SEM EXECUTAR)
	// 5 - LEITURA E EXECUÇÃO
	// 6 - LEITURA E GRAVAÇÃO
	// 7 - PERMISSÃO TOTAL( LEITURA, EXECUÇÃO E GRAVAÇÃO )
	
	if (is_dir($pasta)) mkdir($pasta, $permissao);

	echo "Diretório Criado Com Sucesso!";