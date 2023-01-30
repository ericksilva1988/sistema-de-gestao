<?php

    if (!empty($_GET['id'])) {
       

       require_once('../../banco/conexao.php');

        $id = $_GET['id'];

        $database = new db();

        $conexao = $database-> conecta_mysql();

        $query = "select * from usuarios where id=$id";

        $result = mysqli_query ($conexao, $query);


        if($result->num_rows > 0) {

            while($dadosDoUsuario = mysqli_fetch_assoc($result)) {

                $nome = $dadosDoUsuario['nome'];
                $cargo = $dadosDoUsuario['cargo'];
                $login = $dadosDoUsuario['login'];
                $senha = $dadosDoUsuario['senha'];
                
                $alterarSenha = $dadosDoUsuario["alterar-senha"];
                $usuarioVisualizar = $dadosDoUsuario["usuario-visualizar"];
                $usuarioCadastrar = $dadosDoUsuario["usuario-cadastrar"];
                $clienteVisualizar = $dadosDoUsuario["cliente-visualizar"];
                $clienteCadastrar = $dadosDoUsuario["cliente-cadastrar"];
                $caixaVisualizar = $dadosDoUsuario["caixa-visualizar"];
                $caixaCadastrar = $dadosDoUsuario["caixa-cadastrar"];
                $estoqueVisualizar = $dadosDoUsuario["estoque-visualizar"];
                $estoqueCadastrar = $dadosDoUsuario["estoque-cadastrar"];



            }


            
           
                   
        }else{

            echo "Dados não foram alterados!";
        }
    }else{
        echo "Dados não foram alterados!";
    }

?>

        

    

 
