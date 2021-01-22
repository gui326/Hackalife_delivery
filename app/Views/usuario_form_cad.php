<html>
<head>
    <title>Cadastro de Usuário</title>
</head>
<body>
    <form action="<?=site_url('public/cadastro/usuario2')?>" method="post">
        <br>Nome<br><input type="text" name="nome" value="<?php if(isset($nome)) set_value('$nome'); ?>">
        <br><br>CPF<br><input type="text" name="cpf" value="<?php if(isset($cpf)) set_value('$cpf'); ?>">
        <br><br>Email<br><input type="text" name="email">
        <br><br>Estado<br><input type="text" name="estado">
        <br><br>Cidade<br><input type="text" name="cidade">
        <br><br>Bairro<br><input type="text" name="bairro">
        <br><br>Rua<br><input type="text" name="rua">
        <br><br>Numero<br><input type="text" name="numero">
        <br><br>Login<br><input type="text" name="login">
        <br><br>Senha<br><input type="text" name="senha">
        <br><br><input type="submit">
        
    </form>
    
    <a href="<?=site_url('public/cadastro')?>"><button>Voltar</button></a>
</body>


</html>