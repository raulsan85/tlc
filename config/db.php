<?php

class Database{
    public static function connect(){
        $db = new mysqli('localhost', 'root', 'tlc');
        $db->query("SET NAMES 'UTF8");
        return $db;
    }
}

