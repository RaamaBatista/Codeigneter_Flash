<?php 
namespace App\Controllers;

use CodeIgniter\Controller;

class Buscar extends Controller{
    public function index(){

   
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
    
    $cpf = $this->request->getGet('campoDeBusca');
    $status = $this->request->getGet('campoDeBusca');
    $nome = $this->request->getGet('campoDeBusca');
    $localidade = $this->request->getGet('campoDeBusca');
    $id = $this->request->getGet('campoDeBusca');


    $data = [
        'cpf' => $cpf,
        'staus' => $status,
        'nome' => $nome,
        'localidade' => $localidade,
        'id' => $id,
    ];


    $query = $db->query("SELECT cpf, status, nome, localidade, id FROM testando WHERE cpf = '$cpf' or status = '$status' or nome = '$nome' or localidade = '$localidade' or id = '$id'");
    $results = $query->getResult();

  
    $data['results'] = $results;

    return view('buscar', $data);

  }
  }