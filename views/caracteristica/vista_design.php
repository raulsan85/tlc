<h1>Tabla de Características de las Webs con el diseño <?=$diseno?></h1>
<table>
    <tr>
        <th>Web</th>
        <th>Desarrollo</th>
        <th>Tipo</th>
        <th>Framework</th>
        <th>Theme</th>
        <th>SSL</th>
        <th>Responsive</th>
        <th>Idiomas</th>
        <th>Optimización</th>
    </tr>
        <?php while($designs = $todos_designs->fetch_object()): ?>
            <tr>
                <td><a href="<?=base_url?>caracteristica/pagina&id=<?=$designs->id?>"><?=$designs->web?></a></td>
                <td><?php if($designs->desarrollo == NULL): ?>
                        N/D
                    <?php else: ?>
                        <a href="<?=base_url?>caracteristica/desarrollo&dev=<?=$designs->desarrollo?>"><?=$designs->desarrollo?></a>
                    <?php endif; ?>
                </td>
                <td><?php if($designs->tipo == NULL): ?>
                        N/D
                    <?php else: ?>
                        <a href="<?=base_url?>caracteristica/tipo&kind=<?=$designs->tipo?>"><?=$designs->tipo?></a>
                    <?php endif; ?>
                </td>
                <td><?php if($designs->framework == NULL): ?>
                        N/D
                    <?php else: ?>
                        <a href="<?=base_url?>caracteristica/framework&frame=<?=$designs->framework?>"><?=$designs->framework?></a>
                    <?php endif; ?>
                </td>
                <td><?php if($designs->theme == NULL): ?>
                        N/D
                    <?php else: ?>
                        <a href="<?=base_url?>caracteristica/theme&tema=<?=$designs->theme?>"><?=$designs->theme?></a>
                    <?php endif; ?>
                </td>
                <td><?php if($designs->certificado == NULL): ?>
                        N/D
                    <?php else: ?>
                        <a href="<?=base_url?>caracteristica/certificado&ssl=<?=$designs->certificado?>"><?=$designs->certificado?></a>
                    <?php endif; ?>
                </td>
                <td><?php if($designs->responsive == NULL): ?>
                        N/D
                    <?php else: ?>
                        <a href="<?=base_url?>caracteristica/responsive&mov=<?=$designs->responsive?>"><?=$designs->responsive?></a>
                    <?php endif; ?>
                </td>
                <td><?php if($designs->idiomas == NULL): ?>
                        N/D
                    <?php else: ?>
                        <a href="<?=base_url?>caracteristica/idioma&lang=<?=$designs->idiomas?>"><?=$designs->idiomas?></a>
                    <?php endif; ?>
                </td>
                <td><?php if($designs->seo == NULL): ?>
                        N/D
                    <?php else: ?>
                        <a href="<?=base_url?>caracteristica/seo&opt=<?=$designs->seo?>"><?=$designs->seo?></a>
                    <?php endif; ?>

            </tr>
        <?php endwhile;?>
</table>