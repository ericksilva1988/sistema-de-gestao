<?php include_once "../../sessao/validarSessao.php"; ?>

<?php include "../../componentes/head.php"; ?>

<?php include "../../crud/produto/buscarProduto.php"; ?>

<link rel="stylesheet" href="../../css/caixa.css">

<?php date_default_timezone_set('America/Sao_paulo'); ?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script>
    // Função para fazer a consulta assíncrona
    function fazerConsulta() {
        let termoDeBusca = $('#pesquisar').val();
        $.ajax({
            url: "../../crud/produto/buscarProduto.php?pesquisar=" + termoDeBusca,
            type: "GET",
            dataType: "json",
            success: function (dados) {
                // Imprime os resultados no console
                console.log(dados);
            },
            error: function (jqXHR, status, error) {
                console.log(jqXHR, status, error);
            }
        });
    }
</script>

<!-- /Menu superior-->
<div class="container mt-5">
    <form>
        <div class="my-3 row botoes-topo-mobile">
            <div class="col-10">
                <input id="pesquisar" name="pesquisar" class="form-control" type="text"
                    placeholder="Buscar nome ou código de barras" aria-label="default input example">
            </div>
            <div class="col">
                <button type="button" class="btn btn-success" onclick="fazerConsulta()">
                    <img src='../../img/lupa.svg'>
                </button>
                <!-- <a href="./ler-codigo-barra.php" class="btn btn-secondary">||||</a> -->
            </div>
        </div>
    </form>
    <div id="finalizacao-web" class="row mb-3">
        <div class="col">
            <button class="btn btn-outline-success" type="button">Buscar produto</button>
            <a href="./ler-codigo-barra.php" class="btn btn-outline-success">Ler código de barra</a>
        </div>
        <div id="valor-final" class="col align-right">
            <span>Total a pagar: <strong>R$ 200,00</strong></span>
            <button class="btn btn-success ms-3" type="button">Finalizar compra</button>
        </div>
    </div>

    <!-- <span>Código de barras: <?php echo $codigo ?></span> -->

    <table class="table table-striped">
        <thead>
            <tr>
                <th>Descrição</th>
                <th>Valor uni</th>
                <th>Valor total</th>
            </tr>
        </thead>
        <tbody id="tbody">
            <!-- aqui ficarão os dados -->
        </tbody>
    </table>
</div>

<div id="finalizacao-mobile">
    <div id="valor-final">
        <span>Total a pagar: <strong>R$ 200,00</strong></span>
    </div>
    <button class="btn btn-success" type="button">Finalizar compra</button>
</div>


<!-- Modal -->
<div class="modal fade" id="modalPadrao" tabindex="-1" aria-labelledby="modalPadrao" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Selecione um produto</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <table class="table table-striped">
                    <tbody>
                        <?php
                        if (!empty($_GET['pesquisar'])) {
                            while ($dados = mysqli_fetch_assoc($result)) {
                                echo "<tr>";
                                echo "<td>" . $dados['descricao'] . "</td>";
                                echo "<td>
                                        <button type='button' class='btn btn-sm btn-secondary'
                                            onclick='view.adicionaItemNaTabela($dados[id], `$dados[descricao]`, $dados[venda])'>
                                            Seleciona
                                        </button>
                                        </td>";
                                echo "</tr>";
                            }
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>

<?php
if (!empty($_GET['pesquisar'])) {
    echo "<script>
            var modal = new bootstrap.Modal(document.getElementById('modalPadrao'))
            modal.show()
        </script>";
}
?>

<script src="../../js/caixa.js"></script>

</body>

</html>