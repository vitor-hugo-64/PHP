<!DOCTYPE html>
<html>
<head>
	<title> Range 2 </title>
</head>
<body>

<?php
	$vetor = array("nome" => "Vitor Hugo",
					"idade" => "15",
					"cpf" => "037.787.450.77");

	foreach ($vetor as $key => $value) //$key = nome do campo  //$$value = valor que está armazenado no campo;
	{
		echo "O campo $key possui o valor $value<br/>";
	}
?>

</body>
</html>