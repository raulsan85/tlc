<?php

require_once 'models/web.php';

class webController{
    public function index(){
        $web = new Web();
        $todas_webs = $web->getAll();
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
        if(isset($_GET['id'])){
            $id = $_GET['id'];
            $web = new Web();
            $web->setId($id);
            $web = $web->getOne();
     
        }
        
        
        require_once 'views/web/vista_pagina.php';
    }
    
    public function crear(){
        if(isset($_GET['id'])){
            $id = $_GET['id'];
            $web = new Web();
            $web->setCliente_id($id);
            $web = $web->getCliente($id);
        }else{
            //var_dump($_POST);
            $string = $_POST['cliente'];
            $array = explode(" ", $string);
            //var_dump($array);
            $id = $array[0];
            //var_dump($id);
            $web = new Web();
            $web->setCliente_id($id);
            $web = $web->getCliente($id);
        }
        require_once 'views/web/formulario_add.php';

    }
    
    public function guardar(){
        if(isset($_POST)){
            //Creamos el array errores para recoger los errores de validacion:
            $errores = array();            //var_dump($_POST);
            //Validacion: Creamos una variable para cada dato y hacemos una ternaria para 
            //comprobar si existe y si existe el valor sera $_POST y si no sera false:
            $nombre = isset($_POST['nombre_web']) ? $_POST['nombre_web']: false;
            $url = isset($_POST['url']) ? $_POST['url']: false;
            $ano = isset($_POST['ano']) ? $_POST['ano']: false;
            $servidor = isset($_POST['servidor']) ? $_POST['servidor']: false;
            $cliente_id = isset($_POST['cliente_id']) ? $_POST['cliente_id']: false;
            //var_dump($nombre);
            //var_dump($url);
            //var_dump($ano);
            //var_dump($servidor);
            
            //Validacion de cada campo:
            if (!empty($nombre)) {
                $nombre_validado = true;
            } else {
                $nombre_validado = false;
                $errores['nombre'] = "El nombre de la web está vacio. Rellenalo";
            }
           
            if (!empty($url) && !filter_var($url, FILTER_VALIDATE_URL) === false) {
                $url_validada = true;
            } else {
                $url_validada = false;
                $errores['url'] = "La url no es valida";
            }
            
            
            if (!empty($servidor)) {
                $servidor_validado = true;
            } else {
                $servidor_validado = false;
                $errores['servidor'] = "El servidor esta vacío";
            }

            //Comprobamos que el formulario no errores y en ese caso guardamos:
            if(count($errores)==0){
                var_dump($cliente_id);
                $web = new Web();
                $web->setWeb($nombre);
                $web->setUrl($url);
                $web->setAno($ano);
                $web->setServidor($servidor);
                $web->setCliente_id($cliente_id);
                //Con esto ya tendriamos el objeto montado. Ahora llamamos al metodo save que hay en el modelo:
                $save = $web->save();
                if($save){
                    //Si se guarda, creamos una sesion y dentro el indice siguiente:
                    $_SESSION['web_ok'] = "La web se ha guardado correctamente";
                }else{
                    //Si no se guarda, creamos el siguiente indice:
                    $_SESSION['web_error']['save'] = "Se ha producido un error";
                }
            }else{
                //Si hay algun error de validacion, creamos el siguiente indice:
                $_SESSION['web_error'] = $errores;
            }        
        }else{
            //SI no llega nada por post
            $_SESSION['web_error'] = $errores;
        }
        header('Location:'.base_url.'web/nuevaWeb');

    }

    public function nuevaWeb(){
        $web = new Web();
        $web = $web->getLast();
        require_once 'views/web/guardado.php';
    }
    

            
}
