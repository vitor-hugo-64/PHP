<form method="POST" enctype="multipart/form-data">

	<input type="file" name="fileUpload">

	<button type="submit">Send</button>


</form>


<?php 
	

	if ($_SERVER["REQUEST_METHOD"] === "POST") {

		// armazena o arquivo em uma variavel através da global $_FILE
		$file = $_FILES["fileUpload"];

		// informa se acontecer algum erro no arquivo
		if ($file['error']) {
			throw new Exception("ERROR: ".$file["error"]);
		}

		// TODA VEZ QUE É FEITO UM UPLOAD DE ARQUIVO O MESMO PRECISA SER ARMEZENADO PRIMEIRAMENTE EM UM DIRETORIO TEMPORARIO PRA DEPOIS TER UM DESTINO CERTO
		// POR ISSO A SEGUIR É CRIADO UM DIRETORIO QUE SERÁ TEMPORARIO

		// varivavel que armazena o nome do diretorio
		$dirUploads = "uploads";

		// verifica se um diretorio ja existe com o nome da variavel, caso não exista ele irá criar
		if (!is_dir($dirUploads)) {
			mkdir($dirUploads);
		}

		if (move_uploaded_file($file["tmp_name"], $dirUploads.DIRECTORY_SEPARATOR.$file["name"])) {
			echo "Upload Realizado Com Sucesso!";
		}else{
			throw new Exception("Não Foi Possivel realizar Upload", 1);
			
		}
	}

	/*

		$_SERVER[] - Informação do servidor e ambiente de execução
		REQUEST_METHOD - verifica qual é o metodo de envio do formulario
		move_uploaded_file — Move um arquivo enviado para uma nova localização. Recebe dois parametros(nome_do_arquivo, destino)

	*/

 ?>