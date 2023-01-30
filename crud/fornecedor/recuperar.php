<?php

if (!empty($_GET['id'])) {
       

    require_once('../../banco/conexao.php');

     $id = $_GET['id'];

     $database = new db();

     $conexao = $database-> conecta_mysql();

     $query = "select * from fornecedor where id=$id";

     $result = mysqli_query ($conexao, $query);


    if($result->num_rows > 0) {

        while($dadosDoFornecedor = mysqli_fetch_assoc($result)) {

                $empresa = $dadosDoFornecedor['empresa'];
                $cnpj = $dadosDoFornecedor['cnpj'];
                $telefone = $dadosDoFornecedor['telefone'];
                $email = $dadosDoFornecedor['email'];
                $representacao = $dadosDoFornecedor['representacao'];
                $representante = $dadosDoFornecedor['representante'];
                $observacoes = $dadosDoFornecedor['observacoes'];

                                
            }
       
        } else {

            echo "Dados não foram alterados!";

        }
    }else{
        echo "Dados não foram alterados!";
    }


?>

