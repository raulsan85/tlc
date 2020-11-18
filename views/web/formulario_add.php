<!--Comprobamos si existe edit para mostrar un titulo o el otro-->
<?php if(isset($edit) &&isset($edit_web) && is_object($edit_web)):?>
    <h1>Editar Web <?=$edit_web->web?></h1>
    <?php $url_action = base_url."web/guardar&id=".$edit_web->id;?>
<?php else:?>
    <h1>Añadir una nueva Web</h1>
    <!--Para que cambie la url del action del formulario-->
    <?php $url_action = base_url."web/guardar";?>
<?php endif;?>  
    
<form action="<?=$url_action?>" method="POST">

    <h2>Web</h2>
    
    <?php if(!isset($edit)): ?>
    <p>Cliente: <?=$web->nombre?></p>
    <?php endif; ?>
    
    <input type="hidden" value="<?=isset($edit) ? $edit_web->cliente_id : $web->id?>" name="cliente_id"/>
    
    <label for="nombre_web">Nombre de la web</label>
    <input type="text" name="nombre_web" value="<?=isset($edit_web) && is_object($edit_web) ? $edit_web->web : ''?>" required /><br/>

    <label for="url">Url</label>
    <input type="url" name="url" value="<?=isset($edit_web) && is_object($edit_web) ? $edit_web->url : ''?>" required /><br/>

    <label for="ano">Fecha de Creación</label>
    <input type="date" name="ano" value="<?=isset($edit_web) && is_object($edit_web) ? $edit_web->ano : ''?>"/><br/>

    <label for="servidor">Servidor</label>
    <select name="servidor" >
        <option <?=isset($edit_web) && is_object($edit_web) && $edit_web->servidor == "Pro" ? 'selected' : ''?>>Pro</option>
        <option <?=isset($edit_web) && is_object($edit_web) && $edit_web->servidor == "Dev" ? 'selected' : ''?>>Dev</option>
        <option <?=isset($edit_web) && is_object($edit_web) && $edit_web->servidor == "Dedicado" ? 'selected' : ''?>>Dedicado</option>
    </select>
    <br/>
    <input type="submit" value="Guardar" />

</form>