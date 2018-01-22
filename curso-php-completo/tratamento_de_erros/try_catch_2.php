<?php

	function trataNome($name) {
		if (!$name) {
			throw new Exception("Nenhum Nome Foi Informado.", 1);
			echo "<br>";	
		}else{
			echo $name."<br>";
		}
	}

	try {

		trataNome("João");
		trataNome("");
		
	} catch(Exception $e) {

		echo $e->getMessage();

	} finally { // essa parte executa independente dele executar o try ou o catch ele sempre irá executar para notificar uma mudança de comportamento, ou coisas que devem executar indiferenre do que aconteça
		echo "<br>";
		echo "Executou O Try";

	}