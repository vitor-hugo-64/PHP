<?php

	// PEGA O ENDEREÇO DA IMAGEM
	$image = imagecreatefromjpeg("certificado1.jpg");

	$titleColor = imagecolorallocate($image, 0, 0, 0);
	$gray = imagecolorallocate($image, 100, 100, 100);

	// ESCREVE NA IMAGEM
	imagettftext($image, 32, 0, 450, 150, $titleColor, "fonts/Bevan/Bevan-Regular.ttf" ,"CERTIFICADO");
	imagestring($image, 5, 440, 350, "Vitor Hugo", $titleColor);
	imagestring($image, 3, 440, 370, utf8_decode("Concluído Em: ").date("d/m/Y"), $titleColor);

	header("Content-Type: image/jpeg");

	imagejpeg($image);

	imagedestroy($image);