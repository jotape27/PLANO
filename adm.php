<?php
//include_once 'php/protecao.php';
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

<body>
    <table>
        <thead>
            <tr>
                <th>Nome:</th>
                <th>Sobrenome:</th>
                <th>Email:</th>
            </tr>
        </thead>
        <?php
        $adm = new Usuario();

        $tabela = $adm->findADM();

        ?>
            <tr>
                <td>-</td>
                <td>-</td>
                <td>-</td>
            </tr>



    </table>
</body>

</html>