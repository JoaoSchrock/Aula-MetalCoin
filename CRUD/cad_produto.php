<?php
require('../conn.php');

$nome_produto = $_POST['nome_produto'];
$qtd_produto = $_POST['qtd_produto'];
$valor_produto = $_POST['valor_produto'];
$categoria_produto = $_POST['categoria_produto'];

if(empty($nome_prod) || empty($qtd_produto) ||  empty($valor_produto) ||  empty($categoria_produto)){
    echo "Voce precisa preencher todos os campos";
} else {
    $cad_produto = $pdo->prepare("INSERT INTO produtos (nome_produto, quantidade_produto, valor_produto, categoria_produto) VALUES (:nome_produto, :qtd_produto , :valor_produto, :categoria_produto)");
}

?>
