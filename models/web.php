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
        $this->web = $this->db->real_escape_string($web);
    }

    function setUrl($url) {
        $this->url = $this->db->real_escape_string($url);
    }

    function setCliente_id($cliente_id) {
        $this->cliente_id = $cliente_id;
    }

    function setAno($ano) {
        $this->ano = $this->db->real_escape_string($ano);
    }

    function setServidor($servidor) {
        $this->servidor = $this->db->real_escape_string($servidor);
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
    
    //Metodo para mostrar todas las columnas de la tabla webs
    public function getAll(){
        $todas_webs = $this->db->query("SELECT * FROM webs ORDER BY id ASC;");
        return $todas_webs;
    }
    
    //Metodo para mostrar una columna de la tabla webs
    public function getOne(){
        $web = $this->db->query("SELECT * FROM webs WHERE id={$this->getId()};");
        return $web->fetch_object();
    }
    
    public function getWebs(){
        $columna_web = $this->db->query("SELECT web FROM webs;");
        return $columna_web;
    }
    
    
}

