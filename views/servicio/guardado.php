<?php if(isset($_SESSION['servicio_ok'])): ?>
    <h1>NUEVO SERVICIO AÑADIDO PARA EL CLIENTE <?=$cliente->nombre?></h1>
    <h2>Has añadido el siguiente servicio:</h2>
    <p><?=$servicio->servicios_contratados == NULL ? "N/D" : $servicio->servicios_contratados?></p>
<?php elseif(isset($_SESSION['servicio_error']['save'])): ?>
    <strong class="alert_red"><?=$_SESSION['servicio_error']['save']?></strong>
<?php elseif(isset($_SESSION['servicio_error'])): ?>
    <ul>
        <?php foreach ($_SESSION['servicio_error'] as $error): ?>
            <li><strong class="alert_red"><?=$error?></strong></li>
        <?php endforeach; ?>    
    </ul>
        
<?php endif; ?>

<a href="<?=base_url?>servicio/editar&id=<?=$cliente->id?>">Editar Servicio</a>
<a href="<?=base_url?>servicio/index">Ver Servicios</a>
<a href="<?=base_url?>">Inicio</a>
