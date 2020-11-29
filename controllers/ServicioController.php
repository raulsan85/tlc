<?php

require_once 'models/servicio.php';
require_once 'models/cliente.php';

class ServicioController{
    public function index(){
        $servicio = new Servicio();
        $todos_servicios = $servicio->getAll();
        require_once 'views/servicio/index.php';
    }
    
    public function horizontal(){
        $cliente = new Cliente();
        $cantidad = $cliente->getAll()->num_rows;
        require_once 'views/cliente/resultados.php';
    }
    
    public function servicio(){
        if(isset($_GET['serv'])){
            $serv = $_GET['serv'];
            $servicio = new Servicio();
            $todos_servicios = $servicio->getAllServicio($serv);
            require_once 'views/servicio/vista_servicio.php';

        }
        
    }

    public function crear(){
        if(isset($_GET['id'])){
            $id = $_GET['id'];
            $cliente = new Cliente();
            $cliente->setId($id);
            $cliente = $cliente->getOne();
            require_once 'views/servicio/formulario_add.php';
        }
    }
    
    public function guardar(){
        if(isset($_POST)){
            //Creamos el array errores para recoger los errores de validacion:
            $errores = array();            
            ////var_dump($_POST);
            //Validacion: Creamos una variable para cada dato y hacemos una ternaria para 
            //comprobar si existe y si existe el valor sera $_POST y si no sera false:
            $servicios_contratados = isset($_POST['servicios_contratados']) ? $_POST['servicios_contratados']: false;

            //Comprobamos que el formulario no errores y en ese caso guardamos:
            if(count($errores)==0){
                $servicio = new Servicio();
                $servicio->setServicios_contratados($servicios_contratados);
                //Con esto ya tendriamos el objeto montado. Ahora llamamos al metodo save que hay en el modelo:
                if(isset($_GET['id'])){
                    $id = $_GET['id'];
                    if(isset($_GET['edit'])){
                        $servicio->setCliente_id($id);
                        $save = $servicio->edit();                        
                    }else{
                        $servicio->setCliente_id($id);
                        $save = $servicio->save();
                    }
                }
                if($save){
                    //Si se guarda, creamos una sesion y dentro el indice siguiente:
                    $_SESSION['servicio_ok'] = "El servicio se ha guardado correctamente";
                    var_dump($_SESSION['servicio_ok']);;
                }else{
                    //Si no se guarda, creamos el siguiente indice:
                    $_SESSION['servicio_error']['save'] = "Se ha producido un error";
                    var_dump($_SESSION['servicio_error']['save']);
                }
            }else{
                //Si hay algun error de validacion, creamos el siguiente indice:
                $_SESSION['servicio_error'] = $errores;
            }        
        }else{
            //SI no llega nada por post
            $_SESSION['servicio_error'] = $errores;
        }
        //var_dump($errores);
        //var_dump($_SESSION);
        if(isset($_GET['edit'])){
            $id =  $_GET['id'];
            header('Location:'.base_url.'servicio/servicioEditado&id='.$id);           
        }else{
            header('Location:'.base_url.'servicio/nuevoServicio&id='.$id);
        }

    }

    //Metodo para editar los servicios contratados
    public function editar(){
        //Comprobamos que existe el id:
        if(isset($_GET['id'])){
            //Guardamos el id de get en una variable:
            $id = $_GET['id'];
            $edit = true;
            //Creamos un nuevo objeto cliente y le seteamos el id:
            $servicio = new Servicio();
            $servicio->setCliente_id($id);
            //Para sacar solo uno:
            $edit_servicios = $servicio->getOneGeneral();
            $cliente = new Cliente();
            $cliente->setId($id);
            $cliente = $cliente->getOne();
            //Incluimos la vista de crear, para reutilizarla y cuando en esa vista 
            //se detecte que edit esta true, cambiara el titulo          
            require_once 'views/servicio/formulario_add.php';
        }
    }
    
    //Metodo para cuando se guarda un nuevo servicio
    public function nuevoServicio(){
        if(isset($_GET['id'])){
            $servicio = new Servicio();
            $servicio = $servicio->getLast();
            $id = $_GET['id'];
            $cliente = new Cliente();
            $cliente->setId($id);
            $cliente = $cliente->getOne();
            require_once 'views/servicio/guardado.php';
        }
    }

    //Metodo para cuando se edita un servicio
    public function servicioEditado(){
        if(isset($_GET['id'])){
            $servicio = new Servicio();
            $id = $_GET['id'];
            $servicio->setCliente_id($id);
            $servicio = $servicio->getOneGeneral();
            $cliente = new Cliente();
            $cliente->setId($id);
            $cliente = $cliente->getOne();
            require_once 'views/servicio/editado.php';
        }
    }
    

}