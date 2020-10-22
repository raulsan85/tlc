<?php

class Seo{
    private $id;
    private $web_id;
    private $nota;
    private $palabras_mas_10_busquedas;
    private $posicion_media;
    private $indice_posicionamiento;
    private $total_busquedas;
    private $backlinks_20;
    private $dofollow_20;
    private $dominios_backlinks_20;

    
    //Conexion a la bd:
    private $db;
    
    public function __construct() {
        $this->db = Database::connect();
    }
    
    function getId() {
        return $this->id;
    }

    function getWeb_id() {
        return $this->web_id;
    }

    function getNota() {
        return $this->nota;
    }

    function getPalabras_mas_10_busquedas() {
        return $this->palabras_mas_10_busquedas;
    }

    function getPosicion_media() {
        return $this->posicion_media;
    }

    function getIndice_posicionamiento() {
        return $this->indice_posicionamiento;
    }

    function getTotal_busquedas() {
        return $this->total_busquedas;
    }

    function getBacklinks_20() {
        return $this->backlinks_20;
    }

    function getDofollow_20() {
        return $this->dofollow_20;
    }

    function getDominios_backlinks_20() {
        return $this->dominios_backlinks_20;
    }

    function getDb() {
        return $this->db;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setWeb_id($web_id) {
        $this->web_id = $web_id;
    }

    function setNota($nota) {
        $this->nota = $this->db->real_escape_string($nota);
    }

    function setPalabras_mas_10_busquedas($palabras_mas_10_busquedas) {
        $this->palabras_mas_10_busquedas = $palabras_mas_10_busquedas;
    }

    function setPosicion_media($posicion_media) {
        $this->posicion_media = $posicion_media;
    }

    function setIndice_posicionamiento($indice_posicionamiento) {
        $this->indice_posicionamiento = $indice_posicionamiento;
    }

    function setTotal_busquedas($total_busquedas) {
        $this->total_busquedas = $total_busquedas;
    }

    function setBacklinks_20($backlinks_20) {
        $this->backlinks_20 = $backlinks_20;
    }

    function setDofollow_20($dofollow_20) {
        $this->dofollow_20 = $dofollow_20;
    }

    function setDominios_backlinks_20($dominios_backlinks_20) {
        $this->dominios_backlinks_20 = $dominios_backlinks_20;
    }

    function setDb($db) {
        $this->db = $db;
    }

    //Metodo para mostrar todas las columnas de la tabla seo
    public function getAll(){
        $todos_seo = $this->db->query("SELECT s.*, w.web AS 'web' FROM seo s INNER JOIN webs w ON w.id=s.web_id ORDER BY id ASC;");
        return $todos_seo;
    }
    
    //Metodo para mostrar una columna de la tabla clientes
    public function getOne(){
        $seo = $this->db->query("SELECT s.*, w.web AS 'web', w.url AS 'url' FROM seo s INNER JOIN webs w ON w.id=s.web_id WHERE s.id={$this->getId()};");
        /*var_dump($seo);
        echo $this->db->error;
        die();
         * 
         */
        return $seo->fetch_object();
    }
}

