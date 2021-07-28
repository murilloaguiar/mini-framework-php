<?php
namespace App\Controller;

use App\Core\Controller;

class MessageController extends Controller{
    
    public function message(string $title, string $message, $code = 404){
        http_response_code($code);
        $this->load('message/message', [
            'title' => $title,
            'message' => $message
        ]);
    }
}