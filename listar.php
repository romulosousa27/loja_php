<?php
    include("template/header.php");
    include("conexao/index.php");
    include("funcoes_produtos.php");

    
    if(array_key_exists("removido", $_GET) && $_GET["removido"] == true){
        echo "<p class='alert-success'>Produto apagado com sucesso! </p>";
    }

?>

<table class="table table-striped table-bordered">
    <?php $produtos = ListaProdutos($conexao);
    foreach ($produtos as $produto):
    ?>
    <tr>
        <td> <?= $produto['nome']; ?> </td>
        <td> <?= $produto['preco']; ?> </td>
        <td> <?= substr($produto['descricao'], 0, 30);  ?> </td>
        <td> <?= $produto['categoria_nome']  ?> </td>
        <td><a class="btn btn-warning" href="formulario_update.php?id=<?=$produto['id']?>">Alterar</a></td>
        <td> 
            <form action="deleta_produtos.php" method="post">
                <input type="hidden" name="id" value="<?= $produto['id'] ?>">
                <button class="btn btn-danger">deletar</button> 
            </form>
        </td>
    </tr>
    <?php endforeach; ?>
</table>
<?= include("template/footer.php") ?>