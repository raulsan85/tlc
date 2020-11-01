<?php

require_once 'models/datoEstructurado.php';

class DatoController{
    public function index(){
        $dato = new DatoEstructurado();
        $todos_datos = $dato->getAll();
        require_once 'views/dato/index.php';
    }
    
    public function pagina(){
        if(isset($_GET['id'])){
            $id = $_GET['id'];
            $dato = new DatoEstructurado();
            $dato->setId($id);
            $dato = $dato->getOne($id);
            $web = new DatoEstructurado();
            $web->setId($id);
            $web= $web->getOne($id);
     
        }
        
        
        require_once 'views/dato/vista_pagina.php';
    }

    public function datos(){
        if(isset($_GET['data'])){
            $data = $_GET['data'];
            $dato = new DatoEstructurado();
            $todos_datos = $dato->getAllDato($data);
            require_once 'views/dato/vista_dato.php';

        }
        
    }   
}