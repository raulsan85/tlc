<h1>Tabla de Analíticas de las Webs</h1>
<table>
    <tr>
        <th>Web</th>
        <th>Visitas (2019)</th>
        <th>Rebote (2019)</th>
        <th>Rebote desktop (2019)</th>
        <th>Rebote móvil (2019)</th>
        <th>Tiempo de sesión (2019)</th>
        <th>Páginas por sesión (2019)</th>
        <th>Visitas (2020)</th>
        <th>Rebote (2020)</th>
        <th>Rebote desktop (2020)</th>
        <th>Rebote móvil (2020)</th>
        <th>Tiempo de sesión (2020)</th>
        <th>Páginas por sesión (2020)</th>
        <th>Tiempo de carga (2020)</th>
        <th>First byte (2020)</th>
        <th>Repeat View (2020)</th>
        <th>PageSpeed desktop (2020)</th>
        <th>PageSpeed móvil (2020)</th>
    </tr>
        <?php while($analitica = $todas_analiticas->fetch_object()): ?>
            <tr>
                <td><a href="<?=base_url?>analitica/pagina&id=<?=$analitica->id?>"><?=$analitica->web?></a></td>
                <td><?=$analitica->visitas_19 == NULL ? "N/D" : $analitica->visitas_19?></td>
                <td><?=$analitica->rebote_19 == NULL ? "N/D" : $analitica->rebote_19?></td>
                <td><?=$analitica->rebote_desk_19 == NULL ? "N/D" : $analitica->rebote_desk_19?></td>
                <td><?=$analitica->rebote_mob_19 == NULL ? "N/D" : $analitica->rebote_mob_19?></td>
                <td><?=$analitica->tiempo_sesion_19 == NULL ? "N/D" : $analitica->tiempo_sesion_19?></td>
                <td><?=$analitica->paginas_sesion_19 == NULL ? "N/D" : $analitica->paginas_sesion_19?></td>
                <td><?=$analitica->visitas_20 == NULL ? "N/D" : $analitica->visitas_20?></td>
                <td><?=$analitica->rebote_20 == NULL ? "N/D" : $analitica->rebote_20?></td>
                <td><?=$analitica->rebote_desk_20 == NULL ? "N/D" : $analitica->rebote_desk_20?></td>
                <td><?=$analitica->rebote_mob_20 == NULL ? "N/D" : $analitica->rebote_mob_20?></td>
                <td><?=$analitica->tiempo_sesion_20 == NULL ? "N/D" : $analitica->tiempo_sesion_20?></td>
                <td><?=$analitica->paginas_sesion_20 == NULL ? "N/D" : $analitica->paginas_sesion_20?></td>
                <td><?=$analitica->tiempo_carga_20 == NULL ? "N/D" : $analitica->tiempo_carga_20?></td>
                <td><?=$analitica->first_byte_20 == NULL ? "N/D" : $analitica->first_byte_20?></td>
                <td><?=$analitica->repeat_view_20 == NULL ? "N/D" : $analitica->repeat_view_20?></td>
                <td><?=$analitica->pagespeed_desk_20 == NULL ? "N/D" : $analitica->pagespeed_desk_20?></td>
                <td><?=$analitica->pagespeed_mob_20 == NULL ? "N/D" : $analitica->pagespeed_mob_20?></td>
            </tr>
        <?php endwhile;?>
</table>