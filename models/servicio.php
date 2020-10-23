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
        $todos_servicios = $this->db->query("SELECT s.*, cl.nombre AS 'empresa', w.web AS 'web' FROM servicios s INNER JOIN clientes cl ON cl.id=s.cliente_id INNER JOIN webs w ON w.cliente_id=s.cliente_id ORDER BY id ASC;");
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
}
