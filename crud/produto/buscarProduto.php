<?php
    include_once("../../banco/conexao.php");

    $database = new db();

    $conexao = $database->conecta_mysql();

    if (!empty($_GET['pesquisar'])) {

        $termoDeBusca = $_GET['pesquisar'];
        $queryBusca = "SELECT * FROM produtos WHERE id LIKE '%$termoDeBusca%' or descricao LIKE '%$termoDeBusca%' or `codigo-barra` LIKE '%$termoDeBusca%' ORDER BY id DESC";
        $result = mysqli_query($conexao, $queryBusca);

        $msg = "Registros Encontrados";
    } else {

        $msg = "Sem buscas aplicadas!";
    }
?>