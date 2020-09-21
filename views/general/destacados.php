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
            <?php $web->setId($i); ?>
            <?php $columna = $web->getOne(); ?>
    <tr>
        <td><a href="<?=base_url?>general/pagina&id=<?=$columna->id?>"><?=$columna->web?></a></td>
        <td><?=$columna->url?></td>
        <td><?=$columna->ano?></td>
        <td><?=$columna->servidor?></td>
    </tr>
    <?php endfor;?>

</table>
