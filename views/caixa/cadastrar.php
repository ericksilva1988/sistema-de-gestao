<?php include_once "../../sessao/validarSessao.php"; ?>

<?php include_once "../../crud/cliente/criar.php"; ?>

<?php include "../../componentes/head.php"; ?>

<?php date_default_timezone_set('America/Sao_paulo'); ?>

<!-- /Menu superior-->

<style>
    #finalizacao-mobile {
        display: none;
    }

    .align-right {
        text-align: right;
    }

    @media (max-width: 600px) {
        td:first-child {
            width: 200px;
        }

        th:first-child {
            width: 200px;
        }

        #finalizacao-web {
            display: none;
        }

        #finalizacao-mobile {
            display: initial;
            position: fixed;
            bottom: 0;
        }

        #finalizacao-mobile>button {
            width: 100vw;
            height: 56px;
            border-radius: 0;
        }

        #finalizacao-mobile>#valor-final {
            display: flex;
            justify-content: center;
            height: 56px;
            padding-top: 16px;
            background-color: lightgrey;
        }
    }
</style>

<?php if (!empty($_GET['codigo'])) {
    $codigo = $_GET['codigo'];
}?>

<div class="container mt-3">
    <div class="my-3 row">
        <div class="col d-grid">
            <button class="btn btn-secondary" type="button">Buscar produto</button>
        </div>
        <div class="col d-grid">
            <a href="./ler-codigo-barra.php" class="btn btn-secondary">Ler código de barra</a>
        </div>
    </div>
    <div id="finalizacao-web" class="row mb-3 align-right">
        <div id="valor-final" class="col">
            <span>Total a pagar: <strong>R$ 200,00</strong></span>
            <button class="btn btn-primary ms-3" type="button">Finalizar compra</button>
        </div>
    </div>

    <span>Código de barras: <?php echo $codigo ?></span>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>Descrição</th>
                <th>Valor uni</th>
                <th>Valor total</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Caneta</td>
                <td>R$ 1,16</td>
                <td>2X R$ 2,32</td>
            </tr>

        </tbody>
    </table>
</div>

<div id="finalizacao-mobile">
    <div id="valor-final">
        <span>Total a pagar: <strong>R$ 200,00</strong></span>
    </div>
    <button class="btn btn-primary" type="button">Finalizar compra</button>
</div>




<?php include "../../js/cliente/recuperar.php"; ?>

</body>

</html>

<?php
//$date = date("Y-m-d", strtotime($_GET['birthdate'])); //converte para tipo date mysqli_query($conexao, "INSERT INTO tabela (birthday) VALUES ($date)");

?>