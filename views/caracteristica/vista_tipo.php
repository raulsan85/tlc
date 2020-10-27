<h1>Tabla de Características de las Webs de tipo <?=$kind?></h1>
<table>
    <tr>
        <th>Web</th>
        <th>Desarrollo</th>
        <th>Framework</th>
        <th>Theme</th>
        <th>Diseño</th>
        <th>SSL</th>
        <th>Responsive</th>
        <th>Idiomas</th>
        <th>Optimización</th>
    </tr>
        <?php while($tipos = $todos_tipos->fetch_object()): ?>
            <tr>
                <td><a href="<?=base_url?>caracteristica/pagina&id=<?=$tipos->id?>"><?=$tipos->web?></a></td>
                <td><?php if($tipos->desarrollo == NULL): ?>
                        N/D
                    <?php else: ?>
                        <a href="<?=base_url?>caracteristica/desarrollo&dev=<?=$tipos->desarrollo?>"><?=$tipos->desarrollo?></a>
                    <?php endif; ?>
                </td>
                <td><?php if($tipos->framework == NULL): ?>
                        N/D
                    <?php else: ?>
                        <a href="<?=base_url?>caracteristica/framework&frame=<?=$tipos->framework?>"><?=$tipos->framework?></a>
                    <?php endif; ?>
                </td>
                <td><?php if($tipos->theme == NULL): ?>
                        N/D
                    <?php else: ?>
                        <a href="<?=base_url?>caracteristica/theme&tema=<?=$tipos->theme?>"><?=$tipos->theme?></a>
                    <?php endif; ?>
                </td>
                <td><?php if($tipos->design == NULL): ?>
                        N/D
                    <?php else: ?>
                        <a href="<?=base_url?>caracteristica/design&diseno=<?=$tipos->design?>"><?=$tipos->design?></a>
                    <?php endif; ?>
                </td>
                <td><?php if($tipos->certificado == NULL): ?>
                        N/D
                    <?php else: ?>
                        <a href="<?=base_url?>caracteristica/certificado&ssl=<?=$tipos->certificado?>"><?=$tipos->certificado?></a>
                    <?php endif; ?>
                </td>
                <td><?php if($tipos->responsive == NULL): ?>
                        N/D
                    <?php else: ?>
                        <a href="<?=base_url?>caracteristica/responsive&mov=<?=$tipos->responsive?>"><?=$tipos->responsive?></a>
                    <?php endif; ?>
                </td>
                <td><?php if($tipos->idiomas == NULL): ?>
                        N/D
                    <?php else: ?>
                        <a href="<?=base_url?>caracteristica/idioma&lang=<?=$tipos->idiomas?>"><?=$tipos->idiomas?></a>
                    <?php endif; ?>
                </td>
                <td><?php if($tipos->seo == NULL): ?>
                        N/D
                    <?php else: ?>
                        <a href="<?=base_url?>caracteristica/seo&opt=<?=$tipos->seo?>"><?=$tipos->seo?></a>
                    <?php endif; ?>

            </tr>
        <?php endwhile;?>
</table>