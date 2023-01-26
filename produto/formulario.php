<?php

    if (!empty($_GET['id'])) {
       

       require_once('../conexao.php');

        $id = $_GET['id'];

        $database = new db();

        $conexao = $database-> conecta_mysql();

        $query = "select * from produtos where id=$id";

        $result = mysqli_query ($conexao, $query);

        

        if($result->num_rows > 0) {

            while($dadosDoProduto = mysqli_fetch_assoc($result)) {

                $descricao = $dadosDoProduto['descricao'];
                $custo = $dadosDoProduto['custo'];
                $venda = $dadosDoProduto['venda'];
                $estoqueMinimo = $dadosDoProduto['estoque-minimo'];
                $estoqueAtual = $dadosDoProduto['estoque-atual'];
                $codigoBarra = $dadosDoProduto['codigo-barra'];
                $fornecedor = $dadosDoProduto['fornecedor'];
                $marca = $dadosDoProduto['marca'];
                $modelo = $dadosDoProduto['modelo'];
                $peso = $dadosDoProduto['peso'];
                $observacoes = $dadosDoProduto['observacoes'];
                
        }
                   
                   
        }else{

            echo "Dados não foram alterados!";
        }
    }else{
        echo "Dados não foram alterados!";
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
    <link rel="stylesheet" href="./produto.css">
    <title>Cadastro de produto</title>
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
                        <a class="nav-link active" aria-current="page" href="../usuario/usuario.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a data-bs-toggle='modal' data-bs-target='#modalSair'class="nav-link" href="../sair.php">Sair</a>
                </ul>
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
                       <b><?php echo $_SESSION['login']; ?></b> Tem certeza que deseja sair da sessão?
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cancelar</button>
                        <a href="../sair.php">
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
        <h2 class="mb-4">Cadastrar produto</h2>
        <form action="alterar.php" method="POST">
            <div class="row">
                <div class="col mt-3">
                    <label for="descricao" class="form-label">Descrição:*</label>
                    <input type="text" class="form-control" id="descricao" name="descricao" value="<?php echo $descricao; ?>"
                        placeholder="Informe a descrição do produto" required />
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-12 mt-3">
                    <label for="custo" class="form-label">Valor de custo:*</label>
                    <input type="text" class="form-control" id="custo" name="custo" value="<?php echo $custo; ?>"
                        placeholder="Informe o valor de custo por unidade" required />
                </div>
                <div class="col-lg-6 col-md-12 mt-3">
                    <label for="venda" class="form-label">Valor de venda:*</label>
                    <input type="text" class="form-control" id="venda" name="venda" value="<?php echo $venda; ?>"
                        placeholder="Informe o valor de venda por unidade" required />
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-12 mt-3">
                    <label for="estoque-minimo" class="form-label">Estoque mínimo:*</label>
                    <input type="text" class="form-control" id="estoque-minimo" name="estoque-minimo" value="<?php echo $estoqueMinimo; ?>"
                        placeholder="Informe a quantidade mínima do produto no estoque" required />
                </div>
                <div class="col-lg-6 col-md-12 mt-3">
                    <label for="estoque-atual" class="form-label">Estoque atual:*</label>
                    <input type="text" class="form-control" id="estoque-atual" name="estoque-atual"value="<?php echo $estoqueAtual; ?>"
                        placeholder="Informe a quantidade de itens desse produto nesse momento" required />
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-12 mt-3">
                    <label for="codigo-barra" class="form-label">Código de barra:</label>
                    <input type="text" class="form-control" id="codigo-barra" name="codigo-barra" value="<?php echo $codigoBarra; ?>"
                        placeholder="Informe o código manualmente ou leia da sua câmera" />
                    <button class="btn btn-secondary">Ler código</button>
                </div>
                <div class="col-lg-6 col-md-12 mt-3">
                    <label for="fornecedor" class="form-label">Fornecedor:</label>
                    <select class="form-select" aria-label="Selecione um fornecedor" id="fornecedor" name="fornecedor">
                        <option selected value="" selected disabled="disabled" hidden>Selecione um fornecedor</option>
                        <option value="1" <?php echo $fornecedor == '1' ? 'selected' : '' ?>>Fornecedor 1</option>
                        <option value="2" <?php echo $fornecedor == '2' ? 'selected' : '' ?>>Fornecedor 2</option>
                        <option value="3" <?php echo $fornecedor == '3' ? 'selected' : '' ?>>Fornecedor 3</option>
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-12 mt-3">
                    <label for="marca" class="form-label">Marca:</label>
                    <input type="text" class="form-control" id="marca" name="marca" value="<?php echo $marca; ?>"
                        placeholder="Informe a marca do produto" />
                </div>
                <div class="col-lg-4 col-md-12 mt-3">
                    <label for="modelo" class="form-label">Modelo:</label>
                    <input type="text" class="form-control" id="modelo" name="modelo" value="<?php echo $modelo; ?>"
                        placeholder="Informe o modelo do produto" />
                </div>
                <div class="col-lg-4 col-md-12 mt-3">
                    <label for="peso" class="form-label">Peso:</label>
                    <input type="text" class="form-control" id="peso" name="peso" value="<?php echo $peso; ?>"
                        placeholder="Informe o peso do produto" />
                </div>
            </div>
            <div class="row">
                <div class="col mt-3">
                    <label for="observacoes" class="form-label">Observações:</label>
                    <textarea class="form-control" id="observacoes" name="observacoes" rows="3"><?php echo $observacoes; ?></textarea>
                </div>
            </div>

            <div class="row mt-5">
                <div class="col">
                    <input type="hidden" name="id" value="<?php echo $id; ?>">
                    <button  type="submit" name="submit" class="btn btn-primary alinhar-a-direita ms-2">Alterar</button>
                    <a href="../usuario/usuario.php" class="btn btn-light alinhar-a-direita">Cancelar</a>
                </div>
            </div>
        </form>
        
        
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</body>

</html>