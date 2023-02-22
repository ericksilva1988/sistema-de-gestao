<script type="text/javascript">

    function passaDadosModal(id, nomeEntidade, entidade) {

        console.log(id, nomeEntidade, entidade);
        document.querySelector('#nome-entidade').innerText = nomeEntidade;
        document.querySelector('#linkExcluir').href = `../../crud/${entidade}/deletar.php?id=${id}`;

    }

    var pesquisar = document.getElementById('pesquisar');

    pesquisar.addEventListener("keydown", function (event) {
        if (event.key === "Enter") {
            fazBusca();
        }
    });


    function fazBusca() {
        window.location = 'listar.php?pesquisar=' + pesquisar.value;
    }


</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>