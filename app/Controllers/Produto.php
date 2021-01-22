<?php namespace App\Controllers;

class Produto extends BaseController
{
    public function buscar(){
        helper(['url','form']);
        
        $banco = model('Empresa');
        
        if(!isset($_SESSION['nome']))
            session_start();
        
        $dado = $this->request->getPost();
        
        $dados = $banco->where('segmento',$dado['segmento'])->findAll();
        
        $produto = ['dados' => $dados];
        
        echo view('usuario_empresas',$produto);
    }
    
    public function listar($id){
        helper(['url','form']);
        
        $banco = model('Produto');
        $banco2 = model('Empresa');
        
        if(!isset($_SESSION['nome']))
            session_start();
        
        $dados = $banco->where('empresa_id',$id)->findAll();
        $empresa = $banco2->find($id);
        
        $produto = ['dados' => $dados, 'nome_fantasia' => $empresa['nome_fantasia'], 'arquivo' => $empresa['arquivo']];
        
        echo view('usuario_produtos',$produto);
    }
    
    
	 public function deletar($id){
         helper(['url','form']);
         
        $view = new Empresa; 

        $banco = model('Produto');
        
        $banco->delete($id);
        
        echo $view->index();
    }
    
    public function mostrar($id){
        helper(['url','form']);
        
        $banco = model('Produto');
        
        if(!isset($_SESSION['nome_fantasia']))
            session_start();
        
        $dado = $banco->find($id);
        
        echo view('empresa_atualizar_produto',$dado);
    }
    
    public function atualizar(){
        helper(['url','form']);
        
        $banco = model('Produto');
        
        $view = new Empresa; 
         
        $dados = $this->request->getPost();
        
        $dado = [
            'nome' => $dados['nome'],
            'descricao' => $dados['descricao'],
            'valor' => $dados['valor'],
        ];
        
        $banco->update($dados['id'], $dado);
        
        echo $view->index();
    }

	//--------------------------------------------------------------------

}
