<?php include"../../sessao/validarSessao.php"; ?>

<?php include"../../crud/cliente/lista.php"; ?>

<?php include"../../componentes/head.php"; ?>

    
    <!-- /Menu superior-->


    <div class="container mt-5">
        <h2 class="mb-4">Clientes</h2>
        <div class="row mb-4">
            <?php
                if ($_SESSION['cliente-cadastrar']) { ?>
                    <div class="col-md-2 col-lg-2 col-xl-1 mb-2">
                        <a href="cadastrar.php" class="btn btn-success">Cadastrar</a>
                    </div>
            <?php } ?>
            <div class="col-md-5 col-sm-12">
                <input class="form-control" type="search" placeholder="Buscar usuário" id="pesquisar" name="pesquisar" aria-label="Search">
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
                    <th scope="col">Id</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Apelido</th>
                    <th scope="col">Telefone</th>
                    <th scope="col">Endereço</th>
                    <th scope="col">Ponto de Referência</th>
                    <th scope="col">Registro(Criado)</th>
                    <th scope="col">Registro(Alterado)</th>
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