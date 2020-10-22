<h1>Tabla de SEO de las Webs</h1>
<table>
    <tr>
        <th>Web</th>
        <th>Nota</th>
        <th>Palabras con más de 10 búsquedas (2019)</th>
        <th>Posición media (2019)</th>
        <th>Índice de Posicionamiento (2019)</th>
        <th>Total de búsquedas (2019)</th>
        <th>Palabras con más de 10 búsquedas (2020)</th>
        <th>Posición media (2020)</th>
        <th>Índice de Posicionamiento (2020)</th>
        <th>Total de búsquedas (2020)</th>
        <th>Total de Backlinks (2020)</th>
        <th>Backlinks DoFollow (2020)</th>
        <th>Dominios de backlinks (2020)</th>
    </tr>
        <?php while($seo = $todos_seo->fetch_object()): ?>
            <tr>
                <td><a href="<?=base_url?>seo/pagina&id=<?=$seo->id?>"><?=$seo->web?></a></td>
                <td><?=$seo->nota == NULL ? "N/D" : $seo->nota?></td>
                <td><?=$seo->palabras_mas_10_busquedas_19 == NULL ? "N/D" : $seo->palabras_mas_10_busquedas_19?></td>
                <td><?=$seo->posicion_media_19 == NULL ? "N/D" : $seo->posicion_media_19?></td>
                <td><?=$seo->indice_posicionamiento_19 == NULL ? "N/D" : $seo->indice_posicionamiento_19?></td>
                <td><?=$seo->total_busquedas_19 == NULL ? "N/D" : $seo->total_busquedas_19?></td>
                <td><?=$seo->palabras_mas_10_busquedas_20 == NULL ? "N/D" : $seo->palabras_mas_10_busquedas_20?></td>
                <td><?=$seo->posicion_media_20 == NULL ? "N/D" : $seo->posicion_media_20?></td>
                <td><?=$seo->indice_posicionamiento_20 == NULL ? "N/D" : $seo->indice_posicionamiento_20?></td>
                <td><?=$seo->total_busquedas_20 == NULL ? "N/D" : $seo->total_busquedas_20?></td>
                <td><?=$seo->backlinks_20 == NULL ? "N/D" : $seo->backlinks_20?></td>
                <td><?=$seo->dofollow_20 == NULL ? "N/D" : $seo->dofollow_20?></td>
                <td><?=$seo->dominios_backlinks_20 == NULL ? "N/D" : $seo->dominios_backlinks_20?></td>
            </tr>
        <?php endwhile;?>
</table>