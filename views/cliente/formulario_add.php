<!--Comprobamos si existe edit para mostrar un titulo o el otro-->
<?php if(isset($edit) &&isset($edit_cliente) && is_object($edit_cliente)):?>
    <h1>Editar Cliente <?=$edit_cliente->nombre?></h1>
    <?php $url_action = base_url."cliente/guardar&id=".$edit_cliente->id;?>
<?php else:?>
    <h1>Añadir un nuevo Cliente</h1>
    <!--Para que cambie la url del action del formulario-->
    <?php $url_action = base_url."web/guardar";?>
<?php endif;?> 
    
<form action="<?=base_url?>cliente/guardar" method="POST">

    <h2>Cliente</h2>
    
    <label for="nombre_cliente">Nombre de la empresa</label>
    <input type="text" name="nombre_cliente" required /><br/>

    <label for="direccion">Dirección</label>
    <input type="text" name="direccion" /><br/>

    <label for="codigo_postal">Código Postal</label>
    <input type="text" name="codigo_postal" /><br/>

    <label for="ciudad">Ciudad</label>
    <input type="text" name="ciudad" /><br/>

    <label for="provincia">Provincia</label>
    <input type="text" name="provincia" /><br/>

    <label for="pais">País</label>
    <input type="text" name="pais" /><br/>

    <label for="gestor_cuentas">Gestor de Cuentas</label>
    <input type="text" name="gestor_cuentas" /><br/>

    <label for="fecha_alta">Fecha de alta</label>
    <input type="date" name="fecha_alta" /><br/>

    <label for="baja">Estado</label>
    <select name="baja" >
        <option>Habitual</option>
        <option>Baja</option>
        <option>Impagado</option>
    </select>
    <br/>

    <label for="division">División</label>
    <select name="division" >
        <option>TLC</option>
        <option>Seidonet</option>
    </select>
    <br/>

    <label for="teamleader">Enlace a Teamleader</label>
    <input type="url" name="teamleader" /><br/>
    
    <input type="submit" value="Guardar" />

</form>