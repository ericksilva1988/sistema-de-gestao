<?php 
    
    // include_once("../../banco/conexao.php");


    // if (!empty($_GET['id'])) {
        
        


    //     $id = $_GET['id'];
        
    //     //echo $id;

    //     //Conexão com Banco de Dados
    //     $database = new db();

    //     $conexao = $database-> conecta_mysql();

    //     $sqlUsuario = "select * from produtos where id=$id";


    //     $result = mysqli_query ($conexao, $sqlUsuario);

    //     if ($result->num_rows > 0) {
            
    //             $sqlSoma = "update produtos set `estoque-atual`='$estoqueAtual'+1 where id=$id";
    //             $resultSoma = mysqli_query ($conexao, $sqlSoma);
            

            
    //     }

    // }

    // header('Location: ../../views/produto/lista.php');



?>
<?php 

    include_once("../../banco/conexao.php");


    if (!empty($_GET['id'])) {
        
        


        $id = $_GET['id'];
        
        //echo $id;

        //Conexão com Banco de Dados
        $database = new db();

        $conexao = $database-> conecta_mysql();

        $sqlUsuario = "select sum(preco) as 'estoque-atual' from produtos";


        $result = mysqli_query ($conexao, $sqlUsuario);

        
        
    }

     header('Location: ../../views/produto/lista.php');

    // echo "Dados alterados com sucesso!!!";
?>