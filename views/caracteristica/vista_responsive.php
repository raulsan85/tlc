<h1>Tabla de Características de las Webs con el responsive <?=$mov?></h1>
<table>
    <tr>
        <th>Web</th>
        <th>Desarrollo</th>
        <th>Tipo</th>
        <th>Framework</th>
        <th>Theme</th>
        <th>Diseño</th>
        <th>SSL</th>
        <th>Idiomas</th>
        <th>Optimización</th>
    </tr>
        <?php while($responsives = $todos_responsives->fetch_object()): ?>
            <tr>
                <td><a href="<?=base_url?>caracteristica/pagina&id=<?=$responsives->id?>"><?=$responsives->web?></a></td>
                <td><?php if($responsives->desarrollo == NULL): ?>
                        N/D
                    <?php else: ?>
                        <a href="<?=base_url?>caracteristica/desarrollo&dev=<?=$responsives->desarrollo?>"><?=$responsives->desarrollo?></a>
                    <?php endif; ?>
                </td>
                <td><?php if($responsives->tipo == NULL): ?>
                        N/D
                    <?php else: ?>
                        <a href="<?=base_url?>caracteristica/tipo&kind=<?=$responsives->tipo?>"><?=$responsives->tipo?></a>
                    <?php endif; ?>
                </td>
                <td><?php if($responsives->framework == NULL): ?>
                        N/D
                    <?php else: ?>
                        <a href="<?=base_url?>caracteristica/framework&frame=<?=$responsives->framework?>"><?=$responsives->framework?></a>
                    <?php endif; ?>
                </td>
                <td><?php if($responsives->theme == NULL): ?>
                        N/D
                    <?php else: ?>
                        <a href="<?=base_url?>caracteristica/theme&tema=<?=$responsives->theme?>"><?=$responsives->theme?></a>
                    <?php endif; ?>
                </td>
                <td><?php if($responsives->design == NULL): ?>
                        N/D
                    <?php else: ?>
                        <a href="<?=base_url?>caracteristica/design&diseno=<?=$responsives->design?>"><?=$responsives->design?></a>
                    <?php endif; ?>
                </td>
                <td><?php if($responsives->certificado == NULL): ?>
                        N/D
                    <?php else: ?>
                        <a href="<?=base_url?>caracteristica/certificado&ssl=<?=$responsives->certificado?>"><?=$responsives->certificado?></a>
                    <?php endif; ?>
                </td>
                <td><?php if($responsives->idiomas == NULL): ?>
                        N/D
                    <?php else: ?>
                        <a href="<?=base_url?>caracteristica/idioma&lang=<?=$responsives->idiomas?>"><?=$responsives->idiomas?></a>
                    <?php endif; ?>
                </td>
                <td><?php if($responsives->seo == NULL): ?>
                        N/D
                    <?php else: ?>
                        <a href="<?=base_url?>caracteristica/seo&opt=<?=$responsives->seo?>"><?=$responsives->seo?></a>
                    <?php endif; ?>

            </tr>
        <?php endwhile;?>
</table>