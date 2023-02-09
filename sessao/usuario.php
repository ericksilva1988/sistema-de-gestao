<?php include("../sessao/validarSessao.php"); ?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/index.css">
    <title>Opções do Sistema</title>
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
                    
                    <?php 

                        if ($_SESSION['usuario-visualizar']) { ?>
                            
                            <li class="nav-item">
                                <a class="btn btn-outline-primary" aria-current="page" href="../views/usuario/lista.php">USUÁRIO</a>
                            </li>
                        
                    <?php } ?>
                    

                    
                    <li class="nav-item">
                        <a class="btn btn-outline-secondary" aria-current="page" href="../views/produto/lista.php">PRODUTO</a>
                    </li>
                    <li class="nav-item">
                        <a class="btn btn-outline-success" aria-current="page" href="../views/fornecedor/lista.php">FORNECEDOR</a>
                    </li>
                    <li class="nav-item">
                        <a class="btn btn-outline-warning" aria-current="page" href="../views/cliente/lista.php">CLIENTE</a>
                    </li>
                    <?php 
                         if ($_SESSION['eh-master']) { ?>
                            <li class="nav-item">
                                <a class="btn btn-outline-dark" aria-current="page" href="../views/empresa/lista.php">EMPRESA</a>
                            </li>
                    <?php } ?>
                    
                    </li>
                    <li class="nav-item">
                        <a  class="nav-link"
                            href="encerrar.php">SAIR</a>
                    </li>

                </ul>

                <div class="row mb-4">
                    <h3><?php echo "Bem Vindo: " ?><b><?php echo $_SESSION['login']; ?></b></h3>
                </div>
                
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
                    <a href="encerrar.php">
                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cancelar</button>
                    </a>
                    <a href="encerrar.php">
                        <button type="button" class="btn btn-danger">Cair Fora</button>
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
        <div class="col">
        <h2 class="mb-8 centralizar">Acesse a opção desejada acima!</h2>
        
        
        <div class="row">
            <div class="col centralizar">
                <img class="" src="https://cliply.co/wp-content/uploads/2019/05/371905140_MEET_ROBOT_400px.gif" alt="logo" height="350" >
            </div>
            <div class="col centralizar">
                <img class="" src="../img/logo.png" alt="logo" height="550">
            </div>
        </div>
    </div>

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