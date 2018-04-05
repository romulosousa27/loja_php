<?php

function ListaProdutos($conexao) {
    $produtos = array();
    $result = mysqli_query($conexao, "SELECT * FROM produtos");

    while ($produto = mysqli_fetch_assoc($result)) {
        array_push($produtos, $produto);
    }
    return $produtos;
}

function insereProd($conexao, $nome, $preco, $descricao, $categoria_id) {
    $query = "INSERT INTO produtos (nome, preco, descricao, categoria_id) VALUES ( '{$nome}' , '{$preco}' , '{$descricao}', '{$categoria_id}' )";
    return mysqli_query($conexao, $query);
}

function deleteProduto($conexao, $id){
    $delete = "DELETE FROM produtos WHERE id = {$id}";
    return mysqli_query($conexao, $delete);
}