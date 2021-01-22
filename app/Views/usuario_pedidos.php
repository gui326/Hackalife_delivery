<!doctype html>
<html lang="en">

<head>
    <title>Pedidos</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    
    <link rel="stylesheet" href="<?= base_url('css/styles_telas.css') ?>">
</head>

<body>


    <div class="container-fluid d-md-flex  mt-2">
        <!-- Page Content  -->
        <div id="content">

            <!--logo da alldevi-->

            <h1 class="border border-top-0 border-left-0 border-right-0 text-align-center ">Pedidos</h1>

            <div class="border border-top-0 border-left-0 border-right-0 text-align-center ">
                <!--tabela para os pedidos-->
                <div class="table-responsive-md">
                    <table class="table table-striped table-hover">
                        <?php if($pedidos == null) echo "<h2>Nenhum pedido foi realizado</h2>"; else { ?>
                        <thead class="">
                            <tr>
                                <th>Imagem</th>
                                <th>Nome</th>
                                <th>Empresa</th>
                                <th>Quantidade</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                             <?php
                                    $banco_produto = model('Produto');
                                    $banco_empresa = model('Empresa');
                            ?>
          
          
                        <?php foreach($pedidos as $pedido): ?>
                        <?php $produto = $banco_produto->find($pedido['produto_id']); ?>
                        <?php $empresa = $banco_empresa->find($pedido['empresa_id']); ?>
                            <tr>
                                <!--Imagem-->
                                <td>
                                    <img src="<?php echo base_url() . '/public/upload/' .  $produto['arquivo'] ?>" alt="#" class="d-block img-fluid p-0 m-0" height="100px" width="100px">
                                </td>
                                <!--Nome-->
                                <td>
                                    <?= $produto['nome'] ?>
                                </td>
                                <!--Empresa-->
                                <td>
                                    <?= $empresa['nome_fantasia'] ?>
                                </td>
                                <!--Quantidade-->
                                <td>
                                    <?= $pedido['quantidade'] ?>
                                </td>
                                <!--Pendente-->
                                <td>
                                    <?= $pedido['status'] ?>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                        <?php } ?>
                            
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <nav id="sidebar">
            <div class="pl-5 py-3 position-fixed mx-auto">

                <div class="d-flex justify-content-left">
                    <a href="#"><img src="<?= base_url('images/logo.png') ?>" style="height: 140px; width: 160px;"></a>
                </div>

                <!--HOME-->
                <div class="d-flex mb-3 mt-4 text-dark justify-content-left w-100 border border-right-0 border-left-0 border-top-0 ex">
                    <a href="<?= site_url('public/usuario') ?>"><i class="fas fa-home fa-lg mb-3 icone"></i><span class="ml-2" style="color: black;">Home</span></a>
                </div>

                

                <!--CARRINHO SIDEBAR-->
                <div class="d-flex mb-3 mt-3 text-dark justify-content-left w-100 border border-top-0 border-left-0 border-right-0 ex">
                    <a href="<?= site_url('public/usuario/carrinho') ?>"><i class="fas fa-shopping-cart fa-lg mb-3 icone" ></i><span class="ml-2" style="color: black;">Carrinho</span></a>
                </div>

                <!--pedidos-->
                <div class="d-flex mb-3 mt-3 text-dark justify-content-left w-100 border border-top-0 border-left-0 border-right-0 ex">
                    <a href="<?= site_url('public/usuario/pedidos') ?>"><i class="fas fa-file-signature fa-lg mb-3 icone" ></i><span class="ml-2" style="color: black;">Pedidos</span></a>
                </div>

                <!--NOME DO USUÁRIO-->
                <div class="d-flex mb-3  text-dark justify-content-left w-100 border border-right-0 border-left-0 border-top-0 ex">
                    <a href="#"><i class="fas fa-user-alt fa-lg mb-3 icone" ></i><span class="ml-2" style="color: black;"><?= $_SESSION['nome'] ?></span></a>
                </div>


                <!--Sair-->
                <div class="d-flex mt-3 mb-3 text-dark justify-content-left w-100 border border-right-0 border-left-0 border-top-0 ex">
                    <label class="mb-3">
              <a href="<?= site_url('public/l/deslogar_usuario') ?>"><i class="fas fa-sign-out-alt fa-lg icone" ></i><span class="ml-2" style="color: black;">Sair do perfil</span></a>
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