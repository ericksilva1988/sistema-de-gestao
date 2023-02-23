<?php include"../../sessao/validarSessao.php"; ?>

<?php include"../../crud/usuario/recuperar.php"; ?>

<?php include"../../componentes/usuario/head.php"; ?>

    <!-- /Menu superior-->
    
    <div class="container mt-5">
        <h2 class="mb-4">Editar usuário</h2>
        <h4>Dados básicos</h4>
        <form action="../../crud/usuario/alterar.php" method="POST">
            <div class="row">
                <div class="col-lg-6 col-md-12 mt-3">
                    <label for="nome" class="form-label">Nome:*</label>
                    <input type="text" class="form-control" name="nome" id="nome" value="<?php echo $nome; ?>" required />
                </div>
                <div class="col-lg-6 col-md-12 mt-3">
                    <label for="cargo" class="form-label">Cargo/Função:*</label>
                    <input type="text" class="form-control" id="cargo" name="cargo" value="<?php echo $cargo; ?>"
                        required />
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-12 mt-3">
                    <label for="login" class="form-label">Login:*</label>
                    <input type="text" class="form-control" id="login" name="login" value="<?php echo $login; ?>"
                        required />
                </div>
                <div class="col-lg-4 col-md-12 mt-3">
                    <label for="senha" class="form-label">Senha padrão:*</label>
                    <input type="text" class="form-control" id="senha" name="senha" value="<?php echo $senha; ?>"
                        required />
                </div>
                <div class="col-lg-4 col-md-12 mt-3">
                    <label for="alterar-senha" class="form-label">Alterar senha:</label>
                    <div class="form-check form-switch mt-2">
                        <input class="form-check-input" type="checkbox" id="alterar-senha" name="alterar-senha" value="alterar-senha" <?php echo $alterarSenha == '1' ? 'checked' : '0' ?> checked />
                        <label class="form-check-label" for="alterar-senha">Alterar senha ao fazer o primeiro login</label>
                    </div>
                </div>
            </div>
            <hr class="mt-5 mb-4">
            <h4>Tipo de Usuário</h4>
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-12 mt-3">
                    <label for="" class="form-label">Identifique o tipo</label>
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" name="eh-admin" id="eh-admin" value="eh-admin" <?php echo $admin == '1' ? 'checked' : '0'; ?>>
                        <label class="form-check-label" for="eh-admin">É Admin</label>
                    </div>
                    <div class="form-check form-switch mt-2">
                        <input class="form-check-input" type="checkbox" name="eh-master" id="eh-master" value="eh-master" <?php echo $master == '1' ? 'checked' : '0'; ?>>
                        <label class="form-check-label" for="eh-master">É Master</label>
                    </div>
                </div>
            </div>
            <hr class="mt-5 mb-4">
            <h4>Permissões</h4>
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-12 mt-3">
                    <label for="Usuario" class="form-label">Usuário</label>
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox"  id="usuario-visualizar" name="usuario-visualizar" value="usuario-visualizar" <?php echo $usuarioVisualizar == '1' ? 'checked' : '0'; ?>>
                        <label class="form-check-label" for="usuario-visualizar">Visualizar</label>
                    </div>
                    <div class="form-check form-switch mt-2">
                        <input class="form-check-input" type="checkbox" id="usuario-cadastrar" name="usuario-cadastrar" value="usuario-cadastrar" <?php echo $usuarioCadastrar== '1' ? 'checked' : '0'; ?>>
                        <label class="form-check-label" for="usuario-cadastrar">Cadastrar e editar</label>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 mt-3">
                    <label for="cliente" class="form-label">Cliente</label>
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" id="cliente-visualizar" name="cliente-visualizar" value="cliente-visualizar" <?php echo $clienteVisualizar== '1' ? 'checked' : '0'; ?>>
                        <label class="form-check-label" for="cliente-visualizar">Visualizar</label>
                    </div>
                    <div class="form-check form-switch mt-2">
                        <input class="form-check-input" type="checkbox" id="cliente-cadastrar" name="cliente-cadastrar" value="cliente-cadastrar" <?php echo $clienteCadastrar== '1' ? 'checked' : '0'; ?>>
                        <label class="form-check-label" for="cliente-cadastrar">Cadastrar e editar</label>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 mt-3">
                    <label for="fluxo" class="form-label">Fluxo de caixa</label>
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" id="caixa-visualizar" name="caixa-visualizar" value="caixa-visualizar" <?php echo $caixaVisualizar== '1' ? 'checked' : '0'; ?>>
                        <label class="form-check-label" for="caixa-visualizar">Visualizar</label>
                    </div>
                    <div class="form-check form-switch mt-2">
                        <input class="form-check-input" type="checkbox" id="caixa-cadastrar" name="caixa-cadastrar" value="caixa-cadastrar" <?php echo $caixaCadastrar== '1' ? 'checked' : '0'; ?>>
                        <label class="form-check-label" for="caixa-cadastrar">Cadastrar e editar</label>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 mt-3">
                    <label for="" class="form-label">Estoque</label>
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" id="estoque-visualizar" name="estoque-visualizar" value="estoque-visualizar" <?php echo $estoqueVisualizar== '1' ? 'checked' : '0'; ?>>
                        <label class="form-check-label" for="estoque-visualizar">Visualizar</label>
                    </div>
                    <div class="form-check form-switch mt-2">
                        <input class="form-check-input" type="checkbox" id="estoque-cadastrar" name="estoque-cadastrar" value="estoque-cadastrar" <?php echo $estoqueCadastrar== '1' ? 'checked' : '0'; ?>>
                        <label class="form-check-label" for="estoque-cadastrar">Cadastrar e editar</label>
                    </div>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col">
                    <input type="hidden" name="atualizado-em" id="atualizado-em" 
                        value=" <?php $hoje = date('Y-m-d H:i:s'); echo $hoje; ?> ">
                    <input type="hidden" name="id" value="<?php echo $id; ?>">
                    <button type="submit" name="submit" class="btn btn-primary alinhar-a-direita ms-2">Alterar</button>
                    <a href="lista.php" class="btn btn-light alinhar-a-direita">Cancelar</a>
                </div>
            </div>

        </form>
    </div>
    <?php include"../../js/usuario/recuperar.php"; ?>
</body>

</html>