<?php 
//Carga de autoload
require_once 'autoload.php';

//Carga de header
require_once 'views/layout/header.php';

//Carga del body
require_once 'views/layout/body.php';


//Comprobacion de que llega el controlador por la URL
if(isset($_GET['controller'])){
    $nombre_controlador = $_GET['controller'].'Controller';
}else{
    echo "La página que buscas no existe";
    exit();
}

//Comprobacion de que existe el controlador:
if(class_exists($nombre_controlador)){
    $controlador = new $nombre_controlador();
    
    if(isset($_GET['action'])&& method_exists($controlador, $_GET['action'])){
        $action = $_GET['action'];
        $controlador->$action();
    }else{
        echo "La página que buscas no existe";
    }
}else{
    echo "La página que buscas no existe";
}

//Carga del footer
require_once 'views/layout/footer.php';

?>

