<h1>Tabla de Clientes con el estado de <?=$est?> </h1>
<table>
    <tr>
        <th>Empresa</th>
        <th>Dirección</th>
        <th>Código Postal</th>
        <th>Ciudad</th>       
        <th>Provincia</th>       
        <th>Páis</th>       
        <th>Fecha de Alta</th>       
        <th>División</th>       
        <th>Teamleader</th>       
    </tr>
        <?php while($bajas = $todas_bajas->fetch_object()): ?>
            <tr>
                <td><a href="<?=base_url?>cliente/pagina&id=<?=$bajas->id?>"><?=$bajas->nombre?></a></td>
                <td><?=$bajas->direccion == NULL ? "N/D" : $bajas->direccion?></td>
                <td><?php if($bajas->codigo_postal == NULL): ?>
                        N/D
                    <?php else: ?>
                        <a href="<?=base_url?>cliente/codigo&cp=<?=$bajas->codigo_postal?>"><?=$bajas->codigo_postal?></a>
                    <?php endif; ?>
                </td>
                <td><?php if($bajas->ciudad == NULL): ?>
                        N/D
                    <?php else: ?>
                        <a href="<?=base_url?>cliente/ciudad&city=<?=$bajas->ciudad?>"><?=$bajas->ciudad?></a>
                    <?php endif; ?>
                </td>
                <td><?php if($bajas->provincia == NULL): ?>
                        N/D
                    <?php else: ?>
                        <a href="<?=base_url?>cliente/provincia&prov=<?=$bajas->provincia?>"><?=$bajas->provincia?></a>
                    <?php endif; ?>
                </td>
                <td><?=$bajas->pais == NULL ? "N/D" : $bajas->pais?></td>
                <td><?=$bajas->fecha_alta == NULL ? "N/D" : $bajas->fecha_alta?></td>
                <td><?php if($bajas->division == NULL): ?>
                        N/D
                    <?php else: ?>
                        <a href="<?=base_url?>cliente/division&div=<?=$bajas->division?>"><?=$bajas->division?></a>
                    <?php endif; ?>
                </td>
                <td><?=$bajas->teamleader == NULL ? "N/D" : $bajas->teamleader?></td>
            </tr>
        <?php endwhile;?>
</table>