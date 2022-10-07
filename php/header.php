<?php

$perfil = '';

if ($namepage == 'index') :
    $index = 'active';
endif;

if ($namepage == 'config') :
    $config = 'active';
endif;

if ($namepage == 'perfil') :
    $perfil = 'active';
endif;

if ($namepage == 'contato') :
    $contato = 'active';
endif;

if ($namepage == 'sair') :
    $sair = 'active';
endif;

?>



<header>
    <div class="navigation">
        <ul>
            <li class="list <?php echo $index; ?>">
                <a href="index.php">
                    <span class="icon">
                        <ion-icon name="home"></ion-icon>
                    </span>
                    <span class="text">Home</span>
                </a>
            </li>
            <li class="list <?php echo $config; ?>">
                <a href="config.php">
                    <span class="icon">
                        <ion-icon name="settings"></ion-icon>
                    </span>
                    <span class="text">Configurações</span>
                </a>
            </li>
            <li class="list <?php echo $perfil; ?>">
                <a href="perfil.php">
                    <span class="icon">
                        <ion-icon name="person"></ion-icon>
                    </span>
                    <span class="text">Perfil</span>
                </a>
            </li>
            <li class="list <?php echo $contato; ?>">
                <a href="contato.php">
                    <span class="icon">
                        <ion-icon name="chatbox-ellipses"></ion-icon>
                    </span>
                    <span class="text">Contato</span>
                </a>
            </li>
            <li class="list <?php echo $sair; ?>">
                <a href="php/logout.php">
                    <span class="icon">
                        <ion-icon name="log-out"></ion-icon>
                    </span>
                    <span class="text">Sair</span>
                </a>
            </li>
            <div class="indicator"></div>
        </ul>
    </div>
</header>