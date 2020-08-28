<?php

require_once 'models/web.php';

class webController{
    public function index(){
        require_once 'views/web/destacados.php';

    }
    
    public function mostrar(){
        var_dump($_POST);
        $web = new Web();
        //Usamos getAll para conseguir todas:
        $todas_webs = $web->getAll();
        
        //Cargamos la vista
        require_once 'views/web/destacados.php';
    }
}
