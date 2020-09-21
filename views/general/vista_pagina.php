<h1><?=$pagina->web?></h1>

<h2><a href="<?=$pagina->url?>"><?=$pagina->url?></a></h2>

<h3>Datos de la empresa</h3>
<ul>
    <li>Empresa: <?=$costumer->nombre?></li>
    <li>División: <?=$costumer->division?></li>
    <li>Estado: <?=$costumer->baja?></li>
    <li>Servicios contratados: <?=$service->servicios_contratados?> </li>
</ul>
<h3>Datos de la web</h3>
<ul>
    <li>Año de creación: <?=$pagina->ano?></li>
    <li>Servidor: <?=$pagina->servidor?></li>
    <li>Temática: <?=$temas->tematica?></li>
    <li>Tipo de desarrollo: <?=$feature->desarrollo?></li>
    <li>Tipo de web: <?=$feature->tipo?></li>
    <li>Tipo de diseño: <?=$feature->design?></li>
    <li>Framework: <?=$feature->framework?></li>
    <li>Theme: <?=$feature->theme?></li>
    <li>Certificado SSL: <?=$feature->certificado?></li>
    <li>Responsive: <?=$feature->responsive?></li>
    <li>Idiomas: <?=$feature->idiomas?></li>
    <li>Optimización: <?=$feature->seo?></li>
</ul>
<h3>SEO</h3>
<h4>Estadísticas Rank Tracker</h4>
<p>2019</p>
<ul>
    <li>Índice de posicionamiento: <?=$optimizacion->indice_posicionamiento?> </li>
    <li>Posición media: <?=$optimizacion->posicion_media?> </li>
    <li>Total búsquedas: <?=$optimizacion->total_busquedas?>  </li>
    <li>Palabras con más de 10 búsquedas trakeadas: <?=$optimizacion->palabras_mas_10_busquedas?>  </li>
</ul>
<p>2020</p>
<ul>
    <li>Índice de posicionamiento: </li>
    <li>Posición media: </li>
    <li>Total búsquedas: </li>
    <li>Palabras con más de 10 búsquedas trakeadas: </li>
</ul>
<h4>Backlinks (SemRush)</h4>
<ul>
    <li>Backlinks: <?=$optimizacion->backlinks_20?> </li>
    <li>DoFollow: <?=$optimizacion->dofollow_20?> </li>
    <li>Dominios diferentes: <?=$optimizacion->dominios_backlinks_20?> </li>
</ul>
<h4>Analíticas</h4>
<p>2019</p>
<ul>
    <li>Visitas: <?=$analytics->visitas_19?> </li>
    <li>Tasa de rebote total: <?=$analytics->rebote_19?>  </li>
    <li>Tasa de rebote en ordenador: <?=$analytics->rebote_desk_19?>  </li>
    <li>Tasa de rebote en móvil: <?=$analytics->rebote_mob_19?>  </li>
    <li>Tiempo medio de sesión: <?=$analytics->tiempo_sesion_19?>  </li>
    <li>Páginas por sesión: <?=$analytics->paginas_sesion_19?>  </li>
</ul>
<p>2020</p>
<ul>
    <li>Visitas: <?=$analytics->visitas_20?>  </li>
    <li>Tasa de rebote total: <?=$analytics->rebote_20?>  </li>
    <li>Tasa de rebote en ordenador: <?=$analytics->rebote_desk_20?>  </li>
    <li>Tasa de rebote en móvil: <?=$analytics->rebote_mob_20?>  </li>
    <li>Tiempo medio de sesión: <?=$analytics->tiempo_sesion_20?>  </li>
    <li>Páginas por sesión: <?=$analytics->paginas_sesion_20?>  </li>
</ul>
<h4>PageSpeed</h4>
<p>2019</p>
<ul>
    <li>Tiempo de carga: <?=$analytics->tiempo_carga_20?> </li>
    <li>First Byte: <?=$analytics->first_byte_20?>  </li>
    <li>Repeat View: <?=$analytics->repeat_view_20?>  </li>
    <li>Puntuación PageSpeed Ordenador: <?=$analytics->pagespeed_desk_20?>  </li>
    <li>Puntuación PageSpeed Móvil: <?=$analytics->pagespeed_mob_20?>  </li>
</ul>
<h4>Datos Estructurados</h4>
<ul>
    <li></li>
</ul>