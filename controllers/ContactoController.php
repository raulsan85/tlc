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
}
