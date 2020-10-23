<?php

class Tematica_pivot{
    private $id;
    private $tematica_id;
    private $web_id;
   
    //Conexion a la bd:
    private $db;
    
    public function __construct() {
        $this->db = Database::connect();
    }

    function getId() {
        return $this->id;
    }

    function getTematica_id() {
        return $this->tematica_id;
    }

    function getWeb_id() {
        return $this->web_id;
    }

    function getDb() {
        return $this->db;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setTematica_id($tematica_id) {
        $this->tematica_id = $tematica_id;
    }

    function setWeb_id($web_id) {
        $this->web_id = $web_id;
    }

    function setDb($db) {
        $this->db = $db;
    }

    
    //Metodo para mostrar todas las columnas de la tabla webs
    public function getAll(){
        $todas_tematicas_pivot = $this->db->query("SELECT * FROM tematicas_pivot ORDER BY id ASC;");
        return $todas_tematicas_pivot;
    }
    
    //Metodo para mostrar una columna de la tabla webs
    public function getOne(){
        $tematica_pivot = $this->db->query("SELECT * FROM tematicas_pivot WHERE id={$this->getId()};");
        return $tematica_pivot->fetch_object();
    }
    
}