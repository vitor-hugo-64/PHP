<?php
	
	// este arquivo está incompleto, ver aula 71 seção 14

	/*

	$fileName = "arquivo".DIRECTORY_SEPARATOR."usuario.csv";

	if (file_exists($fileName)) {
		
		$file = fopen($fileName, "r");

		$headers = explode(",", fgets($file));
		$data = array();

		echo var_dump($headers);

		while ($row = fgets($file)) {
			$rowData = explode(",", $row);
			$linha = array();
			for ($i=0; $i < count($headers); $i++) { 
				$linha[$headers[$i]] = $rowData[$i];
			}

			array_push($data, $linha);
		}

		fclose($file);

		echo json_encode($data);

	}

	/*

		fgets — Lê uma linha de um ponteiro de arquivo(nesse caso os ids)
		explode — Divide uma string em strings(em um array)

	*/

