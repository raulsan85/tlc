<h1>Tabla de Características de las Webs con el SEO <?=$opt?></h1>
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
    </tr>
        <?php while($seos = $todos_seos->fetch_object()): ?>
            <tr>
                <td><a href="<?=base_url?>caracteristica/pagina&id=<?=$seos->id?>"><?=$seos->web?></a></td>
                <td><?php if($seos->desarrollo == NULL): ?>
                        N/D
                    <?php else: ?>
                        <a href="<?=base_url?>caracteristica/desarrollo&dev=<?=$seos->desarrollo?>"><?=$seos->desarrollo?></a>
                    <?php endif; ?>
                </td>
                <td><?php if($seos->tipo == NULL): ?>
                        N/D
                    <?php else: ?>
                        <a href="<?=base_url?>caracteristica/tipo&kind=<?=$seos->tipo?>"><?=$seos->tipo?></a>
                    <?php endif; ?>
                </td>
                <td><?php if($seos->framework == NULL): ?>
                        N/D
                    <?php else: ?>
                        <a href="<?=base_url?>caracteristica/framework&frame=<?=$seos->framework?>"><?=$seos->framework?></a>
                    <?php endif; ?>
                </td>
                <td><?php if($seos->theme == NULL): ?>
                        N/D
                    <?php else: ?>
                        <a href="<?=base_url?>caracteristica/theme&tema=<?=$seos->theme?>"><?=$seos->theme?></a>
                    <?php endif; ?>
                </td>
                <td><?php if($seos->design == NULL): ?>
                        N/D
                    <?php else: ?>
                        <a href="<?=base_url?>caracteristica/design&diseno=<?=$seos->design?>"><?=$seos->design?></a>
                    <?php endif; ?>
                </td>
                <td><?php if($seos->certificado == NULL): ?>
                        N/D
                    <?php else: ?>
                        <a href="<?=base_url?>caracteristica/certificado&ssl=<?=$seos->certificado?>"><?=$seos->certificado?></a>
                    <?php endif; ?>
                </td>
                <td><?php if($seos->responsive == NULL): ?>
                        N/D
                    <?php else: ?>
                        <a href="<?=base_url?>caracteristica/responsive&mov=<?=$seos->responsive?>"><?=$seos->responsive?></a>
                    <?php endif; ?>
                </td>
                <td><?php if($seos->idiomas == NULL): ?>
                        N/D
                    <?php else: ?>
                        <a href="<?=base_url?>caracteristica/idioma&lang=<?=$seos->idiomas?>"><?=$seos->idiomas?></a>
                    <?php endif; ?>

            </tr>
        <?php endwhile;?>
</table>