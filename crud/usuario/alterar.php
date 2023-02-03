<?php 

    include_once('../../banco/conexao.php');

    if (isset($_POST['submit'])) {
      
       
        $id = $_POST['id'];
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

        
        $database = new db();

        $conexao = $database-> conecta_mysql();

        $queryUpdate = "update usuarios set nome='$nome',cargo='$cargo',login='$login',senha='$senha',`alterar-senha`='$alterarSenha',`usuario-visualizar`='$usuarioVisualizar',`usuario-cadastrar`='$usuarioCadastrar',`cliente-visualizar`='$clienteVisualizar',`cliente-cadastrar`='$clienteCadastrar',`caixa-visualizar`='$caixaVisualizar',`caixa-cadastrar`='$caixaCadastrar',`estoque-visualizar`='$estoqueVisualizar',`estoque-cadastrar`='$estoqueCadastrar',`eh-admin`='$admin',`eh-master`='$master' where `id`='$id'";

        $result = mysqli_query ($conexao, $queryUpdate);

                    
    }

    header('Location: ../../views/usuario/lista.php');
?>