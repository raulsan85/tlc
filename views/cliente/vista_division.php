<h1>Tabla de Clientes de <?=$div?></h1>
<table>
    <tr>
        <th>Empresa</th>
        <th>Dirección</th>
        <th>Código Postal</th>
        <th>Ciudad</th>       
        <th>Provincia</th>       
        <th>Páis</th>       
        <th>Fecha de Alta</th>       
        <th>Estado</th>       
        <th>Teamleader</th>       
    </tr>
        <?php while($divisiones = $todas_divisiones->fetch_object()): ?>
            <tr>
                <td><a href="<?=base_url?>cliente/pagina&id=<?=$divisiones->id?>"><?=$divisiones->nombre?></a></td>
                <td><?=$divisiones->direccion == NULL ? "N/D" : $divisiones->direccion?></td>
                <td><?php if($divisiones->codigo_postal == NULL): ?>
                        N/D
                    <?php else: ?>
                        <a href="<?=base_url?>cliente/codigo&cp=<?=$divisiones->codigo_postal?>"><?=$divisiones->codigo_postal?></a>
                    <?php endif; ?>
                </td>
                <td><?php if($divisiones->ciudad == NULL): ?>
                        N/D
                    <?php else: ?>
                        <a href="<?=base_url?>cliente/ciudad&city=<?=$divisiones->ciudad?>"><?=$divisiones->ciudad?></a>
                    <?php endif; ?>
                </td>
                <td><?php if($divisiones->provincia == NULL): ?>
                        N/D
                    <?php else: ?>
                        <a href="<?=base_url?>cliente/provincia&prov=<?=$divisiones->provincia?>"><?=$divisiones->provincia?></a>
                    <?php endif; ?>
                </td>
                <td><?=$divisiones->pais == NULL ? "N/D" : $divisiones->pais?></td>
                <td><?=$divisiones->fecha_alta == NULL ? "N/D" : $divisiones->fecha_alta?></td>
                <td><?php if($divisiones->baja == NULL): ?>
                        N/D
                    <?php else: ?>
                        <a href="<?=base_url?>cliente/baja&est=<?=$divisiones->baja?>"><?=$divisiones->baja?></a>
                    <?php endif; ?>
                </td>
                <td><?=$divisiones->teamleader == NULL ? "N/D" : $divisiones->teamleader?></td>
            </tr>
        <?php endwhile;?>
</table>