<?php
namespace App\Controller;

use App\Core\Controller;
use App\Classes\Input;

class PesquisaController extends Controller{
    
    public function pesquisar(){
        dd(Input::get('pes'));
    }
}