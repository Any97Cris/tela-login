<?php 
//Sai da sessão do usuario
session_start();
session_destroy(); //essa opção destroi a sessão em uso;
header('Location: index.php');
exit();
?>