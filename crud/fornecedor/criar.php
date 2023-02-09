<?php

    if (isset($_GET['submit'])) {
      
       require_once('../../banco/conexao.php');

        $empresa = $_GET['empresa'];
        $cnpj = $_GET['cnpj'];
        $telefone = $_GET['telefone'];
        $email = $_GET['email'];
        $representacao = $_GET['representacao'];
        $representante = $_GET['representante'];
        $observacoes = $_GET['observacoes'];
        $idEmpresa = $_GET['id-empresa'];
                      
        $database = new db();

        $conexao = $database-> conecta_mysql();

        $query = "insert into fornecedor (empresa,cnpj,telefone,email,representacao,representante,observacoes,`id-empresa`) 
        values ('$empresa','$cnpj','$telefone','$email','$representacao','$representante','$observacoes','$idEmpresa')";

        if (mysqli_query ($conexao, $query)) {

            echo 'Fornecedor cadastrado com sucesso!';
            header('Location: ../../views/fornecedor/lista.php');

        }else{

            echo 'Ops, Alguma coisa aconteceu de errado';
        }
    }

?>