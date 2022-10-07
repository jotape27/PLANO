<?php
//include_once 'php/protecao.php';
include_once 'php/protecao.php';
require_once 'php/conexao.php';
include_once 'php/crud_db.php';
include_once 'php/tables/tabelas.php';

$id = $_SESSION['id'];
$config = new Usuario();
$dados = $config->find($id);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Configurações | <?php echo $dados['nome']; ?></title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <div class="preloader">
        <div class="loader"></div>
    </div>

    <?php
    $namepage = 'config';
    include_once 'php/header.php'; ?>

    <!--H1 class="embreve">COMING SOON</H1-->



    <?php include_once 'php/footer.php'; ?>

    <script src="js/js.js"></script>
    <script src="js/graficos.js"></script>
    <script src="js/selecionador.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.js"></script>
    <script src="js/load.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>