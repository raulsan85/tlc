<?php

require_once 'models/contacto.php';

class contactoController{
    public function index(){
        $contacto = new Contacto();
        $todos_contactos = $contacto->getAll();
        require_once 'views/contacto/index.php';
    }
    
    public function horizontal(){
        $cliente = new Cliente();
        $cantidad = $cliente->getAll()->num_rows;
        require_once 'views/cliente/resultados.php';
    }
    
    public function pagina(){
        if(isset($_GET['id'])){
            $id = $_GET['id'];
            $contacto = new Contacto();
            $contacto->setId($id);
            $contacto = $contacto->getOne();
            
            $urls = new Contacto();
            $urls->setId($id);
            $urls = $urls->getUrls($id);
            
    
        }
        
        
        require_once 'views/contacto/vista_pagina.php';
    }
    
    public function crear(){
        if(isset($_GET['id'])){
            $id = $_GET['id'];
            $contacto = new Contacto();
            $contacto->setCliente_id($id);
            $contacto = $contacto->getCliente($id);
        }else{
            //var_dump($_POST);
            $string = $_POST['cliente'];
            $array = explode(" ", $string);
            //var_dump($array);
            $id = $array[0];
            //var_dump($id);
            $contacto = new Contacto();
            $contacto->setCliente_id($id);
            $contacto = $contacto->getCliente($id);
        }
        require_once 'views/contacto/formulario_add.php';

    }
    
    public function guardar(){
        if(isset($_POST)){
            //Creamos el array errores para recoger los errores de validacion:
            $errores = array();            //var_dump($_POST);
            //Validacion: Creamos una variable para cada dato y hacemos una ternaria para 
            //comprobar si existe y si existe el valor sera $_POST y si no sera false:
            $nombre = isset($_POST['nombre_contacto']) ? $_POST['nombre_contacto']: false;
            $apellidos = isset($_POST['apellidos']) ? $_POST['apellidos']: false;
            $cargo = isset($_POST['cargo']) ? $_POST['cargo']: false;
            $telefono = isset($_POST['telefono']) ? $_POST['telefono']: false;
            $email = isset($_POST['email']) ? $_POST['email']: false;
            $cliente_id = isset($_POST['cliente_id']) ? $_POST['cliente_id']: false;
            //var_dump($nombre);
            //var_dump($url);
            //var_dump($ano);
            //var_dump($servidor);
            
            //Validacion de cada campo:
            if (!empty($nombre) && !is_numeric($nombre) && !preg_match("/[0-9]/", $nombre)) {
                $nombre_validado = true;
            } else {
                $nombre_validado = false;
                $errores['nombre'] = "El nombre está vacio o contiene caracteres extraños";
            }
           
            if (!is_numeric($apellidos) && !preg_match("/[0-9]/", $apellidos)) {
                $apellidos_validados = true;
            } else {
                $apellidos_validados = false;
                $errores['apellidos'] = "Los apellidos contienen caracteres extraños";
            }
            
            
            if (!is_numeric($cargo) && !preg_match("/[0-9]/", $cargo)) {
                $cargo_validado = true;
            } else {
                $cargo_validado = false;
                $errores['cargo'] = "El cargo contiene caracteres extraños";
            }

            if (is_numeric($telefono) && !preg_match("(\+34|0034|34)?[ -]*(6|7)[ -]*([0-9][ -]*){8}", $telefono)) {
                $telefono_validado = true;
            } else {
                $telefono_validado = false;
                $errores['telefono'] = "El telefono no es correcto";
            }
            
            if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $email_validado = true;
            } else {
                $email_validado = false;
                $errores['email'] = "El email no es valido. Debe tener formato de email (x@x.com)";
            }
            
            //Comprobamos que el formulario no errores y en ese caso guardamos:
            if(count($errores)==0){
                //var_dump($cliente_id);
                $contacto = new Contacto();
                $contacto->setNombre($nombre);
                $contacto->setApellidos($apellidos);
                $contacto->setCargo($cargo);
                $contacto->setTelefono($telefono);
                $contacto->setEmail($email);
                $contacto->setCliente_id($cliente_id);
                //Con esto ya tendriamos el objeto montado. Ahora llamamos al metodo save que hay en el modelo:
                $save = $contacto->save();
                $save_pivot = $contacto->save_pivot($cliente_id);
                if($save && $save_pivot){
                    //Si se guarda, creamos una sesion y dentro el indice siguiente:
                    $_SESSION['contacto_ok'] = "El contacto se ha guardado correctamente";
                }else{
                    //Si no se guarda, creamos el siguiente indice:
                    $_SESSION['contacto_error']['save'] = "Se ha producido un error";
                }

                
            }else{
                //Si hay algun error de validacion, creamos el siguiente indice:
                $_SESSION['contacto_error'] = $errores;
            }        
        }else{
            //SI no llega nada por post
            $_SESSION['contacto_error'] = $errores;
        }
        header('Location:'.base_url.'contacto/nuevoContacto');

    }

    public function nuevoContacto(){
        $contacto = new Contacto();
        $contacto = $contacto->getLast();
        require_once 'views/contacto/guardado.php';
    }
}
