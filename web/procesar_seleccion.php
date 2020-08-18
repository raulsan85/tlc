<?php require_once 'includes/conexion.php';?>

    
<?php

if(!empty($_POST)){
    //var_dump($_POST);
    if(!empty($_POST['clientes'])){
        echo "LUNES";
    }
    if (!empty($_POST['contactos'])) {
        echo "MARTES";
    }
    if (!empty($_POST['webs'])) {
        echo "MIERCOLES";
    }
    if (!empty($_POST['tematica'])) {    
        echo "JUEVES";
    }
    if (!empty($_POST['servicios'])) {
        echo "VIERNES";
    } 
    if (!empty($_POST['caracteristicas'])) {
        echo "VIERNES";
    } 
    if (!empty($_POST['seo'])) {
        echo "VIERNES";
    }
}else{?> 
    <table border="1">
        <tr>
            <th>Nombre</th>
            <th>Direccion</th>
            <th>Código Postal</th>
            <th>Ciudad</th>
            <th>Provincia</th>
            <th>País</th>
            <th>Gestor de cuentas</th>
            <th>Fecha de alta</th>
            <th>Estado</th>
            <th>División</th>
        </tr>
        <?php
            
            $sql = "SELECT nombre, direccion, codigo_postal, ciudad, provincia, pais, gestor_cuentas, fecha_alta, baja, division FROM clientes;";
            $consulta = mysqli_query($db, $sql);
            $columnas = mysqli_fetch_assoc($consulta);
            while($columna = mysqli_fetch_assoc($consulta)){
                $nombres= $columna['nombre'];
                $direcciones= $columna['direccion'];
                $codigosPostales= $columna['codigo_postal'];
                $ciudades= $columna['ciudad'];
                $provincias= $columna['provincia'];
                $paises= $columna['pais'];
                $gestores= $columna['gestor_cuentas'];
                $altas= $columna['fecha_alta'];
                $estados= $columna['baja'];
            }    
                ?>        

        <?php 
            //foreach ($columnas as $columna) {
        ?>        
            <tr>
                <td><?=$nombres?></td>
                <td><?=$direcciones?></td>
                <td><?=$codigosPostales?></td>
                <td><?=$ciudades?></td>
                <td><?=$provincias?></td>
                <td><?=$paises?></td>
                <td><?=$gestores?></td>
                <td><?=$altas?></td>
                <td><?=$estados?></td>
            </tr>
<?php }
?>

