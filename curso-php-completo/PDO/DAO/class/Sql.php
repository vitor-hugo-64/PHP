<?php 

	class Sql extends PDO {
		
		private $conn;

		public function __construct() {
			$this->conn = new PDO("mysql:host=localhost;dbname=dbphp7", "root", "nunca mais10");
		}

		// FUNCÇÃO QUE ASSOCIA DIVERSOS DADOS A DIVERSAS VARIÁVEIS
		// A SEGUNDA ENTRADA É PARA INFORMAR OS PARAMETROS EM FORMA DE ARRAY
		public function setParams($statment, $parameters = Array()) {
			foreach ($parameters as $key => $value) {
				$statment->bindParam($key, $value);
			}
		}

		// FUNÇÃO QUE ASSOCIA UM DADO A UMA VARIÁVEL
		// // A SEGUNDA ENTRADA É PARA INFORMAR O PARAMETRO
		public function setParam($statment, $key, $value) {
			$statment->bindParam($key, $value);
		}

		// CRIA UMA CONSULTA INFORMANDO OS CÓDIGO SQL 
		public function query($rawQuery, $params = Array()) {
			$stmt = $this->conn->prepare($rawQuery);
			$this->setParams($stmt, $params);
			$stmt->execute();
			return $stmt;
		}

		// FAZ UM SELECT
		public function select($rawQuery, $params = Array()):array {
			// AQUI A CONSULTA É FEITA PEL FUNÇAÕ DE QUERY
			$stmt = $this->query($rawQuery, $params);
			// E AQUI É RETORNADO OS DADOS ATRAVÉS DE UMA ARRAY
			return $stmt->fetchAll(PDO::FETCH_ASSOC);
		}

	}