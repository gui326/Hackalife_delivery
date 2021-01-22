<html>
<head>
    <title>Cadastro de Cliente</title>
</head>
<body>
    <form action="<?=site_url('public/cadastro/usuario4')?>" method="post">
        <br>Nome: <?= $nome ?>
        <br><br>CPF:<?= $cpf ?>
        <br><br>Email: <?= $email ?>
        <br><br>Estado: <?= $estado ?>
        <br><br>Cidade: <?= $cidade ?>
        <br><br>Bairro: <?= $bairro ?>
        <br><br>Rua: <?= $rua ?>
        <br><br>Número: <?= $numero ?>
        <br><br>Data: <?= $data ?>
        <br><br>Telefone: <?= $telefone ?>
        <br><br>Login: <?= $login ?>
        <br><br>Senha: <?= $senha ?>
        
        
        <input type="hidden" value="<?php if(isset($nome)) echo $nome ?>" name="nome">
        <input type="hidden" value="<?php if(isset($cpf))  echo $cpf ?>" name="cpf">
        <input type="hidden" value="<?php if(isset($email))  echo $email ?>" name="email">
        <input type="hidden" value="<?php if(isset($estado))  echo $estado ?>" name="estado">
        <input type="hidden" value="<?php if(isset($cidade))  echo $cidade ?>" name="cidade">
        <input type="hidden" value="<?php if(isset($bairro))  echo $bairro ?>" name="bairro">
        <input type="hidden" value="<?php if(isset($rua))  echo $rua ?>" name="rua">
        <input type="hidden" value="<?php if(isset($numero))  echo $numero ?>" name="numero">
        <input type="hidden" value="<?php if(isset($data))  echo $data ?>" name="data">
        <input type="hidden" value="<?php if(isset($telefone))  echo $telefone ?>" name="telefone">
        <input type="hidden" value="<?php if(isset($login))  echo $login ?>" name="login">
        <input type="hidden" value="<?php if(isset($senha))  echo $senha ?>" name="senha">
        <input type="hidden" value="<?php if(isset($gosto1))  echo $gosto1 ?>" name="gosto1">
        <input type="hidden" value="<?php if(isset($gosto2))  echo $gosto2 ?>" name="gosto2">
        
        <br><br><a href="<?=site_url('public/cadastro/usuario')?>"><input type=button value="Refazer"></a>
        
        <br><br><input type="submit">
        
    </form>
    
    
    
    <a href="<?=site_url('public/cadastro/usuario2')?>"><button>Voltar</button></a>
</body>


</html>