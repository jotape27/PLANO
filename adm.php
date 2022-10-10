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


require_once 'php/conexao.php';
include_once 'php/crud_db.php';
include_once 'php/tables/tabelas.php';

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
    $perfil = $admUser->findPerfil();

    $countRenda = $admProfissao->findCount();
    $Soma = $admProfissao->findSoma();
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

                        $data_pgsql = $linha['nascimento'];
                        $timestamp = strtotime($data_pgsql);
                        $data = date('d/m/Y', $timestamp); ?>
                        <tr>
                            <td><?php echo $linha['nome']; ?></td>
                            <td><?php echo $linha['sobrenome']; ?></td>
                            <td><?php echo $linha['email']; ?></td>
                            <td><?php echo $linha['cpf']; ?></td>
                            <td><?php echo $genero; ?></td>
                            <td><?php echo $data; ?></td>
                            <td><?php echo $perfil['perfil']; ?></td>
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














    <script src="js/js.js"></script>
    <script src="js/selecionador.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.js"></script>
    <script src="js/load.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>