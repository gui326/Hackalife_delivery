<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de produtos</title>

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


    <div class="container d-md-flex  mt-2">

        <div id="content">
            <form action="<?= site_url('public/produto/atualizar') ?>" method="post" enctype="multipart/form-data" style="box-shadow: none !important; border: 1px solid rgb(0, 0, 0);" class="p-lg-5 mx-auto mt-5 w-100">

                <div class="row">
                    <div class="col-sm-12">
                        <h3 style="color: rgb(143, 142, 142);" class="font-weight-bold p-3 ">Altere as características do produto como desejar.</h3>
                        <h6 style="color: rgb(139, 138, 138);" class="font-weight-bold p-3">Siga as instruções abaixo para a melhor realização do processo.</h6>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-12">
                        <h3 style="color: rgb(46, 46, 46);" class="font-weight-bold p-3 ">Produto:</h3>
                    </div>
                </div>

                <div class="border border-top-0 border-left-0 border-right-0 text-align-center ">
                    <!--tabela para os pedidos-->
                    <div class="table-responsive-md">
                        <table class="table table-striped table-hover">

                            <!--Cabeça da tabela-->
                            <thead>
                                <tr>
                                    <th>Imagem</th>
                                    <th>Tipo</th>
                                    <th>Nome</th>
                                    <th>Preço</th>
                                </tr>
                            </thead>

                            <!--Corpo da tabela-->
                            <tbody>
                                <tr>
                                    <!--Imagem-->
                                    <td>
                                        <img src="<?php echo base_url() . '/public/upload/' .  $arquivo ?>" alt="#" class="d-block img-fluid p-0 m-0" height="100px" width="100px">
                                    </td>
                                    <!--Tipo-->
                                    <td>
                                        <?= $nome ?>
                                    </td>
                                    <!--Nome-->
                                    <td>
                                        <?= $descricao ?>
                                    </td>
                                    <!--Preço-->
                                    <td>
                                        R$ <?= $valor ?>
                                    </td>
                                </tr>

                            </tbody>
                        </table>
                    </div>


                </div>


                <div class="row">

                    <h2 style="color: rgb(70, 70, 70); border-bottom: none !important;" class="mx-auto my-5 font-weight-bold p-3">Alteração do produto</h2>

                </div>

                <div class="row">
                    <div class="col-sm-6">
                        <label class="my-2 font-weight-bold w-100">
                                    Nome
                                    <input type="text" name="nome" class="mb-2 p-2 w-100" value="<?= $nome ?>" placeholder="Insira o nome do produto" autofocus>
                            </label>
                    </div>

                    <div class="col-sm-6">
                        <label class="my-2 font-weight-bold w-100">
                                    Descrição
                                    <input type="text" name="descricao" value="<?= $descricao ?>" class="mb-2 p-2 w-100" placeholder="Insira mais informações sobre o produto">
                            </label>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-6">
                        <label class="my-2 font-weight-bold w-100">
                                Arquivo
                                <span class="d-block font-weight-normal text-danger">*Insira a imagem do produto que vai aparecer para os usuários</span>
                                <input type="file" class="mb-2 p-2 w-100 arquivo" style="background-image: radial-gradient(#cccccc, #6d6d6d) !important; color: black !important;" multiple>
                            </label>
                    </div>

                    <div class="col-sm-6">
                        <label class="my-2 font-weight-bold w-100" style="margin-top: 35px !important;">
                                Valor do produto ( R$ )
                                <input type="text" name="valor" value="<?= $valor ?>" class="mb-2 p-2 " placeholder="Insira o preço do produto ( R$ )">
                            </label>
                    </div>
                </div>

                <div class="d-flex">
                    <input style="box-shadow: none !important; color: rgb(65, 65, 65); border-color: gray; width: 35% !important; justify-content: right;" type="submit" class="botao mt-5 mx-auto w-50" value="Confirmar">
                </div>

                <input type="hidden" name="id" value="<?= $id ?>">
                
            </form>
        </div>

        <nav id="sidebar">
            <div class="pl-5 py-3 position-fixed mx-auto">

                <div class="d-flex justify-content-left">
                    <a href="#"><img src="<?= base_url('images/logo.png') ?>" style="height: 140px; width: 160px;"></a>
                </div>

                <!--HOME-->
                <div class="d-flex mb-3 mt-4 text-dark justify-content-left w-100 border border-right-0 border-left-0 border-top-0 ex">
                    <a href="<?= site_url('public/empresa') ?>"><i class="fas fa-home fa-lg mb-3 icone"></i><span class="ml-2" style="color: black;">Home</span></a>
                </div>

                <!--NOME DO USUÁRIO-->
                <div class="d-flex mb-3  text-dark justify-content-left w-100 border border-right-0 border-left-0 border-top-0 ex">
                    <a href="#"><i class="fas fa-user-alt fa-lg mb-3 icone" ></i><span class="ml-2" style="color: black;"><?= $_SESSION['nome_fantasia'] ?></span></a>
                </div>

                <!--CADASTRAR PRODUTO-->
                <div class="d-flex mb-3 mt-3 text-dark justify-content-left w-100 border border-top-0 border-left-0 border-right-0 ex">
                    <a href="<?= site_url('public/empresa/mostrar') ?>"><i class="fas fa-file-archive fa-lg mb-3 icone" ></i><span class="ml-2" style="color: black;">Cadastrar Produtos</span></a>
                </div>

                <!--pedidos-->
                <div class="d-flex mb-3 mt-3 text-dark justify-content-left w-100 border border-top-0 border-left-0 border-right-0 ex">
                    <a href="<?= site_url('public/empresa/pedidos') ?>"><i class="fas fa-file-signature fa-lg mb-3 icone" ></i><span class="ml-2" style="color: black;">Pedidos</span></a>
                </div>

                <!--configurações-->
                <div class="d-flex mt-3 text-dark justify-content-left w-100 border border-right-0 border-left-0 border-top-0 ex">
                    <label class="mb-3">
              <a href="#"><i class="fas fa-cogs fa-lg icone" ></i><span class="ml-2" style="color: black;">Configurações do perfil</span></a>
            </label>
                </div>


                <!--Sair-->
                <div class="d-flex mt-3 mb-3 text-dark justify-content-left w-100 border border-right-0 border-left-0 border-top-0 ex">
                    <label class="mb-3">
              <a href="#"><i class="fas fa-sign-out-alt fa-lg icone" ></i><span class="ml-2" style="color: black;">Sair do perfil</span></a>
            </label>
                </div>

                <!--social medias-->
                <div class="d-flex mt-3 mb-3 text-dark align-items-end justify-content-center w-100 d-inline">
                    <label class="mb-3">
                      <a href="#"><i class="fab fa-facebook-f fa-lg m-3 facebook"></i></i></a>
                      <a href="#"><i class="fab fa-instagram fa-lg m-3 insta"></i></a>
                      <a href="#"><i class="fab fa-twitter fa-lg m-3 twitter"></i></i></a>
                    </label>
                </div>
            </div>
        </nav>
    </div>

    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>