<?php

require_once 'models/cliente.php';

class clienteController{
    public function index(){
        $cliente = new Cliente();
        $todos_clientes = $cliente->getAll();
        require_once 'views/cliente/index.php';
    }
    
    public function horizontal(){
        $cliente = new Cliente();
        $cantidad = $cliente->getAll()->num_rows;
        require_once 'views/cliente/resultados.php';
    }
    public function pagina(){
        if(isset($_GET['id'])){
            $id = $_GET['id'];
            $cliente = new Cliente();
            $cliente->setId($id);
            $cliente = $cliente->getOne();
            
            $contacto = new Cliente();
            $contacto = $contacto->getContactos($id);
            
            $urls = new Cliente();
            $urls = $urls->getUrls($id);
            
     
        }
        
        
        require_once 'views/cliente/vista_pagina.php';
    }
}
