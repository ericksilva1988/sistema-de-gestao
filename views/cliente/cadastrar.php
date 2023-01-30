<?php include_once"../../sessao/validarSessao.php"; ?>

<?php include_once"../../crud/cliente/criar.php"; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="./usuario.css">
    <title>Cadastro de cliente</title>
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
        <h2 class="mb-4">Cadastrar cliente</h2>
        <h4>Dados básicos</h4>
        <form action="../../crud/cliente/criar.php" method="POST">
            <div class="row">
                <div class="col-lg-6 col-md-12 mt-3">
                    <label for="nome" class="form-label">Nome:*</label>
                    <input type="text" class="form-control" id="nome" name="nome" placeholder="Informe o nome" required />
                </div>
                <div class="col-lg-6 col-md-12 mt-3">
                    <label for="apelido" class="form-label">Apelido:</label>
                    <input type="text" class="form-control" id="apelido" name="apelido" placeholder="Informe o apelido"
                         />
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-12 mt-3">
                    <label for="telefone" class="form-label">Telefone:</label>
                    <input type="text" class="form-control" id="telefone" name="telefone" placeholder="Informe o telefone"
                         />
                </div>
                <div class="col-lg-6 col-md-12 mt-3">
                    <label for="rua" class="form-label">Rua:</label>
                    <input type="text" class="form-control" id="ruarua" name="rua" placeholder="Informe o endereco"
                         />
                </div>
                <div class="col-lg-2 col-md-12 mt-3">
                    <label for="numero" class="form-label">Número:</label>
                    <input type="text" class="form-control" id="numero" name="numero" placeholder="Informe o Nº"  />
                </div>
                <div class="col-lg-3 col-md-12 mt-3">
                    <label for="cep" class="form-label">CEP</label>
                    <input type="text" class="form-control" id="cep" name="cep" placeholder="Informe o CEP" required />
                </div>
                <div class="col-lg-4 col-md-12 mt-3">
                    <label for="cidade" class="form-label">Cidade:</label>
                    <input type="text" class="form-control" id="cidade" name="cidade" placeholder="Informe a cidade"  />
                </div>
                <div class="col-lg-4 col-md-12 mt-3">
                    <label for="estado" class="form-label">Estado:</label>
                    
                        <select class="form-select" aria-label="Selecione um fornecedor" id="estado" name="estado" >
                            <option value="estado">Selecione o Estado</option> 
                            <option value="ac">Acre</option> 
                            <option value="al">Alagoas</option> 
                            <option value="am">Amazonas</option> 
                            <option value="ap">Amapá</option> 
                            <option value="ba">Bahia</option> 
                            <option value="ce">Ceará</option> 
                            <option value="df">Distrito Federal</option> 
                            <option value="es">Espírito Santo</option> 
                            <option value="go">Goiás</option> 
                            <option value="ma">Maranhão</option> 
                            <option value="mt">Mato Grosso</option> 
                            <option value="ms">Mato Grosso do Sul</option> 
                            <option value="mg">Minas Gerais</option> 
                            <option value="pa">Pará</option> 
                            <option value="pb">Paraíba</option> 
                            <option value="pr">Paraná</option> 
                            <option value="pe">Pernambuco</option> 
                            <option value="pi">Piauí</option> 
                            <option value="rj">Rio de Janeiro</option> 
                            <option value="rn">Rio Grande do Norte</option> 
                            <option value="ro">Rondônia</option> 
                            <option value="rs">Rio Grande do Sul</option> 
                            <option value="rr">Roraima</option> 
                            <option value="sc">Santa Catarina</option> 
                            <option value="se">Sergipe</option> 
                            <option value="sp">São Paulo</option> 
                            <option value="to">Tocantins</option> 
                        </select>
                        
                </div>
                <div class="col-lg-8 col-md-12 mt-3">
                    <label for="referencia" class="form-label">Ponto de Referência:</label>
                    <input type="text" class="form-control" id="referencia" name="referencia" placeholder="Informe o ponto de referência"/>

                </div>
                
                
            </div>
            <hr class="mt-5 mb-4">
                        
            <h4>Permissões</h4>
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-12 mt-3">
                    <label for="" class="form-label">Comprar Fiado</label>
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" name="fiado" id="fiado">
                        <label class="form-check-label" for="fiado">Não/Sim</label>
                    </div>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col">
                    <button type="submit" name="submit" class="btn btn-primary alinhar-a-direita ms-2">Cadastrar</button>
                    <a href="lista.php" class="btn btn-light alinhar-a-direita">Cancelar</a>
                </div>
            </div>
        </form>
        
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</body>

</html>