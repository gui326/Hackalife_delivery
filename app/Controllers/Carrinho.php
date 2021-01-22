<?php namespace App\Controllers;

class Carrinho extends BaseController
{
	 public function excluir($id){
         helper(['url','form']);
         
        $teste = new Usuario; 

        $banco = model('Cliente_produto');
        
        $banco->delete($id);
        
        echo $teste->carrinho();
    }
    
    public function mostrar($id){
        helper(['url','form']);
        
        $banco = model('Cliente_produto');
        
        if(!isset($_SESSION['nome']))
            session_start();
        
        $dado = $banco->find($id);
        
        echo view('usuario_atualizar',$dado);
    }
    
    public function atualizar(){
        helper(['url','form']);
        
        $total = 0;
        
        $banco = model('Cliente_produto');
        $banco_produto = model('Produto');
        
        if(!isset($_SESSION['nome']))
            session_start();
        
        $teste = new Usuario; 
         
        $dados = $this->request->getPost();
        
        $cliente_produto = $banco->find($dados['id']);
        $produto = $banco_produto->find($cliente_produto['produto_id']);
        
        $total = (int)$dados['quantidade'] * (double)$produto['valor'];
        
        $dado = [
            'quantidade' => $dados['quantidade'],
            'valor_total' => $total,
        ];
        
        $banco->update($dados['id'], $dado);
        
        echo $teste->carrinho();
    }

	//--------------------------------------------------------------------

}
