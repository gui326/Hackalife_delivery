<!DOCTYPE html>
<html lang="portuguese">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmação de Cadastro</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="<?= base_url('css/styles_confirmado
    .css') ?>">
</head>

<body>

    <div id="container" class="container-fluid p-3 text-dark">

        <!--Logo-->
        <div class="d-flex m-2 justify-content-center ">
            <a href="# "><img src="<?= base_url('images/logoescuro.png')?>" style="height: 100px; width: 110px; "></a>
        </div>

        <div class="row mt-5 ">
            <form class="mx-auto p-5 mt-5 ">
                <div class="row ">
                    <h2 class="mx-auto mb-4 ">Cadastro Confirmado com Sucesso!</h2>
                </div>

                <div class="d-flex justify-content-center entregador">
                    <img src="https://media.giphy.com/media/l2aQ42Z7d3iw5TyCaq/giphy.gif " width="350px " height="150px ">
                </div>

                <div class="row">
                    <a class="tipo_conta mx-auto mt-6" href="<?= site_url('l') ?>" >Entrar</a>
                </div>
            </form>
        </div>
    </div>

</body>

</html>