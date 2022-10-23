<?php

$namepage = 'perfil';
//Conexão
// INSERIR O NOSSO CONECT!!!
include_once 'php/protecao.php';
require_once 'php/database/conexao.php';
include_once 'php/crud_db.php';
include_once 'php/class/endereco.php';
include_once 'php/class/gasto.php';
include_once 'php/class/planejamento.php';
include_once 'php/class/profissao.php';
include_once 'php/class/usuario.php';

$id = $_SESSION['id'];
$perfil = new Usuario();
$dados = $perfil->find($id);

$genero = $dados['genero'];
if ($genero == "f") {
    $genero = "Feminino";
} else if ($genero == "m") {
    $genero = "Masculino";
} else {
    $genero = "Outros";
} ?>
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
    <title>Meu Perfil | <?php echo $dados['nome']; ?></title>
</head>

<body class="perfil">
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
    include_once 'php/header.php';
    ?>

    <fieldset class="field1 perfil">
        <div class="login">
            <div>
                <?php
                if (!$dados['foto']) {
                ?><img class="ft_perfil" src='data:image/png;base64,<?php echo $dados['foto']; ?>'>
                <?php
                } else {
                ?>
                    <!--img class="ft_perfil" src='data:image/png;base64,<?php echo $dados['foto']; ?>'-->
                <?php
                }
                ?>
                <div class="gap">
                    <div class="lado">
                        <div class="box-input perfil">
                            <span>Nome:<p>⠀<?php echo $dados['nome']; ?></p></span>
                        </div>

                        <div class="box-input perfil">
                            <span>Sobrenome:<p>⠀<?php echo $dados['sobrenome']; ?></p></span>
                        </div>
                    </div>

                    <div class="lado">
                        <div class="box-input perfil">
                            <span>celular:<p>⠀<?php echo $dados['celular']; ?></p></span>
                        </div>
                        <div class="box-input perfil">
                            <span>email:<p>⠀<?php echo $dados['email']; ?></p></span>
                        </div>
                    </div>
                    <?php
                    $data_pgsql = $dados['nascimento'];
                    $timestamp = strtotime($data_pgsql);
                    $data = date('d/m/Y', $timestamp);
                    ?>
                    <div class="lado">
                        <div class="box-input perfil">
                            <span>data de nascimento:<p>⠀<?php echo $data; ?></p></span>
                        </div>
                        <div class="box-input perfil">
                            <span>cpf:<p>⠀<?php echo $dados['cpf']; ?></p></span>
                        </div>
                    </div>
                    <div class="lado">
                        <div class="box-input perfil">
                            <span>gÊnero:<p>⠀<?php echo $genero; ?></p></span>
                        </div>
                        <div class="box-input perfil">
                            <span>renda (R$):<p>⠀<?php echo number_format($dados['renda'], 2, ",", "."); ?></p></span>
                        </div>
                    </div>
                    <div class="lado crud">
                        <div class="box-input"></div>
                        <div class="box-input crud">
                            <a href="#modal-update" class="modal-trigger">
                                <button class="circle update" title="ATUALIZAR">
                                    <ion-icon name="pencil-sharp"></ion-icon>
                                </button>
                            </a>
                            <a href="#modal-delete" class="modal-trigger">
                                <button class="circle delete" title="DELETAR">
                                    <ion-icon name="trash"></ion-icon>
                                </button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </fieldset>

    <div id="modal-update" class="modal modal-fixed-footer">
        <form action="php/crud_update.php" method="post">
            <div class="modal-content">
                <h3>Atualizar Dados</h3>
                <div class="part1">
                    <div class="gap">
                        <div class="materialize">
                            <div class="lado">
                                <div class="update perfil">
                                    <span>Nome</span>
                                    <input type="text" name="nome" value="<?php echo $dados['nome']; ?>" placeholder="⠀" required>
                                </div>
                                <div class="update perfil">
                                    <span>Sobrenome</span>
                                    <input type="text" name="sobrenome" value="<?php echo $dados['sobrenome']; ?>" placeholder="⠀" required>
                                </div>
                            </div>
                            <div class="lado">
                                <div class="update perfil">
                                    <span>Celular</span>
                                    <input type="text" name="celular" value="<?php echo $dados['celular']; ?>" onkeydown="mascara(this, telefone)" placeholder="⠀" maxlength="15" required>
                                </div>
                                <div class="update perfil">
                                    <span>Email</span>
                                    <input type="email" name="email" value="<?php echo $dados['email']; ?>" placeholder="⠀" required>
                                </div>
                            </div>
                            <div class="lado">
                                <div class="update perfil">
                                    <span>Data de Nascimento</span>
                                    <input type="date" id="date" name="nascimento" value="<?php echo $dados['nascimento']; ?>" placeholder="⠀">
                                </div>
                                <div class="update perfil">
                                    <span>CPF</span>
                                    <input type="text" name="cpfs" id="cpf2" value="<?php echo $dados['cpf']; ?>" onkeydown="mascara(this, cpf)" maxlength="14" placeholder="⠀" readonly required>
                                </div>
                            </div>
                            <div class="lado">
                                <?php
                                $option1 = $dados['genero'];
                                if ($option1 == 'm') {
                                    $option11 = 'Masculino';
                                    $option2 = 'f';
                                    $option22 = 'Feminino';
                                    $option3 = 'o';
                                    $option33 = 'Outros';
                                } elseif ($option1 == 'f') {
                                    $option11 = 'Feminino';
                                    $option2 = 'm';
                                    $option22 = 'Masculino';
                                    $option3 = 'o';
                                    $option33 = 'Outros';
                                } else {
                                    $option11 = 'Outros';
                                    $option2 = 'f';
                                    $option22 = 'Feminino';
                                    $option3 = 'm';
                                    $option33 = 'Masculino';
                                } ?>

                                <div class="update perfil">
                                    <span>Gênero</span>
                                    <select id="genero" name="genero">
                                        <option id="option1" value="<?php echo $option1; ?>"><?php echo $option11; ?></option>
                                        <option id="option2" value="<?php echo $option2; ?>"><?php echo $option22; ?></option>
                                        <option id="option3" value="<?php echo $option3; ?>"><?php echo $option33; ?></option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <input type="hidden" name="id" value="<?php echo $dados['id']; ?>">



                <button type="submit" name="btn-update" class="btn green">Concluir</button>
                <a href="#!" class="modal-close waves-effect waves-green btn-flat">Cancelar</a>

            </div>
        </form>
    </div>

    <div id="modal-delete" class="modal">
        <div class="modal-content">
            <h3>Atenção!</h3>
            <p>Deseja excluir esse cliente?</p>
        </div>
        <div class="modal-footer">

            <form action="php/crud_delete.php" method="POST">
                <input type="hidden" name="id" value="<?php echo $dados['id']; ?>">
                <button type="submit" name="btn-deletar" class="btn red">Sim, quero deletar</button>
                <a href="#!" class="modal-close waves-effect waves-green btn-flat">Cancelar</a>
            </form>

        </div>
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


    <?php
    include_once 'php/footer.php';
    ?>



    <script>
        $(document).ready(function() {
            $('.carousel').carousel();
        });

        M.AutoInit();
    </script>

</body>

</html>
