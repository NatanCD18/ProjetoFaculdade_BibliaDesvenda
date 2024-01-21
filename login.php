<?php
    session_start();
    $usuario = $_POST["nome"];
    $senha = $_POST["senha"];
    if($usuario === "paulo" && $senha === "adorophp"){
        $_SESSION["login"] = "s";
        $_SESSION["nome"] = $usuario;
        $_SESSION["erro"] = "";
        header("Location: principalpage.php");
    }else{
        $_SESSION["erro"] = "Usuário ou senha incorretos. Login:paulo Senha:adorophp";
        header("Location: index.php");
    }
?>    