<?php 
namespace App\Controllers;  
use CodeIgniter\Controller;
use App\Models\UsuarioModel;
  
class LoginController extends Controller
{
    public function index()
    {
        helper(['form']);
        echo view('login');
    } 
  
    public function loginAuth()
    {
        
        $session = \Config\Services::session();
        $userModel = new UsuarioModel();
        $email = $this->request->getVar('email');
        $senha = $this->request->getVar('senha');
        
        $data = $userModel->where('email', $email)->first();
        
        if($data){
            $pass = $data['senha'];
            $authenticatePassword = password_verify($senha, $pass);
            if($authenticatePassword){
                $ses_data = [
                    'id'    => $data['id'],
                    'nome'  => $data['nome'],
                    'email' => $data['email'],
                    'tipo'  => $data['tipo'],
                    'isLoggedIn' => TRUE
                ];
                
                $session->set($ses_data);
                return redirect()->to('/');
            
            }else{
                //$session->setFlashdata('msg', 'Senha incorreta.');
                return redirect()->to('/login');
            }
        }else{
            
            return redirect()->to('/login');
        }
    }

    public function signOut()
    {
        session()->destroy();
        return redirect()->to('/login');
    }
}