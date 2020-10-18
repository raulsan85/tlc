<h1>Tabla de Clientes</h1>
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
                <td><a href="<?=base_url?>general/pagina&id=<?=$clientes->id?>"><?=$clientes->nombre?></a></td>
                <td><?=$clientes->direccion == NULL ? "N/D" : $clientes->direccion?></td>
                <td><?=$clientes->codigo_postal == NULL ? "N/D" : $clientes->codigo_postal?></td>
                <td><?=$clientes->ciudad == NULL ? "N/D" : $clientes->ciudad?></td>
                <td><?=$clientes->provincia == NULL ? "N/D" : $clientes->provincia?></td>
                <td><?=$clientes->pais == NULL ? "N/D" : $clientes->pais?></td>
                <td><?=$clientes->fecha_alta == NULL ? "N/D" : $clientes->fecha_alta?></td>
                <td><?=$clientes->baja == NULL ? "N/D" : $clientes->baja?></td>
                <td><?=$clientes->division == NULL ? "N/D" : $clientes->division?></td>
                <td><?=$clientes->teamleader == NULL ? "N/D" : $clientes->teamleader?></td>
            </tr>
        <?php endwhile;?>
</table>