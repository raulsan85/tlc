<h1>Tabla de Clientes con el Código Postal <?=$cp?> </h1>
<table>
    <tr>
        <th>Empresa</th>
        <th>Dirección</th>
        <th>Ciudad</th>       
        <th>Provincia</th>       
        <th>Páis</th>       
        <th>Fecha de Alta</th>       
        <th>Estado</th>       
        <th>División</th>       
        <th>Teamleader</th>       
    </tr>
        <?php while($codigos = $todos_codigos->fetch_object()): ?>
            <tr>
                <td><a href="<?=base_url?>cliente/pagina&id=<?=$codigos->id?>"><?=$codigos->nombre?></a></td>
                <td><?=$codigos->direccion == NULL ? "N/D" : $codigos->direccion?></td>
                <td><?php if($codigos->ciudad == NULL): ?>
                        N/D
                    <?php else: ?>
                        <a href="<?=base_url?>cliente/ciudad&city=<?=$codigos->ciudad?>"><?=$codigos->ciudad?></a>
                    <?php endif; ?>
                </td>
                <td><?php if($codigos->provincia == NULL): ?>
                        N/D
                    <?php else: ?>
                        <a href="<?=base_url?>cliente/provincia&prov=<?=$codigos->provincia?>"><?=$codigos->provincia?></a>
                    <?php endif; ?>
                </td>
                <td><?=$codigos->pais == NULL ? "N/D" : $codigos->pais?></td>
                <td><?=$codigos->fecha_alta == NULL ? "N/D" : $codigos->fecha_alta?></td>
                <td><?php if($codigos->baja == NULL): ?>
                        N/D
                    <?php else: ?>
                        <a href="<?=base_url?>cliente/baja&est=<?=$codigos->baja?>"><?=$codigos->baja?></a>
                    <?php endif; ?>
                </td>
                <td><?php if($codigos->division == NULL): ?>
                        N/D
                    <?php else: ?>
                        <a href="<?=base_url?>cliente/division&div=<?=$codigos->division?>"><?=$codigos->division?></a>
                    <?php endif; ?>
                </td>
                <td><?=$codigos->teamleader == NULL ? "N/D" : $codigos->teamleader?></td>
            </tr>
        <?php endwhile;?>
</table>