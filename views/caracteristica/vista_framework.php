<h1>Tabla de Características de las Webs con el framework <?=$frame?></h1>
<table>
    <tr>
        <th>Web</th>
        <th>Desarrollo</th>
        <th>Tipo</th>
        <th>Theme</th>
        <th>Diseño</th>
        <th>SSL</th>
        <th>Responsive</th>
        <th>Idiomas</th>
        <th>Optimización</th>
    </tr>
        <?php while($frameworks = $todos_frameworks->fetch_object()): ?>
            <tr>
                <td><a href="<?=base_url?>caracteristica/pagina&id=<?=$frameworks->id?>"><?=$frameworks->web?></a></td>
                <td><?php if($frameworks->desarrollo == NULL): ?>
                        N/D
                    <?php else: ?>
                        <a href="<?=base_url?>caracteristica/desarrollo&dev=<?=$frameworks->desarrollo?>"><?=$frameworks->desarrollo?></a>
                    <?php endif; ?>
                </td>
                <td><?php if($frameworks->tipo == NULL): ?>
                        N/D
                    <?php else: ?>
                        <a href="<?=base_url?>caracteristica/tipo&kind=<?=$frameworks->tipo?>"><?=$frameworks->tipo?></a>
                    <?php endif; ?>
                </td>
                <td><?php if($frameworks->theme == NULL): ?>
                        N/D
                    <?php else: ?>
                        <a href="<?=base_url?>caracteristica/theme&tema=<?=$frameworks->theme?>"><?=$frameworks->theme?></a>
                    <?php endif; ?>
                </td>
                <td><?php if($frameworks->design == NULL): ?>
                        N/D
                    <?php else: ?>
                        <a href="<?=base_url?>caracteristica/design&diseno=<?=$frameworks->design?>"><?=$frameworks->design?></a>
                    <?php endif; ?>
                </td>
                <td><?php if($frameworks->certificado == NULL): ?>
                        N/D
                    <?php else: ?>
                        <a href="<?=base_url?>caracteristica/certificado&ssl=<?=$frameworks->certificado?>"><?=$frameworks->certificado?></a>
                    <?php endif; ?>
                </td>
                <td><?php if($frameworks->responsive == NULL): ?>
                        N/D
                    <?php else: ?>
                        <a href="<?=base_url?>caracteristica/responsive&mov=<?=$frameworks->responsive?>"><?=$frameworks->responsive?></a>
                    <?php endif; ?>
                </td>
                <td><?php if($frameworks->idiomas == NULL): ?>
                        N/D
                    <?php else: ?>
                        <a href="<?=base_url?>caracteristica/idioma&lang=<?=$frameworks->idiomas?>"><?=$frameworks->idiomas?></a>
                    <?php endif; ?>
                </td>
                <td><?php if($frameworks->seo == NULL): ?>
                        N/D
                    <?php else: ?>
                        <a href="<?=base_url?>caracteristica/seo&opt=<?=$frameworks->seo?>"><?=$frameworks->seo?></a>
                    <?php endif; ?>

            </tr>
        <?php endwhile;?>
</table>