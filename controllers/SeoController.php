<?php

require_once 'models/seo.php';

class SeoController{
    public function index(){
        $seo = new Seo();
        $todos_seo = $seo->getAll();
        require_once 'views/seo/index.php';
    }
    
    public function horizontal(){
        $cliente = new Cliente();
        $cantidad = $cliente->getAll()->num_rows;
        require_once 'views/cliente/resultados.php';
    }
}