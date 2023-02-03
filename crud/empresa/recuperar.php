<?php

if (!empty($_GET['id'])) {
       

    require_once('../../banco/conexao.php');

     $id = $_GET['id'];

     $database = new db();

     $conexao = $database-> conecta_mysql();

     $query = "select * from empresa where id=$id";

     $result = mysqli_query ($conexao, $query);


    if($result->num_rows > 0) {

        while($dadosDaEmpresa = mysqli_fetch_assoc($result)) {

                
                $id = $dadosDaEmpresa['id'];
                $cnpj = $dadosDaEmpresa['cnpj'];
                $empresa = $dadosDaEmpresa['empresa'];
                $nome = $dadosDaEmpresa['nome'];
                $endereco = $dadosDaEmpresa['endereco'];
                $email = $dadosDaEmpresa['email'];
                $telefone = $dadosDaEmpresa['telefone'];
                $referencia = $dadosDaEmpresa['referencia'];
                $segmento = $dadosDaEmpresa['segmento'];

                                
            }
       
        } else {

            echo "Dados não foram alterados!";

        }
    }else{
        echo "Dados não foram alterados!";
    }


?>

