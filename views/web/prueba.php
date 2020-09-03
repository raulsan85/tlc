<table>
    <tr>
        <th>Web</th>
        <th>URL</th>
        <th>Año</th>
        <th>Servidor</th>
    </tr>
    <?php for($i=1; $i<=$cantidad; $i++): ?>
            <?php $web->setId($i); ?>
            <?php $columna = $web->getOne(); ?>
    <tr>
        <td><?=$columna->web?></td>
        <td><?=$columna->url?></td>
        <td><?=$columna->ano?></td>
        <td><?=$columna->servidor?></td>
    </tr>
    <?php endfor;?>
</table>
