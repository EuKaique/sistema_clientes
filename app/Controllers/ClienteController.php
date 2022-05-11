<?php

namespace App\Controllers;

//use App\Controllers\BaseController;
use App\Models\ClienteModel;
use App\Models\UsuarioModel;
use CodeIgniter\RESTful\ResourceController;

class ClienteController extends ResourceController
{
    private $modelCliente;
    private $modelUsuario;

    public function __construct(){
        $this->modelCliente = new ClienteModel();
        $this->modelUsuario = new UsuarioModel();
    }

    //Lista clientes cadastrados (GET)
    public function index()
    {
        $session = \Config\Services::session();
        $data = [
            'clientes' => $this->modelCliente->paginate(100),
            'nome'     => $session->get('nome'),
            'tipo'     => $session->get('tipo')
            //'pager'  => $this->model->pager
        ];       
        return view('clientes', $data);
    }
    //Cadastra um novo cliente (POST)
    public function create()
    {
        return view('create');
    }
    //Guarda os dados no banco
    public function store()
    {
        $response = [];

        $novoCliente['nome']     = $this->request->getPost('nome');
        $novoCliente['email']    = $this->request->getPost('email');
        $novoCliente['telefone'] = $this->request->getPost('telefone');
        $novoCliente['cpf']      = $this->request->getPost('cpf');

        if($this->modelCliente->insert($novoCliente)){
            return view('mensagens', [
                'mensagem' => 'Cliente adicionado com sucesso!'
            ]);
        }else{
            echo "Erro ao adicionar";
        }

    }
    //Atualiza os dados no banco
    public function updatedStore()
    {
        if($this->modelCliente->save($this->request->getPost())){
            return view('mensagens', [
                'mensagem' => 'Cliente atualizado com sucesso!'
            ]);
        }else{
            echo "Erro ao atualizar";
        }
    }
    //Redireciona para a view que vai atualizar os dados do cliente (PUT)
    public function edit($id)
    {
        return view('edit',[
            'cliente' => $this->modelCliente->find($id)
        ]);
    }
    //Apaga os dados do cliente (DELETE)
    public function delete($id)
    {
        if($this->modelCliente->delete($id)){
            return view('mensagens', [
                'mensagem' => 'Cliente excluído com sucesso!'
            ]);
        }else{
            echo "Erro ao excluir";
        }
    }

}    



