<?php

class Tematica{
    private $id;
    private $tematica;
    private $web_id;
   
    //Conexion a la bd:
    private $db;
    
    public function __construct() {
        $this->db = Database::connect();
    }

    function getId() {
        return $this->id;
    }

    function getTematica() {
        return $this->tematica;
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

    function setTematica($tematica) {
        $this->tematica = $this->db->real_escape_string($tematica);
    }

    function setWeb_id($web_id) {
        $this->web_id = $web_id;
    }

    function setDb($db) {
        $this->db = $db;
    }

    //Metodo para mostrar todas las columnas de la tabla webs
    public function getAll(){
        $todas_tematicas = $this->db->query("SELECT * FROM tematicas ORDER BY id ASC;");
        return $todas_tematicas;
    }
    
    //Metodo para mostrar una columna de la tabla webs
    public function getOne($web_id){
        $tematica = $this->db->query("SELECT t.tematica FROM tematicas t INNER JOIN tematicas_pivot tp ON t.id = tp.tematica_id WHERE tp.web_id = {$web_id};");
        return $tematica;   
    }
    
}