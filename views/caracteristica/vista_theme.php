<h1>Tabla de Características de las Webs con el framework <?=$tema?></h1>
<table>
    <tr>
        <th>Web</th>
        <th>Desarrollo</th>
        <th>Tipo</th>
        <th>Framework</th>
        <th>Diseño</th>
        <th>SSL</th>
        <th>Responsive</th>
        <th>Idiomas</th>
        <th>Optimización</th>
    </tr>
        <?php while($themes = $todos_themes->fetch_object()): ?>
            <tr>
                <td><a href="<?=base_url?>caracteristica/pagina&id=<?=$themes->id?>"><?=$themes->web?></a></td>
                <td><?php if($themes->desarrollo == NULL): ?>
                        N/D
                    <?php else: ?>
                        <a href="<?=base_url?>caracteristica/desarrollo&dev=<?=$themes->desarrollo?>"><?=$themes->desarrollo?></a>
                    <?php endif; ?>
                </td>
                <td><?php if($themes->tipo == NULL): ?>
                        N/D
                    <?php else: ?>
                        <a href="<?=base_url?>caracteristica/tipo&kind=<?=$themes->tipo?>"><?=$themes->tipo?></a>
                    <?php endif; ?>
                </td>
                <td><?php if($themes->framework == NULL): ?>
                        N/D
                    <?php else: ?>
                        <a href="<?=base_url?>caracteristica/framework&frame=<?=$themes->framework?>"><?=$themes->framework?></a>
                    <?php endif; ?>
                </td>
                <td><?php if($themes->design == NULL): ?>
                        N/D
                    <?php else: ?>
                        <a href="<?=base_url?>caracteristica/design&diseno=<?=$themes->design?>"><?=$themes->design?></a>
                    <?php endif; ?>
                </td>
                <td><?php if($themes->certificado == NULL): ?>
                        N/D
                    <?php else: ?>
                        <a href="<?=base_url?>caracteristica/certificado&ssl=<?=$themes->certificado?>"><?=$themes->certificado?></a>
                    <?php endif; ?>
                </td>
                <td><?php if($themes->responsive == NULL): ?>
                        N/D
                    <?php else: ?>
                        <a href="<?=base_url?>caracteristica/responsive&mov=<?=$themes->responsive?>"><?=$themes->responsive?></a>
                    <?php endif; ?>
                </td>
                <td><?php if($themes->idiomas == NULL): ?>
                        N/D
                    <?php else: ?>
                        <a href="<?=base_url?>caracteristica/idioma&lang=<?=$themes->idiomas?>"><?=$themes->idiomas?></a>
                    <?php endif; ?>
                </td>
                <td><?php if($themes->seo == NULL): ?>
                        N/D
                    <?php else: ?>
                        <a href="<?=base_url?>caracteristica/seo&opt=<?=$themes->seo?>"><?=$themes->seo?></a>
                    <?php endif; ?>

            </tr>
        <?php endwhile;?>
</table>