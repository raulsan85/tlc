<h1>Tabla de Clientes</h1>

<a href="<?=base_url?>cliente/crear">Añadir nuevo Cliente</a>
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
        <th>División</th>       
        <th>Teamleader</th>       
    </tr>
        <?php while($clientes = $todos_clientes->fetch_object()): ?>
            <tr>
                <td><a href="<?=base_url?>cliente/pagina&id=<?=$clientes->id?>"><?=$clientes->nombre?></a></td>
                <td><?=$clientes->direccion == NULL ? "N/D" : $clientes->direccion?></td>
                <td><?php if($clientes->codigo_postal == NULL): ?>
                        N/D
                    <?php else: ?>
                        <a href="<?=base_url?>cliente/codigo&cp=<?=$clientes->codigo_postal?>"><?=$clientes->codigo_postal?></a>
                    <?php endif; ?>
                </td>
                <td><?php if($clientes->ciudad == NULL): ?>
                        N/D
                    <?php else: ?>
                        <a href="<?=base_url?>cliente/ciudad&city=<?=$clientes->ciudad?>"><?=$clientes->ciudad?></a>
                    <?php endif; ?>
                </td>
                <td><?php if($clientes->provincia == NULL): ?>
                        N/D
                    <?php else: ?>
                        <a href="<?=base_url?>cliente/provincia&prov=<?=$clientes->provincia?>"><?=$clientes->provincia?></a>
                    <?php endif; ?>
                </td>
                <td><?=$clientes->pais == NULL ? "N/D" : $clientes->pais?></td>
                <td><?=$clientes->fecha_alta == NULL ? "N/D" : $clientes->fecha_alta?></td>
                <td><?php if($clientes->baja == NULL): ?>
                        N/D
                    <?php else: ?>
                        <a href="<?=base_url?>cliente/baja&est=<?=$clientes->baja?>"><?=$clientes->baja?></a>
                    <?php endif; ?>
                </td>
                <td><?php if($clientes->division == NULL): ?>
                        N/D
                    <?php else: ?>
                        <a href="<?=base_url?>cliente/division&div=<?=$clientes->division?>"><?=$clientes->division?></a>
                    <?php endif; ?>
                </td>
                <td><?=$clientes->teamleader == NULL ? "N/D" : $clientes->teamleader?></td>
            </tr>
        <?php endwhile;?>
</table>