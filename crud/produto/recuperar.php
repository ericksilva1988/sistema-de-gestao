<?php

    if (!empty($_GET['id'])) {
       

       require_once('../../banco/conexao.php');

        $id = $_GET['id'];

        $database = new db();

        $conexao = $database-> conecta_mysql();

        $query = "select * from produtos where id=$id";

        $result = mysqli_query ($conexao, $query);

        

        if($result->num_rows > 0) {

            while($dadosDoProduto = mysqli_fetch_assoc($result)) {

                $descricao = $dadosDoProduto['descricao'];
                $custo = $dadosDoProduto['custo'];
                $venda = $dadosDoProduto['venda'];
                $estoqueMinimo = $dadosDoProduto['estoque-minimo'];
                $estoqueAtual = $dadosDoProduto['estoque-atual'];
                $codigoBarra = $dadosDoProduto['codigo-barra'];
                $fornecedor = $dadosDoProduto['fornecedor'];
                $marca = $dadosDoProduto['marca'];
                $modelo = $dadosDoProduto['modelo'];
                $peso = $dadosDoProduto['peso'];
                $observacoes = $dadosDoProduto['observacoes'];
                
        }
                   
                   
        }else{

            echo "Dados não foram alterados!";
        }
    }else{
        echo "Dados não foram alterados!";
    }
    


?>

