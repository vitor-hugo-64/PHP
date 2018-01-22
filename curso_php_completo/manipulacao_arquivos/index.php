<?php 

	$fileName = "images";

	// is_dir - Serve Para Verificar Se Um Diretorio Existe
	// mkdir - Cria Um Novo Diretório
	// rmdir - Apaga Um Diretório
	if (!is_dir($fileName)) {
		mkdir($fileName);
		echo "Diretório $fileName Criado Com Sucesso!";
	}else{
		rmdir($fileName);
		echo "Já Existe O Diretorio: ".$fileName." E Foi Removido!";
	}