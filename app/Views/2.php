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

    <link rel="stylesheet" href="<?= base_url()?>/css/styles.css">
    
</head>

<body>

    <div id="container" class="container-fluid p-3 text-dark">

        <div class="row ">
        <a href="<?= site_url('public/l')?>" style="text-decoration: none; ">
            <img src="<?= base_url('images/back.svg')?>">
        </a>
        </div>
       
        
            <div class="row">
                <form action="<?= site_url('public/l/logar_usuario') ?>" class="mx-auto p-5 mt-5" method="post">
                    <div class="col-sm-12">
                        <h2 class="mx-auto mb-4">Login</h2>
                    </div>

                    <div class="col-sm-12">
                        <label class="mt-2 font-weight-bold">Usuário
                        <input type="text" name="login" class="mb-1 p-2"  placeholder="Insira o usuário" value="<?php if(isset($login)) echo set_value('login')?>" autofocus>
                            <?php if(isset($user)) { if($user == 'a') echo "<p><span id='corvermelha'>Usuário Incorreto</span></p>"; else if($user == 'b') echo "<p><span id='corverde'>Usuário Correto</span></p>"; } ?>
                        </label>
                    </div>

                    <div class="col-sm-12">
                        <label class="mt-2 font-weight-bold">Senha
                            <input type="password" name="senha" class="mb-1 p-2" placeholder="Insira a senha">
                            <?php if(isset($pass)) if($pass == true ) echo "<p><span id='corvermelha'>Senha Incorreta</span></p>"; else echo "<p><span id='corverde'>Senha Correta</span></p>" ?>
                                
                        </label>
                    </div>

                    <div class="col-sm-12">
                        <br><input type="submit" class="botao">
                    </div>
                </form>
            </div>


        <div class="row">
            <h6 class=" mt-4 mx-auto">Novo por aqui? <a id="new" href="<?=site_url('public/cadastro')?>">Cadastre-se</a></h6>
        </div>
    </div>

</body>

</html>






























