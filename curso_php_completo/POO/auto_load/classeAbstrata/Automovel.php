<?php

	interface Veiculo {

		public function acelerar($velocidade);
		public function freiar($velocidade);
		public function trocarMarcha($marcha);

	}  

	abstract class Automovel implements Veiculo {
		function acelerar($velocidade) {
			return 'O Veiculo Acelerou Até '.$velocidade.' km/h';
		}

		public function freiar($velocidade)	{
			
		}

		public function trocarMarcha($marcha) {
			# code...
		}
	}
	
?>