<?php
	$checado = isset($_POST["teste"])?$_POST["teste"]:'Não';

	if ($checado == "Sim")
	{
		echo "Foi Marcado";
	}else if ($checado == "Não"){
		echo "Não Foi marcado";
	}
?>