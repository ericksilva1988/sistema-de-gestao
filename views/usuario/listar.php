<?php include"../../sessao/validarSessao.php"; ?>

<?php include"../../crud/usuario/lista.php"; ?>

<?php include"../../componentes/head.php"; ?>

    <?php 

         if (!$_SESSION['usuario-visualizar']) {
            header('Location: ../../sessao/usuario.php');
        }
    ?>
    

    <!-- /Menu superior-->


    <div class="container mt-5">
        <h2 class="mb-4">Usuários</h2>
        <div class="row mb-4">
            <?php 

                if ($_SESSION['usuario-cadastrar']) { ?>

                <div class="col-md-2 col-lg-2 col-xl-1 mb-2">
                    <a href="cadastrar.php" class="btn btn-success">Cadastrar</a>
                </div>

            <?php } ?>

            <div class="col-md-5 col-sm-12">
                <input class="form-control" type="search" placeholder="Buscar usuário" id="pesquisar" name="pesquisar"
                    aria-label="Search">
            </div>

            <div class="col-md-3 col-lg-2 mb-2">
                <button onclick="searchData()" class="btn btn-success">
                    <img src='../../img/lupa.svg'>
                </button>
            </div>
        </div>
        <p>
            <?php echo $msg; ?>
        </p>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Login</th>
                    <th scope="col">Senha</th>
                    <?php  if ($_SESSION['eh-master']) { ?>
                        <th scope="col">É admin</th>
                        <th scope="col">É master</th>
                    <?php } ?>
                    <th scope="col">Registro(Criado)</th>
                    <th scope="col">Registro(Alterado)</th>
                    <?php if ($_SESSION['usuario-cadastrar']) { ?>
                        <th scope="col">Ação</th>
                    <?php } ?>
                </tr>
            </thead>
            <tbody>

                <?php

                while ($user_data = mysqli_fetch_assoc($result)) {

                    echo "<tr>";
                    echo "<td>" . $user_data['id'] . "</td>";
                    echo "<td>" . $user_data['nome'] . "</td>";
                    echo "<td>" . $user_data['login'] . "</td>";
                    echo "<td>" . $user_data['senha'] . "</td>";
                    //echo "<td>" . $user_data['admin'] . "</td>";
                    //echo "<td>" . $user_data['master'] . "</td>";
                    if ($_SESSION['eh-master']) {
                        $admin = $user_data['eh-admin'] == 1 ? "SIM" : "NÃO";
                                echo "<td>" . $admin . "</td>";
                        $master = $user_data['eh-master'] == 1 ? "SIM" : "NÃO";
                                echo "<td>" . $master . "</td>";
                        }
                    echo "<td>" . $user_data['criado-em'] . "</td>";
                    echo "<td>" . $user_data['atualizado-em'] . "</td>";
                    
                            if ($_SESSION['usuario-cadastrar']) {

                                echo "<td> 
                                    <a class='btn btn-secondary btn-sm' href='../../views/usuario/editar.php?id=$user_data[id]' title='Editar usuario'>
                                        <img src='../../img/editar.svg'>
                                    </a>
                                    <a class='btn btn-danger btn-sm' data-bs-toggle='modal' data-bs-target='#modalPadrao' onclick='passaDadosModal($user_data[id], `$user_data[nome]`,`usuario`)' title='Excluir usuario'>
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
                        Tem certeza que deseja excluir o usuário <strong id="nome-entidade"></strong>?
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