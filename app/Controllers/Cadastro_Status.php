<?php
namespace App\Controllers;

use CodeIgniter\Controller;

class Cadastro_Status extends Controller
{
    public function index()
    {
        return view('cadastro_status');
    }
    public function store()
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
        $rules = [
            'id' => 'required',
            'radio-group' => 'required',

        ];

        $validated = $this->validate($rules, [
            'id' => ['required' => 'O id é obrigatório'],
            'radio-group' => ['required' => 'Selecione uma opção'],
        ]);

        if (!$validated) {
            return redirect()->route('cadastro_status')->withInput()->with('errors', $this->validator->getErrors());
        } else {

            $id = $this->request->getPost('id');
            $status = $this->request->getVar('radio-group');

            $data = [
                'id' => $id,
                'status' => $status,
            ];

            $query = $db->query("UPDATE  testando SET status = '$status' WHERE id = '$id' ");
            return view('cadastro_status_store');

        }


    }
}