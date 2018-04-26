<?=
    include("template/header.php");
    include("conexao/index.php");
    include("produto-bd.php");
?>

<?php
    // recebe dados do formulário.
    $nome   = $_POST["nome"];
    $preco  = $_POST["preco"];
    $descricao  = $_POST["descricao"];
    $categoria_id = $_POST['categoria_id'];

    if (array_key_exists('usado', $_POST)){
        $usado = "true";
    }
    else{
        $usado = "false";
    }

    //retorna se inseriu os dados corretamento
    if (insereProd($conexao, $nome, $preco, $descricao, $categoria_id)) {
        echo "<p class='alert-success'>Produto <?= $nome ?> com o valor de <?= $preco ?> foi adicionado com sucesso!</p>";
    }
    //caso tenha falha no cadastro.
    else {
        $msg = mysqli_error($conexao);
        echo "<p class='alert-danger'>Produto <?= $nome ?> não foi adicionado: <?= $msg ?></p>";
    }
?>

<?= include("template/footer.php") ?>
