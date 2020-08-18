<?php require_once 'includes/conexion.php';?>

<?php

if(isset($_POST)){
    if(isset($_POST['empresa'])){
        //$empresa= $_POST['empresa'];
        require_once 'includes/empresa.php';
    }
    if(isset($_POST['direccion'])){
        //$empresa= $_POST['empresa'];
        require_once 'includes/direccion.php';
    }
    if(isset($_POST['postal'])){
        //$empresa= $_POST['empresa'];
        require_once 'includes/postal.php';
    }
    if(isset($_POST['ciudad'])){
        //$empresa= $_POST['empresa'];
        require_once 'includes/ciudad.php';
    }    
}
?>
<table border="1">
            <tr>
                <th>Nombre</th>
                <th>Direccion</th>
            </tr>
        <?php
            $_POST['nombre'] = "nombre";
            $_POST['direccion'] = "direccion";
            $postal = "codigo_postal";
            $sql = "SELECT ".$_POST['nombre'].", ".$_POST['direccion']." FROM clientes;";
            $consulta = mysqli_query($db, $sql);
            $columnas = mysqli_fetch_assoc($consulta);
            while($columna = mysqli_fetch_assoc($consulta)){
                $nombres= $columna['nombre'];
                $direcciones= $columna['direccion'];
        ?>        

        <?php 
            //foreach ($columnas as $columna) {
        ?>        
                <tr>
                    <td><?=$nombres?></td>
                    <td><?=$direcciones?></td>
                </tr>
        <?php //} ?>
        <?php
            }
        ?>
        </table>