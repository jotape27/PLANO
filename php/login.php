<?php
//conexao com o banco de dados

require_once 'database/conexao.php';
include_once 'crud_db.php';
include_once 'class/endereco.php';
include_once 'class/gasto.php';
include_once 'class/planejamento.php';
include_once 'class/profissao.php';
include_once 'class/usuario.php';

//PDO
session_start();


if (isset($_POST['btn-login'])) :
    //pega os dados no cadastro e os transforma em variáveis

    $cpf = $_POST['cpfs'];
    $senha = $_POST['senha'];

    $senhacriptografada = password_hash($senha, PASSWORD_DEFAULT);

    $usuario = new Usuario();

    $usuario->setCpf($cpf);
    $usuario->setSenha($senhacriptografada);
    $dados = $usuario->login();
    if ($dados) {
        print_r($dados);
        if (password_verify($senha, $dados['senha'])) {
            if (!isset($_SESSION)) {
                session_start();
            }
            $_SESSION['id'] = $dados['id'];
            if ($_SESSION['id'] != 0) {

                header("Location: ../");
            } else {
                $_SESSION['admin'] = true;
                header("Location: ../adm.php");
            }
        } else {
            $_SESSION['erro'] = true;
            header("Location: ../login.php");
        }
    } else {
        $_SESSION['erro'] = true;
        header("Location: ../login.php");
    }
//echo $login['id'];
endif;
