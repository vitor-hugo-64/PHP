

	interface Veiculo {

		public function acelerar($velocidade);
		public function freiar($velocidade);
		public function trocarMarcha($marcha);

	}


	// CLASSE ABSTRATA NÃO PODE SER INSTANCIADA, ELA PODE SER HERDADA POR OUTRA CLASSE E IMPLEMENTAR UMA INTERFACE
	
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

	class DelRey extends Automovel {

		public function empurrar() {
			// code
		}

	}

	$carro = new Automovel();

	echo $carro->acelerar(200);

?>