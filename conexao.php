<?php

	class db {

		private $hostname = 'localhost';

		private $usuario = 'root';

		private $senha = '';

		private $database = 'sistema-comercial';



		public function conecta_mysql(){

			$conexao = mysqli_connect($this->hostname, $this->usuario, $this->senha, $this->database);

			return $conexao;
		}
		
	}


?>