<h1>Tabla de páginas con el dato estructurado <?=$data?></h1>
<table>
    <tr>
        <th>Web</th>
    </tr>
        <?php while($datos = $todos_datos->fetch_object()): ?>
            <tr>
                <td><a href="<?=base_url?>general/pagina&id=<?=$datos->web_id?>"><?=$datos->url?></a></td>
            </tr>
        <?php endwhile;?>
</table>