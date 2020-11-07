<?php

class Plugin{
    private $id;
    private $plugin;
   
    //Conexion a la bd:
    private $db;
    
    public function __construct() {
        $this->db = Database::connect();
    }

    function getId() {
        return $this->id;
    }

    function getPlugin() {
        return $this->plugin;
    }

    function getDb() {
        return $this->db;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setPlugin($plugin) {
        $this->plugin = $this->db->real_escape_string($plugin);
    }

    function setDb($db) {
        $this->db = $db;
    }

    
    //Metodo para mostrar todas las columnas de la tabla plugins
    public function getAll(){
        $todos_plugins = $this->db->query("SELECT p.plugin AS 'plugin', w.url AS 'web', pp.web_id AS 'web_id' FROM plugins p INNER JOIN plugins_pivot pp ON pp.plugin_id=p.id INNER JOIN webs w ON pp.web_id=w.id ORDER BY p.id ASC;");
        echo $this->db->error;
        return $todos_plugins;
    }

    //Metodo para mostrar todas las columnas de cada plugin
    public function getAllPlugin($plug){
        $todos_plugins = $this->db->query("SELECT w.web AS 'web', w.id AS 'web_id', w.url AS 'url' FROM webs w INNER JOIN plugins_pivot pp ON w.id=pp.web_id INNER JOIN plugins p ON pp.plugin_id=p.id WHERE p.plugin='{$plug}' ORDER BY w.id ASC;");
        echo $this->db->error;
        return $todos_plugins;
    }
    
    //Metodo para mostrar una columna de la tabla plugins
    public function getOne($web_id){
        $plugin = $this->db->query("SELECT p.plugin, w.web AS 'web', w.url AS 'url' FROM plugins p INNER JOIN plugins_pivot pp ON p.id = pp.plugin_id INNER JOIN webs w ON w.id = pp.web_id WHERE pp.web_id = {$web_id};");
        echo $this->db->error;
        return $plugin;   
    }
    
}