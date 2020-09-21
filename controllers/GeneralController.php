<?php

require_once 'models/web.php';
require_once 'models/cliente.php';
require_once 'models/caracteristica.php';
require_once 'models/seo.php';
require_once 'models/analitica.php';
require_once 'models/tematica.php';
require_once 'models/servicio.php';

class generalController{
    public function index(){
        require_once 'views/general/vista_pagina.php';

    }
    
    public function todos(){
        $web = new Web();
        $cantidad_webs = $web->getAll()->num_rows;
        
        $cliente = new Cliente();
        $cantidad_clientes = $cliente->getAll()->num_rows;

        $tematica = new Tematica();
        $cantidad_tematicas = $tematica->getAll()->num_rows;

        $caracteristica = new Caracteristica();
        $cantidad_caracteristicas = $caracteristica->getAll()->num_rows;

        $contacto = new Contacto();
        $cantidad_contactos = $contacto->getAll()->num_rows;

        $servicio = new Servicio();
        $cantidad_servicioss = $servicio->getAll()->num_rows;

        $seo = new Seo();
        $cantidad_seos = $seo->getAll()->num_rows;

        $analitica = new Analitica();
        $cantidad_analiticass = $analitica->getAll()->num_rows;

        $dato_estructurado = new DatoEstructurado();
        $cantidad_datos = $dato_estructurado->getAll()->num_rows;

        require_once 'views/web/resultados.php';
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

