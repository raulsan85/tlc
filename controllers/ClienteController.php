<?php

class clienteController{
    public function index(){
        echo "hola hola";
    }
    
    public function horizontal(){
        $cliente = new Cliente();
        $cantidad = $cliente->getAll()->num_rows;
        require_once 'views/cliente/resultados.php';
    }
}
