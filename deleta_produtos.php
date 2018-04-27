<?php
    include("template/header.php");
    include("conexao/index.php");
    include("funcoes_produtos.php");

    $id = $_POST['id'];
    DeletaProduto($conexao, $id);
    header("Location: listar.php?removido=true");
    die();

?>
