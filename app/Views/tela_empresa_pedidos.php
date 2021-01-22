<html>
    <head>
        <title>Empresa Lista de Pedidos</title>
        <link rel="stylesheet" href="<?= base_url('css/styles_tabela.css') ?>">
    </head>
    <body>
        <div class="row ">
            <a href="<?= site_url('public/empresa')?>" style="text-decoration: none; ">
                <img src="<?= base_url('images/back.svg')?>">
            </a>
        </div>
        
        <h2>Tela de Pedidos da Empresa</h2>

        
        <div class="container">
      <ul class="responsive-table">
            <?php
                $banco_produto = model('Produto');
                $banco_cliente = model('Cliente');
                $banco_ed_cliente = model('Endereco_cliente');
            ?>
          
          <?php if($pedidos == null) echo "<h2>Nenhum pedido foi solicitado</h2>"; else { ?>
    
            <li class="table-header">
              <div class="col col-1">Imagem</div>
              <div class="col col-6">Nome</div>
              <div class="col col-7">CPF</div>
              <div class="col col-8">Cidade</div>
              <div class="col col-9">Endereço</div>
              <div class="col col-9">Quantidade</div>
              <div class="col col-9">Status</div>
              <div class="col col-9">Aprovar</div>
              <div class="col col-9">Recusar</div>
             </li>
          
          
            <?php foreach($pedidos as $pedido): ?>
                <?php $produto = $banco_produto->find($pedido['produto_id']); ?>
                <?php $cliente = $banco_cliente->find($pedido['cliente_id']); ?>
                <?php $endereco = $banco_ed_cliente->find($pedido['cliente_id']); ?>
            
                <li class="table-row">
                    <div class="col col-1" data-label="Job Id"><img  width="80" height="80" src="<?php echo base_url() . '/public/upload/' .  $produto['arquivo'] ?>">
                        </div>
                  <div class="col col-1" id="centralizar"><h2><?= $produto['nome'] ?></h2></div>
                  <div class="col col-1" id="centralizar"><h2><?= $cliente['cpf'] ?></h2></div>
                    <div class="col col-2" id="centralizar"><h2><?= $endereco['cidade'] ?></h2></div>
                    <div class="col col-2" id="centralizar"><h2><?= $endereco['rua'] ?>,<?= $endereco['numero'] ?></h2></div>
                    <div class="col col-2" id="centralizar"><h2><?= $pedido['quantidade'] ?></h2></div>
                    <div class="col col-3" id="centralizar"><h2><?= $pedido['status'] ?></h2></div>
                    <?php if($pedido['status'] == 'pendente'){ ?>
                    <div class="col col-3" id="centralizar"><h2><?= anchor("public/empresa/confirmar/$pedido[id]", 'Confirmar') ?></h2></div>
                    <div class="col col-3" id="centralizar"><h2><?= anchor("public/empresa/cancelar/$pedido[id]", 'Cancelar') ?></h2></div>
                    <?php } ?>
                </li>
           <?php endforeach; ?>
          <?php } ?>
      </ul>
    </div>
        
        
        
        
        
        
        
        
    </body>

</html>