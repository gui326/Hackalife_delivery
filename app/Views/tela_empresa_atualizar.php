<!DOCTYPE HTML>
<html lang="pt-BR">
    <head>
        <meta charset=”UTF-8”>
        <title>Empresa Atualizar Produto</title>
    </head>
    <body>
        
        Tela de atualizar produto<br><br><br>
        
        <form action="<?= site_url('public/produto/atualizar') ?>" method="post" enctype="multipart/form-data">
            Nome:
            <br><input type="text" name="nome" value="<?= $nome ?>">
            <br><br>Descrição:
            <br><input type="text" name="descricao" value="<?= $descricao ?>">
            <br><br>Valor:
            <br><input type="text" name="valor" value="<?= $valor ?>">
            
            <input type="hidden" name="id" value="<?= $id ?>">
            
            <br><br><br><input type="submit" >
        
        
        
        </form>
        
        
        
        
        
        
        
        
        
        <br><br><br><a href="<?=site_url('public/empresa/lista')?>"><button>Voltar</button></a>
    </body>

</html>