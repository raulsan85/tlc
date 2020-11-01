<h1><?=$analitica->web?></h1>

<h2><a href="<?=$analitica->url?>"><?=$analitica->url?></a></h2>

<h3>Analíticas de la Web</h3>
<ul>
    <li>Visitas en 2019: <?=$analitica->visitas_19 == NULL ? "N/D" : $analitica->visitas_19?></li>
    <li>Tasa de Rebote en 2019: <?=$analitica->rebote_19 == NULL ? "N/D" : $analitica->rebote_19?></li>
    <li>Tasa de Rebote en Desktop en 2019: <?=$analitica->rebote_desk_19 == NULL ? "N/D" : $analitica->rebote_desk_19?></li>
    <li>Tasa de Rebote en Móvil en 2019: <?=$analitica->rebote_mob_19 == NULL ? "N/D" : $analitica->rebote_mob_19?> </li>
    <li>Tiempo de Sesión en 2019: <?=$analitica->tiempo_sesion_19 == NULL ? "N/D" : $analitica->tiempo_sesion_19?></li>
    <li>Páginas por Sesión en 2019: <?=$analitica->paginas_sesion_19 == NULL ? "N/D" : $analitica->paginas_sesion_19?></li>
    <li>Visitas en 2020: <?=$analitica->visitas_20 == NULL ? "N/D" : $analitica->visitas_20?></li>
    <li>Tasa de Rebote en 2020: <?=$analitica->rebote_20 == NULL ? "N/D" : $analitica->rebote_20?></li>
    <li>Tasa de Rebote en Desktop en 2020: <?=$analitica->rebote_desk_20 == NULL ? "N/D" : $analitica->rebote_desk_20?></li>
    <li>Tasa de Rebote en Móvil en 2020: <?=$analitica->rebote_mob_20 == NULL ? "N/D" : $analitica->rebote_mob_20?> </li>
    <li>Tiempo de Sesión en 2020: <?=$analitica->tiempo_sesion_20 == NULL ? "N/D" : $analitica->tiempo_sesion_20?></li>
    <li>Páginas por Sesión en 2020: <?=$analitica->paginas_sesion_20 == NULL ? "N/D" : $analitica->paginas_sesion_20?></li>
    <li>Tiempo de Carga en 2020: <?=$analitica->tiempo_carga_20 == NULL ? "N/D" : $analitica->tiempo_carga_20?></li>
    <li>First Byte en 2020: <?=$analitica->first_byte_20 == NULL ? "N/D" : $analitica->first_byte_20?></li>
    <li>Repeat View en 2020: <?=$analitica->repeat_view_20 == NULL ? "N/D" : $analitica->repeat_view_20?></li>
    <li>PageSpeed Desktop en 2020: <?=$analitica->pagespeed_desk_20 == NULL ? "N/D" : $analitica->pagespeed_desk_20?></li>
    <li>PageSpeed Móvil en 2020: <?=$analitica->pagespeed_mob_20 == NULL ? "N/D" : $analitica->pagespeed_mob_20?></li>
</ul>