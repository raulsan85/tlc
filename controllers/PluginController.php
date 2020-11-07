<?php

require_once 'models/plugin.php';

class PluginController{
    public function index(){
        $plugin = new Plugin();
        $todos_plugins = $plugin->getAll();
        require_once 'views/plugin/index.php';
    }
    
    public function pagina(){
        if(isset($_GET['id'])){
            $id = $_GET['id'];
            $plugin = new Plugin();
            $plugin->setId($id);
            $plugin = $plugin->getOne($id);
            $web = new Plugin();
            $web->setId($id);
            $web = $web->getOne($id);
            
        }
        
        
        require_once 'views/plugin/vista_pagina.php';
    }

    public function plugins(){
        if(isset($_GET['plug'])){
            $plug = $_GET['plug'];
            $plugin = new Plugin();
            $todos_plugins = $plugin->getAllPlugin($plug);
            require_once 'views/plugin/vista_plugin.php';

        }
        
    }   
}