<?php 

	require_once("config.php");

	/*
	$sql = new Sql();

	$usuario = $sql->select("SELECT * FROM tb_usuario");

	echo JSON_encode($usuario);
	*/

	/*
	$root = new Usuario();
	$root->loadById(1);
	echo $root;
	*/

	/*
	$lista = Usuario::getList();
	echo (JSON_encode($lista));
	*/

	/*
	$usuario = Usuario::getLogin('vi');
	echo JSON_encode($usuario);
	*/

	/*
	$user = new Usuario();
	$user->login('vitorhugooliveira28@outlook.com');
	echo ($user);
	*/

	// NÃO ESTÁ FUNCIONANDO DIREITO
	// ESTÁ INSERINDO A SENHA NO LUGAR DA SENHA E NO LUGAR DO LOGIN
	
	$user2 = new Usuario('Kamarada', '987');
	$user2->insert();
	
	

	$user3 = new Usuario();
	$user3->loadById(6);
	$user3->update('Vitor', '456');


	$user3->delete();
	