<h1>Tabla de Plugins</h1>
<table>
    <tr>
        <th>Plugin</th>
        <th>Web</th>      
    </tr>
        <?php while($plugins = $todos_plugins->fetch_object()): ?>
            <tr>
                <td><?php if($plugins->plugin == NULL): ?>
                      N/D
                  <?php else: ?>
                      <a href="<?=base_url?>plugin/plugins&plug=<?=$plugins->plugin?>"><?=$plugins->plugin?></a>
                  <?php endif; ?>
                </td>
                <td><a href="<?=base_url?>plugin/pagina&id=<?=$plugins->web_id?>"><?=$plugins->web?></a></td>

            </tr>
        <?php endwhile;?>
</table>
