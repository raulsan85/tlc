<?php 
//Carga de autoload
require_once 'autoload.php';

//Carga de la base de datos
require_once 'config/db.php';

//Carga de los parametros
require_once 'config/parameters.php';

//Carga de header
require_once 'views/layout/header.php';

//Funcion para mostrar el error 404
function show_error(){
    $error = new errorController();
    $error->index();    
}

//Comprobacion de que llega el controlador por la URL
if(isset($_GET['controller'])){
    $nombre_controlador = $_GET['controller'].'Controller';
}elseif(!isset($_GET['controller'])&&!isset($_GET['action'])){
    $nombre_controlador = controller_default;
}else{
    show_error();
    exit();
}

//Comprobacion de que existe el controlador:
if(class_exists($nombre_controlador)){
    $controlador = new $nombre_controlador();
    
    if(isset($_GET['action'])&& method_exists($controlador, $_GET['action'])){
        $action = $_GET['action'];
        $controlador->$action();
    }elseif(!isset($_GET['controller'])&&!isset($_GET['action'])){
        $action_default = action_default;
        $controlador->$action_default();
    }else{
        show_error();
    }
}else{
    show_error();
}

//Carga del footer
require_once 'views/layout/footer.php';

?>

