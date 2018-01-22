<?php  

	function alertar($anonima) {
		echo "Alerta!";
		echo "Alerta!";
		echo "Alerta!";
		echo "Alerta!";
		echo "Alerta!";
		echo "Alerta!";
		echo "<br>";

		// isto executara a função informada
		$anonima();
	}

	// quando se chama a funcao é informado uma outra funcao nela, mas que é anonima
	alertar(function () {
		echo "Terminou!";
	});

	echo "<br>";
	echo "<br>";

	// nesse caso é armazenado uma funcao anonima dentro de uma variavel
	$f = function () {
		echo "hello_world";	
	};

	// para chamar a funcao se usa o nome da variavel
	$f();

?>