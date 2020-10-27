<h1>Tabla de Características de las Webs con el idioma <?=$lang?></h1>
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
        <th>Optimización</th>
    </tr>
        <?php while($idiomas = $todos_idiomas->fetch_object()): ?>
            <tr>
                <td><a href="<?=base_url?>caracteristica/pagina&id=<?=$idiomas->id?>"><?=$idiomas->web?></a></td>
                <td><?php if($idiomas->desarrollo == NULL): ?>
                        N/D
                    <?php else: ?>
                        <a href="<?=base_url?>caracteristica/desarrollo&dev=<?=$idiomas->desarrollo?>"><?=$idiomas->desarrollo?></a>
                    <?php endif; ?>
                </td>
                <td><?php if($idiomas->tipo == NULL): ?>
                        N/D
                    <?php else: ?>
                        <a href="<?=base_url?>caracteristica/tipo&kind=<?=$idiomas->tipo?>"><?=$idiomas->tipo?></a>
                    <?php endif; ?>
                </td>
                <td><?php if($idiomas->framework == NULL): ?>
                        N/D
                    <?php else: ?>
                        <a href="<?=base_url?>caracteristica/framework&frame=<?=$idiomas->framework?>"><?=$idiomas->framework?></a>
                    <?php endif; ?>
                </td>
                <td><?php if($idiomas->theme == NULL): ?>
                        N/D
                    <?php else: ?>
                        <a href="<?=base_url?>caracteristica/theme&tema=<?=$idiomas->theme?>"><?=$idiomas->theme?></a>
                    <?php endif; ?>
                </td>
                <td><?php if($idiomas->design == NULL): ?>
                        N/D
                    <?php else: ?>
                        <a href="<?=base_url?>caracteristica/design&diseno=<?=$idiomas->design?>"><?=$idiomas->design?></a>
                    <?php endif; ?>
                </td>
                <td><?php if($idiomas->certificado == NULL): ?>
                        N/D
                    <?php else: ?>
                        <a href="<?=base_url?>caracteristica/certificado&ssl=<?=$idiomas->certificado?>"><?=$idiomas->certificado?></a>
                    <?php endif; ?>
                </td>
                <td><?php if($idiomas->responsive == NULL): ?>
                        N/D
                    <?php else: ?>
                        <a href="<?=base_url?>caracteristica/responsive&mov=<?=$idiomas->responsive?>"><?=$idiomas->responsive?></a>
                    <?php endif; ?>
                </td>
                <td><?php if($idiomas->seo == NULL): ?>
                        N/D
                    <?php else: ?>
                        <a href="<?=base_url?>caracteristica/seo&opt=<?=$idiomas->seo?>"><?=$idiomas->seo?></a>
                    <?php endif; ?>

            </tr>
        <?php endwhile;?>
</table>