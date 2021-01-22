<!DOCTYPE html>
<html lang="portuguese">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Preferências Cliente</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="<?= base_url('css/styles_preferencia.css') ?>">
    
    

</head>

<body>

    <div id="container" class="container-fluid">
        
        <div class="row ">
            <a href="<?= site_url('public/cadastro/usuario')?>" style="text-decoration: none; ">
                <img src="<?= base_url('images/back.svg')?>">
            </a>
        </div>


        <form action="<?= site_url('public/cadastro/usuario3') ?>" method="post" class="p-5 mx-auto w-100">

            <h2 style="font-size: xx-large !important;">Quase lá...</h2>
            <h2 style="font-size: x-large !important;">Agora, Informe suas preferências, no máximo duas.</h2>

            <div class="row">
                <div class="col-sm-2"></div>
                <div class="col-sm-3">
                    <input type="checkbox" name="check1" id="restaurantes" class="checkbox-input" />
                    <label for="restaurantes" class="checkbox-label">
                    <div class="checkbox-text">
                        <p class="checkbox-text--title">Restaurantes</p>
                        <p class="checkbox-text--description">Clique para <span class="un">De</span>selecionar!</p>
                    </div>
                    </label>
                </div>
                <div class="col-sm-2"></div>
                <div class="col-sm-3">
                    <input type="checkbox" name="check2" id="farmacias" class="checkbox-input" />
                    <label for="farmacias" class="checkbox-label">
                    <div class="checkbox-text">
                        <p class="checkbox-text--title">Farmácias</p>
                        <p class="checkbox-text--description">Clique para <span class="un">De</span>selecionar!</p>
                    </div>
                    </label>
                </div>
                <div class="col-sm-2"></div>
            </div>

            <div class="row">
                <div class="col-sm-2"></div>
                <div class="col-sm-3">
                    <input type="checkbox" name="check3" id="Perfumarias" class="checkbox-input" />
                    <label for="Perfumarias" class="checkbox-label">
                    <div class="checkbox-text">
                        <p class="checkbox-text--title">Perfumarias</p>
                        <p class="checkbox-text--description">Clique para <span class="un">De</span>selecionar!</p>
                    </div>
                    </label>
                </div>
                <div class="col-sm-2"></div>
                <div class="col-sm-3">
                    <input type="checkbox" name="check4" id="Livrarias" class="checkbox-input" />
                    <label for="Livrarias" class="checkbox-label">
                    <div class="checkbox-text">
                        <p class="checkbox-text--title">Livrarias</p>
                        <p class="checkbox-text--description">Clique para <span class="un">De</span>selecionar!</p>
                    </div>
                    </label>
                </div>
                <div class="col-sm-2"></div>
            </div>


            <div class="row">
                <div class="col-sm-2"></div>
                <div class="col-sm-3">
                    <input type="checkbox" name="check5" id="Utilidades" class="checkbox-input" />
                    <label for="Utilidades" class="checkbox-label">
                    <div class="checkbox-text">
                        <p class="checkbox-text--title">Utilidades</p>
                        <p class="checkbox-text--description">Clique para <span class="un">De</span>selecionar!</p>
                    </div>
                    </label>
                </div>
                <div class="col-sm-2"></div>
                <div class="col-sm-3">
                    <input type="checkbox" name="check6" id="papelarias" class="checkbox-input" />
                    <label for="papelarias" class="checkbox-label">
                    <div class="checkbox-text">
                        <p class="checkbox-text--title">Papelarias</p>
                        <p class="checkbox-text--description">Clique para <span class="un">De</span>selecionar!</p>
                    </div>
                    </label>
                </div>
                <div class="col-sm-2"></div>
            </div>

            <div class="row">
                <div class="col-sm-2"></div>
                <div class="col-sm-3">
                    <input type="checkbox" name="check7" id="Roupas" class="checkbox-input" />
                    <label for="Roupas" class="checkbox-label">
                    <div class="checkbox-text">
                        <p class="checkbox-text--title">Roupas</p>
                        <p class="checkbox-text--description">Clique para <span class="un">De</span>selecionar!</p>
                    </div>
                    </label>
                </div>
                <div class="col-sm-2"></div>
                <div class="col-sm-3">
                    <input type="checkbox" name="check8" id="Bebidas" class="checkbox-input" />
                    <label for="Bebidas" class="checkbox-label">
                    <div class="checkbox-text">
                        <p class="checkbox-text--title">Bebidas</p>
                        <p class="checkbox-text--description">Clique para <span class="un">De</span>selecionar!</p>
                    </div>
                    </label>
                </div>
                <div class="col-sm-2"></div>
            </div>
            
            <input type="hidden" value="<?php if(isset($nome)) echo $nome ?>" name="nome">
            <input type="hidden" value="<?php if(isset($cpf))  echo $cpf ?>" name="cpf">
            <input type="hidden" value="<?php if(isset($email))  echo $email ?>" name="email">
            <input type="hidden" value="<?php if(isset($estado))  echo $estado ?>" name="estado">
            <input type="hidden" value="<?php if(isset($cidade))  echo $cidade ?>" name="cidade">
            <input type="hidden" value="<?php if(isset($bairro))  echo $bairro ?>" name="bairro">
            <input type="hidden" value="<?php if(isset($rua))  echo $rua ?>" name="rua">
            <input type="hidden" value="<?php if(isset($numero))  echo $numero ?>" name="numero">
            <input type="hidden" value="<?php if(isset($data))  echo $data ?>" name="data">
            <input type="hidden" value="<?php if(isset($telefone))  echo $telefone ?>" name="telefone">
            <input type="hidden" value="<?php if(isset($login))  echo $login ?>" name="login">
            <input type="hidden" value="<?php if(isset($senha))  echo $senha ?>" name="senha">

            <div class="row">
                <input type="submit" class="botao mt-5 mx-auto w-50" value="Cadastrar">
            </div>
        </form>

    </div>
</body>

</html>