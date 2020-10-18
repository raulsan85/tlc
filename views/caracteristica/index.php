<h1>Tabla de Características de las Webs</h1>
<table>
    <tr>
        <th>Web</th>
        <th>Desarrollo</th>
        <th>Tipo</th>
        <th>Framework</th>
        <th>Theme</th>
        <th>Diseño</th>
        <th>SSL</th>
        <th>Responsive</th>
        <th>Idiomas</th>
        <th>Optimización</th>
    </tr>
        <?php while($caracteristicas = $todas_caracteristicas->fetch_object()): ?>
            <tr>
                <td><a href="<?=base_url?>caracteristica/pagina&id=<?=$caracteristicas->id?>"><?=$caracteristicas->web?></a></td>
                <td><?=$caracteristicas->desarrollo == NULL ? "N/D" : $caracteristicas->desarrollo?></td>
                <td><?=$caracteristicas->tipo == NULL ? "N/D" : $caracteristicas->tipo?></td>
                <td><?=$caracteristicas->framework == NULL ? "N/D" : $caracteristicas->framework?></td>
                <td><?=$caracteristicas->theme == NULL ? "N/D" : $caracteristicas->theme?></td>
                <td><?=$caracteristicas->design == NULL ? "N/D" : $caracteristicas->design?></td>
                <td><?=$caracteristicas->certificado == NULL ? "N/D" : $caracteristicas->certificado?></td>
                <td><?=$caracteristicas->responsive == NULL ? "N/D" : $caracteristicas->responsive?></td>
                <td><?=$caracteristicas->idiomas == NULL ? "N/D" : $caracteristicas->idiomas?></td>
                <td><?=$caracteristicas->seo == NULL ? "N/D" : $caracteristicas->seo?></td>
            </tr>
        <?php endwhile;?>
</table>