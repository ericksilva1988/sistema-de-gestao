<?php include"../../sessao/validarSessao.php"; ?>

<?php include"../../componentes/home/empresa.php"; ?>



    
    <!-- /Menu superior-->


    <div class="container mt-5">
        <h2 class="mb-4">Opções do sistema - Empresa</h2>
        <div class="row mb-4">
            
            <div class="col-md-2 col-lg-2 col-xl-1 mb-2">
                <a href="lista.php" class="btn btn-dark btn-lg">Lista de Empresas</a>
            </div>
            <div class="col-md-2 col-lg-2 col-xl-1 mb-2">
                <a href="cadastrar.php" class="btn btn-dark btn-lg">Cadastrar Empresa</a>
            </div>
            
            
            


    <!-- /Modal -->

        <?php include"../../js/empresa/recuperar.php"; ?>
</body>

</html>