<?php
	
	// ESSA FUNÇÃO CARREGA UMA CLASSE AUTOMATICAMENTE SEMPRE QUE FOR USADO A PALAVRA 'new' PARA QUE NÃO SEJA NECESSÁRIO FICAR DANDO VARIOS 'require_once'. ASSIM QUE É USADO A PALAVRA 'new' O PHP JA SE ENCARREGA DE ARMAZENAR O NOME DA CLASSE NO '$nomeClasse' PARA QUE SEJA FEITO UM 'require_once' AUTOMATICO


	// OUTRA MANEIRA DE FAZER A MESMA COISA PODERIA SER USANDO A 'spl_autoload_register' QUE PODE SER USADA PARA PEGAR ARQUIVOS QUE ESTÃO EM OUTROS DIRETÓRIOS TAMBÉM, COISA QUE O '__autoload' NÃO CONSEGUE FAZER DE FORMA PRÁTICA
	

	// função que serve para incluir as classes
	function incluirClasse($nomeClasse) {
		if (file_exists($nomeClasse.".php") === true) {
			require_once($nomeClasse.".php");
		}
	}

	// Essa linha inclui todas as classes que estão no mesmo diretório
	spl_autoload_register("incluirClasse");

	// Essa linha inclui todas as classes que estão no diretório 'classeAbstrata'
	spl_autoload_register(function($nomeClasse){

		if (file_exists("classeAbstrata". DIRECTORY_SEPARATOR. $nomeClasse.".php") === true) {
			require_once("classeAbstrata".DIRECTORY_SEPARATOR.$nomeClasse.".php");
		}

	});

	$carro = new DelRey();

	echo $carro->acelerar(200);

?>