<?php

    if (isset($_POST['submit'])) {
      
       require_once('../../banco/conexao.php');

        $nome = $_POST['nome'];
        $cargo = $_POST['cargo'];
        $login = $_POST['login'];
        $senha = $_POST['senha'];
        
        $alterarSenha = isset($_POST["alterar-senha"]) ? 1 : 0;
        $usuarioVisualizar = isset($_POST["usuario-visualizar"]) ? 1 : 0;
        $usuarioCadastrar = isset($_POST["usuario-cadastrar"]) ? 1 : 0;
        $clienteVisualizar = isset($_POST["cliente-visualizar"]) ? 1 : 0;
        $clienteCadastrar = isset($_POST["cliente-cadastrar"]) ? 1 : 0;
        $caixaVisualizar = isset($_POST["caixa-visualizar"]) ? 1 : 0;
        $caixaCadastrar = isset($_POST["caixa-cadastrar"]) ? 1 : 0;
        $estoqueVisualizar = isset($_POST["estoque-visualizar"]) ? 1 : 0;
        $estoqueCadastrar = isset($_POST["estoque-cadastrar"]) ? 1 : 0;
        $admin = isset($_POST["eh-admin"]) ? 1 : 0;
        $master = isset($_POST["eh-master"]) ? 1 : 0;
        $idEmpresa = intval($_POST['id-empresa']);
        $criadoEm = $_POST['criado-em'];   

                
          
       
       
                
        $database = new db();

        $conexao = $database-> conecta_mysql();

        $query = "insert into usuarios(nome,cargo,login,senha,`alterar-senha`,`usuario-visualizar`,`usuario-cadastrar`,
        `cliente-visualizar`,`cliente-cadastrar`,`caixa-visualizar`,`caixa-cadastrar`,`estoque-visualizar`,`estoque-cadastrar`,`eh-admin`,`eh-master`,`id-empresa`,`criado-em`) 
        values ('$nome','$cargo','$login','$senha','$alterarSenha','$usuarioVisualizar','$usuarioCadastrar','$clienteVisualizar',
        '$clienteCadastrar','$caixaVisualizar','$caixaCadastrar','$estoqueVisualizar','$estoqueCadastrar','$admin','$master','$idEmpresa','$criadoEm')";

        if (mysqli_query ($conexao, $query)) {

            echo 'Usuário cadastrado com sucesso!';
            header('Location: ../../views/usuario/listar.php');

        }else{

            echo 'Ops, Alguma coisa aconteceu de errado';
            
        }
    }

?>