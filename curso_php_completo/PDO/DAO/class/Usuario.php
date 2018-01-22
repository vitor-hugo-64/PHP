<?php 

	class Usuario {
			
		private $idusuario;
		private $deslogin;
		private $dessenha;
		private $dtcadastro;

		public function getIdusuario() {
			return $this->idusuario;
		}

		public function setIdusuario($idusuario) {
			$this->idusuario = $idusuario;
		}

		public function getDeslogin() {
			return $this->deslogin;
		}

		public function setDeslogin($deslogin) {
			$this->deslogin = $deslogin;
		}

		public function getDessenha() {
			return $this->dessenha;
		}

		public function setDessenha($dessenha) {
			$this->dessenha = $dessenha;
		}

		public function getDtcadastro() {
			return $this->dtcadastro;
		}

		public function setDtcadastro($dtcadastro) {
			$this->dtcadastro = $dtcadastro;
		}
		
		public function loadById($id) {
			$sql = new Sql();
			$result = $sql->select("SELECT * FROM tb_usuario WHERE IDUSUARIO = :ID", Array(
				":ID"=>$id
			));

			if (count($result) > 0) {
				$this->setData($result[0]);
			}
		}

		// CARREGA UMA LISTA DE USUÁRIOS
		public static function getList() {
			$sql = new Sql();
			return $sql->select("SELECT * FROM TB_USUARIO ORDER BY DESLOGIN");
		}

		// PROCURA UM REGISTRO PELO LOGIN
		public static function getLogin($login) {
			$sql = new Sql();
			return $sql->select("SELECT * FROM TB_USUARIO WHERE DESLOGIN LIKE :DESLOGIN", Array(
				":DESLOGIN"=>"%".$login."%"
			));
		}

		// AUTETICAR USUARIO PELO LOGIN E SENHA
		public function login(string $login) {
			$sql = new Sql();
			$result = $sql->select("SELECT * from TB_USUARIO WHERE DESLOGIN = :LOGIN", Array(
				":LOGIN"=>$login
			));

			if (count($result) > 0) {
				$this->setData($result[0]);
			}
		}

		// INSERE DADOS EM UMA NO ONBJETO
		public function setData($data) {
			$this->setIdusuario($data['idusuario']);
			$this->setDeslogin($data['deslogin']);
			$this->setDessenha($data['dessenha']);
			$this->setDtcadastro(new DateTime($data['dtcadastro']));
		}

		// INSERIR DADOS ATRAVÉS DE PROCEDURE
		public function insert() {
			$sql = new Sql();

			$result = $sql->select("CALL sp_usuario_insert(:LOGIN, :SENHA)", array(
				":LOGIN"=>$this->getDeslogin(),
				":SENHA"=>$this->getDessenha()
			));

			if (count($result) > 0) {
				$this->setData($result[0]);
			}
		}

		// UPDATE
		public function update($login, $senha) {
			
			$this->setDeslogin($login);
			$this->setDessenha($senha);

			$sql = new Sql();
			$sql->query("update tb_usuario set deslogin = :LOGIN, dessenha = :SENHA where idusuario = :ID", array(
				":LOGIN"=>$this->getDeslogin(),
				":SENHA"=>$this->getDessenha(),
				":ID"=>$this->getIdusuario()
			));
		}

		//DELETE
		public function delete()	{
			$sql = new Sql();

			$sql->query("delete from tb_usuario where idusuario = :ID", array(
				":ID"=>$this->getIdusuario()
			));

			$this->setIdusuario(0);
			$this->setDeslogin("");
			$this->setDessenha("");
			$this->setDtcadastro(new DateTime());
		}

		public function __construct($login = "", $senha = "")	{
			$this->setDeslogin($login);
			$this->setDessenha($senha);
		}

		public function __toString() {
			return json_encode(array(
				"idusuario"=>$this->getIdusuario(),
				"deslogin"=>$this->getDeslogin(),
				"dessenha"=>$this->getDessenha(),
				"dtcadastro"=>$this->getDtcadastro()->format("d/m/y H:i:s")
			));
		}
	}