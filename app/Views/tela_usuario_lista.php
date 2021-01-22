<html>
    <head>
        <title>Usuario Listagem de Empresas</title>
        
        <link rel="stylesheet" href="<?= base_url('css/styles_tabela.css') ?>">
        
        <script src="https://code.jquery.com/jquery.js"></script>
        <script src="https://cdn.jsdelivr.net/sweetalert2/6.6.0/sweetalert2.js"></script>
        
    </head>
    <body>
        <div class="container-fluid">
        <div class="row ">
            <a href="<?= site_url('public/usuario')?>" style="text-decoration: none; ">
                <img src="<?= base_url('images/back.svg')?>">
            </a>
        </div>
        
        <h2>tela de listagem de empresas</h2>
        
        <br>Buscar:
        <form action="<?= site_url('public/produto/buscar') ?>" method="post">
            <select name="segmento">
                <option></option>
                <option>Casa</option>
                <option>Automoveis</option>
            </select>
            <br><br><input type="submit">
        </form>
        
        
        <br>
        
    <div class="container">
      <ul class="responsive-table">
            <?php foreach($dados as $dado): ?>
              <script>
                function executaAcao(id){
                    window.location = "<?= site_url("public/produto/listar/") ?>" + id;
                }

              </script>

              <div class="clicavel" onclick="executaAcao('<?= $dado['cnpj'] ?>')">
                <li class="table-row">
                  <div class="col col-1" ><img  width="80" height="80" src="<?php echo base_url() . '/public/upload/' .  $dado['arquivo'] ?>"></div>
                  <div class="col col-2" id="centralizar"><h2><?php echo $dado['nome_fantasia'] ?></h2></div>
                </li>
              </div>
           <?php endforeach; ?>
      </ul>
    </div>
        
        
        </div>
        
        
        
        
        
    </body>

</html>