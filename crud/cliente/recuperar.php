<?php

    if (!empty($_GET['id'])) {

        require_once('../../banco/conexao.php');

        $id = $_GET['id'];

        $database = new db();

        $conexao = $database-> conecta_mysql();

        $query = "select * from cliente where id=$id";

        $result = mysqli_query ($conexao, $query);

        if($result->num_rows > 0) {

            while($dadosDoCliente = mysqli_fetch_assoc($result)) {

                $nome = $dadosDoCliente['nome'];
                $apelido = $dadosDoCliente['apelido'];
                $telefone = $dadosDoCliente['telefone'];
                $rua = $dadosDoCliente['rua'];
                $numero = $dadosDoCliente['numero'];
                $cep = $dadosDoCliente['cep'];
                $cidade = $dadosDoCliente['cidade'];
                $estado = $dadosDoCliente['estado'];
                $referencia = $dadosDoCliente['referencia'];
                $fiado = $dadosDoCliente["fiado"];

    }
                   
                   
        }else{

            echo "Dados não foram alterados!";
        }
    }else{
        echo "Dados não foram alterados!";
    }

?>

