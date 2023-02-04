<?php
$queryProdutos = "select * from produtos";
$produtos = mysqli_query ($conexao, $query);

$queryFornecedores = "select * from fonecedores";
$fornecedores = mysqli_query ($conexao, $query);






while($dados_produto = mysqli_fetch_assoc($produtos)) {
    echo "<td>protudo</td>"
    while($dados_fornecedor = mysqli_fetch_assoc($fornecedores)) {
        if($dados_produto['id-fornecedor'] == $dados_fornecedor['id']) {
            echo "<td>$dados_fornecedor['nome']</td>"
        }
    }
};
?>