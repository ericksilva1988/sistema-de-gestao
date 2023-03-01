<?php include"../../sessao/validarSessao.php"; ?>

<?php include"../../crud/cliente/lista.php"; ?>

<?php include"../../componentes/head.php"; ?>

    
    <!-- /Menu superior-->


    <div class="container mt-5">
        <h2 class="mb-4">Caixa</h2>
        <div class="row mb-4">
            <?php
                if ($_SESSION['cliente-cadastrar']) { ?>
                    <div class="col-md-2 col-lg-2 col-xl-2 mb-2">
                        <a href="cadastrar.php" class="btn btn-success">Nova compra</a>
                    </div>
            <?php } ?>
            <div class="col-md-5 col-sm-12">
                <input class="form-control" type="search" placeholder="Buscar por cliente" id="pesquisar" name="pesquisar" aria-label="Search">
            </div>
            
            <div class="col-md-3 col-lg-2 mb-2">
                <button onclick="searchData()"  class="btn btn-success">
                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#FFFFFF"><path d="M0 0h24v24H0z" fill="none"/><path d="M15.5 14h-.79l-.28-.27C15.41 12.59 16 11.11 16 9.5 16 5.91 13.09 3 9.5 3S3 5.91 3 9.5 5.91 16 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z"/></svg>
                </button>
            </div>
        </div>
        <p><?php echo $msg; ?></p>
        <table class="table table-striped">
            <thead>
                <tr>
                    
                </tr>
            </thead>
            <tbody>
                
            </tbody>
        </table>
    </div>

    <!-- /Modal -->

        <?php include "../../componentes/footer.php"; ?>
</body>

</html>