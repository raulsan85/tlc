<!--Comprobamos si existe edit para mostrar un titulo o el otro-->
<?php if(isset($edit) &&isset($edit_servicios) && is_object($edit_servicios)):?>
    <h1>Editar Servicios Contratados por <?=$cliente->nombre?></h1>
    <?php $url_action = base_url."servicio/guardar&id=".$cliente->id."&edit";?>
<?php else:?>
    <h1>Añadir Servicios Contratados por <?=$cliente->nombre?></h1>
    <!--Para que cambie la url del action del formulario-->
    <?php $url_action = base_url."servicio/guardar&id=".$cliente->id;?>
<?php endif;?> 
    
<form action="<?=$url_action?>" method="POST" enctype="multipart/form-data">
  
    <label for="servicios_contratados">Servicios contratados</label>
    <select name="servicios_contratados" >
        <option <?=isset($edit_servicios) && is_object($edit_servicios) && $edit_servicios->servicios_contratados == "NULL" ? 'selected' : ''?>>No Disponible</option>
        <option <?=isset($edit_servicios) && is_object($edit_servicios) && $edit_servicios->servicios_contratados == "Mantenimiento" ? 'selected' : ''?>>Mantenimiento</option>
        <option <?=isset($edit_servicios) && is_object($edit_servicios) && $edit_servicios->servicios_contratados == "Alojamiento" ? 'selected' : ''?>>Alojamiento</option>
        <option <?=isset($edit_servicios) && is_object($edit_servicios) && $edit_servicios->servicios_contratados == "Dominio" ? 'selected' : ''?>>Dominio</option>
        <option <?=isset($edit_servicios) && is_object($edit_servicios) && $edit_servicios->servicios_contratados == "Correo" ? 'selected' : ''?>>Correo</option>
    </select>
    <br/>
    
    <input type="submit" value="Guardar" />

</form>