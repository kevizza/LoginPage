<!DOCTYPE html>
<html lang="PT-BR">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="./style.css">
    <link rel="icon" type="image/png" href="Imgs/Logo_of.png" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Música Muda o Mundo - Frecy</title>
</head>

<body>

    <!-- NavBar -->

    <header>
        <nav>
            <div class="logodiv">
                <a class="logo" href="./index.html" style="text-decoration:none;">
                    <h1 id="h1asus">ASUS</h1>
                    <img id="imgasus" src="/img/logo.png" onmouseover="<h1>Asus</h1>">
                </a>
            </div>
            <div class="mobile-menu">
                <div class="line1"></div>
                <div class="line2"></div>
                <div class="line3"></div>
            </div>
            <ul class="nav-list">
                <li><a href="/View/LoginPage/login.php" style="text-decoration:none;color: #bfbfbf;">
                        <h2>Entrar</h2>
                    </a></li>
                <li><a href="/View/RegisterPage/registrar.php" style="text-decoration:none;color: #bfbfbf;">
                        <h2>Inscrever-se</h2>
                    </a></li>
                <li> </li>
                <li style="color:white ;">
                    <h2>|</h2>
                </li>
                <li> </li>
                <li><a href="#" style="text-decoration:none;color: #bfbfbf;">
                        <h2>Suporte</h2>
                    </a></li>
                <li><a href="/Views/PremiumPage/Premium.php" style="text-decoration:none;color: #bfbfbf;">
                        <h2>Premium</h2>
                    </a></li>
            </ul>
        </nav>
    </header>

    <!--Showcase -->

    <div id="showcase">
        <div class="showcase-container">
            <h2>
                Asus GAMING
            </h2>
            <h3>a marca número 1 em perifericos e hardwares para Jogos apresenta a nova plataforma para gamers
                de todo o MUNDO
            </h3>
            <br>
            <div class="btn">
                <a href="/View/LoginPage/login.php"><button class="btn-primary">Entre de Graça</button></a>
            </div>
        </div>
    </div>

    <!-- ShowCase 2 -->
    <div id="showcase2">
        <div class="showcase-container2">
            <h2>
                Devore seus INIMIGOS
            </h2>
            <h3>Com os produtos de primeira linha da ASUS GAMING o seu jogo fica mais imersivo e mais fluido
                assim trazendo uma maior experiência dentro dos jogos.
            </h3>
        </div>
    </div>

    <!-- ShowCase 3 -->
    <div id="showcase3">
        <div class="showcase-container3">


            <h2>
                É questão de PRÁTICA
            </h2>
            <h3>A resposta curta e grossa é: SIM, a programação é uma coisa complicada de se entender, SE você NÃO
                se dedicar a entender como as coisas funcionam e ter vontade de aprender você não se dará bem com programação.
            </h3>

        </div>
    </div>

    <!--Footer -->
    <div class="copyright-area">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6 text-center text-lg-left">
                    <div class="copyright-text">
                        <p>Copyright &copy; 2022, Todos os direitos reservados a <a href="/index.html">ASUS</a></p>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 d-none d-lg-block text-right">
                    <div class="footer-menu">
                        <ul>
                            <li><a href="#">Inicio</a></li>
                            <li><a href="#">Termos de Serviço</a></li>
                            <li><a href="#">Politicas de Privacidade</a></li>
                            <li><a href="#">Contato</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </footer>

    <!--Scripts -->
    <script src="https://kit.fontawesome.com/4c9f52c1b8.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="./mobile-navbar.js"></script>
    <script>
        // $(".logodiv").hover(function() {
        //     $(this).children("h1").show();
        //     $(this).children("img").hide();
        // }, function() {
        //     $(this).children("h1").hide();
        //     $(this).children("img").show();
        // });

    </script>
</body>

</html>