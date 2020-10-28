<?php

require_once 'models/servicio.php';

class ServicioController{
    public function index(){
        $servicio = new Servicio();
        $todos_servicios = $servicio->getAll();
        require_once 'views/servicio/index.php';
    }
    
    public function horizontal(){
        $cliente = new Cliente();
        $cantidad = $cliente->getAll()->num_rows;
        require_once 'views/cliente/resultados.php';
    }
    
    public function servicio(){
        if(isset($_GET['serv'])){
            $serv = $_GET['serv'];
            $servicio = new Servicio();
            $todos_servicios = $servicio->getAllServicio($serv);
            require_once 'views/servicio/vista_servicio.php';

        }
        
    }

}