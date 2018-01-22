<?php

	header("Content-Type: image/jpg");

	$image = "wallpaper.jpg";

	$new_width = 256;
	$new_heigth = 256;

	// PEGA O TAMANHO REAL DA IMAGEM E ARMAZENA EM DUAS VARIÁVEIS
	list($old_width, $old_heigth) = getimagesize($image);

	$new_image = imagecreatetruecolor($new_width, $new_heigth);
	$old_image = imagecreatefromjpeg($image);

	// FUNÇÃO PRÓPRIA PARA CRIAR THUMBNAIL
	imagecopyresampled($new_image, $old_image, 0, 0, 0, 0, $new_width, $new_heigth, $old_width,  $old_heigth);

	imagejpeg($new_image);

	imagedestroy($new_image);
	imagedestroy($old_image);