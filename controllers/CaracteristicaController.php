<?php

require_once 'models/caracteristica.php';

class CaracteristicaController{
    public function index(){
        $caracteristica = new Caracteristica();
        $todas_caracteristicas = $caracteristica->getAll();
        require_once 'views/caracteristica/index.php';
    }
    
    public function horizontal(){
        $cliente = new Cliente();
        $cantidad = $cliente->getAll()->num_rows;
        require_once 'views/cliente/resultados.php';
    }
    public function pagina(){
        if(isset($_GET['id'])){
            $id = $_GET['id'];
            $caracteristica = new Caracteristica();
            $caracteristica->setId($id);
            $caracteristica = $caracteristica->getOne();
     
        }
        
        
        require_once 'views/caracteristica/vista_pagina.php';
    }
}