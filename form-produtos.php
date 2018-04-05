<?= 
    include("template/header.php");
    include("conexao/index.php");
    include("categoria_bd.php");

    $categorias = ListaCategorias($conexao);
?>

    <h1>Formulario de Produto</h1>
    <form action="adicionar-prod.php" method="post">
        <table class="table">
            <tr>
                <td>Nome:</td>
                <td><input class="form-control" type="text" name="nome"></td>
            </tr>
            <tr>
                <td>Preço:</td>
                <td><input class="form-control" type="number" name="preco"></td>
            </tr>
            <tr>
                <td>Descrição:</td>
                <td><textarea class="form-control" name="descricao"></textarea></td>
            </tr>
            <tr>
                <td>Catagoria</td>
                <td>
                    <?php foreach($categorias as $categoria): ?>
                        <input type="radio" name="categoria_id" value="<?= $categoria['id']?>"><?=$categoria['nome']?> <br>
                    <?php endforeach ?>
                </td>
            </tr>
            <tr>
                <td><input class="btn btn-primary" type="submit" value="Cadastrar Produto"></td>
            </tr>
        </table>
    </form>

<?= include("template/footer.php"); ?>