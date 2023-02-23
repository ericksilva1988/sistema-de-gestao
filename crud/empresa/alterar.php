<?php 

    include_once('../../banco/conexao.php');

    if (isset($_POST['submit'])) {
      
       
        $id = intval($_POST['id']);
        $cnpj = $_POST['cnpj'];
        $empresa = $_POST['empresa'];
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $telefone = $_POST['telefone'];
        $referencia = $_POST['referencia'];
        $segmento = $_POST['segmento'];
        $endereco = $_POST['endereco'];

        
        $database = new db();

        $conexao = $database-> conecta_mysql();

        $queryUpdate = "update empresa set cnpj='$cnpj',empresa='$empresa',nome='$nome',endereco='$endereco',
        email='$email',telefone='$telefone',referencia='$referencia',segmento='$segmento' where `id`='$id'";

        $result = mysqli_query ($conexao, $queryUpdate);

        
    }

   header('Location: ../../views/empresa/listar.php');

    echo "Dados alterados com sucesso!!!";
?>