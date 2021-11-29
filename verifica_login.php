<?php
//faz a verificação se o usuario acessou a tela de login, se sim, ele permite acessar, senão volta para a tela inicial
if(!$_SESSION['usuario']) {
    header('Location: index.php');
    exit();
}
?>