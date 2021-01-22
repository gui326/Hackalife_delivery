<!DOCTYPE HTML>
<html lang="pt-BR">
    <head>
        <meta charset=”UTF-8”>
        <title>Empresa Cadastro de Produto</title>
    </head>
    <body>
        
        tela de cadastrar produto<br><br><br>
        
        <form action="<?= site_url('public/empresa/inserir') ?>" method="post" enctype="multipart/form-data">
            Nome:
            <br><input type="text" name="nome">
            <br><br>Descrição:
            <br><input type="text" name="descricao">
            <br><br>Arquivo:
            <br><input type="file" name="arquivo">
            <br><br>Valor:
            <br><input type="text" name="valor">
            
            <br><br><br><input type="submit" >
        
        
        
        </form>
        
        
        
        
        
        
        
        
        
        <br><br><br><a href="<?=site_url('public/empresa')?>"><button>Voltar</button></a>
    </body>

</html>