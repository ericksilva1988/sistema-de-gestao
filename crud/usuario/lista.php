<?php

    include_once("../../banco/conexao.php");
    $database = new retornaDados();
    $result = $database->retornaTodos('usuarios');



    if (!empty($_GET['pesquisar'])) {

        $termoDeBusca = $_GET['pesquisar'];
        $result = $database->pesquisar('usuarios', $termoDeBusca, 'id', 'nome', 'login');

        $msg = "Registros Encontrados";
    } else {

        $msg = "Sem buscas aplicadas!";
    }


?>