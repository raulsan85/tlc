<?php

require_once 'models/web.php';

class webController{
    public function index(){
        $web = new Web();
        $cantidad = $web->getAll()->num_rows;
        require_once 'views/web/index.php';

    }
    
    public function mostrar(){
        var_dump($_POST);
        $web = new Web();
        //Usamos getAll para conseguir todas:
        $todas_webs = $web->getAll();
        
        //Cargamos la vista
        require_once 'views/web/resultados.php';
    }
    
    public function seleccion(){
        $web = new Web();
        if(isset($_POST['web'])){
            $columna_web = $web->getWebs();
        }
        if(isset($_POST['url'])){
            $columna_url = $web->getUrls();
        }
        if(isset($_POST['ano'])){
            $columna_ano = $web->getAnos();
        }
        if(isset($_POST['servidor'])){
            $columna_servidor = $web->getServidores();
        }
        require_once 'views/web/index.php';
    }
    
    public function horizontal(){
        $web = new Web();
        $cantidad = $web->getAll()->num_rows;
        require_once 'views/web/resultados.php';
    }
    
    public function pagina(){
        $web = new Web();
        $id = 1;
        $web->setId($id);
        $pagina = $web->getOne();
        require_once 'views/web/pagina_web.php';
    }
}
