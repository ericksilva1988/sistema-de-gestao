<?php

    include_once("../../banco/conexao.php");

        $database = new db();

        $conexao = $database-> conecta_mysql();

        $queryProdutos = "select * from produtos order by id desc";

        $queryFornecedores = "select * from fornecedor order by id desc";

        $result = mysqli_query ($conexao, $queryProdutos);

        $resultado = mysqli_query($conexao, $queryFornecedores);


        if (!empty($_GET['pesquisar'])) {

            $termoDeBusca = $_GET['pesquisar'];
            $queryBusca = "SELECT * FROM produtos WHERE id LIKE '%$termoDeBusca%' or descricao LIKE '%$termoDeBusca%' or `codigo-barra` LIKE '%$termoDeBusca%' ORDER BY id DESC";
            $result = mysqli_query ($conexao, $queryBusca);
            
            $msg = "Registros Encontrados";
        }else {
            
            $msg = "Sem buscas aplicadas!";
        }
      
    
?>