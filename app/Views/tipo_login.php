<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipo Login</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="<?= base_url('/css/styles.css') ?>">
</head>
<body>

    <div id="container" class="container-fluid p-3 text-dark">

        <div class="row ">
        <a href="<?= site_url('public')?>" style="text-decoration: none; ">
            <img src="<?= base_url('images/back.svg')?>">
        </a>
        </div>
        
        <div class="row">
            <form class="mx-auto p-5 mt-5">

                <div class="row">
                    <h2 class="mx-auto mb-4">Tipo de conta<br>Login</h2>
                </div>

                <div class="row">
                        <a class="tipo_conta mx-auto mt-4" href="<?= site_url('public/l/empresa') ?>">Empresa</a>
                </div>

                <div class="row">
                    <a class="tipo_conta mx-auto mt-4" href="<?= site_url('public/l/usuario') ?>">Cliente</a>
                </div>
            </form>
        </div>
    </div>
    
</body>
</html>