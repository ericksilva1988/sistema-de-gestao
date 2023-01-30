<?php include"../../sessao/validarSessao.php"; ?>

<?php include"../../componentes/usuario/head.php"; ?>

    <!-- /Menu superior-->

    <div class="container mt-5">
        <h2 class="mb-4">Cadastrar usuário</h2>
        <h4>Dados básicos</h4>
        <form action="../../crud/usuario/criar.php" method="POST">
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
                    <a href="lista.php" class="btn btn-light alinhar-a-direita">Cancelar</a>
                </div>
            </div>
        </form>
        
    </div>
    <?php include"../../js/usuario/recuperar.php"; ?>
</body>

</html>