
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
    $cpf = $_POST['cpf'];
    $genero = $_POST['genero'];
    $nascimento = $_POST['nascimento'];
    $senha = $_POST['valsenha'];
    $perfil = $_POST['perfil'];
    //----------------------------------------------------------------------------
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $celular = $_POST['celular'];
    //----------------------------------------------------------------------------
    $emailvalidado = filter_var($email, FILTER_VALIDATE_EMAIL);
    /*criptografia via password_hash que gera uma hash aleatòria para cada senha (hashs diferentes mesmo para senha iguais)*/
    $senhacriptografada = password_hash($senha, PASSWORD_DEFAULT);
    //----------------------------------------------------------------------------
    $cep = $_POST['cep'];
    $endereco = $_POST['endereco'];
    $numero = $_POST['numero'];
    $cidade = $_POST['cidade'];
    $estado = $_POST['estado'];
    $logradouro = $_POST['logradouro'];
    //----------------------------------------------------------------------------
    $profissao = $_POST['profissao'];
    $renda = floatval(str_replace(",", ".", str_replace(".", "", $_POST['renda'])));


    $usuario = new Usuario();
    $enderecos = new Endereco();
    $profissoes = new Profissao();
    $planejamento = new Planejamento();

    //----------------------------------------------------------------------------
    $usuario->setEmail($emailvalidado);
    $usuario->setCelular($celular);
    $usuario->setNome($nome);
    $usuario->setSobrenome($sobrenome);
    $usuario->setCpf($cpf);
    $usuario->setNascimento($nascimento);
    $usuario->setGenero($genero);
    $usuario->setSenha($senhacriptografada);
    $usuario->setPerfil($perfil);
    //----------------------------------------------------------------------------
    $enderecos->setCep($cep);
    $enderecos->setEndereco($endereco);
    $enderecos->setNumero($numero);
    $enderecos->setCidade($cidade);
    $enderecos->setUf($estado);
    $enderecos->setLogradouro($logradouro);
    //----------------------------------------------------------------------------
    $profissoes->setprofissao($profissao);
    $profissoes->setrenda($renda);
    //----------------------------------------------------------------------------



    $insertUser = $usuario->insert();
    $insertEndereco = $enderecos->insert();


    $id = $insertUser['id'];
    $id_endereco = $insertEndereco['id'];

    if (count($insertUser)) {
        if ($usuario->insertContato($id)) {
        }
    }
    if (count($insertEndereco)) {
        if ($enderecos->insertEndereco($id_endereco, $id)) {
        }
    }
    $profissoes->insertProfissao($id);


    header("Location: ../");
endif;

if (isset($_POST['addFixo'])) :
    $gastos = new Gasto();

    $tipo = 111;

    $id_user = $id;
    $data = date('Y-m-d');
    $gasto = $_POST['gasto'];
    $valor = $_POST['valor'];

    $gastos->setId($id_user);
    $gastos->setDate($data);
    $gastos->setGasto($gasto);
    $gastos->setValor($valor);

    $gastos->insert();

endif;

if (isset($_POST['addVariavel'])) :
    $gastos = new Gasto();

    $tipo = 222;

    $id_user = $id;
    $data = date('Y-m-d');
    $gasto = $_POST['gasto'];
    $valor = $_POST['valor'];

    $gastos->setId($id_user);
    $gastos->setDate($data);
    $gastos->setGasto($gasto);
    $gastos->setValor($valor);

    $ids_gasto = $gastos->insert();
    $id_gasto = $ids_gasto['id'];

    if (count($ids_gasto)) {
    }

endif;

if (isset($_POST['addLazer'])) :
    $gastos = new Gasto();

    $tipo = 444;

    $id_user = $id;
    $data = date('Y-m-d');
    $gasto = $_POST['gasto'];
    $valor = $_POST['valor'];

    $gastos->setId($id_user);
    $gastos->setDate($data);
    $gastos->setGasto($gasto);
    $gastos->setValor($valor);

    $gastos->insert();

endif;

if (isset($_POST['addInvestimento'])) :
    $gastos = new Gasto();

    $tipo = 333;

    $id_user = $id;
    $data = date('Y-m-d');
    $gasto = $_POST['gasto'];
    $valor = $_POST['valor'];

    $gastos->setId($id_user);
    $gastos->setDate($data);
    $gastos->setGasto($gasto);
    $gastos->setValor($valor);

    $gastos->insert();

endif;
?>