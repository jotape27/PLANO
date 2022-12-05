<!DOCTYPE html>
<html>

<head lang="pt-br">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
    <title>Login</title>
</head>

<body class="body">
    <div class="preloader">
        <div class="loader"></div>
    </div>


    <!-- <div class="darkthemes">
        <input type="checkbox" class="checkbox" id="chk">
        <label class="label" for="chk">
            <div class="lua">
                <ion-icon name="moon-sharp"></ion-icon>
            </div>
            <div class=sol>
                <ion-icon name="sunny"></ion-icon>
            </div>
            <div class="ball"></div>
        </label>
    </div> -->

    <div class="img imglogin">
        <img src="img/plano-dark.png" class="img-dark">
        <img src="img/plano-light.png" class="img-light" hidden>
        <img class="imagem" src="img/Personal finance-amico.png">
    </div>
    <form action="php/login.php" method="POST">
        <fieldset cLass="field">
            <div class="login">
                <h1>Login</h1>
                <div>
                    <div class="gap">

                        <div class="input-box">
                            <input onkeypress="mascara(this, cpf)" maxlength="14" placeholder=" " type="text" required name="cpfs" />
                            <span>cpf</span>
                            <p class="desc">digite apenas números</p>
                        </div>
                        <div class="input-box">
                            <input type="password" name="senha" id="senha" placeholder="⠀" required>
                            <span>Senha</span>
                            <button type="button" class="toogle-show">
                                <div class="show" onclick="show()">
                                    <ion-icon name="eye"></ion-icon>
                                </div>
                                <div class="hide" onclick="hide()">
                                    <ion-icon name="eye-off-sharp"></ion-icon>
                                </div>
                            </button>
                        </div>
                        <div class="botao">
                            <button type="submit" class="entrar" name="btn-login">logar</button>
                        </div>
                    </div>
                </div>
                <p class="link">Caso não possua uma conta, crie uma <a href="Cadastro.php">aqui</a></p>
                <?php
                session_start();
                if (isset($_SESSION['erro'])) {
                ?>
                    <div class="error email">
                        <span>CPF ou senha incorretos ou não cadastrado, tente novamente</span>
                    </div>

                <?php
                }
                session_unset();
                ?>
            </div>


        </fieldset>

    </form>
    </div>



    <div class="div_footer">
        <?php include_once 'php/footer.php'; ?>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.min.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="js/load.js"></script>
    <script src="js/js.js"></script>
    <script src="js/graficos.js"></script>
    <script src="js/mascaras.js"></script>
    <script src="js/selecionador.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
