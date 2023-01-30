<?php include_once"../../sessao/validarSessao.php"; ?>

<?php include_once"../../crud/fornecedor/lista.php"; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="usuario.css">
    <title>Cadastro de Fornecedor</title>
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
                        <a data-bs-toggle='modal' data-bs-target='#modalSair' class="nav-link"
                            href="../../sessao/encerrar.php">Sair</a>
                    </li>

                </ul>
                <p>
                    <?php echo "Sistema Acessado: *" ?>
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
    </nav>

   
    
    <!-- /Menu superior-->


    <div class="container mt-5">
        <h2 class="mb-4">Lista de Fornecedores</h2>
        <div class="row mb-4">
            <div class="col-md-2 col-lg-2 col-xl-1 mb-2">
                <a href="cadastrar.php" class="btn btn-primary">Cadastrar</a>
            </div>
            <div class="col-md-5 col-sm-12">
                <input class="form-control" type="search" placeholder="Buscar produto" id="pesquisar" name="pesquisar" aria-label="Search">
            </div>
            
            <div class="col-md-3 col-lg-2 mb-2">
                <button onclick="searchData()"  class="btn btn-primary">
                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><path d="M0 0h24v24H0z" fill="none"/><path d="M15.5 14h-.79l-.28-.27C15.41 12.59 16 11.11 16 9.5 16 5.91 13.09 3 9.5 3S3 5.91 3 9.5 5.91 16 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z"/></svg>
                </button>
            </div>
        </div>
        <p><?php echo $msg; ?></p>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">Empresa</th>
                    <th scope="col">CNPJ</th>
                    <th scope="col">Telefone</th>
                    <th scope="col">E-mail</th>
                    <th scope="col">Representação</th>
                    <th scope="col">Representante</th>
                    <th scope="col">Observações</th>
                    <th scope="col">Ações</th>

                </tr>
            </thead>
            <tbody>
                
                <?php 

                        while($dados_fornecedor = mysqli_fetch_assoc($result)) {
                            
                            echo "<tr>";
                            echo "<td>" . $dados_fornecedor['id'] . "</td>";
                            echo "<td>" . $dados_fornecedor['empresa'] . "</td>";
                            echo "<td>" . $dados_fornecedor['cnpj'] . "</td>";
                            echo "<td>" . $dados_fornecedor['telefone'] . "</td>";
                            echo "<td>" . $dados_fornecedor['email'] . "</td>";
                            echo "<td>" . $dados_fornecedor['representacao'] . "</td>";
                            echo "<td>" . $dados_fornecedor['representante'] . "</td>";
                            echo "<td>" . $dados_fornecedor['observacoes'] . "</td>";
                                                        
                            
                            echo "<td>
                                <a href='../../views/fornecedor/recuperar.php?id=$dados_fornecedor[id]'>
                                  <button class='btn btn-light'>Editar</button>
                                </a>
                                
                                <a data-bs-toggle='modal' data-bs-target='#modalPadrao' 
                                onclick='passaDadosModal($dados_fornecedor[id], `$dados_fornecedor[empresa]`)'>
                                
                                <button class='btn btn-danger'>Excluir</button>
                                </a>

                            </td>";
                            echo "</tr>";
                        }

                ?>
            </tbody>
        </table>


        <!-- Modal -->
        <div class="modal fade" id="modalPadrao" tabindex="-1" aria-labelledby="modalPadrao" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalPadrao">Atenção!</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        Tem certeza que deseja excluir o usuário <strong id="nome-usuario"></strong>?
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cancelar</button>
                        <a href="" class="btn btn-danger" id="linkExcluir">Excluir</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php  

?>
    <!-- /Modal -->

        <script type="text/javascript">
    
            function passaDadosModal(id, empresa){
               
                document.querySelector('#nome-usuario').innerText=empresa;
                document.querySelector('#linkExcluir').href="../../crud/fornecedor/deletar.php?id="+id;
                                
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
            window.location = 'lista.php?pesquisar='+pesquisar.value;
            }

 
        </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</body>

</html>