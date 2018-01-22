<!DOCTYPE html>
<html>
<head>
	<title>3</title>
</head>
<body>
	<?php
		$nome = isset($_POST['nome'])?$_POST['nome']:"Valor Não Informado";
		$idade = isset($_POST['idade'])?$_POST['idade']:"Valor Não Informado";

		if($idade > 16 && $idade < 18){
			echo "$nome ja tem $idade anos e já pode votar mas não pode dirigir.";
		}else if ($idade > 18){
			echo "$nome ja tem $idade anos e já pode votar e dirigir.";
		}else if($idade < 16){
			echo "$nome tem $idade e não pode votar e nem dirigir.";
		}
	?>
</body>
</html>