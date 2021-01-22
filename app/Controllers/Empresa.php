<?php namespace App\Controllers;

class Empresa extends BaseController
{
	public function index(){
        helper(['url','form']);
        
        $banco = model('Produto');
        
        if(!isset($_SESSION['nome_fantasia']))
            session_start();
        
        $produtos = $banco->where('empresa_id', $_SESSION['cnpj'])->findAll();
        
        $dados = ['produtos' => $produtos];
        
		echo view('empresa_produtos',$dados);
	}
    
    public function pedidos(){
        helper(['url','form']);
        
        $banco = model('Pedido');
        
        if(!isset($_SESSION['nome_fantasia']))
            session_start();
        
        $pedidos = $banco->where('empresa_id', $_SESSION['cnpj'])->findAll();
        
        $dados = ['pedidos' => $pedidos];
        
		return view('empresa_pedidos',$dados);
	}
    
    public function mostrar(){
        helper(['url','form']);
        
        if(!isset($_SESSION['nome_fantasia']))
            session_start();
        
        echo view('empresa_cadastro_produto');
    }
    
    public function inserir(){
        helper(['url','form']);
        
        $banco = model('Produto');
        
        $dados = $this->request->getPost();
        
        if(!isset($_SESSION['nome_fantasia']))
            session_start();
        
        $validation =  \Config\Services::validation();
        
            $val = $this->validate([
                'nome' => 'required',
                'descricao' => 'required',
                'arquivo' => 'uploaded[arquivo]',
                'valor' => 'required|numeric',
                ]
                ,
                [   
                'nome' => [
                    'required' => '* O nome é obrigatório ser preenchido.',
                ],
                'descricao' => [
                    'required' => '* A descrição é obrigatório ser preenchido.',
                ],
                'arquivo' => [
                    'uploaded' => '* O arquivo é obrigatório ser inserido.',
                ],
                'valor' => [
                    'required' => '* O valor é obrigatório ser preenchido.',
                    'numeric' => '* Deve ser inserido apenas números'
                ],
                ]
            );
        
        
        
        if (!$val)
        {   
            return view('empresa_cadastro_produto', ['validation' => $this->validator]); 
        }
        else
        {              
            $valor_convertido = str_replace(['.', ','], ['', '.'], $dados['valor']);
        
            $file = $this->request->getFile('arquivo');

            if($file->getSize() > 0){
                    $nomealeatorio = $file->getRandomName();
                    $file->move('upload', $dados['nome'] . $nomealeatorio);
                    $arquivo = $dados['nome'] . $nomealeatorio;
            };

            $dado_completo = [
                'empresa_id' => $_SESSION['cnpj'],
                'nome' => $dados['nome'],
                'arquivo' => $arquivo,
                'descricao' => $dados['descricao'],
                'valor' => $valor_convertido,
                'segmento' => $_SESSION['segmento'],
            ];

            $banco->insert($dado_completo);

            return view('empresa_cadastro_produto');
        }
        
        
	}
    
    public function confirmar($id){
        helper(['url','form']);
        
        $banco = model('Pedido');
        $banco_produto = model('Produto');
        
        $dado = ['status' => 'Confirmado'];
        
        $pedido = $banco->find($id);
        $produto = $banco_produto->find($pedido['produto_id']);
        
        $soma = $produto['quantidade_comprada'];
        
        $soma = $soma + 1;
        
        $dado_produto = ['quantidade_comprada' => $soma];
        
        $banco_produto->update($produto['id'], $dado_produto);
        
        $banco->update($id, $dado);
        
        echo $this->pedidos();
    }
    
    public function cancelar($id){
        helper(['url','form']);
        
        $banco = model('pedido');
        
        $dado = ['status' => 'Cancelado'];
        
        $banco->update($id, $dado);
        
        echo $this->pedidos();
    }

	//--------------------------------------------------------------------

}
