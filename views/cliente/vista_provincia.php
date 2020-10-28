<h1>Tabla de Clientes de la provincia de <?=$prov?> </h1>
<table>
    <tr>
        <th>Empresa</th>
        <th>Dirección</th>
        <th>Código Postal</th>
        <th>Ciudad</th>       
        <th>Páis</th>       
        <th>Fecha de Alta</th>       
        <th>Estado</th>       
        <th>División</th>       
        <th>Teamleader</th>       
    </tr>
        <?php while($provincias = $todas_provincias->fetch_object()): ?>
            <tr>
                <td><a href="<?=base_url?>cliente/pagina&id=<?=$provincias->id?>"><?=$provincias->nombre?></a></td>
                <td><?=$provincias->direccion == NULL ? "N/D" : $provincias->direccion?></td>
                <td><?php if($provincias->codigo_postal == NULL): ?>
                        N/D
                    <?php else: ?>
                        <a href="<?=base_url?>cliente/codigo&cp=<?=$provincias->codigo_postal?>"><?=$provincias->codigo_postal?></a>
                    <?php endif; ?>
                </td>
                <td><?php if($provincias->ciudad == NULL): ?>
                        N/D
                    <?php else: ?>
                        <a href="<?=base_url?>cliente/ciudad&city=<?=$provincias->ciudad?>"><?=$provincias->ciudad?></a>
                    <?php endif; ?>
                </td>
                <td><?=$provincias->pais == NULL ? "N/D" : $provincias->pais?></td>
                <td><?=$provincias->fecha_alta == NULL ? "N/D" : $provincias->fecha_alta?></td>
                <td><?php if($provincias->baja == NULL): ?>
                        N/D
                    <?php else: ?>
                        <a href="<?=base_url?>cliente/baja&est=<?=$provincias->baja?>"><?=$provincias->baja?></a>
                    <?php endif; ?>
                </td>
                <td><?php if($provincias->division == NULL): ?>
                        N/D
                    <?php else: ?>
                        <a href="<?=base_url?>cliente/division&div=<?=$provincias->division?>"><?=$provincias->division?></a>
                    <?php endif; ?>
                </td>
                <td><?=$provincias->teamleader == NULL ? "N/D" : $provincias->teamleader?></td>
            </tr>
        <?php endwhile;?>
</table>