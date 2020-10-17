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
        <?php for($i=1; $i<=$cantidad; $i++): ?>
                <?php $cliente->setId($i); ?>
                <?php $columna = $cliente->getOne(); ?>
            <tr>
                <td><a href="<?=base_url?>general/pagina&id=<?=$columna->id?>"><?=$columna->nombre?></a></td>
                <td><?=$columna->direccion == NULL ? "N/D" : $columna->direccion?></td>
                <td><?=$columna->codigo_postal == NULL ? "N/D" : $columna->codigo_postal?></td>
                <td><?=$columna->ciudad == NULL ? "N/D" : $columna->ciudad?></td>
                <td><?=$columna->provincia == NULL ? "N/D" : $columna->provincia?></td>
                <td><?=$columna->pais == NULL ? "N/D" : $columna->pais?></td>
                <td><?=$columna->fecha_alta == NULL ? "N/D" : $columna->fecha_alta?></td>
                <td><?=$columna->baja == NULL ? "N/D" : $columna->baja?></td>
                <td><?=$columna->division == NULL ? "N/D" : $columna->division?></td>
                <td><?=$columna->teamleader == NULL ? "N/D" : $columna->teamleader?></td>
            </tr>
        <?php endfor;?>
</table>