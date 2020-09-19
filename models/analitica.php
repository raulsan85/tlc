<?php

class Analitica{
    private $id;
    private $web_id;
    private $visitas_19;
    private $rebote_19;
    private $rebote_desk_19;
    private $rebote_mob_19;
    private $tiempo_sesion_19;
    private $paginas_sesion_19;
    private $visitas_20;
    private $rebote_20;
    private $rebote_desk_20;
    private $rebote_mob_20;
    private $tiempo_sesion_20;
    private $paginas_sesion_20;
    private $tiempo_carga_20;
    private $first_byte_20;
    private $repeat_view_20;
    private $pagespeed_desk_20;
    private $pagespeed_mob_20;
    
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

    function getVisitas_19() {
        return $this->visitas_19;
    }

    function getRebote_19() {
        return $this->rebote_19;
    }

    function getRebote_desk_19() {
        return $this->rebote_desk_19;
    }

    function getRebote_mob_19() {
        return $this->rebote_mob_19;
    }

    function getTiempo_sesion_19() {
        return $this->tiempo_sesion_19;
    }

    function getPaginas_sesion_19() {
        return $this->paginas_sesion_19;
    }

    function getVisitas_20() {
        return $this->visitas_20;
    }

    function getRebote_20() {
        return $this->rebote_20;
    }

    function getRebote_desk_20() {
        return $this->rebote_desk_20;
    }

    function getRebote_mob_20() {
        return $this->rebote_mob_20;
    }

    function getTiempo_sesion_20() {
        return $this->tiempo_sesion_20;
    }

    function getPaginas_sesion_20() {
        return $this->paginas_sesion_20;
    }

    function getTiempo_carga_20() {
        return $this->tiempo_carga_20;
    }

    function getFirst_byte_20() {
        return $this->first_byte_20;
    }

    function getRepeat_view_20() {
        return $this->repeat_view_20;
    }

    function getPagespeed_desk_20() {
        return $this->pagespeed_desk_20;
    }

    function getPagespeed_mob_20() {
        return $this->pagespeed_mob_20;
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

    function setVisitas_19($visitas_19) {
        $this->visitas_19 = $visitas_19;
    }

    function setRebote_19($rebote_19) {
        $this->rebote_19 = $rebote_19;
    }

    function setRebote_desk_19($rebote_desk_19) {
        $this->rebote_desk_19 = $rebote_desk_19;
    }

    function setRebote_mob_19($rebote_mob_19) {
        $this->rebote_mob_19 = $rebote_mob_19;
    }

    function setTiempo_sesion_19($tiempo_sesion_19) {
        $this->tiempo_sesion_19 = $tiempo_sesion_19;
    }

    function setPaginas_sesion_19($paginas_sesion_19) {
        $this->paginas_sesion_19 = $paginas_sesion_19;
    }

    function setVisitas_20($visitas_20) {
        $this->visitas_20 = $visitas_20;
    }

    function setRebote_20($rebote_20) {
        $this->rebote_20 = $rebote_20;
    }

    function setRebote_desk_20($rebote_desk_20) {
        $this->rebote_desk_20 = $rebote_desk_20;
    }

    function setRebote_mob_20($rebote_mob_20) {
        $this->rebote_mob_20 = $rebote_mob_20;
    }

    function setTiempo_sesion_20($tiempo_sesion_20) {
        $this->tiempo_sesion_20 = $tiempo_sesion_20;
    }

    function setPaginas_sesion_20($paginas_sesion_20) {
        $this->paginas_sesion_20 = $paginas_sesion_20;
    }

    function setTiempo_carga_20($tiempo_carga_20) {
        $this->tiempo_carga_20 = $tiempo_carga_20;
    }

    function setFirst_byte_20($first_byte_20) {
        $this->first_byte_20 = $first_byte_20;
    }

    function setRepeat_view_20($repeat_view_20) {
        $this->repeat_view_20 = $repeat_view_20;
    }

    function setPagespeed_desk_20($pagespeed_desk_20) {
        $this->pagespeed_desk_20 = $pagespeed_desk_20;
    }

    function setPagespeed_mob_20($pagespeed_mob_20) {
        $this->pagespeed_mob_20 = $pagespeed_mob_20;
    }

    function setDb($db) {
        $this->db = $db;
    }

    //Metodo para mostrar todas las columnas de la tabla analiticas
    public function getAll(){
        $todas_analiticas = $this->db->query("SELECT * FROM analiticas ORDER BY id ASC;");
        return $todas_analiticas;
    }
    
    //Metodo para mostrar una columna de la tabla analiticas
    public function getOne(){
        $analitica = $this->db->query("SELECT * FROM analiticas WHERE id={$this->getId()};");
        return $analitica->fetch_object();
    }
 
}
