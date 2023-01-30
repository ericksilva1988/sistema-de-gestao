<?php include"../../sessao/validarSessao.php"; ?>

<?php include"../../componentes/home/cliente.php"; ?>



    
    <!-- /Menu superior-->


    <div class="container mt-5">
        <h2 class="mb-4">Opções do sistema - Cliente</h2>
        <div class="row mb-4">
            
            <div class="col-md-2 col-lg-2 col-xl-1 mb-2">
                <a href="../../views/cliente/lista.php" class="btn btn-warning btn-lg">Lista de Clientes</a>
            </div>
            <div class="col-md-2 col-lg-2 col-xl-1 mb-2">
                <a href="../../views/cliente/cadastrar.php" class="btn btn-warning btn-lg">Cadastrar Cliente</a>
            </div>
            <div class="col-md-2 col-lg-2 col-xl-1 mb-2">
                <a href="#" class="btn btn-warning btn-lg">Fiados Vencidos</a>
            </div>
                
            
            


    <!-- /Modal -->

        <?php include"../../js/home/cliente.php"; ?>
</body>

</html>