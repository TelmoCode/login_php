<?php
session_start();
include('verifica_login.php');
?>

<h1>Tela Home</h1>
<h2>Ola, <?php echo $_SESSION['usuario'];?>, seja vem vindo</h2>