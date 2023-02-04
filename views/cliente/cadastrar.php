<?php include_once"../../sessao/validarSessao.php"; ?>

<?php include_once"../../crud/cliente/criar.php"; ?>

<?php include"../../componentes/cliente/head.php"; ?>

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
                    
                        <select class="form-select" aria-label="Selecione um estado" id="estado" name="estado" >
                            <option selected value="" selected disabled="disabled" hidden>Estado</option>
                                                   
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
            <input type="hidden" name="empresa" id="empresa" value="<?php echo $_SESSION['id-empresa']; ?>">
        </form>
        
    </div>
    <?php include "../../js/cliente/recuperar.php"; ?>
</body>

</html>