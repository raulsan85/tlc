<h1>Tabla de Clientes de la ciudad de <?=$city?> </h1>
<table>
    <tr>
        <th>Empresa</th>
        <th>Dirección</th>
        <th>Código Postal</th>
        <th>Provincia</th>       
        <th>Páis</th>       
        <th>Fecha de Alta</th>       
        <th>Estado</th>       
        <th>División</th>       
        <th>Teamleader</th>       
    </tr>
        <?php while($ciudades = $todas_ciudades->fetch_object()): ?>
            <tr>
                <td><a href="<?=base_url?>cliente/pagina&id=<?=$ciudades->id?>"><?=$ciudades->nombre?></a></td>
                <td><?=$ciudades->direccion == NULL ? "N/D" : $ciudades->direccion?></td>
                <td><?php if($ciudades->codigo_postal == NULL): ?>
                        N/D
                    <?php else: ?>
                        <a href="<?=base_url?>cliente/codigo&cp=<?=$ciudades->codigo_postal?>"><?=$ciudades->codigo_postal?></a>
                    <?php endif; ?>
                </td>
                <td><?php if($ciudades->provincia == NULL): ?>
                        N/D
                    <?php else: ?>
                        <a href="<?=base_url?>cliente/provincia&prov=<?=$ciudades->provincia?>"><?=$ciudades->provincia?></a>
                    <?php endif; ?>
                </td>
                <td><?=$ciudades->pais == NULL ? "N/D" : $ciudades->pais?></td>
                <td><?=$ciudades->fecha_alta == NULL ? "N/D" : $ciudades->fecha_alta?></td>
                <td><?php if($ciudades->baja == NULL): ?>
                        N/D
                    <?php else: ?>
                        <a href="<?=base_url?>cliente/baja&est=<?=$ciudades->baja?>"><?=$ciudades->baja?></a>
                    <?php endif; ?>
                </td>
                <td><?php if($ciudades->division == NULL): ?>
                        N/D
                    <?php else: ?>
                        <a href="<?=base_url?>cliente/division&div=<?=$ciudades->division?>"><?=$ciudades->division?></a>
                    <?php endif; ?>
                </td>
                <td><?=$ciudades->teamleader == NULL ? "N/D" : $ciudades->teamleader?></td>
            </tr>
        <?php endwhile;?>
</table>