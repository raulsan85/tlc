<h1>Columnas de la tabla Web</h1>

<table>
    <tr>
        <th>Web</th>
    </tr>
    <?php while($una = $columna_web->fetch_object()): ?>
        <tr>
            <td><?=$una->web;?></td>
        </tr>
    <?php endwhile ?>
</table>
    

