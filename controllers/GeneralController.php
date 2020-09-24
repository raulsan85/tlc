<?php

require_once 'models/web.php';
require_once 'models/cliente.php';
require_once 'models/caracteristica.php';
require_once 'models/seo.php';
require_once 'models/analitica.php';
require_once 'models/tematica.php';
require_once 'models/servicio.php';
require_once 'models/contacto.php';
require_once 'models/datoEstructurado.php';

class generalController{
    public function index(){
        require_once 'views/general/vista_pagina.php';

    }
    
    public function todos(){
        $web = new Web();
        $cantidad_webs = $web->getAll()->num_rows;
        
        $cliente = new Cliente();

        $tematica = new Tematica();

        $caracteristica = new Caracteristica();

        $contacto = new Contacto();

        $servicio = new Servicio();

        $seo = new Seo();

        $analitica = new Analitica();

        $dato_estructurado = new DatoEstructurado();

        require_once 'views/general/destacados.php';
    }
    
    public function pagina(){
        if(isset($_GET['id'])){
            $id = $_GET['id'];
            $web = new Web();
            $web->setId($id);
            $pagina = $web->getOne();
            $cliente = new Cliente();
            $cliente->setId($id);
            $costumer = $cliente->getOne();

            $caracteristica = new Caracteristica();
            $caracteristica->setId($id);
            $feature = $caracteristica->getOne();

            $seo = new Seo();
            $seo->setId($id);
            $optimizacion = $seo->getOne();

            $analitica = new Analitica();
            $analitica->setId($id);
            $analytics = $analitica->getOne();

            $servicio = new Servicio();
            $servicio->setId($id);
            $service = $servicio->getOne();

            $tematica = new Tematica();
            $tematica->setId($id);
            $temas = $tematica->getOne();
        
        }
        
        
        require_once 'views/general/vista_pagina.php';
    }
}

