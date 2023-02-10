        <script type="text/javascript">
    
            function passaDadosModal(id, descricao){
               
                document.querySelector('#nome-usuario').innerText=descricao;
                document.querySelector('#linkExcluir').href="../../crud/produto/deletar.php?id="+id;
                                
            }

            
        </script>

        <script type="text/javascript">
    
            function passaDadosModal(id, descricao, estoque){
               
                document.querySelector('#nome-estoque').innerText=descricao;
                document.querySelector('#numero-estoque').innerText=estoque;
                document.querySelector('#linkEstoque').href="../../crud/produto/alterarEstoque.php?id="+id;
                                
            }

            
        </script>



        <script type="text/javascript">
            
            var pesquisar = document.getElementById('pesquisar');
            
            pesquisar.addEventListener("keydown", function(event) {
                if (event.key ==="Enter"){
                    fazBusca();
                }
            });


            function fazBusca() {
            window.location = 'lista.php?pesquisar='+pesquisar.value;
            }

 
        </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>