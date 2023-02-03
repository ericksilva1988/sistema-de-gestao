<?php

    if (isset($_POST['submit'])) {
      
       require_once('../../banco/conexao.php');

        //$id = $_POST['id'];
        $empresa = $_POST["empresa"];
        $cnpj = $_POST["cnpj"];
        $nome = $_POST["nome"];
        $telefone = $_POST["telefone"];
        $email = $_POST["email"];
        $endereco = $_POST["endereco"];
        $referencia = $_POST["referencia"];
        $segmento = $_POST["segmento"];

        //print_r($_GET);
                
        //$estoqueCadastrar = isset($_POST["estoque-cadastrar"]) ? 1 : 0;
                      
        $database = new db();

        $conexao = $database-> conecta_mysql();

        $query = "insert into empresa (empresa,cnpj,nome,telefone,email,endereco,referencia,segmento) 
        values ('$empresa','$cnpj','$nome','$telefone','$email','$endereco','$referencia','$segmento')";

        if (mysqli_query ($conexao, $query)) {

            echo 'Empresa cadastrada com sucesso!';
            header('Location: ../../views/empresa/lista.php');

        }else{

            echo 'Ops, Alguma coisa aconteceu de errado';
        }
    }

?>