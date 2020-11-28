<?php if(isset($_SESSION['contacto_ok'])): ?>
    <h1>CONTACTO EDITADO</h1>
    <h2>Has editado el siguiente contacto:</h2>
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

<a href="<?=base_url?>contacto/editar&id=<?=$contacto->id?>">Editar Contacto</a>
<a href="<?=base_url?>general/pagina&id=<?=$contacto->id?>">Ver Ficha Completa</a>
<a href="<?=base_url?>contacto/index">Ver Contactos</a>
<a href="<?=base_url?>">Inicio</a>