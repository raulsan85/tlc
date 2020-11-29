<!--Comprobamos si existe edit para mostrar un titulo o el otro-->
<?php if(isset($edit) &&isset($edit_cliente) && is_object($edit_cliente)):?>
    <h1>Editar Cliente <?=$edit_cliente->nombre?></h1>
    <?php $url_action = base_url."cliente/guardar&id=".$edit_cliente->id;?>
<?php else:?>
    <h1>Añadir un nuevo Cliente</h1>
    <!--Para que cambie la url del action del formulario-->
    <?php $url_action = base_url."cliente/guardar";?>
<?php endif;?> 
    
<form action="<?=$url_action?>" method="POST" enctype="multipart/form-data">

    <h2>Cliente</h2>
    
    <label for="nombre_cliente">Nombre de la empresa</label>
    <input type="text" name="nombre_cliente" value="<?=isset($edit_cliente) && is_object($edit_cliente) ? $edit_cliente->nombre : ''; ?>" required /><br/>

    <label for="direccion">Dirección</label>
    <input type="text" name="direccion" value="<?=isset($edit_cliente) && is_object($edit_cliente) ? $edit_cliente->direccion : ''; ?>"/><br/>

    <label for="codigo_postal">Código Postal</label>
    <input type="text" name="codigo_postal" value="<?=isset($edit_cliente) && is_object($edit_cliente) ? $edit_cliente->codigo_postal : ''; ?>"/><br/>

    <label for="ciudad">Ciudad</label>
    <input type="text" name="ciudad" value="<?=isset($edit_cliente) && is_object($edit_cliente) ? $edit_cliente->ciudad : ''; ?>"/><br/>

    <label for="provincia">Provincia</label>
    <input type="text" name="provincia" value="<?=isset($edit_cliente) && is_object($edit_cliente) ? $edit_cliente->provincia : ''; ?>"/><br/>

    <label for="pais">País</label>
    <input type="text" name="pais" value="<?=isset($edit_cliente) && is_object($edit_cliente) ? $edit_cliente->pais : ''; ?>"/><br/>

    <label for="gestor_cuentas">Gestor de Cuentas</label>
    <input type="text" name="gestor_cuentas" value="<?=isset($edit_cliente) && is_object($edit_cliente) ? $edit_cliente->gestor_cuentas : ''; ?>"/><br/>

    <label for="fecha_alta">Fecha de alta</label>
    <input type="date" name="fecha_alta" value="<?=isset($edit_cliente) && is_object($edit_cliente) ? $edit_cliente->fecha_alta : ''; ?>"/><br/>

    <label for="baja">Estado</label>
    <select name="baja" >
        <option <?=isset($edit_cliente) && is_object($edit_cliente) && $edit_cliente->baja == "Habitual" ? 'selected' : ''?>>Habitual</option>
        <option <?=isset($edit_cliente) && is_object($edit_cliente) && $edit_cliente->baja == "Baja" ? 'selected' : ''?>>Baja</option>
        <option <?=isset($edit_cliente) && is_object($edit_cliente) && $edit_cliente->baja == "Impagado" ? 'selected' : ''?>>Impagado</option>
    </select>
    <br/>

    <label for="division">División</label>
    <select name="division" >
        <option <?=isset($edit_cliente) && is_object($edit_cliente) && $edit_cliente->division == "TLC" ? 'selected' : ''?>>TLC</option>
        <option <?=isset($edit_cliente) && is_object($edit_cliente) && $edit_cliente->division == "Seidonet" ? 'selected' : ''?>>Seidonet</option>
    </select>
    <br/>

    <label for="teamleader">Enlace a Teamleader</label>
    <input type="url" name="teamleader" value="<?=isset($edit_cliente) && is_object($edit_cliente) ? $edit_cliente->teamleader : ''; ?>" /><br/>

    <label for="servicios_contratados">Servicios Contratados</label>
    <select name="servicios_contratados" >
        <option <?=isset($edit_servicio) && is_object($edit_servicio) && $edit_servicio->servicios_contratados == "NULL" ? 'selected' : ''?>>No Disponible</option>
        <option <?=isset($edit_servicio) && is_object($edit_servicio) && $edit_servicio->servicios_contratados == "Mantenimiento" ? 'selected' : ''?>>Mantenimiento</option>
        <option <?=isset($edit_servicio) && is_object($edit_servicio) && $edit_servicio->servicios_contratados == "Alojamiento" ? 'selected' : ''?>>Alojamiento</option>
        <option <?=isset($edit_servicio) && is_object($edit_servicio) && $edit_servicio->servicios_contratados == "Dominio" ? 'selected' : ''?>>Dominio</option>
        <option <?=isset($edit_servicio) && is_object($edit_servicio) && $edit_servicio->servicios_contratados == "Correo" ? 'selected' : ''?>>Correo</option>
    </select>
    <br/>
    
    <input type="submit" value="Guardar" />

</form>