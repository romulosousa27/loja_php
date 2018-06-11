<?php

function BuscarUsuario($conexao, $email, $senha){
    $encry = md5($senha);
    $query = "select * from usuarios where email='{$email}' and senha='{$encry}'";
    $result = mysqli_query($conexao, $query);
    $usuario = mysqli_fetch_assoc($result);
    return $usuario;
}