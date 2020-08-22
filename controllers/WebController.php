<?php

require_once 'models/web.php';

class webController{
    public function index(){
        echo "Hala"
        $web = new Web();
        //Sacamos todas las columnas de web
        $webs = $web->getAll();
        //Cargamos la vista
        require_once 'views/web/index.php';

    }
}
