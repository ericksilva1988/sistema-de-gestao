<?php 

    include_once('../../banco/conexao.php');

    if (isset($_POST['submit'])) {
      
       
        $id = $_POST['id'];
        $descricao = $_POST['descricao'];
        $custo = $_POST['custo'];
        $venda = $_POST['venda'];
        $estoqueMinimo = $_POST['estoque-minimo'];
        $estoqueAtual = $_POST['estoque-atual'];
        $codigoBarra = $_POST['codigo-barra'];
        $fornecedor = $_POST['fornecedor'];
        $marca = $_POST['marca'];
        $modelo = $_POST['modelo'];
        $peso = $_POST['peso'];
        $observacoes = $_POST['observacoes'];

        
        $database = new db();

        $conexao = $database-> conecta_mysql();

        $queryUpdate = "update produtos set descricao='$descricao',custo='$custo',venda='$venda',`estoque-minimo`='$estoqueMinimo',`estoque-atual`='$estoqueAtual',`codigo-barra`='$codigoBarra',fornecedor='$fornecedor',marca='$marca',modelo='$modelo',peso='$peso',observacoes='$observacoes' where `id`='$id'";

        $result = mysqli_query ($conexao, $queryUpdate);

        
    }

    header('Location: ../../views/produto/lista.php');

    echo "Dados alterados com sucesso!!!";
?>