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
                <td><?php if($caracteristicas->desarrollo == NULL): ?>
                        N/D
                    <?php else: ?>
                        <a href="<?=base_url?>caracteristica/desarrollo&dev=<?=$caracteristicas->desarrollo?>"><?=$caracteristicas->desarrollo?></a>
                    <?php endif; ?>
                </td>
                <td><?php if($caracteristicas->tipo == NULL): ?>
                        N/D
                    <?php else: ?>
                        <a href="<?=base_url?>caracteristica/tipo&kind=<?=$caracteristicas->tipo?>"><?=$caracteristicas->tipo?></a>
                    <?php endif; ?>
                </td>
                <td><?php if($caracteristicas->framework == NULL): ?>
                        N/D
                    <?php else: ?>
                        <a href="<?=base_url?>caracteristica/framework&frame=<?=$caracteristicas->framework?>"><?=$caracteristicas->framework?></a>
                    <?php endif; ?>
                </td>
                <td><?php if($caracteristicas->theme == NULL): ?>
                        N/D
                    <?php else: ?>
                        <a href="<?=base_url?>caracteristica/theme&tema=<?=$caracteristicas->theme?>"><?=$caracteristicas->theme?></a>
                    <?php endif; ?>
                </td>
                <td><?php if($caracteristicas->design == NULL): ?>
                        N/D
                    <?php else: ?>
                        <a href="<?=base_url?>caracteristica/design&diseno=<?=$caracteristicas->design?>"><?=$caracteristicas->design?></a>
                    <?php endif; ?>
                </td>
                <td><?php if($caracteristicas->certificado == NULL): ?>
                        N/D
                    <?php else: ?>
                        <a href="<?=base_url?>caracteristica/certificado&ssl=<?=$caracteristicas->certificado?>"><?=$caracteristicas->certificado?></a>
                    <?php endif; ?>
                </td>
                <td><?php if($caracteristicas->responsive == NULL): ?>
                        N/D
                    <?php else: ?>
                        <a href="<?=base_url?>caracteristica/responsive&mov=<?=$caracteristicas->responsive?>"><?=$caracteristicas->responsive?></a>
                    <?php endif; ?>
                </td>
                <td><?php if($caracteristicas->idiomas == NULL): ?>
                        N/D
                    <?php else: ?>
                        <a href="<?=base_url?>caracteristica/idioma&lang=<?=$caracteristicas->idiomas?>"><?=$caracteristicas->idiomas?></a>
                    <?php endif; ?>
                </td>
                <td><?php if($caracteristicas->seo == NULL): ?>
                        N/D
                    <?php else: ?>
                        <a href="<?=base_url?>caracteristica/seo&opt=<?=$caracteristicas->seo?>"><?=$caracteristicas->seo?></a>
                    <?php endif; ?>
                </td>
            </tr>
        <?php endwhile;?>
</table>