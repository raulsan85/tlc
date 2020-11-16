<?php

class Contacto{
    private $id;
    private $nombre;
    private $apellidos;
    private $cliente_id;
    private $cargo;
    private $telefono;
    private $email;
   
    //Conexion a la bd:
    private $db;
    
    public function __construct() {
        $this->db = Database::connect();
    }

    function getId() {
        return $this->id;
    }

    function getNombre() {
        return $this->nombre;
    }

    function getApellidos() {
        return $this->apellidos;
    }

    function getCliente_id() {
        return $this->cliente_id;
    }

    function getCargo() {
        return $this->cargo;
    }

    function getTelefono() {
        return $this->telefono;
    }

    function getEmail() {
        return $this->email;
    }

    function getDb() {
        return $this->db;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setNombre($nombre) {
        $this->nombre = $this->db->real_escape_string($nombre);
    }

    function setApellidos($apellidos) {
        $this->apellidos = $this->db->real_escape_string($apellidos);
    }

    function setCliente_id($cliente_id) {
        $this->cliente_id = $cliente_id;
    }

    function setCargo($cargo) {
        $this->cargo = $this->db->real_escape_string($cargo);
    }

    function setTelefono($telefono) {
        $this->telefono = $this->db->real_escape_string($telefono);
    }

    function setEmail($email) {
        $this->email = $this->db->real_escape_string($email);
    }

    function setDb($db) {
        $this->db = $db;
    }

    //Metodo para sacar contactos y clientes
    public function getCliente($id){
        $clientes = $this->db->query("SELECT nombre AS 'nombre_cliente', id AS 'cliente_id' FROM clientes WHERE id='{$id}';");
        return $clientes->fetch_object();
    }
    
    //Metodo para guardar nuevos contactos
    public function save(){
        $sql = "INSERT INTO contactos VALUES(NULL, '{$this->getNombre()}', '{$this->getApellidos()}', '{$this->getCliente_id()}', '{$this->getCargo()}', '{$this->getTelefono()}', '{$this->getEmail()}');";
        $save = $this->db->query($sql);
        
        $result = false;
        
        if($save){
            $result = true;
        }
        
        //echo $this->db->error;
        //echo $sql;
        //die();
        return $result;
    }

    //Metodo para guardar nuevos contactos y relacionarlos con los clientes:
    public function save_pivot($cliente_id){
        //Sacamos el id del ultimo pedido que hemos insertado
        $sql = "SELECT LAST_INSERT_ID() as 'contacto';";
        $query = $this->db->query($sql);
        $contacto_id = $query->fetch_object()->contacto;

        $insert = "INSERT INTO contactos_pivot VALUES(NULL, {$contacto_id}, {$cliente_id});";
        $save = $this->db->query($insert);

        
        $result=false;
        if($save){
            $result=true;
        }
        return $result;    
        
    }
    
    //Metodo para mostrar todas las columnas de la tabla contactos
    public function getAll(){
        $todos_contactos = $this->db->query("SELECT c.*, cl.nombre AS 'empresa' FROM contactos c INNER JOIN clientes cl ON cl.id=c.cliente_id ORDER BY id ASC;");
        return $todos_contactos;
    }
    
    //Metodo para mostrar una columna de la tabla contactos
    public function getOne(){
        $contacto = $this->db->query("SELECT c.*, cl.nombre AS 'empresa' FROM contactos c INNER JOIN clientes cl ON cl.id = c.cliente_id WHERE c.id={$this->getId()};");
        return $contacto->fetch_object();
    }

    //Metodo para sacar el ultimo contacto añadido
    public function getLast(){
        $contacto = $this->db->query("SELECT * FROM contactos ORDER BY id DESC LIMIT 1;");
        return $contacto->fetch_object();
    }    
    //Metodo para sacar todas las urls asociados a un contacto
    public function getUrls($contacto_id){
        $urls = $this->db->query("SELECT w.url, cl.id AS 'cliente_id' FROM webs w INNER JOIN clientes cl ON w.cliente_id = cl.id INNER JOIN contactos_pivot cp ON cl.id = cp.cliente_id WHERE cp.contacto_id = {$contacto_id};");
        return $urls;   
    }
  
}