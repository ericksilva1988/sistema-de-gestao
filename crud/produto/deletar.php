<?php 
	
	include_once("../../banco/conexao.php");


	if (!empty($_GET['id'])) {
		
		


		$id = $_GET['id'];
		
		//echo $id;

		//Conexão com Banco de Dados
	    $database = new db();

		$conexao = $database-> conecta_mysql();

	    $sqlUsuario = "select * from produtos where id=$id";


	    $result = mysqli_query ($conexao, $sqlUsuario);

	    if ($result->num_rows > 0) {
	    	
	    	$sqlDelete = "delete from produtos where id=$id";
	    	$resultDelete = mysqli_query ($conexao, $sqlDelete);
	    }

	}

	header('Location: ../../views/produto/lista.php');



?>