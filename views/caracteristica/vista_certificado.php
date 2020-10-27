<h1>Tabla de Características de las Webs con el certificado <?=$ssl?></h1>
<table>
    <tr>
        <th>Web</th>
        <th>Desarrollo</th>
        <th>Tipo</th>
        <th>Framework</th>
        <th>Theme</th>
        <th>Diseño</th>
        <th>Responsive</th>
        <th>Idiomas</th>
        <th>Optimización</th>
    </tr>
        <?php while($certificados = $todos_certificados->fetch_object()): ?>
            <tr>
                <td><a href="<?=base_url?>caracteristica/pagina&id=<?=$certificados->id?>"><?=$certificados->web?></a></td>
                <td><?php if($certificados->desarrollo == NULL): ?>
                        N/D
                    <?php else: ?>
                        <a href="<?=base_url?>caracteristica/desarrollo&dev=<?=$certificados->desarrollo?>"><?=$certificados->desarrollo?></a>
                    <?php endif; ?>
                </td>
                <td><?php if($certificados->tipo == NULL): ?>
                        N/D
                    <?php else: ?>
                        <a href="<?=base_url?>caracteristica/tipo&kind=<?=$certificados->tipo?>"><?=$certificados->tipo?></a>
                    <?php endif; ?>
                </td>
                <td><?php if($certificados->framework == NULL): ?>
                        N/D
                    <?php else: ?>
                        <a href="<?=base_url?>caracteristica/framework&frame=<?=$certificados->framework?>"><?=$certificados->framework?></a>
                    <?php endif; ?>
                </td>
                <td><?php if($certificados->theme == NULL): ?>
                        N/D
                    <?php else: ?>
                        <a href="<?=base_url?>caracteristica/theme&tema=<?=$certificados->theme?>"><?=$certificados->theme?></a>
                    <?php endif; ?>
                </td>
                <td><?php if($certificados->design == NULL): ?>
                        N/D
                    <?php else: ?>
                        <a href="<?=base_url?>caracteristica/design&diseno=<?=$certificados->design?>"><?=$certificados->design?></a>
                    <?php endif; ?>
                </td>
                <td><?php if($certificados->responsive == NULL): ?>
                        N/D
                    <?php else: ?>
                        <a href="<?=base_url?>caracteristica/responsive&mov=<?=$certificados->responsive?>"><?=$certificados->responsive?></a>
                    <?php endif; ?>
                </td>
                <td><?php if($certificados->idiomas == NULL): ?>
                        N/D
                    <?php else: ?>
                        <a href="<?=base_url?>caracteristica/idioma&lang=<?=$certificados->idiomas?>"><?=$certificados->idiomas?></a>
                    <?php endif; ?>
                </td>
                <td><?php if($certificados->seo == NULL): ?>
                        N/D
                    <?php else: ?>
                        <a href="<?=base_url?>caracteristica/seo&opt=<?=$certificados->seo?>"><?=$certificados->seo?></a>
                    <?php endif; ?>

            </tr>
        <?php endwhile;?>
</table>