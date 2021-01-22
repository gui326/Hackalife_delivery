<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro CLiente</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    
    <link rel="stylesheet" href="<?= base_url('css/styles_cadastro_usuario.css') ?>">

</head>

<body>

    <div id="container" class="container-fluid">

        <div class="row ">
            <a href="<?= site_url('public/cadastro')?>" style="text-decoration: none; ">
                <img src="<?= base_url('images/back.svg')?>">
            </a>
        </div>

        <div class="row">
            <form action="<?= site_url('public/cadastro/usuario2') ?>" method="post" class="p-5 mx-auto mt-5 w-100">

                <div class="row">
                    <div class="col-sm-12">
                        <p><b>Seja bem vindo!</b></p>
                        <p>O primeiro passo é preencher as informações abaixo:</p>
                    </div>
                </div>

                <div class="row">
                    <h2 class="mx-auto my-5">Cadastro do Cliente</h2>
                </div>

                <div class="row">
                    <div class="col-sm-6">
                        <label class="m-2 font-weight-bold">
                                    Nome:
                                    <input type="text" class="mb-2 p-2 w-100" name="nome" value="<?= set_value('nome');?>" placeholder="Insira seu nome" autofocus>
                            <span id="corvermelha"><?php if(isset($validation)) echo $validation->getError('nome'); ?><br></span>
                            </label>
                    </div>
                    <div class="col-sm-6">
                        <label class="m-2 font-weight-bold">
                                CPF:
                                <input type="text" class="mb-2 p-2 w-100" name="cpf" value="<?= set_value('cpf');?>" min="14" max="14" placeholder="Insira Seu CPF">
                            <span id="corvermelha"><?php if(isset($validation)) echo $validation->getError('cpf'); ?><br></span>
                            </label>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-6">
                        <label class="m-2 font-weight-bold">
                                    Data de Nascimento:
                                    <input type="date" name="data" value="<?= set_value('data');?>"  class="mb-2 p-2 w-100" autofocus>
                            <span id="corvermelha"><?php if(isset($validation)) echo $validation->getError('data'); ?><br></span>
                            </label>
                    </div>
                </div>

                <div class="row">
                    <h2 class="mx-auto my-5">Informações de endereço</h2>
                </div>

                <div class="row">
                    <div class="col-sm-6">
                        <label class="m-2 font-weight-bold">
                                Rua:
                                <input type="text" class="mb-2 p-2 w-100" name="rua"  value="<?= set_value('rua');?>" placeholder="Informe a rua">
                            <span id="corvermelha"><?php if(isset($validation)) echo $validation->getError('rua'); ?><br></span>
                            </label>
                    </div>

                    <div class="col-sm-6">
                        <label class="m-2 font-weight-bold">
                                Número:
                                <input type="text" class="mb-2 p-2 w-25" name="numero"  value="<?= set_value('numero');?>" placeholder="Nº">
                            <span id="corvermelha"><?php if(isset($validation)) echo $validation->getError('numero'); ?><br></span>
                            </label>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-6">
                        <label class="m-2 font-weight-bold">
                                Bairro:
                                <input type="text" class="mb-2 p-2 w-100" name="bairro" value="<?= set_value('bairro');?>" placeholder="Informe o bairro">
                            <span id="corvermelha"><?php if(isset($validation)) echo $validation->getError('bairro'); ?><br></span>
                            </label>
                    </div>

                    <div class="col-sm-6">
                        <label class="m-2 font-weight-bold">
                                Cidade:
                                <input type="text" class="mb-2 p-2 w-100" name="cidade" value="<?= set_value('cidade');?>" placeholder="Informe a cidade">
                            <span id="corvermelha"><?php if(isset($validation)) echo $validation->getError('cidade'); ?><br></span>
                            </label>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-6">
                        <label class="m-2 font-weight-bold">
                                Estado:
                                <select name="estado" class="mb-2 p-2 w-100">
                                    <option value="<?= set_value('estado');?>">Qual é o estado?</option>
                                    <option value="AC">AC</option>
                                    <option value="AL">AL</option>
                                    <option value="AP">AP</option>
                                    <option value="AM">AM</option>
                                    <option value="BA">BA</option>
                                    <option value="CE">CE</option>
                                    <option value="DF">DF</option>
                                    <option value="ES">ES</option>
                                    <option value="GO">GO</option>
                                    <option value="MA">MA</option>
                                    <option value="MT">MT</option>
                                    <option value="MS">MS</option>
                                    <option value="MG">MG</option>
                                    <option value="PA">PA</option>
                                    <option value="PB">PB</option>
                                    <option value="PR">PR</option>
                                    <option value="PE">PE</option>
                                    <option value="PI">PI</option>
                                    <option value="RJ">RJ</option>
                                    <option value="RN">RN</option>
                                    <option value="RS">RS</option>
                                    <option value="RO">RO</option>
                                    <option value="RR">RR</option>
                                    <option value="SC">SC</option>
                                    <option value="SP">SP</option>
                                    <option value="SE">SE</option>
                                    <option value="TO">TO</option>
                                </select>
                            <span id="corvermelha"><?php if(isset($validation)) echo $validation->getError('estado'); ?><br></span>
                            </label>
                    </div>
                </div>

                <div class="row">
                    <h2 class="mx-auto my-5">Contato</h2>
                </div>

                <div class="row">
                    <div class="col-sm-6">
                        <label class="m-2 font-weight-bold">
                                Email:
                                <input type="email" name="email" value="<?= set_value('email');?>" class="mb-2 p-2 w-100" placeholder="exemplo@exemplo.com">
                            <span id="corvermelha"><?php if(isset($validation)) echo $validation->getError('email'); ?><br></span>
                            </label>
                    </div>

                    <div class="col-sm-6">
                        <label class="m-2 font-weight-bold">
                                Telefone:
                                <input type="text" name="telefone" value="<?= set_value('telefone');?>" class="mb-2 p-2 w-100" placeholder="(00)00000-0000">
                            <span id="corvermelha"><?php if(isset($validation)) echo $validation->getError('telefone'); ?><br></span>
                            </label>
                    </div>
                </div>

                <div class="row">
                    <h2 class="mx-auto my-5">Informações para o login</h2>
                </div>


                <div class="row">
                    <div class="col-sm-6">
                        <label class="m-2 font-weight-bold">
                                Usuário:
                                <input type="text" name="login" value="<?= set_value('login');?>" class="mb-2 p-2 w-100" placeholder="Informe um nome de usuário">
                            <span id="corvermelha"><?php if(isset($validation)) echo $validation->getError('login'); ?><br></span>
                            </label>
                    </div>

                    <div class="col-sm-6">
                        <label class="m-2 font-weight-bold">
                                Senha:
                                <input type="password" name="senha" value="<?= set_value('senha');?>" class="mb-2 p-2 w-100" placeholder="Informe uma senha">
                            <span id="corvermelha"><?php if(isset($validation)) echo $validation->getError('senha'); ?><br></span>
                            </label>
                    </div>
                </div>

                <div class="row">
                    <input type="submit" class="botao mt-5 mx-auto w-50" value="Cadastrar">
                </div>
            </form>
        </div>

    </div>
</body>

</html>