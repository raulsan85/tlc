<h1><?=$web->web?></h1>

<h2><a href="<?=$web->url?>"><?=$web->url?></a></h2>

<h3>Datos de la empresa</h3>
<ul>
    <li>Empresa: <?=$cliente->nombre?></li>
    <li>División: <?=$cliente->division?></li>
    <li>Estado: <?=$cliente->baja?></li>
    <li>Servicios contratados: <?=$servicio->servicios_contratados?></li>
</ul>
<h3>Datos de la web</h3>
<ul>
    <li>Año de creación: <?=$web->ano?></li>
    <li>Servidor: <?=$web->servidor?></li>
    <li>Temática: 
        <?php while($tema = $tematica->fetch_object()): ?>
            <?=$tema->tematica?>
        <?php endwhile; ?>
    </li>
    <li>Tipo de desarrollo: <?=$caracteristica->desarrollo?></li>
    <li>Tipo de web: <?=$caracteristica->tipo?></li>
    <li>Tipo de diseño: <?=$caracteristica->design?></li>
    <li>Framework: <?=$caracteristica->framework?></li>
    <li>Theme: <?=$caracteristica->theme?></li>
    <li>Certificado SSL: <?=$caracteristica->certificado?></li>
    <li>Responsive: <?=$caracteristica->responsive?></li>
    <li>Idiomas: <?=$caracteristica->idiomas?></li>
    <li>Optimización: <?=$caracteristica->seo?></li>
</ul>
<h3>SEO</h3>
<h4>Estadísticas Rank Tracker</h4>
<p>2019</p>
<ul>
    <li>Índice de posicionamiento: <?=$seo->indice_posicionamiento_19?></li>
    <li>Posición media: <?=$seo->posicion_media_19?></li>
    <li>Total búsquedas: <?=$seo->total_busquedas_19?></li>
    <li>Palabras con más de 10 búsquedas trakeadas:  <?=$seo->palabras_mas_10_busquedas_19?></li>
</ul>
<p>2020</p>
<ul>
    <li>Índice de posicionamiento: <?=$seo->indice_posicionamiento_20?></li>
    <li>Posición media: <?=$seo->posicion_media_20?></li>
    <li>Total búsquedas: <?=$seo->total_busquedas_20?></li>
    <li>Palabras con más de 10 búsquedas trakeadas: <?=$seo->palabras_mas_10_busquedas_20?></li>
</ul>
<h4>Backlinks (SemRush)</h4>
<ul>
    <li>Backlinks: <?=$seo->backlinks_20?></li>
    <li>DoFollow: <?=$seo->dofollow_20?></li>
    <li>Dominios diferentes: <?=$seo->dominios_backlinks_20?></li>
</ul>
<h4>Analíticas</h4>
<p>2019</p>
<ul>
    <li>Visitas: </li>
    <li>Tasa de rebote total:  </li>
    <li>Tasa de rebote en ordenador:  </li>
    <li>Tasa de rebote en móvil:  </li>
    <li>Tiempo medio de sesión:  </li>
    <li>Páginas por sesión:  </li>
</ul>
<p>2020</p>
<ul>
    <li>Visitas:  </li>
    <li>Tasa de rebote total: </li>
    <li>Tasa de rebote en ordenador:  </li>
    <li>Tasa de rebote en móvil:  </li>
    <li>Tiempo medio de sesión: </li>
    <li>Páginas por sesión: </li>
</ul>
<h4>PageSpeed</h4>
<p>2019</p>
<ul>
    <li>Tiempo de carga: </li>
    <li>First Byte:  </li>
    <li>Repeat View:  </li>
    <li>Puntuación PageSpeed Ordenador: </li>
    <li>Puntuación PageSpeed Móvil:  </li>
</ul>
<h4>Datos Estructurados</h4>
<ul>
    <li></li>
</ul>