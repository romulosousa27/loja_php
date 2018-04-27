<?=
    include("template/header.php");
    include("conexao/index.php");
    include("funcoes_produtos.php");
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

    //INSERE O PRODUTO DO FORMULARIO
    if (InsereProduto($conexao, $nome, $preco, $descricao, $categoria_id, $usado)) { ?>
        <p class='alert-success'>Produto <?= $nome; ?> com o valor de <?= $preco; ?> foi adicionado com sucesso!</p>;
    <?php }
    //FALHA AO CADASTRAR
    else {
        $msg = mysqli_error($conexao);
    ?>
        <p class='alert-danger'>Produto <?= $nome; ?> não foi adicionado: <?= $msg; ?></p>;
    <?php
        }
    ?>

<?= include("template/footer.php") ?>
