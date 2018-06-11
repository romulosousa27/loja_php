<?php include("template/header.php");?>
<?php
    // mensagem de erro ou sucesso para o login
    if (isset($_GET['login']) && $_GET['login'] == true){
        echo "<p class='alert-success'>Logado com Sucesso</p>";
    }
    elseif (isset($_GET['login']) && $_GET['login'] == false){
        echo "<p class='alert-danger'>Usuário/Senha inválida</p>";
    }
?>

    <h1>Bem vindo!</h1>

    <h2>Login</h2>    
    <form action="login.php" method="post">
        <table class="table">
            <tr>
                <td>Email</td>
                <td><input class="form-control" type="email" name="email"></td>
            </tr>
            <tr>
                <td>Senha</td>
                <td><input class="form-control" type="password" name="senha"></td>
            </tr>
            <tr>
                <td><button class="btn btn-primary">Login</button></td>
            </tr>
        </table>
    </form>
<?php include("template/footer.php"); ?>
