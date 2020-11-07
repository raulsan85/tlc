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
require_once 'models/plugin.php';

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

        $plugin = new Plugin();

        require_once 'views/general/destacados.php';
    }
    
    public function pagina(){
        if(isset($_GET['id'])){
            $id = $_GET['id'];
            $web = new Web();
            $web->setId($id);
            $web = $web->getOne();

            $cliente_id = $web->cliente_id;
            $cliente = new Cliente();
            $cliente->setId($cliente_id);
            $cliente = $cliente->getOneGeneral();
            
            $servicio = new Servicio();
            $servicio->setCliente_id($cliente_id);
            $servicio = $servicio->getOneGeneral();
            

            $tematica = new Tematica();
            $tematica = $tematica->getOne($id);
            
            
            $caracteristica = new Caracteristica();
            $caracteristica->setWeb_id($id);
            $caracteristica = $caracteristica->getOneGeneral();
            
            $seo = new Seo();
            $seo->setWeb_id($id);
            $seo = $seo->getOneGeneral();

            $analitica = new Analitica();
            $analitica->setWeb_id($id);
            $analitica = $analitica->getOneGeneral();
            
            $dato_estructurado = new DatoEstructurado();
            $dato_estructurado = $dato_estructurado->getOne($id);
        
            $plugin = new Plugin();
            $plugin = $plugin->getOne($id);

        }
        
        
        require_once 'views/general/vista_pagina.php';
    }

    public function crear(){
        require_once 'views/general/formulario_add.php';
    }
}

