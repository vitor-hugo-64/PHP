<!-- ESSE ATAQUE É FEITO QUANDO SE INSERE TAGS HTML NO SEU SITE -->

<form method="POST">
	
	<input type="text" name="busca">
	<button type="submit" >Enviar</button>

</form>

<?php

	if (isset($_POST['busca'])) {
		//strip_tags - não deixa que tags sejam usadas de forma dinamica e transforma todo o conteudo da pesquisa em texto a não ser as tags que são informadas depois das virgulas
		echo strip_tags($_POST['busca'], "<strong>");

		//´para transformar as tags em texto pode ser usado o seguinte comando
		echo htmlentities($_POST['busca']);
	}

?>