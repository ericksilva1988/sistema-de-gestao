<?php include"../../sessao/validarSessao.php"; ?>

<?php include"../../crud/cliente/lista.php"; ?>

<?php include"../../componentes/cliente/head.php"; ?>

    
    <!-- /Menu superior-->


    <div class="container mt-5">
        <h2 class="mb-4">Clientes</h2>
        <div class="row mb-4">
            <?php
                if ($_SESSION['cliente-cadastrar']) { ?>
                    <div class="col-md-2 col-lg-2 col-xl-1 mb-2">
                        <a href="cadastrar.php" class="btn btn-primary">Cadastrar</a>
                    </div>
            <?php } ?>
            <div class="col-md-5 col-sm-12">
                <input class="form-control" type="search" placeholder="Buscar usuário" id="pesquisar" name="pesquisar" aria-label="Search">
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
                    <th scope="col">Id</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Apelido</th>
                    <th scope="col">Telefone</th>
                    <th scope="col">Endereço</th>
                    <th scope="col">Ponto de Referência</th>
                    <th scope="col">Registro(Criado)</th>
                    <th scope="col">Registro(Atualizado)</th>
                    <th scope="col">Fiado</th>
                    <?php
                        if ($_SESSION['cliente-cadastrar']) { ?>
                            <th scope="col">Ação</th>
                    <?php } ?>

                </tr>
            </thead>
            <tbody>
                
                <?php 

                        while($dados_cliente = mysqli_fetch_assoc($result)) {
                            
                            echo "<tr>";
                            echo "<td>" . $dados_cliente['id'] . "</td>";
                            echo "<td>" . $dados_cliente['nome'] . "</td>";
                            echo "<td>" . $dados_cliente['apelido'] . "</td>";
                            echo "<td>" . $dados_cliente['telefone'] . "</td>";
                            echo "<td>" . $dados_cliente['rua'] . "</td>";
                            echo "<td>" . $dados_cliente['referencia'] . "</td>";
                            echo "<td>" . $dados_cliente['criado-em'] . "</td>";
                            echo "<td>" . $dados_cliente['atualizado-em'] . "</td>";
                            $fiado = $dados_cliente['fiado'] == 1 ? "SIM" : "NÃO";
                            echo "<td>" . $fiado . "</td>";
                                
                            

                            if ($_SESSION['cliente-cadastrar']) {                          
                                echo "<td>
                                    <a class='btn btn-secondary btn-sm' href='../../views/cliente/editar.php?id=$dados_cliente[id]' title='Atualizar cliente'>
                                      <img src='../../img/editar.svg'>
                                    </a>
                                    <a class='btn btn-danger btn-sm' data-bs-toggle='modal' data-bs-target='#modalPadrao' onclick='passaDadosModal($dados_cliente[id], `$dados_cliente[nome]`, `cliente`)' title='Excluir cliente'>
                                        <img src='../../img/excluir.svg'>
                                    </a>

                                </td>";
                            }
                            echo "</tr>";
                        }

                ?>
            </tbody>
        </table>
        <img src="">

        <!-- Modal -->
        <div class="modal fade" id="modalPadrao" tabindex="-1" aria-labelledby="modalPadrao" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalPadrao">Atenção!</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        Tem certeza que deseja excluir o cliente <strong id="nome-entidade"></strong>?
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