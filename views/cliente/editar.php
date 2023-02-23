<?php include_once"../../sessao/validarSessao.php"; ?>

<?php include"../../crud/cliente/recuperar.php"; ?>

<?php include"../../componentes/cliente/head.php"; ?>

<?php date_default_timezone_set('America/Sao_paulo'); ?>
    
    <!-- /Menu superior-->

    <div class="container mt-5">
        <h2 class="mb-4">Editar cliente</h2>
        <h4>Dados básicos</h4>
        <form action="../../crud/cliente/alterar.php" method="POST">
            <div class="row">
                <div class="col-lg-6 col-md-12 mt-3">
                    <label for="nome" class="form-label">Nome:*</label>
                    <input type="text" class="form-control" id="nome" name="nome" value="<?php echo $nome; ?>" required />
                </div>
                <div class="col-lg-6 col-md-12 mt-3">
                    <label for="apelido" class="form-label">Apelido:*</label>
                    <input type="text" class="form-control" id="apelido" name="apelido" value="<?php echo $apelido ?>"
                        required />
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-12 mt-3">
                    <label for="telefone" class="form-label">Telefone:*</label>
                    <input type="text" class="form-control" id="telefone" name="telefone" value="<?php echo $telefone ?>"
                        required />
                </div>
                <div class="col-lg-6 col-md-12 mt-3">
                    <label for="rua" class="form-label">Rua:*</label>
                    <input type="text" class="form-control" id="ruarua" name="rua" value="<?php echo $rua ?>"
                        required />
                </div>
                <div class="col-lg-2 col-md-12 mt-3">
                    <label for="numero" class="form-label">Número:*</label>
                    <input type="text" class="form-control" id="numero" name="numero" value="<?php echo $numero ?>" required />
                </div>
                <div class="col-lg-3 col-md-12 mt-3">
                    <label for="cep" class="form-label">CEP</label>
                    <input type="text" class="form-control" id="cep" name="cep" value="<?php echo $cep ?>" required />
                </div>
                <div class="col-lg-4 col-md-12 mt-3">
                    <label for="cidade" class="form-label">Cidade:*</label>
                    <input type="text" class="form-control" id="cidade" name="cidade" value="<?php echo $cidade ?>" required />
                </div>
                <div class="col-lg-4 col-md-12 mt-3">
                    <label for="estado" class="form-label">Estado:*</label>
                    
                        <select class="form-select" aria-label="Selecione um Estado" id="estado" name="estado" required>
                            <option value="estado">Selecione o Estado</option> 
                            <option value="ac" <?php echo $estado == "ac" ? "selected" : ""; ?>>Acre</option> 
                            <option value="al" <?php echo $estado == "al" ? "selected" : ""; ?>>Alagoas</option> 
                            <option value="am" <?php echo $estado == "am" ? "selected" : ""; ?>>Amazonas</option> 
                            <option value="ap" <?php echo $estado == "ap" ? "selected" : ""; ?>>Amapá</option> 
                            <option value="ba" <?php echo $estado == "ba" ? "selected" : ""; ?>>Bahia</option> 
                            <option value="ce" <?php echo $estado == "ce" ? "selected" : ""; ?>>Ceará</option> 
                            <option value="df" <?php echo $estado == "df" ? "selected" : ""; ?>>Distrito Federal</option> 
                            <option value="es" <?php echo $estado == "es" ? "selected" : ""; ?>>Espírito Santo</option> 
                            <option value="go" <?php echo $estado == "go" ? "selected" : ""; ?>>Goiás</option> 
                            <option value="ma" <?php echo $estado == "ma" ? "selected" : ""; ?>>Maranhão</option> 
                            <option value="mt" <?php echo $estado == "mt" ? "selected" : ""; ?>>Mato Grosso</option> 
                            <option value="ms" <?php echo $estado == "ms" ? "selected" : ""; ?>>Mato Grosso do Sul</option> 
                            <option value="mg" <?php echo $estado == "mg" ? "selected" : ""; ?>>Minas Gerais</option> 
                            <option value="pa" <?php echo $estado == "pa" ? "selected" : ""; ?>>Pará</option> 
                            <option value="pb" <?php echo $estado == "pb" ? "selected" : ""; ?>>Paraíba</option> 
                            <option value="pr" <?php echo $estado == "pr" ? "selected" : ""; ?>>Paraná</option> 
                            <option value="pe" <?php echo $estado == "pe" ? "selected" : ""; ?>>Pernambuco</option> 
                            <option value="pi" <?php echo $estado == "pi" ? "selected" : ""; ?>>Piauí</option> 
                            <option value="rj" <?php echo $estado == "rj" ? "selected" : ""; ?>>Rio de Janeiro</option> 
                            <option value="rn" <?php echo $estado == "rn" ? "selected" : ""; ?>>Rio Grande do Norte</option> 
                            <option value="ro" <?php echo $estado == "ro" ? "selected" : ""; ?>>Rondônia</option> 
                            <option value="rs" <?php echo $estado == "rs" ? "selected" : ""; ?>>Rio Grande do Sul</option> 
                            <option value="rr" <?php echo $estado == "rr" ? "selected" : ""; ?>>Roraima</option> 
                            <option value="sc" <?php echo $estado == "sc" ? "selected" : ""; ?>>Santa Catarina</option> 
                            <option value="se" <?php echo $estado == "se" ? "selected" : ""; ?>>Sergipe</option> 
                            <option value="sp" <?php echo $estado == "sp" ? "selected" : ""; ?>>São Paulo</option> 
                            <option value="to" <?php echo $estado == "to" ? "selected" : ""; ?>>Tocantins</option> 
                        </select>
                        
                </div>
                <div class="col-lg-8 col-md-12 mt-3">
                    <label for="referencia" class="form-label">Ponto de Referência:</label>
                    <input type="text" class="form-control" id="referencia" name="referencia" value="<?php echo $referencia ?>"/>

                </div>
                
                
            </div>
            <hr class="mt-5 mb-4">
                        
            <h4>Permissões</h4>
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-12 mt-3">
                    <label for="" class="form-label">Comprar Fiado</label>
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" name="fiado" id="fiado"value="fiado" <?php echo $fiado == '1' ? 'checked' : '0'; ?>>
                        <label class="form-check-label" for="fiado">Não/Sim</label>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
</body>

</html>