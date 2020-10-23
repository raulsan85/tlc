<?php

class Caracteristica{
    private $id;
    private $web_id;
    private $desarrollo;
    private $tipo;
    private $framework;
    private $theme;
    private $design;
    private $certificado;
    private $responsive;
    private $idiomas;
    private $seo;
    
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

    function getDesarrollo() {
        return $this->desarrollo;
    }

    function getTipo() {
        return $this->tipo;
    }

    function getFramework() {
        return $this->framework;
    }

    function getTheme() {
        return $this->theme;
    }

    function getDesign() {
        return $this->design;
    }

    function getCertificado() {
        return $this->certificado;
    }

    function getResponsive() {
        return $this->responsive;
    }

    function getIdiomas() {
        return $this->idiomas;
    }

    function getSeo() {
        return $this->seo;
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

    function setDesarrollo($desarrollo) {
        $this->desarrollo = $this->db->real_escape_string($desarrollo);
    }

    function setTipo($tipo) {
        $this->tipo = $this->db->real_escape_string($tipo);
    }

    function setFramework($framework) {
        $this->framework = $this->db->real_escape_string($framework);
    }

    function setTheme($theme) {
        $this->theme = $this->db->real_escape_string($theme);
    }

    function setDesign($design) {
        $this->design = $this->db->real_escape_string($design);
    }

    function setCertificado($certificado) {
        $this->certificado = $this->db->real_escape_string($certificado);
    }

    function setResponsive($responsive) {
        $this->responsive = $this->db->real_escape_string($responsive);
    }

    function setIdiomas($idiomas) {
        $this->idiomas = $this->db->real_escape_string($idiomas);
    }

    function setSeo($seo) {
        $this->seo = $this->db->real_escape_string($seo);
    }

    function setDb($db) {
        $this->db = $db;
    }


    //Metodo para mostrar todas las columnas de la tabla caracteristicas
    public function getAll(){
        $todas_caracteristicas = $this->db->query("SELECT c.*, w.web AS 'web' FROM caracteristicas c INNER JOIN webs w ON w.id=c.web_id ORDER BY id ASC;");
        return $todas_caracteristicas;
    }
    
    //Metodo para mostrar una columna de la tabla caracteristicas
    public function getOne(){
        $caracteristica = $this->db->query("SELECT c.*, w.web AS 'web', w.url AS 'url' FROM caracteristicas c INNER JOIN webs w ON w.id=c.web_id WHERE c.id={$this->getId()};");
        /*var_dump($caracteristica);
        echo $this->db->error;
        die();
         * 
         */
        return $caracteristica->fetch_object();
    }
    public function getOneGeneral(){
        $caracteristica = $this->db->query("SELECT * FROM caracteristicas WHERE web_id={$this->getWeb_id()};");
        return $caracteristica->fetch_object();
    }
    
}