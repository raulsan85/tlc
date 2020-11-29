<h1><?=$web->web?></h1>

<h2><a href="<?=$web->url?>"><?=$web->url?></a></h2>

<h3>Datos de la empresa</h3>   
<a href="<?=base_url?>cliente/editar&id=<?=$cliente->id?>">Editar</a>
<ul>
    <li>Empresa:    
        <?php if($cliente->nombre == NULL): ?>
            N/D
        <?php else: ?>
            <a href="<?=base_url?>cliente/pagina&id=<?=$cliente->id?>"><?=$cliente->nombre?></a>
        <?php endif; ?>
            
    <li>División: <?=$cliente == NULL || $cliente->division == NULL ? "N/D" : $cliente->division?></li>
    <li>Estado: <?=$cliente == NULL || $cliente->baja == NULL ? "N/D" : $cliente->baja?></li>
</ul>
<h3>Servicios contratados</h3>
<?php if(isset($servicio) && is_object($servicio)):?>
    <a href="<?=base_url?>servicio/editar&id=<?=$servicio->id?>">Editar</a>
<?php else:?>
    <a href="<?=base_url?>servicio/crear&id=<?=$cliente->id?>">Añadir</a>
<?php endif;?>
<ul>
    <li><?=$servicio == NULL || $servicio->servicios_contratados == NULL ? "N/D" : $servicio->servicios_contratados?></li>
</ul>
<h3>Datos de la web</h3>
<a href="<?=base_url?>web/editar&id=<?=$web->id?>">Editar</a>
<ul>
    <li>Año de creación: <?=$web == NULL || $web->ano == NULL ? "N/D" : $web->ano?></li>
    <li>Servidor: <?=$web == NULL || $web->servidor == NULL ? "N/D" : $web->servidor?></li>
    <li>Temática: 
        <?php if($tematica->fetch_object() == NULL): ?>
        N/D
        <?php else: ?>
        <ul>
            <?php while($tema = $tematica->fetch_object()): ?>
            <li><?=$tema->tematica?></li>
            <?php endwhile; ?>
        </ul>
        <?php endif; ?>
    </li>
    <li>Tipo de desarrollo: <?=$caracteristica == NULL || $caracteristica->desarrollo == NULL ? "N/D" : $caracteristica->desarrollo?></li>
    <li>Tipo de web: <?=$caracteristica == NULL || $caracteristica->tipo == NULL ? "N/D" : $caracteristica->tipo?></li>
    <li>Tipo de diseño: <?=$caracteristica == NULL || $caracteristica->design == NULL ? "N/D" : $caracteristica->design?></li>
    <li>Framework: <?=$caracteristica == NULL || $caracteristica->framework == NULL ? "N/D" : $caracteristica->framework?></li>
    <li>Theme: <?=$caracteristica == NULL || $caracteristica->theme == NULL ? "N/D" : $caracteristica->theme?></li>
    <li>Certificado SSL: <?=$caracteristica == NULL || $caracteristica->certificado == NULL ? "N/D" : $caracteristica->certificado?></li>
    <li>Responsive: <?=$caracteristica == NULL || $caracteristica->responsive == NULL ? "N/D" : $caracteristica->responsive?></li>
    <li>Idiomas: <?=$caracteristica == NULL || $caracteristica->idiomas == NULL ? "N/D" : $caracteristica->idiomas?></li>
    <li>Optimización: <?=$caracteristica == NULL || $caracteristica->seo == NULL ? "N/D" : $caracteristica->seo?></li>
</ul>
<h3>Plugins</h3>
<?php if($plugin->num_rows==0): ?>
ND
<?php else: ?>
<ul>
        <?php while($plug = $plugin->fetch_object()): ?>
        <li><?=$plug->plugin?></li>
        <?php endwhile; ?>
</ul>
<?php endif; ?>
<h3>SEO</h3>
<h4>Estadísticas Rank Tracker</h4>
<p>2019</p>
<ul>
    <li>Índice de posicionamiento: <?=$seo == NULL || $seo->indice_posicionamiento_19 == NULL ? "N/D" : $seo->indice_posicionamiento_19?></li>
    <li>Posición media: <?=$seo == NULL || $seo->posicion_media_19 == NULL ? "N/D" : $seo->posicion_media_19?></li>
    <li>Total búsquedas: <?=$seo == NULL || $seo->total_busquedas_19 == NULL ? "N/D" : $seo->total_busquedas_19?></li>
    <li>Palabras con más de 10 búsquedas trakeadas:  <?=$seo == NULL || $seo->palabras_mas_10_busquedas_19 == NULL ? "N/D" : $seo->palabras_mas_10_busquedas_19?></li>
</ul>
<p>2020</p>
<ul>
    <li>Índice de posicionamiento: <?=$seo == NULL || $seo->indice_posicionamiento_20 == NULL ? "N/D" : $seo->indice_posicionamiento_20?></li>
    <li>Posición media: <?=$seo == NULL || $seo->posicion_media_20 == NULL ? "N/D" : $seo->posicion_media_20?></li>
    <li>Total búsquedas: <?=$seo == NULL || $seo->total_busquedas_20 == NULL ? "N/D" : $seo->total_busquedas_20?></li>
    <li>Palabras con más de 10 búsquedas trakeadas: <?=$seo == NULL || $seo->palabras_mas_10_busquedas_20 == NULL ? "N/D" : $seo->palabras_mas_10_busquedas_20?></li>
</ul>
<h4>Backlinks (SemRush)</h4>
<ul>
    <li>Backlinks: <?=$seo == NULL || $seo->backlinks_20 == NULL ? "N/D" : $seo->backlinks_20?></li>
    <li>DoFollow: <?=$seo == NULL || $seo->dofollow_20 == NULL ? "N/D" : $seo->dofollow_20?></li>
    <li>Dominios diferentes: <?=$seo == NULL || $seo->dominios_backlinks_20 == NULL ? "N/D" : $seo->dominios_backlinks_20?></li>
</ul>
<h4>Analíticas</h4>
<p>2019</p>
<ul>
    <li>Visitas: <?=$analitica == NULL || $analitica->visitas_19 == NULL ? "N/D" : $analitica->visitas_19?></li>
    <li>Tasa de rebote total:  <?=$analitica == NULL || $analitica->rebote_19 == NULL ? "N/D" : $analitica->rebote_19?></li>
    <li>Tasa de rebote en ordenador:  <?=$analitica == NULL || $analitica->rebote_desk_19 == NULL ? "N/D" : $analitica->rebote_desk_19?></li>
    <li>Tasa de rebote en móvil:  <?=$analitica == NULL || $analitica->rebote_mob_19 == NULL ? "N/D" : $analitica->rebote_mob_19?></li>
    <li>Tiempo medio de sesión:  <?=$analitica == NULL || $analitica->tiempo_sesion_19 == NULL ? "N/D" : $analitica->tiempo_sesion_19?></li>
    <li>Páginas por sesión:  <?=$analitica == NULL || $analitica->paginas_sesion_19 == NULL ? "N/D" : $analitica->paginas_sesion_19?></li>
</ul>
<p>2020</p>
<ul>
    <li>Visitas:  <?=$analitica == NULL || $analitica->visitas_20 == NULL ? "N/D" : $analitica->visitas_20?></li>
    <li>Tasa de rebote total: <?=$analitica == NULL || $analitica->rebote_20 == NULL ? "N/D" : $analitica->rebote_20?></li>
    <li>Tasa de rebote en ordenador:  <?=$analitica == NULL || $analitica->rebote_desk_20 == NULL ? "N/D" : $analitica->rebote_desk_20?></li>
    <li>Tasa de rebote en móvil:  <?=$analitica == NULL || $analitica->rebote_mob_20 == NULL ? "N/D" : $analitica->rebote_mob_20?></li>
    <li>Tiempo medio de sesión: <?=$analitica == NULL || $analitica->tiempo_sesion_20 == NULL ? "N/D" : $analitica->tiempo_sesion_20?></li>
    <li>Páginas por sesión: <?=$analitica == NULL || $analitica->paginas_sesion_19 == NULL ? "N/D" : $analitica->paginas_sesion_19?></li>
</ul>
<h4>PageSpeed</h4>
<p>2020</p>
<ul>
    <li>Tiempo de carga: <?=$analitica == NULL || $analitica->tiempo_carga_20 == NULL ? "N/D" : $analitica->tiempo_carga_20?></li>
    <li>First Byte:  <?=$analitica == NULL || $analitica->first_byte_20 == NULL ? "N/D" : $analitica->first_byte_20?></li>
    <li>Repeat View:  <?=$analitica == NULL || $analitica->repeat_view_20 == NULL ? "N/D" : $analitica->repeat_view_20?></li>
    <li>Puntuación PageSpeed Ordenador: <?=$analitica == NULL || $analitica->pagespeed_desk_20 == NULL ? "N/D" : $analitica->pagespeed_desk_20?></li>
    <li>Puntuación PageSpeed Móvil:  <?=$analitica == NULL || $analitica->pagespeed_mob_20 == NULL ? "N/D" : $analitica->pagespeed_mob_20?></li>
</ul>
<h4>Datos Estructurados</h4>
<?php if($dato_estructurado->num_rows==0): ?>
ND
<?php else: ?>
<ul>
        <?php while($dato = $dato_estructurado->fetch_object()): ?>
        <li><?=$dato->dato?></li>
        <?php endwhile; ?>
</ul>
<?php endif; ?>
