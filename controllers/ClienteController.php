<?php

require_once 'models/cliente.php';
require_once 'models/servicio.php';

class clienteController{
    public function index(){
        $cliente = new Cliente();
        $todos_clientes = $cliente->getAll();
        require_once 'views/cliente/index.php';
    }
    
    public function horizontal(){
        $cliente = new Cliente();
        $cantidad = $cliente->getAll()->num_rows;
        require_once 'views/cliente/resultados.php';
    }
    public function pagina(){
        if(isset($_GET['id'])){
            $id = $_GET['id'];
            $cliente = new Cliente();
            $cliente->setId($id);
            $cliente = $cliente->getOne();
            
            $contacto = new Cliente();
            $contacto = $contacto->getContactos($id);
            
            $urls = new Cliente();
            $urls = $urls->getUrls($id);
            
            $servicio = new Servicio();
            $servicio->setCliente_id($id);
            $servicio = $servicio->getOneGeneral();
            
     
        }
        
        
        require_once 'views/cliente/vista_pagina.php';
    }

    public function codigo(){
        if(isset($_GET['cp'])){
            $cp = $_GET['cp'];
            $codigo = new Cliente();
            $todos_codigos = $codigo->getAllCp($cp);
            require_once 'views/cliente/vista_codigo.php';

        }
        
    }
    
    public function ciudad(){
        if(isset($_GET['city'])){
            $city = $_GET['city'];
            $ciudad = new Cliente();
            $todas_ciudades = $ciudad->getAllCiudad($city);
            require_once 'views/cliente/vista_ciudad.php';

        }
        
    }

    public function provincia(){
        if(isset($_GET['prov'])){
            $prov = $_GET['prov'];
            $provincia = new Cliente();
            $todas_provincias = $provincia->getAllProvincia($prov);
            require_once 'views/cliente/vista_provincia.php';

        }
        
    }

    public function baja(){
        if(isset($_GET['est'])){
            $est = $_GET['est'];
            $baja = new Cliente();
            $todas_bajas = $baja->getAllBaja($est);
            require_once 'views/cliente/vista_baja.php';

        }
        
    }

    public function division(){
        if(isset($_GET['div'])){
            $div = $_GET['div'];
            $division = new Cliente();
            $todas_divisiones = $division->getAllDivision($div);
            require_once 'views/cliente/vista_division.php';

        }
        
    }

    public function crear(){
       require_once 'views/cliente/formulario_add.php';

    }
    
    public function guardar(){
        if(isset($_POST)){
            //Creamos el array errores para recoger los errores de validacion:
            $errores = array();            
            ////var_dump($_POST);
            //Validacion: Creamos una variable para cada dato y hacemos una ternaria para 
            //comprobar si existe y si existe el valor sera $_POST y si no sera false:
            $nombre = isset($_POST['nombre_cliente']) ? $_POST['nombre_cliente']: false;
            $direccion = isset($_POST['direccion']) ? $_POST['direccion']: false;
            $codigo_postal = isset($_POST['codigo_postal']) ? $_POST['codigo_postal']: false;
            $ciudad = isset($_POST['ciudad']) ? $_POST['ciudad']: false;
            $provincia = isset($_POST['provincia']) ? $_POST['provincia']: false;
            $pais = isset($_POST['pais']) ? $_POST['pais']: false;
            $gestor_cuentas = isset($_POST['gestor_cuentas']) ? $_POST['gestor_cuentas']: false;
            $fecha_alta = isset($_POST['fecha_alta']) ? $_POST['fecha_alta']: false;
            $baja = isset($_POST['baja']) ? $_POST['baja']: false;
            $division = isset($_POST['division']) ? $_POST['division']: false;
            $teamleader = isset($_POST['teamleader']) ? $_POST['teamleader']: false;
            //var_dump($nombre);
            //var_dump($direccion);
            //var_dump($codigo_postal);
            //var_dump($ciudad);
            //var_dump($provincia);
            //var_dump($pais);
            //var_dump($gestor_cuentas);
            //var_dump($fecha_alta);
            //var_dump($baja);
            //var_dump($division);
            //var_dump($_GET['id']);
            //Validacion de cada campo:
            if (!empty($nombre)) {
                $nombre_validado = true;
            } else {
                $nombre_validado = false;
                $errores['nombre'] = "El nombre del cliente está vacio. Rellenalo";
            }
            
            if (preg_match("/^(?:0[1-9]|[1-4]\d|5[0-2])\d{3}$/", $codigo_postal)) {
                $codigo_postal_validado = true;
            } else {
                $codigo_postal_validado = false;
                $errores['codigo_postal'] = "El código postal no es válido";
            }

            if (!is_numeric($ciudad) && !preg_match("/[0-9]/", $ciudad)) {
                $ciudad_validada = true;
            } else {
                $ciudad_validada = false;
                $errores['ciudad'] = "La ciudad no puede contener números";
            }

            if (!is_numeric($provincia) && !preg_match("/[0-9]/", $provincia)) {
                $provincia_validada = true;
            } else {
                $provincia_validada = false;
                $errores['provincia'] = "La provincia no puede contener números";
            }

            if (!is_numeric($pais) && !preg_match("/[0-9]/", $pais)) {
                $pais_validado = true;
            } else {
                $pais_validado = false;
                $errores['pais'] = "El país no puede contener números";
            }

            if (!is_numeric($gestor_cuentas) && !preg_match("/[0-9]/", $gestor_cuentas)) {
                $gestor_cuentas_validado = true;
            } else {
                $gestor_cuentas_validado = false;
                $errores['gestor_cuentas'] = "El gestor de cuentas no puede contener números";
            }
            
            if (!filter_var($teamleader, FILTER_VALIDATE_URL) === false) {
                $teamleader_validado = true;
            }elseif(empty ($teamleader)){
                $teamleader_validado = true;                
            } else {
                $teamleader_validado = false;
                $errores['teamleader'] = "El enlace a Teamleader no es valido";
            }

            //Comprobamos que el formulario no errores y en ese caso guardamos:
            if(count($errores)==0){
                $cliente = new Cliente();
                $cliente->setNombre($nombre);
                $cliente->setDireccion($direccion);
                $cliente->setCodigo_postal($codigo_postal);
                $cliente->setCiudad($ciudad);
                $cliente->setProvincia($provincia);
                $cliente->setPais($pais);
                $cliente->setGestor_cuentas($gestor_cuentas);
                $cliente->setFecha_alta($fecha_alta);
                $cliente->setBaja($baja);
                $cliente->setDivision($division);
                $cliente->setTeamleader($teamleader);
                //Con esto ya tendriamos el objeto montado. Ahora llamamos al metodo save que hay en el modelo:
                if(isset($_GET['id'])){
                    $id = $_GET['id'];
                    $cliente->setId($id);
                    $save = $cliente->edit();
                }else{
                    //Ahora guardamos el objeto en la base de datos:
                    $save = $cliente->save();
                }
                if($save){
                    //Si se guarda, creamos una sesion y dentro el indice siguiente:
                    $_SESSION['cliente_ok'] = "El cliente se ha guardado correctamente";
                    var_dump($_SESSION['cliente_ok']);;
                }else{
                    //Si no se guarda, creamos el siguiente indice:
                    $_SESSION['cliente_error']['save'] = "Se ha producido un error";
                    var_dump($_SESSION['cliente_error']['save']);
                }
            }else{
                //Si hay algun error de validacion, creamos el siguiente indice:
                $_SESSION['cliente_error'] = $errores;
            }        
        }else{
            //SI no llega nada por post
            $_SESSION['cliente_error'] = $errores;
        }
        //var_dump($errores);
        //var_dump($_SESSION);
        if(isset($_GET['id'])){
            $id =  $_GET['id'];
            header('Location:'.base_url.'cliente/clienteEditado&id='.$id);           
        }else{
            header('Location:'.base_url.'cliente/nuevoCliente');
        }

    }

    //Metodo para editar los clientes
    public function editar(){
        //Comprobamos que existe el id:
        if(isset($_GET['id'])){
            //Guardamos el id de get en una variable:
            $id = $_GET['id'];
            $edit = true;
            //Creamos un nuevo objeto cliente y le seteamos el id:
            $cliente = new Cliente();
            $cliente->setId($id);
            //Para sacar solo uno:
            $edit_cliente = $cliente->getOne();
            //Incluimos la vista de crear, para reutilizarla y cuando en esa vista 
            //se detecte que edit esta true, cambiara el titulo          
            require_once 'views/cliente/formulario_add.php';
        }
    }
    
    //Metodo para cuando se guarda un nuevo cliente
    public function nuevoCliente(){
        $cliente = new Cliente();
        $cliente = $cliente->getLast();
        require_once 'views/cliente/guardado.php';
    }

    //Metodo para cuando se edita un cliente
    public function clienteEditado(){
        $cliente = new Cliente();
        $id = $_GET['id'];
        $cliente->setId($id);
        $cliente = $cliente->getOne();
        require_once 'views/cliente/editado.php';
    }
    
    //Metodo para dar la opcion de elegir un cliente ya existente o crear uno nuevo antes de añadir una web    
    public function preWeb(){
        $cliente = new Cliente();
        $clientes = $cliente->getAll();
        require_once 'views/cliente/preweb.php';
    }

    //Metodo para dar la opcion de elegir un cliente ya existente o crear uno nuevo antes de añadir un contacto    
    public function preContacto(){
        $cliente = new Cliente();
        $clientes = $cliente->getAll();
        require_once 'views/cliente/precontacto.php';
    }

   
}
