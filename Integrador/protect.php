<?php

if(!isset($_SESSION)){
    session_start();
}

if (!isset($_SESSION['id'])){
    die("Você não pode acessar essa pagina.<p><a href=\"Login.php\">Entrar</a></p>");
}
?>