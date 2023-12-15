<?php 
namespace App\Controllers;

use CodeIgniter\Controller;

class Login extends Controller{
    public function index(){
        
    
return view('login');
        
    }

    public function login_store(){
        $rules = [
            'id' => 'required'
        ];
        
        $validated = $this->validate($rules, [
            'id' => ['required' => 'O id é obrigatório'],
        ]);
        if (!$validated) {
            return redirect()->route('cadastro')->withInput()->with('errors', $this->validator->getErrors());
        }
        $dados = $this->request->getPost('id');
        if($dados=='1422'){
            return redirect()->route('home_login')->withInput()->with('errors', $this->validator->getErrors());
        }else{
            echo '<script>
            Swal.fire({
                title: "Sucesso!",
                text: "Operação realizada com sucesso!",
                icon: "success",
            });
          </script>';
            return redirect()->route('login')->withInput()->with('errors', $this->validator->getErrors());
        }
    }
}