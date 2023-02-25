<?php

    if (isset($_POST['submit'])) {
      
       require_once('../../banco/conexao.php');

        $nome = $_POST['nome'];
        $apelido = !empty($_POST['apelido']) ? "'".$_POST['apelido']."'" : "NULL";
        $telefone = $_POST['telefone'];
        $rua = $_POST['rua'];
        $numero = $_POST['numero'];
        $cep = $_POST['cep'];
        $cidade = $_POST['cidade'];
        $estado = isset($_POST['estado']) ? $_POST['estado'] : "";
        $referencia = $_POST['referencia'];
           
        $criadoEm = $_POST['criado-em'];
                        
        $fiado = isset($_POST["fiado"]) ? 1 : 0;

        $idEmpresa = intval($_POST['id-empresa']);

        
        $database = new db();

        $conexao = $database-> conecta_mysql();

        $query = "insert into cliente(nome,apelido,telefone,rua,numero,cep,cidade,estado,referencia,fiado,`id-empresa`,`criado-em`)
        values ('$nome',$apelido,'$telefone','$rua','$numero','$cep','$cidade','$estado','$referencia','$fiado',$idEmpresa,'$criadoEm')";

        echo $query;


        // if (mysqli_query ($conexao, $query)) {

        //     echo 'Usuário cadastrado com sucesso!';
        //    // header('Location: ../../views/cliente/listar.php');

        // }else{

        //     echo 'Ops, Alguma coisa aconteceu de errado';
        // }
    }

?>