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

    public function codigo(){
        if(isset($_GET['cp'])){
            $cp = $_GET['cp'];
            $codigo = new Cliente();
            $todos_codigos = $codigo->getAllCp($cp);
            require_once 'views/cliente/vista_codigo.php';

        }
        
    }
    
    public function ciudad(){
        if(isset($_GET['city'])){
            $city = $_GET['city'];
            $ciudad = new Cliente();
            $todas_ciudades = $ciudad->getAllCiudad($city);
            require_once 'views/cliente/vista_ciudad.php';

        }
        
    }

    public function provincia(){
        if(isset($_GET['prov'])){
            $prov = $_GET['prov'];
            $provincia = new Cliente();
            $todas_provincias = $provincia->getAllProvincia($prov);
            require_once 'views/cliente/vista_provincia.php';

        }
        
    }

    public function baja(){
        if(isset($_GET['est'])){
            $est = $_GET['est'];
            $baja = new Cliente();
            $todas_bajas = $baja->getAllBaja($est);
            require_once 'views/cliente/vista_baja.php';

        }
        
    }

    public function division(){
        if(isset($_GET['div'])){
            $div = $_GET['div'];
            $division = new Cliente();
            $todas_divisiones = $division->getAllDivision($div);
            require_once 'views/cliente/vista_division.php';

        }
        
    }

}
