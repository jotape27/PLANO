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


require_once 'php/database/conexao.php';
include_once 'php/crud_db.php';
include_once 'php/class/endereco.php';
include_once 'php/class/gasto.php';
include_once 'php/class/planejamento.php';
include_once 'php/class/profissao.php';
include_once 'php/class/usuario.php';

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="css/materialize.css">
    <link rel="stylesheet" href="css/style.css">
    <title>ADMINSTRADOR</title>
</head>

<body class="adm">

    <button type="button">
        <a href="php/logout.php">
            <span class="icon">
                <ion-icon name="log-out"></ion-icon>
            </span>
        </a>
    </button>

    <?php
    $admGasto = new Gasto();
    $admUser = new Usuario();
    $admEndereco = new Endereco();
    $admPlano = new Planejamento();
    $admProfissao = new Profissao();

    $tabela = $admUser->findAll();
    $count = $admUser->findCount();

    $countRenda = $admProfissao->findCount();
    $Soma = $admProfissao->findSoma();


    // print_r($perfil);

    //$teste = $admGasto->listaGasto();
    ?>

    <div class="adm-usuario">
        <div class="tables">
            <table class="responsive-table table nao">
                <thead>
                    <tr>
                        <th>Números de usuários:⠀⠀⠀⠀<?php echo $count['count']; ?></th>
                    </tr>
                </thead>
            </table>
            <table class="responsive-table centered highlight">
                <thead>
                    <tr>
                        <th>Nome:</th>
                        <th>Sobrenome:</th>
                        <th>Email:</th>
                        <th>Celular:</th>
                        <th>CPF:</th>
                        <th>Gênero:</th>
                        <th>Data de Nascimento:</th>
                        <th>Perfil:</th>
                    </tr>
                </thead>
                <?php

                if (count($tabela) > 0) {
                    foreach ($tabela as $linha) {


                        $genero = $linha['genero'];
                        if ($genero == "f") {
                            $genero = "Feminino";
                        } else if ($genero == "m") {
                            $genero = "Masculino";
                        } else {
                            $genero = "Outros";
                        }

                        //print_r($linha);

                        // if ($contato['tp_contato'] = 'email') {
                        //     $email = $contato['descricao'];
                        // } elseif ($contato['tp_contato'] = 'celular') {
                        //     $celular = $contato['descricao'];
                        // }


                ?>
                        <tr>
                            <td><?php echo $linha['nome']; ?></td>
                            <td><?php echo $linha['sobrenome']; ?></td>
                            <td><?php echo $linha['email']; ?></td>
                            <td><?php echo $linha['celular']; ?></td>
                            <td><?php echo $linha['cpf']; ?></td>
                            <td><?php echo $genero; ?></td>

                            <?php $data = date('d/m/Y', strtotime($linha['nascimento'])); ?>

                            <td><?php echo $data; ?></td>
                            <td><?php echo $linha['perfil']; ?></td>
                        </tr>

                    <?php
                    } //endforeach;
                } else { ?>
                    <tr>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                    </tr>
                <?php
                }; //endif;
                /*if (count($teste) > 0) {
                    foreach ($teste as $testando) {
                        var_dump($testando);
                    }
                }*/
                ?>

            </table>
        </div>
    </div>

    <div class="adm-renda">


        <?php
        $renda = $Soma['sum'] / $countRenda['count'];

        $media = number_format($renda, 2, '.', ',');
        ?>
        <p>Média de renda mensal dos usuários: <?php echo $media; ?></p>
    </div>














    <script src="js/graficos.js"></script>
    <script src="js/mascaras.js"></script>
    <script src="js/api_busca_cep.js"></script>
    <script src="js/selecionador.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.js"></script>
    <script src="js/load.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>.
    <script src="js/materialize.min.js"></script>
</body>

</html>
