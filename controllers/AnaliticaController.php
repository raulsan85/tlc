<?php

require_once 'models/analitica.php';

class AnaliticaController{
    public function index(){
        $analitica = new Analitica();
        $todas_analiticas = $analitica->getAll();
        require_once 'views/analitica/index.php';
    }
    
    public function horizontal(){
        $cliente = new Cliente();
        $cantidad = $cliente->getAll()->num_rows;
        require_once 'views/cliente/resultados.php';
    }
    public function pagina(){
        if(isset($_GET['id'])){
            $id = $_GET['id'];
            $analitica = new Analitica();
            $analitica->setId($id);
            $analitica = $analitica->getOne();
     
        }
        
        
        require_once 'views/analitica/vista_pagina.php';
    }    
}