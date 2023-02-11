<?php
    include_once("../../banco/conexao.php");

        $database = new db();

        $conexao = $database-> conecta_mysql();

        $query = "select * from usuarios order by id desc";

        $result = mysqli_query ($conexao, $query);


        if (!empty($_GET['pesquisar'])) {

            $termoDeBusca = $_GET['pesquisar'];
            $queryBusca = "SELECT * FROM usuarios WHERE id LIKE '%$termoDeBusca%' or nome LIKE '%$termoDeBusca%' 
            or `login` LIKE '%$termoDeBusca%' or cargo LIKE '%$termoDeBusca%' ORDER BY id DESC";

            $result = mysqli_query ($conexao, $queryBusca);
            
            $msg = "Registros Encontrados";
        }else {
            
            $msg = "Sem buscas aplicadas!";
        }
    
?>