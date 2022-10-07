<?php

require_once 'conexao.php';
include_once 'crud_db.php';
include_once 'tables/tabelas.php';

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

if (isset($_POST['btn-deletar'])) :


    $id = $_SESSION['id'];
    $delete = new Usuario();


    if ($delete->delete($id)) {
        include 'logout.php';
    }
endif;
