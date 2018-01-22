<?php  

	// setlocale() - SERVE BASICAMENTE PARA MUDAR AS CONFIGURAÇÕES DE LOCALIZAÇÃO PARA O BRASIL
	// pt_BR - Configura a localização no Windows
	// pt_BR.utf-8 - Configura no formato utf-8
	// portuguese configura a localização no Windows

	setlocale(LC_ALL, "pt_BR", "pt_BR.utf-8", "portuguese");

	// strftime - É como o date() que fornece a data e a hora, mas tem seu próprio formato
	echo strftime("%A %B");

?>