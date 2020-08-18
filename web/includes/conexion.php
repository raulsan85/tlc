<?php

/* Conexion a la base de datos
 */

$servidor = 'localhost';
$usuario = 'root';
$password = '';
$basededatos = 'tlc';
$db = mysqli_connect($servidor, $usuario, $password, $basededatos);

mysqli_query($db, "SET NAMES 'utf8'");

//Iniciar la sesion:

if(!isset($_SESSION)){
    session_start();
}
