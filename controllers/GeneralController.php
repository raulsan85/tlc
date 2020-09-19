<?php

require_once 'models/web.php';
require_once 'models/cliente.php';
require_once 'models/caracteristica.php';
require_once 'models/seo.php';
require_once 'models/analitica.php';

class generalController{
    public function index(){
        require_once 'views/general/vista_pagina.php';

    }
      
    public function pagina(){
        $id = 4;
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
        
        require_once 'views/general/vista_pagina.php';
    }
}

