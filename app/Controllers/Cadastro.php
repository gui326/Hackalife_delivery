<?php namespace App\Controllers;

class Cadastro extends BaseController
{
	public function index(){
        helper(['form', 'url']); 
		echo view('tipo_cadastro');
	}
    
    public function usuario(){
        
        helper(['form', 'url']); 
		echo view('cadastro_cliente_1');
	}
    
    public function usuario2(){
        helper(['form', 'url']); 
        
        $dado = $this->request->getPost();
        
        $validation =  \Config\Services::validation();
        
            $val = $this->validate([
                'nome' => 'required|alpha_space',
                'cpf' => 'required|numeric',
                'data' => 'required|valid_date',
                'rua' => 'required',
                'numero' => 'required|numeric',
                'bairro' => 'required',
                'cidade' => 'required',
                'estado' => 'required',
                'email' => 'required|valid_email',
                'telefone' => 'required|numeric',
                'login' => 'required|min_length[6]|max_length[18]',
                'senha' => 'required|min_length[6]|max_length[18]',
                ]
                ,
                [   
                'nome' => [
                    'required' => '* O nome é obrigatório ser preenchido.',
                    'alpha_space' => '* Deve ter somente letras',
                ],
                'cpf' => [
                    'required' => '* O nome do titular é obrigatório ser preenchido.',
                    'numeric' => '* Deve ter somente números.',
                ],
                'data' => [
                    'required' => '* A data de validade é obrigatório ser preenchido.',
                    'valid_date' => '* Deve ser inserido uma data válida.',
                ],
                'rua' => [
                    'required' => '* A rua é obrigatório ser preenchido.',
                ],
                'numero' => [
                    'required' => '* O número é obrigatório ser preenchido.',
                    'numeric' => '* Deve ter somente números.',
                ],
                'bairro' => [
                    'required' => '* O bairro é obrigatório ser preenchido.',
                ],
                'cidade' => [
                    'required' => '* A cidade é obrigatório ser preenchido.',
                ],
                'estado' => [
                    'required' => '* O estado é obrigatório ser preenchido.',
                ],
                'email' => [
                    'required' => '* O email é obrigatório ser preenchido.',
                    'valid_email' => '* Deve ser inserido um email válida.',
                ],
                'telefone' => [
                    'required' => '* O telefone é obrigatório ser preenchido.',
                    'numeric' => '* Deve ter somente números.',
                ],
                'login' => [
                    'required' => '* O login é obrigatório ser preenchido.',
                    'min_length' => '* Deve ser inserido no mínimo 6 caracteres.',
                    'max_length' => '* Deve ser inserido no máximo 18 caracteres.',
                ],
                'senha' => [
                    'required' => '* A senha é obrigatório ser preenchido.',
                    'min_length' => '* Deve ser inserido no mínimo 6 caracteres.',
                    'max_length' => '* Deve ser inserido no máximo 18 caracteres.',
                ],
                ]
            );
        
        
        
        if (!$val)
        {   
            return view('cadastro_cliente_1', ['validation' => $this->validator]); 
        }
        else
        {              
            echo view('cadastro_cliente_2',$dado);
        }
        
		
	}
    
    public function usuario3(){
        helper(['form', 'url']); 
        
        $dado = $this->request->getPost();
        
        $banco = model('Cliente');
        $banco2 = model('Endereco_cliente');
        $banco3 = model('Preferencia');
        
        $gosto1 = '';
        $gosto2 = '';
        
        for($i = 1;$i <= 8; $i++){
            if(isset($dado['check'.$i])){
                if($gosto1 == null){
                    $gosto1 = $dado['check'.$i];
                }
                else
                    $gosto2 = $dado['check'.$i];
            }
            
            
        }
        
        $crypt = password_hash($dado['senha'], PASSWORD_DEFAULT);
        
        $dado_gosto = ['gosto_1' => $gosto1,'gosto_2' => $gosto2,];
        
        $gosto = $banco3->insert($dado_gosto); 
        
        $dado_cliente = [
            'cpf' => $dado['cpf'],
            'nome' => $dado['nome'],
            'email' => $dado['email'],
            'login' => $dado['login'],
            'senha' => $crypt,
            'data' => $dado['data'],
            'telefone' => $dado['telefone'],
            'preferencia_id' => $gosto,
        ];
        
        $dado_endereco = [
            'id' => $dado['cpf'],
            'estado' => $dado['estado'],   
            'cidade' => $dado['cidade'],
            'bairro' => $dado['bairro'],
            'rua' => $dado['rua'],
            'numero' => $dado['numero'],
        ];
        
        $banco->insert($dado_cliente);
        $banco2->insert($dado_endereco);
        
        return view('home');
	}
    
        
    
    
    
    
    
    
    public function empresa(){
        helper(['form', 'url']); 
		echo view('cadastro_empresa_1');
	}
    
    public function empresa2(){
        helper(['form', 'url']); 
        
        $dado = $this->request->getPost();
        
        $validation =  \Config\Services::validation();
        
        $val = $this->validate([
            'nome_comercial' => 'required|alpha_space',
            'nome_fantasia' => 'required|alpha_space',
            'cnpj' => 'required|numeric',
            'descricao' => 'required',
            'segmento' => 'required',
            'especializacao' => 'required',
            'arquivo' => 'uploaded[arquivo]',
            'rua' => 'required',
            'numero' => 'required|numeric',
            'bairro' => 'required',
            'cidade' => 'required',
            'estado' => 'required',
            'email' => 'required|valid_email',
            'telefone' => 'required|numeric',
            'login' => 'required|min_length[6]|max_length[18]',
            'senha' => 'required|min_length[6]|max_length[18]',
            ]
            ,
            [   
            'nome_comercial' => [
                'required' => '* O nome comercial é obrigatório ser preenchido.',
                'alpha_space' => '* Deve ter somente letras',
            ],
            'nome_fantasia' => [
                'required' => '* O nome fantasia é obrigatório ser preenchido.',
                'alpha_space' => '* Deve ter somente letras',
            ],
            'cnpj' => [
                'required' => '* O CNPJ é obrigatório ser preenchido.',
                'numeric' => '* Deve ter somente números.',
            ],
            'descricao' => [
                'required' => '* A descrição é obrigatório ser preenchido.',
            ],
            'segmento' => [
                'required' => '* O segmento é obrigatório ser preenchido.',
            ],
            'especializacao' => [
                'required' => '* A especialização é obrigatório ser preenchido.',
            ],
            'arquivo' => [
                'uploaded' => '* A logo é obrigatório ser inserida.',
            ],
            'rua' => [
                'required' => '* A rua é obrigatório ser preenchido.',
            ],
            'numero' => [
                'required' => '* O número é obrigatório ser preenchido.',
                'numeric' => '* Deve ter somente números.',
            ],
            'bairro' => [
                'required' => '* O bairro é obrigatório ser preenchido.',
            ],
            'cidade' => [
                'required' => '* A cidade é obrigatório ser preenchido.',
            ],
            'estado' => [
                'required' => '* O estado é obrigatório ser preenchido.',
            ],
            'email' => [
                'required' => '* O email é obrigatório ser preenchido.',
                'valid_email' => '* Deve ser inserido um email válida.',
            ],
            'telefone' => [
                'required' => '* O telefone é obrigatório ser preenchido.',
                'numeric' => '* Deve ter somente números.',
            ],
            'login' => [
                'required' => '* O login é obrigatório ser preenchido.',
                'min_length' => '* Deve ser inserido no mínimo 6 caracteres.',
                'max_length' => '* Deve ser inserido no máximo 18 caracteres.',
            ],
            'senha' => [
                'required' => '* A senha é obrigatório ser preenchido.',
                'min_length' => '* Deve ser inserido no mínimo 6 caracteres.',
                'max_length' => '* Deve ser inserido no máximo 18 caracteres.',
            ],
            ]
        );
        
        if (!$val){   
            return view('cadastro_empresa_1', ['validation' => $this->validator]); 
        }
        else {              
            $banco = model('Empresa');
            $banco2 = model('Endereco_empresa');

            $crypt = password_hash($dado['senha'], PASSWORD_DEFAULT);

            $file = $this->request->getFile('arquivo');

            if($file->getSize() > 0){
                    $nomealeatorio = $file->getRandomName();
                    $file->move('upload', $dado['nome_fantasia'] . $nomealeatorio);
                    $arquivo = $dado['nome_fantasia'] . $nomealeatorio;
            };

            $dado_empresa = [
                'nome_comercial' => $dado['nome_comercial'],
                'nome_fantasia' => $dado['nome_fantasia'],
                'cnpj' => $dado['cnpj'],
                'descricao' => $dado['descricao'],
                'segmento' => $dado['segmento'],
                'especializacao' => $dado['especializacao'],
                'email' => $dado['email'],
                'login' => $dado['login'],
                'telefone' => $dado['telefone'],
                'senha' => $crypt,
                'arquivo' => $arquivo,
            ];

            $dado_endereco = [
                'id' => $dado['cnpj'],
                'estado' => $dado['estado'],   
                'cidade' => $dado['cidade'],
                'bairro' => $dado['bairro'],
                'rua' => $dado['rua'],
                'numero' => $dado['numero'],
            ];

            $banco->insert($dado_empresa);
            $banco2->insert($dado_endereco);

            return view('home');
        }
        
        
        
    }

	//--------------------------------------------------------------------

}
