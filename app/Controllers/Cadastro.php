<?php
namespace App\Controllers;

use CodeIgniter\Controller;


class Cadastro extends Controller
{
    public function index()
    {
        return view('cadastro');
    }

    public function store()
    {
        $rules = [
            'nome' => 'required',
            'cpf' => 'required|max_length[11]',
            'radio-group' => 'required',
            'cep' => 'required|max_length[8]',

        ];

        $validated = $this->validate($rules, [
            'nome' => ['required' => 'O nome é obrigatório'],
            'cpf' => ['required' => 'O CPF é obrigatório'],
            'radio-group' => ['required' => 'Selecione uma opção'],
            'cep' => ['required' => 'O CEP é obrigatório'],
        ]);
        if ($validated) {
            $cepValue = $this->request->getVar('cep');
            $apiData = $this->callApi($cepValue);
            
            if (array_key_exists('erro', $apiData)) {
                return $this->response->setJSON(['erro' => 'CEP não encontrado']);
            }
            
            $this->saveToDatabase($apiData, $cepValue);
            
            return view('cadastro_store');
            return $this->response->setJSON($apiData);
        } else{
            return redirect()->route('cadastro')->withInput()->with('errors', $this->validator->getErrors());
        }

        
    }

    private function callApi($cepValue)
    {
        $apiUrl = "https://viacep.com.br/ws/{$cepValue}/json/";
        $response = file_get_contents($apiUrl);

        if ($response === false) {
            return ['erro' => 'Erro ao acessar a API'];
        }

        $data = json_decode($response, true);

        if ($data === null) {
            return ['erro' => 'Erro ao decodificar a resposta JSON'];
        }

        return $data;


    }

    private function saveToDatabase($apiData, $cepValue)
    {
        $custom = [
            'DSN' => '',
            'hostname' => 'localhost',
            'username' => 'root',
            'password' => '',
            'database' => 'flash_entregas',
            'DBDriver' => 'MySQLi',
            'DBPrefix' => '',
            'pConnect' => false,
            'DBDebug' => true,
            'charset' => 'utf8',
            'DBCollat' => 'utf8_general_ci',
            'swapPre' => '',
            'encrypt' => false,
            'compress' => false,
            'strictOn' => false,
            'failover' => [],
            'port' => 3306,
        ];

        $db = db_connect($custom);

    
        $data = [
            'nome' => $this->request->getVar('nome'),
            'cpf' => $this->request->getVar('cpf'),
            'status' => $this->request->getVar('radio-group'),
            'cep' => $cepValue,
            'logradouro' => $apiData['logradouro'] ?? '',
            'localidade' => $apiData['localidade'] ?? '',
            'bairro' => $apiData['bairro'] ?? '',
            'uf' => $apiData['uf'] ?? '',
        ];
    

        $db->table('testando')->insert($data);
    }




}
