<?php
    session_start();
    
    function usuarioEstaLogado(){
        return isset($_COOKIE["usuario-logado"]);
    }
  
    // Verificando se o usuario está logado para cadastrar produtos.
    function verificaUsuario(){
        if (!usuarioEstaLogado()) {
            header("Location: index.php?falhaDeSeguranca=true");
            die();
        }
    }

    function usuarioLogado(){
        return $_SESSION["usuario-logado"];
    }

    function logaUsuario($email){
        $_SESSION["usuario-logado"] = $email;
    }

    function logout(){
        session_destroy();
        //unset($_SESSION["usuario-logado"]);
    }
?>