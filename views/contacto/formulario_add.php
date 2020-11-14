<h1>Añadir un nuevo Contacto</h1>
<form action="<?=base_url?>contacto/guardar" method="POST">

    <h2>Contacto</h2>
    
    <p>Cliente: <?=$contacto->nombre_cliente?></p>
    
    <input type="hidden" value="<?=$contacto->cliente_id?>" name="cliente_id"/>
    
    <label for="nombre_contacto">Nombre</label>
    <input type="text" name="nombre_contacto" required /><br/>

    <label for="apellidos">Apellidos</label>
    <input type="text" name="apellidos" /><br/>

    <label for="cargo">Cargo</label>
    <input type="text" name="cargo" /><br/>

    <label for="telefono">Teléfono</label>
    <input type="tel" name="telefono" /><br/>

    <label for="email">Email</label>
    <input type="email" name="email" /><br/>

    <input type="submit" value="Guardar" />

</form>