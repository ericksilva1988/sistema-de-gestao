<?php 
	
	include_once("../conexao.php");

	if (!empty($_GET['id'])) {
		
		$id = $_GET['id'];
		$database = new retornaDados();
		$database->deletaUm('usuarios',$id);
	}

	header('Location: listar.php');



?>