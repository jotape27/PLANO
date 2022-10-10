<?php
//não permite a entrada de alguém não logado

if (!isset($_SESSION)) {
    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }
}
//se a pessoa não tiver logado ele será redirecionado para o login
if (!isset($_SESSION['id'])) {
    die(header("Location: login.php"));
}
if (isset($_SESSION['admin'])) {
    if ($_SESSION['admin'] == true) {
        header('Location: adm.php');
    }
}
