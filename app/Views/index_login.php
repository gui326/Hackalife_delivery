<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="<?= base_url('css/styles.css') ?>">
</head>

<body>

    <div id="container" class="container-fluid">

        <div class="row ">
            <a href="<?= site_url('public/cadastro')?>" style="text-decoration: none; ">
                <img src="<?= base_url('images/back.svg')?>">
            </a>
        </div>
        
        <div class="d-flex justify-content-center align-items-center">
            <form class="mx-4 p-5">
                <h2 class="mx-auto mb-4">Login</h2>
                <label class="mt-2 font-weight-bold">Usuário
                    <input type="text" class="mb-2 p-2" placeholder="Insira o usuário" autofocus>
                </label>
                <label class="mt-4 font-weight-bold">Senha
                    <input type="password" class="mb-5 p-2" placeholder="Insira a senha">
                </label>
                <input type="submit" class="botao">
            </form>
        </div>

        <div class="row">
            <h6 class=" mt-4 mx-auto">Novo por aqui? <a id="new" href="#">Cadastre-se</a></h6>
        </div>
    </div>

</body>

</html>