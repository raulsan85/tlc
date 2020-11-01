<?php $tematicas = $tematica->fetch_object(); ?>
<h1><?=$tematicas->web?></h1>

<h2><a href="<?=$tematicas->url?>"><?=$tematicas->url?></a></h2>    
<h3>Temáticas:</h3> 
    <ul>
        <?php while($tematicas = $tematica->fetch_object()): ?>
            <li><?=$tematicas->tematica?></li>
        <?php endwhile; ?>
    </ul>