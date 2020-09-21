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


}