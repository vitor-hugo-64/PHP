<!DOCTYPE html>
<html>
<head>
	<title> Soma Multiplos Valores </title>
</head>
<body>
	<form>
		<?php
			function soma(){
				$p = func_get_args(); //Pega os numeros inseridos na função, indiferente do numeros de elementos e insere no vetor.
				$tot = func_num_args(); //Conta o número de elementos no vetor e retorna em uma variável.
				$resto = 0;
				$i = 0;

				for($i = 0; $i < $tot; $i++)
				{
					$resto += $p[$i] ;
				}
				return $resto;
			}

			$res = soma(1,2,3,4,5,6);
			echo "A Soma Dos Valores É $res";
		?>
	</form>
</body>
</html>