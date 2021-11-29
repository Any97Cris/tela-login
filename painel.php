<?php 
    session_start();
    include('verifica_login.php');

    var_dump($_SESSION);
?>

    <h2>Olá, <?php echo $_SESSION['usuario'];?></h2>
    <h4><a href="logout.php">SAIR</a></h4>