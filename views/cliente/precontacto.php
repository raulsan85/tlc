<h1>SELECCIONA UN CLIENTE</h1>
<h2>Antes de añadir un nuevo contacto debes seleccionar o añadir un cliente</h2>
<form action="<?=base_url?>contacto/crear" method="POST">
    <input name="cliente" list="clientes">
    <datalist id="clientes">

    <?php while($cliente = $clientes->fetch_object()): ?>
        <option ><?=$cliente->id?> | <?=$cliente->nombre?>            
    <?php endwhile; ?>

    </datalist>
    
    <input type="submit" value="Seguir"/>
</form>

<h3>Si el cliente no existe, pincha aquí para crearlo</h3>
<a href="<?=base_url?>cliente/crear">Crear nuevo cliente</a>