<?php

    if (isset($_GET['submit'])) {
      
       require_once('../../banco/conexao.php');

        $descricao = $_GET['descricao'];
        $custo = $_GET['custo'];
        $venda = $_GET['venda'];
        $estoqueMinimo = $_GET['estoque-minimo'];
        $estoqueAtual = $_GET['estoque-atual'];
        $codigoBarra = $_GET['codigo-barra'];
        $fornecedor = $_GET['fornecedor'];
        $marca = $_GET['marca'];
        $modelo = $_GET['modelo'];
        $peso = $_GET['peso'];
        $observacoes = $_GET['observacoes'];
        $idEmpresa = $_GET['empresa'];
                
        //$estoqueCadastrar = isset($_GET["estoque-cadastrar"]) ? 1 : 0;
                      
        $database = new db();

        $conexao = $database-> conecta_mysql();

        $query = "insert into produtos(descricao,custo,venda,`estoque-minimo`,`estoque-atual`,`codigo-barra`,fornecedor,marca,modelo,peso,observacoes,`id-empresa`) values ('$descricao','$custo','$venda','$estoqueMinimo','$estoqueAtual','$codigoBarra','$fornecedor','$marca','$modelo','$peso','$observacoes','$idEmpresa')";

        if (mysqli_query ($conexao, $query)) {

            echo 'produto cadastrado com sucesso!';
            header('Location: ../../views/produto/lista.php');

        }else{

            echo 'Ops, Alguma coisa aconteceu de errado';
        }
    }
        
?>