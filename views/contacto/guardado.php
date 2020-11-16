<?php if(isset($_SESSION['contacto_ok'])): ?>
    <h1>NUEVO CONTACTO AÑADIDO</h1>
    <h2>Has añadido el siguiente contacto:</h2>
    <p>Nombre: <?=$contacto->nombre?></p>
    <p>Apellidos: <?=$contacto->apellidos?></p>
    <p>Cargo: <?=$contacto->cargo?></p>
    <p>Teléfono: <?=$contacto->telefono?></p>
    <p>Email: <?=$contacto->email?></p>
<?php elseif(isset($_SESSION['contacto_error']['save'])): ?>
    <strong class="alert_red"><?=$_SESSION['contacto_error']['save']?></strong>
<?php elseif(isset($_SESSION['contacto_error']['save_pivot'])): ?>
    <strong class="alert_red"><?=$_SESSION['contacto_error']['save_pivot']?></strong>
<?php elseif(isset($_SESSION['contacto_error'])): ?>
    <ul>
        <?php foreach ($_SESSION['contacto_error'] as $error): ?>
            <li><strong class="alert_red"><?=$error?></strong></li>
        <?php endforeach; ?>    
    </ul>
        
<?php endif; ?>

<a href="<?=base_url?>">Editar Contacto</a>
<a href="<?=base_url?>">Ver Ficha Completa</a>
<a href="<?=base_url?>">Ver Contactos</a>
<a href="<?=base_url?>">Inicio</a>