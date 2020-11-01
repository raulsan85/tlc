<?php

class DatoEstructurado{
    private $id;
    private $web_id;
    private $web_page;
    private $locals;
    private $productos;
    private $hcard;
    private $organizacion;
    private $hentry;
    private $website;
    private $site_navigation;
    private $footer;
    private $wp_sidebar;
    private $article;
    private $recipe;
    private $creative_work;
    private $wp_header;
    private $person;
    private $breadcrumb_list;
    private $collection_page;
   
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

    function getWeb_page() {
        return $this->web_page;
    }

    function getLocals() {
        return $this->locals;
    }

    function getProductos() {
        return $this->productos;
    }

    function getHcard() {
        return $this->hcard;
    }

    function getOrganizacion() {
        return $this->organizacion;
    }

    function getHentry() {
        return $this->hentry;
    }

    function getWebsite() {
        return $this->website;
    }

    function getSite_navigation() {
        return $this->site_navigation;
    }

    function getFooter() {
        return $this->footer;
    }

    function getWp_sidebar() {
        return $this->wp_sidebar;
    }

    function getArticle() {
        return $this->article;
    }

    function getRecipe() {
        return $this->recipe;
    }

    function getCreative_work() {
        return $this->creative_work;
    }

    function getWp_header() {
        return $this->wp_header;
    }

    function getPerson() {
        return $this->person;
    }

    function getBreadcrumb_list() {
        return $this->breadcrumb_list;
    }

    function getCollection_page() {
        return $this->collection_page;
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

    function setWeb_page($web_page) {
        $this->web_page = $web_page;
    }

    function setLocals($locals) {
        $this->locals = $locals;
    }

    function setProductos($productos) {
        $this->productos = $productos;
    }

    function setHcard($hcard) {
        $this->hcard = $hcard;
    }

    function setOrganizacion($organizacion) {
        $this->organizacion = $organizacion;
    }

    function setHentry($hentry) {
        $this->hentry = $hentry;
    }

    function setWebsite($website) {
        $this->website = $website;
    }

    function setSite_navigation($site_navigation) {
        $this->site_navigation = $site_navigation;
    }

    function setFooter($footer) {
        $this->footer = $footer;
    }

    function setWp_sidebar($wp_sidebar) {
        $this->wp_sidebar = $wp_sidebar;
    }

    function setArticle($article) {
        $this->article = $article;
    }

    function setRecipe($recipe) {
        $this->recipe = $recipe;
    }

    function setCreative_work($creative_work) {
        $this->creative_work = $creative_work;
    }

    function setWp_header($wp_header) {
        $this->wp_header = $wp_header;
    }

    function setPerson($person) {
        $this->person = $person;
    }

    function setBreadcrumb_list($breadcrumb_list) {
        $this->breadcrumb_list = $breadcrumb_list;
    }

    function setCollection_page($collection_page) {
        $this->collection_page = $collection_page;
    }

    function setDb($db) {
        $this->db = $db;
    }

    //Metodo para mostrar todas las columnas de la tabla datos estructurados
    public function getAll(){
        $todos_datos = $this->db->query("SELECT d.dato, w.url AS 'web', dp.web_id AS 'web_id' FROM datos_estructurados d INNER JOIN datos_pivot dp ON dp.dato_id=d.id INNER JOIN webs w ON dp.web_id=w.id ORDER BY w.id ASC;");
        echo $this->db->error;
        return $todos_datos;
    }

    //Metodo para mostrar todas las columnas de cada dato
    public function getAllDato($data){
        $todos_datos = $this->db->query("SELECT w.web AS 'web', w.id AS 'web_id', w.url AS 'url' FROM webs w INNER JOIN datos_pivot dp ON w.id=dp.web_id INNER JOIN datos_estructurados d ON dp.dato_id=d.id WHERE d.dato='{$data}' ORDER BY w.id ASC;");
        echo $this->db->error;
        return $todos_datos;
    }
    
    //Metodo para mostrar una columna de la tabla datos estructurados
    public function getOne($web_id){
        $dato = $this->db->query("SELECT d.dato, w.url AS 'url', w.web AS 'web' FROM datos_estructurados d INNER JOIN datos_pivot dp ON d.id = dp.dato_id INNER JOIN webs w ON w.id = dp.web_id WHERE dp.web_id = {$web_id};");
        echo $this->db->error;
        return $dato;   
    }
}