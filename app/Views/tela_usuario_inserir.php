<html>
    <head>
        <title>Usuário Adicionar Produto</title>
    </head>
    <body>
        
        Tela de Adicionar Produto<br><br><br>
        
        <form action="<?= site_url('public/usuario/inserir') ?>" method="post">
            <?= $nome ?>
            <br><br><?= $descricao ?>
            <br><br><img width="150" height="150" src="<?php echo base_url() . '/public/upload/' .  $arquivo ?>">
            <br><br><?= $valor ?>
            
            
            <br><br>Quantidade<br><br><input type="number" name="quantidade">
            
            <input type="hidden" value="<?= $id ?>" name="id" >
            <input type="hidden" value="<?= $valor ?>" name="valor" >
            
            <br><br><br><input type="submit" >
        
        
        
        </form>
        
        
        
        
        
        
        
        
        
        <br><br><br><a href="<?=site_url('public/usuario/lista')?>"><button>Voltar</button></a>
    </body>

</html>