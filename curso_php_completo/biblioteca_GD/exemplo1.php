<?php
	
	// DECLARA QUE O TIPO DESSE ARQUIVO SERÁ IMAGEM
	header("Content-Type: image/png");

	// DECLARA O TAMANHO DA IMAGEM EM PIXELS
	$image = imagecreate(256, 256);

	// CRIA PALETA DE CORES EM RGB
	$black = imagecolorallocate($image, 0, 0, 0);
	$red = imagecolorallocate($image, 255, 0, 0);

	// ESCREVER NA TELA
	// imagestring(image, font, EIXO x, EIXO y, string, color)
	imagestring($image, 5, 60, 120, "Curso PHP", $red);

	// INFORMA O FORMATO GERADO
	imagepng($image);

	// DESTROI A VARIAVEL SENÃO ELA FICA ocupando memoria
	imagedestroy($image);