<h1><?=$seo->web?></h1>

<h2><a href="<?=$seo->url?>"><?=$seo->url?></a></h2>

<h3>SEO de la Web</h3>
<ul>
    <li>Nota: <?=$seo->nota == NULL ? "N/D" : $seo->nota?></li>
    <li>Palabras con más de 10 búsquedas en 2019: <?=$seo->palabras_mas_10_busquedas_19 == NULL ? "N/D" : $seo->palabras_mas_10_busquedas_19?></li>
    <li>Posición media en 2019: <?=$seo->posicion_media_19 == NULL ? "N/D" : $seo->posicion_media_19?></li>
    <li>Índice de posicionamiento en 2019: <?=$seo->indice_posicionamiento_19 == NULL ? "N/D" : $seo->indice_posicionamiento_19?> </li>
    <li>Total de búsquedas en 2019: <?=$seo->total_busquedas_19 == NULL ? "N/D" : $seo->total_busquedas_19?></li>
    <li>Palabras con más de 10 búsquedas en 2020: <?=$seo->palabras_mas_10_busquedas_20?></li>
    <li>Posición media en 2020: <?=$seo->posicion_media_20 == NULL ? "N/D" : $seo->posicion_media_20?></li>
    <li>Índice de posicionamiento en 2020: <?=$seo->indice_posicionamiento_20 == NULL ? "N/D" : $seo->indice_posicionamiento_20?></li>
    <li>Total de búsquedas en 2020: <?=$seo->total_busquedas_20 == NULL ? "N/D" : $seo->total_busquedas_20?></li>
    <li>Backlinks en 2020: <?=$seo->backlinks_20 == NULL ? "N/D" : $seo->backlinks_20?></li>
    <li>Backlinks DoFollow en 2020: <?=$seo->dofollow_20 == NULL ? "N/D" : $seo->dofollow_20?></li>
    <li>Dominios diferentes en Backlinks en 2020: <?=$seo->dominios_backlinks_20 == NULL ? "N/D" : $seo->dominios_backlinks_20?></li>
</ul>