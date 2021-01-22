<html>
    <head>
        <title>Empresa Listagem de Produto</title>
        <link rel="stylesheet" href="<?= base_url('css/styles_tabela.css') ?>">
    </head>
    <body>
        <div class="row ">
            <a href="<?= site_url('public/empresa')?>" style="text-decoration: none; ">
                <img src="<?= base_url('images/back.svg')?>">
            </a>
        </div>
        
        <h2>tela de listagem de produto da empresa</h2>
        
        
        
        <div class="container">
      <ul class="responsive-table">
          
          
            <?php if($produtos == null) echo "<h2>Nenhum produto cadastrado</h2>"; else { foreach($produtos as $produto): ?>

                <li class="table-row">
                  <div class="col col-1"><img width="100" height="100" src="<?php echo base_url() . '/public/upload/' .  $produto['arquivo'] ?>"></div>
                  <div class="col col-2" id="centralizar"><h2><?php echo $produto['nome'] ?></h2></div>
                    <div class="col col-2" id="centralizar"><h2><?php echo $produto['descricao'] ?></h2></div>
                    <div class="col col-2" id="centralizar"><h2>R$ <?php echo $produto['valor'] ?></h2></div>
                    <div class="col col-2" id="centralizar"><h2><?php echo $produto['quantidade_comprada'] ?></h2></div>
                    <div class="col col-2" id="centralizar"><a href="<?= site_url('public/produto/mostrar/'.$produto['id']) ?>"><img width="40" height="40" src="<?= base_url('images/atualizar.png') ?>"></a></div>
                    <div class="col col-2" id="centralizar"><a href="<?= site_url('public/produto/deletar/'.$produto['id']) ?>"><img width="40" height="40" src="<?= base_url('images/excluir.png') ?>"></a></div>
                </li>
           <?php endforeach; ?>
          <?php } ?>
      </ul>
    </div>
        
        
        
        
        
        
        
        
    </body>

</html>