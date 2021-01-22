<html>
    <head>
        <title>Tela Inicial do Usuário</title>
    </head>

    <body>
        Tela Inicial do Usuário
        
        <br><br><a href="<?= site_url('public/usuario/pedidos') ?>"><button>Pedidos</button></a>

        <br><br><a href="<?= site_url('public/usuario/lista') ?>"><button>Listar Empresas</button></a>
        
        <br><br><a href="<?= site_url('public/usuario/carrinho') ?>"><button>Carrinho</button></a>
        
        <br><br><br><br><br><br><br><br><br>
        
        <table>
            <tr>
                            <th>Nome</th>
                            <th>Descrição</th>
                            <th>Imagem</th>
                            <th>Valor</th>
                            <th>Adicionar</th>
                        </tr>
                    <?php foreach($produtos1 as $produto1): ?>
                        <tr>
                        <td><?php echo $produto1['nome'] ?></td>
                        <td><?php echo $produto1['descricao'] ?></td>
                        <td><img  width="150" height="150" src="<?php echo base_url() . '/public/upload/' .  $produto1['arquivo'] ?>"></td>
                        <td><?php echo $produto1['valor'] ?></td>
                        <td><?= anchor("public/usuario/mostrar/$produto1[id]", 'Adicionar') ?></td>
                        </tr>
                    <?php endforeach; ?>
        </table>
        
        <br><br><br><br><br><br><br><br>
        
         <table>
            <tr>
                            <th>Nome</th>
                            <th>Descrição</th>
                            <th>Imagem</th>
                            <th>Valor</th>
                            <th>Adicionar</th>
                        </tr>
                    <?php foreach($produtos2 as $produto2): ?>
                        <tr>
                        <td><?php echo $produto2['nome'] ?></td>
                        <td><?php echo $produto2['descricao'] ?></td>
                        <td><img  width="150" height="150" src="<?php echo base_url() . '/public/upload/' .  $produto2['arquivo'] ?>"></td>
                        <td><?php echo $produto2['valor'] ?></td>
                        <td><?= anchor("public/usuario/mostrar/$produto2[id]", 'Adicionar') ?></td>
                        </tr>
                    <?php endforeach; ?>
        </table>
        
        <br><br><br><br><br><br><br><br><br>
        
        <br><br><a href="<?= site_url('public') ?>"><button>Voltar</button></a>
    </body>


</html>