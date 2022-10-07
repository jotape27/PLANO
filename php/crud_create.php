
<?php
//conexao com o banco de dados
require_once 'conexao.php';
include_once 'crud_db.php';
include_once 'tables/tabelas.php';
// include_once 'tables/gasto.php';
// include_once 'tables/planejamento.php';
// include_once 'tables/endereco.php';

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

if (isset($_POST['btn-cadastro'])) :
    //pega os dados no cadastro e os transforma em variáveis


    $nome = $_POST['nome'];
    $sobrenome = $_POST['sobrenome'];
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $celular = $_POST['celular'];
    $cpf = $_POST['cpf'];
    $nascimento = $_POST['nascimento'];
    $genero = $_POST['genero'];
    $senha = $_POST['valsenha'];
    $perfil = $_POST['perfil'];
    $emailvalidado = filter_var($email, FILTER_VALIDATE_EMAIL);
    /*criptografia via password_hash que gera uma hash aleatòria para cada senha (hashs diferentes mesmo para senha iguais)*/
    $senhacriptografada = password_hash($senha, PASSWORD_DEFAULT);

    $cep = $_POST['cep'];
    $endereco = $_POST['endereco'];
    $numero = $_POST['numero'];
    $cidade = $_POST['cidade'];
    $estado = $_POST['estado'];
    $logradouro = $_POST['logradouro'];



    $usuario = new Usuario();
    $enderecos = new Endereco();

    $usuario->setNome($nome);
    $usuario->setSobrenome($sobrenome);
    //$usuario->setEmail($emailvalidado);
    $usuario->setCpf($cpf);
    $usuario->setNascimento($nascimento);
    $usuario->setGenero($genero);
    $usuario->setSenha($senhacriptografada);
    $usuario->setPerfil($perfil);

    $enderecos->setCep($cep);
    $enderecos->setEndereco($endereco);
    $enderecos->setNumero($numero);
    $enderecos->setCidade($cidade);
    $enderecos->setUf($estado);
    $enderecos->setLogradouro($logradouro);


    if ($usuario->insert()) {
        header('Location: ../login.php?sucesso');
    } else {
        header('Location: ../login.php?erro');
    }

endif;

?>