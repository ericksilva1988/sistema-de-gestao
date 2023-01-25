<?php

    if (isset($_POST['submit'])) {
      
       require_once('../conexao.php');

        $nome = $_POST['nome'];
        $cargo = $_POST['cargo'];
        $login = $_POST['login'];
        $senha = $_POST['senha'];
        
        $alterarSenha = isset($_POST["alterar-senha"]) ? 1 : 0;
        $usuarioVisualizar = isset($_POST["usuario-visualizar"]) ? 1 : 0;
        $usuarioCadastrar = isset($_POST["usuario-cadastrar"]) ? 1 : 0;
        $clienteVisualizar = isset($_POST["cliente-visualizar"]) ? 1 : 0;
        $clienteCadastrar = isset($_POST["cliente-cadastrar"]) ? 1 : 0;
        $caixaVisualizar = isset($_POST["caixa-visualizar"]) ? 1 : 0;
        $caixaCadastrar = isset($_POST["caixa-cadastrar"]) ? 1 : 0;
        $estoqueVisualizar = isset($_POST["estoque-visualizar"]) ? 1 : 0;
        $estoqueCadastrar = isset($_POST["estoque-cadastrar"]) ? 1 : 0;
       
       
                
        $database = new db();

        $conexao = $database-> conecta_mysql();

        $query = "insert into usuarios(nome,cargo,login,senha,`alterar-senha`,`usuario-visualizar`,`usuario-cadastrar`,
        `cliente-visualizar`,`cliente-cadastrar`,`caixa-visualizar`,`caixa-cadastrar`,`estoque-visualizar`,`estoque-cadastrar`) 
        values ('$nome','$cargo','$login','$senha','$alterarSenha','$usuarioVisualizar','$usuarioCadastrar','$clienteVisualizar',
        '$clienteCadastrar','$caixaVisualizar','$caixaCadastrar','$estoqueVisualizar','$estoqueCadastrar')";

        if (mysqli_query ($conexao, $query)) {

            echo 'Usuário cadastrado com sucesso!';
            //header('Location: login.php');

        }else{

            echo 'Ops, Alguma coisa aconteceu de errado';
        }
    }

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
            <a class="navbar-brand" href="listagem.php">
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
        <h2 class="mb-4">Cadastrar usuário</h2>
        <h4>Dados básicos</h4>
        <form action="cadastrar.php" method="POST">
            <div class="row">
                <div class="col-lg-6 col-md-12 mt-3">
                    <label for="nome" class="form-label">Nome:*</label>
                    <input type="text" class="form-control" id="nome" name="nome" placeholder="Informe o nome" required />
                </div>
                <div class="col-lg-6 col-md-12 mt-3">
                    <label for="cargo" class="form-label">Cargo/Função:</label>
                    <input type="text" class="form-control" id="cargo" name="cargo" placeholder="Informe qual o cargo ou função"
                         />
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-12 mt-3">
                    <label for="login" class="form-label">Login:*</label>
                    <input type="text" class="form-control" id="login" name="login" placeholder="Informe qual o login ou função"
                        required />
                </div>
                <div class="col-lg-4 col-md-12 mt-3">
                    <label for="senha" class="form-label">Senha padrão:*</label>
                    <input type="password" class="form-control" id="senha" name="senha" placeholder="Digite a senha padrão" value="123456"
                        required />
                </div>
                <div class="col-lg-4 col-md-12 mt-3">
                    <label for="mudar-senha" class="form-label">Alterar senha:</label>
                    <div class="form-check form-switch mt-2">
                        <input class="form-check-input" type="checkbox" id="alterar-senha" name="alterar-senha" checked />
                        <label class="form-check-label" for="alterar-senha">Alterar senha ao fazer o primeiro login</label>
                    </div>
                </div>
            </div>
            <hr class="mt-5 mb-4">
            <h4>Permissões</h4>
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-12 mt-3">
                    <label for="" class="form-label">Usuário</label>
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" name="usuario-visualizar" id="usuario-visualizar">
                        <label class="form-check-label" for="usuario-visualizar">Visualizar</label>
                    </div>
                    <div class="form-check form-switch mt-2">
                        <input class="form-check-input" type="checkbox" name="usuario-cadastrar" id="usuario-cadastrar">
                        <label class="form-check-label" for="usuario-cadastrar">Cadastrar e editar</label>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 mt-3">
                    <label for="" class="form-label">Cliente</label>
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" name="cliente-visualizar" id="cliente-visualizar">
                        <label class="form-check-label" for="cliente-visualizar">Visualizar</label>
                    </div>
                    <div class="form-check form-switch mt-2">
                        <input class="form-check-input" type="checkbox" name="cliente-cadastrar" id="cliente-cadastrar">
                        <label class="form-check-label" for="cliente-cadastrar">Cadastrar e editar</label>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 mt-3">
                    <label for="" class="form-label">Fluxo de caixa</label>
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" name="caixa-visualizar" id="caixa-visualizar">
                        <label class="form-check-label" for="caixa-visualizar">Visualizar</label>
                    </div>
                    <div class="form-check form-switch mt-2">
                        <input class="form-check-input" type="checkbox" name="caixa-cadastrar" id="caixa-cadastrar">
                        <label class="form-check-label" for="caixa-cadastrar">Cadastrar e editar</label>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 mt-3">
                    <label for="" class="form-label">Estoque</label>
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" name="estoque-visualizar" id="estoque-visualizar">
                        <label class="form-check-label" for="estoque-visualizar">Visualizar</label>
                    </div>
                    <div class="form-check form-switch mt-2">
                        <input class="form-check-input" type="checkbox" name="estoque-cadastrar" id="estoque-cadastrar">
                        <label class="form-check-label" for="estoque-cadastrar">Cadastrar e editar</label>
                    </div>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col">
                    <button type="submit" name="submit" class="btn btn-primary alinhar-a-direita ms-2">Cadastrar</button>
                    <a href="listar.php" class="btn btn-light alinhar-a-direita">Cancelar</a>
                </div>
            </div>
        </form>
        
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</body>

</html>