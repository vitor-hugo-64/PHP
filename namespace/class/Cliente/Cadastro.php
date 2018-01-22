<?php  
	
	namespace Cliente;

	class Cadastro extends \Cadastro {
		
		public function registrarVenda() {
			echo "Registrado".$this->getNome();
		}
	}

?>