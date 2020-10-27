<?php

require_once 'models/caracteristica.php';

class CaracteristicaController{
    public function index(){
        $caracteristica = new Caracteristica();
        $todas_caracteristicas = $caracteristica->getAll();
        require_once 'views/caracteristica/index.php';
    }
    
    public function horizontal(){
        $cliente = new Cliente();
        $cantidad = $cliente->getAll()->num_rows;
        require_once 'views/cliente/resultados.php';
    }
    public function pagina(){
        if(isset($_GET['id'])){
            $id = $_GET['id'];
            $caracteristica = new Caracteristica();
            $caracteristica->setId($id);
            $caracteristica = $caracteristica->getOne();
     
        }
        
        
        require_once 'views/caracteristica/vista_pagina.php';
    }
    
    public function desarrollo(){
        if(isset($_GET['dev'])){
            $dev = $_GET['dev'];
            $desarrollo = new Caracteristica();
            $todos_desarrollos = $desarrollo->getAllDesarrollo($dev);
            require_once 'views/caracteristica/vista_desarrollo.php';

        }
        
    }

    public function tipo(){
        if(isset($_GET['kind'])){
            $kind = $_GET['kind'];
            $tipo = new Caracteristica();
            $todos_tipos = $tipo->getAllTipo($kind);
            require_once 'views/caracteristica/vista_tipo.php';

        }
        
    }

    public function framework(){
        if(isset($_GET['frame'])){
            $frame = $_GET['frame'];
            $framework = new Caracteristica();
            $todos_frameworks = $framework->getAllFramework($frame);
            require_once 'views/caracteristica/vista_framework.php';

        }
        
    }

    public function theme(){
        if(isset($_GET['tema'])){
            $tema = $_GET['tema'];
            $theme = new Caracteristica();
            $todos_themes = $theme->getAllTheme($tema);
            require_once 'views/caracteristica/vista_theme.php';

        }
        
    }

    public function design(){
        if(isset($_GET['diseno'])){
            $diseno = $_GET['diseno'];
            $design = new Caracteristica();
            $todos_designs = $design->getAllDesign($diseno);
            require_once 'views/caracteristica/vista_design.php';

        }
        
    }

    public function certificado(){
        if(isset($_GET['ssl'])){
            $ssl = $_GET['ssl'];
            $certificado = new Caracteristica();
            $todos_certificados = $certificado->getAllCertificado($ssl);
            require_once 'views/caracteristica/vista_certificado.php';

        }
        
    }

    public function responsive(){
        if(isset($_GET['mov'])){
            $mov = $_GET['mov'];
            $responsive = new Caracteristica();
            $todos_responsives = $responsive->getAllResponsive($mov);
            require_once 'views/caracteristica/vista_responsive.php';

        }
        
    }

    public function idioma(){
        if(isset($_GET['lang'])){
            $lang = $_GET['lang'];
            $idioma = new Caracteristica();
            $todos_idiomas = $idioma->getAllIdioma($lang);
            require_once 'views/caracteristica/vista_idioma.php';

        }
        
    }

    public function seo(){
        if(isset($_GET['opt'])){
            $opt = $_GET['opt'];
            $seo = new Caracteristica();
            $todos_seos = $seo->getAllSeo($opt);
            require_once 'views/caracteristica/vista_seo.php';

        }
        
    }
    
}