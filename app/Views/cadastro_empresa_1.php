<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="<?= base_url('css/styles_cadastro_usuario.css') ?>">
    
    <script type="text/javascript">
        /* Máscaras ER */
        function mascara(o,f){
            v_obj=o
            v_fun=f
            setTimeout("execmascara()",1)
        }
        function execmascara(){
            v_obj.value=v_fun(v_obj.value)
        }
        function mtel(v){
            v=v.replace(/\D/g,"");             //Remove tudo o que não é dígito
            v=v.replace(/^(\d{2})(\d)/g,"($1) $2"); //Coloca parênteses em volta dos dois primeiros dígitos
            v=v.replace(/(\d)(\d{4})$/,"$1-$2");    //Coloca hífen entre o quarto e o quinto dígitos
            return v;
        }
        function id( el ){
            return document.getElementById( el );
        }
        window.onload = function(){
            id('telefone').onkeyup = function(){
                mascara( this, mtel );
            }
        }
    </script>
    
    
    

</head>
<body>

    <div id="container" class="container-fluid">

        <div class="row ">
            <a href="<?= site_url('public/cadastro')?>" style="text-decoration: none; ">
                <img src="<?= base_url('images/back.svg')?>">
            </a>
        </div>
        <div class="row">
            <form action="<?= site_url('public/cadastro/empresa2')?>" method="post" class="p-5 mx-auto mt-5 w-100" enctype="multipart/form-data">

                    <div class="row">
                        <div class="col-sm-6">
                            <p><b>Seja bem vindo !</b></p>
                            <p>O primeiro passo é preencher as informações abaixo...:</p>
                        </div>
                    </div>

                    <div class="row">
                        <h2 class="mx-auto my-5">Cadastro da empresa</h2>
                    </div>

                    <div class="row">
                        <div class="col-sm-6">
                            <label class="m-2 font-weight-bold">
                                    Nome comercial
                                    <input type="text" class="mb-2 p-2 w-100" name="nome_comercial" value="<?= set_value('nome_comercial');?>"  placeholder="Insira o nome comercial de sua empresa" autofocus>
                                    
                                    <span id="corvermelha"><?php if(isset($validation)) echo $validation->getError('nome_comercial'); ?><br></span>
                            </label>
                            
                        </div>

                        <div class="col-sm-6">
                            <label class="m-2 font-weight-bold">
                                    Nome fantasia
                                    <input type="text" class="mb-2 p-2 w-100" value="<?= set_value('nome_fantasia');?>" name="nome_fantasia" placeholder="Insira o nome fantasia">
                                    <span id="corvermelha"><?php if(isset($validation)) echo $validation->getError('nome_fantasia'); ?><br></span>
                            </label>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-6">
                            <label class="m-2 font-weight-bold">
                                Cnpj
                                <input type="text" class="mb-2 p-2 w-100" name="cnpj" value="<?= set_value('cnpj');?>" min="14" max="14" placeholder="O cnpj é um número com 14 dígitos">
                                <span id="corvermelha"><?php if(isset($validation)) echo $validation->getError('cnpj'); ?><br></span>
                            </label>
                        </div>

                        <div class="col-sm-6">
                            <label class="m-2 font-weight-bold">
                                Descrição
                                <input type="text" class="mb-2 p-2 w-100" value="<?= set_value('descricao');?>" name="descricao" placeholder="Insira a descrição">
                                <span id="corvermelha"><?php if(isset($validation)) echo $validation->getError('descricao'); ?><br></span>
                            </label>
                        </div>
                    </div>

                    
                    <div class="row">
                        <div class="col-sm-6">
                            <label class="m-2 font-weight-bold">
                                Segmento
                                <select name="segmento" class="mb-2 p-2 w-100">
                                    <option value="<?= set_value('segmento');?>">Qual área a sua empresa trabalha?</option>
                                    <option value="restaurante">Restaurante</option>
                                    <option value="farmacia">Farmácia</option>
                                    <option value="perfumaria">Perfumaria</option>
                                    <option value="livraria">Livraria</option>
                                    <option value="utilidades">Utilidades</option>
                                    <option value="papelaria">Papelaria</option>
                                    <option value="roupa">Roupa</option>
                                    <option value="bebidas">Bebidas</option>
                                    <option value="outros">Outros</option>
                                </select>
                                <span id="corvermelha"><?php if(isset($validation)) echo $validation->getError('segmento'); ?><br></span>
                            </label>
                        </div>

                        <div class="col-sm-6">
                            <label class="m-2 font-weight-bold">
                                Especialização
                                <input type="text" value="<?= set_value('especializacao');?>" name="especializacao" class="mb-2 p-2 w-100" placeholder="Insira a especialização">
                                <span id="corvermelha"><?php if(isset($validation)) echo $validation->getError('especializacao'); ?><br></span>
                            </label>
                        </div>
                        
                        <div class="col-sm-6">
                            <label class="m-2 font-weight-bold">
                                Logo
                                <div class="custom-file mb-3">
                                  <input type="file" value="<?= set_value('arquivo');?>" name="arquivo" class="custom-file-input" id="customFile" name="filename">
                                    <span id="corvermelha"><?php if(isset($validation)) echo $validation->getError('arquivo'); ?><br></span>
                                  <label class="custom-file-label" for="customFile">Escolha o Arquivo</label>
                                </div>
                            </label>
                        </div>
                    </div>
                
                <script>
                    // Add the following code if you want the name of the file appear on select
                    $(".custom-file-input").on("change", function() {
                      var fileName = $(this).val().split("\\").pop();
                      $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
                    });
                </script>
                
                

                    <div class="row">
                        <h2 class="mx-auto my-5">Informações de endereço</h2>
                    </div>

                    <div class="row">    
                        <div class="col-sm-6">
                            <label class="m-2 font-weight-bold">
                                Rua
                                <input type="text" value="<?= set_value('rua');?>" name="rua" class="mb-2 p-2 w-100" placeholder="Informe o nome da rua da empresa">
                                <span id="corvermelha"><?php if(isset($validation)) echo $validation->getError('rua'); ?><br></span>
                            </label>
                        </div>

                        <div class="col-sm-6">
                            <label class="m-2 font-weight-bold">
                                Número da empresa
                                <input type="text" value="<?= set_value('numero');?>" name="numero" class="mb-2 p-2 w-25" placeholder="Nº">
                                <span id="corvermelha"><?php if(isset($validation)) echo $validation->getError('numero'); ?><br></span>
                            </label>
                        </div>
                    </div>

                    <div class="row">    
                        <div class="col-sm-6">
                            <label class="m-2 font-weight-bold">
                                Bairro
                                <input type="text" value="<?= set_value('bairro');?>" name="bairro" class="mb-2 p-2 w-100" placeholder="Informe o bairro">
                                <span id="corvermelha"><?php if(isset($validation)) echo $validation->getError('bairro'); ?><br></span>
                            </label>
                        </div>

                        <div class="col-sm-6">
                            <label class="m-2 font-weight-bold">
                                Cidade
                                <input type="text" value="<?= set_value('cidade');?>" name="cidade" class="mb-2 p-2 w-100" placeholder="Informe a cidade">
                                <span id="corvermelha"><?php if(isset($validation)) echo $validation->getError('cidade'); ?><br></span>
                            </label>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-6">
                            <label class="m-2 font-weight-bold">
                                Estado da federação
                                <select name="estado" class="mb-2 p-2 w-100">
                                    <option value="<?= set_value('estado');?>">Qual é o estado da empresa?</option>
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
                                Email
                                <input type="email" value="<?= set_value('email');?>" name="email"  class="mb-2 p-2 w-100" placeholder="exemplo@exemplo.com">
                                <span id="corvermelha"><?php if(isset($validation)) echo $validation->getError('email'); ?><br></span>
                            </label>
                        </div>
                        
                        <div class="col-sm-6">
                            <label class="m-2 font-weight-bold">
                                Telefone
                                <input type="text" id="telefone" maxlength="15" value="<?= set_value('telefone');?>" name="telefone" class="mb-2 p-2 w-100" placeholder="(00)0000-0000">
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
                                Nome para o usuário
                                <input type="text"  value="<?= set_value('login');?>" name="login" class="mb-2 p-2 w-100" placeholder="Informe um nome de usuário">
                                <span id="corvermelha"><?php if(isset($validation)) echo $validation->getError('login'); ?><br></span>
                            </label>
                        </div>

                        <div class="col-sm-6">
                            <label class="m-2 font-weight-bold">
                                Senha
                                <input type="password" value="<?= set_value('senha');?>" name="senha"  class="mb-2 p-2 w-100" placeholder="Informe uma senha">
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