<h1><?=$cliente->nombre?></h1>

<h2>Webs</h2>
<?php while($url = $urls->fetch_object()): ?>
    <h2><a href="<?=$url->url?>"><?=$url->url?></a></h2>
<?php endwhile; ?>

<h3>Datos del cliente</h3>
<ul>
    <li>Nombre: <?=$cliente->nombre?></li>
    <li>Dirección: <?=$cliente->direccion?></li>
    <li>Código postal: <?=$cliente->codigo_postal?></li>
    <li>Ciudad: <?=$cliente->ciudad?> </li>
    <li>Provincia: <?=$cliente->provincia?> </li>
    <li>País: <?=$cliente->pais?> </li>
    <li>Gestor de cuentas: <?=$cliente->gestor_cuentas?> </li>
    <li>Fecha de Alta: <?=$cliente->fecha_alta?> </li>
    <li>Estado del cliente: <?=$cliente->baja?> </li>
    <li>División: <?=$cliente->division?> </li>
    <li>Enlace a Teamleader: <?=$cliente->teamleader?> </li>
</ul>
<h3>Contactos</h3>
<ul>
    <?php while($persona = $contacto->fetch_object()): ?>
        <li><a href="<?=base_url?>contacto/pagina&id=<?=$persona->id?>"><?=$persona->nombre?> <?=$persona->apellidos?></a></li>
    <?php endwhile; ?>
</ul>