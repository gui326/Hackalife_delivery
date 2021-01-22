<!DOCTYPE html>
<html lang="en">

<head>
    <title>Home Empresa</title>
   <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

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

            <h1 class="border border-top-0 border-left-0 border-right-0 text-align-center ">Seja Bem Vindo: <?= $_SESSION['nome_fantasia'] ?></h1>

            <div class="m-3">
                <span class="font-weight-bold p-3">Seus produtos cadastrados:</span>
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
                                <th>Quantidade_C</th>
                                <th>Alterar</th>
                                <th>Excluir</th>
                            </tr>
                        </thead>

                        <!--Corpo da tabela-->
                        <tbody>
                            <?php if($produtos == null) echo "<h2>Nenhum produto cadastrado</h2>"; else { foreach($produtos as $produto): ?>
                            <tr>
                                <!--Imagem-->
                                <td>
                                    <img src="<?php echo base_url() . '/public/upload/' .  $produto['arquivo'] ?>" alt="#" class="d-block img-fluid p-0 m-0" height="100px" width="100px">
                                </td>
                                <!--Tipo-->
                                <td>
                                    <?php echo $produto['nome'] ?>
                                </td>
                                <!--Nome-->
                                <td>
                                    <?php echo $produto['descricao'] ?>
                                </td>
                                <!--Preço-->
                                <td>
                                    R$ <?php echo $produto['valor'] ?>
                                </td>
                                <td>
                                    <?php echo $produto['quantidade_comprada'] ?>
                                </td>
                                <td>
                                    <a href="<?= site_url('public/produto/mostrar/'.$produto['id']) ?>"><i class="fas fa-undo-alt fa-2x alterar"></i><span class="ml-2" style="color: black;"></span></a>
                                </td>
                                <td>
                                    <a href="<?= site_url('public/produto/deletar/'.$produto['id']) ?>"><i class="fas fa-times-circle fa-2x  excluir"></i><span class="ml-2" style="color: black;"></span></a>
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