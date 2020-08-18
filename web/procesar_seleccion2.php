<?php require_once 'includes/conexion.php';?>

<?php

if(isset($_POST)){
    echo "SELECT ";
    foreach (array_keys($_POST) as $consulta) {
        //echo $consulta."</br>";
        echo $consulta.", ";
        /*$sql = "SELECT ".$_POST['nombre'].", ".$_POST['direccion']." FROM clientes;";
        $consulta = mysqli_query($db, $sql);
        $columnas = mysqli_fetch_assoc($consulta);
        while($columna = mysqli_fetch_assoc($consulta)){
            $nombres= $columna['nombre'];
            $direcciones= $columna['direccion'];*/
    }
    echo "FROM clientes;";
        
}
?>
<table border="1">
            <tr>
                <th>Nombre</th>
                <th>Direccion</th>
            </tr>
        <?php
        /*    $_POST['nombre'] = "nombre";
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
        */?>
        </table>