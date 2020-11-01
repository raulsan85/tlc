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
        $todas_tematicas = $this->db->query("SELECT t.tematica AS 'tematica', w.url AS 'web', tp.web_id AS 'web_id' FROM tematicas t INNER JOIN tematicas_pivot tp ON tp.tematica_id=t.id INNER JOIN webs w ON tp.web_id=w.id ORDER BY w.id ASC;");
        echo $this->db->error;
        return $todas_tematicas;
    }

    //Metodo para mostrar todas las columnas de cada tematica
    public function getAllTematica($tem){
        $todas_tematicas = $this->db->query("SELECT w.web AS 'web', w.id AS 'web_id', w.url AS 'url' FROM webs w INNER JOIN tematicas_pivot tp ON w.id=tp.web_id INNER JOIN tematicas t ON tp.tematica_id=t.id WHERE t.tematica='{$tem}' ORDER BY w.id ASC;");
        echo $this->db->error;
        return $todas_tematicas;
    }
    
    //Metodo para mostrar una columna de la tabla webs
    public function getOne($web_id){
        $tematica = $this->db->query("SELECT t.tematica, w.web AS 'web', w.url AS 'url' FROM tematicas t INNER JOIN tematicas_pivot tp ON t.id = tp.tematica_id INNER JOIN webs w ON w.id = tp.web_id WHERE tp.web_id = {$web_id};");
        echo $this->db->error;
        return $tematica;   
    }
    
}