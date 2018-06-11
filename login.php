<?php
include('conexao/index.php');
include('conexao/usuario.php');

$usuario = BuscarUsuario($conexao, $_POST["email"], $_POST["senha"]);

// verificando se o user está logado
if($usuario == null){
    header('Location: index.php?login=0');
}
else{
    header('Location: index.php?login=1');
}
die();