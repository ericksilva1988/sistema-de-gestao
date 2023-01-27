<?php

class db
{

	private $hostname = 'localhost';

	private $usuario = 'root';

	private $senha = '';

	private $database = 'sistema-comercial';



	public function conecta_mysql()
	{

		$conexao = mysqli_connect($this->hostname, $this->usuario, $this->senha, $this->database);

		return $conexao;
	}

}

class retornaDados
{
	public function retornaTodos($tabela)
	{
		$database = new db();
		$conexao = $database->conecta_mysql();
		$query = "select * from `$tabela` order by id desc";
		$result = mysqli_query($conexao, $query);
		return $result;
	}

	public function pesquisar($tabela, $termoDeBusca, $coluna1, $coluna2, $coluna3)
	{
		$database = new db();
		$conexao = $database->conecta_mysql();
		$query = "select * FROM `$tabela` WHERE `$coluna1` LIKE `%$termoDeBusca%` or `$coluna2` LIKE `%$termoDeBusca%` or `$coluna3` LIKE `%$termoDeBusca%` ORDER BY `$coluna1` DESC";
		$result = mysqli_query($conexao, $query);
		return $result;
	}
}


?>