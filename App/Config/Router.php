<?php

$this->get('/', function(){
    echo 'home';
});

$this->get('/home', function(){
    echo 'estamos na home';
});

$this->get('/about/teste', function(){
    echo 'estamos na about teste';
});
