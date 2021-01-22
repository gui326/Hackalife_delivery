<html>
<head>
    <title>Cadastro de Usuário</title>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    
    <script>
        $(function(){
          var MAX_SELECT = 3; // Máximo de 'input' selecionados

          $('input.limited').on('change', function(){
            if( $(this).siblings(':checked').length >= MAX_SELECT ){
               this.checked = false;
            }
          });
        });
        
        
    </script>
    
</head>
<body>
    <form action="<?=site_url('public/cadastro/usuario3')?>" method="post">
        <input type="checkbox" class='limited' id="check1" name="check1" value="Restaurante">
        <label for="check1"> Restaurante</label><br>
        <input type="checkbox" class='limited' id="check2" name="check2" value="Eletrodomestico">
        <label for="check2"> Eletrodomésticos</label><br>
        <input type="checkbox" class='limited' id="check3" name="check3" value="Computador">
        <label for="check3"> Componentes para computador</label><br>
        <input type="checkbox" class='limited' id="check4" name="check4" value="Construção">
        <label for="check4"> Materiais de construção</label><br>
        <input type="checkbox" class='limited' id="check5" name="check5" value="Limpeza">
        <label for="check5"> Produtos de limpeza</label><br>
        <input type="checkbox" class='limited' id="check6" name="check6" value="Livraria">
        <label for="check6"> Livrarias</label><br>
        <input type="checkbox" class='limited' id="check7" name="check7" value="Automoveis">
        <label for="check7"> Componentes para automoveis</label><br>
        <input type="checkbox" class='limited' id="check8" name="check8" value="Casa">
        <label for="check8"> Materiais para casa</label><br><br>
        
        <input type="hidden" value="<?php if(isset($nome)) echo $nome ?>" name="nome">
        <input type="hidden" value="<?php if(isset($cpf))  echo $cpf ?>" name="cpf">
        <input type="hidden" value="<?php if(isset($email))  echo $email ?>" name="email">
        <input type="hidden" value="<?php if(isset($estado))  echo $estado ?>" name="estado">
        <input type="hidden" value="<?php if(isset($cidade))  echo $cidade ?>" name="cidade">
        <input type="hidden" value="<?php if(isset($bairro))  echo $bairro ?>" name="bairro">
        <input type="hidden" value="<?php if(isset($rua))  echo $rua ?>" name="rua">
        <input type="hidden" value="<?php if(isset($numero))  echo $numero ?>" name="numero">
        <input type="hidden" value="<?php if(isset($login))  echo $login ?>" name="login">
        <input type="hidden" value="<?php if(isset($senha))  echo $senha ?>" name="senha">
        
        <br><br><input type="submit">
        
    </form>
    
    <a href="<?=site_url('public/cadastro/usuario')?>"><button>Voltar</button></a>
</body>


</html>