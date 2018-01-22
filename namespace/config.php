<?php  
	
	// CONFIGURAÇÕES INICIAIS DE UM PROJETO
	spl_autoload_register(function ($nomeClasse) {
		
		$dirClass = "class";  // PASTA ONDE SERÁ PROCURADO TODAS AS CLASSES DO PROJETO
		$filename = $dirClass . DIRECTORY_SEPARATOR . $nomeClasse  .".php"; // CONFIGURAÇÃO DO CAMINHO DOS ARQUIVOS. DE FORMA STATICA É COMO SE FOSSE ASSIM: 'class/nomeClasse.php'

		// VERIFICA SE O ARQUIVO EXISTE
		if (file_exists($filename)) {
			require_once "$filename";
		}

	});

?>