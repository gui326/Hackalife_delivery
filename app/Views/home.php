<!DOCTYPE html>
<html lang="portuguese">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delivery</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="styles_home.css">

</head>

<body>

    <div id="container" class="container-fluid">
        <nav class="navbar navbar-expand-sm navbar-fixed-top navbar-light">
            <a class="navbar-brand mx-auto" href="<?= site_url('public') ?>">
                <img src="<?= site_url('/images/brand.png') ?>" alt="Logo" id="logo" width="150px" height="90px">
            </a>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a style="background-color: #fff !important;" class="botao_nav mx-auto " href="<?= site_url('public/l') ?>">Entrar</a>
                </li>
            </ul>
        </nav>
        <br>
        
        <div>
            <div class="container-fluid">
            <div class="mt-4">
            <div class="row">
                <div id="so" class="col-sm-5 col6">
                    <h2 align="center">Objetivo</h2>
                    <p align="justify">Com o intuito de trazer total conforto e lhe conectar aos mais diversos tipos de produtos com as mais variadas ofertas o "Delivery(Name)" tem o objetivo de acabar com a dificuldade que o distanciamento social traz consigo. Tendo isso,
                        já que a recomendação é não sair de casa, nós levamos os produtos até você.
                    </p>

                </div>
            
                <div class="col-sm-2"></div>
                <div  id="so" class="col-sm-5 col6">
                    <h2 align="center">Tudo ao seu alcance!</h2>
                    <p align="justify">Carregamos este lema pois é justamente pra isso que estamos aqui, disponibilizar tudo da forma mais rápida e segura possível. Trabalhamos com as empresas mais tradicionais do mercado para que você seja sempre bem servido e fiquei satisfeito.
                        Afinal, estamos aqui por sua causa.
                    </p>

                </div>
            </div>
                </div>
        <div class="mt-4">
            <div class="row">
                <div id="so" class="col-sm-5 col6">
                    <h2 align="center">Como me conecto?</h2>
                    <p align="justify">Elaboramos esta plataforma para ser o mais simples possível de lidar. Se você for um consumidor, basta se cadastrar e utilizar de nossos serviços lhe traremos uma experiência incrível apresentando diversas promoções de seus produtos
                        favoritos. Se você for uma Empresa e quiser ser nosso parceiro, basta realizar seu cadastro e aguardar a aprovação.<a style="color: rgb(32, 143, 78);" href="<?= site_url('public/cadastro') ?>">Cadastre-se Aqui!</a>
                    </p>

                </div>
                <div class="col-sm-2"></div>
                <div id="so" class="col-sm-5 col6">
                    <h2 align="center">Serviços Oferecidos</h2>
                    <p align="justify">Para você consumidor oferecemos os mais variados tipos de produtos, de alimentos até utilidades para sua casa, tudo isso a um clique de distância.Para você empreendedor oferecemos uma grande parceria, trazendo o consumidor até você
                        de forma prática e eficiente, com uma plataforma prática para cadastrar seus produtos e disponibilizá-los ao público.
                    </p>

                </div>
            </div>
        </div>
        
            <br>
        <img id="entregador" src="<?= site_url('/images/entregador.gif') ?>" width="150px" height="100px" style="margin-left: 40px; margin-top: 20px;">
        </div>
        <br><br><br>
        <div class="container-fluid bg-light" id="rodape">
            <div class="row border border-top-0 border-right-0 border-left-0">
                <!--Inserindo a logo-->
                <div class="col-sm-12 mt-2 mb-2"><br>
                   <p align="center">Obrigado pela preferência</p>
                </div>
            </div>
            <div class="row text-center mt-2">
                <div class="col-sm-12">
                    <a href="#" target="_blank"><img class="icones_R" src="<?= site_url('/images/instagram.png') ?>"></a>
                    <a href="#" target="_blank"><img class="icones_R" src="<?= site_url('/images/twitter.png') ?>"></a>
                    <a href="#" target="_blank"><img class="icones_R" src="<?= site_url('/images/facebook.png') ?>"></a>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-sm-12 mt-3">
                    <p>Delivery &copy Todos os direitos reservados</p>
                </div>
            </div>
        </div>
    </div>
</body>

</html>