<?php include"../../sessao/validarSessao.php"; ?>

<?php include"../../crud/fornecedor/lista.php"; ?>

<?php include"../../componentes/head.php";  ?>

   
    <!-- /Menu superior-->


    <div class="container mt-5">
        <h2 class="mb-4">Fornecedores</h2>
        <div class="row mb-4">
            <?php
                if ($_SESSION['usuario-cadastrar']) { ?>
                    <div class="col-md-2 col-lg-2 col-xl-1 mb-2">
                        <a href="cadastrar.php" class="btn btn-success">Cadastrar</a>
                    </div>
            <?php } ?>
            <div class="col-md-5 col-sm-12">
                <input class="form-control" type="search" placeholder="Buscar produto" id="pesquisar" name="pesquisar" aria-label="Search">
            </div>
            
            <div class="col-md-3 col-lg-2 mb-2">
                <button onclick="searchData()"  class="btn btn-success">
                    <img src='../../img/lupa.svg'>
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
                    <th scope="col">Registro(Criado)</th>
                    <th scope="col">Registro(Alterado)</th>
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
                            echo "<td>" . $dados_fornecedor['criado-em'] . "</td>";
                            echo "<td>" . $dados_fornecedor['atualizado-em'] . "</td>";
                                                        
                            if ($_SESSION['usuario-cadastrar']) {
                                echo "<td>
                                    <a class='btn btn-secondary btn-sm' href='../../views/fornecedor/editar.php?id=$dados_fornecedor[id]' title='Atualizar fornecedor'>
                                      <img src='../../img/editar.svg'>
                                    </a>
                                    
                                    <a class='btn btn-danger btn-sm' data-bs-toggle='modal' data-bs-target='#modalPadrao' 
                                    onclick='passaDadosModal($dados_fornecedor[id], `$dados_fornecedor[empresa]`, `fornecedor`)' title='Excluir fornecedor'>
                                    
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
                        Tem certeza que deseja excluir o fornecedor <strong id="nome-entidade"></strong>?
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

        <?php include "../../componentes/footer.php"; ?>
</body>

</html>