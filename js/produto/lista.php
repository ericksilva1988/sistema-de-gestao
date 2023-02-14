        <script type="text/javascript">
    
            function modalDeletarItem(id, descricao){
               
                document.querySelector('#descricao-produto').innerText=descricao;
                document.querySelector('#linkExcluir').href="../../crud/produto/deletar.php?id="+id;
                                
            }

            
        </script>

        <script type="text/javascript">
    
            function modalAtualizarEstoque(id, descricao, estoqueAtual){

                console.log(id, descricao, estoqueAtual);
               
                document.querySelector('#estoque-descricao').innerText=descricao;
                document.querySelector('#estoque-atual-visivel').innerText=estoqueAtual;
                document.querySelector('#estoque-atual').value=estoqueAtual;
                document.querySelector('#id-produto').value=id;
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
            window.location = 'listar.php?pesquisar='+pesquisar.value;
            }

 
        </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>