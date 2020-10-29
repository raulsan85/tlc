<?php

require_once 'models/tematica.php';

class TematicaController{
    public function index(){
        $tematica = new Tematica();
        $todas_tematicas = $tematica->getAll();
        require_once 'views/tematica/index.php';
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

    public function tematicas(){
        if(isset($_GET['tem'])){
            $tem = $_GET['tem'];
            $tematica = new Tematica();
            $todas_tematicas = $tematica->getAllTematica($tem);
            require_once 'views/tematica/vista_tematica.php';

        }
        
    }   
}