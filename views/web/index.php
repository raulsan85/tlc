<h1>Tabla de Webs</h1>
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
                <td><a href="<?=base_url?>general/pagina&id=<?=$columna->id?>"><?=$columna->web?></a></td>
                <td><?=$columna->url?></td>
                <td><?=$columna->ano == NULL ? "N/D" : $columna->ano ?></td>
                <td><?=$columna->servidor?></td>
            </tr>
        <?php endfor;?>
</table>

