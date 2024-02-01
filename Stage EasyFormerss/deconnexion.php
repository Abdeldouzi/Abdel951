<?php 
    session_start(); // demarrage de la session
    session_unset();
    session_destroy(); 
    header('Location:Easyformers.php'); // On redirige
    die();
?>