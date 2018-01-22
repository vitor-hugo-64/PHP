<?php  
	

	// INTERFACES CONTROLAM O QUE DEVERÁ TER NA CLASSE SENÃO O PHP NÃO RODA... ENTÃO SE NA INTERFACE EXISTE UMA FUNÇÃO QUE NA CLASSE NÃO EXISTE ELE NÃO IRÁ RODAR
	interface Veiculo {

		public function acelerar($velocidade);
		public function freiar($velocidade);
		public function trocarMarcha($marcha);

	}

	class Civic implements Veiculo {
		function acelerar($velocidade) {
			
		}

		public function freiar($velocidade)	{
			
		}

		public function trocarMarcha($marcha) {
			# code...
		}
	}	

	$carro = new Civic();

?>