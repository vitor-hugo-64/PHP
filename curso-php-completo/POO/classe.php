<?php  
	
	// Classe Pessoa
	class Pessoa {
		
		public $nome; // Atributo

		public function falarNome() { // Método
			return "Meu Nome É ".$this->nome;
		}
	}

	// Classe Carro
	class Carro	{
		
		private $modelo;
		private $motor;
		private $ano;

		public function getModelo()	{
			return $this->modelo;
		}

		public function setModelo($modelo) {
			$this->modelo = $modelo;
		}

		public function getMotor():float {
			return $this->motor;
		}

		public function setMotor($motor) {
			$this->motor = $motor;
		}

		public function getAno():int {
			return $this->ano;
		}

		public function setAno($ano) {
			$this->ano = $ano;
		}

		public function exibir() {
			return array(
				"Modelo"=>$this->getModelo(),
				"Motor"=>$this->getMotor(),
				"Ano"=>$this->getAno()
			);
		}

	}

	// Classe Documento
	class Documento	{
		
		private $numero;
		
		public function getNumero(){
			return $this->numero;
		}

		public function setNumero($numero){
			// DESSA FORMA SE CHAMA UMA CLASSE STATICA SEM PRECISAR INSTANCIAR UM OBJETO
			$resultado = Documento::validarCpf($numero);
			if ($resultado === false) {
				throw new Exception("CPF Informado Não É Válido", 1);
				
			}
		}

		public static function validarCpf($cpf) {
			if(empty($cpf)) {
		        return false;
		    }
		 
		    $cpf = preg_match('/[0-9]/', $cpf)?$cpf:0;

		    $cpf = str_pad($cpf, 11, '0', STR_PAD_LEFT);
		     
		    
		    if (strlen($cpf) != 11) {
		        echo "length";
		        return false;
		    }
		    
		    else if ($cpf == '00000000000' || 
		        $cpf == '11111111111' || 
		        $cpf == '22222222222' || 
		        $cpf == '33333333333' || 
		        $cpf == '44444444444' || 
		        $cpf == '55555555555' || 
		        $cpf == '66666666666' || 
		        $cpf == '77777777777' || 
		        $cpf == '88888888888' || 
		        $cpf == '99999999999') {
		        return false;

		     } else {   
		         
		        for ($t = 9; $t < 11; $t++) {
		             
		            for ($d = 0, $c = 0; $c < $t; $c++) {
		                $d += $cpf{$c} * (($t + 1) - $c);
		            }
		            $d = ((10 * $d) % 11) % 10;
		            if ($cpf{$c} != $d) {
		                return false;
		            }
		        }
		 
		        return true;
		    }
		}
	}


	class Endereco	{

		private $logradouro;
		private $numero;
		private $cidade;

		// TODOS OS MÉTODOS MÁGICOS SÃO CRIADOS COM '__' DOIS UNDERLINES
		
		// MÉTODO MÁGICO QUE EXECUTA QUANDO SE CONSTRÒI UM NOVO OBJETO
		public function __construct($logradouro, $numero, $cidade) {
			$this->logradouro = $logradouro;
			$this->numero = $numero;
			$this->cidade = $cidade;
		}

		// MÉTODO MÁGICO QUE EXECUTA QUANDO SE DESTRÓI O OBJETO
		public function __destruct() {
			var_dump('Destruir');
		}

		// MÉTODO MÁGICO QUE TRANSFORMA TODO O OBJETO EM UMA STRING
		// É EXECUTADO QUANDO O USUÁRIO DA UM 'echo' NA VARIÁVEL QUE ARMAZENA O OBJETO
		public function __toString() {
			return $this->logradouro.", ".$this->numero.", ".$this->cidade;
		}


	}

	class Usuario {

		// DIFERENTES TIPOS DE ENCAPSULAMNETO
		public $nome = 'Vitor Hugo';
		protected $idade = 48;
		private $senha = '123456';

		public function verDados() {
			echo $this->nome. "<br>";
			echo $this->idade. "<br>";
			echo $this->senha. "<br>";
		}

	}

	class Programador extends Usuario {

		public function verDados() {

			// Função que mostra daonde está vindo a funcao que está sendo executada
			echo get_class($this);

			echo $this->nome. "<br>";
			echo $this->idade. "<br>";
			// O atributo senha não será herdado de Usuario porque ele é privado, mas os outros sim
			echo $this->senha. "<br>";
		}

	}

	class Documentacao {

		private $numero;

		public function getNumero() {
			return $this->numero;
		}

		public function setNumero($n) {
			$this->numero = $n;
		}
	}

	class CPF extends Documentacao {

			public function validar():boll {

				$this->getNumero();
				
				return true;
			}

	}

?>