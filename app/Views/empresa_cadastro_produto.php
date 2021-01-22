<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de produtos</title>
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">

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
    
    <div id="navOcult" class="container-fluid">
        <nav class="navbar navbar-expand-md navbar-fixed-top navbar-light border" collapse id="nav" style="border:none ; box-shadow: none;">

            <a class="navbar-brand mx-auto" href="#">
                <img src="<?= base_url('images/logo.png') ?>" alt="logo" style="width:90px;">
            </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
              </button>
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav">

                    <li class="nav-item ">
                        <a href="<?= site_url('public/empresa') ?>" class=" mx-auto itemNav" ><i class="fas fa-home fa-lg mb-3 icone"></i><span class="ml-3" style="color: black;">Home</span></a>
                    </li>
                    
                    <li class="nav-item">
                        <a class="botao_nav mx-auto itemNav" href="<?= site_url('public/empresa/mostrar') ?>"><i class="fas fa-file-archive fa-lg mb-3 icone" ></i><span class="ml-2" style="color: black;">Cadastrar Produtos</span></a>
                    </li>

                    <li class="nav-item ">
                        <a href="<?= site_url('public/empresa/pedidos') ?>" class=" mx-auto itemNav" ><i class="fas fa-file-signature fa-lg mb-3 icone" ></i><span class="ml-2" style="color: black;">Pedidos</span></a>
                    </li>

                    <li class="nav-item">
                        <a href="#" class=" mx-auto itemNav" ><i class="fas fa-user-alt fa-lg mb-3 text-dark" ></i><span class="ml-3" style="color: black;"><?= $_SESSION['nome_fantasia'] ?></span></a>
                    </li>

                    <li class="nav-item">
                        <a class="botao_nav mx-auto itemNav" href="<?= site_url('public/l/deslogar_empresa') ?>"><i class="fas fa-sign-out-alt fa-lg icone" ></i><span class="ml-3" style="color: black;">Sair do perfil</span></a>
                    </li>

                    
                </ul>
            </div>
        </nav>
    </div>

   <div class="container d-md-flex ">

        <div id="content">
            <form action="<?= site_url('public/empresa/inserir') ?>" method="post" enctype="multipart/form-data"  >

                <div class="row">
                    <div class="col-sm-12">
                        <h3 style="color: rgb(143, 142, 142);" class="font-weight-bold">Chegou o momento de cadastrarmos seus produtos!!!</h3>
                        <h6 style="color: rgb(139, 138, 138);" class="font-weight-bold">Siga as instruções abaixo para a melhor realização do processo.</h6>
                    </div>
                </div>


                <div class="row">

                    <h2 style="color: rgb(70, 70, 70); border-bottom: none !important;" class="font-weight-bold p-3">Cadastro do produto</h2>

                </div>

                <div class="row">
                    <div class="col-sm-6">
                        <label class="my-2 font-weight-bold w-100">
                                    Nome
                                    <input type="text" name="nome" class="mb-2 p-2 w-100" placeholder="Insira o nome do produto" autofocus>
                            <span id="corvermelha"><?php if(isset($validation)) echo $validation->getError('nome'); ?><br></span>
                            </label>
                    </div>

                    <div class="col-sm-6">
                        <label class="my-2 font-weight-bold w-100">
                                    Descrição
                                    <input type="text" name="descricao" class="mb-2 p-2 w-100" placeholder="Insira mais informações sobre o produto">
                            <span id="corvermelha"><?php if(isset($validation)) echo $validation->getError('descricao'); ?><br></span>
                            </label>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-6">
                        <label class="my-2 font-weight-bold w-100">
                                Arquivo
                                <span class="d-block font-weight-normal text-danger">*Insira a imagem do produto que vai aparecer para os usuários</span>
                                <input type="file" name="arquivo" class="mb-2 p-2 w-100 arquivo" style="background-image: radial-gradient(#cccccc, #6d6d6d) !important; color: black !important;" multiple>
                            <span id="corvermelha"><?php if(isset($validation)) echo $validation->getError('arquivo'); ?><br></span>
                            </label>
                    </div>

                    <div class="col-sm-6">
                        <label class="my-2 font-weight-bold w-100" style="margin-top: 35px !important;">
                                Valor do produto ( R$ )
                                <input type="text" name="valor" class="mb-2 p-2 " placeholder="Insira o preço do produto ( R$ )">
                            <span id="corvermelha"><?php if(isset($validation)) echo $validation->getError('valor'); ?><br></span>
                            </label>
                    </div>
                </div>

                <div class="d-flex justify-content-center flex-column">
                    <input style="box-shadow: none !important; color: rgb(65, 65, 65); border-color: gray;" type="submit" class="botao mt-5 mx-auto w-50" value="Cadastrar">
                </div>

            </form>
        </div>

        <nav id="sidebar" class="nav-mr">
            <div class="pl-5 py-3 position-fixed mx-auto">

                <div class="d-flex justify-content-left">
                    <a href="#"><img src="<?= base_url('images/logo.png') ?>" style="height: 140px; width: 160px;"></a>
                </div>

                <!--HOME-->
                <div class="d-flex mb-3 mt-4 text-dark justify-content-left w-100 border border-right-0 border-left-0 border-top-0 ex">
                    <a href="<?= site_url('public/empresa') ?>"><i class="fas fa-home fa-lg mb-3 icone"></i><span class="ml-2" style="color: black;">Home</span></a>
                </div>
                
                <!--CADASTRAR PRODUTO-->
                <div class="d-flex mb-3 mt-3 text-dark justify-content-left w-100 border border-top-0 border-left-0 border-right-0 ex">
                    <a href="<?= site_url('public/empresa/mostrar') ?>"><i class="fas fa-file-archive fa-lg mb-3 icone" ></i><span class="ml-2" style="color: black;">Cadastrar Produtos</span></a>
                </div>

                <!--PEDIDOS-->
                <div class="d-flex mb-3 mt-3 text-dark justify-content-left w-100 border border-top-0 border-left-0 border-right-0 ex">
                    <a href="<?= site_url('public/empresa/pedidos') ?>"><i class="fas fa-file-signature fa-lg mb-3 icone" ></i><span class="ml-2" style="color: black;">Pedidos</span></a>
                </div>

                 <!--NOME DO USUÁRIO-->
                 <div class="d-flex mb-3  text-dark justify-content-left w-100 border border-right-0 border-left-0 border-top-0 ex">
                    <a href="#"><i class="fas fa-user-alt fa-lg mb-3 icone text-dark" ></i><span class="ml-2" style="color: black;"><?= $_SESSION['nome_fantasia'] ?></span></a>
                </div>


                <!--Sair-->
                <div class="d-flex mt-3 mb-3 text-dark justify-content-left w-100 border border-right-0 border-left-0 border-top-0 ex">
                    <label class="mb-3">
                    <a href="<?= site_url('public/l/deslogar_empresa') ?>"><i class="fas fa-sign-out-alt fa-lg icone" ></i><span class="ml-2" style="color: black;">Sair do perfil</span></a>
                    </label>
                </div>

                <!--social medias-->
                <div class="d-flex mt-3 mb-3 text-dark align-items-end justify-content-center w-100 d-inline">
                    <label class="mb-3">
                        <a href="#"><i class="fab fa-facebook-f fa-lg m-3 facebook"></i></a>
                        <a href="#"><i class="fab fa-instagram fa-lg m-3 insta"></i></a>
                        <a href="#"><i class="fab fa-twitter fa-lg m-3 twitter"></i></a>
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