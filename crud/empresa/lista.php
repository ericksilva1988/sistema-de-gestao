 <?php
    include_once("../../banco/conexao.php");

    //$query = "select * from usuarios order by id desc";

                $database = new db();

                $conexao = $database-> conecta_mysql();

                $query = "select * from empresa order by id desc";

                $result = mysqli_query ($conexao, $query);
    
                //$nome = $row['nome'];
                



        if (!empty($_GET['pesquisar'])) {

            $termoDeBusca = $_GET['pesquisar'];
            $queryBusca = "SELECT * FROM empresa WHERE id LIKE '%$termoDeBusca%' or empresa LIKE '%$termoDeBusca%' 
            or cnpj LIKE '%$termoDeBusca%' or nome LIKE '%$termoDeBusca%' ORDER BY id DESC";     

            $result = mysqli_query ($conexao, $queryBusca);
            
            $msg = "Registros Encontrados";
        }else {
            
            $msg = "Sem buscas aplicadas!";
        }
      
    
?>