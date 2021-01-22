<!DOCTYPE html>
<html lang="en">

<head>
    <title>Carrinho</title>
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

            <h1 class="border border-top-0 border-left-0 border-right-0 text-align-center ">Carrinho</h1>

            <div class="border border-top-0 border-left-0 border-right-0 text-align-center ">
                <!--tabela para os pedidos-->
                <div class="table-responsive-md">
                    <table class="table table-striped table-hover">
                        <?php $total = 0; ?>
                        <?php if($produtos == null) echo "<h2>Carrinho vazio</h2>"; else { ?>
                        <!--Cabeça da tabela-->
                        <thead>
                            <tr>
                                <th>Imagem</th>
                                <th>Nome</th>
                                <th>Valor</th>
                                <th>Quantidade</th>
                                <th>Valor total</th>
                                <th>Alterar</th>
                                <th>Excluir</th>
                            </tr>
                        </thead>

                        <!--Corpo da tabela-->
                        <tbody>
                            <?php foreach($produtos as $produto): ?>
                            <?php 
                                $banco = model('Produto');

                                $dado = $banco->where('id', $produto['produto_id'])->find();
                            ?>

                            <?php (double)$total = (double)$total + (double)$produto['valor_total']; ?>
                            <tr>
                                <!--Imagem-->
                                <td>
                                    <img src="<?php echo base_url() . '/public/upload/' .  $dado[0]['arquivo'] ?>" alt="#" class="d-block img-fluid p-0 m-0" height="100px" width="100px">
                                </td>
                                <!--Nome-->
                                <td>
                                    <?php echo $dado[0]['nome'] ?>
                                </td>
                                <!--Valor-->
                                <td>
                                    R$ <?= $dado[0]['valor'] ?>
                                </td>
                                <!--Quantidade-->
                                <td>
                                    <?= $produto['quantidade'] ?>
                                </td>
                                <!--Valor total-->
                                <td>
                                    R$ <?= $produto['valor_total'] ?>
                                </td>
                                <!--Alterar-->
                                <td>
                                    <a href="<?= site_url('public/carrinho/mostrar/'.$produto['id']) ?>"><i class="fas fa-undo-alt fa-2x voltar"></i></a>
                                </td>
                                <!--Pendente-->
                                <td>
                                    <a href="<?= site_url('public/carrinho/excluir/'.$produto['id']) ?>"><i class="fas fa-times-circle fa-2x excluir"></i></a>
                                </td>
                            </tr>

                           <?php endforeach; ?>
                        </tbody>

                        <!--Footer da tabela com a soma total-->
                        <tfoot>
                            <tr>
                                <td colspan="4" class=" font-weight-bold " style="font-size:2rem">Soma total</td>
                                <td colspan="4" class=" font-weight-bold " style="font-size:2rem">R$ <?= $total ?></td>
                            </tr>
                        </tfoot>
                        <?php } ?>
                        
                        
                    </table>
                </div>


                <!--formulário-->
                <div class="d-flex justify-content-center mt-5">
                    <h2 class="border border-top-0 border-left-0 border-right-0">Formulário</h2>
                </div>
                <div class="row">
                    <form action="<?= site_url('public/usuario/finalizar') ?>" method="post" class="p-5 mx-auto mt-5" style="box-shadow:0px 0px 0px 0px transparent; border: 1px solid black;">
                        
                        <?php
                            $x = 0;
                            foreach($produtos as $produto):
                            $x = $x + 1;
                            echo "<input type='hidden' value='$produto[id]' name='id$x'>";
                            echo "<input type='hidden' value='$produto[quantidade]' name='qt$x'>";
                            endforeach;
                        ?>

                        <div class="row">
                            <div class="col-sm-6">
                                <p><b class="text-danger">**Agora, precisamos que você verifique o endereço e selecione a forma de pagamento</b></p>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-6">
                                <label class="font-weight-bold w-100">Endereço: 
                                <span class="d-block font-weight-normal"><?= $rua ?>, <?= $numero ?></span>
                              </label>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-6">
                                <label class="font-weight-bold w-100">
                                          Selecione o tipo de pagamento
                                          <select name="" class="mb-2 p-2 w-100">
                                            <option value="" disabled hidden>Qual a forma de pagamento</option>
                                            <option>Dinheiro</option>
                                            <option>Maquininha Cartão de Crédito</option>
                                            <option>Maquininha Cartão de Débito</option>
                                        </select>
                                  </label>
                                <input type="submit" value="enviar" class="botao">
                            </div>
                        </div>
                        
                        <input type="hidden" value="<?= $x ?>" name="quantidade" >
                        <input type="hidden" value="<?= $total ?>" name="total" >
                        
                    </form>
                    
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