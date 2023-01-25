<?php 
	
	include_once("../conexao.php");


	if (!empty($_GET['id'])) {
		
		


		$id = $_GET['id'];
		
		//echo $id;

		//Conexão com Banco de Dados
	    $database = new db();

		$conexao = $database-> conecta_mysql();

	    $sqlUsuario = "select * from usuarios where id=$id";


	    $result = mysqli_query ($conexao, $sqlUsuario);

	    if ($result->num_rows > 0) {
	    	
	    	$sqlDelete = "delete from usuarios where id=$id";
	    	$resultDelete = mysqli_query ($conexao, $sqlDelete);
	    }

	}

	header('Location: listar.php');



?>