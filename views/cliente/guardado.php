<?php if(isset($_SESSION['cliente_ok'])): ?>
    <h1>NUEVO CLIENTE AÑADIDO</h1>
    <h2>Has añadido el siguiente cliente:</h2>
    <p>Nombre del cliente: <?=$cliente->nombre == NULL ? "N/D" : $cliente->nombre?></p>
    <p>Dirección: <?=$cliente->direccion == NULL ? "N/D" : $cliente->direccion?></p>
    <p>Código Postal: <?=$cliente->codigo_postal == NULL ? "N/D" : $cliente->codigo_postal?></p>
    <p>Ciudad: <?=$cliente->ciudad == NULL ? "N/D" : $cliente->ciudad?></p>
    <p>Provincia: <?=$cliente->provincia == NULL ? "N/D" : $cliente->provincia?></p>
    <p>País: <?=$cliente->pais == NULL ? "N/D" : $cliente->pais?></p>
    <p>Gestor de cuentas: <?=$cliente->gestor_cuentas == NULL ? "N/D" : $cliente->gestor_cuentas?></p>
    <p>Fecha de alta: <?=$cliente->fecha_alta == NULL ? "N/D" : $cliente->fecha_alta?></p>
    <p>Estado del cliente: <?=$cliente->baja == NULL ? "N/D" : $cliente->baja?></p>
    <p>División: <?=$cliente->division == NULL ? "N/D" : $cliente->division?></p>
    <p>Enlace a Teamleader: <?=$cliente->teamleader == NULL ? "N/D" : $cliente->teamleader?></p>
<?php elseif(isset($_SESSION['cliente_error']['save'])): ?>
    <strong class="alert_red"><?=$_SESSION['cliente_error']['save']?></strong>
<?php elseif(isset($_SESSION['cliente_error'])): ?>
    <ul>
        <?php foreach ($_SESSION['cliente_error'] as $error): ?>
            <li><strong class="alert_red"><?=$error?></strong></li>
        <?php endforeach; ?>    
    </ul>
        
<?php endif; ?>

<a href="<?=base_url?>">Editar Cliente</a>
<a href="<?=base_url?>web/crear&id=<?=$cliente->id?>">Crear Web</a>