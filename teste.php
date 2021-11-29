<?php 

session_start();

//$_SESSION['user'] = 'samuelson';

echo $_SESSION['user'];

unset($_SESSION['user']);