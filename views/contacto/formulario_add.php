<!--Comprobamos si existe edit para mostrar un titulo o el otro-->
<?php if(isset($edit) &&isset($edit_contacto) && is_object($edit_contacto)):?>
    <h1>Editar Web <?=$edit_contacto->nombre?></h1>
    <?php $url_action = base_url."contacto/guardar&id=".$edit_contacto->id;?>
<?php else:?>
    <h1>Añadir un nuevo Contacto</h1>
    <!--Para que cambie la url del action del formulario-->
    <?php $url_action = base_url."contacto/guardar";?>
<?php endif;?>
    
<form action="<?=$url_action?>" method="POST" enctype="multipart/form-data">

    <h2>Contacto</h2>
    
    
    <input type="hidden" value="<?=isset($edit) ? $edit_contacto->cliente_id : $contacto->cliente_id?>" name="cliente_id"/>
    
    <label for="nombre_contacto">Nombre</label>
    <input type="text" name="nombre_contacto" value="<?=isset($edit_contacto) && is_object($edit_contacto) ? $edit_contacto->nombre : ''?>" required /><br/>

    <label for="apellidos">Apellidos</label>
    <input type="text" name="apellidos" value="<?=isset($edit_contacto) && is_object($edit_contacto) ? $edit_contacto->apellidos : ''?>" /><br/>

    <label for="cargo">Cargo</label>
    <input type="text" name="cargo" value="<?=isset($edit_contacto) && is_object($edit_contacto) ? $edit_contacto->cargo : ''?>" /><br/>

    <label for="telefono">Teléfono</label>
    <input type="tel" name="telefono" value="<?=isset($edit_contacto) && is_object($edit_contacto) ? $edit_contacto->telefono : ''?>" /><br/>

    <label for="email">Email</label>
    <input type="email" name="email" value="<?=isset($edit_contacto) && is_object($edit_contacto) ? $edit_contacto->email : ''?>" /><br/>

    <input type="submit" value="Guardar" />

</form>