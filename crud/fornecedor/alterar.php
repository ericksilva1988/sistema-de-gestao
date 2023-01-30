<?php 

    include_once('../../banco/conexao.php');

    if (isset($_POST['submit'])) {
      
       
        $id = $_POST['id'];
        $empresa = $_POST['empresa'];
        $cnpj = $_POST['cnpj'];
        $telefone = $_POST['telefone'];
        $email = $_POST['email'];
        $representacao = $_POST['representacao'];
        $representante = $_POST['representante'];
        $observacoes = $_POST['observacoes'];

        
        $database = new db();

        $conexao = $database-> conecta_mysql();

        $queryUpdate = "update fornecedor set empresa='$empresa',cnpj='$cnpj',telefone='$telefone',email='$email',
        representacao='$representacao',representante='$representante',observacoes='$observacoes' where `id`='$id'";

        $result = mysqli_query ($conexao, $queryUpdate);

        
    }

   header('Location: ../../views/fornecedor/lista.php');

    echo "Dados alterados com sucesso!!!";
?>