<?php include"../../sessao/validarSessao.php"; ?>

<?php include "../../componentes/home/usuario.php"; ?>

    
    <!-- /Menu superior-->


    <div class="container mt-5">
        <h2 class="mb-4">Opções de Sistema - Usuário</h2>
        <div class="row mb-4">
            <div class="col-md-2 col-lg-2 col-xl-1 mb-2">
                <a href="../../views/usuario/lista.php" class="btn btn-primary btn-lg">Lista de Usuários</a>
            </div>
            <div class="col-md-2 col-lg-2 col-xl-1 mb-2">
                <a href="../../views/usuario/cadastrar.php" class="btn btn-primary btn-lg">Cadastrar Usuário</a>
            </div>
            <div class="col-md-2 col-lg-2 col-xl-1 mb-2">
                <a href="../../sessao/permissoes.php" class="btn btn-primary btn-lg">Suas Permissões</a>
            </div>
            
            
                    


    <!-- /Modal -->

        <?php include"../../js/home/usuario.php"; ?>
</body>

</html>