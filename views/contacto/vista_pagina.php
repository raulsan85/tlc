<h1><?=$contacto->nombre?> <?=$contacto->apellidos?></h1>

<h2>Empresa</h2>
<h2><a href="<?=base_url?>cliente/pagina&id=<?=$contacto->cliente_id?>"><?=$contacto->empresa?></a></h2>

<h2>Webs</h2>
<?php while($url = $urls->fetch_object()): ?>
    <h2><a href="<?=$url->url?>"><?=$url->url?></a></h2>
<?php endwhile; ?>

    
<h3>Datos del contacto</h3>
<ul>
    <li>Nombre: <?=$contacto->nombre?></li>
    <li>Apellidos: <?=$contacto->apellidos?></li>
    <li>Cargo: <?=$contacto->cargo?></li>
    <li>Teléfono: <?=$contacto->telefono?> </li>
    <li>Email: <?=$contacto->email?> </li>
</ul>
