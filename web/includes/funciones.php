<?php

function consultaBbdd (){
    $_POST['nombre'] = "nombre";
            $_POST['direccion'] = "direccion";
            $postal = "codigo_postal";
            $sql = "SELECT ".$_POST['nombre'].", ".$_POST['direccion']." FROM clientes;";
            $consulta = mysqli_query($db, $sql);
            $columnas = mysqli_fetch_assoc($consulta);
            while($columna = mysqli_fetch_assoc($consulta)){
                $nombres= $columna['nombre'];
                $direcciones= $columna['direccion'];
}

