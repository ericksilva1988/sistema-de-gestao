<?php

    if (isset($_POST['submit'])) {
      
       require_once('../../banco/conexao.php');

        $nome = $_POST['nome'];
        $apelido = $_POST['apelido'];
        $telefone = $_POST['telefone'];
        $rua = $_POST['rua'];
        $numero = $_POST['numero'];
        $cep = $_POST['cep'];
        $cidade = $_POST['cidade'];
        $estado = $_POST['estado'];
        $referencia = $_POST['referencia'];

                        
        $fiado = isset($_POST["fiado"]) ? 1 : 0;

        $idEmpresa = $_POST['id-empresa'];
        
       
       
                
        $database = new db();

        $conexao = $database-> conecta_mysql();

        $query = "insert into cliente(nome,apelido,telefone,rua,numero,cep,cidade,estado,referencia,fiado,`id-empresa`) values ('$nome','$apelido','$telefone','$rua','$numero','$cep','$cidade','$estado','$referencia','$fiado','$idEmpresa')";

        if (mysqli_query ($conexao, $query)) {

            echo 'Usuário cadastrado com sucesso!';
            header('Location: ../../views/cliente/lista.php');

        }else{

            echo 'Ops, Alguma coisa aconteceu de errado';
        }
    }

?>