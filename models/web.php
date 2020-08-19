<?php

class Web{
    private $id;
    private $web;
    private $url;
    private $cliente_id;
    private $ano;
    private $servidor;
    
    //Conexion a la bd:
    private $db;
    
    public function __construct() {
        $this->db = Database::connect();
    }
    
    function getId() {
        return $this->id;
    }

    function getWeb() {
        return $this->web;
    }

    function getUrl() {
        return $this->url;
    }

    function getCliente_id() {
        return $this->cliente_id;
    }

    function getAno() {
        return $this->ano;
    }

    function getServidor() {
        return $this->servidor;
    }

    function getDb() {
        return $this->db;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setWeb($web) {
        $this->web = $web;
    }

    function setUrl($url) {
        $this->url = $url;
    }

    function setCliente_id($cliente_id) {
        $this->cliente_id = $cliente_id;
    }

    function setAno($ano) {
        $this->ano = $ano;
    }

    function setServidor($servidor) {
        $this->servidor = $servidor;
    }

    function setDb($db) {
        $this->db = $db;
    }

    //Metodo para guardar nuevas webs
    public function save(){
        $sql = "INSERT INTO webs VALUES(NULL, '{$this->getWeb()}', '{$this->getUrl()}', '{$this->getCliente_id()}', '{$this->getAno()}', '{$this->getServidor()}');";
        $save = $this->db->query($sql);
        
        $result = false;
        
        if($save){
            $result = true;
        }
        
        return $result;
    }
    
    
}

