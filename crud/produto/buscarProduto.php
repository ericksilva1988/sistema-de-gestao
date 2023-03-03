<?php
include_once("../../banco/conexao.php");

$database = new db();

$conexao = $database->conecta_mysql();

// Verifica se a conexão foi bem-sucedida
if ($conexao->connect_error) {
    die("Connection failed: " . $conexao->connect_error);
}

if (!empty($_GET['pesquisar'])) {

    $termoDeBusca = $_GET['pesquisar'];
    $queryBusca = "SELECT * FROM produtos WHERE id LIKE '%$termoDeBusca%' or descricao LIKE '%$termoDeBusca%' or `codigo-barra` LIKE '%$termoDeBusca%' ORDER BY id DESC";
    $result = $conexao->query($queryBusca);

    $dados = array();
    while ($row = $result->fetch_assoc()) {
        $dados[] = $row;
    }

    // Retorna os resultados em formato JSON
    echo json_encode($dados);
    // echo json_encode("ok");

    // Fecha a conexão com o banco de dados
    $conexao->close();
}
?>