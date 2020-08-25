<?php

require_once 'models/web.php';

class webController{
    public function index(){
        require_once 'views/web/destacados.php';

    }
    
    public function mostrar(){
        if(isset($_POST)){
            var_dump($_POST);
            if(isset($_POTS['direccion'])){
                echo "direccion";
            }else{
                echo "NO";
            }
        }
    }
}
