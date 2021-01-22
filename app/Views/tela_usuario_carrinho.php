<html>
    <head>
        <title>Usuario Carrinho</title>
        <link rel="stylesheet" href="<?= base_url('css/styles_tabela.css') ?>">
    </head>
    <body>
        <div class="row ">
            <a href="<?= site_url('public/usuario')?>" style="text-decoration: none; ">
                <img src="<?= base_url('images/back.svg')?>">
            </a>
        </div>
        <h2>Tela de Carrinho</h2>
        

        
    <div class="container">
      <ul class="responsive-table">
          
          
            <?php $total = 0; ?>
            <?php if($produtos == null) echo "<h2>Carrinho vazio</h2>"; else { ?>
    
            <li class="table-header">
              <div class="col col-1">Imagem</div>
              <div class="col col-6">Nome</div>
              <div class="col col-7">Valor</div>
              <div class="col col-8">Quantidade</div>
              <div class="col col-9">Valor Total</div>
              <div class="col col-9">Alterar</div>
              <div class="col col-9">Excluir</div>
             </li>
    
    
    
            <?php foreach($produtos as $produto): ?>
            <?php 
                $banco = model('Produto');

                $dado = $banco->where('id', $produto['produto_id'])->find();
            ?>

                <?php (double)$total = (double)$total + (double)$produto['valor_total']; ?>

                <li class="table-row">
                    <div class="col col-2" data-label="Customer Name"><img width="80" height="80" src="<?php echo base_url() . '/public/upload/' .  $dado[0]['arquivo'] ?>"></div>
                  <div class="col col-1" id="centralizar" data-label="Job Id"><h2><?php echo $dado[0]['nome'] ?></h2></div>
                  
                    <div class="col col-2" id="centralizar"><h2>R$ <?= $dado[0]['valor'] ?></h2></div>
                    <div class="col col-2" id="centralizar"><h2><?= $produto['quantidade'] ?></h2></div>
                    <div class="col col-2" id="centralizar"><h2>R$ <?= $produto['valor_total'] ?></h2></div>
                    <div class="col col-2" id="centralizar"><a href="<?= site_url('public/carrinho/mostrar/'.$produto['id']) ?>"><img width="40" height="40" src="<?= base_url('images/atualizar.png') ?>"></a></div>
                    <div class="col col-5" id="centralizar"><a href="<?= site_url('public/carrinho/excluir/'.$produto['id']) ?>"><img width="40" height="40" src="<?= base_url('images/excluir.png') ?>"></a></div>
                </li>
           <?php endforeach; ?>
          
          <li class="table-row">
              <div class="col col-2" id="centralizar" data-label="Customer Name"><h2>Soma Total</h2></div>
              <div class="col col-2" id="centralizar" data-label="Customer Name"><h2>R$ <?= $total ?></h2></div>
          </li>
          
          
          <?php } ?>
      </ul>
    </div>
        
        <form action="<?= site_url('public/usuario/finalizar') ?>" method="post" >
            <?php 
            $x = 0;
            foreach($produtos as $produto):
                  $x = $x + 1;
                  echo "<input type='hidden' value='$produto[id]' name='id$x'>";
                  echo "<input type='hidden' value='$produto[quantidade]' name='qt$x'>";
                  
            endforeach;
            ?>
            <br><br>
            Endereço de Entrega:
            <br><?= $rua ?>, <?= $numero ?>
            
            
            <br><br>
            Metodo de Pagamento<br>
            <select name="metodo">
                <option>Dinheiro</option>
                <option>Maquininha Cartão de Crédito</option>
                <option>Maquininha Cartão de Débito</option>
            </select>
            
            <input type="hidden" value="<?= $x ?>" name="quantidade" >
            <input type="hidden" value="<?= $total ?>" name="total" >
            
            
            <br><br><br><br><input type="submit" value="Finalizar Compra">
            
        </form>
        
    </body>

</html>