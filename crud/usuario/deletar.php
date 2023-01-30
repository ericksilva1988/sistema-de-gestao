<?php 
	
	include_once("../../banco/conexao.php");

	if (!empty($_GET['id'])) {
		
		$id = $_GET['id'];
		$database = new retornaDados();
		$database->deletaUm('usuarios',$id);
	}

	header('Location: ../../views/usuario/lista.php');



?>