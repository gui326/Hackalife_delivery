<!doctype html>
<html lang="en">

<head>
    <title>Empresas Cadastradas</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    
    <link rel="stylesheet" href="<?= base_url('css/styles_telas.css') ?>">
</head>

<body>
    <div id="navOcult" class="container-fluid">
        <nav class="navbar navbar-expand-md navbar-fixed-top  navbar-light border " collapse id="nav" style="background-color: rgb(255, 255, 255) !important; box-shadow: 0px 0px 0px transparent;">

            <a class="navbar-brand mx-auto" href="#">
                <img src="<?= base_url('images/logo.png') ?>" alt="logo" style="width:90px;">
            </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
              </button>
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav">

                    <li class="nav-item">
                        <a class=" mx-auto itemNav" href="<?= site_url('usuario') ?>"><i class="fas fa-home fa-lg mb-3 icone"></i><span class="ml-2" style="color: black;">Home</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="botao_nav mx-auto itemNav" href="<?= site_url('usuario/carrinho') ?>"><i class="fas fa-shopping-cart fa-lg mb-3 icone" ></i><span class="ml-2" style="color: black;">Carrinho</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="botao_nav mx-auto itemNav" href="<?= site_url('usuario/pedidos') ?>"><i class="fas fa-file-signature fa-lg mb-3 icone" ></i><span class="ml-2" style="color: black;">Pedidos</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="botao_nav mx-auto itemNav" href="../Login/index.html"><i class="fas fa-user-alt fa-lg mb-3 text-dark" ></i><span class="ml-2" style="color: black;"><?= $_SESSION['nome'] ?></span></a>
                    </li>
                    <li class="nav-item">
                        <a class="botao_nav mx-auto itemNav" href="<?= site_url('l/deslogar_usuario') ?>"><i class="fas fa-sign-out-alt fa-lg icone" ></i><span class="ml-2" style="color: black;">Sair do perfil</span></a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>



    <div class="container d-md-flex  mt-2">
        <!-- Page Content  -->
        <div id="content" class="cont-mr">

            <!--logo da alldevi-->

            <h1 class="border border-top-0 border-left-0 border-right-0 text-align-center ">Empresas Cadastradas</h1>

            <div class="d-flex justify-itens-center mt-5 w-100">
                <form action="<?= site_url('public/produto/buscar') ?>" method="post" class="pr-3 w-100" style="box-shadow: 0px 0px 0px 0px rgb(255, 255, 255); border: 0px solid rgb(255, 255, 255);">
                    <select name="segmento" class="p-2 w-100">
                          <option value="<?= set_value('segmento');?>">Escolha um empresa</option>
                          <option value="restaurante">Restaurante</option>
                          <option value="farmacia">Farmácia</option>
                          <option value="perfumaria">Perfumaria</option>
                          <option value="livraria">Livraria</option>
                          <option value="utilidades">Utilidades</option>
                          <option value="papelaria">Papelaria</option>
                          <option value="roupa">Roupa</option>
                          <option value="bebidas">Bebidas</option>
                          <option value="outros">Outros</option>
                      </select>
                    <div class="d-flex justify-content-center">
                        <input type="submit" class="mt-4 botao align-content-center btn-block w-50">
                    </div>

                    <!--Tabela-->
                    <div class="container mt-4">
                        <ul class="list-group">
                            <script>
                                function executaAcao(id) {
                                    window.location = "<?= site_url("public/produto/listar/") ?>" + id;
                                }
                            </script>
                            
                            <?php if($dados == null) echo "<h2>Ainda não temos nenhuma empresa cadastrada desse ramo.</h2>"; else { ?>
                                
                            <?php foreach($dados as $dado): ?>
                                <li class="list-group-item border rounded mb-3" onclick="executaAcao('<?= $dado['cnpj'] ?>')">
                                    <img src="<?php echo base_url() . '/public/upload/' .  $dado['arquivo'] ?>" class="float-left img-fluid d-block" height="100px" width="100px">
                                    <div class="float-left ml-2" id="centralizar" height="100px" width="100px"><?php echo $dado['nome_fantasia'] ?></div>
                                </li>
                            <?php endforeach; ?>
                            <?php } ?>

                        </ul>
                   </div>     
                </form>
                
            </div>
        </div>

        <nav id="sidebar" class="nav-mr">
            <div class="pl-5 position-fixed mx-auto">

                <div class="d-flex justify-content-left">
                    <a href="#"><img src="<?= base_url('images/logo.png') ?>" style="height: 140px; width: 160px;"></a>
                </div>

                <!--HOME-->
                <div class="d-flex mb-3 mt-3 text-dark justify-content-left w-100 border border-right-0 border-left-0 border-top-0 ex">
                    <a href="<?= site_url('usuario') ?>"><i class="fas fa-home fa-lg mb-3 icone"></i><span class="ml-2" style="color: black;">Home</span></a>
                </div>

                <!--CARRINHO SIDEBAR-->
                <div class="d-flex mb-3 mt-3 text-dark justify-content-left w-100 border border-top-0 border-left-0 border-right-0 ex">
                    <a href="<?= site_url('usuario/carrinho') ?>"><i class="fas fa-shopping-cart fa-lg mb-3 icone" ></i><span class="ml-2" style="color: black;">Carrinho</span></a>
                </div>

                <!--PEDIDOS-->
                <div class="d-flex mb-3 mt-3 text-dark justify-content-left w-100 border border-top-0 border-left-0 border-right-0 ex">
                    <a href="<?= site_url('usuario/pedidos') ?>"><i class="fas fa-file-signature fa-lg mb-3 icone" ></i><span class="ml-2" style="color: black;">Pedidos</span></a>
                </div>

                <!--NOME DO USUÁRIO-->
                <div class="d-flex mb-3  text-dark justify-content-left w-100 border border-right-0 border-left-0 border-top-0 ex">
                    <a href="#"><i class="fas fa-user-alt fa-lg mb-3 text-dark" ></i><span class="ml-2" style="color: black;"><?= $_SESSION['nome'] ?></span></a>
                </div>

                <!--Sair-->
                <div class="d-flex mt-3 mb-3 text-dark justify-content-left w-100 border border-right-0 border-left-0 border-top-0 ex">
                    <label class="mb-3">
                        <a href="<?= site_url('l/deslogar_usuario') ?>"><i class="fas fa-sign-out-alt fa-lg icone" ></i><span class="ml-2" style="color: black;">Sair do perfil</span></a>
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