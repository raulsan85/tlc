<h1>Tabla de páginas con el plugin <?=$plug?></h1>
<table>
    <tr>
        <th>Web</th>
    </tr>
        <?php while($plugins = $todos_plugins->fetch_object()): ?>
            <tr>
                <td><a href="<?=base_url?>general/pagina&id=<?=$plugins->web_id?>"><?=$plugins->url?></a></td>
            </tr>
        <?php endwhile;?>
</table>