<h1>Páginas destacadas</h1>

<table>
    <tr>
        <th>Id</th>
        <th>Web</th>
        <th>URL</th>
        <th>ID cliente</th>
        <th>Año Web</th>
        <th>Servidor</th>
    </tr>
    <?php while($una = $todas_webs->fetch_object()): ?>
    <tr>
        <td><?=$una->id;?></td>
        <td><?=$una->web;?></td>
        <td><?=$una->url;?></td>
        <td><?=$una->cliente_id;?></td>
        <td><?=$una->ano;?></td>
        <td><?=$una->servidor;?></td>
    </tr>
    <?php endwhile; ?>

</table>