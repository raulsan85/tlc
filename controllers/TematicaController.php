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
            $tematica = new Tematica();
            $tematica->setId($id);
            $tematica = $tematica->getOne($id);
            $web = new Tematica();
            $web->setId($id);
            $web = $web->getOne($id);
            
        }
        
        
        require_once 'views/tematica/vista_pagina.php';
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