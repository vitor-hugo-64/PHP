<?php

	$file = fopen("test.txt", "w+");

	fclose($file);

	unlink("test.txt");

	echo "Arquivo removido Com Sucesso";

	//mkdir("images");

	if (!is_dir("images")) mkdir("images");

	$directory = scandir("images");

	foreach ($directory as $item) {
		if (!in_array($item, array(".", ".."))) {

			unlink("images/".$item);

		}
	}

	echo "ok";


	/*

		unlink — Apaga um arquivo

	*/