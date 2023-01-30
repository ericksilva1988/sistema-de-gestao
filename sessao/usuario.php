<?php include("../sessao/validarSessao.php"); ?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="usuario.css">
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
                        <a class="nav-link active" aria-current="page" href="../../sessao/usuario.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="../../sessao/usuario.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="../../sessao/usuario.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="../../sessao/usuario.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="../../sessao/usuario.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="../../sessao/usuario.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="../../sessao/usuario.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="../../sessao/usuario.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="../../sessao/usuario.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="../../sessao/usuario.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="../../sessao/usuario.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="../../sessao/usuario.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a data-bs-toggle='modal' data-bs-target='#modalSair' class="nav-link"
                            href="../../sessao/encerrar.php">Sair</a>
                    </li>

                </ul>
                <p>
                    <?php echo "Bem Vindo: *" ?>
                </p>
                <p class=><b>
                        <?php echo $_SESSION['login']; ?>
                    </b></p>
            </div>
        </div>
    </nav>

    <!-- Modal -->

    <div class="modal fade" id="modalSair" tabindex="-1" aria-labelledby="modalSair" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalSair">Atenção!</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <b>
                        <?php echo $_SESSION['login']; ?>
                    </b> Tem certeza que deseja sair da sessão?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cancelar</button>
                    <a href="../../sessao/encerrar.php">
                        <button type="button" class="btn btn-danger">Sair</button>
                    </a>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- /Modal -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    
    <!-- /Menu superior-->


    <div class="container mt-5">
        <h2 class="mb-4">Acesso as opções do sistema</h2>
        <div class="row mb-4">
            <div class="col-md-2 col-lg-2 col-xl-1 mb-2">
                <a href="../views/usuario/lista.php" class="btn btn-primary btn-lg">Lista de Usuários</a>
            </div>
            <div class="col-md-2 col-lg-2 col-xl-1 mb-2">
                <a href="../views/usuario/cadastrar.php" class="btn btn-primary btn-lg">Cadastrar Usuário</a>
            </div>
            <div class="col-md-2 col-lg-2 col-xl-1 mb-2">
                <a href="permissoes.php" class="btn btn-primary btn-lg">Suas Permissões</a>
            </div>
            <div class="col-md-2 col-lg-2 col-xl-1 mb-2">
                <a href="../views/produto/lista.php" class="btn btn-secondary btn-lg">Lista de Produtos</a>
            </div>
            <div class="col-md-2 col-lg-2 col-xl-1 mb-2">
                <a href="../views/produto/cadastrar.php" class="btn btn-secondary btn-lg">Novo Produto</a>
            </div>
            <div class="col-md-2 col-lg-2 col-xl-1 mb-2">
                <a href="#" class="btn btn-secondary btn-lg">Produtos em Falta</a>
            </div>
            <div class="col-md-2 col-lg-2 col-xl-1 mb-2">
                <a href="../views/cliente/lista.php" class="btn btn-success btn-lg">Lista de Clientes</a>
            </div>
            <div class="col-md-2 col-lg-2 col-xl-1 mb-2">
                <a href="../views/cliente/cadastrar.php" class="btn btn-success btn-lg">Cadastrar Cliente</a>
            </div>
            <div class="col-md-2 col-lg-2 col-xl-1 mb-2">
                <a href="#" class="btn btn-success btn-lg">Fiados Vencidos</a>
            </div>
            <div class="col-md-2 col-lg-2 col-xl-1 mb-2">
                <a href="../views/fornecedor/lista.php" class="btn btn-warning btn-lg">Lista de Fornecedores</a>
            </div>
            <div class="col-md-2 col-lg-2 col-xl-1 mb-2">
                <a href="../views/fornecedor/cadastrar.php" class="btn btn-warning btn-lg">Cadastrar Fornecedores</a>
            </div>
            
            
            


    <!-- /Modal -->

        <script type="text/javascript">
    
            function passaDadosModal(id, nome){
               
                document.querySelector('#nome-usuario').innerText=nome;
                document.querySelector('#linkExcluir').href="excluir.php?id="+id;
                                
            }

            
        </script>



        <script type="text/javascript">
            
            var pesquisar = document.getElementById('pesquisar');
            
            pesquisar.addEventListener("keydown", function(event) {
                if (event.key ==="Enter"){
                    fazBusca();
                }
            });


            function fazBusca() {
            window.location = 'listar.php?pesquisar='+pesquisar.value;
            }

 
        </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</body>

</html>