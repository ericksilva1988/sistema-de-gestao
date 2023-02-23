<?php 

    include_once("../../banco/conexao.php");

    if (isset($_POST['submit'])) {


        $id = $_POST['id-produto'];
        $estoqueAtual = $_POST['estoque-atual'];
        $novoEstoque = isset($_POST["novo-estoque"]) ? $_POST["novo-estoque"] : null;
        $operacao = $_POST['operacao'];
        $atualizadoEm = $_POST['atualizado-em'];

        $resultadoOperacao = null;

        if ($novoEstoque == null) {
            $resultadoOperacao = $estoqueAtual;
        } else {
            if ($operacao == "somar") {
                $resultadoOperacao = $estoqueAtual + $novoEstoque;
            } else {
                $resultadoOperacao = $estoqueAtual - $novoEstoque;
            }
        }

        //Conexão com Banco de Dados
        $database = new db();

        $conexao = $database-> conecta_mysql();

        $sqlUsuario = "Update produtos set `estoque-atual` = $resultadoOperacao, `atualizado-em`='$atualizadoEm' where id = $id;";


        $result = mysqli_query ($conexao, $sqlUsuario);

        header('Location: ../../views/produto/listar.php');

        echo "Dados alterados com sucesso!!!";
    }
?>