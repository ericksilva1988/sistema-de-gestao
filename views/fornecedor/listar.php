<?php include"../../sessao/validarSessao.php"; ?>

<?php include"../../crud/fornecedor/lista.php"; ?>

<?php include"../../componentes/fornecedor/head.php";  ?>

   
    
    <!-- /Menu superior-->


    <div class="container mt-5">
        <h2 class="mb-4">Fornecedores</h2>
        <div class="row mb-4">
            <?php
                if ($_SESSION['usuario-cadastrar']) { ?>
                    <div class="col-md-2 col-lg-2 col-xl-1 mb-2">
                        <a href="cadastrar.php" class="btn btn-primary">Cadastrar</a>
                    </div>
            <?php } ?>
            <div class="col-md-5 col-sm-12">
                <input class="form-control" type="search" placeholder="Buscar produto" id="pesquisar" name="pesquisar" aria-label="Search">
            </div>
            
            <div class="col-md-3 col-lg-2 mb-2">
                <button onclick="searchData()"  class="btn btn-primary">
                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><path d="M0 0h24v24H0z" fill="none"/><path d="M15.5 14h-.79l-.28-.27C15.41 12.59 16 11.11 16 9.5 16 5.91 13.09 3 9.5 3S3 5.91 3 9.5 5.91 16 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z"/></svg>
                </button>
            </div>
        </div>
        <p><?php echo $msg; ?></p>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">Empresa</th>
                    <?php 
                        if ($_SESSION['usuario-cadastrar']) { ?>
                            <th scope="col">CNPJ</th>
                    <?php } ?>
                    <th scope="col">Telefone</th>
                    <th scope="col">E-mail</th>
                    <th scope="col">Representação</th>
                    <th scope="col">Representante</th>
                    <!-- <th scope="col">Observações</th> -->
                    <?php
                        if ($_SESSION['usuario-cadastrar']) { ?>
                            <th scope="col">Ações</th>
                    <?php } ?>

                </tr>
            </thead>
            <tbody>
                
                <?php 

                        while($dados_fornecedor = mysqli_fetch_assoc($result)) {
                            
                            echo "<tr>";
                            echo "<td>" . $dados_fornecedor['id'] . "</td>";
                            echo "<td>" . $dados_fornecedor['empresa'] . "</td>";
                                if ($_SESSION['usuario-cadastrar']) { 
                                    echo "<td>" . $dados_fornecedor['cnpj'] . "</td>";
                                }
                            echo "<td>" . $dados_fornecedor['telefone'] . "</td>";
                            echo "<td>" . $dados_fornecedor['email'] . "</td>";
                            echo "<td>" . $dados_fornecedor['representacao'] . "</td>";
                            echo "<td>" . $dados_fornecedor['representante'] . "</td>";
                            // echo "<td>" . $dados_fornecedor['observacoes'] . "</td>";
                                                        
                            if ($_SESSION['usuario-cadastrar']) {
                                echo "<td>
                                    <a class='btn btn-secondary btn-sm' href='../../views/fornecedor/editar.php?id=$dados_fornecedor[id]'>
                                      <img src='../../img/editar.svg'>
                                    </a>
                                    
                                    <a class='btn btn-danger btn-sm' data-bs-toggle='modal' data-bs-target='#modalPadrao' 
                                    onclick='passaDadosModal($dados_fornecedor[id], `$dados_fornecedor[empresa]`)'>
                                    
                                    <img src='../../img/excluir.svg'>
                                    </a>

                                </td>";
                            }
                            echo "</tr>";
                        }

                ?>
            </tbody>
        </table>


        <!-- Modal -->
        <div class="modal fade" id="modalPadrao" tabindex="-1" aria-labelledby="modalPadrao" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalPadrao">Atenção!</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        Tem certeza que deseja excluir o fornecedor <strong id="nome-fornecedor"></strong>?
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cancelar</button>
                        <a href="" class="btn btn-danger" id="linkExcluir">Excluir</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- /Modal -->

        <?php include"../../js/fornecedor/lista.php"; ?>
</body>

</html>