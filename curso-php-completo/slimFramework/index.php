<?php

	require_once("vendor/autoload.php");
	// O SLIM É UM MICROFRAMEWORK PARA CONFIGURAÇÃO DE ROTAS

	// AQUI É INSTANCIADO UM NOVO OBJETO
	$app = new \Slim\Slim();

	// ATRAVÉS DO OBJETO INSTANCIADO É CONFIGURADO CADA UMA DAS ROTAS
	$app->get('/hello/:name', function ($name) {
    	echo "Hello, " . $name;
	});

	$APP->GET('/', function ()
	{
		echo 'Hello World';
	})

	//AQUI É QUANDO É EXECUTADO
	$app->run();
