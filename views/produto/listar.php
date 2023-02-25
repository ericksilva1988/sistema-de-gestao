<?php include"../../sessao/validarSessao.php"; ?>

<?php include"../../crud/produto/lista.php"; ?>

<?php include"../../componentes/head.php"; ?>

    
    <!-- /Menu superior-->


    <div class="container mt-5">
        <h2 class="mb-4">Estoque</h2>
        <div class="row mb-4">
            <?php
                if ($_SESSION['estoque-cadastrar']) { ?>
                    <div class="col-md-2 col-lg-2 col-xl-1 mb-2">
                        <a href="cadastrar.php" class="btn btn-primary">Cadastrar</a>
                    </div>
            <?php } ?>
            <div class="col-md-5 col-sm-12">
                <input class="form-control" type="search" placeholder="Buscar produto" id="pesquisar" name="pesquisar" aria-label="Search">
            </div>
            
            <div class="col-md-3 col-lg-2 mb-2">
                <button onclick="searchData()"  class="btn btn-primary">
                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><path d="M0 0h24v24H0z" fill="none"/><path d="M15.5 14h-.79l-.28-.27C15.41 12.59 16 11.11 16 9.5 16 5.91 13.09 3 9.5 3S3 5.91 3 9.5 5.91 16 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z"/></svg>
                </button>
            </div>
        </div>
        <p><?php echo $msg; ?></p>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">Descrição</th>
                    <th scope="col">Custo</th>
                    <th scope="col">Venda</th>
                    <th scope="col">Estoque Mín</th>
                    <th scope="col">Estoque Atual</th>
                    <th scope="col">Cód/Barras</th>
                    <th scope="col">Fornecedor</th>
                    <th scope="col">Marca</th>
                    <th scope="col">modelo</th>
                    <th scope="col">Peso</th>
                    <!-- <th scope="col">Obs</th> -->
                    <th scope="col">Registro(Criado)</th>
                    <th scope="col">Registro(Alterado)</th>
                    <?php
                        if ($_SESSION['estoque-cadastrar']) { ?>
                            <th scope="col">Ações</th>
                    <?php } ?>

                </tr>
            </thead>
            <tbody>
                
                <?php
                        // criando uma variável do tipo array
                        $arrayFornecedores = array();
                        // percorrendo o resultado da query do banco
                        while ($dados_fornecedor = mysqli_fetch_assoc($resultado)) {
                            // pegando cada linha do banco e guardando numa posição do array $arrayFornecedores
                            $arrayFornecedores[] = $dados_fornecedor;
                        }

                        while($dados_produto = mysqli_fetch_assoc($result)) {
                            
                            echo "<tr>";
                            echo "<td>" . $dados_produto['id'] . "</td>";
                            echo "<td>" . $dados_produto['descricao'] . "</td>";
                            echo "<td>" . $dados_produto['custo'] . "</td>";
                            echo "<td>" . $dados_produto['venda'] . "</td>";
                            echo "<td>" . $dados_produto['estoque-minimo'] . "</td>";
                            echo "<td>" . $dados_produto['estoque-atual'] . "</td>";
                                $estoqueAtual = $dados_produto['estoque-atual'];
                            echo "<td>" . $dados_produto['codigo-barra'] . "</td>";

                            $nomeFornecedor = "";
                            // percorrendo o array $arrayFornecedores
                            foreach ($arrayFornecedores as $fornecedor) {
                                // comparando se a coluna 'fornecedor' do produto é a mesma que a 'id' do array $arrayFornecedores
                                if ($dados_produto['fornecedor'] == $fornecedor['id']) {
                                    // imprimindo a linha com o nome do fornecedor
                                    $nomeFornecedor = $fornecedor['empresa'];
                                }
                            }
                            echo "<td>" . $nomeFornecedor . "</td>";
                            echo "<td>" . $dados_produto['marca'] . "</td>";
                            echo "<td>" . $dados_produto['modelo'] . "</td>";
                            echo "<td>" . $dados_produto['peso'] . "</td>";
                            // echo "<td>" . $dados_produto['observacoes'] . "</td>";

                            echo "<td>" . date_format(date_create($dados_produto['criado-em']), 'd/m/y H:i')  . "</td>";
                            echo "<td>" . $dados_produto['atualizado-em'] . "</td>";
                            
                                if ($_SESSION['estoque-cadastrar']) { 
                                    echo "<td>
                                        <a class='btn btn-secondary btn-sm' data-bs-toggle='modal' data-bs-target='#modalEstoque' onclick='modalAtualizarEstoque($dados_produto[id], `$dados_produto[descricao]`, $estoqueAtual)' title='Atualizar estoque'>
                                            <img src='../../img/estoque.svg'>
                                        </a>    
                                        <a class='btn btn-secondary btn-sm' href='../../views/produto/editar.php?id=$dados_produto[id]' title='Editar produto'>
                                          <img src='../../img/editar.svg'>
                                        </a>
                                        <a class='btn btn-danger btn-sm' data-bs-toggle='modal' data-bs-target='#modalPadrao' onclick='modalDeletarItem($dados_produto[id], `$dados_produto[descricao]`,`produto`)' title='Excluir produto'>
                                            <img src='../../img/excluir.svg'>
                                        </a>

                            </td>"; }
                            echo "</tr>";
                        }

                ?>
            </tbody>
        </table>


        <!-- Modal -->
        <div class="modal fade" id="modalPadrao" tabindex="-1" aria-labelledby="modalPadrao" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalPadrao">Atenção!</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        Tem certeza que deseja excluir o produto <strong id="nome-entidade"></strong>?
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cancelar</button>
                        <a href="" class="btn btn-danger" id="linkExcluir">Excluir</a>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!-- Modal Estoque-->
        <div class="modal fade" id="modalEstoque" tabindex="-1" aria-labelledby="modalEstoque" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Atualização de Estoque!</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                     <div class="modal-body">
                        <div class="row">
                            <div class="col">
                                Item: <strong id="estoque-descricao"></strong><br>
                                <span for="estoque-atual">Estoque atual: <strong id="estoque-atual-visivel"></strong></span>
                            </div>
                        </div>
                        <form action="../../crud/produto/alterarEstoque.php" method="POST">
                            <div class="row mt-3">
                                <div class="col">
                                    <label class="form-label" for="">Qual a operação?</label><br>
                                    <div class="form-check form-check-inline">
                                        <label class="form-check-label" for="somar">Somar</label>    
                                        <input class="form-check-input" type="radio" name="operacao" id="somar" value="somar" checked>    
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <label class="form-check-label" for="subtrair">Subtrair</label>
                                        <input class="form-check-input" type="radio" name="operacao" id="subtrair" value="subtrair">
                                    </div>
                                </div>
                                <div class="col">
                                    <label class="form-label" for="novo-estoque">Qual o valor?</label>
                                    <input type="number" class="form-control" id="novo-estoque" name="novo-estoque" value=""
                                    placeholder="Valor" />
                                    </div>
                                </div>
                            </div>    
                            <div class="modal-footer">
                                <input type="hidden" id="id-produto" name="id-produto">
                                <input type="hidden" id="estoque-atual" value="" name="estoque-atual">
                                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cancelar</button>
                                <button  type="submit" name="submit" class="btn btn-primary alinhar-a-direita ms-2">Alterar</button>
                            </div>
                            <input type="hidden" name="atualizado-em" id="atualizado-em" 
                                value=" <?php $hoje = date('Y-m-d H:i:s'); echo $hoje; ?> ">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- /Modal -->

        <?php include "../../componentes/footer.php"; ?>
</body>

</html>