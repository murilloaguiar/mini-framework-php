<?php

namespace App\Controller;
use App\Core\Controller;

class PagesController extends Controller{

    public function __construct()
    {
        
    }

    public function home(){
        $this->load('home/main');
    }

    public function quemSomos(){
        $this->load('quem-somos/quem-somos');
    }

    public function contato(){
        $this->load('contato/contato');
    }

    public function cep(){
        $this->load('cep/cep');
    }
}