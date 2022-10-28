<?php

require_once 'database/conexao.php';
include_once 'database/crud_db.php';
include_once 'class/endereco.php';
include_once 'class/gasto.php';
include_once 'class/planejamento.php';
include_once 'class/profissao.php';
include_once 'class/usuario.php';

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
