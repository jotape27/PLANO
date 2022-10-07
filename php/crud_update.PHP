<?php

require_once 'conexao.php';
include_once 'crud_db.php';
include_once 'tables/tabelas.php';

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

if (isset($_POST['btn-update'])) :
    //pega os dados no cadastro e os transforma em variáveis

    $nome = $_POST['nome'];
    $sobrenome = $_POST['sobrenome'];
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $cpf = $_POST['cpf'];
    $nascimento = $_POST['nascimento'];
    $genero = $_POST['genero'];

    $id = $_SESSION['id'];
    $update = new Usuario();

    $update->setNome($nome);
    $update->setSobrenome($sobrenome);
    $update->setEmail($email);
    $update->setCpf($cpf);
    $update->setNascimento($nascimento);
    $update->setGenero($genero);

    if ($update->update($id)) {
    }

endif;
header('Location: ../perfil.php');
