<form>
	<input type="text" name="nome">
	<input type="number" name="idade">
	<input type="submit" value="Enviar">
</form>

<?php

	// FORMULARIO QUE FOI CRIADO SEM ESPECIFICAR O MÉTODO(ENTÃO É GET AUTOMATICAMENTE)
	// A ESTRUTURA IF VERIFICA RAPIDAMENTE SE EXISTE VALORES GET PARA SEREM PEGOS E EM SEGUIDA O FOR EACH PEGA OS VALORES DE CADA INPUT
	// $key = SERÁ O NAME DE CADA TAG INPUT
	// $value = SERÁ O VALOR DE CADA INPUT QUE SERÁ INFORMADO PELO USUÁRIO 

	if (isset($_GET)) {
		foreach ($_GET as $key => $value) {
			echo $key.' : ';
			echo "$value";
			echo "<hr>";
		}
	}

?>