<h1>Añadir una nueva Web</h1>
<form action="<?=base_url?>web/guardar" method="POST">

    <h2>Web</h2>
    
    <p>Cliente: <?=$web->nombre?></p>
    
    <input type="hidden" value="<?=$web->id?>" name="cliente_id"/>
    
    <label for="nombre_web">Nombre de la web</label>
    <input type="text" name="nombre_web" required /><br/>

    <label for="url">Url</label>
    <input type="url" name="url" required /><br/>

    <label for="ano">Fecha de Creación</label>
    <input type="date" name="ano" /><br/>

    <label for="servidor">Servidor</label>
    <select name="servidor" >
        <option>Pro</option>
        <option>Dev</option>
        <option>Dedicado</option>
    </select>
    <br/>
    <input type="submit" value="Guardar" />

</form>