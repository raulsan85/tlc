<h1>Tabla de Características de las Webs en <?=$dev?></h1>
<table>
    <tr>
        <th>Web</th>
        <th>Tipo</th>
        <th>Framework</th>
        <th>Theme</th>
        <th>Diseño</th>
        <th>SSL</th>
        <th>Responsive</th>
        <th>Idiomas</th>
        <th>Optimización</th>
    </tr>
        <?php while($desarrollos = $todos_desarrollos->fetch_object()): ?>
            <tr>
                <td><a href="<?=base_url?>caracteristica/pagina&id=<?=$desarrollos->id?>"><?=$desarrollos->web?></a></td>
                <td><?php if($desarrollos->tipo == NULL): ?>
                        N/D
                    <?php else: ?>
                        <a href="<?=base_url?>caracteristica/desarrollo&dev=<?=$desarrollos->tipo?>"><?=$desarrollos->tipo?></a>
                    <?php endif; ?>
                </td>
                <td><?php if($desarrollos->framework == NULL): ?>
                        N/D
                    <?php else: ?>
                        <a href="<?=base_url?>caracteristica/desarrollo&dev=<?=$desarrollos->framework?>"><?=$desarrollos->framework?></a>
                    <?php endif; ?>
                </td>
                <td><?php if($desarrollos->theme == NULL): ?>
                        N/D
                    <?php else: ?>
                        <a href="<?=base_url?>caracteristica/desarrollo&dev=<?=$desarrollos->theme?>"><?=$desarrollos->theme?></a>
                    <?php endif; ?>
                </td>
                <td><?php if($desarrollos->design == NULL): ?>
                        N/D
                    <?php else: ?>
                        <a href="<?=base_url?>caracteristica/desarrollo&dev=<?=$desarrollos->design?>"><?=$desarrollos->design?></a>
                    <?php endif; ?>
                </td>
                <td><?php if($desarrollos->certificado == NULL): ?>
                        N/D
                    <?php else: ?>
                        <a href="<?=base_url?>caracteristica/desarrollo&dev=<?=$desarrollos->certificado?>"><?=$desarrollos->certificado?></a>
                    <?php endif; ?>
                </td>
                <td><?php if($desarrollos->responsive == NULL): ?>
                        N/D
                    <?php else: ?>
                        <a href="<?=base_url?>caracteristica/desarrollo&dev=<?=$desarrollos->responsive?>"><?=$desarrollos->responsive?></a>
                    <?php endif; ?>
                </td>
                <td><?php if($desarrollos->idiomas == NULL): ?>
                        N/D
                    <?php else: ?>
                        <a href="<?=base_url?>caracteristica/desarrollo&dev=<?=$desarrollos->idiomas?>"><?=$desarrollos->idiomas?></a>
                    <?php endif; ?>
                </td>
                <td><?php if($desarrollos->optimizacion == NULL): ?>
                        N/D
                    <?php else: ?>
                        <a href="<?=base_url?>caracteristica/desarrollo&dev=<?=$desarrollos->optimizacion?>"><?=$desarrollos->optimizacion?></a>
                    <?php endif; ?>

            </tr>
        <?php endwhile;?>
</table>