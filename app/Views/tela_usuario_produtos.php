<html>
    <head>
        <title>Usuario Listagem de Produto</title>
        
        <link rel="stylesheet" href="<?= base_url('css/styles_tabela.css') ?>">
        
        <script src="https://code.jquery.com/jquery.js"></script>
        <script src="https://cdn.jsdelivr.net/sweetalert2/6.6.0/sweetalert2.js"></script>
    </head>
    <body>
        <div class="row ">
            <a href="<?= site_url('public/usuario/lista')?>" style="text-decoration: none; ">
                <img src="<?= base_url('images/back.svg')?>">
            </a>
        </div>
        
        <h2>tela de listagem de produto</h2>
        
        <br><br><br>
        Nome da Empresa:<br><br>
        <?= $nome_fantasia ?>
        
        <br><br><br>
        
        
    <div class="container">
      <ul class="responsive-table">
          
          
            <?php if($dados == null) echo "<h2>Nenhum produto cadastrado dessa empresa</h2>"; else { foreach($dados as $dado): ?>
            
              <script>
                function executaAcao(id){
                    window.location = "<?= site_url("public/usuario/mostrar/") ?>" + id;
                }

              </script>

              <div class="clicavel" onclick="executaAcao('<?= $dado['id'] ?>')">
                <li class="table-row">
                  <div class="col col-1"><img  width="80" height="80" src="<?php echo base_url() . '/public/upload/' .  $dado['arquivo'] ?>"></div>
                  <div class="col col-2" id="centralizar"><h2><?php echo $dado['nome'] ?></h2></div>
                    <div class="col col-2" id="centralizar"><h2><?php echo $dado['descricao'] ?></h2></div>
                    <div class="col col-2" id="centralizar"><h2>R$ <?php echo $dado['valor'] ?></h2></div>
                </li>
              </div>
           <?php endforeach; ?>
          <?php } ?>
      </ul>
    </div>
        
        
        
        
        
        
        
        
    </body>

</html>