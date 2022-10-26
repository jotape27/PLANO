
<?php
//conexao com o banco de dados
require_once 'database/conexao.php';
include_once 'crud_db.php';
include_once 'class/endereco.php';
include_once 'class/gasto.php';
include_once 'class/planejamento.php';
include_once 'class/profissao.php';
include_once 'class/usuario.php';
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
    $cpf = $_POST['cpfs'];
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
    $cep = $_POST['ceps'];
    $endereco = $_POST['endereco'];
    $numero = $_POST['numero'];
    $cidade = $_POST['cidade'];
    $estado = $_POST['estado'];
    $bairro = $_POST['bairro'];
    //----------------------------------------------------------------------------
    $profissao = $_POST['profissao'];
    $renda = floatval(str_replace(",", ".", str_replace(".", "", $_POST['renda'])));

    //----------------------------------------------------------------------------
    $fixo = $_POST['fixo'];
    $variavel = $_POST['variavel'];
    $lazer = $_POST['lazer'];
    $investimento = $_POST['investimento'];

    //----------------------------------------------------------------------------
    $usuario = new Usuario();
    $enderecos = new Endereco();
    $profissoes = new Profissao();

    $usuario->setCpf($cpf);
    $dados = $usuario->verifyCPF();
    if ($dados) {
        if ($cpf != $dados['cpf']) {

            //----------------------------------------------------------------------------
            $usuario->setEmail($emailvalidado);
            $usuario->setCelular($celular);
            $usuario->setNome($nome);
            $usuario->setSobrenome($sobrenome);

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
            $enderecos->setBairro($bairro);
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


            $planejamento = new Planejamento();

            $dataplan = date('Y-m-d');


            $planejamento->setFixo($lazer);
            $planejamento->setVariavel($variavel);
            $planejamento->setLazer($lazer);
            $planejamento->setInvestimento($investimento);
            $planejamento->setDate($dataplan);

            $ids_plan = $planejamento->insert();

            header("Location: ../");
        } else {
            $_SESSION['repetido'] = true;
            header("Location: ../");
        }
    }
endif;



if (isset($_POST['addFixo'])) :
    $gastos = new Gasto();

    $tipo = 111;

    $id_user = $_SESSION['id'];
    $data = date('Y-m-d');
    $gasto = $_POST['gasto'];
    $valor = floatval(str_replace(",", ".", str_replace(".", "", $_POST['valor'])));

    $gastos->setId($id_user);
    $gastos->setDate($data);
    $gastos->setGasto($gasto);
    $gastos->setValor($valor);

    $ids_gasto = $gastos->insert();
    $id_gasto = $ids_gasto['id'];

    if (count($ids_gasto)) {
        $gastos->insertGasto($tipo, $id_gasto);
    }

endif;

if (isset($_POST['addVariavel'])) :
    $gastos = new Gasto();

    $tipo = 222;

    $id_user = $_SESSION['id'];
    $data = date('Y-m-d');
    $gasto = $_POST['gasto'];
    $valor = floatval(str_replace(",", ".", str_replace(".", "", $_POST['valor'])));

    $gastos->setId($id_user);
    $gastos->setDate($data);
    $gastos->setGasto($gasto);
    $gastos->setValor($valor);

    $ids_gasto = $gastos->insert();
    $id_gasto = $ids_gasto['id'];

    if (count($ids_gasto)) {
        $gastos->insertGasto($tipo, $id_gasto);
    }

endif;

if (isset($_POST['addLazer'])) :
    $gastos = new Gasto();

    $tipo = 444;

    $id_user = $_SESSION['id'];
    $data = date('Y-m-d');
    $gasto = $_POST['gasto'];
    $valor = floatval(str_replace(",", ".", str_replace(".", "", $_POST['valor'])));

    $gastos->setId($id_user);
    $gastos->setDate($data);
    $gastos->setGasto($gasto);
    $gastos->setValor($valor);

    $ids_gasto = $gastos->insert();
    $id_gasto = $ids_gasto['id'];

    if (count($ids_gasto)) {
        $gastos->insertGasto($tipo, $id_gasto);
    }

endif;

if (isset($_POST['addInvestimento'])) :
    $gastos = new Gasto();

    $tipo = 333;

    $id_user = $_SESSION['id'];
    $data = date('Y-m-d');
    $gasto = $_POST['gasto'];
    $valor = floatval(str_replace(",", ".", str_replace(".", "", $_POST['valor'])));

    $gastos->setId($id_user);
    $gastos->setDate($data);
    $gastos->setGasto($gasto);
    $gastos->setValor($valor);

    $ids_gasto = $gastos->insert();
    $id_gasto = $ids_gasto['id'];

    if (count($ids_gasto)) {
        $gastos->insertGasto($tipo, $id_gasto);
    }

endif;

header("Location: ../")
?>