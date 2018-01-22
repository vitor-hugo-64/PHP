<!DOCTYPE html>
<html>
<head>
	<title> Range </title>
</head>
<body>

<?php
	$i = range(5, 30,3);
	print_r($i);
	foreach ($i as $key) {
		echo "$key<br/>";
	}$i;

	unset($i[3]); //comando que destroe a posição especificada do vetor.

	print_r($i);
?>

</body>
</html>