<?php 
    include("cabecalho.php"); 
    include("logica-usuario.php");
?>

<!-- Verificando logout -->
<?php if(isset($_GET["logout"]) && $_GET["logout"]==true) { ?>
    <p class="alert-success">Deslogado com sucesso!</p>
<?php } ?>

<!-- Retorno de login com sucesso -->
<?php if(isset($_GET["login"]) && $_GET["login"]==true) { ?>
    <p class="alert-success">Logado com sucesso!</p>
<?php } ?>

<!-- Retorno de login sem sucesso -->
<?php if(isset($_GET["login"]) && $_GET["login"]==false) { ?>
    <p class="alert-danger">Usuário ou senha inválida!</p>
<?php } ?>

<!-- Retornando falha, para caso o usuario não tenha feito o login.  -->
<?php if(isset($_GET["falhaDeSeguranca"]) && $_GET["falhaDeSeguranca"] == true) { ?>
    <p class="alert-danger">Você não tem acesso a essa funcionalidade!</p>
<?php } ?>


<h1>Bem vindo!</h1>

<!-- Cookie login -->
<?php if(usuarioEstaLogado()){ ?>
    <p class="text-success">Você está logado como <?= usuarioLogado()?> </p>
    <a href="logout.php">Deslogar</a>
<?php } else{ ?>

<!-- Mostra o formulario caso não esteja logado -->
<?php !isset($_COOKIE["usuario_logado"]) ?>
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
            <td><button class="btn btn-primary" type="submit">Login</button></td>
        </tr>
    </table>
</form>
<?php } ?>
<?php include("rodape.php"); ?>
