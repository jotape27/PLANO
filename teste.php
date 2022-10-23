<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>teste</title>
</head>

<body>
    <style>
        body {
            max-height: 100vh;
            max-width: 100vw;
        }

        img {
            height: 10em;
            width: 10em;
            border-radius: 50%;

        }
    </style>
    <!--img src="img/juan.jpeg" alt="100"-->

    <?php

    $img = file_get_contents('img/juan.jpeg');
    $foto = base64_encode($img);
    ?>
    <img src='data:image/png;base64,<?php echo $foto; ?>'>

</body>

</html>