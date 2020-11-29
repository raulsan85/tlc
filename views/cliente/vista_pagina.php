<h1><?=$cliente->nombre?></h1>

<h2>Webs</h2>
<?php while($url = $urls->fetch_object()): ?>
    <h2><a href="<?=$url->url?>"><?=$url->url?></a></h2>
<?php endwhile; ?>

<h3>Datos del cliente</h3>
<a href="<?=base_url?>cliente/editar&id=<?=$cliente->id?>">Editar</a>
<ul>
    <li>Nombre: <?=$cliente->nombre == NULL ? "N/D" : $cliente->nombre?></li>
    <li>Dirección: <?=$cliente->direccion == NULL ? "N/D" : $cliente->direccion?></li>
    <li>Código postal: <?=$cliente->codigo_postal == NULL ? "N/D" : $cliente->codigo_postal?></li>
    <li>Ciudad: <?=$cliente->ciudad == NULL ? "N/D" : $cliente->ciudad?></li>
    <li>Provincia: <?=$cliente->provincia == NULL ? "N/D" : $cliente->provincia?></li>
    <li>País: <?=$cliente->pais == NULL ? "N/D" : $cliente->pais?></li>
    <li>Gestor de cuentas: <?=$cliente->gestor_cuentas == NULL ? "N/D" : $cliente->gestor_cuentas?></li>
    <li>Fecha de Alta: <?=$cliente->fecha_alta == NULL ? "N/D" : $cliente->fecha_alta?></li>
    <li>Estado del cliente: <?=$cliente->baja == NULL ? "N/D" : $cliente->baja?></li>
    <li>División: <?=$cliente->division == NULL ? "N/D" : $cliente->division?></li>
    <li>Enlace a Teamleader: <?=$cliente->teamleader == NULL ? "N/D" : $cliente->teamleader?></li>
</ul>
<h3>Servicios Contratados</h3>
<a href="<?=base_url?>servicio/editar&id=<?=$cliente->id?>">Editar</a>
<ul>
    <li><?=!isset($servicio) || !is_object($servicio) || $servicio->servicios_contratados == "NULL" ? "N/D" : $servicio->servicios_contratados?></li>
</ul>
<h3>Contactos</h3>
<a href="<?=base_url?>contacto/crear&id=<?=$cliente->id?>">Añadir Contacto</a>
<ul>
    <?php while($persona = $contacto->fetch_object()): ?>
    <li><a href="<?=base_url?>contacto/pagina&id=<?=$persona->id?>"><?=$persona->nombre?> <?=$persona->apellidos?></a></li>
    <?php endwhile; ?>
</ul>