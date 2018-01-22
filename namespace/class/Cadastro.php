<?php
  
	class Cadastro {
		
		private $nome;
		private $email;
		private $senha;

		public function getNome():string {
			return $this->nome;
		}

		public function setNome($nome) {
			return $this->nome = $nome;
		}

		public function getEmail():string {
			return $this->email;
		}

		public function setEmail($email) {
			return $this->email = $email;
		}

		public function getSenha():string {
			return $this->senha;
		}

		public function setSenha($senha) {
			$this->senha = $senha;
		}

		public function __toString() {
			return JSON_encode( array( "nome" => $this->getNome(), "email"=> $this->getEmail(), "senha"=>$this->getSenha() ));
		}
	}

?>