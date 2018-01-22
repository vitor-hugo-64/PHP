<?php  
	
	// VARIAS FORMAS DE FAZER  MESMA COISA
	// NO EXEMPLO ABAIXO SE TEM O METODO 'FALAR'
	// MAS PARA CADA ANIMAL ESSE METODO É FEITO DE FORMA DIFERENTE
	abstract class Animal {

		public function falar() {
			return "Som";
		}

		public function mover() {
			return "Anda";
		}

	}

	class Cachorro extends Animal {
		
		public function falar() {
			return "Late";
		}

	}

	
	class Gato extends Animal {
		
		public function falar() {
			return "Mia";
		}
	}


	class Passaro extends Animal {
		
		public function mover() {
			// PARA CHAMAR ALGUM METODO DA CLASSE PAI PODE SER USADO O 'parent' DOIS PONTOS E O NOME DO MÉTODO
			return "Voa E ".parent::mover();
		}
	}

	$pluto = new Cachorro();

	echo $pluto->falar()."<br>";
	echo $pluto->mover()."<br>";
	echo "<br>";
	echo "<br>";
	$gato = new Gato();
	echo $gato->falar()."<br>";
	echo "<br>";
	echo "<br>";
	$passaro = new Passaro();
	echo $passaro->mover();

?>