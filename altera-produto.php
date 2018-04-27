<?=
include ("template/header.php");
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

//retorna se inseriu os dados corretamento
if (AlteraProduto($conexao, $id, $nome, $preco, $descricao, $categoria_id, $usado)) {
    echo "<p class='alert-success'>O Produto <?= $nome ?> com o valor de <?= $preco ?> foi alterado com sucesso!</p>";
}
//caso tenha falha no cadastro.
else {
    $msg = mysqli_error($conexao);
    echo "<p class='alert-danger'>O Produto <?= $nome ?> não foi atualizado: <?= $msg ?></p>";
}
?>

<?= include("template/footer.php") ?>
