<?php
    
    include("template/header.php");
    include("conexao/index.php");
    include("produto-bd.php");

    $id = $_POST['id'];
    deleteProduto($conexao, $id);
    header("Location: listar-produtos.php?removido=true");
    die();

?>
