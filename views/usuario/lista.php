<?php include"../../sessao/validarSessao.php"; ?>

<?php include"../../crud/usuario/lista.php"; ?>

<?php include"../../componentes/usuario/head.php"; ?>

    <?php 

         if (!$_SESSION['usuario-visualizar']) {
            header('Location: ../../sessao/usuario.php');
        }
    ?>
    

    <!-- /Menu superior-->


    <div class="container mt-5">
        <h2 class="mb-4">Listar usuários</h2>
        <div class="row mb-4">
            <?php 

                if ($_SESSION['usuario-cadastrar']) { ?>

                <div class="col-md-2 col-lg-2 col-xl-1 mb-2">
                    <a href="cadastrar.php" class="btn btn-primary">Cadastrar</a>
                </div>

            <?php } ?>

            <div class="col-md-5 col-sm-12">
                <input class="form-control" type="search" placeholder="Buscar usuário" id="pesquisar" name="pesquisar"
                    aria-label="Search">
            </div>

            <div class="col-md-3 col-lg-2 mb-2">
                <button onclick="searchData()" class="btn btn-primary">
                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px"
                        fill="#000000">
                        <path d="M0 0h24v24H0z" fill="none" />
                        <path
                            d="M15.5 14h-.79l-.28-.27C15.41 12.59 16 11.11 16 9.5 16 5.91 13.09 3 9.5 3S3 5.91 3 9.5 5.91 16 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z" />
                    </svg>
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
                    <th scope="col">É admin</th>
                    <th scope="col">É master</th>
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
                    $admin = $user_data['eh-admin'] == 1 ? "SIM" : "NÃO";
                            echo "<td>" . $admin . "</td>";
                    $master = $user_data['eh-master'] == 1 ? "SIM" : "NÃO";
                            echo "<td>" . $master . "</td>";
                    
                            if ($_SESSION['usuario-cadastrar']) {

                                echo "<td> 
                                    <a href='../../views/usuario/recuperar.php?id=$user_data[id]'>
                                        <button class='btn btn-light'>Editar</button>
                                    </a>
                                    <a data-bs-toggle='modal' data-bs-target='#modalPadrao' onclick='passaDadosModal($user_data[id], `$user_data[nome]`)'>
                                        <button class='btn btn-danger'>Excluir</button>
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
                        Tem certeza que deseja excluir o usuário <strong id="nome-usuario"></strong>?
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

    <?php include"../../js/usuario/lista.php"; ?>
    
</body>

</html>