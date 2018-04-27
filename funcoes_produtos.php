<?php

function ListaProdutos($conexao) {
    $produtos = array();
    $result = mysqli_query($conexao, "SELECT p.*, c.nome AS categoria_nome FROM produtos AS p JOIN categorias AS c on p.categoria_id = c.id ");

    while ($produto = mysqli_fetch_assoc($result)) {
        array_push($produtos, $produto);
    }
    return $produtos;
}

function InsereProduto($conexao, $nome, $preco, $descricao, $categoria_id, $usado) {
    $query = "INSERT INTO produtos (nome, preco, descricao, categoria_id, usado) VALUES ('{$nome}', {$preco}, '{$descricao}', {$categoria_id}, {$usado})";

    return mysqli_query($conexao, $query);
}

function BuscaProduto($conexao, $id){
    $query = "SELECT * FROM produtos WHERE id = {$id}";
    $resultado = mysqli_query($conexao, $query);

    return mysqli_fetch_assoc($resultado);
}

function AlteraProduto($conexao, $id, $nome, $preco, $descricao, $categoria_id, $usado){
    $query = "update produtos set nome = '{$nome}', preco = {$preco}, descricao = '{$descricao}', categoria_id= {$categoria_id}, usado = {$usado} where id = '{$id}'";

    return mysqli_query($conexao, $query);
}

function DeletaProduto($conexao, $id){
    $query = "delete from produtos where id = {$id}";
    return mysqli_query($conexao, $query);


}