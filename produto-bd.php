<?php

function ListaProdutos($conexao) {
    $produtos = array();
    $result = mysqli_query($conexao, "SELECT p.*, c.nome AS categoria_nome FROM produtos AS p JOIN categorias AS c on p.categoria_id = c.id ");

    while ($produto = mysqli_fetch_assoc($result)) {
        array_push($produtos, $produto);
    }
    return $produtos;
}

function insereProd($conexao, $nome, $preco, $descricao, $categoria_id, $usado) {
    $query = "INSERT INTO produtos (nome, preco, descricao, categoria_id, usado) VALUES ( '{$nome}' , '{$preco}' , '{$descricao}', '{$categoria_id}', '{$usado}' )";
    return mysqli_query($conexao, $query);
}

function deleteProduto($conexao, $id){
    $delete = "DELETE FROM produtos WHERE id = {$id}";
    return mysqli_query($conexao, $delete);
}