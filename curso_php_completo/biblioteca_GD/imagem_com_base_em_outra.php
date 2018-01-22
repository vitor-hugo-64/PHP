<?php
	
	// PEGA O ENDEREÇO DA IMAGEM
	$image = imagecreatefromjpeg("certificado1.jpg");

	$titleColor = imagecolorallocate($image, 0, 0, 0);
	$gray = imagecolorallocate($image, 100, 100, 100);

	// ESCREVE NA IMAGEM
	imagestring($image, 5, 450, 450, "CERTIFICADO", $titleColor);
	imagestring($image, 5, 440, 350, "Vitor Hugo", $titleColor);
	imagestring($image, 3, 440, 370, utf8_decode("Concluído Em: ").date("d/m/Y"), $titleColor);

	header("Content-Type: image/jpg");

	imagejpeg($image);
	// DESSA FORMA ELE SALVA A IMAGEM COM O NOME INFORMADO NA STRING E COM A QUALIDADE BASEADA NA ORIGINAL EM PORCENTAGEM
	imagejpeg($image,"certificado.jpg", 10);
	imagedestroy($image);