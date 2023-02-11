<?php 
	
	include_once("../../banco/conexao.php");


	if (!empty($_GET['id'])) {
		
		


		$id = $_GET['id'];
		
		//echo $id;

		//Conexão com Banco de Dados
	    $database = new db();

		$conexao = $database-> conecta_mysql();

	    $sqlEmpresa = "select * from empresa where id=$id";


	    $result = mysqli_query ($conexao, $sqlEmpresa);

	    if ($result->num_rows > 0) {
	    	
	    	$sqlDelete = "delete from empresa where id=$id";
	    	$resultDelete = mysqli_query ($conexao, $sqlDelete);
	    }

	}

	header('Location: ../../views/empresa/listar.php');



?>