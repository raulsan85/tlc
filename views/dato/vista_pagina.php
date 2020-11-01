<?php $datos = $dato->fetch_object(); ?>
<h1><?=$datos->web?></h1>

<h2><a href="<?=$datos->url?>"><?=$datos->url?></a></h2>    
<h3>Datos estructurados:</h3> 
    <ul>
        <?php while($datos = $dato->fetch_object()): ?>
            <li><?=$datos->dato?></li>
        <?php endwhile; ?>
    </ul>
