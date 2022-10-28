<?php

require_once 'php/database/conexao.php';
include_once 'php/database/crud_db.php';
include_once 'php/class/endereco.php';
include_once 'php/class/gasto.php';
include_once 'php/class/planejamento.php';
include_once 'php/class/profissao.php';
include_once 'php/class/usuario.php';

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

if (isset($_SESSION['id'])) {
    $id = $_SESSION['id'];
    $contato = new Usuario();
    $dados = $contato->find($id);
    $title = ' | ' . $dados['nome'];
}

if (isset($_SESSION['admin'])) {
    if ($_SESSION['admin'] == true) {
        header('Location: adm.php');
    }
}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
    <title>Contato<?php echo $title; ?></title>
</head>

<body class="cadastro">
    <div class="preloader">
        <div class="loader"></div>
    </div>
    <!--div class="darkthemes">
        <input type="checkbox" class="checkbox" id="chk">
        <label class="label" for="chk">
            <div class="lua">
                <ion-icon name="moon-sharp"></ion-icon>
            </div>
            <div class="sol">
                <ion-icon name="sunny"></ion-icon>
            </div>
            <div class="ball"></div>
        </label>
    </div-->

    <?php
    $namepage = 'contato';
    include_once 'php/header.php'; ?>

    <div class="img imgcontato">
        <img src="img/plano-dark.png" class="img-dark">
        <img class="imagem2" src="img/contact.svg">
    </div>
    <fieldset class="field1">
        <div class="login">
            <h1 class="cadastro">Contate-nos</h1>
            <div>
                <div class="gap">
                    <div class="lado">
                        <div class="input-box">
                            <input type="text" name="nome" placeholder="⠀" required>
                            <span>Nome</span>
                        </div>
                        <div class="input-box">
                            <input type="text" name="sobrenome" placeholder="⠀" required>
                            <span>Sobrenome</span>
                        </div>
                    </div>
                    <div class="lado">
                        <div class="input-box">
                            <input type="text" name="celular" placeholder="⠀" oninput="mascara(this, telefone)" required>
                            <span>celular</span>
                        </div>
                        <div class="input-box">
                            <input type="email" name="email" placeholder="⠀" required>
                            <span>email</span>
                        </div>
                    </div>
                    <div class="lado">
                        <div class="input-box subject">
                            <input type="text" id="assunto" placeholder="⠀" required>
                            <span>aSSUNto</span>
                        </div>
                    </div>
                    <div class="lado">
                        <div class="input-box subject">
                            <textarea id="corpo" class="materialize-textarea" placeholder="⠀" required></textarea>
                            <span>Mensagem</span>
                            <!--<div>
                                <p>Enviar uma cópia para seu email</p>
                                <input id="chkemail" type="checkbox">
                            </div>-->
                        </div>
                    </div>
                    <div class="botao">
                        <a href="mailto:jplferreira27@gmail.com"><button type="button" class="entrar">Enviar</button></a>
                    </div>
                </div>
            </div>
        </div>
    </fieldset>






    <script src="js/js.js"></script>
    <script src="js/graficos.js"></script>
    <script src="js/selecionador.js"></script>
    <script src="js/mascaras.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.js"></script>
    <script src="js/load.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

    <?php include_once 'php/footer.php'; ?>
</body>

</html>
