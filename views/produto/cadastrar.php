<?php include"../../sessao/validarSessao.php"; ?>

<?php include"../../crud/produto/criar.php"; ?>

<?php include"../../componentes/produto/head.php"; ?>

<?php 
    
    if (!$_SESSION['estoque-cadastrar']){
        header('Location: ../../sessao/usuario.php');
    }

 ?>

    <!-- /Menu superior-->

    <div class="container mt-5">
        <h2 class="mb-4">Cadastrar produto</h2>
        <form action="../../crud/produto/criar.php" method="GET">
            <div class="row">
                <div class="col mt-3">
                    <label for="descricao" class="form-label">Descrição:*</label>
                    <input type="text" class="form-control" id="descricao" name="descricao"
                        placeholder="Informe a descrição do produto" required />
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-12 mt-3">
                    <label for="custo" class="form-label">Valor de custo:*</label>
                    <input type="text" class="form-control" id="custo" name="custo"
                        placeholder="Informe o valor de custo por unidade" required />
                </div>
                <div class="col-lg-6 col-md-12 mt-3">
                    <label for="venda" class="form-label">Valor de venda:*</label>
                    <input type="text" class="form-control" id="venda" name="venda"
                        placeholder="Informe o valor de venda por unidade" required />
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-12 mt-3">
                    <label for="estoque-minimo" class="form-label">Estoque mínimo:*</label>
                    <input type="text" class="form-control" id="estoque-minimo" name="estoque-minimo"
                        placeholder="Informe a quantidade mínima do produto no estoque" required />
                </div>
                <div class="col-lg-6 col-md-12 mt-3">
                    <label for="estoque-atual" class="form-label">Estoque atual:*</label>
                    <input type="text" class="form-control" id="estoque-atual" name="estoque-atual"
                        placeholder="Informe a quantidade de itens desse produto nesse momento" required />
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-12 mt-3">
                    <label for="codigo-barra" class="form-label">Código de barra:</label>
                    <input type="text" class="form-control" id="codigo-barra" name="codigo-barra"
                        placeholder="Informe o código manualmente ou leia da sua câmera" />
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

                        $queryFonecedor = "select * from fornecedor";

                        $resultado = mysqli_query ($conexao, $queryFonecedor);

                        //print_r($resultado);

                        

                            while($dadosDoFornecedor = mysqli_fetch_assoc($resultado)) { 

                                    $id = $dadosDoFornecedor['id'];
                                    $empresa = $dadosDoFornecedor['empresa'];
                            ?>
                    
                            <option value="<?php echo $dadosDoFornecedor['id']; ?>"><?php echo $dadosDoFornecedor['empresa']; ?></option>    

                   
                       <?php }  ?>
                            
                    </select>
                    <input type="hidden" name="empresa" id="empresa" value="<?php echo $_SESSION['id-empresa']; ?>">


                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-12 mt-3">
                    <label for="marca" class="form-label">Marca:</label>
                    <input type="text" class="form-control" id="marca" name="marca"
                        placeholder="Informe a marca do produto" />
                </div>
                <div class="col-lg-4 col-md-12 mt-3">
                    <label for="modelo" class="form-label">Modelo:</label>
                    <input type="text" class="form-control" id="modelo" name="modelo"
                        placeholder="Informe o modelo do produto" />
                </div>
                <div class="col-lg-4 col-md-12 mt-3">
                    <label for="peso" class="form-label">Peso:</label>
                    <input type="text" class="form-control" id="peso" name="peso"
                        placeholder="Informe o peso do produto" />
                </div>
            </div>
            <div class="row">
                <div class="col mt-3">
                    <label for="observacoes" class="form-label">Observações:</label>
                    <textarea class="form-control" id="observacoes" name="observacoes" rows="3"></textarea>
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
    <?php include"../../js/produto/recuperar.php"; ?>
</body>

</html>