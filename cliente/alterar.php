<?php 

    include_once('../conexao.php');

    if (isset($_POST['submit'])) {
      
       
        $id = $_POST['id'];
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
        
        
        $database = new db();

        $conexao = $database-> conecta_mysql();

        $queryUpdate = "update cliente set nome='$nome',apelido='$apelido',telefone='$telefone',rua='$rua',numero='$numero',cep='$cep',cidade='$cidade',estado='$estado',referencia='$referencia',fiado='$fiado' where `id`='$id'";

        $result = mysqli_query ($conexao, $queryUpdate);

                    
    }

    header('Location: lista.php');
?>