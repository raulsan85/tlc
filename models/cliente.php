<?php

class Cliente{
    private $id;
    private $nombre;
    private $direccion;
    private $codigo_postal;
    private $ciudad;
    private $provincia;
    private $pais;
    private $gestor_cuentas;
    private $fecha_alta;
    private $baja;
    private $division;
    
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

    function getDireccion() {
        return $this->direccion;
    }

    function getCodigo_postal() {
        return $this->codigo_postal;
    }

    function getCiudad() {
        return $this->ciudad;
    }

    function getProvincia() {
        return $this->provincia;
    }

    function getPais() {
        return $this->pais;
    }

    function getGestor_cuentas() {
        return $this->gestor_cuentas;
    }

    function getFecha_alta() {
        return $this->fecha_alta;
    }

    function getBaja() {
        return $this->baja;
    }

    function getDivision() {
        return $this->division;
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

    function setDireccion($direccion) {
        $this->nombre = $this->db->real_escape_string($nombre);
    }

    function setCodigo_postal($codigo_postal) {
        $this->codigo_postal = $codigo_postal;
    }

    function setCiudad($ciudad) {
        $this->nombre = $this->db->real_escape_string($nombre);
    }

    function setProvincia($provincia) {
        $this->provincia = $this->db->real_escape_string($provincia);
    }

    function setPais($pais) {
        $this->pais = $this->db->real_escape_string($pais);
    }

    function setGestor_cuentas($gestor_cuentas) {
        $this->gestor_cuentas = $this->db->real_escape_string($gestor_cuentas);
    }

    function setFecha_alta($fecha_alta) {
        $this->fecha_alta = $fecha_alta;
    }

    function setBaja($baja) {
        $this->baja = $this->db->real_escape_string($baja);
    }

    function setDivision($division) {
        $this->division = $this->db->real_escape_string($division);
    }

    function setDb($db) {
        $this->db = $db;
    }

        //Metodo para guardar nuevas webs
    public function save(){
        $sql = "INSERT INTO webs VALUES(NULL, '{$this->getNombre()}', '{$this->getDireccion()}', '{$this->getCodigo_postal()}', '{$this->getCiudad()}', '{$this->getProvincia()}', '{$this->getPais()}', '{$this->getGestor_cuentas()}', '{$this->getFecha_alta()}', '{$this->getBaja()}', '{$this->getBaja()}', '{$this->getDivision()}');";
        $save = $this->db->query($sql);
        
        $result = false;
        
        if($save){
            $result = true;
        }
        
        return $result;
    }
    
    //Metodo para mostrar todas las columnas de la tabla webs
    public function getAll(){
        $todos_clientes = $this->db->query("SELECT * FROM clientes ORDER BY id ASC;");
        return $todos_clientes;
    }

    //Metodo para mostrar todas las columnas de cada codigo postal
    public function getAllCp($cp){
        $todos_codigos = $this->db->query("SELECT * FROM clientes WHERE codigo_postal='{$cp}' ORDER BY id ASC;");
        return $todos_codigos;
    }

    //Metodo para mostrar todas las columnas de cada ciudad
    public function getAllCiudad($city){
        $todas_ciudades= $this->db->query("SELECT * FROM clientes WHERE ciudad='{$city}' ORDER BY id ASC;");
        return $todas_ciudades;
    }
    
    //Metodo para mostrar todas las columnas de cada provincia
    public function getAllProvincia($prov){
        $todas_provincias= $this->db->query("SELECT * FROM clientes WHERE provincia='{$prov}' ORDER BY id ASC;");
        return $todas_provincias;
    }

    //Metodo para mostrar todas las columnas de cada baja
    public function getAllBaja($est){
        $todas_bajas= $this->db->query("SELECT * FROM clientes WHERE baja='{$est}' ORDER BY id ASC;");
        return $todas_bajas;
    }
    
    //Metodo para mostrar todas las columnas de cada division
    public function getAllDivision($div){
        $todas_divisiones = $this->db->query("SELECT * FROM clientes WHERE division='{$div}' ORDER BY id ASC;");
        return $todas_divisiones;
    }

    //Metodo para mostrar una columna de la tabla clientes
    public function getOne(){
        $cliente = $this->db->query("SELECT * FROM clientes  WHERE id={$this->getId()};");
        /*var_dump($caracteristica);
        echo $this->db->error;
        die();
         * 
         */
        return $cliente->fetch_object();
    }
    
    //Metodo para sacar todos los contactos asociados a un cliente
    public function getContactos($cliente_id){
        $contacto = $this->db->query("SELECT c.nombre, c.apellidos, c.id FROM contactos c INNER JOIN contactos_pivot cp ON c.id = cp.contacto_id WHERE cp.cliente_id = {$cliente_id};");
        return $contacto;   
    }

    //Metodo para sacar todas las urls asociados a un cliente
    public function getUrls($cliente_id){
        $urls = $this->db->query("SELECT w.url FROM webs w INNER JOIN clientes cl ON w.cliente_id = cl.id WHERE w.cliente_id = {$cliente_id};");
        return $urls;   
    }    
    
    public function getOneGeneral(){
        $cliente = $this->db->query("SELECT * FROM clientes WHERE id={$this->getId()};");
        return $cliente->fetch_object();
    }    
    /*
    //Metodo para mostrar solo la columna Web
    public function getWebs(){
        $columna_web = $this->db->query("SELECT web FROM webs ORDER BY id ASC;");
        return $columna_web;
    }

    //Metodo para mostrar solo la columna URL    
    public function getUrls(){
        $columna_url = $this->db->query("SELECT url FROM webs ORDER BY id ASC;");
        return $columna_url;
    }

    //Metodo para mostrar solo la columna Año    
    public function getAnos(){
        $columna_ano = $this->db->query("SELECT ano FROM webs ORDER BY id ASC;");
        return $columna_ano;
    }    
    
    //Metodo para mostrar solo la columna Servidor    
    public function getServidores(){
        $columna_servidor = $this->db->query("SELECT servidor FROM webs ORDER BY id ASC;");
        return $columna_servidor;
    }    
    */
}
