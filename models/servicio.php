<?php

class Servicio{
    private $id;
    private $cliente_id;
    private $servicios_contratados;
   
    //Conexion a la bd:
    private $db;
    
    public function __construct() {
        $this->db = Database::connect();
    }

    function getId() {
        return $this->id;
    }

    function getCliente_id() {
        return $this->cliente_id;
    }

    function getServicios_contratados() {
        return $this->servicios_contratados;
    }

    function getDb() {
        return $this->db;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setCliente_id($cliente_id) {
        $this->cliente_id = $cliente_id;
    }

    function setServicios_contratados($servicios_contratados) {
        $this->servicios_contratados = $this->db->real_escape_string($servicios_contratados);
    }

    function setDb($db) {
        $this->db = $db;
    }

    //Metodo para mostrar todas las columnas de la tabla servicios
    public function getAll(){
        $todos_servicios = $this->db->query("SELECT s.*, cl.nombre AS 'empresa', w.web AS 'web', w.id AS 'web_id' FROM servicios s INNER JOIN clientes cl ON cl.id=s.cliente_id INNER JOIN webs w ON w.cliente_id=s.cliente_id ORDER BY id ASC;");
        return $todos_servicios;
    }
    
    //Metodo para mostrar todas las columnas de cada servicio
    public function getAllServicio($serv){
        $todos_servicios = $this->db->query("SELECT s.*, cl.nombre AS 'empresa', w.web AS 'web', w.id AS 'web_id' FROM servicios s INNER JOIN clientes cl ON cl.id=s.cliente_id INNER JOIN webs w ON w.cliente_id=s.cliente_id WHERE servicios_contratados='{$serv}' ORDER BY id ASC;");
        return $todos_servicios;
    }

    
    //Metodo para mostrar una columna de la tabla servicios
    public function getOne(){
        $servicio = $this->db->query("SELECT * FROM servicios WHERE id={$this->getId()};");
        return $servicio->fetch_object();
    }
    public function getOneGeneral(){
        $servicio = $this->db->query("SELECT * FROM servicios WHERE cliente_id={$this->getCliente_id()};");
        return $servicio->fetch_object();
    }
    
    //Metodo para guardar nuevos servicios
    public function save(){
        $sql = "INSERT INTO servicios VALUES(NULL, '{$this->getCliente_id()}', '{$this->getServicios_contratados()}');";
        $save = $this->db->query($sql);
        
        $result = false;
        
        if($save){
            $result = true;
        }
        
        return $result;
    }

    //Metodo para actualizar los servicios, para guardar despues de editar:
    public function edit(){
        $sql = "UPDATE servicios SET servicios_contratados = '{$this->getServicios_contratados()}' WHERE cliente_id ={$this->cliente_id};";

        $save = $this->db->query($sql);

        //echo $this->db->error;
        //die(); 
        $result=false;
        if($save){
            $result=true;
        }
        return $result;
    }

    //Metodo para sacar el ultimo servicio añadido
    public function getLast(){
        $servicio = $this->db->query("SELECT * FROM servicios ORDER BY id DESC LIMIT 1;");
        return $servicio->fetch_object();
    }
}
