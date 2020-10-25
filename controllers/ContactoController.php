<?php

require_once 'models/contacto.php';

class contactoController{
    public function index(){
        $contacto = new Contacto();
        $todos_contactos = $contacto->getAll();
        require_once 'views/contacto/index.php';
    }
    
    public function horizontal(){
        $cliente = new Cliente();
        $cantidad = $cliente->getAll()->num_rows;
        require_once 'views/cliente/resultados.php';
    }
    
    public function pagina(){
        if(isset($_GET['id'])){
            $id = $_GET['id'];
            $contacto = new Contacto();
            $contacto->setId($id);
            $contacto = $contacto->getOne();
            
            $urls = new Contacto();
            $urls->setId($id);
            $urls = $urls->getUrls($id);
            
    
        }
        
        
        require_once 'views/contacto/vista_pagina.php';
    }
}
