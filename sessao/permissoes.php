<?php
  
    session_start();

    if ((!isset($_SESSION['login']) == true) and (!isset($_SESSION['senha']) == true)) {
        
        unset($_SESSION['login']);
        unset($_SESSION['senha']);
                                
        //header('Location: listar.php');

        $login = $_SESSION['login'];


    }

    

    
       

       require_once('../banco/conexao.php');

        $login = $_SESSION['login'];

        $database = new db();

        $conexao = $database-> conecta_mysql();

        $query = "select * from usuarios where login='$login'";

        $result = mysqli_query ($conexao, $query);


        if($result->num_rows > 0) {

            while($dadosDoUsuario = mysqli_fetch_assoc($result)) {

                // $nome = $dadosDoUsuario['nome'];
                // $cargo = $dadosDoUsuario['cargo'];
                // $login = $dadosDoUsuario['login'];
                // $senha = $dadosDoUsuario['senha'];
                
                $alterarSenha = $dadosDoUsuario["alterar-senha"];
                $usuarioVisualizar = $dadosDoUsuario["usuario-visualizar"];
                $usuarioCadastrar = $dadosDoUsuario["usuario-cadastrar"];
                $clienteVisualizar = $dadosDoUsuario["cliente-visualizar"];
                $clienteCadastrar = $dadosDoUsuario["cliente-cadastrar"];
                $caixaVisualizar = $dadosDoUsuario["caixa-visualizar"];
                $caixaCadastrar = $dadosDoUsuario["caixa-cadastrar"];
                $estoqueVisualizar = $dadosDoUsuario["estoque-visualizar"];
                $estoqueCadastrar = $dadosDoUsuario["estoque-cadastrar"];



            }


            
           
            }       
    //     }else{

    //         echo "Dados não foram alterados!";
    //     }
    // else{
    //     echo "Dados não foram alterados!";
    // }

?>

        

    

 
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="./usuario.css">
    <title>Cadastro de usuário</title>
</head>

<body>
    <!-- Menu superior -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="https://logodownload.org/wp-content/uploads/2014/09/twitter-logo-4.png" alt="logo"
                    height="30" />
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="usuario.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../index.php">Sair</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- /Menu superior-->
    
    <div class="container mt-5">
        <h2 class="mb-4">Suas Permissões de Acesso ao Sistema</h2>
        
        <h4>Sistema Acessado por</h4><h4><b class="btn-outline-danger">(<?php echo $login; ?>)</b></h4>
        <!-- <form action="alterar.php" method="POST"> -->
            
            <h6>Obs.: Tela de Amostra, a mesma não sofre alterações</h6>
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-12 mt-3">
                    <label for="Usuario" class="form-label">Usuário</label>
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox"  id="usuario-visualizar" name="usuario-visualizar" value="usuario-visualizar" <?php echo $usuarioVisualizar == '1' ? 'checked' : '0'; ?>>
                        <label class="form-check-label" for="usuario-visualizar">Visualizar</label>
                    </div>
                    <div class="form-check form-switch mt-2">
                        <input class="form-check-input" type="checkbox" id="usuario-cadastrar" name="usuario-cadastrar" value="usuario-cadastrar" <?php echo $usuarioCadastrar== '1' ? 'checked' : '0'; ?>>
                        <label class="form-check-label" for="usuario-cadastrar">Cadastrar e editar</label>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 mt-3">
                    <label for="cliente" class="form-label">Cliente</label>
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" id="cliente-visualizar" name="cliente-visualizar" value="cliente-visualizar" <?php echo $clienteVisualizar== '1' ? 'checked' : '0'; ?>>
                        <label class="form-check-label" for="cliente-visualizar">Visualizar</label>
                    </div>
                    <div class="form-check form-switch mt-2">
                        <input class="form-check-input" type="checkbox" id="cliente-cadastrar" name="cliente-cadastrar" value="cliente-cadastrar" <?php echo $clienteCadastrar== '1' ? 'checked' : '0'; ?>>
                        <label class="form-check-label" for="cliente-cadastrar">Cadastrar e editar</label>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 mt-3">
                    <label for="fluxo" class="form-label">Fluxo de caixa</label>
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" id="caixa-visualizar" name="caixa-visualizar" value="caixa-visualizar" <?php echo $caixaVisualizar== '1' ? 'checked' : '0'; ?>>
                        <label class="form-check-label" for="caixa-visualizar">Visualizar</label>
                    </div>
                    <div class="form-check form-switch mt-2">
                        <input class="form-check-input" type="checkbox" id="caixa-cadastrar" name="caixa-cadastrar" value="caixa-cadastrar" <?php echo $caixaCadastrar== '1' ? 'checked' : '0'; ?>>
                        <label class="form-check-label" for="caixa-cadastrar">Cadastrar e editar</label>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 mt-3">
                    <label for="" class="form-label">Estoque</label>
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" id="estoque-visualizar" name="estoque-visualizar" value="estoque-visualizar" <?php echo $estoqueVisualizar== '1' ? 'checked' : '0'; ?>>
                        <label class="form-check-label" for="estoque-visualizar">Visualizar</label>
                    </div>
                    <div class="form-check form-switch mt-2">
                        <input class="form-check-input" type="checkbox" id="estoque-cadastrar" name="estoque-cadastrar" value="estoque-cadastrar" <?php echo $estoqueCadastrar== '1' ? 'checked' : '0'; ?>>
                        <label class="form-check-label" for="estoque-cadastrar">Cadastrar e editar</label>
                    </div>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col">
                    <input type="hidden" name="id" value="<?php echo $id; ?>">
                    <a href="usuario.php">
                    <button type="submit" name="submit" class="btn btn-primary alinhar-a-direita ms-2">Voltar</button>
                    </a>
                    
                </div>
            </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</body>

</html>