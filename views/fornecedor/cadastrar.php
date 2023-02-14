<?php include_once"../../sessao/validarSessao.php"; ?>

<?php include_once"../../crud/fornecedor/criar.php"; ?>

<?php include"../../componentes/fornecedor/head.php";  ?>

    <!-- /Menu superior-->

    <div class="container mt-5">
        <h2 class="mb-4">Cadastrar fornecedor</h2>
        <form action="../../crud/fornecedor/criar.php" method="GET">
            <div class="row">
                <div class="col mt-3">
                    <label for="empresa" class="form-label">Empresa:*</label>
                    <input type="text" class="form-control" id="empresa" name="empresa"
                        placeholder="Informe a empresa" required />
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-12 mt-3">
                    <label for="cnpj" class="form-label">CNPJ:</label>
                    <input type="text" class="form-control" id="cnpj" name="cnpj"
                        placeholder="Informe o CNPJ" />
                </div>
                <div class="col-lg-6 col-md-12 mt-3">
                    <label for="telefone" class="form-label">Telefone:*</label>
                    <input type="text" class="form-control" id="telefone" name="telefone"
                        placeholder="Informe o Telefone" required />
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-12 mt-3">
                    <label for="email" class="form-label">E-mail</label>
                    <input type="email" class="form-control" id="email" name="email"
                        placeholder="Informe o E-mail" />
                </div>
                <div class="col-lg-6 col-md-12 mt-3">
                    <label for="representacao" class="form-label">Seguimento de representação:</label>
                    <input type="text" class="form-control" id="representacao" name="representacao"
                        placeholder="Informe qual representação/seguimento de produto" />
                </div>
                <div class="col-lg-6 col-md-12 mt-3">
                    <label for="representante" class="form-label">Nome do Represenante:</label>
                    <input type="text" class="form-control" id="representante" name="representante"
                        placeholder="Informe o nome do representante/vendedor" />
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
                    <a href="listar.php" class="btn btn-light alinhar-a-direita">Cancelar</a>
                </div>
            </div>
            <input type="hidden" name="id-empresa" id="id-empresa" value="<?php echo $_SESSION['id-empresa']; ?>">
        </form>
    </div>
    <?php include"../../js/fornecedor/recuperar.php"; ?>
</body>

</html>