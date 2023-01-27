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

	public function pesquisar($tabela, $termoDeBusca, $id, $coluna1, $coluna2)
	{
		$database = new db();
		$conexao = $database->conecta_mysql();
		$query = "select * FROM `$tabela` WHERE $id = $termoDeBusca or $coluna1 LIKE '%$termoDeBusca%' or $coluna2 LIKE '%$termoDeBusca%' ORDER BY $id DESC";
		$result = mysqli_query($conexao, $query);
		return $result;
	}

	public function deletaUm($tabela, $id)
	{
		$database = new db();
		$conexao = $database->conecta_mysql();
		$selectItem = "select * from `$tabela` where id=$id";
		$result = mysqli_query($conexao, $selectItem);

		if ($result->num_rows > 0) {
			$deleteItem = "delete from `$tabela` where id=$id";
			mysqli_query($conexao, $deleteItem);
		}
	}
}


?>