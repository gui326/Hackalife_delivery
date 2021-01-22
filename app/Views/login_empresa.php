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

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

    <link rel="stylesheet" href="<?= base_url('css/styles_telas.css') ?>">
</head>

<body>

    <div id="container" class="container-fluid">


        
        <div class="d-flex justify-content-center align-content-center p-5">
            <form action="<?= site_url('public/l/logar_empresa') ?>" method="post" class="mx-4 p-5">
                <h2 class="mx-auto mb-4 d-block">Login</h2>
                <label class="mt-2 font-weight-bold d-block">Usuário
                    <input type="text" class="mb-2 p-2" name="login" value="<?php if(isset($login)) echo set_value('login')?>" placeholder="Insira o usuário" autofocus>
                    <?php if(isset($user)) { if($user == 'a') echo "<p><span id='corvermelha'>Usuário Incorreto</span></p>"; else if($user == 'b') echo "<p><span id='corverde'>Usuário Correto</span></p>"; } ?>
                </label>
                <label class="mt-4 font-weight-bold d-block">Senha
                    <input type="password" name="senha" class="mb-5 p-2" placeholder="Insira a senha">
                    <?php if(isset($pass)) if($pass == true ) echo "<p><span id='corvermelha'>Senha Incorreta</span></p>"; else echo "<p><span id='corverde'>Senha Correta</span></p>" ?>
                </label>
                <input type="submit" class="botao">
            </form>
        </div>

        <div class="row">
            <h6 class=" mt-4 mx-auto">Novo por aqui? <a id="new" href="<?=site_url('public/cadastro')?>">Cadastre-se</a></h6>
        </div>
    </div>

</body>

</html>