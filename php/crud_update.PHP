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

if (isset($_POST['btn-update'])) :
    //pega os dados no cadastro e os transforma em variáveis

    $nome = $_POST['nome'];
    $sobrenome = $_POST['sobrenome'];
    $cpf = $_POST['cpfs'];
    $nascimento = $_POST['nascimento'];
    $genero = $_POST['genero'];
    $email = $_POST['email'];
    $celular = $_POST['celular'];


    $id = $_SESSION['id'];
    $updateUser = new Usuario();

    $updateUser->setNome($nome);
    $updateUser->setSobrenome($sobrenome);
    $updateUser->setCpf($cpf);
    $updateUser->setNascimento($nascimento);
    $updateUser->setGenero($genero);
    $updateUser->setEmail($email);
    $updateUser->setCelular($celular);


    if ($updateUser->update($id)) {
    }
    if ($updateUser->updateContato($id)) {
    }



endif;
header('Location: ../perfil.php');
