<?php include"../../sessao/validarSessao.php"; ?>

<?php include "../../crud/empresa/recuperar.php"; ?>

<?php include"../../componentes/head.php";  ?>



    <!-- /Menu superior-->

    <div class="container mt-5">
        <h2 class="mb-4">Editar empresa</h2>
        <form action="../../crud/empresa/alterar.php" method="POST">
            <div class="row">
                <div class="col mt-3">
                    <label for="empresa" class="form-label">Empresa:*</label>
                    <input type="text" class="form-control" id="empresa" name="empresa" value="<?php echo $empresa; ?>"
                        placeholder="Informe a empresa" />
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-12 mt-3">
                    <label for="cnpj" class="form-label">CNPJ:</label>
                    <input type="text" class="form-control" id="cnpj" name="cnpj" value="<?php echo $cnpj; ?>" placeholder="Informe o CNPJ" />
                </div>
                <div class="col-lg-6 col-md-12 mt-3">
                    <label for="nome" class="form-label">Nome:</label>
                    <input type="text" class="form-control" id="nome" name="nome" value="<?php echo $nome; ?>" placeholder="Informe o nome fantasia/pessoal" />
                </div>
                <div class="col-lg-6 col-md-12 mt-3">
                    <label for="telefone" class="form-label">Telefone:*</label>
                    <input type="text" class="form-control" id="telefone" name="telefone" value="<?php echo $telefone; ?>" placeholder="Informe o Telefone"  />
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-12 mt-3">
                    <label for="email" class="form-label">E-mail</label>
                    <input type="email" class="form-control" id="email" name="email" value="<?php echo $email; ?>" placeholder="Informe o E-mail" />
                </div>
                <div class="col-lg-6 col-md-12 mt-3">
                    <label for="endereco" class="form-label">Endereço:</label>
                    <input type="text" class="form-control" id="endereco" name="endereco" value="<?php echo $endereco; ?>" placeholder="Informe o Endereço" />
                </div>
                <div class="col-lg-6 col-md-12 mt-3">
                    <label for="referencia" class="form-label">Ponto de Referência:</label>
                    <input type="text" class="form-control" id="referencia" name="referencia" value="<?php echo $referencia; ?>" placeholder="Informe o ponto de referência" />
                </div>
                <div class="col-lg-6 col-md-12 mt-3">
                    <label for="segmento" class="form-label">Segmento:</label>
                    <input type="text" class="form-control" id="segmento" name="segmento" value="<?php echo $segmento; ?>" placeholder="Informe o segmento da empresa" />
                </div>
                

            <div class="row mt-5">
                <div class="col">
                    <input type="hidden" name="atualizado-em" id="atualizado-em" 
                        value=" <?php $hoje = date('Y-m-d H:i:s'); echo $hoje; ?> ">
                    <input type="hidden" name="id" value="<?php echo $id; ?>">
                    <button type="submit" name="submit" class="btn btn-primary alinhar-a-direita ms-2">Alterar</button>
                    <a href="listar.php" class="btn btn-light alinhar-a-direita">Cancelar</a>
                </div>
            </div>
        </form>
    </div>
    <?php include"../../js/cliente/recuperar.php"; ?>
</body>

</html>