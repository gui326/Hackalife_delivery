<?php namespace App\Controllers;

class Usuario extends BaseController
{
	public function index(){
        helper(['url','form']);
        
        $banco = model('Empresa');
        
        if(!isset($_SESSION['nome']))
            session_start();
        
        $empresas = $banco->findAll();
        
        $dados = ['dados' => $empresas];
        
		echo view('usuario_empresas',$dados);
	}
    
    public function pedidos(){
        helper(['url','form']);
        
        $banco_pedido = model('Pedido');
        
        if(!isset($_SESSION['nome']))
            session_start();
        
        $pedidos = $banco_pedido->where('cliente_id', $_SESSION['cpf'])->findAll();
        
        $dados = ['pedidos' => $pedidos, ];
        
		return view('usuario_pedidos',$dados);
	}
    
    public function carrinho(){
        helper(['url','form']);
        
        $banco = model('Cliente_produto');
        $banco2 = model('Endereco_cliente');
        
        if(!isset($_SESSION['nome']))
            session_start();
        
        $produtos = $banco->where('cliente_id', $_SESSION['cpf'])->findAll();
        
        $cliente = $banco2->find($_SESSION['cpf']);
        
        $dados = ['produtos' => $produtos, 'rua' => $cliente['rua'], 'numero' => $cliente['numero'],];
        
		return view('usuario_carrinho',$dados);
	}
    
    public function mostrar($id){
        helper(['url','form']);
        
        $banco = model('Produto');
        
        $produto = $banco->find($id);
        
        if(!isset($_SESSION['nome']))
            session_start();
        
        return view('usuario_inserir',$produto);
    }
    
    public function inserir(){
        helper(['url','form']);
        
        $banco = model('Cliente_produto');
        
        $dados = $this->request->getPost();
        
        $valor =  (int)$dados['quantidade'] * (float)$dados['valor'];
        
        if(!isset($_SESSION['nome']))
            session_start();
        
        $dado_completo = [
            'cliente_id' => $_SESSION['cpf'],
            'produto_id' => $dados['id'],
            'quantidade' => $dados['quantidade'],
            'valor_total' => $valor,
        ];
        
        $banco->insert($dado_completo);
        
		echo $this->index();
	}
    
    public function finalizar(){
        helper(['url','form']);
        
        $banco = model('Pedido');
        $banco2 = model('Cliente_produto');
        $banco3 = model('Produto');
        $banco4 = model('Nota');
        
        $dados = $this->request->getPost();
        
        if(!isset($_SESSION['nome']))
            session_start();
        
        $tt = (double)$dados['total'];
        
        $nota = ['total' => $tt];
        
        $not = $banco4->insert($nota);
        
        for($i = 1; $i <= $dados['quantidade'];$i++){
            $dado = $banco2->find($dados['id'.$i]);
            $empresa = $banco3->find($dado['produto_id']);
            
            $dados_completo = [
                'cliente_id' => $_SESSION['cpf'],
                'produto_id' => $dado['produto_id'],
                'empresa_id' => $empresa['empresa_id'],
                'quantidade' => $dados['qt'.$i],
                'metodo_pagamento' => $dados['metodo'],
                'status' => 'pendente',
                'nota_id' => $not,
            ];
            
            $banco->insert($dados_completo);
            
            $banco2->delete($dados['id'.$i]);
            
        };
        
        
        
        
        
		echo $this->index();
	}

	//--------------------------------------------------------------------

}
