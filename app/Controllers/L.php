<?php namespace App\Controllers;

class L extends BaseController
{
	public function index()
	{
		echo view('tipo_login');
	}
    
    public function usuario()
	{
		echo view('login_usuario');
	}
    
    public function empresa()
	{
		echo view('login_empresa');
	}
    
    public function logar_usuario(){
        helper(['form', 'url']); 
        
        $view = new Usuario;
        
        $banco = model('Cliente');
        
        $dado = $this->request->getPost();
        
        $user = $banco->where('login', $dado['login'])->findAll();
        
        $errado1 = ['pass' => 'true', 'login' => $dado['login'], 'user' => 'b',];
            
        $errado2 = ['user' => 'a', 'pass' => 'true'];
        
        if($user != null){
            $cript = password_hash($dado['senha'], PASSWORD_DEFAULT);

            session_start();

            foreach ($user as $usuario){
                if(password_verify($dado['senha'],$usuario['senha'])){
                    $_SESSION["nome"] = $usuario['nome'];
                    $_SESSION["cpf"] = $usuario['cpf'];
                    return redirect('')->to(''); 
                }
                    else
                        echo view('login_usuario',$errado1); 
            }    
        }
        else
            echo view('login_usuario',$errado2); 
        
    }
    
    public function logar_empresa(){
        helper(['form', 'url']); 
        
        $view = new Empresa;
        
        $banco = model('Empresa');
        
        $dado = $this->request->getPost();
        
        $user = $banco->where('login', $dado['login'])->findAll();
        
        $errado1 = ['pass' => 'true', 'login' => $dado['login'], 'user' => 'b',];
            
        $errado2 = ['user' => 'a', 'pass' => 'true'];
        
        if($user != null){
            $cript = password_hash($dado['senha'], PASSWORD_DEFAULT);

            session_start();

            foreach ($user as $usuario){
                if(password_verify($dado['senha'],$usuario['senha'])){
                    $_SESSION["nome_fantasia"] = $usuario['nome_fantasia'];
                    $_SESSION["cnpj"] = $usuario['cnpj'];
                    $_SESSION["segmento"] = $usuario['segmento'];
                    $view->index();  
                }
                else
                        echo view('login_empresa',$errado1); 
            }    
        }
        else
            echo view('login_empresa',$errado2);
        
    }
    
    public function deslogar_empresa(){
        helper(['form', 'url']); 
        
        if(!isset($_SESSION['nome_fantasia']))
            session_start();
        
        unset($_SESSION["nome_fantasia"]);
        unset($_SESSION["cnpj"]);
        unset($_SESSION["segmento"]);
        
        echo view('home');
        
    }
    
    public function deslogar_usuario(){
        helper(['form', 'url']); 
        
        if(!isset($_SESSION['nome']))
            session_start();
        
        unset($_SESSION["nome"]);
        unset($_SESSION["cpf"]);
        
        echo view('home');
        
    }

	//--------------------------------------------------------------------

}
