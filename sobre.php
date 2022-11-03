<!DOCTYPE html>
<html lang="pt-br">
<!-- A tag head é o cabeçalho e dentro dela estão sendo alocadas algumas tags
    essenciais para o nosso site. Um meta de compatibilidade com o EDGE; um meta que
    engloba todos os caracteres especiais utilizados na lingua portuguesa; um meta que
    retorna o tamnho padrão da página e ajuda na otimização em dispositiveis móveis;
    uma tag link que realiza a conexão do arquivo CSS ao arquivo HTML; uma tag indicando
    quem é o(s) autor(s)/[integrantes do grupo], e o título da página -->

<head>
    <meta name="author" content="Ian Fracalossi, Juan Pablo, João Pedro Tavares">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="img/icon_Plano.png" type="imagem/png">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
    <title>Sobre</title>
</head>

<!-- Corpo do site -->

<body class="bodysobre">
    <div class="preloader">
        <div class="loader"></div>
    </div>
    <a href="../PLANO/">
        <div class="voltar">
            <p>
                <ion-icon name="home"></ion-icon>InÍcio
            </p>
        </div>
    </a>
    <!-- Parte principal do site -->
    <main>
        <!-- O que é o Plano -->
        <div class="oqSomos">
            <!-- Imagem ilustrativa -->
            <img src="img/Data extraction-cuate.svg" alt="imgQS" id="imgQS">
            <!-- Texto sobre a aplicação -->
            <div>
                <h1 id="oq1" class="h1Sobre"> O que é o Plano</h1><br>
                <p id="oq2">O Plano é o seu maior aliado para atingir os seus objetivos financeiros. <br>
                    Este site foi desenvolvido por 3 estudantes do Instituto Federal do Espírito Santo (IFES) que, insatisfeitos com as dificuldades que tinham para organizar suas despesas, desenvolveram um novo jeito de lidar com seus planejamentos financeiros. <br>
                    Muito mais do que planilhas, nós do Plano nos importamos com você e com o seu futuro!<br>
                    Aqui você conseguirá registrar seus gastos e estipular metas, tudo de uma maneira prática e interativa.
                </p><br>
            </div>
        </div>

        <!-- Texto sobre as vantagens do site-->
        <div class="vantagens">
            <h1 id="vtg1" class="h1Sobre">Vantagens</h1><br>
            <p id="vtg2">Muito mais do que planilhas, nós do Plano nos importamos com você e com o seu futuro!
                Aqui você conseguirá registrar seus gastos e estipular metas, tudo de uma maneira prática e interativa.
                Nós do Plano oferecemos recomendações personalizadas para o seu perfil e te ajudamos a manter-se focado em busca dos seus objetivos.
            </p>
        </div>

        <!-- Texto sobre as Ferramentas do site -->
        <div class="ferramentas">
            <div>
                <h1 id="fer1" class="h1Sobre">Ferramentas</h1>
                <p id="fer2">Nossa principal funcionalidade é a aba “Meu plano”. Nela você define uma meta, uma divisão ideal para o seu orçamento, e depois você pode registrar as suas despesas. </p>
                <p id="fer2">A partir daí nós te oferecemos relatórios e gráficos para que você consiga visualizar de maneira simples e divertida como está o seu comportamento em relação a essa meta.</p>
            </div><br>
            <!-- imagem ilustrativa -->
            <img src="img/Spreadsheets-bro.svg" alt="imgQS" id="imgQS">
        </div>

        <!-- Área sobre os desenvolvidores -->
        <h1 id="qms" class="h1Sobre">Quem somos nós</h1>

        <!-- div contendo divs com o perfil dos três desenvolvidores, cada div contem uma imagem e uma descrição -->
        <div class="qmSomos">
            <!-- perfil do João -->
            <div class="jao">
                <img src="img/joao2.jpg" alt="joao" id="joaoImg">
                <p id="qmJ">
                    Este é o João Pedro, apaixonado pelo mundo empresarial e das finanças sonha em ser um empresário/investidor de sucesso. <br>
                    Estuda na sala de seus companheiros de equipe, na turma de Informática para Internet no IFES Campus Serra. <br>
                    Se integrou a turma no ano de 2021, após ter pedido transferência do IFES Santa Teresa onde já fazia Informática para Internet, curso ao qual gosta e acha interessante, mas não pretende levar, diretamente, para a vida profissional.
                </p>

            </div>

            <!-- perfil do Ian -->
            <div class="ian">
                <img src="img/ian.jpg" alt="ian" id="ianImg">
                <p id="qmI">Este é o Ian Fracalossi, apaixonado por comunicação e representante de turma em 2021 e 2022. <br>
                    Escolheu a informática ao acaso, mas hoje já se identifica com o curso e não abandona a ideia de trabalhar como um profissional da área, mesmo sua primeira escolha ser jornalismo. <br>
                    Foi o chefe de design da equipe.
                </p>
            </div>

            <!-- perfil do Juan -->
            <div class="juan">
                <img src="img/juan.jpeg" alt="juan" id="juanImg">
                <p id="qmJ">Este é Juan Pablo, viciado em fazer dinheiro, apaixonado por tudo relacionado ao mundo das finanças e vendas,
                    sonha em se tornar um grande empreededor com vários negócios, e um investidor de sucesso. Ingressou recentemente
                    no IFES Serra onde faz o curso técnico de Informática para Internet, e foi acolhido pelos integrantes e outros colegas, anteriormente estudava no IFES Alegre, onde cursava
                    o curso de Informática, se identificando muito o curso e não pretende abandonar a área.</p>
            </div>
        </div>
    </main>
    <!-- Rodapé -->



    <script src="js/js.js"></script>
    <script src="js/graficos.js"></script>
    <script src="js/selecionador.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.js"></script>
    <script src="js/load.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

    <!--?php include_once 'php/footer.php'; ?-->

    <footer class="sobre">
        <fieldset class="footer">
            <a href="https://wa.me/+5527999999999">
                <ion-icon name="logo-whatsapp"></ion-icon>
            </a>
            <a href="http://twitter.com">
                <ion-icon name="logo-twitter"></ion-icon>
            </a>
            <a href="http://instagram.com">
                <ion-icon name="logo-instagram"></ion-icon>
            </a>
            <a href="http://youtube.com">
                <ion-icon name="logo-youtube"></ion-icon>
            </a>
            <a href="tel:+5527999999999">
                <ion-icon name="call"></ion-icon>
            </a>
        </fieldset>
    </footer>
</body>

</html>
