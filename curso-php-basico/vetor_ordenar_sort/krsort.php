<!DOCTYPE html>
<html>
<head>
	<title> Krsort </title>
</head>
<body>
<?php
	$vet[] = 1;
	$vet[] = 4;
	$vet[] = 9;
	$vet[] = 2;

	krsort($vet); //vai ordenar pelos indices de forma decrecsente;
	print_r($vet);
?>
</body>
</html>