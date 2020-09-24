<table>
    <tr>
        <th>Web</th>
        <th>URL</th>
        <th>Año</th>
        <th>Servidor</th>
        <th>Cliente</th>
        <th>Ciudad</th>
        <th>Estado del Servicio</th>
        <th>Temática</th>
        <th>Desarrollo</th>
        <th>Tipo</th>
        <th>Framework</th>
        <th>Theme</th>
        <th>Diseño</th>
        <th>Certificado</th>
        <th>Responsive</th>
        <th>Idiomas</th>
        <th>Optimización</th>
        <th>Palabras + de 10 búsquedas</th>
        <th>Posición media</th>
        <th>Indice de posicionamiento</th>
        <th>Total de búsquedas</th>
    </tr>

    <?php for($i=1; $i<=$cantidad_webs; $i++): ?>
    <tr>
            <?php $web->setId($i); ?>
            <?php $columna_web = $web->getOne(); ?>
        <td><a href="<?=base_url?>general/pagina&id=<?=$columna_web->id?>"><?=$columna_web->web?></a></td>
        <td><a href="<?=$columna_web->url?>" target="_blank"><?=$columna_web->web?></a></td>
        <td><?=$columna_web->ano?></td>
        <td><?=$columna_web->servidor?></td>

            <?php $cliente->setId($i); ?>
            <?php $columna_cliente = $cliente->getOne(); ?>
        <td><?=$columna_cliente->nombre?></td>
        <td><?=$columna_cliente->ciudad?></td>
        <td><?=$columna_cliente->baja?></td>

            <?php $tematica->setId($i); ?>
            <?php $columna_tematica = $tematica->getOne(); ?>
        <td><?=$columna_tematica->tematica?></td>

            <?php $caracteristica->setId($i); ?>
            <?php $columna_caracteristica = $caracteristica->getOne(); ?>
        <td><?=$columna_caracteristica->desarrollo?></td>
        <td><?=$columna_caracteristica->tipo?></td>
        <td><?=$columna_caracteristica->framework?></td>
        <td><?=$columna_caracteristica->theme?></td>
        <td><?=$columna_caracteristica->design?></td>
        <td><?=$columna_caracteristica->certificado?></td>
        <td><?=$columna_caracteristica->responsive?></td>
        <td><?=$columna_caracteristica->idiomas?></td>
        <td><?=$columna_caracteristica->seo?></td>
            <?php $seo->setId($i); ?>
            <?php $columna_seo = $seo->getOne(); ?>
        <td><?=$columna_seo->palabras_mas_10_busquedas?></td>
        <td><?=$columna_seo->posicion_media?></td>
        <td><?=$columna_seo->indice_posicionamiento?></td>
        <td><?=$columna_seo->total_busquedas?></td>
    </tr>
    <?php endfor;?>


</table>
