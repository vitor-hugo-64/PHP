<!DOCTYPE html>
<html>
<head>
	<title>Aula 4 - 01</title>
</head>
<body>
	<?php
		$n = 19;
		$no = "Vitor Hugo";
		
		echo "$no tem $n anos de idade!";

		$soma;
		$numero1 = 5;
		$numero2 = 10;

		echo "</br>";

		$soma = $numero1 + $numero2;
		echo "</br> A soma entre $numero1 e $numero2 é $soma!!!";

		$num1 = $_GET["a"];
		$num2 = $_GET["b"];
		echo "</br>";
		echo "A Soma dos Numeros Recebidos Por URL É: ".($num1+$num2);
		echo "</br>";

		$absoluto = $_GET["c"];
		echo "O Valor Absoluto De $absoluto É: ".abs($absoluto);
	?>
</body>
</html>