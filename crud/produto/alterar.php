<?php 

    include_once('../../banco/conexao.php');

    if (isset($_POST['submit'])) {
      
       
        $id = intval($_POST['id']);
        $descricao = $_POST['descricao'];
        $custo = floatval($_POST['custo']);
        $venda = floatval($_POST['venda']);
        $estoqueMinimo = intval($_POST['estoque-minimo']);
        $estoqueAtual = intval($_POST['estoque-atual']);
        $codigoBarra = $_POST['codigo-barra'];
        $fornecedor = intval(isset($_POST["fornecedor"])) ? $_POST["fornecedor"] : 0;
        $marca = $_POST['marca'];
        $modelo = $_POST['modelo'];
        $peso = floatval($_POST['peso']);
        $observacoes = $_POST['observacoes'];
        $atualizadoEm = $_POST['atualizado-em'];

        
        $database = new db();

        $conexao = $database-> conecta_mysql();

        $queryUpdate = "update produtos set descricao='$descricao',custo='$custo',venda='$venda',`estoque-minimo`='$estoqueMinimo',`estoque-atual`='$estoqueAtual',`codigo-barra`='$codigoBarra',fornecedor='$fornecedor',marca='$marca',modelo='$modelo',peso='$peso',observacoes='$observacoes',`atualizado-em`='$atualizadoEm' where `id`='$id'";

        $result = mysqli_query ($conexao, $queryUpdate);

        
    }

    header('Location: ../../views/produto/listar.php');

    echo "Dados alterados com sucesso!!!";
?>