<?php if(isset($_SESSION['web_ok'])): ?>
    <h1>NUEVA WEB AÑADIDA</h1>
    <h2>Has añadido la siguiente web:</h2>
    <p>Nombre de la web: <?=$web->web?></p>
    <p>URL de la web: <?=$web->url?></p>
    <p>Año de la web: <?=$web->ano?></p>
    <p>Servidor de la web: <?=$web->servidor?></p>
<?php elseif(isset($_SESSION['web_error']['save'])): ?>
    <strong class="alert_red"><?=$_SESSION['web_error']['save']?></strong>
<?php elseif(isset($_SESSION['web_error'])): ?>
    <ul>
        <?php foreach ($_SESSION['web_error'] as $error): ?>
            <li><strong class="alert_red"><?=$error?></strong></li>
        <?php endforeach; ?>    
    </ul>
        
<?php endif; ?>

<a href="<?=base_url?>">Editar Web</a>
<a href="<?=base_url?>">Crear Cliente</a>