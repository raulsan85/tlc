<h1>Tabla de Webs</h1>
<a href="<?=base_url?>cliente/preWeb">Añadir nueva Web</a><br/>
<table>
    <tr>
        <th>Web</th>
        <th>URL</th>
        <th>Año</th>
        <th>Servidor</th>       
    </tr>
        <?php while($webs = $todas_webs->fetch_object()): ?>
            <tr>
                <td><a href="<?=base_url?>general/pagina&id=<?=$webs->id?>"><?=$webs->web?></a></td>
                <td><?=$webs->url?></td>
                <td><?=$webs->ano == NULL ? "N/D" : $webs->ano ?></td>
                <td><?=$webs->servidor?></td>
            </tr>
        <?php endwhile;?>
</table>

