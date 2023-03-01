<?php include_once"../../sessao/validarSessao.php"; ?>

<?php include_once"../../crud/empresa/criar.php"; ?>

<?php include"../../componentes/head.php";  ?>



    <!-- /Menu superior-->

    <div class="container mt-5">
        <h2 class="mb-4">Cadastrar empresa</h2>
        <form action="../../crud/empresa/criar.php" method="POST">
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
                    <label for="nome" class="form-label">Nome:</label>
                    <input type="text" class="form-control" id="nome" name="nome"
                        placeholder="Informe o nome fantasia/pessoal" />
                </div>
                <div class="col-lg-6 col-md-12 mt-3">
                    <label for="telefone" class="form-label">Telefone:*</label>
                    <input type="text" class="form-control" id="telefone" name="telefone"
                        placeholder="Informe o Telefone" />
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-12 mt-3">
                    <label for="email" class="form-label">E-mail</label>
                    <input type="email" class="form-control" id="email" name="email"
                        placeholder="Informe o E-mail" />
                </div>
                <div class="col-lg-6 col-md-12 mt-3">
                    <label for="endereco" class="form-label">Endereço:</label>
                    <input type="text" class="form-control" id="endereco" name="endereco"
                        placeholder="Informe o Endereço" />
                </div>
                <div class="col-lg-6 col-md-12 mt-3">
                    <label for="referencia" class="form-label">Ponto de Referência:</label>
                    <input type="text" class="form-control" id="referencia" name="referencia"
                        placeholder="Informe o ponto de referência" />
                </div>
                <div class="col-lg-6 col-md-12 mt-3">
                    <label for="segmento" class="form-label">Segmento:</label>
                    <input type="text" class="form-control" id="segmento" name="segmento"
                        placeholder="Informe o segmento da empresa" />
                </div>
            </div>
            
            <div class="row mt-5">
                <div class="col">
                    <input type="hidden" name="criado-em" id="criado-em" 
                        value=" <?php $hoje = date('Y-m-d H:i:s'); echo $hoje; ?> ">
                    <button type="submit" name="submit" class="btn btn-success alinhar-a-direita ms-2">Cadastrar</button>
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