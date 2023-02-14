<script type="text/javascript">

        function passaDadosModal(id, nome) {

            document.querySelector('#nome-usuario').innerText = nome;
            document.querySelector('#linkExcluir').href = "../../crud/usuario/deletar.php?id=" + id;

        }


    </script>



    <script type="text/javascript">

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