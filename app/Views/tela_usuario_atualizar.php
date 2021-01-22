<!DOCTYPE HTML>
<html lang="pt-BR">
    <head>
        <meta charset=”UTF-8”>
        <title>Empresa Atualizar Produto</title>
    </head>
    <body>
        
        Tela de atualizar produto<br><br><br>
        
        <form action="<?= site_url('public/carrinho/atualizar') ?>" method="post">
            Nome:
            <br><br>Quantidade:
            <br><input type="number" name="quantidade" value="<?= $quantidade ?>">
            
            <input type="hidden" name="id" value="<?= $id ?>">
            
            <br><br><br><input type="submit" >
        
        
        
        </form>
        
        
        
        
        
        
        
        
        
        <br><br><br><a href="<?=site_url('public/usuario/carrinho')?>"><button>Voltar</button></a>
    </body>

</html>