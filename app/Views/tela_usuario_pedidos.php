<html>
    <head>
        <title>Usuario Lista de Pedidos</title>
        <link rel="stylesheet" href="<?= base_url('css/styles_tabela.css') ?>">
    </head>
    <body>
        <div class="row ">
            <a href="<?= site_url('public/usuario')?>" style="text-decoration: none; ">
                <img src="<?= base_url('images/back.svg')?>">
            </a>
        </div>
        
        <h2>Tela de Pedidos</h2>
        
        
        <div class="container">
      <ul class="responsive-table">
          
          <?php if($pedidos == null) echo "<h2>Nenhum pedido foi realizado</h2>"; else { ?>
        <li class="table-header">
          <div class="col col-1">Imagem</div>
          <div class="col col-6">Nome</div>
          <div class="col col-7">Empresa</div>
          <div class="col col-8">Quantidade</div>
          <div class="col col-9">Status</div>
        </li>
          
            <?php
                $banco_produto = model('Produto');
                $banco_empresa = model('Empresa');
            ?>
          
          
             <?php foreach($pedidos as $pedido): ?>
                <?php $produto = $banco_produto->find($pedido['produto_id']); ?>
                <?php $empresa = $banco_empresa->find($pedido['empresa_id']); ?>

                <li class="table-row">
                    <div class="col col-1" id="centralizar"><img  width="80" height="80" src="<?php echo base_url() . '/public/upload/' .  $produto['arquivo'] ?>"></div>
                  <div class="col col-2" id="centralizar"><h2><?= $produto['nome'] ?></h2></div>
                  <div class="col col-3" id="centralizar"><h2><?= $empresa['nome_fantasia'] ?></h2></div>
                    <div class="col col-4" id="centralizar"><h2><?= $pedido['quantidade'] ?></h2></div>
                    <div class="col col-5" id="centralizar"><h2><?= $pedido['status'] ?></h2></div>
                </li>
           <?php endforeach; ?>
          <?php } ?>
      </ul>
    </div>
        
        
        
        
        
        
        
    </body>

</html>