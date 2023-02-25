<?php include"../../sessao/validarSessao.php"; ?>

<?php  include "../../crud/produto/recuperar.php"; ?>

<?php include"../../componentes/head.php"; ?>

    <!-- /Menu superior-->

    <div class="container mt-5">
        <h2 class="mb-4">Editar produto</h2>
        <form action="../../crud/produto/alterar.php" method="POST">
            <div class="row">
                <div class="col mt-3">
                    <label for="descricao" class="form-label">Descrição:*</label>
                    <input type="text" class="form-control" id="descricao" name="descricao" value="<?php echo $descricao; ?>" placeholder="Informe a descrição do produto" />
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-12 mt-3">
                    <label for="custo" class="form-label">Valor de custo:*</label>
                    <input type="text" class="form-control" id="custo" name="custo" value="<?php echo $custo; ?>" placeholder="Informe o valor de custo por unidade" />
                </div>
                <div class="col-lg-6 col-md-12 mt-3">
                    <label for="venda" class="form-label">Valor de venda:*</label>
                    <input type="text" class="form-control" id="venda" name="venda" value="<?php echo $venda; ?>" placeholder="Informe o valor de venda por unidade" />
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-12 mt-3">
                    <label for="estoque-minimo" class="form-label">Estoque mínimo:*</label>
                    <input type="text" class="form-control" id="estoque-minimo" name="estoque-minimo" value="<?php echo $estoqueMinimo; ?>" placeholder="Informe a quantidade mínima do produto no estoque" />
                </div>
                <div class="col-lg-6 col-md-12 mt-3">
                    <label for="estoque-atual" class="form-label">Estoque atual:*</label>
                    <input type="text" class="form-control" id="estoque-atual" name="estoque-atual"value="<?php echo $estoqueAtual; ?>" placeholder="Informe a quantidade de itens desse produto nesse momento" />
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-12 mt-3">
                    <label for="codigo-barra" class="form-label">Código de barra:</label>
                    <input type="text" class="form-control" id="codigo-barra" name="codigo-barra" value="<?php echo $codigoBarra; ?>" placeholder="Informe o código manualmente ou leia da sua câmera" />
                    <button class="btn btn-secondary">Ler código</button>
                </div>
                  <div class="col-lg-6 col-md-12 mt-3">
                    <label for="fornecedor" class="form-label">Fornecedor:</label>
                    <select class="form-select" aria-label="Selecione um fornecedor" id="fornecedor" name="fornecedor">
                        <option selected value="" selected disabled="disabled" hidden>Selecione um fornecedor</option>

                    <?php  

                        require_once('../../banco/conexao.php');

                        $database = new db();

                        $conexao = $database-> conecta_mysql();

                        $queryFonecedor = "select * from fornecedor order by id desc";

                        $resultado = mysqli_query ($conexao, $queryFonecedor);

                        //print_r($resultado);

                        

                            while($dadosDoProduto = mysqli_fetch_assoc($resultado)) { 

                                    $idFornecedor = $dadosDoProduto['id'];
                                    $empresa = $dadosDoProduto['empresa'];

                    ?>
                            <option value="<?php echo $idFornecedor; ?>" <?php echo $fornecedor == $idFornecedor ? "selected" : ""; ?>>
                                <?php echo $empresa; ?>
                            </option>
                       
                    <?php }  ?>
                            
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-12 mt-3">
                    <label for="marca" class="form-label">Marca:</label>
                    <input type="text" class="form-control" id="marca" name="marca" value="<?php echo $marca; ?>" placeholder="Informe a marca do produto" />
                </div>
                <div class="col-lg-4 col-md-12 mt-3">
                    <label for="modelo" class="form-label">Modelo:</label>
                    <input type="text" class="form-control" id="modelo" name="modelo" value="<?php echo $modelo; ?>" placeholder="Informe o modelo do produto" />
                </div>
                <div class="col-lg-4 col-md-12 mt-3">
                    <label for="peso" class="form-label">Peso:</label>
                    <input type="text" class="form-control" id="peso" name="peso" value="<?php echo $peso; ?>" placeholder="Informe o peso do produto" />
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
                    <input type="hidden" name="atualizado-em" id="atualizado-em" 
                        value=" <?php $hoje = date('Y-m-d H:i:s'); echo $hoje; ?> ">
                    <input type="hidden" name="id" value="<?php echo $id; ?>">
                    <button  type="submit" name="submit" class="btn btn-primary alinhar-a-direita ms-2">Alterar</button>
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