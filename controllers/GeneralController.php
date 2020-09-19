<?php

require_once 'models/web.php';
require_once 'models/clientes.php';

class generalController{
    public function index(){
        require_once 'views/general/vista_pagina.php';

    }
      
    public function pagina(){
        $web = new Web();
        $id = 1;
        $web->setId($id);
        $pagina = $web->getOne();
        $cliente = new Cliente();
        $id = 1;
        $cliente->setId($id);
        $costumer = $cliente->getOne();
        
        require_once 'views/general/vista_pagina.php';
    }
}

