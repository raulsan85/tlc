<?php $web = $web->fetch_object(); ?>
<h1><?=$web->web?></h1>

<h2><a href="<?=$web->url?>"><?=$web->url?></a></h2>    
<h3>Plugins:</h3> 
    <ul>
        <?php while($plugins = $plugin->fetch_object()): ?>
        <li><a href="<?=base_url?>plugin/plugins&plug=<?=$plugins->plugin?>"><?=$plugins->plugin?></a></li>
        <?php endwhile; ?>
    </ul>