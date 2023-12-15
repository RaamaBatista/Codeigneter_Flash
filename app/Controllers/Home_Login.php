<?php 
namespace App\Controllers;

use CodeIgniter\Controller;

class Home_Login extends Controller{
    public function index(){
        return view('home_login');
    }
}