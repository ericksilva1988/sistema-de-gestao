<?php

    if (isset($_GET['submit'])) {
      
       require_once('../../banco/conexao.php');

        $descricao = $_GET['descricao'];
        $custo = floatval($_GET['custo']);
        $venda = floatval($_GET['venda']);
        $estoqueMinimo = intval($_GET['estoque-minimo']);
        $estoqueAtual = intval($_GET['estoque-atual']);
        $codigoBarra = $_GET['codigo-barra'];
        $fornecedor = intval($_GET['fornecedor']);
        $marca = $_GET['marca'];
        $modelo = $_GET['modelo'];
        $peso = floatval($_GET['peso']);
        $observacoes = $_GET['observacoes'];
        $idEmpresa = intval($_GET['id-empresa']);
        $criadoEm = $_GET['criado-em'];
                      
        $database = new db();

        $conexao = $database-> conecta_mysql();

        $query = "insert into produtos (descricao,custo,venda,`estoque-minimo`,`estoque-atual`,`codigo-barra`,fornecedor,marca,modelo,peso,observacoes,`id-empresa`,`criado-em`)
        values ('$descricao','$custo','$venda','$estoqueMinimo','$estoqueAtual','$codigoBarra','$fornecedor','$marca','$modelo','$peso','$observacoes','$idEmpresa','$criadoEm')";

        if (mysqli_query ($conexao, $query)) {

            echo 'produto cadastrado com sucesso!';
            header('Location: ../../views/produto/listar.php');

        }else{

            echo 'Ops, Alguma coisa aconteceu de errado';
        }
    }
        
?>