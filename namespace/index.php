<?php  

	require_once "config.php";
	use Cliente\Cadastro; // SERVE PRA SELECIONAR O NAMESPACE 

	$cad = new Cadastro();

	$cad->setNome("Vitor Hugo");
	$cad->setEmail("vitorhugooliveira64@gmail.com");
	$cad->setSenha("12345");

	$cad->registrarVenda();


?>