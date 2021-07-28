<?php
namespace App\Core;

class RouterCore{
    private $uri;
    private $method;
    private $getArr= [];

    public function __construct(){
        $this->initialize();
        require_once('../App/Config/Router.php');
        $this->execute();
    }

    private function initialize(){
        $this->method = $_SERVER['REQUEST_METHOD'];
        
        $uri = $_SERVER['REQUEST_URI'];

        $ex = explode('/', $uri);

        $uri = $this->normalizeURI($ex);

        for ($i=0; $i < UNSET_URI_COUNT; $i++) { 
            /* unset remove indices */
            unset($uri[$i]);
        }

        /* implode tranfosma cada posicao do array em uma variavel onde cada indice recebe /, nesse caso */
        $this->uri = implode('/',$this->normalizeURI($uri));
       
        if (DEBUG_URI) {
            dd($this->uri);
        }
    }

    private function normalizeURI($arr){

        /* array_filter remove os indices nulos
        array_values padroniza os indices começando do zero*/
        return array_values(array_filter($arr));
    }

    private function get($router, $call){
        $this->getArr [] = [
            'router' => $router,
            'call' => $call
        ];
    }

    private function execute(){
        switch ($this->method) {
            case 'GET':
                $this->executeGet();
                break;

            case 'POST':
                # code...
                break;
            
            default:
                # code...
                break;
        }
    }

    private function executeGet(){
        foreach ($this->getArr as $get) {
            $r = substr($get['router'],1);

            if (substr($r, -1) == '/') {
                $r = substr($r, -1);
            }

            if ($this->uri == $r) {
                if (is_callable($get['call'])) {
                    $get['call']();
                    break;
                }else{
                    $this->executeController($get['call']);
                }
            }
        }
    }

    private function executeController($get){
        $ex = explode('@', $get);
        
        if (!isset($ex[0]) || !isset($ex[1])) {
            (new \App\Controller\MessageController)->message('Dados invalidos','Controller ou metodo não encontrado', 404);
            return;
        }

        $controller = 'App\\Controller\\'. $ex[0];

        if (!class_exists($controller)) {
            (new \App\Controller\MessageController)->message('Dados invalidos','Controller não encontrado', 404);
            return;
        }

        if (!method_exists($controller, $ex[1])) {
            (new \App\Controller\MessageController)->message('Dados invalidos','Metodo não encontrado', 404);
            return;
        }

        call_user_func_array([new $controller, $ex[1]],[]);
    }

}